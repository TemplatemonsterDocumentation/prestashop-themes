<h3>Smart Blog</h3>

<p><strong>Smart blog -</strong> un ensemble de modules permettant de créer un blog dans
    votre boutique. Il comprend les modules suivants:</p>
<ul class="marked-list">
    <li>Smart
        Blog</li>

    <li>RSS Smart Blog
        Feed</li>

    <li>Smart Blog
        Archive</li>

    <li>Smart Blog
        Categories</li>

    <li>Smart Blog
        Home Latest</li>

    <li>Smart
        Blog Latest Comments</li>

    <li>Smart Blog AddThis
        Module</li>

    <li>Smart Blog
        Popular Posts</li>

    <li>Smart
        Blog Recent Posts</li>

    <li>Smart
        Blog Related Post</li>

    <li>Smart
        Blog Search</li>

    <li>Smart Blog
        Tags</li>
</ul>
<p>Il a aussi ses hooks pour faire apparaître les modules de
    blog sur le site, ils peuvent également apparaître dans les hooks standards
    (colonnes uniquement).
</p>

<h4>Smart Blog</h4>

<p>C'est le module principal contenant plusieurs paramètres pour le fonctionnement
    du blog. Après son installation, l'onglet du menu Blog apparaîtra dans le menu
    principal de votre panneau d'administration où vous pouvez
    ajouter/supprimer/modifier les articles/catégories ou choisir le type d'images
    et leurs dimensions utilisées dans les articles (les types et les dimensions des
    images d'articles sont différents des paramètres d'images de produit de votre
    boutique). Pour ajouter les paramètres front-end du module, allez dans <strong>Smart
        Blog (Modules->Front Office Features->Smart Blog)</strong> et ajoutez tous
    les paramètres.</p>

<h6><strong>Description des paramètres:</strong></h6>

<ol class="index-list">
    <li>
        <dl class="inline-term">
            <dt>Meta Title</dt>
            <dd> le titre de votre blog qui apparaîtra dans toutes ses pages.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Meta Keyword</dt>
            <dd> les mots clés qio seront utilisés par les moteurs de recherche pour un meilleur référencement.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Meta Description</dt>
            <dd> description de votre blog utilisée par les moteurs de recherche pour un meilleur référencement.
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Main Blog Url</dt>
            <dd> l'URL de votre Blog.
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Use .html with Friendly Url</dt>
            <dd> activer/désactiver l'ajout de .html aux URL des pages de blog en utilisant des URL accessibles.
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Number of posts per page</dt>
            <dd> nombre d'articles apparaissant par page (catégorie/pages d'archive, etc.).</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Auto accepted comment</dt>
            <dd> activer/désactiver les commentaires automatiquement acceptés. S'ils sont activés, les commentaires
                seront disponibles sans la modération d'un administrateur.
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Enable Captcha</dt>
            <dd> activer/désactiver le Captcha sous le formulaire Ajouter un Commentaire sur les pages de produit.
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Enable Comment</dt>
            <dd> activer/désactiver les commentaires utilisateurs.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Show Author Name</dt>
            <dd> activer/désactiver l'affichage des auteurs d'articles sur les pages de blog.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Show Post Viewed</dt>
            <dd> activer/désactiver l'affichage du nombre de fois que les utilisateurs ont vu l'article. Il
                apparaîtra
                sous l'article sur les pages de blog.
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Show Author Name Style</dt>
            <dd> changer le format du nom de l'auteur.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>AVATAR Image:</dt>
            <dd> ajouter l'avatar standard pour tous les utilisateurs.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Show No Image</dt>
            <dd> activer/désactiver l'image. Cette option est active quand il n'y a pas d'image d'articles, de
                catégories, etc.
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Show Category</dt>
            <dd> activer/désactiver l'image de catégorie et la description sur les pages des catégories du blog.
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Blog Page Column Setting</dt>
            <dd> paramétrage de l'affichage des modules relatifs au Blog. Des paramètres supplémentaires sont
                souvent
                requis, il est donc recommandé d'installer des modules supplémentaires de la même manières que les
                modules PrestaShop.
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Custom CSS</dt>
            <dd> vous pouvez ajouter des styles supplémentaires dans ce champ. Faites attention en utilisant des
                classes
                déjà utilisées dans le thème car ça peut créer des conflits.
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Delete Old Thumblr</dt>
            <dd> utilisé pour régénérer les images de blog dans le cas où les dimensions des images ont été
                modifiées ou
                un nouveau type d'image a été ajouté. Pour régénérer, sélectionnez <strong>Yes</strong> et cliquez
                sur
                <strong>Regenerate</strong>.
            </dd>
        </dl>
    </li>
</ol>
<p class="alert alert-danger"><strong>C'EST SEULEMENT APRÈS CECI</strong> que d'autres modules relatifs au blog
    peuvent être installés. Le processus de suppression est à l'opposé <strong>VOUS
        DEVEZ D'ABORD SUPPRIMER TOUS LES MODULES LIÉS</strong> et, seulement après, supprimer le module Smart Blog.
</p>

<figure class="img-polaroid">
    <img src="img/smart_blog.png" alt="">
