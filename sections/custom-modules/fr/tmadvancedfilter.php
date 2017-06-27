<h3>Filtre Avancé TM</h3>
<?php if ($project == 'eveprest' ) { ?>
    <div>
        <p style="margin-bottom: 0;">Disponible en:</p>
        <p style="margin-top: 0;" class="small text-secondary">Pièces de Rechange</p>
    </div>
<?php } ?>
<h4>Introduction</h4>
<p>Le module Filtre Avancé TM offre une opportunité de réaliser une recherche rapide du produit nécessaire en fonction des principales fonctionnalités.
Il permet de créer des filtres avec le nombre illimité de critères de recherche, qui sont disponibles dans le magasin par défaut ou sont créés lors de l'ajout des produits.
Les critères de filtrage peuvent être les suivants: niveaux de catégories (par nidification), fabricants, fournisseurs, attributs, fonctionnalités et plus.
De plus, le module possède les caractéristiques suivantes:
la création de filtres connectés, dont les critères nécessaires seront disponibles uniquement après avoir sélectionné le paramètre parent (niveau de nidification est illimité); 
la sélection de la grille de critères pour le filtre haut de la page.
Vous pouvez sélectionner le type de champ de filtrage, spécifier le filtre parent, ajouter son nom, son label et sa description.
Tout est facilement configuré et édité dans le panneau d'administration.
Pour accélérer la recherche, le module utilise l'algorithme d'indexation des produits selon les critères définis.
Il peut être facilement et rapidement inséré dans un magasin Prestashop de toute sorte.</p>
<h4>Installation et suppression du module</h4>
<h6>Le module est installé et supprimé comme tout autre module PrestaShop.</h6>
<p class="alert alert-info"><span>Après avoir supprimé ou réinstallé le module, tous les paramètres et filtres du module sont rejetés.</span></p>
<h4>Configuration/édition du filtre</h4>
<p>Après l'installation du module, vous pouvez le configurer sur la page de configuration du module.
Par défaut, vous verrez les onglets avec les types de filtre disponibles.
Pour commencer, sélectionnez un onglet (1) et appuyez sur le bouton 'Créer un filtre' (2).</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-1.png" alt=""/></figure>
<p>Dans la fenêtre apparue, remplissez tous les champs requis.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-2.png" alt=""/></figure>
<ul class="marked-list">
    <li><strong>Nom</strong> - le nom du filtre. Il sera affiché sur le frontend comme titre de bloc de filtrage;
    </li>
    <li><strong>Description</strong> - la description du filtre. Il sera affiché sur le frontend à côté du titre du bloc de filtrage;
    </li>
    <li><strong>Afficher Compteur</strong> - permet d'afficher le nombre de produits qui seront disponibles après avoir sélectionné le paramètre actuel. 
	Le numéro sera affiché à côté du critère de recherche (entre parenthèses);
    </li>
    <li><strong>Afficher Filtres Sélectionnés</strong> - permet d'afficher la liste des critères de recherche sélectionnés avec la possibilité de désélectionner l'un d'eux;
    </li>
    <li><strong>Afficher Type de Disposition du Filtre</strong> - la sélection de la grille de filtrage (disponible uniquement pour le filtre supérieur);
    </li>
