<h2 class="item1">Introduction</h2>
<h3>What is PrestaShop e-commerce?</h3>
<p>PrestaShop is an e-commerce solution which is free for the basic kernel and open source. It supports payment gateways
    such as Google checkout, paypal or payments pro via APIs.</p>
<p>PrestaShop is available under the Open Software License and officially launched in August 2007 for dd to medium-sized
    businesses. The software, which is based on the Smarty template engine, is used by several thousands of shops
    worldwide.</p>
<h3>What is PrestaShop template?</h3>
<p>PrestaShop template is a theme for PrestaShop e-commerce solution. It provides you with vast variety of customization
    opportunities and allows you to create an online store that fully meets your needs.</p>
<h3>Template structure</h3>
<h6>The template package you have downloaded consists of several folders. Let's see what each folder contains:</h6>
<?php if ($project == 'eveprest') { ?>
    <ul class="files_structure">
        <li class="folder">
            <dl class="inline-term">
                <dt>
                    <i class="fa fa-folder"></i>
                    <b>eveprest-theme</b>
                </dt>
                <dd>folder containing theme files (has the same structure for each theme)</dd>
            </dl>
            <ul>
                <li>
                    <dl class="inline-term">
                        <dt>
                            <i class="fa fa-folder"></i>
                            <strong>sources</strong></dt>
                        <dd>contains template source files</dd>

                    </dl>
                    <ul>
                        <li>
                            <dl class="inline-term">
                                <dt>
                                    <i class="fa fa-folder"></i>
                                    <strong>custom_html</strong></dt>
                                <dd>custom HTML files</dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="inline-term">
                                <dt>
                                    <i class="fa fa-folder"></i>
                                    <strong>psd</strong></dt>
                                <dd>template Adobe Photoshop source files (.psd)</dd>
                            </dl>
                        </li>
                    </ul>
                </li>
                <li>
                    <dl class="inline-term">
                        <dt>
                            <i class="fa fa-folder"></i>
                            <strong>theme</strong></dt>
                        <dd>contains PrestaShop theme files</dd>
                    </dl>
                    <ul>
                        <li class="folder">
                            <dl class="inline-term">
                                <dt>
                                    <i class="fa fa-folder"></i>
                                    manual_install
                                </dt>
                                <dd>contains file with the download link</dd>
                            </dl>
                            <ul>
                                <li class="folder">
                                    <dl class="inline-term">
                                        <dt>
                                            <i class="fa fa-file"></i>
                                            info.txt
                                        </dt>
                                        <dd>contains link for downloading manual installation files</dd>
                                    </dl>
                                </li>
                            </ul>
                        </li>
                        <li class="folder">
                            <dl class="inline-term">
                                <dt>
                                    <i class="fa fa-folder"></i>
                                    sample_data
                                </dt>
                                <dd>contains file with the download link</dd>
                            </dl>
                            <ul>
                                <li class="folder">
                                    <dl class="inline-term">
                                        <dt>
                                            <i class="fa fa-file"></i>
                                            info.txt
                                        </dt>
                                        <dd>contains link for downloading sample data files</dd>
                                    </dl>
                                </li>
                            </ul>
                        </li>
                        <li class="folder">
                            <dl class="inline-term">
                                <dt>
                                    <i class="fa fa-folder"></i>
                                    themeinstallator
                                </dt>
                                <dd>contains an archive for automatic theme installation</dd>
                            </dl>
                            <ul>
                                <li class="file">
                                    <dl class="inline-term">
                                        <dt>
                                            <i class="fa fa-archive"></i>
                                            theme####.zip
                                        </dt>
                                        <dd> theme archive. Contains all theme files. It is installed using standard
                                            PrestaShop installation method
                                        </dd>
                                    </dl>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="folder">
            <dl class="inline-term">
                <dt>
                    <i class="fa fa-folder"></i>
                    <b>screenshots</b>
                </dt>
                <dd> contains template screenshots</dd>
            </dl>
        </li>
        <li class="folder">
            <dl class="inline-term">
                <dt>
                    <i class="fa fa-folder"></i>
                    <b>update</b>
                </dt>
                <dd>contains update files</dd>
            </dl>
        </li>
        <li class="file">
            <dl class="inline-term">
                <dt>
                    <i class="fa fa-file"></i>
                    documentation.txt
                </dt>
                <dd>contains link to online documentation</dd>
            </dl>
        </li>
        <li class="file">
            <dl class="inline-term">
                <dt>
                    <i class="fa fa-file"></i>
                    info.txt
                </dt>
                <dd>contains instructions on extracting source files</dd>
            </dl>
        </li>
    </ul>
<?php } else { ?>
    <ul class="files_structure">
        <li class="folder">
            <dl class="inline-term">
                <dt>
                    <i class="fa fa-folder"></i>
                    <b>screenshots</b></dt>
                <dd> contains template screenshots. Not for production</dd>
            </dl>
        </li>
        <li class="folder">
            <dl class="inline-term">
                <dt>
                    <i class="fa fa-archive"></i>
                    <b>sources.zip</b></dt>
                <dd> contains template source files</dd>
            </dl>
            <ul>
                <li class="folder">
                    <i class="fa fa-folder"></i>
                    <strong>sources</strong>
                    <ul>
                        <li>
                            <dl class="inline-term">
                                <dt>
                                    <i class="fa fa-folder"></i>
                                    <strong>psd</strong></dt>
                                <dd> template Adobe Photoshop source files (.psd)</dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="inline-term">
                                <dt>
                                    <i class="fa fa-folder"></i>
                                    <strong>custom_html</strong></dt>
                                <dd> custom HTML files</dd>
                            </dl>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="folder">
            <dl class="inline-term">
                <dt>
                    <i class="fa fa-folder"></i>
                    <b>theme</b></dt>
                <dd> contains PrestaShop theme files</dd>
            </dl>
            <ul>
                <li class="folder">
                    <dl class="inline-term">
                        <dt>
                            <i class="fa fa-folder"></i>
                            manual_install
                        </dt>
                        <dd> contains files for manual installation</dd>
                    </dl>
                    <ul>
                        <li class="folder">
                            <dl class="inline-term">
                                <dt>
                                    <i class="fa fa-folder"></i>
                                    img
                                </dt>
                                <dd> images for manual installation</dd>
                            </dl>
                        </li>
                        <li class="folder">
                            <dl class="inline-term">
                                <dt>
                                    <i class="fa fa-folder"></i>
                                    modules
                                </dt>
                                <dd> modules for manual installation</dd>
                            </dl>
                        </li>
                        <li class="folder">
                            <dl class="inline-term">
                                <dt>
                                    <i class="fa fa-folder"></i>
                                    themes
                                </dt>
                                <dd> theme files for manual installation</dd>
                            </dl>
                        </li>
                        <li class="file">
                            <dl class="inline-term">
                                <dt>
                                    <i class="fa fa-file"></i>
                                    dump.sql
                                </dt>
                                <dd> sample data file for manual installation</dd>
                            </dl>
                        </li>
                    </ul>
                </li>
                <li class="folder">
                    <dl class="inline-term">
                        <dt>
                            <i class="fa fa-folder"></i>
                            sample_data
                        </dt>
                        <dd> contains files used for sample data installation with sampledatainstall module
                        </dd>
                    </dl>
                </li>
                <li class="folder">
                    <dl class="inline-term">
                        <dt>
                            <i class="fa fa-folder"></i>
                            themeinstallator
                        </dt>
                        <dd> contains an archive for automatic theme installation</dd>
                    </dl>
                    <ul>
                        <li class="file">
                            <dl class="inline-term">
                                <dt>
                                    <i class="fa fa-file"></i>
                                    theme####.zip
                                </dt>
                                <dd> theme archive. Contains all theme files. It is installed using standard
                                    PrestaShop installation method
                                </dd>
                            </dl>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="file">
            <dl class="inline-term">
                <dt>
                    <i class="fa fa-file"></i>
                    fonts_info.txt
                </dt>
                <dd> contains links where the template custom fonts can be downloaded
                </dd>
            </dl>
        </li>
        <li class="file">
            <dl class="inline-term">
                <dt>
                    <i class="fa fa-file"></i>
                    info.txt
                </dt>
                <dd> contains instructions on extracting source files</dd>
            </dl>
        </li>
    </ul>
<?php } ?>
