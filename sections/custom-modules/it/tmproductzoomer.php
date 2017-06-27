<h3>TM Prodotto Zoomer</h3>
<?php if ($project == 'eveprest' ) { ?>
    <div>
        <p style="margin-bottom: 0;">Disponibile in:</p>
        <p style="margin-top: 0;" class="small text-secondary">Moda, Elettronica, Ricambi, Mobilio, Un Prodotto</p>
    </div>
<?php } ?>
<p>Questo modulo è una soluzione alternativa per lo zoom standard del prodotto immagine sulla singola pagina del prodotto. È completamente compatibile con le norme standard aggiuntive di prodotti carosello e modifiche degli attributi del prodotto. Consente di scegliere tra le tre opzioni disponibili (finestra / lente / interno) per lo zoom dell'immagine con le impostazioni avanzate del plugin. Il modulo si basa sul <a href="//igorlino.github.io/elevatezoom-plus/" target="_blank">Elevatezoom Plus</a> plugin.</p>
<h4>Installazione e rimozione</h4>
<p>Il modulo viene installato e cancellato come qualsiasi altro modulo Prestashop. Dopo che il modulo è stato installato, l'effetto standard dello zoom del prodotto verrà automaticamente disattivato. Dopo aver eliminato l'effetto standard del modulo dovrebbero essere abilitati indietro manualmente (se necessario) nel file <strong>Preferenze -> Prodotti -> Abilita JqZoom invece che Fancybox nella pagina del prodotto</strong> sezione.</p>
<h4>Configurazione del modulo</h4>
<p>Dopo aver installato il modulo è possibile configurarlo sulla pagina di configurazione del modulo.</p>
<p>Per impostazione predefinita, la pagina di configurazione visualizza il file <strong>semplificato</strong> set di opzioni.</p>
<figure class="img-polaroid">
    <img src="img/tmproductzoomer-1.png" alt=""/>
</figure>
<ul class="index-list">
    <li><strong>Live modo</strong> - il modulo è on/off.</li>
    <li><strong>Fancybox</strong> - se visualizzare l'immagine ingrandita nella casella Fancybox.</li>
    <li><strong>Cambiare l'immagine in hover</strong> - commutare l'immagine principale sulla hover della miniatura (per impostazione predefinita è impostata per attivare il clic).</li>
    <li><strong>Responsive</strong> - consente di utilizzare funzionalità adattive per la visualizzazione plugin sui dispositivi mobili.</li>
    <li><strong>Zoom Tipo</strong> - scegliere il tipo di modalità di visualizzazione dell'immagine ingrandita
        <ul>
            <li><strong>window</strong> - l'immagine ingrandita viene visualizzata accanto all'immagine principale in una delle posizioni disponibili (16)</li>
            <li><strong>lente</strong> - l'immagine viene ingrandita nel contenitore dell'obiettivo, sopra di esso</li>
            <li><strong>inner</strong> - l'immagine viene ingrandita all'interno del contenitore principale dell'immagine, coprendo completamente l'immagine.</li>
        </ul>
        <div class="alert alert-info"><span>I dispositivi mobili (&lt; 768) Hanno attivato la modalità "lente" istantaneamente.</span></div>
    </li>
    <li><strong>Impostazioni estese</strong> - consente di impostare le impostazioni avanzate per gli utenti esperti. Puoi vedere il link al funzionario<a href="//igorlino.github.io/elevatezoom-plus/api.htm" target="_blank"> documentazione per ulteriori dettagli</a> vicino a esso.</li>
