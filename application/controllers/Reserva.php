<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reserva extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->helper("url");//BORRAR CACHÉ DE LA PÁGINA
        $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
        $this->output->set_header('Pragma: no-cache');
    }

	public function index()
	{
		$this->load->view('v_reserva');
	}

	function solicitarEstimacion() {
		    $data['error']  = EXIT_ERROR;
        $data['msj']   = null;
        try {
            $nombre_completo = $this->input->post('nombre_completo');
          	$celular    	   = $this->input->post('celular');
          	$fecha_llegada           = $this->input->post('fecha_llegada');
          	$hora  			     = $this->input->post('hora');
          	$vuelo           = $this->input->post('vuelo');
          	$servicio 	   	 = $this->input->post('servicio');
          	$personas 	   	 = $this->input->post('personas');
          	$aerolinea 	   	 = $this->input->post('aerolinea');
          	$correo 	   	 = $this->input->post('correo');
          	$origen 	   	 = $this->input->post('origen');
          	$destino 	   	 = $this->input->post('destino');

          	//GUARDAMOS EN SESIÓN LOS DATOS
          	$session = array('nombre_completo' => $nombre_completo,
                  					 'celular' 		     => $celular,
                  					 'fecha_llegada' 		       => $fecha_llegada,
                  					 'hora' 		       => $hora,
                  					 'vuelo' 	  	     => $vuelo,
                  					 'servicio' 	     => $servicio,
                  					 'personas' 	     => $personas,
                  					 'aerolinea' 	     => $aerolinea,
                  					 'correo' 	     => $correo,
                  					 'origen' 	     => $origen,
                  					 'destino' 	     => $destino);
          	$this->session->set_userdata($session);

          	//ENVIAR EMAIL AL CLIENTE Y A LA EMPRESA
            /*$this->sendGmailCliente($email, $datoInsert['Id']);
          	$this->sendGmailSap($email, $datoInsert['Id']);*/
          	$data['msj'] = $datoInsert['msj'];
			$data['error'] = $datoInsert['error'];
        } catch (Exception $e) {
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
	}

	function sendGmailSap($email, $id_usuario) {
      $data['error'] = EXIT_ERROR;
      $data['msj']   = null;
      try {  
       // cargamos la libreria email de ci
       $this->load->library("email");

       //configuracion para gmail
       $configGmail = array(
                            'protocol'  => 'smtp',
                            'smtp_host' => 'ssl://smtp.gmail.com',
                            'smtp_port' => 465,
                            'smtp_user' => 'miauto@prymera.pe',
                            'smtp_pass' => '8hUpuv6da_@v',
                            'mailtype'  => 'html',
                            'charset'   => 'utf-8',
                            'newline'   => "\r\n"
                          );    
       //cargamos la configuración para enviar con gmail
       $this->email->initialize($configGmail);
       $this->email->from('userauto@prymera.com');
       $this->email->to('jhonatanibericom@gmail.com');//EMAIL AL QUIÉN IRÁ DIRIGIDO
       $this->email->subject('Bienvenido/a a Transportes Rosenverg');

       //CONSTRUIMOS EL HTML
       $texto = '<!DOCTYPE html>
				 <html>
				 <head>
					<title>Transportes Rosenverg</title>
				 </head>
				 <body>
					<h1>Hola SAP</h1>
					<h1>El Cliente: '.$_SESSION['nombre_completo'].'<h1>
					<h1>Con Email: '.$_SESSION['correo'].'<h1>
					<h1>Con el teléfono: '.$_SESSION['celular'].'<h1>
					<h1>Con el N° de Vuelo: '.$_SESSION['vuelo'].'<h1>
					<h1>De la aerolínea: '.$_SESSION['aerolinea'].'<h1>
					<h1>Solicitó un vehículo<h1>
					<h1>Con el servicio:'.$_SESSION['servicio'].'<h1>
					<h1>Con nro personas:'.$_SESSION['personas'].'<h1>
					<h1>Con origen:'.$_SESSION['origen'].'<h1>
					<h1>Con destino:'.$_SESSION['destino'].'<h1>
				 </body>
				</html>';
        $this->email->message($texto);//AQUI SE INSERTA EL HTML
        $this->email->send();
        $data['error'] = EXIT_SUCCESS;
      }catch (Exception $e){
      	$data['msj'] = $e->getMessage();
      }
      return json_encode(array_map('utf8_encode', $data));
    }

}