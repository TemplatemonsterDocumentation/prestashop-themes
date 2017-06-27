<h3>TM Mega Layout 1.1.0</h3>
<p>Questo modulo è progettato per consentire la creazione di layout personalizzati (preset) per i ganci e la visualizzazione sul sito anziché
    Le posizioni predefinite. Questo vantaggio del modulo consente di creare diversi marcatori e modificarli
    I tuoi bisogni.</p>
<h4>Funzionalità e caratteristiche del modulo</h4>
<ul class="index-list">
    <li>
        <p>Requisiti:</p>
        <ul class="marked-list">
            <li><p>PrestaShop 1.6+</p></li>
            <li><p>PHP 5.4+</p></li>
        </ul>
    </li>
    <li>
        <p>Caratteristiche:</p>
        <ul class="marked-list">
            <li><p>Il modulo include 5 ganci: 'Header', 'Top Column', 'Home', 'Footer' e 'Footer Product'</p></li>
            <li><p>Nel caso in cui il modulo non sia presente nel gancio, non può essere aggiunto al preset.</p></li>
            <li><p>Il modulo può essere visualizzato nel preimpostazione solo una volta, come in un gancio.</p></li>
            <li><p>La posizione del modulo in 'Moduli e servizi -> Posizioni' non influisce sulla preimpostazione.</p></li>
            <li><p>Il modulo non consente di configurare moduli diversi. Non è possibile impostare diversi moduli
                    Configurazione per vari preset.</p></li>
        </ul>
    </li>
</ul>
<h6>Il modulo fornisce un'opzione per modificare la posizione del modulo e impostare la griglia per 3 ganci:
    DisplayTopColumn, displayHome, displayFooter. Modifica della posizione dei moduli in 'Moduli e servizi -> Posizioni'
    Non influenzerà la posizione dei moduli nel predefinito. Nel caso in cui il modulo non sia stato aggiunto al gancio, non è possibile
    Essere aggiunto al preset.</h6>

