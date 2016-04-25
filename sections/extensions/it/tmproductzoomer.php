<h3>TM Product Zoomer</h3>

<p>Questo modulo è una soluzione alternativa per lo zoom immagine prodotto standard sulla pagina singolo prodotto. E' pienamente compatibile con lo standard prodotti aggiuntive delle miniature giostra e gli attributi di prodotto che possono essere cambiati. Esso consente di scegliere tra le tre opzioni disponibili (finestra/lenti/interno) per lo zoom dell'immagine con le impostazioni del plugin avanzate. Il modulo è basato sulla <a href="//igorlino.github.io/elevatezoom-plus/" target="_blank">Elevatezoom Plus</a> plugin.</p>

<h5>L'installazione e la rimozione</h5>
<p>Il modulo è installato e cancellato come qualsiasi altro modulo Prestashop. Dopo il modulo è stato installato l'effetto del prodotto con lo zoom standard che sarà disattivato automaticamente. Dopo aver eliminato l'effetto modulo standard deve essere abilitata manualmente indietro (se necessario) in <strong>Preferenze->Prodotti->Abilita JqZoom invece di Fancybox sulla pagina del prodotto (Preferences->Products->Enable JqZoom instead of Fancybox on the product page)</strong> sezione.</p>
<h5>Configurazione moduli</h5>
<p>Dopo che il modulo è stato installato è possibile configurare nella pagina di configurazione del modulo.</p>
<p>Per impostazione predefinita, la pagina di configurazione mostra <strong>semplificato (simplified)</strong> set di opzioni.</p>
<figure class="img-polaroid">
    <img src="img/tmproductzoomer-1.png" alt=""/>
</figure>
<ol class="index-list">
    <li><strong>Modalità live (Live mode)</strong> - modulo on/off Fancybox</li>
    <li><strong>Fancybox (Fancybox)</strong> - se visualizzare l'immagine ingrandita nel Fancybox al clic.</li>
    <li><strong>Cambia immagine al passaggio del mouse (Change image on hover)</strong> - cambiare l'immagine principale sulla miniatura hover (per default è impostato con il passaggio al clic)</li>
    <li><strong>Responsive (Responsive)</strong> - consente alla funzionalità l'utilizzo adattativo per il plugin e la visualizzazione su dispositivi mobili</li>
    <li><strong>Tipo Zoom (Zoom Type)</strong> - scegliere il tipo di modalità di visualizzazione dell'immagine ingrandita
        <ul>
            <li><strong>finestra (window)</strong> - l'immagine ingrandita mostra accanto a quella principale in uno dei (16) posizioni disponibili</li>
            <li><strong>lente (lens)</strong> - l'immagine viene ingrandita nel contenitore lente in alto</li>
            <li><strong>interno (inner)</strong> - l'immagine viene ingrandita all'interno del contenitore dell'immagine principale, con la piena copertura su di esso</li>
        </ul>
        <div class="alert alert-info">I dispositivi mobili(&lt; 768) avere "lente" ("lens") modalità attiva istantaneamente</div>
    </li>
    <li><strong>Impostazioni avanzate (Extended settings)</strong> - attivare le impostazioni avanzate per gli utenti esperti. È possibile vedere il collegamento al seguente link <a href="//igorlino.github.io/elevatezoom-plus/api.htm" target="_blank"> che è la documentazione con maggiori dettagli</a> vicino ad esso.</li>
