<h3>Comment ajouter ou supprimer certains liens dans le bloc de Liens permanents</h3>
<p>Le tutoriel ci-dessous vous montre comment ajouter ou masquer certains liens dans l'en-tête des modèles PrestaShop 1.6.x.</p>
<p>Les liens d'en-tête du modèle PrestaShop sont définis par le module 'Bloc de Liens Permanents'. Habituellement, il ressemble à l'écran ci-dessous (1).</p>
<figure class="img-polaroid">
    <img src="img/14-permalinks-1.png" alt=""/>
</figure>
<p>Si vous souhaitez ajouter un élément ou le supprimer, vous devez modifier le fichier 'themes/theme_name/modules/blockpermanentlinks/blockpermanentlinks-header.tpl' situé dans le dossier d'installation PrestaShop sur votre serveur d'hébergement.</p>
<ul class="index-list">
    <li>
        <span>Ouvrez le fichier à l'aide de l'éditeur de code (par exemple, Notepad ++). Le menu est créé comme une liste non-ordonnée.
		Chaque élément de menu est enveloppé dans des balises <em><strong>&lt;li&gt; &lt;/li&gt;</strong></em>. 
		Le code ressemblera à ceci:</span>
        <pre class="codebox" style="color:#586e75">    <span
                style="color:#839496;font-style:italic">&lt;!-- Block permanent links module HEADER --></span>
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
    <span style="color:#839496;font-style:italic">&lt;!-- /Block permanent links module HEADER --></span>
