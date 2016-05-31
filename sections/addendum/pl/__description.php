<h2 class="item7">Addendum </h2><h4>gdzie uzyskać pomoc, wsparcie i dodatkowe informacje</h4>
<p>Dołożyliśmy wszelkich starań, aby dokumentacja ta była jak najbardziej jasna i przejrzysta. Jednakże, jeśli masz jakiekolwiek trudności z szablonem PrestaShop lub jakiekolwiek sugestie dotyczące poprawy szablonu lub dokumentacji, prosimy o kontakt z naszym działem wsparcia poprzez:</p>
<h4>Pomoc i obsługa techniczna</h4>
<ul class="marked-list">
    <li>
        <p>
            <a href="http://chat.template-help.com/" target="_blank">Live czat</a>
        </p>
    </li>
    <li>
        <p>
            <a href="http://support.template-help.com/index.php?/Tickets/Submit" target="_blank">Help ticket system</a>
        </p>
    </li>
</ul><h4>Przydatne zasoby</h4>
<ul class="marked-list">
    <li>
        <p>
            <a target="_blank" href="http://www.prestashop.com/">Oficjalna strona PrestaShop</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://www.prestashop.com/en/downloads/">Pliki do pobrania</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://addons.prestashop.com/en/">Dodatki: moduły, motywy, itp.</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://doc.prestashop.com/display/PS16/English+documentation">Dokumentacja w języku angielskim</a>
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
            <a target="_blank" href="/help/ecommerce/prestashop/prestashop-tutorials/">Tutoriale PrestaShop</a>
        </p>
    </li>
</ul><h4>Ładowanie danych z serwerów Google</h4>

    <p>Niektóre kraje mają problemy z połączeniem się z serwerami Google. Może to powodować problemy związane z ładowaniem czcionek Google i biblioteki Java Script z Google CDN. Aby rozwiązać te problemy, wykonaj następujące czynności: </p>

    <h4>Nie można załadować czcionki Google: </h4>

    <ol class="index-list">
        <li><p>Otwórz plik <strong>\themes\theme1343\header.tpl</strong>.</p></li>
        <li><p>Znajdź wiersz: </p>
            <pre>&lt;link rel="stylesheet" href="http{if Tools::usingSecureMode()}s{/if}://fonts.googleapis.com/css?family=[---your_web_font_name_here---]" type="text/css" media="all" /&gt; </pre>
        </li>
        <li><p>Zastąp go następującym: </p>
            <pre>&lt;link rel="stylesheet" href="http://fonts.useso.com/css?family=[---your_web_font_name_here---]" type="text/css" media="all" /&gt;</pre>
        </li>
    </ol>
</article>