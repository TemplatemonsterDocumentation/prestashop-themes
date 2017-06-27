<h3>TM Social Login 1.2.0</h3>
<p>Mit diesem Modul können Sie sich registrieren und sich ins System mit Hilfe von Kundendaten in den sozialen Netzwerken wie Facebook, Google und VK einzuloggen.</p>
<h4>Wie man das Modul installiert</h4>
<p> Dieses Modul wird wie ein anderes PrestoShop Modul installiert und gelöscht.</p>
<h4>Wie man das Modul einstellt</h4>
<p> Nachdem Sie das Modul installiert haben, können Sie seine Einstellungen ändern.</p>
<p> Um notwendige Daten zur Moduleinstellung zu erhalten, müssen Sie eine entsprechende Anwendung auf einer notwendigen Ressource erstellen.</p>
<p> Sie müssen nicht unbedingt die beiden Varianten zum Einloggen ins System (Google, Facebook) nutzen, Sie können nur eine nutzen.</p>
<h4>Facebook Felder</h4>
<ul class="marked-list">
    <li> ID Ihrer Anwendung </li>
    <li> Der Geheimschlüssel Ihrer Anwendung</li></ul>
<h4>Google Felder</h4>
<ul class="marked-list">
   <li> ID Ihrer Anwendung </li>
    <li> Der Geheimschlüssel Ihrer Anwendung</li> 
   <li> Der Umleitungspfad nach dem Einloggen ins System <strong> (die Adresse Ihres Online-Shops   +index.php?fc=module&module=tmsociallogin&controller=googlelogin)</strong>.</li>
</ul>
<h4>VK Felder</h4>
<ul class="marked-list">
    <li> ID Ihrer Anwendung </li>
    <li> Der Geheimschlüssel Ihrer Anwendung</li>
    <li>Der Umleitungspfad nach dem Einloggen ins System<strong> (die Adresse Ihres Online-Shops+index.php?fc=module&module=tmsociallogin&controller=vklogin)</strong></li>
<p class="alert alert-info">Erhalten Sie ausführliche Informationen, indem Sie den Links folgen: <a href="https://developers.facebook.com/docs/apps/register" target="_blank">Facebook App</a>, <a href="https://support.google.com/cloud/answer/6158849?hl=en&ref_topic=6262490" target="_blank">Google App</a> und <a href="https://vk.com/dev/web_how_to_start">VK App</a>.</p>
<p class="alert alert-warning">
    Der Umleitungspfad muss gleich mit dem Pfad sein, den Sie bei der Erstellung der Anwendung Google oder VK festgelegt haben.
</p>
<figure class="img-polaroid">
    <img src="img/tmsociallogin120-1.png" alt=""/>
</figure>