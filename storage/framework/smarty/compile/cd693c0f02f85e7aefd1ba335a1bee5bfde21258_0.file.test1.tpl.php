<?php
/* Smarty version 3.1.29, created on 2016-05-26 15:24:39
  from "C:\xampp\htdocs\laravel\resources\views\test1.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57471537a45fc4_97237572',
  'file_dependency' => 
  array (
    'cd693c0f02f85e7aefd1ba335a1bee5bfde21258' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laravel\\resources\\views\\test1.tpl',
      1 => 1457770914,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57471537a45fc4_97237572 ($_smarty_tpl) {
?>
<form method="POST" action="/laravel/public/otp"/>
Название категории<br>
<input type="text" name="title"/><br>
<input type="hidden" name="_token" value="<?php echo $_smarty_tpl->tpl_vars['toc']->value;?>
"/>
<input type="submit" value="Сохранить1111">
</form>
54564<?php }
}
