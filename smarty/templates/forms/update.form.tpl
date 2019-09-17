<form method="post" action="misajourprod.php">

  <div class="input">
    <label for="nomprod">nom de produit</label>
    <div class="input">
      <input type="text" name="nomprod" value="{$prod.nomprod}" />
    </div>
  </div>

  <div class="input">
    <label for="categorie">categorie</label>
    <div class="input">
      <input type="text" name="categorie" value="{$prod.categorie}" />
    </div>
  </div>

  <div class="input">
    <label for="prix">prix de produit</label>
    <div class="input">
      <input type="text" name="prix" value="{$prod.prix}" />
    </div>
  </div>

  <div class="input">
    <label for="comment">comment de produit</label>
    <div class="input">
      <input type="text" name="comment" value="{$prod.comment}" />
    </div>
  </div>

  <input type="submit" value="Mis à jour ce produit" />

</form>

  <div>
<div>

  <input type="submit" value="supprime ce produit" onclick="location.href='supprimeprod.php'" />
</div>

  </div>
