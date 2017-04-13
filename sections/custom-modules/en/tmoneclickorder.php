<h3>TM One Click Order</h3>
<?php if ($project == 'kansysis' ) { ?>
    <div>
        <p class="small text-secondary">If you plan to use this module, after sample data installation find this module in Modules List and click the 'Install' (1) and then 'Reset' button (2).</p>
        <figure class="img-polaroid">
            <img src="img/tmoneclick-20.png" alt="">
        </figure>
        <figure class="img-polaroid">
            <img src="img/tmoneclick-21.png" alt="">
        </figure>
    </div>
    <hr style="margin-top: 30px;">
<?php } ?>
<p>Module is used to make the process of making an order much faster and easier than it was before.<br>
    It simplifies the procedure from five steps to one and makes it more appealing for the customers who want to save
    their time while making an order.<br>
    By means of this feature you can get more spontaneous purchases that will have a positive impact on your business.
</p>
<h4>Installation</h4>
<p>Navigate to Modules and Settings -> Modules and Settings (1) in your admin panel and find the TM One Click Order
    module (2). Then click the 'Install' button (3).</p>
<figure class="img-polaroid">
    <img src="img/tmoneclick-1.png" alt=""/>
</figure>
<h4>Module configuration</h4>
<p>After the module has been successfully installed, the 'Configure' page with the module settings will be opened. <br>
    You'll also see the new menu item 'Quick Orders' (1) and a new icon will appear in the navigation panel (2).
</p>
<figure class="img-polaroid">
    <img src="img/tmoneclick-2.png" alt=""/>
</figure>
<p>The settings are divided into three tabs - Preorder template (1), Preorder success message (2) and Settings (3).</p>
<figure class="img-polaroid">
    <img src="img/tmoneclick-3.png" alt=""/>
</figure>
<h5>Preorder template</h5>
<ul class="index-list-type-2">
    <li><p>Here you can add a new field by pressing the corresponding button (1):</p>
        <figure class="img-polaroid">
            <img src="img/tmoneclick-4.png" alt=""/>
        </figure>
        <p>Choose the options for the new field and click the 'Save' button (1):</p>
        <figure class="img-polaroid">
            <img src="img/tmoneclick-5.png" alt=""/>
        </figure>
        <ul class="marked-list">
            <li><strong>Type</strong> - choose the type of field.</li>
            <li><strong>Specific class</strong> - add the custom class for the current field.</li>
            <li><strong>Name</strong> - field name.</li>
            <li><strong>Description</strong> - field description; appears below the input.</li>
        </ul>
    </li>
    <li>
        <p>Edit the existing field.</p>

        <figure class="img-polaroid">
            <img src="img/tmoneclick-6.png" alt=""/>
        </figure>
        <p>Click on the field you want to edit. The settings are the same as for adding new field.</p>
    </li>
    <li>
        <p>Delete the fields from the form.<br>
        Click the 'Delete' button (1) in the top right corner of the field.</p>
        <figure class="img-polaroid">
            <img src="img/tmoneclick-7.png" alt=""/>
        </figure>
    </li>
</ul>
<h5>Preorder success message</h5>
<p>The tab allows to edit the message for the alert window that appears after the user clicks 'Send' button in quick order form.</p>
<p>Add the text/button you want to be shown and click the 'Save' button (1).</p>
<figure class="img-polaroid">
    <img src="img/tmoneclick-8.png" alt=""/>
</figure>
<h5>Settings</h5>
<p>The tab allows to switch the 'Ajax order' option on and off.</p>
<p>It helps the administrator to see the new quick orders which were submitted while processing the existing orders.</p>
<figure class="img-polaroid">
    <img src="img/tmoneclick-9.png" alt=""/>
</figure>
<p>If the option is enabled, the additional option 'Ajax order timeout' appears. <br>
    The value is set in milliseconds and means the time period between each check for new quick orders.
</p>
<figure class="img-polaroid">
    <img src="img/tmoneclick-10.png" alt=""/>
</figure>
<p>This option helps to open new preorders without page reloading. To see them in the list of quick orders, click the 'Load new orders' link (1) in Orders -> Quick Orders menu.</p>
<figure class="img-polaroid">
    <img src="img/tmoneclick-11.png" alt=""/>
</figure>
<h4>Order processing</h4>
<p>Navigate to Orders -> Quick Orders (1) in your admin panel.</p>
<figure class="img-polaroid">
    <img src="img/tmoneclick-12.png" alt=""/>
</figure>
<p>It has four tabs - New, Created, Removed and Search.</p>
<ul class="marked-list">
    <li>
        <p><strong>New</strong> - new preorders that have been submitted by the customers.</p>
        <p>In the left part there's a button to create a new preorder (1) and a list of preorders (2).</p>
        <p>In the right side you can see the preorder details (3) divided into tabs (Preorder information, Customer, Languages and currencies, Cart, Vouchers, Addresses, Shipping, Summary).</p>
        <figure class="img-polaroid">
            <img src="img/tmoneclick-13.png" alt=""/>
        </figure>
        <p>If the order has just been created, you'll see only three of them - Preorder information, Customer, Languages and currencies.</p>
        <figure class="img-polaroid">
            <img src="img/tmoneclick-14.png" alt=""/>
        </figure>
        <p>When you fill in the info about the customer, three more tabs will appear - Cart, Vouchers and Address. When the address info is added, Shipping and Summary tabs will be shown. Tabs where all required information has been successfully added, are colored with green. Yellow colored tabs require some more order details. Blue ones are informational, they are generated automatically.<br>
            When the Summary tab appears, there's a button 'Create the order' in Summary tab (1).</p>
        <figure class="img-polaroid">
            <img src="img/tmoneclick-15.png" alt=""/>
        </figure>
        <p>After clicking it the preorder will be transferred from 'New' to the 'Created' preorders list (1).</p>
        <figure class="img-polaroid">
            <img src="img/tmoneclick-16.png" alt=""/>
        </figure>
        <p>If you need to delete the order, there's a trash sign in the top right corner (1).</p>
        <p>Press it and the preorder will be transferred to 'Removed' orders tab.</p>
    </li>
    <li>
        <p><strong>Created</strong> - preorders that have been already processed by the administrator.</p>
        <p>Choose the order in the left side and click on it to see the detailed info in the right side.</p>
        <p>You can also click the 'Show' link to see full information about the customer (1), about the order (2) and the employee (3).</p>
        <figure class="img-polaroid">
            <img src="img/tmoneclick-17.png" alt=""/>
        </figure>
    </li>
    <li>
        <p><strong>Removed</strong> - preorders that have been cancelled.</p>
        <p>The preorder in this tab can still be recovered by clicking the '+' button (1). Then it will be transferred back to 'New' preorders tab.</p>
        <figure class="img-polaroid">
            <img src="img/tmoneclick-18.png" alt=""/>
        </figure>
    </li>

    <li>
        <p><strong>Search</strong> - preorders search. Enter the search (by customer info, employee info, order id, preorder id); you can also enter the specific date/date period when preorders were created.</p>
        <figure class="img-polaroid">
            <img src="img/tmoneclick-19.png" alt=""/>
        </figure>
    </li>
</ul>