</pre>
    </li>
    <li>
        <span>Par exemple, les lignes de code suivant représentent l'élément de menu Sitemap:</span>
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
                a href="{$link->getPageLink('sitemap')|escape:'html'}" - <em style="font-style:italic"> est l'URL de la page</em>
            </li>
            <li>
                {l s='sitemap' mod='blockpermanentlinks'} - <em style="font-style:italic"> est le code pour afficher le nom du bouton</em>
            </li>
        </ul>
    </li>
    <li>
        <span>Pour ajouter un lien vers la page Meilleures Ventes (http://yourdomain.com/best-sales.php), il faut coller la ligne de code suivante au fichier themes/theme_name/modules/blockpermanentlinks/blockpermanentlinks-header.tpl.</span>
        <pre class="codebox" style="color:#586e75"><span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">li</span> <span style="color:#93a1a1">id</span><span style="color:#708284">=</span><span style="color:#269186"><span style="color:#269186">"</span>header_link<span style="color:#269186">"</span></span><span style="color:#93a1a1">></span>
    <span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">a</span> <span style="color:#93a1a1">href</span>=<span style="color:#269186"><span style="color:#269186">"</span>{<span style="color:#268bd2"><span style="color:#859900">$</span>link</span>->getPageLink(<span style="color:#269186"><span style="color:#c60000">'</span>best-sales.php<span style="color:#c60000">'</span></span>)<span style="color:#268bd2">|escape</span>:<span style="color:#269186"><span style="color:#c60000">'</span>html<span style="color:#c60000">'</span></span>:<span style="color:#269186"><span style="color:#c60000">'</span>UTF-8<span style="color:#c60000">'</span></span>}<span style="color:#269186">"</span></span> <span style="color:#93a1a1">title</span>=<span style="color:#269186"><span style="color:#269186">"</span>{l s=<span style="color:#269186"><span style="color:#c60000">'</span>best-sales<span style="color:#c60000">'</span></span> <span style="color:#859900">mod</span>=<span style="color:#269186"><span style="color:#c60000">'</span>blockpermanentlinks<span style="color:#c60000">'</span></span>}<span style="color:#269186">"</span></span><span style="color:#93a1a1">></span> {l s=<span style="color:#269186"><span style="color:#c60000">'</span>Best sales<span style="color:#c60000">'</span></span> <span style="color:#859900">mod</span>=<span style="color:#269186"><span style="color:#c60000">'</span>blockpermanentlinks<span style="color:#c60000">'</span></span>}<span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">a</span><span style="color:#93a1a1">></span>
<span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">li</span><span style="color:#93a1a1">></span>
</pre>
        <p class="alert alert-info">
           Remarque: si vous souhaitez modifier le nom du nouveau bouton ou ajouter ses traductions, vous pouvez le faire dans le menu Localisation -> Traduction de votre administration PrestaShop.
        </p>
    </li>
    <li>
        <span>Pour ajouter un lien vers une page CMS, vous devriez tout d'abord avoir le lien vers la page. Ajoutons le lien vers la page À Propos.</span><br>
        <span>Vous devez modifier le fichier themes/theme_name/modules/blockpermanentlinks/blockpermanentlinks-header.tpl et coller le code suivant:</span>
        <pre class="codebox" style="color:#586e75"><span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">li</span><span style="color:#93a1a1">></span>
    <span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">a</span> <span style="color:#93a1a1">href</span>=<span style="color:#269186"><span style="color:#269186">"</span>{<span style="color:#268bd2"><span style="color:#859900">$</span>link</span>->getCMSLink(<span style="color:#269186"><span style="color:#c60000">'</span>4<span style="color:#c60000">'</span></span>, <span style="color:#269186"><span style="color:#c60000">'</span>CMSpage<span style="color:#c60000">'</span></span>)}<span style="color:#269186">"</span></span> <span style="color:#93a1a1">title</span>=<span style="color:#269186"><span style="color:#269186">"</span>{l s=<span style="color:#269186"><span style="color:#c60000">'</span>about-us<span style="color:#c60000">'</span></span> <span style="color:#859900">mod</span>=<span style="color:#269186"><span style="color:#c60000">'</span>blockpermanentlinks<span style="color:#c60000">'</span></span>}<span style="color:#269186">"</span></span><span style="color:#93a1a1">></span>{l s=<span style="color:#269186"><span style="color:#c60000">'</span>About Us<span style="color:#c60000">'</span></span> <span style="color:#859900">mod</span>=<span style="color:#269186"><span style="color:#c60000">'</span>blockpermanentlinks<span style="color:#c60000">'</span></span>}<span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">a</span><span style="color:#93a1a1">></span>
<span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">li</span><span style="color:#93a1a1">></span>
</pre>
        <ul class="marked-list">
            <li>
                $link->getCMSLink('4', 'CMS page') - <em style="font-style:italic"> cela signifie que nous voulons charger la page CMS avec ID 4</em>. 
				Vous pouvez le voir dans l'URL de la page.
            </li>
            <li>
                s='About Us' - <em style="font-style:italic"> est un titre de bouton</em>.
            </li>
        </ul>
    </li>
    <li>
        <span>Pour ajouter un lien vers Blog, vous devez modifier le même fichier et ajouter le code suivant (de la même manière): </span>
        <pre class="codebox" style="color:#586e75">    {<span style="color:#859900">if</span> class_exists(smartblog)}
        <span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">li</span> <span style="color:#93a1a1">id</span><span style="color:#708284">=</span><span style="color:#269186"><span style="color:#269186">"</span>header_link_blog<span style="color:#269186">"</span></span><span style="color:#93a1a1">></span>
            <span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">a</span> {<span style="color:#859900">if</span> <span style="color:#268bd2"><span style="color:#859900">$</span>page_name</span> ==<span style="color:#269186"><span style="color:#c60000">'</span>module-smartblog-category<span style="color:#c60000">'</span></span>}<span style="color:#93a1a1">class</span>=<span style="color:#269186"><span style="color:#269186">"</span>active<span style="color:#269186">"</span></span>{/<span style="color:#859900">if</span>} <span style="color:#93a1a1">href</span>=<span style="color:#269186"><span style="color:#269186">"</span>{<span style="color:#268bd2"><span style="color:#859900">$</span>link</span>->getPageLink(<span style="color:#269186"><span style="color:#c60000">'</span>smartblog<span style="color:#c60000">'</span></span>)<span style="color:#268bd2">|escape</span>:<span style="color:#269186"><span style="color:#c60000">'</span>html<span style="color:#c60000">'</span></span>}<span style="color:#269186">"</span></span> <span style="color:#93a1a1">title</span>=<span style="color:#269186"><span style="color:#269186">"</span>{l s=<span style="color:#269186"><span style="color:#c60000">'</span>blog<span style="color:#c60000">'</span></span> <span style="color:#859900">mod</span>=<span style="color:#269186"><span style="color:#c60000">'</span>blockpermanentlinks<span style="color:#c60000">'</span></span>}<span style="color:#269186">"</span></span><span style="color:#93a1a1">></span>{l s=<span style="color:#269186"><span style="color:#c60000">'</span>blog<span style="color:#c60000">'</span></span> <span style="color:#859900">mod</span>=<span style="color:#269186"><span style="color:#c60000">'</span>blockpermanentlinks<span style="color:#c60000">'</span></span>}<span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">a</span><span style="color:#93a1a1">></span>
        <span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">li</span><span style="color:#93a1a1">></span>
    {/<span style="color:#859900">if</span>}
</pre>
        <p class="alert alert-info">
           Remarque: Si vous n'avez pas de module Smart Blog installé, le lien n'apparaîtra pas.
        </p>
    </li>
    <li>
        <span>Pour ajouter un lien à la page de Favoris, ajoutez ce code:</span>
        <pre class="codebox" style="color:#586e75">    <span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">li</span> <span style="color:#93a1a1">id</span><span style="color:#708284">=</span><span style="color:#269186"><span style="color:#269186">"</span>header_link_wishlist<span style="color:#269186">"</span></span><span style="color:#93a1a1">></span>
            <span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">a</span> <span style="color:#93a1a1">href</span>=<span style="color:#269186"><span style="color:#269186">"</span>{<span style="color:#268bd2"><span style="color:#859900">$</span>link</span>->getModuleLink(<span style="color:#269186"><span style="color:#c60000">'</span>blockwishlist<span style="color:#c60000">'</span></span>, <span style="color:#269186"><span style="color:#c60000">'</span>mywishlist<span style="color:#c60000">'</span></span>, array(), <span style="color:#b58900">true</span>)<span style="color:#268bd2">|escape</span>:<span style="color:#269186"><span style="color:#c60000">'</span>html<span style="color:#c60000">'</span></span>:<span style="color:#269186"><span style="color:#c60000">'</span>UTF-8<span style="color:#c60000">'</span></span>}<span style="color:#269186">"</span></span> <span style="color:#93a1a1">title</span>=<span style="color:#269186"><span style="color:#269186">"</span>{l s=<span style="color:#269186"><span style="color:#c60000">'</span>My wishlists<span style="color:#c60000">'</span></span> <span style="color:#859900">mod</span>=<span style="color:#269186"><span style="color:#c60000">'</span>blockwishlist<span style="color:#c60000">'</span></span>}<span style="color:#269186">"</span></span><span style="color:#93a1a1">></span><span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">span</span><span style="color:#93a1a1">></span>{l s=<span style="color:#269186"><span style="color:#c60000">'</span>Wishlist<span style="color:#c60000">'</span></span>}<span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">span</span><span style="color:#93a1a1">></span><span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">a</span><span style="color:#93a1a1">></span>
    <span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">li</span><span style="color:#93a1a1">></span>
</pre>
    </li>
    <li>
        <span>Si vous souhaitez cacher aucun de ces liens, vous pouvez supprimer l'élément <em><strong>&lt;li&gt; &lt;/li&gt;</strong></em> ou simplement le commenter dans votre code (comme dans l'exemple ci-dessous) afin de le re-montrer quand il y a un besoin.</span>
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
        <span>Enregistrez les modifications et vérifiez l'interface de site Web pour voir comment vous avez modifié le menu d'en-tête.</span>
    </li>
</ul>