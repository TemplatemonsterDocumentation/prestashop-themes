<h3>How to add or remove some links in Permanent links block</h3>

<p>The following tutorial is going to show you how to add or hide some links in header in PrestaShop 1.6.x templates.</p>

<p>The header links of the PrestaShop template are defined by the Permanent links block module. Usually it looks like on the screen below (1).</p>

<figure class="img-polaroid">
    <img src="img/14-permalinks-1.png" alt=""/>
</figure>

<p>If you want to add an element to it or remove it, you should edit the 'themes/theme_name/modules/blockpermanentlinks/blockpermanentlinks-header.tpl' file located in your PrestaShop installation on your hosting server.</p>

<ul class="index-list">
	<li>
		<span>Open the file using any code editor. The menu is created as an unordered list. Each menu element is wrapped into <em><strong>&lt;li&gt; &lt;/li&gt;</strong></em> tags. The code will look like this:</span>

	<pre class="prettyprint prettyprinted" style="background:#f0f0f0;color:#000">
	<span style="color:#06f;font-style:italic">&lt;!-- Block permanent links module HEADER --></span>
	<span style="color:#1c02ff">&lt;<span style="font-weight:700">ul</span> <span style="font-style:italic">id</span>=<span style="color:#036a07">"header_links"</span>></span>
	  <span style="color:#1c02ff">&lt;<span style="font-weight:700">li</span> <span style="font-style:italic">id</span>=<span style="color:#036a07">"header_link_contact"</span>></span>
	    <span style="color:#1c02ff">&lt;<span style="font-weight:700">a</span> {<span style="color:#00f;font-weight:700">if</span> <span style="color:#318495">$page_name</span> ==<span style="color:#036a07">'contact'</span>}<span style="font-style:italic">class</span>=<span style="color:#036a07">"active"</span>{/<span style="color:#00f;font-weight:700">if</span>} <span style="font-style:italic">href</span>=<span style="color:#036a07">"<span style="color:#26b31a">{<span style="color:#318495">$link</span>->getPageLink(<span style="color:#036a07">'contact'</span>, <span style="color:#585cf6;font-weight:700">true</span>)<span style="color:#3c4c72;font-weight:700">|escape</span>:<span style="color:#036a07">'html'</span>}</span>"</span> <span style="font-style:italic">title</span>=<span style="color:#036a07">"<span style="color:#26b31a">{l s=<span style="color:#036a07">'contact'</span> <span style="color:#00f;font-weight:700">mod</span>=<span style="color:#036a07">'blockpermanentlinks'</span>}</span>"</span>></span>{l s=<span style="color:#036a07">'contact'</span> <span style="color:#00f;font-weight:700">mod</span>=<span style="color:#036a07">'blockpermanentlinks'</span>}<span style="color:#1c02ff">&lt;/<span style="font-weight:700">a</span>></span>
	  <span style="color:#1c02ff">&lt;/<span style="font-weight:700">li</span>></span>
	  <span style="color:#1c02ff">&lt;<span style="font-weight:700">li</span> <span style="font-style:italic">id</span>=<span style="color:#036a07">"header_link_sitemap"</span>></span>
	    <span style="color:#1c02ff">&lt;<span style="font-weight:700">a</span> {<span style="color:#00f;font-weight:700">if</span> <span style="color:#318495">$page_name</span> ==<span style="color:#036a07">'sitemap'</span>}<span style="font-style:italic">class</span>=<span style="color:#036a07">"active"</span>{/<span style="color:#00f;font-weight:700">if</span>} <span style="font-style:italic">href</span>=<span style="color:#036a07">"<span style="color:#26b31a">{<span style="color:#318495">$link</span>->getPageLink(<span style="color:#036a07">'sitemap'</span>)<span style="color:#3c4c72;font-weight:700">|escape</span>:<span style="color:#036a07">'html'</span>}</span>"</span> <span style="font-style:italic">title</span>=<span style="color:#036a07">"<span style="color:#26b31a">{l s=<span style="color:#036a07">'sitemap'</span> <span style="color:#00f;font-weight:700">mod</span>=<span style="color:#036a07">'blockpermanentlinks'</span>}</span>"</span>></span>{l s=<span style="color:#036a07">'sitemap'</span> <span style="color:#00f;font-weight:700">mod</span>=<span style="color:#036a07">'blockpermanentlinks'</span>}<span style="color:#1c02ff">&lt;/<span style="font-weight:700">a</span>></span>
	  <span style="color:#1c02ff">&lt;/<span style="font-weight:700">li</span>></span>
	<span style="color:#1c02ff">&lt;/<span style="font-weight:700">ul</span>></span>
	<span style="color:#06f;font-style:italic">&lt;!-- /Block permanent links module HEADER --></span></pre>
	</li>

	<li>
		<span>For example, the following lines of code represent the Sitemap menu element:</span>

		<pre class="prettyprint prettyprinted" style="background:#f0f0f0;color:#000"><span style="color:#1c02ff">&lt;<span style="font-weight:700">li</span> <span style="font-style:italic">id</span>=<span style="color:#036a07">"header_link_sitemap"</span>></span>
    <span style="color:#1c02ff">&lt;<span style="font-weight:700">a</span> <span style="font-style:italic">href</span>=<span style="color:#036a07">"<span style="color:#26b31a">{<span style="color:#318495">$link</span>->getPageLink(<span style="color:#036a07">'sitemap'</span>)<span style="color:#3c4c72;font-weight:700">|escape</span>:<span style="color:#036a07">'html'</span>}</span>"</span> <span style="font-style:italic">title</span>=<span style="color:#036a07">"<span style="color:#26b31a">{l s=<span style="color:#036a07">'sitemap'</span> <span style="color:#00f;font-weight:700">mod</span>=<span style="color:#036a07">'blockpermanentlinks'</span>}</span>"</span>></span>{l s=<span style="color:#036a07">'sitemap'</span> <span style="color:#00f;font-weight:700">mod</span>=<span style="color:#036a07">'blockpermanentlinks'</span>}<span style="color:#1c02ff">&lt;/<span style="font-weight:700">a</span>></span>
