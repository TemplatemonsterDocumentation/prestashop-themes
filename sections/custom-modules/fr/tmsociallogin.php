<h3>Connexion Sociale TM</h3>
<p>Ce module permet de s'inscrire et de se connecter à l'aide des comptes des clients dans les réseaux sociaux tels que Facebook et Google.</p>
<h4>Installation et suppression</h4>
<p>Le module est installé/supprimé de la même manière que tout autre module PrestaShop.</p>
<h4>Configuration du module</h4>
<p>Une fois le module installé, vous pouvez le configurer sur la page de configuration du module.</p>
<p>Pour obtenir les données requises pour la configuration du module vous devez créer une application correspondante sur la ressource nécessaire.</p>
<p>Il n'est pas nécessaire d'utiliser les deux variantes de connexion (Google, Facebook) en même temps, vous pouvez utiliser l'un d'entre eux.</p>
<h4>Facebook Fields</h4>
<ul class="marked-list">
    <li>ID de votre App</li>
    <li>Clé secrète de votre App</li>
</ul>
<h4>Champs Google</h4>
<ul class="marked-list">
    <li>ID de votre App</li>
    <li>Clé secrète de votre App</li>
    <li>Chemin de redirection après la connexion <strong>(votre magasin
            URL+index.php?fc=module&module=tmsociallogin&controller=googlelogin)</strong></li>
</ul>
<p class="alert alert-info">Vous pouvez consulter ces liens pour plus d'informations: <a
        href="https://support.google.com/cloud/answer/6158849?hl=en&ref_topic=6262490" target="_blank">Google
        App</a> et <a href="https://developers.facebook.com/docs/apps/register" target="_blank">Facebook
        App</a>.</p>
<p class="alert alert-warning">
    Le chemin de redirection doit coïncider avec celui que vous avez indiqué lors de la création de Google App.
</p>
<figure class="img-polaroid">
    <img src="img/tmsociallogin-1.png" alt=""/>
</figure>