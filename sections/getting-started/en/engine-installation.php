<h3>PrestaShop engine installation</h3>

<p class="alert alert-warning">Please make sure your version of PrestaShop engine matches the specified version in
    "Technical Details" tab, mentioned as "PrestaShop Engine: 1.X.X.X".
    <br/>Also, make sure your database tables prefix is <strong>ps_</strong>. Install sample data only if your PrestaShop engine matches
    the specified version. </p>

<p>When you are done with the files upload, you can start the PrestaShop engine
    installation. Open your web browser and type in the 'domain name/path to your
    PrestaShop directory' in the address bar, then reload the current page. You should
    see the welcome screen. Please follow the instructions below to install
    PrestaShop.</p>

<h4>Installation Assistant (Choose your language)</h4>

<h6>Please select the installation language.</h6>

<p class="alert alert-warning">Please note: the installation language option will not affect your store language. By
    default PrestaShop is offered in English. You can install additional localization packages to change the store
    language.</p>

<p>When you are done, click the <strong>'Next'</strong> button.</p>

<figure class="img-polaroid">
    <img src="img/engine-install-01.png" alt="">
</figure>

<h4>Installation Assistant (License agreements)</h4>

<ol class="index-list">
    <li>Please check the license agreement.</li>
    <li>When you are done, click the <strong>'Next'</strong> button.</li>
</ol>

<figure class="img-polaroid">
    <img src="img/engine-install-02.png" alt="">
</figure>

<h4>System Compatibility</h4>

<p>Check the PHP settings and directory permissions. In case of any errors, please
    contact your hosting provider for further assistance.</p>

<p>If everything is correct, click the <strong>'Next'</strong> button.</p>

<figure class="img-polaroid">
    <img src="img/engine-install-03.png" alt="">
</figure>

<h4>Shop configuration</h4>

<p>This step requires you to enter the store settings like Shop name, activity, country,
    timezone, etc.</p>

<p>All these settings can be changed later in your PrestaShop administration panel.</p>

<figure class="img-polaroid">
    <img src="img/engine-install-04.png" alt="">
</figure>

<h4>System Configuration</h4>

<p>If you already have a MySQL database, please enter the database details into the
    appropriate fields below.</p>

<p>Otherwise, you can get the database details from your hosting control panel or by
    contacting your hosting provider.</p>

<p>When you are done, click the <strong>'Next'</strong> button.</p>

<figure class="img-polaroid">
    <img src="img/engine-install-05.png" alt="">
</figure>

<h4>Installation is complete</h4>

<p>This is the final step of the installation.</p>

<p class="alert alert-danger">For security reasons you need to delete the <strong>/install/</strong> directory on
    your hosting server.
</p>

<figure class="img-polaroid">
    <img src="img/engine-install-06.png" alt="">
</figure>

<p class="alert alert-info">Starting with version 1.5.4, PrestaShop takes care of renaming the administration folder
    for you: it becomes the word "admin" followed by 4 random digits, i.e. "admin8814." The renaming happens as soon
    as you reach the "admin" folder for the first time: PrestaShop renames it, then correctly accesses the renamed
    folder.<br/>
    <br/>
    Log into the PrestaShop back office by going to your newly renamed "admin" folder, and start filling your
    catalog with your data.
</p>

<h6>If you face any difficulties, please check the <a target="_blank"
                                                      href="http://doc.prestashop.com/display/PS16/Getting+Started">official
        PrestaShop installation manual</a>.</h6>
