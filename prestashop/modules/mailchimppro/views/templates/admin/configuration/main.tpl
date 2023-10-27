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
<script src="https://unpkg.com/vue@3"></script>
<script src="https://cdn.jsdelivr.net/npm/@vueform/multiselect@2.5.2/dist/multiselect.global.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@vueform/multiselect@2.5.2/themes/default.css">
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="{{$mainJsPath}}" type="module"></script>

<link rel="stylesheet"
      href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
<style>
    #side-menu * {
        cursor: pointer;
    }

    .multiselect-tags .form-control,
    .multiselect-tags input[type="text"],
    .multiselect-tags input[type="search"],
    .multiselect-tags input[type="password"],
    .multiselect-tags textarea,
    .multiselect-tags select {
        height: unset;
        display: unset;
        width: unset;
        padding: unset;
        font-size: unset;
        line-height: unset;
        color: unset;
        background-color: unset;
        background-image: unset;
        border: unset;
        border-radius: unset;
        -webkit-transition: unset;
        transition: unset;
    }

    .btn-primary {
        text-transform: unset !important;
    }

    body {
        --ms-tag-bg: #1e94ab;
        --ms-option-bg-selected: #1e94ab;
    }
    #app h2 {
        margin-top: 0;
    }
</style>
<div id="app" data-v-app="" class="mailchimp-pro-content-container">
	<div id="loader-container" :class="(isSaving == true || showLoader == true) ? 'visible' : ''">
		<div class="loader"></div>
	</div>
	{include file="../config/navbar.tpl"}
    <div class="alert alert-info" v-show="isSaving">
        {l s='Saving settings...' mod='mailchimppro'}
    </div>
    <div class="row">
        <div class="col-md-3 side-col">
            <ul class="list-group" id="side-menu">
                <li class="list-group-item d-flex justify-content-between align-items-center"
                    :class="currentPage === 'accountInfo' ?  'active' :''"
                    v-on:click="setCurrentPage('accountInfo')">
                    <i class="las la-user-cog la-2x"></i>
                    {l s='Account info' mod='mailchimppro'}
                </li>
                {if isset($validApiKey) && $validApiKey}
                    <li class="list-group-item d-flex justify-content-between align-items-center"
                        v-show="validApiKey"
                        :class="currentPage === 'products' ?  'active' :''"
                        v-on:click="setCurrentPage('products')">
                        <i class="las la-boxes la-2x"></i>
                        {l s='Products' mod='mailchimppro'}
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center"
                        v-show="validApiKey"
                        :class="currentPage === 'customers' ?  'active' :''"
                        v-on:click="setCurrentPage('customers')">
                        <i class="las la-users  la-2x"></i>
                        {l s='Customers' mod='mailchimppro'}
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center"
                        v-show="validApiKey"
                        :class="currentPage === 'vouchers' ?  'active' :''"
                        v-on:click="setCurrentPage('vouchers')">
                        <i class="las la-ruler-combined la-2x"></i>
                        {l s='Cart rules' mod='mailchimppro'}
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center"
                        v-show="validApiKey"
                        :class="currentPage === 'orders' ?  'active' :''"
                        v-on:click="setCurrentPage('orders')">
                        <i class="las la-shopping-cart la-2x"></i>
                        {l s='Orders' mod='mailchimppro'}
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center"
                        v-show="validApiKey"
                        :class="currentPage === 'carts' ?  'active' :''"
                        v-on:click="setCurrentPage('carts')">
                        <i class="las la-cart-arrow-down la-2x"></i>
                        {l s='Abandoned carts' mod='mailchimppro'}
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center"
                        v-show="validApiKey"
                        :class="currentPage === 'advanced-settings' ?  'active' :''"
                        v-on:click="setCurrentPage('advanced-settings')">
                        <i class="las la-cog la-2x"></i>
                        {l s='Advanced settings' mod='mailchimppro'}
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center"
                        v-show="validApiKey"
                        :class="currentPage === 'sync' ?  'active' :''"
                        v-on:click="setCurrentPage('sync')">
                        <i class="las la-save la-2x"></i>
                       {l s='Store sync' mod='mailchimppro'}
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center"
                        v-show="validApiKey"
                        :class="currentPage === 'cronjob' ?  'active' :''"
                        v-on:click="setCurrentPage('cronjob')">
                        <i class="las la-clock la-2x"></i>
                        {l s='Cronjob' mod='mailchimppro'}
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center"
                        v-show="validApiKey"
                        :class="currentPage === 'faq' ?  'active' :''"
                        v-on:click="setCurrentPage('faq')">
                        <i class="las la-question-circle la-2x"></i>
                        {l s='FAQs' mod='mailchimppro'}
                    </li>
                {/if}
            </ul>
        </div>
        <div class="col-md-9">
            <div class="row">
                {include file="./_account-info.tpl"}
                {if isset($validApiKey) && $validApiKey}
                    {include file="./_products.tpl"}
                    {include file="./_customers.tpl"}
                    {include file="./_vouchers.tpl"}
                    {include file="./_orders.tpl"}
                    {include file="./_carts.tpl"}
                    {include file="./_advanced.tpl"}
                    {include file="./_sync.tpl"}
                    {include file="./_cronjob.tpl"}
                    {include file="./_faq.tpl"}
                {/if}
            </div>
        </div>
    </div>
</div>
