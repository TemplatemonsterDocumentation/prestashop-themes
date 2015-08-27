<h3>TM Product List Gallery</h3>

<p>Questo modulo permette di visualizzare una galleria con tutte le immagini dei
    prodotti disponibili sulla lista prodotti.</p>
<h5>Installazione ed eliminazione</h5>

<p>Il modulo va installato ed eliminato come tutti gli altri moduli PrestaShop.</p>
<h5>Configurazione Modulo</h5>

<p>Il modulo non ha impostazioni aggiuntive.</p>
<h5>Azioni aggiuntive</h5>

<p>Per abilitare le funzionalità del modulo si deve aggiungere la seguente riga di
    codice:</p>

<p><code>{hook h='displayProductListGallery' product=$product}</code></p>

<p>sul file <strong>product-list.tpl</strong> nella cartella principale del tema dopo il
    tag di chiusura <code>&lt;/a&gt;</code> con classe <code>.product_img_link</code>.
</p>
