<h3>TM Media Parallax 2.0</h3>
<p>Ten moduł został zaprojektowany, aby umożliwić dodawanie efektu paralaksy do strony z elementami DOM. Moduł pozwala na utworzenie wielowarstwowej paralaksy. Zapewnia również możliwość dodawania własnego wideo na tło (można go przesłać z komputera na serwer) lub dodawania filmu z YouTube.</p>
<h4 id="tmmediaparallax-mainpanel">Główny panel TM Media Parallax</h4>
<p>Główny panel modułu, który umożliwia dodawanie, edytowanie lub usuwanie elementów paralaksy. </p>
<figure class="img-polaroid"><img src="img/main-panel.jpg" alt="" /></figure>
<h4 id="tmmediaparallax-add">Tworzenie nowego elementu z paralaksą</h4>
<p>W celu utworzenia nowego elementu z paralaksą, należy naciśnąć ikonę "plus" (1) w prawym górnym rogu panelu głównego.</p>
<figure class="img-polaroid"><img src="img/main-panel-add-item.jpg" alt="" /></figure>
<p>Następnie pojawi się poniższy formularz.</p>
<figure class="img-polaroid"><img src="img/add-item.jpg" alt="" /></figure>
<h4>Opcje formularza dotyczące dodawania elementów paralaksy</h4>
<ul class="index-list">
    <li>Selektor (Selector) - zastosowany selektor CSS elementu z efektem paralaksy. Na przykład, '#header .nav'</li>
    <li>Status elementu (Item status) - status elementu (jeżeli jest wyłączony, efekt paralaksy nie bezie wyświetlany)</li>
    <li>Szybkość (Speed) - wartość cyfrowa od 0 do 2, która określa szybkość bloku głównej paralaksy</li>
    <li>Przesunięcie (Offset) - główny indent warstwy na osi Y</li>
    <li>Odwrotność (Inverse) - kierunek paralaksy</li>
    <li>Zanikanie (Fade) - ta opcja pozwala na konfigurację zanikania bloku głównego podczas przewijania strony</li>
    <li>Wymuszona pełna szerokość (Forced full width) - wymuszona pełna szerokość bloku paralaksy </li>
