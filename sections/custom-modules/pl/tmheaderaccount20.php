<h3>TM-Konto w Nagłówku 2.0</h3>
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
<p>Ten moduł pokazuje formularze logowania i rejestracji na witrynie internetowej. Może on znajdować się w następujących
    miejscach: w nagłówku witryny, w lewym oraz prawym kącie. Moduł pozwala zalogować się oraz zarejestrować się za
    pomocą sieci społecznościowych, zwłaszcza Facebook, Google+ oraz VK, co jest wygodne dla użytkowników witryny.
    Rejestracja lub logowanie odbywa się bez odświeżania strony.</p>
<h4>TM-Konto w Nagłówku—Główny Panel</h4>
<p>Panel Główny: Tu możesz nastawić moduł.</p>
<figure class="img-polaroid">
    <img src="img/tmheaderaccount200-1.png" alt=""/>
</figure>
<h4>Ustawienia</h4>
<p>Niniejszy moduł ma następujące ustawienia:</p>
<ul class="index-list">
    <li><p>Typ przeglądania - to ustawienie pozwala Ci wybrać sposób przeglądania formularza rejestracji. Może być
            wyświetlany w jeden z następujących wariantów:</p>
        <ul class="marked-list">
            <li><strong>Rozwijany</strong> - formularz będzie wyświetlany w kształcie bloku rozwijanego poniżej
                przycisku za pomocą którego się otwiera.
                <figure class="img-polaroid">
                    <img src="img/tmheaderaccount200-2.png" alt=""/>
                </figure>
            </li>
            <li><strong>Wyskakujący</strong> - formularz pojawi się w kształcie wyskakującego okna.
                <figure class="img-polaroid">
                    <img src="img/tmheaderaccount200-3.png" alt=""/>
                </figure>
            </li>
            <li><strong>Lewa Strona</strong> - formularz pojawi się po lewej stronie jako pasek boczny.
                <figure class="img-polaroid">
                    <img src="img/tmheaderaccount200-4.png" alt=""/>
                </figure>
            </li>
            <li><strong>Prawa Strona</strong> - formularz pojawi się po prawej stronie jako pasek boczny.
                <figure class="img-polaroid">
                    <img src="img/tmheaderaccount200-5.png" alt=""/>
                </figure>
            </li>
        </ul>
    </li>
    <li><p>Pokazuj styl po zalogowaniu się - to ustawienie pozwala zmieniać przeglądanie formularza po zalogowaniu
            się/zarejestrowaniu się. Można skorzystać z następujących wariantów:</p>
        <ul class="marked-list">
            <li><strong>Dwie Kolumny</strong> - lista podzielona jest na dwie kolumny.
                <figure class="img-polaroid">
                    <img src="img/tmheaderaccount200-6.png" alt=""/>
                </figure>
            </li>
            <li><strong>Jedna Kolumna</strong> - lista linków wyświetlana jest w jednej kolumnie.
                <figure class="img-polaroid">
                    <img src="img/tmheaderaccount200-7.png" alt=""/>
                </figure>
            </li>
        </ul>
    </li>
    <li>Domyślny awatar - to pole pojawia się tylko jeżeli włączona jest opcja 'Pokazuj Awatar'. Tutaj możesz zmienić
        domyślny awatar użytkownika.
    </li>
    <li>Pokazuj awatar - to ustawienie pozwala włączać albo wyłączać awatar użytkownika. Jeżeli użytkownik loguje się do
        konta na witrynie za pomocą jednej z sieci społecznościowych, awatar będzie pobrany z jego konta w wybranej
        przez niego sieci społecznościowej; w przeciwnym razie będzie pokazywany awatar załadowany przez administratora
        strony.
    </li>
    <li>Stosuj przekierowanie - jeżeli uaktywniono to ustawienie, rejestracja użytkownika oraz odzyskanie hasła odbędzie
        się na domyślnej stronie rejestracji/odzyskania hasła PrestaShop.
    </li>
    <li><p>Stosuj Login Facebook - to ustawienie pozwala włączyć rejestrację oraz logowanie użytkownika za pomocą sieci
            społecznościowej Facebook. Jeśli włączyć tą opcję, zobaczysz następujące ustawienia:</p>
        <ul class="marked-list">
            <li><strong>App ID </strong>- App ID Twojego konta z konta dewelopera Facebook.</li>
            <li><strong>App ID </strong>- Twój App ID z konta dewelopera Facebook.</li>
        </ul>
    </li>
    <li><p>Stosuj Login Google - to ustawienie pozwala włączyć rejestrację oraz logowanie użytkownika za pomocą sieci
            społecznościowej Google+. Jeśli włączyć tą opcję, zobaczysz następujące ustawienia:</p>
        <ul class="marked-list">
            <li><strong>App ID </strong>- App ID Twojego konta z konta dewelopera Google.</li>
            <li><strong>App Secret </strong>- Twój App Secret z konta dewelopera Google.</li>
            <li><strong>Przekierowanie URI</strong> - URL twojego sklepu internetowego +
                index.php?fc=module&module=tmheaderaccount&controller=googlelogin
            </li>
        </ul>
    </li>
    <li><p>Stosuj Login VK - to ustawienie pozwala włączyć rejestrację oraz logowanie użytkownika za pomocą sieci
            społecznościowej VK. Jeśli włączyć tą opcję, zobaczysz następujące ustawienia:</p>
        <ul class="marked-list">
            <li><strong>App ID </strong>- App ID Twojego konta z Twojego konta dewelopera VK.</li>
            <li><strong>App Secret </strong>- App Secret z Twojego konta dewelopera VK.</li>
            <li><strong>Przekierowanie URI</strong> - URL twojego sklepu internetowego +
                index.php?fc=module&module=tmheaderaccount&controller=vk
            </li>
        </ul>
    </li>
</ul>
<h5>Rejestwowanie aplikacji w sieciach społecznościowych:</h5>
<ul class="marked-list">
    <li><strong>Facebook</strong> - aby otrzymać App ID oraz App Secret, zarejestruj swoją aplikację tutaj: <a
                target="_blank" href="https://developers.facebook.com/apps">https://developers.facebook.com/apps</a>.
    </li>
    <li><strong>Google+</strong> - aby otrzymać App ID oraz App Secret, zarejestruj swoją aplikację tutaj: <a
                target="_blank" href="https://developers.google.com/accounts/docs/OAuth2/">https://developers.google.com/accounts/docs/OAuth2/</a>.
    </li>
    <li><strong>VK</strong> - aby otrzymać App ID oraz App Secret, zarejestruj swoją aplikację tutaj: <a target="_blank"
                                                                                                         href="https://vk.com/dev">https://vk.com/dev</a>.
    </li>
</ul>
