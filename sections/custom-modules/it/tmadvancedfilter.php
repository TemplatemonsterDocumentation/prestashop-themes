<h3>TM Advanced Filter</h3>
<?php if ($project == 'eveprest' ) { ?>
    <div>
        <p style="margin-bottom: 0;">Disponibile in:</p>
        <p style="margin-top: 0;" class="small text-secondary">Spare Parts</p>
    </div>
<?php } ?>
<h4>Introduzione</h4>
<p>Il modulo TM Advanced Filter offre l'opportunità di implementare una rapida ricerca del prodotto necessario in base alla chiave
    Caratteristiche. Permette di creare filtri con il numero illimitato di criteri di ricerca disponibili nel negozio
    Per impostazione predefinita o vengono creati, quando si aggiungono i prodotti. I criteri di filtro possono essere i seguenti: livelli di categorie (da
    Nidificazione), produttori, fornitori, attributi, funzionalità e altro ancora. Anche il modulo dispone delle seguenti caratteristiche:
    Creando filtri collegati, in cui i criteri necessari diventano disponibili solo dopo aver selezionato il parametro principale
    (Il livello di nidificazione è illimitato); Selezionando la griglia dei criteri di filtro per il filtro della pagina superiore.
    Puoi selezionare il tipo di campo del filtro dal disponibile, specificare il filtro padre, aggiungere il suo nome, l'etichetta e
    descrizione. Tutto è facilmente impostato e modificato nel pannello di amministrazione facile da usare.
    Per la migliore velocità, il modulo utilizza l'algoritmo di indicizzazione dei prodotti per i criteri impostati. Può essere facilmente e
    Rapidamente inserito in un negozio Prestashop di qualsiasi tipo.</p>
<h4>Installazione e cancellazione del modulo</h4>
<h6>Il modulo viene installato e cancellato come qualsiasi altro modulo PrestaShop.</h6>
<p class="alert alert-info"><span>Dopo aver eliminato o reinstallato il modulo, tutte le impostazioni del modulo e filtri verranno eliminati.</span></p>
<h4>Configurazione/modifica del filtro</h4>
<p>Dopo l'installazione del modulo, è possibile impostarla nella pagina di configurazione del modulo. Per impostazione predefinita, verranno visualizzate le schede
    Tipi di filtri disponibili. Per iniziare a creare un filtro, selezionare una scheda (1) e premere il pulsante 'Crea filtro' (2).</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-1.png" alt=""/></figure>
<p>Nella finestra del filtro apparso compilare tutti i campi necessari.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-2.png" alt=""/></figure>
<ul class="marked-list">
    <li><strong>Nome</strong> - il nome del filtro. Sarà visualizzato sul frontend del titolo del blocco filtro;
    </li>
    <li><strong>Descrizione</strong> - la descrizione del filtro. Sarà visualizzato sul frontend vicino al filtro
        blocco titolo;
    </li>
    <li><strong>Mostra contatore</strong> - consente di visualizzare il numero di prodotti disponibili dopo la selezione
        parametro attuale. Il numero verrà visualizzato accanto al criterio di ricerca (tra parentesi);
    </li>
    <li><strong>Mostra i filtri selezionati</strong> - consente di visualizzare l'elenco dei criteri di ricerca selezionati con il pulsante
        Abilità di deselezionare nessuna di esse;
    </li>
    <li><strong>Mostra il tipo di layout del filtro</strong> - Selezionare la griglia del filtro (disponibile solo per il Top
        Filtro);
    </li>
</ul>
<p class="alert alert-info"><span>Si prega di notare che non ci sono campi obbligatori. Se lasciate tutti i campi vuoti, verrà creato un filtro a colonna senza descrizione e titolo.</span></p>
<h5>Modifica del filtro</h5>
<p>Per modificare le impostazioni di descrizione e filtro, premere il pulsante 'Ruota a scorrimento' nel menu del filtro.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-3.png" alt=""/></figure>
<p>Nella modalità di modifica, il modulo guarda e funziona come nella modalità di impostazione.</p>
<p class="alert alert-info"><span>La selezione della griglia filtrante è disponibile solo per 'Filtro superiore'.</span></p>
<p class="alert alert-info"><span>Quando si cambia la griglia del filtro, tutti gli elementi saranno automaticamente trasferiti alla prima colonna mantenendo l'ordine di nidificazione e visualizzazione (in base al principio: tutti gli elementi della colonna precedente con l'ordine di visualizzazione mantenuto all'interno).</span></p>
<h5>Eliminazione del filtro</h5>
<p>Per modificare le impostazioni di filtro o filtro, premere il tasto 'Cross' nel menu del filtro</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-31.png" alt=""/></figure>
<p>e confermare l'eliminazione del filtro.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-4.png" alt=""/></figure>
<div class="box-notification">
    <span>Dopo aver eliminato un filtro, tutti i dati verranno persi definitivamente.</span>
