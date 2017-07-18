<h3>TM Mega Layout 1.1.0</h3>
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
            <li><p>Le module comprend 5 crochets: 'Header', 'Top Column', 'Home', 'Footer' et 'Product Footer'.</p></li>
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
    <li><p>Header. Pour ajouter un préréglage personnalisé au crochet Header, vous devez effectuer les étapes suivantes:</p>
        <ul class="marked-list">
            <li>Ouvrez le fichier <strong>/themes/your_theme/header.tpl</strong> pour éditer.</li>
            <li>Recherchez le code suivant
                <pre class="codebox">
{capture name='displayNav'}{hook h='displayNav'}{/capture}
{if $smarty.capture.displayNav}
&lt;div class="nav"&gt;
  &lt;div class="container"&gt;
    &lt;div class="row"&gt;
      &lt;nav>{$smarty.capture.displayNav}&lt;/nav&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
{/if}
&lt;div&gt;
  &lt;div class="container"&gt;
   &lt;div class="row"&gt;
    &lt;div id="header_logo"&gt;
      &lt;a href="{if isset($force_ssl) && $force_ssl}{$base_dir_ssl}{else}{$base_dir}{/if}" title="{$shop_name|escape:'html':'UTF-8'}"&gt;
        &lt;img class="logo img-responsive" src="{$logo_url}" alt="{$shop_name|escape:'html':'UTF-8'}"{if isset($logo_image_width) && $logo_image_width} width="{$logo_image_width}"{/if}{if isset($logo_image_height) && $logo_image_height} height="{$logo_image_height}"{/if}/&gt;
      &lt;/a&gt;
    &lt;/div&gt;
    {if isset($HOOK_TOP)}{$HOOK_TOP}{/if}
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</pre>
            </li>
            <li>Et remplacez-le par:
                <pre class="codebox">
{assign var='displayMegaHeader' value={hook h='tmMegaLayoutHeader'}}
{if isset($HOOK_TOP) || $displayMegaHeader}
  {if $displayMegaHeader}
    {$displayMegaHeader}
  {else}
    {capture name='displayNav'}{hook h='displayNav'}{/capture}
    {if $smarty.capture.displayNav}
    &lt;div class="nav"&gt;
      &lt;div class="container"&gt;
        &lt;div class="row"&gt;
          &lt;nav>{$smarty.capture.displayNav}&lt;/nav&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    {/if}
    &lt;div&gt;
      &lt;div class="container"&gt;
       &lt;div class="row"&gt;
        &lt;div id="header_logo"&gt;
          &lt;a href="{if isset($force_ssl) && $force_ssl}{$base_dir_ssl}{else}{$base_dir}{/if}" title="{$shop_name|escape:'html':'UTF-8'}"&gt;
            &lt;img class="logo img-responsive" src="{$logo_url}" alt="{$shop_name|escape:'html':'UTF-8'}"{if isset($logo_image_width) && $logo_image_width} width="{$logo_image_width}"{/if}{if isset($logo_image_height) && $logo_image_height} height="{$logo_image_height}"{/if}/&gt;
          &lt;/a&gt;
        &lt;/div&gt;
        {$HOOK_TOP}
       &lt;/div&gt;
     &lt;/div&gt;
    &lt;/div&gt;
  {/if}
{/if}</pre>
            </li>
        </ul>
    </li>

    <li><p>Productfooter. Pour ajouter un préréglage personnalisé au crochet Productfooter, vous devez effectuer les étapes suivantes:</p>
        <ul class="marked-list">
            <li>Ouvrez le fichier <strong>/themes/your_theme/product.tpl</strong> pour éditer.</li>
            <li>Recherchez le code suivantde:
                <pre class="codebox">
{if isset($HOOK_PRODUCT_FOOTER) && $HOOK_PRODUCT_FOOTER}{$HOOK_PRODUCT_FOOTER}{/if}                                   </pre>
            </li>
            <li>Et remplacez-le par:
                <pre class="codebox">
{assign var='displayMegaProductFooter' value={hook h='tmMegaLayoutProductFooter'}}
  {if isset($HOOK_PRODUCT_FOOTER) || $displayMegaFooter}
    {if $displayMegaProductFooter}
      {$displayMegaProductFooter product=$product category=$category}
    {else}
      {$HOOK_PRODUCT_FOOTER}
    {/if}
  {/if}</pre>
            </li>
        </ul>
    </li>
</ul>

<h4>Crochets</h4>
<p>Le module dispose de 5 crochets disponibles par défaut:</p>
<ul class="index-list">
    <li>'Header' est un crochet qui combine 2 crochets standards: displayNav et displayTop. Ce crochet correspond à l'en-tête du site
    </li>
    <li>'Top Column' correspond au crochet original displayTopColumn. Ce crochet vient juste après le crochet Header.
    </li>
    <li>'Home' correspond au crochet original displayHome. Ce crochet n'est présent que sur la page principale.</li>
    <li>'Footer' correspond au crochet original displayFooter.</li>
    <li>'Product Footer' correspond au crochet original displayFooterProduct, qui s'affiche dans pied de page de produit.
    </li>
