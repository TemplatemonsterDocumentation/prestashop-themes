<h3>TM Advanced Filter</h3>
<?php if ($project == 'eveprest' ) { ?>
    <div>
        <p style="margin-bottom: 0;">Verfügbar für:</p>
        <p style="margin-top: 0;" class="small text-secondary">Ersatzteile</p>
    </div>
<?php } ?>
<h4>Einführung</h4>
<p> Das Modul TM Advanced Filter gibt Ihnen die Möglichkeit, schnelle Suche eines notwendigen Produktes basierend auf Schlüsseleigenschaften zu realisieren. Mit diesem Modul können Sie Filter mit der unbegrenzten Anzahl der Suchkriterien erstellen, die in dem Online-Shop standardmäßig verfügbar sind oder beim Hinzufügen des Produktes erstellt werden. Es gibt folgende Filterkriterien: Kategorieebenen (durch die Verschachtelung), Hersteller, Anbieter, Attribute, Funktionen usw. Dieses Modul hat folgende Funktionen: die Erstellung der verwandten Filter, in denen notwendige Kriterien verfügbar sind, nachdem Sie den übergeordneten Parameter (Verschachtelungsebene ist unbegrenzt) ausgewählt haben; Grid der Filterkriterien für den Filter auf der Seite oben wählen. Sie können den Feldtyp des Filters aus den verfügbaren wählen, den übergeordneten Filter festlegen, seinen Namen, sein Etikett und seine hinzufügen. Dies können Sie ganz einfach über das Control Panel einstellen und bearbeiten. Damit das Modul schneller funktioniert, wird der Indexierungsalgorithmus der Produkte nach den festgelegten Kategorien verwendet. Dieses Modul kann schnell und einfach zu jedem Prestashop Modul hinzugefügt werden.</p>
<h4>Wie man das Modul installiert und löscht</h4>
<h6>Dieses Modul wird wie ein anderes PrestaShop Modul installiert und gelöscht.</h6>
<p class="alert alert-info"><span>Wenn Sie das Modul löschen oder noch einmal installieren, werden alle Einstellungen und Filter des Moduls gelöscht.</span></p>
<h4>Wie man Filter einstellt/ändert</h4>
<p> Nachdem Sie das Modul installiert haben, können Sie seine Einstellungen ändern. Standardmäßig sehen Sie Tabs mit verfügbaren Filtertypen. Um einen Filter zu erstellen, wählen Sie den Tab (1) und drücken Sie auf den Button 'Filter erstellen' (2).</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-1.png" alt=""/></figure>
<p> In dem DropDown Fenster des Filters füllen Sie alle notwendigen Felder aus.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-2.png" alt=""/></figure>
<ul class="marked-list">
    <li><strong>Name</strong> (Name) - der Filtername. Er wird auf dem Frontend als Titel des Filter-Blocks angezeigt;
    </li>
    <li><strong>Beschreibung</strong> (Description) - die Filterbeschreibung. Sie wird auf dem Frontend neben dem Namen des Filter-Blocks angezeigt    </li>
    <li><strong>Zähler anzeigen</strong> (Show counter) - es ermöglicht Ihnen, die Anzahl der Pprodukte anzuzeigen, die verfügbar werden, nachdem Sie den aktuellen Wert ausgewählt haben. Die Anzahl wird neben dem Suchkriterium (in Klammern) angezeigt;    </li>
    <li><strong>Ausgewählte Filter anzeigen</strong> (Show selected filters) - es ermöglicht Ihnen, die Liste der ausgewählten Kriterien anzuzeigen und Sie können jedes von ihnen zurücksetzen;    </li>
    <li><strong>Layouttyp des Filters anzeigen</strong> (Show filter layout type) - Sie können den Layouttyp des Filters (verfügbar nur für den oberen Filter) auswählen;    </li>
