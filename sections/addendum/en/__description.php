<h2 class="item7"> Addendum</h2>

<h5>where to get help, support and additional information</h5>
<p>We did our best to make this documentation as clear as possible. However, if you have any difficulties with the
    PrestaShop template or any suggestions on improving the template or the documentation, feel free to contact our
    support team through the:</p>

<h4>Help and Support</h4>
<ul class="marked-list">
    <li>
        <p>
            <a href="http://chat.template-help.com/" target="_blank">Live chat</a>
        </p>
    </li>
    <li>
        <p>
            <a href="http://support.template-help.com/index.php?/Tickets/Submit" target="_blank">Help ticket system</a>
        </p>
    </li>
</ul><h4>Useful resources</h4>
<ul class="marked-list">
    <li>
        <p>
            <a target="_blank" href="http://www.prestashop.com/">PrestaShop official site</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://www.prestashop.com/en/downloads/">Downloads</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://addons.prestashop.com/en/">Addons: modules, themes, etc.</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://doc.prestashop.com/display/PS16/English+documentation">English
                documentation</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://www.prestashop.com/forums/">Forum</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://www.prestashop.com/wiki/">Wiki</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="/help/ecommerce/prestashop/prestashop-tutorials/">PrestaShop tutorials</a>
        </p>
    </li>
</ul>
<h4>Loading data from Google servers</h4>

<p>Some countries have issues connecting to Google servers. This can cause issues loading Google Fonts and Java
    Script libraries from Google CDN. To resolve these issues please do the following: </p>

<h4>Can't load Google Fonts: </h4>

<ol class="index-list">
    <li><p>Open <strong>\themes\theme1335\header.tpl</strong> file.</p></li>
    <li><p>Locate the line: </p>
        <code>&lt;link rel="stylesheet" href="http{if
            Tools::usingSecureMode()}s{/if}://fonts.googleapis.com/css?family=[---your_web_font_name_here---]"
            type="text/css" media="all" /&gt; </code>
    </li>
    <li><p>Replace it with the following: </p>
        <code>&lt;link rel="stylesheet" href="http://fonts.useso.com/css?family=[---your_web_font_name_here---]"
            type="text/css" media="all" /&gt;</code>
    </li>
</ol>
<h4>W3C validation </h4>

<p>Both HTML markup and CSS styles used in our templates are semantically correct and valid. However some W3C errors
    still can take place. Making code 100% W3C valid eliminates the usage of modern website technologies as CSS3
    features and HTML5 markup. Our goal is to deliver rich user experience with high quality templates and sometimes
    we have to break some rules.</p>
