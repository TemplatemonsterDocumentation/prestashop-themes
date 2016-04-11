<h3>Video Background Module</h3>

<p>Bu modül, HTML sayfanızdaki herhangi bir bloka arkaplan videosu eklemenizi sağlar. (id veya özgün etiket
    olmalıdır).</p>

<h6>Arkaplan videosu eklemek için, aşağıdaki adımları takip ediniz:</h6>

<ol class="index-list">
    <li>FTP aracılığıyla, video ve videoya ait olan ön görseli modules/tmvideobackground/video klasörüne yükleyin (veya
        sunucudaki başka bir klasöre). Video 3 formatta yüklenebilir: .mp4, .ogv, .webm, dosyaların isimleri şu şekilde
        olabilir (ocean.mp4, ocean.ogv, ocean.webm). Ön görsel de 3 formatta yüklenebilir: .jpg, .gif, .png ve isimleri
        şu şekilde olabilir (ocean.jpg, ocean.gif, ocean.png). </li>

    <li> Yönetici panelinizden <strong>Video background module (Modules->Front Office
            Features->Video background module)</strong> kısmına girip, gerekli ayarlamaları yapabilirsiniz.


        <h6><strong>Ayarlar:</strong></h6>

        <ol class="index-list">
            <li>
                <dl class="inline-term">
                    <dt>Video selector</dt>
                    <dd>arkaplan videosunun HTML sayfaya ekleneceği body, header, footer vs. şeklindeki alan (id veya
                        özgün etiket).
                    </dd>
                </dl>
            </li>

            <li>
                <dl class="inline-term">
                    <dt>Video path</dt>
                    <dd>video dosyanızın web yolu (sonunda / işareti olmalıdır), dosyalar sunucudaki herhangi bir
                        klasörde olabilir fakat bizim önerimiz<strong> modules/tmvideobackground/video/</strong>
                        klasörüne yüklemenizdir.
                    </dd>
                </dl>
            </li>

            <li>
                <dl class="inline-term">
                    <dt>Video files name</dt>
                    <dd>video dosyanızın ismi. Sadece isim eklemelisiniz (videonun formatını yazmanıza gerek yok. Sırf
                        "ocean" şeklinde yazın).
                    </dd>
                </dl>
            </li>

            <li>Son olarak <strong>Save</strong> (Kaydet) e tıklayın.</li>
        </ol>
    </li>
</ol>
<figure class="img-polaroid">
    <img src="img/video.png" alt="">
</figure>
<p class="alert alert-info">Videoyu görüntülemek için, başka bir arkaplan eklenmemiş olmalıdır.</p>