</ul>
<p class="alert alert-info"><span> Achtung: es gibt keine Pflichtfelder. Wenn Sie alle Felder leer lassen, wird der Filter mit einer Spalte ohne Namen und ohne Beschreibung erstellt.</span></p>
<h5>Wie man den Filter bearbeitet</h5>
<p>Um die Beschreibung und Einstellungen des Filters zu ändern, drücken Sie auf den Button 'Zahnrad' im Filter-Menü.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-3.png" alt=""/></figure>
<p> In dem Bearbeitungsmodus sieht das Formular (und funktioniert) wie in dem Einstellungsmodus aus.</p>
<p class="alert alert-info"><span> Sie können das Filter Grid nur für den 'Oberen Filter' wählen.</span></p>
<p class="alert alert-info"><span>Wenn Sie das Filter-Grid ändern, werden alle Elemente automatisch in die erste Spalte übertragen. Die Verschachtelungsreihenfolge und Darstellungsreihenfolge werden (laut dem Prinzip: alle Elemente der vorherigen Spalte mit der gespeicherten Darstellungsreihenfolge) gespeichert.</span></p>
<h5>Wie man einen Filter löscht</h5>
<p> Um die Beschreibung und Einstellungen des Filters zu ändern, drücken Sie auf 'Kreuzchen' im Filter-Menü</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-31.png" alt=""/></figure>
<p>und bestätigen Sie Ihre Aktion.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-4.png" alt=""/></figure>
<div class="box-notification">
    <span> Wenn Sie den Filter löschen, werden alle Daten für immer gelöscht.</span>
</div>
<h5>Wie man einen Filter indexiert</h5>
<p><strong>Indexierung</strong> (Indexation) - der Erstellungsprozess der einzigartigen Tabellen mit Daten, die notwendig für den filter sind. Sie werden für bestimte Filterkriterien erstellt. Dadurch wird die Leistung des Filters auf dem Frontend beschleunigt.</p>
<p> Der entsprechende Button in dem Filter-Menü ist rot markiert. Wenn der Button nicht rot markiert ist, müssen Sie nicht den Filter indexieren.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-5.png" alt=""/></figure>
<p class="alert alert-info"><span> Der Prozess der Neuindizierung kann einige Zeit abhängig von der Anzahl der Produkte und der ausgewählten Filterkriterien dauern.</span></p>
<p class="alert alert-info"><span> Wenn der Filter neu indexiert werden muss, wird er nicht auf dem Frontend dargestellt.</span></p>
<h5>Wie man Filterkriterien erstellt/ändert </h5>
<p> Um einen Element zum Filter hinzuzufügen, wählen Sie es in dem Panel der verfügbaren Elemente (links) und verschieben Sie es in den verfügbaren Bereich des Grid Filters (Im Beispiel hat das Grid 2 Spalten).</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-6.png" alt=""/></figure>
<p> In dem markierten Bereich wählen Sie die Spalte und die Position des neuen Elementes und legen Sie es ab.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-7.png" alt=""/></figure>
<p> In dem DropDown Fenster geben Sie alle notwendigen Daten ein:</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-8.png" alt=""/></figure>
<ul class="marked-list">
    <li><strong>Name</strong> (Name) - der Namen des Filterelementes auf dem Frontend. Er wird nicht angezeigt, wenn Sie dieses Feld leer lassen.    </li>
    <li><strong>Etikett</strong> (Label) - das Etikett des Filterelementes auf dem Frontend. Es wird nicht angezeigt, wenn Sie dieses Feld leer lassen.        </li>
    <li><strong>Beschreibung</strong> (Description) - die Beschreibung des Filterelementes auf dem Frontend. Es wird nicht angezeigt, wenn Sie dieses Feld leer lassen.       </li>
    <li><strong>Der geordnete Filter</strong> (Parent filter) - das geordnete Filterelement, nachdem Sie das verfügbare Element ausgewählt haben. Das Element wird immer verfügbar, wenn Sie das Feld leer lassen.
    </li>
    <li><strong>Feldtyp des Filters</strong> (Filter field type) – wie das Element auf dem Frontend dargestellt wird. Folgende Typen sind verfügbar:
        <ul class="marked-list">
            <li>Optionsfeld</li>
            <li>Wahl</li>
            <li>Kontrollkästchen </li>
            <li>Wahl aus dem Bereich (nur für den Feldtyp 'Preis')</li>
            <li>Bereich eingeben (nur für den Feldtyp 'Preis')</li>
        </ul>
    </li>
