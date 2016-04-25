<h3>TM Product Zoomer</h3>

<p>Ten moduł jest alternatywą dla standardowego powiększenia zdjęcia produktu na stronie pojedynczego produktu. Jest w pełni kompatybilny z karuzelą standardowych miniatur dodatkowych produktów oraz zmianami atrybutów produktów. Zezwala na wybieranie spośród trzech dostępnych opcji (okno/obiektyw/wewnętrznie) dla powiększenia obrazu z ustawieniami zaawansowanego plugin'u. Ten moduł jest oparty na plugin'ie <a href="//igorlino.github.io/elevatezoom-plus/" target="_blank">Elevatezoom Plus</a>.</p>

<h5>Instalacja oraz usuwanie</h5>
<p>Instalacja oraz usuwanie modułu są takie same jak każdego innego modułu PrestaShop. Po zakończeniu instalacji modułu standardowy efekt powiększenia produktu zostanie automatycznie wyłączony. Po usunięciu modułu należy manualnie włączyć z powrotem efekt standardowy (w razie potrzeby) w sekcji <strong>Preferencje-> Produkty-> Włącz JqZoom zamiast Fancybox na stronie produktu (Preferences->Products->Enable JqZoom instead of Fancybox on the product page)</strong> .</p>
<h5>Konfiguracja produktu</h5>
<p>Po zakończeniu instalacji modułu można skonfigurować go na stronie konfiguracji modułu.</p>
<p>Domyślnie strona konfiguracji pokazuje <strong>uproszczony</strong> zestaw opcji.</p>
<figure class="img-polaroid">
    <img src="img/tmproductzoomer-1.png" alt=""/>
</figure>
<ol class="index-list">
    <li><strong>Tryb live</strong> - moduł jest włączony/wyłączony </li>
    <li><strong>Fancybox</strong> - whether to show the enlarged image in the Fancybox on click.</li>
    <li><strong>Zmiana obrazka po najechaniu kursorem</strong> - przełączenie głównego obrazka po najechaniu kursorem na miniaturkę (domyślnie jest ustawiony na włączanie przez kliknięcie)</li>
    <li><strong>Reagujący</strong> - pozwala na wykorzystanie funkcjonalności adaptacyjnej dla plugin'a wyświetlania na urządzeniach mobilnych</li>
    <li><strong>Typ Powiększenia</strong> - należy wybrać rodzaj trybu wyświetlania powiększonego obrazka
        <ul>
            <li><strong>okno</strong> - powiększony obrazek pojawia się obok głównego w jednej z dostępnych pozycji (16)</li>
            <li><strong>obiektyw</strong> - obrazek jest powiększony w kontenerze obiektywu, nad głównym obrazkiem</li>
            <li><strong>wewnętrznie</strong> - obrazek jest powiększony wewnątrz kontenera głównego obrazka, całkowicie go pokrywając</li>
        </ul>
        <div class="alert alert-info">Tryb "obiektyw" w urządzeniach mobilnych (&lt; 768) jest aktywowany natychmiastowo</div>
    </li>
    <li><strong>Rozszerzone ustawienia</strong> - umożliwia zaawansowane ustawienia dla doświadczonych użytkowników. Można zobaczyć łącze do oficjalnej dokumentacji <a href="//igorlino.github.io/elevatezoom-plus/api.htm" target="_blank"> by otrzymać wiecej informacji</a>, tuż obok nich.</li>
