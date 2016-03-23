<h3>TM Mega Layout</h3>

<p>Модуль предназначен для создания пользовательских макетов (пресетов) для блоков и отображения их на сайте вместо стандартных позиций. Модуль имеет преимущество над стандартным функционалом благодаря возможности создавать разные разметки блоков и менять их на свой вкус.</p>

<h4>Функциональные характеристики и особенности модуля.</h4>

<ul class="index-list">
    <li>
        Требования:
        <ul class="marked-list">
            <li>Prestashop 1.6+</li>
            <li>PHP 5.3+</li>
        </ul class="marked-list" class="marked-list">
    </li>
    <li>
        Особенности:
        <ul class="marked-list">
            <li>В модуле присутствуют 3 блока: displayTopColumn, displayHome, displayFooter, соответствующие стандартным блокам.</li>
            <li>Если модуль отсутствует в блоке, его нельзя добавить в пресет.</li>
            <li>Модуль в пресете может отображаться один раз, как и в блоке.</li>
            <li>Расположение модулей в 'Modules and Services -> Positions' никак не влияют на пресет.</li>
            <li>Из модуля нельзя настраивать другие модули. Нельзя задавать разные настройки модулей для разных пресетов.</li>
        </ul>
    </li>
</ul>

<p>Модуль позволяет менять позиции и настроить сетку для трех блоков: displayTopColumn, displayHome, displayFooter. Смена позиций модулей в 'Modules and Services->Positions' никак не повлияет на расположения модулей в пресете. Если модуль отсутствует в блоке, то и в пресет его добавить нельзя.</p>

<h4>Интеграция модуля в тему</h4>

<p class="alert alert-warning">Без этого шага пользовательские макеты (пресеты) не будут отображаться на стороне пользователя</p>

<ul class="index-list">
    <li>Top column. Для того, чтобы пользовательский пресет отображался в блоке topColumn нужно:
        <ul class="marked-list">
            <li>Открыть в редакторе файл <strong>/themes/your_theme/header.tpl</strong>.</li>
            <li>Найти следующий код <pre class="prettyprint">{hook h="displayTopColumn"}</pre></li>
            <li>Заменить его на:
                <pre class="prettyprint">
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
{/if}
                </pre>
            </li>
        </ul>
    </li>
    <li>Home. Для того, чтобы пользовательский пресет отображался в блоке Home нужно:
        <ul class="marked-list">
            <li>Открыть в редакторе файл <strong>/themes/your_theme/footer.tpl</strong>.</li>
            <li>Найти следующий код:
                <pre class="prettyprint">
{if isset($HOOK_HOME) && $HOOK_HOME|trim}
    &lt;div class="home-column"&gt;
        &lt;div class="container"&gt;
            {$HOOK_HOME}
        &lt;/div&gt;
    &lt;/div&gt;
{/if}
                </pre>
            </li>
            <li>Заменить его на:
                <pre class="prettyprint">
{assign var='displayMegaHome' value={hook h='tmMegaLayoutHome'}}
{if $displayMegaHome}
    {hook h='tmMegaLayoutHome'}
{else}
    {if isset($HOOK_HOME) && $HOOK_HOME|trim}
        {$HOOK_HOME}
    {/if}
{/if}
                </pre>
            </li>
        </ul>
    </li>
    <li>Footer. Для того, чтобы пользовательский пресет отображался в блоке Footer нужно:
        <ul class="marked-list">
            <li>Открыть в редакторе файл <strong>/themes/your_theme/footer.tpl</strong>.</li>
            <li>Найти следующий код:
                <pre class="prettyprint">
{if isset($HOOK_FOOTER)}
    &lt;div class="footer-container"&gt;
        &lt;footer id="footer"  class="container"&gt;
            &lt;div class="row"&gt;
                {$HOOK_FOOTER}
            &lt;/div&gt;
        &lt;/footer&gt;
    &lt;/div&gt;
{/if}
                </pre>
            </li>
            <li>Заменить его на:
                <pre class="prettyprint">
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

