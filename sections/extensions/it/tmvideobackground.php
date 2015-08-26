<h3>Modulo Video Background</h3>

<p>Questo modulo permette di aggiungere video a qualunque blocco sulla tua pagina HTML (deve esserci l'id o un tag
    unico).</p>

<h6>Per aggiungere un video sullo sfondo segui questa procedura:</h6>

<ol class="index-list">
    <li>Carica i file video e le immagini di anteprima sulla cartella modules/tmvideobackground/video (o su qualunque
        altra cartella sul server) via FTP. Il video va caricato in 3 formati: .mp4, .ogv, .webm, tutti i file con lo
        stesso nome (ocean.mp4, ocean.ogv, ocean.webm). Anche le immagini di anteprima vanno caricate in 3 formati:
        .jpg, .gif, .png e allo stesso modo deve avere lo stesso nome (ocean.jpg, ocean.gif, ocean.png). </li>

    <li> Dal pannello di amministrazione, apri il <strong>modulo Video background
            (Modules->Front Office Features->Video background module)</strong> e inserisci le impostazioni appropriate.


        <h6><strong>Impostazioni:</strong></h6>

        <ol class="index-list">
            <li>
                <dl class="inline-term">
                    <dt>Video selector</dt>
                    <dd>l'elemento della pagina HTML in cui verrà aggiunto il video di sfondo(id o tag unico (body,
                        header, footer, ecc.).
                    </dd>
                </dl>
            </li>

            <li>
                <dl class="inline-term">
                    <dt>Video path</dt>
                    <dd>il percorso verso il tuo file video (il percorso deve avere un simbolo / alla fine), i file
                        possono essere messi su qualunque cartella del server ma il consiglio è di metterli in<
                        <strong> modules/tmvideobackground/video/</strong>.
                    </dd>
                </dl>
            </li>

            <li>
                <dl class="inline-term">
                    <dt>Video files name</dt>
                    <dd>i nomi dei tuoi file video. Va aggiunto solo il nome, senza aggiungere il formato (quindi, ad
                        es., "ocean").
                    </dd>
                </dl>
            </li>

            <li>Clicca su <strong>Save</strong>.</li>
        </ol>
    </li>
</ol>
<figure class="img-polaroid">
    <img src="img/video.png" alt="">
</figure>
<p class="alert alert-info">Per visualizzare il video, non va aggiunto nessun altro elemento di sottofondo per questo
    elemento.</p>
