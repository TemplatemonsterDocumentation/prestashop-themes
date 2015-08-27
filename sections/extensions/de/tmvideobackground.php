<h3>Modul Video Background (Videohintergrund)</h3>

<p>Das jeweilige Modul ermöglicht das Video zum Hintergrund jegliches Blockes der HTML Seite (das Element muss den Index
    oder einzigartigen Tag haben) hinzuzufügen.</p>

<h6>Um den Videohintergrund hinzuzufügen, machen Sie das Folgende:</h6>

<ol class="index-list">
    <li>Laden Sie die Video-Dateien und Vorschaubilder in den Ordner modules/tmvideobackground/video (oder einen anderen
        Ordner auf dem Server) per FTP hoch. Das Video muss in drei Formaten: .mp4, .ogv, .webm hochgeladen werden und
        alle Dateien müssen die gleichen Namen (ocean.mp4, ocean.ogv, ocean.webm) haben. Die Vorschaubilder müssen auch
        in drei Formaten: .jpg, .gif, .png sein die gleichen Namen (ocean.jpg, ocean.gif, ocean.png) haben. </li>

    <li> Im Control Panel öffnen Sie
        <strong>Video background module (Modul für den Videohintergrund) (Modules->Front Office Features->Video
            background module (Module->Funktionen front-office->Modul für den Videohintergrund))</strong>
        und wählen Sie die notwendgen Einstellungen aus.

        <h6>
            <strong>Einstellungen:</strong>
        </h6>

        <ol class="index-list">
            <li>
                <dl class="inline-term">
                    <dt>Video selector (Video-Selektor)</dt>
                    <dd>Element der HTML Seite, zu der der Videohintergrund (Index oder einzigartiger Tag (body, header,
                        footer, usw.) hinzugefügt wird.
                    </dd>
                </dl>
            </li>
            <li>
                <dl class="inline-term">
                    <dt>Video path (Pfad zum Video)</dt>
                    <dd>Pfad zu Video-Dateien (der Pfad muss am Ende / haben), die Dateien können sich in jeglichem
                        Ordner auf dem Server befinden, aber laden Sie sie am besten ins Verzeichnis
                        <strong> modules/tmvideobackground/video/</strong>
                        hoch.
                    </dd>
                </dl>
            </li>
            <li>
                <dl class="inline-term">
                    <dt>Video files name (Name von Video-Dateien)</dt>
                    <dd>Namen von Video-Dateien. Man muss nur den Namen (es muss kein Format sein. Zum Beispiel,"ocean")
                        hinzufügen.
                    </dd>
                </dl>
            </li>
            <li>Drücken Sie auf den Button
                <strong>Save (Speichern)</strong>
                .
            </li>
        </ol>
    </li>
</ol>
<figure class="img-polaroid">
    <img src="img/video.png" alt="">
</figure>
<p class="alert alert-info">Um das Video darzustellen, muss das Element keinen anderen Hintergrund haben.</p>
