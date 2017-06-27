<h3>TM Search 1.1.0</h3>
<?php if ($project == 'eveprest' ) { ?>
  <div>
    <p style="margin-bottom: 0;">Disponibile in:</p>
    <p style="margin-top: 0;" class="small text-secondary">Moda, Elettronica, Ricambi, Mobilio</p>
  </div>
<?php } ?>
<p>Questo modulo è una versione di ricerca estesa che consente di selezionare una categoria specifica per la ricerca all'interno del suo contenuto. È inoltre possibile modificare la categoria dopo la definizione della query. Fornisce inoltre la possibilità di impostare la visualizzazione di informazioni aggiuntive sui prodotti (descrizione/prezzo/produttore, ecc.) E definire il layout dei contenitori dei risultati della ricerca, ad esempio, è possibile dividere i risultati in alcune sezioni con i controlli (pagination, next/Precedente/mostra tutto). Tutte le impostazioni del modulo sono disponibili nel pannello di amministrazione principale.</p>
<h4>Installazione e eliminazione</h4>
<p class="alert alert-warning">
    Se la versione 1.0.5 di questo modulo è installata nel motore di prestashop, non si suggerisce di aggiornarlo con quello corrente. Innanzitutto è necessario rimuovere la vecchia versione del modulo per eseguire senza errori.
</p>
<p>Il modulo viene installato e cancellato come qualsiasi altro modulo Prestashop.</p>
<h4>Configurazione del modulo</h4>
<p>Dopo aver installato il modulo è possibile impostarlo sulla pagina di configurazione del modulo.</p>
<figure class="img-polaroid"><img src="img/tmsearch110-1.png" alt="" /></figure>
<ul class="marked-list">
  <li><strong>Abilitare Ajax Search</strong> - consente la ricerca in diretta in un menu a discesa.</li>
  <li><strong>Abilitare Instant Search</strong> - consente la ricerca immediata.</li>
  <li><strong>Minimum query lunghezza</strong> - numero di simboli per avviare la visualizzazione del risultato.</li>
  <li><strong>Number of shown risultati</strong> - numero di prodotti che si presentano nella sezione risultati (numero di prodotti per pagina per la modalità "pager" o "navigazione").</li>
  <li><strong>Display "Mostra Tutti" pulsante</strong> - visualizza il pulsante "Mostra tutto" sotto la sezione risultati, il clic su di essa mostra tutti i risultati trovati.</li>
  <li><strong>Display pager</strong> - divide i risultati in pagine (dipende dal valore del campo "Numero di risultati mostrati") e visualizza i collegamenti a essi.</li>
  <li><strong>Display navigazione</strong> - mostra i pulsanti Precedente / Successivo.</li>
  <li><strong>Position of navigation</strong> - ganci, per mostrare la navigazione (sono disponibili le opzioni top / both / bottom).</li>
  <li><strong>Highlight query resultato</strong> - evidenzia il testo che corrisponde alla query di ricerca.</li>
  <li><strong>Display immagine in Ajax search</strong> - mostra le immagini dei prodotti nella sezione risultati.</li>
  <li><strong>Display descrizione n Ajax search</strong> - mostra la descrizione del prodotto nella sezione risultati.</li>
  <li><strong>Display prezzi in Ajax search</strong> - mostra il prezzo dei prodotti nella sezione risultati.</li>
  <li><strong>Display riferimento in Ajax search</strong> - mostra il riferimento del prodotto nella sezione risultati.</li>
  <li><strong>Display produttore in Ajax search</strong> - mostra il produttore del prodotto nella sezione risultati.</li>
  <li><strong>Display fornitori in Ajax search</strong> - mostra i fornitori di prodotti nella sezione risultati.</li>
</ul>
<p class="alert alert-warning"><span>Alcuni parametri potrebbero differire a seconda della combinazione utilizzata.</span></p>