<h3>TM Mega Layout 0.0.1</h3>
<p>Этот модуль предназначен для создания пользовательских макетов (пресетов) для хуков и отображения их на сайте вместо позиций по умолчанию. Это преимущество модуля позволяет Вам создавать различные разметки и изменять их в соответствии с вашими потребностями.</p>

<h4> Функциональные характеристики и свойства модуля</h4>
<ul class="index-list">
    <li>
        <p>Требования:</p>
        <ul class="marked-list">
            <li>Prestashop 1.6+</li>
            <li>PHP 5.4+</li>
        </ul>
    </li>
    <li>
        <p>Свойства:</p>
        <ul class="marked-list">
            <li>Модуль включает 3 хука: displayTopColumn, displayHome, displayFooter, которые соответствуют стандартным.</li>
            <li> В случае отсутствия модуля в хуке, он не может быть добавлен в пресет.</li>
            <li> Модуль может отображаться в пресете только один раз, так же, как и хуке.</li>
            <li>Позиция модуля в разделе 'Модули и службы -> Позиции' не влияет на пресет.</li>
            <li> Модуль не позволяет Вам настраивать различные модули. Вы не можете установить различные настройки модулей для различных пресетов.</li>
        </ul>
    </li>
</ul>
<h6> Модуль предоставляет Вам возможность изменить положение модуля и настроить сетку на 3 хука: displayTopColumn, displayHome, displayFooter. Изменение позиций модулей в разделе 'Модули и службы -> Позиции' не повлияет на позиции модулей в пресете. Если модуль не был добавлен в хук, его нельзя добавить в пресет.</h6>

<h4>Интеграция модуля в шаблон</h4>
<p class="alert alert-warning">Если Вы не выполните этот шаг, пресеты не будут отображаться на вашем сайте.</p>
<ul class="index-list">
    <li><p>Верхняя колонка. Для того чтобы добавить пользовательский пресет в хук topColumn, выполните следующее:</p>
        <ul class="marked-list">
            <li>Откройте файл <strong>/themes/your_theme/header.tpl</strong> для редактирования.</li>
            <li>Найдите следующий фрагмент кода: <pre class="codebox">{hook h="displayTopColumn"}</pre></li>
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
            <li>Замените его на:
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
{/if}
                </pre>
            </li>
        </ul>
    </li>
</ul>

<h4>Основная панель TM Mega Layout</h4>
<p>Основная панель настройки модуля TM Mega Layout позволяет добавить пресет в нужный хук и настроить пресет.</p>
<figure class="img-polaroid">
    <img src="img/tmmegalayout-main-panel.png" alt="" />
</figure>

<h4>Добавление пресета</h4>
<ul class="index-list">
    <li>
        <p>Нажмите на '+ Добавить пресет' (1) в нужной вкладке.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-preset-1.png" alt="" /></figure>
    </li>
    <li>
        <p>Затем заполните поле 'Введите название макета' в всплывающем окне, введя туда новое название пресета (2) и нажмите на кнопку 'Сохранить' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-preset-2.png" alt="" /></figure>
    </li>
    <li>
        <p>Пресет успешно создан, теперь он отображается в списке доступных пресетов (4). Созданный пресет доступен для редактирования (5).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-preset-3.png" alt="" /></figure>
    </li>
</ul>

