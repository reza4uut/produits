<?php
/* Smarty version 3.1.33, created on 2019-06-02 23:37:40
  from 'C:\wamp64\www\produit\smarty\templates\forms\login.form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf45dc4c067f2_93064194',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61cd011fc6ed73f3995783943e72b315016d5c04' => 
    array (
      0 => 'C:\\wamp64\\www\\produit\\smarty\\templates\\forms\\login.form.tpl',
      1 => 1559518478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf45dc4c067f2_93064194 (Smarty_Internal_Template $_smarty_tpl) {
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
