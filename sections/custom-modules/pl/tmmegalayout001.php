<h3>TM-Mega Układ 0.0.1</h3>
<p>Ten moduł sprojektowany jest dla tworzenia specjalnych układów (presetów) dla zaczepek i pokazywania ich na stronie
    zamiast w pozycjach domyślnych. Przewagą tego modułu jest to, że pozwala Ci stwarzać rozmaite markupy zaczepek oraz
    modyfikować je zgodnie z Twoimi potrzebami.</p>
<h4>Funkcjonalne charakterystyki oraz cechy modułu</h4>
<ul class="index-list">
    <li>
        <p>Wymagania:</p>
        <ul class="marked-list">
            <li>PrestaShop 1.6+</li>
            <li>PHP 5.4+</li>
        </ul>
    </li>
    <li>
        <p>Cechy:</p>
        <ul class="marked-list">
            <li>Moduł zawiera 3 zaczepki: displayTopColumn, displayHome, displayFooter, odpowiadające standardowym.</li>
            <li>Jeżeli modułu nie ma na zaczepce, nie można go dodać do presetu.</li>
            <li>Moduł można wyświetlać tylko raz, zarówno w presecie jak i w zaczepce.</li>
            <li>Pozycja modułu w sekcji 'Moduły i Serwisy -&gt; Pozycje' nie wpływa na preset.</li>
            <li>Moduł nie pozwala Ci skonfigurować różniące się od siebie moduły. Nie możesz ustawić różniące się od
                siebie konfigurację modułów dla różnych presetów.
            </li>
        </ul>
    </li>
</ul>
<h6>Moduł daje Ci możliwość zmieniać pozycję modułu i nastawić siatkę dla 3 zaczepek: displayTopColumn, displayHome,
    displayFooter. Zmieniając pozycję modułów w sekcji 'Moduły i Serwisy -&gt; Pozycje' nie wpłynie na pozycję modułów w
    presecie. Jeżeli moduł był poprzednio dodany do zaczepki, nie będzie można go również dodać też do presetu.</h6>
