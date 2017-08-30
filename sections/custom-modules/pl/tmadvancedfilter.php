<h3>TM-Zaawansowany Filtr</h3>
<?php if ($project == 'eveprest') { ?>
    <div>
        <p style="margin-bottom: 0;">Dostępny dla:</p>
        <p style="margin-top: 0;" class="small text-secondary">Części Zapasowe</p>
    </div>
<?php } ?>
<h4>Wstęp</h4>
<p>Moduł TM-Zaawansowany Filtr oferuje Ci możliwość dokonać rychłego wyszukiwania potrzebnego Ci produktu w oparciu na
    jego charakterystyki kluczowe. Pozwala stwarzać filtry z nieograniczoną liczbą kryteriów wyszukiwania które są
    dostępne w sklepie domyślnie lub są stworzone przy dodawaniu produktów. Kryteria stosowane przez filtr mogą być
    następujące: poziomy kategorii (poprzez gniazdowanie), wytwórcy, dostawcy, cechy, funkcje i wiele innego. Poza tym,
    moduł wyposażony jest w następujące funkcje: tworzenie powiązanych filtrów w których potrzebne kryteria udostępniane
    są tylko po tym, jak wybrany jest parametr nadrzędny (poziom gniazdowania jest nieograniczony); wybranie siatki
    kryteriów stosowanych przez filtr dla filtru w górnej części strony. Możesz wybrać typ pola filtru spośród
    dostępnych, wybrać i zaznaczyć filtr nadrzędny, dodać jego nazwę, oznakowanie tudzież opis. Wszystko to w sposób
    prosty ustawia się oraz edytuje się w przyjaznym dla użytkownika panelu administracyjnym. Dla osiągnięcia lepszej
    szybkości, moduł stosuje algorytm indeksowania produktów według ustawionych kryteriów. Można go w sposób łatwy i
    szybki zamieścić w sklepie Prestashop dowolnego rodzaju.</p>
<h4>Instalowanie oraz usuwanie modułu</h4>
<h6>Moduł instaluje się oraz usuwa się w taki sam sposób jak każdy inny moduł PrestaShop.</h6>
<p class="alert alert-info"><span>Po usunięciu lub ponownej instalacji modułu wszystkie ustawienia modułu i wszystkie filtry zostąną wyrzucone.</span>
</p>
<h4>Filtrowanie nastawienia/edytowania</h4>
<p>Po zakończeniu instalacji modułu możesz go nastawić na stronie konfiguracji modułu. Z ustawieniami domyślnymi
    zobaczysz zakładki wyświetlające dostępne typy filtrów. Ąby zacząć tworzenie filtru, wybierz zakładkę (1) i wciśnij
    przycisk 'Stwórz filtr' (2).</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-1.png" alt=""/></figure>
<p>W oknie filtru, które się pojawi, wypełnij wszystkie wymagane pola.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-2.png" alt=""/></figure>
<ul class="marked-list">
    <li><strong>Nazwa</strong> - nazwa filtru. Będzie pokazywana po stronie użytkownika jako tytuł bloku filtru;</li>
    <li><strong>Opis</strong> - opis filtru. Będzie pokazywana po stronie użytkownika obok tytułu bloku filtru;</li>
    <li><strong>Pokazuj licznik</strong> - pozwala wyświetlać liczbę produktów które będą udostępnione po wybraniu
        bieżącego parametru. Liczba będzie wyświetlana obok kryterium wyszukiwania (w nawiasach);
    </li>
    <li><strong>Pokazuj wybrane filtry</strong> - pozwala wyświetlać listę wybranych kryteriów wyszukiwania lub
        możliwość odznaczenia jakiegokolwiek z nich;
    </li>
    <li><strong>Pokazuj typ układu filtra</strong> - wybranie siatki filtru (dostępne tylko dla Filtru Górnego);</li>