</figure>

<h4>RSS Smart Blog Feed</h4>

<p>Le module générant le flux d'infos pour votre Blog.</p>

<p><strong>Il présente plusieurs paramètres dans le panneau
        d'administration:</strong></p>

<ol class="index-list">
    <li>
        <dl class="inline-term">
            <dt>Update Period</dt>
            <dd>permet d'afficher les articles d'une période de temps donnée (heure/jour/semaine/mois/année).</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Update Frequency</dt>
            <dd>permet de définir la fréquence des mises à jour (1 semaine, 2 heures, etc.).</dd>
        </dl>
    </li>
</ol>
<p>Il y a en haut un chemin de fichier où les news seront générées. Il est composé
    de l'URL du site + /modules/smartblogfeed/rss.php.</p>

<figure class="img-polaroid">
    <img src="img/feed.png" alt="">
</figure>

<h4>Smart Blog Archive</h4>

<p>Ce bloc s'affiche dans la colonne gauche/droite et sert à trier les articles par période de temps (mois) .</p>

<p><strong>Il n'a aucun paramètre supplémentaire.</strong></p>

<h4>Smart Blog Categories</h4>

<p>Ce bloc s'affiche dans la colonne gauche/droite et sert à trier les articles par
    catégorie.</p>

<p><strong>Il n'a aucun paramètre supplémentaire.</strong></p>

<h4>Smart Blog Home Latest Posts</h4>

<p>Ce bloc ne s'affiche que dans le hook <strong>homepagecontent</strong> et sert à
    afficher les derniers articles sur la page d'accueil.</p>

<p><strong>Paramètres:</strong></p>

<ol class="index-list">
    <li>
        <dl class="inline-term">
            <dt>Number of posts to display in Latest News</dt>
            <dd>nombre qui s'afficheront sur la page d'accueil.</dd>
        </dl>
    </li>
</ol>

<figure class="img-polaroid">
    <img src="img/home.png" alt="">
</figure>
<h4>Smart Blog Latest Comments</h4>

<p>Ce bloc s'affiche dans la colonne gauche/droite et sert à afficher les derniers
    commentaires publiés sur les articles de Blog.</p>

<p><strong>Paramètres:</strong></p>

<ol class="index-list">
    <li>
        <dl class="inline-term">
            <dt>Number of Comments to Show</dt>
            <dd>nombre de commentaires affichés dans le bloc.</dd>
        </dl>
    </li>
</ol>

<figure class="img-polaroid">
    <img src="img/comments.png" alt="">
</figure>
<h4>Smart Blog AddThis Module</h4>

<p>Ce bloc s'affiche sur la page de l'article et permet de partager cet article sur
    les réseaux sociaux.</p>

<p><strong>Il n'a pas de paramètres supplémentaires.</strong></p>

<h4>Smart Blog Popular Posts</h4>

<p>Ce bloc s'affiche dans la colonne gauche/droite et sert à afficher les articles
    les plus populaires.</p>

<p><strong>Paramètres:</strong></p>

<ol class="index-list">
    <li>
        <dl class="inline-term">
            <dt>Number of popular Posts to Show</dt>
            <dd>nombre d'articles populaires affichés dans le bloc.</dd>
        </dl>
    </li>
</ol>

<figure class="img-polaroid">
    <img src="img/popular.png" alt="">
</figure>
<h4>Smart Blog Recent Posts</h4>

<p>Ce bloc s'affiche dans la colonne gauche/droite et sert à afficher les derniers
    articles.</p>

<p><strong>Paramètres:</strong></p>

<ol class="index-list">
    <li>
        <dl class="inline-term">
            <dt>Show Number Of Recent Posts</dt>
            <dd>nombre d'articles récents affichés dans le bloc.</dd>
        </dl>
    </li>
</ol>

<figure class="img-polaroid">
    <img src="img/recent.png" alt="">
</figure>
<h4>Smart Blog Related Posts</h4>

<p>Ce blog s'affiche dans la page de l'article et sert à afficher les articles
    liés.</p>

<p><strong>Paramètres:</strong></p>

<ol class="index-list">
    <li>
        <dl class="inline-term">
            <dt>Show Number Of Related Posts</dt>
            <dd>nombre d'articles liés affichés dans le bloc.</dd>
        </dl>
    </li>
</ol>

<figure class="img-polaroid">
    <img src="img/related.png" alt="">
</figure>
<h4>Smart Blog Search</h4>

<p>Ce bloc s'affiche dans la colonne gauche/droite et sert à rechercher dans le
    blog.</p>

<p><strong>Il n'a pas de paramètres supplémentaires.</strong></p>

<h4>Smart Blog Tag</h4>

<p>Ce bloc s'affiche dans la colonne gauche/droite et sert à afficher les tags
    utilisés sur le blog.</p>

<p><strong>Paramètres:</strong></p>

<ol class="index-list">
    <li>
        <dl class="inline-term">
            <dt>Number of Tag to Show</dt>
            <dd>nombre de tags affichés dans le bloc.</dd>
        </dl>
    </li>
</ol>

<figure class="img-polaroid">
    <img src="img/tags.png" alt="">
</figure>
