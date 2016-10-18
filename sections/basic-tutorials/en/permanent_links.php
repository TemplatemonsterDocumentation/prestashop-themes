<h3>How to add or remove some links in Permanent links block</h3>

<p>The following tutorial is going to show you how to add or hide some links in header in PrestaShop 1.6.x
    templates.</p>

<p>The header links of the PrestaShop template are defined by the Permanent links block module. Usually it looks like on
    the screen below (1).</p>

<figure class="img-polaroid">
    <img src="img/14-permalinks-1.png" alt=""/>
</figure>

<p>If you want to add an element to it or remove it, you should edit the
    'themes/theme_name/modules/blockpermanentlinks/blockpermanentlinks-header.tpl' file located in your PrestaShop
    installation on your hosting server.</p>

<ul class="index-list">
    <li>
        <span>Open the file using any code editor. The menu is created as an unordered list. Each menu element is wrapped into <em><strong>&lt;li&gt; &lt;/li&gt;</strong></em> tags. The code will look like this:</span>

        <pre class="prettyprint prettyprinted" style="background:#fdf6e3;color:#586e75">    <span
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
        <span>For example, the following lines of code represent the Sitemap menu element:</span>

        <pre class="prettyprint prettyprinted" style="background:#fdf6e3;color:#586e75"><span
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
                a href="{$link->getPageLink('sitemap')|escape:'html'}" - <em style="font-style:italic">is the URL to the
                    page</em>
            </li>
            <li>
                {l s='sitemap' mod='blockpermanentlinks'} - <em style="font-style:italic">is the code for displaying the
                    button name</em>
            </li>
        </ul>

    </li>

    <li>
        <span>To add a link to the Best Sellers page (http://yourdomain.com/best-sales.php), you should add the following line of code to the themes/theme_name/modules/blockpermanentlinks/blockpermanentlinks-header.tpl file.</span>

        <pre class="prettyprint prettyprinted" style="background:#fdf6e3;color:#586e75"><span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">li</span> <span style="color:#93a1a1">id</span><span style="color:#708284">=</span><span style="color:#269186"><span style="color:#269186">"</span>header_link<span style="color:#269186">"</span></span><span style="color:#93a1a1">></span>
    <span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">a</span> <span style="color:#93a1a1">href</span>=<span style="color:#269186"><span style="color:#269186">"</span>{<span style="color:#268bd2"><span style="color:#859900">$</span>link</span>->getPageLink(<span style="color:#269186"><span style="color:#c60000">'</span>best-sales.php<span style="color:#c60000">'</span></span>)<span style="color:#268bd2">|escape</span>:<span style="color:#269186"><span style="color:#c60000">'</span>html<span style="color:#c60000">'</span></span>:<span style="color:#269186"><span style="color:#c60000">'</span>UTF-8<span style="color:#c60000">'</span></span>}<span style="color:#269186">"</span></span> <span style="color:#93a1a1">title</span>=<span style="color:#269186"><span style="color:#269186">"</span>{l s=<span style="color:#269186"><span style="color:#c60000">'</span>best-sales<span style="color:#c60000">'</span></span> <span style="color:#859900">mod</span>=<span style="color:#269186"><span style="color:#c60000">'</span>blockpermanentlinks<span style="color:#c60000">'</span></span>}<span style="color:#269186">"</span></span><span style="color:#93a1a1">></span> {l s=<span style="color:#269186"><span style="color:#c60000">'</span>Best sales<span style="color:#c60000">'</span></span> <span style="color:#859900">mod</span>=<span style="color:#269186"><span style="color:#c60000">'</span>blockpermanentlinks<span style="color:#c60000">'</span></span>}<span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">a</span><span style="color:#93a1a1">></span>
<span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">li</span><span style="color:#93a1a1">></span>
</pre>

        <p class="alert alert-info">
            Note: If you want to change the name of the new button or add its translations, you can do it in
            Localization -> Translations menu of your back end.
        </p>
    </li>

    <li>
        <span>To add a link to some CMS page, you should get the link to the page first. Let's add the link to About Us page.</span><br>
        <span>You should edit the themes/theme_name/modules/blockpermanentlinks/blockpermanentlinks-header.tpl file and add the following line of code:</span>

        <pre class="prettyprint prettyprinted" style="background:#fdf6e3;color:#586e75"><span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">li</span><span style="color:#93a1a1">></span>
    <span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">a</span> <span style="color:#93a1a1">href</span>=<span style="color:#269186"><span style="color:#269186">"</span>{<span style="color:#268bd2"><span style="color:#859900">$</span>link</span>->getCMSLink(<span style="color:#269186"><span style="color:#c60000">'</span>4<span style="color:#c60000">'</span></span>, <span style="color:#269186"><span style="color:#c60000">'</span>CMSpage<span style="color:#c60000">'</span></span>)}<span style="color:#269186">"</span></span> <span style="color:#93a1a1">title</span>=<span style="color:#269186"><span style="color:#269186">"</span>{l s=<span style="color:#269186"><span style="color:#c60000">'</span>about-us<span style="color:#c60000">'</span></span> <span style="color:#859900">mod</span>=<span style="color:#269186"><span style="color:#c60000">'</span>blockpermanentlinks<span style="color:#c60000">'</span></span>}<span style="color:#269186">"</span></span><span style="color:#93a1a1">></span>{l s=<span style="color:#269186"><span style="color:#c60000">'</span>About Us<span style="color:#c60000">'</span></span> <span style="color:#859900">mod</span>=<span style="color:#269186"><span style="color:#c60000">'</span>blockpermanentlinks<span style="color:#c60000">'</span></span>}<span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">a</span><span style="color:#93a1a1">></span>
<span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">li</span><span style="color:#93a1a1">></span>
</pre>

        <ul class="marked-list">
            <li>
                $link->getCMSLink('4', 'CMS page') - <em style="font-style:italic">means that we want to load the CMS
                    page with ID 4</em>. You can see that in the page URL.
            </li>
            <li>
                s='About Us' - <em style="font-style:italic">is a button title</em>.
            </li>
        </ul>

    </li>

    <li>
        <span>To add a link to Blog, you should edit the same file and add the following line of code (the same way as before):</span>

        <pre class="prettyprint prettyprinted" style="background:#fdf6e3;color:#586e75">    {<span style="color:#859900">if</span> class_exists(smartblog)}
        <span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">li</span> <span style="color:#93a1a1">id</span><span style="color:#708284">=</span><span style="color:#269186"><span style="color:#269186">"</span>header_link_blog<span style="color:#269186">"</span></span><span style="color:#93a1a1">></span>
            <span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">a</span> {<span style="color:#859900">if</span> <span style="color:#268bd2"><span style="color:#859900">$</span>page_name</span> ==<span style="color:#269186"><span style="color:#c60000">'</span>module-smartblog-category<span style="color:#c60000">'</span></span>}<span style="color:#93a1a1">class</span>=<span style="color:#269186"><span style="color:#269186">"</span>active<span style="color:#269186">"</span></span>{/<span style="color:#859900">if</span>} <span style="color:#93a1a1">href</span>=<span style="color:#269186"><span style="color:#269186">"</span>{<span style="color:#268bd2"><span style="color:#859900">$</span>link</span>->getPageLink(<span style="color:#269186"><span style="color:#c60000">'</span>smartblog<span style="color:#c60000">'</span></span>)<span style="color:#268bd2">|escape</span>:<span style="color:#269186"><span style="color:#c60000">'</span>html<span style="color:#c60000">'</span></span>}<span style="color:#269186">"</span></span> <span style="color:#93a1a1">title</span>=<span style="color:#269186"><span style="color:#269186">"</span>{l s=<span style="color:#269186"><span style="color:#c60000">'</span>blog<span style="color:#c60000">'</span></span> <span style="color:#859900">mod</span>=<span style="color:#269186"><span style="color:#c60000">'</span>blockpermanentlinks<span style="color:#c60000">'</span></span>}<span style="color:#269186">"</span></span><span style="color:#93a1a1">></span>{l s=<span style="color:#269186"><span style="color:#c60000">'</span>blog<span style="color:#c60000">'</span></span> <span style="color:#859900">mod</span>=<span style="color:#269186"><span style="color:#c60000">'</span>blockpermanentlinks<span style="color:#c60000">'</span></span>}<span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">a</span><span style="color:#93a1a1">></span>
        <span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">li</span><span style="color:#93a1a1">></span>
    {/<span style="color:#859900">if</span>}
</pre>

        <p class="alert alert-info">
            Note: If you do not have a Smart Blog module installed in your theme, the link will not appear.
        </p>

    </li>

    <li>
        <span>To add a link to Wishlist, add this code:</span>

        <pre class="prettyprint prettyprinted" style="background:#fdf6e3;color:#586e75">    <span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">li</span> <span style="color:#93a1a1">id</span><span style="color:#708284">=</span><span style="color:#269186"><span style="color:#269186">"</span>header_link_wishlist<span style="color:#269186">"</span></span><span style="color:#93a1a1">></span>
            <span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">a</span> <span style="color:#93a1a1">href</span>=<span style="color:#269186"><span style="color:#269186">"</span>{<span style="color:#268bd2"><span style="color:#859900">$</span>link</span>->getModuleLink(<span style="color:#269186"><span style="color:#c60000">'</span>blockwishlist<span style="color:#c60000">'</span></span>, <span style="color:#269186"><span style="color:#c60000">'</span>mywishlist<span style="color:#c60000">'</span></span>, array(), <span style="color:#b58900">true</span>)<span style="color:#268bd2">|escape</span>:<span style="color:#269186"><span style="color:#c60000">'</span>html<span style="color:#c60000">'</span></span>:<span style="color:#269186"><span style="color:#c60000">'</span>UTF-8<span style="color:#c60000">'</span></span>}<span style="color:#269186">"</span></span> <span style="color:#93a1a1">title</span>=<span style="color:#269186"><span style="color:#269186">"</span>{l s=<span style="color:#269186"><span style="color:#c60000">'</span>My wishlists<span style="color:#c60000">'</span></span> <span style="color:#859900">mod</span>=<span style="color:#269186"><span style="color:#c60000">'</span>blockwishlist<span style="color:#c60000">'</span></span>}<span style="color:#269186">"</span></span><span style="color:#93a1a1">></span><span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">span</span><span style="color:#93a1a1">></span>{l s=<span style="color:#269186"><span style="color:#c60000">'</span>Wishlist<span style="color:#c60000">'</span></span>}<span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">span</span><span style="color:#93a1a1">></span><span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">a</span><span style="color:#93a1a1">></span>
    <span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">li</span><span style="color:#93a1a1">></span>
</pre>

    </li>

    <li>
        <span>If you want to hide any of these links, you can delete the <em><strong>&lt;li&gt; &lt;/li&gt;</strong></em> item or simply comment it in your code (like in the example below) in order to show it back when you need to.</span>

        <pre class="prettyprint prettyprinted" style="background:#fdf6e3;color:#586e75"><span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">ul</span> <span style="color:#93a1a1">id</span><span style="color:#708284">=</span><span style="color:#269186"><span style="color:#269186">"</span>header_links<span style="color:#269186">"</span></span><span style="color:#93a1a1">></span>
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
        <span>Save the changes and check your website front end to see how you modified the header menu.</span>
    </li>

</ul>