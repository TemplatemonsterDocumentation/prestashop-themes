<h3>Galerie de Liste des Produits TM 2.0.0</h3>
<?php if ($project == 'eveprest' ) { ?>
    <div>
        <p style="margin-bottom: 0;">Disponible en:</p>
        <p style="margin-top: 0;" class="small text-secondary">Mode, Électronique, Pièces de rechange, Mobilier, Produit Unique</p>
    </div>
<?php } ?>
<p>Ce module affiche toutes les images de produits disponibles sous la forme d'une galerie sur les pages des liste de produits.
Selon les paramètres que vous choisissez, le module peut afficher des images sous la forme de roulement ou d'un diaporama.</p>
<h5>Installation et suppression du module</h5>
<p>Ce module peut être installé et supprimé comme tout autre module PrestaShop.</p>
<h5>Paramètres du module</h5>
<p>Une fois le module installé, ouvrez le fichier product-list.tpl dans votre dossier racine de modèle, trouvez le code suivant:<br/></p>
<figure class="img-polaroid"><img src="img/tmproductlistgallery-1.png" alt="" /></figure>
<p>et remplacez-le par:</p>
<pre class="codebox">
    {capture name='displayProductListGallery'}{hook h='displayProductListGallery' product=$product}{/capture}
    {if $smarty.capture.displayProductListGallery}
    &nbsp;&nbsp;{hook h='displayProductListGallery' product=$product}
    {else}
    &nbsp;&nbsp;&lt;a class="product_img_link" href="{$product.link|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}" itemprop="url"&gt;
    &nbsp;&nbsp;&lt;img class="replace-2x img-responsive" src="{$link-&gt;getImageLink($product.link_rewrite, $product.id_image, 'home_default')|escape:'html':'UTF-8'}" alt="{if !empty($product.legend)}{$product.legend|escape:'html':'UTF-8'}{else}{$product.name|escape:'html':'UTF-8'}{/if}" title="{if !empty($product.legend)}{$product.legend|escape:'html':'UTF-8'}{else}{$product.name|escape:'html':'UTF-8'}{/if}" {if isset($homeSize)} width="{$homeSize.width}" height="{$homeSize.height}"{/if} itemprop="image" /&gt;
    &nbsp;&nbsp;&lt;/a&gt;
    {/if}
</pre>
<p>Après l'installation et la connexion du module, vous pouvez le configurer sur la page de configuration du module.</p>
<h5>Le module comporte les paramètres suivants:</h5>
<ul class="marked-list">
    <li><strong>Type</strong> - sélectionnez le type d'affichage: roulement ou diaporama.</li>
</ul>
<p>Si vous choisissez <strong>roulement</strong>, alors vous pouvez sélectionner l'effet d'animation:</p>
<figure class="img-polaroid"><img src="img/tmproductlistgallery-2.png" alt="" /></figure>
<strong>Type d'animation:</strong>
<ul class="marked-list">
    <li><strong>Glissade d'opacité</strong> - changements d'opacité;</li>
    <li><strong>Glissade horizontale</strong> - horizontal;</li>
    <li><strong>Glissade verticale</strong> - vertical.</li>
</ul>
<p>Si vous choisissez <strong>diaporama</strong>, vous trouverez les paramètres suivants:</p>
<figure class="img-polaroid"><img src="img/tmproductlistgallery-3.png" alt="" /></figure>
<ul class="marked-list">
    <li><strong>Afficher les éléments</strong> - le nombre d'éléments affichés;</li>
    <li><strong>Infini</strong> - le cycle de diaporama infini;</li>
    <li><strong>Pager</strong> - l'affichage de la pagination dans le diaporama;</li>
    <li><strong>Contrôles</strong> - l'affichage des contrôles dans le diaporama;</li>
    <li><strong>Utiliser des vignettes</strong> - l'affichage des miniatures dans le diaporama;</li>
    <li><strong>Pager</strong> - l'affichage de la pagination dans le carrousel des miniatures;</li>
    <li><strong>Contrôles</strong> - l'affichage des contrôles dans le carrousel des miniatures;</li>
    <li><strong>Position</strong> - le mode carrousel vertical ou horizontal;</li>
    <li><strong>Mode Centre</strong> - le centrage de la vue carrousel des miniatures;</li>
    <li><strong>Eléments visibles</strong> - le nombre d'articles sur une seule ligne;</li>
    <li><strong>Eléments à défiler</strong> - le nombre d'éléments défilés dans le carrousel des miniatures.</li>
</ul>