</ul>
Naciśnij przycisk "Zapisz" po wypełnieniu wszystkich wymaganych pól.
<h4 id="layouts-list">Wykaz warstw paralaksy</h4>
<p>Aby zobaczyć listę warstw paralaksy, należy nacisnąć przycisk "Widok" (1) w pobliżu głównego elementu z paralaksą.</p>
<figure class="img-polaroid"><img src="img/main-panel-view.jpg" alt="" /></figure>
<p>Następnie pojawi się tabela, w której są wyświetlane warstwy po ich dodaniu.</p>
<figure class="img-polaroid"><img src="img/layouts-panel.jpg" alt="" /></figure>
<h4 id="layout-list">Wykaz warstw paralaksy </h4>
<p>W celu utworzenia nowej warstwy paralaksy, należy nacisnąć ikonę "plus" (1) w prawym górnym rogu panelu warstw.</p>
<figure class="img-polaroid"><img src="img/layouts-panel-add.jpg" alt="" /></figure>
<p>Następnie pojawi się poniższy formularz.</p>
<figure class="img-polaroid"><img src="img/add-layout.jpg" alt="" /></figure>
Naciśnij przycisk "Zapisz" po wypełnieniu wszystkich wymaganych pól.
<h4 id="layouts-type">Parallax layers types and their fields</h4>
<ul class="index-list">
    <li>Zdjęcie w tle (Image-background) - zdjęcie wykorzystywane jako tło paralaksy
        <ul class="marked-list">
            <li>Status elementu (Item status) - status elementu (jeżeli jest wyłączony, efekt paralaksy nie bezie wyświetlany)</li>
            <li>Szybkość warstwy (Layout speed) - wartość cyfrowa od 0 do 2, która określa szybkość bloku głównej paralaksy</li>
            <li>Przesunięcie (Offset) - główny indent warstwy na osi Y</li>
            <li>Odwrotność (Inverse) - kierunek paralaksy</li>
            <li>Zanikanie (Fade) - ta opcja pozwala na konfigurację zanikania bloku głównego podczas przewijania strony</li>
            <li>Zdjęcie (Image) - łącze do zdjęcia, do którego efekt paralaksy będzie stosowany</li>
            <li>Kulejność sortowania (Sort order) - pozycja układu, pod względem pozostałych elementów</li>
        </ul>
    </li>
    <li>Wideo w tle (Video-background) - wideo wykorzystywane jako tło paralaksy
        <ul class="marked-list">
            <li>Status elementu (Item status) - status elementu (jeżeli jest wyłączony, efekt paralaksy nie bezie wyświetlany)</li>
            <li>Szybkość warstwy (Layout speed) - wartość cyfrowa od 0 do 2, która określa szybkość bloku głównej paralaksy</li>
            <li>Przesunięcie (Offset) - główny indent warstwy na osi Y</li>
            <li>Odwrotność (Inverse) - kierunek paralaksy</li>
            <li>Zanikanie (Fade) - ta opcja pozwala na konfigurację zanikania bloku głównego podczas przewijania strony</li>
            <li>Zdjęcie (Image) - łącze do dodatkowego zdjęcia</li>
            <li>Wideo z paralaksą mp4 (Video parallax mp4) - wideo o formacie mp4</li>
            <li>Wideo z paralaksą webm (Video parallax webm) - wideo o formacie webm</li>
            <li>Kulejność sortowania (Sort order) - pozycja układu, pod względem pozostałych elementów</li>
        </ul>
    </li>
    <li>Tekst (Text) - warstwa tekstowa, pozycję której można zdefiniować przy użyciu CSS
        <ul class="marked-list">
            <li>Status elementu (Item status) - status elementu (jeżeli jest wyłączony, efekt paralaksy nie bezie wyświetlany)</li>
            <li>Szybkość warstwy (Layout speed) - wartość cyfrowa od 0 do 2, która określa szybkość bloku głównej paralaksy</li>
            <li>Przesunięcie (Offset) - główny indent warstwy na osi Y</li>
            <li>Odwrotność (Inverse) - kierunek paralaksy</li>
            <li>Zanikanie (Fade) - ta opcja pozwala na konfigurację zanikania bloku głównego podczas przewijania strony</li>
            <li>Zawartość (Content) - zawartość warstwy</li>
            <li>Szczególna klasa (Specific class) - niestandardowa klasa CSS dla tej warstwy</li>
            <li>Kulejność sortowania (Sort order) - pozycja układu, pod względem pozostałych elementów</li>
        </ul>
    </li>
    <li>Film YouTube w tle (YouTube-background) - film YouTube wykorzystywany jako tło paralaksy
        <ul class="marked-list">
            <li>Status elementu (Item status) - status elementu (jeżeli jest wyłączony, efekt paralaksy nie bezie wyświetlany)</li>
            <li>Szybkość warstwy (Layout speed) - wartość cyfrowa od 0 do 2, która określa szybkość bloku głównej paralaksy</li>
            <li>Przesunięcie (Offset) - główny indent warstwy na osi Y</li>
            <li>Odwrotność (Inverse) - kierunek paralaksy</li>
            <li>Zanikanie (Fade) - ta opcja pozwala na konfigurację zanikania bloku głównego podczas przewijania strony</li>
            <li>id wideo - ID wideo z YouTube</li>
            <li>Kulejność sortowania (Sort order) - pozycja układu, pod względem pozostałych elementów</li>
        </ul>
    </li>
    <li>Zdjęcie (Image) - warstwa ze zdjęciem, pozycję której można zdefiniować przy użyciu CSS
        <ul class="marked-list">
            <li>Status elementu (Item status) - status elementu (jeżeli jest wyłączony, efekt paralaksy nie bezie wyświetlany)</li>
            <li>Szybkość warstwy (Layout speed) - wartość cyfrowa od 0 do 2, która określa szybkość bloku głównej paralaksy</li>
            <li>Przesunięcie (Offset) - główny indent warstwy na osi Y</li>
            <li>Odwrotność (Inverse) - kierunek paralaksy</li>
            <li>Zanikanie (Fade) - ta opcja pozwala na konfigurację zanikania bloku głównego podczas przewijania strony</li>
            <li>Zdjęcie (Image) - łącze do zdjęcia, do którego efekt paralaksy będzie stosowany</li>
            <li>Szczególna klasa (Specific class) - niestandardowa klasa CSS dla tej warstwy</li>
            <li>Kulejność sortowania (Sort order) - pozycja układu, pod względem pozostałych elementów</li>
        </ul>
    </li>
</ul>
<h4 id="file-manager">Przesyłanie wideo i zdjęć na serwer</h4>
<p>W celu przesyłania wideo lub obrazu do serwera za pomocą menedżera plików (File Manager), należy najpierw nacisnąć ikonę "Plik" (1), znajdującą się obok potrzebnego pula.</p>
<figure class="img-polaroid"><img src="img/upload-file.jpg" alt="" /></figure>
<p>W następnym oknie, w linii "Operacje" ("Actions") wybierz "przesłać" (2)</p>
<figure class="img-polaroid"><img src="img/upload-file-2.jpg" alt="" /></figure>
<p>Następnie pojawi jeszcze jedno wyskakujące okienko, aby w nim przesłać zdjęcie lub plik wideo.</p>
<h4 id="layout-info">Ostrzeżenia i zalecenia</h4>
<ul class="index-list">
    <li>W urządzeniach mobilnych (smartfonach, tabletach) efekt paralaksy jest domyślnie wyłączony, natomiast najwyżej umieszczona warstwa blokowa ze zdjęciem jest wykorzystana jako tło</li>
    <li>Wymuszona pełna szerokość bloku paralaksy wpływa na szybkość ładowania strony bardziej krytycznie, niż zwykłe ładowanie bloku o pełnej szerokości</li>
    <li>Im mniejsza jest wielkość przesłanego filmu wideo, tym lepiej.</li>
</ul>