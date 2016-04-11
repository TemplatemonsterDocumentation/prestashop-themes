<h3>TM Product List Gallery</h3>

<p>Bu modül tüm ürünlerin görsellerini, ürün listesi sayfasýnda bir galeri olarak
    gösterir.</p>
<h5>Kurulum ve silme</h5>

<p>Bu modül, tüm diðer PrestaShop modülleri gibi kurulup silinebilmektedir.</p>
<h5>Modül ayarlarý</h5>

<p>Modülün herhangi bir ekstra ayarý bulunmamaktadýr.</p>
<h5>Ekler</h5>

<p>Modülün iþlevselliði için, temanýzýn kök dizininde bulunan
    <strong>product-list.tpl</strong> dosyasýndaki kapatma <code>&lt;/a&gt;</code>
    etiketinden sonra <code>.product_img_link</code> classý içine þu kodu eklemelisiniz:
</p>

<p><code>{hook h='displayProductListGallery' product=$product}</code></p>
