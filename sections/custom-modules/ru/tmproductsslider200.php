<h3>TM Products Slider 2.0.0</h3>
<?php if ($project == 'eveprest' ) { ?>
    <div>
        <p style="margin-bottom: 0;">Доступен в:</p>
        <p style="margin-top: 0;" class="small text-secondary">Электроника, Мебель</p>
    </div>
<?php } ?>
<h4>Вступление</h4>
<p>Этот модуль служит для создания галерей, основанных на данных о товарах, и отображает их в виде слайдов в интерфейсе веб-сайта. Модуль предоставляет 4 способа отображения галереи с индивидуальными настройками и внешним видом. Каждый метод имеет предопределенную функциональность. Также доступна расширенная настройка. Модуль может отображать неограниченное количество товаров с разнообразной информацией.</p>
<h4>Установка и удаление модуля</h4>
<p class="alert alert-warning">
    Если в вашем движке prestashop установлена версия 1.n модуля, не рекомендуется обновлять его до текущей версии. Сначала удалите старую версию модуля, для того чтобы модуль работал без ошибок.
</p>
<p> Модуль устанавливается и удаляется как любой другой модуль PrestaShop.</p>
<p class="alert alert-info">
    <span> После удаления или повторной установки модуля все настройки и фильтры сбрасываются.</span>
</p>
<h4> Добавление / удаление / редактирование слайда </h4>
<h5>Добавление слайда</h5>
<p>Для того чтобы добавить товар в галерею, найдите нужный товар в разделе <strong>Каталог -> Товары</strong> (Catalog  -> Products). Затем, нажмите на кнопку <strong>'Редактировать'</strong> (Edit) (1) рядом с нужным товаром.</p>
<figure class="img-polaroid"><img src="img/tmproductsslider2-1.png" alt=""/></figure>
<p> В появившемся окне для редактирования информации товара перейдите на вкладку <strong>TM Products Slider</strong> (2) и отметьте (3), что Вы хотите, чтобы товар отображался в слайдере.</p>
<figure class="img-polaroid"><img src="img/tmproductsslider2-2.png" alt=""/></figure>
<p>Сохраните изменения, нажав на <strong>'Сохранить и остаться'</strong> (Save and stay) (4) или <strong>'Сохранить'</strong> (Save) (5).</p>
<h5>Удаление слайда</h5>
<p> Существует два способа удаления слайда.</p>
<ul class="index-list">
    <li>
        <p>Для того чтобы исключить товар из галереи, перейдите к нужному товару в разделе <strong>Каталог -> Товары</strong> (Catalog -> Products). Затем, нажмите на кнопку <strong>'Редактировать'</strong> (Edit) (1) рядом с нужным товаром.</p>
        <figure class="img-polaroid"><img src="img/tmproductsslider2-1.png" alt=""/></figure>
        <p>В открывшемся окне редактирования информации о товаре, перейдите на вкладку <strong>TM Products Slider</strong> (2) и удалите галочку (3), которая значит то, что Вы не хотите, чтобы товары отображались в слайдере:</p>
        <figure class="img-polaroid"><img src="img/tmproductsslider2-3.png" alt=""/></figure>
        <p>Сохраните изменения, нажав на кнопку <strong>'Сохранить и остаться'</strong> (Save and stay) (4) или <strong>'Сохранить'</strong> (Save)(5).
        </p>
    </li>
    <li>
        <p> Второй способ - перейдите на страницу настройки модуля, найдите необходимый товар в <strong>Списке слайдов</strong> (Slides list) и нажмите на кнопку <strong>Удалить</strong> (Delete) (1) рядом с ним.</p>
        <figure class="img-polaroid"><img src="img/tmproductsslider2-4.png" alt=""/></figure>
        <p>Затем подтвердите удаление.</p>
    </li>
</ul>
<h5>Порядок отображения слайдов</h5>
<p> По умолчанию слайды отображаются в том порядке, в котором они были добавлены. Чтобы изменить порядок отображения, перейдите на страницу настройки модуля и перетащите слайд в нужное место в таблице <strong>Список слайдов</strong> (Slides list).</p>
<figure class="img-polaroid"><img src="img/tmproductsslider2-5.png" alt=""/></figure>
<h5>Отключение слайдов</h5>
<p> Кроме того, Вы можете временно отключить слайд (на период времени, когда товара нет в наличии или по какой-либо другой причине), не удаляя его полностью. Для этого перейдите на страницу настройки модуля и поставьте галочку рядом с нужным товаром (если он сейчас активен) или нажмите на крестики (если он неактивен) в таблице <strong>Список слайдов</strong> (Slides list):
</p>
<figure class="img-polaroid"><img src="img/tmproductsslider2-6.png" alt=""/></figure>
<h4> Типы галереи и рекомендуемые настройки </h4>
<p> Существует четыре типа отображения галереи (стандартный, список, сетка, полноширинный). Каждый из них может быть настроен независимо, и Вы можете переключаться между ними, если это необходимо.</p>
<p> По умолчанию галерея использует следующие типы изображений товара: large_default - для основного изображения; Medium_default - для миниатюр.</p>
<h5>Стандартный</h5>
<p> Рекомендованные настройки:</p>
<ul class="marked-list">
    <li>Размер изображения (px) - 435*435</li>
    <li>Ширина галереи - 1170px</li>
    <li>Высота галереи - 580px</li>
    <li> Расширенные настройки - отключены </li>
