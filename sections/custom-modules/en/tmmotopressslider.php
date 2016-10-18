<h3>TM MotoPress Slider</h3>
<?php if ($project == 'eveprest') { ?>
    <div>
        <p style="margin-bottom: 0;">Available in:</p>
        <p style="margin-top: 0;" class="small text-secondary">Fashion, Electronics, Spare Parts, Furniture</p>
    </div>
<?php } ?>

<h4>Module Installation</h4>
<p>This module provides the ability to add MotoPress Slider to your HTML page. It can be installed like any other
    PrestaShop module:</p>
<ul class="index-list">
    <li><p>Upload module to the /modules folder.</p></li>
    <li><p>Go to Admin panel -> Modules and Services -> Modules and Services (1), find the module (2) and click the
            'Install' button (3).</p>
        <figure class="img-polaroid">
            <img src="img/mpslider00_install.png" alt=""/>
        </figure>
    </li>
    <li><p>When the module is successfully installed you can see the 'MotoPress Slider' menu appeared at the bottom of
            your admin panel (1).<br>
            Click the 'MotoPress Slider' button in this menu (2).
        </p>
        <figure class="img-polaroid">
            <img src="img/mpslider01_open.png" alt=""/>
        </figure>
    </li>
</ul>

<h4>Module Usage</h4>
<h5>Adding/editing slider</h5>
<p>Now you are able to add new slider (1) or edit the existing one (2).</p>
<figure class="img-polaroid">
    <img src="img/mpslider02_addedit.png" alt=""/>
</figure>
<h5>Adding new slider</h5>
<p>When you clicked the 'Add Slider' button, there's an option to choose if it should be 'Custom Slider' or 'Product
    Slider'.</p>
<figure class="img-polaroid">
    <img src="img/mpslider03_slider_add.png" alt=""/>
</figure>
<p>The difference between these two types is the following: Product slider is created from the products of your store,
    though in Custom Slider you can add as much slides as you wish, customizing them according to your needs.</p>
<p>The settings for Custom and Product slider are slightly different. <br>
    They will be mentioned further.</p>

<h4>Module Configuration</h4>
<h5>Slider settings</h5>
<p>The main slider settings. Detailed settings description is below the screenshot.</p>
<figure class="img-polaroid">
    <img src="img/mpslider04_slider_slider_settings.png" alt=""/>
</figure>
<ul class="marked-list">
    <li><strong>Slider title</strong> - the title of the slider (example: Slider1); it is required when you have several
        sliders and have to distinguish them.
    </li>
    <li><strong>Slider alias</strong> - the unique alias that will be used in shortcodes for embedding the slider
        (example: slider1); must be unique.
    </li>
    <li><strong>Slider shortcode</strong> - copy this shortocode and paste to your page.</li>
    <li><strong>Force full width</strong> - enable this option to make this slider stretch to full-width.</li>
    <li><strong>Force full height</strong> - enable this option to make this slider full-height.</li>
    <li><strong>Force full size grid</strong> - makes grid stretch to parent container (but you still need to set grid
        width and height).
    </li>
    <li><strong>Layers grid size</strong> - allows to set initial width and height of the layers.</li>
    <li><strong>Enable slideshow</strong> - enable/disable the slideshow.</li>
    <li><strong>Slideshow delay</strong> - the time one slide stays on the screen; is measured in milliseconds.</li>
    <li><strong>Slideshow animation</strong> - choose the animation for changing slides.</li>
    <li><strong>Slideshow duration</strong> - animation duration in milliseconds.</li>
    <li><strong>Slideshow easings</strong> - easings on slide changing.</li>
    <li><strong>Start with slide</strong> - first slide index.</li>
</ul>
<h5>Controls</h5>
<p>Options which refer to slide switching controls.</p>
<figure class="img-polaroid">
    <img src="img/mpslider05_slider_controls.png" alt=""/>
