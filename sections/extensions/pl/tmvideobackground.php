<h3>Moduł Video Background</h3>

<p>Moduł ten pozwala na dodanie tła wideo do dowolnego bloku w stronie HTML (powinien to być unikalny identyfikator
    lub tag).</p>

<h6>Aby dodać tło wideo, wykonaj następujące kroki:</h6>

<ol class="index-list">
    <li>Prześlij pliki wideo i podgląd obrazów do folderu modules / tmvideobackground / wideo (lub do dowolnego
        innego folderu na serwerze) za pośrednictwem FTP. Wideo powinno być przesłane w 3 formatach: .mp4, .ogv,
        .webm, wszystkie pliki powinny mieć te same nazwy (ocean.mp4, ocean.ogv, ocean.webm). Podgląd zdjęć również
        powinno być w 3 formatach: .jpg, .gif, .png i mieć takie same nazwy (ocean.jpg, ocean.gif, ocean.png). </li>

    <li> W Twoim panelu administratora otwórz <strong>Video background module
            (Modules->Front Office Features->Video background module)</strong> i dokonaj niezbędnych ustawień.

        <h6><strong>Ustawienia:</strong></h6>

        <ol class="index-list">
            <li>
                <dl class="inline-term">
                    <dt>Video selector</dt>
                    <dd>element strony HTML, gdzie tło wideo zostanie dodane (id lub unikalny tag ( nagłówek,
                        stopkę, itp.)).
                    </dd>
                </dl>
            </li>

            <li>
                <dl class="inline-term">
                    <dt>Video path</dt>
                    <dd>ścieżka do plików wideo (ścieżka powinna mieć / na końcu), pliki mogą być umieszczone w
                        dowolnym folderze na serwerze, ale zaleca się, aby wysłać je do folderu
                        <strong>modules/tmvideobackground/video/</strong>.
                    </dd>
                </dl>
            </li>

            <li>
                <dl class="inline-term">
                    <dt>Video files name</dt>
                    <dd>nazwy plików wideo. Należy dodać tylko nazwę (nie ma potrzeby pisać formatu. Na przykład,
                        "ocean").
                    </dd>
                </dl>
            </li>

            <li>Kliknij przycisk <strong>Save</strong>.</li>
        </ol>
    </li>
</ol>
<figure class="img-polaroid">
    <img src="img/video.png" alt="">
</figure>
<p class="alert alert-info">Aby wyświetlić wideo, ten element nie powinien posiadać żadnego innego dodanego tła.</p>
