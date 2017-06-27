<h3>TM Mega Layout 0.0.1</h3>
<p>Ce module est conçu pour vous permettre de créer des mises en page personnalisées (préréglages) pour les crochets et les afficher sur le site au lieu des positions par défaut. 
L'avantage de ce module est de vous permettre de créer différentes crochets et les modifier selon vos besoins.</p>

<h4>Caractéristiques fonctionnelles du module</h4>
<ul class="index-list">
    <li>
        <p>Exigences:</p>
        <ul class="marked-list">
            <li>Prestashop 1.6+</li>
            <li>PHP 5.4+</li>
        </ul>
    </li>
    <li>
        <p>Caractéristiques:</p>
        <ul class="marked-list">
            <li>Le module comprend 3 crochets: displayTopColumn, displayHome, displayFooter, correspondant aux standards.</li>
            <li>Dans le cas où le module n'est pas présent au crochet, il ne peut pas être ajouté au préréglage.</li>
            <li>Le module peut être affiché dans le préréglage qu'une seule fois, comme dans un crochet.</li>
            <li>La position du module dans la section 'Modules et Services -> Positions' n'affecte pas le préréglage.</li>
            <li>Le module ne vous permet pas de configurer différents modules. Vous ne pouvez pas configurer les différents modules pour différents préréglages.</li>
        </ul>
    </li>
</ul>
<h6>Le module fournit une option pour changer la position du module et configurer la grille pour 3 crochets: displayTopColumn, displayHome, displayFooter. 
La modification de la position des modules dans la section 'Modules et Services -> Positions' n'affecte pas le préréglage.
Si le module n'a pas été ajouté au crochet, il ne peut pas être ajouté au préréglage.</h6>

<h4>ML'intégration du module au thème</h4>
<p class="alert alert-warning">Sans cette étape, vos presets ne seront pas affichés sur le frontend.</p>
<ul class="index-list">
    <li><p>TopColumn. Pour ajouter un préréglage personnalisé au crochet topColumn, vous devez effectuer les opérations suivantes:</p>
        <ul class="marked-list">
            <li>Ouvrez le fichier <strong>/themes/your_theme/header.tpl</strong> pour éditer.</li>
            <li>Recherchez le code suivant <pre class="codebox">{hook h="displayTopColumn"}</pre></li>
            <li>Et remplacez-le par:
                <pre class="codebox">
{assign var='displayMegaTopColumn' value={hook h='tmMegaLayoutTopColumn'}}
{if $displayMegaTopColumn}
    {hook h='tmMegaLayoutTopColumn'}
{else}
    {capture name='displayTopColumn'}{hook h='displayTopColumn'}{/capture}
    {if $smarty.capture.displayTopColumn}
        &lt;div id="slider_row" class="row"&gt;
            &lt;div id="top_column" class="center_column col-xs-12 col-sm-12">{$smarty.capture.displayTopColumn}&lt;/div&gt;
        &lt;/div&gt;
    {/if}
{/if}</pre>
            </li>
        </ul>
    </li>
    <li><p>Home. Pour ajouter un préréglage personnalisé au crochet Home, vous devez effectuer les opérations suivantes:</p>
        <ul class="marked-list">
            <li>Ouvrez le fichier <strong>/themes/your_theme/footer.tpl</strong> pour éditer.</li>
            <li>Recherchez le code suivant:
                <pre class="codebox">
{if isset($HOOK_HOME) && $HOOK_HOME|trim}
    &lt;div class="home-column"&gt;
        &lt;div class="container"&gt;
            {$HOOK_HOME}
        &lt;/div&gt;
    &lt;/div&gt;
{/if}</pre>
            </li>
            <li>Et remplacez-le par:
                <pre class="codebox">
{assign var='displayMegaHome' value={hook h='tmMegaLayoutHome'}}
{if $displayMegaHome}
    {hook h='tmMegaLayoutHome'}
{else}
    {if isset($HOOK_HOME) && $HOOK_HOME|trim}
        {$HOOK_HOME}
    {/if}
{/if}</pre>
            </li>
        </ul>
    </li>
    <li><p>Footer. Pour ajouter un préréglage personnalisé au crochet Home, vous devez effectuer les opérations suivantes:</p>
        <ul class="marked-list">
            <li>Ouvrez le fichier <strong>/themes/your_theme/footer.tpl</strong> pour éditer.</li>
             <li>Recherchez le code suivant
                <pre class="codebox">
{if isset($HOOK_FOOTER)}
    &lt;div class="footer-container"&gt;
        &lt;footer id="footer"  class="container"&gt;
            &lt;div class="row"&gt;
                {$HOOK_FOOTER}
            &lt;/div&gt;
        &lt;/footer&gt;
    &lt;/div&gt;
{/if}</pre>
            </li>
            <li>Et remplacez-le par:
                <pre class="codebox">
{assign var='displayMegaFooter' value={hook h='tmMegaLayoutFooter'}}
{if isset($HOOK_FOOTER) || $displayMegaFooter}
    &lt;div class="footer-container"&gt;
    {if $displayMegaFooter}
         &lt;div id="footer"&gt;
              {$displayMegaFooter}
         &lt;/div&gt;
    {else}
        &lt;div id="footer" class="container"&gt;
            &lt;div class="row"&gt;{$HOOK_FOOTER}&lt;/div&gt;
        &lt;/div&gt;
    {/if}
    &lt;/div&gt;
{/if}
                </pre>
            </li>
        </ul>
    </li>
