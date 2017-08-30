<h3>TM-Obrazki Listy Produktów</h3>
<p>Ten moduł wyświetla galerię wszystkich dostępnych zdjęć produktów na stronach listy produktów.</p>
<h5>Instalowanie oraz Usuwanie</h5>
<p>Moduł instaluje się oraz usuwa się w taki sam sposób jak każdy inny moduł PrestaShop.</p>
<h5>Konfiguracja modułu</h5>
<p>Moduł nie zawiera żadnych dodatkowych ustawień.</p>
<h5>Dodatkowe działania</h5>
<p>Aby uaktywnić funkcjonalność tego modułu, dodaj następujący wiersz kodu:</p>
<p><code>{hook h='displayProductListGallery' product=$product}</code></p>
<p>w pliku <strong>product-list.tpl</strong> w folderze głównym swojego motywu po znaczniku zamykającym
    <code>&lt;/a&gt;</code> zawierającym klasę <code>.product_img_link</code> .</p>
