<h3>Header Compte TM 2.0</h3>
<?php if ($project == 'eveprest' ) { ?>
    <div>
        <p style="margin-bottom: 0;">Disponible en:</p>
        <p style="margin-top: 0;" class="small text-secondary">Mode, Électronique, Pièces de rechange, Mobilier, Seul Produit</p>
    </div>
<?php } ?>
<p class="alert alert-warning">
    Si vous avez la version 1.n de ce module installé dans Prestashop, il n'est pas recommandé de le mettre à jour. Vous devez d'abord supprimer l'ancienne version du module de fonctionner sans erreurs.
</p>
<p>Ce module affiche les formulaires de connexion et d'inscription sur le site. 
Il peut prendre les positions suivantes:  en-tête, colonne gauche et droite. 
Le module permet de se connecter et d'inscrire à l'aide de réseaux sociaux tels que Facebook, Google+ et VK.
C'est pratique pour les utilisateurs du site. L'inscription ou la connection se poursuivent sans recharger la page.</p>
<h4>Panneau principal de Header Compte TM</h4>
<p>Le panneau principal. Vous pouvez configurer le module ici.</p>
<figure class="img-polaroid">
    <img src="img/tmheaderaccount200-1.png" alt=""/>
</figure>
<h4>Paramètres</h4>
<p>Il existe les paramètres suivants dans le module:</p>
<ul class="index-list">
    <li><p>Type d'affichage - this setting allows to select the way to display the registration form. It can take the following values:</p>
        <ul class="marked-list">
            <li><strong>Menu déroulant</strong> - le formulaire apparaîtra sous la forme d'un menu déroulant sous le bouton l'ouvrant.
                <figure class="img-polaroid">
                    <img src="img/tmheaderaccount200-2.png" alt=""/>
                </figure>
            </li>
            <li><strong>Pop-up</strong> - le formulaire apparaîtra dans une fenêtre contextuelle.
                <figure class="img-polaroid">
                    <img src="img/tmheaderaccount200-3.png" alt=""/>
                </figure>
            </li>
            <li><strong>Côté gauche</strong> - le formulaire apparaîtra à gauche comme une barre latérale.
                <figure class="img-polaroid">
                    <img src="img/tmheaderaccount200-4.png" alt=""/>
                </figure>
            </li>
            <li><strong>Côté droit</strong> - le formulaire apparaîtra droite comme une barre latérale.
                <figure class="img-polaroid">
                    <img src="img/tmheaderaccount200-5.png" alt=""/>
                </figure>
            </li>
        </ul>
    </li>
    <li><p>Style d'affichage après la connexion - Ce paramètre permet de modifier la vue après la connexion / l'enregistrement. Vous pouvez utiliser les valeurs suivantes:</p>
        <ul class="marked-list">
            <li><strong>Deux colonnes</strong> - la liste est divisée en deux colonnes.
                <figure class="img-polaroid">
                    <img src="img/tmheaderaccount200-6.png" alt=""/>
                </figure>
            </li>
            <li><strong>Une colonne</strong> - la liste des liens s'affiche sous la forme d'une seule colonne.
                <figure class="img-polaroid">
                    <img src="img/tmheaderaccount200-7.png" alt=""/>
                </figure>
            </li>
        </ul>
    </li>
    <li>Avatar par défaut - ce champ apparaît uniquement si l'option 'Afficher Avatar' est activée. Ici, vous pouvez sélectionner l'avatar de l'utilisateur par défaut.</li>
    <li>Afficher Avatar - ce paramètre permet d'activer ou de désactiver l'avatar de l'utilisateur. Si l'utilisateur se connecte au compte avec l'aide d'un des réseaux sociaux, l'avatar sera retiré du compte dans ce réseau social, sinon, l'avatar chargé par l'administrateur du site, sera affiché.</li>
    <li>Utiliser la redirection - Si ce paramètre est activé, l'enregistrement de l'utilisateur et la récupération du mot de passe auront lieu, sur la page de récupération de mot de passe PrestaShop par défaut.</li>
    <li><p>Utiliser la connexion Facebook - ce paramètre permet d'activer l'enregistrement des utilisateurs et de se connecter avec l'aide du réseau social Facebook. Une fois vous activez cette option, vous verrez les paramètres suivants:</p>
        <ul class="marked-list">
            <li><strong>ID d'application</strong> - votre ID à  partir du compte Facebook .</li>
            <li><strong>Secret d'application</strong> - votre secret d'application du compte Facebook.</li>
        </ul>
    </li>
    <li><p>Utiliser la connexion  Google - ce paramètre permet d'activer l'enregistrement des utilisateurs et de se connecter avec l'aide du réseau social Google+.
	Si vous activez cette option, vous verrez les paramètres suivants:</p>
        <ul class="marked-list">
            <li><strong>ID d'application</strong> - votre ID à  partir du compte Google+.</li>
            <li><strong>Secret d'application</strong> - votre secret d'application du compte Google+.</li>
            <li><strong>URIs de redirection</strong> - le lien de votre magasin en ligne + index.php?fc=module&module=tmheaderaccount&controller=googlelogin</li>
        </ul>
    </li>
    <li><p>Use VK Login - this setting allows to enable user registration and login with the help of VK social network. If you enable this option, you will see the following settings:</p>
        <ul class="marked-list">
            <li><strong>ID d'application</strong> - votre ID à  partir du compte VK.</li>
            <li><strong>Secret d'application</strong> - votre secret d'application du compte VK.</li>
            <li><strong>URIs de redirection</strong> - le lien de votre magasin en ligne + index.php?fc=module&module=tmheaderaccount&controller=vk</li>
        </ul>
    </li>
</ul>
<h5>Enregistrement d'applications dans les réseaux sociaux:</h5>
<ul class="marked-list">
    <li><strong>Facebook</strong> - pour obtenir ID de l'application et Secret de l'application, enregistrez votre application à <a target="_blank" href="https://developers.facebook.com/apps">https://developers.facebook.com/apps</a>.</li>
    <li><strong>Google+</strong> - pour obtenir ID de l'application et Secret de l'application, enregistrez votre application à <a target="_blank" href="https://developers.google.com/accounts/docs/OAuth2/">https://developers.google.com/accounts/docs/OAuth2/</a>.</li>
    <li><strong>VK</strong> - pour obtenir ID de l'application et Secret de l'application, enregistrez votre application à <a target="_blank" href="https://vk.com/dev">https://vk.com/dev</a>.</li>
</ul>

