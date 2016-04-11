<h3>TM Mega Menu</h3>

<p>Questo modulo può essere utilizzato per creare menu complessi. Il modulo offre la possibilità di visualizzare un
    elemento senza sotto-menu, un elemento di menu con sotto-menu, e un elemento menu con sotto-menu tramite blocco
    multi-fila e multi-colonna. Il modulo può essere utilizzato in diverse posizioni, ma i contenuti visualizzati
    saranno gli stessi. Posizioni disponibili: in alto (displayTop), a sinistra (displayLeftColumn), a destra
    (displayRightColumn), a piè di pagina (displayFooter). È possibile aggiungere categorie (con relative
    sottocategorie), categorie CMS (con sottocategorie), produttori (elenco o singolo), fornitori (uno o singolo),
    negozi (se è utilizzato il multistore), link a qualunque prodotto, blocco informazioni sul prodotto, link
    personalizzati, senza limiti di quantità, blocchi HTML personalizzati, non limitati in numero, e banner. Vedi di
    seguito per trovare altri dettagli.</p>

<h4>TM Mega Menu Tabs</h4>

<p>Le schede TM Mega Menu sono gli elementi di base in cima al menu.</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs.png" alt="">
</figure>

<p>Per creare una nuova scheda, aprire il modulo TM Mega Menu e fare clic su + nella tabella della lista schede.</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add.png" alt="">
</figure>

<p>Verrà aperta un modulo: compilare i campi richiesti.</p>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Enter tab name</dt>
            <dd>qui si deve inserire il titolo della scheda, obbligatorio da compilare nella lingua predefinita. Se i
                campi delle lingue aggiuntive non sono stati compilati, sarà assegnato il nome della lingua predefinita.
                La compilazione di questo campo è obbligatoria.
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Active</dt>
            <dd>attiva/disattiva scheda.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Link</dt>
            <dd>il link assegnato a questa scheda. Si può immettere un link personalizzato oppure scegliere tra opzioni
                predefinite (categorie, categorie CMS). Lasciando il campo non compilato, il link di questa scheda
                resterà inattivo.
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Sort order</dt>
            <dd>l'ordine in cui disporre le schede.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Specific Class</dt>
            <dd>la classe aggiunta per enfatizzare l'elemento (classe CSS).</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Enter tab badge</dt>
            <dd>va compilato se è attivato il multilingua.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>It is Mega Menu</dt>
            <dd>il sotto-menu della scheda in questione è un Mega Menu.
                <strong>*</strong>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Use simple menu</dt>
            <dd>il sotto-menu della scheda in questione è un menu semplice.
                <strong>**</strong>
            </dd>
        </dl>
    </li>
</ul>
<p>
    <strong>*</strong>
    It is Mega Menu. Selezionando questa opzione, comparirà un modulo per creare un menu complesso (Mega Menu).
</p>

<p>
    <strong>**</strong>
    Use simple menu. Se questa opzione è selezionata, apparirà un modulo per creare un menu semplice. Si tratta di un
    menu che visualizza i contenunti selezionati in una singola colonna. Se il contenuto contiene elementi embedded,
    verrà aggiunta la nuova colonna.
</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form.png" alt="">
</figure>

<p>Il menu complesso è formato da righe e colonne.</p>

<p>La riga ("Row") fa parte della struttura del Mega Menu. Include le colonne del menu. Le righe preesistenti possono
    essere eliminate facendo clic sull'apposito pulsante. La riga verrà rimossa, insieme ai relativi contenuti. Non ci
    sono limiti di quantità per le righe.</p>

<p>La colonna fa parte della struttura del Mega Menu, ed è posta all'interno delle righe. (The Class) La larghezza della
    colonna non può essere inferiore a 2 o superiore a 12. Per fare in modo che i menu abbiano l'aspetto corretto, la
    larghezza totale della colonna non può essere di oltre 12. La larghezza (class) è una colonna di tipo Bootstrap, e
    corrisponde agli stessi valori.</p>

<p>Per creare il menu, fare clic sul pulsante Add row</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-row.png" alt="">
</figure>

<p>Nel modulo che apparirà, fare clic sul pulsante Add column</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-row-col.png" alt="">
</figure>

