<h3>Installazione manuale del template con dati campione</h3>
<p class="alert alert-info custom">Se non vuoi spendere il tempo per l'installazione del modello, non esitare a
    contattarci <span class="label label-warning opener" onclick="showChat()">ordina</span> servizio di installaione
    utilizzando il nostro live-chat.</p>
<p>Dopo aver installato i
    <strong>dati campione,</strong> il tuo negozio PrestaShop avrà lo stesso aspetto del demo live. Conterrà tutti i
    prodotti dimostrativi, le categorie, i moduli, le impostazioni dello store, ecc.
</p>

<p class="alert alert-danger">Attenzione a non utilizzare i dati campioni per il tuo negozio già esistente! Così
    facendo sostituiresti tutti i prodotti e le impostazioni del tuo negozio.</p>

<p class="alert alert-warning">Assicurati che la tua versione di Prestashop corrisponda alla versione specificata
    nella scheda Technical Details, indicata come PrestaShop Engine: 1.X.X.X. Verifica anche che il prefisso del tuo
    database sia
    <strong>ps_</strong>. Installa i dati campione solo se il tuo motore PrestaShop corrisponde alla versione
    specificata.
</p>

<h4>Caricare i file del template</h4>

<p>Per caricare il template sul tuo server:</p>

<ol class="index-list">
    <li>Apri il pacchetto del template.</li>

    <li>Vai sulla cartella <strong>/theme/manual_install/</strong>.</li>

    <li>Carica le cartelle <strong>/img/</strong>, <strong>/modules/</strong> e
        <strong>/themes/</strong> sulla directory root di PrestaShop.
    </li>
</ol>
<p class="alert alert-info">Qui puoi seguire delle guide video dettagliate su
    <a target="_blank" href="/help/how-upload-files-server-2.html">come caricare i file sul server usando gestori
        FTP</a>
    e
    <a href="/help/how-to-upload-files-to-a-server-using-cpanel-webhost-manager-whm.html" target="_blank">come
        caricare i file sul server usando cPanel (WebHost Manager, WHM)</a>
    .
</p>

<h4>Installare i dati campione</h4>

<p>I dati campione vengono forniti in forma di file .SQL. Il file si trova su
    <strong>theme/manual_install/</strong> nel pacchetto template e si chiama <strong>dump.sql</strong>.</p>

<p>Il file dump.sql può essere installato utilizzando lo strumento phpMyAdmin o altri stumenti di gestione database
    presenti nel pannello di controllo del tuo servizio hosting. Questa guida approfondita su
    <a target="_blank" href="/help/phpmyadmin-how-to-import-sample-data-dump-file-phpmyadmin.html">come installare
        file SQL</a>
    potrà esserti utile.
</p>

<p class="alert alert-warning">Prima di procedere fai il back up del tuo database. Qui puoi vedere un video con
    istruzioni dettagliate su
    <a target="_blank" href="/help/phpmyadmin-how-to-backup-a-database.html">come fare il back up per un
        database</a>
    .
</p>


<p class="alert alert-danger">Verifica che la tua versione del motore PrestaShop corrisponda ai requisiti del
    template. Altrimenti il database potrebbe essere danneggiato.</p>

<p>Una volta terminata l'installazione del file dump.sql dovrai attivare il template.</p>

<p>Nel pannello di amministrazione di PrestaShop, vai su <strong>Preferences >
        Themes</strong>, seleziona il tuo template nella sezione <strong>Themes</strong> e clicca su
    <strong>Save</strong>.</p>

<h4>Aggiungere lingue al negozio online. </h4>

<p>Dopo aver installato il template multilingua, sarai in grado di aggiungere tutte le lingue incluse (inglese,
    francese, spagnolo, tedesco, russo) sulla piattaforma del negozio online. Si può fare così: </p>

<p>Vai su<strong> 'Localization > Translations'</strong> nel pannello di amministrazione, trova
    <strong>'ADD/UPDATE A LANGUAGE'</strong> e aggiungi le lingue che desideri selezionandole dal menù a tendina
    <small>(1)</small>
    e poi cliccando su <strong>'Add or update a language'</strong>
    <small>(2)</small>
    .
</p>
<figure class="img-polaroid">
    <img alt="" src="img/01-language-update.png"/>
</figure>

<p>Se non vuoi aggiungere altre lingue, puoi eliminarle
    <small>(2)</small>
    oppure disabilitarle
    <small>(1)</small>
    sul menù <strong>'Localization > Languages'</strong>.
</p>
<figure class="img-polaroid">
    <img alt="" src="img/02-language-update.png"/>
</figure>