</ul>
<p class="alert alert-info"><span>Proszę zauważyć, że nie ma pól wymaganych. Jeśli zostawisz wszystkie pola puste, zostanie stworzony jednokolumnowy filtr posiadający tytuł ale bez opisu.</span>
</p>
<h5>Edytowanie filtru</h5>
<p>Żeby zmienić opis i ustawienia filtru, wciśnij przycisk 'Koło zębate' w menu filtru.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-3.png" alt=""/></figure>
<p>W trybie edytowania, forma ta wygląda i działa tak samo, jak w trybie nastawienia.</p>
<p class="alert alert-info"><span>Wybór siatki filtru jest dostępny tylko dla 'Filtru górnego'.</span></p>
<p class="alert alert-info"><span>Przy dokonywaniu zmian w siatce filtru, wszystkie elementy zostraną automatycznie przeniesione do pierwszej kolumny, przestrzegając porządku gniazdowania oraz wyświetlania (w oparciu o następującą zasadę: wszystkie elementy poprzedniej kolumny z porządkiem wyświetlania zachowane we wnętrzu).</span>
</p>
<h5>Usuwanie filtru</h5>
<p>Żeby zmienić opis filtru lub ustawienia filtru, wciśnij przycisk 'Krzyżyk' w menu filtru.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-31.png" alt=""/></figure>
<p>oraz potwierdz usuwanie filtru.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-4.png" alt=""/></figure>
<div class="box-notification">
    <span>Po usunięciu filtru, wszystkie dane zostaną nieodwracalnie utracone.</span>
</div>
<h5>Indeksowanie filtru</h5>
<p><strong>Indeksowanie</strong> - jest procesem tworzenia niepowtarzalnych tablic z danymi niezbędnymi dla filtru,
    który jest stworzony w oparciu o skonkretyzowane dla filtru kryteria. Pozwalają one radykalnie przyśpieszyć
    funkcjonalność filtru po stronie użytkownika.</p>
<p>Odpowiedni przycisk w menu filtru wyróżniony jest kolorem czerwonym. Jeżeli przycisk nie jest wyróżniony, oznacza to
    że filtr nie potrzebuje indeksowania.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-5.png" alt=""/></figure>
<p class="alert alert-info"><span>Proces ponownego indeksowania może zająć trochę czasu, zależnie od liczby produktów w sklepie oraz wybranych kryteriów filtru.</span>
</p>
<p class="alert alert-info"><span>Jeżeli filtr potrzebuje ponownego indeksowania, to nie będzie pokazywany po stronie użytkownika.</span>
</p>
<h5>Stworzenie/edytowanie elementów (kryteriów) filtru</h5>
<p>Żeby dodać element do filtru, wybierz go w panelu dostępnych elementów (po lewej stronie) i przeciągnij go w dostępny
    obszar na siatce filtru (po wybraniu od razu zacznie się świecić. W przykładzie pokazanym siatka ma 2 kolumny).</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-6.png" alt=""/></figure>
<p>W obszarze wyróżnionym wybierz kolumnę oraz pozycję nowego elementu i umieść tam element.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-7.png" alt=""/></figure>
<p>Pojawi się okno stworzonego elementu; podaj w nim wszystkie niezbędne dane:</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-8.png" alt=""/></figure>
<ul class="marked-list">
    <li><strong>Nazwa</strong> - nazwa elementu filtru po stronie użytkownika. Nie będzie ona pokazywana jeśli zostawisz
        to pole puste.
    </li>
    <li><strong>Oznakowanie</strong> - oznakowanie elementu filtru po stronie użytkownika. Nie będzie ona pokazywana
        jeśli zostawisz to pole puste.
    </li>
    <li><strong>Opis</strong> - opis elementu filtru po stronie użytkownika. Nie będzie ona pokazywana jeśli zostawisz
        to pole puste.
    </li>
    <li><strong>Filtr nadrzędny</strong> - element nadrzędnego filtru po wybraniu którego ten element zostanie
        udostępniony. Ten element będzie zawsze dostępny w wypadku pozostawienia pola pustym.
    </li>
    <li><strong>Typ pola filtru</strong> - sposób w jaki element będzie wyświetlany po stronie użytkownika. Dostępne są
        następujące typy:
        <ul class="marked-list">
            <li>przycisk opcji</li>
            <li>selekcjonowanie</li>
            <li>przycisk wyboru</li>
            <li>wybór z zakresu (tylko dla typu pola 'cena')</li>
            <li>wprowadzanie wartości z zakresu (tylko dla typu pola 'cena')</li>
        </ul>
    </li>
