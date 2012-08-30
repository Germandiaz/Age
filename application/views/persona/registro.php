<?php
    $atributos = array('id' => 'Registro');
    echo form_open('persona/verificar_loguin', $atributos);
    $usuario = array('name' => 'usuario','id' => 'usuario','value' => set_value('nombreUsuario'));
    $mail = array('name' => 'email','id' => 'email','value' => set_value('email'));
    $password = array('name' => 'contrasena','id' => 'contrasena','value' => '');
    $con_password = array('name' => 'con_contrasena','id' => 'con_contrasena','value' => '');
    $submit = array('name' => 'enviar','id' => 'enviar','value' => 'Registrarse');
?>
<div>
    <div id="formulario_registro">
        <div id="usuario">
            <?php
                echo form_label('usuario:');
                echo form_input($usuario);
            ?>
            <span>
                <?= form_error('usuario'); ?>
            </span>
        </div>
        <div>
            <?php
                echo form_label('Email:');
                echo form_input($mail);
            ?>
            <span>
                <?= form_error('usuario'); ?>
            </span>
        </div> 
        <div>
            <?php
                echo form_label('Contraseña:');
                echo form_password($password);
            ?>
            <span>
                <?= form_error('password'); ?>
            </span>
        </div>
        <div>
            <?php
                echo form_label('Confirmar Contraseña:');
                echo form_password($con_password);
            ?>
            <span>
                <?= form_error('con_password'); ?>
            </span> 
        </div>
        <div id="boton_submit">
            <?php
                echo form_submit($submit);
            ?>
        </div>
    <div>
        <?= anchor('persona/loguin', 'Loguin') ?>
    </div>
    <div>
        <?= anchor('persona/recuperar_contrasena', 'Recuperar Contraseña') ?>
    </div>
</div>
