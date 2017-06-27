<h3>Как добавить или удалить некоторые ссылки в блоке Постоянные ссылки</h3>
<p>Из этого туториала Вы узнаете, как добавить или скрыть некоторые ссылки в хедере шаблонов PrestaShop 1.6.x.</p>
<p>Ссылки в хедере шаблона PrestaShop заданы в модуле Permanent links block. Он, как правило, выглядит, как показано на скриншоте ниже (1).</p>
<figure class="img-polaroid">
    <img src="img/14-permalinks-1.png" alt=""/>
</figure>
<p>Если Вы хотите добавить элемент или удалить его, Вам нужно внести изменения в файл 'themes/theme_name/modules/blockpermanentlinks/blockpermanentlinks-header.tpl', который расположен в файлах вашего сайта PrestaShop на вашем сервере.</p>
<ul class="index-list">
    <li>
        <span>Откройте файл, используя любой редактор кода. Меню создано в виде ненумерованного списка. Каждый элемент меню обернут в теги <em><strong>&lt;li&gt; &lt;/li&gt;</strong></em>. Код будет выглядеть следующим образом:</span>
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
        <span>Например, эти строки кода отвечают за элемент меню «Карта сайта»:</span>
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
                {l s='sitemap' mod='blockpermanentlinks'} - <em style="font-style:italic">это код для отображения названия кнопки</em>
            </li>
        </ul>
    </li>
    <li>
        <span>Для того чтобы добавить ссылку на страницу «Хиты продаж» (http://yourdomain.com/best-sales.php), добавьте следующую строку кода в файл themes/theme_name/modules/blockpermanentlinks/blockpermanentlinks-header.tpl.</span>
        <pre class="codebox" style="color:#586e75"><span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">li</span> <span style="color:#93a1a1">id</span><span style="color:#708284">=</span><span style="color:#269186"><span style="color:#269186">"</span>header_link<span style="color:#269186">"</span></span><span style="color:#93a1a1">></span>
    <span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">a</span> <span style="color:#93a1a1">href</span>=<span style="color:#269186"><span style="color:#269186">"</span>{<span style="color:#268bd2"><span style="color:#859900">$</span>link</span>->getPageLink(<span style="color:#269186"><span style="color:#c60000">'</span>best-sales.php<span style="color:#c60000">'</span></span>)<span style="color:#268bd2">|escape</span>:<span style="color:#269186"><span style="color:#c60000">'</span>html<span style="color:#c60000">'</span></span>:<span style="color:#269186"><span style="color:#c60000">'</span>UTF-8<span style="color:#c60000">'</span></span>}<span style="color:#269186">"</span></span> <span style="color:#93a1a1">title</span>=<span style="color:#269186"><span style="color:#269186">"</span>{l s=<span style="color:#269186"><span style="color:#c60000">'</span>best-sales<span style="color:#c60000">'</span></span> <span style="color:#859900">mod</span>=<span style="color:#269186"><span style="color:#c60000">'</span>blockpermanentlinks<span style="color:#c60000">'</span></span>}<span style="color:#269186">"</span></span><span style="color:#93a1a1">></span> {l s=<span style="color:#269186"><span style="color:#c60000">'</span>Best sales<span style="color:#c60000">'</span></span> <span style="color:#859900">mod</span>=<span style="color:#269186"><span style="color:#c60000">'</span>blockpermanentlinks<span style="color:#c60000">'</span></span>}<span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">a</span><span style="color:#93a1a1">></span>
<span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">li</span><span style="color:#93a1a1">></span>
</pre>
        <p class="alert alert-info">
            Обратите внимание: Если Вы хотите изменить название новой кнопки или добавить его переводы, Вы можете сделать это в пункте меню Локализация -> Переводы вашей админ панели.
        </p>
    </li>
    <li>
        <span>Для того чтобы добавить ссылку на одну из страниц CMS, во-первых, Вам понадобится ссылка на страницу. Давайте добавим ссылку на страницу «Про нас».</span><br>
        <span>Вам нужно внести изменения в файл themes/theme_name/modules/blockpermanentlinks/blockpermanentlinks-header.tpl, добавив следующую строку кода:</span>
        <pre class="codebox" style="color:#586e75"><span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">li</span><span style="color:#93a1a1">></span>
    <span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">a</span> <span style="color:#93a1a1">href</span>=<span style="color:#269186"><span style="color:#269186">"</span>{<span style="color:#268bd2"><span style="color:#859900">$</span>link</span>->getCMSLink(<span style="color:#269186"><span style="color:#c60000">'</span>4<span style="color:#c60000">'</span></span>, <span style="color:#269186"><span style="color:#c60000">'</span>CMSpage<span style="color:#c60000">'</span></span>)}<span style="color:#269186">"</span></span> <span style="color:#93a1a1">title</span>=<span style="color:#269186"><span style="color:#269186">"</span>{l s=<span style="color:#269186"><span style="color:#c60000">'</span>about-us<span style="color:#c60000">'</span></span> <span style="color:#859900">mod</span>=<span style="color:#269186"><span style="color:#c60000">'</span>blockpermanentlinks<span style="color:#c60000">'</span></span>}<span style="color:#269186">"</span></span><span style="color:#93a1a1">></span>{l s=<span style="color:#269186"><span style="color:#c60000">'</span>About Us<span style="color:#c60000">'</span></span> <span style="color:#859900">mod</span>=<span style="color:#269186"><span style="color:#c60000">'</span>blockpermanentlinks<span style="color:#c60000">'</span></span>}<span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">a</span><span style="color:#93a1a1">></span>
<span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">li</span><span style="color:#93a1a1">></span>
</pre>
        <ul class="marked-list">
            <li>
                $link->getCMSLink('4', 'CMS page') - <em style="font-style:italic">означает то, что Вы хотите загрузить страницу с Идентификационным номером 4</em>. Вы можете видеть этот номер в ссылке на страницу.
            </li>
            <li>
                s='About Us' - <em style="font-style:italic">это название кнопки</em>.
            </li>
        </ul>
    </li>
    <li>
        <span>Для того чтобы добавить ссылку на блог, нужно внести изменения в этот же файл и добавить следующую строку кода (так же, как и ранее):</span>
        <pre class="codebox" style="color:#586e75">    {<span style="color:#859900">if</span> class_exists(smartblog)}
        <span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">li</span> <span style="color:#93a1a1">id</span><span style="color:#708284">=</span><span style="color:#269186"><span style="color:#269186">"</span>header_link_blog<span style="color:#269186">"</span></span><span style="color:#93a1a1">></span>
            <span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">a</span> {<span style="color:#859900">if</span> <span style="color:#268bd2"><span style="color:#859900">$</span>page_name</span> ==<span style="color:#269186"><span style="color:#c60000">'</span>module-smartblog-category<span style="color:#c60000">'</span></span>}<span style="color:#93a1a1">class</span>=<span style="color:#269186"><span style="color:#269186">"</span>active<span style="color:#269186">"</span></span>{/<span style="color:#859900">if</span>} <span style="color:#93a1a1">href</span>=<span style="color:#269186"><span style="color:#269186">"</span>{<span style="color:#268bd2"><span style="color:#859900">$</span>link</span>->getPageLink(<span style="color:#269186"><span style="color:#c60000">'</span>smartblog<span style="color:#c60000">'</span></span>)<span style="color:#268bd2">|escape</span>:<span style="color:#269186"><span style="color:#c60000">'</span>html<span style="color:#c60000">'</span></span>}<span style="color:#269186">"</span></span> <span style="color:#93a1a1">title</span>=<span style="color:#269186"><span style="color:#269186">"</span>{l s=<span style="color:#269186"><span style="color:#c60000">'</span>blog<span style="color:#c60000">'</span></span> <span style="color:#859900">mod</span>=<span style="color:#269186"><span style="color:#c60000">'</span>blockpermanentlinks<span style="color:#c60000">'</span></span>}<span style="color:#269186">"</span></span><span style="color:#93a1a1">></span>{l s=<span style="color:#269186"><span style="color:#c60000">'</span>blog<span style="color:#c60000">'</span></span> <span style="color:#859900">mod</span>=<span style="color:#269186"><span style="color:#c60000">'</span>blockpermanentlinks<span style="color:#c60000">'</span></span>}<span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">a</span><span style="color:#93a1a1">></span>
        <span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">li</span><span style="color:#93a1a1">></span>
    {/<span style="color:#859900">if</span>}
</pre>
        <p class="alert alert-info">
           Обратите внимание: Если у Вас в шаблоне не установлен модуль Smart Blog, ссылка не отобразится.
        </p>
    </li>
    <li>
        <span>Для того чтобы добавить ссылку на «Список желаний», добавьте следующий фрагмент кода:</span>
        <pre class="codebox" style="color:#586e75">    <span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">li</span> <span style="color:#93a1a1">id</span><span style="color:#708284">=</span><span style="color:#269186"><span style="color:#269186">"</span>header_link_wishlist<span style="color:#269186">"</span></span><span style="color:#93a1a1">></span>
            <span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">a</span> <span style="color:#93a1a1">href</span>=<span style="color:#269186"><span style="color:#269186">"</span>{<span style="color:#268bd2"><span style="color:#859900">$</span>link</span>->getModuleLink(<span style="color:#269186"><span style="color:#c60000">'</span>blockwishlist<span style="color:#c60000">'</span></span>, <span style="color:#269186"><span style="color:#c60000">'</span>mywishlist<span style="color:#c60000">'</span></span>, array(), <span style="color:#b58900">true</span>)<span style="color:#268bd2">|escape</span>:<span style="color:#269186"><span style="color:#c60000">'</span>html<span style="color:#c60000">'</span></span>:<span style="color:#269186"><span style="color:#c60000">'</span>UTF-8<span style="color:#c60000">'</span></span>}<span style="color:#269186">"</span></span> <span style="color:#93a1a1">title</span>=<span style="color:#269186"><span style="color:#269186">"</span>{l s=<span style="color:#269186"><span style="color:#c60000">'</span>My wishlists<span style="color:#c60000">'</span></span> <span style="color:#859900">mod</span>=<span style="color:#269186"><span style="color:#c60000">'</span>blockwishlist<span style="color:#c60000">'</span></span>}<span style="color:#269186">"</span></span><span style="color:#93a1a1">></span><span style="color:#93a1a1">&lt;</span><span style="color:#268bd2">span</span><span style="color:#93a1a1">></span>{l s=<span style="color:#269186"><span style="color:#c60000">'</span>Wishlist<span style="color:#c60000">'</span></span>}<span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">span</span><span style="color:#93a1a1">></span><span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">a</span><span style="color:#93a1a1">></span>
    <span style="color:#93a1a1">&lt;/</span><span style="color:#268bd2">li</span><span style="color:#93a1a1">></span>
</pre>
    </li>
    <li>
        <span>Если Вы хотите скрыть какую-то из этих ссылок, Вы можете удалить элемент <em><strong>&lt;li&gt; &lt;/li&gt;</strong></em> или просто отключить его комментированием в вашем коде (как это показано в примере ниже), для того чтобы снова отобразить ссылку, если это понадобится.</span>
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
        <span>Сохраните изменения и обновите фронтенд вашего сайта, для того чтобы проверить, как Вы внесли изменения в меню хедера.</span>
    </li>
</ul>
