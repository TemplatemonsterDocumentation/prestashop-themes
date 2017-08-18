<h3>TM HTML Content</h3>
<?php if ($project == 'eveprest' ) { ?>
    <div>
        <p style="margin-bottom: 0;">Available in:</p>
        <p style="margin-top: 0;" class="small text-secondary">Fashion, Electronics, Spare Parts, Furniture, One Product</p>
    </div>
<?php } ?>
<p>This module allows to display any content (image, HTML, links, etc.) in the following positions: displayNav, home,
    top, topColumn, left and right (displayLeftColumn/displayRightColumn), footer. It is used to expand design
    opportunities and add advertisement/information blocks to your store. It is a multilanguage module and can also work
    in the multistore website.</p>
<h5>Installation and Deleting</h5>
<p>The module can be installed and deleted like any other PrestaShop module.</p>
<h5>Module configuration</h5>
<p>After the module has been successfully installed, open the configuration page.</p>
<h6>To add the content, you should follow the steps below:</h6>
<ul class="index-list">
    <li>Click <strong>'Add new'</strong> button.</li>
    <li>The list of available languages. You can view the available elements for all languages by switching the
        language tabs.</li>
    <li>The list of elements added for specific position and language.</li>
</ul>
<figure class="img-polaroid">
    <img src="img/htmlcontent.png" alt=""/>
</figure>
<h6>Adding the element. Click <strong>Add item</strong> button and fill in the required settings (none of the fields are mandatory).</h6>
<p class="alert alert-info"> All elements of one language added to the same position will be displayed as a list at the
    backend and frontend.</p>
<figure class="img-polaroid">
    <img src="img/htmlcontent-1.1.png" alt=""/>
</figure><ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Language</dt>
            <dd>select the required language from the drop-down list.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Title</dt>
            <dd>title of the element.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Use title in front</dt>
            <dd>display the title of the element at the frontend (the title will show up in front of the
                element).
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Hook</dt>
            <dd>position where the element is added.</dd>
        </dl>
        </li>
    <li>
        <dl class="inline-term">
            <dt>Specific class</dt>
            <dd>custom class, defines item styling (CSS class).</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Image</dt>
            <dd>upload the image from your computer.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Image width</dt>
            <dd>image width shown at the frontend.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Image height</dt>
            <dd>image height shown at the frontend.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>URL</dt>
            <dd>add the link (the whole block will be wrapped in the link).</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Target blank</dt>
            <dd>open link in new tab.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>HTML</dt>
            <dd>HTML code (except the link if you have added it in the URL field) or text.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Save</dt>
            <dd>click to save the element.</dd>
        </dl>
    </li>
</ul>
<h6>Editing and removing the element</h6>
<p>When you add the element, it shows up in the corresponding list.</p>
<ul class="index-list">
    <li>The language where the elements were added.</li>
    <li>Position where the elements were added.</li>
    <li>Edit button with the drop-down list.</li>
    <li>Delete button.</li>
</ul>
<figure class="img-polaroid">
    <img src="img/htmlcontent-2.png" alt=""/>
</figure>
<h5>Editing</h5>
<h6>Click <strong>Edit</strong> button to modify the element.</h6>
<p>In the appeared screen change all the required fields.</p>
<figure class="img-polaroid">
    <img src="img/htmlcontent-3.1.png" alt=""/>
</figure>
<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Enable</dt>
            <dd>display the element at the frontend.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Image title</dt>
            <dd>title of the element.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Use title in front</dt>
            <dd>show up title at the frontend.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Hook to which the image should be attached</dt>
            <dd>position of the element.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Specific class</dt>
            <dd>custom CSS class.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Load your image</dt>
            <dd>image of the element.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Image width</dt>
            <dd>image width at the frontend.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Image height</dt>
            <dd>image height at the frontend.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Target link</dt>
            <dd>assign link to the element.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Open link in a new tab/page</dt>
            <dd>Open link in new tab.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Optional HTML code</dt>
            <dd>edit HTML code.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Save</dt>
            <dd>save changes.</dd>
        </dl>
    </li>
</ul>

<h6>Changing order of elements in the list</h6>
<figure class="img-polaroid">
    <img src="img/htmlcontent-4-1.png" alt=""/>
</figure>
<h6>To change the order of elements, you should just drag the element to the position you need.</h6>
<div class="img-polaroid">
    <figure>
        <img src="img/htmlcontent-4-2.png" alt="">
    </figure>
</div>
<br>
<div class="img-polaroid">
    <figure>
        <img src="img/htmlcontent-4-3.png" alt="">
    </figure>
</div>