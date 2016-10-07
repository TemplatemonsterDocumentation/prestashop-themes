<h3>Smart Blog</h3>
<p><strong>Smart blog -</strong> a set of modules that allows creating blog in your
    store. It consists of the following modules:</p>
<ul class="marked-list">
    <li>Smart Blog</li>
    <li>RSS Smart Blog Feed</li>
    <li>Smart Blog Archive</li>
    <li>Smart Blog Categories</li>
    <li>Smart Blog Home Latest</li>
    <li>Smart Blog Latest Comments</li>
    <li>Smart Blog AddThisModule</li>
    <li>Smart Blog Popular Posts</li>
    <li>Smart Blog Recent Posts</li>
    <li>Smart Blog Related Post</li>
    <li>Smart Blog Search</li>
    <li>Smart Blog Tags</li>
</ul>
<p>It also has its hooks where the blog modules can appear
    on the site, they can also show up in the standard hooks (only columns).
</p>
<h4>Smart Blog</h4>
<p>This is the main module that contains many settings for blog functionality. After
    its installation the Blog menu tab will show up in the main menu of your admin
    panel where you can add/remove/edit the posts/categories or select the type of
    images and their dimensions used in the posts (types and dimensions of post
    images are different from product images settings in your store). To add the
    frontend settings of the module, please navigate to <strong>Smart Blog
        (Modules -> Front Office Features -> Smart Blog)</strong> and add all the
    parameters.</p>
<h6>Description of parameters:</h6>
<ul class="index-list">
    <li>
        <dl class="inline-term">
            <dt>Meta Title</dt>
            <dd>the title of your blog that will show up on all its pages.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Meta Keyword</dt>
            <dd>keywords that will be used by search engines for better SEO optimization.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Meta Description</dt>
            <dd>description of your blog used by search engines for better SEO optimization.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Main Blog Url</dt>
            <dd>the URL of your Blog.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Use .html with Friendly Url</dt>
            <dd>enable/disable adding .html to the blog pages URLs using Friendly Urls.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Number of posts per page</dt>
            <dd>number of posts that show up per page (category/archives pages, etc.).</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Auto accepted comment</dt>
            <dd>enable/disable the auto accepted user comments; if enabled, comments will be available without
                admin
                moderation.
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Enable Captcha</dt>
            <dd>enable/disable Captcha under Leave Comment form on products pages.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Enable Comment</dt>
            <dd>enable/disable leaving comments by users.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Show Author Name</dt>
            <dd>enable/disable showing posts author on the blog pages and post single pages</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Show Post Viewed</dt>
            <dd>enable/disable showing number of times the users viewed the post. It will show up under the post
                on
                the
                blog pages and blog single pages.
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Show Author Name Style</dt>
            <dd>changing the format of the author name.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>AVATAR Image</dt>
            <dd>adding the standard avatar image for all users.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Show No Image</dt>
            <dd>enable/disable the image. No Image is set if there is no image for post/category, etc.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Show Category</dt>
            <dd>enable/disable the category image and description on the blog category pages.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Blog Page Column Setting</dt>
            <dd>setting the display of Blog related modules. It often requires additional settings, therefore it
                is recommended that you install additional modules the same way the standard PrestaShop modules
                are installed.
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Custom CSS</dt>
            <dd>you can add additional styles in this field. Be careful using the classes that are already used
                in the theme, since some conflicts may occur.
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Delete Old Thumblr</dt>
            <dd>is used to regenerate blog images in case image dimensions were changed or the new type of image
                was added. To regenerate, select <strong>'Yes'</strong> and click <strong>'Regenerate'</strong>.
            </dd>
        </dl>
    </li>
</ul>
<figure class="img-polaroid">
    <img src="img/smart_blog.png" alt=""/>
</figure>
<p class="alert alert-danger"><strong>ONLY AFTER THIS</strong> other blog related modules can be installed. The
    process of removal is opposite: <strong>FIRST,
        YOU SHOULD DELETE ALL RELATED MODULES</strong> and only then delete Smart Blog module.
</p>

