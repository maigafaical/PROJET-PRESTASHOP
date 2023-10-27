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
use PrestaChamps\MailchimpPro\Commands\CustomerSyncCommand;
use PrestaChamps\Queue\JobInterface;

class CustomerSyncJob implements JobInterface
{
    public $customerId;
    protected $triggerDoubleOptIn;
    protected $updateSubscriptionStatus;
    protected $syncMode;
    protected $method;

    public function execute()
    {
        $customerIds = [$this->customerId];
        $command = new CustomerSyncCommand(
            Context::getContext(),
            Module::getInstanceByName('mailchimppro')->getApiClient(),
            $customerIds
        );

        if (isset($this->triggerDoubleOptIn)) {
            $command->triggerDoubleOptIn($this->triggerDoubleOptIn);
        }

        if (isset($this->updateSubscriptionStatus)) {
            $command->setUpdateSubscriptionStatus($this->updateSubscriptionStatus);
        }

        if (isset($this->syncMode) && $this->syncMode) {
            $command->setSyncMode($this->syncMode);
        } else {
            $command->setSyncMode($command::SYNC_MODE_REGULAR);
        }

        if (isset($this->method) && $this->method) {
            $command->setMethod($this->method);
        } else {
            $command->setMethod($command::SYNC_METHOD_PUT);
        }

        return $command->execute();
    }

    /**
     * Trigger DoubleOptIn feature
     *
     * @param bool $trigger
     */
    public function triggerDoubleOptIn($trigger = true)
    {
        $this->triggerDoubleOptIn = (bool)$trigger;
    }

    /**
     * Set update subscription status
     *
     * @param bool $updateSubscriptionStatus
     */
    public function setUpdateSubscriptionStatus($update = true)
    {
        $this->updateSubscriptionStatus = (bool)$update;
    }

    /**
     * Set sync mode
     *
     * @param string $syncMode
     */
    public function setSyncMode($syncMode = CustomerSyncCommand::SYNC_MODE_REGULAR)
    {
        $this->syncMode = $syncMode;
    }

    /**
     * Set sync method
     *
     * @param string $method
     */
    public function setMethod($method = CustomerSyncCommand::SYNC_METHOD_PUT)
    {
        $this->method = $method;
    }

    public function getJobType()
    {
        return "customer";
    }

    public function getJobId()
    {
        return $this->customerId;
    }
}
