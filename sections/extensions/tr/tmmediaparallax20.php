<h3>TM Media Parallax 2.0</h3>
<p>Bu modül sayesinde, sayfanýzdaki Belge Neslesi Modeli'ne (DOM) parallax efekti ekleyebilirsiniz. Çoklu-katman parallaxý oluþturabilirsiniz. Ayrýca arkaplan videosu (kendi bilgisayarýnýzdan yükleyerek veya YouTube adresi vererek) da ekleyebilirsiniz.</p>
<h4 id="tmmediaparallax-mainpanel">TM Media Parallax Ana Panel</h4>
<p>Modülün ana panelinden parallaxlarý ekleyebilir, silebilir veya düzenleyebilirsiniz.</p>
<figure class="img-polaroid"><img src="img/main-panel.jpg" alt="" /></figure>
<h4 id="tmmediaparallax-add">Yeni bir parallax oluþturmak</h4>
<p>Yeni bir parallaz oluþturmak için, panelin sað üst köþesindeki 'plus'(1) ikonuna týklayýn.</p>
<figure class="img-polaroid"><img src="img/main-panel-add-item.jpg" alt="" /></figure>
<p>Karþýnýza bir form çýkacak.</p>
<figure class="img-polaroid"><img src="img/add-item.jpg" alt="" /></figure>
<h4>Parallax eklemek için form seçenekleri</h4>
<ul class="index-list">
    <li>Selector - uygulanacak olan parallax efekti için CSS stil seçeneði. Örn: '#header .nav'</li>
    <li>Item status - öge durumu (kapalýysa parallax gösterilmez)</li>
    <li>Speed - ana parallax kutusunun hýzý için 0-2 arasý sayý</li>
    <li>Offset - ana katman satýrbaþýnýn Y aksanýna oraný</li>
    <li>Inverse - parallax yönü</li>
    <li>Fade - sayfa kaydýrýldýðýnda parallax kutusunun yavaþça kaybolmasý</li>
    <li>Forced full width - parallax kutusunun tam geniþliðe zorlanmasý</li>
