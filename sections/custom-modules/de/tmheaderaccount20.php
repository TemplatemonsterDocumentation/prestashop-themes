<h3>TM Header Account 2.0</h3>
<?php if ($project == 'eveprest' ) { ?>
    <div>
        <p style="margin-bottom: 0;">Verfügbar in:</p>
        <p style="margin-top: 0;" class="small text-secondary">Mode, Elektronik, Ersatzteile, Möbel, Ein Produkt</p>
    </div>
<?php } ?>
<p class="alert alert-warning">
Wenn auf Ihrer PrestaShop Engine die Version 1.n dieses Moduls installiert ist, aktualisieren Sie es nicht auf die neueste Version. Vor allem sollen Sie die alte Version löschen, damit das Modul fehlerlos funktionieren kann.</p>
<p>Dieses Modul stellt das Login-Formular und Anmeldeformular auf der Website dar. Es kann an den folgenden Stellen befinden: Header, linke und rechte Spalten. Dank diesem Modul kann man sich  mit Hilfe von den sozialen Netzwerken wie Facebook, Google+ und VK anmelden und einloggen. Man kann sich anmelden und ins System einloggen, ohne die Seite neu zu laden.</p>
<h4>Hauptpanel TM Header Account </h4>
<p>Hauptpanel. Hier können Sie das Modul einstellen.</p>
<figure class="img-polaroid">
    <img src="img/tmheaderaccount200-1.png" alt=""/>