</ul>
<figure class="img-polaroid"><img src="img/tmproductsslider2-7.png" alt=""/></figure>
<h5>Список</h5>
<p> Рекомендованные настройки:</p>
<ul class="marked-list">
    <li>Размер изображения (px) - 435*520</li>
    <li>Ширина галереи - 1170px</li>
    <li>Высота галереи - 520px</li>
    <li> Расширенные настройки - отключены </li>
</ul>
<figure class="img-polaroid"><img src="img/tmproductsslider2-8.png" alt=""/></figure>
<h5>Сетка</h5>
<p>Рекомендованные настройки:</p>
<ul class="marked-list">
    <li>Размер изображения (px) - 585*750</li>
    <li>Ширина галереи - 1170px</li>
    <li>Высота галереи - 750px</li>
    <li> Расширенные настройки - отключены</li>
</ul>
<figure class="img-polaroid"><img src="img/tmproductsslider2-9.png" alt=""/></figure>
<h5>Полноширинный</h5>
<p> Рекомендованные настройки:</p>
<ul class="marked-list">
    <li>Размер изображения (px) - 435*435</li>
    <li>Ширина галереи - 1920px</li>
    <li>Высота галереи - 450px</li>
    <li>Расширенные настройки - отключены</li>
</ul>
<figure class="img-polaroid"><img src="img/tmproductsslider2-10.png" alt=""/></figure>
<h4>Расширенные настройки</h4>
<p>Для того чтобы получить доступ к расширенным настройкам, переместите ползунок <strong>Расширенные настройки</strong> (Extended Settings) в позицию "Да".</p>
<figure class="img-polaroid"><img src="img/tmproductsslider2-11.png" alt=""/></figure>
<ul class="marked-list">
    <li><strong>Тип галереи</strong> (Gallery Type) – активный тип галереи</li>
    <li><strong>Ширина галереи</strong> (Gallery Width) – активная ширина галереи</li>
    <li><strong>Высота галереи </strong>(Gallery Height) – активная высота галереи</li>
    <li><strong> Расширенные настройки</strong> (Extended Settings) - расширенные настройки; если этот параметр имеет значение "Нет", все дополнительные настройки будут сохранены, и Вы сможете восстановить их в любое время. В то же время, на сайте слайдер будет отображаться как по умолчанию.    </li>
    <li><strong>Скорость слайдера</strong> (Slider Duration) – скорость смены слайдов</li>
    <li><strong>Использовать навигацию</strong> (Use navigation) – отображение кнопок "Предыдущий"/"Следующий"  для переключения слайдов </li>
    <li><strong>Использовать миниатюры</strong> (Use Thumbnails) – использование миниатюр с дополнительной информацией о слайдах для переключения текущего слайда    </li>
    <li><strong>Использовать пагинацию</strong> (Use Pagination) – использование пагинации как элемента переключения текущего слайда </li>
    <li><strong>Использовать галерею изображений</strong> (Use Image Gallery) - использовать дополнительные изображения товаров внутри слайдов </li>
    <li><strong> Включить автозапуск</strong> (Allow autoplay) – включить автоматическое переключение слайдов </li>
    <li><strong> Интервал слайдера</strong> (Slider Interval) - промежуток времени, по истечении которого слайд переключается на другой (доступно только, если активна настройка "Включить автозапуск")    </li>
    <li><strong>Включить луп</strong> (Allow Loop) – включает повторение слайдов сначала после того как все слайды были показаны</li>
</ul>
<p class="alert alert-info">
    <span> После переключения галереи все настройки ранее использовавшейся галереи сохраняются.</span>
</p>
<p class="alert alert-info">
    <span> После отключения/включения дополнительных настроек настройки сохраняются, и Вы можете вернуться к ним в любое время.</span>
</p>
<h4>FAQ</h4>

<div class="responsive-tabs" data-type="accordion">
    <ul class="resp-tabs-list">
        <li> Почему галерея не отображается на фронтенде?</li>
        <li> Я изменяю расширенные настройки галереи, но не вижу изменений на фронтенде. Что можно сделать?</li>
    </ul>
    <div class="resp-tabs-container">
        <div> Убедитесь, что в галерее есть слайды, и хотя бы один из них активен.</div>
        <div> Убедитесь, что Вы изменили настройки активной галереи.</div>
    </div>
</div>