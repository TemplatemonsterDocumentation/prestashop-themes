<h3>TM-Mega Układ 1.0.0</h3>
<?php if ($project == 'eveprest') { ?>
    <div>
        <p style="margin-bottom: 0;">Dostępny dla:</p>
        <p style="margin-top: 0;" class="small text-secondary">Moda, Elektronika, Części Zapasowe, Meble, Sklep Jednego
            Produktu</p>
    </div>
<?php } ?>
<p>Ten moduł sprojektowany jest dla stworzenia specjalnych układów (presetów) dla zaczepek i wyświetlania ich na stronie
    zamiast w pozycjach domyślnych. Przewagą tego modułu jest to, że pozwala Ci stwarzać rozmaite markupy zaczepek oraz
    modyfikować je zgodnie z Twoimi potrzebami.</p>
<h4>Funkcjonalne charakterystyki oraz cechy modułu</h4>
<ul class="index-list">
    <li>
        <p>Wymagania:</p>
        <ul class="marked-list">
            <li><p>PrestaShop 1.6+</p></li>
            <li><p>PHP 5.4+</p></li>
        </ul>
    </li>
    <li>
        <p>Cechy:</p>
        <ul class="marked-list">
            <li><p>Moduł zawiera 5 zaczepek: 'Nagłówek', 'Kolumna Górna', 'Strona Domowa', 'Stopka' oraz 'Stopka
                    Produktu'.</p></li>
            <li><p>Jeżeli modułu nie ma w zaczepce, nie można go dodać do presetu.</p></li>
            <li><p>Moduł można wyświetlać tylko raz, zarówno w presecie jak i w zaczepce.</p></li>
            <li><p>Pozycja modułu w sekcji 'Moduły i Serwisy -&gt; Pozycje' nie wpływa na preset.</p></li>
            <li><p>Moduł nie pozwala Ci skonfigurować różniące się od siebie moduły. Nie możesz ustawić różniące się od
                    siebie konfigurację modułów dla różnych presetów.</p></li>
        </ul>
    </li>
</ul>
<h6>Moduł daje Ci możliwość zmieniać pozycję modułu i nastawić siatkę dla 3 zaczepek: displayTopColumn, displayHome,
    displayFooter. Zmieniając pozycję modułów w sekcji 'Moduły i Serwisy -&gt; Pozycje' nie wpłynie na pozycję modułów w
    presecie. Jeżeli moduł był poprzednio dodany do zaczepki, nie będzie można go dodać do presetu.</h6>
