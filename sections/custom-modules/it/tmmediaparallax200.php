<h3>TM Media Parallax 2.0.0</h3>
<?php if ($project == 'eveprest' ) { ?>
    <div>
        <p style="margin-bottom: 0;">A disposizione in:</p>
        <p style="margin-top: 0;" class="small text-secondary">Moda, Elettronica, Ricambi, Mobilio, Un Prodotto</p>
    </div>
<?php } ?>
<p class="alert alert-warning">
    Se la versione 1.n di questo modulo è installata nel motore di prestashop, non si suggerisce di aggiornarlo con quello corrente. Innanzitutto è necessario rimuovere la vecchia versione del modulo per eseguire senza errori.
</p>
<p>Questo modulo è stato progettato per consentire l'aggiunta dell'effetto parallasse agli elementi DOM della pagina. Permette di creare una parallasse multistrato. Fornisce inoltre la possibilità di aggiungere un video di sfondo personalizzato (è possibile caricarlo dal computer al server) o aggiungere un video di YouTube.</p>
<h4>TM Media Parallax Main Panel</h4>
<p>Pannello dei moduli principali che consente di aggiungere, modificare o rimuovere gli elementi di parallasse.</p>
<figure class="img-polaroid">
    <img src="img/main-panel.jpg" alt="" />
</figure>
<h4>Creazione di un nuovo elemento parallasse</h4>
<p>Per creare un nuovo elemento parallasse, premere l'icona "plus" (1) nell'angolo in alto a destra del pannello principale.</p>
<figure class="img-polaroid">
    <img src="img/main-panel-add-item.jpg" alt="" />
</figure>
<p>Quindi vedrai il seguente modulo.</p>
<figure class="img-polaroid">
    <img src="img/add-item.jpg" alt="" />
</figure>
<h4>Opzioni modulo per l'aggiunta di elementi parallassi</h4>
<ul class="index-list">
    <li>Selettore - Selettore CSS dell'elemento con effetto parallasse applicato. Per esempio, '#header .nav'</li>
    <li>Stato dell'oggetto - stato dell'elemento (il parallelo non verrà visualizzato se è disattivato)</li>
    <li>Valore di velocità da 0 a 2, che definisce la velocità di blocco principale del parallasse</li>
    <li>Offset - indice dello strato principale sull'asse Y</li>
    <li>Inversa - direzione parallasse</li>
    <li>Fade - questa opzione consente di configurare il blocco principale del blocco sullo scorrimento della pagina</li>
    <li>Larghezza completa forzata - forzatura completa del blocco parallasse</li>
</ul>
<p>Premere 'Salva' dopo aver compilato tutti i campi richiesti.</p>
<h4>Parallax layers lista</h4>
<p>Per visualizzare l'elenco degli strati di parallasse, è necessario premere "Visualizza" (1) vicino all'elemento principale parallasse.</p>
<figure class="img-polaroid">
    <img src="img/main-panel-view.jpg" alt="" />
</figure>
<p>Quindi vedrai una tabella in cui i livelli vengono visualizzati dopo che sono stati aggiunti.</p>
<figure class="img-polaroid">
    <img src="img/layouts-panel.jpg" alt="" />
</figure>
<h4>Aggiunta di nuovo livello</h4>
<p>Per creare un nuovo livello parallasse, premi l'icona "plus" (1) nell'angolo in alto a destra del pannello dei livelli.</p>
<figure class="img-polaroid">
    <img src="img/layouts-panel-add.jpg" alt="" />
</figure>
<p>Quindi vedrai il seguente modulo.</p>
<figure class="img-polaroid">
    <img src="img/add-layout.jpg" alt="" />
