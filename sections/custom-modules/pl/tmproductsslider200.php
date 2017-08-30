<h3>TM-Slajder Produktów 2.0.0</h3>
<?php if ($project == 'eveprest') { ?>
    <div>
        <p style="margin-bottom: 0;">Dostępny dla:</p>
        <p style="margin-top: 0;" class="small text-secondary">Elektronika, Meble</p>
    </div>
<?php } ?>
<h4>Wstęp</h4>
<p>Ten moduł sługuje dla stworzenia galerii, w oparciu o dane produktu; wyświetla je w kształcie slajdów na witrynie
    internetowej po stronie użytkownika. Moduł oferuje 4 metody wyświetlania galerii z indywidualnymi ustawieniami oraz
    wyglądem. Każda metoda ma wstępnie ustaloną funkcjonalność. Konfiguracja zaawansowana jest również dostępna. Ten
    moduł może wyświetlać nieograniczoną liczbę produktów i zawiera rozmaitą informację.</p>
<h4>Instalowanie i usuwanie niniejszego modułu</h4>
<p class="alert alert-warning">
    Jeżeli masz już wersję 1.n niniejszego modułu zainstalowaną na swoim silniku programowym Prestashop, to nie zalecamy
    aktualizować go bieżącą wersją. Najpierw warto usunąć starą wersję modułu, żeby wszystko pracowało bez blędów. </p>
<p>Moduł instaluje się oraz usuwa się w taki sam sposób jak każdy inny domyślny moduł PrestaShop.</p>
<p class="alert alert-info">
    <span>Po usunięciu lub ponownej instalacji modułu, wszystkie ustawienia oraz filtry będą usunięte.</span>
</p>
<h4>Dodawanie/usuwanie/edytowanie slajdu</h4>
<h5>Dodawanie slajdu</h5>
<p>Aby dodać produkt do galerii, przejdź do potrzebnego Ci produktu w sekcji <strong>Katalog -> Produkty</strong>.
    Następnie wciśnij przycisk <strong>'Edytuj'</strong> (1) obok potrzebnego Ci produktu.</p>
<figure class="img-polaroid"><img src="img/tmproductsslider2-1.png" alt=""/></figure>
<p>Pojawi się okno dla edytowania informacji o produkcie; przejdź w nim do zakładki <strong>TM-Slajder
        Produktów</strong> (2) i oznacz (3) że chciałbyś aby ten produkt był wyświetlany w slajderze.</p>
<figure class="img-polaroid"><img src="img/tmproductsslider2-2.png" alt=""/></figure>
<p>Zachowaj zmiany, wciskając albo przycisk <strong>'Zachowaj i zostań'</strong> (4) albo przycisk
    <strong>'Zachowaj'</strong> (5).</p>
<h5>Usunięcie slajdu</h5>
<p>Są dwa sposoby na usunięcie slajdu.</p>
<ul class="index-list">
    <li>
        <p>Aby usunąć produkt z galerii, przejdź do potrzebnego Ci produktu w sekcji <strong>Katalog -&gt;
                Produkty</strong>. Następnie wciśnij przycisk <strong>'Edytuj'</strong> (1) obok potrzebnego Ci
            produktu.</p>
        <figure class="img-polaroid"><img src="img/tmproductsslider2-1.png" alt=""/></figure>
        <p>Pojawi się okno dla edytowania informacji o produkcie; przejdź w nim do zakładki <strong>TM-Slajder
                Produktów</strong> (2) i usuń ptaszkę, oznaczając tym samym (3) że nie chciałbyś aby ten produkt był
            wyświetlany w slajderze.</p>
        <figure class="img-polaroid"><img src="img/tmproductsslider2-3.png" alt=""/></figure>
        <p>Zachowaj zmiany, wciskając albo przycisk <strong>'Zachowaj i zostań'</strong> (4) albo przycisk <strong>'Zachowaj'</strong>
            (5). </p>
    </li>
    <li>
        <p>Jest też inny sposób, mianowicie: przejdź do strony konfiguracji modułu, znajdź potrzebny Ci produkt w
            tablicy <strong>Lista Slajdów</strong> i wciśnij przycisk <strong>Usuń</strong> (1) znajdujacy się obok
            niego.</p>
        <figure class="img-polaroid"><img src="img/tmproductsslider2-4.png" alt=""/></figure>
        <p>Następnie potwierdź operację usunięcia.</p>
    </li>
</ul>
<h5>Porządek wyświetlania slajdów</h5>
<p>Domyślnie slajdy wyświetlane są w tym porządku w którym były dodawane. Aby zmienić porządek wyświetlania, przejdź do
    strony konfiguracji modułu i przeciągnij slajd w potrzebne miejsce w tablicy <strong>Lista Slajdów</strong>.</p>
<figure class="img-polaroid"><img src="img/tmproductsslider2-5.png" alt=""/></figure>
<h5>Wyłączanie slajdów</h5>
<p>Co więcej, możesz tymczasowo wyłączyć slajd (kiedy skończyły się zapasy produktu w magazynie lub z jakiejkolwiek
    innej przyczyny), nie usuwając go kompletnie. Aby to zrobić, przejdź do strony konfiguracji modułu i kliknij ptaszka
    obok potrzebnego Ci produktu (jeżeli jest obecnie aktywny) lub krzyżyki (jeżeli nie jest obecnie aktywny) w tablicy
    <strong>Lista Slajdów</strong>: </p>
<figure class="img-polaroid"><img src="img/tmproductsslider2-6.png" alt=""/></figure>
<h4>Typy galerii oraz rekomendowane ustawienia</h4>
<p>Są cztery typy wyświetlania galerii (standardowy, lista, siatka, cała szerokość). Każdy z wyżej wymienionych typów
    może być ustawiony nezależnie od innych i możesz przełączać się między nimi w razie potrzeby.</p>