<h4>TM Mega Layout Main Panel</h4>

<p>Главная панель модуля TM Mega Layout, в которой можно добавить пресет к выбранному блоку, настроить пресет </p>

<figure class="img-polaroid">
    <img src="img/tmmegalayout-main-panel.png" alt="" />
</figure>

<h4>Добавление пресета</h4>

<ul class="index-list">
    <li>
        <p>В интересующей вкладке нажмите '+ Add Preset'(1).</p>
        <figure class="img-polaroid">
            <img src="img/tmmegalayout-add-preset-1.png" alt="" />
        </figure>
    </li>
    <li>
        <p>Появится всплывающее окно, в поле 'Enter layout name' введите название нового пресета(2) и нажмите 'Save'(3).</p>
        <figure class="img-polaroid">
            <img src="img/tmmegalayout-add-preset-2.png" alt="" />
        </figure>
    </li>
    <li>
        <p>Пресет создан, вы можете увидеть его в списке пресетов(4). Только что созданный пресет становится выбранным для редактирования(5).</p>
        <figure class="img-polaroid">
            <img src="img/tmmegalayout-add-preset-3.png" alt="" />
        </figure>
    </li>
</ul>

<h4>Активация пресета</h4>
<ul class="index-list">
    <li>
        <p>Для начала выберите интересующий вас пресет из списка(1).</p>
        <figure class="img-polaroid">
            <img src="img/tmmegalayout-activation-preset-1.png" alt="" />
        </figure>
    </li>
    <li>
        <p>Нажмите на переключатель 'Use as default'(2).</p>
        <figure class="img-polaroid">
            <img src="img/tmmegalayout-activation-preset-2.png" alt="" />
        </figure>
    </li>
    <li>
        <p>Пресет активный и будет отображаться в блоке, а в списке пресетов он будет отмечен галочкой(3).</p>
        <figure class="img-polaroid">
            <img src="img/tmmegalayout-activation-preset-3.png" alt="" />
        </figure>
    </li>
</ul>