</ul>
<p class="alert alert-info"><span> Sie können alle Daten und das geordnete Element in dem Bearbeitungsmodus des Filters ändern.</span></p>
<p class="alert alert-info"><span>Nachdem Sie das Element bearbeitet haben, sollen Sie den Filter noch einmal indexieren. Drücken Sie auf den entsprechenden Button in dem Filter-Menü. Indexieren Sie nicht den Filter nach der bearbeitung jedes Elementes. Sie können dies tun, nachdem Sie die Änderungen an allen notwendigen Elementen vorgenommen haben.</span></p>
<p> Wenn es die Gruppe der zugeordneten Filtern gibt, können Sie ein neues Element als das zugeordnete Element zu dieser Gruppe hinzufügen.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-10.png" alt=""/></figure>
<h5>Wie man ein Filterelement bearbeitet</h5>
<p> Um ein Filterelement zu ändern, drücken Sie auf den Button 'Zahnrad' (1) in der oberen rechten Ecke des Filters.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-9.png" alt=""/></figure>
<h5> Reihenfolge (die Darstellungsreihenfolge der Filterelemente)</h5>
<p> Standardmäßig werden neue Elemente nach dem Elemente in der Reihenfolge angezeigt, in der Sie sie hinzugefügt haben. Wenn der Filter zur gruppe hinzugefügt ist, wird er nach den bestehenden Elementen in dieser Gruppe angezeigt.</p>
<p>Um Elemente im Filter zu verschieben, wählen Sie ein notwendiges Element und verschieben Sie es an eine gewünschte Stelle. Sie können Elemente sowohl in einer Splate als auch in andere Spalten verschieben. Sie können auch die Reihenfolge in der Gruppe ändern oder die gesamte Gruppe verschieben.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-11.png" alt=""/></figure>
<p> Nachdem Sie die Elemente einer Splate in die andere verschoben haben, wird die Darstellungsreihenfolge automatisch in allen Spalten geändert.</p>
<h5>Wie man ein Filterelement löscht</h5>
<p> Es gibt zwei Wege das Filterlelement zu löschen:</p>
<ul class="index-list">
    <li><p> verschieben Sie das Element zur Spalte der verfügbaren Elementen zurück;</p>
        <figure class="img-polaroid"><img src="img/tmadvancedfilter-12.png" alt=""/></figure>
    </li>
    <li><p> oder drücken Sie auf das «Kreuzchen» in der oberen rechten Ecke des notwendigen Elementes.</p>
        <figure class="img-polaroid"><img src="img/tmadvancedfilter-9.png" alt=""/></figure>
    </li>