</div>
<h5>Indice di filtro</h5>
<p><strong>Indexazione</strong> - Il processo di creazione di tabelle uniche con i dati necessari per il filtro,
    che viene creato per i criteri specifici del filtro. Permettono di accelerare in modo drastico il lavoro di filtraggio sul
    fine frontale.</p>
<p>Il pulsante corrispondente nel menu filtro viene evidenziato in rosso. Se il pulsante non è evidenziato, il filtro
    Non serve l'indicizzazione.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-5.png" alt=""/></figure>
<p class="alert alert-info"><span>Il processo di ri-indicizzazione può richiedere un certo tempo, a seconda del numero di prodotti presenti nel negozio e dei criteri di filtro selezionati.</span></p>
<p class="alert alert-info"><span>Se il filtro richiede una nuova indicizzazione, non verrà visualizzato sul frontend.</span></p>
<h5>Creazione/modifica degli elementi filtranti (criteri)</h5>
<p>Per aggiungere un elemento al filtro, selezionarlo nel pannello degli elementi disponibili (a sinistra) e trascinarlo sullo schermo
    l'area disponibile della griglia del filtro (accenderà dopo essere stato selezionato. Nell'esempio, la griglia ha 2
    Colonne).</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-6.png" alt=""/></figure>
<p>Nell'area evidenziata selezionare la colonna e la posizione del nuovo elemento e rilasciare l'elemento.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-7.png" alt=""/></figure>
<p>Nella finestra di creazione elemento apparente, fornire tutti i dati necessari:</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-8.png" alt=""/></figure>
<ul class="marked-list">
    <li><strong>Nome</strong> - il nome dell'elemento filtrante sul frontend. Non verrà visualizzato se si lascia il pulsante
        campo vuoto.
    </li>
    <li><strong>Etichetta</strong> - L'etichetta dell'elemento filtrante sul frontend. Non verrà visualizzato se si esce
        il campo vuoto.
    </li>
    <li><strong>Descrizione</strong> - la descrizione dell'elemento filtrante sul frontend. Non verrà visualizzato se tu
        lasciare vuoto il campo.
    </li>
    <li><strong>Filtro genitore</strong> - l'elemento genitore del filtro, dopo aver selezionato quale sarà questo elemento
        a disposizione. L'elemento sarà sempre disponibile se il campo è lasciato vuoto.
    </li>
    <li><strong>Tipo di campo di filtro</strong> - il modo in cui l'elemento verrà visualizzato sul frontend. I seguenti tipi
        sono disponibili:
        <ul class="marked-list">
            <li>radio</li>
            <li>selezionare</li>
            <li>checkbox</li>
            <li>range-select (solo per il tipo di campo 'prezzo')</li>
            <li>intervallo di input (solo per il tipo di campo 'prezzo')</li>
        </ul>
    </li>
</ul>
<p class="alert alert-info"><span>È possibile modificare tutti i dati e l'elemento principale nella modalità di modifica dei filtri.</span></p>
<p class="alert alert-info"><span>Dopo aver modificato l'elemento, il filtro deve essere nuovamente indicizzato, indicato dal pulsante nel menu filtro. Non andate a reindirizzare il filtro dopo aver modificato ogni elemento, puoi farlo dopo aver apportato modifiche a tutti gli elementi necessari, in modo da risparmiare tempo.</span></p>
<p>Se c'è un albero di filtri connessi, puoi aggiungere il nuovo elemento come relativo a questa struttura.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-10.png" alt=""/></figure>
<h5>Modifica dell'elemento filtro</h5>
<p>Per modificare un elemento filtrante, premere il pulsante 'Ruota a scorrimento' (1) nell'angolo superiore destro del filtro.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-9.png" alt=""/></figure>
<h5>Ordinamento (ordine di visualizzazione degli elementi filtranti)</h5>
<p>Per impostazione predefinita, i nuovi elementi vengono visualizzati dopo l'elemento nell'ordine in cui li hai aggiunti. Se il filtro viene aggiunto
    all'albero, verrà visualizzato dopo gli elementi esistenti nell'albero.</p>
<p>Per spostare gli elementi all'interno del filtro, selezionare l'elemento necessario e trascinarlo nella posizione desiderata. È possibile trascinare
    elementi in una colonna, così come ad altre colonne di griglia. È inoltre possibile modificare l'ordinamento all'interno dell'albero, oppure spostarsi
    l'intero albero in una volta.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-11.png" alt=""/></figure>
