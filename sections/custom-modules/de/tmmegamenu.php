<h3>TM Mega Menu</h3>
<?php if ($project == 'eveprest' ) { ?>
    <div>
        <p style="margin-bottom: 0;">Verfügbar für:</p>
        <p style="margin-top: 0;" class="small text-secondary">Mode, Elektronik, Ersatzteile, Möbel</p>
    </div>
<?php } ?>
<p>Mit diesem Modul können Sie komplizierte Menüs erstellen. Dank diesem Modul können Sie auch ein Element (ohne Untermenü), einen Menüpunkt mit dem Untermenü und einen Menüpunkt mit dem Untermenü mit Hilfe von einem Block mit mehreren Zeilen oder mehreren Spalten darstellen. Dieses Modul kann in verschiedenen Positionen verwendet werden und es wird denselben Inhalt darstellen. Verfügbare Positionen: oben (displayTop), links (displayLeftColumn), rechts (displayRightColumn), Footer (displayFooter). Sie können Kategorien (mit Unterkategorien), CMS Kategorien (mit Unterkategorien), Hersteller (ein Hersteller oder eine Liste), Anbieter (ein Anbieter oder eine Liste), Shops (wenn der Multishop verwendet ist), Links zu jedem Produkt, Informationsblöcke über das Produkt, benutzerdefinierte Links (unbegrenzt), benutzerdefinierte HTML Blöcke (unbegrenzt) und Banner hinzufügen. Um mehr Informationen zu erhalten, lesen Sie diese Anleitung weiter.</p>
<h4>TM Mega Menu Tabs</h4>
<p>Tabs TM Mega Menu sind Haupttabs, die der Teil des oberen Menüs sind.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs.png" alt=""/>
</figure>
<p>Um einen neuen Tab zu erstellen, öffnen Sie das Modul TM Mega Menu und drücken Sie auf den Button '+' in der Tab Liste der Tabs.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add.png" alt=""/>
</figure>
<h6> In dem DropDown Formular füllen Sie die notwendigen Felder aus.</h6>
<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Namen des Tabs eingeben</dt>
            <dd> der Name des Tabs, es ist ein Pflichtfeld für die Standardsprache, wenn zusätzliche Felder der Sprachen nicht ausgefüllt sind, wird der Name des Tabs standardmäßig festgelegt.
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Aktiver Tab Активная вкладка</dt>
            <dd>aktiver/inaktiver Tab.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Link</dt>
            <dd> Der Link, der für diesen Tab festgelegt wurde. Sie können einen benutzerdefinierten Link eingeben oder bestehende Einstellungen (Kategorien, CMS Kategorien) wählen. Wenn Sie dieses Feld leer lassen, wird der Link dieses Tab inaktiv sein.
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Anzeigereihenfolge </dt>
            <dd>die Anzeigereihenfolge der Tabs.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Bestimmte Klasse</dt>
            <dd>eine Klasse, die hinzugefügt wird, um das Element (CSS Klasse) zu markieren.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Das Etikett des Tabs eingeben</dt>
            <dd>dieses Feld wird abhängig von Sprachen Ihres Online-Shops ausgefüllt.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Es ist Mega Menu</dt>
            <dd>das Untermenü dieses Tabs ist Mega Menu.
                <strong>*</strong>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Ein einfaches Menü verwenden</dt>
            <dd>das Untermenü des Tabs ist ein einfaches Menü.
                <strong>**</strong>
            </dd>
        </dl>
    </li>
</ul>
<p>
    <strong>*</strong>
    Es ist Mega Menu. Wenn Sie diese Einstellung wählen, wird das Formular für die Erstellung eines komplizierten Menüs (Mega Menu) angezeigt.
</p>
<p>
    <strong>**</strong>
    Es wird ein einfaches Menü benutzt. Wenn Sie diese Einstellung wählen, wird das Formular für die Erstellung eines komplizierten Menüs angezeigt. Dieses Menü stellt den ausgewählten Inhalt in einer Spalte dar. Wenn es den eingebauten Inhalt in dem Menü gibt, wird der neue Inhalt hinzugefügt.
