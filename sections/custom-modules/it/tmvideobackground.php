<h3>Video Background Modulo</h3>
<p>Questo modulo consente di aggiungere il video di sfondo a qualsiasi blocco nella tua pagina HTML (dovrebbe essere l'ID o univoco
    tag).</p>
<h6>Per aggiungere il video di sfondo, è possibile seguire i passaggi riportati di seguito:</h6>
<ul class="index-list">
    <li>Carica i file video e visualizza l'anteprima delle immagini in moduli / tmvideobackground / cartella video (o qualsiasi altra cartella inserita)
        Server) via FTP. Il video dovrebbe essere caricato in 3 formati: .mp4, .ogv, .webm, tutti i file con gli stessi nomi
        (Ocean.mp4, ocean.ogv, ocean.webm). L'anteprima delle immagini dovrebbe essere anche in tre formati: .jpg, .gif, .png e l'immagine
        Gli stessi nomi (ocean.jpg, ocean.gif, ocean.png).
    </li>
    <li><p>Nel pannello di amministrazione aperto <strong>Video background modulo</strong> (Moduli -> Funzioni Front Office -> Video
            Modulo di sfondo) e eseguire
            Le impostazioni necessarie.</p>
        <h6><strong>Impostazioni:</strong></h6>
        <ul class="marked-list">
            <li>
                <dl class="inline-term">
                    <dt>Video selector</dt>
                    <dd>elemento della pagina HTML in cui verrà aggiunto il video di sfondo (id o univoco (corpo, intestazione,
                        Footer, ecc.).
                    </dd>
                </dl>
            </li>
            <li>
                <dl class="inline-term">
                    <dt>Video path</dt>
                    <dd>Percorso ai tuoi file video (il percorso dovrebbe avere '/' alla fine), i file possono essere posizionati in uno qualsiasi
                        Sul server, ma ti consigliamo di caricarli
                        <strong> modules/tmvideobackground/video/ </strong> cartella.
                    </dd>
                </dl>
            </li>
            <li>
                <dl class="inline-term">
                    <dt>Nome file video</dt>
                    <dd>Nome dei tuoi file video. È necessario aggiungere solo il nome (non è necessario scrivere il formato). Per
                        Esempio, "oceano".
                    </dd>
                </dl>
            </li>
            <li>Click <strong>'Salva'</strong> pulsante.</li>
        </ul>
    </li>
</ul>
<figure class="img-polaroid">
    <img src="img/video.png" alt=""/>
</figure>
<p class="alert alert-info">Per visualizzare il video, non dovrebbe essere aggiunto alcun altro sfondo per questo elemento.</p>