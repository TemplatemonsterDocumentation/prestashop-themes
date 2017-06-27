<h3>TM 360 View</h3>
<?php if ($project == 'eveprest' ) { ?>
    <div>
        <p style="margin-bottom: 0;">Disponibile in:</p>
        <p style="margin-top: 0;" class="small text-secondary">Uno Prodotto</p>
    </div>
<?php } ?>
<p>Il modulo visualizza le immagini in un effetto 3D e consente agli utenti di ruotarli in 360 gradi. La rotazione può essere avviata automaticamente sul carico di pagina oppure il client può ruotare manualmente l'immagine, trascinandone il pulsante sinistro del mouse.</p>
<p>Inoltre, il modulo può essere utilizzato per aggiungere la panoramica (o più viste panoramiche) alla homepage.</p>
<p>360 view è disponibile anche nella pagina del prodotto.</p>

<h4>Installazione</h4>
<p>Passare ai moduli e alle impostazioni -> Moduli e impostazioni (1) nel pannello di amministrazione e trovare il modulo di visualizzazione TM 360 (2). Quindi fare clic sul pulsante 'Installa' (3).</p>
<figure class="img-polaroid">
    <img src="img/360view-1.png" alt=""/>
</figure>
<h4>Module configuration</h4>
<p>Dopo che il modulo è stato installato correttamente, verrà visualizzata la pagina 'Configura' con le impostazioni predefinite del modulo.</p>
<p>Qui puoi trovare impostazioni per visualizzazione 360 ​​(1) e vista panoramica (2).</p>
<figure class="img-polaroid">
    <img src="img/360view-2.png" alt=""/>
</figure>
<h4>360 view</h4>
<p>Le impostazioni sono descritte sotto lo screenshot. Scegliete le tue necessità e fate clic sul pulsante "Salva" (1).</p>
<figure class="img-polaroid">
    <img src="img/360view-3.png" alt=""/>
</figure>
<ul class="marked-list">
    <li><strong>Abilitazione a casa</strong> - opzione per visualizzare la vista 360 del prodotto su Homepage.</li>
    <li><strong>Seleziona un prodotto</strong>(appare se 'Abilita su Home' è impostata su 'Sì') - scegli un prodotto che dovrebbe essere visualizzato in visualizzazione 360.</li>
    <li><strong>Animare</strong> - opzione per visualizzare il prodotto che ruota automaticamente sul carico della pagina.</li>
    <li><strong>Tempo di struttura</strong>(appare se 'Animate' è impostato su 'Sì') - il periodo di tempo prima che un'immagine nell'insieme venga cambiata in un altro; Deve essere inserito in millisecondi.</li>
</ul>
<h5>Aggiunta/rimozione di immagini</h5>
<ul class="index-list">
    <li>
        <p>Passare al catalogo -> Prodotti nel pannello di amministrazione (1), scegliere il prodotto e fare clic sul pulsante 'Modifica' (2).</p>
        <figure class="img-polaroid">
            <img src="img/360view-4.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>Per aggiungere immagini, utilizzare la scheda 'TM 360 view' (1) nelle impostazioni del prodotto e fare clic sul pulsante 'Aggiungi file' (2).</p>
        <figure class="img-polaroid">
            <img src="img/360view-5.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>Quindi premere 'Carica file' (1).</p>
        <figure class="img-polaroid">
            <img src="img/360view-6.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>Quando i file sono stati caricati con successo, fai clic sul pulsante 'Salva' (1).</p>
        <figure class="img-polaroid">
            <img src="img/360view-7.png" alt=""/>
        </figure>
        <p class="alert alert-warning">Per rendere liscia la rotazione, aggiungere altre immagini e fare una leggera modifica della posizione durante la creazione di foto.</p>
    </li>
    <li>
        <p>Dopo aver aggiunto immagini, la visualizzazione del prodotto 360 verrà visualizzata sull'Homepage *. <br>
            *<small>It will also appear on the product page after the description.</small></p>
    </li>
    <li>
        <p>Per disattivare la visualizzazione 360 ​​nella Homepage, vai a 360 impostazioni di visualizzazione e seleziona l'opzione "Attiva su casa" su 'No'.</p>
    </li>
    <li>
        <p>Per disattivare la visualizzazione 360 ​​nella pagina dei prodotti, aprire la scheda 'TM 360 view' nelle impostazioni del prodotto e rimuovere tutte le immagini.</p>
    </li>
</ul>
<h4>Panorama</h4>
<p>L'utilizzo di questo modulo viene utilizzato anche per aggiungere la vista panoramica alla Homepage.</p>
<p class="alert alert-warning">You can add as much panorama blocks as you need.</p>
<h5>Aggiunta di panorama</h5>
<ul class="index-list">
    <li>
        <p>Per aggiungere un nuovo panorama aprire la pagina di configurazione del modulo e fare clic sul pulsante '+' ('Aggiungi nuovo elemento') (1).</p>
        <figure class="img-polaroid">
            <img src="img/360view-8.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>Vedrai le impostazioni panoramiche descritte di seguito.</p>
        <figure class="img-polaroid">
            <img src="img/360view-9.png" alt=""/>
        </figure>
        <ul class="marked-list">
            <li><strong>Seleziona un file</strong> - scegliere un panorama archiviato; Questo campo è richiesto (almeno per la lingua predefinita).</li>
            <li><strong>Titolo</strong> - inserire un titolo per il panorama; Questo campo è richiesto (almeno per la lingua predefinita).</li>
            <li><strong>Larghezza</strong> - larghezza del panorama; Questo campo è obbligatorio.</li>
            <li><strong>Altezza</strong> - altezza del blocco panoramico; Questo campo è obbligatorio.</li>
            <li><strong>Stato</strong> - abilitare/disabilitare l'elemento panoramico nella pagina iniziale.</li>
            <li><strong>Loop</strong> - inizia a ruotare l'immagine dall'inizio dopo la fine.</li>
            <li><strong>Animare</strong> - opzione per visualizzare il panorama che ruota automaticamente durante il caricamento della pagina.</li>
            <li><strong>Tempo di struttura</strong>(appare se 'Animate' è impostato su 'Sì') - periodo di tempo durante il quale l'immagine panoramica compie un cerchio completo; Dovrebbe essere inserito in millisecondi; Questo campo è obbligatorio.</li>
        </ul>
    </li>
    <li>
        <p>Fai clic sul pulsante "Salva" e l'immagine panoramica comparirà nella pagina iniziale.</p>
    </li>
</ul>
<h5>Rimozione panorama</h5>
<ul class="index-list">
    <li>
        <p>Per rimuovere il panorama - scegliere l'elemento, fare clic sul pulsante freccia giù (1) e quindi fare clic su 'Elimina' (2).</p>
        <figure class="img-polaroid">
            <img src="img/360view-10.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>Confermare la cancellazione.</p>
    </li>
</ul>