<h4>Integrare il modulo sul tema</h4>
<p class="alert alert-warning"><span>Senza questo passaggio i vostri preset non verranno visualizzati sul frontend.</span></p>
<ul class="index-list">
    <li><p>Colonna superiore. Per aggiungere il preimpostazione personalizzata al gancio topColumn, è necessario eseguire le seguenti operazioni:</p>
        <ul class="marked-list">
            <li>Apri il <strong>/themes/your_theme/header.tpl</strong> file per la modifica.</li>
            <li>Individuare il seguente codice
                <pre class="codebox">{hook h="displayTopColumn"}</pre>
            </li>
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
    <li><p>Casa. Per aggiungere il preimpostazione personalizzata all'home Home, è necessario eseguire le seguenti operazioni:</p>
        <ul class="marked-list">
            <li>Apri il<strong>/themes/your_theme/index.tpl</strong> file per la modifica.</li>
            <li>Individuare il seguente codice:
                <pre class="codebox">
{if isset($HOOK_HOME_TAB_CONTENT) && $HOOK_HOME_TAB_CONTENT|trim}
  {if isset($HOOK_HOME_TAB) && $HOOK_HOME_TAB|trim}
    &lt;ul id="home-page-tabs" class="nav nav-tabs clearfix"&gt;
      {$HOOK_HOME_TAB}
    &lt;/ul&gt;
  {/if}
  &lt;div class="tab-content"&gt;{$HOOK_HOME_TAB_CONTENT}&lt;/div&gt;
{/if}
{if isset($HOOK_HOME) && $HOOK_HOME|trim}
  &lt;div class="clearfix"&gt;{$HOOK_HOME}&lt;/div&gt;
{/if}</pre>
            </li>
            <li>And replace it with:
                <pre class="codebox">
{assign var='displayMegaHome' value={hook h='tmMegaLayoutHome'}}
{if $displayMegaHome}
  {hook h='tmMegaLayoutHome'}
{else}
  {if isset($HOOK_HOME_TAB_CONTENT) && $HOOK_HOME_TAB_CONTENT|trim}
    {if isset($HOOK_HOME_TAB) && $HOOK_HOME_TAB|trim}
      &lt;ul id="home-page-tabs" class="nav nav-tabs clearfix"&gt;
        {$HOOK_HOME_TAB}
      &lt;/ul&gt;
    {/if}
    &lt;div class="tab-content"&gt;{$HOOK_HOME_TAB_CONTENT}&lt;/div&gt;
  {/if}
  {if isset($HOOK_HOME) && $HOOK_HOME|trim}
    &lt;div class="clearfix"&gt;{$HOOK_HOME}&lt;/div&gt;
  {/if}
{/if}</pre>
            </li>
        </ul>
    </li>
    <li><p>Piè di pagina. Per aggiungere il predefinito personalizzato al gancio Footer, è necessario eseguire le seguenti operazioni:</p>
        <ul class="marked-list">
            <li>Apri il <strong>/themes/your_theme/footer.tpl</strong> file per la modifica</li>
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
            <li>And replace it with:
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
{/if}</pre>
            </li>
        </ul>
    </li>
    <li><p>Intestazione. Per aggiungere il predefinito personalizzato al gancio Header, è necessario eseguire le seguenti operazioni:</p>
        <ul class="marked-list">
            <li>Apri il<strong>/themes/your_theme/header.tpl</strong> file per la modifica.</li>
            <li>Individuare il seguente codice:
                <pre class="codebox">
{capture name='displayNav'}{hook h='displayNav'}{/capture}
{if $smarty.capture.displayNav}
&lt;div class="nav"&gt;
  &lt;div class="container"&gt;
    &lt;div class="row"&gt;
      &lt;nav>{$smarty.capture.displayNav}&lt;/nav&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
{/if}
&lt;div&gt;
  &lt;div class="container"&gt;
   &lt;div class="row"&gt;
    &lt;div id="header_logo"&gt;
      &lt;a href="{if isset($force_ssl) && $force_ssl}{$base_dir_ssl}{else}{$base_dir}{/if}" title="{$shop_name|escape:'html':'UTF-8'}"&gt;
        &lt;img class="logo img-responsive" src="{$logo_url}" alt="{$shop_name|escape:'html':'UTF-8'}"{if isset($logo_image_width) && $logo_image_width} width="{$logo_image_width}"{/if}{if isset($logo_image_height) && $logo_image_height} height="{$logo_image_height}"{/if}/&gt;
      &lt;/a&gt;
    &lt;/div&gt;
    {if isset($HOOK_TOP)}{$HOOK_TOP}{/if}
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</pre>
            </li>
            <li>E sostituirlo con:
                <pre class="codebox">
{assign var='displayMegaHeader' value={hook h='tmMegaLayoutHeader'}}
{if isset($HOOK_TOP) || $displayMegaHeader}
  {if $displayMegaHeader}
    {$displayMegaHeader}
  {else}
    {capture name='displayNav'}{hook h='displayNav'}{/capture}
    {if $smarty.capture.displayNav}
    &lt;div class="nav"&gt;
      &lt;div class="container"&gt;
        &lt;div class="row"&gt;
          &lt;nav>{$smarty.capture.displayNav}&lt;/nav&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    {/if}
    &lt;div&gt;
      &lt;div class="container"&gt;
       &lt;div class="row"&gt;
        &lt;div id="header_logo"&gt;
          &lt;a href="{if isset($force_ssl) && $force_ssl}{$base_dir_ssl}{else}{$base_dir}{/if}" title="{$shop_name|escape:'html':'UTF-8'}"&gt;
            &lt;img class="logo img-responsive" src="{$logo_url}" alt="{$shop_name|escape:'html':'UTF-8'}"{if isset($logo_image_width) && $logo_image_width} width="{$logo_image_width}"{/if}{if isset($logo_image_height) && $logo_image_height} height="{$logo_image_height}"{/if}/&gt;
          &lt;/a&gt;
        &lt;/div&gt;
        {$HOOK_TOP}
       &lt;/div&gt;
     &lt;/div&gt;
    &lt;/div&gt;
  {/if}
{/if}</pre>
            </li>
        </ul>
    </li>

    <li><p>Piè di pagina del prodotto. Per aggiungere il predefinito personalizzato al gancio del piè di pagina del prodotto, è necessario eseguire quanto segue
            Passi:</p>
        <ul class="marked-list">
            <li>Apri il <strong>/themes/your_theme/product.tpl</strong> file per la modifica.</li>
            <li>Individuare il seguente codice:
                <pre class="codebox">
{if isset($HOOK_PRODUCT_FOOTER) && $HOOK_PRODUCT_FOOTER}{$HOOK_PRODUCT_FOOTER}{/if}                                   </pre>
            </li>
            <li>E sostituirlo con:
                <pre class="codebox">
{assign var='displayMegaProductFooter' value={hook h='tmMegaLayoutProductFooter'}}
  {if isset($HOOK_PRODUCT_FOOTER) || $displayMegaFooter}
    {if $displayMegaProductFooter}
      {$displayMegaProductFooter product=$product category=$category}
    {else}
      {$HOOK_PRODUCT_FOOTER}
    {/if}
  {/if}</pre>
            </li>
        </ul>
    </li>
</ul>

