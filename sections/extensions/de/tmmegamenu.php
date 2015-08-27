<h3>TM Mega Menu</h3>

<p>Das jeweilige Modul eignet sich für die Erstellung eines komplizierten Menüs. Im Modul kann man einen Menüpunkt
    (ohne Untermenü), einen Menüpunkt mit dem Untermenü und einen Menüpunkt als mehrreihiger und mehrspaltiger Block
    darstellen. Dieses Modul kann auch in verschiedenen Positionen benutzt werden und dazu denselben Inhalt
    anzeigen. Die verfügbaren Positionen sind: top(displayTop), left(displayLeftColumn), right(displayRightColumn),
    footer(displayFooter). Zum Menü können Kategorien (mit Unterkategorien), CMS Kategorien (mit Unterkategorien),
    Hersteller (einzelweise und als Liste), Lieferanten (einzelweise und als Liste), Shops (wenn mehrere Shops
    benutzt werden), Link zu jedem Produkt, Block mit der Information über das Produkt, benutzerdefinierte Links
    (unbegrenzt), benutzerdefinierte HTML Blöcke (unbegrenzt) und Banner hinzugefügt werden. Mehr erfahren Sie
    unten.</p>

<h4>TM Mega Menu Tabs</h4>

<p>TM Mega Menu Tabs sind Hauptelemente, die der Teil des Rootmenüs sind.</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs.png" alt="">
</figure>

<p>Um einen neuen Tab zu erstellen, öffnen Sie das Modul TM Mega Menu und drücken Sie + in der Tabelle Tabs list
    (Liste von Tabs)</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add.png" alt="">
</figure>

<p>In dem angezeigten Formular füllen Sie die erforderlichen Felder aus</p>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Enter tab name (Namen des Tabs hinzufügen)</dt>
            <dd>der Name des Tabs muss unbedingt auf der Grundsprache ausgefülltwerden. Wenn Felder für zusätzliche
                Sprachen nicht ausgefüllt werden, dann wird die Hauptsprache für den Namen des Tabs festgelegt. Es
                ist ein Pflichtfeld.
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Active (Aktiv)</dt>
            <dd>der Tab ist aktiv/inaktiv.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Link (Link)</dt>
            <dd>der Link zu diesem Tab. Man kann den benutzerdefinierten Link eingeben oder aus den vorhandenen
                Optionen (Kategorien, CMS Kategorien) auswählen. Wenn Sie dieses Feld leer lassen, wird der Link zu
                diesem Tab inaktiv.
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Sort order (Sortierreihenfolge)</dt>
            <dd>die Reihenfolge von angezeigten Tabs.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Specific Class (Bestimmte Klasse)</dt>
            <dd>die Klasse, die zum Element für seine Markierung (CSS Klasse) hinzugefügt wird.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Enter tab badge (Tab Badge hinzufügen)</dt>
            <dd>es wird abhängig von der Mehrsprachigkeit ausgefüllt.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>It is Mega Menu (Es ist Mega Menu)</dt>
            <dd>das Untermenü dieses Tabs - Mega Menu.
                <strong>*</strong>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Use simple menu (Einfaches Menü nutzen)</dt>
            <dd>das Untermenü dieses Tabs - einfaches Menü.
                <strong>**</strong>
            </dd>
        </dl>
    </li>
</ul>
<p>
    <strong>*</strong>
    It is Mega Menu (Es ist Mega Menu). Wenn Sie diesen Punkt ausgewählt haben, wird das Formular zum Erstellen des
    komplizierten Menüs (Mega Menu) angezeigt.
</p>

<p>
    <strong>**</strong>
    Use simple menu (Einfaches Menü nutzen). Wenn Sie diesen Punkt auswählen, wird das Formular zum Erstellen des
    einfachen Menüs angezeigt. Es ist das Menü, das den ausgewählten Inhalt in einer Spalte anzeigt. Wenn es im
    Inhalt noch der eingebetteter Inhalt gibt, wird die neue Spalte hinzugefügt.
</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form.png" alt="">
</figure>

<p>Das komplizierte Menü besteht aus Zeilen und Spalten in den Reihen.</p>

<p>Die Zeile ist der Teil der Mega Menu Struktur. In ihr werden Menüspalten platziert. Wenn Sie eine existierende
    Zeile entfernen möchten, müssen Sie dann auf den entsprechenden Button drücken. Die Zeile wird mit dem Inhalt
    entfernt. Die Anzahl von Zeilen ist unbegrenzt.</p>

<p>Die Spalte ist der Teil der Mega Menu Struktur, die in den Reihen platziert wird. (Klasse) Die Spaltenbreite kann
    nicht kleiner als 2 und nicht mehr 12 sein. Damt das Menü korrekt angezeigt wird, muss es nicht mehr als 12
    Splaten insgesamt. Die Breite (Klasse) ist der Typ der Bootstrap Spalte und entspricht denselben Werten.</p>

<p>Um das Menü zu erstellen, drücken Sie auf den Button Add row (Zeile hinzufügen)</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-row.png" alt="">
</figure>

<p>In dem angezeigten Formular drücken Sie auf den Button Add column (Spalte hinzufügen)</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-row-col.png" alt="">
</figure>

