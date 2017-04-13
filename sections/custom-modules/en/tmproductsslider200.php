<h3>TM Products Slider 2.0.0</h3>
<div class="pdf-hidden">
    <?php if ($project == 'eveprest') { ?>
        <div>
            <p style="margin-bottom: 0;">Available in:</p>
            <p style="margin-top: 0;" class="small text-secondary">Electronics, Furniture</p>
        </div>
    <?php } ?>
</div>
<h4>Introduction</h4>
<p>This module serves for creating galleries, based on product data and displaying them in form of slides on the website
    frontend. The module supplies 4 methods of displaying the gallery with individual settings and appearance. Each
    method has pre-defined functionality. Advanced configuration is also available. The module can display an unlimited
    amount of products with diverse information.</p>
<h4>Installation and removal of the module</h4>
<p class="alert alert-warning">
    If you have the 1.n version of this module installed in your prestashop engine, you are not suggested to update it
    with the current one. First you need to remove the old version of the module to run without errors.
</p>
<p>The module is installed and removed as any default Prestashop module.</p>
<p class="alert alert-info">
    <span>After removal or re-installation of the module, all the settings and filters are discarded.</span>
</p>
<h4>Adding/deleting/editing a slide</h4>
<h5>Adding a slide</h5>
<p>To add a product to the gallery, go to the needed product in the <strong>Catalog
        -> Products</strong> section. Then press the <strong>'Edit'</strong> button (1) next to the needed product.</p>
<figure class="img-polaroid"><img src="img/tmproductsslider2-1.png" alt=""/></figure>
<p>In the appeared window for editing information about the product, navigate to the <strong>TM Products Slider</strong>
    tab (2) and mark (3) that you want the product to be displayed in slider.</p>
<figure class="img-polaroid"><img src="img/tmproductsslider2-2.png" alt=""/></figure>
<p>Save changes by pressing either <strong>'Save and stay'</strong> (4) or <strong>'Save'</strong> button (5).</p>
<h5>Slide removal</h5>
<p>There are two ways of deleting a slide.</p>
<ul class="index-list">
    <li>
        <p>To exclude a product from the gallery, navigate to the needed product in <strong>Catalog -> Products</strong>
            section. Then press the <strong>'Edit'</strong> button (1) next to the needed product.</p>
        <figure class="img-polaroid"><img src="img/tmproductsslider2-1.png" alt=""/></figure>
        <p>In the appeared window for editing information about the product, navigate to the <strong>TM Products
                Slider</strong> tab (2) and remove the check mark (3) which means that you don't want the product to be
            displayed in slider:</p>
        <figure class="img-polaroid"><img src="img/tmproductsslider2-3.png" alt=""/></figure>
        <p>Save changes by pressing either <strong>'Save and stay'</strong> (4) or <strong>'Save'</strong> button (5).
        </p>
    </li>
    <li>
        <p>The second way is to navigate to the module configuration page, find the needed product in the <strong>Slides
                list</strong> table and press the <strong>Delete</strong> button (1) next to it.</p>
        <figure class="img-polaroid"><img src="img/tmproductsslider2-4.png" alt=""/></figure>
        <p>Then confirm the deletion.</p>
    </li>
</ul>
<h5>Slides display order</h5>
<p>By default, the slides are displayed in the order they were added. To change the display order, navigate to the
    module configuration page and drag the slide to the needed place in <strong>Slides list</strong> table.</p>
<figure class="img-polaroid"><img src="img/tmproductsslider2-5.png" alt=""/></figure>
<h5>Disabling slides</h5>
<p>Moreover, you can temporarily disable a slide (for the time period that a product is out of stock or for any other
    reason) without removing it completely. To do this, navigate to the module configuration page and click a tick next
    to the needed product (if it's active now) or click crosses (if it's inactive) in the <strong>Slides list</strong>
    table:
</p>
<figure class="img-polaroid"><img src="img/tmproductsslider2-6.png" alt=""/></figure>
<h4>Gallery types and recommended settings</h4>
<p>There are four types of gallery display (standard, list, grid, full width). Each of them can be set up independently
    and you can switch between them if needed.</p>
