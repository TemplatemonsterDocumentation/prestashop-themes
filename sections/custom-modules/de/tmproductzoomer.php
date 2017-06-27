<h3>TM Product Zoomer</h3>
<?php if ($project == 'eveprest' ) { ?>
    <div>
        <p style="margin-bottom: 0;">Verfügbar für:</p>
        <p style="margin-top: 0;" class="small text-secondary">Mode, Elektronik, Ersatzteile, Möbel, Ein Produkt</p>
    </div>
<?php } ?>
<p> Dieses Modul ist eine Alternative zum Standard-Zoom des Produktbildes auf der Seite Ein Produkt. Es ist voll kompatibel mit zusätzlichen Standard-Karusselle der Vorschaubilder und Änderungen der Produktattribute. Dank diesem Modul können Sie ein von drei verfügbaren Varianten (окно / линза / внутренний) wählen und das Bild mit Hilfe von zusätzlichen Einstellungen des Plugins vergrößern. Das Modul basiert auf dem Plugin <a href="//igorlino.github.io/elevatezoom-plus/" target="_blank">Elevatezoom Plus</a>.</p>
<h4>Wie man das Modul installiert und löscht</h4>
<p> Dieses Modul wird wie ein anderes PrestaShop Modul installiert und gelöscht. Nachdem Sie das Modul installiert haben, wird der Zoomeffekt des Produktes automatisch deaktiviert. Nachdem Sie den Standardeffekt des Moduls gelöscht haben, sollen Sie ihn manuell (wenn es nötig) im Bereich <strong>Präferenzen -> Produkte -> JqZoom anstatt Fancybox auf der Produktseite aktivieren</strong> (Preferences -> Products -> Enable JqZoom instead of Fancybox on the product page) aktivieren.</p>
<h4>Wie man das Modul einstellt</h4>
<p> Nachdem Sie das Modul installiert haben, können Sie seine Einstellungen ändern.</p>
<p>Standardmäßig stellt die Einstellungsseite <strong>den vereinfachten</strong> Satz der Einstellungen dar.</p>
<figure class="img-polaroid">
    <img src="img/tmproductzoomer-1.png" alt=""/>
</figure>
<ul class="index-list">
    <li><strong>Live Modus</strong> (Live mode) – das Modul ist aktiviert/deaktiviert.</li>
    <li><strong>Fancybox</strong> - ein vergrößertes Bild in Fancybox beim Klick anzeigen.</li>
    <li><strong>Bild auf Hover ändern</strong> (Change image on hover) – sobald der Mauszeiger über ein Vorschaubild fährt, wird das Hauptbild (standardmäßig ist der Wert "Beim Klick umschalten" festgelegt) angezeigt.</li>
    <li><strong>Responsive</strong> (Responsive) – Sie können adaptive Funktionalität des Plugins auf mobile Geräte verwenden.</li>
    <li><strong>Typ des Zooms</strong> (Zoom Type) – wählen Sie den Anzeigemodus des vergrößerten Bildes aus        <ul>
            <li><strong>Fenster</strong> (window) - ein vergrößerte Bild wird neben dem Hauptbild in einer von den verfügbaren (16) Position angezeigt </li>
            <li><strong>Linse </strong> (lens) - ein Bild wird in dem Linsencontainer über ihn vergrößert </li>
            <li><strong>Innere</strong> (inner) - ein Bild wird in dem Hauptcontainer des Bildes (es wird vollständig abdeckt) vergrößert.</li>
        </ul>
        <div class="alert alert-info"><span>Für mobile Geräte (&lt; 768) wird sofort der Modus "Linse" aktiviert.</span></div>
    </li>
    <li><strong>Erweiterte Einstellungen</strong> (Extended settings) – erweiterte Einstellungen für erfahrene Nutzer aktivieren. Sie finden den Link zu offiziellen <a href="//igorlino.github.io/elevatezoom-plus/api.htm" target="_blank">Anleitung, um ausführliche Informationen </a>nebem der Option zu erhalten .</li>
