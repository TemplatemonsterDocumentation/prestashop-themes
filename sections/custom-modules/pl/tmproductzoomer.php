<h3>TM-Powiększacz Produktu</h3>
<?php if ($project == 'eveprest') { ?>
    <div>
        <p style="margin-bottom: 0;">Dostępny dla:</p>
        <p style="margin-top: 0;" class="small text-secondary">Moda, Elektronika, Części Zapasowe, Meble, Sklep Jednego
            Produktu</p>
    </div>
<?php } ?>
<p>Ten moduł oferuje alternatywne rozwiązanie dla standardowego powiększenia obrazku produktu na stronie pojedyńczego
    produktu. Jest w pełni kompatybilnym ze standardową karuzelą miniatur oraz zmian atrybutów produktów. Pozwala Ci
    wybrać jakąś z trzech dostępnych opcji (okno/obiektyw/powiększanie wewnętrzne) dla powiększania obrazku, stosując
    zaawansowane ustawienia wtyczki. Ten moduł jest oparty o wtyczkę <a href="//igorlino.github.io/elevatezoom-plus/"
                                                                        target="_blank">Elevatezoom Plus</a>.</p>
<h4>Instalowanie i usuwanie</h4>
<p>Moduł instaluje się oraz usuwa się w taki sam sposób jak każdy inny moduł PrestaShop. Po zainstalowaniu modułu będzie
    automatycznie wyłączony standardowy efekt powiększenia obrazu produktu. Po usunięciu tego modułu standardowy efekt
    należy włączyć ponownie w trybie ręcznym (jeżeli jest to potrzebne) w sekcji <strong>Preferencje -> Produkty ->
        Włącz JqZoom zamiast Fancybox na stronie produktu</strong>.</p>
<h4>Konfiguracja modułu</h4>
<p>Po instalowaniu modułu możesz go skonfigurować na stronie konfiguracji modułu.</p>
<p>Domyślnie, na stronie konfiguracji wyświetlany będzie <strong>uproszczony</strong> zestaw opcji.</p>
<figure class="img-polaroid">
    <img src="img/tmproductzoomer-1.png" alt=""/>
</figure>
<ul class="index-list">
    <li><strong>Tryb Na Zywo</strong> - moduł jest włączony/wyłączony.</li>
    <li><strong>Fancybox</strong> - wybierasz czy pokazywać powiększony obrazek w Fancybox po kliknięciu.</li>
    <li><strong>Zmień obrazek przy zawisaniu</strong> - przełącz główny obraz przy zawisaniu miniatury (domyślnie jest
        ustawiona przełączać się po kliknięciu).
    </li>
    <li><strong>Czułość (Responsywność)</strong> - pozwala stosować funkcjonalność adaptywną dla wyświetlania pluginów
        na urządzeniach mobilnych.
    </li>
    <li><strong>Typ Powiększenia</strong> - wybierz typ trybu pokazywania powiększonego obrazu
        <ul>
            <li><strong>okno</strong> - powiększony obraz pojawia się obok głównego obrazu w jednej z dostępnych (16)
                pozycji
            </li>
            <li><strong>obiektyw</strong> - obraz jest powiększany w pojemniku obiektywu (nad nim)</li>
            <li><strong>powiększanie wewnętrzne</strong> - obraz jest powiększany we wnętrzu pojemnika głównego obrazu,
                pokrywając go w całości.
            </li>
        </ul>
        <div class="alert alert-info"><span>Urządzenia mobilne (&lt; 768) mają ustawioną natychmiastową aktywaję trybu "obiektyw".</span>
        </div>
    </li>
    <li><strong>Ustawienia Rozszerzone</strong> - włącza ustawienia zaawansowane dla doświadczonych użytkowników. Możesz
        zobaczyć link prowadzący do oficjalnej <a href="//igorlino.github.io/elevatezoom-plus/api.htm" target="_blank">
            dokładniejszej dokumentacji</a> znajdujący się obok.
    </li>
