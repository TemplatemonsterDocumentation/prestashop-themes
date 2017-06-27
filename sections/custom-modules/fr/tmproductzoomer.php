<h3>Zoom de Droduit TM</h3>
<?php if ($project == 'eveprest' ) { ?>
    <div>
        <p style="margin-bottom: 0;">Available in:</p>
        <p style="margin-top: 0;" class="small text-secondary">Mode, Electronique, Pièces de Rechange, Mobilier, Seul Produit</p>
    </div>
<?php } ?>
<p>Ce module est une solution alternative pour le zoom d'image de produit standard sur la page de produit.
Il est entièrement compatible avec le carrousel supplémentaire standard de la miniature des produits et les attributs du produit.
Il vous permet de choisir parmi les trois options disponibles (fenêtre/lentille/interne) pour zoom d'image avec les paramètres avancés du plugin. 
Le module est basé sur le plugin <a href="//igorlino.github.io/elevatezoom-plus/" target="_blank">Elevatezoom Plus</a>.</p>
<h4>Installation et suppression</h4>
<p>Le module est installé et supprimé comme tout autre module Prestashop.
Une fois le module installé l'effet de zoom standard du produit sera automatiquement désactivé.
Après avoir supprimé le module, l'effet standard devrait re-activé à nouveau manuellement (si nécessaire) 
dans <strong>Préférences -> Produits -> Activer JqZoom au lieu de Fancybox sur la page du produit</strong>.</p>
<h4>Configuration du module</h4>
<p>Une fois le module installé, vous pouvez le configurer sur la page de configuration du module.</p>
<p>Par défaut, la page de configuration montre l'ensemble <strong>simplifié</strong> d'options.</p>
<figure class="img-polaroid">
    <img src="img/tmproductzoomer-1.png" alt=""/>
</figure>
<ul class="index-list">
    <li><strong>Mode en direct</strong> - le module est on/off.</li>
    <li><strong>Fancybox</strong> - pour afficher l'image agrandie dans la Fancybox en cliquant.</li>
    <li><strong>Changer l'image en hover</strong> - changer l'image principale de la vignette en hover (par défaut, est configuré pour basculer en clic).</li>
    <li><strong>Adaptable</strong> - Permet l'utilisation de fonctionnalités adaptables pour l'affichage des plugins sur les appareils mobiles.</li>
    <li><strong>Type de zoom</strong> - Choisissez le type de mode d'affichage d'image agrandie
        <ul>
            <li><strong>fenêtre</strong> - l'image agrandie apparaît à côté de l'image principale dans l'une des positions disponibles (16)</li>
            <li><strong>lentille</strong> - l'image est zoomée comme sous l'objectif en haut</li>
            <li><strong>interne</strong> - l'image est agrandie à l'intérieur du conteneur d'image principal, la couvrant complètement.</li>
        </ul>
        <div class="alert alert-info"><span>The mobile devices (&lt; 768) Les appareils mobiles ont un mode "lentille" activé immédiatement.</span></div>
    </li>
    <li><strong>Paramètres étendus</strong> - permet des paramètres avancés pour les utilisateurs expérimentés. 
	Vous pouvez consulter la <a href="//igorlino.github.io/elevatezoom-plus/api.htm" target="_blank">  documentation officielle </a> pour plus de détails.</li>