<p>By default, the gallery uses the following product image types: large_default - for the main image; medium_default -
    for thumbnails.</p>
<h5>Standard</h5>
<p>Recommended settings:</p>
<ul class="marked-list">
    <li>image size (px) - 435*435</li>
    <li>Gallery Width - 1170px</li>
    <li>Gallery Height - 580px</li>
    <li>Extended Settings - off</li>
</ul>
<figure class="img-polaroid"><img src="img/tmproductsslider2-7.png" alt=""/></figure>
<h5>List</h5>
<p>Recommended settings:</p>
<ul class="marked-list">
    <li>image size (px) - 435*520</li>
    <li>Gallery Width - 1170px</li>
    <li>Gallery Height - 520px</li>
    <li>Extended Settings - off</li>
</ul>
<figure class="img-polaroid"><img src="img/tmproductsslider2-8.png" alt=""/></figure>
<h5>Grid</h5>
<p>Recommended settings:</p>
<ul class="marked-list">
    <li>image size (px) - 585*750</li>
    <li>Gallery Width - 1170px</li>
    <li>Gallery Height - 750px</li>
    <li>Extended Settings - off</li>
</ul>
<figure class="img-polaroid"><img src="img/tmproductsslider2-9.png" alt=""/></figure>
<h5>Full width</h5>
<p>Recommended settings:</p>
<ul class="marked-list">
    <li>image size (px) - 435*435</li>
    <li>Gallery Width - 1920px</li>
    <li>Gallery Height - 450px</li>
    <li>Extended Settings - off</li>
</ul>
<figure class="img-polaroid"><img src="img/tmproductsslider2-10.png" alt=""/></figure>
<h4>Advanced settings</h4>
<p>To access extended settings, move the <strong>Extended
        Settings</strong> slider to the Yes position.</p>
<figure class="img-polaroid"><img src="img/tmproductsslider2-11.png" alt=""/></figure>
<ul class="marked-list">
    <li><strong>Gallery Type</strong> - active gallery type</li>
    <li><strong>Gallery Width</strong> - active gallery width</li>
    <li><strong>Gallery Height</strong> - active gallery height</li>
    <li><strong>Extended Settings</strong> - advanced settings; if the option is moved to 'No' position, all the
        advanced settings will be saved and you can restore them at any time. At the same time, at frontend it will be
        displayed as by default.
    </li>
    <li><strong>Slider Duration</strong> - the speed of slide changing</li>
    <li><strong>Use navigation</strong> - the display of the Prev/Next buttons for slide switching</li>
    <li><strong>Use Thumbnails</strong> - using thumbnails with additional information about slides as an element for
        switching the current slide
    </li>
    <li><strong>Use Pagination</strong> - using pagination as an element for switching the current slide</li>
    <li><strong>Use Image Gallery</strong> - using additional product images inside the slides</li>
    <li><strong>Allow autoplay</strong> - allow automatic slide switching</li>
    <li><strong>Slider Interval</strong> - the time span, after which the slide will switch to another (available only
        if 'Allow autoplay' is active)
    </li>
    <li><strong>Allow Loop</strong> - allow repeating slides from the beginning after all the slides were shown</li>
</ul>
<p class="alert alert-info">
    <span>After switching the gallery, all the setup of the previously used gallery is saved.</span>
</p>
<p class="alert alert-info">
    <span>After disabling/enabling advanced settings, the settings are saved and you can go back to them at any time.</span>
</p>
<h4>FAQ</h4>

<div class="responsive-tabs" data-type="accordion">
    <ul class="resp-tabs-list">
        <li>Why the gallery does not display on the frontend?</li>
        <li>I change gallery advanced settings, but I don't see changes on the frontend. What can be done?</li>
    </ul>
    <div class="resp-tabs-container">
        <div>Make sure that the gallery has slides, and at least one of them is active.</div>
        <div>Make sure that you change settings of the active gallery.</div>
    </div>
</div>