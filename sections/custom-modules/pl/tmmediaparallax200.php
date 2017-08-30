<h3>TM-Paralaksa Mediaplików 2.0.0</h3>
<?php if ($project == 'eveprest') { ?>
    <div>
        <p style="margin-bottom: 0;">Dostępny dla:</p>
        <p style="margin-top: 0;" class="small text-secondary">Moda, Elektronika, Części Zapasowe, Meble, Sklep Jednego
            Produktu</p>
    </div>
<?php } ?>
<p class="alert alert-warning">
    Jeżeli masz już wersję 1.n niniejszego modułu zainstalowaną na swoim silniku programowym Prestashop, to nie zalecamy
    aktualizować go bieżącą wersją. Najpierw warto usunąć starą wersję modułu, żeby wszystko pracowało bez blędów. </p>
<p>Ten moduł sprojektowany jest aby pozwolić Ci dodawać efekt paralaksy do elementów DOM na Twojej stronie. Pozwala on
    stwarzać wielowarstwowy efekt paralaksy. Pozwala również dodawać specjalne wideo dla tła (możesz przesłać go ze
    swojego komputea lub serwera) albo dodać wideo z YouTube.</p>
<h4>TM Media Parallax—Panel Główny</h4>
<p>To jest główny panel modułu który pozwala Ci dodawać, edytować oraz usuwać elementy z efektem paralaksy. </p>
<figure class="img-polaroid">
    <img src="img/main-panel.jpg" alt=""/>
</figure>
<h4>Stworzenie nowego elementu z efektem paralaksy</h4>
<p>Aby stworzyć nowy element z efektem paralaksy, wciśnij ikonkę 'plus' (1) w górnej prawej części panelu głównego.</p>
<figure class="img-polaroid">
    <img src="img/main-panel-add-item.jpg" alt=""/>
</figure>
<p>Po tym zobaczysz następujący formularz.</p>
<figure class="img-polaroid">
    <img src="img/add-item.jpg" alt=""/>
</figure>
<h4>Opcje formularza dla dodawania elementów z efektem paralaksy</h4>
<ul class="index-list">
    <li>Selektor - CSS selektor elementu z zastosowanym efetem paralaksy. Na przykład, '#header .nav'</li>
    <li>Status elementu - status elementu (paralaksa nie będzie wyświetlana jeżeli została ona deaktywowana)</li>
    <li>Szybkość - cyfrowa wartość od 0 do 2, która wyznacza szybkość głownego bloku paralaksy</li>
    <li>Odstęp - główne wcięcia na osi Y</li>
    <li>Odwrotność - kierunek paralaksy</li>
    <li>Zanikanie - ta opcja pozwala skonfigurować wygaśnięcie głównego bloku w trakcie przewijania strony</li>
    <li>Wymuszona cała szerokość - wymuszone ładowanie bloku paralaksy na całą szerokość</li>
</ul>
<p>Wciśnij 'Zachowaj' po tym, jak wypełnisz wszystkie wymagane pola.</p>
<h4>Lista warstw z efektą paralaksy</h4>
<p>Aby zobaczyć listę warstw z efektem paralaksy, należy wcisnąć 'Przeglądanie' (1) obok głównego elementu
    paralaksy.</p>
<figure class="img-polaroid">
    <img src="img/main-panel-view.jpg" alt=""/>
</figure>
<p>Następnie zobaczysz tablicę wyświetlającą warstwy po tym jak zostały dodane.</p>
<figure class="img-polaroid">
    <img src="img/layouts-panel.jpg" alt=""/>
</figure>
<h4>Dodawanie nowej warstwy</h4>
<p>Aby stworzyć nową warstwę z efektem paralaksy, wciśnij ikonkę 'plus' (1) w górnej prawej części panelu warstw.</p>
<figure class="img-polaroid">
    <img src="img/layouts-panel-add.jpg" alt=""/>
</figure>
<p>Po tym zobaczysz następujący formularz.</p>
<figure class="img-polaroid">
    <img src="img/add-layout.jpg" alt=""/>
