<h3>TM Mega Menu</h3>

<p>Modülün amacý bileþik menüler oluþturmaktýr. Bu modülle (alt menüsüz) tek unsur, alt menülü tek unsur ve çoklu
    sýra ve sütuna sahip olan alt menülü unsurlar yaratabilirsiniz. Modül, farklý pozisyonlarda kullanýlabilir fakat
    yine de ayný içeriði gösterir. Kullanýlabilecek olan pozisyonlar: üst(displayTop), sol(displayLeftColumn),
    sað(displayRightColumn), alt(displayFooter). Dilerseniz (alt kategorili) kategoriler, (alt kategorili) CMS
    kategorileri, (bir veya liste) imalatçýlar, (bir veya liste) tedarikçiler, (çoklu maðaza kullanýlmaktaysa)
    maðazalar, ürünlere baðlantý, ürünle ilgili bilgi kutusu, limitsiz baðlantýlar, limitsiz HTML kutularý ve
    bannerlar ekleyebilirsiniz. Detaylar için aþaðýya bakýnýz.</p>

<h4>TM Mega Menu Sekmeleri</h4>

<p>TM Mega Menu sekmeleri, üst menünün temel unsurlarýdýr.</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs.png" alt="">
</figure>

<p>Yeni bir sekme oluþturmak için, TM Mega Menu modülünü açýn ve Sekmelerin listelendiði tabloda yer alan +
    iþaretine basýn.</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add.png" alt="">
</figure>

<p>Karþýnýza çýkan formda gerekli alanlarý doldurun.</p>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Enter tab name</dt>
            <dd>varsayýlan dil için doldurulmasý zorunlu etiket ismidir. Eðer diðer dil alanlarý doldurulmamýþsa,
                sekme kendisine varsayýlan dilde bir isim oluþturur. Bu alanýn doldurulmasý zorunludur.
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Active</dt>
            <dd>etkin/pasif sekme.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Link</dt>
            <dd>bu sekme için kullanýlacak olan baðlantý. Belli bir baðlantý adresi yazabilir veya var olan
                seçeneklerden ( kategoriler, CMS kategorileri vs.) kullanabilirsiniz. Bu alaný boþ býrakýrsanýz, bu
                alan için baðlantý pasif olacaktýr.
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Sort order</dt>
            <dd>görüntülenecek olan sekmelerin sýrasý.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Specific Class</dt>
            <dd>unsuru belirleyecek olan sýnýf (CSS class).</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Enter tab badge</dt>
            <dd>çoklu dile göre doldurulur.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>It is Mega Menu</dt>
            <dd>bu sekmedeki alt menü bir Mega Menüdür.
                <strong>*</strong>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Use simple menu</dt>
            <dd>bu sekmedeki alt menü bir sýradan menüdür.
                <strong>**</strong>
            </dd>
        </dl>
    </li>
</ul>
<p>
    <strong>*</strong>
    Mega Menü'dür seçeneði seçilirse, karþýnýza bileþik menü (Mega Menü) oluþturmak için bir form çýkar.
</p>

<p>
    <strong>**</strong>
    Use simple menu (Tekli menü kullan). Bu seçenek seçilirse, tekli menü oluþturmak için karþýnýza bir form çýkar.
    Bu menüde içerik, basit bir sütun içinde gösterilir. Eðer içerik embedded (gömülü) bir içeriðe sahipse, yeni bir
    sütun eklenir.
</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form.png" alt="">
</figure>

<p>Bileþik menü satýrdan ve sütunlardan oluþan bir dizidir.</p>

<p>Satýrlar, Mega Menü yapýsýnýn bir parçasýdýr. Menünün sütunlarýný içerir. Ýlgili düðme týklanarak, varolan satýr
    kaldýrýlabilir. Bu durumda satýrýn içeriði de silinmiþ olur. Dilediðiniz kadar satýr oluþturabilirsiniz, sýnýr
    yoktur.</p>

<p>Sütun, sýralarýn içine yerleþtirilen Mega Menü yapýsýnýn bir parçasýdýr. Sütun geniþliði (Class) 2'den az ve
    12'den çok olamaz. Menünün düzgün görüntülenebilmesi için, toplam sütun geniþliði 12'yi aþmamalýdýr. Geniþlik
    (class) bir Bootstrap sütun türüdür ve ayný deðerlere tekabül eder.</p>

<p>Menüyü oluþturmak için, Add row (satýr ekle) düðmesine basýn</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-row.png" alt="">
</figure>

<p>Çýkan formda, Add column (sütun ekle) düðmesine basýn</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-row-col.png" alt="">
</figure>

