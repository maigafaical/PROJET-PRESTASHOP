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

/**
 * Class AdminMailchimpProTagsController
 *
 * @property Mailchimppro $module
 */

use PrestaChamps\MailchimpPro\Controllers\BaseMCObjectController;

class AdminMailchimpProTagsController extends BaseMCObjectController
{
	public $entityPlural   = 'tags';
    public $entitySingular = 'tag';
	protected $fields_form;
	protected $listId;
	
	/**
     * AdminMailchimpProTagsController constructor.
     *
     * @throws \PrestaShopException
     * @throws \Exception
     */
    public function __construct()
    {
        parent::__construct();
        /* if (!\Configuration::get(\MailchimpProConfig::MAILCHIMP_API_KEY) || !\Configuration::get(\MailchimpProConfig::MAILCHIMP_LIST_ID) || !\Configuration::get(\MailchimpProConfig::MAILCHIMP_STORE_SYNCED)) {
			\Tools::redirectAdmin($this->context->link->getAdminLink('AdminMailchimpProConfiguration'));
		} */
        if ($this->mailchimp) {
            /* $this->queryParameters['key'] = \Configuration::get(MailchimpProConfig::MAILCHIMP_API_KEY); */
            $this->listId = $this->getListIdFromStore();
            $this->fields_form = [
                'tinymce' => false,
                'legend' => [
                    'title' => $this->l('Create new tag'),
                    'icon' => 'icon-pencil'
                ],
                'input' => [
                    [
                        'type' => 'select',
                        'name' => 'tagOperator',
                        'label' => $this->l('Operator'),
                        'desc' => $this->l('Customer total order value'),
                        'default_value' => '=',
                        'options' => [
                            'query' => [
                                ['id' => '=', 'name' => '='],
                                ['id' => '<', 'name' => '<'],
                                ['id' => '>', 'name' => '>'],							
                                ['id' => '>=', 'name' => '>='],
                                ['id' => '<=', 'name' => '<=']
                            ],
                            'id' => 'id',
                            'name' => 'name',
                        ],
                        'col' => 12,
                        'required' => true,
                    ],
                    [
                        'type' => 'text',
                        'label' => $this->l('Value'),
                        'desc' => $this->l('as'),
                        'name' => 'orderTotalValue',
                        'lang' => false,
                        'col' => 12,
                        'required' => true,
                    ],				
                    [
                        'type' => 'text',
                        'label' => $this->l('Tag name'),
                        'desc' => $this->l('add tag'),
                        'name' => 'tagName',
                        'lang' => false,
                        'col' => 12,
                        'required' => true,
                    ],
                ],
                'submit' => [
                    'title' => $this->l('Save and send to Mailchimp'),
                    'name' => 'createTag'
                ],
            ];
        }
    }
	
	protected function getListApiEndpointUrl()
    {
        //return '/tags/list';
		return "/lists/" . $this->listId . "/segments";
    }

    protected function getSingleApiEndpointUrl($entityId)
    {
        return "/tags/info";
    }
	
	/**
     * @return mixed
     * @throws \PrestaChamps\MailchimpPro\Exceptions\MailChimpException
     * @throws \Exception
     */
	/* protected function getEntities()
    {
        if (!$this->mailchimp) {
            return [];
        }

		$this->queryParameters['type'] = 'static';
		
		$result = $this->mailchimp->get(
            $this->getListApiEndpointUrl(),
            $this->queryParameters
        );
		
		if ($this->mailchimp->success()) {
            return $result['segments'];
        }

        throw new \PrestaChamps\MailchimpPro\Exceptions\MailChimpException($this->mailchimp->getLastError());
		
        /* $result = $this->mailchimp->post(
            $this->getListApiEndpointUrl(),
            $this->queryParameters
        ); */

//dump($result);die();

        /* if ($this->mailchimp->success()) {
			
            return $result;
        }


        throw new \PrestaChamps\MailchimpPro\Exceptions\MailChimpException($this->mailchimp->getLastError()); */
    /*} */
	
	protected function getEntities()
    {
        if (!$this->mailchimp) {
            return [];
        }
		
		$this->queryParameters['type'] = 'static';
		$this->queryParameters['count'] = $this->entitiesPerPage;
		$this->queryParameters['offset'] = ($this->currentPage - 1) * $this->entitiesPerPage;

		
        $result = $this->mailchimp->get(
            $this->getListApiEndpointUrl(),
            $this->queryParameters,
            999
        );
		
		unset($this->queryParameters['count']);
		unset($this->queryParameters['offset']);
unset($this->queryParameters['type']);
//dump($result);die();

        if ($this->mailchimp->success()) {
            $this->totalEntities = $result['total_items'];

            $this->totalPageNumber = ceil($this->totalEntities / $this->entitiesPerPage);
			
			foreach ($result['segments'] as &$segment) {				
				$segment['editable'] = true;
			}

            return $result['segments'];
        }

        throw new \PrestaChamps\MailchimpPro\Exceptions\MailChimpException($this->mailchimp->getLastError());
    }
	
	/* public function processEntityDelete()
    {
        $entityName = \Tools::getValue('entity_name', false);

        if ($entityName) {
            if ($this->deleteEntity($entityName)) {
                $this->confirmations[] = $this->module->l('Entity deleted');
            } else {
                $this->errors[] = $this->module->l('Could not delete the entity');
            }
        }
    } */
	
