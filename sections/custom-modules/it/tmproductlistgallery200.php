<h3>TM Prodotto Lista Gallery 2.0.0</h3>
<?php if ($project == 'eveprest' ) { ?>
    <div>
        <p style="margin-bottom: 0;">Disponibile in:</p>
        <p style="margin-top: 0;" class="small text-secondary">Moda, Elettronica, Ricambi, Mobilio, Un Prodotto</p>
    </div>
<?php } ?>
<p>Questo modulo visualizza tutte le immagini disponibili in forma di una galleria sulle pagine di inserimento dei prodotti. A seconda delle impostazioni selezionate, il modulo può visualizzare le immagini in forma di rollover o slideshow.</p>
<h5>Installazione e eliminazione del modulo</h5>
<p>Questo modulo può essere installato e cancellato come qualsiasi altro modulo PrestaShop.</p>
<h5>Impostazioni del modulo</h5>
<p>Dopo l'installazione del modulo, aprire il file product-list.tpl nella cartella principale del modello, individuare il seguente codice:<br/></p>
<figure class="img-polaroid"><img src="img/tmproductlistgallery-1.png" alt="" /></figure>
<p>e sostituirlo:</p>
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
<p>Dopo aver installato e collegato il modulo, è possibile impostarlo sulla pagina di configurazione del modulo.</p>
<h5>Il modulo dispone delle seguenti impostazioni principali:</h5>
<ul class="marked-list">
    <li><strong>Tipo</strong> - selezionare il tipo di visualizzazione: rollover o slideshow.</li>
</ul>
<p>Se si sceglie <strong>rollover</strong>, è possibile scegliere l'effetto animazione:</p>
<figure class="img-polaroid"><img src="img/tmproductlistgallery-2.png" alt="" /></figure>
<strong>Animazione tipo:</strong>
<ul class="marked-list">
    <li><strong>opacità slide</strong> - cambiamenti di opacità;</li>
    <li><strong>Orizzontale slide</strong> - orizzontale;</li>
    <li><strong>Verticale slide</strong> - verticale.</li>
</ul>
<p>Se si sceglie <strong>slideshow</strong>, troverete le seguenti impostazioni disponibili:</p>
<figure class="img-polaroid"><img src="img/tmproductlistgallery-3.png" alt="" /></figure>
<ul class="marked-list">
    <li><strong>Display elementi</strong> - il numero di elementi visualizzati;</li>
    <li><strong>Infinito</strong> - ciclo di presentazione senza fine;</li>
    <li><strong>Pager</strong> - visualizzazione pager nella presentazione diapositive;</li>
    <li><strong>Controlli</strong> - controlla la visualizzazione nella presentazione;</li>
    <li><strong>Usa thumbnails</strong> - visualizzare le miniature della presentazione;</li>
    <li><strong>Pager</strong> - visualizzazione pager in carosello delle miniature;</li>
    <li><strong>Controlli</strong> - controlla la visualizzazione in carosello delle miniature;</li>
    <li><strong>Posizione</strong> - la modalità carosello verticale o orizzontale;</li>
    <li><strong>Centro modo</strong> - centrata la vista carosello delle miniature;</li>
    <li><strong>Visibili elementi</strong> - il numero di elementi in una riga;</li>
    <li><strong>Elementi per scroll</strong> - il numero di elementi scorrevoli in carosello delle miniature.</li>
</ul>