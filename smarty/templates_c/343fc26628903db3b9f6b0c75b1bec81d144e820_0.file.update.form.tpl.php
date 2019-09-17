<?php
/* Smarty version 3.1.33, created on 2019-05-23 14:19:47
  from '/home/fadaei1u/TD6/smarty/templates/forms/update.form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce6ac03656d26_87503726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '343fc26628903db3b9f6b0c75b1bec81d144e820' => 
    array (
      0 => '/home/fadaei1u/TD6/smarty/templates/forms/update.form.tpl',
      1 => 1490521718,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce6ac03656d26_87503726 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" action="updateAccount.php">
  
  <div class="input">
    <label for="name">Name</label>
    <div class="input">
      <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
" />
    </div>
  </div>
  
  <div class="input">
    <label for="name">Surname</label>
    <div class="input">
      <input type="text" name="surname" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['surname'];?>
" />
    </div>
  </div>   
  
  <div class="input">
    <label for="name">Login</label>
    <div class="input">
      <input type="text" name="login" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['login'];?>
" />
    </div> 
  </div>
  
  <div class="input">
    <label for="name">Password</label>
    <div class="input">
      <input type="password" name="password" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['password'];?>
" />
    </div>
  </div>     
  
  <input type="submit" value="Update my account" />
</form><?php }
}
