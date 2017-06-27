<h3>Méga Menu TM</h3>
<?php if ($project == 'eveprest' ) { ?>
    <div>
        <p style="margin-bottom: 0;">Disponible en:</p>
        <p style="margin-top: 0;" class="small text-secondary">Mode, Électronique, Pièces de rechange, Mobilier</p>
    </div>
<?php } ?>
<p>Le module est conçu pour créer des menus complexes. Le module permet d'afficher un élément (sans sous-menu), 
un élément avec un sous-menu et un élément de menu avec sous-menu au moyen d'un bloc multi-rangées et multi-colonnes. 
Le module peut être utilisé dans différentes positions, mais il affichera le même contenu. Positions disponibles:
    top (displayTop), left (displayLeftColumn), right (displayRightColumn), footer (displayFooter). Vous pouvez ajouter les catégories (avec des sous-catégories),
	les catégories CMS (avec sous-catégories), les fabricants (un ou une liste), les fournisseurs (un ou une liste), 
	les magasins (si multistore est utilisé), les liens vers tout produit, le bloc d'informations sur le produit,
    les liens personnalisés (quantité illimitée), les blocs HTML personnalisés (nombre illimité) et les bannières. 
	Voir ci-dessous pour plus de précisions.</p>
<h4>Onglets de Méga Menu TM</h4>
<p>Les onglets TM Mega Menu sont les principaux éléments qui sont la partie du menu principal.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs.png" alt=""/>
</figure>
<p>Afin de créer un nouvel onglet, ouvrez le module TM Mega Menu et cliquez sur '+' dans la liste d'onglets.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add.png" alt=""/>
</figure>
<h6>Dans la forme qui s'affiche, remplissez les champs obligatoires.</h6>
<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Entrez nom d'onglet</dt>
            <dd>le titre de l'onglet obligatoire pour la langue par défaut, si les champs de langues supplémentaires ne sont pas remplis, l'onglet prend son nom de la langue par défaut.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Actif</dt>
            <dd>Onglet actif/inactif.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Lien</dt>
            <dd>un lien qui est attribué à cet onglet. Vous pouvez entrer un lien personnalisé, ou choisissez parmi les options existantes (catégories, catégories CMS). 
			Si vous laissez le champ vide, le lien de cet onglet sera inactif.
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Ordre de tri</dt>
            <dd>l'ordre des onglets à afficher.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Classe spécifique</dt>
            <dd>la classe qui est ajoutée pour souligner l'élément (classe CSS).</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Entrer badge d'onglets</dt>
            <dd>est rempli, en fonction de plusieurs langues.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>C'est Mega Menu</dt>
            <dd>l'onglet proposé est un menu Mega
                <strong>*</strong>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Utiliser Menu simple</dt>
            <dd>l'onglet proposé est un menu simple.
                <strong>**</strong>
            </dd>
        </dl>
    </li>
</ul>
<p>
    <strong>*</strong>
    C'est Mega Menu. Si cette option est sélectionnée, il y aura un formulaire pour créer un menu complexe (Mega Menu).
</p>
<p>
    <strong>**</strong>
    Utiliser Menu simple. Si cette option est sélectionnée, il y aura un formulaire pour créer un menu simple.
	Il s'agit d'un menu qui affiche le contenu sélectionné dans une seule colonne. Si le menu comporte un contenu intégré, la nouvelle colonne est ajoutée.
