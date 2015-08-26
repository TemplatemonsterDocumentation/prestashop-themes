<h3>Manualna instalacja szablonu z przykładowych danych</h3>

<p>Po zainstalowaniu <strong>Sample data,</strong> wygląd sklepu PrestaShop będzie taki
    sam, jak w szablonie live demo. Będzie on zawierał wszystkie przykładowe produkty,
    ustawienia sklepowe, ustawienia modułów, itp.</p>

<p class="alert alert-danger">Proszę nie używaj przykładowych danych na swojej aktualnej stronie internetowej!
    Zastąpią one wszystkie produkty sklepu i ustawienia sklepowe.</p>

<p class="alert alert-warning">Upewnij się, że Twoja wersja PrestaShop jest zgodna z wersją w zakładce Technical
    Details, wspomnianej w PrestaShop Engine: 1.X.X.X.
    Również, upewnij się, że prefix bazy danych to <strong>ps_</strong>. Tylko wtedy, gdy silnik PrestaShop zgadza
    się z wybraną wersją, zainstaluj dane przykładowe. </p>

<h4>Przesyłanie plików szablonu</h4>

<p>Aby przesłać szablon do serwera:</p>
<ol class="index-list">
    <li>Otwórz pakiet szablonu.</li>
    <li>Następnie przejdź do folderu <strong>/theme/manual_install/</strong>.</li>
    <li>Prześlij foldery <strong>/img/</strong>, <strong>/modules/</strong> oraz
        <strong>/themes/</strong> do katalogu głównego PrestaShop.
    </li>
</ol>
<p class="alert alert-info">Możesz sprawdzić szczegółowy wideo tutorial na <a target="_blank"
                                                                        href="/help/how-upload-files-server-2.html">jak
        przesłać pliki na serwer za pomocą menadżera FTP</a> oraz <a
        href="/help/how-to-upload-files-to-a-server-using-cpanel-webhost-manager-whm.html"
        target="_blank">jak przesłać pliki na serwer przy użyciu cPanel (WebHost
        Manager, WHM)</a>.</p>

<h4>Instalacja przykładowych danych </h4>

<p>Przykładowe dane są oferowane jako plik .sql. Znajduje się on w <strong>theme/manual_install/</strong>
    pakiecie szablonu i jest nazywany <strong>dump.sql</strong>.</p>

<p>Plik dump.sql można zainstalować przy użyciu narzędzia phpMyAdmin lub innego
    narzędzia do zarządzania bazami danych w panelu kontrolnym hostingu. Ten szczegółowy
    tutorial <a target="_blank"
                href="/help/phpmyadmin-how-to-import-sample-data-dump-file-phpmyadmin.html">jak
        zainstalować pliki SQL</a> może być przydatny.</p>

<p class="alert alert-warning">Przed wykonaniem kolejnych czynności, należy wykonać kopię zapasową bazy danych.
    Możesz sprawdzić szczegółowy wideo tutorial <a
        target="_blank" href="/help/phpmyadmin-how-to-backup-a-database.html">jak
        wykonać kopię zapasową bazy danych.</a>.</p>


<p class="alert alert-danger">Prosimy upewnij się, że wersja silnika PrestaShop odpowiada wymogom szablonu. W
    przeciwnym razie, baza danych zostanie uszkodzona.</p>

<p>Po zakończeniu instalacji pliku dump.sql, musisz aktywować szablon.</p>

<p>Z panelu administratora PrestaShop, przejdź do <strong>Preferences > Themes</strong>,
    wybierz Twój szablon w sekcji <strong>Themes</strong> oraz kliknij
    <strong>Save</strong>.</p>

<h4>Dodawanie języków do sklepu
    internetowego. </h4>

<p>Po zainstalowaniu wielojęzycznego szablonu, otrzymasz możliwość dodawania wszystkich
    języków dostępnych w nim (angielski, francuski, hiszpański, niemiecki, rosyjski) do
    platformy sklepu internetowego. Można to zrobić w następujący sposób: </p>

<p>Przejdź do <strong>'Localization > Translations'</strong> w panelu administratora,
    znajdź <strong>'ADD/UPDATE A LANGUAGE'</strong> i dodaj języki, wybierając je z
    rozwijanego menu
    <small>(1)</small>
    oraz kliknij przycisk <strong>'Add or update a language'</strong>
    <small>(2)</small>
    .
</p>
<figure class="img-polaroid">
    <img alt="" src="img/01-language-update.png"/>
</figure>

<p>Jeśli nie chcesz mieć poszczególnych języków, można je usunąć
    <small>(2)</small>
    lub je wyłączyć
    <small>(1)</small>
    w menu <strong>'Localization > Languages'</strong>.
</p>
<figure class="img-polaroid">
    <img alt="" src="img/02-language-update.png"/>
</figure>