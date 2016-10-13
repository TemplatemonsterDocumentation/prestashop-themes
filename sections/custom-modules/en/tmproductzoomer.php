<h3>TM Product Zoomer</h3>
<?php if ($project == 'eveprest' ) { ?>
    <div>
        <p style="margin-bottom: 0;">Available in:</p>
        <p style="margin-top: 0;" class="small text-secondary">Fashion, Electronics, Spare Parts, Furniture, One Product</p>
    </div>
<?php } ?>
<p>This module is an alternative solution for the standard product image zoom on the single product page. It's fully compatible with the standard additional products thumbnail carousel and product attributes changes. It allows you to choose among the three available options (window/lens/inner) for image zoom with the advanced plugin settings. The module is based on the <a href="//igorlino.github.io/elevatezoom-plus/" target="_blank">Elevatezoom Plus</a> plugin.</p>
<h4>Installation and removing</h4>
<p>The module is installed and deleted like any other Prestashop module. After module has been installed the standard product zoom effect will be automatically disabled. After deleting the module standard effect should be enabled back manually (if needed) in the <strong>Preferences -> Products -> Enable JqZoom instead of Fancybox on the product page</strong> section.</p>
<h4>Module configuration</h4>
<p>After the module has been installed you can configure it on the module configuration page.</p>
<p>By default the configuration page shows the <strong>simplified</strong> set of options.</p>
<figure class="img-polaroid">
    <img src="img/tmproductzoomer-1.png" alt=""/>
</figure>
<ul class="index-list">
    <li><strong>Live mode</strong> - module is on/off.</li>
    <li><strong>Fancybox</strong> - whether to show the enlarged image in the Fancybox on click.</li>
    <li><strong>Change image on hover</strong> - switch the main image on thumbnail hover (by default is set to switch on click).</li>
    <li><strong>Responsive</strong> - allows to the use adaptive functionality for plugin display on the mobile devices.</li>
    <li><strong>Zoom Type</strong> - choose the type of the enlarged image display mode
        <ul>
            <li><strong>window</strong> - the enlarged image shows up next to the main image in one of the available (16) positions</li>
            <li><strong>lens</strong> - the image is zoomed in the lens container, on top of it</li>
            <li><strong>inner</strong> - the image is zoomed inside of main image container, fully covering it.</li>
        </ul>
        <div class="alert alert-info"><span>The mobile devices (&lt; 768) have "lens" mode activated instantly.</span></div>
    </li>
    <li><strong>Extended settings</strong> - enables advanced settings for the experienced users. You can see the link to the official <a href="//igorlino.github.io/elevatezoom-plus/api.htm" target="_blank"> documentation for more details</a> next to it.</li>
</ul>
<h6><strong>Extended</strong> module configuration</h6>
<ul class="index-list">
    <li><strong>Scroll Zoom</strong> - zoom ratio change on the mousewheel scroll
        (available for all types).</li>
    <li><strong>Cursor</strong> - cursor type on the magnified image hover. The following options are available: default, cursor, crosshair (available for all types).</li>
    <li><strong>Zoom settings</strong> - available for all types, if the 'Scroll Zoom' is enabled.
        <figure class="img-polaroid"><img src="img/tmproductzoomer-2.png" alt="" /></figure>
        <ul class="marked-list">
            <li><strong>Zoom Level</strong> - the zoom level on the initial hover</li>
            <li><strong>Min Zoom Level</strong> - a minimum zoom level</li>
            <li><strong>Max Zoom Level</strong> - a maximum zoom level</li>
            <li><strong>Scroll Zoom Increment</strong> - magnifying scroll increment</li>
        </ul>
    </li>
    <li><strong>Easing</strong> - the magnified image appearance effect (available for all types).
        <figure class="img-polaroid"><img src="img/tmproductzoomer-3.png" alt="" /></figure>
        <ul class="marked-list">
            <li><strong>Zoom Easing</strong> - effect on/off</li>
            <li><strong>Easing Amount</strong> - effect delay value</li>
        </ul>
    </li>
    <li><strong>Image Crossfade</strong> - main image blur outside the hover area (the lens) - available for window, lens.</li>
    <li><strong>Magnified image window settings</strong> - available for window.
        <figure class="img-polaroid"><img src="img/tmproductzoomer-4.png" alt="" /></figure>
        <ul class="marked-list">
            <li><strong>Zoom Window Width</strong> - window width in px</li>
            <li><strong>Zoom Window Height</strong> - window height in px</li>
            <li><strong>Zoom Window Offset X</strong> - window offset on the X axis</li>
            <li><strong>Zoom Window Offset Y</strong> - window offset on the Y axis</li>
            <li><strong>Zoom Window Position</strong> - window position choice relatively to the main image (the positions available are presented on the image below this field)</li>
            <li><strong>Zoom Window Bg Color</strong> - window background image (for transparent images only)</li>
            <li><strong>Zoom Window Fade In</strong> - the effect of slowing the window appearance</li>
            <li><strong>Zoom Window Fade Out</strong> - the effect of slowing the window disappearance</li>
            <li><strong>Border Size</strong> - window border width in px</li>
            <li><strong>Border Color</strong> - window border color</li>
        </ul>
    </li>
    <li><strong>Zoom Lens</strong> - zoom lens (available for window, lens).
        <figure class="img-polaroid"><img src="img/tmproductzoomer-5.png" alt="" /></figure>
        <ul class="marked-list">
            <li><strong>Zoom Lens</strong> - on/off</li>
            <li><strong>Lens Shape</strong> - lens type. It can take the following values: circular/rounded or squared/rectangular</li>
            <li><strong>Lens Color</strong> - lens inner background color</li>
            <li><strong>Lens Opacity</strong> - lens inner background opacity</li>
            <li><strong>Lens Size</strong> - lens size in px</li>
            <li><strong>Lens Fade In</strong> - the speed of lens appearance effect</li>
            <li><strong>Lens Fade Out</strong> - the speed of lens disappearance effect</li>
            <li><strong>Lens Border</strong> - lens border width</li>
            <li><strong>Lens Border Color</strong> - lens border color</li>
            <li><strong>Contain Lens Zoom</strong> - the restriction of the lens overflow outwards the main image container</li>
        </ul>
    </li>
    <li><strong>Tint</strong> - the shade effect on the area outside the lens (available for window).
        <figure class="img-polaroid"><img src="img/tmproductzoomer-6.png" alt="" /></figure>
        <ul class="marked-list">
            <li><strong>Tint</strong> - effect on/off</li>
            <li><strong>Tint Color</strong> - the lens outer area background</li>
            <li><strong>Tint Opacity</strong> - the lens outer area opacity</li>
            <li><strong>Tint Fade In</strong> - the appearance effect speed</li>
            <li><strong>Tint Fade Out</strong> - the disappearance effect speed</li>
        </ul>
    </li>
</ul>
<div class="alert alert-info">If you switch the zoom type, advanced options set is changed accordingly to show only the available parameters for the type selected.</div>
<div class="alert alert-warning">Be careful when editing the extended settings. If the settings are set incorrectly, the effect can be ugly.</div>