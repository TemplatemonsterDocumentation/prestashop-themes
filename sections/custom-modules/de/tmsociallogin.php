<h3>TM Social Login</h3>
<p>Mit diesem Modul kann man sich registrieren und sich ins System mit Hilfe von den Kundendaten in den sozialen Netzwerken wie Facebook und Google einzuloggen.</p>
<h4>Wie man das Modul installiert</h4>
<p> Dieses Modul wird wie ein anderes PrestaShop Modul installiert und gelöscht.</p>
<h4>Wie man das Modul einstellt</h4>
<p> Nachdem Sie das Modul installiert haben, können Sie seine Einstellungen ändern.</p>
<p> Um die notwendigen Daten für die Moduleinstellung zu erhalten, sollen Sie eine entsprechende Anwendung auf einer notwendigen Ressource erstellen.</p>
<p> Es gibt keine Notwendigkeit zwei Varianten zum Einloggen ins System (Google, Facebook) gleichzeitig zu nutzen, Sie können nur eine nutzen.</p>
<h4>Facebook Feld</h4>
<ul class="marked-list">
    <li> ID Ihrer Anwendung </li>
    <li> Geheimschlüssel Ihrer Anwendung</li></ul>
<h4> Google Feld </h4>
<ul class="marked-list">
   <li> ID Ihrer Anwendung </li>
    <li> Geheimschlüssel Ihrer Anwendung</li> 
   <li> Der Umleitungspfad nach dem Einloggen ins System<strong> (die Adresse Ihres Online-Shops +index.php?fc=module&module=tmsociallogin&controller=googlelogin)</strong>.</li>
           
</ul>
<p class="alert alert-info">Erhalten Sie ausführliche Informationen, indem Sie diesen Links folgen: <a
        href="https://support.google.com/cloud/answer/6158849?hl=en&ref_topic=6262490" target="_blank">Google
        App</a> und <a href="https://developers.facebook.com/docs/apps/register" target="_blank">Facebook
        App</a>.</p>
<p class="alert alert-warning">
     Der Umleitungspfad muss gleich mit demjenigen sein, den Sie bei der Erstellung der Google Anwendung erstellt haben.
</p>
<figure class="img-polaroid">
    <img src="img/tmsociallogin-1.png" alt=""/>
</figure>