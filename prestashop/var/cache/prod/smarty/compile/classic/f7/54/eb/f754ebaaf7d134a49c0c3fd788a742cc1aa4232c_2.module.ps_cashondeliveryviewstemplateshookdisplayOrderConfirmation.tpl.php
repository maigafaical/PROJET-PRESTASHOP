<?php
/* Smarty version 4.3.1, created on 2023-10-26 16:49:42
  from 'module:ps_cashondeliveryviewstemplateshookdisplayOrderConfirmation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_653a98a6cf8d05_99124646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f754ebaaf7d134a49c0c3fd788a742cc1aa4232c' => 
    array (
      0 => 'module:ps_cashondeliveryviewstemplateshookdisplayOrderConfirmation.tpl',
      1 => 1657898408,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_653a98a6cf8d05_99124646 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section id="ps_cashondelivery-displayOrderConfirmation">
  <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your order on %s is complete.','sprintf'=>array($_smarty_tpl->tpl_vars['shop_name']->value),'d'=>'Modules.Cashondelivery.Shop'),$_smarty_tpl ) );?>
</p>
  <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You have chosen the cash on delivery method.','d'=>'Modules.Cashondelivery.Shop'),$_smarty_tpl ) );?>
</p>
  <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your order will be sent very soon.','d'=>'Modules.Cashondelivery.Shop'),$_smarty_tpl ) );?>
</p>
  <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'For any questions or for further information, please contact our','d'=>'Modules.Cashondelivery.Shop'),$_smarty_tpl ) );?>
 <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['contact_url']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'customer support','d'=>'Modules.Cashondelivery.Shop'),$_smarty_tpl ) );?>
</a>.</p>
</section>
<?php }
}
