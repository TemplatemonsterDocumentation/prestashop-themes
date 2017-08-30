<h3>Moduł Wideo Tła</h3>
<p>Ten moduł pozwala dodawać tło wideo do jakiegokolwiek wybranego bloku na Twojej stronie HTML (musi być ID albo
    niepowtarzalny znacznik).</p>
<h6>Aby dodać wideo tła, powinieneś dokonać następujących kroków opisanych poniżej:</h6>
<ul class="index-list">
    <li>Prześlij pliki wideo oraz obrazki podglądu do folderu modules/tmvideobackground/video folder (albo
        jakiegokolwiek innego folderu na serwerze) za pośrednictwem FTP. Wideo należy przygotować i przesłać w trzech
        formatach: .mp4, .ogv, .webm, przy tym wszystkie pliki w każdym powinni mieć taką samą nazwę (na przykład,
        ocean.mp4, ocean.ogv, ocean.webm). Obrazki podglądu również muszą być w trzech formatach: .jpg, .gif, .png oraz
        mieć takie same nazwy (ocean.jpg, ocean.gif, ocean.png).
    </li>
    <li><p>Na swoim panelu administracyjnym otwórz <strong>Moduł tła wideo</strong> (Moduły -> Funkcje po Stronie
            Użytkownika -> Moduł Tła Wideo) oraz dokonaj wymagane nastawienia.</p>
        <h6><strong>Ustawienia:</strong></h6>
        <ul class="marked-list">
            <li>
                <dl class="inline-term">
                    <dt>Selektor Wideo</dt>
                    <dd>element strony HTML w którym dodaje się wideo tła (id albo niepowtarzalny znacznik (ciało
                        strony, nagłówek, stopka etc.).
                    </dd>
                </dl>
            </li>
            <li>
                <dl class="inline-term">
                    <dt>Ścieżka do wideo</dt>
                    <dd>ścieżka prowadząca do Twoich plików wideo (ścieżka musi mieć '/' w końcu), pliki mogą być
                        umieszczone w dowolnym folderze na serwerze, zalecamy jednak przesłanie ich do folderu <strong>
                            modules/tmvideobackground/video/ </strong>.
                    </dd>
                </dl>
            </li>
            <li>
                <dl class="inline-term">
                    <dt>Nazwa plików wideo</dt>
                    <dd>nazwa twoich plików wideo. Należy dodawać tylko nazwę (nie ma potrzeby wpisywać format). Na
                        przykład, "ocean".
                    </dd>
                </dl>
            </li>
            <li>Wciśnij przycisk <strong>'Zachowaj'</strong>.</li>
        </ul>
    </li>
</ul>
<figure class="img-polaroid">
    <img src="img/video.png" alt=""/>
</figure>
<p class="alert alert-info">Aby wideo było wyświetlane, nie należy dodawać żadnego innego tła dla tego elementu.</p>