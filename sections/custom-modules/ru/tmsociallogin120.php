<h3>TM Social Login 1.2.0</h3>
<p>Этот модуль позволяет регистрироваться и выполнять вход систему с помощью данных страниц клиентов в социальных сетях, таких как Facebook, Google и VK.</p>
<h4>Установка модуля</h4>
<p> Модуль устанавливается и удаляется как любой другой модуль PrestaShop.</p>
<h4>Настройки модуля</h4>
<p> После установки Вы можете изменить параметры модуля на странице его настройки.</p>
<p> Чтобы получить необходимые данные для настройки модуля, необходимо создать соответствующее приложение на нужном ресурсе.</p>
<p> Не обязательно одновременно использовать оба варианта входа в систему (Google, Facebook), Вы можете использовать только один из них.</p>
<h4>Поля Facebook</h4>
<ul class="marked-list">
    <li> Идентификатор вашего приложения </li>
    <li> Секретный ключ вашего приложения</li></ul>
<h4>Поля Google</h4>
<ul class="marked-list">
   <li> Идентификатор вашего приложения </li>
    <li> Секретный ключ вашего приложения</li> 
   <li> Путь перенаправления после входа в систему<strong> (адрес вашего магазина+index.php?fc=module&module=tmsociallogin&controller=googlelogin)</strong>.</li>
</ul>
<h4>Поля VK </h4>
<ul class="marked-list">
    <li> Идентификатор вашего приложения </li>
    <li> Секретный ключ вашего приложения</li>
    <li>Путь перенаправления после входа в систему<strong> (адрес вашего магазина+index.php?fc=module&module=tmsociallogin&controller=vklogin)</strong></li>
<p class="alert alert-info">Получите более подробную информацию, перейдя по ссылкам: <a href="https://developers.facebook.com/docs/apps/register" target="_blank">Facebook App</a>, <a href="https://support.google.com/cloud/answer/6158849?hl=en&ref_topic=6262490" target="_blank">Google App</a> и <a href="https://vk.com/dev/web_how_to_start">VK App</a>.</p>
<p class="alert alert-warning">
    Путь перенаправления должен быть тем же, что был указан при создании приложения Google или VK.
</p>
<figure class="img-polaroid">
    <img src="img/tmsociallogin120-1.png" alt=""/>
</figure>