</figure>
<p>Wciśnij 'Zachowaj' po tym, jak wypełnisz wszystkie wymagane pola.</p>
<h4>Typy warstw z efektem paralaksy oraz ich pola</h4>
<ul class="index-list">
    <li><p>Obrazek Tła - obrazek wykorzystywany jako tło paralaksy</p>
        <ul class="marked-list">
            <li>Status elementu - status elementu (paralaksa nie będzie wyświetlana jeżeli została ona deaktywowana)
            </li>
            <li>Szybkość Układu - cyfrowa wartość od 0 do 2, która wyznacza szybkość głownego bloku paralaksy</li>
            <li>Odstęp - główne wcięcia na osi Y</li>
            <li>Odwrotność - kierunek paralaksy</li>
            <li>Zanikanie - ta opcja pozwala skonfigurować wygaśnięcie głównego bloku w trakcie przewijania strony</li>
            <li>Obrazek - link prowadzący do obrazu do którego zastosowany będzie efekt paralaksy</li>
            <li>Porządek sortowania - pozycja układu w stosunku do reszty elementów</li>
        </ul>
    </li>
    <li><p>Wideo Tła - wideo wykorzystywane jako tło paralaksy</p>
        <ul class="marked-list">
            <li>Status elementu - status elementu (paralaksa nie będzie wyświetlana jeżeli została ona deaktywowana)
            </li>
            <li>Szybkość Układu - cyfrowa wartość od 0 do 2, która wyznacza szybkość głownego bloku paralaksy</li>
            <li>Odstęp - główne wcięcia na osi Y</li>
            <li>Odwrotność - kierunek paralaksy</li>
            <li>Zanikanie - ta opcja pozwala skonfigurować wygaśnięcie głównego bloku w trakcie przewijania strony</li>
            <li>Obrazek - link prowadzący do dodatkowego obrazku</li>
            <li>Wideo paralaksa mp4 - wideo w formacie mp4</li>
            <li>Wideo paralaksa webm - wideo w formacie webm</li>
            <li>Porządek sortowania - pozycja układu w stosunku do reszty elementów</li>
        </ul>
    </li>
    <li><p>Tekst - warstwa tekstu pozycja której może być zdefiniowana za pomocą CSS</p>
        <ul class="marked-list">
            <li>Status elementu - status elementu (paralaksa nie będzie wyświetlana jeżeli została ona deaktywowana)
            </li>
            <li>Szybkość Układu - cyfrowa wartość od 0 do 2, która wyznacza szybkość głownego bloku paralaksy</li>
            <li>Odstęp - główne wcięcia na osi Y</li>
            <li>Odwrotność - kierunek paralaksy</li>
            <li>Zanikanie - ta opcja pozwala skonfigurować wygaśnięcie głównego bloku w trakcie przewijania strony</li>
            <li>Treść - treść warstwy</li>
            <li>Konkretna klasa - konkretna specjalnie wybrana klasa CSS dla niniejszej warstwy</li>
            <li>Porządek sortowania - pozycja układu w stosunku do reszty elementów</li>
        </ul>
    </li>
    <li><p>Wideo YouTube - wideo YouTube wykorzystywane jako tło paralaksy</p>
        <ul class="marked-list">
            <li>Status elementu - status elementu (paralaksa nie będzie wyświetlana jeżeli została ona deaktywowana)
            </li>
            <li>Szybkość Układu - cyfrowa wartość od 0 do 2, która wyznacza szybkość głownego bloku paralaksy</li>
            <li>Odstęp - główne wcięcia na osi Y</li>
            <li>Odwrotność - kierunek paralaksy</li>
            <li>Zanikanie - ta opcja pozwala skonfigurować wygaśnięcie głównego bloku w trakcie przewijania strony</li>
            <li>ID wideo - ID wideo YouTube</li>
            <li>Porządek sortowania - pozycja układu w stosunku do reszty elementów</li>
        </ul>
    </li>
    <li><p>Obrazek - warstwa obrazku pozycja której może być zdefiniowana za pomocą CSS</p>
        <ul class="marked-list">
            <li>Status elementu - status elementu (paralaksa nie będzie wyświetlana jeżeli została ona deaktywowana)
            </li>
            <li>Szybkość Układu - cyfrowa wartość od 0 do 2, która wyznacza szybkość głownego bloku paralaksy</li>
            <li>Odstęp - główne wcięcia na osi Y</li>
            <li>Odwrotność - kierunek paralaksy</li>
            <li>Zanikanie - ta opcja pozwala skonfigurować wygaśnięcie głównego bloku w trakcie przewijania strony</li>
            <li>Obrazek - link prowadzący do obrazu do którego zastosowany będzie efekt paralaksy</li>
            <li>Konkretna klasa - konkretna specjalnie wybrana klasa CSS dla niniejszej warstwy</li>
            <li>Porządek sortowania - pozycja układu w stosunku do reszty elementów</li>
        </ul>
    </li>
</ul>
<h4>Przesyłanie wideo tudzież obrazków na serwer</h4>
<p>Aby przesłać wideo lub obrazek za pomocą Menadżera Plików, trzeba najpierw wcisnąć ikonkę 'plik' (1) znajdującą się
    obok potrzebnego Ci pola.</p>
<figure class="img-polaroid">
    <img src="img/upload-file.jpg" alt=""/>
</figure>
<p>W następnym oknie, w wierszu 'czynności', wybierz 'prześlij' (2).</p>
<figure class="img-polaroid">
    <img src="img/upload-file-2.jpg" alt=""/>
</figure>
<p>Po tym zobaczysz jeszcze jedno okno wyskakujące, w którym można będzie przesłać plik obrazku lub wideo.</p>
<h4>Ostrzeżenia oraz Rekomendacje</h4>
<ul class="index-list">
    <li>Urządzenia mobilne (smartfony, tablety) mają domyślnie wyłączony efekt paralaksy; jako tło stosuje się natomiast
        najwyżej położone tło bloku obrazu
    </li>
    <li>Wymuszona cała szerokość bloku paralaksy wpływa na szybkość załadowania strony bardziej istotnie aniżeli zwykłe
        ładowanie bloku na pełną szerokość
    </li>
    <li>Im mniejszy jest rozmiar przesyłanego wideo, tym lepiej.</li>
</ul>