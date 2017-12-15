<h3>Manuelle Installation der Vorlage mit dem Demo-Inhalt </h3>
<p class="alert alert-info custom">Wenn Sie einiges an Zeit sparen möchten, <span class="label label-warning opener" onclick="showChat()">bestellen</span> Sie den Installationsservice für Ihr Theme in unserem Online-Chat.</p>
<p>Damit Ihr PrestaShop Online-Shop wie die Demoversion Ihrer Vorlage aussieht, sollen Sie den <strong>Demo-Inhalt</strong> installieren. Er wird alle Demo-Produkte, Kategorien, Module, Einstellungen enthalten. </p>
<p class="alert alert-danger"> Nutzen Sie bitte nicht den Demo-Inhalt für Ihren funktionierenden Online-Shop! Dadurch werden alle Ihren Produkte in Shop und Shop-Einstellungen ersetzt.</p>
<p class="alert alert-warning"> Stellen Sie sicher, dass die Version Ihrer PrestaShop Engine der Version entspricht, die im Tab «Technische Details» wie «PrestaShop Engine: 1.X.X.X» festgelegt ist. <br/>
Außerdem stellen Sie sicher, dass das Datenbank Tabellen Präfix <strong>ps_</strong> ist. Installieren Sie den Demo-Inhalt in dem Fall, wenn Ihre PrestaShop Engine der angegebenen Version entspricht. </p> 
<h4>Wie man die Vorlagendateien hochlädt</h4>
<p>Um die Vorlagendateien auf dem Server hochzuladen:</p>
<ol class="index-list">
    <li>Öffnen Sie das Vorlagenpaket.</li>
    <li>Finden Sie den Ordner <strong>/theme/manual_install/</strong>.</li>
    <li>Laden Sie die Ordner <strong>/img/</strong>, <strong>/modules/</strong> und <strong>/themes/</strong> in den PrestaShop Stammordner hoch.</li>
</ol>
<p class="alert alert-info">Machen Sie sich mit dem ausführlichen Video-Tutorial bekant, das Ihnen zeigt, wie man <a target="_blank" href="/help/how-upload-files-server-2.html">die Dateien auf dem Server mit Hilfe von dem FTP Manager hochlädt</a> und <a href="/help/how-to-upload-files-to-a-server-using-cpanel-webhost-manager-whm.html" target="_blank">wie man die Dateien auf dem Server über das Hosting Control Panel (WebHost Manager, WHM) hochlädt</a>.</p>
<h4>Installation des Demo-Inhalts</h4>
<p> Der Demo-Inhalt ist als .SQL Datei vorgestellt. Er befindet sich in dem Ordner <strong>theme/manual_install/</strong> des Vorlagenpakets namens <strong>dump.sql</strong>.</p>
<p>Die dump.sql Dateien können Sie installieren, indem Sie das Werkzeug phpMyAdmin oder ein anderes Werkzeug zur Verwaltung der Datenbanken in Ihrem Hosting Control Panel nutzen. Dieses ausführliche Tutorial zeigt, wie man <a target="_blank" href="/help/phpmyadmin-how-to-import-sample-data-dump-file-phpmyadmin.html">SQL Dateien</a> installiert.</p>
<p class="alert alert-warning"> Bevor Sie fortfahren, sollen Sie die Sicherungskopie der Datenbank erstellen. Sie können Sie mit dem ausführlichen Video-Tutorial bekannt machen, um zu erfahren, <a target="_blank" href="/help/phpmyadmin-how-to-backup-a-database.html">wie man die Sicherungskopie der Datenbank erstellt</a>.</p>
<p class="alert alert-danger"> Stellen Sie sicher, dass die Version Ihrer PrestaShop Engine den Anforderungen der Vorlage entspricht. Andernfalls wird die Datenbank beschädigt.</p>
<p>Nachdem Sie die dump.sql Datei installiert haben, aktivieren Sie die Vorlage.</p>
<p>In dem PrestaShop Control Panel finden Sie den Tab <strong>Präferenzen > Vorlagen</strong> (Preferences > Themes), wählen Sie Ihre Vorlage in dem Bereich <strong>Vorlagen</strong> (Themes) und drücken Sie auf den Button <strong>Speichern</strong> (Save).</p>
