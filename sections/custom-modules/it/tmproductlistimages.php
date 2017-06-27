<h3>TM Prodotto Lista Immagine</h3>
<p>Il modulo visualizza una galleria di tutte le immagini disponibili del prodotto nell'elenco dei prodotti
    Pagine.</p>
<h5>Installazione e eliminazione</h5>
<p>Il modulo può essere installato e cancellato come qualsiasi altro modulo PrestaShop.</p>
<h5>Configurazione del modulo</h5>
<p>Il modulo non dispone di ulteriori impostazioni.</p>
<h5>Ulteriori azioni</h5>
<p>Per abilitare la funzionalità del modulo è necessario aggiungere la seguente riga del codice:</p>
<p><code>{hook h='displayProductListGallery' product=$product}</code></p>
<p>in <strong>product-list.tpl</strong> file nella cartella principale del tuo tema dopo
    Il tag di chiusura<code>&lt;/a&gt;</code> con il <code>.product_img_link</code>
    classe.</p>