</ul>
<p> Unabhängig von dem ausgewählten Weg sehen Sie ein Fenster, in dem Sie Ihre Aktionen bestätigen sollen.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-13.png" alt=""/></figure></li>
<p class="alert alert-info"><span> Wenn Sie den Filter mit verschachteltenen Elementen löschen, werden alle verschachteltenen Elemente auch gelöscht.</span></p>
<p class="alert alert-info"><span>Wenn Sie das Element löschen, sollen Sie den Filter noch einmal indexieren. Drücken Sie auf den entsprechenden Button in dem Filter-Menü. Indexieren Sie nicht den Filter nach der bearbeitung jedes Elementes. Sie können dies tun, nachdem Sie die Änderungen an allen notwendigen Elementen vorgenommen haben.</span></p>
<h5>"Kluge" Neuindizierung </h5>
<p>Dieses Modul gewährleistet automatische (kluge) Neuindizierung, nachdem Sie die Änderungen an den Produkten oder andere wichtige Änderungen (Hersteller, Attribut usw.) vorgenommen haben. Die Tabellenfelder werden neu indexiert, wenn diese Änderungen auf die Leistung des Filters wirken.</p>
<p class="alert alert-info"><span> Wenn die vorgenommenen Änderungen automatisch nicht dargestellt sind, öffnen Sie die Seite Filter-Einstellungen und nehmen Sie die Änderungen an dem Filter manuell vor.</span></p>
<p class="alert alert-info"><span> Wenn Sie die Währung hinzufügen, wird der Filter nicht automatisch neu indexiert, deswegen sollen Sie ihn manuell neu indexieren.</span></p>
<h4>FAQ</h4>
<div class="responsive-tabs" data-type="accordion">
    <ul class="resp-tabs-list">
        <li> Ich habe einen Filter erstellt, aber ich sehe ihn nicht auf dem Frontend.</li>
        <li> Ich habe einen Namen und eine Beschreibung zum Filtet hinzugefügt, aber sie werden nicht auf dem Frontend dargestellt.</li>
        <li> Ich habe ein Element zum Filter hinzugefügt, aber es wird nicht mehr auf dem Frontend dargestellt.</li>
        <li> Ich möchte, damit das Element nur dann verfügbar ist, wenn ich ein anderes Element ausgewähle.</li>
        <li>Ich möchte Elemente tauschen.</li>
        <li> Ich möchte das geordnete Element löschen, aber alle verschachteltenen Elemente gespeichert werden müssen. Was soll ich tun?        </li>
        <li> Ich möchte den Grid Filter ändern, aber ich möchte nicht den Filter noch einmal erstellen. Was soll ich tun?</li>
        <li> Wie kann ich einen neuen Filter erstellen, wenn es einen Filter für diese Position schon gibt?</li>
        <li> Der Filter wird nicht mehr auf dem Frontend dargestellt.</li>
        <li> Warum sind nicht alle Elemente auf dem Frontend aktiv?</li>
    </ul>
    <div class="resp-tabs-container">
        <div> Der Filter wird nicht angezeigt, wenn er keine Elemente enthält oder er nicht indexiert wurde. <br>
          Stellen Sie sicher, dass es Elemente im Filter gibt und er indexiert wurde.
        </div>
        <div> Es kann sein, dass Sie die Daten nicht zu allen Sprachen hinzugefügt haben. Vergessen Sie nicht, dass dieses Modul mehrsprachig ist und die Daten für jede Sprache separat speichert.        </div>
        <div> Stellen Sie sicher, dass Sie den Filter nach den vorgenommenen Änderungen noch einmal indexiert haben.</div>
        <div> Wählen Sie das Element, nach dem das notwendige Element verfügbar sein muss. Legen Sie dieses Element als das geordnete Element fest.</div>
        <div> Verschieben Sie das Element an die Stelle, wo Sie es finden möchten. Es wird automatisch an dieser Stelle platziert.        </div>
        <div> In dem bearbeitungsmenü des ersten verschachtelten Elementes löschen Sie die Zugehörigkeit zum geordneten Element, das Sie löschen möchten und danach löschen Sie das geordnete Element. In diesem Fall werden alle verschachtelten Elemente nicht gelöscht.        </div>
        <div> Loggen Sie sich ins Bearbeitungsmenü ein und wählen den neuen Grid Filter, danach speichern Sie die Änderungen. Alle Filterelemente werden in der ersten Spalte des neuen Grids angezeigt, Sie können sie an anderen Stellen verschieben.        </div>
        <div> Um einen neuen Filter zu erstellen, sollen Sie den bestehenden löschen.</div>
        <div> Stellen Sie sich, dass der Filter nicht indexiert werden muss.</div>
        <div> Überprüfen Sie, ob das Element nicht untergeordnet relativ zum Element ist, das zurzeit inaktiv ist. Stellen Sie sicher, dass es Produkte gibt, den den festgelegten Kriterien entsprechen.
        </div>
    </div>
</div>

