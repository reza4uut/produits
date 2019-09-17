<html>
  <head>
    <title>Bienvenue dans site de stockage des produits </title>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    <div class="global">
      <h3>enregister ou mis à jour des produit à partie de cette page</h3>
      {if $prodexist}
        <div class="welcome-pane">
              Information sur {$prod.nomprod} {$prod.categorie} - <a href="logout.php">autre produit</a>
            </div>
      {/if}

      <div class="error-pane {$classError}">
        {$errorMessage}
      </div>

      <div class="success-pane {$classSuccess}">
        {$successMessage}
      </div>


      <div class="content">
        {if !$prodexist}
          <div class="inscription">
            {include file="forms/create.form.tpl"}
          </div>


          <div class="connexion">
            {include file="forms/login.form.tpl"}
          </div>
        {else}
          <div class="update">
            {include file="forms/update.form.tpl"}
          </div>
        {/if}
      </div>
    </div>
  </body>
</html>
