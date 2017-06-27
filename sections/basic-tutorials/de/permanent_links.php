<h3>Wie man einige Links zum Block Permalinks hinzufügt oder löscht</h3>
<p>Das jeweilige Tutorial zeigt, wie man einige Links zum Header der PrestaShop 1.6.x Vorage hinzufügt oder löscht.</p>
<p>Die Links im Header der PrestaShop Vorlage wurden im Modul Permanent links block festgelegt. Normalerweise sieht es wie auf dem Bildschirm unten (1) aus.</p>
<figure class="img-polaroid">
    <img src="img/14-permalinks-1.png" alt=""/>
</figure>
<p>Wenn Sie ein Element hinzufügen oder löschen möchten, sollen Sie die Änderungen an der Datei 'themes/theme_name/modules/blockpermanentlinks/blockpermanentlinks-header.tpl' vornehmen, die sich in den Dateien Ihrer PrestaShop Website auf dem Server befindet.</p>
<ul class="index-list">
    <li>
        <span>Öffnen Sie die Datei, indem Sie jeden Code-Editor nutzen. Das Menü wurde als eine ungeordnete Liste erstellt. Jedes Menü-Element ist mit Tags <em><strong>&lt;li&gt; &lt;/li&gt;</strong></em>markiert. Der Code wird wie folgt aussehen:</span>
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
        <span>Zum Beispiel, diese Code-Zeilen sind für das Menü-Element «Sitemap» verantwortlich:</span>
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
                a href="{$link->getPageLink('sitemap')|escape:'html'}" - <em style="font-style:italic">это ссылка на страницу</em>
            </li>
            <li>
                {l s='sitemap' mod='blockpermanentlinks'} - <em style="font-style:italic">ist der Code zur Darstellung des Namens des Buttons</em>
            </li>
        </ul>
    </li>
    <li>
        <span>Um einen Link zur Seite «Meistverkauft» (http://yourdomain.com/best-sales.php), hinzuzufügen, fügen Sie die folgende Code-Zeile zur Datei themes/theme_name/modules/blockpermanentlinks/blockpermanentlinks-header.tpl hinzu.</span>
        <pre class="codebox" style="color:#586e75"><span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">li</span> <span style="color:#93a1a1">id</span><span style="color:#708284">=</span><span style="color:#269186"><span style="color:#269186">"</span>header_link<span style="color:#269186">"</span></span><span style="color:#93a1a1">></span>
    <span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">a</span> <span style="color:#93a1a1">href</span>=<span style="color:#269186"><span style="color:#269186">"</span>{<span style="color:#268bd2"><span style="color:#859900">$</span>link</span>->getPageLink(<span style="color:#269186"><span style="color:#c60000">'</span>best-sales.php<span style="color:#c60000">'</span></span>)<span style="color:#268bd2">|escape</span>:<span style="color:#269186"><span style="color:#c60000">'</span>html<span style="color:#c60000">'</span></span>:<span style="color:#269186"><span style="color:#c60000">'</span>UTF-8<span style="color:#c60000">'</span></span>}<span style="color:#269186">"</span></span> <span style="color:#93a1a1">title</span>=<span style="color:#269186"><span style="color:#269186">"</span>{l s=<span style="color:#269186"><span style="color:#c60000">'</span>best-sales<span style="color:#c60000">'</span></span> <span style="color:#859900">mod</span>=<span style="color:#269186"><span style="color:#c60000">'</span>blockpermanentlinks<span style="color:#c60000">'</span></span>}<span style="color:#269186">"</span></span><span style="color:#93a1a1">></span> {l s=<span style="color:#269186"><span style="color:#c60000">'</span>Best sales<span style="color:#c60000">'</span></span> <span style="color:#859900">mod</span>=<span style="color:#269186"><span style="color:#c60000">'</span>blockpermanentlinks<span style="color:#c60000">'</span></span>}<span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">a</span><span style="color:#93a1a1">></span>
<span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">li</span><span style="color:#93a1a1">></span>
</pre>
        <p class="alert alert-info">
            Achtung: Wenn Sie den Namen des neuen Buttons ändern oder seine Übersetzung hinzufügen möchten, können Sie dies in dem Menüpunkt Lokalisierung -> Übersetzungen des Control Panels tun.
        </p>
    </li>
    <li>
        <span>Um einen Link zu einer CMS Seite hinzuzufügen, brauchen Sie vor allem den Link zur Seite. Lassen Sie uns den Link zur Seite «Über uns» hinzufügen.</span><br>
        <span>Sie sollen die Änderungen an der Datei themes/theme_name/modules/blockpermanentlinks/blockpermanentlinks-header.tpl vornehmen, indem Sie die folgende Code-Zeile hinzufügen:</span>
        <pre class="codebox" style="color:#586e75"><span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">li</span><span style="color:#93a1a1">></span>
    <span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">a</span> <span style="color:#93a1a1">href</span>=<span style="color:#269186"><span style="color:#269186">"</span>{<span style="color:#268bd2"><span style="color:#859900">$</span>link</span>->getCMSLink(<span style="color:#269186"><span style="color:#c60000">'</span>4<span style="color:#c60000">'</span></span>, <span style="color:#269186"><span style="color:#c60000">'</span>CMSpage<span style="color:#c60000">'</span></span>)}<span style="color:#269186">"</span></span> <span style="color:#93a1a1">title</span>=<span style="color:#269186"><span style="color:#269186">"</span>{l s=<span style="color:#269186"><span style="color:#c60000">'</span>about-us<span style="color:#c60000">'</span></span> <span style="color:#859900">mod</span>=<span style="color:#269186"><span style="color:#c60000">'</span>blockpermanentlinks<span style="color:#c60000">'</span></span>}<span style="color:#269186">"</span></span><span style="color:#93a1a1">></span>{l s=<span style="color:#269186"><span style="color:#c60000">'</span>About Us<span style="color:#c60000">'</span></span> <span style="color:#859900">mod</span>=<span style="color:#269186"><span style="color:#c60000">'</span>blockpermanentlinks<span style="color:#c60000">'</span></span>}<span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">a</span><span style="color:#93a1a1">></span>
<span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">li</span><span style="color:#93a1a1">></span>
</pre>
        <ul class="marked-list">
            <li>
                $link->getCMSLink('4', 'CMS page') - <em style="font-style:italic"> bedeutet, dass Sie die Seite mit der Identifizierungsnummer 4</em> hochladen möchten. Sie können diese Nummer in dem Link zur Seite sehen.
            </li>
            <li>
                s='About Us' - <em style="font-style:italic">ist der Name des Buttons</em>.
            </li>
        </ul>
    </li>
    <li>
        <span>Um einen Link zum Blog hinzuzufügen, sollen Sie die Änderungen an derselben Datei vornehmen und die folgende Code-Zeile (wie vorher) hinzufügen:</span>
        <pre class="codebox" style="color:#586e75">    {<span style="color:#859900">if</span> class_exists(smartblog)}
        <span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">li</span> <span style="color:#93a1a1">id</span><span style="color:#708284">=</span><span style="color:#269186"><span style="color:#269186">"</span>header_link_blog<span style="color:#269186">"</span></span><span style="color:#93a1a1">></span>
            <span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">a</span> {<span style="color:#859900">if</span> <span style="color:#268bd2"><span style="color:#859900">$</span>page_name</span> ==<span style="color:#269186"><span style="color:#c60000">'</span>module-smartblog-category<span style="color:#c60000">'</span></span>}<span style="color:#93a1a1">class</span>=<span style="color:#269186"><span style="color:#269186">"</span>active<span style="color:#269186">"</span></span>{/<span style="color:#859900">if</span>} <span style="color:#93a1a1">href</span>=<span style="color:#269186"><span style="color:#269186">"</span>{<span style="color:#268bd2"><span style="color:#859900">$</span>link</span>->getPageLink(<span style="color:#269186"><span style="color:#c60000">'</span>smartblog<span style="color:#c60000">'</span></span>)<span style="color:#268bd2">|escape</span>:<span style="color:#269186"><span style="color:#c60000">'</span>html<span style="color:#c60000">'</span></span>}<span style="color:#269186">"</span></span> <span style="color:#93a1a1">title</span>=<span style="color:#269186"><span style="color:#269186">"</span>{l s=<span style="color:#269186"><span style="color:#c60000">'</span>blog<span style="color:#c60000">'</span></span> <span style="color:#859900">mod</span>=<span style="color:#269186"><span style="color:#c60000">'</span>blockpermanentlinks<span style="color:#c60000">'</span></span>}<span style="color:#269186">"</span></span><span style="color:#93a1a1">></span>{l s=<span style="color:#269186"><span style="color:#c60000">'</span>blog<span style="color:#c60000">'</span></span> <span style="color:#859900">mod</span>=<span style="color:#269186"><span style="color:#c60000">'</span>blockpermanentlinks<span style="color:#c60000">'</span></span>}<span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">a</span><span style="color:#93a1a1">></span>
        <span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">li</span><span style="color:#93a1a1">></span>
    {/<span style="color:#859900">if</span>}
</pre>
        <p class="alert alert-info">
           Achtung: Wenn das Modul Smart Blog in Ihrer Vorlage nicht installiert wurde, wird der Link nicht dargestellt.
        </p>
    </li>
    <li>
        <span>Um einen Link zu «Wunschliste» hinzuzufügen, fügen Sie den folgenden Code hinzu:</span>
        <pre class="codebox" style="color:#586e75">    <span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">li</span> <span style="color:#93a1a1">id</span><span style="color:#708284">=</span><span style="color:#269186"><span style="color:#269186">"</span>header_link_wishlist<span style="color:#269186">"</span></span><span style="color:#93a1a1">></span>
            <span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">a</span> <span style="color:#93a1a1">href</span>=<span style="color:#269186"><span style="color:#269186">"</span>{<span style="color:#268bd2"><span style="color:#859900">$</span>link</span>->getModuleLink(<span style="color:#269186"><span style="color:#c60000">'</span>blockwishlist<span style="color:#c60000">'</span></span>, <span style="color:#269186"><span style="color:#c60000">'</span>mywishlist<span style="color:#c60000">'</span></span>, array(), <span style="color:#b58900">true</span>)<span style="color:#268bd2">|escape</span>:<span style="color:#269186"><span style="color:#c60000">'</span>html<span style="color:#c60000">'</span></span>:<span style="color:#269186"><span style="color:#c60000">'</span>UTF-8<span style="color:#c60000">'</span></span>}<span style="color:#269186">"</span></span> <span style="color:#93a1a1">title</span>=<span style="color:#269186"><span style="color:#269186">"</span>{l s=<span style="color:#269186"><span style="color:#c60000">'</span>My wishlists<span style="color:#c60000">'</span></span> <span style="color:#859900">mod</span>=<span style="color:#269186"><span style="color:#c60000">'</span>blockwishlist<span style="color:#c60000">'</span></span>}<span style="color:#269186">"</span></span><span style="color:#93a1a1">></span><span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">span</span><span style="color:#93a1a1">></span>{l s=<span style="color:#269186"><span style="color:#c60000">'</span>Wishlist<span style="color:#c60000">'</span></span>}<span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">span</span><span style="color:#93a1a1">></span><span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">a</span><span style="color:#93a1a1">></span>
    <span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">li</span><span style="color:#93a1a1">></span>
</pre>
    </li>
    <li>
        <span>Wenn Sie einen Link löschen möchten, können Sie das Element <em><strong>&lt;li&gt; &lt;/li&gt;</strong></em> löschen oder es durch Kommentieren in Ihrem Code (wie in dem Beispiel unten) (wenn es nötig wird, diesen Link wieder zu aktivieren) deaktivieren.</span>
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
        <span>Speichern Sie die Änderungen und aktualisieren Sie Ihre Website, um die vorgenommenen Änderungen im Header auf Ihrer Website zu sehen.</span>
    </li>
</ul>