<h4>Активация пресета</h4>
<ul class="index-list">
    <li>
        <p>Сначала выберите доступный пресет в списке (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-activation-preset-1.png" alt="" /></figure>
    </li>
    <li>
        <p>Нажмите на кнопку 'Использовать как стандартный' (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-activation-preset-2.png" alt="" /></figure>
    </li>
    <li>
        <p>Пресет активен, он будет отображаться в хуке, и будет отмечен галочкой (3) в списке пресетов.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-activation-preset-3.png" alt="" /></figure>
    </li>
</ul>

<h4>Удаление пресета</h4>
<p class="alert alert-warning">После удаления пресет невозможно восстановить.</p>
<ul class="index-list">
    <li>
        <p>Для того чтобы удалить пресет, выберите нужный пресет в списке (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-delete-preset-1.png" alt=""></figure>
    </li>
    <li>
        <p>Затем нажмите на значок "Корзина" (2) рядом с названием пресета. </p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-delete-preset-2.png" alt=""></figure>
    </li>
    <li>
        <p>Вы успешно удалили пресет.</p>
    </li>
</ul>

<h4>Переименование пресета</h4>
<ul class="index-list">
    <li>
        <p>Для того чтобы переименовать пресет, выберите нужный пресет в списке (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-rename-preset-1.png" alt=""></figure>
    </li>
    <li>
        <p>Затем нажмите на значок "Карандаш" (2) рядом с названием пресета.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-rename-preset-2.png" alt=""></figure>
    </li>
    <li>
        <p>Укажите новое название пресета (3) в всплывающем окне и нажмите на кнопку 'Переименовать макет' (4).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-rename-preset-3.png" alt=""></figure>
    </li>
    <li>
        <p>Пресет был успешно переименован.</p>
    </li>
</ul>

<h4>Обертка</h4>
<p>По умолчанию у обертки нет класса, это не обязательный элемент.</p>

<h4>Добавление обертки</h4>
<ul class="index-list">
    <li>
        <p>Для того чтобы создать обертку, нажмите на '+ Добавить обертку' (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-wrapper-1.png" alt=""></figure>
    </li>
    <li>
        <p>Обертка добавлена (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-wrapper-2.png" alt=""></figure>
    </li>
</ul>

<h4>Добавление пользовательского класса css для обертки</h4>
<p>Добавление пользовательского класса позволит Вам создать особые стили для вашей обертки при помощи правил css.</p>
<ul class="index-list">
    <li>
        <p>Для того чтобы добавить класс обертки нажмите на кнопку (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-wrapper-add-class-1.png" alt=""></figure>
    </li>
    <li>
        <p>Вы увидите всплывающее окно, заполните поле 'Ввести классы обертки' (2) и нажмите на кнопку 'Подтвердить' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-wrapper-add-class-2.png" alt=""></figure>
    </li>
    <li>
        <p>Пользовательский класс был успешно добавлен.</p>
    </li>
</ul>

<h4>Удаление обложки</h4>
<p class="alert alert-warning">Удаление элемента пресета приведёт к удалению всех его дочерних элементов и стилей.</p>
<ul class="index-list">
    <li>
        <p>Для того чтобы удалить обертку, нажмите на кнопку "Корзина" (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-delete-wrapper-1.png" alt=""></figure>
    </li>
    <li>
        <p>Обертка была успешно удалена.</p>
    </li>
</ul>

<h4>Добавление стилей для обложки</h4>
<ul class="index-list">
    <li>
        <p>Для того чтобы добавить пользовательские стили для обложки, нажмите на значок "Карандаш" (1) в блоке обертки.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-wrapper-add-styles-1.png" alt=""></figure>
    </li>
    <li>
        <p>В всплывающем окне заполните все нужные поля (ознакомьтесь с разделом 'Стили' руководства), и нажмите на кнопку 'Сохранить' (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-wrapper-add-styles-2.png" alt=""></figure>
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
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-row-1.png" alt=""></>
    </li>
    <li>
        <p>Ряд был успешно добавлен.</p>
    </li>
</ul>

<h4>Добавление пользовательского класса css для ряда</h4>
<p>Добавление пользовательского класса позволяет создать пользовательские стили ряда, используя правила css.</p>
<ul class="index-list">
    <li>
        <p>Для того чтобы добавить класс для ряда, нажмите на кнопку (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-edit-row-1.png" alt=""></figure>
    </li>
    <li>
        <p>Выберите 'Редактировать ряд' (2) в выпадающем списке.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-edit-row-2.png" alt=""></figure>
    </li>
    <li>
        <p>Заполните поле 'Ввести классы ряда' (3) в всплывающем окне и нажмите на кнопку 'Подтвердить' (4).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-edit-row-3.png" alt=""></figure>
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
        <figure class="img-polaroid"><img src="img/tmmegalayout-delete-row-1.png" alt=""></figure>
    </li>
    <li>
        <p>Выберите 'Удалить' (2) в выпадающем списке.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-delete-row-2.png" alt=""></figure>
    </li>
    <li>
        <p>Ряд был успешно удалён.</p>
    </li>
</ul>

<h4>Добавление стилей в ряд</h4>
<ul class="index-list">
    <li>
        <p>Для того чтобы добавить стили ряда, откройте меню (значок 'многоточие') (1) в блоке ряда.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-row-add-styles-1.png" alt=""></figure>
    </li>
    <li>
        <p>Нажмите на 'Добавить стили' (2) в выпадающем списке.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-row-add-styles-2.png" alt=""></figure>
    </li>
    <li>
        <p>Вы увидите всплывающее окно, заполните все необходимые поля в этом окне (ознакомьтесь с разделом 'Стили' руководства) и нажмите на кнопку 'Сохранить' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-row-add-styles-3.png" alt=""></figure>
    </li>
    <li>
        <p>Если все поля заполнены верно, стили будут сохранены.</p>
    </li>
</ul>

<h4>Колонка</h4>
<p>Это элемент с настраиваемой шириной блока для разных размеров экрана на основе сетки Bootstrap.</p>
<h4>Добавление колонки</h4>
<ul class="index-list">
    <li>
        <p>Для того чтобы добавить колонку в нужный 'ряд', откройте меню (значок 'многоточие') (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-col-1.png" alt=""></figure>
    </li>
    <li>
        <p>Выберите '+ Добавить колонку' (2) в списке.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-col-2.png" alt=""></figure>
    </li>
    <li>
        <p>Заполните поля (классы Bootstrap col-xs*, col-sm*, col-md*, col-lg) в всплывающем окне и нажмите на кнопку 'Подтвердить' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-col-3.png" alt=""></figure>
    </li>
    <li>
        <p>Колонка была успешно добавлена.</p>
    </li>
</ul>

<h4>Удаление колонки</h4>
<p class="alert alert-warning"> Удаление элемента пресета приведёт к удалению всех дочерних элементов и стилей.</p>
<ul class="index-list">
    <li>
        <p>Для того чтобы удалить элемент, откройте меню (значок 'многоточие') (1) в блоке колонки</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-detele-col-1.png" alt=""></figure>
    </li>
    <li>
        <p>Нажмите на 'Удалить' (2) в списке.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-detele-col-2.png" alt=""></figure>
    </li>
    <li>
        <p>Колонка и все её дочерние элементы были удалены.</p>
    </li>
</ul>

<h4>Редактирование колонки</h4>
<ul class="index-list">
    <li>
        <p>Для того чтобы изменить колонку, откройте меню (значок 'многоточие') (1) в блоке колонки.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-edit-col-1.png" alt=""></figure>
    </li>
    <li>
        <p>Нажмите на кнопку 'Редактировать колонку' (2) в списке.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-edit-col-2.png" alt=""></figure>
    </li>
    <li>
        <p>Заполните поля (col-xs*, col-sm*, col-md*, col-lg – классы bootstrap) в всплывающем окне и нажмите на кнопку 'Подтвердить' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-edit-col-3.png" alt=""></figure>
    </li>
    <li>
        <p>Колонка была успешно изменена.</p>
    </li>
</ul>

<h4>Добавление стилей в колонку</h4>
<ul class="index-list">
    <li>
        <p>Для того чтобы добавить стили колонки, откройте меню (значок 'многоточие') (1) в блоке колонки.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-col-add-styles-1.png" alt=""></figure>
    </li>
    <li>
        <p>Нажмите на 'Добавить стили' (2) в списке настроек.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-col-add-styles-2.png" alt=""></figure>
    </li>
    <li>
        <p> Вы увидите всплывающее окно, заполните все необходимые поля в этом окне (ознакомьтесь с разделом 'Стили' руководства) и нажмите на кнопку 'Сохранить' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-col-add-styles-3.png" alt=""></figure>
    </li>
    <li>
        <p>Если все поля заполнены правильно, стили будут сохранены.</p>
    </li>
</ul>

<h4>Модули</h4>
<p>Модули, добавленные в хуки.</p>
<h4>Добавление модуля</h4>
<p class="box-notification"><span> Будьте внимательны при добавлении модулей в пресет, некоторые из модулей желательно использовать, если они не меняют видимый макет, например модуль статистики 'Data mining for statistics'.</span></p>
<ul class="index-list">
    <li>
        <p>Для того чтобы добавить модуль в пресет в блоке колонки, откройте меню (значок 'многоточие') (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-module-1.png" alt=""></figure>
    </li>
    <li>
        <p>Нажмите на '+ Добавить модуль' (2) в списке доступных настроек.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-module-2.png" alt=""></figure>
    </li>
    <li>
        <p>Если нужно, введите пользовательский класс (3) в всплывающем окне и выберите модуль (4), затем нажмите на кнопку 'Подтвердить' (5).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-module-3.png" alt=""></figure>
    </li>
    <li>
        <p>Модуль был успешно добавлен.</p>
    </li>
</ul>

<h4>Удаление модуля</h4>
<p class="alert alert-warning"> Удаление элемента пресета приведёт к удалению всех дочерних элементов и стилей.</p>
<ul class="index-list">
    <li>
        <p>Для того чтобы удалить модуль, откройте меню (значок 'многоточие') (1) в блоке модуля.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-delete-module-1.png" alt=""></figure>
    </li>
    <li>
        <p>Нажмите на кнопку 'Удалить' (2) в списке доступных настроек.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-delete-module-2.png" alt=""></figure>
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
        <figure class="img-polaroid"><img src="img/tmmegalayout-module-add-class-1.png" alt=""></figure>
    </li>
    <li>
        <p>Нажмите на 'Изменить настройки' (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-module-add-class-2.png" alt=""></figure>
    </li>
    <li>
        <p>Укажите пользовательский класс (3) в всплывающем окне и нажмите на кнопку 'Подтвердить' (4).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-module-add-class-3.png" alt=""></figure>
    </li>
    <li>
        <p>Пользовательский класс добавлен.</p>
    </li>
</ul>

<h4>Экспорт пресетов</h4>
<p> Инструмент экспорта позволяет Вам экспортировать пресеты для дальнейшего импорта в разные магазины.</p>
<ul class="index-list">
    <li>
        <p>Перейдите на вкладку 'Инструменты' (1) в основной панели настройки.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-export-preset-1.png" alt=""></figure>
    </li>
    <li>
        <p>Выберите 'Экспорт' (2) в форме.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-export-preset-2.png" alt=""></figure>
    </li>
    <li>
        <p>Вы увидите список существующих пресетов в хуках сайта.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-export-preset-3.png" alt=""></figure>
    </li>
    <li>
        <p>Для того чтобы предварительно просмотреть пресет нажмите на кнопку 'Предварительный просмотр макета' (3) рядом с нужным макетом, для того чтобы выполнить экспорт, нажмите на кнопку 'Экспортировать макет' (4).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-export-preset-4.png" alt=""></figure>
    </li>
    <li>
        <p>Затем Вы сможете скачать пресет как zip архив.</p>
    </li>
</ul>

<h4>Импорт пресета</h4>
<p class="alert alert-warning">Инструмент импорта принимает только файлы *.zip пресетов, которые были ранее созданы при помощи Инструмента экспорта модуля.</p>
<ul class="index-list">
    <li>
        <p>Для того чтобы импортировать пресет, откройте вкладку <strong>Инструменты (1)</strong> и выберите <strong>'Импорт' (2)</strong>.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-import-preset-1.png" alt="" /></figure>
    </li>
    <li>
        <p>Затем нажмите на кнопку <strong>Добавить файл (3)</strong> и выберите zip файл вашего экспортированного пресета. Если файл архива является экспортированным пресетом, Вы увидите предварительный просмотр пресета.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-import-preset-2.png" alt="" /></figure>
    </li>
    <li>
        <p>Если пресет соответствует вашим потребностям, нажмите на кнопку <strong>'Импорт' (4)</strong> (Import). Будет выполнен импорт пресета и пресет будет добавлен в список доступных пресетов.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-import-preset-3.png" alt="" /></figure>
    </li>
</ul>

<h4>Сброс</h4>
<p>Сброс сбрасывает все пресеты до начального состояния (как они были предоставлены с шаблоном), все пресеты, созданные пользователем, будут удалены.</p>
<p class="alert alert-warning">Внимание! После восстановления стандартных пресетов, все пользовательские пресеты будут удалены!</p>
<ul class="index-list">
    <li>
        <p>Для того чтобы сбросить пресеты, перейдите на вкладку 'Инструменты' (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-reset-1.png" alt=""></figure>
    </li>
    <li>
        <p>Откройте вкладку 'Сброс' (2) в блоке.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-reset-2.png" alt=""></figure>
    </li>
    <li>
        <p>И нажмите 'Сбросить до состояния по умолчанию'.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-reset-3.png" alt=""></figure>
    </li>
    <li>
        <p>Вот и всё.</p>
    </li>
</ul>

<h4>Стили</h4>
<ul class="index-list">
    <li>
        <p>Стили фона. Описание полей:</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-styles-1.png" alt="" /></figure>
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
        <figure class="img-polaroid"><img src="img/tmmegalayout-styles-2.png" alt="" /></figure>
        <ul class="marked-list">
            <li>ТИП: border-top-style, border-right-style, border-left-style, border-bottom-style - все доступные настройки перечислены в виде выпадающего списка.</li>
            <li>ШИРИНА: border-top-width, border-right-width, border-left-width, border-bottom-width – задайте значение в пикселях.</li>
            <li>РАДИУС: border-top-right-radius, border-top-left-radius, border-bottom-right-radius, border-bottom-left-radius - задайте значение в пикселях.</li>
            <li>ЦВЕТ: border-top-сolor, border-right-color, border-left-color, border-bottom-color – задайте значение в любом формате цвета (rgb, hex и т.д.) Вы можете выбрать цвет, используя инструмент colorpicker.</li>
        </ul>
    </li>
    <li><p>Другие стили.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-styles-3.png" alt="" /></figure>
        <ul class="marked-list">
            <li>box-shadow - например: 0px 0px 0px 0px rgba(0,0,0,0.75).</li>
        </ul>
    </li>
</ul>

<h4>Удаление стилей элемента</h4>
<ul class="index-list">
    <li>
        <p>Для того чтобы удалить стили элемента, откройте раздел стилей и нажмите на кнопку 'Очистить стили' (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-clear-styles-1.png" alt="" /></figure>
    </li>
</ul>

<h4>Предупреждения</h4>
<p> Если в блоке элемента модуля появляется следующее сообщение, включите указанный модуль.</p>
<figure class="img-polaroid"><img src="img/tmmegalayout-module-warning-1.png" alt=""></figure>
<p> Если в блоке элемента модуля появляется следующее сообщение, Вы должны установить указанный модуль.</p>
<figure class="img-polaroid"><img src="img/tmmegalayout-module-warning-2.png" alt=""></figure>
<p class="alert alert-warning">Если Вы удалите или отключите модуль 'TM Mega Layout', все активные пресеты будут отключены, и Вы увидите позиции (хуки) в их изначальном виде.</p>