</ul>
<h6><strong>Erweiterte Einstellung</strong> des Moduls</h6>
<ul class="index-list">
    <li><strong>Zoom beim Scrollen</strong> (Scroll Zoom) – den Zoom beim Scrollen mit der Maus (verfügbar für alle Typen) ändern.</li>
    <li><strong>Mauszeiger</strong> (Cursor) - der Typ des Mauszeigers, sobald man mit dem Mauszeiger über das vergrößerte Bild fährt. Die folgenden Einstellungen sind verfügbar: standardmäßig, Mauszeiger, Kreuzchen (für alle Typen sind verfügbar).</li>
    <li><strong>Zoom Einstellungen</strong> (Zoom settings) – sie sind für alle Typen verfügbar, wenn 'Zoom beim Scrollen' aktiviert ist.
        <figure class="img-polaroid"><img src="img/tmproductzoomer-2.png" alt="" /></figure>
        <ul class="marked-list">
            <li><strong>Zoom-Ebene</strong>(Zoom Level) – die erste Zoom-Ebene</li>
            <li><strong> Minimale Zoom-Ebene</strong> (Min Zoom Level) – die minimale Zoom-Ebene</li>
            <li><strong> Maximale Zoom-Ebene</strong> (Max Zoom Level) – die maximale Zoom-Ebene </li>
            <li><strong> Zoom beim Scrollen erhöhen </strong> (Scroll Zoom Increment) – das Bild wird beim Scrollen vergrößert</li>
        </ul>
    </li>
    <li><strong>Lockerung</strong> (Easing) – der Darstellungseffekt des vergrößerten Bildes (für alle Typen ist verfügbar).
        <figure class="img-polaroid"><img src="img/tmproductzoomer-3.png" alt="" /></figure>
        <ul class="marked-list">
            <li><strong>Lockerung beim Scrollen </strong> (Zoom Easing) - den Effekt aktivieren/deaktivieren</li>
            <li><strong>Wert der Lockerung</strong> (Easing Amount) - der Wert des Effektes </li>
        </ul>
    </li>
    <li><strong>bildüberblendung</strong> (Image Crossfade) – das Hauptbild ist außer des Führungsbereiches (Linse) verschwommen – es ist verfügbar für Fenster und Linse.</li>
    <li><strong> Fenster Einstellungen des vergrößerten Bildes</strong> (Magnified image window settings) – es ist für Fenster verfügbar.
        <figure class="img-polaroid"><img src="img/tmproductzoomer-4.png" alt="" /></figure>
        <ul class="marked-list">
            <li><strong>Zoom Fensterbreite</strong> (Zoom Window Width) – die Fensterbreite in Pixel</li>
            <li><strong>Zoom Fensterhöhe </strong> (Zoom Window Height) - die Fensterhöhe in Pixel </li>
            <li><strong>Zoom Fenstereinzug auf der X-Achse</strong> (Zoom Window Offset X) – der Fenstereinzug auf der X-Achse</li>
            <li><strong>Zoom Fenstereinzug auf der Y-Achse</strong> (Zoom Window Offset Y) – der Fenstereinzug auf der Y-Achse</li>
            <li><strong>Zoom Fensterposition</strong> (Zoom Window Position) – die Fensterpositon relativ zu dem Hauptbild (verfügbare Positionen können Sie unter diesem Feld ansehen) wählen</li>
            <li><strong>Hintergrundfarbe des ZoomFensters</strong> (Zoom Window Bg Color) – das Hintergrundbild des Fensters (nur für transparente Bilder)</li>
            <li><strong>Zoom-Fenster einblenden</strong> (Zoom Window Fade In) – der Einblendungseffekt des Fensters </li>
            <li><strong>Zoom-Fenster ausblenden</strong> (Zoom Window Fade Out) – der Ausblendungseffekt des Fensters</li>
            <li><strong>Randgröße</strong> (Border Size) – die Randgröße des Fensters in Pixel</li>
            <li><strong>Randfarbe</strong> (Border Color) – die Randgröße des Fensters</li>
        </ul>
    </li>
    <li><strong>Zoom-Linse</strong> (Zoom Lens) – die Zoom Lense (verfügbar für Fenster, Linse).
        <figure class="img-polaroid"><img src="img/tmproductzoomer-5.png" alt="" /></figure>
        <ul class="marked-list">
            <li><strong>Zoom-Linse</strong> - aktivieren/deaktivieren</li>
            <li><strong>Linsenform</strong> (Lens Shape) – der Linsentyp. Diese Option kann die folgenden Werte haben: rund, abgerundet, rechteckig oder quadratisch</li>
            <li><strong>Linsenfarbe</strong> (Lens Color) – die Farbe des inneren Linsenhintergrunds</li>
            <li><strong>Linsentransparenz</strong> (Lens Opacity) – die Transparenz der inneren Linsenfarbe </li>
            <li><strong>Linzengröße</strong> (Lens Size) – die Linzengröße in Pixel</li>
            <li><strong>Linse einblenden</strong> (Lens Fade In) – die Geschwindigkeit des Effektes der Linsen-Erscheinung</li>
            <li><strong>Linse ausblenden</strong> (Lens Fade Out) – die Geschwindigkeit des Effektes der Linsen-Verschwindung</li>
            <li><strong>Linsenrand </strong> (Lens Border) – die Breite des Linsenrands</li>
            <li><strong>Farbe des Linsenrands</strong> (Lens Border Color) – die Farbe des Linsenrand</li>
            <li><strong>Linsen-Zoom beschränken</strong> (Contain Lens Zoom) – die Abdeckung des Hauptcontainers der Linse beschränken</li>
        </ul>
    </li>
    <li><strong>Farbton</strong> (Tint) - der Schatteneffekt auf dem Bereich außer der Linse (verfügbar für Fenster).
        <figure class="img-polaroid"><img src="img/tmproductzoomer-6.png" alt="" /></figure>
        <ul class="marked-list">
            <li><strong>Farbton</strong> (Tint) - den Effekt aktivieren/deaktivieren</li>
            <li><strong>Farbe des Farbtons</strong> (Tint Color) – die Farbe des äußeren Linsenbereiches</li>
            <li><strong>Transparenz des Farbtons </strong> (Tint Opacity) – die Transparenz des äußeren Linsenbereiches </li>
            <li><strong>Farbton einblenden</strong> (Tint Fade In) - die Geschwindigkeit des Einblendungseffektes</li>
            <li><strong>Farbton ausblenden</strong> (Tint Fade Out) – die Geschwindigkeit des Ausblendungseffektes</li>
        </ul>
    </li>
</ul>
<div class="alert alert-info"> Wenn Sie den Zoom-Typ umschalten, wird der Satz der erweiterten Einstellungen auf entsprechende Weise geändert. Dadurch werden nur verfügbare Optionen für den ausgewählten Typ dargestellt.</div>
<div class="alert alert-warning"> Bearbeiten Sie vorsichtig die erweiterten Einstellungen. Wenn Sie Einstellungen inkorrekt festgelegt haben, kann der Effekt auch inkorrekt dargestellt.</div>
