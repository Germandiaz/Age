<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?php echo $titulo ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta name="description" content="Administración Gerontologica">
    	<meta name="author" content="@jessecogollo">
    	<!-- Hoja de estilos para el autocompletar y calendarios, esto aplica para todo elemento que se utilice en el DOM-->
    	<link rel="stylesheet" href="<?php echo base_url(); ?>css/jquery-ui-1.8.17.custom.css" type="text/css" media="screen" />
    	<!-- Librerias necesarias de cargar en el header para la implementación del autocompletar -->
    	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-ui-1.8.17.custom.min.js"></script>
        <!-- esta librería se debe cargar en este lugar ya que en el pie de página genera conflicto -->
        <script type="text/javascript" src="<?php echo base_url(); ?>js/script.js"></script>
    </head>
    <body>
