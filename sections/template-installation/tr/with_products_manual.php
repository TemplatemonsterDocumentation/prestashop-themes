<h3>Örnek veriyle manuel şablon kurulumu</h3>

<p><strong>Örnek veri</strong>yi kurduktan sonra, PrestaShop mağazanı şablonun
    demosundaki gibi gözükecektir. Tüm örnek ürünler, mağaza ayarları, modül ayarları vs
    ile.</p>

<p class="alert alert-danger">Örnek veriyi, aktif olan websiteniz için kullanmayın! Bu, tüm ürün ve mağaza
    ayarlarınızın değiştirilmesine sebep olur.</p>

<p class="alert alert-warning">Elinizdeki PrestaShop'un Teknik Detaylar sekmesinde belirtilen versiyonla aynı
    olduğuna emin olun: 1.X.X.X.
    Ayrıca veritabanı uzantınızı <strong>ps_</strong> şeklinde olması gerekir. Eğer elinizdeki PrestaShop
    belirtilenle aynıysa, örnek veriyi yükleyin.</p>

<h4>Şablon dosyalarını yüklemek</h4>

<p>Şablonu sunucunuza yüklemek için:</p>
<ol class="index-list">
    <li>Şablon paketini açın.</li>
    <li>Ardından <strong>/theme/manual_install/</strong> klasörüne gidin.</li>
    <li>Buradan <strong>/img/</strong>, <strong>/modules/</strong> ve
        <strong>/themes/</strong> klasörlerini PrestaShop ana dizinine yükleyin.
    </li>
</ol>
<p class="alert alert-info">Detaylı videoyu <a target="_blank" href="/help/how-upload-files-server-2.html">dosyaları
        sunucuya FTP yöneticisiyle yüklemek</a> ve <a
        href="/help/how-to-upload-files-to-a-server-using-cpanel-webhost-manager-whm.html"
        target="_blank">dosyaları sunucuya cPanel (WebHost Manager, WHM) kullanarak
        yüklemek</a> adreslerinden izleyebilirsiniz.</p>

<h4>Örnek veri kurulumu</h4>

<p>Örnek veri .SQL dosyası olarak bulunmaktadır. Şablon paketinizdeki <strong>theme/manual_install/</strong>
    bölümünde yer alır ve ismi <strong>dump.sql</strong>dir.</p>

<p>dump.sql, phpMyAdmin veya kontrol panelinizdeki farklı bir veritabanı yöneticisiyle
    kurulabilir. Detaylı bilgi için <a target="_blank"
                                       href="/help/phpmyadmin-how-to-import-sample-data-dump-file-phpmyadmin.html">SQL
        dosyalarını kurmak</a> adresine bakabilirsiniz.</p>

<p class="alert alert-warning">İşlemi onaylamadan önce, veritabanınızı yedekleyin. Bu işlem için <a
        target="_blank" href="/help/phpmyadmin-how-to-backup-a-database.html">veritabanını
        yedeklemek</a> videosunu izleyebilirsiniz.</p>


<p class="alert alert-danger">Elinizdeki PrestaShop'un, şablon gereksinimlerini karşıladığına emin olun. Yoksa
    veritabanı zarar görecektir.</p>

<p>dump.sql dosyasını kurduktan sonra şablonunuzu etkinleştirmeniz gerekir.</p>

<p>PrestaShop yönetici panelinden <strong>Ayarlar > Temalar</strong> bölümüne girin,
    <strong>Temalar</strong> bölümünden şablonunuzu seçin ve <strong>Kaydet</strong> e
    tıklayın.</p>

<h4>Mağazaya dil eklemek. </h4>

<p>Çoklu-dil şablonu yüklendikten sonra, mağazanıza desteklenen tüm dilleri
    ekleyebilirsiniz (İngilizce, Fransızca, İspanyolca, Almanca, Rusça). Uygulama
    adımları şu şekildedir: </p>

<p>Yönetici panelinden <strong>'Localization > Translations'</strong> bölümüne girin,
    <strong>'ADD/UPDATE A LANGUAGE'</strong> kısmını bulun de açılır listeden dil seçin
    <small>(1)</small>
    ardından <strong>'Add or update a language'</strong> e basın
    <small>(2)</small>
    .
</p>
<figure class="img-polaroid">
    <img alt="" src="img/01-language-update.png"/>
</figure>

<p>İstemediğiniz dilleri <strong>'Localization > Languages'</strong> menüsünden
    silebilirsiniz
    <small>(2)</small>
    veya etkisizleştirebilirsiniz
    <small>(1)</small>
    .
</p>
<figure class="img-polaroid">
    <img alt="" src="img/02-language-update.png"/>
</figure>