<h3>Module de Fond Vidéo</h3>
<p>Ce module permet d'ajouter la vidéo de fond pour tout bloc dans votre page HTML (il devrait y avoir un ID ou une balise unique).</p>
<h6>Pour ajouter la vidéo de fond, veuillez suivre les étapes ci-dessous:</h6>
<ul class="index-list">
    <li>Téléchargez les fichiers vidéo et les images d'aperçu dans un dossier modules/tmvideobackground/video
	(ou tout autre dossier sur le serveur) via FTP. La vidéo doit être téléchargée en 3 formats: .mp4, .ogv, .webm; tous les fichiers ayant les mêmes noms (ocean.mp4, ocean.ogv, ocean.webm). 
	Les images d'aperçu devraient être aussi en 3 formats: .jpg, .gif, .png et avoir les mêmes noms (ocean.jpg, ocean.gif, ocean.png).
    </li>
    <li><p>Ouvrez le <strong>Module de Fond Vidéo</strong>  dans votre panneau d'administration (Modules -> Fonctionnalité de front-office -> 
	Module de Fond Vidé) et effectuez les réglages nécessaires.</p>
        <h6><strong>Paramètres:</strong></h6>
        <ul class="marked-list">
            <li>
                <dl class="inline-term">
                    <dt>Sélecteur Vidéo</dt>
                    <dd>un élément de la page HTML où la vidéo de fond sera ajoutée (ID ou balise unique comme body, header, footer, etc.).
                    </dd>
                </dl>
            </li>
            <li>
                <dl class="inline-term">
                    <dt>Chemin vidéo</dt>
                    <dd>le chemin d'accès à vos fichiers vidéo (le chemin devrait avoir '/' à la fin), les fichiers peuvent être situés dans n'importe quel dossier sur le serveur, mais nous vous recommandons de les télécharger dans un dossier <strong> modules/tmvideobackground/video/ </strong>.
                    </dd>
                </dl>
            </li>
            <li>
                <dl class="inline-term">
                    <dt>Nom du fichier vidéo</dt>
                    <dd>Nom de vos fichiers vidéo. Seul le nom doit être entré (Il n'est pas nécessaire d'écrire le format). Par exemple, "ocean".
                    </dd>
                </dl>
            </li>
            <li>Appuyez sur le bouton <strong>'Enregistrer'</strong>.</li>
        </ul>
    </li>
</ul>
<figure class="img-polaroid">
    <img src="img/video.png" alt=""/>
</figure>
<p class="alert alert-info">Pour afficher la vidéo, il ne devrait pas y avoir d'autre fond pour cet élément.</p>