</ul>

<h4>Panneau principal de TM Mega Layout</h4>
<h4 class="text-secondary">Préréglages principaux</h4>
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
        <p>Ensuite, remplissez le champ "Entrez le nom de préréglage" dans la fenêtre contextuelle (2) et appuyez sur 'Enregistrer' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-preset-2.png" alt="" /></figure>
    </li>
    <li>
        <p>Le préréglage a été créé avec succès, il est listé parmi les presets disponibles (4) maintenant. Le préréglage créé récemment est sélectionné pour l'édition (5).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-preset-3.png" alt="" /></figure>
    </li>
</ul>

<h5>Activation du préréglage</h5>
<ul class="index-list">
    <li>
        <p>Tout d'abord, choisissez le preset requis parmi la liste (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-activation-preset-1.png" alt=""/></figure>
    </li>
    <li>
        <p>Appuyez sur 'Utiliser comme défaut' (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-activation-preset-2.png" alt=""/></figure>
    </li>
    <li>
        <p>Le préréglage a été activé. Si vous devez afficher ce préréglage uniquement sur certaines pages, ouvrez le menu déroulant (3) et sélectionnez les pages dont vous avez besoin.
			Pour appliquer les modifications, cliquez en dehors de la zone de liste.
			Un préréglage affiché sur toutes les pages sera marqué avec une étoile remplie dans la liste des préréglages,
			et le préréglage, qui s'affiche uniquement sur certaines pages, sera marqué avec une étoile partiellement remplie.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-activation-preset-3.png" alt=""/></figure>
    </li>
</ul>

<h5>Suppression du préréglage</h5>
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

<h5>Renommer le préréglage</h5>
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

<h5>Ajout de wrapper</h5>
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

<h5>Ajout de la classe css personnalisée au wrapper</h5>
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

<h5>Suppression de wrapper</h5>
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
<h5>Ajout de rangée</h5>
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

<h5>Ajout d'une classe css personnalisée pour une rangée</h5>
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

<h5>Suppression de rangée</h5>
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

<h5>Styliser la rangée</h5>
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

<h5>Ajout de colonne</h5>
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

<h5>Suppression de colonne</h5>
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

<h5>Modification de colonne</h5>
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

<h5>Styliser la colonne</h5>
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

<h5>Ajout du module</h5>
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

<h5>Suppression du module</h5>
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

<h5>Ajout de classe personnalisée au module</h5>
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

<h5>Logo, Droits d'auteur</h5>
<p>Les blocs de Logo et de Droits d'auteur sont modifiés de la même manière que les modules,
Sauf que Logo ne peut être placé que dans la position de Header ou Footer, et le bloc Copyright peut être placé uniquement en position de Footer.</p>

<h4 class="text-secondary">Page de produit</h4>
<h5>Onglet Info de produit</h5>
<h6>Grâce à cet onglet, vous pouvez changer la mise en page de la page produit. Il apparaîtra dans le panneau d'administration après avoir effectué quelques actions simples décrites ci-dessous.</h6>
<h5>Création de la mise en page</h5>
<h6>Les dispositions sont créées et modifiées manuellement.</h6>
<ul class="index-list">
    <li><p>Créez le dossier 'product_pages' dans votre répertoire de thème.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout110-product-info-3.png" alt=""></figure>
    </li>
    <li>Dans le dossier de thème, retrouvez le fichier 'product.tpl', copiez-le dans le dossier récemment créé 'product_pages' et renommez-le 'default.tpl'.
	Pour créer plusieurs mises en page -  dupliquer ce fichier, renommez-le (par ex. 'layout_1.tpl', 'layout_2.tpl') et modifiez la structure selon vos besoins.</li>
    <li>Créez un fichier 'config.json' dans ce dossier. Copiez le code suivant:
        <pre class="codebox">
{
  "default": {
    "name": "Default",
    "preview": "default.jpg",
    "default": 1
  }
}</pre>
        <ul class="marked-list">
            <li><strong>"default"</strong> - le nom du fichier .tpl contenant la structure de la page du produit.</li>
            <li>"name": <strong>"Default"</strong> - le titre de la mise en page de produit dans les paramètres du module.
            </li>
            <li>"preview": <strong>"default.jpg"</strong> - aperçu de la disposition de la page du produit dans les paramètres du module; l'image doit être placée dans le dossier 'product_pages'.
            </li>
            <li><p>"default": <strong>1</strong> - définissez '1' si la mise en page doit être définie par défaut</p><br>
                <p class="alert small alert-warning">Une des mises en page devrait contenir une valeur '1' à définir comme défaut.</p>
            </li>
        </ul>
        <p>Ce code devrait être dupliqué pour chaque disposition créée, et contenir des valeurs correspondantes. Par exemple:</p>
        <pre class="codebox">
{
  "default": {
    "name": "Default",
    "preview": "default.jpg",
    "default": 0
  },
  "layout_1": {
    "name": "Layout 1",
    "preview": "layout_1.jpg",
    "default": 0
  },
  "layout_2": {
    "name": "Layout 2",
    "preview": "layout_2.jpg",
    "default": 1
  }
}</pre>
    </li>
    <li>Ouvrez le fichier 'product.tpl' dans le dossier de la thème. Supprimez tout et collez le code suivant:
        <pre class="codebox">
{include file="$tpl_dir./errors.tpl"}
{if $errors|@count == 0}
  {if isset($megalayoutProductInfoPage) && $megalayoutProductInfoPage}
    {assign var='path' value="./product_pages/`$megalayoutProductInfoPage`"}
    {include file=$path}
  {else}
    {include file='./product_pages/default.tpl'}
  {/if}
{/if}</pre>
    </li>
    <li>Pour ajouter/modifier les styles de la disposition d'une page de produit, accédez à your_theme_folder/css/ et ajoutez un nouveau dossier 'product_pages'.
	Dans ce dossier, créez un fichier avec le nom de disposition et l'extension .css (par ex. 'default.css', 'layout_1.css', 'layout_2.css').
	Ces fichiers doivent contenir des styles de la disposition de la page de produit correspondante.</li>
    <li>Pour ajouter des scripts à la disposition d'une page de produit, allez à your_theme_folder/js/ et ajoutez un nouveau dossier 'product_pages'.
	Dans ce dossier, créez un fichier avec le nom de disposition et l'extension .js (par ex. 'default.js', 'layout_1.js', 'layout_2.js').
	Ces fichiers doivent contenir des scripts de la disposition de la page de produit correspondante.</li>
</ul>
<h5>Bascule entre différentes présentations.</h5>
<p>Sélectionnez 'Page de produit' dans la liste déroulante (1) et cliquez sur l'onglet 'Info de produit' (2).</p>
<figure class="img-polaroid"><img src="img/tmmegalayout110-product-info-1.png" alt=""></figure>
<p>Dans cet onglet, vous pouvez changer les présentations de la page produit. L'image de mise en page avec la bordure grise est définie par défaut.</p>
<figure class="img-polaroid"><img src="img/tmmegalayout110-product-info-2.png" alt=""></figure>

<h5>Exportation de préréglages</h5>
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

<h5>Importation de préréglages</h5>
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

<h5>Réinitialiser</h5>
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
        <p>C'est tout! Tous les préréglages sont réinitialisés à l'état initial.</p>
    </li>
</ul>

<!--optimization-->
<h5>Optimisation des styles et des scripts</h5>
<p>L'optimisation des styles et des scripts ajoute des exclusions pour les modules dans la section Header, en fonction de leur utilisation dans les préréglages.
Cela permet d'accélérer la vitesse de chargement de la page. L'optimisation fonctionne en mode test.</p>
<p>Activation de l'optimisation:</p>
<ul class="index-list">
    <li>
        <p>Pour activer l'optimisation, ouvrez l'onglet 'Outils' (1) et sélectionnez l'onglet 'Options' (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-optimization-1.png" alt=""></figure>
    </li>
    <li>
        <p>Dans la fenêtre apparue, vous pouvez activer l'optimisation (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-optimization-2.png" alt=""></figure>
    </li>
</ul>
<p>Si l'optimisation est activée lors de l'édition et de l'activation des préréglages, l'optimisation est rejetée, mais vous verrez une fenêtre, offrant d'exécuter l'optimisation.
Il n'est pas nécessaire d'optimiser les scripts et les styles chaque fois que vous modifiez les préréglages.
Il est préférable de les optimiser quand vous avez terminé l'édition.</p>
<figure class="img-polaroid"><img src="img/tmmegalayout100-optimization-3.png" alt=""></figure>

<h5>Stylisation</h5>
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
<h5>Suppression des styles d'élément</h5>
<ul class="index-list">
    <li>
        <p>Pour supprimer les styles d'élément, ouvrez la section de style et appuyez sur le bouton 'Effacer les styles' (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-clear-styles-1.png" alt="" /></figure>
    </li>
</ul>

<h5>Avertissements</h5>
<p>Si le message suivant apparaît dans le bloc du module, vous devez activer le module mentionné.</p>
<figure class="img-polaroid"><img src="img/tmmegalayout-module-warning-1.png" alt=""></figure>
<p>Si le message suivant apparaît dans le bloc du module, vous devez installer le module mentionné.</p>
<figure class="img-polaroid"><img src="img/tmmegalayout-module-warning-2.png" alt=""></figure>
<p class="alert alert-warning">Dans le cas où vous supprimez ou désactivez le module 'TM Mega Layout', tous les préréglages actifs seront désactivés et vous verrez les positions (crochets) dans leur apparence originale.</p>