<h3>TM MotoPress Slider</h3>
<?php if ($project == 'eveprest') { ?>
    <div>
        <p style="margin-bottom: 0;">Disponible en:</p>
        <p style="margin-top: 0;" class="small text-secondary">Mode, Electronique, Pièces de Rechange, Mobilier</p>
    </div>
<?php } ?>

<h4>Installation du module</h4>
<p>Ce module permet d'ajouter MotoPress Slider à votre page HTML. 
Il peut être installé comme tout autre module Prestashop:</p>
<ul class="index-list">
    <li><p>Téléchargez le module dans le dossier /modules.</p></li>
    <li><p>Allez au panneau d'administration -> Modules et Services -> Modules et Services (1), trouvez le module (2) et cliquez sur le bouton 'Installer' (3).</p>
        <figure class="img-polaroid">
            <img src="img/mpslider00_install.png" alt=""/>
        </figure>
    </li>
    <li><p>Une fois le module est installé avec succès, vous pouvez voir le menu 'MotoPress Slider' au bas de votre panneau d'administration (1).<br>
           Appuyez sur le bouton 'MotoPress Slider' dans ce menu(2).
        </p>
        <figure class="img-polaroid">
            <img src="img/mpslider01_open.png" alt=""/>
        </figure>
    </li>
</ul>

<h4>Utilisation du module</h4>
<h5>Ajout/modification du slider</h5>
<p>Maintenant, vous pouvez ajouter un nouveau (1) ou modifier l'élément existant (2).</p>
<figure class="img-polaroid">
    <img src="img/mpslider02_addedit.png" alt=""/>
</figure>
<h5>Ajout d'un nouveau slider</h5>
<p>Quand vous avez cliqué sur le bouton 'Ajouter un slider', il y a une option de choisir si cela devrait être 'Slider personnalisé' ou 'Slider de produit'.</p>
<figure class="img-polaroid">
    <img src="img/mpslider03_slider_add.png" alt=""/>
</figure>
<p>La différence entre ces deux types est la suivante: le Slider de produit est créé à partir des produits de votre magasin,
    cependant, dans le Slider personnalisé, vous pouvez ajouter autant de diapositives que vous le souhaitez, en les personnalisant selon vos besoins.</p>
<p>Les réglages de Slider personnalisé et de Slider de produit, sont légèrement différents. <br>
   Ils seront mentionnés ci-dessous.</p>

<h4>Configuration du module</h4>
<h5>Paramètres de Slider</h5>
<p>Les paramètres principaux du slider. La description détaillée des paramètres se trouve sur la capture d'écran ci-dessous.</p>
<figure class="img-polaroid">
    <img src="img/mpslider04_slider_slider_settings.png" alt=""/>
</figure>
<ul class="marked-list">
    <li><strong>Titre du slider</strong> - le titre du slider (exemple: Slider1); 
	c'est nécessaire lorsque vous avez plusieurs sliders et devez les distinguer.</li>
    <li><strong>Alias du slider</strong> - l'alias unique qui sera utilisé dans les codes courts
	pour intégrer le slider (exemple: slider1); doit être unique.</li>
    <li><strong>Code court du slider</strong> - copiez ce shortcode et collez dans votre page.</li>
    <li><strong>Forcer pleine largeur</strong> - activez cette option pour que ce slider s'étende à pleine largeur.</li>
    <li><strong>Forcer pleine hauteur</strong> - activez cette option pour que ce slider s'étende à pleine hauteur.</li>
    <li><strong>Forcer grille pleine taille</strong> - fait la grille s'étende au conteneur parent 
	(mais vous devez toujours définir la largeur et la hauteur de la grille).
    </li>
    <li><strong>Taille de grille des couches</strong> - permet de définir la largeur et la hauteur initiale des couches.</li>
    <li><strong>Enable slideshow</strong> - activer/désactiver le diaporama.</li>
    <li><strong>Délai du diaporama</strong> - le temps qu'une diapositive reste sur l'écran; est mesuré en millisecondes.</li>
    <li><strong>Animation de diaporama</strong> - choisissez l'animation pour changer les diapositives.</li>
    <li><strong>Durée du diaporama</strong> - la durée de l'animation en millisecondes.</li>
    <li><strong>Assouplissement du diaporama</strong> - l'assouplissement du changement de diapositive.</li>
    <li><strong>Commencez par une diapositive</strong> - index de la première diapositive.</li>
