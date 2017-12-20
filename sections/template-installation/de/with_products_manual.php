<h3>Manuelle Installation der Vorlage mit Demodaten</h3>
<p class="alert alert-info custom">Wenn Sie einiges an Zeit sparen möchten, <span class="label label-warning opener"
                                                                                  onclick="showChat()">bestellen</span>
    Sie den Installationsservice für Ihr Theme in unserem Online-Chat.</p>
<p>Nachdem Sie <strong>Demodaten</strong> installiert haben, wird Ihr Online-Shop von
    PrestaShop wie auf der Demoversion aussehen. Er wird alle Produkte, Kategorien,
    Einstellungen für Module und den Online-Shop enthalten.</p>

<p class="alert alert-danger">Nutzen Sie, bitte, keine Demodaten für aktuelle Webseite! Dies wird alle Produkte und
    Einstellungen des Online-Shops überschrieben.</p>

<p class="alert alert-warning">Bitte überzeugen Sie sich, dass Sie die Version der PrestaShop Engine, die im Bereich
    "Notwendige Software" wie "PrestaShop 1.X.X.X" festgelegt wurde, verwenden. Überzeugen Sie sich auch davon, dass
    das Datenbanktabellen-Präfix <strong>ps_</strong> entspricht. Wenn die Version Ihrer PrestaShop Engine der
    festgelegten entspricht, installieren Sie Demodaten.</p>

<h4>Hochladen von Vorlagendateien</h4>

<p>Um die Dateien auf den Server hochzuladen:</p>
<ol class="index-list">
    <li>Öffnen Sie den Ordner Ihrer Vorlage.</li>
    <li>Gehen Sie in den Ordner <strong>/theme/manual_install/</strong>.</li>
    <li>Laden Sie die Ordner <strong>/img/</strong>, <strong>/modules/</strong> und
        <strong>/themes/</strong> ins Stammverzeichnis PrestaShop hoch.
    </li>
</ol>
<p class="alert alert-info">Sie können auch die ausführlichen Video-Tutorials anschauen <a target="_blank"
                                                                                           href="/help/how-upload-files-server-2.html">wie
        lädt man die Dateien auf den Server per FTP-Kunde hoch</a> und <a
            href="/help/how-to-upload-files-to-a-server-using-cpanel-webhost-manager-whm.html"
            target="_blank">wie lädt man die Dateien auf den Server per cPanel (WebHost
        Manager, WHM)</a> hoch.</p>

<h4>Installation von Demodaten</h4>

<p>Die Demodaten befinden sich in der Datei .SQL. Sie befindet sich im Ordner <strong>theme/manual_install/</strong>
    Ihrer Vorlage und heißt <strong>dump.sql</strong>.</p>

<p>Die Datei dump.sql kann man mit Hilfe von phpMyAdmin oder anderen
    Datenbank-Verwaltungswerkzeugen im Control Panel des Hostings installieren. Diese
    ausführliche Anleitung kann für Sie hilfreich sein <a target="_blank"
                                                          href="/help/phpmyadmin-how-to-import-sample-data-dump-file-phpmyadmin.html">wie
        importiert man SQL Dateien</a>.</p>

<p class="alert alert-warning">Bevor Sie anfangen die Dateien zu importieren, erstellen Sie die Sicherungskopie der
    Datenbank. Sie können sich das ausführliche Video-Tutorial darüber anschauen <a
            target="_blank" href="/help/phpmyadmin-how-to-backup-a-database.html">wie
        erstellt man die Sicherungskopie der Datenbank</a>.</p>


<p class="alert alert-danger">Überzeugen Sie sich, dass die Version der PrestaShop Engine den Anforderungen Ihrer
    Vorlage entspricht. Andernfalls wird die Datenbank beschädigt.</p>

<p>Nachdem Sie die Datei dump.sql importiert haben, sollen Sie die Vorlage
    aktivieren.</p>

<p>Im Control Panel PrestaShop gehen Sie in <strong>Preferences > Themes (Einstellungen
        > Themen)</strong>, wählen Sie die Vorlage aus der Liste <strong>Themes
        (Themen)</strong> und drücken Sie <strong>Save (Speichern)</strong>.</p>

<h4>c Hinzufügen von Sprachen zum Online-Shop. </h4>

<p>Nachdem Sie mehrsprachige Vorlage installiert haben, können Sie zum Ihren Online-Shop
    jegliche Sprachen, die verfügbar sind, (Englisch, Französisch, Spanisch, Deutsch,
    Russisch) hinzufügen. Dies können Sie wie folgt machen: </p>

<p>Gehen Sie in <strong>'Localization > Translations (Lokalisierung>
        Übersetzungen)'</strong> im Control Panel, finden Sie <strong>'ADD/UPDATE A LANGUAGE
        (SPRACHE HINZUFÜGEN/AKTUALISIEREN)'</strong>, markieren Sie die Sprachen aus dem
    DropDownMenü
    <small>(1)</small>
    und drücken Sie den Button <strong>'Add or update a language (Sprache hinzufügen
        oder aktualisierenк)'</strong>
    <small>(2)</small>
    .
</p>
<figure class="img-polaroid">
    <img alt="" src="img/01-language-update.png"/>
</figure>

<p>Wenn Sie irgendwelche Sprachen nicht benötigen, können Sie
    <small>(2)</small>
    sie
    <small>(1)</small>
    im Menü <strong>'Localization > Languages (Lokalisierung> Übersetzungen)'</strong>
    entfernen oder deaktivieren.
</p>
<figure class="img-polaroid">
    <img alt="" src="img/02-language-update.png"/>
</figure>