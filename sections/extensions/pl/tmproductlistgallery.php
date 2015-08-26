<h3>TM Product List Gallery</h3>

<p>Moduł wyświetla galerię wszystkich dostępnych zdjęć produktów na stronach list
    produktów.</p>
<h5>Instalacja oraz Usuwanie</h5>

<p>Moduł może być instalowany i usuwany jak każdy inny moduł Prestashop.</p>
<h5>Konfiguracja Modułu</h5>

<p>Moduł nie posiada żadnych dodatkowych ustawień.</p>
<h5>Dodatkowe działania</h5>

<p>Aby włączyć funkcję modułu, należy dodać następujący wiersz kodu:</p>

<p><code>{hook h='displayProductListGallery' product=$product}</code></p>

<p>do pliku <strong>product-list.tpl</strong>, znajdującego się w folderze głównym
    motywu po zamykającym tagu <code>&lt;/a&gt;</code> z klasą
    <code>.product_img_link</code>.</p>
