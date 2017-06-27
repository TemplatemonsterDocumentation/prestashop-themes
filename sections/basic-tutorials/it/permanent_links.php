<h3>Come aggiungere o rimuovere alcuni link nel blocco Collegamenti permanenti</h3>
<p>Il seguente tutorial ti illustrerà come aggiungere o nascondere alcuni link nell'intestazione nei modelli PrestaShop 1.6.x.</p>
<p>I collegamenti di intestazione del modello PrestaShop sono definiti dal modulo Block permanente dei collegamenti. Di solito sembra sullo schermo sottostante (1).</p>
<figure class="img-polaroid">
    <img src="img/14-permalinks-1.png" alt=""/>
</figure>
<p>Se si desidera aggiungere un elemento o rimuoverlo, è necessario modificare il file "temi / temi_name / modules / blockpermanentlinks / blockpermanentlinks-header.tpl" che si trova nell'installazione di PrestaShop sul server di hosting.</p>
<ul class="index-list">
    <li>
        <span>Apri il file utilizzando qualsiasi editor di codice. Il menu viene creato come un elenco non ordinato. Ogni elemento del menu è avvolto in <em><strong>&lt;li&gt; &lt;/li&gt;</strong></em> tags. Il codice sarà simile a questo:</span>
        <pre class="codebox" style="color:#586e75">    <span
                style="color:#839496;font-style:italic">&lt;!-- Block permanent links modulo HEADER --></span>
    <span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">ul</span> <span
                style="color:#93a1a1">id</span><span style="color:#708284">=</span><span style="color:#269186"><span
                    style="color:#269186">"</span>header_links<span style="color:#269186">"</span></span><span
                style="color:#93a1a1">></span>
      <span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">li</span> <span
                style="color:#93a1a1">id</span><span style="color:#708284">=</span><span style="color:#269186"><span
                    style="color:#269186">"</span>header_link_contact<span style="color:#269186">"</span></span><span
                style="color:#93a1a1">></span>
        <span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">a</span> {<span
                style="color:#859900">if</span> <span style="color:#268bd2"><span style="color:#859900">$</span>page_name</span> ==<span
                style="color:#269186"><span style="color:#c60000">'</span>contact<span
                    style="color:#c60000">'</span></span>}<span style="color:#93a1a1">class</span>=<span
                style="color:#269186"><span style="color:#269186">"</span>active<span
                    style="color:#269186">"</span></span>{/<span style="color:#859900">if</span>} <span
                style="color:#93a1a1">href</span>=<span style="color:#269186"><span style="color:#269186">"</span>{<span
                    style="color:#268bd2"><span style="color:#859900">$</span>link</span>->getPageLink(<span
                    style="color:#269186"><span style="color:#c60000">'</span>contact<span
                        style="color:#c60000">'</span></span>, <span style="color:#b58900">true</span>)<span
                    style="color:#268bd2">|escape</span>:<span style="color:#269186"><span
                        style="color:#c60000">'</span>html<span style="color:#c60000">'</span></span>}<span
                    style="color:#269186">"</span></span> <span style="color:#93a1a1">title</span>=<span
                style="color:#269186"><span style="color:#269186">"</span>{l s=<span style="color:#269186"><span
                        style="color:#c60000">'</span>contact<span style="color:#c60000">'</span></span> <span
                    style="color:#859900">mod</span>=<span style="color:#269186"><span style="color:#c60000">'</span>blockpermanentlinks<span
                        style="color:#c60000">'</span></span>}<span style="color:#269186">"</span></span><span
                style="color:#93a1a1">></span>{l s=<span style="color:#269186"><span style="color:#c60000">'</span>contact<span
                    style="color:#c60000">'</span></span> <span style="color:#859900">mod</span>=<span
                style="color:#269186"><span style="color:#c60000">'</span>blockpermanentlinks<span
                    style="color:#c60000">'</span></span>}<span style="color:#93a1a1">&lt;/</span><span
                style="color:#268bd2">a</span><span style="color:#93a1a1">></span>
      <span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">li</span><span style="color:#93a1a1">></span>
      <span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">li</span> <span
                style="color:#93a1a1">id</span><span style="color:#708284">=</span><span style="color:#269186"><span
                    style="color:#269186">"</span>header_link_sitemap<span style="color:#269186">"</span></span><span
                style="color:#93a1a1">></span>
        <span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">a</span> {<span
                style="color:#859900">if</span> <span style="color:#268bd2"><span style="color:#859900">$</span>page_name</span> ==<span
                style="color:#269186"><span style="color:#c60000">'</span>sitemap<span
                    style="color:#c60000">'</span></span>}<span style="color:#93a1a1">class</span>=<span
                style="color:#269186"><span style="color:#269186">"</span>active<span
                    style="color:#269186">"</span></span>{/<span style="color:#859900">if</span>} <span
                style="color:#93a1a1">href</span>=<span style="color:#269186"><span style="color:#269186">"</span>{<span
                    style="color:#268bd2"><span style="color:#859900">$</span>link</span>->getPageLink(<span
                    style="color:#269186"><span style="color:#c60000">'</span>sitemap<span
                        style="color:#c60000">'</span></span>)<span style="color:#268bd2">|escape</span>:<span
                    style="color:#269186"><span style="color:#c60000">'</span>html<span
                        style="color:#c60000">'</span></span>}<span style="color:#269186">"</span></span> <span
                style="color:#93a1a1">title</span>=<span style="color:#269186"><span style="color:#269186">"</span>{l s=<span
                    style="color:#269186"><span style="color:#c60000">'</span>sitemap<span
                        style="color:#c60000">'</span></span> <span style="color:#859900">mod</span>=<span
                    style="color:#269186"><span style="color:#c60000">'</span>blockpermanentlinks<span
                        style="color:#c60000">'</span></span>}<span style="color:#269186">"</span></span><span
                style="color:#93a1a1">></span>{l s=<span style="color:#269186"><span style="color:#c60000">'</span>sitemap<span
                    style="color:#c60000">'</span></span> <span style="color:#859900">mod</span>=<span
                style="color:#269186"><span style="color:#c60000">'</span>blockpermanentlinks<span
                    style="color:#c60000">'</span></span>}<span style="color:#93a1a1">&lt;/</span><span
                style="color:#268bd2">a</span><span style="color:#93a1a1">></span>
      <span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">li</span><span style="color:#93a1a1">></span>
    <span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">ul</span><span style="color:#93a1a1">></span>
    <span style="color:#839496;font-style:italic">&lt;!-- /Block permanent links modulo HEADER --></span>
</pre>
    </li>
    <li>
        <span>Ad esempio, le seguenti righe di codice rappresentano l'elemento del menu Sitemap:</span>
        <pre class="codebox" style="color:#586e75"><span
                style="color:#93a1a1">&lt;</span><span style="color:#268bd2">li</span> <span
                style="color:#93a1a1">id</span><span style="color:#708284">=</span><span style="color:#269186"><span
                    style="color:#269186">"</span>header_link_sitemap<span style="color:#269186">"</span></span><span
                style="color:#93a1a1">></span>
    <span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">a</span> <span
                style="color:#93a1a1">href</span>=<span style="color:#269186"><span style="color:#269186">"</span>{<span
                    style="color:#268bd2"><span style="color:#859900">$</span>link</span>->getPageLink(<span
                    style="color:#269186"><span style="color:#c60000">'</span>sitemap<span
                        style="color:#c60000">'</span></span>)<span style="color:#268bd2">|escape</span>:<span
                    style="color:#269186"><span style="color:#c60000">'</span>html<span
                        style="color:#c60000">'</span></span>}<span style="color:#269186">"</span></span> <span
                style="color:#93a1a1">title</span>=<span style="color:#269186"><span style="color:#269186">"</span>{l s=<span
                    style="color:#269186"><span style="color:#c60000">'</span>sitemap<span
                        style="color:#c60000">'</span></span> <span style="color:#859900">mod</span>=<span
                    style="color:#269186"><span style="color:#c60000">'</span>blockpermanentlinks<span
                        style="color:#c60000">'</span></span>}<span style="color:#269186">"</span></span><span
                style="color:#93a1a1">></span>{l s=<span style="color:#269186"><span style="color:#c60000">'</span>sitemap<span
                    style="color:#c60000">'</span></span> <span style="color:#859900">mod</span>=<span
                style="color:#269186"><span style="color:#c60000">'</span>blockpermanentlinks<span
                    style="color:#c60000">'</span></span>}<span style="color:#93a1a1">&lt;/</span><span
                style="color:#268bd2">a</span><span style="color:#93a1a1">></span>
<span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">li</span><span
                style="color:#93a1a1">></span>
</pre>
        <ul class="marked-list">
            <li>
                a href="{$link->getPageLink('sitemap')|escape:'html'}" - <em style="font-style:italic">URL in 
                    pagina</em>
            </li>
            <li>
                {l s='sitemap' mod='blockpermanentlinks'} - <em style="font-style:italic">è il codice per la visualizzazione
                    button nome</em>
            </li>
        </ul>
    </li>
    <li>
        <span>Per aggiungere un collegamento alla pagina Best Sellers (http://yourdomain.com/best-sales.php), dovresti aggiungere la seguente riga di codice al themes/theme_name/modules/blockpermanentlinks/blockpermanentlinks-header.tpl file.</span>
        <pre class="codebox" style="color:#586e75"><span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">li</span> <span style="color:#93a1a1">id</span><span style="color:#708284">=</span><span style="color:#269186"><span style="color:#269186">"</span>header_link<span style="color:#269186">"</span></span><span style="color:#93a1a1">></span>
    <span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">a</span> <span style="color:#93a1a1">href</span>=<span style="color:#269186"><span style="color:#269186">"</span>{<span style="color:#268bd2"><span style="color:#859900">$</span>link</span>->getPageLink(<span style="color:#269186"><span style="color:#c60000">'</span>best-sales.php<span style="color:#c60000">'</span></span>)<span style="color:#268bd2">|escape</span>:<span style="color:#269186"><span style="color:#c60000">'</span>html<span style="color:#c60000">'</span></span>:<span style="color:#269186"><span style="color:#c60000">'</span>UTF-8<span style="color:#c60000">'</span></span>}<span style="color:#269186">"</span></span> <span style="color:#93a1a1">title</span>=<span style="color:#269186"><span style="color:#269186">"</span>{l s=<span style="color:#269186"><span style="color:#c60000">'</span>best-sales<span style="color:#c60000">'</span></span> <span style="color:#859900">mod</span>=<span style="color:#269186"><span style="color:#c60000">'</span>blockpermanentlinks<span style="color:#c60000">'</span></span>}<span style="color:#269186">"</span></span><span style="color:#93a1a1">></span> {l s=<span style="color:#269186"><span style="color:#c60000">'</span>Best sales<span style="color:#c60000">'</span></span> <span style="color:#859900">mod</span>=<span style="color:#269186"><span style="color:#c60000">'</span>blockpermanentlinks<span style="color:#c60000">'</span></span>}<span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">a</span><span style="color:#93a1a1">></span>
<span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">li</span><span style="color:#93a1a1">></span>
</pre>
        <p class="alert alert-info">
            Nota: Se vuoi cambiare il nome del nuovo pulsante o aggiungi le sue traduzioni, puoi farlo
            Localizzazione -> Menu di traduzione del tuo back end.
        </p>
    </li>
    <li>
        <span>Per aggiungere un collegamento a una pagina CMS, è necessario ottenere il collegamento alla pagina prima. Facciamo il link alla pagina About Us.</span><br>
        <span>Devi modificare il file themes/theme_name/modules/blockpermanentlinks/blockpermanentlinks-header.tpl file e aggiungere la seguente riga di codice:</span>
        <pre class="codebox" style="color:#586e75"><span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">li</span><span style="color:#93a1a1">></span>
    <span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">a</span> <span style="color:#93a1a1">href</span>=<span style="color:#269186"><span style="color:#269186">"</span>{<span style="color:#268bd2"><span style="color:#859900">$</span>link</span>->getCMSLink(<span style="color:#269186"><span style="color:#c60000">'</span>4<span style="color:#c60000">'</span></span>, <span style="color:#269186"><span style="color:#c60000">'</span>CMSpage<span style="color:#c60000">'</span></span>)}<span style="color:#269186">"</span></span> <span style="color:#93a1a1">title</span>=<span style="color:#269186"><span style="color:#269186">"</span>{l s=<span style="color:#269186"><span style="color:#c60000">'</span>about-us<span style="color:#c60000">'</span></span> <span style="color:#859900">mod</span>=<span style="color:#269186"><span style="color:#c60000">'</span>blockpermanentlinks<span style="color:#c60000">'</span></span>}<span style="color:#269186">"</span></span><span style="color:#93a1a1">></span>{l s=<span style="color:#269186"><span style="color:#c60000">'</span>About Us<span style="color:#c60000">'</span></span> <span style="color:#859900">mod</span>=<span style="color:#269186"><span style="color:#c60000">'</span>blockpermanentlinks<span style="color:#c60000">'</span></span>}<span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">a</span><span style="color:#93a1a1">></span>
<span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">li</span><span style="color:#93a1a1">></span>
</pre>
        <ul class="marked-list">
            <li>
                $link->getCMSLink('4', 'CMS page') - <em style="font-style:italic">significa che vogliamo caricare il CMS
                    pagina con ID 4</em>. Puoi vedere che nell'URL della pagina.
            </li>
            <li>
                s='About Us' - <em style="font-style:italic">è un titolo di pulsante</em>.
            </li>
        </ul>
    </li>
    <li>
        <span>Per aggiungere un collegamento a Blog, dovresti modificare lo stesso file e aggiungere la seguente riga di codice (allo stesso modo come prima):</span>
        <pre class="codebox" style="color:#586e75">    {<span style="color:#859900">if</span> class_exists(smartblog)}
        <span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">li</span> <span style="color:#93a1a1">id</span><span style="color:#708284">=</span><span style="color:#269186"><span style="color:#269186">"</span>header_link_blog<span style="color:#269186">"</span></span><span style="color:#93a1a1">></span>
            <span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">a</span> {<span style="color:#859900">if</span> <span style="color:#268bd2"><span style="color:#859900">$</span>page_name</span> ==<span style="color:#269186"><span style="color:#c60000">'</span>module-smartblog-category<span style="color:#c60000">'</span></span>}<span style="color:#93a1a1">class</span>=<span style="color:#269186"><span style="color:#269186">"</span>active<span style="color:#269186">"</span></span>{/<span style="color:#859900">if</span>} <span style="color:#93a1a1">href</span>=<span style="color:#269186"><span style="color:#269186">"</span>{<span style="color:#268bd2"><span style="color:#859900">$</span>link</span>->getPageLink(<span style="color:#269186"><span style="color:#c60000">'</span>smartblog<span style="color:#c60000">'</span></span>)<span style="color:#268bd2">|escape</span>:<span style="color:#269186"><span style="color:#c60000">'</span>html<span style="color:#c60000">'</span></span>}<span style="color:#269186">"</span></span> <span style="color:#93a1a1">title</span>=<span style="color:#269186"><span style="color:#269186">"</span>{l s=<span style="color:#269186"><span style="color:#c60000">'</span>blog<span style="color:#c60000">'</span></span> <span style="color:#859900">mod</span>=<span style="color:#269186"><span style="color:#c60000">'</span>blockpermanentlinks<span style="color:#c60000">'</span></span>}<span style="color:#269186">"</span></span><span style="color:#93a1a1">></span>{l s=<span style="color:#269186"><span style="color:#c60000">'</span>blog<span style="color:#c60000">'</span></span> <span style="color:#859900">mod</span>=<span style="color:#269186"><span style="color:#c60000">'</span>blockpermanentlinks<span style="color:#c60000">'</span></span>}<span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">a</span><span style="color:#93a1a1">></span>
        <span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">li</span><span style="color:#93a1a1">></span>
    {/<span style="color:#859900">if</span>}
</pre>
        <p class="alert alert-info">
            Nota: se nel tuo tema non è installato un modulo Smart Blog, il collegamento non verrà visualizzato.
        </p>
    </li>
    <li>
        <span>Per aggiungere un link alla Wishlist, aggiungi questo codice:</span>
        <pre class="codebox" style="color:#586e75">    <span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">li</span> <span style="color:#93a1a1">id</span><span style="color:#708284">=</span><span style="color:#269186"><span style="color:#269186">"</span>header_link_wishlist<span style="color:#269186">"</span></span><span style="color:#93a1a1">></span>
            <span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">a</span> <span style="color:#93a1a1">href</span>=<span style="color:#269186"><span style="color:#269186">"</span>{<span style="color:#268bd2"><span style="color:#859900">$</span>link</span>->getModuleLink(<span style="color:#269186"><span style="color:#c60000">'</span>blockwishlist<span style="color:#c60000">'</span></span>, <span style="color:#269186"><span style="color:#c60000">'</span>mywishlist<span style="color:#c60000">'</span></span>, array(), <span style="color:#b58900">true</span>)<span style="color:#268bd2">|escape</span>:<span style="color:#269186"><span style="color:#c60000">'</span>html<span style="color:#c60000">'</span></span>:<span style="color:#269186"><span style="color:#c60000">'</span>UTF-8<span style="color:#c60000">'</span></span>}<span style="color:#269186">"</span></span> <span style="color:#93a1a1">title</span>=<span style="color:#269186"><span style="color:#269186">"</span>{l s=<span style="color:#269186"><span style="color:#c60000">'</span>My wishlists<span style="color:#c60000">'</span></span> <span style="color:#859900">mod</span>=<span style="color:#269186"><span style="color:#c60000">'</span>blockwishlist<span style="color:#c60000">'</span></span>}<span style="color:#269186">"</span></span><span style="color:#93a1a1">></span><span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">span</span><span style="color:#93a1a1">></span>{l s=<span style="color:#269186"><span style="color:#c60000">'</span>Wishlist<span style="color:#c60000">'</span></span>}<span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">span</span><span style="color:#93a1a1">></span><span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">a</span><span style="color:#93a1a1">></span>
    <span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">li</span><span style="color:#93a1a1">></span>
</pre>
    </li>
    <li>
        <span>Se si desidera nascondere uno di questi collegamenti, è possibile eliminarlo <em><strong>&lt;li&gt; &lt;/li&gt;</strong></em>O semplicemente commentarla nel tuo codice (come nell'esempio qui sotto) per mostrarla indietro quando vuoi.</span>
        <pre class="codebox" style="color:#586e75"><span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">ul</span> <span style="color:#93a1a1">id</span><span style="color:#708284">=</span><span style="color:#269186"><span style="color:#269186">"</span>header_links<span style="color:#269186">"</span></span><span style="color:#93a1a1">></span>
  <span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">li</span> <span style="color:#93a1a1">id</span><span style="color:#708284">=</span><span style="color:#269186"><span style="color:#269186">"</span>header_link_wishlist<span style="color:#269186">"</span></span><span style="color:#93a1a1">></span>
    <span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">a</span> <span style="color:#93a1a1">href</span>=<span style="color:#269186"><span style="color:#269186">"</span>{<span style="color:#268bd2"><span style="color:#859900">$</span>link</span>->getModuleLink(<span style="color:#269186"><span style="color:#c60000">'</span>blockwishlist<span style="color:#c60000">'</span></span>, <span style="color:#269186"><span style="color:#c60000">'</span>mywishlist<span style="color:#c60000">'</span></span>, array(), <span style="color:#b58900">true</span>)<span style="color:#268bd2">|escape</span>:<span style="color:#269186"><span style="color:#c60000">'</span>html<span style="color:#c60000">'</span></span>:<span style="color:#269186"><span style="color:#c60000">'</span>UTF-8<span style="color:#c60000">'</span></span>}<span style="color:#269186">"</span></span> <span style="color:#93a1a1">title</span>=<span style="color:#269186"><span style="color:#269186">"</span>{l s=<span style="color:#269186"><span style="color:#c60000">'</span>My wishlists<span style="color:#c60000">'</span></span> <span style="color:#859900">mod</span>=<span style="color:#269186"><span style="color:#c60000">'</span>blockwishlist<span style="color:#c60000">'</span></span>}<span style="color:#269186">"</span></span><span style="color:#93a1a1">></span>{l s=<span style="color:#269186"><span style="color:#c60000">'</span>Wishlist<span style="color:#c60000">'</span></span>}<span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">a</span><span style="color:#93a1a1">></span>
  <span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">li</span><span style="color:#93a1a1">></span>

  <span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">li</span> <span style="color:#93a1a1">id</span><span style="color:#708284">=</span><span style="color:#269186"><span style="color:#269186">"</span>header_link_contact<span style="color:#269186">"</span></span><span style="color:#93a1a1">></span>
    <span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">a</span> <span style="color:#93a1a1">href</span>=<span style="color:#269186"><span style="color:#269186">"</span>{<span style="color:#268bd2"><span style="color:#859900">$</span>link</span>->getPageLink(<span style="color:#269186"><span style="color:#c60000">'</span>contact<span style="color:#c60000">'</span></span>, <span style="color:#b58900">true</span>)<span style="color:#268bd2">|escape</span>:<span style="color:#269186"><span style="color:#c60000">'</span>html<span style="color:#c60000">'</span></span>}<span style="color:#269186">"</span></span> <span style="color:#93a1a1">title</span>=<span style="color:#269186"><span style="color:#269186">"</span>{l s=<span style="color:#269186"><span style="color:#c60000">'</span>contact<span style="color:#c60000">'</span></span> <span style="color:#859900">mod</span>=<span style="color:#269186"><span style="color:#c60000">'</span>blockpermanentlinks<span style="color:#c60000">'</span></span>}<span style="color:#269186">"</span></span><span style="color:#93a1a1">></span>{l s=<span style="color:#269186"><span style="color:#c60000">'</span>contact<span style="color:#c60000">'</span></span> <span style="color:#859900">mod</span>=<span style="color:#269186"><span style="color:#c60000">'</span>blockpermanentlinks<span style="color:#c60000">'</span></span>}<span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">a</span><span style="color:#93a1a1">></span>
  <span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">li</span><span style="color:#93a1a1">></span>
  <span style="color:#839496;font-style:italic">&lt;!-- &lt;li id="header_link_sitemap">
    &lt;a href="{<span><span>$</span>link</span>->getPageLink(<span><span>'</span>sitemap<span>'</span></span>)<span>|escape</span>:<span><span>'</span>html<span>'</span></span>}" title="{l s=<span><span>'</span>sitemap<span>'</span></span> <span>mod</span>=<span><span>'</span>blockpermanentlinks<span>'</span></span>}">{l s=<span><span>'</span>sitemap<span>'</span></span> <span>mod</span>=<span><span>'</span>blockpermanentlinks<span>'</span></span>}&lt;/a>
  &lt;/li> --></span>
<span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">ul</span><span style="color:#93a1a1">></span>
</pre>
    </li>
    <li>
        <span>Salvare le modifiche e controllare il front-end del tuo sito web per vedere come hai modificato il menu di intestazione.</span>
    </li>
</ul>