</figure>
<ul class="marked-list">
    <li><strong>Show arrows</strong> - show/hide arrows.</li>
    <li><strong>Show bullets</strong> - show/hide bullets.</li>
    <li><strong>Show slideshow timer</strong> - show/hide timer.</li>
    <li><strong>Show slideshow play/pause button</strong> - show or hide play/pause button.</li>
    <li><strong>Hide controls when mouse leaves slider</strong> - hide controls when mouse is not on slider area.</li>
    <li><strong>Pause on hover</strong> - allows to pause slideshow while hover the slider.</li>
    <li><strong>Reverse order of the slides</strong> - animate slides in the reverse order.</li>
    <li><strong>Show counter</strong> - enable to display the number of slides.</li>
    <li><strong>Enable swipe</strong> - turn on swipe on desktop.</li>
</ul>
<h5>Appearance</h5>
<p>Options referring the display of slider.</p>
<figure class="img-polaroid">
    <img src="img/mpslider06_slider_appearance.png" alt=""/>
</figure>
<ul class="marked-list">
    <li><strong>Display on</strong> - hooks where the slider should be displayed.</li>
    <li><strong>Visible</strong> - min. and/or max. screen resolutions when the slider is visible (can be set using the
        presets: phone / tablet / desktop).
    </li>
    <li><strong>Initialization delay</strong> - the delay bofore slider initialization (should be set in milliseconds).
    </li>
    <li><strong>Initialize slider on scroll</strong> - choose if you want the slider to be initialized on scroll.</li>
    <li><strong>Slider custom class name</strong> - name of custom class which is used for slider.</li>
    <li><strong>Slider custom styles</strong> - custom css styles can be added directly in this textarea.</li>
</ul>
<h5>Content</h5>
<p>This menu appears only for the Product Slider. <br>
    When it will be configured press the 'Create' button (1).</p>
<figure class="img-polaroid">
    <img src="img/mpslider07_slider_content1.png" alt=""/>
</figure>
<ul class="marked-list">
    <li><strong>Link slides to product page</strong> - enable if you want the product page to be opened after the click
        on slide with the product.
    </li>
    <li><strong>Open in new window</strong> - enable this option to open the product page in new window.</li>
    <li><strong>Categories</strong> - categories with products to show in slider (Ctrl + click to select several
        categories).
    </li>
    <li><strong>Tags</strong> - tags to be included.</li>
    <li><strong>Only display in-stock products</strong> - only products in stock will be displayed.</li>
    <li><strong>Only display on sale products</strong> - only products on sale will be displayed.</li>
    <li><strong>Exclude products</strong> - add Product IDs separated by comma.</li>
    <li><strong>Include products</strong> - add Product IDs separated by comma.</li>
    <li><strong>Products number</strong> - number of products to be displayed.</li>
    <li><strong>Number of first results to skip (offset)</strong> - the number of first slides which will not be shown.
    </li>
    <li><strong>Order by</strong> - type of order to be applied.</li>
    <li><strong>Order direction</strong> - descending or ascending order direction.</li>
</ul>
<p>Below there's a list of products which will be displayed in slider. After you've made any changes in settings, press
    the 'Preview products' button (1).</p>
<figure class="img-polaroid">
    <img src="img/mpslider08_slider_content2.png" alt=""/>
</figure>
<p>After the slider has been configured, press the 'Save' button.</p>
<h5>Adding/editing slides</h5>
<p>To add new slide press the button 'Add Slide' (1). To edit the existing one click 'Edit' (2).</p>
<figure class="img-polaroid">
    <img src="img/mpslider09_slide_edit.png" alt=""/>
</figure>
<h5>Slide settings</h5>
<p>MotoPress Slider contains the Style Editor. That allows customizing slide layers, their styles and texts using
    preview area and avoiding any manual changes of code or CSS rules.</p>
<p>Select slider to edit and pick the actual slide to work with.</p>

<h6>General</h6>
<p>General slide settings include slide title and status.</p>
<figure class="img-polaroid">
    <img src="img/mpslider10_slide_general.png" alt=""/>
</figure>

<h6>Color</h6>
<p>In the 'Color' tab there are two variants of background color type - background color and gradient. Choose the option
    and the preferable color.</p>
