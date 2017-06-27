<h3>TM Mega Menu</h3>
<?php if ($project == 'eveprest' ) { ?>
    <div>
        <p style="margin-bottom: 0;">Disponibile in:</p>
        <p style="margin-top: 0;" class="small text-secondary">Fashion, Electronics, Spare Parts, Furniture</p>
    </div>
<?php } ?>
<p>Il modulo è progettato per creare menu complessi. Il modulo fornisce la possibilità di visualizzare un elemento (senza
    Sottomenu), una voce di menu con un sottomenu e una voce di menu con il sottomenu per mezzo di una riga multi-colonna
    bloccare. Il modulo può essere utilizzato in diverse posizioni, ma mostrerà lo stesso contenuto. Posizioni disponibili:
    In alto (displayTop), a sinistra (displayLeftColumn), a destra (displayRightColumn), piè di pagina (displayFooter). Puoi aggiungere
    Categorie (con sottocategorie), categorie CMS (con sottocategorie), produttori (uno o una lista), fornitori
    (Uno o un elenco), memorizza (se viene utilizzato multistore), link a qualsiasi prodotto, blocco informazioni sul prodotto,
    Collegamenti personalizzati (non limitati alla quantità), blocchi HTML personalizzati (non limitati al numero) e banner. Vedi sotto
    per ulteriori dettagli.</p>
<h4>TM Mega Menu Tabs</h4>
<p>Le schede TM Mega Menu sono gli elementi di base che sono la parte superiore del menu.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs.png" alt=""/>
</figure>
<p>Per creare una nuova scheda, aprire il modulo TM Mega Menu e fare clic su '+' nella tabella Elenco schede.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add.png" alt=""/>
</figure>
<h6>Nel modulo che appare, compilare i campi richiesti.</h6>
<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Immettere il nome della scheda</dt>
            <dd>il titolo di tabulazione che è obbligatorio da compilare per la lingua predefinita, se l'aggiunta
                i campi delle lingue non sono riempiti, la scheda prende il nome dalla lingua predefinita.
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Attivo</dt>
            <dd>scheda attiva/inattiva.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Link</dt>
            <dd>un collegamento assegnato a questa scheda. È possibile immettere un collegamento personalizzato o scegliere tra opzioni esistenti
                (Categorie, categorie CMS). Se si lascia vuoto il campo, il collegamento di questa scheda non è attivo.
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Ordinamento</dt>
            <dd>l'ordine delle schede da visualizzare.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Classe Specifica</dt>
            <dd>la classe che viene aggiunta per sottolineare l'elemento (classe CSS).</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Inserisci il badge della scheda</dt>
            <dd>è riempito a seconda delle lingue multi-lingue.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>È Mega Menu</dt>
            <dd>dato sotto-menu della scheda è un menu Mega.
                <strong>*</strong>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Utilizza un menu semplice</dt>
            <dd>dato sotto-menu della scheda è un semplice menu.
                <strong>**</strong>
            </dd>
        </dl>
    </li>
</ul>
<p>
    <strong>*</strong>
    È Mega Menu. Se questa opzione è selezionata, verrà creato un modulo per creare un menu complesso (Mega Menu).
</p>
<p>
    <strong>**</strong>
    Utilizza un menu semplice. Se questa opzione è selezionata, verrà creato un modulo per creare un semplice menu. Questo è un menu che
    Visualizza il contenuto selezionato in una singola colonna. Se il menu ha contenuto incorporato, viene aggiunta la nuova colonna.
</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form.png" alt=""/>
</figure>
<p>Il menu complesso è costituito da righe e colonne in righe.</p>
<p><strong>La Riga fa parte della struttura Mega Menu.</strong> Esso include le colonne del menu. La riga esistente può essere
    rimosso da
    facendo clic sul pulsante appropriato. La riga verrà rimossa con il contenuto che include. La quantità di righe non è
    limitato.</p>
<p><strong>La colonna fa parte della struttura del menu Mega,</strong> che si trova all'interno delle file. (La Classe)
    larghezza della
    la colonna non può essere inferiore a 2 e più di 12. Per rendere corretta la visualizzazione del menu, la colonna totale
    la larghezza non può superare 12. La larghezza (classe) è un tipo di colonna Bootstrap, corrisponde agli stessi valori.</p>