<h4>Integrowanie modułu w motyw</h4>
<p class="alert alert-warning">Jeżeli nie dokonać tego kroku, Twoje presety nie pojawią się po stronie użytkownika.</p>
<ul class="index-list">
    <li><p>Kolumna górna. Żeby dodać specjalny preset do zaczepki topColumn (Kolumna Górna), będziesz musiał dokonać
            następujących kroków:</p>
        <ul class="marked-list">
            <li>Otwórz plik <strong>/themes/your_theme/header.tpl</strong> w trybie edytowania.</li>
            <li>Znajdź następujący kod
                <pre class="codebox">{hook h=&quot;displayTopColumn&quot;}</pre>
            </li>
            <li>I zamiast niego wpisz:
                <pre class="codebox">
{assign var='displayMegaTopColumn' value={hook h='tmMegaLayoutTopColumn'}}
{if $displayMegaTopColumn}
    {hook h='tmMegaLayoutTopColumn'}
{else}
    {capture name='displayTopColumn'}{hook h='displayTopColumn'}{/capture}
    {if $smarty.capture.displayTopColumn}
        &lt;div id=&quot;slider_row&quot; class=&quot;row&quot;&gt;
            &lt;div id=&quot;top_column&quot; class=&quot;center_column col-xs-12 col-sm-12">{$smarty.capture.displayTopColumn}&lt;/div&gt;
        &lt;/div&gt;
    {/if}
{/if}</pre>
            </li>
        </ul>
    </li>
    <li><p>Strona Domowa. Żeby dodać specjalny preset do zaczepki Home (Strona Domowa), będziesz musiał dokonać
            następujących kroków:</p>
        <ul class="marked-list">
            <li>Otwórz plik <strong>/themes/your_theme/footer.tpl</strong> w trybie edytowania.</li>
            <li>Znajdź następujący kod:
                <pre class="codebox">
{if isset($HOOK_HOME) && $HOOK_HOME|trim}
    &lt;div class="home-column"&gt;
        &lt;div class="container"&gt;
            {$HOOK_HOME}
        &lt;/div&gt;
    &lt;/div&gt;
{/if}</pre>
            </li>
            <li>I zamiast niego wpisz:
                <pre class="codebox">
{assign var='displayMegaHome' value={hook h='tmMegaLayoutHome'}}
{if $displayMegaHome}
    {hook h='tmMegaLayoutHome'}
{else}
    {if isset($HOOK_HOME) && $HOOK_HOME|trim}
        {$HOOK_HOME}
    {/if}
{/if}</pre>
            </li>
        </ul>
    </li>
    <li><p>Stopka. Żeby dodać specjalny preset do zaczepki Footer (Stopka), będziesz musiał dokonać następujących
            kroków:</p>
        <ul class="marked-list">
            <li>Otwórz plik <strong>/themes/your_theme/footer.tpl</strong> w trybie edytowania.</li>
            <li>Znajdź następujący kod:
                <pre class="codebox">
{if isset($HOOK_FOOTER)}
    &lt;div class=&quot;footer-container&quot;&gt;
        &lt;footer id=&quot;footer&quot;  class=&quot;container&quot;&gt;
            &lt;div class=&quot;row&quot;&gt;
                {$HOOK_FOOTER}
            &lt;/div&gt;
        &lt;/footer&gt;
    &lt;/div&gt;
{/if}</pre>
            </li>
            <li>I zamiast niego wpisz:
                <pre class="codebox">
{assign var='displayMegaFooter' value={hook h='tmMegaLayoutFooter'}}
{if isset($HOOK_FOOTER) || $displayMegaFooter}
    &lt;div class=&quot;footer-container&quot;&gt;
    {if $displayMegaFooter}
         &lt;div id=&quot;footer&quot;&gt;
              {$displayMegaFooter}
         &lt;/div&gt;
    {else}
        &lt;div id=&quot;footer&quot; class=&quot;container&quot;&gt;
            &lt;div class=&quot;row&quot;&gt;{$HOOK_FOOTER}&lt;/div&gt;
        &lt;/div&gt;
    {/if}
    &lt;/div&gt;
{/if}
                </pre>
            </li>
        </ul>
    </li>
</ul>
<h4>TM-Mega Układ—Panel Główny</h4>
<p>Panel główny konfiguracji modułu TM-Mega Układ pozwala Ci dodawać preset do wymaganej zaczepki oraz konfigurować
    preset.</p>
<figure class="img-polaroid">
    <img src="img/tmmegalayout-main-panel.png" alt=""/>
</figure>
<h4>Dodawanie presetu</h4>
<ul class="index-list">
    <li>
        <p>Wciśnij '+ Dodaj Preset' (1) w potrzebnej Ci zakładce.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-preset-1.png" alt=""/></figure>
    </li>
    <li>
        <p>Następnie, wypełnij pole 'Wprowadź nazwę układu' w wyskakującym oknie, wprowadzając w tym miejscu tytuł
            nowego presetu (2) i wciskając 'Zachowaj' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-preset-2.png" alt=""/></figure>
    </li>
    <li>
        <p>Preset został pomyślnie stworzony; teraz jest na liście dostępnych presetów (4). Nowo powstały preset jest
            wybrany dla edytowania (5).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-preset-3.png" alt=""/></figure>
    </li>
