<h3>TM Header Account 2.0</h3>
<div class="pdf-hidden">
    <?php if ($project == 'eveprest') { ?>
        <div>
            <p style="margin-bottom: 0;">Available in:</p>
            <p style="margin-top: 0;" class="small text-secondary">Fashion, Electronics, Spare Parts, Furniture, One
                Product</p>
        </div>
    <?php } ?>
</div>
<p class="alert alert-warning">
    If you have the 1.n version of this module installed in your prestashop engine, you are not suggested to update it
    with the current one. First you need to remove the old version of the module to run without errors.
</p>
<p>This module displays login and registration forms on the website. It can take the following positions: website
    header, left and right column. The module allows to log in and register using such social networks as Facebook,
    Google+ and VK, which is convenient for website users. Registration or logging in proceeds without reloading the
    page.</p>
<h4>TM Header Account Main Panel</h4>
<p>The main panel. Here you can set up the module.</p>
<figure class="img-polaroid">
    <img src="img/tmheaderaccount200-1.png" alt=""/>
</figure>
<h4>Settings</h4>
<p>There are the following settings in the module:</p>
<ul class="index-list">
    <li><p>Display type - this setting allows to select the way to display the registration form. It can take the
            following values:</p>
        <ul class="marked-list">
            <li><strong>Drop down</strong> - the form will display as a drop-down below the button opening it.
                <figure class="img-polaroid">
                    <img src="img/tmheaderaccount200-2.png" alt=""/>
                </figure>
            </li>
            <li><strong>Popup</strong> - the form will appear in a pop-up.
                <figure class="img-polaroid">
                    <img src="img/tmheaderaccount200-3.png" alt=""/>
                </figure>
            </li>
            <li><strong>Left side</strong> - the form will appear from the left as a sidebar.
                <figure class="img-polaroid">
                    <img src="img/tmheaderaccount200-4.png" alt=""/>
                </figure>
            </li>
            <li><strong>Right side</strong> - the form will appear from the right as a sidebar.
                <figure class="img-polaroid">
                    <img src="img/tmheaderaccount200-5.png" alt=""/>
                </figure>
            </li>
        </ul>
    </li>
    <li><p>Display style after login - this setting allows to change the form view after login/registration. You can use
            the following values:</p>
        <ul class="marked-list">
            <li><strong>Two columns</strong> - the list is divided into two columns.
                <figure class="img-polaroid">
                    <img src="img/tmheaderaccount200-6.png" alt=""/>
                </figure>
            </li>
            <li><strong>One Column</strong> - the list of links is displayed as one column.
                <figure class="img-polaroid">
                    <img src="img/tmheaderaccount200-7.png" alt=""/>
                </figure>
            </li>
        </ul>
    </li>
    <li>Default avatar - this field appears only if the 'Display avatar' option is enabled. Here you can select the
        default user avatar.
    </li>
    <li>Display avatar - this setting allows to enable or disable user avatar. If the user logs in to the account on the
        website with the help of one of the social networks, the avatar will be taken from the account in this social
        network, otherwise, the avatar, loaded by the website admin, will be displayed.
    </li>
    <li>Use redirect - if this setting is enabled, user registration and password recovery will take place on the
        default PrestaShop registration/password recovery page.
    </li>
    <li><p>Use Facebook Login - this setting allows to enable user registration and login with the help of Facebook
            social network. When you enable this option, you will see the following settings:</p>
        <ul class="marked-list">
            <li><strong>App ID</strong> - your account App ID from the Facebook developer account.</li>
            <li><strong>App Secret</strong> - your app secret from the Facebook developer account.</li>
        </ul>
    </li>
    <li><p>Use Google Login - this setting allows to enable user login and registration with the help of Google+ social
            network. If you enable this option, you will see the following settings:</p>
        <ul class="marked-list">
            <li><strong>App ID</strong> - your App id from the Google developer account.</li>
            <li><strong>App Secret</strong> - your App secret from the Google developer account.</li>
            <li><strong>Redirect URIs</strong> - your online-store url +
                index.php?fc=module&module=tmheaderaccount&controller=googlelogin
            </li>
        </ul>
    </li>
    <li><p>Use VK Login - this setting allows to enable user registration and login with the help of VK social network.
            If you enable this option, you will see the following settings:</p>
        <ul class="marked-list">
            <li><strong>App ID</strong> - your App id from your VK developer account.</li>
            <li><strong>App Secret</strong> - App secret from your VK developer account.</li>
            <li><strong>Redirect URIs</strong> - your online-store url +
                index.php?fc=module&module=tmheaderaccount&controller=vk
            </li>
        </ul>
    </li>
</ul>
<h5>Registering apps in social networks:</h5>
<ul class="marked-list">
    <li><strong>Facebook</strong> - to get App ID and App Secret, register your app at <a target="_blank"
                                                                                          href="https://developers.facebook.com/apps">https://developers.facebook.com/apps</a>.
    </li>
    <li><strong>Google+</strong> - to get App ID and App Secret, register your app at <a target="_blank"
                                                                                         href="https://developers.google.com/accounts/docs/OAuth2/">https://developers.google.com/accounts/docs/OAuth2/</a>.
    </li>
    <li><strong>VK</strong> - to get App ID and App Secret register your app at <a target="_blank"
                                                                                   href="https://vk.com/dev">https://vk.com/dev</a>.
    </li>
</ul>

