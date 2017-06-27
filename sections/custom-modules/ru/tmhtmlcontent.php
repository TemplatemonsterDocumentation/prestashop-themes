<h3>TM HTML Content</h3>
<?php if ($project == 'eveprest' ) { ?>
    <div>
        <p style="margin-bottom: 0;">Доступен в:</p>
        <p style="margin-top: 0;" class="small text-secondary">Мода, Электроника, Запчасти, Мебель, Один товар</p>
    </div>
<?php } ?>
<p>Этот модуль позволяет отображать любое содержимое (изображение, HTML, ссылки и т. д.) в следующих позициях: displayNav, home, top, topColumn, left и right (displayLeftColumn / displayRightColumn), footer. Он используется для расширения возможностей дизайна и добавления рекламных/информационных блоков в ваш магазин. Это многоязычный модуль, который также может работать в мультимагазине.</p>
<h5> Чтобы добавить содержимое, выполните следующие действия:</h5>
<h6>Перейдите на вкладку <strong>Модули -> Свойства фронтенда -> TM HTML Content</strong> (Modules -> Front Office Features -> TM HTML Content) (если этот модуль не установлен, установите его).
</h6>
<ul class="index-list">
    <li>Нажмите на кнопку <strong>'Добавить новый'</strong> (Add new).</li>
    <li> Список доступных языков. Вы можете просматривать доступные элементы для всех языков, переключая языковые вкладки.</li>
    <li> Список элементов, добавленных для определенной позиции и языка.</li>
</ul>
<figure class="img-polaroid">
    <img src="img/htmlcontent.png" alt=""/>
</figure>
<h6>Добавление элемента. Нажмите на кнопку <strong>Добавить элемент</strong> (Add item) и заполните все нужные значения полей (нет обязательных полей).</h6>
<p class="alert alert-info"> Все элементы одного языка, добавленные в одну и ту же позицию, будут отображаться в виде списка в админ панели и на фронтенде.</p>
<figure class="img-polaroid">
    <img src="img/htmlcontent-1.png" alt=""/>
</figure><ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Язык</dt>
            <dd>выберите нужный язык из выпадающего списка.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Название</dt>
            <dd>название элемента.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Использовать название на фронтенде</dt>
            <dd>отобразить название элемента на фронтенде (название отобразится перед элементом).
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Хук</dt>
            <dd>позиция, в которую добавляется элемент.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Изображение</dt>
            <dd>загрузить изображение с компьютера.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Ширина изображения</dt>
            <dd> ширина изображения, отображаемого на фронтенде.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Высота изображения</dt>
            <dd>высота изображения, отображаемого на фронтенде.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>URL</dt>
            <dd>добавить ссылку (весь блок будет ссылкой).</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Target blank</dt>
            <dd>открывать ссылку в новой вкладке.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>HTML</dt>
            <dd>код HTML (кроме ссылки, если Вы ее добавили в поле ссылки) или текст.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Сохратнить</dt>
            <dd>нажмите для сохранения элемента.</dd>
        </dl>
    </li>
</ul>
<h6>Изменение и удаление элемента</h6>
<p> Когда Вы добавите элемент, он появится в соответствующем списке.</p>
<ul class="index-list">
    <li>Язык, для которого были добавлены элементы.</li>
    <li>Позиция, куда были добавлены элементы.</li>
    <li>Изменить кнопку с выпадающим списком.</li>
    <li>Удалить кнопку.</li>
</ul>
<figure class="img-polaroid">
    <img src="img/htmlcontent-2.png" alt=""/>
</figure>
<h5>Редактирование</h5>
<h6>Нажмите на кнопку <strong>Изменить</strong> (Edit), для того чтобы изменить элемент.</h6>
<p> В появившемся измените значения всех обязательных полей.</p>
<figure class="img-polaroid">
    <img src="img/htmlcontent-3.png" alt=""/>
</figure>
<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Включить</dt>
            <dd>отображает элемент на сайте.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Название изображения</dt>
            <dd>название элемента.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Использовать название на фронтенде</dt>
            <dd>отобразить название на фронтенде.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Хук, в который должно быть добавлено изображение</dt>
            <dd>позиция элемента.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Загрузить изображение</dt>
            <dd>изображение элемента.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Ширина изображения</dt>
            <dd>ширина изображения на сайте.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Высота изображения</dt>
            <dd>высота изображения на сайте.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Целевая ссылка</dt>
            <dd>добавить ссылку в новой элемент.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Открыть ссылку в новой вкладке/на новой странице</dt>
            <dd>Открыть ссылку в новой вкладке.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Дополнительный код HTML</dt>
            <dd>редактировать код HTML.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Сохранить</dt>
            <dd>сохранить изменения.</dd>
        </dl>
    </li>
</ul>

<h6> Изменение порядка элементов в списке</h6>
<figure class="img-polaroid">
    <img src="img/htmlcontent-4-1.png" alt=""/>
</figure>
<h6> Чтобы изменить порядок элементов, просто перетащите элемент в нужное положение.</h6>
<div class="img-polaroid">
    <figure>
        <img src="img/htmlcontent-4-2.png" alt="">
    </figure>
</div>
<br>
<div class="img-polaroid">
    <figure>
        <img src="img/htmlcontent-4-3.png" alt="">
    </figure>
</div>
