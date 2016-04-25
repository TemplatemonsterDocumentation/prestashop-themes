<h3>TM Product Zoomer</h3>

<p>Ce module est une solution alternative pour le zoom de l'image du produit sur la page du produit. Il est entièrement compatible avec le carrousel des vignettes de produit et les attributs du produit. Il vous permet de choisir parmi les trois options disponibles (fenêtre/lentille/partie interne) pour l'image zoom avec les paramètres avancés du plug-in. Le module est basé sur plugin <a href="//igorlino.github.io/elevatezoom-plus/" target="_blank">Elevatezoom Plus</a>.</p>

<h5>Installation et suppression</h5>
<p>Le module peut être installé et supprimé comme tout autre module PrestaShop. Une fois le module a été installé l'effet zoom standard sera automatiquement désactivé. Une fois le module a été supprimé l'effet zoom standard doit être activé manuellement (dans le cas de besoin) dans la section <strong>Preferences->Products->Enable JqZoom instead of Fancybox on the product page</strong>.</p>
<h5>Configuration de module</h5>
<p>Une fois le module a été installé, vous pouvez le configurer sur la page de configuration du module.</p>
<p>Par défaut, la page de configuration montre l'ensemble <strong>simplifié</strong> d'options.</p>
<figure class="img-polaroid"><img src="img/tmproductzoomer-1.png" alt="" /></figure>
<ol class="index-list">
    <li><strong>Mode Live (Live mode)</strong> - module est on/off </li>
    <li><strong>Fancybox (Fancybox)</strong> - si vous souhaitez afficher l'image agrandie dans le Fancybox sur clic.</li>
    <li><strong>Changer l'image sur hover (Change image on hover)</strong> - changer l'image principale sur hover de vignette (par défaut peut être changé sur clic)</li>
    <li><strong>Responsive (Responsive)</strong> - permet d'utiliser la fonctionnalité adaptative pour d'affichage de plug-in sur les appareils mobiles</li>
    <li><strong>Type de zoom (Zoom Type)</strong> - choisir le type de mode d'affichage de l'image agrandie
        <ul>
            <li><strong>fenêtre (window)</strong> - l'image agrandie apparaît à côté de l'image principale dans l'une des positions disponibles (16)</li>
            <li><strong>lentille (lens)</strong> - l'image est agrandie dans le conteneur de lentille, au-dessus de celui-ci</li>
            <li><strong>partie interne (inner)</strong> - l'image est agrandie à l'intérieur du conteneur d'image principale</li>
        </ul>
        <div class="alert alert-info"><span>Les appareils mobiles(&lt; 768) ont mode "lentille" activé instantanément</span></div>
    </li>
    <li><strong>(Extended settings)</strong> - activer les paramètres avancés pour les utilisateurs expérimentés. À côté vous pouvez voir le lien vers <a href="//igorlino.github.io/elevatezoom-plus/api.htm" target="_blank"> la documentation officielle pour plus de détails</a>.</li>
