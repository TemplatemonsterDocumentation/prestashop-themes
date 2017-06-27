<h3>TM Look Book</h3>
<?php if ($project == 'eveprest') { ?>
    <div>
        <p style="margin-bottom: 0;">Disponibile in:</p>
        <p style="margin-top: 0;" class="small text-secondary">Moda, Mobili</p>
    </div>
<?php } ?>
<h5>Requisiti:</h5>
<p>Questo modulo permette di creare i lookbook e di combinarli alle collezioni. A loro volta, i quaderni permettono di visualizzare il file
    Prodotti direttamente sul modello. Inoltre, se un prodotto è contrassegnato nel lookbook, il modulo visualizza il link lookbook
    Sulla pagina del prodotto.</p>
<ul class="marked-list">
    <li>PHP 5.4+</li>
    <li>PrestaShop 1.6</li>
</ul>
<h5>Pannello principale TM Look Book</h5>
<p>Nella pagina principale del modulo è possibile eliminare e modificare le collezioni dei moduli.</p>
<figure class="img-polaroid">
    <img src="img/tmlookbook-main-panel.png" alt=""/>
</figure>
<h5>Aggiunta e modifica della raccolta</h5>
<p>Le collezioni permettono di combinare diversi lookbook in una pagina. Per aggiungere una raccolta, segui i passaggi successivi.</p>
<ul class="index-list">
    <li>
        <p>Nella tabella delle collezioni (il pannello principale del modulo) fare clic sul pulsante più (1).</p>
        <figure class="img-polaroid">
            <img src="img/tmlookbook-add-collection.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>Verrà visualizzato un modulo con i campi successivi:</p>
        <ul class="marked-list">
            <li><strong>Stato</strong> - Questa opzione consente di disattivare o abilitare il display di raccolta sullo schermo
                Pagina delle collezioni.
            </li>
            <li><strong>Nome</strong> - il nome della collezione che verrà visualizzata nella pagina delle collezioni.</li>
            <li><strong>Descrizione</strong> - la descrizione della raccolta.</li>
            <li><strong>Immagine</strong> - l'immagine principale della collezione.</li>
            <li><strong>Template</strong> - il modello per i quaderni di questa collezione. Quando si seleziona un
                Modello, si seleziona il modo in cui i quaderni di questa collezione verranno visualizzati nella pagina.
            </li>
        </ul>
    </li>
    <li>
        <p>Dopo aver riempito tutti i campi, premere il pulsante 'Salva' (2).</p>
        <figure class="img-polaroid">
            <img src="img/tmlookbook-add-collection-2.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>La raccolta è stata creata. Puoi modificarla premendo il pulsante 'Modifica' (3), oppure puoi passare a
            Passo successivo e crea un lookbook per la raccolta.</p>
        <figure class="img-polaroid">
            <img src="img/tmlookbook-add-collection-3.png" alt=""/>
        </figure>
    </li>
</ul>
<h5>Creazione e modifica di lookbook</h5>
<ul class="index-list">
    <li>
        <p>Dopo aver creato un lookbook, premi il pulsante "Visualizza" (1) accanto alla raccolta necessaria.</p>
        <figure class="img-polaroid">
            <img src="img/tmlookbook-add-lookbook.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>Nel blocco apparso premere il pulsante '+' (2).</p>
        <figure class="img-polaroid">
            <img src="img/tmlookbook-add-lookbook-2.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>Verrà visualizzato un modulo con le seguenti opzioni:</p>
        <ul class="marked-list">
            <li><strong>Stato</strong> - Lo stato lookbook, l'opzione definisce se il lookbook sarà
                Visualizzata.
            </li>
            <li><strong>Nome</strong> - il nome dell'aspetto.</li>
            <li><strong>Descrizione</strong> - la descrizione dell'aspetto.</li>
            <li><strong>Immagine</strong> - l'immagine principale dello sguardo, qui puoi contrassegnare i prodotti e le descrizioni.
            </li>
        </ul>
    </li>
    <li>
        <p>Dopo aver compilato tutti i campi, premi il pulsante 'Salva & Rimani' (3) per continuare a creare hotspot.</p>
        <figure class="img-polaroid">
            <img src="img/tmlookbook-add-lookbook-3.png" alt=""/>
        </figure>
    </li>
</ul>
<h5>Aggiunta e modifica di hotspot</h5>
<p>Dopo aver salvato il lookbook, è possibile aggiungere gli hotspot.</p>
<ul class="index-list">
    <li>
        <p>Premere l'immagine (nel punto desiderato) (1) nel modulo lookbook.</p>
        <figure class="img-polaroid">
            <img src="img/tmlookbook-add-hotspot.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>Verrà visualizzato un modulo con le seguenti impostazioni:</p>
        <ul class="marked-list">
            <li><strong>Tipo</strong> - Questo è il tipo di punto, ha due valori 'Prodotto' e 'Contenuto'. Il prodotto
                Tipo consente di selezionare un prodotto che sarà collegato al punto e il tipo di contenuto consente di aggiungere
                Contenuto (nome, descrizione, html) al punto.
            </li>
            <li><strong>Prodotto</strong> - Selezionare un prodotto per il punto. Sembra che sia il tipo selezionato
                'Prodotto'.
            </li>
            <li><strong>Nome</strong> - il nome associato al punto. Questo campo è disponibile solo se il tipo
                È selezionato "Contenuto".
            </li>
            <li><strong>Descrizione</strong> - la descrizione del punto o la codifica. Disponibile solo se è il tipo 'Contenuto'
                selezionato.
            </li>
        </ul>
    </li>
    <li>
        <p>Dopo aver selezionato le opzioni necessarie, premere il pulsante 'Salva' (2), verrà creato e visualizzato il hotspot
            Sulla pagina.</p>
        <figure class="img-polaroid">
            <img src="img/tmlookbook-add-hotspot-2.png" alt=""/>
        </figure>
    </li>
</ul>
<h5>Eliminazione di un hotspot</h5>
<ul class="index-list">
    <li>
        <p>Per eliminare un punto, posiziona sopra di esso (1).</p>
        <figure class="img-polaroid">
            <img src="img/tmlookbook-delete-hotspot.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>Vedrai un pulsante con una croce, premere (2).</p>
        <figure class="img-polaroid">
            <img src="img/tmlookbook-delete-hotspot-2.png" alt=""/>
        </figure>
    </li>
    <li><p>Il punto viene eliminato.</p></li>
</ul>
<h5>Cambiare la posizione del hotspot</h5>
<p>Per modificare la posizione del punto, trascinarlo e rilasciarlo nella posizione necessaria.</p>
<h5>Come passare alla pagina delle collezioni?</h5>
<p>Passare alla pagina del modulo principale e premere il pulsante (1), vedrai una pagina con tutte le collezioni. Puoi aggiungere
    I collegamenti ai lookbook a qualsiasi modulo che supporta contenuti personalizzati.</p>
<figure class="img-polaroid">
    <img src="img/tmlookbook-view-collections.png" alt=""/>
</figure>