</ul>
<p class="alert alert-info">
    <span>Możesz zmienić wszystkie dane oraz element nadrzędny w trybie edytowania filtru.</span></p>
<p class="alert alert-info"><span>Po zakończeniu edytowania elementu, filtr należy ponownie zindeksować; na to wskazuje przycisk w menu filtru. Nie warto zaczynać indeksowanie filtru po edytowaniu każdego pojedyńczego elementu; możesz to zrobić później, po zastosowaniu zmian do wszystkich niezbędnych elementów—w taki sposób zaoszczędzisz swój czas.</span>
</p>
<p>Jeżeli istnieje drzewo powiązanych filtrów, możesz dodać nowy element jako powiązany z tym drzewem.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-10.png" alt=""/></figure>
<h5>Edytowanie elementu filtru</h5>
<p>Aby edytować element filtru, wciśnij przycisk 'Koło zębate' (1) w górnym prawym kącie filtru.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-9.png" alt=""/></figure>
<h5>Porządkowanie (porządek wyświetlania elementów filtru)</h5>
<p>Domyślnie, nowe elementy są wyświetlane następnie po elemencie w tym porządku w jakim je dodałeś. Jeżeli filtr jest
    dodany do tego drzewa, będzie wyświetlany następnie po istniejących w drzewie elementach.</p>
<p>Żeby przesunąć elementy we wnętrzu filtra, wybierz potrzebny element i przeciągnij go w potrzebną pozycję. Możesz
    przeciągnąć elementy zarówno w jedną kolumnie, jak i w inne kolumny w siatce. Możesz również zmienić porządkowanie
    we wnętrzu drzewa, lub też przemieścić drzewo w całości.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-11.png" alt=""/></figure>
<p>Po tym, jak przesuniesz element z jednej kolumny do drugiej, porządek wyświetlania automatycznie zostanie zmieniony
    we wszystkich kolumnach.</p>
<h5>Deleting the filter element</h5>
<p>Są dwa sposoby usunięcia elementu filtru:</p>
<ul class="index-list">
    <li><p>przeciągnąć element z powrotem do kolumny dostępnych elementów;</p>
        <figure class="img-polaroid"><img src="img/tmadvancedfilter-12.png" alt=""/></figure>
    </li>
    <li><p>lub wcisnąć przysick 'Krzyżyk' w górnym prawym kącie potrzebnego Ci elementu.</p>
        <figure class="img-polaroid"><img src="img/tmadvancedfilter-9.png" alt=""/></figure>
    </li>
</ul>
<p>Niezależnie od tego, jaką metodę wybrałeś, zobaczysz okno potwierdzenia operacji usuwania.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-13.png" alt=""/></figure></li>
<p class="alert alert-info"><span>Po usunięciu filtru z elementami zagnieżdżonymi, wszystki elementy zagnieżdżone zostaną usunięte.</span>
</p>
<p class="alert alert-info"><span>Po usunięciu elementu, filtr należy ponownie zindeksować; na to wskazuje przycisk w menu filtru. Nie warto zaczynać indeksowanie filtru po edytowaniu każdego pojedyńczego elementu; możesz to zrobić później, po zastosowaniu zmian do wszystkich niezbędnych elementów—w taki sposób zaoszczędzisz swój czas.</span>
</p>
<h5>"Inteligentne" ponowne indeksowanie</h5>
<p>Ten moduł pozwala dokonać automatycznej (inteligentnej) ponownej indeksacji po wprowadzeniu zmian w produktach lub po
    dokonaniu jakichkolwiek innych istotnych zmian (wytwórca, cecha itp.). Jeśli takie zmiany dotknęły funkcjonowania
    filtru, pola w tablicy zostaną ponownie zindeksowane.</p>