<figure class="img-polaroid">
    <img src="img/mpslider11_slide_color.png" alt=""/>
</figure>

<p>If you choose gradient, select gradient color 1, gradient color 2 and the gradient angle.</p>
<figure class="img-polaroid">
    <img src="img/mpslider12_slide_gradient.png" alt=""/>
</figure>

<h6>Image</h6>
<p>Background image can be attached from the Media Library or from the external URL.</p>
<p>Image can also be added from your local folder to the Media Library. To do this press the 'Browse' button (1).</p>
<figure class="img-polaroid">
    <img src="img/mpslider13_slide_image.png" alt=""/>
</figure>

<p>Then choose 'Upload New' (2) tab and click on the selected area or simply drag the images into it.</p>
<figure class="img-polaroid">
    <img src="img/mpslider14_slide_image_upload.png" alt=""/>
</figure>

<h6>Video</h6>
<p>You can add video to your slide. To add video choose sources for different video formats and set other parameters for
    video display. You'll need to upload a video in MP4, WEBM or OGG format and provide the video file URL in Video
    tab.</p>
<p>Settings for video display can also be adjusted.</p>
<figure class="img-polaroid">
    <img src="img/mpslider15_slide_video.png" alt=""/>
</figure>

<h6>Link</h6>
<p>Link tab allows adding a link to your slide, assign the id, class, add link title and relation:</p>
<figure class="img-polaroid">
    <img src="img/mpslider16_slide_link.png" alt=""/>
</figure>

<h6>Visibility</h6>
<p>Slide visibility options can be managed from the Visibility tab:</p>
<figure class="img-polaroid">
    <img src="img/mpslider17_slide_visibility.png" alt=""/>
</figure>

<h6>Misc</h6>
<p>Misc section allows assigning a css class or id to the slide.</p>
<figure class="img-polaroid">
    <img src="img/mpslider18_slide_misc.png" alt=""/>
</figure>

<p>Click on 'Save slide' button when you are done making changes.</p>


<h4>Slide content</h4>
<p>Here you can add texts, images, buttons and video to each slide. <br>
    It is divided into two main sections: 'Layer Settings' (1) and 'Layers Sorting' (2).
    Above the 'Layer Settings' area there are four tabs for adding the needed content (3). After you've chosen what
    element you want to add, you can go further with detailed customization. <br>
    The great feature is that these contents are added as individual layers, so you can drag them up and down to set
    their order in the 'Layers Sorting' section (2).</p>
<p>Layers can be deleted separately (4) or all at once (5). </p>
<figure class="img-polaroid">
    <img src="img/mpslider19_slide_add_text.png" alt=""/>
</figure>
<h5>Layer settings</h5>
<h6>Add Text</h6>
<p>This tab is created to add, edit and locate texts in slide.</p>
<figure class="img-polaroid">
    <img src="img/mpslider19_slide_add_text_2.png" alt=""/>
</figure>
<ul class="marked-list">
    <li>Using grey squares you can quickly set the position of the text (1).</li>
    <li>To adjust it, add the 'X' and 'Y' value in pixels and set the width of this element (2).</li>
    <li>If 'Whitespace' is set to 'Normal', the text will be wrapped normally. If 'No-wrap' is chosen, the wrapping will
        be ignored (3).
    </li>
    <li>In the second column you can control the element animation - how, how long and when it should start and end (4)
        within the duration of the slide (which is shown below for your convenience (5); to change it go to Slider
        Settings -> Slideshow delay). You can also preview the animation in the window that appears after clicking the
        'Edit' button. Choose the duration, ease function, animation effect and press 'Play' to preview. Then click
        'Apply' when it meets your expectations.
    </li>
</ul>
<p>Settings described above are similar for each element, that's why only options from the third column will be
    mentioned further.</p>
<figure class="img-polaroid">
    <img src="img/mpslider19_slide_add_text_3.png" alt=""/>
