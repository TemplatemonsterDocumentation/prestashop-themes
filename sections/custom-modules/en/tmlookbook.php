<h3>TM Look Book</h3>
<?php if ($project == 'eveprest' ) { ?>
    <div>
        <p style="margin-bottom: 0;">Available in:</p>
        <p style="margin-top: 0;" class="small text-secondary">Fashion, Furniture</p>
    </div>
<?php } ?>
<h5>Requirements:</h5>
<p>This module allows to create lookbooks and combine them to collections. In their turn, lookbooks allow to view the products directly on the model. Also, if a product is marked in the lookbook, the module displays the lookbook link on the product page.</p>
<ul class="marked-list">
    <li>PHP 5.3+</li>
    <li>PrestaShop 1.6</li>
</ul>
<h5>TM Look Book Main panel</h5>
<p>On the main page of the module, you can delete and edit the module collections.</p>
<figure class="img-polaroid">
    <img src="img/tmlookbook-main-panel.png" alt=""/>
</figure>
<h5>Adding and editing the collection</h5>
<p>Collections allow to combine several lookbooks on one page. To add a collection, follow the next steps.</p>
<ul class="index-list">
    <li>
    	<p>In the collections table (the main module panel) click on the plus (1).</p>
        <figure class="img-polaroid">
            <img src="img/tmlookbook-add-collection.png" alt=""/>
        </figure>
    </li>
    <li>
    	<p>You will see a form with the next fields:</p>
        <ul class="marked-list">
            <li><strong>Status</strong> - this option allows to disable or enable the collection display on the collections page.</li>
            <li><strong>Name</strong> - the name of the collection that will be displayed on the collections page.</li>
            <li><strong>Description</strong> - the collection description.</li>
            <li><strong>Image</strong> - the main collection image.</li>
            <li><strong>Template</strong> - the template for the lookbooks of this collection. When you select a template, you select the way the lookbooks of this collection will be displayed on the page.</li>
        </ul>
    </li>
    <li>
    	<p>After having filled all the fields, press the 'Save' (2) button.</p>
        <figure class="img-polaroid">
            <img src="img/tmlookbook-add-collection-2.png" alt=""/>
        </figure>
    </li>
    <li>
    	<p>The collection has been created. You can edit it by pressing the 'Edit' (3) button, or you can proceed to the next step and create lookbooks for the collection.</p>
        <figure class="img-polaroid">
            <img src="img/tmlookbook-add-collection-3.png" alt=""/>
        </figure>
    </li>
</ul>
<h5>Creating and editing lookbooks</h5>
<ul class="index-list">
    <li>
    	<p>After creating a lookbook, press the 'View' (1) button next to the needed collection.</p>
        <figure class="img-polaroid">
            <img src="img/tmlookbook-add-lookbook.png" alt=""/>
        </figure>
    </li>
    <li>
    	<p>In the appeared block press the '+' button (2).</p>
        <figure class="img-polaroid">
            <img src="img/tmlookbook-add-lookbook-2.png" alt=""/>
        </figure>
    </li>
    <li>
    	<p>You'll see a form with the following options:</p>
        <ul class="marked-list">
            <li><strong>Status</strong> - the lookbook status, the option defines whether the lookbook will be displayed.</li>
            <li><strong>Name</strong> - the name of the look.</li>
            <li><strong>Description</strong> - the description of the look.</li>
            <li><strong>Image</strong> - the main image of the look, here you can mark the products and descriptions.</li>
        </ul>
    </li>
    <li>
    	<p>After filling in all the fields, press the 'Save & Stay' (3) button to continue creating hotspots.</p>
        <figure class="img-polaroid">
            <img src="img/tmlookbook-add-lookbook-3.png" alt=""/>
        </figure>
    </li>
</ul>
<h5>Adding and Editing Hotspots</h5>
<p>After having saved the lookbook, you can add the hotspots.</p>
<ul class="index-list">
    <li>
    	<p>Press the image (in the needed point) (1) in the lookbook form.</p>
        <figure class="img-polaroid">
            <img src="img/tmlookbook-add-hotspot.png" alt=""/>
        </figure>
    </li>
    <li>
    	<p>You will see a form with the following settings:</p>
        <ul class="marked-list">
            <li><strong>Type</strong> - this is the point type, it has two values 'Product' and 'Content'. The product type allows to select a product that will be attached to the point, and content type allows to add content (name, description, html) to the point.</li>
            <li><strong>Product</strong> - selecting a product for the point. It appears, if the selected type is 'Product'.</li>
            <li><strong>Name</strong> - the name attached to the point. This field is available, only if the type 'Content' is selected.</li>
            <li><strong>Description</strong> - the point description or coding. Available only if the type 'Content' is selected.</li>
        </ul>
    </li>
    <li>
    	<p>After having selected the needed options, press the 'Save' (2) button, hotspot will be created and displayed on the page.</p>
        <figure class="img-polaroid">
            <img src="img/tmlookbook-add-hotspot-2.png" alt=""/>
        </figure>
    </li>
</ul>
<h5>Deleting a hotspot</h5>
<ul class="index-list">
    <li>
    	<p>To delete a point, hover over it (1).</p>
        <figure class="img-polaroid">
            <img src="img/tmlookbook-delete-hotspot.png" alt=""/>
        </figure>
    </li>
    <li>
    	<p>You'll see a button with a cross, press it (2).</p>
        <figure class="img-polaroid">
            <img src="img/tmlookbook-delete-hotspot-2.png" alt=""/>
        </figure>
    </li>
    <li><p>The point is deleted.</p></li>
</ul>
<h5>Changing the hotspot position</h5>
<p>To change the point position, drag and drop it to the needed position.</p>
<h5>How to navigate to the collections page?</h5>
<p>Navigate to the main module page and press the button (1), you'll see a page with all the collections. You can add the links to the lookbooks to any module that supports custom content.</p>
<figure class="img-polaroid">
    <img src="img/tmlookbook-view-collections.png" alt=""/>
</figure>