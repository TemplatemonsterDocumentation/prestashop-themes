<h3>TM-Galeria Listy Produktów 2.0.0</h3>
<?php if ($project == 'eveprest') { ?>
    <div>
        <p style="margin-bottom: 0;">Dostępny dla:</p>
        <p style="margin-top: 0;" class="small text-secondary">Moda, Elektronika, Części Zapasowe, Meble, Sklep Jednego
            Produktu</p>
    </div>
<?php } ?>
<p>Ten moduł pokazuje wszystkie dostępne zdjęcia produktów jako gelerię na stronach zestawień produktów. Zależnie od
    tego, jakie ustawienia są wybrane, moduł może pokazywać obrazki w trybie przewracania lub trybie pokazu slajdów.</p>
<h5>Instalowanie i usuwanie modułu </h5>
<p>Moduł instaluje się oraz usuwa się w taki sam sposób jak każdy inny moduł PrestaShop.</p>
<h5>Ustawienia modułu</h5>
<p>Po zakończeniu instalacji modułu, otwórz plik product-list.tpl w folderze głównym swojego szablonu i znajdź
    następujący kod:<br/></p>
<figure class="img-polaroid"><img src="img/tmproductlistgallery-1.png" alt=""/></figure>
<p>I zamiast niego wpisz:</p>
<pre class="codebox">
{capture name='displayProductListGallery'}{hook h='displayProductListGallery' product=$product}{/capture} {if $smarty.capture.displayProductListGallery}   {hook h='displayProductListGallery' product=$product} {else}   &lt;a class="product_img_link" href="{$product.link|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}" itemprop="url"&gt;   &lt;img class="replace-2x img-responsive" src="{$link-&gt;getImageLink($product.link_rewrite, $product.id_image, 'home_default')|escape:'html':'UTF-8'}" alt="{if !empty($product.legend)}{$product.legend|escape:'html':'UTF-8'}{else}{$product.name|escape:'html':'UTF-8'}{/if}" title="{if !empty($product.legend)}{$product.legend|escape:'html':'UTF-8'}{else}{$product.name|escape:'html':'UTF-8'}{/if}" {if isset($homeSize)} width="{$homeSize.width}" height="{$homeSize.height}"{/if} itemprop="image" /&gt;   &lt;/a&gt; {/if} </pre>
<p>Po zakończeniu instalacji i podłączeniu modułu możesz go nastawić na stronie konfiguracji modułu.</p>
<h5>Poza tym, moduł ma następujące ustawienia główne:</h5>
<ul class="marked-list">
    <li><strong>Typ</strong> - wybierz typ wyświetlania: przewracanie lub pokaz slajdów.</li>
</ul>
<p>Jeżeli wybierzesz <strong>przewracanie</strong>, możesz wybrać efekt animacji:</p>
<figure class="img-polaroid"><img src="img/tmproductlistgallery-2.png" alt=""/></figure>
<strong>Typ animacji:</strong>
<ul class="marked-list">
    <li><strong>Nieprzejrzystość slajdu</strong> - nieprzejrzystość się zmienia;</li>
    <li><strong>Poziomy slajd</strong> - slajd zorientowany poziomo;</li>
    <li><strong>Pionowy slajd</strong> - slajd zorientowany pionowo.</li>
</ul>
<p>Jeżeli wybierzesz <strong>pokaz slajdów</strong>, zobaczysz, że dostępne są następujące ustawienia:</p>
<figure class="img-polaroid"><img src="img/tmproductlistgallery-3.png" alt=""/></figure>
<ul class="marked-list">
    <li><strong>Pokazuj elementy</strong> - liczba pokazywanych elementów;</li>
    <li><strong>Nieskończoność</strong> -nieskończony cykl pokazu slajdów;</li>
    <li><strong>Strony</strong> - pokaz slajdów zawiera numerację stron;</li>
    <li><strong>Kontrole</strong> - pokaz slajdów zawiera kontrole (narzędzia sterowania);</li>
    <li><strong>Stosuj miniatury</strong> - wyświetlanie minuatur w trakcie pokazu slajdów;</li>
    <li><strong>Strony</strong> - karuzela minuatur zawiera numerację stron;</li>
    <li><strong>Kontrole</strong> - karuzela minuatur zawiera kontrole (narzędzia sterowania);</li>
    <li><strong>Pozycja</strong> - tryb pionowy lub poziomy karuzeli;</li>
    <li><strong>Centrowanie</strong> - centrowanie przeglądania miniatur;</li>
    <li><strong>Elementy widoczne</strong> - liczba elementów w wierszu;</li>
    <li><strong>Liczba przewijanych elementów</strong> - liczba elementów które będą przewijane w karuzelu miniatur.
    </li>
</ul>