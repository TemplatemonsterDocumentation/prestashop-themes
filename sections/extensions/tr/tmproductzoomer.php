<h3>TM Product Zoomer</h3>

<p>Bu modül, tekli ürün sayfasýndaki ürün görselini yakýnlaþtýrmak için kullanýlan alternatif bir çözümdür. Ürünün küçük öngösterim görseliyle ve ürün özellikleriyle tamamen uyumludur. Modül geliþmiþ eklenti ayarlarýnda, görsel yakýnlaþtýrmasý için size üç seçenek sunar (window/lens/inner). Modül <a href="//igorlino.github.io/elevatezoom-plus/" target="_blank">Elevatezoom Plus</a> eklentisi baz alýnarak yapýlmýþtýr.</p>

<h5>Kurulum ve kaldýrma</h5>
<p>Bu modül de tüm diðer Prestashop modülleri gibi kurulup kaldýrýlabilir. Modül kurulduktan sonra standart ürün yakýnlaþtýrma efekti otomatik olarak devre dýþý kalýr. Modülü kaldýrdýktan sonra, gerek duyulursa standart ürün yaklaþtýrma manuel olarak tekrar etkinleþtirilmelidir. Bunu yapmak için <strong>Ayarlar->Ürünler->ürün sayfasýnda Fancybox yerine JqZoom kullan</strong> seçeneði iþaretlenmelidir.</p>

<h5>Modül ayarlarý</h5>
<p>Modül kurulduktan sonra, gerekli düzenlemeleri modül sayfasýndan yapabilirsiniz.</p>
<p>Varsayýlan düzenleme sayfasýnda <strong>sadeleþtirilmiþ</strong> seçenekler bulunmaktadýr.</p>
<figure class="img-polaroid">
    <img src="img/tmproductzoomer-1.png" alt=""/>
</figure>
<ol class="index-list">
    <li><strong>Live mode</strong> - modül açýk/kapalý </li>
    <li><strong>Fancybox</strong> - Fancybox'taki görsel týklandýðýnda büyütülsün.</li>
    <li><strong>Change image on hover</strong> - öngörüntüleme görselinin üstüne gelince ana görseli göster (varsayýlan ayar týklama bazlýdýr)</li>
    <li><strong>Responsive</strong> - mobil cihazlara uyarlanabilir eklenti kullan</li>
    <li><strong>Zoom Type</strong> - büyütülmüþ görselin gösterilme türünü seçin.
        <ul>
            <li><strong>window</strong> - büyütülmüþ görsel, ana görselin yanýndaki 16 konumda gösterilebilir.</li>
            <li><strong>lens</strong> - görsel, üst kýsmýnda bulunan lens alanýnda yakýnlaþtýrýlýr.</li>
            <li><strong>inner</strong> - görsel, üzerinde tam kapak ile ana görsel alanýnýn içinde yakýnlaþtýrýlýr.</li>
        </ul>
        <div class="alert alert-warning">Mobil cihazlarda hemen (&lt; 768) "lens" modu etkinleþtirilir</div>
    </li>
    <li><strong>Extended settings</strong> - tecrübeli kullanýcýlar için geniþletilmiþ, ileri düzeyde ayarlar. Bu alanýn yanýndan <a href="//igorlino.github.io/elevatezoom-plus/api.htm" target="_blank"> detaylý rehber</a> adresine bakabilirsiniz.</li>
