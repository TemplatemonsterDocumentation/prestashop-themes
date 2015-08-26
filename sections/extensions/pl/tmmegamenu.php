<h3>TM Mega Menu</h3>

<p>Ten moduł jest przeznaczony do tworzenia złożonych menu. Moduł zapewnia możliwość pokazywania jednego przedmiotu (bez
    dodatkowych menu), menu z dodatkowymi pod-menu i menu z pod-menu w postaci wielorzędowych lub wielokolumnowych
    bloków. Moduł można zastosować w wielu pozycjach, lecz będzie wyświetlał on tą samą zawartość. Dostępne pozycje:
    góra (displayTop), lewa strona (displayLeftColumn), prawa (displayRightColumn), stopka (displayFooter). Można
    dodawać kategorie (z podkategoriami), kategorie CMS (z podkategoriami), wytwórców (jednego lub listę), dostawców
    (jednego lub listę), sklepy (jeśli jest ich więcej), linki do dowolnego produktu, panel informacji o produkcie,
    nieograniczone liczba dodatkowych linków, dodatkowe bloki HTML i banery. Więcej detali poniżej.</p>

<h4>TM Mega Menu Taby</h4>

<p>Zakładki TM Mega Menu to podstawowe komponenty, które są częścią górnego menu.</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs.png" alt="">
</figure>

<p>By stworzyć nową zakładkę otwórz moduł TM Mega Menu i kliknij + w tabeli Tabs.</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add.png" alt="">
</figure>

<p>Wypełnij wymagane pola w pojawiającym się blankiecie.</p>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt> Enter tab name</dt>
            <dd>tytuł zakładki, musi być wypełniony w ustawionym języku bazowym, jeśli dodatkowe pola języków są
                niewypełnione, zakładka dostaje nazwę w języku bazowym. To pole jest obowiązkowe.
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt> Active</dt>
            <dd>aktywna/nieaktywna zakładka.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt> Link</dt>
            <dd>link, który jest wyznaczany tej zakładce. Możesz wprowadzić swój link albo wybrać z już istniejących
                opcji (kategorie, kategorie CMS). Jeśli zostawisz to pole puste to link do zakładki będzie nieaktywny.
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt> Sort order</dt>
            <dd>kolejność wyświetlania zakładek.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt> Specific Class</dt>
            <dd>klasyfikacja, która jest dodawana by podkreślić przedmiot (klasyfikacja CSS).</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt> Enter tab badge</dt>
            <dd>jest wypełniany w zależności od ilości języków.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt> It is Mega Menu</dt>
            <dd>jeżeli pod-menu zakładki jest Mega Menu.
                <strong>*</strong>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt> Use simple menu</dt>
            <dd>jeżeli pod-menu jest prostym menu.
                <strong>**</strong>
            </dd>
        </dl>
    </li>
</ul>
<p>
    <strong>*</strong>
    It is Mega Menu. Jeśli ta opcja została wybrana pojawi się blankiet tworzący złożone menu (Mega Menu).
</p>

<p>
    <strong>**</strong>
    Use simple menu. Jeśli ta opcja jest włączona, pojawi się blankiet do stworzenia prostego menu. Jest to menu, które
    pokazuje wybraną treść w pojedynczej kolumnie. Jeśli w treści jest wbudowana jakaś inna treść, to nowa kolumna jest
    tworzona.
</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form.png" alt="">
</figure>

<p>Złożone menu składa się z rzędów i kolumn w rzędach.</p>

<p>Rząd jest częścią struktury Mega Menu. Zawiera w sobie kolumny menu. Istniejący rząd może zostać usunięty poprzez
    kliknięcie na odpowiedni przycisk. Rząd zostanie usunięty wraz z zawartością. Ilość rzędów jest nieograniczona. </p>

<p>Kolumna jest częścią struktury Mega Menu, która jest umieszczona w rzędach. (Klasa) Szerokość kolumny nie może być
    mniejsza niż 2 i większa niż 12. By menu wyświetlało się poprawnie całkowita szerokość kolumny nie może przekroczyć
    12. Szerokość (klasa) w typie kolumny Bootstrap, odnosi się do tych samych wartości. </p>

