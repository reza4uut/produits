<?php
/* Smarty version 3.1.33, created on 2020-04-03 16:05:05
  from 'C:\wamp64\www\PHP-GESTION-DES-STOCKES\smarty\templates\forms\login.form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e875eb1d735f5_89843402',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54f922975aa3bfe3692f211a9a9f8ad028744bfa' => 
    array (
      0 => 'C:\\wamp64\\www\\PHP-GESTION-DES-STOCKES\\smarty\\templates\\forms\\login.form.tpl',
      1 => 1585929725,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e875eb1d735f5_89843402 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" action="prodpage.php">
  <div class="input">
    <label for="nomprod">nom de produit</label>
    <div class="input">
      <input type="text" name="nomprod" value="" />
    </div>
  </div>

  <div class="input">
    <label for="categorie">categorie</label>
    <div class="input">
      <input type="text" name="categorie" value="" />
    </div>
  </div>

  <input type="submit" value="Valider" />
</form>
<?php }
}
