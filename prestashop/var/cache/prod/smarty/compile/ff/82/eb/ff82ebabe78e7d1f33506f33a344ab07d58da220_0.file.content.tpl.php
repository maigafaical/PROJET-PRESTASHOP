<?php
/* Smarty version 4.3.1, created on 2023-10-26 11:19:58
  from 'C:\xampp\htdocs\prestashop\admine\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_653a4b5ea0c767_66326233',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff82ebabe78e7d1f33506f33a344ab07d58da220' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admine\\themes\\new-theme\\template\\content.tpl',
      1 => 1697795490,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_653a4b5ea0c767_66326233 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
