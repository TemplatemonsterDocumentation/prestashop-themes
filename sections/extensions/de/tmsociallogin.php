<h3>TM Social Login</h3>

<p>Das jeweilige Modul ermöglicht mit Hilfe von Daten, die von Kundenseiten in sozialen
    Netzwerken wie Facebook und Google, erhalten wurden, sich zu registrieren oder
    anzumelden.</p>
<h5>Installierung und Entfernung des Moduls</h5>

<p>Dieses Modul wird wie ein anderes PrestaShop Modul installiert und entfernt.</p>
<h5>Moduleinstellungen</h5>

<p>Nachdem Sie das Modul installiert haben, können Sie es auf der
    Modulkonfigurationsseite einstellen.</p>

<p>Um die notwendigen Daten zur Moduleinstellung zu erhalten, müssen Sie entsprechende
    Anwendung (Application) auf der bestimmten Webressource erstellen.</p>

<p>Sie müssen nicht unbedingt die beiden Autorisierungsvarianten (Google und Facebook)
    gleichzeitig nutzen, sondern nur eine.</p>
<h4>Facebook Felder</h4>
<ol class="index-list">
    <li>ID Ihrer Anwendung.</li>
    <li>Der private Schlüssel Ihrer Anwendung.</li>
</ol>
<h4>Google Felder</h4>
<ol class="index-list">
    <li>ID Ihrer Anwendung.</li>
    <li>Der private Schlüssel Ihrer Anwendung.</li>
    <li>Leitungspfad nach dem Login <strong>(your shop
            URL+index.php?fc=module&module=tmsociallogin&controller=googlelogin)</strong>.
    </li>
</ol>

<p class="alert alert-info">Um mehr ausführliche Information zu erhalten, folgen Sie den folgenden Links <a
        href="https://developers.google.com/console/help/" target="_blank">Google
        App</a> und <a href="https://developers.facebook.com/apps/" target="_blank">Facebook
        App</a>.</p>
<p class="alert alert-warning">
    Der Leitungspfad muss unbedingt mit demjenigen, den Sie beim Erstellen Google App angegeben haben, gleich sein.</p>


<figure class="img-polaroid">
    <img src="img/tmsociallogin-1.png" alt="">
</figure>