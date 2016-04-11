<h3>Menu Méga TM</h3>

<p>Le module est conçu pour créer des menus complexes. Le module offre la possibilité d'afficher un seul élément (sans
    sous-menu), un élément de menu avec un sous-menu et un élément de menu avec sous-menu par un bloc multi-lignes et
    multi-colonnes. Le module peut être utilisé dans différentes positions, mais il affichera le même contenu. Les
    positions disponibles: haut(displayTop), gauche(displayLeftColumn), droite(displayRightColumn), pied de
    page(displayFooter). Vous pouvez ajouter les catégories (avec sous-catégories), catégories CMS (avec
    sous-catégories), fabricants (seul ou une liste), fournisseurs (seul ou une liste), boutiques (si multistore est
    utilisé), liens vers tout produit, bloc d'information du produit, liens personnalisés ne sont pas limités en
    quantité, blocs HTML personnalisés ne sont pas limités en nombre, et bannières. Voir ci-dessous pour plus de
    détails.</p>

<h4>Menu Méga TM Onglets</h4>

<p>Les onglets du Menu Méga TM sont les éléments de base qui sont la partie supérieure du menu.</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs.png" alt="">
</figure>

<p>Pour créer un nouvel onglet, ouvrez le module Menu Méga TM et cliquez sur + dans le tableau Liste des onglets.</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add.png" alt="">
</figure>

<p>Dans le formulaire qui apparaît, remplissez les champs requis.</p>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Entrer le nom de l'onglet (Enter tab name)</dt>
            <dd>le titre de l'onglet qui est obligatoire à remplir pour la langue par défaut, si les champs des langues
                supplémentaires ne sont pas remplis, l'onglet obtient son nom de la langue par défaut. Le champ est
                obligatoire.
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Actif (Active)</dt>
            <dd>l'onglet actif/inactif.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Lien (Link )</dt>
            <dd>un lien qui est assigné à cet onglet. Vous pouvez entrer le lien personnalisé ou choisir parmi les
                options existantes (catégories, catégories CMS). Si ce champ est laissé vide, le lien de cet onglet sera
                inactif.
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Ordre de tri (Sort order)</dt>
            <dd>l'ordre d'affichage des onglets.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Classe spécifique (Specific Class)</dt>
            <dd>la classe qui est ajouté à l'élément pour le mettre en relief (classe CSS).</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Entrer le badge d'un onglet (Enter tab badge)</dt>
            <dd>est rempli en fonction de multi-langues.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>C'est le Menu Méga (It is Mega Menu)</dt>
            <dd>l'onglet donné de sous-menu est le Menu Méga.
                <strong>*</strong>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Utiliser le menu simple (Use simple menu)</dt>
            <dd>l'onglet donné de sous-menu est le menu simple.
                <strong>**</strong>
            </dd>
        </dl>
    </li>
</ul>
<p>
    <strong>*</strong>
    C'est le Menu Méga. Si cette option est sélectionnée, il y aura un formulaire pour créer le menu complexe (Menu
    Méga).
</p>

<p>
    <strong>**</strong>
    Utiliser le menu simple. Si cette option est sélectionnée, il y aura un formulaire pour créer le menu simple. C'est
    un menu qui affiche le contenu sélectionné en une seule colonne. Si un élément a le contenu intégré, la nouvelle
    colonne est ajoutée.
</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form.png" alt="">
</figure>

<p>Le menu complexe est composé de lignes et de colonnes dans les lignes.</p>

<p>La ligne est une partie de la structure de Menu Méga. Elle comprend les colonnes de menu. La ligne existante peut
    être retirée en cliquant sur le bouton approprié. La ligne sera retirée avec le contenu qu'elle inclut. Le nombre de
    lignes n'est pas limité.</p>

<p>La colonne est une partie de la structure de Menu Méga, placée à l'intérieur des lignes. (La classe) La largeur de la
    colonne ne peut pas être inférieure à 2 et supérieure à 12. Afin d'afficher correctement votre menu, la largeur
    totale des colonnes ne doit pas dépasser 12. La largeur (classe) est un type de colonne Bootstrap, correspond aux
    mêmes valeurs.</p>

<p>Pour créer le menu, cliquez sur le bouton Ajouter une ligne (Add row)</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-row.png" alt="">
</figure>

<p>Dans le formulaire apparu, cliquez sur le bouton Ajouter la colonne (Add column)</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-row-col.png" alt="">
</figure>

<p>Dans la fenêtre pop-up qui apparaît vous devez spécifier la classe de colonne (de 2 à 12). La colonne elle-même
    apparaît suivant, ici vous devez régler les paramètres nécessaires,</p>