<h4>Hooks</h4>
<p>The module has 5 hooks available by default:</p>
<ul class="index-list">
    <li>'Header' e un gancio che combina 2 ganci standard: displayNav e displayTop. Questo gancio corrisponde al
        intestazione sito web.
    </li>
    <li>'Top Column' corrisponde all'originale displayTopColumn hook. Questo gancio viene subito dopo il gancio Header.
    </li>
    <li>'Home' corrisponde all'originale displayHome hook. Questo gancio è presente solo nella pagina principale.</li>
    <li>'Footer' corrisponde all'originale displayFooter hook.</li>
    <li>'Prodotto Footer' corrisponde all'originale hook DisplayFooterProduct, che viene visualizzato nella pagina del prodotto Footer.
    </li>
</ul>

<h4>TM Mega Layout Main Pannello</h4>
<h4 class="text-secondary">Main Layouts</h4>
<p>Il pannello di configurazione del modulo TM Mega Layout principale che consente di aggiungere un preimpostazione al gancio richiesto e configurarlo
    il preset.</p>
<figure class="img-polaroid"><img src="img/tmmegalayout100-main-panel.png" alt=""/></figure>

<h5>Aggiunta del preset</h5>
<ul class="index-list">
    <li>
        <p>Premere '+ Aggiungi preset' (1) nella scheda necessaria.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-preset-1.png" alt=""/></figure>
    </li>
    <li>
        <p>Successivamente, compilare il campo 'Inserisci nome layout' nella finestra popup digitando il nuovo titolo preimpostato (2) e premere
            'Salva' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-preset-2.png" alt=""/></figure>
    </li>
    <li>
        <p>Il Preset è stato creato con successo, è elencato tra i preset disponibili (4). Il preset appena creato è
            Selezionato per la modifica (5).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-preset-3.png" alt=""/></figure>
    </li>
</ul>

