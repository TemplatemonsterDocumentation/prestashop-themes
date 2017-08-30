<h3>TM-Mega Menu</h3>
<?php if ($project == 'eveprest') { ?>
    <div>
        <p style="margin-bottom: 0;">Dostępny dla:</p>
        <p style="margin-top: 0;" class="small text-secondary">Moda, Elektronika, Części Zapasowe, Meble</p>
    </div>
<?php } ?>
<p>Ten moduł jest sprojektowany aby umożliwić tworzenie rozbudowanych menu. Moduł umożliwia pokazywanie jednego
    elementu/artykułu (bez podmenu), elementu/artykułu menu w podmenu oraz elementu/artykułu menu z podmenu, używając
    blok wielowierszowy oraz wielokolumnowy. Ten moduł można wykorzystywać w różnych pozycjach, ale będzie pokazywał tą
    samą treść. Dostępne pozycje: Na górze (displayTop), Lewa Strona (displayLeftColumn) , Prawa Strona
    (displayRightColumn), Stopka (displayFooter).Możesz dodawać kategorie (z podkategoriami), kategorie CMS (z
    podkategoriami), wytwórców (jednego lub listę), dostawców ( jednego lub listę), sklepy (jeżeli stosowane jest
    zarządzanie kilkoma sklepami), linki prowadzące do każdego produktu, blok informacji o produkcie, linki specjalne
    (nieograniczona liczba), specjalne bloki HTML ( nieograniczona liczba) oraz banery. Dokładniejszą informację
    zobaczysz poniżej.</p>
<h4>TM-Mega Menu—Zakładki</h4>
<p>Zakładki TM-Mega Menu są elementami podstawowymi które stanowią część menu górnego.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs.png" alt=""/>
</figure>
<p>Aby stworzyć nową zakładkę, otwórz moduł TM-Mega Menu, znajdź i wsiśnij '+' w tablicy listy Zakładek.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add.png" alt=""/>
</figure>
<h6>Wypełnij wymagane pola w formularzu który się pojawi.</h6>
<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Wprowadź nazwę zakładki</dt>
            <dd>tytuł zakładki który jest obowiązkowy; należy go wypełnić dla domyślnego języka; jeżeli pola dodatkowych
                języków nie są wypełnione, zakładka otrzyma swoją nazwę, pobierając ją z języka domyślnego.
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Aktywna</dt>
            <dd>aktywna/nieaktywna zakładka.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Link</dt>
            <dd>link wyznaczony dla tej zakładki. Możesz wprowadzić specjalny link lub wybrać z opcji istniejących
                (kategorie, kategorie CMS). Jeżeli pozostawisz to pole puste, link tej zakładki pozostanie nieaktywny.
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Porządek sortowania</dt>
            <dd>porządek wyświetlanych zakładek.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Konkretna Klasa</dt>
            <dd>klasa która jest dodawana dla podkreślenia elementu (klasa CSS).</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Wprowadź identyfikator zakładki</dt>
            <dd>wypełnia się zależnie od wielojęzykowości.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>To jest Mega Menu</dt>
            <dd>to podmenu zakładek nazywa się Mega Menu. <strong>*</strong>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Stosuj proste menu</dt>
            <dd>to podmenu zakładek nazywa się menu proste. <strong>**</strong>
            </dd>
        </dl>
    </li>
</ul>
<p>
    <strong>*</strong>
    To jest Mega Menu. Jeżeli wybrano tą opcję, wyświetlany będzie formularz dla stworzenia menu rozbudowanego (Mega
    Menu). </p>
<p>
    <strong>**</strong>
    Stosuj menu proste. Jeżeli wybrano tą opcję, wyświetlany będzie formularz dla stworzenia menu prostego. To jest menu
    pokazujące wybraną treść w pojedyńczej kolumnie. Jeżeli w menu jest wbudowana treść, dodaje się nowa kolumna. </p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form.png" alt=""/>
</figure>
<p>Menu rozbudowane składa się z wierszy i kolumny w wierszach.</p>
<p><strong>Ten Wiersz jest częścią struktury Mega Menu.</strong> Zawiera kolumny menu. Istniejący wiersz można usunąć,
    wciskając odpowiedni przycisk. Wiersz będzie usunięty wraz z zawartą w nim treścią. Liczba wierszy nie jest
    ograniczona.</p>
<p><strong>Ta Kolumna jest częścią struktury Mega Menu,</strong> która jest umieszczona we wnętrzu wierszy. (Klasa)
    Szerokość kolumny nie może być mniej niż 2 i więcej niż 12. Dla poprawnego wyświetlania menu ogólna szerokość
    kolumny nie może być większą niż 12. Szerokość (klasa) jest kolumną typu ładowania początkowego (Bootstrap) i
    odpowiada tymże wartościom.</p>
