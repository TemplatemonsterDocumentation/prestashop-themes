<h2 class="item7">Addendum </h2><h4>yardım, destek ve ek bilgi alabileceğiniz yer</h4>
<p>Bu dokümantasyonu elimizden geldiğince kolay anlaşılabilir şekilde hazırlamaya çalıştık. Yine de, eğer PrestaShop şablonuyla veya şablonunuzu geliştirmekle ya da bu dokümanla ilgili bir sorun yaşarsanız; aşağıdaki adreslerden destek ekibimizle iletişime geçebilirsiniz:</p>
<h4>Yardım ve Destek</h4>
<ul class="marked-list">
    <li>
        <p>
            <a href="http://chat.template-help.com/" target="_blank">Canlı yardım</a>
        </p>
    </li>
    <li>
        <p>
            <a href="http://support.template-help.com/index.php?/Tickets/Submit" target="_blank">Ticket (destek) servisi</a>
        </p>
    </li>
</ul><h4>Faydalı kaynaklar</h4>
<ul class="marked-list">
    <li>
        <p>
            <a target="_blank" href="http://www.prestashop.com/">PrestaShop resmi site</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://www.prestashop.com/en/downloads/">Yüklemeler</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://addons.prestashop.com/en/">Eklentiler: modüller, temalar vs.</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://doc.prestashop.com/display/PS16/English+documentation">Engilizce dokümantasyon</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://www.prestashop.com/forums/">Forum</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://www.prestashop.com/wiki/">Wiki</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="/help/ecommerce/prestashop/prestashop-tutorials/">PrestaShop rehberi</a>
        </p>
    </li>
</ul><h4>Google sunucularından veri yüklemek</h4>

    <p>Bazı ülkeler Google sunucularına bağlanmakta sorunlar yaşıyor. Bu sorun, Google Fontlarına ve Google CDN'de yer alan Java Script kütüphanelerine erişimi engelleyebilir. Çözüm için aşağıdaki adımları uygulayınız: </p>

    <h4>Google Fontlarını yükleyemiyorsanız: </h4>

    <ol class="index-list">
        <li><p><strong>\themes\theme****\header.tpl</strong> dosyasını açın.</p></li>
        <li><p>Şu satırı bulun: </p>
            <pre>&lt;link rel="stylesheet" href="http{if Tools::usingSecureMode()}s{/if}://fonts.googleapis.com/css?family=[---your_web_font_name_here---]" type="text/css" media="all" /&gt; </pre>
        </li>
        <li><p>Aşağıdaki ile değiştirin: </p>
            <pre>&lt;link rel="stylesheet" href="http://fonts.useso.com/css?family=[---your_web_font_name_here---]" type="text/css" media="all" /&gt;</pre>
        </li>
    </ol>
</article>