<h5>Preset attivazione</h5>
<ul class="index-list">
    <li>
        <p>Prima di tutto, selezionare la preset necessaria dall'elenco (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-activation-preset-1.png" alt=""/></figure>
    </li>
    <li>
        <p>Premere il commutatore 'Utilizza come difetto' (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-activation-preset-2.png" alt=""/></figure>
    </li>
    <li>
        <p>Il preimpostazione è stato attivato. Se è necessario visualizzare questo predefinito solo su alcune pagine, aprire il menu a discesa (3) e
            Selezionare le pagine necessarie. Per applicare le modifiche, fare clic fuori dall'area di elenco. Un preset che viene visualizzato su tutti
            Le pagine verranno contrassegnate con una stella riempita nell'elenco delle preselezioni e quella visualizzata solo su alcuni
            Le pagine saranno contrassegnate da una stella parzialmente riempita.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-activation-preset-3.png" alt=""/></figure>
    </li>
</ul>

<h5>Rimozione del preimpostazione</h5>
<p class="alert alert-warning"><span>Non è possibile ripristinare il preset dopo la rimozione.</span></p>
<ul class="index-list">
    <li>
        <p>Per rimuovere il preimpostato, scegliere il preset richiesto tra l'elenco (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-delete-preset-1.png" alt=""></figure>
    </li>
    <li>
        <p>Quindi, premere un carrello (2) vicino al titolo preimpostato.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-delete-preset-2.png" alt=""></figure>
    </li>
    <li>
        <p>Il preimpostazione è stato rimosso con successo.</p>
    </li>
</ul>

<h5>Rinominare il preset</h5>
<ul class="index-list">
    <li>
        <p>Per rinominare il preimpostazione, scegliere il preset richiesto tra l'elenco (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-rename-preset-1.png" alt=""></figure>
    </li>
    <li>
        <p>Quindi, premere un'icona a matita (2) accanto al titolo preimpostato.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-rename-preset-2.png" alt=""></figure>
    </li>
    <li>
        <p>Specificare il nuovo titolo preimpostato (3) in un popup e premere 'Rinomina layout' (4).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-rename-preset-3.png" alt=""></figure>
    </li>
    <li>
        <p>Il preimpostazione è stato rinominato.</p>
    </li>
</ul>

<h4>Wrapper</h4>
<p>Wrapper non ha alcuna classe per impostazione predefinita, non è un elemento obbligatorio.</p>
<h5>Aggiunta del wrapper</h5>
<ul class="index-list">
    <li>
        <p>Per creare un wrapper, premi '+ Aggiungi wrapper' (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-wrapper-1.png" alt=""></figure>
    </li>
    <li>
        <p>Wrapper è stato aggiunto (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-wrapper-2.png" alt=""></figure>
    </li>
</ul>

<h5>Aggiungere la classe CSS personalizzata al wrapper</h5>
<p>L'aggiunta della classe personalizzata ti consente di creare uno stile specifico per il tuo wrapper utilizzando le regole CSS.</p>
<ul class="index-list">
    <li>
        <p>Per aggiungere la classe wrapper, premere il pulsante (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-wrapper-add-class-1.png" alt=""></figure>
    </li>
    <li>
        <p>Verrà visualizzata una finestra pop-up, compilare il campo 'Inserisci classi di wrapper' (2) e premi 'Conferma' (3)
            pulsante.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-wrapper-add-class-2.png" alt=""></figure>
    </li>
    <li>
        <p>La classe personalizzata è stata aggiunta correttamente.</p>
    </li>
</ul>

<h5>Eliminazione del wrapper</h5>
<p class="alert alert-warning"><span>La cancellazione dell'elemento preimpostato provoca anche la rimozione di tutti i suoi elementi figlio e dei loro stili.</span>
</p>
<ul class="index-list">
    <li>
        <p>Per rimuovere il wrapper, premere il pulsante carrello (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-delete-wrapper-1.png" alt=""></figure>
    </li>
    <li>
        <p>Per rimuovere il wrapper, premere il pulsante carrello (1).</p>
    </li>
</ul>

<h5>Styling il wrapper</h5>
<ul class="index-list">
    <li>
        <p>Per aggiungere gli stili personalizzati al wrapper, premere l'icona "matita" (1) nel blocco wrapper.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-wrapper-add-styles-1.png" alt=""></figure>
    </li>
    <li>
        <p>Nella seguente finestra popup compilare tutti i campi necessari (si può fare riferimento alla documentazione 'Styling'
            Sezione) e premere il pulsante 'Salva' (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-wrapper-add-styles-2.png" alt=""></figure>
    </li>
    <li>
        <p>Se tutti i campi vengono riempiti correttamente, gli stili verranno salvati.</p>
    </li>
</ul>

<h4>Riga</h4>
<p>Elemento della riga dalla griglia Bootstrap. È un elemento richiesto.</p>
<h5>Aggiunta della riga</h5>
<ul class="index-list">
    <li>
        <p>Per inserire una nuova riga, premere '+ Aggiungi riga' (1) nel blocco wrapper o '+ Aggiungi riga' (2) nella finestra principale
            Blocco predefinito o '+ Aggiungi riga' (3) nell'elenco a discesa colonna.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-row-1.png" alt=""></figure>
    </li>
    <li>
        <p>La riga è stata aggiunta correttamente.</p>
    </li>
</ul>

<h5>Aggiungere la classe CSS personalizzata alla riga</h5>
<p>L'aggiunta di classi personalizzate consente di creare uno stile di righe personalizzato utilizzando le regole CSS.</p>
<ul class="index-list">
    <li>
        <p>Per aggiungere la classe alla riga, è necessario premere il pulsante 'ellissi' (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-edit-row-1.png" alt=""></figure>
    </li>
    <li>
        <p>Scegli la 'Modifica riga' (2) in un elenco a discesa.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-edit-row-2.png" alt=""></figure>
    </li>
    <li>
        <p>Compilare il campo 'Inserisci riga classi' (3) nella finestra pop-up e premere il pulsante 'Confirm' (4).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-edit-row-3.png" alt=""></figure>
    </li>
    <li>
        <p>La classe personalizzata è stata aggiunta correttamente.</p>
    </li>
</ul>

<h5>Eliminazione della riga</h5>
<p class="alert alert-warning">
    <span>La rimozione dell'elemento preimpostato causerà anche la rimozione dei suoi articoli per bambini e dei loro stili.</span></p>
<ul class="index-list">
    <li>
        <p>Per rimuovere la riga, aprire il menu (l'icona "ellissi") nel blocco di riga.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-delete-row-1.png" alt=""></figure>
    </li>
    <li>
        <p>Scegliere l'opzione 'Elimina' (2) nell'elenco a discesa.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-delete-row-2.png" alt=""></figure>
    </li>
    <li>
        <p>La riga è stata rimossa correttamente.</p>
    </li>
</ul>

<h5>Aggiunta di stili alla riga</h5>
<ul class="index-list">
    <li>
        <p>Per aggiungere stili di riga, aprire il menu (l'icona "ellissi") (1) in un blocco di riga.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-row-add-styles-1.png" alt=""></figure>
    </li>
    <li>
        <p>Premere 'Stilizza' (2) nell'elenco a discesa.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-row-add-styles-2.png" alt=""></figure>
    </li>
    <li>
        <p>Verrà visualizzata la finestra pop-up, compilare tutti i campi necessari (si può fare riferimento alla documentazione
            'Styling') e premere il pulsante 'Salva' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-row-add-styles-3.png" alt=""></figure>
    </li>
    <li>
        <p>Se tutti i campi vengono riempiti correttamente, gli stili verranno salvati.</p>
    </li>
</ul>

<h4>Colonna</h4>
<p>È un elemento con larghezza di blocco configurabile per diverse dimensioni, basato su griglia Bootstrap.</p>
<h5>Aggiunta della colonna</h5>
<ul class="index-list">
    <li>
        <p>Per inserire una colonna in una riga necessaria, aprire il menu (l'icona "ellissi") (1)</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-col-1.png" alt=""></figure>
    </li>
    <li>
        <p>Scegli l''+ Aggiungi Col' (2) nell'elenco.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-col-2.png" alt=""></figure>
    </li>
    <li>
        <p>Compilare i campi (col-xs *, col-sm *, col-md *, col-lg - classi di bootstrap) nella finestra pop-up e premere
            'Conferma' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-col-3.png" alt=""></figure>
    </li>
    <li>
        <p>La colonna è stata aggiunta con successo.</p>
    </li>
</ul>

<h5>Rimozione della colonna</h5>
<p class="alert alert-warning">
    <span>La rimozione dell'elemento predefinito causerà anche la cancellazione dei suoi elementi figlio e dei loro stili.</span></p>
<ul class="index-list">
    <li>
        <p>Per rimuovere la colonna, aprire il menu (l'icona "ellissi") in un blocco di colonna (1)</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-detele-col-1.png" alt=""></figure>
    </li>
    <li>
        <p>Premere 'Elimina' (2) nell'elenco.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-detele-col-2.png" alt=""></figure>
    </li>
    <li>
        <p>La colonna e tutti i suoi elementi figlio sono stati rimossi.</p>
    </li>
</ul>

<h5>Modifica della colonna</h5>
<ul class="index-list">
    <li>
        <p>Per modificare la colonna, aprire il menu (l'icona 'ellissi') (1) nel blocco colonna.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-edit-col-1.png" alt=""></figure>
    </li>
    <li>
        <p>Premere 'Modifica colonna' (2) nell'elenco.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-edit-col-2.png" alt=""></figure>
    </li>
    <li>
        <p>Compilare i campi (col-xs *, col-sm *, col-md *, col-lg - classi di bootstrap) nella finestra pop-up e premere
            'Conferma'.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-edit-col-3.png" alt=""></figure>
    </li>
    <li>
        <p>La colonna è stata modificata correttamente.</p>
    </li>
</ul>

<h5>Aggiunta di stili alla colonna</h5>
<ul class="index-list">
    <li>
        <p>Per aggiungere gli stili di colonna, aprire il menu (l'icona 'ellissi') (1) in un blocco di colonne.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-col-add-styles-1.png" alt=""></figure>
    </li>
    <li>
        <p>Premere 'Stilizza' (2) nell'elenco delle opzioni.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-col-add-styles-2.png" alt=""></figure>
    </li>
    <li>
        <p>Verrà visualizzata la finestra pop-up, compilare tutti i campi necessari (si può fare riferimento alla documentazione
            'Styling') e premere il pulsante 'Salva' (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-col-add-styles-3.png" alt=""></figure>
    </li>
    <li>
        <p>Se tutti i campi vengono riempiti correttamente, gli stili verranno salvati.</p>
    </li>
</ul>

<h4>Modulo</h4>
<p>Modulo assegnato a questo hook.</p>
<h5>Aggiunta del modulo</h5>
<p class="alert alert-warning"><span>Fare attenzione quando si aggiungono moduli alla preselezione, alcuni dei moduli sono auspicabili da utilizzare se non modificano il layout visibile, ad esempio il modulo data per le statistiche.</span>
</p>
<ul class="index-list">
    <li>
        <p>Per aggiungere il modulo alla preimpostazione in un blocco di colonna, aprire il menu (l'icona 'ellissi') (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-module-1.png" alt=""></figure>
    </li>
    <li>
        <p>Premere il pulsante '+ Add Module' (2) nell'elenco delle opzioni disponibili.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-module-2.png" alt=""></figure>
    </li>
    <li>
        <p>Se necessario, è possibile immettere la classe personalizzata (3) nella finestra pop-up e selezionare il modulo (4), premere successivamente
            'Conferma' (5).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-add-module-3.png" alt=""></figure>
    </li>
    <li>
        <p>Il modulo è stato aggiunto con successo.</p>
    </li>
    <li>
        <p>In questa versione di TM Mega Layout è possibile aggiungere il modulo "Pagina iniziale" in Home hook.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout110-add-module-tabs.png" alt=""></figure>
        <p>Può anche essere personalizzato come tutti gli altri moduli in Mega Layout.</p>
    </li>
</ul>

<h5>Eliminazione del modulo</h5>
<p class="alert alert-warning">
    <span>La rimozione dell'elemento preimpostato causerà anche la rimozione dei suoi articoli per bambini e dei loro stili.</span></p>
<ul class="index-list">
    <li>
        <p>Per rimuovere il modulo, aprire il menu (l'icona "ellissi") (1) nel blocco modulo.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-delete-module-1.png" alt=""></figure>
    </li>
    <li>
        <p>Premere 'Elimina' (2) nell'elenco delle opzioni disponibili.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-delete-module-2.png" alt=""></figure>
    </li>
    <li>
        <p>Il modulo viene rimosso.</p>
    </li>
</ul>

<h5>Aggiungere classe personalizzata al modulo</h5>
<p>L'aggiunta di classi personalizzate consente di creare lo styling del modulo utilizzando le regole CSS.</p>
<ul class="index-list">
    <li>
        <p>Per specificare la classe personalizzata per il modulo, aprire il menu nel blocco modulo (l'icona "ellissi")
            (1).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-module-add-class-1.png" alt=""></figure>
    </li>
    <li>
        <p>Premere poi 'Modifica impostazioni' (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-module-add-class-2.png" alt=""></figure>
    </li>
    <li>
        <p>Specificare la classe personalizzata (3) nella finestra pop-up e premere il pulsante 'Confirm' (4).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-module-add-class-3.png" alt=""></figure>
    </li>
    <li>
        <p>La classe personalizzata è stata aggiunta.</p>
    </li>
</ul>

<h5>Logo, Copyright</h5>
<p>I blocchi Logo e Copyright vengono modificati allo stesso modo dei moduli, fatta eccezione per il fatto che Logo può essere inserito solo in
    La posizione di intestazione o piè di pagina e il blocco Copyright possono essere collocati solo nella posizione Footer.</p>

<h4 class="text-secondary">Prodotto Pagina</h4>
<h5>Scheda Product Info</h5>
<h6>Con questa scheda puoi cambiare i layout della pagina dei prodotti. Apparirà nel pannello di amministrazione dopo aver eseguito alcune azioni semplici descritte di seguito.</h6>
<h5>Creazione layout</h5>
<h6>I layout vengono creati e modificati manualmente.</h6>
<ul class="index-list">
    <li><p>Crea cartella 'product_pages' nella cartella dei temi.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout110-product-info-3.png" alt=""></figure>
    </li>
    <li>Nella cartella tema trovi il file 'product.tpl', copialo nella cartella creata 'product_pages' e rinomina 'default.tpl'. Per creare più layout - duplicare questo file, rinominarlo (ad esempio, "layout_1.tpl", "layout_2.tpl") e modificare la struttura in base alle proprie esigenze.</li>
    <li>Crea file 'config.json' in questa cartella. Copia il codice riportato di seguito:
        <pre class="codebox">
{
  "default": {
    "name": "Default",
    "preview": "default.jpg",
    "default": 1
  }
}</pre>
        <ul class="marked-list">
            <li><strong>"default"</strong> - nome del file .pl con la struttura della pagina del prodotto.</li>
            <li>"nome": <strong>"Default"</strong> - titolo del layout della pagina di prodotto nelle impostazioni del modulo.
            </li>
            <li>"preview": <strong>"default.jpg"</strong> - anteprima del layout della pagina di prodotto nelle impostazioni del modulo; L'immagine dovrebbe trovarsi nella cartella 'product_pages'.
            </li>
            <li><p>"default": <strong>1</strong> - impostare su '1' se il layout deve essere impostato come predefinito</p><br>
                <p class="alert small alert-warning">uno dei layout dovrebbe contenere il valore '1' da impostare come impostazione predefinita.</p>
            </li>
        </ul>
        <p>Questo codice dovrebbe essere duplicato per ogni layout creato e contenere i valori corrispondenti. Per esempio:</p>
        <pre class="codebox">
{
  "default": {
    "name": "Default",
    "preview": "default.jpg",
    "default": 0
  },
  "layout_1": {
    "name": "Layout 1",
    "preview": "layout_1.jpg",
    "default": 0
  },
  "layout_2": {
    "name": "Layout 2",
    "preview": "layout_2.jpg",
    "default": 1
  }
}</pre>
    </li>
    <li>Apri il file 'product.tpl' nella cartella dei temi. Eliminare tutto e incollare il seguente codice:
        <pre class="codebox">
{include file="$tpl_dir./errors.tpl"}
{if $errors|@count == 0}
  {if isset($megalayoutProductInfoPage) && $megalayoutProductInfoPage}
    {assign var='path' value="./product_pages/`$megalayoutProductInfoPage`"}
    {include file=$path}
  {else}
    {include file='./product_pages/default.tpl'}
  {/if}
{/if}</pre>
    </li>
    <li>Per aggiungere/modificare gli stili di qualsiasi layout di una pagina di prodotto, accedi a your_theme_folder/css/e aggiungi la nuova cartella 'product_pages'. In questa cartella crea il file con il nome del layout e l'estensione .css (ad esempio, "default.css", "layout_1.css", "layout_2.css"). Questi file devono contenere stili del layout della pagina di prodotto corrispondente.</li>
    <li>Per aggiungere script a qualsiasi layout di pagina di prodotti, andare a your_theme_folder/js/e aggiungere una nuova cartella 'product_pages'. In questa cartella crea un file con il nome del layout e l'estensione .js (ad esempio, "default.js", "layout_1.js", "layout_2.js"). Questi file devono contenere gli script del relativo layout di pagina di prodotto.</li>
</ul>
<h5>Switching layouts</h5>
<p>Seleziona "Pagina prodotto" dall'elenco a discesa (1) e fai clic sulla scheda "Informazioni sul prodotto" (2).</p>
<figure class="img-polaroid"><img src="img/tmmegalayout110-product-info-1.png" alt=""></figure>
<p>In questa scheda è possibile cambiare i layout della pagina dei prodotti. L'immagine di layout con il bordo grigio è impostata come impostazione predefinita.</p>
<figure class="img-polaroid"><img src="img/tmmegalayout110-product-info-2.png" alt=""></figure>

<h5>Esportazioni preimpostate</h5>
<p>Lo strumento Esporta consente di esportare i preset per l'ulteriore importazione in diversi negozi.</p>
<ul class="index-list">
    <li>
        <p>Passare alla scheda "Strumenti" (1) nel pannello delle configurazioni principali.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-export-preset-1.png" alt=""></figure>
    </li>
    <li>
        <p>Seleziona 'Esporta' (2) nel modulo.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-export-preset-2.png" alt=""></figure>
    </li>
    <li>
        <p>Vedrai l'elenco dei preset esistenti nei ganci del sito.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-export-preset-3.png" alt=""></figure>
    </li>
    <li>
        <p>Per visualizzare in anteprima la preimpostazione, premere il pulsante "Anteprima layout" (3) accanto al preimpostazione necessario, al fine di
            Esporta, premi il pulsante 'Esporta layout' (4).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-export-preset-4.png" alt=""></figure>
    </li>
    <li>
        <p>Quindi sarai in grado di scaricare questo preset come archivio zip.</p>
    </li>
</ul>

<h5>Importazione predefinita</h5>
<p class="alert alert-warning"><span>Lo strumento di importazione accetta solo i file * .zip predefiniti precedentemente generati con lo stesso strumento Strumento di esportazione.</span>
</p>
<ul class="index-list">
    <li>
        <p>Per importare il preimpostato, è necessario aprire il file <strong>Strumenti (1)</strong> tab e scegliere <strong>'Importa'
                (2)</strong>.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-import-preset-1.png" alt=""/></figure>
    </li>
    <li>
        <p>Avanti, premi il tasto <strong>Aggiungi file (3)</strong> E seleziona il file zip del predefinito esportato. Nel caso
            Questo archivio è il preset esportato, vedrai questa anteprima preimpostata.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-import-preset-2.png" alt=""/></figure>
    </li>
    <li>
        <p>Se questo preset soddisfa le tue esigenze, premere <strong>'Importa' (4)</strong>. Il preset verrà importato e aggiunto
            All'elenco dei preset disponibili.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-import-preset-3.png" alt=""/></figure>
    </li>
</ul>

<h5>Resetta</h5>
<p>'Resetta' ritorna tutti i preset allo stato iniziale (al modo in cui sono venuti con il modello) e scarta tutti
    Creati preimpostati.</p>
<p class="alert alert-warning"><span>Attenzione! Dopo aver ripristinato i preset allo stato predefinito, tutti i preset personalizzati verranno eliminati!</span>
</p>
<ul class="index-list">
    <li>
        <p>Per ripristinare i preset, passare alla scheda "Strumenti" (1). Nel blocco apparso aprire la scheda "Opzioni" (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-reset-1.png" alt=""></figure>
    </li>
    <li>
        <p>Premere il pulsante 'Resetta'.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-reset-2.png" alt=""></figure>
    </li>
    <li>
        <p>Questo è tutto! Tutti i preset vengono ripristinati allo stato iniziale.</p>
    </li>
</ul>

<!--optimization-->
<h5>Ottimizzazione di stili e script</h5>
<p>L'ottimizzazione degli stili e degli script aggiunge esclusioni per i moduli nella sezione Intestazione, in base al loro utilizzo nei preset. Questo
    Consente di accelerare la velocità di caricamento della pagina. L'ottimizzazione funziona in modalità test. </ P>
<P> Attivazione dell'ottimizzazione:</p>
<ul class="index-list">
    <li>
        <p>Per attivare l'ottimizzazione, aprire la scheda 'Strumenti' (1) e selezionare la scheda 'Opzioni' (2).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-optimization-1.png" alt=""></figure>
    </li>
    <li>
        <p>Nella finestra apparente, è possibile abilitare l'ottimizzazione (3).</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-optimization-2.png" alt=""></figure>
    </li>
</ul>
<p>Se l'ottimizzazione è attivata quando si modifica ed abilita i preset, l'ottimizzazione viene eliminata, ma vedrai una finestra
    offrendo di eseguire l'ottimizzazione. Non è necessario ottimizzare gli script e gli stili ogni volta che si cambiano i preset. Suo
    meglio ottimizzarli quando hai finito di modificare.</p>
<figure class="img-polaroid"><img src="img/tmmegalayout100-optimization-3.png" alt=""></figure>

<h5>Styling</h5>
<ul class="index-list">
    <li>
        <p>Stili di sfondo. Descrizione dei campi:</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-styles-1.png" alt=""/></figure>
        <ul class="marked-list">
            <li>Background-image (immagine di sfondo) - l'URL dell'immagine o il valore "none". L'immagine viene selezionata dal file
                ~ /images/cms/cartella.
            </li>
            <li>background-color (colore di sfondo) - il valore può essere impostato in qualsiasi formato di colore (rgb, hex, ecc.). Puoi
                Scegli il colore usando lo strumento colorpicker.
            </li>
            <li>ripetizione di sfondo (ripetizione di sfondo) - tutte le opzioni disponibili sono elencate nei pulsanti di scelta rapida.
            </li>
            <li>posizione di sfondo (posizione di sfondo) - tutte le opzioni disponibili sono elencate nell'elenco a discesa.
            </li>
            <li>dimensione di sfondo (dimensione di sfondo) - tutte le opzioni disponibili sono elencate nell'elenco a discesa.</li>
            <li>background-origine (regione di posizionamento dell'immagine di sfondo) - tutte le opzioni disponibili sono elencate nella finestra di dialogo
                cadere in picchiata.
            </li>
        </ul>
    </li>
    <li><p>Bordo stili.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-styles-2.png" alt=""/></figure>
        <ul class="marked-list">
            <li>border-top-style, border-right-style, border-left-style, border-bottom-style (stili di bordo) - tutto
                Le opzioni disponibili sono elencate nell'elenco a discesa.
            </li>
            <li>bordo-larghezza-larghezza, bordo-destra-larghezza, bordo-sinistra-larghezza, bordo-fondo-larghezza (larghezza bordi) - dovrebbe essere
                Impostato in pixel.
            </li>
            <li>border-top-сolor, border-right-color, border-left-color, border-bottom-color (colore dei bordi) - il valore
                può essere impostato in qualsiasi formato di colore (rgb, hex, ecc.). È possibile scegliere il colore utilizzando lo strumento di coloratore.
            </li>
            <li>il raggio del bordo superiore-destro, il raggio di bordo superiore-sinistro, il bordo inferiore-destro destro, il raggio di fondo-basso-sinistra
                (Raggio di bordo) - deve essere impostato in pixel.
            </li>
        </ul>
    </li>
    <li><p>Altri stili.</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-styles-3.png" alt=""/></figure>
        <ul class="marked-list">
            <li>box-shadow (shadow box) - esempio: 0px 0px 0px 0px rgba (0,0,0,0,75).</li>
        </ul>
    </li>
</ul>

<h5>Rimuove gli stili degli elementi</h5>
<ul class="index-list">
    <li>
        <p>Per rimuovere gli stili degli articoli, aprire la sezione di oggetti e premere 'Cancella gli stili' (1)</p>
        <figure class="img-polaroid"><img src="img/tmmegalayout100-clear-styles-1.png" alt=""/></figure>
    </li>
</ul>

<h5>Avvertenze</h5>
<p>Se il seguente messaggio viene visualizzato nel blocco di elementi del modulo, è necessario abilitare il modulo di cui sopra.</p>
<figure class="img-polaroid"><img src="img/tmmegalayout100-module-warning-1.png" alt=""></figure>
<p>Se nel blocco di elementi del modulo viene visualizzato il seguente messaggio, è necessario installare il modulo di cui sopra.</p>
<figure class="img-polaroid"><img src="img/tmmegalayout100-module-warning-2.png" alt=""></figure>
<p>Se si rimuove o disattiva il modulo TM Mega Layout, tutti i preset attivi verranno disabilitati e si
    vedere le posizioni (ganci) nel loro aspetto originario.</p>