<p>Aby stworzyć menu, wciśnij przycisk <strong>'Dodaj wiersz'</strong>.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-row.png" alt=""/>
</figure>
<p>W formularzu który się pojawi wciśnij przycisk <strong>'Dodaj Kolumnę'</strong>.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-row-col.png" alt=""/>
</figure>
<p>W oknie wyskakującym będziesz musiał określić klasę kolumny (od 2 do 12). Sama kolumna pojawia się obok miejsca w
    którym będziesz potrzebował ustawić wymagane nastawienia.</p>
<p>Tutaj możesz zmieniać klasę kolumny, klasę CSS oraz treść z dostarczonej listy. Możesz dodawać/usuwać treść, klikając
    dwukrotnie element, lub wyróźniając elementy i wciskając odpowiedni przycisk.</p>
<p>Blok można usunąć, wciskając przycisk <strong>'Usuń blok'</strong> w stopce bloku.</p>
<p>Usuwając wiersz, usuniesz również zawarte w nim kolumny.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-row-col-content.png" alt=""/>
</figure>
<p>Aby przesunąć treść dostępną w wybranych menu, kliknij dwukrotnie lub wyróźnij potrzebną Ci treść i wciśnij
    odpowiedni przycisk.</p>
<p>Informacja nieaktywnego menu jest zachowana w trakcie przełączania między typami menu i zawsze możesz zmieniać typ
    menu.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-simple.png" alt=""/>
</figure>
<h4>TM-Mega Menu HTML</h4>
<p>W tej sekcji wyjaśnimy jak stwarzać niestandardowy blok HTML w Mega Menu.</p>
<p>Ten moduł ma tablicę z zestawieniem wszystkich dostępnych bloków. Możesz również dodać nowy blok, wciskając przycisk
    '+' w górnej prawej części tablicy.</p>
<h6>Wypełnij wymagane pola w formularzu który się pojawi.</h6>
<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Wprowadź nazwę elementu HTML</dt>
            <dd>Nazwa bloku HTML—wypełnienie jest obowiązkowe dla języka domyślnego.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Konkretna Klasa</dt>
            <dd>klasa bloku CSS.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Treść HTML</dt>
            <dd>Treść HTML.</dd>
        </dl>
    </li>
</ul>
<p>Dodany blok pojawi się w liście bloków jak również w liście dostępnej treści w trakcie stworzenia bloków menu.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-html.png" alt=""/>
</figure>
<h4>TM-Mega Menu—Linki</h4>
<p>W tej sekcji pokażemy jak stwarzać niestandardowe linki w Mega Menu.</p>
<p>Ten moduł ma tablicę z zestawieniem wszystkich dostępnych linków. Możesz również dodać nowy link, wciskając przycisk
    '+' w górnej prawej części tablicy.</p>
<h6>Wypełnij wymagane pola w formularzu który się pojawi.</h6>
<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Wprowadź nazwę Linku</dt>
            <dd>Nazwa linku—wypełnienie jest obowiązkowe dla języka domyślnego.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Wprowadź URL Linku</dt>
            <dd>URL linku—wypełnienie jest obowiązkowe dla języka domyślnego.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Konkretna Klasa</dt>
            <dd>klasa bloku CSS.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Otwórz w nowym oknie</dt>
            <dd>otwórz link w nowym oknie.</dd>
        </dl>
    </li>
</ul>
<p>Dodany link pojawi się w liście linków jak również w liście dostępnej treści w trakcie stworzenia bloków menu.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-links.png" alt=""/>
</figure>
<h4>TM-Mega Menu—Banery</h4>
<p>W tej sekcji wyjaśnimy jak stwarzać banery w Mega Menu.</p>
<p>Ten moduł ma tablicę z zestawieniem wszystkich dostępnych banerów. Możesz również dodać nowy baner, wciskając
    przycisk '+' w górnej prawej części tablicy.</p>
<h6>Wypełnij wymagane pola w formularzu który się pojawi.</h6>
<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Wybierz plik</dt>
            <dd>wybierz plik—wypełnienie jest obowiązkowe dla języka domyślnego.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Wprowadź nazwę banera</dt>
            <dd>tytuł banera—wypełnienie jest obowiązkowe dla języka domyślnego.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Wprowadź URL Linku</dt>
            <dd>URL linku—wypełnienie jest obowiązkowe dla języka domyślnego.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Konkretna Klasa</dt>
            <dd>klasa bloku CSS.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Otwórz w nowym oknie</dt>
            <dd>otwórz link w nowym oknie.</dd>
        </dl>
    </li>
</ul>
<p>Dodany baner pojawi się w liście banerów jak również w liście dostępnej treści w trakcie stworzenia bloków menu.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-banners.png" alt=""/>
</figure>