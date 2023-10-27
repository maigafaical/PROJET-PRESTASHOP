<?php
/**
 * MailChimp
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

if (!defined('_PS_VERSION_'))
    exit;

use PrestaChamps\Queue\Queue;

class MailchimpproCronjobModuleFrontController extends ModuleFrontController
{
    public $auth = false;

    /** @var bool */
    public $ajax;

    public function display()
    {
        if(Configuration::get(MailchimpProConfig::CRONJOB_BASED_SYNC)){

            $this->ajax = 1;
            $queue = new Queue();
            $queue->runCronjob();
        
        }else{
            // echo "Hook based configuration!";
        }

    }
}
