<h2 class="item7">Appendice </h2><h4>dove trovare aiuto, supporto e altre informazioni</h4>
<p>Abbiamo fatto del nostro meglio per rendere questa documentazione il più possibile chiara ed esauriente. Se però incontri altre difficoltà con PrestaShop o anche se hai suggerimenti su come migliorare il template o la documentazione, non esitare a contattare il nostro team di supporto:</p>
<h4>Aiuto e Supporto</h4>
<ul class="marked-list">
    <li>
        <p>
            <a href="http://chat.template-help.com/" target="_blank">Chat dal vivo</a>
        </p>
    </li>
    <li>
        <p>
            <a href="http://support.template-help.com/index.php?/Tickets/Submit" target="_blank">Sistema di supporto con ticket</a>
        </p>
    </li>
</ul><h4>Risorse utili</h4>
<ul class="marked-list">
    <li>
        <p>
            <a target="_blank" href="http://www.prestashop.com/">Sito ufficiale PrestaShop</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://www.prestashop.com/en/downloads/">Download</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://addons.prestashop.com/en/">Addons: moduli, temi, ecc.</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://doc.prestashop.com/display/PS16/English+documentation">Documentazione in inglese</a>
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
            <a target="_blank" href="/help/ecommerce/prestashop/prestashop-tutorials/">Guide PrestaShop</a>
        </p>
    </li>
</ul><h4>Caricare dati dai server Google </h4>

    <p>In alcuni paesi ci sono problemi a connettersi ai server di Google. Questo può provocare problemi nel caricamento dei font Google Fonts o delle librerie Java Script da Google CDN. Per risolvere questi problemi, provate a fare così: </p>

    <h4>Impossibile caricare i font di Google: </h4>

    <ol class="index-list">
        <li><p>Apri il file <strong>\themes\theme1343\header.tpl</strong>.</p></li>
        <li><p>Individua la riga: </p>
            <pre>&lt;link rel="stylesheet" href="http{if Tools::usingSecureMode()}s{/if}://fonts.googleapis.com/css?family=[---your_web_font_name_here---]" type="text/css" media="all" /&gt; </pre>
        </li>
        <li><p>Sostituiscila con la seguente: </p>
            <pre>&lt;link rel="stylesheet" href="http://fonts.useso.com/css?family=[---your_web_font_name_here---]" type="text/css" media="all" /&gt;</pre>
        </li>
    </ol>
</article>