<p>Apparirà la finestra pop up, nella quale sarà necessario specificare la classe della colonna (da 2 a 12). La colonna
    stessa apparirà laddove sarà necessario specificare le impostazioni necessarie</p>

<p>Qui sarà possibile modificare la classe della colonna, aggiungere classi CSS, e tutti i contenuti necessari dalla
    lista fornita. È possibile aggiungere/rimuovere i contenuti facendo doppio clic sull'elemento desiderato, o
    evidenziando l'elemento stesso e facendo clic sul pulsante apposito.</p>

<p>Il blocco può essere eliminato facendo clic sul pulsante Remove block in fondo al blocco.</p>

<p>Eliminando la riga, verranno eliminate anche le relative colonne.</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-row-col-content.png" alt=""/>
</figure>

<p>Per spostare i contenuti desiderati nel menu selezionato, fare doppio clic o evidenziare il contenuto desiderato e
    premere il pulsante corrispondente.</p>


<p>Le informazioni relative ai menu non attivi vengono salvate quando si passa da un tipo di menu a un altro, ed è
    sempre possibile cambiare il tipo di menu.</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-simple.png" alt="">
</figure>

<h4>TM Mega Menu HTML</h4>

<p>In questa sezione verrà illustrata la creazione di un blocco HMTL personalizzato nel Mega Menu.</p>

<p>Il modulo comprende una tabella che elenca tutti i blocchi disponibili, al quale è possibile aggiungere un nuovo
    blocco facendo clic sul pulsante + in alto a destra sulla tabella.</p>

<h6>Nel modulo che comparirà, compilare i campi necessari:</h6>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Enter HTML item name</dt>
            <dd>il nome del blocco HTML, obbligatorio per la lingua predefinita.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Specific class</dt>
            <dd>classe CSS del blocco.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>HTML content</dt>
            <dd>i contenuti HTML.</dd>
        </dl>
    </li>
</ul>
<p>Il blocco aggiunto apparirà nella lista dei blocchi e nella lista dei contenuti disponibili, quando si creano blocchi
    di menu.</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-html.png" alt="">
</figure>

<h4>TM Mega Menu Links</h4>

<p>In questa sezione sarà illustrata la creazione di link personalizzati nel Mega Menu.</p>

<p>Il modulo comprende una tabella che elenca tutti i link disponibili, ai quali è possibile aggiungerne altri facendo
    clic sul pulsante + in alto a destra sulla tabella.</p>

<h6>Nel modulo che comparirà, compilare i campi necessari:</h6>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Enter Link name</dt>
            <dd>il nome del link, obbligatorio per la lingua predefinita.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Enter Link URL</dt>
            <dd>l'URL del link, obbligatorio per la lingua predefinita.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Specific class</dt>
            <dd>classe CSS del blocco.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Open in new window</dt>
            <dd>per aprire un link in una nuova finestra.</dd>
        </dl>
    </li>
</ul>
<p>Il link aggiunto apparirà sulla lista dei link e nella lista dei contenuti disponibili, quando si creano i blocchi di
    menu.</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-links.png" alt="">
</figure>
<h4>TM Mega Menu Banners</h4>

<p>In questa sezione verrà illustrato in che modo creare dei banner nel Mega Menu.</p>

<p>Il modulo comprende una tabella che elenca tutti i bannner disponibili, ai quali è possibile aggiungerne altri
    facendo clic con il pulsante + in alto a destra sulla tabella.</p>

<h6>Nel modulo che comparirà, compilare i campi necessari:</h6>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Select a file</dt>
            <dd>selezionare un file, obbligatorio per la lingua predefinita..</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Enter Banner name</dt>
            <dd>titolo del banner, obbligatorio per la lingua predefinita.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Enter Link URL</dt>
            <dd>URL del link, obbligatorio per la lingua predefinita.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Specific class</dt>
            <dd>classe CSS del blocco.</dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt>Open in new window</dt>
            <dd>per aprire il link in una nuova finestra.</dd>
        </dl>
    </li>
</ul>
<p>Il banner aggiunto apparirà nella lista dei banner e la lista dei contenuti, durante la creazione dei blocchi.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-banners.png" alt="">
</figure>