</ol>
<p><strong>Rozszerzona</strong> konfiguracja modułu</p>
<ol class="index-list">
    <li><strong>Powiększenie przez Przewijanie (Scroll Zoom)</strong> - proporcja powiększenia zmienia się podczas przewijania kółkiem myszki.
        (dostępne dla wszystkich typów)</li>
    <li><strong>Kursor</strong> - typ kursora na powiększonym obrazku po najechaniu. Można wyróżnić następujące opcje: domyślny, kursor, celownik. (dostępne dla wszystkich typów)</li>
    <li><strong>ustawienia powiększenia</strong> - (dostępne dla wszystkich typów, jeżeli "Powiększenie przez Przewijanie" jest włączone)
        <figure class="img-polaroid"><img src="img/tmproductzoomer-2.png" alt="" /></figure>
        <ul>
            <li>Zoom Level - poziom powiększenia na początkowym najechaniu kursorem</li>
            <li>Min Zoom Level - minimalny poziom powiększenia</li>
            <li>Max Zoom Level - maksymalny poziom powiększenia</li>
            <li>Scroll Zoom Increment - przysporzenie na przewijaniu powiększenia</li>
        </ul>
    </li>
    <li><strong>Easing</strong> - efekt wyglądu powiększonego obrazka (dostępne dla wszystkich typów)
        <figure class="img-polaroid"><img src="img/tmproductzoomer-3.png" alt="" /></figure>
        <ul>
            <li>Zoom Easing - włączony/wyłączony efekt</li>
            <li>Easing Amount - wartość opóźnienia efektu</li>
        </ul>
    </li>
    <li><strong>Image Crossfade</strong> - rozmycie głównego obrazka poza obszarem najechania kursorem (obiektyw).
        (dostępne dla okna, obiektywu)</li>
    <li><strong>ustawienia okna powiększonego obrazka</strong> - (dostępne dla okna)
        <figure class="img-polaroid"><img src="img/tmproductzoomer-4.png" alt="" /></figure>
        <ul>
            <li>Zoom Window Width - szerokość okna w pikselach</li>
            <li>Zoom Window Height - wysokość okna w pikselach</li>
            <li>Zoom Window Offset X - przesunięcie okna na osi X</li>
            <li>Zoom Window Offset Y - przesunięcie okna na osi Y</li>
            <li>Zoom Window Position - wybór położenia okna ze względu głównego obrazka (dostępne pozycje są przedstawione na poniższym rysunku)</li>
            <li>Zoom Window Bg Color - obrazek tła okna (wyłącznie dla przezroczystych obrazków)</li>
            <li>Zoom Window Fade In - efekt spowalniania pojawienia się okna</li>
            <li>Zoom Window Fade Out - efekt spowalniania zniknięcia okna</li>
            <li>Border Size - szerokość obramowania okna w pikselach</li>
            <li>Border Color - kolor obramowania okna</li>
        </ul>
    </li>
    <li><strong>Zoom Lens</strong> - powiększenie przez obiektyw (dostępne dla okna, obiektywu)
        <figure class="img-polaroid"><img src="img/tmproductzoomer-5.png" alt="" /></figure>
        <ul>
            <li>Zoom Lens - włączony/wyłączony efekt</li>
            <li>Lens Shape - typ obiektywu. Może przyjmować następujące wartości: okrągły/zaokrąglony lub kwadratowy/prostokątny</li>
            <li>Lens Color - kolor tła wewnętrznego obiektywu</li>
            <li>Lens Opacity - przezroczystość tła wewnętrznego obiektywu</li>
            <li>Lens Size - rozmiar obiektywu w pikselach</li>
            <li>Lens Fade In - szybkość efektu pojawienia się obiektywu</li>
            <li>Lens Fade Out - szybkość efektu zniknięcia obiektywu</li>
            <li>Lens Border - szerokość obramowania obiektywu</li>
            <li>Lens Border Color - kolor obramowania obiektywu</li>
            <li>Contain Lens Zoom - ograniczenie przepełnienia obiektywu na zewnątrz kontenera głównego obrazu</li>
        </ul>
    </li>
    <li><strong>Odcień (Tint)</strong> - efekt cienia na obszarze poza obiektywem (dostępne dla okna)
        <figure class="img-polaroid"><img src="img/tmproductzoomer-6.png" alt="" /></figure>
        <ul>
            <li>Tint - włączony/wyłączony efekt</li>
            <li>Tint Color - tło zewnętrznego obszaru obiektywu</li>
            <li>Tint Opacity - przezroczystość zewnętrznego obszaru obiektywu</li>
            <li>Tint Fade In - szybkość efektu pojawienia się obiektywu</li>
            <li>Tint Fade Out - szybkość efektu zniknięcia obiektywu</li>
        </ul>
    </li>
</ol>

<div class="alert alert-info">Jeżeli przełączyć typ powiększenia, zaawansowane opcje ustawienia również ulegną zmianie, aby wyświetlić tylko dostępne parametry dla wybranego typu.</div>
<div class="alert alert-warning">Należy zachować ostrożność podczas edycji rozszerzonych ustawień. Jeżeli ustawienia zostały ustawione niepoprawnie, efekt może być brzydki.</div>