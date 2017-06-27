<h2 class="item7">Дополнение</h2>
<h5>Где получить помощь, поддержку и дополнительную информацию</h5>
<p>Мы постарались сделать данную документацию как можно более доступной и понятной. Тем не менее, в случае возникновения любых сложностей с Joomla шаблоном, или наличия предложений по улучшению шаблонов или документации, свяжитесь с командой технической поддержки следующим образом:</p>
<h4>Помощь и поддержка</h4>
<ul class="marked-list">
    <li>
        <p>
            <a href="http://chat.template-help.com/" target="_blank">Онлайн-чат</a>
        </p>
    </li>
    <li>
        <p>
            <a href="http://support.template-help.com/index.php?/Tickets/Submit" target="_blank">Тикет-система</a>
        </p>
    </li>
</ul><h4>Полезные ресурсы</h4>
<ul class="marked-list">
    <li>
        <p>
            <a target="_blank" href="http://www.prestashop.com/">Официальный сайт PrestaShop</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://www.prestashop.com/en/downloads/">Загрузки</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://addons.prestashop.com/en/">Дополнения: модули, темы и т.д.</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://doc.prestashop.com/display/PS16/English+documentation">Документация на английском языке</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://www.prestashop.com/forums/">Форум</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="http://www.prestashop.com/wiki/">Wiki</a>
        </p>
    </li>
    <li>
        <p>
            <a target="_blank" href="/help/ecommerce/prestashop/prestashop-tutorials/">Туториалы PrestaShop</a>
        </p>
    </li>
</ul>
<h4>Загрузка данных с серверов Google</h4>
<p> В некоторых странах возможны проблемы с подключением к серверам Google. Это может вызвать проблемы при загрузке библиотек Google Fonts и Java Script из Google CDN. Для решения этих проблем выполните следующие действия.: </p>
<h4>Невозможно загрузить шрифты Google:</h4>
<ol class="index-list">
    <li><p>Откройте файл <strong>\themes\theme****\header.tpl</strong>.</p></li>
    <li><p>Найдите строку: </p>
        <code>&lt;link rel="stylesheet" href="http{if
            Tools::usingSecureMode()}s{/if}://fonts.googleapis.com/css?family=[---your_web_font_name_here---]"
            type="text/css" media="all" /&gt; </code>
    </li>
    <li><p>Замените её на: </p>
        <code>&lt;link rel="stylesheet" href="http://fonts.useso.com/css?family=[---your_web_font_name_here---]"
            type="text/css" media="all" /&gt;</code>
    </li>
</ol>
<h4>Валидация W3C</h4>
<p> В наших шаблонах мы придерживаемся семантических правил написания кода HTML-разметки и CSS-стилей. Однако некоторые ошибки W3C все же могут возникать. Создание 100-процентно правильного кода, соответствующего стандартам консорциума W3C, ограничивает использование современных технологий создания сайтов, таких как свойства CSS3 и разметка HTML5. Целью нашей компании является предоставление богатого пользовательского опыта с высококачественными шаблонами, и иногда нам приходится нарушать некоторые правила.</p>
