<h2 class="item7">Ergänzung</h2>
<h5>Wo kann ich Hilfe, Unterstützung oder zusätzliche Informationen erhalten?</h5>
<p>Wir haben uns Mühe gegeben, um diese Anleitung schnell und verständlich zu machen. Aber wenn es Probleme bei der Arbeit mit einer Joomla Vorlage auftreten oder Sie Vorschläge zur Verbesserung der Vorlagen oder Anleitungen haben, können Sie den Kontakt mit unserem technischen Kundendienst auf folgende Weise aufnehmen:</p>
<h4>Hilfe und Unterstützung </h4>
<ul class="marked-list">
    <li>
        <p>
            <a href="http://chat.template-help.com/" target="_blank">Online-Chat</a>
        </p>
    </li>
    <li>
        <p>
            <a href="http://support.template-help.com/index.php?/Tickets/Submit" target="_blank">Anfragesystem</a>
        </p>
    </li>
</ul><h4>Nützliche Ressourcen</h4>
<ul class="marked-list">
    <li>
        <p>
            <a target="_blank" href="http://www.prestashop.com/">Offizielle Website PrestaShop</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://www.prestashop.com/en/downloads/">Downloads</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://addons.prestashop.com/en/">Zusätzlich: Module, Themen usw.</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://doc.prestashop.com/display/PS16/English+documentation">Englische Anleitung</a>
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
            <a target="_blank" href="/help/ecommerce/prestashop/prestashop-tutorials/">Tutorials PrestaShop</a>
        </p>
    </li>
</ul>
<h4>Daten werden von Google Servern geladen</h4>
<p> In manchen Ländern können Probleme bei der Herstellung der Verbindung mit Google Servern auftreten. Dadurch können auch Probleme beim Hochladen der Bibliotheken Google Fonts und Java Script aus Google CDN auftreten. Um diese Probleme zu lösen, führen Sie die folgenden Schritte aus: </p>
<h4>Google Fonts können nicht hochgeladen werden:</h4>
<ol class="index-list">
    <li><p>Öffnen Sie die Datei <strong>\themes\theme****\header.tpl</strong>.</p></li>
    <li><p>Finden Sie die Zeile: </p>
        <code>&lt;link rel="stylesheet" href="http{if
            Tools::usingSecureMode()}s{/if}://fonts.googleapis.com/css?family=[---your_web_font_name_here---]"
            type="text/css" media="all" /&gt; </code>
    </li>
    <li><p>Ersetzen Sie sie durch: </p>
        <code>&lt;link rel="stylesheet" href="http://fonts.useso.com/css?family=[---your_web_font_name_here---]"
            type="text/css" media="all" /&gt;</code>
    </li>
</ol>
<h4>W3C Validierung</h4>
<p> In unseren Vorlagen befolgen wir die semantischen Regeln beim Schreiben des Codes für HTML-Markup und CSS-Stile. Aber trotzdem können Fehler mit W3C auftreten. Wenn der Code hundertprozentig geschrieben wurde und den W3C-Standards entspricht, wird die Verwendung der modernen Technologien bei der Erstellung der Websites begrenzt: CSS-Eigenschaften und  HTML5-Markup. Das Ziel unseres Unternehmens ist es, eine reiche Benutzererfahrung mit hochwertigen Vorlagen, deswegen müssen wir manchmal einige Regeln brechen.</p>