<span style="color:#1c02ff">&lt;/<span style="font-weight:700">li</span>></span>
</pre>
		<ul class="marked-list">
			<li>
				a href="{$link->getPageLink('sitemap')|escape:'html'}" - <em style="font-style:italic">is the URL to the page</em>
			</li>
			<li>
				{l s='sitemap' mod='blockpermanentlinks'} - <em style="font-style:italic">is the code for displaying the button name</em>
			</li>
		</ul>
		<p></p>

	</li>

	<li>
		<span>To add a link to the Best Sellers page (http://yourdomain.com/best-sales.php), you should add the following line of code to the themes/theme_name/modules/blockpermanentlinks/blockpermanentlinks-header.tpl file.</span>
		<pre class="prettyprint prettyprinted" style="background:#f0f0f0;color:#000"><span style="color:#1c02ff">&lt;<span style="font-weight:700">li</span> <span style="font-style:italic">id</span>=<span style="color:#036a07">"header_link"</span>></span>
    <span style="color:#1c02ff">&lt;<span style="font-weight:700">a</span> <span style="font-style:italic">href</span>=<span style="color:#036a07">"<span style="color:#26b31a">{<span style="color:#318495">$link</span>->getPageLink(<span style="color:#036a07">'best-sales.php'</span>)<span style="color:#3c4c72;font-weight:700">|escape</span>:<span style="color:#036a07">'html'</span>:<span style="color:#036a07">'UTF-8'</span>}</span>"</span> <span style="font-style:italic">title</span>=<span style="color:#036a07">"<span style="color:#26b31a">{l s=<span style="color:#036a07">'best-sales'</span> <span style="color:#00f;font-weight:700">mod</span>=<span style="color:#036a07">'blockpermanentlinks'</span>}</span>"</span>></span> {l s=<span style="color:#036a07">'Best sales'</span> <span style="color:#00f;font-weight:700">mod</span>=<span style="color:#036a07">'blockpermanentlinks'</span>}<span style="color:#1c02ff">&lt;/<span style="font-weight:700">a</span>></span>
<span style="color:#1c02ff">&lt;/<span style="font-weight:700">li</span>></span>
</pre>

		<p class="alert alert-info">
			Note: If you want to change the name of the new button or add its translations, you can do it in Localization -> Translations menu of your back end.
		</p>
		<p></p>
	</li>

	<li>
		<span>To add a link to some CMS page, you should get the link to the page first. Let's add the link to About Us page.</span><br>
		<span>You should edit the themes/theme_name/modules/blockpermanentlinks/blockpermanentlinks-header.tpl file and add the following line of code:</span>

		<pre class="prettyprint prettyprinted" style="background:#f0f0f0;color:#000"><span style="color:#1c02ff">&lt;<span style="font-weight:700">li</span>></span>
    <span style="color:#1c02ff">&lt;<span style="font-weight:700">a</span> <span style="font-style:italic">href</span>=<span style="color:#036a07">"<span style="color:#26b31a">{<span style="color:#318495">$link</span>->getCMSLink(<span style="color:#036a07">'4'</span>, <span style="color:#036a07">'CMSpage'</span>)}</span>"</span> <span style="font-style:italic">title</span>=<span style="color:#036a07">"<span style="color:#26b31a">{l s=<span style="color:#036a07">'about-us'</span> <span style="color:#00f;font-weight:700">mod</span>=<span style="color:#036a07">'blockpermanentlinks'</span>}</span>"</span>></span>{l s=<span style="color:#036a07">'About Us'</span> <span style="color:#00f;font-weight:700">mod</span>=<span style="color:#036a07">'blockpermanentlinks'</span>}<span style="color:#1c02ff">&lt;/<span style="font-weight:700">a</span>></span>
<span style="color:#1c02ff">&lt;/<span style="font-weight:700">li</span>></span>
</pre>
	
		<ul class="marked-list">
			<li>
				$link->getCMSLink('4', 'CMS page') - <em style="font-style:italic">means that we want to load the CMS page with ID 4</em>. You can see that in the page URL. 
			</li>
			<li>
				s='About Us' - <em style="font-style:italic">is a button title</em>.
			</li>
		</ul>

	</li>

	<li>
		<span>To add a link to Blog, you should edit the same file and add the following line of code (the same way as before):</span>

		<pre class="prettyprint prettyprinted" style="background:#f0f0f0;color:#000">    {<span style="color:#00f;font-weight:700">if</span> class_exists(smartblog)}
        <span style="color:#1c02ff">&lt;<span style="font-weight:700">li</span> <span style="font-style:italic">id</span>=<span style="color:#036a07">"header_link_blog"</span>></span>
            <span style="color:#1c02ff">&lt;<span style="font-weight:700">a</span> {<span style="color:#00f;font-weight:700">if</span> <span style="color:#318495">$page_name</span> ==<span style="color:#036a07">'module-smartblog-category'</span>}<span style="font-style:italic">class</span>=<span style="color:#036a07">"active"</span>{/<span style="color:#00f;font-weight:700">if</span>} <span style="font-style:italic">href</span>=<span style="color:#036a07">"<span style="color:#26b31a">{<span style="color:#318495">$link</span>->getPageLink(<span style="color:#036a07">'smartblog'</span>)<span style="color:#3c4c72;font-weight:700">|escape</span>:<span style="color:#036a07">'html'</span>}</span>"</span> <span style="font-style:italic">title</span>=<span style="color:#036a07">"<span style="color:#26b31a">{l s=<span style="color:#036a07">'blog'</span> <span style="color:#00f;font-weight:700">mod</span>=<span style="color:#036a07">'blockpermanentlinks'</span>}</span>"</span>></span>{l s=<span style="color:#036a07">'blog'</span> <span style="color:#00f;font-weight:700">mod</span>=<span style="color:#036a07">'blockpermanentlinks'</span>}<span style="color:#1c02ff">&lt;/<span style="font-weight:700">a</span>></span>
        <span style="color:#1c02ff">&lt;/<span style="font-weight:700">li</span>></span>
    {/<span style="color:#00f;font-weight:700">if</span>}
</pre>

		<p class="alert alert-info">
			Note: If you do not have a Smart Blog module installed in your theme, the link will not appear.
		</p>
		<p></p>

	</li>

	<li>
		<span>To add a link to Wishlist, add this code:</span>

		<pre class="prettyprint prettyprinted" style="background:#f0f0f0;color:#000">    <span style="color:#1c02ff">&lt;<span style="font-weight:700">li</span> <span style="font-style:italic">id</span>=<span style="color:#036a07">"header_link_wishlist"</span>></span>
            <span style="color:#1c02ff">&lt;<span style="font-weight:700">a</span> <span style="font-style:italic">href</span>=<span style="color:#036a07">"<span style="color:#26b31a">{<span style="color:#318495">$link</span>->getModuleLink(<span style="color:#036a07">'blockwishlist'</span>, <span style="color:#036a07">'mywishlist'</span>, array(), <span style="color:#585cf6;font-weight:700">true</span>)<span style="color:#3c4c72;font-weight:700">|escape</span>:<span style="color:#036a07">'html'</span>:<span style="color:#036a07">'UTF-8'</span>}</span>"</span> <span style="font-style:italic">title</span>=<span style="color:#036a07">"<span style="color:#26b31a">{l s=<span style="color:#036a07">'My wishlists'</span> <span style="color:#00f;font-weight:700">mod</span>=<span style="color:#036a07">'blockwishlist'</span>}</span>"</span>></span><span style="color:#1c02ff">&lt;<span style="font-weight:700">span</span>></span>{l s=<span style="color:#036a07">'Wishlist'</span>}<span style="color:#1c02ff">&lt;/<span style="font-weight:700">span</span>></span><span style="color:#1c02ff">&lt;/<span style="font-weight:700">a</span>></span>
    <span style="color:#1c02ff">&lt;/<span style="font-weight:700">li</span>></span>
</pre>
	</li>

	<li>
		<span>If you want to hide any of these links, you can delete the <em><strong>&lt;li&gt; &lt;/li&gt;</strong></em> item or simply comment it in your code (like in the example below) in order to show it back when you need to.</span>

		<pre class="prettyprint prettyprinted" style="background:#f0f0f0;color:#000"><span style="color:#1c02ff">&lt;<span style="font-weight:700">ul</span> <span style="font-style:italic">id</span>=<span style="color:#036a07">"header_links"</span>></span>
  <span style="color:#1c02ff">&lt;<span style="font-weight:700">li</span> <span style="font-style:italic">id</span>=<span style="color:#036a07">"header_link_wishlist"</span>></span>
    <span style="color:#1c02ff">&lt;<span style="font-weight:700">a</span> <span style="font-style:italic">href</span>=<span style="color:#036a07">"<span style="color:#26b31a">{<span style="color:#318495">$link</span>->getModuleLink(<span style="color:#036a07">'blockwishlist'</span>, <span style="color:#036a07">'mywishlist'</span>, array(), <span style="color:#585cf6;font-weight:700">true</span>)<span style="color:#3c4c72;font-weight:700">|escape</span>:<span style="color:#036a07">'html'</span>:<span style="color:#036a07">'UTF-8'</span>}</span>"</span> <span style="font-style:italic">title</span>=<span style="color:#036a07">"<span style="color:#26b31a">{l s=<span style="color:#036a07">'My wishlists'</span> <span style="color:#00f;font-weight:700">mod</span>=<span style="color:#036a07">'blockwishlist'</span>}</span>"</span>></span>{l s=<span style="color:#036a07">'Wishlist'</span>}<span style="color:#1c02ff">&lt;/<span style="font-weight:700">a</span>></span>
  <span style="color:#1c02ff">&lt;/<span style="font-weight:700">li</span>></span>

  <span style="color:#1c02ff">&lt;<span style="font-weight:700">li</span> <span style="font-style:italic">id</span>=<span style="color:#036a07">"header_link_contact"</span>></span>
    <span style="color:#1c02ff">&lt;<span style="font-weight:700">a</span> <span style="font-style:italic">href</span>=<span style="color:#036a07">"<span style="color:#26b31a">{<span style="color:#318495">$link</span>->getPageLink(<span style="color:#036a07">'contact'</span>, <span style="color:#585cf6;font-weight:700">true</span>)<span style="color:#3c4c72;font-weight:700">|escape</span>:<span style="color:#036a07">'html'</span>}</span>"</span> <span style="font-style:italic">title</span>=<span style="color:#036a07">"<span style="color:#26b31a">{l s=<span style="color:#036a07">'contact'</span> <span style="color:#00f;font-weight:700">mod</span>=<span style="color:#036a07">'blockpermanentlinks'</span>}</span>"</span>></span>{l s=<span style="color:#036a07">'contact'</span> <span style="color:#00f;font-weight:700">mod</span>=<span style="color:#036a07">'blockpermanentlinks'</span>}<span style="color:#1c02ff">&lt;/<span style="font-weight:700">a</span>></span>
  <span style="color:#1c02ff">&lt;/<span style="font-weight:700">li</span>></span>
  <span style="color:#888;font-style:italic">&lt;!-- &lt;li id="header_link_sitemap">
    &lt;a href="{<span>$link</span>->getPageLink(<span>'sitemap'</span>)<span style="font-weight:700">|escape</span>:<span>'html'</span>}" title="{l s=<span>'sitemap'</span> <span style="font-weight:700">mod</span>=<span>'blockpermanentlinks'</span>}">{l s=<span>'sitemap'</span> <span style="font-weight:700">mod</span>=<span>'blockpermanentlinks'</span>}&lt;/a>
  &lt;/li> --></span>
<span style="color:#1c02ff">&lt;/<span style="font-weight:700">ul</span>></span>
</pre>
	</li>

	<li>
		<span>Save the changes and check your website front end to see how you modified the header menu.</span>
	</li>


</ul>