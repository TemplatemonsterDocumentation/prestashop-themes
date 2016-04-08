<h3>TM Social Login</h3>

<p>Ce module permet d'enregistrer et de vous connecter à l'aide des données sur les
    pages de clients dans les réseaux sociaux tels que Facebook et Google.</p>
<h5>Module installer / désinstaller</h5>

<p>Ce module peut être installé / désinstallé comme tout autre module PrestaShop.</p>
<h5>Paramètres du module</h5>

<p>Après le module a été installé, vous pouvez le configurer sur la page de
    configuration du module.</p>

<p>Afin d'obtenir des données requises pour la configuration du module vous devez créer
    une application correspondante sur la ressource nécessaire.</p>

<p>Il ne est pas nécessaire d'utiliser les deux variantes de connexion (Google,
    Facebook) simultanément, vous pouvez utiliser l'un d'eux seulement.</p>
<h4>Champs de Facebook</h4>
<ul>
    <li>ID de votre application.</li>
    <li>Clé secrète de votre application.</li>
</ul>
<h4>Champs de Google</h4>
<ul>
    <li>ID de votre application.</li>
    <li>Clé secrète de votre application.</li>
    <li>Chemin de redirection après la connexion <strong>(your shop
            URL+index.php?fc=module&module=tmsociallogin&controller=googlelogin)</strong>.
    </li>
</ul>


<p class="alert alert-info">Des informations plus détaillées vous pouvez obtenir en suivant les liens: <a
        href="https://support.google.com/cloud/answer/6158849?hl=en&ref_topic=6262490" target="_blank">Google
        App</a> et <a href="https://developers.facebook.com/docs/apps/register" target="_blank">Facebook
        App</a>.</p>

<p class="alert alert-warning">
    Le chemin de redirection doit coïncider avec celui que vous avez indiqué lors de la création de Google
    App.</p>

<figure class="img-polaroid">
    <img src="img/tmsociallogin-1.png" alt="">
</figure>