</ul>

<h4>Panneau principal de TM Mega Layout</h4>
<p>Le panneau de configuration du module TM Mega Layout vous permet d'ajouter un préréglage au crochet requis et de configurer le préréglage.</p>
<figure class="img-polaroid">
    <img src="img/tmmegalayout-main-panel.png" alt="" />
</figure>

<h4>Ajout du préréglage</h4>
<ul class="index-list">
    <li>
        <p>Appuyez sur '+ Ajouter un préréglage' (1) dans l'onglet nécessaire.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-preset-1.png" alt="" /></figure>
    </li>
    <li>
        <p>Ensuite, remplissez le champ 'Entrez le nom de préréglage' dans la fenêtre contextuelle (2) et appuyez sur 'Enregistrer' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-preset-2.png" alt="" /></figure>
    </li>
    <li>
        <p>Le préréglage a été créé avec succès, il est listé parmi les presets disponibles (4) maintenant. Le préréglage créé récemment est sélectionné pour l'édition (5).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-preset-3.png" alt="" /></figure>
    </li>
</ul>

<h4>Activation du préréglage</h4>
<ul class="index-list">
    <li>
        <p>Tout d'abord, choisissez le preset requis parmi la liste (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-activation-preset-1.png" alt="" /></figure>
    </li>
    <li>
        <p>Appuyez sur 'Utiliser comme défaut' (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-activation-preset-2.png" alt="" /></figure>
    </li>
    <li>
        <p>Le préréglage est actif, il sera affiché dans un crochet et marqué avec une coche (3) dans une liste de préréglages.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-activation-preset-3.png" alt="" /></figure>
    </li>
</ul>

<h4>Suppression du préréglage</h4>
<p class="alert alert-warning">Il n'y a aucune option pour restaurer le préréglage après la suppression.</p>
<ul class="index-list">
    <li>
        <p>Pour supprimer le préréglage, choisissez le preset requis dans la liste (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-delete-preset-1.png" alt=""></figure>
    </li>
    <li>
        <p>Appuyez ensuite sur  une icône de 'panier' (2) près du titre prédéfini. </p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-delete-preset-2.png" alt=""></figure>
    </li>
    <li>
        <p>Le préréglage a été supprimé avec succès.</p>
    </li>
</ul>

<h4>Renommer le préréglage</h4>
<ul class="index-list">
    <li>
        <p>Pour renommer le préréglage, choisissez le preset requis dans la liste (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-rename-preset-1.png" alt=""></figure>
    </li>
    <li>
        <p>Appuyez ensuite sur une icône de 'crayon' (2) à côté du titre prédéfini.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-rename-preset-2.png" alt=""></figure>
    </li>
    <li>
        <p>Spécifiez le nouveau titre (3) dans une fenêtre contextuelle et appuyez sur 'Renommer le préréglage' (4).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-rename-preset-3.png" alt=""></figure>
    </li>
    <li>
        <p>Le préréglage a été renommé avec succès.</p>
    </li>
</ul>

<h4>Wrapper</h4>
<p>Wrapper n'a pas de classe par défaut, ce n'est pas obligatoire.</p>

<h4>Ajout de wrapper</h4>
<ul class="index-list">
    <li>
        <p>Pour créer un wrapper, appuyez sur '+ Ajouter un wrapper' (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-wrapper-1.png" alt=""></figure>
    </li>
    <li>
        <p>Wrapper a été ajouté (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-wrapper-2.png" alt=""></figure>
    </li>
</ul>

<h4>Ajout de la classe css personnalisée au wrapper</h4>
<p>L'ajout de la classe personnalisée vous permettra de créer un style spécifique pour votre wrapper en utilisant les règles css.</p>
<ul class="index-list">
    <li>
        <p>Pour ajouter une classe de wrapper, appuyez sur le bouton (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-wrapper-add-class-1.png" alt=""></figure>
    </li>
    <li>
        <p>Vous verrez une fenêtre contextuelle, remplissez le champ 'Entrer le classe de wrapper' (2) et appuyez sur le bouton 'Confirmer' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-wrapper-add-class-2.png" alt=""></figure>
    </li>
    <li>
        <p>La classe personnalisée a été ajoutée avec succès.</p>
    </li>
</ul>

<h4>Suppression de wrapper</h4>
<p class="alert alert-warning">La suppression de l'élément préréglé entraînera aussi l'élimination de tous ses éléments enfants et leurs styles.</p>
<ul class="index-list">
    <li>
        <p>Pour supprimer l'emballage, appuyez sur le bouton de 'panier' (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-delete-wrapper-1.png" alt=""></figure>
    </li>
    <li>
        <p>Wrapper a été retiré avec succès.</p>
    </li>
</ul>

<h4>Styliser le wrapper</h4>
<ul class="index-list">
    <li>
        <p>Pour ajouter des styles personnalisés au wrapper, appuyez sur l'icône 'crayon' (1) dans le bloc.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-wrapper-add-styles-1.png" alt=""></figure>
    </li>
    <li>
        <p>Dans la fenêtre contextuelle, remplissez tous les champs requis (vous pouvez vous référer à la section "'tyling' de la documentation), et appuyez sur le bouton 'Enregistrer' (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-wrapper-add-styles-2.png" alt=""></figure>
    </li>
    <li>
        <p>Si tous les champs sont remplis correctement, les styles seront enregistrés.</p>
    </li>
</ul>

<h4>Rangée</h4>
<p>C'est un élément de la grille Bootstrap. C'est un élément requis.</p>
<h4>Ajout de rangée</h4>
<ul class="index-list">
    <li>
        <p>Pour insérer une nouvelle rangée, appuyez sur '+ Ajouter une rangée' (1) dans le bloc du wrapper,
		ou '+ Ajouter une rangée' (2) dans le bloc du préréglage principal, ou '+ Ajouter une rangée' (3) dans la liste déroulante de colonne.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-row-1.png" alt=""></>
    </li>
    <li>
        <p>La rangée a été ajoutée avec succès.</p>
    </li>
</ul>

<h4>Ajout d'une classe css personnalisée pour une rangée</h4>
<p>L'ajout de la classe personnalisée vous permettra de créer un style spécifique pour rangée en utilisant les règles css.</p>
<ul class="index-list">
    <li>
        <p>Pour ajouter la classe à la rangée, appuyez sur le bouton (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-edit-row-1.png" alt=""></figure>
    </li>
    <li>
        <p>Choisissez la 'Modifier la rangée' (2) dans une liste déroulante.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-edit-row-2.png" alt=""></figure>
    </li>
    <li>
        <p>Vous verrez une fenêtre contextuelle, remplissez le champ 'Entrer le classe de rangée' (2) et appuyez sur le bouton 'Confirmer' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-edit-row-3.png" alt=""></figure>
    </li>
    <li>
        <p>La classe personnalisée a été ajoutée avec succès.</p>
    </li>
</ul>

<h4>Suppression de rangée</h4>
<p class="alert alert-warning">La suppression de l'élément préréglé entraînera aussi l'élimination de tous ses éléments enfants et leurs styles.</p>
<ul class="index-list">
    <li>
        <p>Pour supprimer la ligne, ouvrez le menu (l'icône 'ellipsis') (1) dans le bloc de rangée.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-delete-row-1.png" alt=""></figure>
    </li>
    <li>
        <p>Choisissez l'option 'Supprimer' (2) dans la liste déroulante.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-delete-row-2.png" alt=""></figure>
    </li>
    <li>
        <p>La rangée a été supprimée avec succès.</p>
    </li>
</ul>

<h4>Styliser la rangée</h4>
<ul class="index-list">
    <li>
        <p>Pour ajouter des styles de rangée, ouvrez le menu (l'icône 'ellipsis') (1) dans un bloc de rangée.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-row-add-styles-1.png" alt=""></figure>
    </li>
    <li>
        <p>Appuyez sur 'Styliser' (2) dans la liste déroulante.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-row-add-styles-2.png" alt=""></figure>
    </li>
    <li>
        <p>Dans la fenêtre contextuelle, remplissez tous les champs requis (vous pouvez vous référer à la section 'Styling' de la documentation), et appuyez sur le bouton 'Enregistrer' (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-row-add-styles-3.png" alt=""></figure>
    </li>
    <li>
        <p>Si tous les champs sont remplis correctement, les styles seront enregistrés.</p>
    </li>
</ul>

<h4>Colonne</h4>
<p>C'est un élément avec une largeur de bloc configurable pour différentes dimensions, basé sur la grille Bootstrap.</p>

<h4>Ajout de colonne</h4>
<ul class="index-list">
    <li>
        <p>Pour insérer une colonne dans une 'rangée' nécessaire, ouvrez le menu (icône 'ellipsis') (1)</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-col-1.png" alt=""></figure>
    </li>
    <li>
        <p>Choisissez '+ Ajouter col' (2) dans la liste.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-col-2.png" alt=""></figure>
    </li>
    <li>
        <p>Remplissez les champs (col-xs*, col-sm*, col-md*, col-lg - bootstrap classes) dans la fenêtre contextuelle et appuyez sur le bouton 'Confirmer' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-col-3.png" alt=""></figure>
    </li>
    <li>
        <p>La colonne a été ajoutée avec succès.</p>
    </li>
</ul>

<h4>Suppression de colonne</h4>
<p class="alert alert-warning">La suppression de l'élément préréglé entraînera aussi l'élimination de tous ses éléments enfants et leurs styles.</p>
<ul class="index-list">
    <li>
        <p>Pour supprimer la colonne, ouvrez le menu (l'icône 'ellipsis') (1) dans un bloc de colonnes.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-detele-col-1.png" alt=""></figure>
    </li>
    <li>
        <p>Appuyez sur 'Supprimer' (2) dans la liste.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-detele-col-2.png" alt=""></figure>
    </li>
    <li>
        <p>La colonne et tous ses éléments enfants ont été supprimés.</p>
    </li>
</ul>

<h4>Modification de colonne</h4>
<ul class="index-list">
    <li>
        <p>Pour éditer la colonne, ouvrez le menu (l'icône 'ellipsis') (1) dans un bloc de colonnes.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-edit-col-1.png" alt=""></figure>
    </li>
    <li>
        <p>Appuyez sur 'Editer colonne' (2) dans la liste.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-edit-col-2.png" alt=""></figure>
    </li>
    <li>
        <p>Remplissez les champs (col-xs*, col-sm*, col-md*, col-lg - bootstrap classes) dans la fenêtre contextuelle et appuyez sur 'Confirmer' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-edit-col-3.png" alt=""></figure>
    </li>
    <li>
        <p>La colonne a été éditée avec succès.</p>
    </li>
</ul>

<h4>Styliser la colonne</h4>
<ul class="index-list">
    <li>
        <p>Pour ajouter des styles de colonne, ouvrez le menu (l'icône 'ellipsis') (1) dans un bloc de colonnes.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-col-add-styles-1.png" alt=""></figure>
    </li>
    <li>
        <p>Appuyez sur 'Styliser' (2) dans la liste des options.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-col-add-styles-2.png" alt=""></figure>
    </li>
    <li>
        <p>Dans la fenêtre contextuelle, remplissez tous les champs requis (vous pouvez vous référer à la section 'Styling' de la documentation), et appuyez sur le bouton 'Enregistrer' (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-col-add-styles-3.png" alt=""></figure>
    </li>
    <li>
        <p>Si tous les champs sont remplis correctement, les styles seront enregistrés.</p>
    </li>
</ul>

<h4>Module</h4>
<p>Module, affecté à ce crochet.</p>

<h4>Ajout du module</h4>
<p class="box-notification"><span>Faites attention lors de l'ajout de modules au préréglage, 
Il est souhaitable que certains modules de ne pas changer leur disposition visible, par exemple, 
le module statistique 'Data mining for statistics' ('Exploration de données pour statistiques').</span></p>
<ul class="index-list">
    <li>
        <p>Pour ajouter le module au préréglage dans un bloc de colonne, ouvrez le menu (l'icône 'ellipsis')(1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-module-1.png" alt=""></figure>
    </li>
    <li>
        <p>Appuyez sur '+ Add Module' (2) dans la liste des options disponibles.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-module-2.png" alt=""></figure>
    </li>
    <li>
        <p>Si nécessaire, vous pouvez entrer la classe personnalisée (3) dans la fenêtre contextuelle et sélectionner le module (4), appuyez ensuite sur 'Confirmer' (5).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-module-3.png" alt=""></figure>
    </li>
    <li>
        <p>Le module a été ajouté avec succès.</p>
    </li>
</ul>

<h4>Suppression du module</h4>
<p class="alert alert-warning">La suppression de l'élément préréglé entraînera aussi l'élimination de tous ses éléments enfants et leurs styles.</p>
<ul class="index-list">
    <li>
        <p>Pour supprimer le module, ouvrez le menu (l'icône 'ellipsis') (1) dans le bloc de module.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-delete-module-1.png" alt=""></figure>
    </li>
    <li>
        <p>Appuyez sur 'Supprimer' (2) dans la liste des options disponibles.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-delete-module-2.png" alt=""></figure>
    </li>
    <li>
        <p>Le module est supprimé.</p>
    </li>
</ul>

<h4>Ajout de classe personnalisée au module</h4>
<p>L'ajout de classe personnalisé permet de créer un style de module à l'aide de règles cs.</p>
<ul class="index-list">
    <li>
        <p>Pour spécifier une classe personnalisée pour le module, ouvrez le menu dans le bloc de module (l'icône 'ellipsis')(1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-module-add-class-1.png" alt=""></figure>
    </li>
    <li>
        <p>Appuyez sur 'Modifier les paramètres' (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-module-add-class-2.png" alt=""></figure>
    </li>
    <li>
        <p>Spécifiez la classe personnalisée (3) dans la fenêtre contextuelle et appuyez sur le bouton 'Confirmer' (4).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-module-add-class-3.png" alt=""></figure>
    </li>
    <li>
        <p>La classe personnalisée a été ajoutée.</p>
    </li>
</ul>

<h4>Exportation de préréglages</h4>
<p>L'outil Exporter vous permet d'exporter des presets pour les importer dans différents magasins plus tard.</p>
<ul class="index-list">
    <li>
        <p>Accédez à l'onglet 'Outils' (1) dans le panneau des configurations principales.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-export-preset-1.png" alt=""></figure>
    </li>
    <li>
        <p>Choisissez 'Exporter' (2) dans la liste.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-export-preset-2.png" alt=""></figure>
    </li>
    <li>
        <p>Vous verrez la liste des préréglages existants dans les crochets du site.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-export-preset-3.png" alt=""></figure>
    </li>
    <li>
        <p>Afin de prévisualiser le préréglage, appuyez sur le bouton 'Aperçu' (3) près du préréglage dont vous avez besoin.
		Pour exporter, appuyez sur le bouton 'Exporter le préréglage' (4).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-export-preset-4.png" alt=""></figure>
    </li>
    <li>
        <p>Ensuite, vous pourrez télécharger ce préréglage sous forme d'archive zip.</p>
    </li>
</ul>

<h4>Importation de préréglages</h4>
<p class="alert alert-warning">L'outil Importer n'accepte que les fichiers * .zip prédéfinis, qui ont été générés précédemment avec le même module (l'outil Exporter).</p>
<ul class="index-list">
    <li>
        <p>Pour importer votre préréglage, vous devez ouvrir l'onglet <strong>Outils (1)</strong>
		et choisissez <strong>'Importer' (2)</strong>.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-import-preset-1.png" alt="" /></figure>
    </li>
    <li>
        <p>Appuyez ensuite sur le bouton  <strong>Ajouter un fichier (3)</strong> et sélectionnez le fichier zip de votre exportation.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-import-preset-2.png" alt="" /></figure>
    </li>
    <li>
        <p>Si ce préréglage répond à vos besoins, appuyez sur <strong>'Importer' (4)</strong>. Ce préréglage sera importé et ajouté à la liste des préréglages disponibles.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-import-preset-3.png" alt="" /></figure>
    </li>
</ul>

<h4>Réinitialiser</h4>
<p>Réinitialiser - réinitialise tous les préréglages à leur état initial (car ils ont été fournis avec le thème), tous les préréglages personnalisés, créés par l'utilisateur seront supprimés.</p>
<p class="alert alert-warning">Attention! After restoring the default presets, all of the custom presets will be removed!</p>
<ul class="index-list">
    <li>
        <p>Pour réinitialiser les préréglages, accédez à l'onglet 'Outils' (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-reset-1.png" alt=""></figure>
    </li>
    <li>
        <p>Ouvrez l'onglet 'Réinitialiser' (2) dans le bloc.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-reset-2.png" alt=""></figure>
    </li>
    <li>
        <p>Et appuyez sur 'Réinitialiser par défaut'.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-reset-3.png" alt=""></figure>
    </li>
    <li>
        <p>C'est tout.</p>
    </li>
</ul>

<h4>Stylisation</h4>
<ul class="index-list">
    <li>
        <p>Styles de fond. Description des champs:</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-styles-1.png" alt="" /></figure>
        <ul class="marked-list">
            <li>background-image (image de fond) - l'argument est un lien vers l'image. L'image est choisie dans le dossier ~/images/cms/.</li>
            <li>background-color (couleur de fond) - le valeur peut être définie en tout format de couleur (rgb, hex, etc.). Vous pouvez choisir la couleur à l'aide de l'outil 'Sélecteur de couleurs'.</li>
            <li>background-repeat (répétition du fond) - toutes les options disponibles sont listées dans la liste déroulante.</li>
            <li>background-position (position de fond) - toutes les options disponibles sont listées dans la liste déroulante.</li>
            <li>background-size (taille de fond) - toutes les options disponibles sont listées dans la liste déroulante.</li>
            <li>background-origin (région de positionnement d'image de fond) - toutes les options disponibles sont listées dans la liste déroulante.</li>
        </ul>
    </li>
    <li><p>Styles de bordure.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-styles-2.png" alt="" /></figure>
        <ul class="marked-list">
            <li>TYPE: border-top-style, border-right-style, border-left-style, border-bottom-style - toutes les options disponibles sont listées dans la liste déroulante.</li>
            <li>LARGEUR: border-top-width, border-right-width, border-left-width, border-bottom-width - devrait être configuré en pixels.</li>
            <li>RADIUS: border-top-right-radius, border-top-left-radius, border-bottom-right-radius, border-bottom-left-radius - should be set in pixels.</li>
            <li>COULEUR: border-top-сolor, border-right-color, border-left-color, border-bottom-color - le valeur peut être définie en tout format de couleur (rgb, hex, etc.). Vous pouvez choisir la couleur à l'aide de l'outil 'Sélecteur de couleurs'.</li>
        </ul>
    </li>
    <li><p>Autres styles.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-styles-3.png" alt="" /></figure>
        <ul class="marked-list">
            <li>box-shadow - exemple: 0px 0px 0px 0px rgba(0,0,0,0.75).</li>
        </ul>
    </li>
</ul>

<h4>Suppression des styles d'élément</h4>
<ul class="index-list">
    <li>
        <p>Pour supprimer les styles d'élément, ouvrez la section de style et appuyez sur le bouton 'Effacer les styles' (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-clear-styles-1.png" alt="" /></figure>
    </li>
</ul>

<h4>Avertissements</h4>
<p>Si le message suivant apparaît dans le bloc du module, vous devez activer le module mentionné.</p>
<figure class="img-polaroid"><img src="img/tmmegalayout-module-warning-1.png" alt=""></figure>
<p>Si le message suivant apparaît dans le bloc du module, vous devez installer le module mentionné.</p>
<figure class="img-polaroid"><img src="img/tmmegalayout-module-warning-2.png" alt=""></figure>
<p class="alert alert-warning">Dans le cas où vous supprimez ou désactivez le module 'TM Mega Layout', tous les préréglages actifs seront désactivés et vous verrez les positions (crochets) dans leur apparence originale.</p>