</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form.png" alt=""/>
</figure>
<p>Menu complexe se compose de rangées et de colonnes dans les rangées.</p>
<p><strong>The Rangée est une partie de la structure Mega Menu.</strong> 
Il comprend les colonnes du menu. La rangée existante peut être supprimée en cliquant sur le bouton approprié. 
Elle sera supprimée avec le contenu qu'il inclut. La quantité de rangées n'est pas limitée.</p>
<p><strong>La colonne est une partie de la structure Mega Menu, </strong>placé dans les rangées.
(La classe) La largeur de la colonne ne peut pas moins de 2 et plus de 12.
Afin de rendre l'affichage du menu correctement, la largeur totale de la colonne ne peut pas dépasser 12.
La largeur (classe) est un type de colonne Bootstrap, correspondant aux mêmes valeurs.</p>
<p>Pour créer le menu, appuyez sur le bouton <strong>'Ajouter une rangée'</strong>.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-row.png" alt=""/>
</figure>
<p>Dans la forme apparu, cliquez sur le bouton <strong>'Ajouter une colonne'</strong>.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-row-col.png" alt=""/>
</figure>
<p>Dans la fenêtre pop-up vous devez spécifier la classe de colonne (de 2 à 12).
La colonne elle-même apparaît exactement où vous devez définir les paramètres requis.</p>
<p>Ici, vous pouvez modifier la classe de colonne, la classe CSS et le contenu de la liste fournie.
Vous pouvez ajouter/supprimer le contenu en doublecliquant sur l'élément, ou en mettant en surbrillance les éléments et en cliquant sur le bouton correspondant.</p>
<p>Le bloc peut être retiré en appuyant sur le bouton <strong>'Supprimer le bloc'</strong> au bas du bloc.</p>
<p>En supprimant la ligne, les colonnes incluses sont aussi supprimées.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-row-col-content.png" alt=""/>
</figure>
<p>Pour déplacer le contenu disponible dans le menu sélectionné, doublecliquez ou sélectionnez le contenu souhaité et appuyez sur le bouton correspondant.</p>
<p>Les informations du menu inactif sont enregistrées  lors de la commutation entre les types de menu et vous pouvez toujours changer le type de menu.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-simple.png" alt=""/>
</figure>
<h4>HTML Méga Menu TM</h4>
<p>Dans cette section, nous expliquerons comment créer un bloc HTML personnalisé dans le Mega Menu.</p>
<p>Le module a un tableau énumérant tous les blocs disponibles.
Vous pouvez ajouter un nouveau bloc en cliquant sur le bouton '+' en haut à droite de la table.</p>
<h6>Dans la forme qui apparaît, remplissez les champs requis.</h6>
<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Entrez le nom d'élément HTML</dt>
            <dd>le nom du bloc HTML, est obligatoire de remplir pour la langue par défaut.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Classe spécifique</dt>
            <dd>la classe CSS du bloc.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Contenu HTML</dt>
            <dd>le contenu HTML.</dd>
        </dl>
    </li>
</ul>
<p>Le bloc ajouté apparaîtra dans la liste des blocs, ainsi que dans la liste du contenu disponible lors de la création de blocs de menu.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-html.png" alt=""/>
</figure>
<h4>Liens de Méga Menu TM</h4>
<p>Dans cette section, nous montrerons comment créer des liens personnalisés dans le Mega Menu.</p>
<p>Le module contient une liste des liens disponibles.
Vous pouvez ajouter un nouveau lien en cliquant sur le bouton '+' en haut à droite de la table.</p>
<h6>Dans la forme qui apparaît, remplissez les champs requis.</h6>
<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Entrez le nom du lien</dt>
            <dd>le nom du lien est obligatoire pour être rempli pour la langue par défaut.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Entrez URL du lien</dt>
            <dd>URL du lien, est obligatoire pour être rempli pour la langue par défaut..</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Classe spécifique</dt>
            <dd>la classe CSS du bloc.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Ouvrir dans une nouvelle fenetre</dt>
            <dd>ouvrir un lien dans une nouvelle fenêtre.</dd>
        </dl>
    </li>
</ul>
<p>Le lien ajouté apparaîtra dans la liste des liens, ainsi que dans la liste du contenu disponible lors de la création de blocs de menu.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-links.png" alt=""/>
</figure>
<h4>Bannières Méga Menu TM</h4>
<p>Dans cette section, nous expliquerons comment créer des bannières dans le Mega Menu.</p>
<p>Le module contient une liste des bannières disponibles. Vous pouvez ajouter une nouvelle bannière en cliquant sur le bouton '+' en haut à droite de la table.</p>
<h6>Dans la forme qui apparaît, remplissez les champs requis.</h6>
<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Sélectionner un fichier</dt>
            <dd>Sélectionnez un fichier, est obligatoire pour être rempli pour la langue par défaut.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Nom de bannière</dt>
            <dd>le titre de la bannière, est obligatoire pour être rempli pour la langue par défaut.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Entrez URL du lien</dt>
            <dd>l'URL de lien, est obligatoire pour être rempli pour la langue par défaut.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Classe spécifique</dt>
            <dd>la classe CSS du bloc.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Ouvrir dans une nouvelle fenetre</dt>
            <dd>ouvrir un lien dans une nouvelle fenêtre.</dd>
        </dl>
    </li>
</ul>
<p>La bannière ajoutée apparaîtra dans la liste des bannières, ainsi que dans la liste des contenus disponibles lors de la création de blocs de menu.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-banners.png" alt=""/>
</figure>