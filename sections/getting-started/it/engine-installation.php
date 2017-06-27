<h3>Installazione del motore PrestaShop</h3>
<p class="alert alert-warning">Assicurati che la tua versione del motore PrestaShop corrisponda alla versione specificata nella scheda "Dettagli tecnici", indicata come "PrestaShop Engine: 1.X.X.X".<br/>
    Inoltre, assicurati che il prefisso delle tabelle del database sia <strong>ps_</strong>. Installare i dati di esempio solo se il tuo motore PrestaShop corrisponde alla versione specificata.</p>
<p>Quando si è completati con il caricamento dei file, è possibile avviare l'installazione del motore PrestaShop. Apri il tuo browser web e digita il 'nome di dominio / percorso alla tua directory di PrestaShop' nella barra degli indirizzi e ricarica la pagina corrente. Dovresti vedere la schermata di benvenuto. Seguire le istruzioni riportate di seguito per installare PrestaShop.</p>
<h4>Assistente di installazione (Scegli la lingua)</h4>
<h6>Seleziona la lingua di installazione.</h6>
<p class="alert alert-warning">Nota: l'opzione lingua di installazione non influisce sulla lingua del negozio. Per impostazione predefinita PrestaShop è offerto in inglese. È possibile installare ulteriori pacchetti di localizzazione per modificare la lingua del negozio.</p>
<p>Quando hai finito, fai clic sul pulsante <strong>'Next'</strong> pulsante.</p>
<figure class="img-polaroid">
    <img src="img/engine-install-01.png" alt="">
</figure>
<h4>Assistente di installazione (contratti di licenza)</h4>
<ol class="index-list">
    <li>Controllare l'accordo di licenza.</li>
    <li>Quando hai finito, fai clic sul pulsante <strong>'Next'</strong> pulsante.</li>
</ol>
<figure class="img-polaroid">
    <img src="img/engine-install-02.png" alt="">
</figure>
<h4>Compatibilità del Sistema</h4>
<p>Controllare le impostazioni PHP e le autorizzazioni di directory. In caso di errori, contattare il provider di hosting per ulteriori informazioni.</p>
<p>Se tutto è corretto, fai clic sul pulsante <strong>'Next'</strong> pulsante.</p>
<figure class="img-polaroid">
    <img src="img/engine-install-03.png" alt="">
</figure>
<h4>Configurazione del negozio</h4>
<p>Questo passaggio richiede di immettere le impostazioni del negozio come Nome negozio, attività, paese, orologio, ecc.</p>
<p>Tutte queste impostazioni possono essere modificate più tardi nel pannello di amministrazione di PrestaShop.</p>
<figure class="img-polaroid">
    <img src="img/engine-install-04.png" alt="">
</figure>
<h4>Configurazione di sistema</h4>
<p>Se hai già un database MySQL, inserisci i dettagli del database nei campi appropriati di seguito.</p>
<p>Altrimenti, è possibile ottenere i dettagli del database dal pannello di controllo di hosting o contattando il provider di hosting.</p>
<p>Quando hai finito, fai clic sul pulsante <strong>'Next'</strong> pulsante.</p>
<figure class="img-polaroid">
    <img src="img/engine-install-05.png" alt="">
</figure>
<h4>L'installazione è completa</h4>
<p>Questo è il passaggio finale dell'installazione.</p>
<p class="alert alert-danger">Per motivi di sicurezza è necessario eliminare <strong>/install/</strong> directory sul server di hosting.
</p>
<figure class="img-polaroid">
    <img src="img/engine-install-06.png" alt="">
</figure>
<p class="alert alert-info">A partire dalla versione 1.5.4, PrestaShop si prende cura della ridenominazione della cartella di amministrazione: diventa la parola "admin" seguita da 4 cifre casuali, ad esempio "admin8814". La ridenominazione avviene non appena si accede alla cartella "admin" per la prima volta: PrestaShop rinomina, quindi accede correttamente alla cartella rinominata.<br/><br/>
    Accedi al back office di PrestaShop andando alla tua nuova cartella "admin", e riaccompagna il tuo catalogo con i tuoi dati.
</p>
<h6>Se hai difficoltà, controlla <a target="_blank" href="http://doc.prestashop.com/display/PS16/Getting+Started">manuale di installazione ufficiale di PrestaShop</a>.</h6>
