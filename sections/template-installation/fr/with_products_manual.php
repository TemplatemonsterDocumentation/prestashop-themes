<h3>Installation manuelle de modèle avec des exemples de données</h3>
<p class="alert alert-info custom">Si vous ne voulez pas passer votre temps à installer le template, n'hésitez pas à <span class="label label-warning opener" onclick="showChat()">commander</span> le service d'installation via notre chat en direct.</p>
<p>Pour faire apparaître votre boutique Prestashop comme sur la démonstration en direct du modèle, vous devez installer des <strong>données exemples</strong>. Cela contient  tous les produits de démonstration, catégories, modules et paramètres de magasin.</p>
<p class="alert alert-danger">N'utilisez pas les exemples de données pour votre site Web en cours! Cela remplacera tous les produits et les paramètres de votre magasin.</p>
<p class="alert alert-warning">Assurez-vous que votre version du moteur PrestaShop correspond à la version spécifiée dans l'onglet "Détails techniques", mentionné comme  "PrestaShop Engine: 1.X.X.X".<br/> 
    De plus, assurez-vous que le préfixe de tables de base de données est <strong>ps_</strong>. Installez les données d'échantillons uniquement si votre moteur PrestaShop correspond à la version spécifiée.</p>
<h4>Téléchargement de fichiers de modèle</h4>
<p>Pour télécharger le modèle sur votre serveur:</p>
<ol class="index-list">
    <li>Ouvrez le package modèle.</li>
    <li>Ensuite, navigez vers le dossier <strong>/theme/manual_install/</strong>.</li>
    <li>Téléchargez des dossiers <strong>/img/</strong>, <strong>/modules/</strong> et <strong>/themes/</strong> au répertoire racine PrestaShop.</li>
</ol>
<p class="alert alert-info">Vous pouvez vérifier le tutoriel vidéo sur <a target="_blank" href="/help/how-upload-files-server-2.html">comment télécharger des fichiers sur un serveur en utilisant FTP</a> et <a href="/help/how-to-upload-files-to-a-server-using-cpanel-webhost-manager-whm.html" target="_blank">comment télécharger des fichiers sur un serveur en utilisant cPanel (WebHost Manager, WHM)</a>.</p>
<h4>Installation des exemples de données</h4>
<p>Les exemples de données sont fournis comme un fichier .SQL. Il se trouve dans le dossier <strong>theme/manual_install/</strong> du paquet modèle et s'appelle <strong>dump.sql</strong>.</p>
<p>Le fichier dump.sql peut être installé à l'aide de l'outil phpMyAdmin ou un autre outil de gestion de base de données dans le panneau d'hébergement. Ce tutoriel détaillé sur <a target="_blank" href="/help/phpmyadmin-how-to-import-sample-data-dump-file-phpmyadmin.html">comment importer des fichiers SQL</a> peut vous aider.</p>
<p class="alert alert-warning">Avant de procéder, sauvegardez votre base de données. Vous pouvez vérifier le tutoriel vidéo détaillé sur <a target="_blank" href="/help/phpmyadmin-how-to-backup-a-database.html">comment sauvegarder la base de données</a>.</p>
<p class="alert alert-danger">Assurez-vous que votre version du moteur PrestaShop correspond aux exigences du modèle. Sinon, la base de données sera endommagée.</p>
<p>Lorsque vous avez fini d'importer le fichier dump.sql, vous devrez activer le modèle.</p>
<p>Dans le panneau d'administration PrestaShop, allez à <strong>Préférences> Thèmes</strong>, choisissez votre modèle dans la section <strong>Thèmes</strong> et cliquez sur<strong>Sauvegarder</strong>.</p>