<h3>M&oacute;dulo de Video en segundo plano</h3>

<p>Este m&oacute;dulo permite a&ntilde;adir v&iacute;deo de fondo a cualquier bloque en su p&aacute;gina HTML (debe ser
    el id o etiqueta &uacute;nica).</p>

<h6>Para a&ntilde;adir v&iacute;deo de fondo, puede seguir los siguientes pasos:</h6>

<ol class="index-list">
    <li>Cargar los archivos de v&iacute;deo y im&aacute;genes de vista previa a la carpeta
        modules/tmvideobackground/video (o cualquier otra carpeta en el servidor) mediante FTP. El video debe ser subido
        en 3 formatos: .mp4, .ogv, .webm, todos los archivos tienen que tener los mismos nombres (ocean.mp4, ocean.ogv,
        ocean.webm). Las im&aacute;genes de vista previa deben estar en 3 formatos tambi&eacute;n: .jpg, .gif, .png y
        tener los mismos nombres (ocean.jpg, ocean.gif, ocean.png). </li>

    <li> En su panel de administraci&oacute;n abra
        <strong>M&oacute;dulo de Video en segundo plano (Modules->Front Office Features->Video background
            module)</strong> y realice los ajustes necesarios.


        <h6><strong>Ajustes:</strong></h6>

        <ol class="index-list">
            <li>
                <dl class="inline-term">
                    <dt>Selector de video</dt>
                    <dd>elemento de p&aacute;gina HTML donde se agregar&aacute; el v&iacute;deo de fondo (id o
                        etiqueta &uacute;nica (cuerpo, cabecera, pie de p&aacute;gina, etc.).
                    </dd>
                </dl>
            </li>

            <li>
                <dl class="inline-term">
                    <dt>Ruta del video</dt>
                    <dd>ruta de los archivos de v&iacute;deo (la ruta debe tener una / al final), los archivos pueden
                        estar ubicados en cualquier carpeta del servidor, pero le recomendamos que los cargue a la
                        carpeta
                        <strong> modules/tmvideobackground/video/</strong>.
                    </dd>
                </dl>
            </li>

            <li>
                <dl class="inline-term">
                    <dt>Archivos de video</dt>
                    <dd>nombres de los archivos de v&iacute;deo. S&oacute;lo el nombre debe a&ntilde;adirse (no hay
                        necesidad de escribir el formato. Por ejemplo, "ocean").
                    </dd>
                </dl>
            </li>

            <li>Haga clic en el bot&oacute;n <strong>Guardar</strong>.</li>
        </ol>
    </li>
</ol>
<figure class="img-polaroid">
    <img src="img/video.png" alt="">
</figure>
<p class="alert alert-info">Para visualizar el video, no debe haber ning&uacute;n otro video adicional para el
    elemento.</p>
