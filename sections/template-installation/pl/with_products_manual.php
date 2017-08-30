<h3>Ręczne instalowanie szablonu z danymi przykładowymi</h3>
<p>Aby Twój sklep PrestaShop wyglądał tak samo, jak demonstracja szablonu na żywo, będziesz musiał zainstalować <strong>dane
        przykładowe</strong>. Zawarte w nich będą wszystkie produkty demonstracyjne, kategorie, moduły oraz ustawienia
    sklepu.</p>
<p class="alert alert-danger">W żadnym razie nie stosuj dane przykładowe na swojej już uruchomionej witrynie
    internetowej! Spowoduje to usunięcie wszystkich obecnych ustawień i produktów w twoim sklepie i zastąpienie ich
    danymi przykładowymi.</p>
<p class="alert alert-warning">Upewnij się, że Twoja wersja silnika PrestaShop odpowiada wersji zaznaczonej w zakładce
    &quot;Szczegóły Techniczne&quot;, gdzie będzie ona sprecyzowana jak &quot;Silnik PrestaShop (Prestashop Engine):
    wersja 1.X.X.X&quot;. <br/>
    Ponadto, upewnij się że twoje tablicy bazy danych mają prefiks <strong>ps_</strong>. Instaluj przykładowe dane
    wyłącznie jeżeli twój silnik PrestaShop odpowiada podanej wersji. </p>
<h4>Przesyłanie plików szablonu</h4>
<p>Aby przesłać szablon na swój serwer, postępuj następująco:</p>
<ol class="index-list">
    <li>Otwórz pakiet szablonu.</li>
    <li>Następnie przejdź do folderu <strong>/theme/manual_install/</strong> .</li>
    <li>Prześlij foldery <strong>/img/</strong>, <strong>/modules/</strong> oraz <strong>/themes/</strong> do katalogu
        głównego PrestaShop.
    </li>
</ol>
<p class="alert alert-info">Możesz zapoznać się z dokładniejszym samouczkiem: <a target="_blank"
                                                                                 href="/help/how-upload-files-server-2.html">jak
        przesyłać pliki na serwer za pomocą menadżera FTP </a> oraz <a
            href="/help/how-to-upload-files-to-a-server-using-cpanel-webhost-manager-whm.html" target="_blank">jak
        przesyłać pliki na serwer za pomocą cPanel (WebHost Manager, WHM)</a>.</p>
<h4>Instalowanie danych przykładowych</h4>
<p>Dane przykładowe dostarczane są jako plik .SQL. Plik ten ulokowany jest w <strong>theme/manual_install/</strong>
    pakietu szablonu i nazywa się <strong>dump.sql</strong>.</p>
<p>Plik dump.sql może być zainstalowany za pomocą narzędzia phpMyAdmin lub jakiegokolwiek innego narzędzia zarządzania
    bazą danych na Twoim panelu sterowania hostingu. Dokładniejszy samouczek na temat tego <a target="_blank"
                                                                                              href="/help/phpmyadmin-how-to-import-sample-data-dump-file-phpmyadmin.html">jak
        instaluje się pliki SQL</a> może Ci wiele wyjaśnić.</p>
<p class="alert alert-warning">Zanim przejdziesz do następnych działań, prosimy sporządzić kopię zapasową swojej bazy
    danych. Możesz sprawdzić dokładniejszy samouczek wideo na temat tego <a target="_blank"
                                                                            href="/help/phpmyadmin-how-to-backup-a-database.html">jak
        sporządzić kopię zapasową bazy danych</a>.</p>
<p class="alert alert-danger">Upewnij się że Twoja wersja silnika PrestaShop odpowiada wymaganiom szablonu. Jeżeli tego
    nie zrobić, baza danych zostanie uszkodzona.</p>
<p>Po zakończeniu czynności z instalowaniem pliku dump.sql, trzeba uaktywnić szablon.</p>
<p>Z panelu administracyjnego PrestaShop przejdź do <strong>Preferencje > Motywy</strong>, wybierz swój szablon w sekcji
    <strong>Motywy</strong> i wciśnij przycisk <strong>Zachowaj</strong>.</p>