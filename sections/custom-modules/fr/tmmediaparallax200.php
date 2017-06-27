<h3>TM Media Parallax 2.0.0</h3>
<?php if ($project == 'eveprest' ) { ?>
    <div>
        <p style="margin-bottom: 0;">Disponible en:</p>
        <p style="margin-top: 0;" class="small text-secondary">Mode, Electronique, Pieces de Rechange, Mobilier, Seul Produit</p>
    </div>
<?php } ?>
<p class="alert alert-warning">
    Si vous avez la version 1.n de ce module installe dans votre Prestashop, il n'est pas recommandé de le mettre à jour. Vous devez d'abord supprimer l'ancienne version du module de fonctionner sans erreurs.
</p>
<p>Ce module est conçu pour d'ajouter un effet de parallaxe aux éléments DOM de la page.
Il vous permet de créer des parallaxes multicouches. Il offre également la possibilité d'ajouter une vidéo de fond 
(vous pouvez le télécharger de votre ordinateur vers le serveur) ou ajouter une vidéo YouTube.</p>
<h4>Panneau principal de TM Media Parallax</h4>
<p>Le panneau du module principal vous permet d'ajouter, modifier ou supprimer des éléments de parallaxe. </p>
<figure class="img-polaroid">
    <img src="img/main-panel.jpg" alt="" />
</figure>
<h4>Création d'un nouvel élément de parallaxe</h4>
<p>Pour créer un nouvel élément de parallaxe, appuyez sur l'icône 'plus' (1), dans le coin supérieur droit du panneau principal.</p>
<figure class="img-polaroid">
    <img src="img/main-panel-add-item.jpg" alt="" />
</figure>
<p>Ensuite, vous verrez le formulaire suivant.</p>
<figure class="img-polaroid">
    <img src="img/add-item.jpg" alt="" />
</figure>
<h4>Les options de formulaire pour ajouter des éléments de parallaxe</h4>
<ul class="index-list">
    <li>Sélecteur - le sélecteur CSS de l'élément avec effet de parallaxe appliqué. Par exemple, '#header .nav'</li>
    <li>Etat d'élément - l'état de l'élément (parallaxe ne sera pas affichée si désactivée)</li>
    <li>Vitesse - la valeur de chiffre de 0 à 2, qui définit la vitesse du bloc de parallaxe principale</li>
    <li>Offset - le retrait de la couche principale sur l'axe des Y</li>
    <li>Inverse - la direction de parallaxe</li>
    <li>Fondu  - cette option permet de configurer l'effet Fondu du bloc principal lors de défilement de la page</li>
    <li>Pleine largeur forcée - la pleine largeur forcée du bloc de parallaxe</li>
</ul>
<p>Appuyez sur 'Enregistrer' après avoir rempli tous les champs requis.</p>
<h4>Liste des couches parallaxe</h4>
<p>Pour voir la liste des couches de parallaxes, vous devez appuyer sur 'Voir' (1) près de l'élément principal de parallaxe.</p>
<figure class="img-polaroid">
    <img src="img/main-panel-view.jpg" alt="" />
</figure>
<p>Ensuite, vous verrez une table, dans laquelle les couches s'affichent après leur ajout.</p>
<figure class="img-polaroid">
    <img src="img/layouts-panel.jpg" alt="" />
</figure>
<h4>Ajout d'une nouvelle couche</h4>
<p>Afin de créer une nouvelle couche de parallaxe, appuyez sur l'icône 'plus' (1), dans le coin supérieur droit.</p>
<figure class="img-polaroid">
    <img src="img/layouts-panel-add.jpg" alt="" />
</figure>
<p>Ensuite, vous verrez le formulaire suivant.</p>
<figure class="img-polaroid">
    <img src="img/add-layout.jpg" alt="" />
