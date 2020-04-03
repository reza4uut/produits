<?php
/* Smarty version 3.1.33, created on 2020-04-03 16:05:05
  from 'C:\wamp64\www\PHP-GESTION-DES-STOCKES\smarty\templates\forms\create.form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e875eb1d60259_68369915',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '486e583fe7ef895cf13531f87b24b120a92f73dc' => 
    array (
      0 => 'C:\\wamp64\\www\\PHP-GESTION-DES-STOCKES\\smarty\\templates\\forms\\create.form.tpl',
      1 => 1585929725,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e875eb1d60259_68369915 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" action="ajoutprod.php">

  <div class="input">
    <label for="nomprod">Nom de produit</label>
    <div class="input">
      <input type="text" name="nomprod" value="" />
    </div>
  </div>

  <div class="input">
    <label for="categorie">categorie de produit</label>
    <div class="input">
      <input type="text" name="categorie" value="" />
    </div>
  </div>

  <div class="input">
    <label for="prix">prix de Produit</label>
    <div class="input">
      <input type="text" name="prix" value="" />
    </div>
  </div>

  <div class="input">
    <label for="comment">Comment sur produit</label>
    <div class="input">
      <input type="text" name="comment" value="" />
    </div>
  </div>

  <input type="submit" value="Ajoute au BdDt" />
</form>
<?php }
}