<p>Domyślnie, galeria stosuje następujące typy zdjęć produktów: large_default (domyślny duży)- dla strony głównej;
    medium_default (domyślny średni) - dla miniatur.</p>
<h5>Standardowy</h5>
<p>Ustawienia zalecane:</p>
<ul class="marked-list">
    <li>Rozmiar obrazku (px/pikseli) - 435*435</li>
    <li>Szerokość Galerii - 1170px</li>
    <li>Wysokość Galerii - 580px</li>
    <li>Ustawienia Rozszerzone - wyłączone</li>
</ul>
<figure class="img-polaroid"><img src="img/tmproductsslider2-7.png" alt=""/></figure>
<h5>Lista</h5>
<p>Ustawienia zalecane:</p>
<ul class="marked-list">
    <li>Rozmiar obrazku (px/pikseli) - 435*520</li>
    <li>Szerokość Galerii - 1170px</li>
    <li>Wysokość Galerii - 520px</li>
    <li>Ustawienia Rozszerzone - wyłączone</li>
</ul>
<figure class="img-polaroid"><img src="img/tmproductsslider2-8.png" alt=""/></figure>
<h5>Siatka</h5>
<p>Ustawienia zalecane:</p>
<ul class="marked-list">
    <li>Rozmiar obrazku (px/pikseli) - 585*750</li>
    <li>Szerokość Galerii - 1170px</li>
    <li>Wysokość Galerii - 750px</li>
    <li>Ustawienia Rozszerzone - wyłączone</li>
</ul>
<figure class="img-polaroid"><img src="img/tmproductsslider2-9.png" alt=""/></figure>
<h5>Cała Szerokość</h5>
<p>Ustawienia zalecane:</p>
<ul class="marked-list">
    <li>Rozmiar obrazku (px/pikseli) - 435*435</li>
    <li>Szerokość Galerii - 1920px</li>
    <li>Wysokość Galerii - 450px</li>
    <li>Ustawienia Rozszerzone - wyłączone</li>
</ul>
<figure class="img-polaroid"><img src="img/tmproductsslider2-10.png" alt=""/></figure>
<h4>Ustawienia Zaawansowane</h4>
<p>Aby otrzymać dostęp do ustawień zaawansowanych, przesuń slajder <strong>Ustawienia Rozszerzone</strong> w pozycję
    Tak/Yes.</p>
<figure class="img-polaroid"><img src="img/tmproductsslider2-11.png" alt=""/></figure>
<ul class="marked-list">
    <li><strong>Typ Galerii</strong> - typ aktywnej galerii</li>
    <li><strong>Szerokość Galerii</strong> - szerokość aktywnej galerii</li>
    <li><strong>Wysokość Galerii</strong> - wysokość aktywnej galerii</li>
    <li><strong>Ustawienia Rozszerzone</strong> - ustawienia zaawansowane; Jeżeli opcja jest przesunięta w pozycję 'Nie'
        ('No'), wszystkie ustawienia zaawansowane będą zachowane i będziesz mógł je przywrócić w każdej chwili.
        Jednocześnie, po stronie użytkownika będą wyświetlane według ustawień domyślnych.
    </li>
    <li><strong>Czas Trwania Slajderu</strong> - szybkość zmiany slajdów</li>
    <li><strong>Stosuj Nawigację</strong> - pokazywanie przycisków Poprzed/Nast dla przełączania między slajdami</li>
    <li><strong>Stosuj Miniatury</strong> - wykorzystywanie miniatur z informacją dodatkową o slajdach jako element dla
        przełączania bieżącego slajdu
    </li>
    <li><strong>Zastosuj Numerację Stron</strong> - wykorzystanie numeracji jako elementu dla przełączania bieżącego
        slajdu
    </li>
    <li><strong>Zastosuj Galerię Obrazów</strong> - stosowanie dodatkowych obrazków produktów we wnętrzu slajdów</li>
    <li><strong>Uaktywnij autoodtwarzanie</strong> - włącz automatyczne przełączanie slajdów</li>
    <li><strong>Interwał Slajdera</strong> - okres czasu, po którym slajd przełączy się do następnego (dostępny tylko w
        wypadku jeżeli aktywny jest tryb 'Uaktywnij Autoodtwarzanie')
    </li>
    <li><strong>Uaktywnij Pętlę</strong> - włącz ponowne odtwarzanie slajdów od początku po tym, jak były pokazane
        wszystkie slajdy
    </li>
</ul>
<p class="alert alert-info">
    <span>Po przełączaniu galerii, będzie zachowana całość nastawienia poprzednio wykorzystywanej galerii.</span>
</p>
<p class="alert alert-info">
    <span>Po wyłączaniu/włączaniu ustawień zaawansowanych, ustawienia będą zachowane i będziesz mógł wrócić do nich w każdej chwili.</span>
</p>
<h4>Często Zadawane Pytania (FAQ)</h4>
<div class="responsive-tabs" data-type="accordion">
    <ul class="resp-tabs-list">
        <li>Dlaczego galeria nie wyświetla się po stronie użytkownika?</li>
        <li>Zmieniam ustawienia zaawansowane galerii, nie mogę jednak zobaczyć zmiany po stronie użytkownika. Co można
            zrobić?
        </li>
    </ul>
    <div class="resp-tabs-container">
        <div>Upewnij się, że galeria zawiera slajdy i że przynajmniej jeden z nich jest aktywny.</div>
        <div>Upewnij się że zmieniłeś ustawienia aktywnej galerii.</div>
    </div>
</div>