<?php
/* Smarty version 4.3.1, created on 2023-10-26 16:30:47
  from 'C:\xampp\htdocs\prestashop\modules\ps_emailalerts\views\templates\admin\_configure\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_653a9437a85356_42263020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c8ce5792d3cc94d181c20e6f23faef404d67049' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\ps_emailalerts\\views\\templates\\admin\\_configure\\helpers\\form\\form.tpl',
      1 => 1693616189,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_653a9437a85356_42263020 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_248626839653a9437a1c7b1_39891315', "input");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "input"} */
class Block_248626839653a9437a1c7b1_39891315 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_248626839653a9437a1c7b1_39891315',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'switch' && call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'addcslashes' ][ 0 ], array( (defined('_PS_VERSION_') ? constant('_PS_VERSION_') : null),'\'' )) < '1.6') {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['values'], 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
          <input type="radio" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['id'] ));?>
"
                 value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['value'],'html','UTF-8' ));?>
"
                 <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] == $_smarty_tpl->tpl_vars['value']->value['value']) {?>checked="checked"<?php }?>
                  <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['disabled'])) && $_smarty_tpl->tpl_vars['input']->value['disabled']) {?>disabled="disabled"<?php }?> />
          <label class="t" for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['id'] ));?>
">
              <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['is_bool'])) && $_smarty_tpl->tpl_vars['input']->value['is_bool'] == true) {?>
                  <?php if ($_smarty_tpl->tpl_vars['value']->value['value'] == 1) {?>
                    <img src="../img/admin/enabled.gif" alt="<?php echo $_smarty_tpl->tpl_vars['value']->value['label'];?>
"
                         title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['label'],'html','UTF-8' ));?>
"/>
                  <?php } else { ?>
                    <img src="../img/admin/disabled.gif" alt="<?php echo $_smarty_tpl->tpl_vars['value']->value['label'];?>
"
                         title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['label'],'html','UTF-8' ));?>
"/>
                  <?php }?>
              <?php } else { ?>
                  <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['label'],'html','UTF-8' ));?>

              <?php }?>
          </label>
          <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['br'])) && $_smarty_tpl->tpl_vars['input']->value['br']) {?><br/><?php }?>
          <?php if ((isset($_smarty_tpl->tpl_vars['value']->value['p'])) && $_smarty_tpl->tpl_vars['value']->value['p']) {?><p><?php echo $_smarty_tpl->tpl_vars['value']->value['p'];?>
</p><?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'emailalerts_tags') {?>
      
        <?php echo '<script'; ?>
 type="text/javascript">
          $().ready(function () {
            var input_id = '<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];
}?>';
            $('#' + input_id).tagify({delimiters: [13, 44], addTagPrompt: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add email','mod'=>'ps_emailalerts','js'=>1),$_smarty_tpl ) );?>
'});
            $('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form').submit(function () {
              $(this).find('#' + input_id).val($('#' + input_id).tagify('serialize'));
            });
          });
        <?php echo '</script'; ?>
>
      
      <?php $_smarty_tpl->_assignInScope('value_text', $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]);?>
      <input type="text"
           name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
           id="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];
}?>"
           value="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['string_format'])) && $_smarty_tpl->tpl_vars['input']->value['string_format']) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( sprintf($_smarty_tpl->tpl_vars['input']->value['string_format'],$_smarty_tpl->tpl_vars['value_text']->value),'html','UTF-8' ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value_text']->value,'html','UTF-8' ));
}?>"
           class="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {
echo $_smarty_tpl->tpl_vars['input']->value['class'];
}?> tagify" autocomplete="off"
            <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['placeholder'])) && $_smarty_tpl->tpl_vars['input']->value['placeholder']) {?> placeholder="<?php echo $_smarty_tpl->tpl_vars['input']->value['placeholder'];?>
"<?php }?>
      />
    <?php } else { ?>
        <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

    <?php }
}
}
/* {/block "input"} */
}
