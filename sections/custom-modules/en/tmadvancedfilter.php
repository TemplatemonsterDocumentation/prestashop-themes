<h3>TM Advanced Filter</h3>
<div class="pdf-hidden">
    <?php if ($project == 'eveprest') { ?>
        <div>
            <p style="margin-bottom: 0;">Available in:</p>
            <p style="margin-top: 0;" class="small text-secondary">Spare Parts</p>
        </div>
    <?php } ?>
</div>
<h4>Introduction</h4>
<p>TM Advanced Filter module gives an opportunity to implement a quick search of the needed product based on key
    features. It allows to create filters with the unlimited number of search criteria, which are available in the store
    by default or are created, when adding the products. Filter criteria can be the following: levels of categories (by
    nesting), manufacturers, suppliers, attributes, features, and more. Also the module has the following features:
    creating connected filters, in which needed criteria become available only after selecting the parent parameter
    (nesting level is unlimited); selecting the filter criteria grid for the top page filter.
    You can select the filter field type from the available, specify the parent filter, add its name, label and
    description. All is easily set up and edited in the user-friendly admin panel.
    For the better speed, the module uses the products indexation algorithm by the set criteria. It can be easily and
    quickly inserted to a Prestashop store of any kind.</p>
<h4>Installing and deleting the module</h4>
<h6>The module is installed and deleted like any other PrestaShop module.</h6>
<p class="alert alert-info"><span>After deleting or reinstalling the module, all the module settings and filters will be discarded.</span>
</p>
<h4>Filter setup/editing</h4>
<p>After installing the module, you can set it up on the module configuration page. By default, you'll see the tabs with
    available filter types. To start creating a filter, select a tab (1) and press the 'Create filter' button (2).</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-1.png" alt=""/></figure>
<p>In the appeared filter window, fill in all the needed fields.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-2.png" alt=""/></figure>
<ul class="marked-list">
    <li><strong>Name</strong> - the name of the filter. It'll be displayed on the frontend as the filter block title;
    </li>
    <li><strong>Description</strong> - the filter description. It'll be displayed on the frontend next to the filter
        block title;
    </li>
    <li><strong>Show counter</strong> - allows displaying the number of products that will be available after selecting
        current parameter. The number will be displayed next to the search criterion (in brackets);
    </li>
    <li><strong>Show selected filters</strong> - allows displaying the list of the selected search criteria with the
        ability to unselect any of them;
    </li>
    <li><strong>Show filter layout type</strong> - selecting filter grid (available only for the Top
        Filter);
    </li>
</ul>
<p class="alert alert-info"><span>Please note that there are no required fields. If you leave all the fields empty, then a one-column filter with no description and title will be created.</span>
</p>
<h5>Editing the filter</h5>
<p>To change the description and filter settings, press the 'Cogwheel' button in the filter menu.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-3.png" alt=""/></figure>
<p>In the editing mode, the form looks and works as in the setup mode.</p>
<p class="alert alert-info"><span>The filter grid selection is available only for 'Top filter'.</span></p>
<p class="alert alert-info"><span>When changing the filter grid, all the elements will be automatically transferred to the first column, keeping the nesting and display order (based on the principle: all elements of the previous column with the display order kept inside).</span>
</p>
<h5>Deleting the filter</h5>
<p>To change the filter description or filter settings, press the 'Cross' in the filter menu</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-31.png" alt=""/></figure>
<p>and confirm filter deletion.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-4.png" alt=""/></figure>
<p class="alert alert-warning">
    <span>After deleting a filter, all the data will be permanently lost.</span>
</p>
<h5>Filter indexation</h5>
<p><strong>Indexation</strong> - the process of creating unique tables with the data necessary for the filter,
    which is created for the filter-specific criteria. They allow to drastically speed up the filter work on the
    frontend.</p>
<p>The corresponding button in the filter menu is highlighted in red. If the button is not highlighted, the filter
    doesn't need indexation.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-5.png" alt=""/></figure>
<p class="alert alert-info"><span>The re-indexation process can take some time, depending on the number of products in the store and selected filter criteria.</span>
</p>
<p class="alert alert-info"><span>If the filter requires re-indexation, it won't be displayed on the frontend.</span>
</p>
<h5>Creating/editing filter elements (criteria)</h5>
<p>To add an element to the filter, select it in the panel of available elements (on the left) and drag it to the
    available area of the filter grid (it will light up after being selected. In the example, the grid has 2
    columns).</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-6.png" alt=""/></figure>
<p>In the highlighted area select the column and position of the new element and drop the element.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-7.png" alt=""/></figure>
<p>In the appeared element creation window, supply all the necessary data:</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-8.png" alt=""/></figure>
<ul class="marked-list">
    <li><strong>Name</strong> - the name of the filter element on the frontend. It won't be displayed, if you leave the
        field empty.
    </li>
    <li><strong>Label</strong> - the label of the filter element on the frontend. It won't be displayed, if you leave
        the field empty.
    </li>
    <li><strong>Description</strong> - the filter element description on the frontend. It won't be displayed, if you
        leave the field empty.
    </li>
    <li><strong>Parent filter</strong> - the filter parent element, after selecting which this element will be
        available. The element will be always available if the field is left empty.
    </li>
    <li><strong>Filter field type</strong> - the way the element will be displayed on the frontend. The following types
        are available:
        <ul class="marked-list">
            <li>radio</li>
            <li>select</li>
            <li>checkbox</li>
            <li>range-select (only for the 'price' field type)</li>
            <li>range-input (only for the 'price' field type)</li>
        </ul>
    </li>
