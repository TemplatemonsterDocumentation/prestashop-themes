<h3>TM Mega Menu</h3>
<div class="pdf-hidden">
    <?php if ($project == 'eveprest') { ?>
        <div>
            <p style="margin-bottom: 0;">Available in:</p>
            <p style="margin-top: 0;" class="small text-secondary">Fashion, Electronics, Spare Parts, Furniture</p>
        </div>
    <?php } ?>
</div>
<p>The module is designed to create complex menus. The module provides the ability to display one item (without
    sub-menu), a menu item with a sub-menu and a menu item with sub-menu by means of a multi-row and multi-column
    block. The module can be used in different positions, but it will display the same content. Available positions:
    top (displayTop), left (displayLeftColumn), right (displayRightColumn), footer (displayFooter). You can add
    categories (with subcategories), CMS categories (with subcategories), manufacturers (one or a list), suppliers
    (one or a list), stores (if multistore is used), links to any product, information block about the product,
    custom links (not limited in quantity), custom HTML blocks (not limited in number) and banners. See below
    for more details.</p>
<p>The module includes 6 main tabs that allow to customize the menu.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu.png" alt=""/>
</figure>
<h4>TM Mega Menu Items</h4>
<p>TM Mega Menu items are the basic items which appears in the menu.</p>
<p>In order to create a new item, open the TM Mega Menu module and click Add item button from the top menu or click "+" button in the top right of the table.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-items.png" alt=""/>
</figure>
<h6>In the form that appears, fill in the required fields.</h6>
<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Enter item name</dt>
            <dd>the tab title which is mandatory to be filled in for the default language, if the additional
                languages fields are not filled in, the tab takes its name from the default language.
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Active</dt>
            <dd>active/inactive tab.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Link</dt>
            <dd>a link that is assigned to this tab. You can enter a custom link, or choose from existing options
                (categories, CMS categories). If you leave the field blank, the link of this tab is inactive.
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Sort order</dt>
            <dd>the order of tabs to be displayed.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Specific Class</dt>
            <dd>the class which is added to emphasize the item (CSS class).</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Enter item badge</dt>
            <dd>is filled in depending on multi-languages.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>It is Mega Menu</dt>
            <dd>given tab sub-menu is a Mega Menu.
                <strong>*</strong>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Use simple menu</dt>
            <dd>given tab sub-menu is a simple menu.
                <strong>**</strong>
            </dd>
        </dl>
    </li>
</ul>
<p>
    <strong>*</strong>
    It is Mega Menu. If this option is selected, there will be a form to create a complex menu (Mega Menu).
</p>
<p>
    <strong>**</strong>
    Use simple menu. If this option is selected, there will be a form to create a simple menu. This is a menu that
    displays the selected content in a single column. If the menu has embedded content, the new column is added.
</p>
<figure class="img-polaroid">
    <img src="img/thmegamenu-add-items.png" alt=""/>
</figure>
<p>Complex menu consists of rows and columns in rows.</p>
<p><strong>The Row is a part of the Mega Menu structure.</strong> It includes the menu columns. The existing row can be
    removed by
    clicking the appropriate button. The row will be removed with the content it includes. The rows quantity is not
    limited.</p>
<p><strong>The Column is a part of the Mega Menu structure,</strong> which is placed inside the rows. (The Class) The
    width of the
    column cannot be less than 2 and more than 12. In order to make the menu display properly, the total column
    width cannot exceed 12. The width (class) is a Bootstrap column type, corresponds to the same values.</p>
<p>In order to create the menu, click the <strong>'Add row'</strong> button.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-items-add-form-row.png" alt=""/>
</figure>
<p>In the form appeared, click <strong>'Add column'</strong> button.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-items-add-form-row-col.png" alt=""/>
</figure>
<p>In the pop up window you need to specify the column class (from 2 to 12). The column itself appears
    next where you need to set the required settings.</p>
<p>Here you can change the column class, CSS class and the content from the list provided. You
    can add/remove content by double clicking the item, or by highlighting the items and clicking the
    corresponding button.</p>
<p>Block can be removed by clicking <strong>'Remove block'</strong> button in the footer of the block.</p>
<p>By removing the row, the included columns are also removed.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-items-add-form-row-col-content.png" alt=""/>
</figure>
<p>In order to move the content available in the selected menu, double-click or highlight the desired content and
    press the corresponding button.</p>
<p>Inactive menu information is saved while switching between menu types and you can always change the type of
    menu.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-items-add-form-simple.png" alt=""/>
