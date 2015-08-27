<h3>Video Background Module</h3>

<p>Esse módulo permite que você inclua um vídeo no fundo de qualquer bloco de sua página HTML (de preferência com id ou
    tag única).</p>

<h6>Para inlcuir um vídeo de fundo, siga os passos abaixo:</h6>

<ol class="index-list">
    <li>Envie os arquivos de vídeo e imagens de amostra para modules/tmvideobackground/video (ou qualquer outro
        diretório no servidor) via FTP. O vídeo deve ser enviado em 3 formatos: .mp4, .ogv, .webm, todos os arquivos
        tendo o mesmo nome (ocean.mp4, ocean.ogv, ocean.webm). Imagens de amostra devem também estar em 3 formatos:
        .jpg, .gif, .png e ter os mesmos nomes (ocean.jpg, ocean.gif, ocean.png). </li>

    <li> No seu painel administrativo, abra o <strong>Módulo para fundo com vídeo
            (Módulos (Modules)->Fachada (Front Office Features)->Módulo para fundo com
            vídeo)</strong> inclua as configurações necessárias.


        <h6><strong>Configurações:</strong></h6>

        <ol class="index-list">
            <li>
                <dl class="inline-term">
                    <dt>Video selector</dt>
                    <dd>elemento da página HTML onde vai entrar o fundo com vídeo (id ou tag única, como body, header,
                        footer, etc.).
                    </dd>
                </dl>
            </li>

            <li>
                <dl class="inline-term">
                    <dt>Video path</dt>
                    <dd>caminho para os arquivos do vídeo (o caminho deve terminar com /), os arquivos podem ser ficar
                        em qualquer pasta no servidor, mas recomendamos que você envie-os para a pasta
                        <strong> modules/tmvideobackground/video/</strong>.
                    </dd>
                </dl>
            </li>

            <li>
                <dl class="inline-term">
                    <dt>Video files name</dt>
                    <dd>nome dos arquivos de vídeo. Só o nome (não precisa escrever o formato. Por exemplo, "ocean").
                    </dd>
                </dl>
            </li>

            <li>Clique em <strong>Salvar (Save)</strong>.</li>
        </ol>
    </li>
</ol>
<figure class="img-polaroid">
    <img src="img/video.png" alt="">
</figure>
<p class="alert alert-info">Para mostrar o vídeo, não pode haver qualquer outro fundo adicionado no elemento.</p>
