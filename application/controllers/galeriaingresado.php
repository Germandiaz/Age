<?php

if (!defined('BASEPATH'))
    exit('Acceso denegado!!!');
/*
 * Creado el 27/11/2011
 * Actualizado el 27/11/2011
 * Por: Jesse Javier Cogollo A.
 */

class galeriaingresado extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->_var_session();
    }

    function index() {
        $data['titulo'] = 'Galeria';
        $data['main_contenido'] = 'galeriaingresado';
        $this->load->view('includes/templateingresado', $data);
    }

    function _var_session() {
        $logueado = $this->session->userdata('esta_logueado');
        if ($logueado != TRUE) {
            redirect('inicio');
        }
    }

    function upload()
    {
        $c_upload['upload_path']    = $this->data['dir']['original'];
        $c_upload['allowed_types']  = 'gif|jpg|png|jpeg|x-png';
        $c_upload['max_size']       = '500';
		$c_upload['max_width']      = '1600';
		$c_upload['max_height']     = '1200';
        $c_upload['remove_spaces']  = TRUE;

        $this->load->library('upload', $c_upload);
        
        if ($this->upload->do_upload()) {
            
            $img = $this->upload->data();
            
            // create thumbnail
            $new_image = $this->data['dir']['thumb'].'thumb_'.$img['file_name'];
            
            $c_img_lib = array(
                'image_library'     => 'gd2',
                'source_image'      => $img['full_path'],
                'maintain_ratio'    => TRUE,
                'width'             => 100,
                'height'            => 100,
                'new_image'         => $new_image
            );
            
            $this->load->library('image_lib', $c_img_lib);
            $this->image_lib->resize();
        } else {
            $this->data['error'] = $this->upload->display_errors();
        }
    }

    public function delete($ori_img)
    {
        unlink($this->data['dir']['original'].$ori_img);
        unlink($this->data['dir']['thumb'].'thumb_'.$ori_img);
        redirect('/');
    }

}

?>