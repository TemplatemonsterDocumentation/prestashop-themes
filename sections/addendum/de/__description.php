<h2 class="item7">Mehr </h2>
<h4>mit wem muss man den Kontakt aufnehmen, um die Hilfe, Unterstützung und zusätzliche Information zu bekommen </h4>
<p>Wir haben diese Dokumentation für Sie ausführlich und verständlich gemacht. Aber wenn Sie auf Schwierigkeiten bei der Arbeit mit der PrestaShop Vorlage stoßen oder Tipps zur Verbesserung von Vorlagen und Dokumentationen haben, können Sie dann den Kontakt mit der technischen Unterstützung wie folgt aufnehmen:</p>
<h4>Hilfe und Unterstützung</h4>
<ul class="marked-list">
    <li>
        <p>
            <a href="http://chat.template-help.com/" target="_blank">Live Chat</a>
        </p>
    </li>
    <li>
        <p>
            <a href="http://support.template-help.com/index.php?/Tickets/Submit" target="_blank">Ticketsystem</a>
        </p>
    </li>
</ul><h4>Nützliche Links</h4>
<ul class="marked-list">
    <li>
        <p>
            <a target="_blank" href="http://www.prestashop.com/">Offizielle Website PrestaShop</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://www.prestashop.com/en/downloads/">Herunterladen</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://addons.prestashop.com/en/">Addons: Module, Themen, usw.</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://doc.prestashop.com/display/PS16/English+documentation">Dokumentation auf Englisch</a>
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
            <a target="_blank" href="/help/ecommerce/prestashop/prestashop-tutorials/">Tutorials über PrestaShop</a>
        </p>
    </li>
</ul><h4>Hochladen von Daten von Google Servern</h4>

    <p>In einigen Ländern gibt es Probleme mit der Verbindung mit Google Servern, deswegen kann es Schwierigkeiten beim Hochladen von Google Fonts Schriften und Java Script Bibliotheken mit Google CDN auftreten. In diesem Fall sollen Sie das Folgende machen: </p>

    <h4>Wenn Sie Google Fonts Schriften nicht hochladen können: </h4>

    <ol class="index-list">
        <li><p>Öffnen Sie die Datei <strong>\themes\theme1335\header.tpl</strong>.</p></li>
        <li><p>Finden Sie die Zeile: </p>
            <pre>&lt;link rel="stylesheet" href="http{if Tools::usingSecureMode()}s{/if}://fonts.googleapis.com/css?family=[---your_web_font_name_here---]" type="text/css" media="all" /&gt; </pre>
        </li>
        <li><p>Ersetzen Sie sie durch: </p>
            <pre>&lt;link rel="stylesheet" href="http://fonts.useso.com/css?family=[---your_web_font_name_here---]" type="text/css" media="all" /&gt;</pre>
        </li>
    </ol>
