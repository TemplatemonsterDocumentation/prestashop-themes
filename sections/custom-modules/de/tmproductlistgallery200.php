<h3>TM Product List Gallery 2.0.0</h3>
<?php if ($project == 'eveprest' ) { ?>
    <div>
        <p style="margin-bottom: 0;">Verfügbar in:</p>
        <p style="margin-top: 0;" class="small text-secondary">Mode, Elektronik, Ersatzteile, Möbel, Ein Produkt</p>
    </div>
<?php } ?>
<p>In diesem Modul werden alle verfügbaren Produktbilder als Galerie auf den Seiten mit der Produktliste dargestellt. Abhängig von den Einstellungen, die Sie wählen, wird das Modul Bilder als Rollover oder Slideshow dargestellt.</p>
<h5>Wie man das Modul installiert und löscht </h5>
<p>Dieses Modul wird ein anderes PrestaShop Modul installiert und gelöscht.</p>
<h5>Wie man das Modul einstellt</h5>
<p>Nachdem Sie dieses Modul installiert haben, öffnen Sie die Datei product-list.tpl in dem Stammordner Ihrer Website und finden Sie den folgenden Codezeile:<br/></p>
<figure class="img-polaroid"><img src="img/tmproductlistgallery-1.png" alt="" /></figure>
<p>und ersetzen Sie sie durch:</p>
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
<p>Nachdem Sie das Modul installiert und aktiviert haben, können Sie seine Einstellungen ändern.</p>
<h5> Dieses Modul hat die folgenden Standardeinstellungen:</h5>
<ul class="marked-list">
    <li><strong>Typ</strong> (Type) – wählen Sie eine Darstellungsart: Rollover oder Slideshow.</li>
</ul>
<p>Wenn Sie <strong>Rollover</strong> (rollover) wählen, wählen Sie dann auch einen Animationseffekt:</p>
<figure class="img-polaroid"><img src="img/tmproductlistgallery-2.png" alt="" /></figure>
<strong>Animationsart:</strong>
<ul class="marked-list">
    <li><strong>Transparenz ändern</strong> (Opacity slide) – hier wird die Transparenz geändert;</li>
    <li><strong>Horizontal</strong> (Horizontal slide) - horizontale Bewegung;</li>
    <li><strong>Vertikal</strong> (Vertical slide) – vertikale Bewegung.</li>
</ul>
<p>Wenn Sie <strong>Slideshow</strong> (slideshow) wählen, werden die folgenden Einstellungen verfügbar:</p>
<figure class="img-polaroid"><img src="img/tmproductlistgallery-3.png" alt="" /></figure>
<ul class="marked-list">
    <li><strong>Angezeigte Elemente</strong> (Display items) – die Anzahl der angezeigten Elemente;</li>
    <li><strong>Unendlich</strong> (Infinite) – Slides werden unendlos dargestellt;</li>
    <li><strong>Seitennummerierung</strong> (Pager) – die Seitennummerierung wird in der Slideshow dargestellt;</li>
    <li><strong>Bedienelemente</strong> (Controls) – Bedienelemente werden in der Slideshow dargestellt;</li>
    <li><strong>Vorschaubilder verwenden</strong> (Use thumbnails) – Vorschaubilder werden in der Slideshow dargestellt;</li>
    <li><strong>Seitennummerierung</strong> (Pager) – die Seitennummerierung wird in dem Karussell der Vorschaubilder dargestellt;</li>
    <li><strong>Bedienelemente</strong> (Controls) – Bedienelemente werden in dem Karussell der Vorschaubilder dargestellt;</li>
    <li><strong>Position</strong> (Position) – der vertikele oder horizontale Modus des Karussells;</li>
    <li><strong>Zentral Modus</strong> (Center mode) – das Karussell der Vorschaubilder wird zentriert;</li>
    <li><strong>Angezeigte Elemente</strong> (Visible items) – die Anzahl der Elemente in einer Reihe;</li>
    <li><strong>Anzahl der gescrollten Elemente</strong> (Items to scroll) – die Anzahl der gescrollten Elemente in dem Karussell der Vorschaubilder.</li>
</ul>