	/* protected function deleteEntity($name)
    {
		$this->queryParameters['tag'] = $name;
        $this->mailchimp->post("/tags/delete",$this->queryParameters);

        if ($this->mailchimp->success()) {
            return true;
        }

        return false;
    } */
	
	protected function deleteEntity($id)
    {
        $this->mailchimp->delete("/lists/" . $this->listId . "/segments/{$id}");

        if ($this->mailchimp->success()) {
            return true;
        }

        return false;
    }	
	
	/**
     * @throws \SmartyException
     */
    /* public function processEntityAdd()
    {
		//dump($this->renderForm());
        // $this->content .= $this->renderForm();
		//$result = $this->mailchimp->post('/templates', ['name'=>'import', 'html'=>'']);
    } */
	
	/**
     * Object creation.
     *
     * @return ObjectModel|false
     *
     * @throws PrestaShopException
     */
    public function processAdd()
    {
		$tagOperator = \Tools::getValue('tagOperator');
		if (\Tools::strlen($tagOperator) == 0) {
			$this->errors[] = $this->l('The tag operator is required');
		}
		
		$orderTotalValue = \Tools::getValue('orderTotalValue');
		if (\Tools::strlen($orderTotalValue) == 0) {
			$this->errors[] = $this->l('The tag order total value is required');
		}
		
		$tagName = \Tools::getValue('tagName');
		if (\Tools::strlen($tagName) == 0) {
			$this->errors[] = $this->l('The tag name is required');
		}		
		
		//dump($orderTotalValue);die();
		
        if ($tagOperator && $orderTotalValue >=0 && $tagName) {			
			if ($customerIds = $this->getCustomersByOrderValue($tagOperator, $orderTotalValue)) {
				if ($response = $this->createTag($customerIds, $tagName)) {
					$this->confirmations[] = $this->l('Tag created successfully');
					$this->redirect_after = self::$currentIndex . '&conf=3&token=' . $this->token;
				} else {
					$this->errors[] = $this->l('Oups! Failed to create tag');
				}
			}
            else {
				$this->errors[] = $this->l('No customer match for the selected criteria.');
			}

        }
		
		$this->action = null;
	}
	
	private function getCustomersByOrderValue($tagOperator, $orderTotalValue) {
		
		$dbquery = new \DbQuery();
        $dbquery->select('c.`id_customer`, sum(o.`total_paid_tax_incl`) AS `ordertotal`');
        $dbquery->from('customer', 'c');
        $dbquery->leftJoin('orders', 'o', 'o.`id_customer` = c.`id_customer`');
		if ($orderTotalValue === 0 || $orderTotalValue === '0') {
			$dbquery->where('o.`total_paid_tax_incl` IS NULL');
		}
		else {
			$dbquery->where('o.`total_paid_tax_incl` '. $tagOperator .' '. $orderTotalValue);
		}		
		$dbquery->where('c.active IN (' . implode(',', \MailchimpProConfig::getConfigurationValues()[\MailchimpProConfig::CUSTOMER_SYNC_FILTER_ENABLED]) . ')');
		$dbquery->where('c.newsletter IN (' . implode(',', \MailchimpProConfig::getConfigurationValues()[\MailchimpProConfig::CUSTOMER_SYNC_FILTER_NEWSLETTER]) . ')');
		$dbquery->groupBy('c.`id_customer`');
		
		return array_column(\Db::getInstance()->executeS($dbquery->build()), 'id_customer');
	}
	
	/**
     * @param $templateName
	 * @param $templateContent
     *
     * @return array|false
     * @throws Exception
     */
    private function createTag($customerIds, $tagName)
    {

		foreach ($customerIds as $customerId) {
			$customer = new Customer($customerId);

			$listMemberTagFormatter = new \PrestaChamps\MailchimpPro\Formatters\ListMemberTagFormatter(
				$customer,
				$this->context,
				$tagName,
				\PrestaChamps\MailchimpPro\Formatters\ListMemberTagFormatter::STATUS_ACTIVE
			);
			//var_dump($listMemberTagFormatter->format()['tags']);
			$hash = md5(Tools::strtolower($customer->email));
			$this->mailchimp->post("/lists/{$this->listId}/members/{$hash}/tags", $listMemberTagFormatter->format());
		}
		
		return true;
    }
	
	protected function renderEntityList()
    {
		if ($this->fields_form && is_array($this->fields_form)) {			
			$this->context->smarty->assign(['add_form' => $this->renderForm()]);			
		}
		
		parent::renderEntityList();
		
		/* $this->context->smarty->assign([$this->entityPlural => $this->getEntities()]);
		
        $this->content .= $this->context->smarty->fetch(
            $this->module->getLocalPath() . "views/templates/admin/entity_list/{$this->entityPlural}.tpl"
        ); */
    }
	
	/**
     * Get list ID from store
     *
     * @return string
     */
    protected function getListIdFromStore()
    {
        /* $shopId = \Mailchimppro::shopIdTransformer($this->context->shop);
        $listId = $this->mailchimp->get("/ecommerce/stores/{$shopId}", ['fields' => 'list_id']); */
        $listId = $this->mailchimp->get("/ecommerce/stores/{$this->getShopId()}", ['fields' => 'list_id']);

        if (isset($listId['list_id']) && $this->mailchimp->success()) {
            return $listId['list_id'];
        }

        throw new UnexpectedValueException("Can't determine LIST id from store");
    }
}