</figure>
<h4>Einstellungen</h4>
<p>Dieses Modul hat die folgenden Einstellungen:</p>
<ul class="index-list">
    <li><p>Darstellungsart - Sie können eine Darstellungsart des Anmeldeformulars wählen. Es hat die folgenden Werte haben:</p>
        <ul class="marked-list">
            <li><strong>DropDown Liste</strong> (Drop down) - das Anmeldeformular wird als DroDown Liste unter dem Button (der es öffnet) dargestellt.
                <figure class="img-polaroid">
                    <img src="img/tmheaderaccount200-2.png" alt=""/>
                </figure>
            </li>
            <li><strong>DropDown Fenster</strong> (Popup) – das Anmeldeformular wird in dem DropDown Fenster dargestellt.
                <figure class="img-polaroid">
                    <img src="img/tmheaderaccount200-3.png" alt=""/>
                </figure>
            </li>
            <li><strong>Links</strong> (Left side) – das Anmeldeformular wird links als Seitenleiste dargestellt.
                <figure class="img-polaroid">
                    <img src="img/tmheaderaccount200-4.png" alt=""/>
                </figure>
            </li>
            <li><strong>Rechts</strong> (Right side) - das Anmeldeformular wird rechts als Seitenleiste dargestellt.
                <figure class="img-polaroid">
                    <img src="img/tmheaderaccount200-5.png" alt=""/>
                </figure>
            </li>
        </ul>
    </li>
    <li><p>Darstellungsart nach dem Einloggen - diese Einstellung ermöglicht es Ihnen, das Aussehen des Formulars nach dem Einloggen/Anmelden zu ändern. Sie können die folgenden Werte nutzen:</p>
        <ul class="marked-list">
            <li><strong>Zwei Spalten</strong> (Two columns) – die Liste wird in zwei Spalten geteilt.
                <figure class="img-polaroid">
                    <img src="img/tmheaderaccount200-6.png" alt=""/>
                </figure>
            </li>
            <li><strong>Eine Spalte</strong> (One Column) – die Liste der Links wird wie eine Spalte dargestellt.
                <figure class="img-polaroid">
                    <img src="img/tmheaderaccount200-7.png" alt=""/>
                </figure>
            </li>
        </ul>
    </li>
    <li> Avatar standardmäßig - dieses Feld wird angezeigt, nur wenn die Option "Avatar darstellen" aktiviert ist. Hier können Sie ein Avatar des Nutzers standardmäßig wählen.</li>
    <li>Avatar darstellen - diese Einstellung ermöglicht es Ihnen, ein Avatar des Nutzers zu aktivieren/zu deaktivieren. Wenn der Nutzer sich ins Konto auf der Website mit Hilfe von einem sozialen Netzwerk einloggt, wird Avatar aus diesem sozialen Netzwerk genommen. Andernfalls wird ein Avatar angezeigt, das von dem Webseite Administrator hochgeladen wurde.</li>
    <li> Weiterleitung verwenden - wenn diese Option aktiviert ist, werden Benutzer-Registrierung und Passwort-Wiederherstellung auf der Standardseite der PrestaShop Registrierung/Passwort-Wiederherstellung durchgeführt.</li>
    <li><p> Sich über Facebook einloggen - diese Option aktiviert Registrierung und Einloggen des Nutzers mit Hilfe von dem sozialen Netzwerk Facebook. Nachdem Sie diese Option aktiviert haben, sehen Sie die folgenden Einstellungen:</p>
        <ul class="marked-list">
            <li><strong>Anwendungs-ID</strong> (App ID) - die Anwendungs-ID aus Ihrem Entwicklerprofil Facebook.</li>
            <li><strong>Geheimschlüssel</strong> (App Secret) – der Geheimschlüssel des Entwicklerprofils Facebook.</li>
        </ul>
    </li>
    <li><p> Sich über Google einloggen - diese Option aktiviert Registrierung und Einloggen des Nutzers mit Hilfe von dem sozialen Netzwerk Google+. Nachdem Sie diese Option aktiviert haben, sehen Sie die folgenden Einstellungen:</p>
        <ul class="marked-list">
            <li><strong>Anwendungs-ID</strong> (App ID) - die Anwendungs-ID aus Ihrem Entwicklerprofil Google.</li>
            <li><strong>Geheimschlüssel</strong> (App Secret) – der Geheimschlüssel des Entwicklerprofils Google.</li>
            <li><strong>URI-Umleitung</strong> (Redirect URIs) – die Adresse Ihres Online-Shops + index.php?fc=module&module=tmheaderaccount&controller=googlelogin</li>
        </ul>
    </li>
    <li><p> Sich über VK einloggen - diese Option aktiviert Registrierung und Einloggen des Nutzers mit Hilfe von dem sozialen Netzwerk VK. Nachdem Sie diese Option aktiviert haben, sehen Sie die folgenden Einstellungen:</p>
        <ul class="marked-list">
            <li><strong>Anwendungs-ID</strong> (App ID) - die Anwendungs-ID aus Ihrem Entwicklerprofil VK.</li>
            <li><strong>Geheimschlüssel</strong> (App Secret) – der Geheimschlüssel des Entwicklerprofils VK.</li>
            <li><strong>URI-Umleitung</strong> (Redirect URIs) – die Adresse Ihres Online-Shops+ index.php?fc=module&module=tmheaderaccount&controller=vk</li>
        </ul>
    </li>
</ul>
<h5>Anwendungsregistrierung in den sozialen Netzwerken:</h5>
<ul class="marked-list">
    <li><strong>Facebook</strong> - um die Anwendungs-ID und den Geheimschlüssel zu erhalten, registrieren Sie Ihre Anwendung auf <a target="_blank" href="https://developers.facebook.com/apps">https://developers.facebook.com/apps</a>.</li>
    <li><strong>Google+</strong> - um die Anwendungs-ID und den Geheimschlüssel zu erhalten, registrieren Sie Ihre Anwendung auf <a target="_blank" href="https://developers.google.com/accounts/docs/OAuth2/">https://developers.google.com/accounts/docs/OAuth2/</a>.</li>
    <li><strong>VK</strong> - um die Anwendungs-ID und den Geheimschlüssel zu erhalten, registrieren Sie Ihre Anwendung auf <a target="_blank" href="https://vk.com/dev">https://vk.com/dev</a>.</li>
</ul>