</ul>
<h6><strong>Rozszerzona</strong> konfiguracja modułu</h6>
<ul class="index-list">
    <li><strong>Powiększenia Kółkiem</strong> - współczynnik zbliżenia zmienia się poprzez przewijanie za pomocą kółka
        myszy (dostępny dla wszystkich typów).
    </li>
    <li><strong>Kursor</strong> - typ kursoru przy zawisaniu nad powiększonym obrazkiem. Dostępne są następujące opcje:
        domyślny, kursor, celownik (dostępne dla wszystkich typów).
    </li>
    <li><strong>Ustawienia Powiększenia</strong> - dostępne dla wszystkich typów, jeżeli włączone jest 'Powiększenie
        Kółkiem'.
        <figure class="img-polaroid"><img src="img/tmproductzoomer-2.png" alt=""/></figure>
        <ul class="marked-list">
            <li><strong>Poziom Powiększania</strong> - poziom powiększania początkowego zawisania</li>
            <li><strong>Minimalny Poziom Powiększania</strong> - minimalny poziom powiększania</li>
            <li><strong>Maksymalny Poziom Powiększania</strong> - maksymalny poziom powiększania</li>
            <li><strong>Inkrementacja Powiększenia Kółkiem</strong> - przyrost powiększenia za pomocą kółka</li>
        </ul>
    </li>
    <li><strong>Łagodzenie</strong> - efekt wyglądu powiększonego obrazu (dostępny dla wszystkich typów).
        <figure class="img-polaroid"><img src="img/tmproductzoomer-3.png" alt=""/></figure>
        <ul class="marked-list">
            <li><strong>Łagodzenie Powiększenia</strong> - włączenie/wyłączenie efektu</li>
            <li><strong>Kwota Łagodzenia</strong> - wartość opóźnienia efektu</li>
        </ul>
    </li>
    <li><strong>Przenikanie Obrazu</strong> - rozmycie głównego obrazu poza obszarem zawisania (poza obiektywem) -
        dostępny dla opcji okno oraz obiektyw.
    </li>
    <li><strong>Ustawienia okna z powiększonym obrazem</strong> - dostępny dla opcji okno.
        <figure class="img-polaroid"><img src="img/tmproductzoomer-4.png" alt=""/></figure>
        <ul class="marked-list">
            <li><strong>Szerokość Okna Powiększenia</strong> - szerokość okna w pikselach (px)</li>
            <li><strong>Wysokość Okna Powiększenia</strong> - wysokość okna w pikselach (px)</li>
            <li><strong>Okno Powiększenia Odstęp X</strong> - odstęp okna na osi X</li>
            <li><strong>Okno Powiększenia Odstęp Y</strong> - odstęp okna na osi Y</li>
            <li><strong>Pozycja Okna Powiększenia</strong> - wybieranie pozycji okna w stosunku do głównego obrazu
                (dostępne pozycje pokazane są na obrazku poniżej tego pola)
            </li>
            <li><strong>Kolor Tła Okna Powiększenia</strong> - obraz tła okna (tylko dla przejrzystych obrazów)</li>
            <li><strong>Wzmocnienie Okna Powiększenia</strong> - efekt pojawienia spowolnienia okna</li>
            <li><strong>Zanikanie Okna Powiększenia</strong> - efekt zniknięcia spowolnienia okna</li>
            <li><strong>Rozmiar Obwódki </strong>- obwódka okna, szerokość w pikselach</li>
            <li><strong>Kolor Obwódki</strong> - kolor obwódki okna</li>
        </ul>
    </li>
    <li><strong>Obiektyw Powiększenia</strong> - obiektyw powiększenia (dostępny dla opcji okno, obiektyw).
        <figure class="img-polaroid"><img src="img/tmproductzoomer-5.png" alt=""/></figure>
        <ul class="marked-list">
            <li><strong>Obiektyw Powiększenia</strong> - włącz/wyłącz</li>
            <li><strong>Kształt Obiektywu</strong> - typ obiektywu. Może on mieć następujące wartości: okrągły lub
                prostokątny
            </li>
            <li><strong>Kolor Obiektywu</strong> - kolor tła wewnętrznego obiektywu</li>
            <li><strong>Nieprzejrzystość Obiektywu</strong> - Nieprzejrzystość wewnętrznego tła obiektywu</li>
            <li><strong>Rozmiar Obiektywu</strong> - rozmiar obiektywu w pikselach</li>
            <li><strong>Wzmocnienie Obiektywu</strong> - szybkość efektu pojawienia obiektywu</li>
            <li><strong>Zanikanie Obiektywu</strong> - szybkość efektu zniknięcia obiektywu</li>
            <li><strong>Obwódka Obiektywu</strong> - szerokość obwódki obiektywu</li>
            <li><strong>Kolor Obwódki Obiektywu</strong> - kolor obwódki obiektywu</li>
            <li><strong>Powsztrzymanie Powiększenia Obiektywu</strong> - ograniczenie nadmiaru powiększenia na zewnątrz
                pojemnika głównego obrazku
            </li>
        </ul>
    </li>
    <li><strong>Odcień</strong> - efekt cienia na obszarze poza obiektywem (dostępny dla opcji okno).
        <figure class="img-polaroid"><img src="img/tmproductzoomer-6.png" alt=""/></figure>
        <ul class="marked-list">
            <li><strong>Odcień</strong> - włącz/wyłącz efekt</li>
            <li><strong>Kolor Odcienia</strong> - tło zewnętrznego obszaru obiektywu</li>
            <li><strong>Nieprzejrzystość Odcienia</strong> - nieprzejrzystość zewnętrznego obszaru obiektywu</li>
            <li><strong>Wzmocnienie Odcienia</strong> - szybkość efektu pojawienia</li>
            <li><strong>Zanikanie Odcienia</strong> - szybkość efektu zniknięcia</li>
        </ul>
    </li>
</ul>
<div class="alert alert-info">Jezeli przełączysz typ powiększenia, zestaw opcji zaawansowanych zostanie zmieniony
    odpowiednio, aby pokazać tylko dostępne parametry dla wybranego typu.
</div>
<div class="alert alert-warning">Należy zachować ostrożność, edytując ustawienia rozszerzone. Jeżeli ustawienia ustalone
    są błędnie, efekt w wyniku może być brzydki.
</div>