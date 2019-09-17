<?php
/* Smarty version 3.1.33, created on 2019-05-23 12:57:12
  from '/home/fadaei1u/TD6/smarty/templates/forms/login.form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce698a841d420_23229571',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11101699a51000a8c44b947460a328b98f597fa4' => 
    array (
      0 => '/home/fadaei1u/TD6/smarty/templates/forms/login.form.tpl',
      1 => 1490521718,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce698a841d420_23229571 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" action="login.php">
  <div class="input">
    <label for="name">Login</label>
    <div class="input">
      <input type="text" name="login" value="" />
    </div> 
  </div>
  
  <div class="input">
    <label for="name">Password</label>
    <div class="input">
      <input type="password" name="password" value="" />
    </div>
  </div>  
  
  <input type="submit" value="Login" />
</form><?php }
}
