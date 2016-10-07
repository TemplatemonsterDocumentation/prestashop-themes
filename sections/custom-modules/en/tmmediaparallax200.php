<h3>TM Media Parallax 2.0.0</h3>
<p>This module is designed to let you add parallax effect to the DOM items of the page. It allows you to create multi-layered parallax. It also provides a possibility to add a custom background video (you can upload it from your computer to server) or add a YouTube video.</p>
<h4>TM Media Parallax Main Panel</h4>
<p>Main module panel that allows you to add, edit or remove parallax items. </p>
<figure class="img-polaroid">
    <img src="img/main-panel.jpg" alt="" />
</figure>
<h4>Creating a new parallax item</h4>
<p>In order to create a new parallax item, press 'plus' (1) icon, in the top right corner of the main panel.</p>
<figure class="img-polaroid">
    <img src="img/main-panel-add-item.jpg" alt="" />
</figure>
<p>Then you will see the following form.</p>
<figure class="img-polaroid">
    <img src="img/add-item.jpg" alt="" />
</figure>
<h4>Form options for adding parallax items</h4>
<ul class="index-list">
    <li>Selector - CSS selector of the item with parallax effect applied. For example, '#header .nav'</li>
    <li>Item status - item status (parallax will not be displayed if it's disabled)</li>
    <li>Speed - digit value from 0 to 2, which defines main parallax block speed</li>
    <li>Offset - main layer indent on the Y axis</li>
    <li>Inverse - parallax direction</li>
    <li>Fade - this option allows to configure main block fade-out on page scroll</li>
    <li>Forced full width - forced full width of the parallax block</li>
</ul>
<p>Press 'Save' after filling in all the required fields.</p>
<h4>Parallax layers list</h4>
<p>In order to see the list of parallax layers, you should press 'View' (1) near the main parallax item.</p>
<figure class="img-polaroid">
    <img src="img/main-panel-view.jpg" alt="" />
</figure>
<p>Then you'll see a table, in which the layers are displayed after they are added.</p>
<figure class="img-polaroid">
    <img src="img/layouts-panel.jpg" alt="" />
</figure>
<h4>Adding new layer</h4>
<p>In order to create a new parallax layer, press 'plus' (1) icon in the top right corner of the layers panel.</p>
<figure class="img-polaroid">
    <img src="img/layouts-panel-add.jpg" alt="" />
</figure>
<p>Then you will see the following form.</p>
<figure class="img-polaroid">
    <img src="img/add-layout.jpg" alt="" />
</figure>
<p>Press 'Save' after filling in all the required fields.</p>
<h4>Parallax layers types and their fields</h4>
<ul class="index-list">
    <li><p>Image-background - image used as a parallax background</p>
        <ul class="marked-list">
            <li>Item status - item status (parallax will not be displayed if it's disabled)</li>
            <li>Layout speed - digit value from 0 to 2, which defines main parallax block speed</li>
            <li>Offset - main layer indent on the Y axis</li>
            <li>Inverse - parallax direction</li>
            <li>Fade - this option allows to configure main block fade-out on page scroll</li>
            <li>Image - link to an image, to which parallax effect will be applied</li>
            <li>Sort order - layout position, relative to the rest of items</li>
        </ul>
    </li>
    <li><p>Video-background - video used as a parallax background</p>
        <ul class="marked-list">
            <li>Item status - item status (parallax will not be displayed if it's disabled)</li>
            <li>Layout speed - digit value from 0 to 2, which defines main parallax block speed</li>
            <li>Offset - main layer indent on the Y axis</li>
            <li>Inverse - parallax direction</li>
            <li>Fade - this option allows to configure main block fade-out on page scroll</li>
            <li>Image - link to an additional image</li>
            <li>Video parallax mp4 - video in mp4 format</li>
            <li>Video parallax webm - video in webm format</li>
            <li>Sort order - layout position, relative to the rest of items</li>
        </ul>
    </li>
    <li><p>Text - text layer which position can be defined with CSS</p>
        <ul class="marked-list">
            <li>Item status - item status (parallax will not be displayed if it's disabled)</li>
            <li>Layout speed - digit value from 0 to 2, which defines main parallax block speed</li>
            <li>Offset - main layer indent on the Y axis</li>
            <li>Inverse - parallax direction</li>
            <li>Fade - this option allows to configure main block fade-out on page scroll</li>
            <li>Content - layer content</li>
            <li>Specific class - custom CSS class for this layer</li>
            <li>Sort order - layout position, relative to the rest of items</li>
        </ul>
    </li>
    <li><p>Youtube-background - YouTube video used as a parallax background</p>
        <ul class="marked-list">
            <li>Item status - item status (parallax will not be displayed if it's disabled)</li>
            <li>Layout speed - digit value from 0 to 2, which defines main parallax block speed</li>
            <li>Offset - main layer indent on the Y axis</li>
            <li>Inverse - parallax direction</li>
            <li>Fade - this option allows to configure main block fade-out on page scroll</li>
            <li>Video id - YouTube video ID</li>
            <li>Sort order - layout position, relative to the rest of items</li>
        </ul>
    </li>
    <li><p>Image - image layer which position can be defined with CSS</p>
        <ul class="marked-list">
            <li>Item status - item status (parallax will not be displayed if it's disabled)</li>
            <li>Layout speed - digit value from 0 to 2, which defines main parallax block speed</li>
            <li>Offset - main layer indent on the Y axis</li>
            <li>Inverse - parallax direction</li>
            <li>Fade - this option allows to configure main block fade-out on page scroll</li>
            <li>Image - link to an image, to which parallax effect will be applied</li>
            <li>Specific class - custom CSS class for this layer</li>
            <li>Sort order - layout position, relative to the rest of items</li>
        </ul>
    </li>
</ul>
<h4>Uploading video and images to server</h4>
<p>In order to upload video or an image to server via File Manager, first you need to press 'file' (1) icon next to the needed field.</p>
<figure class="img-polaroid">
    <img src="img/upload-file.jpg" alt="" />
</figure>
<p>In the following window, in the 'actions' line, choose 'upload' (2).</p>
<figure class="img-polaroid">
    <img src="img/upload-file-2.jpg" alt="" />
</figure>
<p>Then you'll see one more pop-up window, to upload image or video file here.</p>
<h4>Warnings and recommendations</h4>
<ul class="index-list">
    <li>Mobile devices (smartphones, tablets) have parallax effect disabled by default, the uppermost block image layer is used as a background instead</li>
    <li>Forced full width of the parallax block affects page loading speed more critically than a regular fullwidth block loading</li>
    <li>The smaller the size of the uploaded video, the better.</li>
</ul>