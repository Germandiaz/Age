<div>
    <div>
        <div class="formulario_loguin"> 
            <?php
            $atributos = array('id' => 'loguin_form', 'class' => 'form_loguin');
            echo form_open('usuarios/confirmar_Contrasena', $atributos);
            $data = array(
                'name' => 'username',
                'id' => 'username',
                'value' => set_value('username')
            );
            $data2 = array(
                'name' => 'password',
                'id' => 'password',
                'value' => ''
            );
            echo form_label('usuario');
            echo form_input($data);
            echo form_error('username');
            echo form_label('Contrase&#241;a');
            echo form_password($data2);
            echo form_error('password');
            echo form_submit('submit', 'Acceder');
            ?>
            <?php echo form_close(); ?>
        </div>
    </div >
</div>

