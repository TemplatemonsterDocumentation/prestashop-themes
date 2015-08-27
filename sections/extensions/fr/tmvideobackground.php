<h3>Module de Vidéo en Arrière-Plan</h3>

<p>Ce module permet d'ajouter l'arrière-plan vidéo à n'importe quel bloc de votre page HTML (il doit y avoir l'id ou la
    balise unique).</p>

<h6>Pour ajouter la vidéo d'arrière-plan, vous pouvez suivre les étapes ci-dessous:</h6>

<ol class="index-list">
    <li>Uploadez les fichiers vidéos et les images d'aperçu dans le dossier modules/tmvideobackground/video (ou
        n'importe quel autre dossier du serveur) par FTP. Les vidéos doivent être uploadées en 3 formats: .mp4, .ogv,
        .webm, tous les fichiers ayant les mêmes noms (ocean.mp4, ocean.ogv, ocean.webm). Les images d'aperçu doivent
        elles-aussi être en 3 formats: .jpg, .gif, .png et avoir les mêmes noms (ocean.jpg, ocean.gif, ocean.png). </li>

    <li> Dans votre panneau d'administration, ouvrez <strong>Video background module
            (Modules->Front Office Features->Video background module)</strong> et réglez les paramètres requis.


        <h6><strong>Paramètres:</strong></h6>

        <ol class="index-list">
            <li>
                <dl class="inline-term">
                    <dt>Video selector</dt>
                    <dd>l'élément de la page HTML auquel la vidéo d'arrière-plan sera ajoutée (id ou balise unique
                        (body, header, footer, etc.).
                    </dd>
                </dl>
            </li>

            <li>
                <dl class="inline-term">
                    <dt>Video path</dt>
                    <dd>le chemin vers vos fichiers vidéo (le chemin doit avoir / à la fin), les fichiers peuvent se
                        trouver dans n'importe quel dossier sur le serveur, mais nous recommandons de les uploader dans
                        le dossier
                        <strong>modules/tmvideobackground/video/</strong>.
                    </dd>
                </dl>
            </li>

            <li>
                <dl class="inline-term">
                    <dt>Video files name</dt>
                    <dd>les noms de vos fichiers vidéo. Seul le nom doit être ajouté (il n'y a aucun besoin d'écrire le
                        format. Par exemple,"ocean").
                    </dd>
                </dl>
            </li>

            <li>Cliquez sur le bouton <strong>Save</strong>.</li>
        </ol>
    </li>
</ol>
<figure class="img-polaroid">
    <img src="img/video.png" alt="">
</figure>
<p class="alert alert-info">Pour afficher la vidéo, aucun autre arrière-plan ne doit être ajouté à cet élément.</p>
