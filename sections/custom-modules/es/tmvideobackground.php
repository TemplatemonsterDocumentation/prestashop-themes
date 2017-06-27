<h3>Módulo Video Background</h3>
<p>Este módulo permite agregar el video de fondo a cualquier bloque en tu página HTML (debe haber el id o la etiqueta 
    única).</p>
<h6>Para agregar el vídeo de fondo, puede seguir los pasos a continuación:</h6>
<ul class="index-list">
    <li>Suba los archivos de vídeo y previsualize imágenes en carpeta modules/tmvideobackground/video (o cualquier otra carpeta en
         Servidor) a través de FTP. El video debe cargarse en 3 formatos: .mp4, .ogv, .webm, todos los archivos que tengan los mismos nombres
         (ocean.mp4, ocean.ogv, ocean.webm). Las imágenes de vista previa también deben estar en 3 formatos: .jpg, .gif, .png y tener la
         mismos nombres (ocean.jpg, ocean.gif, ocean.png).
    </li>
    <li><p>En su panel de Administración abra <strong>Módulo Video Background</strong> (Módulos -> Características de Front Office -> Modulo Video
            background) y realice los ajustes 
			necesarios.</p>
        <h6><strong>Ajustes:</strong></h6>
        <ul class="marked-list">
            <li>
                <dl class="inline-term">
                    <dt>Selector de Video</dt>
                    <dd>elemento de la página HTML donde se agregará el vídeo de fondo (id o etiqueta única 
					(cuerpo, encabezado, pie de página, etc).).
                    </dd>
                </dl>
            </li>
            <li>
                <dl class="inline-term">
                    <dt>Ruta del video</dt>
                    <dd>ruta de acceso a los archivos de vídeo (la ruta debe tener '/' al final), los archivos se pueden ubicar en cualquier
                         carpeta del servidor, pero recomendamos que los cargue en
                        <strong> modules/tmvideobackground/video/ </strong>.
                    </dd>
                </dl>
            </li>
            <li>
                <dl class="inline-term">
                    <dt>Nombre de los archivos de vídeo</dt>
                    <dd>nombre de sus archivos de vídeo. Sólo se debe agregar el nombre (no es necesario escribir el formato). Por
                        ejemplo, "ocean".
                    </dd>
                </dl>
            </li>
            <li>Haga clic en el botón <strong>'Guardar'</strong>.</li>
        </ul>
    </li>
</ul>
<figure class="img-polaroid">
    <img src="img/video.png" alt=""/>
</figure>
<p class="alert alert-info">Para mostrar el video, no debe haber ningún otro fondo añadido para este elemento.</p>