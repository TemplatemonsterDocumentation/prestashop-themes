<h2 class="item7">Addendum </h2><h4>où obtenir de l'aide, du support et des informations supplémentaires</h4>
<p>Nous avons fait de notre mieux pour rendre cette documentation aussi claire que possible. Cependant, si vous rencontrez des difficultés avec le template PrestaShop ou des suggestions pour améliorer le template ou la documentation, n'hésitez pas à contacter notre équipe de support.</p>
<h4>Aide et Support</h4>
<ul class="marked-list">
    <li>
        <p>
            <a href="http://chat.template-help.com/" target="_blank">Live chat</a>
        </p>
    </li>
    <li>
        <p>
            <a href="http://support.template-help.com/index.php?/Tickets/Submit" target="_blank">Système de tickets d'aide</a>
        </p>
    </li>
</ul><h4>Ressources utiles</h4>
<ul class="marked-list">
    <li>
        <p>
            <a target="_blank" href="http://www.prestashop.com/">Site officiel de PrestaShop</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://www.prestashop.com/en/downloads/">Téléchargements</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://addons.prestashop.com/en/">Add-ons: modules, thèmes, etc.</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://doc.prestashop.com/display/PS16/English+documentation">Documentation en anglais</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://www.prestashop.com/forums/">Forums</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://www.prestashop.com/wiki/">Wiki</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="/help/ecommerce/prestashop/prestashop-tutorials/">Tutoriels PrestaShop</a>
        </p>
    </li>
</ul><h4>Chargement de données depuis les serveurs Google</h4>

    <p>Certains pays ont des difficultés pour se connecter aux serveurs Google. Ceci peut entraîner des problèmes de chargement de Google Fonts et de bibliothèques JavaScript depuis Google CDN. Pour résoudre ces problèmes, veuillez suivre les instructions suivantes: </p>

    <h4>Impossible de charger des Google Fonts: </h4>

    <ol class="index-list">
        <li><p>Ouvrez le fichier <strong>\themes\theme1330\header.tpl</strong>.</p></li>
        <li><p>Trouvez la ligne: </p>
            <pre>&lt;link rel="stylesheet" href="http{if Tools::usingSecureMode()}s{/if}://fonts.googleapis.com/css?family=[---your_web_font_name_here---]" type="text/css" media="all" /&gt; </pre>
        </li>
        <li><p>Remplacez-la par la suivante: </p>
            <pre>&lt;link rel="stylesheet" href="http://fonts.useso.com/css?family=[---le_nom_de_votre_web_font---]" type="text/css" media="all" /&gt;</pre>
        </li>
    </ol>
</article>