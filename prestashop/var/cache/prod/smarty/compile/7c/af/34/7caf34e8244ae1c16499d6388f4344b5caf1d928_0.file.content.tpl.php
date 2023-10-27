<?php
/* Smarty version 4.3.1, created on 2023-10-26 11:38:47
  from 'C:\xampp\htdocs\prestashop\admine\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_653a4fc77c3d69_48806145',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7caf34e8244ae1c16499d6388f4344b5caf1d928' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admine\\themes\\default\\template\\content.tpl',
      1 => 1697795490,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_653a4fc77c3d69_48806145 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
