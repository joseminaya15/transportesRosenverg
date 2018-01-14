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
            $comentario    = $this->input->post('comentario');

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
                  					 'destino' 	     => $destino,
                             'comentario'    => $comentario);
          	$this->session->set_userdata($session);

          	//ENVIAR EMAIL AL CLIENTE Y A LA EMPRESA
            $this->sendGmailCliente($email);
          	$this->sendGmailSap($email);
          	$data['msj'] = $datoInsert['msj'];
			$data['error'] = $datoInsert['error'];
        } catch (Exception $e) {
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
	}

	function sendGmailSap($email) {
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
       $this->email->to(_getSesion('correo'));//EMAIL AL QUIÉN IRÁ DIRIGIDO
       $this->email->subject('Bienvenido/a a Transportes Rosenverg');

       //CONSTRUIMOS EL HTML
       $texto = '<body>
  <h2 style="text-align: center;color: #0152aa;">Taxi Rosenverg:</h2>

  <p style="text-align: center;color: black;">Es un gusto saludarlo e informarle que el siguiente cliente ha solicitado un vehículo. Por favor cont&aacute;ctelo a la brevedad y realice la reserva respectiva.</p>

  <p style="margin-left: 30px;color: black;">Agradecemos de antemano su colaboraci&oacute;n.</p>
   
  <h3 style="margin-left: 30px;color: #0152aa;">Datos del cliente:</h3>
  <p style="margin-left: 30px;color: black;">
  Nombres: </br>
  Apellidos: '._getSesion('nombre_completo').'</br>
  Celular: '._getSesion('celular').'</br>
  Correo electr&oacute;nico: '._getSesion('correo').'</br>
  Comentario: '._getSesion('comentario').'</br></p>
   
   
  <h3 style="margin-left: 30px;color: #0152aa;">Datos de la reserva:</h3>
  <p style="margin-left: 30px;color: black;">
  Fecha de llegada: '._getSesion('fecha_llegada').'</br>
  Hora: '._getSesion('hora').'</br>
  Vuelo: '._getSesion('vuelo').'</br>
  Servicio: '._getSesion('servicio').'</br>
  Cant de personas: '._getSesion('personas').'</br>
  Punto de origen: '._getSesion('origen').'</br>
  Punto de destino: '._getSesion('destino').'</br>
  Aerolinea: '._getSesion('aerolinea').'
  </p>
</body>
';
        $this->email->message($texto);//AQUI SE INSERTA EL HTML
        $this->email->send();
        $data['error'] = EXIT_SUCCESS;
      }catch (Exception $e){
      	$data['msj'] = $e->getMessage();
      }
      return json_encode(array_map('utf8_encode', $data));
    }

}