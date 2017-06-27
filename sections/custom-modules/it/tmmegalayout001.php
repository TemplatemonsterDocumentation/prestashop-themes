<h3>TM Mega Layout 0.0.1</h3>
<p>Questo modulo è progettato per consentire di creare layout personalizzati (preset) per i ganci e visualizzarli nel sito anziché le posizioni predefinite. Questo vantaggio sul modulo consente di creare diversi marcatori di hook e modificarli alle proprie esigenze.</p>

<h4>Funzionalità e caratteristiche del modulo</h4>
<ul class="index-list">
    <li>
        <p>Requisiti:</p>
        <ul class="marked-list">
            <li>Prestashop 1.6+</li>
            <li>PHP 5.4+</li>
        </ul>
    </li>
    <li>
        <p>Caratteristiche:</p>
        <ul class="marked-list">
            <li>Il modulo include 3 ganci: displayTopColumn, displayHome, displayFooter, corrispondenti a quelli standard.</li>
            <li>Nel caso in cui il modulo non sia presente sul gancio, non può essere aggiunto al preset.</li>
            <li>Il modulo può essere visualizzato nel preset solo una volta, come in un gancio.</li>
            <li>La posizione del modulo in 'Moduli e servizi -> Posizioni' non influisce sulla preimpostazione.</li>
            <li>The module does not allow you to configure different modules. You can not set different modules configuration for various presets.</li>
        </ul>
    </li>
</ul>
<h6>Il modulo fornisce un'opzione per modificare la posizione del modulo e impostare la griglia per 3 ganci: displayTopColumn, displayHome, displayFooter. La modifica della posizione dei moduli in 'Moduli e Servizi -> Posizioni' non influisce sulla posizione dei moduli nel preset. Nel caso in cui il modulo non sia stato aggiunto al gancio, non può essere aggiunto anche al preset.</h6>

<h4>Integrazione del modulo al tema</h4>
<p class="alert alert-warning">Senza questo passaggio i vostri preset non verranno visualizzati sul frontend.</p>
<ul class="index-list">
    <li><p>Colonna superiore. Per aggiungere il preimpostazione personalizzata al gancio topColumn è necessario eseguire quanto segue:</p>
        <ul class="marked-list">
            <li>Apri il <strong>/themes/your_theme/header.tpl</strong> file per la modifica.</li>
            <li>Individuare il seguente codice <pre class="codebox">{hook h="displayTopColumn"}</pre></li>
            <li>E sostituirlo con:
                <pre class="codebox">
{assign var='displayMegaTopColumn' value={hook h='tmMegaLayoutTopColumn'}}
{if $displayMegaTopColumn}
    {hook h='tmMegaLayoutTopColumn'}
{else}
    {capture name='displayTopColumn'}{hook h='displayTopColumn'}{/capture}
    {if $smarty.capture.displayTopColumn}
        &lt;div id="slider_row" class="row"&gt;
            &lt;div id="top_column" class="center_column col-xs-12 col-sm-12">{$smarty.capture.displayTopColumn}&lt;/div&gt;
        &lt;/div&gt;
    {/if}
{/if}</pre>
            </li>
        </ul>
    </li>
    <li><p>Casa. Per aggiungere il preimpostazione personalizzata all'home Home è necessario eseguire quanto segue:</p>
        <ul class="marked-list">
            <li>Apri il <strong>/themes/your_theme/footer.tpl</strong> file per la modifica.</li>
            <li>Individuare il seguente codice:
                <pre class="codebox">
{if isset($HOOK_HOME) && $HOOK_HOME|trim}
    &lt;div class="home-column"&gt;
        &lt;div class="container"&gt;
            {$HOOK_HOME}
        &lt;/div&gt;
    &lt;/div&gt;
{/if}</pre>
            </li>
            <li>E sostituirlo con:
                <pre class="codebox">
{assign var='displayMegaHome' value={hook h='tmMegaLayoutHome'}}
{if $displayMegaHome}
    {hook h='tmMegaLayoutHome'}
{else}
    {if isset($HOOK_HOME) && $HOOK_HOME|trim}
        {$HOOK_HOME}
    {/if}
{/if}</pre>
            </li>
        </ul>
    </li>
    <li><p>Footer. Per aggiungere il predefinito personalizzato al gancio Footer è necessario eseguire quanto segue:</p>
        <ul class="marked-list">
            <li>Apri il <strong>/themes/your_theme/footer.tpl</strong> file per la modifica.</li>
            <li>Individuare il seguente codice:
                <pre class="codebox">
{if isset($HOOK_FOOTER)}
    &lt;div class="footer-container"&gt;
        &lt;footer id="footer"  class="container"&gt;
            &lt;div class="row"&gt;
                {$HOOK_FOOTER}
            &lt;/div&gt;
        &lt;/footer&gt;
    &lt;/div&gt;
{/if}</pre>
            </li>
            <li>E sostituirlo con:
                <pre class="codebox">
{assign var='displayMegaFooter' value={hook h='tmMegaLayoutFooter'}}
{if isset($HOOK_FOOTER) || $displayMegaFooter}
    &lt;div class="footer-container"&gt;
    {if $displayMegaFooter}
         &lt;div id="footer"&gt;
              {$displayMegaFooter}
         &lt;/div&gt;
    {else}
        &lt;div id="footer" class="container"&gt;
            &lt;div class="row"&gt;{$HOOK_FOOTER}&lt;/div&gt;
        &lt;/div&gt;
    {/if}
    &lt;/div&gt;
{/if}
                </pre>
            </li>
        </ul>
    </li>
