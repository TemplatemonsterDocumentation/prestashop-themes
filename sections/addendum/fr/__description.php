<h2 class="item7">Addendum</h2>
<h5>Où obtenir de l'aide, du soutien et des informations supplémentaires</h5>
<p>Nous avons fait de notre mieux pour rendre cette documentation le plus clair possible. Toutefois, si vous avez des difficultés avec le modèle PrestaShop ou des suggestions sur l'amélioration du modèle ou de la documentation, n'hésitez pas à contacter notre équipe de support:</p>
<h4>Assistance et Soutien</h4>
<ul class="marked-list">
    <li>
        <p>
            <a href="http://chat.template-help.com/" target="_blank">Chat en Direct</a>
        </p>
    </li>
    <li>
        <p>
            <a href="http://support.template-help.com/index.php?/Tickets/Submit" target="_blank">Système de Tickets</a>
        </p>
    </li>
</ul><h4>Ressources Utiles</h4>
<ul class="marked-list">
    <li>
        <p>
            <a target="_blank" href="http://www.prestashop.com/">Site officiel PrestaShop</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://www.prestashop.com/en/downloads/">Téléchargements</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://addons.prestashop.com/en/">Addons: modules, thèmes, etc.</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://doc.prestashop.com/display/PS16/English+documentation">Documentation en Anglais</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://www.prestashop.com/forums/">Forum</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://www.prestashop.com/wiki/">Wiki</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="/help/ecommerce/prestashop/prestashop-tutorials/">Tutoriels de PrestaShop</a>
        </p>
    </li>
</ul>
<h4>Chargement des Données des Serveurs Google</h4>
<p>Certains pays ont des problèmes de connexion aux serveurs Google.
Cela peut provoquer des problèmes de chargement des polices Google et des bibliothèques Javascript de Google CDN. 
Pour résoudre ces problèmes, procédez comme suit:</p>
<h4>Impossible de charger les polices Google:</h4>
<ol class="index-list">
    <li><p>Ouvrez le fichier <strong>\themes\theme****\header.tpl</strong>.</p></li>
    <li><p>Recherchez la ligne: </p>
        <code>&lt;link rel="stylesheet" href="http{if
            Tools::usingSecureMode()}s{/if}://fonts.googleapis.com/css?family=[---your_web_font_name_here---]"
            type="text/css" media="all" /&gt; </code>
    </li>
    <li><p>Remplacez-le par ce qui suit: </p>
        <code>&lt;link rel="stylesheet" href="http://fonts.useso.com/css?family=[---your_web_font_name_here---]"
            type="text/css" media="all" /&gt;</code>
    </li>
</ol>
<h4>Validation W3C </h4>
<p>Les styles de balisage HTML et CSS utilisés dans nos modèles sont sémantiquement corrects et valides. Cependant, certaines erreurs W3C peuvent se produire. Le code de rendu 100% W3C valide élimine l'utilisation de technologies de site Web modernes comme CSS3 et HTML5. 
Notre objectif est de fournir une expérience enrichissante avec des modèles de haute qualité et, parfois, nous devons enfreindre certaines règles.</p>
