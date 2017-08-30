<h3>TM-Look Book</h3>
<?php if ($project == 'eveprest') { ?>
    <div>
        <p style="margin-bottom: 0;">Dostępny dla:</p>
        <p style="margin-top: 0;" class="small text-secondary">Moda, Meble</p>
    </div>
<?php } ?>
<h5>Wymagania:</h5>
<p>Ten moduł pozwala stwarzać lookbooki oraz kombinować je w zbiory. Z kolei lookbooki pozwalają oglądać produkty
    bezpośrednio na modelu. Co więcej, jeżeli produkt jest oznaczony w lookbooku, moduł pokazuje link do lookbook na
    stronie produktu.</p>
<ul class="marked-list">
    <li>PHP 5.4+</li>
    <li>PrestaShop 1.6</li>
</ul>
<h5>TM-Look Book—Panel Główny</h5>
<p>Na stronie głównej modułu możesz usuwać oraz edytować zbiory modułu.</p>
<figure class="img-polaroid">
    <img src="img/tmlookbook-main-panel.png" alt=""/>
</figure>
<h5>Dodawanie oraz edytowanie zbioru</h5>
<p>Zbiory pomogą Ci skombinować kilka lookbooków na jednej stronie. Aby dodać zbiór, wykonaj następujące kroki.</p>
<ul class="index-list">
    <li>
        <p>W tablicy zbiorów (na głównym panelu modułu) wciśnij symbol plus (1).</p>
        <figure class="img-polaroid">
            <img src="img/tmlookbook-add-collection.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>Zobaczysz formularz zawierający następujące pola:</p>
        <ul class="marked-list">
            <li><strong>Status</strong> - ta opcja pozwala Ci włączać lub wyłączać pokazywanie zbioru na stronie
                zbiorów.
            </li>
            <li><strong>Nazwa</strong> - nazwa zbioru która będzie pokazywana na stronie zbiorów.</li>
            <li><strong>Opis</strong> - opis zbioru.</li>
            <li><strong>Obraz</strong> - obraz głównego zbioru.</li>
            <li><strong>Szablon</strong> - szablon dla lookbooków tego zbioru. Kiedy wybierasz szablon, wybierasz sposób
                oglądania twojego zbioru na stronie.
            </li>
        </ul>
    </li>
    <li>
        <p>Po zakończeniu wypełnienia wszystkich pól, wciśnij przycisk 'Zachowaj' (2).</p>
        <figure class="img-polaroid">
            <img src="img/tmlookbook-add-collection-2.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>Zbiór został stworzony. Możesz go edytować poprzez wciskanie przycisku 'Edytuj' (3) albo przejść do
            następnego kroku i stworzyć lookbooki dla zbioru.</p>
        <figure class="img-polaroid">
            <img src="img/tmlookbook-add-collection-3.png" alt=""/>
        </figure>
    </li>
</ul>
<h5>Stworzenie i edytowanie lookbooków</h5>
<ul class="index-list">
    <li>
        <p>Po stworzeniu lookbooka, wciśnij przycisk 'Przeglądaj' (1) obok potrzebnego Ci zbioru.</p>
        <figure class="img-polaroid">
            <img src="img/tmlookbook-add-lookbook.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>W bloku, który się pojawi, wciśnij przycisk '+' (2).</p>
        <figure class="img-polaroid">
            <img src="img/tmlookbook-add-lookbook-2.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>Zobaczysz formularz zawierający następujące opcje:</p>
        <ul class="marked-list">
            <li><strong>Status</strong> - opcja status lookbook, która wyznacza czy będzie lookbook pokazywany.</li>
            <li><strong>Nazwa</strong> - nazwa looku.</li>
            <li><strong>Opis</strong> - opis looku.</li>
            <li><strong>Obrazek</strong> - glówny obrazek looku; tu możesz oznaczyć produkty i opisy.</li>
        </ul>
    </li>
    <li>
        <p>Po wypełnieniu wszystkich pół, wciśnij przycisk 'Zachowaj i Zostań' (3) aby kontynuować stworzenie miejsc
            aktywnych.</p>
        <figure class="img-polaroid">
            <img src="img/tmlookbook-add-lookbook-3.png" alt=""/>
        </figure>
    </li>
</ul>
<h5>Dodawanie i Edytowanie Miejsc Aktywnych</h5>
<p>Po zachowaniu lookbook, możesz dodać hotspoty.</p>
<ul class="index-list">
    <li>
        <p>Wciśnij obraz (w potrzebnym Ci punkcie) (1) w formularzu lookbook.</p>
        <figure class="img-polaroid">
            <img src="img/tmlookbook-add-hotspot.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>Zobaczysz formularz zawierający następujące ustawienia:</p>
        <ul class="marked-list">
            <li><strong>Typ</strong> - to jest typ punktu; posiada on dwie wartości: 'Produkt' i 'Treść'. Typ produktu
                pozwala wybrać produkt który będzie przymocowany do punktu, a typ treści pozwala dodawać treść (nazwę,
                opis, html) do punktu.
            </li>
            <li><strong>Produkt</strong> - wybieranie produktu dla punktu. Pojawia się jeżeli wybrano typ 'Produkt'.
            </li>
            <li><strong>Nazwa</strong> - nazwa która będzie przymocowana do punktu. Pole jest dostępne tylko w wypadku
                gdy wybrano typ 'Treść'.
            </li>
            <li><strong>Opis</strong> - opis albo kodowanie punktu. Dostępne tylko w wypadku gdy wybrano typ 'Treść'.
            </li>
        </ul>
    </li>
    <li>
        <p>Po wybraniu potrzebnych opcji, wciśnij przycisk 'Zachowaj' (2), aktywne miejsce będzie stworzone i pokazywane
            na stronie.</p>
        <figure class="img-polaroid">
            <img src="img/tmlookbook-add-hotspot-2.png" alt=""/>
        </figure>
    </li>
</ul>
<h5>Usunięcie miejsca aktywnego</h5>
<ul class="index-list">
    <li>
        <p>Aby usunąć punkt, zawiśnij nad nim (1).</p>
        <figure class="img-polaroid">
            <img src="img/tmlookbook-delete-hotspot.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>Zobaczysz przycisk z krzyżykiem; wciśnij go (2).</p>
        <figure class="img-polaroid">
            <img src="img/tmlookbook-delete-hotspot-2.png" alt=""/>
        </figure>
    </li>
    <li><p>Punkt został usunięty.</p></li>
</ul>
<h5>Zmiana pozycji miejsca aktywnego</h5>
<p>Aby zmienić pozycję miejsca aktywnego, przeciągnij i upuść go w potrzebnej pozycji.</p>
<h5>Jak przejść na stronę zbiorów?</h5>
<p>Przejdź na stronę głównego modułu i wciśnij przycisk (1); otworzy się strona zawierająca wszystkie zbiory. Możesz
    dodawać linki do lookbooków w dowolnym modułu który podtrzymuje niestandardową treść.</p>
<figure class="img-polaroid">
    <img src="img/tmlookbook-view-collections.png" alt=""/>
</figure>