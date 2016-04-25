<h3>TM Product Zoomer</h3>

<p>This module is an alternative solution for the standard product image zoom on the single product page. It's fully compatible with the standard additional products thumbnail carousel and product attributes changes. It allows you to choose among the three available options (window/lens/inner) for image zoom with the advanced plugin's settings. The module is based on the <a href="//igorlino.github.io/elevatezoom-plus/" target="_blank">Elevatezoom Plus</a> plugin.</p>

<h5>Installation and removing</h5>
<p>The module is installed and deleted like any other Prestashop module. After module has been installed the standard product zoom effect will be automatically disabled. After deleting the module standard effect should be enabled back manually (if needed) in the <strong>Preferences->Products->Enable JqZoom instead of Fancybox on the product page</strong> section.</p>
<h5>Module configuration</h5>
<p>After the module has been installed you can configure it on the module configuration page.</p>
<p>By default the configuration page shows the <strong>simplified</strong> set of options.</p>
<figure class="img-polaroid">
    <img src="img/tmproductzoomer-1.png" alt=""/>
</figure>
<ol class="index-list">
    <li><strong>Live mode</strong> - module is on/off </li>
    <li><strong>Fancybox</strong> - whether to show the enlarged image in the Fancybox on click.</li>
    <li><strong>Change image on hover</strong> - switch the main image on thumbnail hover (by default is set to switch on click)</li>
    <li><strong>Responsive</strong> - allows to the use adaptive functionality for plugin display on the mobile devices</li>
    <li><strong>Zoom Type</strong> - choose the type of the enlarged image display mode
        <ul>
            <li><strong>window</strong> - the enlarged image shows up next to the main one in one of the available (16) positions</li>
            <li><strong>lens</strong> - the image is zoomed in the lens container, on top of the it</li>
            <li><strong>inner</strong> - the image is zoomed inside of the main image container, with the full cover on it</li>
        </ul>
        <div class="alert alert-info"><span>The mobile devices(&lt; 768) have "lens" mode activated instantly</span></div>
    </li>
    <li><strong>Extended settings</strong> - enables advanced settings for the experienced users. You can see the link to the official <a href="//igorlino.github.io/elevatezoom-plus/api.htm" target="_blank"> documentation for more details</a> next to it.</li>
</ol>
<p><strong>Extended</strong> module configuration</p>
<ol class="index-list">
    <li><strong>Scroll Zoom</strong> - zoom ratio change on the mousewheel scroll.
        (available for all types)</li>
    <li><strong>Cursor</strong> - cursor type on the magnified image hover. There are the following options available: default, cursor, crosshair. (available for all types)</li>
    <li><strong>zoom settings</strong> - (available for all types, if the 'Scroll Zoom' is enabled)
        <figure class="img-polaroid"><img src="img/tmproductzoomer-2.png" alt="" /></figure>
        <ul>
            <li>Zoom Level - the zoom level on the initial hover</li>
            <li>Min Zoom Level - a minimum zoom level</li>
            <li>Max Zoom Level - a maximum zoom level</li>
            <li>Scroll Zoom Increment - increment on the magnifying scroll</li>
        </ul>
    </li>
    <li><strong>Easing</strong> - the magnified image appearance effect (available for all types)
        <figure class="img-polaroid"><img src="img/tmproductzoomer-3.png" alt="" /></figure>
        <ul>
            <li>Zoom Easing - effect on/off</li>
            <li>Easing Amount - effect delay value</li>
        </ul>
    </li>
    <li><strong>Image Crossfade</strong> - main image blur outside the hover area (the lens).
        (available for window, lens)</li>
    <li><strong>magnified image window settings</strong> - (available for window)
        <figure class="img-polaroid"><img src="img/tmproductzoomer-4.png" alt="" /></figure>
        <ul>
            <li>Zoom Window Width - window width in px</li>
            <li>Zoom Window Height - window height in px</li>
            <li>Zoom Window Offset X - window offset on the X axis</li>
            <li>Zoom Window Offset Y - window offset on the Y axis</li>
            <li>Zoom Window Position - window position choice relatively to the main image (the positions available are presented on the image below this field)</li>
            <li>Zoom Window Bg Color - window background image (for transparent images only)</li>
            <li>Zoom Window Fade In - the effect of slowing the window appearance</li>
            <li>Zoom Window Fade Out - the effect of slowing the window disappearance</li>
            <li>Border Size - window border width in px</li>
            <li>Border Color - window border color</li>
        </ul>
    </li>
    <li><strong>Zoom Lens</strong> - zoom lens (available for window, lens)
        <figure class="img-polaroid"><img src="img/tmproductzoomer-5.png" alt="" /></figure>
        <ul>
            <li>Zoom Lens - on/off</li>
            <li>Lens Shape - lens type. It can take the following values: circular/rounded or squared/rectangular</li>
            <li>Lens Color - lens inner background color</li>
            <li>Lens Opacity - lens inner background opacity</li>
            <li>Lens Size - lens size in px</li>
            <li>Lens Fade In - the speed of lens appearance effect</li>
            <li>Lens Fade Out - the speed of lens disappearance effect</li>
            <li>Lens Border - lens border width</li>
            <li>Lens Border Color - lens border color</li>
            <li>Contain Lens Zoom - the restriction of the lens overflow outwards the main image container</li>
        </ul>
    </li>
    <li><strong>Tint</strong> - the shade effect on the area outside the lens (available for window)
        <figure class="img-polaroid"><img src="img/tmproductzoomer-6.png" alt="" /></figure>
        <ul>
            <li>Tint - effect on/off</li>
            <li>Tint Color - the lens outer area background</li>
            <li>Tint Opacity - the lens outer area opacity</li>
            <li>Tint Fade In - the appearance effect speed</li>
            <li>Tint Fade Out - the disappearance effect speed</li>
        </ul>
    </li>
</ol>

<div class="alert alert-info">If you switch the zoom type, advanced options set is changed accordingly to show only the available parameters for the type selected.</div>
<div class="alert alert-warning">Be careful when editing the extended settings. If the settings are set incorrectly, the effect can be ugly.</div>