<h3>Video Background Module</h3>

<p>This module allows to add the background video to any block in your HTML page (there should be the id or unique
    tag).</p>

<h6>To add the background video, you can follow the steps below:</h6>

<ol class="index-list">
    <li>Upload the video files and preview images to modules/tmvideobackground/video folder (or any other folder on
        server) via FTP. The video should be uploaded in 3 formats: .mp4, .ogv, .webm, all files having the same names
        (ocean.mp4, ocean.ogv, ocean.webm). Preview images should be also in 3 formats: .jpg, .gif, .png and have the
        same names (ocean.jpg, ocean.gif, ocean.png). </li>

    <li> In your admin panel open
        <strong>Video background module (Modules->Front Office Features->Video background module)</strong> and perform
        the required settings.

        <h6>
            <strong>Settings:</strong>
        </h6>

        <ol class="index-list">
            <li>
                <dl class="inline-term">
                    <dt>Video selector</dt>
                    <dd>element of HTML page where the background video will be added (id or unique tag (body, header,
                        footer, etc.).
                    </dd>
                </dl>
            </li>

            <li>
                <dl class="inline-term">
                    <dt>Video path</dt>
                    <dd>path to your video files (the path should have / at the end), the files can be located in any
                        folder on server, but we recommend that you upload them to
                        <strong> modules/tmvideobackground/video/ </strong> folder.
                    </dd>
                </dl>
            </li>

            <li>
                <dl class="inline-term">
                    <dt>Video files name</dt>
                    <dd>names of your video files. Only name should be added (there is no need to write the format. For
                        example,"ocean").
                    </dd>
                </dl>
            </li>

            <li>Click <strong>Save</strong> button. </li>
        </ol>
    </li>
</ol>

<figure class="img-polaroid">
    <img src="img/video.png" alt=""/>
</figure>
<p class="alert alert-info">To display the video, there should be no other background added for this element.</p>