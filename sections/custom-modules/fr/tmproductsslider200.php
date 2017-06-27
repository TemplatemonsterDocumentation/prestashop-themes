<h3>Slider de Produits TM 2.0.0</h3>
<?php if ($project == 'eveprest' ) { ?>
    <div>
        <p style="margin-bottom: 0;">Disponible en:</p>
        <p style="margin-top: 0;" class="small text-secondary">Electronique, Mobilier</p>
    </div>
<?php } ?>
<h4>Introduction</h4>
<p>Ce module sert à créer des galeries, en fonction des données du produit et en les affichant sous la forme de diapositives sur le frontend du site. Le module fournit 4 méthodes d'affichage de la galerie avec des paramètres individuels. Chaque méthode possède des fonctionnalités prédéfinies. La configuration avancée est aussi disponible. Le module peut afficher une quantité illimitée de produits avec des informations diverses.</p>
<h4>Installation et suppression du module</h4>
<p class="alert alert-warning">
    Si vous avez la version 1.n de ce module installé dans Prestashop, il n'est pas recommandé de le mettre à jour. Vous devez d'abord supprimer l'ancienne version du module de fonctionner sans erreurs.
</p>
<p>Le module est installé et supprimé comme tout autre module Prestashop.</p>
<p class="alert alert-info">
    <span>Après la suppression ou la réinstallation du module, tous les paramètres et les filtres sont mis au rebut.</span>
</p>
<h4>Ajout/suppression/édition d'une diapositive</h4>
<h5>Ajout d'une diapositive</h5>
<p>Pour ajouter un produit à la galerie, accédez au produit nécessaire dans <strong>Catalogue
        -> Produits</strong>. Appuyez ensuite sur le bouton <strong>'Editer'</strong> (1) à côté du produit nécessaire.</p>
<figure class="img-polaroid"><img src="img/tmproductsslider2-1.png" alt=""/></figure>
<p>Dans la fenêtre pour éditer des informations sur le produit, naviguez à l'onglet <strong>Slider de Produits TM</strong> (2) et marquez (3) que vous souhaitez que le produit soit affiché dans un slider.</p>
<figure class="img-polaroid"><img src="img/tmproductsslider2-2.png" alt=""/></figure>
<p>Enregistrez les modifications en appuyant sur le boutons <strong>'Enregistrer & Rester'</strong> (4) ou <strong>'Enregistrer'</strong> (5).</p>
<h5>Suppression d'une  diapositive</h5>
<p>Il existe deux façons de supprimer une diapositive.</p>
<ul class="index-list">
    <li>
        <p>Pour exclure un produit de la galerie, accédez au produit nécessaire dans <strong>Catalogue -> Produits</strong>.
		Appuyez ensuite sur le bouton <strong>'Editer'</strong> (1) à côté du produit nécessaire.
        <figure class="img-polaroid"><img src="img/tmproductsslider2-1.png" alt=""/></figure>
        <p>Dans la fenêtre pour éditer des informations sur le produit, naviguez à l'onglet <strong>Slider de Produits TM</strong> (2)
		et retirez la case à cocher (3), ce qui signifie que vous ne souhaitez pas que le produit s'affiche dans un slider:</p>
        <figure class="img-polaroid"><img src="img/tmproductsslider2-3.png" alt=""/></figure>
 <p>Enregistrez les modifications en appuyant sur le boutons <strong>'Enregistrer & Rester'</strong> (4) ou <strong>'Enregistrer'</strong> (5).
 </p>
    </li>
    <li>
        <p>La deuxième façon est de naviguer vers la page de configuration du module, de trouver le produit nécessaire dans la
		<strong>Liste des diapositives</strong> et appuyez sur le boutom <strong> Supprimer</strong> (1) à côté.</p>
        <figure class="img-polaroid"><img src="img/tmproductsslider2-4.png" alt=""/></figure>
        <p>Ensuite, confirmez la suppression.</p>
    </li>