<p>Dopo aver spostato l'elemento da una colonna all'altra, l'ordine di visualizzazione cambia automaticamente in tutte le colonne.</p>
<h5>Eliminazione dell'elemento filtro</h5>
<p>È possibile eliminare un elemento filtrante in due modi:</p>
<ul class="index-list">
    <li><p>trascinate l'elemento nella colonna degli elementi disponibili;</p>
        <figure class="img-polaroid"><img src="img/tmadvancedfilter-12.png" alt=""/></figure>
    </li>
    <li><p>o premere il tasto 'Cross' nell'angolo in alto a destra dell'elemento necessario.</p>
        <figure class="img-polaroid"><img src="img/tmadvancedfilter-9.png" alt=""/></figure>
    </li>
</ul>
<p>Indipendentemente dal metodo scelto, vedrai una finestra di cancellazione della conferma.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-13.png" alt=""/></figure></li>
<p class="alert alert-info"><span>Dopo aver eliminato un filtro con elementi nidificati, tutti gli elementi nidificati verranno eliminati.</span></p>
<p class="alert alert-info"><span>Dopo aver eliminato un elemento, il filtro deve essere nuovamente indicizzato, quello indicato dal pulsante nel menu del filtro. Non andate a reindirizzare il filtro dopo aver modificato ogni elemento, puoi farlo dopo aver apportato modifiche a tutti gli elementi necessari, in modo da risparmiare tempo.</span></p>
<h5>"Smart" reindexation</h5>
<p>Il modulo fornisce la reindeksazione automatica (intelligente) dopo aver apportato modifiche ai prodotti o dopo alcuni altri
    Cambiamenti cruciali (produttore, attributo, ecc.). I campi della tabella verranno reindexizzati, se questi cambiamenti hanno influenzato la funzione
    Funzionamento del filtro.</p>
<p class="alert alert-info"><span>Se, dopo aver apportato modifiche, il filtro non li ha portati automaticamente, inserisci la pagina delle impostazioni dei filtri e reindisca manualmente.</span></p>
<p class="alert alert-info"><span>Il filtro non verrà reindeksed automaticamente dopo l'aggiunta di valuta, ecco perché dovrebbe essere reindexed manualmente.</span></p>
<h4>FAQ</h4>
<div class="responsive-tabs" data-type="accordion">
    <ul class="resp-tabs-list">
        <li>Ho creato un filtro, ma non lo vedo sul frontend.</li>
        <li>Ho aggiunto il nome e la descrizione del filtro, ma non sono visualizzati sul frontend.</li>
        <li>Ho aggiunto elementi al filtro, ma ho smesso di visualizzare sul frontend.</li>
        <li>Voglio che l'elemento sia disponibile solo dopo che è stato selezionato un altro elemento.</li>
        <li>Voglio scambiare elementi.</li>
        <li>Desidero eliminare un elemento principale, ma desidero mantenere tutti gli elementi nidificati. Come raggiungere
            Questo?
        </li>
        <li>Voglio cambiare la griglia del filtro, ma non voglio creare nuovamente il filtro. Cosa posso fare?</li>
        <li>Come creare un filtro completamente nuovo, se c'è già un filtro per questa posizione?</li>
        <li>Il filtro ha smesso di visualizzare sul frontend.</li>
        <li>Perché non tutti gli elementi sono attivi sul frontend?</li>
    </ul>
    <div class="resp-tabs-container">
        <div>Il filtro non verrà visualizzato, se non ci sono elementi in esso, o se non è stato reindexed.<br>
            Assicurarsi che ci siano elementi nel filtro e che siano stati reindexizzati.
        </div>
        <div>Forse, hai aggiunto dati non per tutte le lingue. Non dimenticate che il modulo è multilingue e compilare
            I dati per ciascuna lingua separatamente.
        </div>
        <div>Assicurarsi di reindirizzare il filtro dopo aver apportato modifiche.</div>
        <div>Selezionare l'elemento, dopo aver selezionato quale elemento desiderato dovrebbe essere disponibile e impostarlo come
            Elemento genitore.
        </div>
        <div>Basta trascinare l'elemento nel luogo, dove si desidera individuarlo, prenderà automaticamente la nuova
            Posizione e ciò non influisce sulla funzionalità del filtro.
        </div>
        <div>Nel menu per la modifica del primo elemento nidificato, scartare la connessione con l'elemento principale che si desidera
            Vuoi eliminare e quindi eliminare l'elemento principale. In questo caso, tutti gli elementi nidificati non verranno eliminati.
        </div>
        <div>Entra nel menu di modifica e seleziona una nuova griglia per il filtro, quindi salva le modifiche.
            Tutti gli elementi filtranti verranno visualizzati nella prima colonna della nuova griglia, quindi puoi spostarli sullo schermo
            Posizioni necessarie.
        </div>
        <div>Per creare un nuovo filtro, eliminare l'uscita.</div>
        <div>Assicurarsi che il filtro non necessiti di indicizzazione.</div>
        <div>Verifica se l'elemento non è un figlio all'elemento attualmente non attivo. Assicurati che ci siano
            Prodotti che soddisfino i criteri specificati.
        </div>
    </div>
</div>