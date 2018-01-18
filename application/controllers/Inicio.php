<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function index()
	{
		$this->load->view('v_index');
	}

	function enviarEmail() {
	  $data['error'] = EXIT_ERROR;
      $data['msj']   = null;
      try { 
      	$nombre = _post('nombres');
      	$email = _post('email');
      	$telefono = _post('telefono');
      	$mensaje = _post('mensaje');
      	$this->sendMailGmail($nombre, $email, $telefono, $mensaje);
      	$data['error'] = EXIT_SUCCESS;
      }catch (Exception $e){
      }
      return json_encode(array_map('utf8_encode', $data));
	}

	function sendMailGmail($nombre, $email, $telefono, $mensaje) {
      $data['error'] = EXIT_ERROR;
      $data['msj']   = null;
      try {  
        //cargamos la libreria email de ci
       $this->load->library("email");
       //configuracion para gmail
       $configGmail = array(
                            'protocol'  => 'smtp',
                            'smtp_host' => 'ssl://smtp.gmail.com',
                            'smtp_port' => 465,
                            'smtp_user' => 'user@taxirosenverg.com',
                            'smtp_pass' => 'ZRNX3SwQkWJH',
                            'mailtype'  => 'html',
                            'charset'   => 'utf-8',
                            'newline'   => "\r\n"
                          );    
       $poliza = null;
       //cargamos la configuración para enviar con gmail
       $this->email->initialize($configGmail);
       $this->email->from('user@taxirosenverg.com');
       $this->email->to($email);
       $this->email->subject('Bienvenido/a a Transportes Ronsenverg');
       $texto = '<body>
				<h2 style="text-align: center;color: #0152aa;">Estimado Colaborador:</h2>

				<p style="text-align: center;color: black;">Es un gusto saludarlo e informarle que el siguiente cliente ha solicitado un vehículo. Por favor cont&aacute;ctelo a la brevedad y realice la reserva respectiva.</p>

				<p style="margin-left: 30px;color: black;">Agradecemos de antemano su colaboraci&oacute;n.</p>
				 
				<h3 style="margin-left: 30px;color: #0152aa;">Datos del cliente:</h3>
				<p style="margin-left: 30px;color: black;">
				Nombres: '.$nombre.'</br>
				Tel&eacute;fono: '.$telefono.'</br>
				Correo electr&oacute;nico: '.$email.'</br>
				Mensaje: '.$mensaje.'</p>
			</body>
			';
       $this->email->message($texto);
       $this->email->send();
        $data['error'] = EXIT_SUCCESS;
      }catch (Exception $e){
      }
      return json_encode(array_map('utf8_encode', $data));
     }
}