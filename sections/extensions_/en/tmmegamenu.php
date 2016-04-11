<h3>TM Mega Menu</h3>

<p>The module is designed to create complex menus. The module provides the ability to display one item (without
    sub-menu), a menu item with a sub-menu and a menu item with sub-menu by way of a multi-row and multi-column
    block. The module can be used in different positions, but it will display the same content. Available positions:
    top(displayTop), left(displayLeftColumn), right(displayRightColumn), footer(displayFooter). You can add
    categories (with subcategories), CMS categories (with subcategories), manufacturers (one or a list), suppliers
    (one or a list), stores (if multistore is used), links to any product, information block about the product,
    custom links are not limited in quantity, custom HTML blocks are not limited in number, and banners. See below
    for more details.</p>

<h4>TM Mega Menu Tabs</h4>

<p>TM Mega Menu tabs are the basic items which are the top menu part.</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs.png" alt=""/>
</figure>

<p>In order to create a new tab, open the TM Mega Menu module and click + in the Tabs list table.</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add.png" alt=""/>
</figure>

<h6>In the form that appears, fill in the required fields.</h6>
<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>Enter tab name</dt>
            <dd>the tab title which is mandatory to be filled in for the default language, if the additional
                languages fields are not filled in, the tab gives its name from the default language. Field is
                mandatory.
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
            <dt>Enter tab badge</dt>
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
    <img src="img/tmmegamenu-tabs-add-form.png" alt=""/>
</figure>

<p>Complex menu consist of rows and columns in rows.</p>

<p><strong>The Row is a part of the Mega Menu structure.</strong> It includes the menu columns. The existing row can be
    removed by
    clicking the appropriate button. The row will be removed with the content it includes. The rows quantity is not
    limited.</p>

<p><strong>The Column is a part of the Mega Menu structure,</strong> which is placed inside the rows. (The Class) The
    width of the
    column cannot be less than 2 and more than 12. In order to make the menu display properly, the total column
    width cannot exceed 12. The width (class) is a Bootstrap column type, corresponds to the same values.</p>

<p>In order to create the menu, click the Add row button</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-row.png" alt=""/>
</figure>

<p>In the form appeared, click Add column button</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-row-col.png" alt=""/>
</figure>

<p>The pop up window appears, where you need to specify the column class (from 2 to 12). The column itself appears
    next where you need to set necessary settings,</p>

<p>here you can change the column class, add CSS class, and also the required content from the list provided. You
    can add/remove content by double clicking the required item, or by highlighting required items and clicking the
    corresponding button.</p>

<p>Block can be removed by clicking Remove block button in the footer of the block.</p>

<p>By removing the row, the included columns are also removed.</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-row-col-content.png" alt=""/>
</figure>

<p>In order to move the content available in the selected menu, double-click or highlight the desired content and
    press the corresponding button.</p>


<p>Inactive menu information is saved while switching between menu types and you can always change the type of
    menu.</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-tabs-add-form-simple.png" alt=""/>
</figure>

<h4>TM Mega Menu HTML</h4>

<p>In this section we will explain how to create a custom HTML block in the Mega Menu.</p>

<p>The module has a table listing all the available blocks to which you can add a new block by clicking the + button
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

<p>The module has a table listing all the available links to which you can add a new link by clicking the + button
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

<p>The module has a table listing all the available banners to which you can add a new banner by clicking the +
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
<p>Added banner will appear in the list of banners, as well as in the list of available content while creating menu
    blocks.</p>

<figure class="img-polaroid">
    <img src="img/tmmegamenu-banners.png" alt=""/>
</figure>