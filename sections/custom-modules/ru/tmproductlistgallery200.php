<h3>TM Product List Gallery 2.0.0</h3>
<?php if ($project == 'eveprest' ) { ?>
    <div>
        <p style="margin-bottom: 0;">Доступен в:</p>
        <p style="margin-top: 0;" class="small text-secondary">Мода, Электроника, Запчасти, Мебель, Один товар</p>
    </div>
<?php } ?>
<p>В этом модуле отображаются все доступные изображения товаров в виде галереи на страницах со списком товаров. В зависимости от того, какие настройки Вы выберете, модуль может отображать изображения в виде ролловера или слайд-шоу.</p>
<h5>Установка и удаление модуля </h5>
<p>Модуль может быть установлен и удален как любой другой модуль PrestaShop.</p>
<h5>Настройки модуля</h5>
<p>Установив модуль, откройте файл product-list.tpl в корневой папке вашего сайта, найдите следующий фрагмент кода:<br/></p>
<figure class="img-polaroid"><img src="img/tmproductlistgallery-1.png" alt="" /></figure>
<p>и замените его на:</p>
<pre class="codebox">
    {capture name='displayProductListGallery'}{hook h='displayProductListGallery' product=$product}{/capture}
    {if $smarty.capture.displayProductListGallery}
    &nbsp;&nbsp;{hook h='displayProductListGallery' product=$product}
    {else}
    &nbsp;&nbsp;&lt;a class="product_img_link" href="{$product.link|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}" itemprop="url"&gt;
    &nbsp;&nbsp;&lt;img class="replace-2x img-responsive" src="{$link-&gt;getImageLink($product.link_rewrite, $product.id_image, 'home_default')|escape:'html':'UTF-8'}" alt="{if !empty($product.legend)}{$product.legend|escape:'html':'UTF-8'}{else}{$product.name|escape:'html':'UTF-8'}{/if}" title="{if !empty($product.legend)}{$product.legend|escape:'html':'UTF-8'}{else}{$product.name|escape:'html':'UTF-8'}{/if}" {if isset($homeSize)} width="{$homeSize.width}" height="{$homeSize.height}"{/if} itemprop="image" /&gt;
    &nbsp;&nbsp;&lt;/a&gt;
    {/if}
</pre>
<p>После установки и подключения модуля, Вы можете изменить параметры модуля на странице его настройки.</p>
<h5> Модуль имеет следующие основные настройки:</h5>
<ul class="marked-list">
    <li><strong>Тип</strong> (Type) – выберите тип отображения: ролловер или слайд-шоу.</li>
</ul>
<p>Если Вы выберите <strong>ролловер</strong> (rollover), выберите анимационный эффект:</p>
<figure class="img-polaroid"><img src="img/tmproductlistgallery-2.png" alt="" /></figure>
<strong>Тип анимации:</strong>
<ul class="marked-list">
    <li><strong>Изменение прозрачности</strong> (Opacity slide) – изменяется прозрачность;</li>
    <li><strong>Горизонтально</strong> (Horizontal slide) - движение по горизонтали;</li>
    <li><strong>Вертикально</strong> (Vertical slide) – движение по вертикали.</li>
</ul>
<p>Если Вы выберете <strong>слайд-шоу</strong> (slideshow), будут доступны следующие настройки:</p>
<figure class="img-polaroid"><img src="img/tmproductlistgallery-3.png" alt="" /></figure>
<ul class="marked-list">
    <li><strong>Отображаемые элементы</strong> (Display items) – количество отображаемых элементов;</li>
    <li><strong>Бесконечно</strong> (Infinite) – бесконечный показ слайдов;</li>
    <li><strong>Пагинация</strong> (Pager) – отображение пагинации в слайд-шоу;</li>
    <li><strong>Элементы управления</strong> (Controls) – отображение элементов управления в слайд-шоу;</li>
    <li><strong>Использовать миниатюры</strong> (Use thumbnails) – отображение миниатюр слайд-шоу;</li>
    <li><strong>Пагинация</strong> (Pager) – отображение пагинации в карусели миниатюр;</li>
    <li><strong>Элементы управления</strong> (Controls) – отображение элементов управления в карусели миниатюр;</li>
    <li><strong>Позиция</strong> (Position) – вертикальный или горизонтальный режим карусели;</li>
    <li><strong>Центральный режим</strong> (Center mode) – центрирование вида карусели миниатюр;</li>
    <li><strong>Отображаемые элементы</strong> (Visible items) – количество элементов в ряду;</li>
    <li><strong>Количество прокручиваемых элементов</strong> (Items to scroll) – количество прокручиваемых элементов в карусели миниатюр.</li>
</ul>
