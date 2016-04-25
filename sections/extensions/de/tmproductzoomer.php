<h3>TM Product Zoomer</h3>

<p>Dieses Modul ist eine alternative Lösung für den Standardproduktbild-Zoom auf den einzelnen Produktseiten . Es ist völlig kompatibel mit dem Standard-Zusatzproduktbild- Karussells und Produkteigenschaftenänderungen.Es ermöglicht Ihnen, eine der drei verfügbaren Optionen  (Fenster / Linse / innerhalb) für Bild-Zoom unter den erweiterten Plugin-Einstellungen zu wählen. Das Modul funktioniert auf der Basis des <a href="//igorlino.github.io/elevatezoom-plus/" target="_blank">Elevatezoom Plus</a> Plugins.</p>

<h5>Installation und Löschen</h5>
<p>Das Modul wird installiert und gelöscht wie jedes andere Prestashop Modul. Nach dem Installieren des Moduls wird der Standardprodukt-Zoom-Effekt automatisch deaktiviert. Nach dem Löschen sollte der Standarteffekt manuell wiedereingestellt werden  (bei Bedarf) in <strong>Preferences->Products->Enable JqZoom anstatt Fancybox in der Produktseiten</strong> Sektion.</p>
<h5>Modulkonfiguration</h5>
<p>Nachdem das Modul installiert wurde, können Sie es auf der Modulkonfigurationsseite konfigurieren.</p>
<p>Standardmäßig zeigt die Konfigurationsseite die <strong>vereinfachte</strong> Reihe von Optionen.</p>
<figure class="img-polaroid">
    <img src="img/tmproductzoomer-1.png" alt=""/>
</figure>
<ol class="index-list">
    <li><strong>Live Modus (Live mode)</strong> - Modul ist ein / aus </li>
    <li><strong>Fancybox</strong> - ob das vergrößerte Bild im Fancybox auf Klick angezeigt wird.</li>
    <li><strong>Bild beim Hover ändern (Change image on hover)</strong> - das Hauptbild beim Hover des Miniaturbilds ändern  (Standardmäßig wird auf Klick gewechselt)</li>
    <li><strong>Responsive</strong> - ermöglicht adaptive Funktion des plugins für mobile Geräte zu nutzen</li>
    <li><strong>Zoom Typ</strong> - choose the type of the enlarged image display mode
        <ul>
            <li><strong>Fenster (window)</strong> - das vergrößerte Bild wird in einer der verfügbaren  (16) Positionen neben dem Hauptbild angezeigt</li>
            <li><strong>Linse (lens)</strong> - das Bild wird oberhalb der Linsenbox gezoomt</li>
            <li><strong>innerhalb (inner)</strong> - wird das Bild innerhalb des Hauptbildcontainers, mit der vollen Abdeckung, gezoomt</li>
        </ul>
        <div class="alert alert-info">Die mobilen Geräte (&lt; 768) haben direkt den "Linsen" Modus aktiviert</div>
    </li>
    <li><strong>Erweiterte Einstellungen</strong> - ermöglicht erweiterte Einstellungen für den erfahrenen Benutzer. Sie können den Link in der offiziellen <a href="//igorlino.github.io/elevatezoom-plus/api.htm" target="_blank"> Dokumentation </a> daneben sehen.</li>
