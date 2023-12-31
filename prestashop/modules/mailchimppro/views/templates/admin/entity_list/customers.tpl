{*
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
 *}
<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>{l s='ID' mod='mailchimppro'}</th>
            <th>{l s='Email' mod='mailchimppro'}</th>
            <th>{l s='Name' mod='mailchimppro'}</th>
            <th>{l s='Orders' mod='mailchimppro'}</th>
            <th>{l s='Opt in status' mod='mailchimppro'}</th>
            <th>{l s='Total orders' mod='mailchimppro'}</th>
            <th>{l s='Actions' mod='mailchimppro'}</th>
        </tr>
        </thead>
        <tbody>
        {foreach $customers as $customer}
            <tr>
                <td>{$customer.id|escape:'htmlall':'UTF-8'}</td>
                <td>{$customer.email_address|escape:'htmlall':'UTF-8'}</td>
                <td>{$customer.first_name|escape:'htmlall':'UTF-8'} {$customer.last_name|escape:'htmlall':'UTF-8'}</td>
                <td>{$customer.orders_count|escape:'htmlall':'UTF-8'}</td>
                <td>{$customer.opt_in_status|var_export:true|escape:'htmlall':'UTF-8'}</td>
                <td>{$customer.total_spent|escape:'htmlall':'UTF-8'}</td>
                <td>
					<div class="btn-group btn-group-xs">
						<a class="btn btn-default" href="{LinkHelper::getAdminLink('AdminMailchimpProCustomers', true, [], ['action' => 'entitydelete', 'entity_id' => $customer.id])|escape:'htmlall':'UTF-8'}" title="{l s='Delete' mod='mailchimppro'}">
							<i class="icon icon-trash" aria-hidden="true"></i>
							<span>{l s='Delete' mod='mailchimppro'}</span>
						</a>
					</div>
                </td>
            </tr>
        {/foreach}
        </tbody>
    </table>
</div>