</ul>
<h5>Contrôles</h5>
<p>Les options qui font référence aux contrôles de commutation de diapositives.</p>
<figure class="img-polaroid">
    <img src="img/mpslider05_slider_controls.png" alt=""/>
</figure>
<ul class="marked-list">
    <li><strong>Afficher les flèches</strong> - afficher/masquer les flèches.</li>
    <li><strong>Afficher les puces</strong> - afficher/masquer les puces.</li>
    <li><strong>Afficher la minuterie de diaporama</strong> - afficher/masquer la minuterie.</li>
    <li><strong>Afficher le bouton de lecture/pause du diaporama</strong> - afficher ou masquer le bouton de lecture/pause.</li>
    <li><strong>Masquer les contrôles lorsque la souris dépasse du slider</strong> - masque les contrôles lorsque la souris n'est pas sur la zone du slider.</li>
    <li><strong>Pause en hover</strong> - permet de mettre en pause le diaporama en hover.</li>
    <li><strong>Ordre inverse des diapositives</strong> - animer les diapositives dans l'ordre inverse.</li>
    <li><strong>Afficher un compteur</strong> - permet d'afficher le nombre de diapositives.</li>
    <li><strong>Activer le glissement</strong> - activer le glissement sur un ordinateur.</li>
</ul>
<h5>Apparence</h5>
<p>Les options qui font référence à l'affichage du slider</p>
<figure class="img-polaroid">
    <img src="img/mpslider06_slider_appearance.png" alt=""/>