</figure>
<h4>TM Mega Menu HTML</h4>
<p>In this section we will explain how to create a custom HTML block in the Mega Menu.</p>
<p>The module has a table listing all the available blocks. You can also add a new block by clicking the '+' button
    in the top right of the table.</p>
<h6>In the form that appears, fill in the required fields.</h6>
<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Enter HTML item name</dt>
            <dd>HTML block name, is mandatory to be filled in for the default language.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Specific class</dt>
            <dd>block's CSS class.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>HTML content</dt>
            <dd>HTML content.</dd>
        </dl>
    </li>
</ul>
<p>Added block will appear in the list of blocks, as well as in the list of available content while creating menu
    blocks.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-html.png" alt=""/>
</figure>
<h4>TM Mega Menu Links</h4>
<p>In this section we will show how to create custom links in the Mega Menu.</p>
<p>The module has a table listing all the available links. You can also add a new link by clicking the '+' button
    in the top right of the table.</p>
<h6>In the form that appears, fill in the required fields.</h6>
<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Enter Link name</dt>
            <dd>link name, is mandatory to be filled in for the default language.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Enter Link URL</dt>
            <dd>link URL, is mandatory to be filled in for the default language.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Specific class</dt>
            <dd>block's CSS class.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Open in new window</dt>
            <dd>open link in a new window.</dd>
        </dl>
    </li>
</ul>
<p>Added link will appear in the list of links, as well as in the list of available content while creating menu
    blocks.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-links.png" alt=""/>
</figure>
<h4>TM Mega Menu Banners</h4>
<p>In this section we will explain how to create banners in the Mega Menu.</p>
<p>The module has a table listing all the available banners. You can also add a new banner by clicking the '+'
    button in the top right of the table.</p>
<h6>In the form that appears, fill in the required fields.</h6>
<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Select a file</dt>
            <dd>select a file, is mandatory to be filled in for the default language.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Enter Banner name</dt>
            <dd>banner title, is mandatory to be filled in for the default language.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Enter Banner URL</dt>
            <dd>link URL, is mandatory to be filled in for the default language.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Specific class</dt>
            <dd>block's CSS class.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Public Title</dt>
            <dd>public banner title.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Description</dt>
            <dd>set the description of the banner.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Open in new window</dt>
            <dd>open link in a new window.</dd>
        </dl>
    </li>
</ul>
<p>Added banner will appear in the list of banners, as well as in the list of available content while creating menu
    blocks.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-banner.png" alt=""/>
</figure>
<h4>TM Mega Menu Video</h4>
<p>In this section we will explain how to add a video in the Mega Menu.</p>
<p>The module has a table listing all the available videos. You can also add a new video by clicking the '+'
    button in the top right of the table.</p>
<h6>In the form that appears, fill in the required fields.</h6>
<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Enter Video Name</dt>
            <dd>video title (the field is required).</dd>
        </dl>
    </li>
    <li><strong>Enter Video URL</strong> - add video link in the formats described below:
        <ul class="marked-list">
            <li>If this is a <strong>YouTube video</strong>, click on Embed and copy the code between the quotes for https://www.youtube.com/embed/video_id </li>
            <li>If this is a <strong>Vimeo video</strong>, click on Share icon and in the Embed section copy the source code between the quotes for http://player.vimeo.com/video/video_id
            </li>
        </ul>
    </li>
</ul>
<p>Added video will appear in the list of videos, as well as in the list of available content while creating menu
    blocks.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-video.png" alt=""/>
</figure>
<h4>TM Mega Menu Map</h4>
<p>In this section we will explain how to add a map in the Mega Menu.</p>
<p>The module has a table listing all the available maps. You can also add a new map by clicking the '+'
    button in the top right of the table.</p>
<h6>In the form that appears, fill in the required fields.</h6>
<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Enter Map item name</dt>
            <dd>the title of the map.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Enter Map latitude</dt>
            <dd>set a latitude value.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Enter Map longitude</dt>
            <dd> set a longitude value.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Marker</dt>
            <dd>adding a custom  marker.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Enter Map scale</dt>
            <dd>the scale of the map (used 8 by default).</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Map description</dt>
            <dd>set the description of the map.</dd>
        </dl>
    </li>
</ul>
<p>Added map will appear in the list of maps, as well as in the list of available content while creating menu blocks.</p>
<figure class="img-polaroid">
    <img src="img/tmmegamenu-map.png" alt=""/>
</figure>