<h4>Integrowanie modułu w motyw</h4>
<p class="alert alert-warning"><span>Jeżeli nie dokonać tego kroku, Twoje presety nie pojawią się po stronie użytkownika.</span>
</p>
<ul class="index-list">
    <li><p>Kolumna górna. Żeby dodać specjalny preset do zaczepki topColumn, będziesz musiał dokonać następujących
            kroków:</p>
        <ul class="marked-list">
            <li>Otwórz plik <strong>/themes/your_theme/header.tpl</strong> w trybie edytowania.</li>
            <li>Znajdź następujący kod
                <pre class="codebox">{hook h=&quot;displayTopColumn&quot;}</pre>
            </li>
            <li>I zamiast niego wpisz:
                <pre class="codebox">
{assign var='displayMegaTopColumn' value={hook h='tmMegaLayoutTopColumn'}} {if $displayMegaTopColumn} {hook h='tmMegaLayoutTopColumn'} {else} {capture name='displayTopColumn'}{hook h='displayTopColumn'}{/capture} {if $smarty.capture.displayTopColumn} &lt;div id="slider_row" class="row"&gt; &lt;div id="top_column" class="center_column col-xs-12 col-sm-12">{$smarty.capture.displayTopColumn}&lt;/div&gt; &lt;/div&gt; {/if} {/if}</pre>
            </li>
        </ul>
    </li>
    <li><p>Strona Domowa. Żeby dodać specjalny preset do zaczepki Home (Strona Domowa), będziesz musiał dokonać
            następujących kroków:</p>
        <ul class="marked-list">
            <li>Otwórz plik <strong>/themes/your_theme/footer.tpl</strong> w trybie edytowania.</li>
            <li>Znajdź następujący kod:
                <pre class="codebox">
{if isset($HOOK_HOME) && $HOOK_HOME|trim} &lt;div class="home-column"&gt; &lt;div class="container"&gt; {$HOOK_HOME} &lt;/div&gt; &lt;/div&gt; {/if}</pre>
            </li>
            <li>I zamiast niego wpisz:
                <pre class="codebox">
{assign var='displayMegaHome' value={hook h='tmMegaLayoutHome'}} {if $displayMegaHome} {hook h='tmMegaLayoutHome'} {else} {if isset($HOOK_HOME) && $HOOK_HOME|trim} {$HOOK_HOME} {/if} {/if}</pre>
            </li>
        </ul>
    </li>
    <li><p>Stopka. Żeby dodać specjalny preset do zaczepki Footer (Stopka), będziesz musiał dokonać następujących
            kroków:</p>
        <ul class="marked-list">
            <li>Otwórz plik <strong>/themes/your_theme/footer.tpl</strong> w trybie edytowania.</li>
            <li>Znajdź następujący kod:
                <pre class="codebox">
{if isset($HOOK_FOOTER)} &lt;div class="footer-container"&gt; &lt;footer id="footer" class="container"&gt; &lt;div class="row"&gt; {$HOOK_FOOTER} &lt;/div&gt; &lt;/footer&gt; &lt;/div&gt; {/if}</pre>
            </li>
            <li>I zamiast niego wpisz:
                <pre class="codebox">
{assign var='displayMegaFooter' value={hook h='tmMegaLayoutFooter'}} {if isset($HOOK_FOOTER) || $displayMegaFooter} &lt;div class="footer-container"&gt; {if $displayMegaFooter} &lt;div id="footer"&gt; {$displayMegaFooter} &lt;/div&gt; {else} &lt;div id="footer" class="container"&gt; &lt;div class="row"&gt;{$HOOK_FOOTER}&lt;/div&gt; &lt;/div&gt; {/if} &lt;/div&gt; {/if}</pre>
            </li>
        </ul>
    </li>
    <li><p>Nagłówek. Żeby dodać specjalny preset do zaczepki Header (Nagłówek), będziesz musiał dokonać następujących
            kroków:</p>
        <ul class="marked-list">
            <li>Otwórz plik <strong>/themes/your_theme/header.tpl</strong> w trybie edytowania.</li>
            <li>Znajdź następujący kod:
                <pre class="codebox">
{capture name='displayNav'}{hook h='displayNav'}{/capture} {if $smarty.capture.displayNav} &lt;div class="nav"&gt; &lt;div class="container"&gt; &lt;div class="row"&gt; &lt;nav>{$smarty.capture.displayNav}&lt;/nav&gt; &lt;/div&gt; &lt;/div&gt; &lt;/div&gt; {/if} &lt;div&gt; &lt;div class="container"&gt; &lt;div class="row"&gt; &lt;div id="header_logo"&gt; &lt;a href="{if isset($force_ssl) && $force_ssl}{$base_dir_ssl}{else}{$base_dir}{/if}" title="{$shop_name|escape:'html':'UTF-8'}"&gt; &lt;img class="logo img-responsive" src="{$logo_url}" alt="{$shop_name|escape:'html':'UTF-8'}"{if isset($logo_image_width) && $logo_image_width} width="{$logo_image_width}"{/if}{if isset($logo_image_height) && $logo_image_height} height="{$logo_image_height}"{/if}/&gt; &lt;/a&gt; &lt;/div&gt; {if isset($HOOK_TOP)}{$HOOK_TOP}{/if} &lt;/div&gt; &lt;/div&gt; &lt;/div&gt;</pre>
            </li>
            <li>I zamiast niego wpisz:
                <pre class="codebox">
{assign var='displayMegaHeader' value={hook h='tmMegaLayoutHeader'}} {if isset($HOOK_TOP) || $displayMegaHeader} {if $displayMegaHeader} {$displayMegaHeader} {else} {capture name='displayNav'}{hook h='displayNav'}{/capture} {if $smarty.capture.displayNav} &lt;div class="nav"&gt; &lt;div class="container"&gt; &lt;div class="row"&gt; &lt;nav>{$smarty.capture.displayNav}&lt;/nav&gt; &lt;/div&gt; &lt;/div&gt; &lt;/div&gt; {/if} &lt;div&gt; &lt;div class="container"&gt; &lt;div class="row"&gt; &lt;div id="header_logo"&gt; &lt;a href="{if isset($force_ssl) && $force_ssl}{$base_dir_ssl}{else}{$base_dir}{/if}" title="{$shop_name|escape:'html':'UTF-8'}"&gt; &lt;img class="logo img-responsive" src="{$logo_url}" alt="{$shop_name|escape:'html':'UTF-8'}"{if isset($logo_image_width) && $logo_image_width} width="{$logo_image_width}"{/if}{if isset($logo_image_height) && $logo_image_height} height="{$logo_image_height}"{/if}/&gt; &lt;/a&gt; &lt;/div&gt; {$HOOK_TOP} &lt;/div&gt; &lt;/div&gt; &lt;/div&gt; {/if} {/if}</pre>
            </li>
        </ul>
    </li>
    <li><p>Stopka Produktu. Żeby dodać specjalny preset do zaczepki Product Footer (Stopka Produktu), będziesz musiał
            dokonać następujących kroków:</p>
        <ul class="marked-list">
            <li>Otwórz plik <strong>/themes/your_theme/product.tpl</strong> w trybie edytowania.</li>
            <li>Znajdź następujący kod:
                <pre class="codebox">
{if isset($HOOK_PRODUCT_FOOTER) &amp;&amp; $HOOK_PRODUCT_FOOTER}{$HOOK_PRODUCT_FOOTER}{/if} </pre>
            </li>
            <li>I zamiast niego wpisz:
                <pre class="codebox">
{assign var='displayMegaProductFooter' value={hook h='tmMegaLayoutProductFooter'}} {if isset($HOOK_PRODUCT_FOOTER) || $displayMegaFooter} {if $displayMegaProductFooter} {$displayMegaProductFooter product=$product category=$category} {else} {$HOOK_PRODUCT_FOOTER} {/if} {/if}</pre>
            </li>
        </ul>
    </li>
