<h2 class="item7">Uzupełnienie</h2>
<h5>Gdzie można otrztymać pomoc i wsparcie techniczne, a także dodatkową informację?</h5>
<p>Staraliśmy się, żeby niniejsza dokumentacja była jaknajbardziej klarowna. Jednakże, w razie gdybyś miał jakiekolwiek
    trudności z szablonem PrestaShop lub jakiekolwiek inne pomysły w sprawie możliwego udoskonalenia tego szablonu lub
    tej dokumentacji, prosimy uprzejmie o kontakt z naszą ekipą wsparcia technicznego poprzez:</p>
<h4>Pomoc i Wsparcie Techniczne</h4>
<ul class="marked-list">
    <li>
        <p>
            <a href="http://chat.template-help.com/" target="_blank">Czat na żywo</a>
        </p>
    </li>
    <li>
        <p>
            <a href="http://support.template-help.com/index.php?/Tickets/Submit" target="_blank">System biletów pomocy
                technicznej</a>
        </p>
    </li>
</ul><h4>Użyteczne źródła informacji</h4>
<ul class="marked-list">
    <li>
        <p>
            <a target="_blank" href="http://www.prestashop.com/">Oficjalna strona PrestaShop</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://www.prestashop.com/en/downloads/">Pobrane pliki</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://addons.prestashop.com/en/">Dodatki: moduły, motywy itp.</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://doc.prestashop.com/display/PS16/English+documentation">Dokumentacja w języku
                angielskim</a>
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
            <a target="_blank" href="/help/ecommerce/prestashop/prestashop-tutorials/">Samouczki PrestaShop</a>
        </p>
    </li>
</ul>
<h4>Trwa ładowanie danych z serwerów Google</h4>
<p>W niektórych krająch są problemy z połączeniem do serwerów Google. Wskutek tego w trakcie ładowania Czcionek Google
    tudzież bibliotek Java Script z Sieci Dostarczania Treści (CDN) Google mogą powstawać pewne problemy. Żeby
    wyeliminować te problemy, prosimy wykonać następujące kroki: </p>
<h4>Nie udaje się załadować Czcionki Google:</h4>
<ol class="index-list">
    <li><p>Otwórz plik <strong>\themes\theme****\header.tpl</strong>.</p></li>
    <li><p>Znajdź następujący wiersz: </p>
        <code>&lt;link rel="stylesheet" href="http{if
            Tools::usingSecureMode()}s{/if}://fonts.googleapis.com/css?family=[---your_web_font_name_here---]"
            type="text/css" media="all" /&gt; </code></li>
    <li><p>Zamień go na następujący wiersz: </p>
        <code>&lt;link rel="stylesheet" href="http://fonts.useso.com/css?family=[---your_web_font_name_here---]"
            type="text/css" media="all" /&gt;</code></li>
</ol>
<h4>Walidacja W3C</h4>
<p>Zarówno HTML markup jak i style CSS wykorzystywane w naszych szablonach są semantycznie poprawne i ważne. Niemniej
    jednak, mogą zdarzać się niektóre błędy W3C. Poprzez uczynienie kodu ważnym na 100% w zakresie W3C bowiem
    wyeliminujemy takie nowoczesne technologie jak funkcje CSS3 oraz HTML5 markup. Naszym celem jest dostarczyć bogate
    doświadczenie użytkownika z całością wrażeń; z myślą o tym, czasem musimy łamać niektóre przepisy.</p>