</ul>
<p class="alert alert-info"><span>Veuillez noter qu'il n'y a pas de champs obligatoires. Si vous laissez tous les champs vides, un filtre en colonne simple sans description et titre sera créé.</span></p>
<h5>Modification du filtre</h5>
<p>Pour modifier la description et les paramètres du filtre, appuyez sur le bouton 'roue dentée' dans le menu du filtre.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-3.png" alt=""/></figure>
<p>En mode édition, la forme ressemble et fonctionne comme en mode de configuration.</p>
<p class="alert alert-info"><span>La sélection de grille de filtrage est disponible uniquement pour 'Filtre supérieur'.</span></p>
<p class="alert alert-info"><span>Lors de la modification de la grille de filtre, tous les éléments seront automatiquement transférés à la première colonne, 
en gardant l'ordre de nidification et d'affichage (basée sur le principe: Tous les éléments de la colonne précédente avec l'ordre d'affichage restent à l'intérieur).</span></p>
<h5>Suppression du filtre</h5>
<p>Pour modifier la description ou les paramètres du filtre, appuyez sur 'Croix' dans le menu du filtre</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-31.png" alt=""/></figure>
<p>et confirmez la suppression du filtre.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-4.png" alt=""/></figure>
<div class="box-notification">
    <span>Après la suppression d'un filtre, toutes les données seront perdus à jamais.</span>
</div>
<h5>Indexation du filtre</h5>
<p><strong>Indexation</strong> - le processus de création de tables uniques avec les données nécessaires au filtre,
     créé pour les critères spécifiques au filtre. Il permet d'accélérer considérablement le travail de filtrage sur le frontend.</p>
<p>Le bouton correspondant dans le menu du filtre apparaît en rouge. Si le bouton n'est pas en surbrillance, le filtre n'a pas besoin d'indexation.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-5.png" alt=""/></figure>
<p class="alert alert-info"><span>Le processus de ré-indexation peut prendre un certain temps, selon le nombre de produits en magasin et des critères de filtre sélectionnés.</span></p>
<p class="alert alert-info"><span>Si le filtre nécessite une ré-indexation, ca ne sera pas affiché sur le frontend.</span></p>
<h5>Création/édition d'éléments de filtre (critères)</h5>
<p>Pour ajouter un élément au filtre, sélectionnez-le dans le panneau des éléments disponibles (à gauche) et faites-le glisser vers la zone disponible de la grille 
(celui-ci s'allumera après avoir été sélectionné. Dans l'exemple, la grille comporte 2 colonnes).</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-6.png" alt=""/></figure>
<p>Dans la zone en surbrillance, sélectionnez la colonne et la position du nouvel élément et déposez-le.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-7.png" alt=""/></figure>
<p>Dans la fenêtre de création apparue, fournissez toutes les données nécessaires:</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-8.png" alt=""/></figure>
<ul class="marked-list">
    <li><strong>Nom</strong> - le nom de l'élément de filtre sur le frontend. Il ne sera pas affiché si vous laissez le champ vide.
    </li>
    <li><strong>Label</strong> - l'étiquette de l'élément de filtre sur le frontend. Il ne sera pas affiché si vous laissez le champ vide.
    </li>
    <li><strong>Description</strong> - la description de l'élément de filtre sur le frontend. Il ne sera pas affiché si vous laissez le champ vide.
    </li>
    <li><strong>Filtre parent</strong> - l'élément parent du filtre, après l'avoir sélectionné, l'élément enfant sera disponible. Il ne sera pas affiché si vous laissez le champ vide.
    </li>
    <li><strong>Type de champ de filtre</strong> - la manière dont l'élément sera affiché sur le frontend. Les types suivants sont disponibles:
        <ul class="marked-list">
            <li>radio</li>
            <li>choisir</li>
            <li>case à cocher</li>
            <li>sélection de gamme (uniquement pour le type 'prix')</li>
            <li>entrée de gamme (uniquement pour le type 'prix')</li>
        </ul>
    </li>
</ul>
<p class="alert alert-info"><span>Vous pouvez modifier toutes les données et l'élément parent en mode d'édition de filtre.</span></p>
<p class="alert alert-info"><span>Après avoir édité l'élément, le filtre doit être re-indexé. C'est indiqué par le bouton dans le menu du filtre. Ne réindeciez pas le filtre après avoir modifié chaque élément, vous pouvez le faire après avoir appliqué des modifications à tous les éléments nécessaires - vous économiserez votre temps.</span></p>
<p>S'il existe un arbre de filtres connectés, vous pouvez ajouter le nouvel élément en rapport avec cet arbre.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-10.png" alt=""/></figure>
<h5>Modification de l'élément du filtre</h5>
<p>Pour modifier un élément de filtre, appuyez sur le bouton 'roue dentée' (1) dans le coin supérieur droit du filtre.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-9.png" alt=""/></figure>
<h5>Tri (ordre d'affichage des éléments de filtre)</h5>
<p>Par défaut, les nouveaux éléments sont affichés après l'élément dans l'ordre où vous les avez ajouté.
Si le filtre est ajouté à l'arbre, il sera affiché après les éléments existants.</p>
<p>Pour déplacer les éléments à l'intérieur du filtre, sélectionnez l'élément nécessaire et faites-le glisser vers la position souhaitée.
Vous pouvez faire glisser des éléments dans une colonne, ainsi qu'à d'autres colonnes de la grille. Vous pouvez également modifier le tri dans l'arbre ou déplacer l'arbre entier en même temps.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-11.png" alt=""/></figure>
<p>Après avoir déplacé l'élément d'une colonne à l'autre, l'ordre d'affichage changera automatiquement dans toutes les colonnes.</p>
<h5>Suppression de l'élément du filtre</h5>
<p>Vous pouvez supprimer un élément de filtre de deux façons:</p>
<ul class="index-list">
    <li><p>faites glisser l'élément vers la colonne des éléments disponibles;</p>
        <figure class="img-polaroid"><img src="img/tmadvancedfilter-12.png" alt=""/></figure>
    </li>
    <li><p>au appuyez sur 'Croix' dans le coin supérieur droit de l'élément nécessaire.</p>
        <figure class="img-polaroid"><img src="img/tmadvancedfilter-9.png" alt=""/></figure>
    </li>
</ul>
<p>Peu importe la méthode choisie, vous verrez une fenêtre de suppression de confirmation.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-13.png" alt=""/></figure></li>
<p class="alert alert-info"><span>Après avoir supprimé un filtre avec des éléments imbriqués, tous les éléments imbriqués seront supprimés.</span></p>
<p class="alert alert-info"><span>Après avoir supprimé un élément, le filtre doit être réindexé. C'est indiqué par le bouton dans le menu du filtre.
Ne réindeciez pas le filtre après avoir modifié chaque élément, vous pouvez le faire après avoir appliqué des modifications à tous les éléments nécessaires - vous économiserez votre temps.</span></p>
<h5>Réindexation "Intelligente"</h5>
<p>Le module fournit la réindexation automatique (smart) après avoir fait des modifications aux produits ou après d'autres changements cruciaux (fabricant, attribut, etc.). 
Les champs de table seront réindexés, si ces modifications ont affecté le fonctionnement du filtre.</p>
<p class="alert alert-info"><span>Si, après avoir effectué des modifications, le filtre ne les prenait pas automatiquement, entrez la page des paramètres du filtre et réindeciez-le manuellement.</span></p>
<p class="alert alert-info"><span>Le filtre ne sera pas réindexé automatiquement après l'ajout de la devise, c'est pourquoi il doit être réindexé manuellement.</span></p>
<h4>FAQ</h4>
<div class="responsive-tabs" data-type="accordion">
    <ul class="resp-tabs-list">
        <li>J'ai créé un filtre, mais je ne le vois pas sur le frontend.</li>
        <li>J'ai ajouté le nom et la description du filtre, mais ils ne sont pas affichés sur le frontend.</li>
        <li>J'ai ajouté des éléments au filtre, mais ça a arrêté d'afficher.</li>
        <li>Je veux que l'élément soit disponible uniquement après la sélection d'un autre élément.</li>
        <li>Je veux échanger des éléments.</li>
        <li>Je souhaite supprimer un élément parent, mais je souhaite garder tous les éléments imbriqués. Comment y parvenir?</li>
        <li>Je souhaite modifier la grille de filtre, mais je ne veux pas créer de nouveau le filtre. Que puis-je faire?</li>
        <li>Comment créer un filtre complètement nouveau, s'il existe déjà un filtre pour cette position?</li>
        <li>Le filtre a arrêté d'afficher sur le frontend.</li>
        <li>Pourquoi tous les éléments ne sont pas actifs sur le frontend?</li>
    </ul>
    <div class="resp-tabs-container">
        <div>Le filtre ne s'affichera pas, s'il n'y a pas d'éléments ou s'il n'est pas réindexé.<br>
            Assurez-vous qu'il y a des éléments dans le filtre et qu'il a été réindexé.
        </div>
        <div>Vous avez ajouté des données, mais, peut-être, pas pour toutes les langues.
		N'oubliez pas que le module est multilingue et remplissez les données pour chaque langue séparément.
        </div>
        <div>Assurez-vous que vous avez réintégré le filtre après avoir effectué des modifications.</div>
        <div>Sélectionnez l'élément, après l'avoir sélectionné, l'élément souhaité devrait être disponible, et définissez-le comme l'élément parent.
        </div>
        <div>Il suffit de faire glisser l'élément vers l'endroit où vous souhaitez le localiser.
		Il prend automatiquement le nouveau poste et cela n'affectera pas les fonctionnalités du filtre.
        </div>
        <div>Dans le menu pour éditer le premier élément imbriqué, rejetez la connexion avec l'élément parent
		que vous souhaitez supprimer, puis supprimez l'élément parent. Dans ce cas, pas tous les éléments imbriqués seront supprimés.
        </div>
        <div>Entrez le menu d'édition et sélectionnez une nouvelle grille pour le filtre, puis enregistrez les modifications.
            Tous les éléments du filtre s'affichent dans la première colonne de la nouvelle grille.
			Ensuite, vous pouvez les déplacer vers les positions nécessaires.
        </div>
        <div>Pour créer un nouveau filtre, supprimez celui-ci.</div>
        <div>ssurez-vous que le filtre ne nécessite pas d'indexation.</div>
        <div>Vérifiez si l'élément n'est pas un enfant pour l'élément qui n'est pas actif à ce moment. 
		Assurez-vous qu'il existe des produits répondant aux critères spécifiés.
        </div>
    </div>
</div>