</ol>
<p><strong>Geniþletilmiþ</strong> modül ayarlarý</p>
<ol class="index-list">
    <li><strong>Scroll Zoom</strong> - farenin çevirme tuþuyla yakýnlaþtýrma yapýlýr.
        (tüm türler için geçerlidir)</li>
    <li><strong>Cursor</strong> - büyütülmüþ görselin üzerine gelen imleç. Üç adet seçenek bulunur: varsayýlan, imleç, artý iþareti. (tüm türler için geçerlidir)</li>
    <li><strong>Zoom ayarlarý</strong> - (tüm türler için geçerlidir, eðer 'Scroll Zoom' etkinse)
        <figure class="img-polaroid"><img src="img/tmproductzoomer-2.png" alt="" /></figure>
        <ul>
            <li>Zoom Level - baþlangýçtaki yakýnlaþtýrma seviyesi</li>
            <li>Min Zoom Level - minimum yakýnlaþtýrma seviyesi</li>
            <li>Max Zoom Level - maksimum yakýnlaþtýrma seviyesi</li>
            <li>Scroll Zoom Increment - yakýnlaþtýrmadaki artýþ seviyesi</li>
        </ul>
    </li>
    <li><strong>Easing</strong> - büyütülmüþ görsel için efekt (tüm türler için geçerlidir)
        <figure class="img-polaroid"><img src="img/tmproductzoomer-3.png" alt="" /></figure>
        <ul>
            <li>Zoom Easing - efekt açýk/kapalý</li>
            <li>Easing Amount - efekt gecikme deðeri</li>
        </ul>
    </li>
    <li><strong>Image Crossfade</strong> - ama görselin üzerine (lens) gelindiðinde geri kalan alanlar bulanýklaþýr).
        (window ve lens için geçerlidir)</li>
    <li><strong>magnified image window settings</strong> - (window için geçerlidir)
        <figure class="img-polaroid"><img src="img/tmproductzoomer-4.png" alt="" /></figure>
        <ul>
            <li>Zoom Window Width - px deðerindeki pencere geniþliði px</li>
            <li>Zoom Window Height - px deðerindeki pencere uzunluðu</li>
            <li>Zoom Window Offset X - X'e göre pencere konumu</li>
            <li>Zoom Window Offset Y - Y'ye göre pencere konumu</li>
            <li>Zoom Window Position - pencerenin ana görsele oranla konumu (kullanýlabilir konumlar bu alanýn altýndaki görselde bulunmaktadýr)</li>
            <li>Zoom Window Bg Color - pencerenin arkaplan görseli (sadece transparan görseller için)</li>
            <li>Zoom Window Fade In - pencere yavaþ bir þekilde ortaya çýkar</li>
            <li>Zoom Window Fade Out - pencere yavaþ bir þekilde ortadan kaybolur</li>
            <li>Border Size - px deðerindeki pencere çerçeve kalýnlýðý</li>
            <li>Border Color - pencere çerçeve rengi</li>
        </ul>
    </li>
    <li><strong>Zoom Lens</strong> - yakýnlaþtýrma lensi (window ve lens için geçerlidir)
        <figure class="img-polaroid"><img src="img/tmproductzoomer-5.png" alt="" /></figure>
        <ul>
            <li>Zoom Lens - a.ýk/kapalý</li>
            <li>Lens Shape - lens türü. Þu deðerlerde olabilir: yuvarlak/yuvarlatýlmýþ veya kare/dikdörtgen</li>
            <li>Lens Color - lensin iç arkaplan rengi</li>
            <li>Lens Opacity - lensiç iç arkaplan þeffaflýðý</li>
            <li>Lens Size - px deðerindeki lens boyutu</li>
            <li>Lens Fade In - lensin gösterilme efektinin hýzý</li>
            <li>Lens Fade Out - lensin yok olma efektinin hýzý</li>
            <li>Lens Border - lens çerçeve geniþliði</li>
            <li>Lens Border Color - lens çerçeve rengi</li>
            <li>Contain Lens Zoom -  lensin ana görsel kutusunun dýþýna taþmasýnýn sýnýrlanmasý</li>
        </ul>
    </li>
    <li><strong>Tint</strong> - lensin dýþýnda kalan bölgenin gölgelendirilmesi (window için geçerlidir)
        <figure class="img-polaroid"><img src="img/tmproductzoomer-6.png" alt="" /></figure>
        <ul>
            <li>Tint - efekt açýk/kapalý</li>
            <li>Tint Color - lensin dýþ alanýnýn arkaplaný</li>
            <li>Tint Opacity - lensin dýþ alanýnýn þeffaflýðý</li>
            <li>Tint Fade In - gösterilme efektinin hýzý</li>
            <li>Tint Fade Out - kaybolma efektinin hýzý</li>
        </ul>
    </li>
</ol>
<div class="alert alert-info">Eðer zoom türünü deðiþtirirseniz, geliþtirilmiþ ayarlar da seçtiðiniz türe göre deðiþir.</div>
<div class="alert alert-warning">Geniþletilmiþ ayarlarý düzenlerken dikkatli olunuz. Düzenlemeler yanlýþ yapýlýrsa, efekt hoþ durmayabilir.</div>