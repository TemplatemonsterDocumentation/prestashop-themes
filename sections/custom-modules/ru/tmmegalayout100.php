<h3>TM Mega Layout 1.0.0</h3>
<?php if ($project == 'eveprest') { ?>
    <div>
        <p style="margin-bottom: 0;">Доступен в:</p>
        <p style="margin-top: 0;" class="small text-secondary">Мода, Электроника, Запчасти, Мебель, Один товар
</p>
    </div>
<?php } ?>
<p>Этот модуль предназначен для создания пользовательских макетов (пресетов) для хуков и отображения их на сайте вместо позиций по умолчанию. Это преимущество модуля позволяет Вам создавать различные разметки и изменять их в соответствии с вашими потребностями.</p>

<h4>Функциональные характеристики и свойства модуля</h4>
<ul class="index-list">
    <li>
        <p>Требования:</p>
        <ul class="marked-list">
            <li><p>PrestaShop 1.6+</p></li>
            <li><p>PHP 5.4+</p></li>
        </ul>
    </li>
    <li>
        <p>Свойства:</p>
        <ul class="marked-list">
            <li><p>Модуль включает 5 хуков: 'Header', 'Top Column', 'Home', 'Footer' и 'Product Footer'.</p></li>
            <li><p>В случае отсутствия модуля в хуке, он не может быть добавлен в пресет.</p></li>
            <li><p>Модуль может отображаться в пресете только один раз, так же, как и хуке.</p></li>
            <li><p>Позиция модуля в разделе 'Модули и службы -> Позиции' не влияет на пресет.</p></li>
            <li><p>Модуль не позволяет Вам настраивать различные модули. Вы не можете установить различные настройки модулей для различных пресетов.</p></li>
        </ul>
    </li>
</ul>
<h6>Модуль предоставляет Вам возможность изменить положение модуля и настроить сетку на 3 хука: displayTopColumn, displayHome, displayFooter. Изменение позиций модулей в разделе 'Модули и службы -> Позиции' не повлияет на позиции модулей в пресете. Если модуль не был добавлен в хук, его нельзя добавить в пресет.</h6>