</ul>

<h4>TM Mega Layout Main Pannelllo</h4>
<p>Il pannello di configurazione del modulo principale TM Mega Layout consente di aggiungere un preimpostazione al gancio richiesto e configurare il preimpostazione.</p>
<figure class="img-polaroid">
    <img src="img/tmmegalayout-main-panel.png" alt="" />
</figure>

<h4>Aggiunta del preset</h4>
<ul class="index-list">
    <li>
        <p>Premere su '+ Aggiungi preset' (1) nella scheda necessaria.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-preset-1.png" alt="" /></figure>
    </li>
    <li>
        <p>Quindi riempire il campo 'Inserisci nome layout' nella finestra popup digitando il nuovo titolo preimpostato (2) e premere 'Salva' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-preset-2.png" alt="" /></figure>
    </li>
    <li>
        <p>Il Preset è stato creato con successo, è elencato tra i preset disponibili (4). Viene selezionato il preimpostazione appena creato per la modifica (5).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-preset-3.png" alt="" /></figure>
    </li>
</ul>

<h4>Preset attivazione</h4>
<ul class="index-list">
    <li>
        <p>In primo luogo, scelga la preselezione necessaria tra l'elenco (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-activation-preset-1.png" alt="" /></figure>
    </li>
    <li>
        <p>Premere su 'Utilizza come impostazione predefinita' (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-activation-preset-2.png" alt="" /></figure>
    </li>
    <li>
        <p>Il Preset è attivo, verrà visualizzato in un gancio e contrassegnato con un segno di spunta (3) in un elenco di preset.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-activation-preset-3.png" alt="" /></figure>
    </li>
</ul>

<h4>Rimozione del preimpostazione</h4>
<p class="alert alert-warning">Non è possibile ripristinare il preset dopo la rimozione.</p>
<ul class="index-list">
    <li>
        <p>Per rimuovere il preimpostato, scegliere il preset richiesto tra l'elenco (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-delete-preset-1.png" alt=""></figure>
    </li>
    <li>
        <p>Avanti, premere un carrello (2) vicino al titolo preimpostato.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-delete-preset-2.png" alt=""></figure>
    </li>
    <li>
        <p>Il preimpostazione è stato rimosso con successo.</p>
    </li>
</ul>

<h4>Rinominare il preset</h4>
<ul class="index-list">
    <li>
        <p>Per rinominare il preimpostazione, scegliere il preset richiesto tra l'elenco (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-rename-preset-1.png" alt=""></figure>
    </li>
    <li>
        <p>Avanti, premi un'icona a matita (2) accanto al titolo preimpostato.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-rename-preset-2.png" alt=""></figure>
    </li>
    <li>
        <p>Specificare il nuovo titolo predefinito (3) in un popup e premere su 'Rinomina layout' (4).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-rename-preset-3.png" alt=""></figure>
    </li>
    <li>
        <p>Il preimpostazione è stato rinominato.</p>
    </li>
</ul>

<h4>Wrapper</h4>
<p>Wrapper non dispone di classe per impostazione predefinita, non è un elemento obbligatorio.</p>

<h4>Aggiunta del wrapper</h4>
<ul class="index-list">
    <li>
        <p>Per creare un wrapper, premere su '+ Add wrapper' (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-wrapper-1.png" alt=""></figure>
    </li>
    <li>
        <p>Wrapper è stato aggiunto (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-wrapper-2.png" alt=""></figure>
    </li>
</ul>

<h4>Aggiungere la classe personalizzata css al wrapper</h4>
<p>L'aggiunta della classe personalizzata ti consente di creare uno stile specifico per il tuo wrapper utilizzando le regole css.</p>
<ul class="index-list">
    <li>
        <p>Per aggiungere la classe wrapper premere il pulsante (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-wrapper-add-class-1.png" alt=""></figure>
    </li>
    <li>
        <p>Verrà visualizzata una finestra pop-up, compilare il campo "Inserisci classi di wrapper" (2) e premere un pulsante "Conferma" (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-wrapper-add-class-2.png" alt=""></figure>
    </li>
    <li>
        <p>La classe personalizzata è stata aggiunta correttamente.</p>
    </li>
</ul>

<h4>Eliminazione del wrapper</h4>
<p class="alert alert-warning">La cancellazione dell'elemento predefinito provoca anche tutti i suoi elementi figlio e i loro stili
    Rimuovendo.</p>
<ul class="index-list">
    <li>
        <p>Per rimuovere il wrapper, premere sul pulsante carrello (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-delete-wrapper-1.png" alt=""></figure>
    </li>
    <li>
        <p>Il wrapper è stato rimosso con successo.</p>
    </li>
</ul>

<h4>Styling wrapper</h4>
<ul class="index-list">
    <li>
        <p>Per aggiungere stili personalizzati al wrapper, premere sull'icona "matita" (1) nel blocco wrapper.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-wrapper-add-styles-1.png" alt=""></figure>
    </li>
    <li>
        <p>Nella seguente finestra popup compilare tutti i campi necessari (si può fare riferimento alla sezione "Styling" della documentazione) e premere il pulsante "Salva" (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-wrapper-add-styles-2.png" alt=""></figure>
    </li>
    <li>
        <p>Se tutti i campi vengono riempiti correttamente, gli stili verranno salvati.</p>
    </li>
</ul>

<h4>Riga</h4>
<p>Riga voce dalla griglia Bootstrap. È un elemento richiesto.</p>
<h4>Aggiunta della riga</h4>
<ul class="index-list">
    <li>
        <p>Per inserire una nuova riga, premere '+ Aggiungi riga' (1) nel blocco wrapper o '+ Aggiungi riga' (2) nel blocco predefinito principale oppure '+ Aggiungi riga' (3) nella colonna a discesa elenco.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-row-1.png" alt=""></>
    </li>
    <li>
        <p>La riga è stata aggiunta correttamente.</p>
    </li>
</ul>

<h4>Aggiungere la classe personalizzata css alla riga</h4>
<p>Classi personalizzate consente di creare uno stile di riga personalizzato utilizzando le regole css.</p>
<ul class="index-list">
    <li>
        <p>Per aggiungere la classe alla riga, è necessario premere il pulsante (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-edit-row-1.png" alt=""></figure>
    </li>
    <li>
        <p>Scegli la 'Modifica riga' (2) in un elenco a discesa.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-edit-row-2.png" alt=""></figure>
    </li>
    <li>
        <p>Compilare il campo 'Inserisci classi di riga' (3) nella finestra pop-up e premere il pulsante 'Conferma' (4).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-edit-row-3.png" alt=""></figure>
    </li>
    <li>
        <p>La classe personalizzata è stata aggiunta correttamente.</p>
    </li>
</ul>

<h4>Eliminazione della riga</h4>
<p class="alert alert-warning">La rimozione dell'elemento predefinito causerà anche la cancellazione dei suoi elementi figlio e dei loro stili.</p>
<ul class="index-list">
    <li>
        <p>Per rimuovere la riga, apri il menu (l'icona 'ellissi') (1) nel blocco di riga.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-delete-row-1.png" alt=""></figure>
    </li>
    <li>
        <p>Scegliere l'opzione 'Elimina' (2) nell'elenco a discesa.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-delete-row-2.png" alt=""></figure>
    </li>
    <li>
        <p>La riga è stata rimossa correttamente.</p>
    </li>
</ul>

<h4>Aggiunta di stili alla riga</h4>
<ul class="index-list">
    <li>
        <p>Per aggiungere stili di riga, apri il menu (l'icona 'ellissi') (1) in un blocco di riga.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-row-add-styles-1.png" alt=""></figure>
    </li>
    <li>
        <p>Premere su 'Stilizza' (2) nell'elenco a discesa.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-row-add-styles-2.png" alt=""></figure>
    </li>
    <li>
        <p>Verrà visualizzata la finestra pop-up, riempire tutti i campi necessari (si può fare riferimento alla sezione "Styling" della documentazione) e premere il pulsante 'Salva' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-row-add-styles-3.png" alt=""></figure>
    </li>
    <li>
        <p>Se tutti i campi vengono riempiti correttamente, gli stili verranno salvati.</p>
    </li>
</ul>

<h4>Colonna</h4>
<p>È un elemento con larghezza di blocco configurabile per diverse dimensioni, basato su griglia Bootstrap.</p>

<h4>Aggiunta della colonna</h4>
<ul class="index-list">
    <li>
        <p>Per inserire una colonna in una riga necessaria, Apri il menu (l'icona 'ellissi') (1)</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-col-1.png" alt=""></figure>
    </li>
    <li>
        <p>Scegli l''+ Aggiungi Col' (2) nell'elenco.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-col-2.png" alt=""></figure>
    </li>
    <li>
        <p>Compilare i campi (col-xs *, col-sm *, col-md *, col-lg - classi di bootstrap) nella finestra pop-up e premere il pulsante 'Conferma' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-col-3.png" alt=""></figure>
    </li>
    <li>
        <p>La colonna è stata aggiunta con successo.</p>
    </li>
</ul>

<h4>Rimozione della colonna</h4>
<p class="alert alert-warning">La rimozione dell'elemento predefinito causerà anche la cancellazione dei suoi elementi figlio e dei loro stili.</p>
<ul class="index-list">
    <li>
        <p>Per rimuovere la colonna, aprire il menu (l'icona 'ellissi') (1) in un blocco di colonna</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-detele-col-1.png" alt=""></figure>
    </li>
    <li>
        <p>Premere su 'Elimina' (2) nell'elenco.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-detele-col-2.png" alt=""></figure>
    </li>
    <li>
        <p>La colonna e tutti i suoi elementi figlio sono stati rimossi.</p>
    </li>
</ul>

<h4>Modifica della colonna</h4>
<ul class="index-list">
    <li>
        <p>Per modificare la colonna, apri il menu (l'icona 'ellissi') (1) in un blocco di colonna.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-edit-col-1.png" alt=""></figure>
    </li>
    <li>
        <p>Premere su 'Modifica colonna' (2) nell'elenco.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-edit-col-2.png" alt=""></figure>
    </li>
    <li>
        <p>Compilare i campi (col-xs *, col-sm *, col-md *, col-lg - classi di bootstrap) nella finestra pop-up e premere su 'Conferma' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-edit-col-3.png" alt=""></figure>
    </li>
    <li>
        <p>La colonna è stata modificata correttamente.</p>
    </li>
</ul>

<h4>Aggiunta di stili alla colonna</h4>
<ul class="index-list">
    <li>
        <p>Per aggiungere gli stili di colonna, Apri il menu (l'icona 'ellissi') (1) in un blocco di colonna.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-col-add-styles-1.png" alt=""></figure>
    </li>
    <li>
        <p>Premere su 'Stilizza' (2) nell'elenco delle opzioni.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-col-add-styles-2.png" alt=""></figure>
    </li>
    <li>
        <p>Verrà visualizzata la finestra pop-up, riempire tutti i campi necessari (si può fare riferimento alla sezione "Styling" della documentazione) e premere il pulsante 'Salva' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-col-add-styles-3.png" alt=""></figure>
    </li>
    <li>
        <p>Se tutti i campi vengono riempiti correttamente, gli stili verranno salvati.</p>
    </li>
</ul>

<h4>Modulo</h4>
<p>Modulo, assegnato a questo hook.</p>

<h4>Aggiunta del modulo</h4>
<p class="box-notification"><span>Fare attenzione quando si aggiungono moduli al preimpostazione, alcuni dei moduli sono auspicabili da utilizzare se non modificano il layout visibile, ad esempio, il modulo di statistiche 'Data mining for statistics'.</span></p>
<ul class="index-list">
    <li>
        <p>Per aggiungere il modulo alla preimpostazione in un blocco di colonna, apri il menu (l'icona "ellissi") (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-module-1.png" alt=""></figure>
    </li>
    <li>
        <p>Premere sul '+ Add Module' (2) nell'elenco delle opzioni disponibili.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-module-2.png" alt=""></figure>
    </li>
    <li>
        <p>Se necessario, è possibile immettere la classe personalizzata (3) nella finestra popup e selezionare il modulo (4), quindi premere su 'Conferma' (5).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-add-module-3.png" alt=""></figure>
    </li>
    <li>
        <p>Il modulo è stato aggiunto con successo.</p>
    </li>
</ul>

<h4>Eliminazione del modulo</h4>
<p class="alert alert-warning">La rimozione dell'elemento predefinito causerà anche la cancellazione dei suoi elementi figlio e dei loro stili.</p>
<ul class="index-list">
    <li>
        <p>Per rimuovere il modulo, aprire il menu (l'icona 'ellissi') (1) nel blocco modulo.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-delete-module-1.png" alt=""></figure>
    </li>
    <li>
        <p>Premere su 'Elimina' (2) nell'elenco delle opzioni disponibili.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-delete-module-2.png" alt=""></figure>
    </li>
    <li>
        <p>Il modulo viene rimosso.</p>
    </li>
</ul>

<h4>Aggiungere classe personalizzata al modulo</h4>
<p>L'aggiunta di classi personalizzate consente di creare lo styling del modulo utilizzando le regole css.</p>
<ul class="index-list">
    <li>
        <p>Per specificare la classe personalizzata per il modulo, apri il menu nel blocco di modulo (l'icona "ellissi") (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-module-add-class-1.png" alt=""></figure>
    </li>
    <li>
        <p>Premere su 'Modifica impostazioni' (2) quindi.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-module-add-class-2.png" alt=""></figure>
    </li>
    <li>
        <p>Specificare la classe personalizzata (3) nella finestra pop-up e premere il pulsante 'Conferma' (4).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-module-add-class-3.png" alt=""></figure>
    </li>
    <li>
        <p>La classe personalizzata è stata aggiunta.</p>
    </li>
</ul>

<h4>Esportazioni preimpostate</h4>
<p>Lo strumento Esporta consente di esportare i preset per l'ulteriore importazione in diversi negozi.</p>
<ul class="index-list">
    <li>
        <p>Passare alla scheda "Strumenti" (1) nel pannello delle configurazioni principali.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-export-preset-1.png" alt=""></figure>
    </li>
    <li>
        <p>Seleziona 'Esporta' (2) nel modulo.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-export-preset-2.png" alt=""></figure>
    </li>
    <li>
        <p>Vedrai l'elenco dei preset esistenti nei ganci del sito.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-export-preset-3.png" alt=""></figure>
    </li>
    <li>
        <p>Per visualizzare in anteprima la preimpostazione premere sul pulsante "Anteprima layout" (3) vicino al preimpostazione necessario, per esportare, premere il pulsante 'Esporta layout' (4).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-export-preset-4.png" alt=""></figure>
    </li>
    <li>
        <p>Then you'll be able to download this preset as a zip archive.</p>
    </li>
</ul>

<h4>Importazione predefinita</h4>
<p class="alert alert-warning">Lo strumento di importazione accetta solo i file * .zip preimpostati, precedentemente generati con lo stesso strumento di esportazione del modulo.</p>
<ul class="index-list">
    <li>
        <p>Per importare il preimpostazione, è necessario Apri il <strong>Strumenti (1)</strong> tab e scegliere <strong>'Importa' (2)</strong>.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-import-preset-1.png" alt="" /></figure>
    </li>
    <li>
        <p>Avanti, premi il tasto <strong>Aggiungi file (3)</strong> E seleziona il file zip del predefinito esportato. Se questo archivio è il preset esportato, vedrai questa anteprima preimpostata.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-import-preset-2.png" alt="" /></figure>
    </li>
    <li>
        <p>Se questo preset soddisfa le tue esigenze, premere <strong>'Importa' (4)</strong>. 
Il preset verrà importato e aggiunto all'elenco dei preset disponibili.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-import-preset-3.png" alt="" /></figure>
    </li>
</ul>

<h4>Resetta</h4>
<p>Resetta - ripristina tutti i preset allo stato iniziale (in quanto forniti con il tema), tutti i preset personalizzati creati dall'utente verranno rimossi.</p>
<p class="alert alert-warning">Attenzione! Dopo aver ripristinato i preset predefiniti, tutti i preset personalizzati verranno rimossi!</p>
<ul class="index-list">
    <li>
        <p>Per ripristinare i preset, passare alla scheda "Strumenti" (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-reset-1.png" alt=""></figure>
    </li>
    <li>
        <p>Apri il 'Reset' (2) Nel blocco.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-reset-2.png" alt=""></figure>
    </li>
    <li>
        <p>E premere su 'Reset a default'.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-reset-3.png" alt=""></figure>
    </li>
    <li>
        <p>È tutto.</p>
    </li>
</ul>

<h4>Styling</h4>
<ul class="index-list">
    <li>
        <p>Stili di sfondo. Descrizione dei campi:</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-styles-1.png" alt="" /></figure>
        <ul class="marked-list">
            <li>background-image (immagine di sfondo) - l'argomento è un collegamento all'immagine. L'immagine viene selezionata dalla cartella ~ /images/cms/.</li>
            <li>background-color (colore di sfondo) - il valore può essere impostato in qualsiasi formato di colore (rgb, hex, ecc.). È possibile scegliere il colore utilizzando lo strumento di coloratore.</li>
            <li>ripetizione di sfondo (ripetizione di sfondo) - tutte le opzioni disponibili sono elencate nei pulsanti di scelta rapida.</li>
            <li>posizione di sfondo (posizione di sfondo) - tutte le opzioni disponibili sono elencate nell'elenco a discesa.</li>
            <li>dimensione di sfondo (dimensione di sfondo) - tutte le opzioni disponibili sono elencate nell'elenco a discesa.</li>
            <li>background-origine (regione di posizionamento dell'immagine di sfondo) - tutte le opzioni disponibili sono elencate nell'elenco a discesa.</li>
        </ul>
    </li>
    <li><p>Bordo stili.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-styles-2.png" alt="" /></figure>
        <ul class="marked-list">
            <li>TIPOLOGIA: stile bordo superiore, stile bordo destro, bordo sinistro, fondo-sfondo, tutte le opzioni disponibili sono elencate nell'elenco a discesa.</li>
            <li>LA LARGHEZZA: la larghezza del bordo, la larghezza del bordo, la larghezza del bordo, la larghezza di sinistra e la larghezza inferiore del bordo devono essere impostati in pixel.</li>
            <li>RADIUS: il raggio del bordo superiore destro, il raggio di bordo superiore-sinistro, il raggio del bordo inferiore-destro, il bordo inferiore-sinistra-dovrebbe essere impostato in pixel.</li>
            <li>COLORE: border-top-colour, border-right-color, border-left-color, border-bottom-color - il valore può essere impostato in qualsiasi formato di colore (rgb, hex, ecc.). È possibile scegliere il colore utilizzando lo strumento di coloratore.</li>
        </ul>
    </li>
    <li><p>Altri stili.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-styles-3.png" alt="" /></figure>
        <ul class="marked-list">
            <li>box-shadow - esempio: 0px 0px 0px 0px rgba (0,0,0,0,75).</li>
        </ul>
    </li>
</ul>

<h4>Rimuovi gli stili degli elementi</h4>
<ul class="index-list">
    <li>
        <p>Per rimuovere gli stili di articoli Apri la sezione di styling degli oggetti e premi il pulsante 'Cancella stili' (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout-clear-styles-1.png" alt="" /></figure>
    </li>
</ul>

<h4>Avvertenze</h4>
<p>Se il seguente messaggio viene visualizzato nel blocco di elementi del modulo, è necessario abilitare il modulo di cui sopra.</p>
<figure class="img-polaroid"><img src="img/tmmegalayout-module-warning-1.png" alt=""></figure>
<p>Se nel blocco di elementi del modulo viene visualizzato il seguente messaggio, è necessario installare il modulo di cui sopra.</p>
<figure class="img-polaroid"><img src="img/tmmegalayout-module-warning-2.png" alt=""></figure>
<p class="alert alert-warning">Se si rimuove o disattiva il modulo TM Mega Layout, tutti i preset attivi saranno disabilitati e vedrete le posizioni (ganci) nel loro aspetto originale.</p>