<h3>TM Images de Liste de Produits</h3>
<p>Le module affiche une galerie de toutes les images de produits disponibles sur les pages de la liste des produits.</p>
<h5>Installation et suppression</h5>
<p>Ce module peut être installé et supprimé comme tout autre module PrestaShop.</p>
<h5>Paramètres du module</h5>
<p>Le module n'a pas de paramètres supplémentaires.</p>
<h5>Actions supplémentaires</h5>
<p>Pour activer la fonctionnalité du module, vous devez ajouter le code suivant:</p>
<p><code>{hook h='displayProductListGallery' product=$product}</code></p>
<p>au fichier <strong>product-list.tpl</strong> dans le dossier racine de votre thème après la balise de fermeture
<code>&lt;/a&gt;</code> avec la classe <code>.product_img_link</code>.</p>