<h4>Интеграция модуля в шаблон</h4>
<p class="alert alert-warning">Если Вы не выполните этот шаг, пресеты не будут отображаться на вашем сайте.</p>
<ul class="index-list">
    <li><p>Верхняя колонка. Для того чтобы добавить пользовательский пресет в хук topColumn выполните следующее:</p>
        <ul class="marked-list">
            <li>Откройте файл <strong>/themes/your_theme/header.tpl</strong> для редактирования.</li>
            <li>Найдите следующий фрагмент кода
                <pre class="codebox">{hook h="displayTopColumn"}</pre>
            </li>
            <li>Замените его на:
                <pre class="codebox">
{assign var='displayMegaTopColumn' value={hook h='tmMegaLayoutTopColumn'}}
{if $displayMegaTopColumn}
    {hook h='tmMegaLayoutTopColumn'}
{else}
    {capture name='displayTopColumn'}{hook h='displayTopColumn'}{/capture}
    {if $smarty.capture.displayTopColumn}
        &lt;div id="slider_row" class="row"&gt;
            &lt;div id="top_column" class="center_column col-xs-12 col-sm-12">{$smarty.capture.displayTopColumn}&lt;/div&gt;
        &lt;/div&gt;
    {/if}
{/if}</pre>

            </li>
        </ul>
    </li>
   <li><p>Домашний. Для того чтобы добавить пользовательский пресет в хук "Домашний", внесите следующие изменения:</p>
        <ul class="marked-list">
            <li>Откройте файл <strong>/themes/your_theme/footer.tpl</strong> для редактирования.</li>
             <li>Найдите следующий фрагмент кода:
                <pre class="codebox">
{if isset($HOOK_HOME) && $HOOK_HOME|trim}
    &lt;div class="home-column"&gt;
        &lt;div class="container"&gt;
            {$HOOK_HOME}
        &lt;/div&gt;
    &lt;/div&gt;
{/if}</pre>
            </li>
            <li>И замените его на:
                <pre class="codebox">
{assign var='displayMegaHome' value={hook h='tmMegaLayoutHome'}}
{if $displayMegaHome}
    {hook h='tmMegaLayoutHome'}
{else}
    {if isset($HOOK_HOME) && $HOOK_HOME|trim}
        {$HOOK_HOME}
    {/if}
{/if}</pre>
            </li>
        </ul>
    </li>
    <li><p>Футер. Для того чтобы добавить пользовательский пресет в хук "Футер", следуйте таким инструкциям:</p>
        <ul class="marked-list">
            <li>Откройте файл <strong>/themes/your_theme/footer.tpl</strong> для редактирования.</li>
            <li>Найдите следующий фрагмент кода:
                <pre class="codebox">
{if isset($HOOK_FOOTER)}
    &lt;div class="footer-container"&gt;
        &lt;footer id="footer"  class="container"&gt;
            &lt;div class="row"&gt;
                {$HOOK_FOOTER}
            &lt;/div&gt;
        &lt;/footer&gt;
    &lt;/div&gt;
{/if}</pre>
            </li>
             <li>И замените его на:
                <pre class="codebox">
{assign var='displayMegaFooter' value={hook h='tmMegaLayoutFooter'}}
{if isset($HOOK_FOOTER) || $displayMegaFooter}
    &lt;div class="footer-container"&gt;
    {if $displayMegaFooter}
         &lt;div id="footer"&gt;
              {$displayMegaFooter}
         &lt;/div&gt;
    {else}
        &lt;div id="footer" class="container"&gt;
            &lt;div class="row"&gt;{$HOOK_FOOTER}&lt;/div&gt;
        &lt;/div&gt;
    {/if}
    &lt;/div&gt;
{/if}</pre>
            </li>
        </ul>
    </li>
    <li><p>Хедер. Для того чтобы добавить пользовательский пресет в хук Header, выполните следующее:</p>
        <ul class="marked-list">
            <li>Откройте файл  <strong>/themes/your_theme/header.tpl</strong> для редактирования.</li>
            <li>Найдите следующий фрагмент кода:
                <pre class="codebox">
{capture name='displayNav'}{hook h='displayNav'}{/capture}
{if $smarty.capture.displayNav}
&lt;div class="nav"&gt;
  &lt;div class="container"&gt;
    &lt;div class="row"&gt;
      &lt;nav>{$smarty.capture.displayNav}&lt;/nav&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
{/if}
&lt;div&gt;
  &lt;div class="container"&gt;
   &lt;div class="row"&gt;
    &lt;div id="header_logo"&gt;
      &lt;a href="{if isset($force_ssl) && $force_ssl}{$base_dir_ssl}{else}{$base_dir}{/if}" title="{$shop_name|escape:'html':'UTF-8'}"&gt;
        &lt;img class="logo img-responsive" src="{$logo_url}" alt="{$shop_name|escape:'html':'UTF-8'}"{if isset($logo_image_width) && $logo_image_width} width="{$logo_image_width}"{/if}{if isset($logo_image_height) && $logo_image_height} height="{$logo_image_height}"{/if}/&gt;
      &lt;/a&gt;
    &lt;/div&gt;
    {if isset($HOOK_TOP)}{$HOOK_TOP}{/if}
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</pre>
            </li>
            <li>Замените его на:
                <pre class="codebox">
{assign var='displayMegaHeader' value={hook h='tmMegaLayoutHeader'}}
{if isset($HOOK_TOP) || $displayMegaHeader}
  {if $displayMegaHeader}
    {$displayMegaHeader}
  {else}
    {capture name='displayNav'}{hook h='displayNav'}{/capture}
    {if $smarty.capture.displayNav}
    &lt;div class="nav"&gt;
      &lt;div class="container"&gt;
        &lt;div class="row"&gt;
          &lt;nav>{$smarty.capture.displayNav}&lt;/nav&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    {/if}
    &lt;div&gt;
      &lt;div class="container"&gt;
       &lt;div class="row"&gt;
        &lt;div id="header_logo"&gt;
          &lt;a href="{if isset($force_ssl) && $force_ssl}{$base_dir_ssl}{else}{$base_dir}{/if}" title="{$shop_name|escape:'html':'UTF-8'}"&gt;
            &lt;img class="logo img-responsive" src="{$logo_url}" alt="{$shop_name|escape:'html':'UTF-8'}"{if isset($logo_image_width) && $logo_image_width} width="{$logo_image_width}"{/if}{if isset($logo_image_height) && $logo_image_height} height="{$logo_image_height}"{/if}/&gt;
          &lt;/a&gt;
        &lt;/div&gt;
        {$HOOK_TOP}
       &lt;/div&gt;
     &lt;/div&gt;
    &lt;/div&gt;
  {/if}
{/if}</pre>
            </li>
        </ul>
    </li>

    <li><p>Футер товара. Для того чтобы добавить пользовательский пресет в хук Product footer, выполните следующее:</p>
        <ul class="marked-list">
            <li>Откройте файл <strong>/themes/your_theme/product.tpl</strong> для редактирования.</li>
            <li>Найдите следующий фрагмент кода:
                <pre class="codebox">
{if isset($HOOK_PRODUCT_FOOTER) && $HOOK_PRODUCT_FOOTER}{$HOOK_PRODUCT_FOOTER}{/if}                                   </pre>
            </li>
            <li>Замените его на:
                <pre class="codebox">
{assign var='displayMegaProductFooter' value={hook h='tmMegaLayoutProductFooter'}}
  {if isset($HOOK_PRODUCT_FOOTER) || $displayMegaFooter}
    {if $displayMegaProductFooter}
      {$displayMegaProductFooter product=$product category=$category}
    {else}
      {$HOOK_PRODUCT_FOOTER}
    {/if}
  {/if}</pre>
            </li>
        </ul>
    </li>