<p>vous pouvez changer la classe de colonne, ajouter une classe CSS, et aussi le contenu requis depuis la liste prévue.
    Vous pouvez ajouter/supprimer le contenu en double-cliquant sur l'élément requis, ou en mettant en relief les
    éléments nécessaires et en cliquant sur le bouton correspondant.</p>

<p>Bloc peut être enlevé en cliquant sur le bouton Enlever un bloc dans le footer du bloc.</p>

<p>Les colonnes incluses sont également enlevées lorsque vous enlevez une ligne.</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-row-col-content.png" alt=""/>
</figure>

<p>Pour déplacer le contenu disponible dans le menu sélectionné, double-cliquez ou mettez en relief le contenu désiré et
    appuyez sur le bouton correspondant.</p>


<p>L'information de menu inactif est enregistrée lors de la commutation entre les types de menus et vous pouvez toujours
    changer le type de menu.</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-simple.png" alt="">
</figure>

<h4>Menu Méga TM HTML</h4>

<p>Dans cette section, nous allons vous expliquer comment créer un bloc HTML personnalisé dans le Menu Méga.</p>

<p>Le module dispose d'un tableau de tous les blocs disponibles auquel vous pouvez ajouter un nouveau bloc en cliquant
    sur le bouton + en haut à droite du tableau.</p>

<h6>Dans le formulaire qui apparaît, remplissez les champs requis.</h6>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Entrer le nom d'élément HTML (Enter HTML item name)</dt>
            <dd>le nom de bloc HTML, est obligatoire à remplir pour la langue par défaut.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Classe spécifique (Specific class)</dt>
            <dd>la classe CSS de bloc.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Contenu HTML (HTML content)</dt>
            <dd>contenu HTML.</dd>
        </dl>
    </li>
</ul>
<p>Bloc ajouté apparaîtra dans la liste des blocs, ainsi que dans la liste du contenu disponible lors de la création des
    blocs de menu.</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-html.png" alt="">
</figure>

<h4>Menu Méga TM Liens</h4>

<p>Dans cette section, nous allons vous montrer comment créer les liens personnalisés dans le Menu Méga.</p>

<p>Le module dispose d'un tableau de tous les liens disponibles auquel vous pouvez ajouter un nouveau lien en cliquant
    sur le bouton + en haut à droite du tableau.</p>

<h6>Dans le formulaire qui apparaît, remplissez les champs requis.</h6>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Entrer le nom de lien (Enter Link name)</dt>
            <dd>le nom de lien, est obligatoire à remplir pour la langue par défaut.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Entrer URL de lien (Enter Link URL)</dt>
            <dd>URL de lien, est obligatoire à remplir pour la langue par défaut.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Classe spécifique (Specific class)</dt>
            <dd>la classe CSS de bloc.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Ouvrir dans une nouvelle fenêtre (Open in new window)</dt>
            <dd>ouvrir le lien dans une nouvelle fenêtre.</dd>
        </dl>
    </li>
</ul>
<p>Lien ajouté apparaîtra dans la liste des liens, ainsi que dans la liste du contenu disponible lors de la création des
    blocs de menu.</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-links.png" alt="">
</figure>

<h4>Menu Méga TM Bannières</h4>

<p>Dans cette section, nous allons vous expliquer comment créer des bannières dans le Menu Méga.</p>

<p>Le module dispose d'un tableau de toutes les bannières disponibles auquel vous pouvez ajouter une nouvelle bannière
    en cliquant sur le bouton + en haut à droite du tableau..</p>

<h6>Dans le formulaire qui apparaît, remplissez les champs requis.</h6>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Choisir le fichier (Select a file)</dt>
            <dd>choisir le fichier, est obligatoire à remplir pour la langue par défaut.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Entrer le nom de bannière (Enter Banner name)</dt>
            <dd>le titre de bannière, est obligatoire à remplir pour la langue par défaut.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Entrer URL de lien (Enter Link URL)</dt>
            <dd>URL de lien, est obligatoire à remplir pour la langue par défaut.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Classe spécifique (Specific class)</dt>
            <dd>la classe CSS de bloc.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Ouvrir dans une nouvelle fenêtre (Open in new window)</dt>
            <dd>ouvrir le lien dans une nouvelle fenêtre.</dd>
        </dl>
    </li>
</ul>
<p>Bannière ajoutée apparaîtra dans la liste des bannières, ainsi que dans la liste du contenu disponible lors de la
    création des blocs de menu.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-banners.png" alt="">
</figure>