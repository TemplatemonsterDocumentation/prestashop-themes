<h3>Модуль Video Background (Видео-фон)</h3>

<p>Данный модуль позволяет добавлять видео на фон любого блока HTML страницы (у элемента должен быть индекс или
    уникальный тег).</p>

<h6>Чтобы добавить видео-фон, сделайте следующее:</h6>

<ol class="index-list">
    <li>Загрузите видео-файлы и картинки предпросмотра в папку modules/tmvideobackground/video (или любую другую папку
        на сервере) через FTP. Видео нужно загружать в 3 форматах: .mp4, .ogv, .webm, все файлы должны иметь одинаковые
        названия (ocean.mp4, ocean.ogv, ocean.webm). Картинки предпросмотра также должны быть в 3 форматах: .jpg, .gif,
        .png и иметь одинаковые названия (ocean.jpg, ocean.gif, ocean.png). </li>

    <li> В панели управления откройте <strong>Video background module (Модуль видео-фон)
            (Modules->Front Office Features->Video background module (Модули->Функции
            front-office->Модуль видео-фон))</strong> и выберите требуемые настройки.


        <h6><strong>Настройки:</strong></h6>

        <ol class="index-list">
            <li>
                <dl class="inline-term">
                    <dt>Video selector (Селектор видео)</dt>
                    <dd>элемент HTML страницы, в который будет добавлен видео-фон (индекс или уникальный тег (body,
                        header, footer, и т.п.).
                    </dd>
                </dl>
            </li>

            <li>
                <dl class="inline-term">
                    <dt>Video path (Путь к видео)</dt>
                    <dd>путь к видео-файлам (путь должен заканчиваться на /), файлы могут находиться в любой папке на
                        сервере, но мы рекомендуем загружать их в директорию
                        <strong> modules/tmvideobackground/video/</strong>.
                    </dd>

                </dl>
            </li>

            <li>
                <dl class="inline-term">
                    <dt>Video files name (Название видео-файлов)</dt>
                    <dd>названия видео-файлов. Нужно добавлять только название (не нужно писать формат.
                        Например,"ocean").
                    </dd>
                </dl>
            </li>

            <li>Нажмите кнопку <strong>Save (Сохранить)</strong>.</li>
        </ol>
    </li>
</ol>
<figure class="img-polaroid">
    <img src="img/video.png" alt="">
</figure>
<p class="alert alert-info">Чтобы видео отображалось, у элемента не должно быть другого фона.</p>