<p>Karþýnýza çýkan açýlýr pencererede, sütun sýnýfýný belirleyin (2 ile 12 arasý). Sütun, zorunlu ayarlarý
    yaptýðýnýz alanýn yanýnda belirecektir,</p>
<p>buradan sütun sýnýfýný deðiþtirebilir, CSS sýnýfý ve ayrýca listeden gerekli içeriði ekleyebilirsinir. Eklemek
    veya silmek istediðiniz alanýn üstüne çift týklamalýsýnýz veya alanýn üzerine gelerek ilgili düðmeye
    basmalýsýnýz.</p>

<p>Kutunun altýnda yer alan Remove block düðmesiyle, kutuyu kaldýrabilirsiniz.</p>

<p>Satýrý kaldýrdýðýnýzda, ilgili sütunlarý da kaldýrmýþ olursunuz.</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-row-col-content.png" alt=""/>
</figure>

<p>Seçili menüdeki içeriðin yerini deðiþtirmek için, içeriðe çift týklayýn veya üstüne gelin ve ilgili düðmeye
    basýn.</p>


<p>Menü türünü deðiþtirirken, pasif menü bilgisi kaydedilir. Ýstediðiniz zaman menü türünü deðiþtirebilirsiniz.</p>


<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-simple.png" alt="">
</figure>

<h4>TM Mega Menu HTML</h4>

<p>Bu bölümde, Mega Menü'de nasýl bir HTML kutu oluþturabileceðinizi anlatacaðýz.</p>

<p>Modülde, sað üst köþesindeki + iþaretine basarak yeni kutu ekleyebileceðiniz bir tablo listesi bulunur.</p>

<h6>Buna bastýðýnýzda karþýnýza bir form çýkar. Gerekli alanlarý doldurun.</h6>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Enter HTML item name</dt>
            <dd>HTML kutusuna, kullanýlmakta olan dilde bir isim verin.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Specific class</dt>
            <dd>kutunun CSS sýnýfý.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>HTML content</dt>
            <dd>HTML içeriði.</dd>
        </dl>
    </li>
</ul>
<p>Added block will appear in the list of blocks, as well as in the list of available content while creating menu
    blocks.</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-html.png" alt="">
</figure>

<h4>TM Mega Menu Linkleri</h4>

<p>Bu bölümde Mega Menü'de nasýl baðlantý adresleri oluþturacaðýnýzý anlatacaðýz.</p>

<p>Modülde, sað üst köþesindeki + iþaretine basarak yeni baðlantý adresi ekleyebileceðiniz bir tablo listesi
    bulunur.</p>

<h6>Buna bastýðýnýzda karþýnýza bir form çýkar. Gerekli alanlarý doldurun.</h6>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Enter Link name</dt>
            <dd>baðlantýya, kullanýlmakta olan dilde bir isim yazýn.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Enter Link URL</dt>
            <dd>baðlantý adresini yazýn. Kullanýlmakta olan dil için doldurulmasý zorunlu alandýr.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Specific class</dt>
            <dd>kutunun CSS sýnýfý.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Open in new window</dt>
            <dd>baðlantý yeni sayfada açýlsýn mý?</dd>
        </dl>
    </li>
</ul>
<p>Eklenen baðlantý, menü kutularý oluþturulurken gösterilen içerik listesinde ve baðlantýlar listesinde
    gösterilir.</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-links.png" alt="">
</figure>

<h4>TM Mega Menu Bannerlarý</h4>

<p>Bu bölümde, Mega Menü'de nasýl banner oluþturacaðýnýzý anlatacaðýz.</p>

<p>Modülde, sað üst köþesindeki + iþaretine basarak yeni banner ekleyebileceðiniz bir tablo listesi bulunur.</p>

<h6>Karþýnýza çýkan formda gerekli alanlarý doldurun</h6>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Select a file</dt>
            <dd>dosya seçin. Kullanýlmakta olan dil için doldurulmasý zorunlu alandýr.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Enter Banner name</dt>
            <dd>banner ismi. Kullanýlmakta olan dil için doldurulmasý zorunlu alandýr.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Enter Link URL</dt>
            <dd>baðlantý URL'si. Kullanýlmakta olan dil için doldurulmasý zorunlu alandýr.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Specific class</dt>
            <dd>kutunun CSS sýnýfý.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Open in new window</dt>
            <dd>baðlantýyý yeni pencerede aç.</dd>
        </dl>
    </li>
</ul>
<p>Eklenen banner, menü kutularý oluþturulurken gösterilen içerik listesinde ve bannerlar listesinde
    görüntülenir.</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-banners.png" alt="">
</figure>