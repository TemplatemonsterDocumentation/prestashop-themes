<h3>Vue 360 TM</h3>
<?php if ($project == 'eveprest' ) { ?>
    <div>
        <p style="margin-bottom: 0;">Disponible en:</p>
        <p style="margin-top: 0;" class="small text-secondary">Un Produit</p>
    </div>
<?php } ?>
<p>Le module affiche des images dans un effet 3D et permet aux utilisateurs de les faire pivoter à 360 degrés. La rotation peut démarrer automatiquement sur le chargement de la page, ou le client peut tourner l'image manuellement, en faisant glisser le bouton gauche de la souris.</p>
<p>En outre, le module peut être utilisé pour ajouter une vue panoramique (ou plusieurs vues panoramiques) à la page d'accueil.<p>
<p>Le mode visualisation 360 est également disponible sur la page du produit.</p>

<h4>Installation</h4>
<p>Naviguez vers Modules et Services -> Modules et Services (1)dans votre panneau d'administration et trouvez le module Vue 360 TM (2). Ensuite, cliquez sur le bouton 'Installer' (3).</p>
<figure class="img-polaroid">
    <img src="img/360view-1.png" alt=""/>
</figure>
<h4>Configuration du module</h4>
<p>Une fois que le module a été installé, vous verrez la page 'Configure' avec les paramètres de module par défaut.</p>
<p>On peut trouver ici les paramètres pour la vue 360 (1) et pour la vue panoramique (2).</p>
<figure class="img-polaroid">
    <img src="img/360view-2.png" alt=""/>
</figure>
<h4>Vue 360</h4>
<p>es paramètres sont décrits ci-dessous la capture d'écran. Définissez-les selon vos besoins et cliquez sur le bouton 'Enregistrer' (1).</p>
<figure class="img-polaroid">
    <img src="img/360view-3.png" alt=""/>
</figure>
<ul class="marked-list">
    <li><strong>Activer sur Home</strong> - l'option pour afficher la vue 360 du produit sur la page d'accueil.</li>
    <li><strong>Choisir un produit</strong>(apparaît si 'Activer sur Home' est réglé sur 'Qui') - choisissez un produit qui doit être affiché en mode 360.</li>
    <li><strong>Animer</strong> - l'option pour afficher le produit en rotation automatique en chargement de la page.</li>
    <li><strong>Durée d'image</strong>(apparaît si 'Animer' est réglé sur 'Oui') - le période de temps avant une image sera remplacée par une autre; devrait être entré en millisecondes.</li>
</ul>
<h5>Ajout/Suppression d'images</h5>
<ul class="index-list">
    <li>
        <p>Accédez au Catalogue->Produits dans votre panneau d'administration(1), choisissez le produit et cliquez sur le bouton 'Éditer' (2).</p>
        <figure class="img-polaroid">
            <img src="img/360view-4.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>Pour ajouter des images, utilisez l'onglet 'Affichage 360 TM'(1) dans les paramètres du produit et appuyez sur le bouton 'Ajouter des fichiers' (2).</p>
        <figure class="img-polaroid">
            <img src="img/360view-5.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>Ensuite, appuyez sur 'Télécharger des fichiers' (1).</p>
        <figure class="img-polaroid">
            <img src="img/360view-6.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>Lorsque les fichiers ont été téléchargés avec succès, cliquez sur le bouton 'Enregistrer' (1).</p>
        <figure class="img-polaroid">
            <img src="img/360view-7.png" alt=""/>
        </figure>
        <p class="alert alert-warning">Pour rendre la rotation en douceur, ajoutez plus d'images.</p>
    </li>
    <li>
        <p>Après avoir ajouté des photos d'images, la vue 360 du produit sera affichée sur la page d'accueil*. <br>
            *<small>Il apparaîtra aussi sur la page du produit après la description.</small></p>
    </li>
    <li>
        <p>Pour désactiver la vue 360 sur la page d'accueil, allez simplement aux paramètres de module Vue 360 TM et sélectionnez 'Non' pour 'Activer sur Home'.</p>
    </li>
    <li>
        <p>Pour désactiver la vue 360 sur la page du produit, ouvrez l'onglet 'Vue 360 TM' dans les paramètres du produit et supprimez toutes les images.</p>
    </li>
</ul>
<h4>Panorama</h4>
<p>On peut utiliser ce module pour ajouter une vue panoramique à la page d'accueil.</p>
<p class="alert alert-warning">Vous pouvez ajouter autant de blocs panoramiques que vous avez besoin.</p>
<h5>Ajout de panorama</h5>
<ul class="index-list">
    <li>
        <p>Pour ajouter un nouveau panorama, ouvrez la page de configuration du module et cliquez sur le bouton'+' ('Ajouter un nouvel élément') (1).</p>
        <figure class="img-polaroid">
            <img src="img/360view-8.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>Vous verrez les paramètres panoramiques décrits ci-dessous.</p>
        <figure class="img-polaroid">
            <img src="img/360view-9.png" alt=""/>
        </figure>
        <ul class="marked-list">
            <li><strong>Sélectionner un fichier</strong> - choisissez un fichier panoramique; ce champ est requis (au moins pour la langue par défaut).</li>
            <li><strong>Titre</strong> - entrez un titre pour le panorama; ce champ est requis (au moins pour la langue par défaut).</li>
            <li><strong>Largeur</strong> - largeur du bloc panoramique; ce champ est requis.</li>
            <li><strong>Hauteur</strong> - hauteur du bloc panoramique; ce champ est requis.</li>
            <li><strong>Etat</strong> - activer/désactiver l'élément panoramique sur la page d'accueil.</li>
            <li><strong>Loop</strong> - commencez à faire tourner l'image depuis le début après sa fin.</li>
            <li><strong>Animer</strong> - option pour afficher le panorama en rotation automatique pendant le chargement de la page.</li>
            <li><strong>Durée d'image</strong>(apparaît si 'Animer' est réglé sur 'Oui') - le période pendant laquelle l'image panoramique fait un cercle complet; devrait être entré en millisecondes; ce champ est requis.</li>
        </ul>
    </li>
    <li>
        <p>Appuyez sur le bouton 'Enregistrer' et votre image panoramique apparaîtra sur la page d'accueil.</p>
    </li>
</ul>
<h5>Suppression de panorama</h5>
<ul class="index-list">
    <li>
        <p>Pour supprimer le panorama - choisissez l'élément, cliquez sur la flèche du bouton (1), puis cliquez sur 'Supprimer' (2).</p>
        <figure class="img-polaroid">
            <img src="img/360view-10.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>Ensuite, confirmez la suppression.</p>
    </li>
</ul>