</ul>
Tüm gerekli alanlarý doldurduktan sonra 'Save' (Kaydet) e týklayýnýz.
<h4 id="layouts-list">Parallax katman listesi.</h4>
<p>Parallax katmanlarýnýn listesinii görmek için, ana parallax ögesinin yanýndaki 'View'(1)(Göster) e basýnýz.</p>
<figure class="img-polaroid"><img src="img/main-panel-view.jpg" alt="" /></figure>
<p>Katmanlar eklendikten sonra gösterilen bir tablo göreceksiniz.</p>
<figure class="img-polaroid"><img src="img/layouts-panel.jpg" alt="" /></figure>
<h4 id="layout-list">Parallax katman listesi.</h4>
<p>Yeni bir parallax katmaný oluþturmak için, katman panelinin sað üst köþesinden 'plus'(1) ikonuna basýnýz.</p>
<figure class="img-polaroid"><img src="img/layouts-panel-add.jpg" alt="" /></figure>
<p>Karþýnýza bir form çýkacak.</p>
<figure class="img-polaroid"><img src="img/add-layout.jpg" alt="" /></figure>
Tüm gerekli alanlarý doldurduktan sonra 'Save' (Kaydet) e týklayýnýz.
<h4 id="layouts-type">Parallax katman türleri ve alanlarý</h4>
<ul class="index-list">
    <li>Image-background - parallax arkaplaný için görsel
        <ul class="marked-list">
            <li>Item status - öge durumu (kapalýysa parallax gösterilmez)</li>
            <li>Layout speed - ana parallax kutusunun hýzý için 0-2 arasý sayý</li>
            <li>Offset - ana katman satýrbaþýnýn Y aksanýna oraný</li>
            <li>Inverse - parallax yönü</li>
            <li>Fade - sayfa kaydýrýldýðýnda parallax kutusunun yavaþça kaybolmasý</li>
            <li>Image - parallax efektinin uygulanacaðý görselin baðlantý yolu</li>
            <li>Sort order - diðer ögelere göre katmanýn pozisyonu</li>
        </ul>
    </li>
    <li>Video-background - parallax arkaplaný için kullanýlacak olan video
        <ul class="marked-list">
            <li>Item status - öge durumu (kapalýysa parallax gösterilmez)</li>
            <li>Layout speed -ana parallax kutusunun hýzý için 0-2 arasý sayý</li>
            <li>Offset - ana katman satýrbaþýnýn Y aksanýna oraný</li>
            <li>Inverse - parallax yönü</li>
            <li>Fade - sayfa kaydýrýldýðýnda parallax kutusunun yavaþça kaybolmasý</li>
            <li>Image - ek görsel için baðlantý yolu</li>
            <li>Video parallax mp4 - mp4 formatýndaki video</li>
            <li>Video parallax webm - webm formatýndaki</li>
            <li>Sort order - diðer ögelere göre katmanýn pozisyonu</li>
        </ul>
    </li>
    <li>Text - text layer which position can be defined with CSS
        <ul class="marked-list">
            <li>Item status - öge durumu (kapalýysa parallax gösterilmez)</li>
            <li>Layout speed - ana parallax kutusunun hýzý için 0-2 arasý sayý</li>
            <li>Offset - ana katman satýrbaþýnýn Y aksanýna oraný</li>
            <li>Inverse - parallax yönü</li>
            <li>Fade - sayfa kaydýrýldýðýnda parallax kutusunun yavaþça kaybolmasý</li>
            <li>Content - katman içeriði</li>
            <li>Specific class - bu katman için CSS sýnýfý</li>
            <li>Sort order - diðer ögelere göre katmanýn pozisyonu</li>
        </ul>
    </li>
    <li>Youtube-background - YouTube video used as a parallax background
        <ul class="marked-list">
            <li>Item status - öge durumu (kapalýysa parallax gösterilmez)</li>
            <li>Layout speed - ana parallax kutusunun hýzý için 0-2 arasý sayý</li>
            <li>Offset - ana katman satýrbaþýnýn Y aksanýna oraný</li>
            <li>Inverse - parallax yönü</li>
            <li>Fade - sayfa kaydýrýldýðýnda parallax kutusunun yavaþça kaybolmasý</li>
            <li>Video id - YouTube video ID</li>
            <li>Sort order - diðer ögelere göre katmanýn pozisyonu</li>
        </ul>
    </li>
    <li>Image - image layer which position can be defined with CSS
        <ul class="marked-list">
            <li>Item status - öge durumu (kapalýysa parallax gösterilmez)</li>
            <li>Layout speed - ana parallax kutusunun hýzý için 0-2 arasý sayý</li>
            <li>Offset - ana katman satýrbaþýnýn Y aksanýna oraný</li>
            <li>Inverse - parallax yönü</li>
            <li>Fade - sayfa kaydýrýldýðýnda parallax kutusunun yavaþça kaybolmasý</li>
            <li>Image - parallax efektinin uygulanacaðý görselin baðlantý yolu</li>
            <li>Specific class - bu katman için CSS sýnýfý</li>
            <li>Sort order - diðer ögelere göre katmanýn pozisyonu</li>
        </ul>
    </li>
</ul>
<h4 id="file-manager">Sunucuya video ve görsel yüklemek</h4>
<p>Sunucuya bir dosya yööneticisiyle video veya görsel yüklemek için öncelikle gerekli olan dosyanýn yanýndaki 'file'(1) ikonuna týklamalýsýnýz.</p>
<figure class="img-polaroid"><img src="img/upload-file.jpg" alt="" /></figure>
<p>Açýlan penceredeki 'actions' satýrýndan 'upload'(2) seçmelisiniz.</p>
<figure class="img-polaroid"><img src="img/upload-file-2.jpg" alt="" /></figure>
<p>Þimdi bir açýlýr pencere ile karþýlaþacaksýnýz. Buradan video veya görseli yükleyebilirsiniz.</p>
<h4 id="layout-info">Uyarý ve öneriler</h4>
<ul class="index-list">
    <li>Parallax efekti mobile cihazlarda (akýllý telefonlar, tabletler) otomatik olarak kapalýdýr. Arkaplan olarak en üstteki kutunun katman görseli gösterilir.</li>
    <li>Parallax kutusunun tam geniþlikte gösterlmesine zorlanmýþsa, sayfanýn yüklenmesi daha çok zaman alýr.</li>
    <li>Yüklenen videonun boyutu ne kadar küçükse o kadar iyidir.</li>
</ul>