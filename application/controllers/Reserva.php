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
            $celular         = $this->input->post('celular');
            $fecha_llegada           = $this->input->post('fecha_llegada');
            $hora            = $this->input->post('hora');
            $vuelo           = $this->input->post('vuelo');
            $servicio        = $this->input->post('servicio');
            $personas        = $this->input->post('personas');
            $aerolinea       = $this->input->post('aerolinea');
            $correo        = $this->input->post('correo');
            $origen        = $this->input->post('origen');
            $destino       = $this->input->post('destino');
            $comentario    = $this->input->post('comentario');

            //ENVIAR EMAIL AL CLIENTE Y A LA EMPRESA
            $this->sendGmailSap($nombre_completo,$celular,$fecha_llegada,$hora,$vuelo,$servicio,
              $personas,$aerolinea,$correo,$origen,$destino,$comentario);
            $data['error'] = EXIT_SUCCESS;
        } catch (Exception $e) {
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
  }

  function sendGmailSap($nombre_completo,$celular,$fecha_llegada,$hora,$vuelo,$servicio,
              $personas,$aerolinea,$correo,$origen,$destino,$comentario) {
      $data['error'] = EXIT_ERROR;
      $data['msj']   = null;
      try {  
       // cargamos la libreria email de ci
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
       //cargamos la configuración para enviar con gmail
       $this->email->initialize($configGmail);
       $this->email->from('user@taxirosenverg.com');
       $this->email->to('taxirosenverg@gmail.com');//EMAIL AL QUIÉN IRÁ DIRIGIDO
       $this->email->subject('Bienvenido/a a Transportes Rosenverg');

       //CONSTRUIMOS EL HTML
       $texto = '<body>
  <h2 style="text-align: center;color: #0152aa;">Taxi Rosenverg:</h2>

  <p style="text-align: center;color: black;">Es un gusto saludarlo e informarle que el siguiente cliente ha solicitado un vehículo. Por favor cont&aacute;ctelo a la brevedad y realice la reserva respectiva.</p>

  <p style="margin-left: 30px;color: black;">Agradecemos de antemano su colaboraci&oacute;n.</p>
   
  <h3 style="margin-left: 30px;color: #0152aa;">Datos del cliente:</h3>
  <p style="margin-left: 30px;color: black;">
  Nombre Completo: '.$nombre_completo.'
  </p>
  <p style="margin-left: 30px;color: black;">
    Celular: '.$celular.'
  </p>
  <p style="margin-left: 30px;color: black;">
    Correo electr&oacute;nico: '.$correo.'
  </p>
  <p style="margin-left: 30px;color: black;">
    Comentario: '.$comentario.'
  </p>
   
   
  <h3 style="margin-left: 30px;color: #0152aa;">Datos de la reserva:</h3>
  <p style="margin-left: 30px;color: black;">
  Fecha de llegada: '.$fecha_llegada.'
  </p>
  <p style="margin-left: 30px;color: black;">
  Hora: '.$hora.'
  </p>
  <p style="margin-left: 30px;color: black;">
  Vuelo: '.$vuelo.'
  </p>
  <p style="margin-left: 30px;color: black;">
  Servicio: '.$servicio.'
  </p>
  <p style="margin-left: 30px;color: black;">
    Cant de personas: '.$personas.'
  </p>
  <p style="margin-left: 30px;color: black;">
    Punto de origen: '.$origen.'
  </p>
  <p style="margin-left: 30px;color: black;">
    Punto de destino: '.$destino.'
  </p>
  <p style="margin-left: 30px;color: black;">
    Aerolinea: '.$aerolinea.'
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