<h3>Установка шаблона вручную с использованием
    демо-данных</h3>

<p>После установки <strong>демо-данных</strong>, ваш магазин PrestaShop будет выглядеть
    точь-в-точь как на демо. Он будет содержать все образцы товаров, категорий,
    настройки модулей и магазина.</p>

<p class="alert alert-danger">Пожалуйста, не используйте демо-данные для действующего сайта! Это перезапишет все
    товары и настройки магазина.</p>

<p class="alert alert-warning">Пожалуйста, убедитесь, что вы используете версию движка PrestaShop, указанную в пункте
    "Необходимое программное обеспечение:" как "PrestaShop 1.X.X.X". Также убедитесь, что префикс таблиц базы данных
    соответствует <strong>ps_</strong>. Только если версия движка PrestaShop соответствует указанной, устанавливайте
    демонстрационные данные.</p>

<h4>Загрузка файлов шаблона</h4>

<p>Для загрузки файлов на сервер:</p>
<ol class="index-list">
    <li>Откройте папку шаблона.</li>
    <li>Перейдите в папку <strong>/theme/manual_install/</strong>.</li>
    <li>Загрузите папки <strong>/img/</strong>, <strong>/modules/</strong> и <strong>/themes/</strong>
        в корневую директорию PrestaShop.
    </li>
</ol>
<p class="alert alert-info">Вы можете посмотреть детальные видео туториалы <a target="_blank"
                                                                              href="/help/how-upload-files-server-2.html">как
        загрузить файлы на сервер при помощи FTP-клиента</a> и <a
        href="/help/how-to-upload-files-to-a-server-using-cpanel-webhost-manager-whm.html"
        target="_blank">как загрузить файлы на сервер через cPanel (WebHost Manager,
        WHM)</a>.</p>

<h4>Установка демо-данных</h4>

<p>Демо-данные хранятся в файле .SQL. Он находится в папке
    <strong>theme/manual_install/</strong> шаблона и называется
    <strong>dump.sql</strong>.</p>

<p>Файл dump.sql можно установить при помощи phpMyAdmin или другого инструмента
    управления базами данных контрольной панели хостинга. Вам может пригодится подробная
    инструкция <a target="_blank"
                  href="/help/phpmyadmin-how-to-import-sample-data-dump-file-phpmyadmin.html">как
        импортировать SQL файлы</a>.</p>

<p class="alert alert-warning">Перед началом импорта сделайте резервную копию базы данных. Вы можете посмотреть
    детальный видео туториал <a
        target="_blank" href="/help/phpmyadmin-how-to-backup-a-database.html">как
        создать резервную копию базы данных</a>.</p>


<p class="alert alert-danger">Убедитесь, что версия движка PrestaShop соответствует требованиям шаблона. В
    противном случае база данных будет повреждена.</p>

<p>Когда импорт файла dump.sql завершится, необходимо активировать шаблон.</p>

<p>В панели управления PrestaShop, перейдите в <strong>Preferences > Themes (Настройки >
        Темы)</strong>, выберите шаблон в списке <strong>Themes (Темы)</strong> и нажмите
    <strong>Save (Сохранить)</strong>.</p>

<h4>Добавление языков в онлайн-магазин. </h4>

<p>Когда мульти-языковой шаблон будет установлен, вы сможете добавлять в свой
    онлайн-магазин любые поддерживаемые языки к тем, что уже есть в наличии (английский,
    французский, испанский, немецкий, русский). Это можно сделать следующим
    образом: </p>

<p>Перейдите в <strong>'Localization > Translations (Локализация > Переводы)'</strong> в
    панели управления, найдите <strong>'ADD/UPDATE A LANGUAGE (ДОБАВИТЬ/ОБНОВИТЬ
        ЯЗЫК)'</strong>, выделите языки из выпадающего меню
    <small>(1)</small>
    и нажмите кнопку <strong>'Add or update a language (Добавить или обновить
        язык)'</strong>
    <small>(2)</small>
    .
</p>
<figure class="img-polaroid">
    <img alt="" src="img/01-language-update.png"/>
</figure>

<p>Если какие-либо языки не нужны, их можно удалить
    <small>(2)</small>
    или отключить
    <small>(1)</small>
    в меню <strong>'Localization > Languages (Локализация > Переводы)'</strong>.
</p>
<figure class="img-polaroid">
    <img alt="" src="img/02-language-update.png"/>
</figure>
