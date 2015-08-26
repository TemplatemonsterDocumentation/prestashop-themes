<h2 class="item7">Дополнение </h2>

<h4>куда обращаться за помощью, поддержкой и дополнительной информацией</h4>
<p>Мы постарались сделать данную документацию как можно более доступной и понятной. Тем не менее, в случае возникновения
    любых сложностей с шаблоном PrestaShop, предложений по улучшению шаблонов или документации, Вы можете связаться с
    командой технической поддержки следующим образом:</p>
<h4>Помощь и поддержка</h4>
<ul class="marked-list">
    <li>
        <p>
            <a href="http://chat.template-help.com/" target="_blank">Онлайн чат</a>
        </p>
    </li>
    <li>
        <p>
            <a href="http://support.template-help.com/index.php?/Tickets/Submit" target="_blank">Тикет-система</a>
        </p>
    </li>
</ul>
<h4>Полезные ссылки</h4>
<ul class="marked-list">
    <li>
        <p>
            <a target="_blank" href="http://www.prestashop.com/">Официальный сайт PrestaShop</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://www.prestashop.com/en/downloads/">Скачать</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://addons.prestashop.com/en/">Аддоны: модули, темы, и т.п.</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://doc.prestashop.com/display/PS16/English+documentation">Англоязычная
                документация</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://www.prestashop.com/forums/">Форум</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://www.prestashop.com/wiki/">Вики</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="/help/ecommerce/prestashop/prestashop-tutorials/">Туториалы по PrestaShop</a>
        </p>
    </li>
</ul>
<h4>Загрузка данных с серверов Google</h4>

<p>В некоторых странах существуют проблемы с подключением к серверам Google. Поэтому могут возникнуть сложности с
    загрузкой шрифтов Google Fonts и библиотек Java Script с Google CDN. В таком случае, для решения сделайте
    следующее: </p>

<h4>Не загружаются шрифты Google Fonts: </h4>

<ol class="index-list">
    <li><p>Откройте файл <strong>\themes\theme****\header.tpl</strong>.</p></li>
    <li><p>Найдите строку: </p>
        <pre>&lt;link rel="stylesheet" href="http{if Tools::usingSecureMode()}s{/if}://fonts.googleapis.com/css?family=[---your_web_font_name_here---]" type="text/css" media="all" /&gt; </pre>
    </li>
    <li><p>Замените ее на: </p>
        <pre>&lt;link rel="stylesheet" href="http://fonts.useso.com/css?family=[---your_web_font_name_here---]" type="text/css" media="all" /&gt;</pre>
    </li>
</ol>