</ol>
<p><strong>Erweiterte</strong> Modulkonfigurationen</p>
<ol class="index-list">
    <li><strong>Scroll Zoom</strong> - Zoomverhältnis Änderung auf dem Mausradscroll.
        (verfügbar für alle Typen)</li>
    <li><strong>Kursor</strong> - Cursor-Typ beim Hover des vergrößerten Bildes. Es gibt folgende Optionen zur Verfügung: Standard, Cursor, fadenkreuz .  (Für alle Typen)</li>
    <li><strong>Zooemeinstellungen (zoom settings)</strong> -  (verfügbar für alle Typen, wenn 'Scroll Zoom' aktiviert ist)
        <figure class="img-polaroid"><img src="img/tmproductzoomer-2.png" alt="" /></figure>
        <ul>
            <li>Zoomlevel - die Zoomstufe beim Anfangshover</li>
            <li>Min Zoomlevel - die minimale Zoomstufe </li>
            <li>Max Zoomlevel - die maximale Zoomstufe</li>
            <li>Schritte des Scroll-Zoom (Scroll Zoom Increment) - erhöht beim Vergrößerungsscroll</li>
        </ul>
    </li>
    <li><strong>Verminderung (Easing)</strong> - der Effekt für das vergrößerte Bild  (verfügbar für alle Typen)
        <p></p>
        <figure class="img-polaroid"><img src="img/tmproductzoomer-3.png" alt="" /></figure>
        <ul>
            <li>Zoom Verminderung (Zoom Easing) - Effekt an/aus</li>
            <li>Verminderungsbetrag (Easing Amount) - Verzögerungswert Effekt </li>
        </ul>
    </li>
    <li><strong>Bildübergang (Image Crossfade)</strong> - Hauptbildunschärfe außerhalb des Hoverbereiches  (Linse).
        (verfügbar für Fenster, Linse)</li>
    <li><strong>vergrößertes Bild Fenstereinstellungen  (magnified image window settings)</strong> -  (verfügbar für Fenster)
        <figure class="img-polaroid"><img src="img/tmproductzoomer-4.png" alt="" /></figure>
        <ul>
            <li>Zoom Fensterbreite (Zoom Window Width) - Fensterbreite in px</li>
            <li>Zoom Fensterhöhe (Zoom Window Height) - Fensterhöhe in px</li>
            <li>Fenster Offset X Zoom (Zoom Window Offset X) - Fenster Offset der X Axe</li>
            <li>Fenster Offset Y Zoom (Zoom Window Offset Y) - Fenster Offset der Y Axe</li>
            <li>Zoomfenster Position (Zoom Window Position) - Fensterpositions Wahl relativ zu dem Hauptbild  (die verfügbaren Positionen sind auf dem Bild unter diesem Feld präsentiert)</li>
            <li>Zoomfenster Hintergrund (Zoom Window Bg Color) - Fenster Hintergrund  (nur für transparente Bilder)</li>
            <li>Zoomfenster Einblenden (Zoom Window Fade In) - das langsame Auftauchen des Fensters - Effekt</li>
            <li>Zoomfenster Ausblenden (Zoom Window Fade Out) - das langsame Verschwinden des Fensters - Effekt</li>
            <li>Randgröße (Border Size) - Fensterrahmenbreite  in px</li>
            <li>Randfarbe (Border Color) - Fensterrahmenfarbe </li>
        </ul>
    </li>
    <li><strong>Zoomlinse (Zoom Lens)</strong> - Zoomlinse  (verfügbar für Fenster, Linse)
        <figure class="img-polaroid"><img src="img/tmproductzoomer-5.png" alt="" /></figure>
        <ul>
            <li>Zoomlinse (Zoom Lens) - an/aus</li>
            <li>Linsenform (Lens Shape) - Linsentyp. Es kann folgende Werte haben: rund / oval oder quadratisch / rechteckig</li>
            <li>Linsenfarbe (Lens Color) - Linsen innere Hintergrundfarbe</li>
            <li>Linsenopazität (Lens Opacity) - innere Opazität der Linse</li>
            <li>Linsengröße (Lens Size) - Linsengröße in px</li>
            <li>Linseneinblenden (Lens Fade In) - die Geschwindigkeit des Linsenerscheinung-Effekts</li>
            <li>Linsenausblenden (Lens Fade Out) - die Geschwindigkeit des Linsenverschwinden-Effekts</li>
            <li>Linsenrand (Lens Border) - Linsenrandbreite</li>
            <li>Linsenrandfarbe (Lens Border Color) - Linsenrandfarbe</li>
            <li>Enthält Linsen Zoom (Contain Lens Zoom) - die Beschränkung des Linsenüberlauf aus dem Hauptbildbehälter </li>
        </ul>
    </li>
    <li><strong>Tönung (Tint)</strong> - die Farbwirkung auf dem Gebiet außerhalb der Linse  (verfügbar für Fenster)
        <figure class="img-polaroid"><img class="presta_scr2" src="img/tmproductzoomer-6.png" alt="" /></figure>
        <ul>
            <li>Tönung (Tint) - Effekt an/aus</li>
            <li>Tönungsfarbe (Tint Color) - der Hintergrund des Linsen Außenbereiches </li>
            <li>Opazität der Tönung (Tint Opacity) - die Opazität des Linsen Außenbereiches</li>
            <li>Tönungseinblenden (Tint Fade In) - die Geschwindigkeit des Erscheinungeffekts</li>
            <li>Tönungsaublenden (Tint Fade Out) - die Geschwindigkeit des Verschwindeneffekts</li>
        </ul>
    </li>
</ol>

<div class="alert alert-info">Wenn Sie den Zoomtyp wechseln, werden die erweiterten Optionen geändert , sodass nur die verfügbaren Parameter für den ausgewählten Typ angezeigt werden.</div>
<div class="alert alert-warning">Seien Sie vorsichtig, wenn Sie die erweiterten Einstellungen bearbeiten. Wenn die Einstellungen nicht richtig eingestellt sind, wird der Effekt nicht gut aussehen.</div>