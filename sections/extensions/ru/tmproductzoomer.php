<h3>TM Product Zoomer</h3>

<p>Модуль является альтернативой стандартному варианту увеличения картинки продукта на
    странице информации о продукте. Он полностью совместимый со стандартной каруселью миниатюр
    дополнительных продуктов и изменениями атрибутов продукта. Дает возможность выбора одного из трех
    доступных вариантов (window/lens/inner) увеличения картинок с расширенными настройками плагина.
    Реализован на основе плагина <a href="//igorlino.github.io/elevatezoom-plus/"
                                    target="_blank">Elevatezoom Plus</a></p>

<h5>Установка и удаление модуля</h5>
<p>Модуль устанавливается и удаляется, как любой другой модуль PrestaShop. После установки
    стандартный эффект увеличения продукта будет автоматически отключен. После удаления модуля
    стандартный эффект нужно включать вручную (если это нужно) в разделе <strong>Preferences->Products->Enable JqZoom instead of Fancybox on the product page</strong></p>
<h5>Настройки модуля</h5>
<p>После установки модуля вы можете настраивать его на странице конфигураций модуля.</p>
<p>По умолчанию на странице конфигураций отображается <strong>упрощенный</strong> вариант настроек</p>
<figure class="img-polaroid">
    <img src="img/tmproductzoomer-1.png" alt=""/>
</figure>
<ol class="index-list">
    <li><strong>Live mode</strong> - модуль включен или отключен</li>
    <li><strong>Fancybox</strong> - отображать увеличенную картинку в Fancybox при нажатии.</li>
    <li><strong>Change image on hover</strong> - переключать основную картинку при наведении курсора мыши на
        миниатюру (по умолчанию переключается при нажатии)</li>
    <li><strong>Responsive</strong> - разрешить использование функций адаптивности для отображения
        плагина на мобильных устройствах</li>
    <li><strong>Zoom Type</strong> - выбор типа отображения увеличенной картинки
        <ul>
            <li><strong>window</strong> - увеличенное изображение отображается рядом с основным в одной из доступных(16) позиций</li>
            <li><strong>lens</strong> - изображение увеличивается в области линзы, находящейся поверх него</li>
            <li><strong>inner</strong> - изображение увеличивается внутри основного, полностью его перекрывая</li>
        </ul>
        <div class="alert alert-info">Для мобильных устройств(&lt; 768) всегда активен режим "lens"</div>
    </li>
    <li><strong>Extended settings</strong> - включение расширенных настроек для опытных пользователей.
        Рядом находится ссылка на официальную <a href="//igorlino.github.io/elevatezoom-plus/api.htm" target="_blank"> документацию, где можно подробнее узнать о настройках</a></li>
</ol>
<p><strong>расширенные</strong> настройки модуля</p>
<ol class="index-list">
    <li><strong>Scroll Zoom</strong> - изменение коэффициента увеличения при прокрутке колеса мышки.
        (доступна для всех типов)</li>
    <li><strong>Cursor</strong> - выбор типа курсора, который будет отображаться при наведении на
        увеличиваемую картинку. Доступны варианты default, cursor, crosshair. (доступна для всех типов)</li>
    <li><strong>настройки масштабирования</strong> - доступны для всех типов, если включена опция Scroll Zoom
        <figure class="img-polaroid"><img src="img/tmproductzoomer-2.png" alt="" /></figure>
        <ul>
            <li>Zoom Level - уровень увеличения картинки при первом наведении</li>
            <li>Min Zoom Level - минимальный уровень увеличения</li>
            <li>Max Zoom Level - максимальный уровень увеличения</li>
            <li>Scroll Zoom Increment - шаг увеличения при прокрутке увеличения</li>
        </ul>
    </li>
    <li><strong>Easing</strong> - эффект появления увеличенной картинки (доступна для всех типов)
        <figure class="img-polaroid"><img src="img/tmproductzoomer-3.png" alt="" /></figure>
        <ul>
            <li>Zoom Easing - включение/выключение эффекта</li>
            <li>Easing Amount - значение задержки эффекта</li>
        </ul>
    </li>
    <li><strong>Image Crossfade</strong> - размытие основной картинки за областью наведения (линзы).
        (доступна для window, lens)</li>
    <li><strong>настройки окна с увеличенным изображением</strong> - (доступна для window)
        <figure class="img-polaroid"><img src="img/tmproductzoomer-4.png" alt="" /></figure>
        <ul>
            <li>Zoom Window Width - ширина окна в px</li>
            <li>Zoom Window Height - высота окна в px</li>
            <li>Zoom Window Offset X - смещение окна по оси X</li>
            <li>Zoom Window Offset Y - смещение окна по оси Y</li>
            <li>Zoom Window Position - выбор позиционирования окна относительно основной картинки
                (возможные позиции на картинке ниже поля)</li>
            <li>Zoom Window Bg Color - выбор фона картинки в окне (только для прозрачных картинок)</li>
            <li>Zoom Window Fade In - эффект замедления появления окна</li>
            <li>Zoom Window Fade Out - эффект замедления исчезновения окна</li>
            <li>Border Size - размер границы окна в px</li>
            <li>Border Color - цвет границы окна</li>
        </ul>
    </li>
    <li><strong>Zoom Lens</strong> - линза увеличения (доступна для window, lens)
        <figure class="img-polaroid"><img src="img/tmproductzoomer-5.png" alt="" /></figure>
        <ul>
            <li>Zoom Lens - включить/выключить опцию</li>
            <li>Lens Shape - тип линзы. Круглая/скругленная или квадратная/прямоугольная</li>
            <li>Lens Color - цвет заливки внутри линзы</li>
            <li>Lens Opacity - прозрачность заливки внутри линзы</li>
            <li>Lens Size - размер линзы в px</li>
            <li>Lens Fade In - скорость эффекта появления линзы</li>
            <li>Lens Fade Out - скорость эффекта исчезновения линзы</li>
            <li>Lens Border - ширина границы линзы</li>
            <li>Lens Border Color - цвет границы линзы</li>
            <li>Contain Lens Zoom - ограничение возможности выхода линзы за пределы основной картинки</li>
        </ul>
    </li>
    <li><strong>Tint</strong> - эффект затемнения области за пределами линзы (доступен для window)
        <figure class="img-polaroid"><img src="img/tmproductzoomer-6.png" alt="" /></figure>
        <ul>
            <li>Tint - включение/выключение эффекта</li>
            <li>Tint Color - фон области за пределами линзы</li>
            <li>Tint Opacity - прозрачность области за пределами линзы</li>
            <li>Tint Fade In - скорость эффекта появления</li>
            <li>Tint Fade Out - скорость эффекта исчезновения</li>
        </ul>
    </li>
</ol>

<div class="alert alert-info">При переключении типа увеличения, набор расширенных параметров изменяется для отображения только доступных для данного типа</div>
<div class="alert alert-warning">Будьте внимательны при расширенном редактировании настроек. Если настройки будут установлены некорректно, то эффект может быть некрасивым.</div>