</ul>
<h4>Zaczepki</h4>
<p>Ten moduł ma 5 zaczepek które są dostępne według ustawień domyślnych:</p>
<ul class="index-list">
    <li>'Nagłówek' jest zaczepką w której skombinowane są 2 standardowe zaczepki: displayNav oraz displayTop. Ta
        zaczepka odpowiada nagłówku witryny internetowej.
    </li>
    <li>'Kolumna Górna' odpowiada oryginalnej zaczepce displayTopColumn. Ta zaczepka jest usytuowana od razu po zaczepce
        Header (Nagłówek).
    </li>
    <li>'Strona Domowa' odpowiada oryginalnej zaczepce displayHome. Ta zaczepka jest widoczna tylko na stronie
        domowej.
    </li>
    <li>'Stopka' odpowiada oryginalnej zaczepce displayFooter.</li>
    <li>'Stopka Produktu' odpowiada oryginalnej zaczepce displayFooterProduct, która jest pokazywana w stopce na stronie
        produktu.
    </li>
</ul>
<h4>TM-Mega Układ—Panel Główny</h4>
<p>Panel główny konfiguracji modułu TM-Mega Układ który pozwala Ci dodawać preset do wymaganej zaczepki oraz
    konfigurować preset.</p>
<figure class="img-polaroid"><img src="img/tmmegalayout100-main-panel.png" alt=""/></figure>
<h5>Dodawanie presetu</h5>
<ul class="index-list">
    <li>
        <p>Wciśnij '+ Dodaj Preset' (1) w potrzebnej Ci zakładce.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-preset-1.png" alt=""/></figure>
    </li>
    <li>
        <p>Następnie, wypełnij pole 'Wprowadź nazwę układu' w wyskakującym oknie, wprowadzając tytuł nowego presetu (2)
            w tym miejscu i wciskając 'Zachowaj' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-preset-2.png" alt=""/></figure>
    </li>
    <li>
        <p>Preset został pomyślnie stworzony; teraz jest na liście dostępnych presetów (4). Nowo powstały preset jest
            wybrany dla edytowania (5).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-preset-3.png" alt=""/></figure>
    </li>