<h4>RSS Smart Blog Feed</h4>
<h6>The module generating the new feed for your Blog.</h6>
<p>Has several settings in the admin panel:</p>
<ul class="index-list">
    <li>
        <dl class="inline-term">
            <dt>Update Period</dt>
            <dd>allows to display posts from specific time
                period (hour/day/week/month/year).
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Update Frequency</dt>
            <dd>allows to set the frequency of update (1
                week, 2 hours, etc.).
            </dd>
        </dl>
    </li>
</ul>
<p>At the top there is a file path where news will be generated. It consists of the
    website URL + /modules/smartblogfeed/rss.php.</p>
<figure class="img-polaroid">
    <img src="img/feed.png" alt=""/>
</figure>

<h4>Smart Blog Archive</h4>
<h6>This block shows up in the left/right column and is used to sort posts by period
    of time (month).</h6>
<p>It does not have any additional settings.</p>

<h4>Smart Blog Categories</h4>
<h6>This block shows up in the left/right column and is used to sort posts by
    category.</h6>
<p>It does not have any additional settings.</p>

<h4>Smart Blog Home Latest Posts</h4>
<h6>This block shows up only in <strong>homepagecontent</strong> hook and is used to
    display latest posts on the home page.</h6>
<p>Settings:</p>
<ul class="index-list">
    <li>
        <dl class="inline-term">
            <dt>Number of posts to display in Latest News</dt>
            <dd>number of posts that will show up on home page.</dd>
        </dl>
    </li>
</ul>
<figure class="img-polaroid">
    <img src="img/home.png" alt=""/>
</figure>

<h4>Smart Blog Latest Comments</h4>
<h6>This block shows up in the left/right column and is used to display the latest
    comments added for the Blog posts.</h6>
<p>Settings:</p>
<ul class="index-list">
    <li>
        <dl class="inline-term">
            <dt>Number of Comments to Show</dt>
            <dd>number of comments shown in
                the block.
            </dd>
        </dl>
    </li>
</ul>
<figure class="img-polaroid">
    <img src="img/comments.png" alt=""/>
</figure>

<h4>Smart Blog AddThis Module</h4>
<h6>This block shows up on the post single page and allows to share this post in
    social networks.</h6>
<p>It does not have any additional settings.</p>

<h4>Smart Blog Popular Posts</h4>
<h6>This block shows up in the left/right column and is used to display the most
    popular posts viewed.</h6>
<p>Settings:</p>
<ul class="index-list">
    <li>
        <dl class="inline-term">
            <dt>Number of popular Posts to Show</dt>
            <dd> number of popular posts
                shown in the block.
            </dd>
        </dl>
    </li>
</ul>
<figure class="img-polaroid">
    <img src="img/popular.png" alt=""/>
</figure>

<h4>Smart Blog Recent Posts</h4>
<h6>This block shows up in the left/right column and is used to display the latest
    posts.</h6>
<p>Settings:</p>
<ul class="index-list">
    <li>
        <dl class="inline-term">
            <dt>Show Number Of Recent Posts</dt>
            <dd>number of recent posts shown in the block.</dd>
        </dl>
    </li>
</ul>
<figure class="img-polaroid">
    <img src="img/recent.png" alt=""/>
</figure>

<h4>Smart Blog Related Posts</h4>
<h6>This block shows up on the post single page and is used to show up related
    posts.</h6>
<p>Settings:</p>
<ul class="index-list">
    <li>
        <dl class="inline-term">
            <dt>Show Number Of Related Posts</dt>
            <dd>number of related posts shown in the block.</dd>
        </dl>
    </li>
</ul>
<figure class="img-polaroid">
    <img src="img/related.png" alt=""/>
</figure>

<h4>Smart Blog Search</h4>
<h6>This block shows up in the left/right column and is used to search through the
    blog.</h6>
<p>It does not have any additional settings.</p>

<h4>Smart Blog Tag</h4>
<h6>This block shows up in the left/right column and is used to display tags used in
    the blog.</h6>
<p>Settings:</p>
<ul class="index-list">
    <li>
        <dl class="inline-term">
            <dt>Number of Tag to Show</dt>
            <dd>number of tags shown in the block.</dd>
        </dl>
    </li>
</ul>
<figure class="img-polaroid">
    <img src="img/tags.png" alt=""/>
</figure>