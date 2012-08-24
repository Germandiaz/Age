<div>
    <h2>Galería</h2>
    <div>
        <?php 
            $directory = 'Imagenes/gallery';//directorio donde estaras las imagenes
            $allowed_types = array('jpg', 'jpeg', 'gif', 'png');//formatos que se cargaran
            $file_parts = array();
            $ext = '';
            $title = '';
            $i = 0;
            $dir_handle = @opendir($directory) or die("Error en el directorio de las imagenes!");
            while ($file = readdir($dir_handle)) {
                //si en la ruta hay archivos continuar
                if ($file == '.' || $file == '..')
                    continue;
                    $file_parts = explode('.', $file);
                    $ext = strtolower(array_pop($file_parts));
                    $title = implode('.', $file_parts);
                    $title = htmlspecialchars($title);
                    $nomargin = '';
                    if (in_array($ext, $allowed_types)) {
                        if (($i + 1) % 4 == 0)
                            $nomargin = 'nomargin';
                            echo '<div class="pic ' . $nomargin . '" style="background:url(' . $directory . '/' . $file . ') no-repeat 25% 25%;"><a href="' . $directory . '/' . $file . '" title="' . $title . '" target="_blank">' . $title . '</a></div>';                                   
                            $i++;
                        }
                    }
                    closedir($dir_handle);
        ?>
    </div>
</div>
