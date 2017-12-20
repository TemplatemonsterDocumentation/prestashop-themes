<h3>Manual template installation with sample data</h3>
<p class="alert alert-info custom">If you don't want to spend your time installing the template, don't hesitate to <span
            class="label label-warning opener" onclick="showChat()">order</span> installation service using our
    live-chat.</p>
<p>After installing the <strong>Sample data,</strong> you'll get your PrestaShop store
    appear the same as at the template live demo. It will contain all sample products,
    store settings, modules settings, etc.</p>

<p class="alert alert-danger">Please do not use the sample data for your running website! This will replace all your
    store products and store settings.</p>

<p class="alert alert-warning">Please make sure your version of PrestaShop engine matches the specified version in
    "Technical Details" tab, mentioned as "PrestaShop Engine: 1.X.X.X".
    <br/>Also, make sure your database tables prefix is <strong>ps_</strong>. Only if your PrestaShop engine matches
    the specified version, install sample data. </p>

<h4>Uploading template files</h4>

<p>To upload the template to your server:</p>
<ol class="index-list">
    <li>Open the template package.</li>
    <li>Then go to the <strong>/theme/manual_install/</strong> folder.</li>
    <li>Upload <strong>/img/</strong>, <strong>/modules/</strong> and
        <strong>/themes/</strong> folders to PrestaShop root directory.
    </li>
</ol>
<p class="alert alert-info">You can check the detailed video tutorial on <a target="_blank"
                                                                            href="/help/how-upload-files-server-2.html">how
        to upload files to server using FTP manager</a> and <a
            href="/help/how-to-upload-files-to-a-server-using-cpanel-webhost-manager-whm.html"
            target="_blank">how to upload files to a server using cPanel (WebHost Manager,
        WHM)</a>.</p>

<h4>Installing Sample data</h4>

<p>Sample data is provided as an .SQL file. It is located in the <strong>theme/manual_install/</strong>
    of the template package and is called <strong>dump.sql</strong>.</p>

<p>The dump.sql file can be installed using the phpMyAdmin tool or some other database
    management tool in your hosting control panel. This detailed tutorial on <a
            target="_blank"
            href="/help/phpmyadmin-how-to-import-sample-data-dump-file-phpmyadmin.html">how
        to install SQL files</a> can help you.</p>

<p class="alert alert-warning">Before you proceed, please back up your database. You can check the detailed video
    tutorial on <a
            target="_blank" href="/help/phpmyadmin-how-to-backup-a-database.html">how to
        back up a database</a>.</p>


<p class="alert alert-danger">Please make sure your version of PrestaShop engine matches the template requirements.
    Otherwise, the database will be damaged.</p>

<p>When you are done with installing the dump.sql file, you will need to activate the
    template.</p>

<p>From the PrestaShop admin panel, go to <strong>Preferences > Themes</strong>, choose
    your template in the <strong>Themes</strong> section and click <strong>Save</strong>.
</p>

<h4>Adding languages to online store. </h4>

<p>After the multi-language template has been installed, you will be able to add all
    languages provided with it (English, French, Spanish, German, Russian) to the online
    store platform. It can be done this way: </p>

<p>Go to <strong>'Localization > Translations'</strong> in the admin panel, find
    <strong>'ADD/UPDATE A LANGUAGE'</strong> and add languages by choosing them from the
    drop-down menu
    <small>(1)</small>
    and clicking the <strong>'Add or update a language'</strong> button
    <small>(2)</small>
    .
</p>
<figure class="img-polaroid">
    <img alt="" src="img/01-language-update.png"/>
</figure>

<p>If you do not want to have some languages, you can delete them
    <small>(2)</small>
    or turn them off
    <small>(1)</small>
    in the <strong>'Localization > Languages'</strong> menu.
</p>
<figure class="img-polaroid">
    <img alt="" src="img/02-language-update.png"/>
</figure>