</figure>
<ul class="marked-list">
    <li><strong>Afficher sur</strong> - les crochets où le curseur doit être affiché.</li>
    <li><strong>Visible</strong> - les résolutions min. et/ou max. d'écran qunad le slider est visible 
	(peut être réglé à l'aide des presets: téléphone / tablette / ordinateur).
    </li>
    <li><strong>Retard d'initialisation</strong> - the delay bofore slider initialization (should be set in milliseconds).
    </li>
    <li><strong>Initialiser le curseur sur le défilement</strong> - choisissez si vous voulez que le slider soit initialisé en mode défilement.</li>
    <li><strong>Nom de classe personnalisé du slider</strong> - le nom de la classe personnalisée utilisée pour le slider.</li>
    <li><strong>Styles personnalisés du slider</strong> - les styles css personnalisés peuvent être ajoutés directement dans cette zone.</li>
</ul>
<h5>Contenu</h5>
<p>Ce menu apparaît uniquement pour le Slider de produit.<br>
    Quand il sera configuré, appuyez sur le bouton 'Créer' (1).</p>
<figure class="img-polaroid">
    <img src="img/mpslider07_slider_content1.png" alt=""/>
</figure>
<ul class="marked-list">
    <li><strong>Lier les diapositives au produit</strong> - activez si vous souhaitez ouvrir la page du produit après avoir cliqué sur la diapositive avec le produit.</li>
    <li><strong>Ouvrir dans une nouvelle fenetre</strong> - enable this option to open the product page in new window.</li>
    <li><strong>Catégories</strong> - les catégories avec produits à afficher dans un slider (Ctrl + clic pour sélectionner plusieurs catégories).</li>
    <li><strong>Tags</strong> - les tags à inclure.</li>
    <li><strong>Affiche uniquement les produits en stock</strong> - seuls les produits en stock seront affichés.</li>
    <li><strong>Afficher uniquement les produits en vente</strong> - seuls les produits en vente seront affichés.</li>
    <li><strong>Exclure les produits</strong> - ajouter des ID de produits séparés par des virgules.</li>
    <li><strong>Inclure les produits</strong> - ajouter des ID de produits séparés par des virgules.</li>
    <li><strong>Numéro de produit</strong> - le nombre de produits à afficher.</li>
    <li><strong>Nombre de premiers résultats à ignorer (décalage)</strong> - le nombre de premières diapositives qui ne seront pas affichées.</li>
    <li><strong>Trier par</strong> - le type d'ordre à appliquer.</li>
    <li><strong>Direction d'ordre</strong> - l'ordre descendant ou ascendant.</li>
</ul>
<p>Vous trouverez ci-dessous une liste de produits qui seront affichés dans un slider. 
Après avoir modifié les paramètres, appuyez sur le bouton 'Aperçu des produits'(1).</p>
<figure class="img-polaroid">
    <img src="img/mpslider08_slider_content2.png" alt=""/>
</figure>
<p>Une fois que le slider a été configuré, appuyez sur le bouton 'Enregistrer'.</p>
<h5>Ajout/édition de diapositives</h5>
<p>Pour ajouter une nouvelle diapositive, appuyez sur le bouton 'Ajouter diapositive'(1). Pour éditer celui existant, cliquez sur 'Modifier' (2).</p>
<figure class="img-polaroid">
    <img src="img/mpslider09_slide_edit.png" alt=""/>
</figure>
<h5>Paramètres de diapositive</h5>
<p>MotoPress Slider contient l'éditeur de style. Cela permet de personnaliser les couches de diapositives, leurs styles et textes 
en utilisant la zone de prévisualisation et en évitant tout changement manuel de code ou de règles CSS.</p>
<p>Sélectionnez le slider pour éditer et choisir la diapositive pour modifier.</p>

<h6>Général</h6>
<p>Les paramètres de diapositives générales incluent le titre et l'état de la diapositive</p>
<figure class="img-polaroid">
    <img src="img/mpslider10_slide_general.png" alt=""/>
</figure>

<h6>Couleur</h6>
<p>Dans l'onglet 'Couleur', il existe deux variantes de type de couleur de fond - couleur de fond et gradient. 
Choisissez l'option et la couleur préférable.</p>
<figure class="img-polaroid">
    <img src="img/mpslider11_slide_color.png" alt=""/>
</figure>

<p>Si vous choisissez gradient, sélectionnez le dégradé de couleur 1, le dégradé de couleur 2 et l'angle de dégradé.</p>
<figure class="img-polaroid">
    <img src="img/mpslider12_slide_gradient.png" alt=""/>
</figure>

<h6>Image</h6>
<p>L'image de fond peut être jointe à partir de la bibliothèque multimédia ou de l'URL externe.</p>
<p>L'image peut également être ajoutée à partir de votre dossier local à la Bibliothèque Média. Pour ce faire, appuyez sur le bouton 'Parcourir' (1).</p>
<figure class="img-polaroid">
    <img src="img/mpslider13_slide_image.png" alt=""/>
</figure>

<p>Ensuite, choisissez l'onglet 'Télécharger Nouveau' (2) et cliquez sur la zone sélectionnée ou simplement faites glisser les images.</p>
<figure class="img-polaroid">
    <img src="img/mpslider14_slide_image_upload.png" alt=""/>
</figure>

<h6>Vidéo</h6>
<p>Vous pouvez ajouter de la vidéo à votre diapositive. Pour ajouter une vidéo, choisissez des sources pour différents formats vidéo et définissez d'autres paramètres pour l'affichage vidéo.
Vous devrez télécharger une vidéo dans les formats MP4, WEBM ou OGG et fournir l'URL du fichier vidéo dans l'onglet Vidéo.</p>
<p>Les réglages pour l'affichage vidéo peuvent être ajustés.</p>
<figure class="img-polaroid">
    <img src="img/mpslider15_slide_video.png" alt=""/>
</figure>

<h6>Lien</h6>
<p>L'onglet Lien permet d'ajouter un lien à votre diapositive, attribuer l'id, la classe, ajouter le titre du lien et la relation:</p>
<figure class="img-polaroid">
    <img src="img/mpslider16_slide_link.png" alt=""/>
</figure>

<h6>Visibilité</h6>
<p>Les options de visibilité des diapositives peuvent être gérées à partir de l'onglet Visibilité:</p>
<figure class="img-polaroid">
    <img src="img/mpslider17_slide_visibility.png" alt=""/>
</figure>

<h6>Misc</h6>
<p>La section Misc permet d'attribuer une classe css ou un id à la diapositive.</p>
<figure class="img-polaroid">
    <img src="img/mpslider18_slide_misc.png" alt=""/>
</figure>

<p>Cliquez sur le bouton 'Enregistrer la diapositive' quand vous avez fini de modifier.</p>


<h4>Contenu de la diapositive</h4>
<p>Ici, vous pouvez ajouter des textes, des images, des boutons et des vidéos à chaque diapositive. <br>
    Il est divisé en deux sections principales: 'Paramètres de couche' (1) et 'Tri des couches' (2).
    Au-dessus de la zone 'Paramètres de couche', il existe quatre onglets pour ajouter le contenu nécessaire (3). 
	Après avoir choisi l'élément que vous souhaitez ajouter, vous pouvez continuer une personnalisation détaillée. <br>
    La grande fonctionnalité est que ces contenus sont ajoutés en couches individuelles,
	Afin que vous puissiez les déplacer vers le haut et vers le bas dans la section 'Tri des couches' (2).</p>
<p>Les couches peuvent être supprimées séparément (4) ou tout à la fois (5). </p>
<figure class="img-polaroid">
    <img src="img/mpslider19_slide_add_text.png" alt=""/>
</figure>
<h5>Paramètres de couche</h5>
<h6>Ajouter du texte</h6>
<p>Cet onglet est créé pour ajouter, modifier et localiser des textes en diapositive.</p>
<figure class="img-polaroid">
    <img src="img/mpslider19_slide_add_text_2.png" alt=""/>
</figure>
<ul class="marked-list">
    <li>En utilisant des carrés gris, vous pouvez rapidement définir la position du texte (1).</li>
    <li>Pour l'ajuster, ajoutez la valeur 'X' et 'Y' en pixels et définissez la largeur de cet élément (2).</li>
    <li>Si 'Whitespace' est réglé sur 'Normal', le texte sera enveloppé normalement.
	Si 'No-wrap' est choisi, l'emballage sera ignoré(3).</li>
    <li>Dans la deuxième colonne, vous pouvez contrôler l'animation de l'élément - comment, combien de temps et quand commencer et finir (4)
        pendant la durée de la diapositive (c'est présenté ci-dessous pour votre commodité(5); pour le modifier, passez aux 
		Paramètres du Slider -> Délai du diaporama). Vous pouvez également prévisualiser l'animation dans la fenêtre
		qui apparaît après avoir cliqué sur le bouton 'Editer'.
		Choisissez la durée, la fonction de facilité, l'effet d'animation et appuyez sur 'Play' pour prévisualiser. 
		Ensuite, cliquez sur 'Appliquer' lorsqu'il répond à vos attentes.
    </li>
</ul>
<p>Les paramètres décrits ci-dessus sont similaires pour chaque élément, c'est pourquoi les options de la troisième colonne seront mentionnées plus bas.</p>
<figure class="img-polaroid">
    <img src="img/mpslider19_slide_add_text_3.png" alt=""/>
</figure>
<ul class="marked-list">
    <li>Le texte lui-même peut être ajouté dans la zone de texte(6).</li>
    <li>Le style de texte peut être choisi parmi les préréglages dans la liste déroulante (7), 
	édité après avoir appuyé sur le bouton 'Editer' (8) et désactivé, cliquez sur le bouton 'Supprimer'(9). 
	Une fois que le style de texte a été modifié, appuyez sur le bouton 'Appliquer le style'.
	Si vous souhaitez modifier et enregistrer le style existant, appuyez sur le bouton 'Dupliquer', éditez-le et enregistrez-le.
	Pour créer le style à partir de zéro qui sera souvent appliqué, cliquez sur 'Créer un nouveau préréglage' et modifiez-le.
    </li>
    <li>Il est aussi possible d'ajouter une classe personnalisée à chaque élément (10).</li>
</ul>
<h6>Ajouter une image</h6>
<figure class="img-polaroid">
    <img src="img/mpslider21_slide_add_image.png" alt=""/>
</figure>
<ul class="marked-list">
    <li>Pour choisir l'image, appuyez sur le bouton 'Sélectionner unr image' (1).</li>
    <li>Si vous souhaitez ajouter le lien à l'image, ajoutez l'URL de la page cible dans le champ 'Lien'(2).</li>
    <li>Ce lien peut être ouvert dans une nouvelle fenêtre ('On') ou dans le même ('Off') (3).</li>
    <li>Certains styles peuvent également être appliqués aux images (par exemple, styles de bordure) (4).</li>
    <li>Il est aussi possible d'ajouter des classes personnalisées à l'élément(5).</li>
</ul>
<h6>Ajouter un bouton</h6>
<p>Les styles de boutons sont presque identiques aux styles d'image.</p>
<figure class="img-polaroid">
    <img src="img/mpslider22_slide_add_button.png" alt=""/>
</figure>
<ul class="marked-list">
    <li>Ajouter le texte du bouton dans le champ correspondant (1).</li>
    <li>Ajoutez l'URL de la page cible dans le champ 'Lien' (2).</li>
    <li>Choisissez le style de votre bouton ou créez votre propre style (3).</li>
</ul>
<h6>Ajouter une vidéo</h6>
<figure class="img-polaroid">
    <img src="img/mpslider23_slide_add_video.png" alt=""/>
</figure>
<ul class="marked-list">
    <li>La vidéo peut être ajoutée comme un lien vers Youtube ou Vimeo, ou il peut être choisie de la Bibliothèque Multimédia(1).</li>
    <li>Ajouter l'URL de la vidéo (2).</li>
    <li>Ajouter l'URL de l'image d'aperçu (3).</li>
    <li>Choisissez les options d'affichage vidéo (4) et ajoutez des styles (5).</li>
</ul>
<p>Après avoir fait des modifications à votre diapositive,(1), n'oubliez pas de cliquer sur le bouton 'Enregistrer la diapositive',
 puis appuyez sur 'Fermer' (2) ou allez vers d'autres diapositives (3).</p>
<figure class="img-polaroid">
    <img src="img/mpslider24_slide_save.png" alt=""/>
</figure>

<h4>Importation et exportation de slider</h4>
<h6>Import & Export de Slider est très utile si vous devez transférer un slider sur différents sites Web.
Vous n'avez pas besoin de passer beaucoup de temps à reconstruire des sliders à partir de zero. 
Si vous êtes un développeur, vous pouvez créer des sliders sur votre site Web, 
montrez-les à vos clients et importez ces slides sur les sites Web des clients.</h6>
<h5>Exportation de slider</h5>
<h6>Suivez ces étapes faciles pour apprendre à exporter le Slider Motopress.</h6>
<ul class="index-list">
    <li>
        <p>Allez à Motopress Slider dans votre panneau d'administration (1, 2).</p>
        <figure class="img-polaroid">
            <img src="img/mpslider01_open.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>Cliquez sur le bouton 'Exporter' (3).</p>
        <figure class="img-polaroid">
            <img src="img/mpslider25_export1.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>Choisissez les sliders que vous voulez exporter (4) et cliquez sur le bouton 'Exporter les Sliders' (5).</p>
        <figure class="img-polaroid">
            <img src="img/mpslider26_export2.png" alt=""/>
        </figure>
    </li>
    <li>Vous serez invité à enregistrer le fichier .json  exporté sur l'ordinateur.</li>
</ul>
<h5>Importation de slider</h5>
<h6>Pour importer Motopress Slider, procédez comme suit:</h6>
<ul class="index-list">
    <li>
        <p>Allez à Motopress Slider dans votre panneau d'administration (1, 2).</p>
        <figure class="img-polaroid">
            <img src="img/mpslider01_open.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>Appuyez sur le bouton 'Importer' (3).</p>
        <figure class="img-polaroid">
            <img src="img/mpslider27_import1.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>Sélectionnez le fichier .json exporté à partir de votre ordinateur, en cliquant sur le bouton 'Parcourir' (4) et appuyez sur 'Importer' (5).</p>
        <figure class="img-polaroid">
            <img src="img/mpslider28_import2.png" alt=""/>
        </figure>
    </li>
    <li>Les paramètres du slider, les images et autres contenus du slider devraient être exportés avec succès sur votre site.</li>
</ul>