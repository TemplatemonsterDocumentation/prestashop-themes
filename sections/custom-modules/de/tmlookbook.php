<h3>TM Look Book</h3>
<?php if ($project == 'eveprest') { ?>
    <div>
        <p style="margin-bottom: 0;">Verfügbar für:</p>
        <p style="margin-top: 0;" class="small text-secondary">Mode, Möbel</p>
    </div>
<?php } ?>
<h5>Anforderungen:</h5>
<p>Mit diesem Modul können Sie Look Books erstellen und sie mit Sammlungen kombinieren. Mit Hilfe von Look Books können Sie sich Produkte direkt auf dem Modell anschauen. Und wenn das Produkt in Look Book markiert ist, wird das Modul den Link zu Look Book auf der Produktseite darstellen.</p>
<ul class="marked-list">
    <li>PHP 5.4+</li>
    <li>PrestaShop 1.6</li>
</ul>
<h5>Hauptpanel TM Look Book </h5>
<p> Auf der Hauptseite des Moduls können Sie Sammlungen des Moduls löschen und bearbeiten.</p>
<figure class="img-polaroid">
    <img src="img/tmlookbook-main-panel.png" alt=""/>
</figure>
<h5> Wie man Sammlungen hinzufügt und bearbeitet </h5>
<p> Eine Sammlung ermöglicht es Ihnen, mehrere Look Books auf einer Seite kombinieren. Um eine Sammlung hinzuzufügen, führen Sie die folgenden Aktionen durch.</p>
<ul class="index-list">
    <li>
        <p> In der Tabelle der Sammlungen (das Hauptpanel des Moduls) drücken Sie auf das Zeichen "Plus" (1).</p>
        <figure class="img-polaroid">
            <img src="img/tmlookbook-add-collection.png" alt=""/>
        </figure>
    </li>
    <li>
        <p> Sie sehen das Formular mit den folgenden Feldern:</p>
        <ul class="marked-list">
            <li><strong>Status</strong> (Status) - die Option ermöglicht es Ihnen, die Darstellung der Sammlung auf der Seite Sammlung zu aktivieren/zu deaktivieren.            </li>
            <li><strong>Name</strong> (Name) – der Name der Sammlung, die auf der Seite Sammlung dargestellt wird.
            <li><strong>Beschreibung</strong> (Description) – die Beschreibung der Sammlung.</li>
            <li><strong>Bild</strong> (Image) – das Hauptbild der Sammlung.</li>
            <li><strong>Vorlage</strong> (Template) – die Look Book Vorlage dieser Sammlung. Wenn Sie eine Vorlage wählen, wählen Sie auch eine Darstellungsart der Look Books dieser Sammlung auf der Seite.
            </li>
        </ul>
    </li>
    <li>
        <p>Nachdem Sie Felder ausgefüllt haben, drücken Sie auf den Button 'Speichern' (2).</p>
        <figure class="img-polaroid">
            <img src="img/tmlookbook-add-collection-2.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>Die Sammlung wurde erstellt. Sie können sie ändern, indem Sie auf den Button 'Bearbeiten' (3) drücken oder Sie können zum nächsten Schritt übergehen und Look Books für die Sammlung erstellen.</p>
        <figure class="img-polaroid">
            <img src="img/tmlookbook-add-collection-3.png" alt=""/>
        </figure>
    </li>
