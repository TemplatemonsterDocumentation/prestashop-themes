<h3>TM Product List Gallery 2.0.0</h3>
<?php if ($project == 'eveprest') { ?>
    <div>
        <p style="margin-bottom: 0;">Available in:</p>
        <p style="margin-top: 0;" class="small text-secondary">Fashion, Electronics, Spare Parts, Furniture, One
            Product</p>
    </div>
<?php } ?>
<p>This module displays all the available product images in form of a gallery on product listing pages. Depending on
    what settings you choose, the module can display images in form of a rollover or slideshow.</p>
<h5>Module Installation and Deleting </h5>
<p>This module can be installed and deleted like any other PrestaShop module.</p>
<h5>Module settings</h5>
<p>After the module is installed, navigate to \themes\classic\templates\catalog\_partials\miniatures\product.tpl. Open this
    file and find the following code:<br/></p>
<figure class="img-polaroid"><img src="img/tmproductlistgallery-1.1.png" alt=""/></figure>
<p>and replace it with:</p>

<!--<pre class="codebox">-->
<!--    {capture name='displayProductListGallery'}{hook h='displayProductListGallery' product=$product}{/capture}-->
<!--    {if $smarty.capture.displayProductListGallery}-->
<!--    &nbsp;&nbsp;{hook h='displayProductListGallery' product=$product}-->
<!--    {else}-->
<!--    &nbsp;&nbsp;&lt;a class="product_img_link" href="{$product.link|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}" itemprop="url"&gt;-->
<!--    &nbsp;&nbsp;&lt;img class="replace-2x img-responsive" src="{$link-&gt;getImageLink($product.link_rewrite, $product.id_image, 'home_default')|escape:'html':'UTF-8'}" alt="{if !empty($product.legend)}{$product.legend|escape:'html':'UTF-8'}{else}{$product.name|escape:'html':'UTF-8'}{/if}" title="{if !empty($product.legend)}{$product.legend|escape:'html':'UTF-8'}{else}{$product.name|escape:'html':'UTF-8'}{/if}" {if isset($homeSize)} width="{$homeSize.width}" height="{$homeSize.height}"{/if} itemprop="image" /&gt;-->
<!--    &nbsp;&nbsp;&lt;/a&gt;-->
<!--    {/if}-->
<!--</pre>-->
<figure class="img-polaroid"><img src="img/tmproductlistgallery-1.2.png" alt=""/></figure>

<p>After installing and connecting the module, you can set it up on the module configuration page.</p>
<h5>The module has the following main settings:</h5>
<ul class="marked-list">
    <li><strong>Live mode</strong> - ability to use the module in live mode.</li>
    <li><strong>Type</strong> - select display type: rollover, gallery or slideshow.</li>
</ul>
<p>If you choose <strong>rollover</strong>, you can choose the animation effect:</p>
<figure class="img-polaroid"><img src="img/tmproductlistgallery-2.png" alt=""/></figure>
<strong>Animation type:</strong>
<ul class="marked-list">
    <li><strong>Opacity slide</strong> - opacity changes;</li>
    <li><strong>Horizontal slide</strong> - horizontal;</li>
    <li><strong>Vertical slide</strong> - vertical.</li>
</ul>
<p>If you choose <strong>gallery</strong>, you will find the following settings available:</p>
<figure class="img-polaroid"><img src="img/tmproductlistgallery-2.01.png" alt=""/></figure>
<ul class="marked-list">
    <li><strong>Display items</strong> - the number of items displayed;</li>
    <li><strong>Visible items in row</strong> - the number of items in a row;</li>
    <li><strong>Use carousel</strong> - enable/disable the carousel for this block.</li>
</ul>
<p>If you choose <strong>slideshow</strong>, you will find the following settings available:</p>
<figure class="img-polaroid"><img src="img/tmproductlistgallery-3.png" alt=""/></figure>
<ul class="marked-list">
    <li><strong>Display items</strong> - the number of items displayed;</li>
    <li><strong>Use pager</strong> - pager display in slide show;</li>
    <li><strong>Use controls</strong> - controls display in slide show.</li>
</ul>