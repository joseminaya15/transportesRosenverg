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
                            'smtp_host' => 'mail.taxirosenverg.com',
                            'smtp_port' => 587,
                            'smtp_user' => 'user@taxirosenverg.com',
                            'smtp_pass' => 'ZRNX3SwQkWJH',
                            'mailtype'  => 'html',
                            'charset'   => 'utf-8',
                            'newline'   => "\r\n"
                          );    
       $poliza = null;
       //cargamos la configuraci贸n para enviar con gmail
       $this->email->initialize($configGmail);
       $this->email->from('user@taxirosenverg.com');
       $this->email->to($email);
       $this->email->subject('Bienvenido/a a Transportes Ronsenverg');
       $texto = '<body>
        <h2 style="text-align: center;color: #0152aa;">Estimado Colaborador:</h2>

        <p style="text-align: center;color: black;">Es un gusto saludarlo e informarle que el siguiente cliente ha solicitado un veh铆culo. Por favor cont&aacute;ctelo a la brevedad y realice la reserva respectiva.</p>

        <p style="margin-left: 30px;color: black;">Agradecemos de antemano su colaboraci&oacute;n.</p>
         
        <h3 style="margin-left: 30px;color: #0152aa;">Datos del cliente:</h3>
        <p style="margin-left: 30px;color: black;">
        Nombres: '.$nombre.'
        <p style="margin-left: 30px;color: black;">
        Tel&eacute;fono: '.$telefono.'
        </p>
        <p style="margin-left: 30px;color: black;">
        Correo electr&oacute;nico: '.$email.'
        </p>
        <p style="margin-left: 30px;color: black;">
        Mensaje: '.$mensaje.'
        </p>
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