<p>By utworzyć menu, kliknij na przycisk Add row</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-row.png" alt="">
</figure>

<p>W pojawiającym się blankiecie, kliknij na przycisk Add column </p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-row-col.png" alt="">
</figure>

<p>Pojawia się okienko, w którym musisz podać ilość kolumn (od 2 do 12). Same kolumny pojawiają się obok, gdzie musisz
    dokonać odpowiednich ustawień, </p>

<p>możesz tu zmienić ilość kolumn, dodać klasę CSS, a także wymaganą treść z listy. Możesz dodać/usunąć treść klikając
    dwukrotnie na wymaganą opcję i klikając na odpowiedni przycisk. </p>

<p>Blok może zostać usunięty poprzez kliknięcie przycisku Remove block w stopce bloku. </p>

<p>W trakcie usuwania rzędu, wchodzące w jego skład kolumny też zostają usunięte.</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-row-col-content.png" alt=""/>
</figure>

<p>By przemieścić treść dostępną w wybranym menu, kliknij dwukrotnie lub podświetl wybraną treść i naciśnij odpowiedni
    przycisk.</p>


<p>Informacje z nieaktywnych menu są zapisywane podczas przełączania między typami menu, zawsze możesz zmienić typ
    menu.</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-simple.png" alt="">
</figure>

<h4>TM Mega Menu HTML</h4>

<p>W tej sekcji wyjaśnimy jak utworzyć własny blok HTML w Mega Menu.</p>

<p>Moduł zawiera tabelę z wszystkimi dostępnymi blokami, do której możesz dodać nowy blok klikając na przycisk + w
    górnym prawym rogu tabeli. </p>

<p>W blankiecie, który się pojawi, uzupełnij wymagane pola.</p>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Enter HTML item name</dt>
            <dd>nazwa bloku HTML jest wymagana dla podstawowego języka.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Specific class</dt>
            <dd>klasa CSS bloku.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>HTML content</dt>
            <dd>zawartość HTML.</dd>
        </dl>
    </li>
</ul>
<p>Dodany blok pojawi się na liście bloków, jak również na liście dostępnej treści podczas tworzenia bloków.</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-html.png" alt="">
</figure>

<h4>TM Mega Menu Links</h4>

<p>W tej sekcji pokażemy jak tworzyć własne linki w Mega Menu.</p>

<p>Moduł zawiera tabelę z wszystkimi dostępnymi linkami, do których możesz dodać nowe linki, klikając przycisk + w
    górnym prawym rogu tabeli.</p>

<p>W blankiecie, który się pojawi, uzupełnij wymagane pola.</p>
<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Enter Link name</dt>
            <dd>nazwa linku, jest wymagana dla podstawowego języka.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Enter Link URL</dt>
            <dd>adres URL, jest wymagany dla podstawowego języka.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Specific class</dt>
            <dd>klasa bloku CSS.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Open in new window</dt>
            <dd>otwórz link w nowym oknie.</dd>
        </dl>
    </li>
</ul>
<p>Dodany link pojawi się na liście linków, jak również na liście dostępnej treści podczas tworzenia bloków menu.</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-links.png" alt="">
</figure>

<h4>Banery TM Mega Menu</h4>

<p>W tej sekcji wyjaśnimy jak tworzyć banery w Mega Menu.</p>

<p>Moduł zawiera tabelę z wszystkimi dostępnymi banerami, do której można dodać nowy baner, klikając przycisk + w prawym
    górnym rogu tabeli.</p>

<p>W blankiecie, który się pojawi, uzupełnij wymagane pola.</p>
<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Select a file</dt>
            <dd>wybierz plik, jest wymagane dla podstawowego języka.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Enter Banner name</dt>
            <dd>nazwa banera, jest wymagana dla podstawowego języka.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Enter Link URL</dt>
            <dd>adres URL, jest wymagany dla podstawowego języka.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Specific class</dt>
            <dd>klasa CSS bloku.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Open in new window</dt>
            <dd>otwórz link w nowym oknie.</dd>
        </dl>
    </li>
</ul>
<p>Dodany baner pojawi się na liście banerów, jak również na liście dostępnych treści podczas tworzenia bloków menu.</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-banners.png" alt="">
</figure>