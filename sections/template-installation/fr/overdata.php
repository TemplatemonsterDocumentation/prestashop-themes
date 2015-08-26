<h3>Installation d'un template dans une boutique existante</h3>

<p class="alert alert-info">Vous pouvez utiliser cette méthode d'installation si vous avez un site PrestaShop en
    production et voulez juste installer un nouveau template.</p>

<h4>Upload des fichiers du template et activation du
    thème</h4>
<ol class="index-list">
    <li>Ouvrez le package du template.</li>
    <li>Puis allez dans le dossier <strong>/theme/manual_install/</strong>.</li>
    <li>Uploadez les dossiers <strong>/modules/</strong> et <strong>/themes/</strong>
        dans le dossier racine PrestaShop.
    </li>
    <li>
        <p>Dans votre panneau d'administration PrestaShop, allez dans <strong>Preferences
                > Themes</strong>, sélectionnez le thème que vous avez installé (vous pouvez
            également utiliser le thème activé, ça n'entraînera aucun problème pour le
            thème activé). Cliquez sur le bouton <strong>Advanced settings</strong>.</p>

        <figure class="img-polaroid">
            <img alt="" src="img/theme_add.png"/>
        </figure>
    </li>
    <li>
        <p>Sur l'écran qui apparait, sélectionnez le répertoire portant le nom de votre
            thème et cliquez sur le bouton <strong>Save</strong>.</p>

        <figure class="img-polaroid">
            <img alt="" src="img/theme-select.png"/>
        </figure>
    </li>
</ol>
<h4>Installation de modules</h4>

<p>Chaque module est fourni avec des paramètres de module spécifiques. Pour que ces
    modules apparaissent comme dans la démo, vous devrez les configurer. Tous les
    modules sont configurables depsuis le panneau d'administration de PrestaShop admin
    panel.</p>

<p>Dans votre panneau d'administration PrestaShop, sélectionnez <strong>Modules >
        Modules</strong> dans le menu principal.</p>

<p>Sur la page Modules, vous pouvez voir la liste des modules PrestaShop disponibles.
    Vous devrez peut-être en installer certains.</p>

<p>Pour installer un module, trouvez-le dans la liste et cliquez sur le bouton <strong>'Install'</strong>.
</p>
<figure class="img-polaroid">
    <img src="img/06-modules.png" alt=""/>
</figure>


<p>À l'aide des liens du module, vous pouvez les activer/désactiver (liens
    <strong>Enable</strong>|<strong>Disable</strong>),
    réinitialiser leurs paramètres à leur valeur par défaut (lien <strong>Reset</strong>),
    supprimer un module (lien <strong>Delete</strong>) ou le configurer (lien <strong>Configure</strong>).
</p>
<figure class="img-polaroid">
    <img src="img/08-modules.png" alt=""/>
</figure>


<p>Après avoir <strong>activé</strong> les modules nécessaires, vous devez <strong>
        leur assigner des positions correctes.</strong></p>

<p>Dans le panneau d'administration PrestaShop, sélectionnez <strong>Modules >
        Positions</strong> dans le menu déroulant. Pour placer un module à la bonne
    position, glissez-le à la bonne position de la liste des modules.</p>
<figure class="img-polaroid">
    <img src="img/09-modules.png" alt=""/>
</figure>


<h3>Configuration des images</h3>

<p>Dans PrestaShop, vous pouvez utiliser des dimensions d'images prédéfinies pour des
    images de produits, de catégories, de fabricants, etc.</p>

<p>Par exemple, les images de dimensions <strong>'home'</strong> sont généralement
    utilisées pour les images de produits sur les listes par catégorie <strong>et celles
        de dimensions 'large'</strong> pour les images principales de produit sur la
    page d'informations du produit.</p>

<p>Pour configurer les dimensions des images de produit, ouvrez votre panneau
    d'administration PrestaShop, allez dans <strong>Preferences > Images</strong> et
    réglez les dimensions d'image comme décrit sur la <strong>Page de
        Configuration</strong> sur la démo live du template.</p>