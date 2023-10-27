<?php
/**
 * PrestaChamps
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Commercial License
 * you can't distribute, modify or sell this code
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file
 * If you need help please contact leo@prestachamps.com
 *
 * @author    Mailchimp
 * @copyright Mailchimp
 * @license   commercial
 */

namespace PrestaChamps\Queue\Jobs;

use Context;
use Module;
use Cart;
use Validate;
use PrestaChamps\MailchimpPro\Commands\CartSyncCommand;
use PrestaChamps\Queue\JobInterface;
use PrestaChamps\MailchimpPro\Exceptions\MailChimpException;
use PrestaShopDatabaseException;
use PrestaShopException;
use PrestaChamps\PrestaShop\Traits\ShopIdTrait;

class CartSyncJob implements JobInterface
{
    use ShopIdTrait;

    public $cartId;
    protected $campaignId = null;
    protected $syncMode;
    protected $method;

    /**
     * @throws PrestaShopException
     * @throws MailChimpException
     * @throws PrestaShopDatabaseException
     */
    public function execute()
    {
        if ($this->cartId) {
            $cart = new Cart($this->cartId);
            if (Validate::isLoadedObject($cart)) {
                $command = new CartSyncCommand(
                    Context::getContext(),
                    Module::getInstanceByName('mailchimppro')->getApiClient(),
                    [$this->cartId]
                );

                if (isset($this->syncMode) && $this->syncMode) {
                    $command->setSyncMode($this->syncMode);
                } else {
                    $command->setSyncMode($command::SYNC_MODE_REGULAR);
                }

                if (isset($this->method) && $this->method) {
                    $command->setMethod($this->method);
                } else {
                    //if ($command->getCartExists($this->cartId)) {
                    $command->setMethod($command::SYNC_METHOD_DELETE);
                    $command->execute();
                    //}
                    if ($cart->nbProducts() && !$cart->orderExists()) {
                        $command->setMethod($command::SYNC_METHOD_POST);
                        if (isset($this->campaignId) && $this->campaignId) {
                            $command->setCampaignId($this->campaignId);
                        }
                        return $command->execute();
                    }
                }

                return ['requestSuccess' => true];
            }
        }

        return ['requestSuccess' => false];
    }

    /**
     * Set campaignId feature
     *
     * @param string $campaign_id
     */
    public function setCampaignId($campaign_id = null)
    {
        $this->campaignId = $campaign_id;
    }

    /**
     * Set sync mode
     *
     * @param string $syncMode
     */
    public function setSyncMode($syncMode = CartSyncCommand::SYNC_MODE_REGULAR)
    {
        $this->syncMode = $syncMode;
    }

    /**
     * Set sync method
     *
     * @param string $method
     */
    public function setMethod($method = CartSyncCommand::SYNC_METHOD_PUT)
    {
        $this->method = $method;
    }

    public function getJobType()
    {
        return "cart";
    }

    public function getJobId()
    {
        return $this->cartId;
    }
}
