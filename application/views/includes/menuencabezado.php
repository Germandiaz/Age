<?php
    echo form_error('txtusuario');
    echo form_error('txtcontrasena');
?>
<?php
    $atributos = array('id' => 'loguin_form', 'class' => 'loguin_form');//,'class'=>'btn'
    echo form_open('btningreso/verificar_acceso', $atributos);
    $usu = array('name' => 'txtusuario','id' => 'txtusuario','value' => set_value('txtusuario'),'class'=>'span2','placeholder'=>'Usuario');//
    $con = array('name' => 'txtcontrasena','id' => 'txtcontrasena','class'=>'span2','placeholder'=>'Contraseña');//placeholder="Email"
?>

<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">AGE - Administraci&#243;n Gerontologica</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
              <!--<input class="span2" type="text" placeholder="Email">
              <input class="span2" type="password" placeholder="Password">
              <button type="submit" class="btn">Sign in</button>
              <?php echo form_label('Usuario:'); ?>-->
                <?php
                    echo form_input($usu);
                    //echo form_error('txtusuario');
                ?>
                <!--<?php echo form_label('Contrase&#241;a:'); ?>-->
                <?php
                    echo form_password($con);
                    //echo form_error('txtcontrasena');
                    echo form_submit('submit', 'Iniciar Sesion');
                ?>
        </p>
            <ul class="nav">
              <li class="active"><a href="inicio.html">Inicio</a></li>
              <li><a href="galeria.html">Galeria</a></li>
              <li><a href="mision.html">Misi&#243;n</a></li>
              <li><a href="vision.html">Visi&#243;n</a></li>
              <li><a href="contactenos.html">Cont&#225;ctenos</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container">

      <h1>AGE</h1>
      <p>Administracion Gerontologica.</p><br>
        <?php echo form_close(); ?>
<div>
