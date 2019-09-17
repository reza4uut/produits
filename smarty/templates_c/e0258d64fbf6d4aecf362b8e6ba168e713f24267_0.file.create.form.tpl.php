<?php
/* Smarty version 3.1.33, created on 2019-06-02 23:41:33
  from 'C:\wamp64\www\produit\smarty\templates\forms\create.form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf45eadaacb95_14666396',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0258d64fbf6d4aecf362b8e6ba168e713f24267' => 
    array (
      0 => 'C:\\wamp64\\www\\produit\\smarty\\templates\\forms\\create.form.tpl',
      1 => 1559518870,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf45eadaacb95_14666396 (Smarty_Internal_Template $_smarty_tpl) {
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
