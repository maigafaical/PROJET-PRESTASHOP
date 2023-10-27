<?php
/* Smarty version 4.3.1, created on 2023-10-26 17:42:18
  from 'C:\xampp\htdocs\prestashop\modules\sendinblue\views\templates\admin\sms_notification_panel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_653aa4fad94455_98876934',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df79c0b5cb7b204a0d679a39d20d0450c26b1e36' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\sendinblue\\views\\templates\\admin\\sms_notification_panel.tpl',
      1 => 1691492068,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_653aa4fad94455_98876934 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">

    <div class="col-lg-12 panel">
                <div class="" id="sms_count_notification_toggle">
            <div>
                <?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentSmsCredits']->value,'htmlall','UTF-8' )) >= call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['Notify_Value']->value,'htmlall','UTF-8' ))) {?>
                    <span style="margin-bottom:10px; color: #585A69;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Currently you have ','mod'=>'sendinblue'),$_smarty_tpl ) );?>
<strong
                                style="color: #000000;" id="current_sms_value">
                            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'floatval' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentSmsCredits']->value ));?>
 </strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'credits sms. To buy more credits, please click','mod'=>'sendinblue'),$_smarty_tpl ) );?>

                        <a target="_blank"
                           href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'https://www.sendinblue.com/pricing?utm_source=prestashop_plugin&utm_medium=plugin&utm_campaign=module_link','mod'=>'sendinblue'),$_smarty_tpl ) );?>
">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'here','mod'=>'sendinblue'),$_smarty_tpl ) );?>
</a>.</span>
                <?php } elseif ((call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['Api_Sms_Credit']->value,'htmlall','UTF-8' )))) {?>
                    <span style="margin-bottom:10px; color: #585A69;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Currently you have','mod'=>'sendinblue'),$_smarty_tpl ) );?>
 <strong
                                style="color:#F00;" id="current_sms_value">
                            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'floatval' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentSmsCredits']->value ));?>
 </strong> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'credits sms. To buy more credits, please click','mod'=>'sendinblue'),$_smarty_tpl ) );?>

                        <a target="_blank"
                           href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'https://www.sendinblue.com/pricing','mod'=>'sendinblue'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'here','mod'=>'sendinblue'),$_smarty_tpl ) );?>
</a>.</span>
                <?php } else { ?>
                    <span style="margin-bottom:10px; color: #585A69;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Currently you have ','mod'=>'sendinblue'),$_smarty_tpl ) );?>
<strong
                                style="color: #000000;" id="current_sms_value">
                            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'floatval' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentSmsCredits']->value ));?>
 </strong> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'credits sms. To buy more credits, please click','mod'=>'sendinblue'),$_smarty_tpl ) );?>

                        <a target="_blank"
                           href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'https://www.sendinblue.com/pricing?utm_source=prestashop_plugin&utm_medium=plugin&utm_campaign=module_link','mod'=>'sendinblue'),$_smarty_tpl ) );?>
">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'here','mod'=>'sendinblue'),$_smarty_tpl ) );?>
</a>.</span>
                <?php }?>
            </div>
            <div>
                <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You want to be notified by e-mail when you do not have enough credits?','mod'=>'sendinblue'),$_smarty_tpl ) );?>
</label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="sms_credit" value="0"
                            <?php echo !(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['Api_Sms_Credit']->value,'htmlall','UTF-8' ))) ? 'checked="checked"' : '';?>
 class="sms_credit"/>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Disable','mod'=>'sendinblue'),$_smarty_tpl ) );?>

                </label>
                <label>
                    <input type="radio" name="sms_credit" value="1"
                            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['Api_Sms_Credit']->value,'htmlall','UTF-8' )) ? 'checked="checked"' : '';?>
 class="sms_credit"/>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enable','mod'=>'sendinblue'),$_smarty_tpl ) );?>

                </label>
            </div>
        </div>
                <form id="customer_form" class="defaultForm form-horizontal AdminCustomers"
                <?php if (((call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['Api_Sms_Credit']->value,'htmlall','UTF-8' )) !== null )) && call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['Api_Sms_Credit']->value,'htmlall','UTF-8' )) == 1) {?> style="display:block"
                <?php } else { ?> style="display:none"
                <?php }?> action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formUrl']->value,'htmlall','UTF-8' ));?>
"
              method="POST" enctype="multipart/form-data" novalidate="" _lpchecked="1" name="notify_sms_mail_form">
            <div class="" id="fieldset_0">
                <div class="form-wrapper">
                    <div class="form-group">
                        <label class="control-label col-lg-3" for="email"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'E-Mail','mod'=>'sendinblue'),$_smarty_tpl ) );?>
</label>
                        <div class="col-lg-4">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icon-envelope-o"></i></span>
                                <input type="text"
                                       name="sendin_notify_email"
                                       id="sendin_notify_email"
                                       class="sib_notify_email input-text"
                                       autocomplete="off"
                                       value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['Notify_Email']->value,'htmlall','UTF-8' ));?>
"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3" for="count"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Limit','mod'=>'sendinblue'),$_smarty_tpl ) );?>
</label>
                        <div class="col-lg-4">
                            <input type="text" name="sendin_notify_value"
                                   id="sendin_notify_value" class="sib_notify_value input-text"
                                   autocomplete="off"
                                   value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['Notify_Value']->value,'htmlall','UTF-8' ));?>
"><span class="toolTip" style="margin-top: 4px;"
                                                                 title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Alert threshold for remaining credits','mod'=>'sendinblue'),$_smarty_tpl ) );?>
"></span>
                        </div>
                    </div>
                    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please click','mod'=>'sendinblue'),$_smarty_tpl ) );?>

                        <a href="#" class="credit_notify_mail"
                           emailAlert="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email notification already sent','mod'=>'sendinblue'),$_smarty_tpl ) );?>
"
                           creditAlert="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please check the current credits and limit value','mod'=>'sendinblue'),$_smarty_tpl ) );?>
"
                           successAlert="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email notification sent','mod'=>'sendinblue'),$_smarty_tpl ) );?>
"
                           failAlert="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email notification not sent','mod'=>'sendinblue'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' here','mod'=>'sendinblue'),$_smarty_tpl ) );?>
</a>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'to get the email notification.','mod'=>'sendinblue'),$_smarty_tpl ) );?>

                    </p>
                </div><!-- /.form-wrapper -->
            </div>
        </form>

        <div>
            <button type="submit" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update','mod'=>'sendinblue'),$_smarty_tpl ) );?>
" id="customer_form_submit_btn"
                    class="button btn btn-default pull-right sms_credit_cls"
                    emailAlert="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please provide valid email','mod'=>'sendinblue'),$_smarty_tpl ) );?>
"
                    limitAlert="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please provide valid limit greater than 0','mod'=>'sendinblue'),$_smarty_tpl ) );?>
"
                    creditAlert="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Limit value is greater than current credits','mod'=>'sendinblue'),$_smarty_tpl ) );?>
"
                    successAlert="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Settings updated','mod'=>'sendinblue'),$_smarty_tpl ) );?>
"
                    failAlert="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update failed','mod'=>'sendinblue'),$_smarty_tpl ) );?>
">
                <i class="process-icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update','mod'=>'sendinblue'),$_smarty_tpl ) );?>

            </button>
        </div>
    </div>

</div>
<?php }
}
