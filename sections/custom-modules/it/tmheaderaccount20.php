<h3>TM Header Account 2.0</h3>
<?php if ($project == 'eveprest' ) { ?>
    <div>
        <p style="margin-bottom: 0;">Disponibile in:</p>
        <p style="margin-top: 0;" class="small text-secondary">Moda, Elettronica, Ricambi, Mobilio, Un Prodotto</p>
    </div>
<?php } ?>
<p class="alert alert-warning">
    Se la versione 1.n di questo modulo è installata nel motore di prestashop, non si suggerisce di aggiornarlo con quello corrente. Innanzitutto è necessario rimuovere la vecchia versione del modulo per eseguire senza errori.
</p>
<p>Questo modulo mostra i moduli di accesso e di registrazione sul sito web. Può prendere le seguenti posizioni: intestazione sito web, colonna sinistra e destra. Il modulo consente di accedere e registrarsi utilizzando tali reti sociali come Facebook, Google+ e VK, comodo per gli utenti del sito. Registrazione o registrazione dei proventi senza ricaricare la pagina.</p>
<h4>TM Header Account Main Pannello</h4>
<p>Il pannello principale. Qui è possibile impostare il modulo.</p>
<figure class="img-polaroid">
    <img src="img/tmheaderaccount200-1.png" alt=""/>
</figure>
<h4>Impostazioni</h4>
<p>Nel modulo sono presenti le seguenti impostazioni:</p>
<ul class="index-list">
    <li><p>Tipo di visualizzazione - questa impostazione consente di selezionare la modalità di visualizzazione del modulo di registrazione. Può assumere i seguenti valori:</p>
        <ul class="marked-list">
            <li><strong>Drop down</strong> - la maschera verrà visualizzata come un menu a discesa sotto il pulsante che lo aprirà.
                <figure class="img-polaroid">
                    <img src="img/tmheaderaccount200-2.png" alt=""/>
                </figure>
            </li>
            <li><strong>Popup</strong> - la maschera apparirà in un pop-up.
                <figure class="img-polaroid">
                    <img src="img/tmheaderaccount200-3.png" alt=""/>
                </figure>
            </li>
            <li><strong>Lato sinistro</strong> - la maschera apparirà dalla sinistra come barra laterale.
                <figure class="img-polaroid">
                    <img src="img/tmheaderaccount200-4.png" alt=""/>
                </figure>
            </li>
            <li><strong>Lato destro</strong> - la maschera apparirà dalla destra come barra laterale.
                <figure class="img-polaroid">
                    <img src="img/tmheaderaccount200-5.png" alt=""/>
                </figure>
            </li>
        </ul>
    </li>
    <li><p>Stile di visualizzazione dopo l'accesso - questa impostazione consente di modificare la visualizzazione modulo dopo il login / registrazione. È possibile utilizzare i seguenti valori:</p>
        <ul class="marked-list">
            <li><strong>Due colonne</strong> - l'elenco è suddiviso in due colonne.
                <figure class="img-polaroid">
                    <img src="img/tmheaderaccount200-6.png" alt=""/>
                </figure>
            </li>
            <li><strong>Una colonna</strong> - l'elenco dei collegamenti viene visualizzato come una colonna.
                <figure class="img-polaroid">
                    <img src="img/tmheaderaccount200-7.png" alt=""/>
                </figure>
            </li>
        </ul>
    </li>
    <li>Avatar predefinito - questo campo viene visualizzato solo se è abilitata l'opzione 'Mostra avatar'. Qui è possibile selezionare l'avatar di utente predefinito.</li>
    <li>Avatar di visualizzazione - questa impostazione consente di abilitare o disattivare avatar dell'utente. Se l'utente accede all'account sul sito web con l'aiuto di una delle reti sociali, l'avatar verrà prelevato dall'account in questo social network, altrimenti verrà visualizzato l'avatar, caricato dall'amministratore del sito.</li>
    <li>Utilizza reindirizzamento - se questa impostazione è abilitata, la registrazione utente e il recupero di password avranno luogo nella pagina predefinita di registrazione/password di PrestaShop.</li>
    <li><p>Usa Login di Facebook - questa impostazione consente di abilitare la registrazione degli utenti e l'accesso con l'aiuto della social network di Facebook. Quando si attiva questa opzione, vengono visualizzate le seguenti impostazioni:</p>
        <ul class="marked-list">
            <li><strong>App ID</strong> - il tuo ID di account dell'account dall'account sviluppatore di Facebook.</li>
            <li><strong>App Secreto</strong> - il tuo app segreto dall'account sviluppatore di Facebook.</li>
        </ul>
    </li>
    <li><p>utilizza l'accesso a Google - questa impostazione consente di abilitare l'accesso e la registrazione degli utenti con l'aiuto della rete sociale di Google+. Se si attiva questa opzione, verranno visualizzate le seguenti impostazioni:</p>
        <ul class="marked-list">
            <li><strong>App ID</strong> - il tuo ID dell'applicazione dall'account sviluppatore di Google.</li>
            <li><strong>App Secreto</strong> - il tuo segreto app dall'account dello sviluppatore di Google.</li>
            <li><strong>Redirect URIs</strong> - tuo online-store url + index.php?fc=module&module=tmheaderaccount&controller=googlelogin</li>
        </ul>
    </li>
    <li><p>Utilizza Login VK - questa impostazione consente di abilitare la registrazione utente e l'accesso con l'aiuto della rete sociale VK. Se si attiva questa opzione, verranno visualizzate le seguenti impostazioni:</p>
        <ul class="marked-list">
            <li><strong>App ID</strong> - il tuo ID dell'applicazione dal tuo account sviluppatore VK.</li>
            <li><strong>App Secreto</strong> - segreto App dal tuo account sviluppatore VK.</li>
            <li><strong>Redirect URIs</strong> - tuo online-store url + index.php?fc=module&module=tmheaderaccount&controller=vk</li>
        </ul>
    </li>
</ul>
<h5>Registrazione di applicazioni nelle reti sociali:</h5>
<ul class="marked-list">
    <li><strong>Facebook</strong> - per ottenere l'ID di app e l'app segreto, registrare la tua app <a target="_blank" href="https://developers.facebook.com/apps">https://developers.facebook.com/apps</a>.</li>
    <li><strong>Google+</strong> - per ottenere l'ID di app e l'app segreto, registrare la tua app<a target="_blank" href="https://developers.google.com/accounts/docs/OAuth2/">https://developers.google.com/accounts/docs/OAuth2/</a>.</li>
    <li><strong>VK</strong> - per ottenere l'ID di app e l'app segreto registrare la tua applicazione a <a target="_blank" href="https://vk.com/dev">https://vk.com/dev</a>.</li>
</ul>

