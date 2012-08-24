<div>
    <ul>
        <li><a href="inicio.html" >Inicio</a></li>
        <li><a href="galeria.html">Galeria</a></li>
        <li><a href="mision.html">Misi&#243;n</a></li>
        <li><a href="vision.html">Visi&#243;n</a></li>
        <li><a href="contactenos.html">Cont&#225;ctenos</a></li>
            <?php 
	            $atributos = array('id' => 'loguin_form', 'class' => 'loguin_form');
	            echo form_open('btningreso/verificar_acceso', $atributos);
	            $usu = array('name' => 'txtusuario','id' => 'txtusuario','value' => set_value('txtusuario'));
	            $con = array('name' => 'txtcontrasena','id' => 'txtcontrasena');
            ?>
        <li><?php echo ' ',form_label('Usuario:'); ?></li>
        <li>
            <?php
            	echo "",form_input($usu);
            	echo form_error('txtusuario');
            ?>
        </li>
        <li><?php echo ' ',form_label('Contrase&#241;a:'); ?></li>
        <li>    
            <?php
            	echo " ",form_password($con);
            	echo form_error('txtcontrasena');
            	echo " ",form_submit('submit', 'Iniciar Sesion');
            ?>
            <?php echo form_close(); ?>
       </li>     
    </ul>
</div>

                    <div>
                        <h3 class="t">AGE</h3>
                    </div>
                        <div>
                            <p>Administracion Gerontologica</p>
                            <?php
					            echo form_error('txtusuario');
					            echo form_error('txtcontrasena');
					        ?>
                            <?php "menu de la izquierda sin acceder"; ?>
                            <div ></div>