</ul>

<h4>Хуки</h4>
<p>По умолчанию в модуле доступно 5 хуков:</p>
<ul class="index-list">
    <li>Хук 'Header' объеденяет 2 стандартных хука: displayNav и displayTop. Этот хук соответствует хедеру сайта.
    </li>
    <li>'Top Column' соответствует стандартному хуку displayTopColumn. Этот хук идет сразу после хука Header.
    </li>
    <li>'Home' соответствует стандартному хуку displayHome. Этот хук присутствует только на главной странице сайта.</li>
    <li>'Footer' соответствует стандартному хуку displayFooter.</li>
    <li>'Product Footer' соответствует стандартному хуку displayFooterProduct, который отображается в футере страницы товара.
    </li>
</ul>

<h4>Основная панель TM Mega Layout</h4>
<p>Основная панель настройки модуля TM Mega Layout позволяет добавить пресет в нужный хук и настроить пресет.</p>
<figure class="img-polaroid"><img src="img/tmmegalayout100-main-panel.png" alt=""/></figure>

<h5>Добавление пресета</h5>
<ul class="index-list">
    <li>
        <p>Нажмите на '+ Добавить пресет' (1) в нужной вкладке.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-preset-1.png" alt=""/></figure>
    </li>
    <li>
        <p>Затем заполните поле 'Введите название макета' в всплывающем окне, введя туда новое название пресета (2) и нажмите на кнопку 'Сохранить' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-preset-2.png" alt=""/></figure>
    </li>
    <li>
        <p>Пресет успешно создан, теперь он отображается в списке доступных пресетов (4). Созданный пресет доступен для редактирования (5).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-preset-3.png" alt=""/></figure>
    </li>
</ul>

