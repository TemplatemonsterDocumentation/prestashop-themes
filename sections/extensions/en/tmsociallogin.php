<h3>TM Social Login</h3>

<p>This module allow to register and sign in with the help of the clients pages data in
    Social networks such as Facebook and Google.</p>

<h5>Module install/uninstall</h5>

<p>This module can be installed/uninstalled as any other PrestaShop module.</p>

<h5>Module settings</h5>

<p>After module has been installed you can configure it on the module configuration
    page.</p>

<p>In order to get required data for module configuration you need to create
    corresponding application on the needed resource.</p>

<p>It is not necessary to use both variants of sign in (Google, Facebook)
    simultaneously, you can use one of them only.</p>

<h4>Facebook Fields</h4>

<ol class="index-list">
    <li>ID of your App.</li>
    <li>Secret key of your App.</li>
</ol>

<h4>Google Fields</h4>

<ol class="index-list">
    <li>ID of your App.</li>
    <li>Secret key of your App.</li>
    <li>Redirect path after sign in <strong>(your shop
            URL+index.php?fc=module&module=tmsociallogin&controller=googlelogin)</strong>. </li>
</ol>

<p class="alert alert-info">More detailed information you can get by following the links: <a
        href="https://support.google.com/cloud/answer/6158849?hl=en&ref_topic=6262490" target="_blank">Google
        App</a> and <a href="https://developers.facebook.com/docs/apps/register" target="_blank">Facebook
        App</a>.</p>

<p class="alert alert-warning">
    Redirect path must coincide with the one which you have indicated while creating Google App.
</p>

<figure class="img-polaroid">
    <img src="img/tmsociallogin-1.png" alt=""/>
</figure>