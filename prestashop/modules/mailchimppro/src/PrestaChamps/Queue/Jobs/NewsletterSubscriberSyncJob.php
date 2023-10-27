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
use Tools;
use PrestaChamps\MailchimpPro\Commands\NewsletterSubscriberSyncCommand;
use PrestaChamps\Queue\JobInterface;

class NewsletterSubscriberSyncJob implements JobInterface
{
    public $newsletterSubscriber;
    protected $updateSubscriptionStatus;
    protected $syncMode;
    protected $method;

    public function execute()
    {
        $newsletterSubscribers = [$this->newsletterSubscriber];
        $command = new NewsletterSubscriberSyncCommand(
            Context::getContext(),
            Module::getInstanceByName('mailchimppro')->getApiClient(),
            $newsletterSubscribers
        );

        if (isset($this->updateSubscriptionStatus)) {
            $command->setUpdateSubscriptionStatus($this->updateSubscriptionStatus);
        }

        if (isset($this->syncMode) && $this->syncMode) {
            $command->setSyncMode($this->syncMode);
        }
        else {
            $command->setSyncMode($command::SYNC_MODE_REGULAR);
        }

        if (isset($this->method) && $this->method) {
            $command->setMethod($this->method);
        }
        else {
            $command->setMethod($command::SYNC_METHOD_PUT);
        }

        return $command->execute();
    }

    /**
     * Set sync mode
     *
     * @param string $syncMode
     */
    public function setSyncMode($syncMode = NewsletterSubscriberSyncCommand::SYNC_MODE_REGULAR)
    {
        $this->syncMode = $syncMode;
    }

    /**
     * Set update subscription status
     *
     * @param bool $update
     */
    public function setUpdateSubscriptionStatus($update = true)
    {
        $this->updateSubscriptionStatus = (bool)$update;
    }

    /**
     * Set sync method
     *
     * @param string $method
     */
    public function setMethod($method = NewsletterSubscriberSyncCommand::SYNC_METHOD_PUT)
    {
        $this->method = $method;
    }

    public function getJobType()
    {
        return "newsletterSubscriber";
    }

    public function getJobId()
    {
        return isset($this->newsletterSubscriber['id']) ? $this->newsletterSubscriber['id'] : crc32($this->newsletterSubscriber['email']);
    }
}