<h5>Активация пресета</h5>
<ul class="index-list">
    <li>
        <p>Сначала выберите доступный пресет в списке (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-activation-preset-1.png" alt=""/></figure>
    </li>
    <li>
        <p>Нажмите на кнопку 'Использовать как стандартный' (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-activation-preset-2.png" alt=""/></figure>
    </li>
    <li>
        <p>Пресет активирован. Если Вам нужно отобразить этот пресет только на некоторых страницах, откройте выпадающий список (3) и выберите нужные страницы. Чтобы применить изменения, нажмите вне области списка. Пресет, отображаемый на всех страницах, будет отмечен заполненной звездочкой в списке пресетов, а тот, который отображается только на некоторых страницах, будет отмечен частично заполненной звездочкой.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-activation-preset-3.png" alt=""/></figure>
    </li>
</ul>

<h5>Удаление пресета</h5>
<p class="alert alert-warning"><span>После удаления пресет невозможно восстановить.</span></p>
<ul class="index-list">
    <li>
        <p>Для того чтобы удалить пресет, выберите нужный пресет в списке (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-delete-preset-1.png" alt=""></figure>
    </li>
    <li>
        <p>Затем нажмите на значок "Корзина" (2) рядом с названием пресета. </p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-delete-preset-2.png" alt=""></figure>
    </li>
    <li>
        <p>Вы успешно удалили пресет.</p>
    </li>
</ul>

<h5>Переименование пресета</h5>
<ul class="index-list">
    <li>
        <p>Для того чтобы переименовать пресет, выберите нужный пресет в списке (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-rename-preset-1.png" alt=""></figure>
    </li>
    <li>
        <p>Затем нажмите на значок "Карандаш" (2) рядом с названием пресета.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-rename-preset-2.png" alt=""></figure>
    </li>
    <li>
        <p>Укажите новое название пресета (3) в всплывающем окне и нажмите на кнопку 'Переименовать макет' (4).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-rename-preset-3.png" alt=""></figure>
    </li>
    <li>
        <p>Пресет был успешно переименован.</p>
    </li>
</ul>

<h4>Обертка</h4>
<p>По умолчанию у обертки нет класса, это не обязательный элемент.</p>
<h5>Добавление обертки</h5>
<ul class="index-list">
    <li>
        <p>Для того чтобы создать обертку, нажмите на '+ Добавить обертку' (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-wrapper-1.png" alt=""></figure>
    </li>
    <li>
        <p>Обертка добавлена (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-wrapper-2.png" alt=""></figure>
    </li>
</ul>

<h5>Добавление пользовательского класса css для обертки</h5>
<p>Добавление пользовательского класса позволит Вам создать особые стили для вашей обертки при помощи правил css.</p>
<ul class="index-list">
    <li>
        <p>Для того чтобы добавить класс обертки нажмите на кнопку (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-wrapper-add-class-1.png" alt=""></figure>
    </li>
    <li>
        <p>Вы увидите всплывающее окно, заполните поле 'Ввести классы обертки' (2) и нажмите на кнопку 'Подтвердить' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-wrapper-add-class-2.png" alt=""></figure>
    </li>
    <li>
        <p>Пользовательский класс был успешно добавлен.</p>
    </li>
</ul>

<h5>Удаление обложки</h5>
<p class="alert alert-warning"><span>Удаление элемента пресета приведёт к удалению всех его дочерних элементов и стилей.</span>
</p>
<ul class="index-list">
    <li>
        <p>Для того чтобы удалить обертку, нажмите на кнопку "Корзина" (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-delete-wrapper-1.png" alt=""></figure>
    </li>
    <li>
        <p>Обертка была успешно удалена.</p>
    </li>
</ul>

<h5>Добавление стилей для обложки</h5>
<ul class="index-list">
    <li>
        <p>Для того чтобы добавить пользовательские стили для обложки, нажмите на значок "Карандаш" (1) в блоке обертки.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-wrapper-add-styles-1.png" alt=""></figure>
    </li>
    <li>
        <p>В всплывающем окне заполните все нужные поля (ознакомьтесь с разделом 'Стили' руководства), и нажмите на кнопку 'Сохранить' (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-wrapper-add-styles-2.png" alt=""></figure>
    </li>
    <li>
        <p>Если все поля заполнены правильно, стили будут сохранены.</p>
    </li>
</ul>

<h4>Ряд</h4>
<p>Элемент "Ряд" сетки Bootstrap. Это обязательный элемент.</p>
<h4>Добавление ряда</h4>
<ul class="index-list">
    <li>
        <p>Для того чтобы вставить новый блок, нажмите на '+ Добавить ряд' (1) в блоке обложки, или '+ Добавить ряд' (2) в основном блоке пресета, или '+ Добавить ряд' (3) в выпадающем списке колонок.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-row-1.png" alt=""></figure>
    </li>
    <li>
         <p>Ряд был успешно добавлен.</p>
    </li>
</ul>

<h4>Добавление пользовательского класса css для ряда</h4>
<p>Добавление пользовательского класса позволяет создать пользовательские стили ряда, используя правила css.</p>
<ul class="index-list">
    <li>
       <p>Для того чтобы добавить класс для ряда, нажмите на кнопку 'многоточие' (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-edit-row-1.png" alt=""></figure>
    </li>
    <li>
        <p>Выберите 'Редактировать ряд' (2) в выпадающем списке.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-edit-row-2.png" alt=""></figure>
    </li>
    <li>
       <p>Заполните поле 'Ввести классы ряда' (3) в всплывающем окне и нажмите на кнопку 'Подтвердить' (4).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-edit-row-3.png" alt=""></figure>
    </li>
    <li>
        <p>Пользовательский класс был успешно добавлен.</p>
    </li>
</ul>

<h4>Удаление ряда</h4>
<p class="alert alert-warning">Удаление пресета приведёт к удалению всех дочерних элементов и стилей.</p>
<ul class="index-list">
    <li>
        <p>Для того чтобы удалить ряд, откройте меню (значок 'многоточие') (1) в блоке ряда.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-delete-row-1.png" alt=""></figure>
    </li>
    <li>
        <p>Выберите 'Удалить' (2) в выпадающем списке.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-delete-row-2.png" alt=""></figure>
    </li>
    <li>
        <p>Ряд был успешно удалён.</p>
    </li>
</ul>

<h4>Добавление стилей в ряд</h4>
<ul class="index-list">
    <li>
        <p>Для того чтобы добавить стили ряда, откройте меню (значок 'многоточие') (1) в блоке ряда.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-row-add-styles-1.png" alt=""></figure>
    </li>
    <li>
         <p>Нажмите на 'Добавить стили' (2) в выпадающем списке.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-row-add-styles-2.png" alt=""></figure>
    </li>
    <li>
        <p>Вы увидите всплывающее окно, заполните все необходимые поля в этом окне (ознакомьтесь с разделом 'Стили' руководства) и нажмите на кнопку 'Сохранить' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-row-add-styles-3.png" alt=""></figure>
    </li>
    <li>
        <p>Если все поля заполнены верно, стили будут сохранены.</p>
    </li>
</ul>

<h4>Колонка</h4>
<p>Это элемент с настраиваемой шириной блока для разных размеров экрана на основе сетки Bootstrap.</p>
<h5>Добавление колонки</h5>
<ul class="index-list">
    <li>
        <p>Для того чтобы добавить колонку в нужный 'ряд', откройте меню (значок 'многоточие') (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-col-1.png" alt=""></figure>
    </li>
    <li>
        <p>Выберите '+ Добавить колонку' (2) в списке.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-col-2.png" alt=""></figure>
    </li>
    <li>
        <p>Заполните поля (классы Bootstrap col-xs*, col-sm*, col-md*, col-lg) в всплывающем окне и нажмите на кнопку 'Подтвердить' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-col-3.png" alt=""></figure>
    </li>
    <li>
        <p>Колонка была успешно добавлена.</p>
    </li>
</ul>

<h5>Удаление колонки</h5>
<p class="alert alert-warning">
    <span>Удаление элемента пресета приведёт к удалению всех дочерних элементов и стилей.</span></p>
<ul class="index-list">
    <li>
        <p>Для того чтобы удалить элемент, откройте меню (значок 'многоточие') (1) в блоке колонки</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-detele-col-1.png" alt=""></figure>
    </li>
    <li>
        <p>Нажмите на 'Удалить' (2) в списке.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-detele-col-2.png" alt=""></figure>
    </li>
    <li>
        <p>Колонка и все её дочерние элементы были удалены.</p>
    </li>
</ul>

<h4>Редактирование колонки</h4>
<ul class="index-list">
    <li>
        <p>Для того чтобы изменить колонку, откройте меню (значок 'многоточие') (1) в блоке колонки.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-edit-col-1.png" alt=""></figure>
    </li>
    <li>
        <p>Нажмите на кнопку 'Редактировать колонку' (2) в списке.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-edit-col-2.png" alt=""></figure>
    </li>
    <li>
        <p>Заполните поля (col-xs*, col-sm*, col-md*, col-lg – классы bootstrap) в всплывающем окне и нажмите на кнопку 'Подтвердить' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-edit-col-3.png" alt=""></figure>
    </li>
    <li>
        <p>Колонка была успешно изменена.</p>
    </li>
</ul>

<h4>Добавление стилей в колонку</h4>
<ul class="index-list">
    <li>
        <p>Для того чтобы добавить стили колонки, откройте меню (значок 'многоточие') (1) в блоке колонки.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-col-add-styles-1.png" alt=""></figure>
    </li>
    <li>
        <p>Нажмите на 'Добавить стили' (2) в списке настроек.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-col-add-styles-2.png" alt=""></figure>
    </li>
    <li>
        <p> Вы увидите всплывающее окно, заполните все необходимые поля в этом окне (ознакомьтесь с разделом 'Стили' руководства) и нажмите на кнопку 'Сохранить' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-col-add-styles-3.png" alt=""></figure>
    </li>
    <li>
        <p>Если все поля заполнены правильно, стили будут сохранены.</p>
    </li>
</ul>

<h4>Модули</h4>
<p>Модули, добавленные в хуки.</p>
<h5>Добавление модуля</h5>
<p class="box-notification"><span> Будьте внимательны при добавлении модулей в пресет, некоторые из модулей желательно использовать, если они не меняют видимый макет, например модуль статистики 'Data mining for statistics'.</span></p>
<ul class="index-list">
    <li>
        <p>Для того чтобы добавить модуль в пресет в блоке колонки, откройте меню (значок 'многоточие') (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-module-1.png" alt=""></figure>
    </li>
    <li>
       <p>Нажмите на '+ Добавить модуль' (2) в списке доступных настроек.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-module-2.png" alt=""></figure>
    </li>
    <li>
        <p>Если нужно, введите пользовательский класс (3) в всплывающем окне и выберите модуль (4), затем нажмите на кнопку 'Подтвердить' (5).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-module-3.png" alt=""></figure>
    </li>
    <li>
        <p>Модуль был успешно добавлен.</p>
    </li>
</ul>

<h5>Удаление модуля</h5>
<p class="alert alert-warning">
    <span>Удаление элемента пресета приведёт к удалению всех дочерних элементов и стилей.</span></p>
<ul class="index-list">
    <li>
        <p>Для того чтобы удалить модуль, откройте меню (значок 'многоточие') (1) в блоке модуля.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-delete-module-1.png" alt=""></figure>
    </li>
    <li>
        <p>Нажмите на кнопку 'Удалить' (2) в списке доступных настроек.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-delete-module-2.png" alt=""></figure>
    </li>
    <li>
        <p>Модуль удален.</p>
    </li>
</ul>

<h4>Добавление пользовательского класса в модуль</h4>
<p>Добавление пользовательского класса позволяет создать стили модуля, используя правила css.</p>
<ul class="index-list">
    <li>
        <p>Для того чтобы указать пользовательский класс модуля, откройте меню в блоке модуля (значок 'многоточие') (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-module-add-class-1.png" alt=""></figure>
    </li>
    <li>
        <p>Нажмите на 'Изменить настройки' (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-module-add-class-2.png" alt=""></figure>
    </li>
    <li>
        <p>Укажите пользовательский класс (3) в всплывающем окне и нажмите на кнопку 'Подтвердить' (4).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-module-add-class-3.png" alt=""></figure>
    </li>
    <li>
        <p>Пользовательский класс добавлен.</p>
    </li>
</ul>

<h5>Логотип, Сообщение об авторских правах</h5>
<p>Блоки логотипа и сообщения об авторских правах редактируются так же, как и модули, за исключением того факта, что логотип может быть помещен только в верхний или нижний колонтитул, а блок сообщения об авторских правах может быть размещен только в позиции Footer.</p>

<h5>Экспорт пресетов</h5>
<p>Инструмент экспорта позволяет Вам экспортировать пресеты для дальнейшего импорта в разные магазины.</p>
<ul class="index-list">
    <li>
        <p>Перейдите на вкладку 'Инструменты' (1) в основной панели настройки.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-export-preset-1.png" alt=""></figure>
    </li>
    <li>
        <p>Выберите 'Экспорт' (2) в форме.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-export-preset-2.png" alt=""></figure>
    </li>
    <li>
        <p>Вы увидите список существующих пресетов в хуках сайта.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-export-preset-3.png" alt=""></figure>
    </li>
    <li>
        <p>Для того чтобы предварительно просмотреть пресет нажмите на кнопку 'Предварительный просмотр макета' (3) рядом с нужным макетом, для того чтобы выполнить экспорт, нажмите на кнопку 'Экспортировать макет' (4).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-export-preset-4.png" alt=""></figure>
    </li>
    <li>
        <p>Затем Вы сможете скачать пресет как zip архив.</p>
    </li>
</ul>

<h5>Импорт пресета</h5>
<p class="alert alert-warning"><span>Инструмент импорта принимает только файлы *.zip пресетов, которые были ранее созданы при помощи Инструмента экспорта модуля.</span>
</p>
<ul class="index-list">
    <li>
        <p>Для того чтобы импортировать пресет, откройте вкладку <strong>Инструменты (1)</strong> и выберите <strong>'Импорт' (2)</strong>.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-import-preset-1.png" alt=""/></figure>
    </li>
    <li>
        <p>Затем нажмите на кнопку <strong>Добавить файл (3)</strong> и выберите zip файл вашего экспортированного пресета. Если файл архива является экспортированным пресетом, Вы увидите предварительный просмотр пресета.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-import-preset-2.png" alt=""/></figure>
    </li>
    <li>
        <p>Если пресет соответствует вашим потребностям, нажмите на кнопку <strong>'Импорт' (4)</strong> (Import). Будет выполнен импорт пресета и пресет будет добавлен в список доступных пресетов.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-import-preset-3.png" alt=""/></figure>
    </li>
</ul>

<h5>Сброс</h5>
<p>Сброс сбрасывает все пресеты до начального состояния (как они были предоставлены с шаблоном), все пресеты, созданные пользователем, будут удалены.</p>
<p class="alert alert-warning"><span>Внимание! После восстановления стандартных пресетов, все пользовательские пресеты будут удалены!</span>
</p>
<ul class="index-list">
    <li>
        <p>Для того чтобы сбросить пресеты, перейдите на вкладку 'Инструменты' (1). В открывшемся блоке откройте вкладку  'Настройки' (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-reset-1.png" alt=""></figure>
    </li>
    <li>
        <p>Нажмите на кнопку 'Сброс'.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-reset-2.png" alt=""></figure>
    </li>
    <li>
        <p>Вот и всё! Все пресеты сброшены до начального состояния.</p>
    </li>
</ul>

<!--optimization-->
<h5>Оптимизация скриптов и стилей</h5>
<p>Оптимизация скриптов и стилей добавляет исключения для модулей в разделе Header, на основании их использования в пресетах. Это позволяет ускорить скорость загрузки страницы. Оптимизация работает в текстовом режиме.</p>
<p>Включение оптимизации:</p>
<ul class="index-list">
    <li>
        <p>Для того чтобы включить оптимизацию, откройте вкладку 'Инструменты' (1) и выберите вкладку 'Настройки' (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-optimization-1.png" alt=""></figure>
    </li>
    <li>
        <p>В отобразившемся окне, Вы можете включить оптимизацию (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-optimization-2.png" alt=""></figure>
    </li>
</ul>
<p>Если оптимизация включена при редактировании и включении пресетов, оптимизация будет отброшена, но Вы увидите окно, предлагающее выполнить оптимизацию. Нет необходимости оптимизировать скрипты и стили каждый раз, когда Вы вносите изменения в пресеты. Выполнять отптимизацию лучше, когда Вы закончите редактирование.</p>
<figure class="img-polaroid"><img src="img/tmmegalayout100-optimization-3.png" alt=""></figure>


<h4>Стили</h4>
<ul class="index-list">
    <li>
        <p>Стили фона. Описание полей:</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-styles-1.png" alt=""/></figure>
        <ul class="marked-list">
                       <li>background-image (фоновое изображение) – значением является ссылка на изображение. Используется изображение из папки ~/images/cms/.</li>
            <li>background-color (цвет фона) – значение можно задать в любом формате цвета (rgb, hex и т.д). Вы можете выбрать цвет используя инструмент colorpicker.</li>
            <li>background-repeat (повторение фона) – все доступные настройки перечислены в виде радиокнопок.</li>
            <li>background-position (позиция фона) - все доступные настройки перечислены в виде выпадающего списка.</li>
            <li>background-size (размер фона) - все доступные настройки перечислены в виде выпадающего списка.</li>
            <li>background-origin (область размещения пользовательского изображения) - все доступные настройки перечислены в виде выпадающего списка.</li>
        </ul>
    </li>
    <li><p>Стили границы.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-styles-2.png" alt=""/></figure>
        <ul class="marked-list">
             <li>border-top-style, border-right-style, border-left-style, border-bottom-style - все доступные настройки перечислены в виде выпадающего списка.</li>
            <li>border-top-width, border-right-width, border-left-width, border-bottom-width – задайте значение в пикселях.</li>
            <li>border-top-right-radius, border-top-left-radius, border-bottom-right-radius, border-bottom-left-radius - задайте значение в пикселях.</li>
            <li>border-top-сolor, border-right-color, border-left-color, border-bottom-color – задайте значение в любом формате цвета (rgb, hex и т.д.) Вы можете выбрать цвет, используя инструмент colorpicker.</li>
        </ul>
    </li>
    <li><p>Другие стили.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-styles-3.png" alt=""/></figure>
        <ul class="marked-list">
            <li>box-shadow (box shadow) - например:0px 0px 0px 0px rgba(0,0,0,0.75).</li>
        </ul>
    </li>
</ul>

<h5>Удаление стилей элемента</h5>
<ul class="index-list">
    <li>
        <p>Для того чтобы удалить стили элемента, откройте раздел стилей и нажмите на кнопку 'Очистить стили' (1)</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-clear-styles-1.png" alt=""/></figure>
    </li>
</ul>

<h5>Предупреждения</h5>
<p>Если в блоке элемента модуля появляется следующее сообщение, включите указанный модуль.</p>
<figure class="img-polaroid"><img src="img/tmmegalayout100-module-warning-1.png" alt=""></figure>
<p>Если в блоке элемента модуля появляется следующее сообщение, Вы должны установить указанный модуль.</p>
<figure class="img-polaroid"><img src="img/tmmegalayout100-module-warning-2.png" alt=""></figure>
<p>Если Вы удалите или отключите модуль 'TM Mega Layout', все активные пресеты будут отключены, и Вы увидите позиции (хуки) в их изначальном виде.</p>