</ul>
<h5>Aktywacja Presetu</h5>
<ul class="index-list">
    <li>
        <p>Przede wszystkim, wybierz potrzebny Ci preset z listy (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-activation-preset-1.png" alt=""/></figure>
    </li>
    <li>
        <p>Wciśnij przełącznik 'Stosuj jako domyślny' (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-activation-preset-2.png" alt=""/></figure>
    </li>
    <li>
        <p>Preset został aktywowany. Jeżeli wyświetlanie tego presetu jest potrzebne tylko na niektórych stronach,
            otwórz listę rozwijaną (3) oraz wybierz strony które potrzebujesz. Aby zastosować zmiany, kliknij poza
            obszarem listy. Preset pokazywany na wszystkich stronach będzie oznaczony wypełnioną gwiazdką w liście
            presetów zaś gdy preset pokazywany tylko na niektórych stronach będzie oznaczony częściowo wypełnioną
            gwiazdką.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-activation-preset-3.png" alt=""/></figure>
    </li>
</ul>
<h5>Usuwanie presetu</h5>
<p class="alert alert-warning"><span>Po usunięciu preseta już nie uda się go przywrócić</span></p>
<ul class="index-list">
    <li>
        <p>Aby usunąć preset, wybierz potrzebny Ci preset z listy (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-delete-preset-1.png" alt=""></figure>
    </li>
    <li>
        <p>Następnie wciśnij na kosz (2) pod tytułem presetu. </p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-delete-preset-2.png" alt=""></figure>
    </li>
    <li>
        <p>Preset został pomyślnie usunięty.</p>
    </li>
</ul>
<h5>Zmiana nazwy presetu</h5>
<ul class="index-list">
    <li>
        <p>Aby zmienić nazwę presetu, wybierz potrzebny Ci preset z listy (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-rename-preset-1.png" alt=""></figure>
    </li>
    <li>
        <p>Nasępnie wciśnij przycisk z ikonką ołówka (2) obok tytułu presetu.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-rename-preset-2.png" alt=""></figure>
    </li>
    <li>
        <p>Ustal nowy tytuł presetu (3) w wyskakującym oknie i wciśnij 'Zmień nazwę układu' (4).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-rename-preset-3.png" alt=""></figure>
    </li>
    <li>
        <p>Preset został pomyślnie przemianowany.</p>
    </li>
</ul>
<h4>Opakowanie</h4>
<p>Opakowanie nie ma domyślnie ustalonej klasy; nie jest to artykuł obowiązkowy.</p>
<h5>Dodawanie opakowania</h5>
<ul class="index-list">
    <li>
        <p>Aby stworzyć opakowanie, wciśnij '+ Dodaj opakowanie' (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-wrapper-1.png" alt=""></figure>
    </li>
    <li>
        <p>Opakowanie zostało dodane (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-wrapper-2.png" alt=""></figure>
    </li>
</ul>
<h5>Dodawanie specjalnie wybranej klasy CSS do opakowania</h5>
<p>Dodawanie specjalnie wybranej klasy pozwoli Ci opracować specjalną stylizację dla swojego opakowania, stosując reguły
    CSS.</p>
<ul class="index-list">
    <li>
        <p>Aby dodać klasę opakowania, wciśnij przycisk (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-wrapper-add-class-1.png" alt=""></figure>
    </li>
    <li>
        <p>Pojawi się okno wyskakujące, w którym należy wypełnić pole 'Wprowadź klasy opakowania' (2) oraz wcisnąć
            przycisk 'Potwierdz' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-wrapper-add-class-2.png" alt=""></figure>
    </li>
    <li>
        <p>Specjalna klasa została pomyślnie dodana.</p>
    </li>
</ul>
<h5>Usuwanie opakowania</h5>
<p class="alert alert-warning"><span>Usuwanie elementu presetu również spowoduje usunięcie elementów podrzędnych oraz ich styli.</span>
</p>
<ul class="index-list">
    <li>
        <p>Aby usunąć opakowanie, wciśnij przycisk koszu (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-delete-wrapper-1.png" alt=""></figure>
    </li>
    <li>
        <p>Opakowanie zostało pomyślnie usunięte.</p>
    </li>
</ul>
<h5>Stylizacja opakowania</h5>
<ul class="index-list">
    <li>
        <p>Aby dodać specjalne style do opakowania, kliknij ikonkę 'ołówek' (1) w bloku opakowania.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-wrapper-add-styles-1.png" alt=""></figure>
    </li>
    <li>
        <p>W następnym wyskakującym oknie wypełnij wszystkie wymagane pola (możesz sprawdzić sekcję 'Stylizacja' w
            dokumentacji) i wciśnij przycisk 'Zachowaj' (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-wrapper-add-styles-2.png" alt=""></figure>
    </li>
    <li>
        <p>Jeżeli wszystkie pola są wypełnione poprawnie, style zostaną zachowane.</p>
    </li>
</ul>
<h4>Wiersz</h4>
<p>Element wierszu z siatki Ładowanie początkowe. Jest to element wymagany.</p>
<h5>Dodawanie wierszu</h5>
<ul class="index-list">
    <li>
        <p>Aby wstawić nowy wiersz, wciśnij '+ Dodaj wiersz' (1) w bloku opakowania lub '+ Dodaj wiersz' (2) w bloku
            głównego presetu, albo '+ Dodaj wiersz' (3) w liście rozwijanej kolumny.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-row-1.png" alt=""></figure>
    </li>
    <li>
        <p>Wierz został pomyślnie dodany.</p>
    </li>
</ul>
<h5>Dodawanie specjalnie wybranej klasy CSS do wierszu</h5>
<p>Dodawanie specjalnej klasy pozwoli Ci stworzyć specjalną stylizację wierszu, stosując reguły CSS.</p>
<ul class="index-list">
    <li>
        <p>Aby dodać klasę do wierszu, powinieneś wcisnąć przycisk 'wielokropek' (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-edit-row-1.png" alt=""></figure>
    </li>
    <li>
        <p>W liście rozwijanej wybierz 'Edytuj wiersz' (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-edit-row-2.png" alt=""></figure>
    </li>
    <li>
        <p>Wypełnij pole 'Wprowadź klasy wierszy' (3) w oknie wyskakującym oraz wciśnij przycisk 'Potwierdz' (4).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-edit-row-3.png" alt=""></figure>
    </li>
    <li>
        <p>Specjalna klasa została pomyślnie dodana.</p>
    </li>
</ul>
<h5>Usuwanie wierszu</h5>
<p class="alert alert-warning">
    <span> Usuwanie elementu presetu również spowoduje usunięcie elementów podrzędnych oraz ich styli.</span></p>
<ul class="index-list">
    <li>
        <p>Any usunąć wiersz, otwórz menu (ikonka 'wielokropek') w bloku wierszu.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-delete-row-1.png" alt=""></figure>
    </li>
    <li>
        <p>W liście rozwijanej wybierz opcję 'Usuń' (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-delete-row-2.png" alt=""></figure>
    </li>
    <li>
        <p>Wierz został pomyślnie usunięty.</p>
    </li>
</ul>
<h5>Dodawanie styli do wierszu</h5>
<ul class="index-list">
    <li>
        <p>Any dodać style wierszu, otwórz menu (ikonka 'wielokropek') (1) w bloku wierszu.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-row-add-styles-1.png" alt=""></figure>
    </li>
    <li>
        <p>Wciśnij 'Stylizuj' (2) w liście rozwijanej.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-row-add-styles-2.png" alt=""></figure>
    </li>
    <li>
        <p>Pojawi się wyskakujące okno; wypełnij w nim wszystkie wymagane pola (możesz sprawdzić sekcję 'Stylizacja' w
            dokumentacji) i wciśnij przycisk 'Zachowaj' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-row-add-styles-3.png" alt=""></figure>
    </li>
    <li>
        <p>Jeżeli wszystkie pola są wypełnione poprawnie, style zostaną zachowane.</p>
    </li>
</ul>
<h4>Kolumna</h4>
<p>Jest to element posiadający blok z szerokością która jest konfigurowana dla różnych rozmiarów, na podstawie siatki
    Ładowanie Początkowe.</p>
<h5>Dodawanie kolumny</h5>
<ul class="index-list">
    <li>
        <p>Any wstawić kolumnę w potrzebny 'wiersz', otwórz menu (ikonka 'wielokropek') (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-col-1.png" alt=""></figure>
    </li>
    <li>
        <p>Wybierz '+ Dod Kol' (2) w liście.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-col-2.png" alt=""></figure>
    </li>
    <li>
        <p>Wypełnij pola (klasy ładowania początkowego col-xs*, col-sm*, col-md*, col-lg - bootstrap) w oknie
            wyskakującym i wciśnij przycisk 'Potwierdz' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-col-3.png" alt=""></figure>
    </li>
    <li>
        <p>Kolumna została pomyślnie dodana.</p>
    </li>
</ul>
<h5>Usuwanie kolumny</h5>
<p class="alert alert-warning">
    <span>Usuwanie elementu presetu również spowoduje usunięcie elementów podrzędnych oraz ich styli.</span></p>
<ul class="index-list">
    <li>
        <p>Any usunąć kolumnę, otwórz menu (ikonka 'wielokropek') (1) w bloku kolumny.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-detele-col-1.png" alt=""></figure>
    </li>
    <li>
        <p>Wciśnij 'Usuń' (2) w liście.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-detele-col-2.png" alt=""></figure>
    </li>
    <li>
        <p>Kolumna wraz ze wszystkimi jej elementami podrzędnymi została usunięta.</p>
    </li>
</ul>
<h5>Edytowanie kolumny</h5>
<ul class="index-list">
    <li>
        <p>Any edytować kolumnę, otwórz menu (ikonka 'wielokropek') (1) w bloku kolumny.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-edit-col-1.png" alt=""></figure>
    </li>
    <li>
        <p>Wciśnij 'Edytuj kolumnę' (2) w liście.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-edit-col-2.png" alt=""></figure>
    </li>
    <li>
        <p>Wypełnij pola (klasy ładowania początkowego col-xs*, col-sm*, col-md*, col-lg - bootstrap) w oknie
            wyskakującym i wciśnij 'Potwierdz' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-edit-col-3.png" alt=""></figure>
    </li>
    <li>
        <p>Kolumna została pomyślnie zedytowana.</p>
    </li>
</ul>
<h5>Dodawanie styli do kolumny</h5>
<ul class="index-list">
    <li>
        <p>Any dodać style kolumny, otwórz menu (ikonka 'wielokropek') (1) w bloku kolumny.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-col-add-styles-1.png" alt=""></figure>
    </li>
    <li>
        <p>W liście opcji wybierz i wciśnij 'Stylizuj' (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-col-add-styles-2.png" alt=""></figure>
    </li>
    <li>
        <p>Pojawi się wyskakujące okno; wypełnij w nim wszystkie wymagane pola (możesz sprawdzić sekcję 'Stylizacja' w
            dokumentacji) i wciśnij przycisk 'Zachowaj' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-col-add-styles-3.png" alt=""></figure>
    </li>
    <li>
        <p>Jeżeli wszystkie pola są wypełnione poprawnie, style zostaną zachowane.</p>
    </li>
</ul>
<h4>Moduł</h4>
<p>Moduł wyznaczony dla tej zaczepki.</p>
<h5>Dodawanie modułu</h5>
<p class="alert alert-warning"><span>Należy zachować ostrożność, dodawając moduły do presetu; niektóre moduły zaleca się stosować w razie gdy nie zmieniają widoczny układ, jak na przykład moduł 'Eksploracja danych dla zbierania danych statystycznych'.</span>
</p>
<ul class="index-list">
    <li>
        <p>Any dodać moduł do presetu, w bloku kolumny otwórz menu (ikonka 'wielokropek') (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-module-1.png" alt=""></figure>
    </li>
    <li>
        <p>W liście dostępnych opcji, wybierz i wciśnij przycisk '+ Dodaj Moduł' (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-module-2.png" alt=""></figure>
    </li>
    <li>
        <p>W razie potrzeby, możesz wprowadzić specjalną klasę (3) w oknie wyskakującym oraz wybrać moduł (4), po czym
            wcisnąć 'Potwierdz' (5).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-module-3.png" alt=""></figure>
    </li>
    <li>
        <p>Moduł został pomyślnie dodany.</p>
    </li>
</ul>
<h5>Usunięcie modułu</h5>
<p class="alert alert-warning">
    <span> Usuwanie elementu presetu również spowoduje usunięcie elementów podrzędnych oraz ich styli.</span></p>
<ul class="index-list">
    <li>
        <p>Any usunąć moduł, otwórz menu (ikonka 'wielokropek') (1) w bloku modułu.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-delete-module-1.png" alt=""></figure>
    </li>
    <li>
        <p>W liście dostępnych opcji wybierz i wciśnij 'Usuń' (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-delete-module-2.png" alt=""></figure>
    </li>
    <li>
        <p>Moduł został usunięty.</p>
    </li>
</ul>
<h5>Dodawanie specjalnie wybranej klasy CSS do modułu</h5>
<p>Dodawanie specjalnej klasy pozwoli Ci stworzyć stylizację modułu, stosując reguły CSS.</p>
<ul class="index-list">
    <li>
        <p>Any wyznaczyć specjalną klasę dla modułu, otwórz menu w bloku modułu (ikonka 'wielokropek') (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-module-add-class-1.png" alt=""></figure>
    </li>
    <li>
        <p>Następnie wciśnij przycisk 'Edytuj ustawienia' (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-module-add-class-2.png" alt=""></figure>
    </li>
    <li>
        <p>Wyznacz specjalną klasę (3) w oknie wyskakującym oraz wciśnij przycisk 'Potwierdz' (4).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-module-add-class-3.png" alt=""></figure>
    </li>
    <li>
        <p>Specjalna klasa została dodana.</p>
    </li>
</ul>
<h5>Logotyp, Prawo Autorskie</h5>
<p>Bloki Logotyp oraz Prawo Autorskie są edytowane w taki sam sposób jak moduły, jedynie że blok Logotyp można umieścić
    tylko w pozycji Nagłówek albo Stopka, zaś gdy blok Prawo Autorskie można umieścić tylko w pozycji Stopka.</p>
<h5>Eksportowanie presetów</h5>
<p>Narzędzie eksportowanie pozwoli ci wyeksportować presety dla dalszego importu w różne sklepy.</p>
<ul class="index-list">
    <li>
        <p>Przejdź do zakładki 'Narzędzia' (1) na głównym panelu konfiguracyjnym.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-export-preset-1.png" alt=""></figure>
    </li>
    <li>
        <p>Wybierz 'Eksportuj' (2) w formularzu.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-export-preset-2.png" alt=""></figure>
    </li>
    <li>
        <p>Zobaczysz listę istniejących presetów w zaczepkach na witrynie.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-export-preset-3.png" alt=""></figure>
    </li>
    <li>
        <p>Aby otrzymać podgląd presetu, wciśnij przycisk 'Podgląd układu' (3) obok potrzebnego Ci presetu; aby
            wyeksportować, wciśnij przycisk 'Eksportuj układ' (4).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-export-preset-4.png" alt=""></figure>
    </li>
    <li>
        <p>Po tym będziesz mógł pobrać ten preset jako archiwum zip.</p>
    </li>
</ul>
<h5>Importuj preset</h5>
<p class="alert alert-warning"><span>Narzędzie importowania akceptuje jedynie pliki *.zip które były poprzednio wygenerowane za pomocą tego samego narzędzia Eksportowania modułu.</span>
</p>
<ul class="index-list">
    <li>
        <p>Aby zaimportować swój preset, otwórz zakładkę <strong>Narzędzia (1)</strong> i wybierz <strong>'Importuj'
                (2)</strong>.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-import-preset-1.png" alt=""/></figure>
    </li>
    <li>
        <p>Następnie wciśnij przycisk <strong>Dodaj plik (3)</strong> i wybierz plik zip swojego eksportowanego presetu.
            W razie jeżeli to archiwum jest wyeksportowanym presetem, wyświetli się ten podgląd presetu.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-import-preset-2.png" alt=""/></figure>
    </li>
    <li>
        <p>Jeżeli ten preset odpowiada Twoim potrzebom, wciśnij <strong>'Importuj' (4)</strong>. Preset zostanie
            zaimportowany oraz dodany do listy dostępnych presetów.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-import-preset-3.png" alt=""/></figure>
    </li>
</ul>
<h5>Zresetuj</h5>
<p>Wciskając 'Zresetuj' przywracasz wszystkie presety do stanu początkowego (tak jak były dostarczone razem z szablonem)
    oraz porzucasz wszystkie już stworzone presety.</p>
<p class="alert alert-warning"><span>Uwaga! Po przywróceniu presetów do stanu domyślnego, wszystkie presety specjalne zostaną wyrzucone!</span>
</p>
<ul class="index-list">
    <li>
        <p>Aby zresetować presety, przejdź do zakładki 'Narzędzia' (1). W bloku, który się pojawi, otwórz zakładkę
            'Opcje' (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-reset-1.png" alt=""></figure>
    </li>
    <li>
        <p>Wciśnij przycisk 'Zresetuj'.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-reset-2.png" alt=""></figure>
    </li>
    <li>
        <p>I po wszystkim! Wszystkie presety zostały zresetowane do stanu początkowego.</p>
    </li>
</ul>
<!--optimization--> <h5>Optymizacja Styli oraz Skryptów</h5>
<p>Optymizacja styli i skryptów pozwala dodawać wykluczenia dla modułów w sekcji Nagłówek, na podstawie tego, jak są
    wykorzystywane w presetach. Pozwala to przyśpieszyć załadowanie strony. Optymizacja pracuje w trybie testowym.</p>
<p>Włączenie optymizacji:</p>
<ul class="index-list">
    <li>
        <p>Aby włączyć optymizację, otwórz zakładkę 'Narzędzia' (1) i wybierz zakładkę 'Opcje' (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-optimization-1.png" alt=""></figure>
    </li>
    <li>
        <p>W oknie które się pojawi możesz włączyć optymizację (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-optimization-2.png" alt=""></figure>
    </li>
</ul>
<p>Jeżeli optymizacja jest włączona podczas edytowania oraz uaktywniania presetów, optymizacja zostanie porzucona,
    pojawi się jednak okno sugerujące uruchomienie optymizacji. Nie ma potrzeby optymizować skrypty oraz style każdego
    razu kiedy zmieniasz presety. Najlepiej jest zoptymizować je po tym jak skończysz edytowanie.</p>
<figure class="img-polaroid"><img src="img/tmmegalayout100-optimization-3.png" alt=""></figure>
<h5>Stylizacja</h5>
<ul class="index-list">
    <li>
        <p>Style tła. Opis pól:</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-styles-1.png" alt=""/></figure>
        <ul class="marked-list">
            <li>background-image (obraz w tle) - URL obrazku lub wartość 'none' ('żadnego'). Obrazek jest wybrany z
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
        <figure class="img-polaroid"><img src="img/tmmegalayout100-styles-2.png" alt=""/></figure>
        <ul class="marked-list">
            <li>border-top-style (styl górnej obwódki), border-right-style (styl prawej obwódki), border-left-style
                (styl lewej obwódki), border-bottom-style (styl dolnej obwódki) (style obwódki) - wszystkie dostępne
                opcje znajdują się w liście rozwijanej.
            </li>
            <li>border-top-width (szerokość obwódki górnej), border-right-width (szerokość obwódki prawej),
                border-left-width (szerokość obwódki lewej), border-bottom-width (szerokość obwódki dolnej) (szerokość
                obwódek) - wartość ma być ustawiona w pikselach.
            </li>
            <li>border-top-сolor (kolor obwódki górnej), border-right-color (kolor obwódki prawej), border-left-color
                (kolor obwódki lewej), border-bottom-color (kolor obwódki dolnej) (kolor obwódek) - wartość może być
                ustawiona w jakimkolwiek formacie kolorów (rgb, hex, etc.). Możesz wybrać kolor, wykorzystując narzędzie
                colorpicker.
            </li>
            <li>border-top-right-radius (prawy górny promień obwódki), border-top-left-radius (lewy górny promień
                obwódki), border-bottom-right-radius (prawy dolny promień obwódki), border-bottom-left-radius (lewy
                dolny promień obwódki) (promień obwódki) - wartość ma być ustawiona w pikselach.
            </li>
        </ul>
    </li>
    <li><p>Inne style.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-styles-3.png" alt=""/></figure>
        <ul class="marked-list">
            <li>box-shadow (cień w polu) - na przykład:0px 0px 0px 0px rgba(0,0,0,0.75).</li>
        </ul>
    </li>
</ul>
<h5>Usuwanie styli elementów</h5>
<ul class="index-list">
    <li>
        <p>Aby usunąć style elementów, otwórz sekcję stylizacji elementów i wciśnij 'Usuń style' (1)</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-clear-styles-1.png" alt=""/></figure>
    </li>
</ul>
<h5>Ostrzeżenia</h5>
<p>Jeżeli w bloku elementu modułu pojawi się następujący komunikat, należy uaktywnić wspomniany moduł.</p>
<figure class="img-polaroid"><img src="img/tmmegalayout100-module-warning-1.png" alt=""></figure>
<p>Jeżeli w bloku elementu modułu pojawi się następujący komunikat, należy zainstalować wspomniany moduł.</p>
<figure class="img-polaroid"><img src="img/tmmegalayout100-module-warning-2.png" alt=""></figure>
<p>Jeżeli usunąłeś lub deaktywowałeś moduł 'TM-Mega Uklład', wszystkie aktywne presety zostaną wyłączone i zobaczysz
    pozycje (zaczepki) w ich pierwotnym (początkowym) wyglądzie.</p>