</ul>
<h5>Ordre d'affichage des diapositives</h5>
<p>Par défaut, les diapositives sont affichées dans l'ordre où ils ont été ajoutés. Pour modifier l'ordre d'affichage, accédez à la page de configuration du module et faites glisser la diapositive vers l'endroit souhaité dans la <strong>Liste des diapositives</strong>.</p>
<figure class="img-polaroid"><img src="img/tmproductsslider2-5.png" alt=""/></figure>
<h5>Désactivation des diapositives</h5>
<p>De plus, vous pouvez désactiver temporairement une diapositive (pour la période pendant laquelle un produit n'est plus disponible ou pour toute autre raison) sans l'enlever complètement. Pour ce faire, accédez à la page de configuration du module et marquer une coche à côté du produit nécessaire (s'il est actif maintenant) ou cliquez sur croix (s'il est inactif) dans la <strong>Liste des diapositives</strong>:
</p>
<figure class="img-polaroid"><img src="img/tmproductsslider2-6.png" alt=""/></figure>
<h4>Types de galeries et paramètres recommandés</h4>
<p>Il existe quatre types d'affichage de la galerie (standard, liste, grille, pleine largeur).
Chacun d'eux peut être configuré indépendamment et vous pouvez basculer entre eux si nécessaire.</p>
<p>Par défaut, la galerie utilise les types d'image de produit suivants: large_default - pour l'image principale; medium_default - pour les miniatures.</p>
<h5>Standard</h5>
<p>Recommended settings:</p>
<ul class="marked-list">
    <li>Taille d'image (px) - 435*435</li>
    <li>Largeur de galerie - 1170px</li>
    <li>Hauteur de galerie - 580px</li>
    <li>Paramètres avancés - off</li>
</ul>
<figure class="img-polaroid"><img src="img/tmproductsslider2-7.png" alt=""/></figure>
<h5>Liste</h5>
<p>Paramètres recommandés:</p>
<ul class="marked-list">
    <li>Taille d'image (px) - 435*520</li>
    <li>Largeur de galerie - 1170px</li>
    <li>Hauteur de galerie - 520px</li>
    <li>Paramètres avancés - off</li>
</ul>
<figure class="img-polaroid"><img src="img/tmproductsslider2-8.png" alt=""/></figure>
<h5>Grille</h5>
<p>Paramètres recommandés:</p>
<ul class="marked-list">
    <li>Taille d'image (px) - 585*750</li>
    <li>Largeur de galerie - 1170px</li>
    <li>Hauteur de galerie - 750px</li>
    <li>Paramètres avancés - off</li>
</ul>
<figure class="img-polaroid"><img src="img/tmproductsslider2-9.png" alt=""/></figure>
<h5>Pleine largeur</h5>
<p>Paramètres recommandés:</p>
<ul class="marked-list">
    <li>Taille d'image (px) - 435*435</li>
    <li>Largeur de galerie - 1920px</li>
    <li>Hauteur de galerie - 450px</li>
    <li>Paramètres avancés - off</li>
</ul>
<figure class="img-polaroid"><img src="img/tmproductsslider2-10.png" alt=""/></figure>
<h4>Paramètres avancés</h4>
<p>Pour accéder aux paramètres avancés,  définissez pour <strong>Paramètres avancés</strong> la position OUI.</p>
<figure class="img-polaroid"><img src="img/tmproductsslider2-11.png" alt=""/></figure>
<ul class="marked-list">
    <li><strong>Type de galerie</strong> - le type de galerie active</li>
    <li><strong>Largeur de galerie</strong> - la largeur de la galerie active</li>
    <li><strong>Hauteur de galerie</strong> - la hauteur de la galerie active</li>
    <li><strong>Paramètres avancés</strong> - las paramètres étendus; si l'option est déplacée vers la position NON, tous les paramètres étendus seront sauvegardés et vous pourrez les restaurer à tout moment. Dans le même temps, à l'interface, il sera affiché par défaut</li>
    <li><strong>Durée du slider</strong> - la vitesse de changement de diapositive</li>
    <li><strong>Utiliser la navigation</strong> - l'affichage des boutons Précédent / Suivant pour la commutation de diapositives</li>
    <li><strong>Utiliser les miniatures</strong> - utiliser des miniatures avec des informations supplémentaires sur les diapositives comme élément de commutation de la diapositive actuelle</li>
    <li><strong>Utiliser la pagination</strong> - utiliser la pagination comme élément pour la commutation de la diapositive actuelle</li>
    <li><strong>Utiliser l galerie d'images</strong> - chanter des images de produits supplémentaires à l'intérieur des diapositives</li>
    <li><strong>Autoriser la lecture automatique</strong> - permettre le changement automatique de diapositive</li>
    <li><strong>Intervalle de slider</strong> - l'intervalle de temps, après lequel la diapositive passera à une autre (disponible uniquement si 'Autoriser la lecture automatique' est actif)
    </li>
    <li><strong>Autoriser la boucle</strong> - allow repeating slides from the beginning after all the slides were shown</li>
</ul>
<p class="alert alert-info">
    <span>Après avoir changé la galerie, toute la configuration de la galerie précédemment utilisée est sauvegardée.</span>
</p>
<p class="alert alert-info">
    <span>Après avoir désactivé/activé les paramètres avancés, les paramètres sont sauvegardés et vous pouvez y revenir à tout moment.</span>
</p>
<h4>FAQ</h4>

<div class="responsive-tabs" data-type="accordion">
    <ul class="resp-tabs-list">
        <li>Pourquoi la galerie ne s'affiche pas sur le frontend?</li>
        <li>Je change les paramètres avancés de la galerie, mais je ne vois pas les modifications sur le frontend. Que peut-on faire?</li>
    </ul>
    <div class="resp-tabs-container">
        <div>Assurez-vous que la galerie a diapositives, et au moins un d'entre eux est actif.</div>
        <div>Assurez-vous que vous modifiez les paramètres de la galerie active.</div>
    </div>
</div>