</ul>
<h5> Wie man Look Books erstellt und bearbeitet </h5>
<ul class="index-list">
    <li>
        <p>Nachdem Sie Look Book erstellt haben, drücken Sie auf den Button 'Ansehen' (1) neben der notwendigen Sammlung.</p>
        <figure class="img-polaroid">
            <img src="img/tmlookbook-add-lookbook.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>In dem DropDown Block drücken Sie auf den Button '+' (2).</p>
        <figure class="img-polaroid">
            <img src="img/tmlookbook-add-lookbook-2.png" alt=""/>
        </figure>
    </li>
    <li>
        <p> Sie sehen das Formular mit den folgenden Einstellungen:</p>
        <ul class="marked-list">
            <li><strong>Status</strong> (Status) – der Status des Looks, die Einstellung definiert, ob das Look Book dargestellt wird.            </li>
            <li><strong>Name</strong> (Name) – der Name des Looks .</li>
            <li><strong>Beschreibung</strong> (Description) – die Beschreibung des Looks.</li>
            <li><strong>Bild</strong> (Image) - das Hauptbild des Looks, hier können Sie Produkte und Beschreibungen markieren.            </li>
        </ul>
    </li>
    <li>
        <p>Nachdem Sie alle Felder ausgefüllt haben, drücken Sie auf den Button 'Speichern und bleiben' (3), um Hotspots zu erstellen.</p>
        <figure class="img-polaroid">
            <img src="img/tmlookbook-add-lookbook-3.png" alt=""/>
        </figure>
    </li>
</ul>
<h5>Wie man Hotspots hinzufügt und bearbeitet</h5>
<p>Nachdem Sie das Look Book gespeichert haben, können Sie Hotspots erstellen.</p>
<ul class="index-list">
    <li>
        <p>Drücken Sie auf das Bild (ein gewünschter Punkt) (1) in dem Look Book Formular.</p>
        <figure class="img-polaroid">
            <img src="img/tmlookbook-add-hotspot.png" alt=""/>
        </figure>
    </li>
    <li>
        <p> Sie sehen das Formular mit den folgenden Einstellungen:</p>
        <ul class="marked-list">
            <li><strong>Typ</strong> (Type) – der Punkttyp, diese Option hat zwei Werte 'Produkt' und 'Inhalt'. Der Typ 'Produkt' ermöglicht es Ihnen, der mit einer Stelle verbunden wird und der Typ 'Inhalt' ermöglicht es Ihnen, den Inhalt zu diesem Punkt (Name, Beschreibung, html) hinzuzufügen.            </li>
            <li><strong>Produkt</strong> (Product) – ein Produkt für einen Punkt wählen. Diese Option wird dargestellt, wenn der Typ 'Produkt' ausgewählt wurd.
            </li>
            <li><strong>Name</strong> (Name) – der Name, der mit einem Punkt verbunden ist. Dieses Feld ist verfügbar, wenn der Typ 'Inhalt' ausgewählt ist.
            </li>
            <li><strong>Beschreibung</strong> (Description) – der Code oder die Beschreibung des Punktes. Diese Option ist verfügbar, wenn der Typ 'Inhalt' ausgewählt ist.
            </li>
        </ul>
    </li>
    <li>
        <p> Nachdem Sie notwendige Optionen ausgewählt haben, drücken Sie auf den Button 'Speichern' (2), der Zugangspunkt wird erstellt und auf der Seite dargestellt.</p>
        <figure class="img-polaroid">
            <img src="img/tmlookbook-add-hotspot-2.png" alt=""/>
        </figure>
    </li>
</ul>
<h5>Wie man Hotspot löscht</h5>
<ul class="index-list">
    <li>
        <p>Um Hotspot zu löschen, fahren Sie mit dem Mauszeiger über es (1).</p>
        <figure class="img-polaroid">
            <img src="img/tmlookbook-delete-hotspot.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>Sie sehen den Button mit mit einem Kreuzchen, drücken Sie auf ihn (2).</p>
        <figure class="img-polaroid">
            <img src="img/tmlookbook-delete-hotspot-2.png" alt=""/>
        </figure>
    </li>
    <li><p>Hotspot wurde gelöscht.</p></li>
</ul>
<h5>Wie man die Position des Hotspots ändert</h5>
<p> Um die Position zu ändern, verschieben Sie Hotspot an eine gewünschte Stelle.</p>
<h5> Zur Seite Sammlungen gehen?</h5>
<p> Öffnen Sie die Seite de Hauptmoduls und drücken Sie auf den Button (1), Sie sehen die Seite mit allen Sammlungen. Sie können Links zu Look Books zu jedem Modul hinzufügen, das der eingestellte Inhalt unterstützt.</p>
<figure class="img-polaroid">
    <img src="img/tmlookbook-view-collections.png" alt=""/>
</figure>
