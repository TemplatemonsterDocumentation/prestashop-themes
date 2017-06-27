<h2 class="item7">Addendum</h2>
<h5>Dove ottenere aiuto, supporto e informazioni aggiuntive</h5>
<p>Abbiamo fatto del nostro meglio per rendere la documentazione più chiara possibile. Tuttavia, se hai difficoltà con il modello PrestaShop o qualsiasi suggerimento sul miglioramento del template o della documentazione, contatta il nostro team di supporto attraverso:</p>
<h4>Aiuto e Supporto</h4>
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
</ul><h4>Risorse utili</h4>
<ul class="marked-list">
    <li>
        <p>
            <a target="_blank" href="http://www.prestashop.com/">Sito ufficiale di PrestaShop</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://www.prestashop.com/en/downloads/">Downloads</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://addons.prestashop.com/en/">Addons: moduli, themi, ecc.</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://doc.prestashop.com/display/PS16/English+documentation">English
                documentazione</a>
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
<h4>Caricamento dei dati dai server Google</h4>
<p>Alcuni paesi hanno problemi a connettersi ai server Google. Ciò può causare problemi di caricamento di librerie Google Font e Java Script da Google CDN. Per risolvere questi problemi, effettuare le seguenti operazioni:</p>
<h4>Impossibile caricare font di Google:</h4>
<ol class="index-list">
    <li><p>Aprire <strong>\themes\theme****\header.tpl</strong> file.</p></li>
    <li><p>Individuare la linea:</p>
        <code>&lt;link rel="stylesheet" href="http{if
            Tools::usingSecureMode()}s{/if}://fonts.googleapis.com/css?family=[---your_web_font_name_here---]"
            type="text/css" media="all" /&gt; </code>
    </li>
    <li><p>Sostituirlo con quanto segue:</p>
        <code>&lt;link rel="stylesheet" href="http://fonts.useso.com/css?family=[---your_web_font_name_here---]"
            type="text/css" media="all" /&gt;</code>
    </li>
</ol>
<h4>W3C convalida</h4>
<p>Entrambi i tag HTML e gli stili CSS utilizzati nei nostri modelli sono semantically correct e valid. Tuttavia alcuni errori W3C possono ancora avvenire. Fare codice valido 100% W3C elimina l'utilizzo di tecnologie moderne del sito come le funzionalità CSS3 e il markup HTML5. Il nostro obiettivo è quello di fornire un'esperienza utente ricca con modelli di alta qualità e talvolta dobbiamo rompere alcune regole.</p>
