<h3>TM Social Login</h3>

<p>Модуль который позволяет регистрироваться и авторизироваться с помощью данных
    полученных из страниц клиентов в социальных сетях Facebook и Google.</p>

<h5>Установка и удаление модуля</h5>

<p>Модуль устанавливается и удаляется как любой другой модуль PrestaShop.</p>

<h5>Настройки модуля</h5>

<p>После установки модуля вы можете настраивать его на странице конфигураций модуля.</p>

<p>Для того чтобы получить необходимые данные для настройки модуля вам нужно создать
    соответствующее приложение (Application) на нужном ресурсе.</p>

<p>Не обязательно использовать оба варианта авторизации (Google, Facebook) одновременно,
    вы можете использовать только один.</p>

<h4>Поля Facebook</h4>

<ol class="index-list">
    <li>ID вашего приложения.</li>
    <li>Секретный ключ вашего приложения.</li>
</ol>

<h4>Поля Google</h4>

<ol class="index-list">
    <li>ID вашего приложения.</li>
    <li>Секретный ключ вашего приложения.</li>
    <li>Путь переадресации после авторизации <strong>(your shop
            URL+index.php?fc=module&module=tmsociallogin&controller=googlelogin)</strong>.</li>
</ol>

<p class="alert alert-info">Более подробную информацию вы можете получить, перейдя по следующим ссылкам <a
        href="https://support.google.com/cloud/answer/6158849?hl=en&ref_topic=6262490" target="_blank">Google
        App</a> и <a href="https://developers.facebook.com/docs/apps/register" target="_blank">Facebook
        App</a>.</p>

<p class="alert alert-warning">Путь переадресации обязательно должен совпадать с тем, который вы указали при
    создании Google App.</p>

<figure class="img-polaroid">
    <img src="img/tmsociallogin-1.png" alt="">
</figure>
