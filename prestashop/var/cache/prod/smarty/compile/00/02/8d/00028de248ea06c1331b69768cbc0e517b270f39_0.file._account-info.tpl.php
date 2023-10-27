<?php
/* Smarty version 4.3.1, created on 2023-10-26 16:25:32
  from 'C:\xampp\htdocs\prestashop\modules\mailchimppro\views\templates\admin\configuration\_account-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_653a92fc76d728_03390718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00028de248ea06c1331b69768cbc0e517b270f39' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\mailchimppro\\views\\templates\\admin\\configuration\\_account-info.tpl',
      1 => 1695984476,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_653a92fc76d728_03390718 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel panel-account-info" v-show="currentPage === 'accountInfo'">
    <h3 class="panel-heading">
        <span class="panel-heading-icon-container">
            <i class="las la-user-cog la-2x"></i>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Account info','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

        </span>
        <div class="panel-heading-action">
            <button id="desc-attribute_group-new"
                    v-on:click="disconnect"
                    v-if="validApiKey"
                    title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log out from your Mailchimp account','mod'=>'mailchimppro'),$_smarty_tpl ) );?>
"
                    class="list-toolbar-btn btn btn-logout ">					
                <i class="las la-sign-out-alt la-2x"></i>
				<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log out','mod'=>'mailchimppro'),$_smarty_tpl ) );?>
</span>
            </button>
        </div>
    </h3>
    
    <div class="panel-body" v-if="validApiKey">
        <img :src="accountInfo.avatar_url" alt="avatar" style="max-height: 64px" class="d-inline-block">
        <h2 class="d-inline-block" style="margin-left: 15px">
            {{accountInfo.first_name}} {{accountInfo.last_name}} - {{accountInfo.account_name}}
        </h2>
        <table class="table table-responsive" style="margin-top: 15px">
            <tr>
                <td>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Account ID','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

                </td>
                <td>
                    {{accountInfo.account_id}}
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login ID','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

                </td>
                <td>
                    {{accountInfo.login_id}}
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Account name','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

                </td>
                <td>
                    {{accountInfo.account_name}}
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

                </td>
                <td>
                    {{accountInfo.email}}
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

                </td>
                <td>
                    {{accountInfo.first_name}} {{accountInfo.last_name}}
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Username','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

                </td>
                <td>
                    {{accountInfo.username}}
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Role','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

                </td>
                <td>
                    {{accountInfo.role}}
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Member since','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

                </td>
                <td>
                    {{accountInfo.member_since}}
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pricing plan type','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

                </td>
                <td>
                    {{accountInfo.pricing_plan_type}}
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Account timezone','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

                </td>
                <td>
                    {{accountInfo.account_timezone}}
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pro enabled','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

                </td>
                <td>
                    <span v-if="accountInfo.pro_enabled">✔️</span>
                    <span v-if="!accountInfo.pro_enabled">❌️</span>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

                </td>
                <td>
                    {{accountInfo.contact.addr1}} {{accountInfo.contact.addr2}},
                    {{accountInfo.contact.city}},
                    {{accountInfo.contact.company}},
                    {{accountInfo.contact.country}},
                    {{accountInfo.contact.state}},
                    {{accountInfo.contact.zip}}
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total subscribers','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

                </td>
                <td>
                    {{accountInfo.total_subscribers}}
                </td>
            </tr>
        </table>
    </div>
    

    <div class="panel-body" v-if="!validApiKey">
        <p class="text-center">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In order to get started, you need to log in to you Mailchimp account. In order to do that please click the button below.','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

        </p>
        <br>
        <div class="row">
            <div class="col-xs-12 text-center">
                <button v-on:click="oauthStart" class="btn btn-default btn-login">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log-in to Mailchimp','mod'=>'mailchimppro'),$_smarty_tpl ) );?>

                </button>
            </div>
        </div>
    </div>
</div><?php }
}
