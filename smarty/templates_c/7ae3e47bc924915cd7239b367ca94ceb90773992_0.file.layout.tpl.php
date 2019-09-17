<?php
/* Smarty version 3.1.33, created on 2019-05-23 12:57:12
  from '/home/fadaei1u/TD6/smarty/templates/layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce698a8417bf7_35597478',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ae3e47bc924915cd7239b367ca94ceb90773992' => 
    array (
      0 => '/home/fadaei1u/TD6/smarty/templates/layout.tpl',
      1 => 1490521718,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:forms/create.form.tpl' => 1,
    'file:forms/login.form.tpl' => 1,
    'file:forms/update.form.tpl' => 1,
  ),
),false)) {
function content_5ce698a8417bf7_35597478 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
  <head>
    <title>TP6 - Smarty</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    <div class="global">
      <h3>Correction TP4 - Les formulaires</h3>
      <?php if ($_smarty_tpl->tpl_vars['isLogged']->value) {?>
        <div class="welcome-pane">
              Bienvenue <?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['surname'];?>
 - <a href="logout.php">Loggout</a>
            </div>
      <?php }?>
     
      <div class="error-pane <?php echo $_smarty_tpl->tpl_vars['classError']->value;?>
">
        <?php echo $_smarty_tpl->tpl_vars['errorMessage']->value;?>

      </div>
      
      <div class="success-pane <?php echo $_smarty_tpl->tpl_vars['classSuccess']->value;?>
">
        <?php echo $_smarty_tpl->tpl_vars['successMessage']->value;?>

      </div>
      
      
      <div class="content">
        <?php if (!$_smarty_tpl->tpl_vars['isLogged']->value) {?>
          <div class="inscription">
            <?php $_smarty_tpl->_subTemplateRender("file:forms/create.form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          </div>
        
        
          <div class="connexion">
            <?php $_smarty_tpl->_subTemplateRender("file:forms/login.form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          </div>
        <?php } else { ?> 
          <div class="update">
            <?php $_smarty_tpl->_subTemplateRender("file:forms/update.form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          </div>
        <?php }?> 
      </div>
    </div>
  </body>
</html><?php }
}
