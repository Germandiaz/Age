<div>
    <h2>Galería</h2>
    <div>
    <?php $data = array('dir' => array('original' => 'assets/uploads/original/','thumb' => 'assets/uploads/thumbs/'),$total = '0',$images = array(),$error = ''); ?>
    <script type="text/javascript">
        function changepic(img_src, obj) {
            document["img_tag"].src = img_src;
            var thumbs = document.getElementsByName("thumb");
            for (var i = 0; i < thumbs.length; i++) {
                var tmp_id = "thumb_" + i;
                document.getElementById(tmp_id).setAttribute("class", "thumb");
            }
            document.getElementById(obj).setAttribute("class", "thumbclick");
            var ori_img = img_src.replace("thumb_", "");
            document.getElementById("detimglink").setAttribute("href", ori_img);
        }
    </script>
    <div id="imgshow"><!-- imagen grande a la izq -->
        <?php if (isset($images[0])) { ?>
        <a href="<?php echo base_url() . $dir['original'] . $images[0]['original']; ?>" target="_blank" id="detimglink">
        <img class="imgdet" name="img_tag" src="<?php echo base_url() . $dir['original'] . $images[0]['original']; ?>" width="500"/>
        </a>
        <?php } ?>
    </div>
    <!-- boton de carga de las imagenes -->
    <div id="imglist">
        <form enctype="multipart/form-data" id="fupload" method="post" action="<?php echo site_url('galeriaingresado/'); ?>">
            <input name="userfile" type="file" size="10"/>
            <input type="submit" name="btn_upload" value="Cargar &uarr;" class="btnupload"/>
            <?php if (isset($error)) { ?>
                <div class="error"><?php echo $error; ?></div>
            <?php } ?>
            <div class="imgfor">
                <!-- array de visualizacion de las imagenes -->
                <?php foreach ($images as $key => $img) { ?>
                <div class="imgbox">
                    <div>
                    <!-- funcion y boton eliminar --> 
                    <a href="javascript:" onclick="changepic('<?php echo base_url('galeriaingresado') . $dir['original'] . $img['original']; ?>', 'thumb_<?php echo $key; ?>');">
                        <img class="thumb" name="thumb" id="thumb_<?php echo $key; ?>" src="<?php echo base_url() . $dir['thumb'] . $img['thumb']; ?>"/>
                    </a>
                </div>
                <div class="dadel">
                    <a class="adel" href="<?php echo site_url('image/delete/' . $img['original']); ?>">
                        Eliminar
                    </a>
                </div>
            </div>
            <?php } ?>
    </div>
    <div class="bottom">
        <?php echo $total; ?> Imagen(es)
    </div>
</div>