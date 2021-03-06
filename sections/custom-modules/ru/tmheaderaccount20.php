<h3>TM Header Account 2.0</h3>
<?php if ($project == 'eveprest' ) { ?>
    <div>
        <p style="margin-bottom: 0;">Доступен в:</p>
        <p style="margin-top: 0;" class="small text-secondary">Мода, Электроника, Запчасти, Мебель, Один товар</p>
    </div>
<?php } ?>
<p class="alert alert-warning">
Если у Вас в движке PrestaShop установлена версия 1.n этого модуля, не обновляйте её до текущуй. Сначала Вам необходимо удалить старую версию модуля для работы модуля без ошибок.</p>
<p>Этот модуль отображает формы входа и регистрации на веб-сайте. Он может занимать следующие позиции: хедер веб-сайта, левая и правая колонки. Модуль позволяет регистрироваться и выполнять вход на сайт при помощи таких социальных сетей, как Facebook, Google+ и VK, что удобно для пользователей сайта. Регистрация или вход в систему выполняются без перезагрузки страницы.</p>
<h4>Основная панель TM Header Account </h4>
<p>Основная панель. Здесь Вы можете настроить модуль.</p>
<figure class="img-polaroid">
    <img src="img/tmheaderaccount200-1.png" alt=""/>
</figure>
<h4>Настройки</h4>
<p>В модули есть следующие настройки:</p>
<ul class="index-list">
    <li><p>Тип отображения - эта настройка позволяет выбрать способ отображения регистрационной формы. Она может иметь следующие значения:</p>
        <ul class="marked-list">
            <li><strong>Выпадающий список</strong> (Drop down) - форма будет отображаться как раскрывающийся список под кнопкой, открывающей ее.
                <figure class="img-polaroid">
                    <img src="img/tmheaderaccount200-2.png" alt=""/>
                </figure>
            </li>
            <li><strong>Всплывающее окно</strong> (Popup) – форма отобразится во всплывающем окне.
                <figure class="img-polaroid">
                    <img src="img/tmheaderaccount200-3.png" alt=""/>
                </figure>
            </li>
            <li><strong>Слева</strong> (Left side) – форма отобразится слева как боковая панель.
                <figure class="img-polaroid">
                    <img src="img/tmheaderaccount200-4.png" alt=""/>
                </figure>
            </li>
            <li><strong>Справа</strong> (Right side) - форма отобразится справа как боковая панель.
                <figure class="img-polaroid">
                    <img src="img/tmheaderaccount200-5.png" alt=""/>
                </figure>
            </li>
        </ul>
    </li>
    <li><p>Стиль отображения после входа на сайт - эта настройка позволяет изменить вид формы после входа/регистрации. Вы можете использовать следующие значения:</p>
        <ul class="marked-list">
            <li><strong>Две колонки</strong> (Two columns) – список разделён на две колонки.
                <figure class="img-polaroid">
                    <img src="img/tmheaderaccount200-6.png" alt=""/>
                </figure>
            </li>
            <li><strong>Одна колонка</strong> (One Column) – список ссылок отображается как одна колонка.
                <figure class="img-polaroid">
                    <img src="img/tmheaderaccount200-7.png" alt=""/>
                </figure>
            </li>
        </ul>
    </li>
    <li> Аватар по умолчанию - это поле появляется, только если включен параметр "Отображать аватар". Здесь Вы можете выбрать аватар пользователя по умолчанию.</li>
    <li>Отображать аватар - эта настройка позволяет включить или отключить аватар пользователя. Если пользователь входит в учетную запись на веб-сайте с помощью одной из социальных сетей, аватар будет взят из учетной записи в этой социальной сети, в противном случае будет показан аватар, загруженный админом веб-сайта.</li>
    <li> Использовать переадресацию - если этот параметр включен, регистрация пользователя и восстановление пароля будут выполняться на стандартной странице регистрации/восстановления пароля PrestaShop.</li>
    <li><p> Использовать вход на сайт с Facebook - этот параметр включает регистрацию и вход пользователя с помощью социальной сети Facebook. Когда Вы включите эту настройку, Вы увидите следующие настройки:</p>
        <ul class="marked-list">
            <li><strong>Идентификатор приложения</strong> (App ID) - идентификатор приложения из вашего профиля разработчика Facebook.</li>
            <li><strong>Секретный ключ</strong> (App Secret) – секретный ключ профиля разработчика Facebook.</li>
        </ul>
    </li>
    <li><p> Использовать вход на сайт с Google - этот параметр включает регистрацию и вход пользователя с помощью социальной сети Google+. Когда Вы включите эту настройку, Вы увидите следующие настройки:</p>
        <ul class="marked-list">
            <li><strong>Идентификатор приложения</strong> (App ID) - идентификатор приложения из вашего профиля разработчика Google.</li>
            <li><strong>Секретный ключ</strong> (App Secret) – секретный ключ профиля разработчика Google.</li>
            <li><strong>Ссылки перенаправления</strong> (Redirect URIs) – адрес вашего интернет-магазина+ index.php?fc=module&module=tmheaderaccount&controller=googlelogin</li>
        </ul>
    </li>
    <li><p> Использовать вход на сайт с VK - этот параметр включает регистрацию и вход пользователя с помощью социальной сети Google+. Когда Вы включите эту настройку, Вы увидите следующие настройки:</p>
        <ul class="marked-list">
            <li><strong>Идентификатор приложения</strong> (App ID) - идентификатор приложения из вашего профиля разработчика VK.</li>
            <li><strong>Секретный ключ</strong> (App Secret) – секретный ключ профиля разработчика VK.</li>
            <li><strong>Ссылки перенаправления</strong> (Redirect URIs) – адрес вашего интернет-магазина+ index.php?fc=module&module=tmheaderaccount&controller=vk</li>
        </ul>
    </li>
</ul>
<h5>Регистрация приложений в социальных сетях:</h5>
<ul class="marked-list">
    <li><strong>Facebook</strong> - для того чтобы получить Идентификатор приложения и Секретный ключ приложения, зарегистрируйте ваше приложение на <a target="_blank" href="https://developers.facebook.com/apps">https://developers.facebook.com/apps</a>.</li>
    <li><strong>Google+</strong> - для того чтобы получить Идентификатор приложения и Секретный ключ приложения, зарегистрируйте ваше приложение на <a target="_blank" href="https://developers.google.com/accounts/docs/OAuth2/">https://developers.google.com/accounts/docs/OAuth2/</a>.</li>
    <li><strong>VK</strong> - для того чтобы получить Идентификатор приложения и Секретный ключ приложения, зарегистрируйте ваше приложение на <a target="_blank" href="https://vk.com/dev">https://vk.com/dev</a>.</li>
</ul>