</ul>
<h6>Configuration <strong>étendue</strong> du module</h6>
<ul class="index-list">
    <li><strong>Défilement de zoom</strong> - le changement du taux de zoom sur le défilement de la molette de la souris (disponible pour tous les types).</li>
    <li><strong>Curseur</strong> - le type de curseur sur l'image agrandie. Les options suivantes sont disponibles: par défaut, curseur, pointeur (disponible pour tous les types).</li>
    <li><strong>Paramètres de zoom</strong> - disponible pour tous les types, si le 'Défilement de zoom' est activé.
        <figure class="img-polaroid"><img src="img/tmproductzoomer-2.png" alt="" /></figure>
        <ul class="marked-list">
            <li><strong>Niveau de zoom</strong> - le niveau de zoom en hover initial</li>
            <li><strong>Min Niveau de zoom</strong> - un niveau de zoom minimum</li>
            <li><strong>Max Niveau de zoom</strong> - un niveau de zoom maximal</li>
            <li><strong>Augmentation du défilement de zoom</strong> - une augmentation du défilement de zoom</li>
        </ul>
    </li>
    <li><strong>Assouplissement</strong> - l'effet d'apparence d'image agrandie (disponible pour tous les types).
        <figure class="img-polaroid"><img src="img/tmproductzoomer-3.png" alt="" /></figure>
        <ul class="marked-list">
            <li><strong>Zoom arrière</strong> - effet activé/désactivé</li>
            <li><strong>Quantité d'assouplissement</strong> - effet de la valeur de retard</li>
        </ul>
    </li>
    <li><strong>Image Crossfade</strong> - le flou de l'image principale en dehors de la zone de hover (lentille) - disponible pour fenêtre, lentille.</li>
    <li><strong>Paramètres de la fenêtre d'image agrandie</strong> - disponible pour la fenêtre.
        <figure class="img-polaroid"><img src="img/tmproductzoomer-4.png" alt="" /></figure>
        <ul class="marked-list">
            <li><strong>Largeur de la Fenêtre de Zoom</strong> - la largeur de fenêtre en px</li>
            <li><strong>Hauteur de la Fenêtre de Zoom<</strong> - la hauteur de la fenêtre en px</li>
            <li><strong>Décalage X de la fenêtre de Zoom</strong> - le décalage de fenêtre sur l'axe X</li>
            <li><strong>Décalage Y de la fenêtre de Zoom</strong> - le décalage de fenêtre sur l'axe Y</li>
            <li><strong>Position de la fenêtre de Zoom</strong> - le choix de la position de la fenêtre par rapport à l'image principale (les positions disponibles sont présentées sur l'image ci-dessous ce champ)</li>
            <li><strong>Couleur de fond de la fenêtre de Zoom</strong> - l'image de fond de la fenêtre (uniquement pour les images transparentes)</li>
            <li><strong>Intensité du zoom augmente</strong> - l'effet du ralentissement de la disparition de la fenêtre</li>
            <li><strong>Intensité du zoom diminue</strong> - l'effet du ralentissement de la disparition de la fenêtre</li>
            <li><strong>Taille de bordure</strong> - la largeur de bordure de fenêtre en px</li>
            <li><strong>Couleur de la bordure</strong> - la couleur de la bordure de la fenêtre</li>
        </ul>
    </li>
    <li><strong>Lentille</strong> - l'effet de la lentille (disponible pour fenêtre, lentille).
        <figure class="img-polaroid"><img src="img/tmproductzoomer-5.png" alt="" /></figure>
        <ul class="marked-list">
            <li><strong>Lentille</strong> - on/off</li>
            <li><strong>Forme de lentille</strong> - le type de lentille. Il peut prendre les valeurs suivantes: circulaire/arrondie ou carrée/rectangulaire</li>
            <li><strong>Couleur des lentille</strong> - le ouleur de fond intérieur de lentille</li>
            <li><strong>Opacité des lentille</strong> -  l'opacité du fond intérieur des lentilles</li>
            <li><strong>Taille de lentille</strong> -  la taille de lentille en px</li>
            <li><strong>Lentille augmente</strong> - la vitesse de l'effet d'apparence des lentilles</li>
            <li><strong>Lentille diminue</strong> - la vitesse de l'effet de disparition des lentilles</li>
            <li><strong>Bordure de lentille</strong> -  la largeur de bordure de lentilleh</li>
            <li><strong>Couleur de bordure de lentille</strong> - le couleur de bordure de lentille</li>
            <li><strong>Contenir la lentille</strong> - la restriction du débordement de lentille vers l'extérieur du conteneur d'image principal</li>
        </ul>
    </li>
    <li><strong>Teinte</strong> - l'effet de nuance sur la zone située à l'extérieur de l'objectif (disponible pour la fenêtre).
        <figure class="img-polaroid"><img src="img/tmproductzoomer-6.png" alt="" /></figure>
        <ul class="marked-list">
            <li><strong>Teinte</strong> - on/off</li>
            <li><strong>Couleur de teinte</strong> -  le fond de la surface extérieure de la lentille</li>
            <li><strong>Opacité de teinte</strong> - l'opacité de la surface extérieure de la lentille</li>
            <li><strong>Teinte augmente</strong> - la vitesse de l'effet d'apparence</li>
            <li><strong>Teinte diminue</strong> - la vitesse de l'effet de disparition</li>
        </ul>
    </li>
</ul>
<div class="alert alert-info">Si vous changez le type de zoom, le réglage des options avancées est modifié en conséquence pour afficher uniquement les paramètres disponibles pour le type sélectionné.</div>
<div class="alert alert-warning">Faites attention lors de l'édition des paramètres étendus. Si les paramètres sont réglés incorrectement, l'effet peut être laid.</div>