</figure>
<p>Premere 'Salva' dopo aver compilato tutti i campi richiesti.</p>
<h4>I tipi di strati di Parallax ei loro campi</h4>
<ul class="index-list">
    <li><p>Immagine-sfondo - immagine utilizzata come sfondo parallasse</p>
        <ul class="marked-list">
            <li>Stato dell'oggetto - stato dell'elemento (il parallelo non verrà visualizzato se è disattivato)</li>
            <li>Velocità di layout - valore di cifra da 0 a 2, che definisce la velocità di blocco parallax principale</li>
            <li>Offset - indice dello strato principale sull'asse Y</li>
            <li>Inversa - direzione parallasse</li>
            <li>Fade - questa opzione consente di configurare il blocco principale del blocco sullo scorrimento della pagina</li>
            <li>Immagine - collegamento ad un'immagine, a cui verrà applicato l'effetto parallasse</li>
            <li>Ordine di ordine - posizione di layout, rispetto al resto degli elementi</li>
        </ul>
    </li>
    <li><p>Video-background - video utilizzato come sfondo parallasse</p>
        <ul class="marked-list">
            <li>Stato dell'oggetto - stato dell'elemento (il parallelo non verrà visualizzato se è disattivato)</li>
            <li>Velocità di layout - valore di cifra da 0 a 2, che definisce la velocità di blocco parallax principale</li>
            <li>Offset - indice dello strato principale sull'asse Y</li>
            <li>Inversa - direzione parallasse</li>
            <li>Fade - questa opzione consente di configurare il blocco principale del blocco sullo scorrimento della pagina</li>
            <li>Immagine - un collegamento ad un'immagine aggiuntiva</li>
            <li>Video parallax mp4 - video in formato mp4</li>
            <li>Video parallax webm - video in formato webm</li>
            <li>Ordine di ordine - posizione di layout, rispetto al resto degli elementi</li>
        </ul>
    </li>
    <li><p>Strato di testo - testo che la posizione può essere definita con CSS</p>
        <ul class="marked-list">
            <li>Stato dell'oggetto - stato dell'elemento (il parallelo non verrà visualizzato se è disattivato)</li>
            <li>Velocità di layout - valore di cifra da 0 a 2, che definisce la velocità di blocco parallax principale</li>
            <li>Offset - indice dello strato principale sull'asse Y</li>
            <li>Inversa - direzione parallasse</li>
            <li>Fade - questa opzione consente di configurare il blocco principale del blocco sullo scorrimento della pagina</li>
            <li>Contenuto del contenuto</li>
            <li>Classe CSS specifica di classe - per questo livello</li>
            <li>Ordine di ordine - posizione di layout, rispetto al resto degli elementi</li>
        </ul>
    </li>
    <li><p>Youtube-background - YouTube video utilizzato come sfondo parallasse</p>
        <ul class="marked-list">
            <li>Stato dell'oggetto - stato dell'elemento (il parallelo non verrà visualizzato se è disattivato)</li>
            <li>Velocità di layout - valore di cifra da 0 a 2, che definisce la velocità di blocco parallax principale</li>
            <li>Offset - indice dello strato principale sull'asse Y</li>
            <li>Inversa - direzione parallasse</li>
            <li>Fade - questa opzione consente di configurare il blocco principale del blocco sullo scorrimento della pagina</li>
            <li>ID video - ID video YouTube</li>
            <li>Ordine di ordine - posizione di layout, rispetto al resto degli elementi</li>
        </ul>
    </li>
    <li><p>Immagine - livello di immagine che la posizione può essere definita con CSS</p>
        <ul class="marked-list">
            <li>Stato dell'oggetto - stato dell'elemento (il parallelo non verrà visualizzato se è disattivato)</li>
            <li>Velocità di layout - valore di cifra da 0 a 2, che definisce la velocità di blocco parallax principale</li>
            <li>Offset - indice dello strato principale sull'asse Y</li>
            <li>Inversa - direzione parallasse</li>
            <li>Fade - questa opzione consente di configurare il blocco principale del blocco sullo scorrimento della pagina</li>
            <li>Immagine - collegamento ad un'immagine, a cui verrà applicato l'effetto parallasse</li>
            <li>Classe CSS specifica di classe - per questo livello</li>
            <li>Ordine di ordine - posizione di layout, rispetto al resto degli elementi</li>
        </ul>
    </li>
</ul>
<h4>Caricamento di video e immagini sul server</h4>
<p>Per caricare video o un'immagine sul server tramite File Manager, prima è necessario premere l'icona "file" (1) accanto al campo necessario.</p>
<figure class="img-polaroid">
    <img src="img/upload-file.jpg" alt="" />
</figure>
<p>Nella finestra seguente, nella riga "azioni", scegliere "carica" ​​(2).</p>
<figure class="img-polaroid">
    <img src="img/upload-file-2.jpg" alt="" />
</figure>
<p>Allora vedrai una finestra pop-up per caricare file immagine o video qui.</p>
<h4>Avvisi e raccomandazioni</h4>
<ul class="index-list">
    <li>I dispositivi mobili (smartphone, tablet) hanno effetto parallasse disabilitato per impostazione predefinita, invece il livello di blocco più alto viene utilizzato come sfondo</li>
    <li>La larghezza piena forzata del blocco parallasse influenza la velocità di caricamento delle pagine più criticamente di un normale blocco a piena larghezza</li>
    <li>Minore è la dimensione del video caricato, meglio è.</li>
</ul>