<?php
/* Smarty version 4.3.1, created on 2023-10-26 16:25:32
  from 'C:\xampp\htdocs\prestashop\modules\mailchimppro\views\templates\admin\config\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_653a92fc760615_82324430',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e57a9604471ad293616ec775cdf522e5220f9dd9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\mailchimppro\\views\\templates\\admin\\config\\navbar.tpl',
      1 => 1695984476,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_653a92fc760615_82324430 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row navbar-container">
    <div class="col-sm-6 hidden-xs">
        <img class="img-responsive mailchimp-logo" src="../modules/mailchimppro/views/img/logo-horizontal.png" height="440" width="2000">
    </div>
    <div class="col-sm-6">
        <div class="btn-group pull-right" role="group" style="height:100%; vertical-align:center;line-height : 100%;">
            <a class="btn btn-default btn-configuration" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( LinkHelper::getAdminLink('AdminMailchimpProConfiguration'),'htmlall','UTF-8' ));?>
">
                <i class="icon icon-gear" aria-hidden="true"></i>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Setup wizard','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

            </a>
            <a class="btn btn-default btn-syncronization hidden" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( LinkHelper::getAdminLink('AdminMailchimpProSync'),'htmlall','UTF-8' ));?>
">
                <i class="icon icon-retweet" aria-hidden="true"></i>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sync','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

            </a>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default btn-mc dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                    <i class="icon icon-folder-open-o" aria-hidden="true"></i>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mailchimp Objects','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( LinkHelper::getAdminLink('AdminMailchimpProBatches'),'htmlall','UTF-8' ));?>
">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Batches','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

                        </a>
                    </li>
                    <li>
                        <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( LinkHelper::getAdminLink('AdminMailchimpProCarts'),'htmlall','UTF-8' ));?>
">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carts','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

                        </a>
                    </li>
                    <li>
                        <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( LinkHelper::getAdminLink('AdminMailchimpProCustomers'),'htmlall','UTF-8' ));?>
">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customers','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

                        </a>
                    </li>
                    <li>
                        <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( LinkHelper::getAdminLink('AdminMailchimpProLists'),'htmlall','UTF-8' ));?>
">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Lists','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

                        </a>
                    </li>
                    <li>
                        <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( LinkHelper::getAdminLink('AdminMailchimpProOrders'),'htmlall','UTF-8' ));?>
">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Orders','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

                        </a>
                    </li>
                    <li>
                        <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( LinkHelper::getAdminLink('AdminMailchimpProProducts'),'htmlall','UTF-8' ));?>
">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Products','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

                        </a>
                    </li>
                    <li>
                        <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( LinkHelper::getAdminLink('AdminMailchimpProStores'),'htmlall','UTF-8' ));?>
">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Stores','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

                        </a>
                    </li>

                    <li>
                        <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( LinkHelper::getAdminLink('AdminMailchimpProSites'),'htmlall','UTF-8' ));?>
">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sites','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

                        </a>
                    </li>
                    <li>
                        <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( LinkHelper::getAdminLink('AdminMailchimpProAutomations'),'htmlall','UTF-8' ));?>
">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Automations','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

                        </a>
                    </li>
                    <li>
                        <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( LinkHelper::getAdminLink('AdminMailchimpProPromoRules'),'htmlall','UTF-8' ));?>
">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Promo rules','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<hr><?php }
}