<h4>Удаление пресета</h4>
<p class="alert alert-warning">После удаления, восстановление пресета будет невозможно.</p>
<ul class="index-list">
    <li>
        <p>Для удаления пресета выберите интересующий вас пресет из списка(1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-delete-preset-1.png" alt=""></figure>
    </li>
    <li>
        <p>Затем напротив названия пресета нажмите на корзину(2). </p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-delete-preset-2.png" alt=""></figure>
    </li>
    <li>
        <p>Пресет удален.</p>
    </li>
</ul>

<h4>Смена названия пресета</h4>
<ul class="index-list">
    <li>
        <p>Для того чтобы переименовать пресет, нужно выбрать его из списка пресетов(1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-rename-preset-1.png" alt=""></figure>
    </li>
    <li>
        <p>Затем напротив названия пресета нажать на 'карандаш'(2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-rename-preset-2.png" alt=""></figure>
    </li>
    <li>
        <p>В возникшем всплывающем окне указать новое название пресета(3) и нажать 'Rename layout' (4).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-rename-preset-3.png" alt=""></figure>
    </li>
    <li>
        <p>Пресет переименован.</p>
    </li>
</ul>

<h4>Wrapper</h4>
<p>Обертка не имеет класса по умолчанию и является необязательным элементом.</p>
<h4>Добавление обертки</h4>
<ul class="index-list">
    <li>
        <p>Для добавления обертки нажмите '+ Add wrapper'(1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-wrapper-1.png" alt=""></figure>
    </li>
    <li>
        <p>Обертка добавлена(2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-wrapper-2.png" alt=""></figure>
    </li>
</ul>

<h4>Добавление пользовательского css класса к обертке</h4>
<p>Добавление пользовательского класса позволит создать оформление обертки с помощью правил css.</p>
<ul class="index-list">
    <li>
        <p>Для добавления класса к обертке нужно нажать на кнопку(1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-wrapper-add-class-1.png" alt=""></figure>
    </li>
    <li>
        <p>Появится всплывающее окно, в котором нужно отредактировать поле 'Enter row classes'(2) и нажать 'Confirm'(3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-wrapper-add-class-2.png" alt=""></figure>
    </li>
    <li>
        <p>Дополнительный класс добавлен.</p>
    </li>
</ul>

<h4>Удаление обертки</h4>
<p class="alert alert-warning">Удаление элемента пресета повлечет за собой удаление всех дочерних элементов и их стилей.</p>
<ul class="index-list">
    <li>
        <p>Для удаления обертки нажмите кнопку корзины(1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-delete-wrapper-1.png" alt=""></figure>
    </li>
    <li>
        <p>Обертка удалена.</p>
    </li>
</ul>

<h4>Добавление стилей к обертке</h4>
<ul class="index-list">
    <li>
        <p>Для добавления стилей нажмите на кнопку 'карандаш'(1) в блоке обертки.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-wrapper-add-styles-1.png" alt=""></figure>
    </li>
    <li>
        <p>Появится всплывающее окно, в котором нужно заполнить все интересующие вас поля (смотрите раздел документации 'Стилизация'), и нажать кнопку 'Save'(2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-wrapper-add-styles-2.png" alt=""></figure>
    </li>
    <li>
        <p>Если все поля заполнены правильно, стили будут сохранены.</p>
    </li>
</ul>

<h4>Ряд</h4>
<p>Элемент row из сетки Bootstrap. Обязательный элемент.</p>
<h4>Добавление ряда</h4>
<ul class="index-list">
    <li>
        <p>Для добавления ряда нажмите '+ Add row'(1) в блоке обертки, либо '+ Add row'(2) в основном блоке пресета, либо '+ Add row'(3) в выпадающем списке колонки.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-row-1.png" alt="" ></figure>
    </li>
    <li>
        <p>Ряд добавлен.</p>
    </li>
</ul>

<h4>Добавление пользовательского css класса ряда</h4>
<p>Добавление пользовательского класса позволит стилизовать данный ряд с помощью css.</p>
<ul class="index-list">
    <li>
        <p>Для добавления класса к ряду нужно нажать на кнопку(1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-edit-row-1.png" alt="" ></figure>
    </li>
    <li>
        <p>В выпадающем списке выбрать 'Edit row'(2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-edit-row-2.png" alt="" ></figure>
    </li>
    <li>
        <p>Появится всплывающее окно в котором нужно отредактировать поле 'Enter row classes'(3) и нажать 'Confirm'(4).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-edit-row-3.png" alt="" ></figure>
    </li>
    <li>
        <p>Дополнительный класс добавлен.</p>
    </li>
</ul>

<h4>Удаление ряда</h4>
<p class="alert alert-warning">Удаление элемента пресета повлечет за собой удаление всех дочерних элементов и их стилей.</p>
<ul class="index-list">
    <li>
        <p>Для удаления ряда заходим в меню(иконка 'троеточие') в блоке ряда.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-delete-row-1.png" alt="" ></figure>
    </li>
    <li>
        <p>В выпадающем списке выберите 'Delete'(2)</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-delete-row-2.png" alt="" ></figure>
    </li>
    <li>
        <p>Ряд удален.</p>
    </li>
</ul>

<h4>Добавление стилей к ряду</h4>
<ul class="index-list">
    <li>
        <p>Для добавления стилей зайдите в меню (иконка 'троеточие')(1) в блоке row.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-row-add-styles-1.png" alt="" ></figure>
    </li>
    <li>
        <p>В выпадающем списке нажмите 'Stylize'(2)</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-row-add-styles-2.png" alt="" ></figure>
    </li>
    <li>
        <p>Появится всплывающее окно, в котором нужно заполнить все интересующие поля (смотрите раздел документации 'Стилизация') и нажать кнопку 'Save'(3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-row-add-styles-3.png" alt="" ></figure>
    </li>
    <li>
        <p>Если все поля заполнены правильно, стили будут сохранены.</p>
    </li>
</ul>

<h4>Колонка</h4>
<p>Элемент, которому можно задать ширину блока на разных разрешениях, базируясь на сетке Bootstrap.</p>
<h4>Добавление колонки</h4>
<ul class="index-list">
    <li>
        <p>Для добавления колонки в нужном элементе 'row' заходим в меню (иконка 'троеточие')(1)</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-col-1.png" alt="" ></figure>
    </li>
    <li>
        <p>В появившемся списке выбираем '+ Add Col'(2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-col-2.png" alt="" ></figure>
    </li>
    <li>
        <p>Появится всплывающее окно, в нем нужно заполнить поля (col-xs*, col-sm*, col-md*, col-lg - bootstrap классы) и нажать 'Confirm'(3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-col-3.png" alt="" ></figure>
    </li>
    <li>
        <p>Колонка создана.</p>
    </li>
</ul>

<h4>Удаление колонки</h4>
<p class="alert alert-warning">Удаление элемента пресета повлечет за собой удаление всех дочерних элементов и их стилей.</p>
<ul class="index-list">
    <li>
        <p>Для удаления колонки заходим в меню (иконка 'троеточие') в блоке колонки(1)</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-detele-col-1.png" alt="" ></figure>
    </li>
    <li>
        <p>В появившемся списке нажимаем 'Delete'(2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-detele-col-2.png" alt="" ></figure>
    </li>
    <li>
        <p>Колонка удалена вместе с ее дочерними элементами.</p>
    </li>
</ul>

<h4>Редактирование колонки.</h4>
<ul class="index-list">
    <li>
        <p>Для редактирования колонки, зайдите в меню(иконка 'троеточие')(1) в блоке колонки.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-edit-col-1.png" alt="" ></figure>
    </li>
    <li>
        <p>В появившемся списке нажмите 'Edit column'(2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-edit-col-2.png" alt="" ></figure>
    </li>
    <li>
        <p>Появится всплывающее окно, в нем нужно заполнить поля (col-xs*, col-sm*, col-md*, col-lg - bootstrap классы) и нажать 'Confirm'.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-edit-col-3.png" alt="" ></figure>
    </li>
    <li>
        <p>Колонка отредактирована.</p>
    </li>
</ul>

<h4>Добавление стилей к колонке</h4>
<ul class="index-list">
    <li>
        <p>Для добавления стилей зайдите в меню(иконка 'троеточие')(1) в блоке колонки.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-col-add-styles-1.png" alt="" ></figure>
    </li>
    <li>
        <p>В выпадающем списке нажмите 'Stylize'(2)</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-col-add-styles-2.png" alt="" ></figure>
    </li>
    <li>
        <p>Появится всплывающее окно, в котором нужно заполнить все интересующие вас поля (смотрите раздел документации 'Стилизация'), и нажать кнопку 'Save'(3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-col-add-styles-3.png" alt="" ></figure>
    </li>
    <li>
        <p>Если все поля заполнены правильно, стили будут сохранены.</p>
    </li>
</ul>

<h4>Module</h4>
<p>Модуль, который находится в данном блоке.</p>
<h4>Добавление модуля</h4>
<p class="alert alert-warning">Будьте внимательны при добавлении модулей в пресет, некоторые модули желательно использовать даже если визуально они ничего не меняют, к примеру, модуль статистики 'Data mining for statistics'.</p>
<ul class="index-list">
    <li>
        <p>Для добавления модуля в пресет в блоке колонки, заходим в меню (иконка 'троеточие')(1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-module-1.png" alt="" ></figure>
    </li>
    <li>
        <p>В появившемся списке нажимаем '+ Add Module'(2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-module-2.png" alt="" ></figure>
    </li>
    <li>
        <p>В появившемся всплывающем окне, если нужен, вводим дополнительный класс(3) и выбираем модуль(4), затем нажимаем 'Confirm'(5).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-module-3.png" alt="" ></figure>
    </li>
    <li>
        <p>Модуль добавлен.</p>
    </li>
</ul>

<h4>Удаление модуля</h4>
<p class="alert alert-warning">Удаление элемента пресета повлечет за собой удаление всех дочерних элементов и их стилей.</p>
<ul class="index-list">
    <li>
        <p>Для удаления модуля в блоке модуля заходим в меню (иконка 'троеточие')(1)</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-delete-module-1.png" alt="" ></figure>
    </li>
    <li>
        <p>В появившемся списке нажимаем 'Delete'(2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-delete-module-2.png" alt="" ></figure>
    </li>
    <li>
        <p>Модуль удален.</p>
    </li>
</ul>

<h4>Добавление пользовательского класса для модуля</h4>
<p>Добавление пользовательского класса позволит создать оформление данного модуля с помощью css.</p>
<ul class="index-list">
    <li>
        <p>Для добавления пользовательского класса к блоку модуля, в блоке модуля переходим в меню (иконка 'троеточие')(1)</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-module-add-class-1.png" alt="" ></figure>
    </li>
    <li>
        <p>В появившемся списке нажмите 'Edit Settings'(2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-module-add-class-2.png" alt="" ></figure>
    </li>
    <li>
        <p>В появившемся всплывающем окне, укажите класс(3) и нажмите 'Confirm'(4)</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-module-add-class-3.png" alt="" ></figure>
    </li>
    <li>
        <p>Дополнительный класс добавлен.</p>
    </li>
</ul>

<h4>Экспорт пресетов</h4>
<p>Экспорт позволяет экспортировать пресеты для дальнейшего импорта в другие магазины.</p>
<ul class="index-list">
    <li>
        <p>В главной панели управления перейдите во вкладку 'Tools'(1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-export-preset-1.png" alt="" ></figure>
    </li>
    <li>
        <p>В появившейся форме выберите 'Export'(2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-export-preset-2.png" alt="" ></figure>
    </li>
    <li>
        <p>Появится список со всеми существующими пресетами в блоках.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-export-preset-3.png" alt="" ></figure>
    </li>
    <li>
        <p>Для просмотра пресета нажмите 'Layout preview'(3) напротив интересующего вас пресета, для экспорта нажмите 'Export layout'(4).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-export-preset-4.png" alt="" ></figure>
    </li>
    <li>
        <p>После чего будет скачан zip архив с пресетом. </p>
    </li>
</ul>

<h4>Импорт пресета.</h4>
<p class="alert alert-warning">Инструмент импорта работает только с *.zip файлами пресетов, которые были предварительно сгенерированы c помощью инструмента экспорта данного модуля.</p>
<ul class="index-list">
    <li>
        <p>Для того, чтобы импортировать ваш пресет, необходимо открыть вкладку <strong>'Инструменты' (Tools)(1)</strong> и выбрать <strong>'Импорт' (Import)(2)</strong>.</p>
        <figure class="img-polaroid"><img class="presta_scr2" src="img/tmmegalayout-import-preset-1.png" alt="" /></figure>
    </li>
    <li>
        <p>В появившемся окне нажмите кнопку <strong>'Добавить файл' (Add file)(3)</strong> и выберите zip файл экспорта вашего пресета. Если архив является экспортом пресета, то мы увидим привью данного пресета.</p>
        <figure class="img-polaroid"><img class="presta_scr2" src="img/tmmegalayout-import-preset-2.png" alt="" /></figure>
    </li>
    <li>
        <p>Если пресет вам подходит, нажмите кнопку <strong>'Импорт' (Import)(4)</strong>. Пресет будет импортирован и добавлен в список доступных пресетов.</p>
        <figure class="img-polaroid"><img class="presta_scr2" src="img/tmmegalayout-import-preset-3.png" alt="" /></figure>
    </li>
</ul>

<h4>Reset</h4>
<p>Reset - сбрасывает все пресеты в начальное состояние (в том виде, в каком они  поставлялись с темой), при этом все созданные пресеты удаляются.</p>
<p class="alert alert-warning">Внимание! После восстановления пресетов по умолчанию, все пользовательские пресеты будут удалены!</p>
<ul class="index-list">
    <li>
        <p>Для сброса пресетов, перейдите во вкладку 'Tools'(1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-reset-1.png" alt="" class="presta_scr2"></figure>
    </li>
    <li>
        <p>В появившемся блоке откройте вкладку 'Reset'(2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-reset-2.png" alt="" class="presta_scr2"></figure>
    </li>
    <li>
        <p>И нажмите на 'Reset to default'.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-reset-3.png" alt="" class="presta_scr2"></figure>
    </li>
    <li>
        <p>Готово.</p>
    </li>
</ul>

<h4>Стилизация</h4>
<ul class="index-list">
    <li>
        <p>Background styles. Описание полей:</p>
        <figure class="img-polaroid"><img class="presta_scr2" src="img/tmmegalayout-styles-1.png" alt="" /></figure>
        <ul class="marked-list">
            <li>background-image (фоновая картинка) - аргументом является ссылка на картинку либо значение none. Картинка выбирается из папки ~/images/cms/.</li>
            <li>background-color (фоновый цвет) - значение может быть указано в любом формате задания цвета (rgb, hex и т.д.). Вы можете выбрать цвет с помощью инструмента выбора цвета.</li>
            <li>background-repeat (повторение фона) - все возможные значения доступны в выпадающем списке.</li>
            <li>background-position (позиция фона) - все возможные значения доступны в выпадающем списке.</li>
            <li>background-size (размер фона) - все возможные значения доступны в выпадающем списке.</li>
            <li>background-origin (область позиционирования фонового рисунка) - все возможные значения доступны в выпадающем списке.</li>
        </ul>
    </li>
    <li><p>Border styles.</p>
        <p class="img-polaroid"><img class="presta_scr2" src="img/tmmegalayout-styles-2.png" alt="" /></p>
        <ul class="marked-list">
            <li>border-top-style, border-right-style, border-left-style, border-bottom-style (стиль границ) - все возможные значения доступны в выпадающем списке.</li>
            <li>border-top-width, border-right-width, border-left-width, border-bottom-width (толщина границ) - задается в пикселях.</li>
            <li>border-top-сolor, border-right-color, border-left-color, border-bottom-color (цвет границ) - значением может быть указано в любом формате задания цвета (rgb, hex и т.д.). Вы можете выбрать цвет с помощью инструмента выбора цвета.</li>
            <li>border-top-right-radius, border-top-left-radius, border-bottom-right-radius, border-bottom-left-radius (радиус границ) - задается в пикселях.</li>
        </ul>
    </li>
    <li><p>Other styles.</p>
        <p class="img-polaroid"><img class="presta_scr2" src="img/tmmegalayout-styles-3.png" alt="" /></p>
        <ul class="marked-list">
            <li>box-shadow (тень блока) - пример:0px 0px 0px 0px rgba(0,0,0,0.75).</li>
        </ul>
    </li>
</ul>

<h4>Удалений стилей элемента.</h4>
<ul class="index-list">
    <li>
        <p>Для удаления стилей элемента зайдите в раздел стилизации элемента и нажмите 'Clear styles'(1)</p>
        <figure class="img-polaroid"><img class="presta_scr2" src="img/tmmegalayout-clear-styles-1.png" alt="" /></figure>
    </li>
</ul>

<h4>Предостережения.</h4>
<p>Если в блоке элемента "модуль" появится следующее сообщение, вам нужно включить указанный модуль.</p>
<figure class="img-polaroid"><img src="img/tmmegalayout-module-warning-1.png" alt="" class="presta_scr2"></figure>
<p>Если в блоке модуля появится следующее сообщение, вам нужно установить указанный модуль.</p>
<figure class="img-polaroid"><img src="img/tmmegalayout-module-warning-2.png" alt="" class="presta_scr2"></figure>
<p class="alert alert-warning">Если вы удалите или выключите модуль 'TM Mega Layout',то активные пресеты будут отключены и вы
    увидите позиции
    (блоки) в изначальном виде.</p>