<p>Es wird ein DropDownFenster angezeigt, wo Sie die Klasse für die Splate (von 2 bis 12) angeben müssen. Danach
    wird die Spalte angezeigt, wo Sie die erforderlichen Einstellungen hinzufügen müssen</p>

<p>Hier können Sie die Klasse für die Spalte ändern, CSS Klasse und notwendigen Inhalt aus der Liste hinzufügen. Der
    Inhalt kann hinzugefügt oder entfernt werden, indem Sie den Doppelklick auf das gewünschte Element machen oder
    ein gewünschtes oder mehrere Elemente markieren und auf den entsprechenden Button drücken.</p>

<p>Sie können den Block entfernen, indem Sie auf den Button Remove block (Block entfernen) im unteren Teil des
    Blocks drücken.</p>

<p>Beim Entfernen der Zeile werden alle Spalten, die sie enthält, entfernt.</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-row-col-content.png" alt=""/>
</figure>

<p>Um den verfügbaren Inhalt in das ausgewählte Menü zu verschieben, machen Sie den Doppelklick oder markieren Sie
    den gewünschten Inhalt und drücken Sie auf den entsprecheden Button.</p>


<p>Die Information des inaktiven Menüs wird beim Umschalten zwischen Menütypen gespeichert, deswegen können Sie den
    Menütyp jederzeit ändern.</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-simple.png" alt="">
</figure>

<h4>TM Mega Menu HTML</h4>

<p>Lassen Sie uns in diesem Punkt zeigen, wie man Blöcke mit dem benutzerdefinierten HTML in Mega Menu erstellt.</p>

<p>Im Modul gibt es die Tabelle mit allen verfügbaren Blöcken, zu der Sie einen Block hinzufügen können, indem Sie
    auf den Button + in der rechten oberen Ecke drücken.</p>

<h6>In der angezeigten Formular füllen Sie alle erforderlichen Felder aus.</h6>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Enter HTML item name (Namen des HTML Elementes hinzufügen)</dt>
            <dd>der Name des HTML Blockes muss unbedingt auf der Grundsprache ausgefüllt werden.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Specific class (Spezifische Klasse)</dt>
            <dd>CSS Klasse für den Block.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>HTML content (HTML Inhalt)</dt>
            <dd>HTML Inhalt.</dd>
        </dl>
    </li>
</ul>
<p>Der hinzugefügte Block wird in der Liste von Blöcken und auch in der Liste des verfügbaren Inhalts beim Erstellen
    Menüblöcken angezeigt.</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-html.png" alt="">
</figure>

<h4>TM Mega Menu Links</h4>

<p>Lassen Sie uns in diesem Punkt zeigen, wie man benutzerdefinierte Links in Mega Menu erstellt.</p>

<p>In diesem Modul gibt es die Tabelle mit der Liste von allen verfügbaren Links, zu der Sie einen neuen Link
    hinzufügen können, indem Sie auf den Button + in der oberen rechten Ecke drücken.</p>

<h6>In der angezeigten Formular füllen Sie alle erforderlichen Felder aus.</h6>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Enter Link name (Geben Sie den Namen des Links ein)</dt>
            <dd>der Name des Links muss unbedingt auf der Grundsprache ausgefüllt werden.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Enter Link URL (Geben Sie die URL des Links)</dt>
            <dd>der Pfad zum Link muss unbedingt auf der Grundsprache ausgefüllt werden.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Specific class (Geben Sie die Klasse ein)</dt>
            <dd>CSS Klasse für den Block.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Open in new window (In einem neuen Fenster öffnen)</dt>
            <dd>den Link in einem neuen Fenster öffnen.</dd>
        </dl>
    </li>
</ul>
<p>Der hinzugefügte Link wird in der Liste von Links und auch in der Lite des verfügbaren Inhalts beim Erstellen von
    Menüblöcken angezeigt.</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-links.png" alt="">
</figure>

<h4>TM Mega Menu Banners</h4>

<p>Lassen Sie uns in diesem Punkts zeigen, wie man Banner in Mega Menu erstellt.</p>

<p>In diesem Modul gibt es die Tabelle mit der Liste von allen verfügbaren Bannern, zu der Sie ein neues Banner
    hinzufügen können, indem Sie auf den Button + in der oberen rechten Ecke drücken.</p>

<h6>In dem angezeigten Formular füllen Sie alle erforderlichen Felder aus.</h6>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Select a file (Datei auswählen)</dt>
            <dd>wählen Sie die Datei (es muss unbedingt auf der Grundsprache ausgefüllt werden) aus.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Enter Banner name (Geben Sie den Namen des Banners ein)</dt>
            <dd>der Name des Banners muss unbedingt auf der Grundsprache ausgefüllt werden.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Enter Link URL (Geben Sie die URL des Banners)</dt>
            <dd>der Pfad zum Link muss unbedingt auf der Grundsprache ausgefüllt werden.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Specific class (Spezifische Klasse)</dt>
            <dd>CSS Klasse für den Block.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Open in new window (In einem neuen Fenster öffnen)</dt>
            <dd>der Link in einem neuen Fenster öffnen.</dd>
        </dl>
    </li>
</ul>
<p>Das hinzugefügte Banner wird in der Liste von Bannern und auch in der Liste des verfügbaren Inhalt beim Erstellen
    von Menüblöcken angezeigt.</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-banners.png" alt="">
</figure>