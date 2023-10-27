<?php
/* Smarty version 4.3.1, created on 2023-10-26 16:25:32
  from 'C:\xampp\htdocs\prestashop\modules\mailchimppro\views\templates\admin\configuration\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_653a92fc750b63_44300510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49c25503071114d97b4bbdaf92f98465d49c593f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\mailchimppro\\views\\templates\\admin\\configuration\\main.tpl',
      1 => 1695984476,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../config/navbar.tpl' => 1,
    'file:./_account-info.tpl' => 1,
    'file:./_products.tpl' => 1,
    'file:./_customers.tpl' => 1,
    'file:./_vouchers.tpl' => 1,
    'file:./_orders.tpl' => 1,
    'file:./_carts.tpl' => 1,
    'file:./_advanced.tpl' => 1,
    'file:./_sync.tpl' => 1,
    'file:./_cronjob.tpl' => 1,
    'file:./_faq.tpl' => 1,
  ),
),false)) {
function content_653a92fc750b63_44300510 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="https://unpkg.com/vue@3"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/@vueform/multiselect@2.5.2/dist/multiselect.global.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@vueform/multiselect@2.5.2/themes/default.css">
<?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"><?php echo '</script'; ?>
>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<?php echo '<script'; ?>
 src="https://unpkg.com/axios/dist/axios.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['mainJsPath']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
" type="module"><?php echo '</script'; ?>
>

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
	<?php $_smarty_tpl->_subTemplateRender("file:../config/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="alert alert-info" v-show="isSaving">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Saving settings...','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

    </div>
    <div class="row">
        <div class="col-md-3 side-col">
            <ul class="list-group" id="side-menu">
                <li class="list-group-item d-flex justify-content-between align-items-center"
                    :class="currentPage === 'accountInfo' ?  'active' :''"
                    v-on:click="setCurrentPage('accountInfo')">
                    <i class="las la-user-cog la-2x"></i>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Account info','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

                </li>
                <?php if ((isset($_smarty_tpl->tpl_vars['validApiKey']->value)) && $_smarty_tpl->tpl_vars['validApiKey']->value) {?>
                    <li class="list-group-item d-flex justify-content-between align-items-center"
                        v-show="validApiKey"
                        :class="currentPage === 'products' ?  'active' :''"
                        v-on:click="setCurrentPage('products')">
                        <i class="las la-boxes la-2x"></i>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Products','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center"
                        v-show="validApiKey"
                        :class="currentPage === 'customers' ?  'active' :''"
                        v-on:click="setCurrentPage('customers')">
                        <i class="las la-users  la-2x"></i>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customers','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center"
                        v-show="validApiKey"
                        :class="currentPage === 'vouchers' ?  'active' :''"
                        v-on:click="setCurrentPage('vouchers')">
                        <i class="las la-ruler-combined la-2x"></i>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cart rules','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center"
                        v-show="validApiKey"
                        :class="currentPage === 'orders' ?  'active' :''"
                        v-on:click="setCurrentPage('orders')">
                        <i class="las la-shopping-cart la-2x"></i>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Orders','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center"
                        v-show="validApiKey"
                        :class="currentPage === 'carts' ?  'active' :''"
                        v-on:click="setCurrentPage('carts')">
                        <i class="las la-cart-arrow-down la-2x"></i>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Abandoned carts','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center"
                        v-show="validApiKey"
                        :class="currentPage === 'advanced-settings' ?  'active' :''"
                        v-on:click="setCurrentPage('advanced-settings')">
                        <i class="las la-cog la-2x"></i>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Advanced settings','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center"
                        v-show="validApiKey"
                        :class="currentPage === 'sync' ?  'active' :''"
                        v-on:click="setCurrentPage('sync')">
                        <i class="las la-save la-2x"></i>
                       <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Store sync','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center"
                        v-show="validApiKey"
                        :class="currentPage === 'cronjob' ?  'active' :''"
                        v-on:click="setCurrentPage('cronjob')">
                        <i class="las la-clock la-2x"></i>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cronjob','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center"
                        v-show="validApiKey"
                        :class="currentPage === 'faq' ?  'active' :''"
                        v-on:click="setCurrentPage('faq')">
                        <i class="las la-question-circle la-2x"></i>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'FAQs','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

                    </li>
                <?php }?>
            </ul>
        </div>
        <div class="col-md-9">
            <div class="row">
                <?php $_smarty_tpl->_subTemplateRender("file:./_account-info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php if ((isset($_smarty_tpl->tpl_vars['validApiKey']->value)) && $_smarty_tpl->tpl_vars['validApiKey']->value) {?>
                    <?php $_smarty_tpl->_subTemplateRender("file:./_products.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php $_smarty_tpl->_subTemplateRender("file:./_customers.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php $_smarty_tpl->_subTemplateRender("file:./_vouchers.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php $_smarty_tpl->_subTemplateRender("file:./_orders.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php $_smarty_tpl->_subTemplateRender("file:./_carts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php $_smarty_tpl->_subTemplateRender("file:./_advanced.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php $_smarty_tpl->_subTemplateRender("file:./_sync.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php $_smarty_tpl->_subTemplateRender("file:./_cronjob.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php $_smarty_tpl->_subTemplateRender("file:./_faq.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php }?>
            </div>
        </div>
    </div>
</div>
<?php }
}
