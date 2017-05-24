<h3>TM 360 View</h3>
<div class="pdf-hidden">
    <?php if ($project == 'eveprest') { ?>
        <div>
            <p style="margin-bottom: 0;">Available in:</p>
            <p style="margin-top: 0;" class="small text-secondary">One Product</p>
        </div>
    <?php } ?>
</div>
<p>The module displays images in a 3D effect and enables users to rotate them in 360 degrees. The rotation can start
    automatically on page load, or the client can rotate the 'image' manually, dragging the left mouse button.</p>
<p>Moreover the module can be used for adding panorama view (or several panorama views) to the homepage.</p>
<p>360 view mode is also available on product page.</p>

<h4>Installation</h4>
<p>Navigate to Modules and Settings -> Modules and Settings (1) in your admin panel and find the TM 360 view module (2).
    Then click the 'Install' button (3).</p>
<figure class="img-polaroid">
    <img src="img/360view-1.png" alt=""/>
</figure>
<h4>Module configuration</h4>
<p>After the module has been successfully installed you'll see the 'Configure' page with the default module
    settings.</p>
<p>You can find here settings for 360 view (1) and for panorama view (2).</p>
<figure class="img-polaroid">
    <img src="img/360view-2.png" alt=""/>
</figure>
<h4>360 view</h4>
<p>The settings are described below the screenshot. Choose them according to your needs and click the 'Save' button
    (1).</p>
<figure class="img-polaroid">
    <img src="img/360view-3.png" alt=""/>
</figure>
<ul class="marked-list">
    <li><strong>Enable on Home</strong> - option to show the 360 view of the product on Homepage.</li>
    <li><strong>Select a product</strong>(appears if 'Enable on Home' is set to 'Yes') - choose a product which should
        be displayed in 360 view.
    </li>
    <li><strong>Animate</strong> - option to display the product automatically rotating on page load.</li>
    <li><strong>Frame time</strong>(appears if 'Animate' is set to 'Yes') - time period before one image in the set will
        be changed to another; should be entered in milliseconds.
    </li>
</ul>
<h5>Adding/removing images</h5>
<ul class="index-list">
    <li>
        <p>Navigate to Catalog -> Products in your admin panel (1), choose the product and click the 'Edit' button
            (2).</p>
        <figure class="img-polaroid">
            <img src="img/360view-4.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>To add images, use the 'TM 360 view' tab (1) in product settings and click 'Add files' button (2).</p>
        <figure class="img-polaroid">
            <img src="img/360view-5.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>Then press 'Upload files' (1).</p>
        <figure class="img-polaroid">
            <img src="img/360view-6.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>When the files were uploaded successfully, click the 'Save' button (1).</p>
        <figure class="img-polaroid">
            <img src="img/360view-7.png" alt=""/>
        </figure>
        <p class="alert alert-warning">To make the rotation smooth, add more images and make a very slight change in
            position while making photos.</p>
    </li>
    <li>
        <p>After you've added image pictures, the product 360 view will be shown on the Homepage *. <br>
            *
            <small>It will also appear on the product page after the description.</small>
        </p>
    </li>
    <li>
        <p>To disable 360 view on the Homepage, simply go to 360 view settings and switch the 'Enable on Home' option to
            'No'.</p>
    </li>
    <li>
        <p>To disable 360 view on the product page, open the 'TM 360 view' tab in product settings and remove all
            images.</p>
    </li>
</ul>
<h4>Panorama</h4>
<p>Using this module is also used for adding panorama view to homepage or to the product page.</p>
<p class="alert alert-warning">You can add as much panorama blocks as you need to the homepage.</p>
<h5>Adding panorama to the Homepage</h5>
<ul class="index-list">
    <li>
        <p>To add new panorama open the module configuration page and click '+' ('Add new item') button (1).</p>
        <figure class="img-polaroid">
            <img src="img/360view-8.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>You'll see the panorama settings which are described below.</p>
        <figure class="img-polaroid">
            <img src="img/360view-9.png" alt=""/>
        </figure>
        <ul class="marked-list">
            <li><strong>Select a file</strong> - choose a panorama filed; this field is required (at least for the
                default language).
            </li>
            <li><strong>Title</strong> - enter a title for the panorama; this field is required (at least for the
                default language).
            </li>
            <li><strong>Width</strong> - panorama block width; this field is required.</li>
            <li><strong>Height</strong> - panorama block height; this field is required.</li>
            <li><strong>Status</strong> - enable/disable panorama item on Homepage.</li>
            <li><strong>Loop</strong> - start rotating the image from the beginning after it's end.</li>
            <li><strong>Animate</strong> - option to display the panorama automatically rotating on page load.</li>
            <li><strong>Frame time</strong>(appears if 'Animate' is set to 'Yes') - time period during which the
                panorama image makes a full circle; should be entered in milliseconds; this field is required.
            </li>
        </ul>
    </li>
    <li>
        <p>Click the 'Save' button and your panorama image will appear on the Homepage.</p>
    </li>
</ul>
<h5>Removing panorama from Homepage</h5>
<ul class="index-list">
    <li>
        <p>To remove the panorama - choose the item, click the arrow down button (1) and then click 'Delete' (2).</p>
        <figure class="img-polaroid">
            <img src="img/360view-10.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>Then confirm the deleting.</p>
    </li>
</ul>