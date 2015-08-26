<h3>Galerie de la liste des produits TM</h3>

<p>Le module affiche une galerie de toutes les images disponibles de produits sur les
    pages de la liste des produits.</p>
<h5>Installation et Suppression</h5>

<p>Le module peut être installé et supprimé comme tout autre module PrestaShop.</p>
<h5>Configuration de Module</h5>

<p>Le module n'a pas de paramètres supplémentaires.</p>
<h5>Actions Supplémentaires</h5>

<p>Pour activer la fonctionnalité de module, vous devriez ajouter la ligne de code
    suivante:</p>

<p><code>{hook h='displayProductListGallery' product=$product}</code></p>

<p>au fichier <strong>product-list.tpl</strong> dans le dossier racine de votre thème
    après la balise fermante <code>&lt;/a&gt;</code> avec la classe <code>.product_img_link</code>.
</p>