</ol>
<p><strong>configuration étendue</strong> du module</p>
<ol class="index-list">
    <li><strong>Défilement Zoom (Scroll Zoom)</strong> - changement de zoom à l'aide de la molette de souris.
        (pour tous les types)</li>
    <li><strong>Curseur(Cursor)</strong> - type de curseur sur hover de l'image agrandie. Il y a les options suivantes: défaut, curseur, réticule. (pour tous les types)</li>
    <li><strong>paramètres de zoom(zoom settings)</strong> - (pour tous les types, si 'Défilement Zoom' ('Scroll Zoom') est activé)
        <figure class="img-polaroid"><img src="img/tmproductzoomer-2.png" alt="" /></figure>
        <ul>
            <li>Niveau de zoom (Zoom Level) - le niveau de zoom sur hover initial</li>
            <li>Min Niveau de zoom (Min Zoom Level) - niveau de zoom minimum</li>
            <li>Max Niveau de zoom (Max Zoom Level) - niveau de zoom maximum</li>
            <li>Défilement Zoom Incrément (Scroll Zoom Increment) - incrément lors de défilement</li>
        </ul>
    </li>
    <li><strong>Assouplissement (Easing)</strong> - l'effet de l'apparence de l'image agrandie (pour tous les types)
        <figure class="img-polaroid"><img src="img/tmproductzoomer-3.png" alt="" /></figure>
        <ul>
            <li>Zoom Assouplissement (Zoom Easing) - effet on/off</li>
            <li>Assouplissement (Easing Amount) - retard de l'effet</li>
        </ul>
    </li>
    <li><strong>Image Crossfade (Image Crossfade)</strong> -  flou de l'image principale en dehors de la zone de hover (lentille).
        (disponible pour la fenêtre, la lentille)</li>
    <li><strong>paramètres de la fenêtre d'image agrandie (magnified image window settings)</strong> - (disponible pour la fenêtre)
        <figure class="img-polaroid"><img src="img/tmproductzoomer-4.png" alt="" /></figure>
        <ul>
            <li>Largeur de la fenêtre de zoom (Zoom Window Width) - largeur de la fenêtre en px</li>
            <li>Hauteur de la fenêtre de zoom (Zoom Window Height) - hauteur de la fenêtre en px</li>
            <li>Zoom Fenêtre Offset X (Zoom Window Offset X) - fenêtre décalée sur l'axe X</li>
            <li>Zoom Fenêtre Offset Y (Zoom Window Offset Y) - fenêtre décalée sur l'axe Y</li>
            <li>Zoom Fenêtre Position (Zoom Window Position) - choix de position de la fenêtre par rapport à l'image principale (les positions disponibles sont présentées sur l'image en dessous de ce champ)</li>
            <li>Zoom Fenêtre Bg Couleur (Zoom Window Bg Color) - image de fond de la fenêtre (pour des images transparentes uniquement)</li>
            <li>Zoom Fenêtre Fondu en entrée (Zoom Window Fade In) - l'effet de ralentissement de l'apparence de la fenêtre</li>
            <li>Zoom Fenêtre Fondu en sortie (Zoom Window Fade Out) - l'effet de ralentissement de disparition de la fenêtre</li>
            <li>Taille de la bordure (Border Size) - largeur de la bordure de la fenêtre en px</li>
            <li>Couleur de la bordure (Border Color) - couleur de la bordure de la fenêtre</li>
        </ul>
    </li>
    <li><strong>Zoom Lentille (Zoom Lens)</strong> - zoom lentille (disponible pour la fenêtre, la lentille)
        <figure class="img-polaroid"><img src="img/tmproductzoomer-5.png" alt="" /></figure>
        <ul>
            <li>Zoom Lentille (Zoom Lens) - on/off</li>
            <li>Forme de Lentille (Lens Shape) - type de lentille. Il peut prendre les valeurs suivantes: circulaire/arrondi ou carré/rectangulaire</li>
            <li>Couleur de Lentille (Lens Color) - couleur de fond de lentille</li>
            <li>Opacité de Lentille (Lens Opacity) - opacité de fond de lentille</li>
            <li>Taille de Lentille (Lens Size) - taille de lentille en px</li>
            <li>Lentille Fondu en entrée (Lens Fade In) - la vitesse de l'effet de l'apparence de la lentille</li>
            <li>Lentille Fondu en sortie (Lens Fade Out) - la vitesse de l'effet de disparition de la lentille</li>
            <li>Bordure de Lentille (Lens Border) - largeur de la bordure de lentille</li>
            <li>Couleur de la bordure de Lentille (Lens Border Color) - couleur de la bordure de Lentille</li>
            <li>Contient Lentille Zoom (Contain Lens Zoom) - la restriction du débordement de la lentille dehors de conteneur principal de l'image</li>
        </ul>
    </li>
    <li><strong>Teinte (Tint)</strong> - l'effet de l'ombre sur la zone en dehors de la lentille (disponible pour fenêtre)
        <figure class="img-polaroid"><img src="img/tmproductzoomer-6.png" alt="" /></figure>
        <ul>
            <li>Teinte (Tint) - effet on/off</li>
            <li>Couleur Teinte (Tint Color) - arrière-plan de la zone extérieure de la lentille</li>
            <li>Teinte Opacité (Tint Opacity) - opacité de la zone extérieure de la lentille</li>
            <li>Teinte Fondu en entrée (Tint Fade In) - la vitesse de l'effet de l'apparence</li>
            <li>Teinte Fondu en sortie (Tint Fade Out) -la vitesse de l'effet de la disparition</li>
        </ul>
    </li>
</ol>
<div class="alert alert-info">Si vous changez le type de zoom, les options avancées afficheront uniquement les paramètres disponibles pour le type sélectionné.</div>
<div class="alert alert-warning">Soyez prudent lors de modification des paramètres étendus. Si les paramètres sont définis de manière incorrecte, l'effet peut ne pas répondre à vos attentes.</div>