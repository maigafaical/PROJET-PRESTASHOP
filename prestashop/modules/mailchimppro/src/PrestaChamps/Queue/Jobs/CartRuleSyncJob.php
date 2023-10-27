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
use PrestaChamps\MailchimpPro\Commands\CartRuleSyncCommand;
use PrestaChamps\Queue\JobInterface;
use PrestaChamps\PrestaShop\Traits\ShopIdTrait;

class CartRuleSyncJob implements JobInterface
{
    use ShopIdTrait;
    
    public $cartRuleId;
    protected $syncMode;
    protected $method;

    public function execute()
    {
        $objects = [];

        $object = new \CartRule($this->cartRuleId, Context::getContext()->language->id, Context::getContext()->shop->id);
        if (\Validate::isLoadedObject($object)) {
            $objects[] = $object;
        }
        $command = new CartRuleSyncCommand(
            Context::getContext(),
            Module::getInstanceByName('mailchimppro')->getApiClient(),
            $objects
        );

        if (isset($this->syncMode) && $this->syncMode) {
            $command->setSyncMode($this->syncMode);
        } else {
            $command->setSyncMode($command::SYNC_MODE_REGULAR);
        }

        if (isset($this->method) && $this->method) {
            $command->setMethod($this->method);
        } else {
            $command->setMethod(
                $command->getCartRuleExists($this->cartRuleId)
                ? $command::SYNC_METHOD_PATCH
                : $command::SYNC_METHOD_POST
            );
        }

        /* $command->setMethod($command::SYNC_METHOD_POST);
        $responses[] = $command->execute();
        $command->setMethod($command::SYNC_METHOD_PATCH);
        $responses[] = $command->execute(); */

        return $command->execute();
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
        return "cartRule";
    }

    public function getJobId()
    {
        return $this->cartRuleId;
    }
}
