<?php
/* Smarty version 3.1.33, created on 2019-06-06 09:28:30
  from 'C:\wamp64\www\produit\smarty\templates\forms\update.form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf8dcbe6a9b99_42417902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '806b1c2a1c85d2540a7c2ee9ca09a90fee463cf7' => 
    array (
      0 => 'C:\\wamp64\\www\\produit\\smarty\\templates\\forms\\update.form.tpl',
      1 => 1559813305,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf8dcbe6a9b99_42417902 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" action="misajourprod.php">

  <div class="input">
    <label for="nomprod">nom de produit</label>
    <div class="input">
      <input type="text" name="nomprod" value="<?php echo $_smarty_tpl->tpl_vars['prod']->value['nomprod'];?>
" />
    </div>
  </div>

  <div class="input">
    <label for="categorie">categorie</label>
    <div class="input">
      <input type="text" name="categorie" value="<?php echo $_smarty_tpl->tpl_vars['prod']->value['categorie'];?>
" />
    </div>
  </div>

  <div class="input">
    <label for="prix">prix de produit</label>
    <div class="input">
      <input type="text" name="prix" value="<?php echo $_smarty_tpl->tpl_vars['prod']->value['prix'];?>
" />
    </div>
  </div>

  <div class="input">
    <label for="comment">comment de produit</label>
    <div class="input">
      <input type="text" name="comment" value="<?php echo $_smarty_tpl->tpl_vars['prod']->value['comment'];?>
" />
    </div>
  </div>

  <input type="submit" value="Mis à jour ce produit" />

</form>

  <div>
<div>

  <input type="submit" value="supprime ce produit" onclick="location.href='supprimeprod.php'" />
</div>

  </div>
<?php }
}