<p>Per creare il menu, fare clic su <strong>'Aggiungi riga'</strong> pulsante.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-row.png" alt=""/>
</figure>
<p>Nella forma apparsa, fai clic su <strong>'Aggiungi colonna'</strong> pulsante.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-row-col.png" alt=""/>
</figure>
<p>Nella finestra popup è necessario specificare la classe di colonna (da 2 a 12). Viene visualizzata la colonna stessa
    Dove è necessario impostare le impostazioni necessarie.</p>
<p>Qui è possibile modificare la classe di colonna, la classe CSS e il contenuto dall'elenco fornito. tu
    Può aggiungere / rimuovere il contenuto facendo doppio clic sull'oggetto, oppure evidenziando gli elementi e facendo clic su
    Pulsante corrispondente.</p>
<p>Il blocco può essere rimosso facendo clic <strong>'Rimuovere il blocco'</strong> nel riquadro del blocco.</p>
<p>Rimuovendo la riga, vengono rimosse anche le colonne incluse.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-row-col-content.png" alt=""/>
</figure>
<p>Per spostare il contenuto disponibile nel menu selezionato, fare doppio clic o evidenziare il contenuto desiderato e
    Premere il pulsante corrispondente.</p>
<p>Le informazioni sul menu non attive vengono salvate mentre si cambia tra i tipi di menu e si può sempre cambiare il tipo di
    menu.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-simple.png" alt=""/>
</figure>
<h4>TM Mega Menu HTML</h4>
<p>In questa sezione spiegheremo come creare un blocco HTML personalizzato nel menu Mega.</p>
<p>Il modulo contiene una tabella che elenca tutti i blocchi disponibili. È inoltre possibile aggiungere un nuovo blocco facendo clic sul pulsante '+'
    In alto a destra del tavolo.</p>
<h6>Nel modulo che appare, compilare i campi richiesti.</h6>
<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Inserisci il nome dell'elemento HTML</dt>
            <dd>Il nome blocco HTML è obbligatorio da compilare per la lingua predefinita.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Specifica classe</dt>
            <dd>blocchi CSS classe.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>HTML contenuto</dt>
            <dd>HTML contenuto.</dd>
        </dl>
    </li>
</ul>
<p>Il blocco aggiunto apparirà nell'elenco dei blocchi, nonché nell'elenco dei contenuti disponibili durante la creazione del menu
    Blocchi.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-html.png" alt=""/>
</figure>
<h4>TM Mega Menu Links</h4>
<p>In questa sezione mostreremo come creare collegamenti personalizzati nel menu Mega.</p>
<p>Il modulo contiene una tabella che elenca tutti i collegamenti disponibili. Puoi anche aggiungere un nuovo link facendo clic sul pulsante '+'
    In alto a destra del tavolo.</p>
<h6>Nel modulo che appare, compilare i campi richiesti.</h6>
<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Immettere il nome del collegamento</dt>
            <dd>nome di collegamento, è obbligatorio da compilare per la lingua predefinita.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Inserisci URL Link</dt>
            <dd>URL di collegamento, è obbligatorio da compilare per la lingua predefinita.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Classe specifica</dt>
            <dd>blocco CSS classe.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Open in new window</dt>
            <dd>open link in a new window.</dd>
        </dl>
    </li>
</ul>
<p>Il link aggiunto apparirà nell'elenco dei collegamenti, così come nell'elenco dei contenuti disponibili durante la creazione del menu
    Blocchi.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-links.png" alt=""/>
</figure>
<h4>TM Mega Menu Banners</h4>
<p>In questa sezione spiegheremo come creare banner nel Mega Menu.</p>
<p>Il modulo contiene una tabella che elenca tutti i banner disponibili. Puoi anche aggiungere un nuovo banner facendo clic sul pulsante '+'
    Nella parte superiore destra della tabella.</p>
<h6>Nel modulo che appare, compilare i campi richiesti.</h6>
<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Seleziona un file</dt>
            <dd>selezionare un file, è obbligatorio compilare per la lingua predefinita.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Inserisci il nome della bandiera</dt>
            <dd>titolo banner, è obbligatorio da compilare per la lingua predefinita.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Inserisci URL Link</dt>
            <dd>URL di collegamento, è obbligatorio da compilare per la lingua predefinita.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Classe specifica</dt>
            <dd>blocco CSS classe.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Apri in una nuova finestra</dt>
            <dd>aprire il collegamento in una nuova finestra.</dd>
        </dl>
    </li>
</ul>
<p>Il banner aggiunto apparirà nell'elenco dei banner, così come nell'elenco dei contenuti disponibili durante la creazione del menu
    Blocchi.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-banners.png" alt=""/>
</figure>