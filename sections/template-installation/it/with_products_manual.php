<h3>Installazione manuale del modello con dati di esempio</h3>
<p>Per rendere il tuo negozio PrestaShop simile al demo live di modello, devi installare  <strong>sample data</strong>. Conterrà tutti i prodotti demo, le categorie, i moduli e le impostazioni del negozio.</p>
<p class="alert alert-danger">Non utilizzare i dati di esempio per il tuo sito web in esecuzione! Ciò sostituirà tutti i prodotti del tuo negozio e memorizza le impostazioni.</p>
<p class="alert alert-warning">Assicurati che la tua versione del motore PrestaShop corrisponda alla versione specificata nella scheda "Dettagli tecnici", indicata come "PrestaShop Engine: 1.X.X.X". <br/>
    Inoltre, assicurati che il prefisso delle tabelle del database sia <strong>ps_</strong>. Installare i dati di esempio solo se il tuo motore PrestaShop corrisponde alla versione specificata. </p>
<h4>Caricamento dei file di modello</h4>
<p>Per caricare il modello sul server:</p>
<ol class="index-list">
    <li>Aprire il pacchetto modello.</li>
    <li>Poi andate alla <strong>/theme/manual_install/</strong> cartella.</li>
    <li>Caricare <strong>/img/</strong>, <strong>/modules/</strong> e <strong>/themes/</strong> cartelle nella directory principale di PrestaShop.</li>
</ol>
<p class="alert alert-info">Puoi controllare il tutorial video dettagliato <a target="_blank" href="/help/how-upload-files-server-2.html">come caricare i file sul server utilizzando il gestore di FTP</a> e <a href="/help/how-to-upload-files-to-a-server-using-cpanel-webhost-manager-whm.html" target="_blank">come caricare file in un server utilizzando cPanel (WebHost Manager, WHM)</a>.</p>
<h4>Installazione dei dati di esempio</h4>
<p>I dati di esempio sono forniti come file .SQL. Si trova nella <strong>theme/manual_install/</strong> del pacchetto modello e viene chiamato <strong>dump.sql</strong>.</p>
<p>Il file dump.sql può essere installato utilizzando lo strumento phpMyAdmin o un altro strumento di gestione del database nel pannello di controllo di hosting. Questo tutorial dettagliato su <a target="_blank" href="/help/phpmyadmin-how-to-import-sample-data-dump-file-phpmyadmin.html">come installare i file SQL</a> posso aiutarti.</p>
<p class="alert alert-warning">Prima di procedere, si prega di eseguire il backup del database. Puoi controllare il tutorial video dettagliato <a target="_blank" href="/help/phpmyadmin-how-to-backup-a-database.html">come eseguire il backup di un database</a>.</p>
<p class="alert alert-danger">Assicurati che la tua versione del motore PrestaShop corrisponda ai requisiti del modello. In caso contrario, il database sarà danneggiato.</p>
<p>Una volta completata l'installazione del file dump.sql, sarà necessario attivare il modello.</p>
<p>Dal pannello di amministrazione di PrestaShop, andare a <strong>Preferenze > Temi</strong>, scegli il tuo modello nel file <strong>Temi</strong> sezione e fare clic su <strong>Salva</strong>.</p>