</ul>
<h4>Aktywacja Presetu</h4>
<ul class="index-list">
    <li>
        <p>Najpierw wybierz potrzebny Ci preset z listy (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-activation-preset-1.png" alt=""/></figure>
    </li>
    <li>
        <p>Wciśnij 'Stosuj jako domyślny' (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-activation-preset-2.png" alt=""/></figure>
    </li>
    <li>
        <p>Preset jest teraz aktywny; będzie on wyświetlany w zaczepce oraz oznakowany ptaszkiem (3) w liście
            presetów.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-activation-preset-3.png" alt=""/></figure>
    </li>
</ul>
<h4>Usuwanie presetu</h4>
<p class="alert alert-warning">Po usunięciu preseta już nie uda się go przywrócić.</p>
<ul class="index-list">
    <li>
        <p>Aby usunąć preset, wybierz potrzebny Ci preset z listy (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-delete-preset-1.png" alt=""></figure>
    </li>
    <li>
        <p>Następnie wciśnij na kosz (2) pod tytułem presetu. </p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-delete-preset-2.png" alt=""></figure>
    </li>
    <li>
        <p>Preset został pomyślnie usunięty.</p>
    </li>
</ul>
<h4>Zmiana nazwy presetu</h4>
<ul class="index-list">
    <li>
        <p>Aby zmienić nazwę presetu, wybierz potrzebny Ci preset z listy (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-rename-preset-1.png" alt=""></figure>
    </li>
    <li>
        <p>Nasępnie wciśnij przycisk z ikonką ołówka (2) obok tytułu presetu.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-rename-preset-2.png" alt=""></figure>
    </li>
    <li>
        <p>Ustal nowy tytuł presetu (3) w wyskakującym oknie i wciśnij 'Zmień nazwę układu' (4).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-rename-preset-3.png" alt=""></figure>
    </li>
    <li>
        <p>Preset został pomyślnie przemianowany.</p>
    </li>
</ul>
<h4>Opakowanie</h4>
<p>Opakowanie nie ma domyślnie ustalonej klasy; nie jest to artykuł obowiązkowy.</p>
<h4>Dodawanie opakowania</h4>
<ul class="index-list">
    <li>
        <p>Aby stworzyć opakowanie, wciśnij '+ Dodaj opakowanie' (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-wrapper-1.png" alt=""></figure>
    </li>
    <li>
        <p>Opakowanie zostało dodane (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-wrapper-2.png" alt=""></figure>
    </li>
</ul>
<h4>Dodawanie specjalnie wybranej klasy CSS do opakowania</h4>
<p>Dodawanie specjalnie wybranej klasy pozwoli Ci opracować specjalną stylizację dla swojego opakowania, stosując reguły
    CSS.</p>
<ul class="index-list">
    <li>
        <p>Aby dodać klasę opakowania, wciśnij przycisk (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-wrapper-add-class-1.png" alt=""></figure>
    </li>
    <li>
        <p>Pojawi się okno wyskakujące, w którym należy wypełnić pole 'Wprowadź klasy opakowania' (2) oraz wcisnąć
            przycisk 'Potwierdz' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-wrapper-add-class-2.png" alt=""></figure>
    </li>
    <li>
        <p>Specjalna klasa została pomyślnie dodana.</p>
    </li>
</ul>
<h4>Usuwanie opakowania</h4>
<p class="alert alert-warning">Usuwanie elementu presetu również spowoduje usunięcie elementów podrzędnych oraz ich
    styli.</p>
<ul class="index-list">
    <li>
        <p>Aby usunąć opakowanie, wciśnij przycisk koszu (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-delete-wrapper-1.png" alt=""></figure>
    </li>
    <li>
        <p>Opakowanie zostało pomyślnie usunięte.</p>
    </li>
</ul>
<h4>Stylizacja opakowania</h4>
<ul class="index-list">
    <li>
        <p>Aby dodać specjalne style do opakowania, kliknij ikonkę 'ołówek' (1) w bloku opakowania.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-wrapper-add-styles-1.png" alt=""></figure>
    </li>
    <li>
        <p>W następnym wyskakującym oknie wypełnij wszystkie wymagane pola (możesz sprawdzić sekcję 'Stylizacja' w
            dokumentacji) i wciśnij przycisk 'Zachowaj' (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-wrapper-add-styles-2.png" alt=""></figure>
    </li>
    <li>
        <p>Jeżeli wszystkie pola są wypełnione poprawnie, style zostaną zachowane.</p>
    </li>
</ul>
<h4>Wiersz</h4>
<p>Element wierszu z siatki Ładowanie początkowe. Jest to element wymagany.</p>
<h4>Dodawanie wierszu</h4>
<ul class="index-list">
    <li>
        <p>Aby wstawić nowy wiersz, wciśnij '+ Dodaj wiersz' (1) w bloku opakowania lub '+ Dodaj wiersz' (2) w bloku
            głównego presetu, albo '+ Dodaj wiersz' (3) w liście rozwijanej kolumny.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-row-1.png" alt=""></
    </li>
    <li>
        <p>Wierz został pomyślnie dodany.</p>
    </li>
</ul>
<h4>Dodawanie specjalnie wybranej klasy CSS do wierszu</h4>
<p>Dodawanie specjalnej klasy pozwoli Ci stworzyć specjalną stylizację wierszu, stosując reguły CSS.</p>
<ul class="index-list">
    <li>
        <p>Aby dodać klasę do wierszu, powinieneś wcisnąć przycisk (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-edit-row-1.png" alt=""></figure>
    </li>
    <li>
        <p>W liście rozwijanej wybierz 'Edytuj wiersz' (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-edit-row-2.png" alt=""></figure>
    </li>
    <li>
        <p>Wypełnij pole 'Wprowadź klasy wierszy' (3) w oknie wyskakującym oraz wciśnij przycisk 'Potwierdz' (4).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-edit-row-3.png" alt=""></figure>
    </li>
    <li>
        <p>Specjalna klasa została pomyślnie dodana.</p>
    </li>
</ul>
<h4>Usuwanie wierszu</h4>
<p class="alert alert-warning">Usuwanie elementu presetu również spowoduje usunięcie elementów podrzędnych oraz ich
    styli.</p>
<ul class="index-list">
    <li>
        <p>Any usunąć moduł, otwórz wiersz (ikonka 'wielokropek') (1) w bloku wierszu.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-delete-row-1.png" alt=""></figure>
    </li>
    <li>
        <p>W liście rozwijanej wybierz opcję 'Usuń' (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-delete-row-2.png" alt=""></figure>
    </li>
    <li>
        <p>Wierz został pomyślnie usunięty.</p>
    </li>
</ul>
<h4>Dodawanie styli do wierszu</h4>
<ul class="index-list">
    <li>
        <p>Any dodać style wierszu, otwórz menu (ikonka 'wielokropek') (1) w bloku wierszu.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-row-add-styles-1.png" alt=""></figure>
    </li>
    <li>
        <p>Wciśnij 'Stylizuj' (2) w liście rozwijanej.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-row-add-styles-2.png" alt=""></figure>
    </li>
    <li>
        <p>Pojawi się wyskakujące okno; wypełnij w nim wszystkie wymagane pola (możesz sprawdzić sekcję 'Stylizacja' w
            dokumentacji) i wciśnij przycisk 'Zachowaj' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-row-add-styles-3.png" alt=""></figure>
    </li>
    <li>
        <p>Jeżeli wszystkie pola są wypełnione poprawnie, style zostaną zachowane.</p>
    </li>
</ul>
<h4>Kolumna</h4>
<p>Jest to element posiadający blok z szerokością która jest konfigurowana dla różnych rozmiarów, na podstawie siatki
    Ładowanie Początkowe.</p>
<h4>Dodawanie kolumny</h4>
<ul class="index-list">
    <li>
        <p>Any wstawić kolumnę w potrzebny 'wiersz', otwórz menu (ikonka 'wielokropek') (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-col-1.png" alt=""></figure>
    </li>
    <li>
        <p>Wybierz '+ Dod Kol' (2) w liście.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-col-2.png" alt=""></figure>
    </li>
    <li>
        <p>Wypełnij pola (klasy ładowania początkowego col-xs*, col-sm*, col-md*, col-lg - bootstrap) w oknie
            wyskakującym i wciśnij przycisk 'Potwierdz' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-col-3.png" alt=""></figure>
    </li>
    <li>
        <p>Kolumna została pomyślnie dodana.</p>
    </li>
</ul>
<h4>Usuwanie kolumny</h4>
<p class="alert alert-warning">Usuwanie elementu presetu również spowoduje usunięcie elementów podrzędnych oraz ich
    styli.</p>
<ul class="index-list">
    <li>
        <p>Any usunąć kolumnę, otwórz menu (ikonka 'wielokropek') (1) w bloku kolumny.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-detele-col-1.png" alt=""></figure>
    </li>
    <li>
        <p>Wciśnij 'Usuń' (2) w liście.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-detele-col-2.png" alt=""></figure>
    </li>
    <li>
        <p>Kolumna wraz ze wszystkimi jej elementami podrzędnymi została usunięta.</p>
    </li>
</ul>
<h4>Edytowanie kolumny</h4>
<ul class="index-list">
    <li>
        <p>Any edytować kolumnę, otwórz menu (ikonka 'wielokropek') (1) w bloku kolumny.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-edit-col-1.png" alt=""></figure>
    </li>
    <li>
        <p>Wciśnij 'Edytuj kolumnę' (2) w liście.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-edit-col-2.png" alt=""></figure>
    </li>
    <li>
        <p>Wypełnij pola (klasy ładowania początkowego col-xs*, col-sm*, col-md*, col-lg - bootstrap) w oknie
            wyskakującym i wciśnij 'Potwierdz' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-edit-col-3.png" alt=""></figure>
    </li>
    <li>
        <p>Kolumna została pomyślnie zedytowana.</p>
    </li>
</ul>
<h4>Dodawanie styli do kolumny</h4>
<ul class="index-list">
    <li>
        <p>Any dodać style kolumny, otwórz menu (ikonka 'wielokropek') (1) w bloku kolumny.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-col-add-styles-1.png" alt=""></figure>
    </li>
    <li>
        <p>W liście opcji wybierz i wciśnij 'Stylizuj' (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-col-add-styles-2.png" alt=""></figure>
    </li>
    <li>
        <p>Pojawi się wyskakujące okno; wypełnij w nim wszystkie wymagane pola (możesz sprawdzić sekcję 'Stylizacja' w
            dokumentacji) i wciśnij przycisk 'Zachowaj' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-col-add-styles-3.png" alt=""></figure>
    </li>
    <li>
        <p>Jeżeli wszystkie pola są wypełnione poprawnie, style zostaną zachowane.</p>
    </li>
</ul>
<h4>Moduł</h4>
<p>Moduł wyznaczony dla tej zaczepki.</p>
<h4>Dodawanie modułu</h4>
<p class="box-notification"><span>Należy zachować ostrożność, dodawając moduły do presetu; niektóre moduły zaleca się stosować w razie gdy nie zmieniają widoczny układ, jak na przykład moduł 'Eksploracja danych dla zbierania danych statystycznych'.</span>
</p>
<ul class="index-list">
    <li>
        <p>Any dodać moduł do presetu, w bloku kolumny otwórz menu (ikonka 'wielokropek') (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-module-1.png" alt=""></figure>
    </li>
    <li>
        <p>W liście dostępnych opcji, wybierz i wciśnij przycisk '+ Dodaj Moduł' (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-module-2.png" alt=""></figure>
    </li>
    <li>
        <p>W razie potrzeby, możesz wprowadzić specjalną klasę (3) w oknie wyskakującym oraz wybrać moduł (4), po czym
            wcisnąć 'Potwierdz' (5).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-module-3.png" alt=""></figure>
    </li>
    <li>
        <p>Moduł został pomyślnie dodany.</p>
    </li>
</ul>
<h4>Usunięcie modułu</h4>
<p class="alert alert-warning">Usuwanie elementu presetu również spowoduje usunięcie elementów podrzędnych oraz ich
    styli.</p>
<ul class="index-list">
    <li>
        <p>Any usunąć moduł, otwórz menu (ikonka 'wielokropek') (1) w bloku modułu.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-delete-module-1.png" alt=""></figure>
    </li>
    <li>
        <p>W liście dostępnych opcji wybierz i wciśnij 'Usuń' (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-delete-module-2.png" alt=""></figure>
    </li>
    <li>
        <p>Moduł został usunięty.</p>
    </li>
</ul>
<h4>Dodawanie specjalnie wybranej klasy CSS do modułu</h4>
<p>Dodawanie specjalnej klasy pozwoli Ci stworzyć stylizację modułu, stosując reguły CSS.</p>
<ul class="index-list">
    <li>
        <p>Any wyznaczyć specjalną klasę dla modułu, otwórz menu w bloku modułu (ikonka 'wielokropek') (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-module-add-class-1.png" alt=""></figure>
    </li>
    <li>
        <p>Następnie wciśnij przycisk 'Edytuj ustawienia' (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-module-add-class-2.png" alt=""></figure>
    </li>
    <li>
        <p>Wyznacz specjalną klasę (3) w oknie wyskakującym oraz wciśnij przycisk 'Potwierdz' (4).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-module-add-class-3.png" alt=""></figure>
    </li>
    <li>
        <p>Specjalna klasa została dodana.</p>
    </li>
</ul>
<h4>Eksportowanie presetów</h4>
<p>Narzędzie eksportowanie pozwoli ci wyeksportować presety dla dalszego importu w różne sklepy.</p>
<ul class="index-list">
    <li>
        <p>Przejdź do zakładki 'Narzędzia' (1) na głównym panelu konfiguracyjnym.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-export-preset-1.png" alt=""></figure>
    </li>
    <li>
        <p>Wybierz 'Eksportuj' (2) w formularzu.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-export-preset-2.png" alt=""></figure>
    </li>
    <li>
        <p>Zobaczysz listę istniejących presetów w zaczepkach na witrynie.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-export-preset-3.png" alt=""></figure>
    </li>
    <li>
        <p>Aby otrzymać podgląd presetu, wciśnij przycisk 'Podgląd układu' (3) obok potrzebnego Ci presetu; aby
            wyeksportować, wciśnij przycisk 'Eksportuj układ' (4).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-export-preset-4.png" alt=""></figure>
    </li>
    <li>
        <p>Po tym będziesz mógł pobrać ten preset jako archiwum zip.</p>
    </li>
</ul>
<h4>Importuj preset</h4>
<p class="alert alert-warning">Narzędzie importowania akceptuje jedynie pliki *.zip które były poprzednio wygenerowane
    za pomocą tego samego narzędzia Eksportowania modułu.</p>
<ul class="index-list">
    <li>
        <p>Aby zaimportować swój preset, otwórz zakładkę <strong>Narzędzia (1)</strong> i wybierz <strong>'Importuj'
                (2)</strong>.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-import-preset-1.png" alt=""/></figure>
    </li>
    <li>
        <p>Następnie wciśnij przycisk <strong>Dodaj plik (3)</strong> i wybierz plik zip swojego eksportowanego presetu.
            W razie jeżeli to archiwum jest wyeksportowanym presetem, wyświetli się ten podgląd presetu.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-import-preset-2.png" alt=""/></figure>
    </li>
    <li>
        <p>Jeżeli ten preset odpowiada Twoim potrzebom, wciśnij <strong>'Importuj' (4)</strong>. Preset zostanie
            zaimportowany oraz dodany do listy dostępnych presetów.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-import-preset-3.png" alt=""/></figure>
    </li>
</ul>
<h4>Zresetuj</h4>
<p>Zresetuj - przywraca wszystkie presety do ich stanu początkowego (czyli tak jak były dostarczone razem z motywem),
    przy czym wszystkie presety specjalne, stworzone przez użytkownika, będą usunięte.</p>
<p class="alert alert-warning">Uwaga! Po przywróceniu presetów do stanu domyślnego, wszystkie presety specjalne zostaną
    usunięte!</p>
<ul class="index-list">
    <li>
        <p>Aby zresetować presety, przejdź do zakładki 'Narzędzia' (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-reset-1.png" alt=""></figure>
    </li>
    <li>
        <p>W bloku, który się pojawi, otwórz zakładkę 'Zresetuj' (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-reset-2.png" alt=""></figure>
    </li>
    <li>
        <p>Po czym wciśnij 'Przywróć do stanu początkowego'.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-reset-3.png" alt=""></figure>
    </li>
    <li>
        <p>I po wszystkim. </p>
    </li>
</ul>
<h4>Stylizacja</h4>
<ul class="index-list">
    <li>
        <p>Style tła. Opis pól:</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-styles-1.png" alt=""/></figure>
        <ul class="marked-list">
            <li>background-image (obrazek tła) - twierdzenie jest linkiem prowadzącym do obrazku. Obrazek jest wybrany z
                folderu ~/images/cms/ .
            </li>
            <li>background-color (kolor tła) - wartość może być ustawiona w jakimkolwiek formacie kolorów (rgb, hex
                etc.). Możesz wybrać kolor, wykorzystując narzędzie colorpicker.
            </li>
            <li>background-repeat (powtórzenie tła) - wszystkie dostępne opcje znajdują się wśród przycisków opcji.</li>
            <li>background-position (pozycja tła) - wszystkie dostępne opcje znajdują się w liście rozwijanej.</li>
            <li>background-size (rozmiar tła) - wszystkie dostępne opcje znajdują się w liście rozwijanej.</li>
            <li>background-origin (obszar położenia obrazu tła) - wszystkie dostępne opcje znajdują się w liście
                rozwijanej.
            </li>
        </ul>
    </li>
    <li><p>Style Obwódki.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-styles-2.png" alt=""/></figure>
        <ul class="marked-list">
            <li>TYP: border-top-style (styl górnej obwódki), border-right-style (styl prawej obwódki), border-left-style
                (styl lewej obwódki), border-bottom-style (styl dolnej obwódki) - wszystkie dostępne opcje znajdują się
                w liście rozwijanej.
            </li>
            <li>SZEROKOŚĆ: border-top-width (szerokość obwódki górnej), border-right-width (szerokość obwódki prawej),
                border-left-width (szerokość obwódki lewej), border-bottom-width (szerokość obwódki dolnej) - wartość ma
                być ustawiona w pikselach.
            </li>
            <li>PROMIEŃ: border-top-right-radius (prawy górny promień obwódki), border-top-left-radius (lewy górny
                promień obwódki), border-bottom-right-radius (prawy dolny promień obwódki), border-bottom-left-radius
                (lewy dolny promień obwódki) - wartość ma być ustawiona w pikselach.
            </li>
            <li>KOLOR: border-top-сolor (kolor obwódki górnej), border-right-color (kolor obwódki prawej),
                border-left-color (kolor obwódki lewej), border-bottom-color (kolor obwódki dolnej) - wartość może być
                ustawiona w jakimkolwiek formacie kolorów (rgb, hex, etc.). Możesz wybrać kolor, wykorzystując narzędzie
                colorpicker.
            </li>
        </ul>
    </li>
    <li><p>Inne style.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-styles-3.png" alt=""/></figure>
        <ul class="marked-list">
            <li>box-shadow (cień w polu) - na przykład: 0px 0px 0px 0px rgba(0,0,0,0.75).</li>
        </ul>
    </li>
</ul>
<h4>Usunięcie styli elementów</h4>
<ul class="index-list">
    <li>
        <p>Aby usunąć style elementów, otwórz sekcję stylizacji elementów i wciśnij przycisk 'Usuń style' (1)</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-clear-styles-1.png" alt=""/></figure>
    </li>
</ul>
<h4>Ostrzeżenia</h4>
<p>Jeżeli w bloku elementu modułu pojawi się następujący komunikat, należy uaktywnić wspomniany moduł.</p>
<figure class="img-polaroid"><img src="img/tmmegalayout-module-warning-1.png" alt=""></figure>
<p>Jeżeli w bloku elementu modułu pojawi się następujący komunikat, należy zainstalować wspomniany moduł.</p>
<figure class="img-polaroid"><img src="img/tmmegalayout-module-warning-2.png" alt=""></figure>
<p class="alert alert-warning">Jeżeli usunąłeś lub deaktywowałeś moduł 'TM-Mega Uklład', wszystkie aktywne presety
    zostaną wyłączone i zobaczysz pozycje (zaczepki) w ich pierwotnym (początkowym) wyglądzie.</p>