</ol>
<p><strong>esteso (extended)</strong> configurazione del modulo</p>
<ol>
    <li><strong>Scroll Zoom (Scroll Zoom)</strong> - zoom modifica del rapporto sul rotolo rotellina del mouse.
        (disponibili per tutti i tipi)</li>
    <li><strong>Cursore (Cursor)</strong> - tipo di cursore sul passaggio del mouse sull'immagine ingrandita. Ci sono le seguenti opzioni disponibili: di default, il cursore, croce. (Disponibile per tutti i tipi)</li>
    <li><strong>impostazioni di zoom (zoom settings)</strong> - (disponibile per tutti i tipi, di 'Scroll Zoom' è abilitato)
        <figure class="img-polaroid"><img src="img/tmproductzoomer-2.png" alt="" /></figure>
        <ul>
            <li>Livello dello zoom - il livello di zoom sulla hover iniziale</li>
            <li>Min Livello Zoom - un livello di zoom minima</li>
            <li>Max Livello Zoom - un livello massimo di zoom</li>
            <li>Scroll Zoom Incremento - incremento sul rotolo di ingrandimento</li>
        </ul>
    </li>
    <li><strong>Facilitare (Easing)</strong> - l'aspetto ingrandita dell'immagine influenzare (disponibile per tutti i tipi)
        <figure class="img-polaroid"><img src="img/tmproductzoomer-3.png" alt="" /></figure>
        <ul>
            <li>Zoom Easing - effetto on/off</li>
            <li>Facilitare Importo - valore di ritardo effetto</li>
        </ul>
    </li>
    <li><strong>Immagine Crossfade (Image Crossfade)</strong> - immagine principale mosso al di fuori dell'area hover (la lente disponibile per la finestra lente)</li>
    <li><strong>impostazioni della finestra immagine ingrandita (magnified image window settings)</strong> - (disponibile per la finestra)
        <figure class="img-polaroid"><img src="img/tmproductzoomer-4.png" alt="" /></figure>
        <ul>
            <li>Zoom finestra Larghezza - larghezza della finestra in px</li>
            <li>Zoom finestra Altezza - l'altezza della finestra in px</li>
            <li>Zoom finestra Offset X - compensato finestra sull'asse X</li>
            <li>Zoom finestra Offset Y - finestra di offset sull'asse Y</li>
            <li>Zoom Posizione finestra - finestra scelta posizione relativa all'immagine principale (le posizioni disponibili sono presentati sull'immagine sotto questo campo)</li>
            <li>Zoom finestra Bgcolor - immagine di sfondo della finestra (per le immagini trasparenti solo)</li>
            <li>Zoom finestra Fade In - l'effetto di rallentare la comparsa della finestra</li>
            <li>Zoom finestra Fade Out - l'effetto di rallentare la finestra scompare</li>
            <li>Dimensione bordo - Finestra larghezza del bordo in px</li>
            <li>Colore bordo - colore bordo della finestra</li>
        </ul>
    </li>
    <li><strong>Lente Zoom (Zoom Lens)</strong> - obiettivo zoom (disponibile per la finestra, lente)
        <figure class="img-polaroid"><img src="img/tmproductzoomer-5.png" alt="" /></figure>
        <ul>
            <li>Obiettivo zoom - on/off</li>
            <li>Dimensione lente - tipo di obiettivo. Esso può assumere i seguenti valori: circolare/arrotondata o squadrata/rettangolare</li>
            <li>Colore di sfondo interno Lente - Lente colori</li>
            <li>Lente Opacità - Lente di fondo interno opacità</li>
            <li>Lente Size - dimensione lente in px</li>
            <li>Lente Fade In - la velocità dell'effetto aspetto lente</li>
            <li>Lente Fade Out - la velocità dell'effetto scomparsa lente</li>
            <li>Lente Bordo - larghezza del bordo della lente</li>
            <li>Lente Colore Bordo - colore del bordo della lente</li>
            <li>Contenere Lente Zoom - la limitazione del troppo pieno dell'obiettivo verso l'esterno del contenitore immagine principale</li>
        </ul>
    </li>
    <li><strong>Tinta (Tint)</strong> - l'effetto ombra sulla superficie esterna della lente (disponibile per finestra)
        <figure class="img-polaroid"><img src="img/tmproductzoomer-6.png" alt="" /></figure>
        <ul>
            <li>Tinta - effetto on/off</li>
            <li>Tinta Colore - la lente esterna area di sfondo</li>
            <li>Tinta Opacità - la lente esterna zona opacità</li>
            <li>Tinta Fade In - l'aspetto influire sulla velocità</li>
            <li>Tint Fade Out - la scomparsa influire sulla velocità</li>
        </ul>
    </li>
</ol>
<div class="alert alert-info">Se si passa il tipo di zoom, impostare le opzioni avanzate verrà modificata di conseguenza per mostrare solo i parametri disponibili per il tipo selezionato.</div>
<div class="alert alert-warning">Fare attenzione quando si modificano le impostazioni estese. Se le impostazioni sono impostate in modo non corretto, l'effetto può essere non di qualità.</div>