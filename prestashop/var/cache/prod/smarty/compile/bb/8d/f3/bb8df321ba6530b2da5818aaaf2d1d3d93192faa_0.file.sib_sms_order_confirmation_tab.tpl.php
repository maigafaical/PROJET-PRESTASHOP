<?php
/* Smarty version 4.3.1, created on 2023-10-26 17:42:18
  from 'C:\xampp\htdocs\prestashop\modules\sendinblue\views\templates\admin\sib_sms_order_confirmation_tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_653aa4fada2c26_27737730',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb8df321ba6530b2da5818aaaf2d1d3d93192faa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\sendinblue\\views\\templates\\admin\\sib_sms_order_confirmation_tab.tpl',
      1 => 1691492068,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_653aa4fada2c26_27737730 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">

  <div class="col-lg-12 panel">
        <div class="" id="">
      <div class="radio">
        <label>
          <input type="radio" name="sib_sms_order_confirmation_toggle" value="0" <?php echo !(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['Api_Sms_Order_Status']->value,'htmlall','UTF-8' ))) ? 'checked="checked"' : '';?>
>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Disable','mod'=>'sendinblue'),$_smarty_tpl ) );?>

        </label>
        <label>
          <input type="radio" name="sib_sms_order_confirmation_toggle" value="1" <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['Api_Sms_Order_Status']->value,'htmlall','UTF-8' )) ? 'checked="checked"' : '';?>
>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enable','mod'=>'sendinblue'),$_smarty_tpl ) );?>

        </label>
      </div>
    </div>
        <form id="sib_sms_order_confirmation" class="defaultForm form-horizontal AdminCustomers" style="<?php echo !(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['Api_Sms_Order_Status']->value,'htmlall','UTF-8' ))) ? 'display: none;' : '';?>
" action="index.php?controller=AdminCustomers&amp;back=%2Fadminlogin%2Findex.php%3Fcontroller%3DAdminCustomers%26id_customer%3D1%26viewcustomer%26token%3D00be965ec4afbc9ae7d04c3e119a2ecc&amp;token=00be965ec4afbc9ae7d04c3e119a2ecc" method="post" enctype="multipart/form-data" novalidate="" _lpchecked="1">
      <div class="" id="fieldset_0">
        <div class="form-wrapper">

          <div class="form-group">
            <label class="control-label col-lg-3" for="email">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sender','mod'=>'sendinblue'),$_smarty_tpl ) );?>

            </label>
            <div class="col-lg-4">
                <input type="text" name="sender_order" id="sender_order" class="input-text" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['Sender_Order']->value,'htmlall','UTF-8' ));?>
" autocomplete="off" maxlength="11">
                <span class="toolTip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This field allows you to customize the SMS sender. The number of characters is limited to 11 alphanumeric characters. You can´t configure your Sender with a phone number.','mod'=>'sendinblue'),$_smarty_tpl ) );?>
">&nbsp;</span>
              <div class="hintmsg"><em>Number of characters left: <span id="sender_order_text">11</span></em></div>            </div>
          </div>

          <div class="form-group">

            <label class="control-label col-lg-3" for="sender_order_message">
                                              <span>
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Message','mod'=>'sendinblue'),$_smarty_tpl ) );?>

                                              </span>
            </label>

            <div class="col-lg-4">
              <textarea name="sender_order_message" id="sender_order_message" cols="45" rows="5" class="textarea_bx" style="resize: both"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['Sender_Order_Message']->value,'htmlall','UTF-8' ));?>
</textarea>
              <div class="clear"></div>
              <span style="line-height:16px; margin-bottom:15px; width:333px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Number of SMS used: ','mod'=>'sendinblue'),$_smarty_tpl ) );?>
<span id="sender_order_message_text_count">0</span>
                                             <div class="hintmsg"><em><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Number of characters left: ','mod'=>'sendinblue'),$_smarty_tpl ) );?>
</em><span id="sender_order_message_text">160</span></div>
                                             <div class="hintmsg"><em><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attention line break is counted as a single character.','mod'=>'sendinblue'),$_smarty_tpl ) );?>
</em>
                                             </div><br>
                                               <div class="hintmsg"><em><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you want to personalize the SMS, you can use the variables below:','mod'=>'sendinblue'),$_smarty_tpl ) );?>
</em></div>
                                               <div class="hintmsg"><em><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'- For civility use {civility}','mod'=>'sendinblue'),$_smarty_tpl ) );?>
</em></div>
                                               <div class="hintmsg"><em><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'- For first name use {first_name}','mod'=>'sendinblue'),$_smarty_tpl ) );?>
</em></div>
                                               <div class="hintmsg"><em><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'- For last name use {last_name}','mod'=>'sendinblue'),$_smarty_tpl ) );?>
</em></div>
                                               <div class="hintmsg"><em><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'- For order reference id use {order_reference}','mod'=>'sendinblue'),$_smarty_tpl ) );?>
</em></div>
                                               <div class="hintmsg"><em><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'- For order price use {order_price}','mod'=>'sendinblue'),$_smarty_tpl ) );?>
</em></div>
                                               <div class="hintmsg"><em><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'- For order date use {order_date}','mod'=>'sendinblue'),$_smarty_tpl ) );?>
</em></div>
            </div>
            <span class="toolTip" style="margin-top:35px;padding-left: 4px;" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' Create the content of your SMS with the limit of 160-character.Beyond 160 characters, it will be counted as a second SMS. Thus, if you write  SMS of 240 characters, it will be recorded using two SMS.','mod'=>'sendinblue'),$_smarty_tpl ) );?>
">&nbsp;</span>
          </div>


          <div class="form-group">
            <label class="control-label col-lg-3" for="sib_order_confirmation_test_sms_number">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send a Test SMS','mod'=>'sendinblue'),$_smarty_tpl ) );?>

            </label>
            <button type="button" class="btn btn-outline-secondary btn-submit hidden-xs uppercase duplicate testOrdersmssend" successmsg="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Test SMS message has been sent successfully','mod'=>'sendinblue'),$_smarty_tpl ) );?>
"  failmsg="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Test SMS message has not been sent successfully','mod'=>'sendinblue'),$_smarty_tpl ) );?>
"
            senderAlert="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please fill the sender field','mod'=>'sendinblue'),$_smarty_tpl ) );?>
"
            numberAlert="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please fill the phone number field','mod'=>'sendinblue'),$_smarty_tpl ) );?>
"
            messageAlert="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please fill the message field','mod'=>'sendinblue'),$_smarty_tpl ) );?>
"
            ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send','mod'=>'sendinblue'),$_smarty_tpl ) );?>
</button>
            <span class="toolTip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' The phone number should be in this form: 0033663309741 for this France mobile 06 63 30 97 41 (0033 is France prefix)','mod'=>'sendinblue'),$_smarty_tpl ) );?>
">&nbsp;</span>
            <div class="col-lg-4">
              <div class="">
                <input type="text" name="sib_order_confirmation_test_sms_number" id="sib_order_confirmation_test_sms_number" class="" autocomplete="off" >
              </div>
              <em><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sending a test SMS will be deducted from your SMS credits','mod'=>'sendinblue'),$_smarty_tpl ) );?>
</em>
            </div>
          </div>

        </div><!-- /.form-wrapper -->
      </div>
    </form>


    <div>
      <button type="submit" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update','mod'=>'sendinblue'),$_smarty_tpl ) );?>
" id="customer_form_submit_btn" name="sender_order_save" class="btn btn-default pull-right sender_order_save" senderfield="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please fill the sender field','mod'=>'sendinblue'),$_smarty_tpl ) );?>
"  messagefield="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please fill the message field','mod'=>'sendinblue'),$_smarty_tpl ) );?>
" successmsg="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Settings updated','mod'=>'sendinblue'),$_smarty_tpl ) );?>
"  failmsg="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update failed','mod'=>'sendinblue'),$_smarty_tpl ) );?>
">
        <i class="process-icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update','mod'=>'sendinblue'),$_smarty_tpl ) );?>

      </button>
    </div>

  </div>

</div>
<?php }
}