<p class="alert alert-info"><span>Jeśli, po dokonaniu zmian, filtr nie zastosował ich automatycznie, wejdź na stronę ustawień filtru oraz dokonaj jej ponownej indeksacji w trybie ręcznym.</span>
</p>
<p class="alert alert-info"><span>Filtr nie będzie automatycznie indeksowany ponownie jeżeli dodasz walutę; dlatego należy go indeksować ponownie w trybie ręcznym.</span>
</p>
<h4>Często Zadawane Pytania (FAQ)</h4>
<div class="responsive-tabs" data-type="accordion">
    <ul class="resp-tabs-list">
        <li>Stworzyłem filtr, ale nie widzę go po stronie użytkownika.</li>
        <li>Dodałem nazwę filtru oraz opis, ale nie są wyświetlane po stronie użytkownika.</li>
        <li>Dodałem elementy do filtru, ale przestał pokazywać je po stronie użytkownika.</li>
        <li>Chciałbym żeby element był dostępny tylko po tym, jak wybrany zostanie kolejny element.</li>
        <li>Chciałbym wymienić elementy.</li>
        <li>Chcę usunąć element nadrzędny, ale zachować wszystkie elementy zagnieżdżone. Jak to można zrobić?</li>
        <li>Chcę zmienić siatkę filtru, ale nie chcę tworzyć filtr ponownie. Co mogę zrobić?</li>
        <li>Jak stworzyć kompletnie nowy filtr, jeżeli już istnieje filtr dla tej pozycji?</li>
        <li>Filtr przestał wyświetlać się po stronie użytkownika.</li>
        <li>Dlaczego nie wszystkie elementy są aktywne po stronie użytkownika?</li>
    </ul>
    <div class="resp-tabs-container">
        <div>Filtr nie wyświetla się jeżeli nie zawiera żadnych elementy, albo jeżeli nie był indeksowany ponownie.<br>
            Upewnij się, że filtr zawiera elementy oraz że został on indeksowany ponownie.
        </div>
        <div>Być może, nie dodałeś dane dla wszystkich języków. Nie zapominaj o tym, że ten moduł jest wielojęzyczny
            oraz wpisuj dane dla każdego języka osobnie.
        </div>
        <div>Upewnij się, że ponownie zindeksowałeś filtr po tym, jak wprowadziłeś zmiany.</div>
        <div>Wybierz element, który życzysz żeby został udostępniony, oraz ustaw go jako element nadrzędny.</div>
        <div>Po prostu przeciągnij element na miejsce w którym chciałbyś go ulokować; automatycznie zajmie nową
            pozycję—to nie wpłynie na funkcjonalność filtru.
        </div>
        <div>W menu dla edytowania pierwszego zagnieżdżonego elementu, wyrzuć ustawienie połączenia z elementem
            nadrzędnym który chcesz usunąć, po czym usuń element nadrzędny. W tym wypadku, nie będą usunięte wszystkie
            elementy zagnieżdżone.
        </div>
        <div>Wejdź do menu edytowania oraz wybierz nową siatkę dla filtru; po dokonaniu wyboru, zachowaj zmiany.
            Wszystkie elementy filtru będą pokazane w pierwszej kolumnie nowej siatki; następnie, możesz ich przemieścić
            w potrzebne pozycje.
        </div>
        <div>Żeby stworzyć nowy filtr, usuń istniejący.</div>
        <div>Upewnij się, że filtr nie potrzebuje ponownej indeksacji.</div>
        <div>Sprawdź czy element nie jest elementem podrzędnym obecnie nieaktywnego elementu. Upewnij się że są produkty
            które odpowiadają określonym kryteriom.
        </div>
    </div>
</div>