</ul>
<p class="alert alert-info"><span>You can change all the data and the parent element in the filter editing mode.</span>
</p>
<p class="alert alert-info"><span>After editing the element, the filter should be re-indexed, which is shown by the button in the filter menu. Do not go for reindexing the filter after editing every element, you can do this after applying changes to all the needed elements - by doing so you'll save your time.</span>
</p>
<p>If there is a tree of connected filters, you can add the new element as a related to this tree.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-10.png" alt=""/></figure>
<h5>Editing the filter element</h5>
<p>To edit a filter element, press the 'Cogwheel' button (1) in the filter upper right corner.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-9.png" alt=""/></figure>
<h5>Sorting (display order of the filter elements)</h5>
<p>By default, the new elements are displayed after the element in the order you've added them. If the filter is added
    to the tree, it'll be displayed after the existing elements in the tree.</p>
<p>To move the elements inside the filter, select the needed element and drag it to the needed position. You can drag
    elements in one column, as well as to another grid columns. You can also change the sorting inside the tree, or move
    the whole tree at once.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-11.png" alt=""/></figure>
<p>After moving the element from one column to another, the display order will change automatically in all columns.</p>
<h5>Deleting the filter element</h5>
<p>You can delete a filter element in two ways:</p>
<ul class="index-list">
    <li><p>drag the element back to the column of available elements;</p>
        <figure class="img-polaroid"><img src="img/tmadvancedfilter-12.png" alt=""/></figure>
    </li>
    <li><p>or press the 'Cross' in the upper right corner of the needed element.</p>
        <figure class="img-polaroid"><img src="img/tmadvancedfilter-9.png" alt=""/></figure>
    </li>
</ul>
<p>Regardless of the chosen method, you'll see a window of deleting confirmation.</p>
<figure class="img-polaroid"><img src="img/tmadvancedfilter-13.png" alt=""/></figure>
<p class="alert alert-info">
    <span>After deleting a filter with nested elements, all the nested elements will be deleted.</span></p>
<p class="alert alert-info"><span>After deleting an element, the filter needs to be re-indexed, what is indicated by the button in the filter menu. Do not go for reindexing the filter after editing every element, you can do this after applying changes to all the needed elements - by doing so you'll save your time.</span>
</p>
<h5>"Smart" reindexation</h5>
<p>The module provides the automatic (smart) reindexation after making changes to the products or after some other
    crucial changes (manufacturer, attribute, etc.). The table fields will be reindexed, if these changes affected the
    filter functioning.</p>
<p class="alert alert-info"><span>If, after making changes, the filter did not take them automatically, enter the filter settings page and reindex it manually.</span>
</p>
<p class="alert alert-info"><span>The filter won't be reindexed automatically after adding currency, that's why it should be reindexed manually.</span>
</p>
<h4>FAQ</h4>
<div class="responsive-tabs" data-type="accordion">
    <ul class="resp-tabs-list">
        <li>I've created a filter, but I don't see it on the frontend.</li>
        <li>I've added the filter name and description, but they are not displayed on the frontend.</li>
        <li>I've added elements to the filter, but it stopped displaying on the frontend.</li>
        <li>I want the element to be available only after another element is selected.</li>
        <li>I want to swap elements.</li>
        <li>I want to delete a parent element, but want to keep all the nested elements. How to achieve
            this?
        </li>
        <li>I want to change the filter grid, but I don't want to create the filter again. What can I do?</li>
        <li>How to create a completely new filter, if there is already a filter for this position?</li>
        <li>The filter stopped displaying on the frontend.</li>
        <li>Why not all the elements are active on the frontend?</li>
    </ul>
    <div class="resp-tabs-container">
        <div>The filter won't be displayed, if there are no elements in it, or if it wasn't reindexed. <br>
            Make sure that there are elements in the filter and that it has been reindexed.
        </div>
        <div>Perhaps, you've added data not for all languages. Don't forget that the module is multilingual and fill in
            the data for each language separately.
        </div>
        <div>Make sure that you reindexed the filter after making changes.</div>
        <div>Select the element, after selecting which the desired element should become available, and set it as the
            parent element.
        </div>
        <div>Just drag the element to the place, where you want to locate it, it'll automatically take the new
            position and this won't affect the filter functionality.
        </div>
        <div>In the menu for editing the first nested element, discard the connection with the parent element that you
            want to delete, and then delete the parent element. In this case, all the nested elements won't be deleted.
        </div>
        <div>Enter the editing menu and select a new grid for the filter, then, save changes.
            All the filter elements will display in the first column of the new grid, then, you can move them to the
            needed positions.
        </div>
        <div>To create a new filter, delete the exiting one.</div>
        <div>Make sure that the filter doesn't need indexation.</div>
        <div>Check, whether the element is not a child to the element that is currently not active. Make sure there are
            products that meet the criteria specified.
        </div>
    </div>
</div>