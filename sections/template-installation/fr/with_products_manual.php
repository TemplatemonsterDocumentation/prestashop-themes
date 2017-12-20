<h3>Installation manuelle du template avec des données d'exemple</h3>
<p class="alert alert-info custom">Si vous ne voulez pas passer votre temps à installer le template, n'hésitez pas à
    <span class="label label-warning opener" onclick="showChat()">commander</span> le service d'installation via notre
    chat en direct.</p>
<p>Après l'installation des <strong>données d'exemple,</strong> vous verrez votre
    boutique PrestaShop apparaître comme dans le template de live demo. Elle contiendra
    tous les produits d'exemple, paramètres de boutique, paramètres de modules, etc.</p>

<p class="alert alert-danger">N'utilisez pas les données sur votre site en production! Ceci remplacera tous les
    produits et paramètres de votre boutique.</p>

<p class="alert alert-warning">Veuillez vous assurer que votre version de l'engine PrestaShop correspond à la version
    spécifiée dans l'onglet de "Détails Techniques", mentionné comme "PrestaShop Engine: 1.X.X.X".
    <br/>Aussi, assurez-vous que votre préfixe de la base de données est <strong>ps_</strong>. Seulement si votre
    version de l'engine PrestaShop correspond à la version spécifiée, veuillez installer les données d'exemple. </p>

<h4>Upload des fichiers de template</h4>

<p>Pour uploader le template sur votre serveur:</p>
<ol class="index-list">
    <li>Ouvrez le package du template.</li>
    <li>Puis allez dans le dossier <strong>/theme/manual_install/</strong>.</li>
    <li>Uploadez les dossiers <strong>/img/</strong>, <strong>/modules/</strong> et
        <strong>/themes/</strong> dans le dossier racine PrestaShop.
    </li>
</ol>
<p class="alert alert-info">Vous pouvez consulter le tutoriel vidéo détaillé sur <a target="_blank"
                                                                                    href="/help/how-upload-files-server-2.html">comment
        uploader des fichiers sur un serveur à l'aide d'un gestionnaire FTP</a> et <a
            href="/help/how-to-upload-files-to-a-server-using-cpanel-webhost-manager-whm.html"
            target="_blank">comment uploader les fichiers sur un serveur avec cPanel
        (WebHost Manager, WHM)</a>.</p>

<h4>Installation de données d'exemple</h4>

<p>Les données d'exemple sont fournies sous la forme d'un fichier .SQL. Il se trouve
    dans le dossier <strong>theme/manual_install/</strong> du package du template est il
    est nommé <strong>dump.sql</strong>.</p>

<p>Le fichier dump.sql peut être installé à l'aide de l'outil phpMyAdmin ou d'autres
    outils de gestion de base de données dans le panneau de contrôle de votre hébergeur.
    Le tutoriel détaillé sur <a target="_blank"
                                href="/help/phpmyadmin-how-to-import-sample-data-dump-file-phpmyadmin.html">comment
        installer des fichiers SQL</a> peut vous être utile.</p>

<p class="alert alert-warning">Avant de commencer, veuillez faites une sauvegarde de votre base de données. Vous
    pouvez consulter le tutoriel vidéo détaillé sur <a
            target="_blank" href="/help/phpmyadmin-how-to-backup-a-database.html">comment
        sauvegarder une base de données</a>.</p>


<p class="alert alert-danger">Assurez-vous que votre version de l'engine PrestaShop est conforme aux besoins du
    template. Autrement, la base de données sera endommagée.</p>

<p>Après avoir installé le fichier dump.sql, vous devrez activer le template.</p>

<p>Depuis le panneau d'administration de PrestaShop, allez dans <strong>Preferences >
        Themes</strong>, choisissez le template dans la section <strong>Themes</strong> et
    cliquez sur <strong>Save</strong>.</p>

<h4>Ajout de langues à une boutique en ligne.</h4>

<p>Une fois le template multilingue installé, vous pourrez ajouter toutes les langues
    qu'il propose (anglais, français, espagnol, allemand, russe) à la plate-forme de
    boutique en ligne. Ceci peut être fait de la manière suivante: </p>

<p>Allez dans <strong>'Localization > Translations'</strong> dans le panneau
    d'administration, trouvez <strong>'ADD/UPDATE A LANGUAGE'</strong> et ajoutez des
    langues en les choisissant dans le menu déroulant
    <small>(1)</small>
    et en cliquant sur le bouton <strong>'Add or update a language'</strong>
    <small>(2)</small>
    .
</p>
<figure class="img-polaroid">
    <img alt="" src="img/01-language-update.png"/>
</figure>

<p>Si vous ne voulez pas de certaines langues, vous pouvez les supprimer
    <small>(2)</small>
    ou les désactiver
    <small>(1)</small>
    dans le menu <strong>'Localization > Languages'</strong>.
</p>
<figure class="img-polaroid">
    <img alt="" src="img/02-language-update.png"/>
</figure>