</ul>
<h6><strong>Esteso</strong> configurazione del modulo</h6>
<ul class="index-list">
    <li><strong>Scorri Zoom</strong> - Cambio di zoom sulla rotella a mousewheel
        (Disponibile per tutti i tipi).</li>
    <li><strong>Cursore</strong> - tipo cursore sull'immagine ingrandita dell'immagine. Sono disponibili le seguenti opzioni: predefinito, cursore, crosshair (disponibile per tutti i tipi).</li>
    <li><strong>Zoom impostazioni</strong> - disponibile per tutti i tipi, se è abilitato lo 'Zoom scorrimento'.
        <figure class="img-polaroid"><img src="img/tmproductzoomer-2.png" alt="" /></figure>
        <ul class="marked-list">
            <li><strong>Zoom Livello</strong> - il livello di zoom sul passaggio iniziale</li>
            <li><strong>Min Zoom Livello</strong> - un livello di zoom minimo</li>
            <li><strong>Max Zoom Livello</strong> - un livello di zoom massimo</li>
            <li><strong>Scroll Zoom Incremento</strong> - incremento di scorrimento ingrandente</li>
        </ul>
    </li>
    <li><strong>Facilità</strong> - l'effetto di ingrandimento dell'immagine (disponibile per tutti i tipi).
        <figure class="img-polaroid"><img src="img/tmproductzoomer-3.png" alt="" /></figure>
        <ul class="marked-list">
            <li><strong>Zoom Facilità</strong> - effetto on/off</li>
            <li><strong>Easing Quantità</strong> - effetto delay valore</li>
        </ul>
    </li>
    <li><strong>Immagine Crossfade</strong> - sfocatura dell'immagine principale fuori dall'area di hover (l'obiettivo) - disponibile per finestra, obiettivo.</li>
    <li><strong>Impostazioni di finestra dell'immagine ingrandita</strong> - disponibile per la finestra.
        <figure class="img-polaroid"><img src="img/tmproductzoomer-4.png" alt="" /></figure>
        <ul class="marked-list">
            <li><strong>Zoom Window Larghezza</strong> - larghezza della finestra in px</li>
            <li><strong>Zoom Window Altezza</strong> - altezza della finestra in px</li>
            <li><strong>Zoom Window Offset X</strong> - offset della finestra sull'asse X</li>
            <li><strong>Zoom Window Offset Y</strong> - offset della finestra sull'asse Y</li>
            <li><strong>Zoom Window Posizione</strong> - scelta della posizione della finestra relativamente all'immagine principale (le posizioni disponibili sono presentate nell'immagine sotto questo campo)</li>
            <li><strong>Zoom Window Bg Colore</strong> - window immagine finestra (solo per immagini trasparenti)</li>
            <li><strong>Zoom Window Fade In</strong> - l'effetto di rallentare l'aspetto della finestra</li>
            <li><strong>Zoom Window Fade Out</strong> - l'effetto di rallentare la scomparsa della finestra</li>
            <li><strong>Border Size</strong> - larghezza del bordo della finestra in px</li>
            <li><strong>Border Colore</strong> - colore bordo finestra</li>
        </ul>
    </li>
    <li><strong>Zoom Lente</strong> - zoom Lente (disponibile per finestra, Lente).
        <figure class="img-polaroid"><img src="img/tmproductzoomer-5.png" alt="" /></figure>
        <ul class="marked-list">
            <li><strong>Zoom Lente</strong> - on/off</li>
            <li><strong>Lente Shape</strong> - Tipo Lente. Può assumere i seguenti valori: circolare/arrotondata o quadrata/rettangolare</li>
            <li><strong>Lente Colore</strong> - Lente colore sfondo interno</li>
            <li><strong>Lente Opacità</strong> - Opacità dell'intensità interna di Lente</li>
            <li><strong>Lente Size</strong> - Dimensione Lente in px</li>
            <li><strong>Lente Fade In</strong> - la velocità dell'effetto aspetto Lente</li>
            <li><strong>Lente Fade Out</strong> - la velocità dell'effetto sparizione di Lente</li>
            <li><strong>Lente Bordo</strong> - lente bordo larghezza</li>
            <li><strong>Lente Bordo Colore</strong> - lente bordo colore</li>
            <li><strong>Contain Lente Zoom</strong> - la limitazione del Lente scorra verso l'esterno il contenitore principale dell'immagine</li>
        </ul>
    </li>
    <li><strong>Tinta</strong> - l'effetto dell'ombra sulla zona fuori dal Lente (disponibile per la finestra).
        <figure class="img-polaroid"><img src="img/tmproductzoomer-6.png" alt="" /></figure>
        <ul class="marked-list">
            <li><strong>Tinta</strong> - effetto on/off</li>
            <li><strong>Tinta Colore</strong> - lo sfondo dell'area esterna Lente</li>
            <li><strong>Tinta Opacità</strong> - l'opacità dell'area esterna Lente</li>
            <li><strong>Tinta Fade In</strong> - la velocità di effetto dell'aspetto</li>
            <li><strong>Tinta Fade Out</strong> - la velocità di sparizione</li>
        </ul>
    </li>
</ul>
<div class="alert alert-info">Se si passa al tipo di zoom, le opzioni avanzate vengono modificate di conseguenza per mostrare solo i parametri disponibili per il tipo selezionato.</div>
<div class="alert alert-warning">Fare attenzione quando si modifica le impostazioni estese. Se le impostazioni sono impostate in modo non corretto, l'effetto può essere brutto.</div>