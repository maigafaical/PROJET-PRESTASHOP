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

namespace PrestaChamps\MailchimpPro\Formatters;

/**
 * Class CustomerFormatter
 *
 * @package PrestaChamps\MailchimpPro\Formatters
 */
class CustomerFormatter
{
    public $customer;
    public $address;
    public $context;
    protected $updateSubscriptionStatus = true;

    /**
     * CustomerFormatter constructor.
     *
     * @param \Customer $customer
     * @param \Context  $context
     * @param \Address  $address
     * @param  bool     $updateSubscriptionStatus
     */
    public function __construct(\Customer $customer, \Context $context, \Address $address = null, $updateSubscriptionStatus = true)
    {
        $this->customer = $customer;
        $this->address = $address;
        $this->context = $context;
        $this->updateSubscriptionStatus = $updateSubscriptionStatus;
    }

    /**
     * Set updateSubscriptionStatus feature
     *
     * @param bool $update
     */
    public function setUpdateSubscriptionStatus($update = true)
    {
        $this->updateSubscriptionStatus = (bool)$update;
    }

    /**
     * @return array
     * @throws \PrestaShopDatabaseException
     * @todo Improve this spaghetti
     *
     */
    public function format()
    {
        $data = [
            'id' => (string)$this->customer->id,
            'email_address' => $this->customer->email,
            //'opt_in_status' => $this->customer->optin || $this->customer->newsletter,
            'first_name' => $this->customer->firstname,
            'last_name' => $this->customer->lastname,
        ];

        if ($this->updateSubscriptionStatus) {
            //$data['opt_in_status'] = $this->customer->optin || $this->customer->newsletter;
            $data['opt_in_status'] = (bool)$this->customer->newsletter;
        }

        if (!$this->address) {
            $this->clearCustomerAddressesCache();
            $addresses = $this->customer->getAddresses(\Configuration::get('PS_LANG_DEFAULT'));
			if (!empty($addresses)) {
				$address = reset($addresses);
				$this->address = new \Address($address['id_address'], \Configuration::get('PS_LANG_DEFAULT'));
			}
        }

		if ($this->address) {
			$data['address'] = (object)(new AddressFormatter($this->address, $this->context))->format();
		}
        else {
            $data['address'] = (object) AddressFormatter::DEFAULT_EMPTY_ADDRESS;
        }

        //if (!empty($this->customer->company)) {
            $data['company'] = !empty($this->customer->company) ? $this->customer->company : '';
        //}

        $sql = 'SELECT count(o.id_order) as ordercnt, sum(o.total_paid) as ordertotal
		        FROM ' . _DB_PREFIX_ . 'customer c
				LEFT JOIN ' . _DB_PREFIX_ . 'orders o ON (o.id_customer = c.id_customer)
				WHERE (c.id_customer = ' . pSQL($this->customer->id) . ') GROUP BY o.id_customer';

        $sql_result = \Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);

        $data['orders_count'] = (int)$sql_result[0]['ordercnt'];
        $data['total_spent'] = (isset($sql_result[0]['ordertotal']) ? $sql_result[0]['ordertotal'] : 0.0);

        return $data;
    }

    /**
     * Clears the customer addresses cache
     */
    protected function clearCustomerAddressesCache() {
        $group = $this->context->shop->getGroup();
        $shareOrder = isset($group->share_order) ? (bool) $group->share_order : false;
        $cacheId = 'Customer::getAddresses'
            . '-' . (int) $this->customer->id
            . '-' . (int) \Configuration::get('PS_LANG_DEFAULT')
            . '-' . ($shareOrder ? 1 : 0);

        \Cache::clean($cacheId);
    }
}