</figure>
<p>Appuyez sur 'Enregistrer' après avoir rempli tous les champs requis.</p>
<h4>PTypes de couches parallaxes et leurs champs</h4>
<ul class="index-list">
    <li><p>Image de fond - l'image utilisée comme fond de parallaxe</p>
        <ul class="marked-list">
            <li>Etat d'élément - l'état de l'élément (parallaxe ne sera pas affichée si désactivée</li>
            <li>Vitesse de disposition - la valeur de chiffre de 0 à 2, qui définit la vitesse du bloc de parallaxe principale</li>
            <li>Offset - le retrait de la couche principale sur l'axe des Y</li>
            <li>Inverse - la direction de parallaxe</li>
            <li>Fondu - cette option permet de configurer l'effet Fondu du bloc principal lors de défilement de la page</li>
            <li>Image - le lien vers une image, à laquelle l'effet de parallaxe sera appliqué</li>
            <li>Ordre de tri - la position de mise en page, par rapport au reste des éléments</li>
        </ul>
    </li>
    <li><p>Vidéo de fond - la vidéo utilisée comme fond de parallaxe</p>
        <ul class="marked-list">
            <li>Etat d'élément - l'état de l'élément (parallaxe ne sera pas affichée si désactivée</li>
            <li>Vitesse de disposition - la valeur de chiffre de 0 à 2, qui définit la vitesse du bloc de parallaxe principale</li>
            <li>Offset - le retrait de la couche principale sur l'axe des Y</li>
            <li>Inverse - la direction de parallaxe</li>
            <li>Fondu - cette option permet de configurer l'effet Fondu du bloc principal lors de défilement de la page</li>
            <li>Image - le lien vers une image, à laquelle l'effet de parallaxe sera appliqué</li>
            <li>Vidéo parallaxe mp4 - le format mp4 de vidéo parallaxe</li>
            <li>Vidéo parallaxe webm - le format webm de vidéo parallaxe</li>
            <li>Ordre de tri - la position de mise en page, par rapport au reste des éléments</li>
        </ul>
    </li>
    <li><p>Texte - une couche de texte dont la position peut être définie avec CSS</p>
        <ul class="marked-list">
            <li>Etat d'élément - l'état de l'élément (parallaxe ne sera pas affichée si désactivée</li>
            <li>Vitesse de disposition - la valeur de chiffre de 0 à 2, qui définit la vitesse du bloc de parallaxe principale</li>
            <li>Offset - le retrait de la couche principale sur l'axe des Y</li>
            <li>Inverse - la direction de parallaxe</li>
            <li>Fondu - cette option permet de configurer l'effet Fondu du bloc principal lors de défilement de la page</li>
            <li>Contenu - le contenu de la couche</li>
            <li>Classe spécifique - la classe CSS personnalisée pour cette couche</li>
            <li>Ordre de tri - la position de mise en page, par rapport au reste des éléments</li>
        </ul>
    </li>
    <li><p>Youtube-background - la vidéo YouTube utilisée comme fond de parallaxe</p>
        <ul class="marked-list">
            <li>Etat d'élément - l'état de l'élément (parallaxe ne sera pas affichée si désactivée</li>
            <li>Vitesse de disposition - la valeur de chiffre de 0 à 2, qui définit la vitesse du bloc de parallaxe principale</li>
            <li>Offset - le retrait de la couche principale sur l'axe des Y</li>
            <li>Inverse - la direction de parallaxe</li>
            <li>Fondu - cette option permet de configurer l'effet Fondu du bloc principal lors de défilement de la page</li>
            <li>ID de vidéo - ID de la vidéo YouTube</li>
            <li>Ordre de tri - la position de mise en page, par rapport au reste des éléments</li>
        </ul>
    </li>
    <li><p>Image - une couche d'image, quelle position peut être définie avec CSS</p>
        <ul class="marked-list">
            <li>Etat d'élément - l'état de l'élément (parallaxe ne sera pas affichée si désactivée</li>
            <li>Vitesse de disposition - la valeur de chiffre de 0 à 2, qui définit la vitesse du bloc de parallaxe principale</li>
            <li>Offset - le retrait de la couche principale sur l'axe des Y</li>
            <li>Inverse - la direction de parallaxe</li>
            <li>Fondu - cette option permet de configurer l'effet Fondu du bloc principal lors de défilement de la page</li>
            <li>Image - le lien vers une image, à laquelle l'effet de parallaxe sera appliqué</li>
            <li>Classe spécifique - la classe CSS personnalisée pour cette couche</li>
            <li>Ordre de tri - la position de mise en page, par rapport au reste des éléments</li>
        </ul>
    </li>
</ul>
<h4>Téléchargement de vidéos et d'images sur le serveur</h4>
<p>Pour télécharger une vidéo ou une image sur le serveur via le Gestionnaire de fichiers, 
d'abord, vous devez appuyer sur l'icône 'fichier' (1) à côté du champ nécessaire.</p>
<figure class="img-polaroid">
    <img src="img/upload-file.jpg" alt="" />
</figure>
<p>Dans la fenêtre suivante, dans la ligne des 'actions', choisissez 'Télécharger' (2).</p>
<figure class="img-polaroid">
    <img src="img/upload-file-2.jpg" alt="" />
</figure>
<p>Ensuite, vous verrez une autre fenêtre pop-up, pour télécharger l'image ou le fichier vidéo ici.</p>
<h4>Avertissements et recommandations</h4>
<ul class="index-list">
    <li>Les périphériques mobiles (smartphones, tablettes) ont un effet de parallaxe désactivé par défaut, la couche d'image de bloc supérieure est utilisée en tant que fond</li>
    <li>La largeur totale forcée du bloc parallaxe affecte la vitesse de chargement de la page de manière plus critique qu'un chargement en bloc régulier.</li>
    <li>Plus la taille de la vidéo téléchargée est petite,  meilleure est la vitesse de chargement.</li>
</ul>