<h3>Installation du moteur PrestaShop</h3>
<p class="alert alert-warning">Assurez-vous que votre version de PrestaShop correspond à la version spécifiée dans l'onglet "Détails techniques" mentionné comme "PrestaShop Engine: 1.X.X.X".<br/> 
De plus, assurez-vous que le préfixe de tables de base de données est <strong>ps_</strong>. Installez les données de l'échantillon uniquement si votre moteur PrestaShop correspond à la version spécifiée.</p>
<p>Lorsque vous avez terminé le téléchargement des fichiers, vous pouvez démarrer l'installation de PrestaShop. Ouvrez votre navigateur Web et tapez votre 'nom de domaine/chemin d'accès à votre répertoire PrestaShop' dans la barre d'adresse, puis rechargez la page en cours. Vous devriez voir l'écran d'accueil. Suivez les instructions ci-dessous pour installer PrestaShop.</p>
<h4>Assistant d'installation (Choisissez votre langue)</h4>
<h6>Sélectionnez la langue d'installation.</h6>
<p class="alert alert-warning">Remarque: l'option de langue d'installation n'affectera pas le langage de votre magasin. Par défaut, PrestaShop offre en anglais. Vous pouvez installer des packages de localisation supplémentaires pour modifier la langue du magasin après.</p>
<p>Lorsque vous avez terminé, cliquez sur le bouton <strong>'Suivant'</strong>.</p>
<figure class="img-polaroid">
    <img src="img/engine-install-01.png" alt="">
</figure>
<h4>Assistant d'installation (Contrats de licence)</h4>
<ol class="index-list">
    <li>Veuillez vérifier le contrat de licence.</li>
    <li>Lorsque vous avez terminé, cliquez sur le bouton <strong>'Suivant'</strong>.</li>
</ol>
<figure class="img-polaroid">
    <img src="img/engine-install-02.png" alt="">
</figure>
<h4>Compatibilité du Système</h4>
<p>Vérifiez les paramètres PHP et les autorisations des répertoires et fichiers. 
En cas d'erreur, contactez votre fournisseur d'hébergement pour obtenir de l'aide supplémentaire..</p>
<p>Si tout est correct, cliquez sur le bouton <strong>'Suivant'</strong>.</p>
<figure class="img-polaroid">
    <img src="img/engine-install-03.png" alt="">
</figure>
<h4>Configuration du magasin</h4>
<p>Cette étape vous oblige à entrer les paramètres du magasin comme Nom du magasin, activité, pays, fuseau horaire, etc..</p>
<p>Tous ces paramètres peuvent être modifiés plus tard dans votre panneau d'administration PrestaShop.</p>
<figure class="img-polaroid">
    <img src="img/engine-install-04.png" alt="">
</figure>
<h4>Configuration du système</h4>
<p>Si vous avez déjà la base de données MySQL, entrez les détails de la base de données dans les champs appropriés ci-dessous.</p>
<p>Sinon, vous pouvez obtenir les détails de la base de données à partir de votre panneau d'hébergement ou en contactant votre fournisseur d'hébergement.</p>
<p>Lorsque vous avez terminé, cliquez sur le bouton <strong>'Suivant'</strong>.</p>
<figure class="img-polaroid">
    <img src="img/engine-install-05.png" alt="">
</figure>
<h4>Installation est terminée</h4>
<p>C'est l'étape finale de l'installation.</p>
<p class="alert alert-danger">Pour des raisons de sécurité, il faut supprimer le répertoire<strong>/install/</strong> sur votre serveur d'hébergement.
</p>
<figure class="img-polaroid">
    <img src="img/engine-install-06.png" alt="">
</figure>
<p class="alert alert-info">À partir de la version 1.5.4, PrestaShop renomme le dossier administrateur pour vous: il devient le mot "admin" suivi de 4 chiffres aléatoires, par ex. "admin8814." Le renommage se produit dès que vous atteignez le dossier "admin" pour la première fois: PrestaShop le renomme, puis accède correctement au dossier renommé.<br/><br/>
    Connectez-vous au panneau d'administration PrestaShop en allant à votre dossier "admin" nouvellement renommé, et commencez à remplir votre catalogue avec vos données.
</p>
<h6>Si vous rencontrez des difficultés, vérifiez le <a target="_blank" href="http://doc.prestashop.com/display/PS16/Getting+Started">manuel officiel d'installation de PrestaShop</a>.</h6>