</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form.png" alt=""/>
</figure>
<p> Ein kompliziertes Menü besteht aus  Reihen und Spalten in Zeilen.</p>
<p><strong>Eine Reihe ist der Teil der Mega Menu Struktur. </strong> Dazu gehören Spalten im Menü. Sie können eine bestehende Reihe löschen, indem Sie auf den entsprechenden Button drücken. Die Reihe wird mit dem Inhalt gelöscht, der zu ihr gehört. Die Anzahl der Reihen ist unbegrenzt.</p>
<p><strong>Eine Spalte ist der Teil der Mega Menu Struktur</strong>, die sich in Reihen befindet. (Klasse) die Spaltenbreite kann nicht kleiner als 2 und nicht mehr als 12 sein. Damit das Menü korrekt dargestellt wird, muss die Spaltenbreite nicht mehr als 12 sein. Die Breite (Klasse) ist die Spalte des Typs Bootstrap und entspricht denselben Werten.</p>
<p>Um ein Menü zu erstellen, drücken Sie auf den Button <strong>'Reihe hinzufügen'</strong> (Add row).</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-row.png" alt=""/>
</figure>
<p>In dem DropDown Fenster drücken Sie auf den Button <strong>'Spalte hinzufügen'</strong> (Add column).</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-row-col.png" alt=""/>
</figure>
<p> In dem DropDown Fenster sollen Sie die Klasse für die Spalte (von 2 bis 12) festlegen. Danach wird eine Spalte angezeigt, für die Sie Standardeinstellungen festlegen müssen.</p>
<p>Hier können Sie die Klasse der Spalte, CSS Klasse und den Inhalt aus der vorgestellten Liste ändern. Sie können den Inhalt hinzufügen/löschen, indem Sie einen Doppelklick auf ihn machen oder Elemente markieren und auf den entsprechenden Button drücken.</p>
<p>Der Block kann gelöscht werden, indem Sie auf den Button <strong>'Block löschen'</strong> (Remove block) im Footer des Blocks drücken.</p>
<p> Wenn Sie eine Reihe löschen, löschen Sie auch die Spalten, die zu ihr gehören.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-row-col-content.png" alt=""/>
</figure>
<p> Um den verfügbaren Menü Inhalt in dem ausgewählten anzusehen, machen Sie den Doppelklick oder markieren Sieden gewünschten Inhalt und drücken Sie auf den Button.</p>
<p> Informationen über ein inaktives Menü wird beim Umschalten zwischen Menütypen gespeichert und Sie können jederzeit den Menütyp ändern.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-simple.png" alt=""/>
</figure>
<h4>TM Mega Menu HTML</h4>
<p> In diesem Bereich erklären wir, wie man einen benutzerdefinierten HTML Block in Mega Menu erstellt.</p>
<p> Dieses Modul enthält die Tabelle mit der Liste verfügbarer Blöcke. Sie können einen neuen Block hinzufügen, indem Sie auf den Button '+' in der oberen rechten Ecke der Tabelle drücken.</p>
<h6> In dem DropDown Formular füllen Sie alle notwendigen Felder aus.</h6>
<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Den Namen des HTML Elementes eingeben </dt>
            <dd>Der Name des HTML Blocks, es ist ein Pflichtfeld für die Standardsprache.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Bestimmte Klasse</dt>
            <dd>Die CSS Klasse des Blocks.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>HTML Inhalt</dt>
            <dd> Der HTML Inhalt.</dd>
        </dl>
    </li>
</ul>
<p> Der hinzugefügte Block wird in der Liste der Blöcke und auch in der Liste des verfügbaren Inhalts bei der Erstellung der Menüblöcke angezeigt.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-html.png" alt=""/>
</figure>
<h4>Links TM Mega Menu</h4>
<p> In diesem Bereich zeigen wir, wie man benutzerdefinierte Links in Mega Menu erstellt.</p>
<p> Dieses modul enthält die Tabelle mit der Liste der verfügbaren Links. Sie können auch einen neuen Link hinzufügen, indem Sie auf den Button '+' in der oberen rechten Ecke der Taballe drücken.</p>
<h6> In dem DropDown Formular füllen Sie alle notwendigen Felder aus.</h6>
<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Den Namen des Links eingeben</dt>
            <dd>der Namen des Links, es ist ein Pflichtfeld für die Standardsprache.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
<dt>Die Adresse des Links eingeben</dt>
            <dd>die Adresse des Links, es ist ein Pflichtfeld für die Standardsprache.</dd>        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Bestimmte Klasse</dt>
            <dd>die Klasse des CSS Blocks.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>In einem neuen Fenster öffnen</dt>
            <dd>den Link in einem neuen Fenster öffnen.</dd>
        </dl>
    </li>
</ul>
<p> Der hinzugefügte Link wird in der Liste der Links und auch in der Liste des verfügbaren Inhalts bei der Erstellung der Menüblöcke angezeigt.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-links.png" alt=""/>
</figure>
<h4>Banner TM Mega Menu</h4>
<p> In diesem Bereich zeigen wir, wie man Banner in Mega Menu erstellt.</p>
<p> Dieses Modul enthält die Tabelle mit der Liste der verfügbaren Banner. Sie können auch ein Banner hinzufügen, indem Sie auf den Button '+' in der oberen rechten Ecke drücken.</p>
<h6> In dem DropDown Formular füllen Sie alle notwendigen Felder aus.</h6>
<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Datei wählen</dt>
            <dd>wählen Sie eine Datei aus, es ist ein Pflichtfeld für die Standardsprache.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Den Namen des Banners eingeben</dt>
            <dd>der Name des Banners, es ist ein Pflichtfeld für die Standardsprache.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Die Adresse des Links eingeben</dt>
            <dd>die Adresse des Links, es ist ein Pflichtfeld für die Standardsprache.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Bestimmte Klasse</dt>
            <dd>die Klasse des CSS Blocks.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>In einem neuen Fenster öffnen</dt>
            <dd>den Link in einem neuen Fenster öffnen.</dd>
        </dl>
    </li>
</ul>
<p> Das hinzugefügte Banner wird in der Liste der Banner und auch in der Liste des verfügbaren Inhalts bei der Erstellung der Menüblöcke angezeigt.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-banners.png" alt=""/>
</figure>