</figure>
<ul class="marked-list">
    <li>The text itself can be added in the textarea which comes next (6).</li>
    <li>The text style can be chosen from the presets in the dropdown (7), edited after you've pressed the 'Edit' button
        (8), and disabled clicking the 'Remove' button (9). After the text style has been edited, press the 'Apply
        Style' button. If you want to edit and save the existing style, press 'Duplicate' button, edit and save it. To
        create from scrach the style which will be often applied, click the 'Create new preset' and edit it.
    </li>
    <li>It is also possible to add a custom class to each element (10).</li>
</ul>
<h6>Add Image</h6>
<figure class="img-polaroid">
    <img src="img/mpslider21_slide_add_image.png" alt=""/>
</figure>
<ul class="marked-list">
    <li>To choose the image press the 'Select image' button (1).</li>
    <li>If you want to add the link to image, add the URL of the target page in the 'Link' field (2).</li>
    <li>This link can be opened in new window ('On') or in the same ('Off') (3).</li>
    <li>Some styles can also be applied to images (for example, border styles) (4).</li>
    <li>It is also possible to add a custom classes to the element (5).</li>
</ul>
<h6>Add Button</h6>
<p>Button styles are almost the same as image styles.</p>
<figure class="img-polaroid">
    <img src="img/mpslider22_slide_add_button.png" alt=""/>
</figure>
<ul class="marked-list">
    <li>Add the button text in the corresponding field (1).</li>
    <li>Add the URL of the target page in the 'Link' field (2).</li>
    <li>Choose the style for your button or create your own (3).</li>
</ul>
<h6>Add Video</h6>
<figure class="img-polaroid">
    <img src="img/mpslider23_slide_add_video.png" alt=""/>
</figure>
<ul class="marked-list">
    <li>Video can be added as a link to Youtube or Vimeo, or it can be chosen from Media Library (1).</li>
    <li>Add the video URL (2).</li>
    <li>Add the URL of the preview image (3).</li>
    <li>Choose the video dispaly options (4) and add styles to it (5).</li>
</ul>
<p>After you've made changes to your slide, don't forget to click the 'Save slide' button (1), then press 'Close' (2) or
    navigate between other slides (3).</p>
<figure class="img-polaroid">
    <img src="img/mpslider24_slide_save.png" alt=""/>
</figure>

<h4>Import and Export Slider</h4>
<h6>Import & Export Slider is very useful if you need to transfer any Slider to different websites. You do not need to
    spend much time for re-building sliders from scratch any more. If you are a developer you can create sliders on your
    website, show them them to your customers and import sliders to customers' websites.</h6>
<h5>Exporting Slider</h5>
<h6>Follow these easy steps to learn how to export Motopress slider.</h6>
<ul class="index-list">
    <li>
        <p>Go to Motopress Slider in your admin panel (1, 2).</p>
        <figure class="img-polaroid">
            <img src="img/mpslider01_open.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>Click 'Export' button (3).</p>
        <figure class="img-polaroid">
            <img src="img/mpslider25_export1.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>Choose sliders you want to export (4) and click 'Export sliders' button (5).</p>
        <figure class="img-polaroid">
            <img src="img/mpslider26_export2.png" alt=""/>
        </figure>
    </li>
    <li>You'll be prompted to save the exported .json file to PC.</li>
</ul>
<h5>Importing Slider</h5>
<h6>In order to import Motopress Slider do the following:</h6>
<ul class="index-list">
    <li>
        <p>Go to Motopress Slider in your admin panel (1, 2).</p>
        <figure class="img-polaroid">
            <img src="img/mpslider01_open.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>Click 'Import' button (3).</p>
        <figure class="img-polaroid">
            <img src="img/mpslider27_import1.png" alt=""/>
        </figure>
    </li>
    <li>
        <p>Select the exported .json file from your PC clicking the 'Browse' button (4) and press 'Import' (5).</p>
        <figure class="img-polaroid">
            <img src="img/mpslider28_import2.png" alt=""/>
        </figure>
    </li>
    <li>Slider settings, images and other slider content should be exported successfully to your website.</li>
</ul>