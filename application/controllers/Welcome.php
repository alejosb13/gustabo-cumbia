<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}
	

	public function index()
	{
		$data = array();
		$data["section"] = "Inicio";
		$data["css"] = array(
			base_url("lib/css/home.css")
		);
 
		$data["js"] = array(
			base_url("lib/js/home.js")
		); 

		$this->load->view('home_view',$data);
	}

	public function interna()
	{
		$this->load->view('interna_view');
	}

	public function nosotros()
	{
		$this->load->view('nosotros_view');
	}

	public function sobre_mi()
	{
		$data = array();
		$data["section"] = "Sobre mi";
		$data["css"] = array(
			base_url("lib/css/about.css")
		);

		$this->load->view('about_view',$data);
	}

	public function contacto()
	{
		$data = array();
		$data["css"] = array(
			base_url("lib/css/contacto.css")
		);
 
		$data["js"] = array(
			base_url("lib/js/contacto.js")
		); 

		$this->load->view('contacto_view',$data);
	}

	public function list_noticias()
	{
		$data = array();
		$data["css"] = array(
			base_url("lib/css/listado.css")
		);
 
		$data["js"] = array(
			base_url("lib/js/listado.js")
		); 

		$this->load->view('listado_view',$data);
	}

	public function interna_noticias()
	{
		$data = array();
		$data["css"] = array(
			base_url("lib/css/interna.css")
		);

		$this->load->view('interna_view',$data);
	}

	public function discografia()
	{
		$data = array();
		$data["section"] = "Discografia";
		$data["css"] = array(
			base_url("lib/css/discografia.css")
		);
		$data["js"] = array(
			base_url("lib/js/discografia.js")
		);

		$this->load->view('discografia_view',$data);
	}

	public function musica()
	{
		$data = array();
		$data["section"] = "Musica";
		$data["css"] = array(
			base_url("lib/css/musica.css")
		);


		$this->load->view('musica_view',$data);
	}

	public function gale(){
		$file_data = pathinfo("lib/audio/que-vuelva.mpeg");
		
		echo "<pre>";
		print_r ($file_data);
		echo "</pre>";
		
	}
	public function galeria()
	{
		$data = array();
		$data["section"] = "Galeria";
		$data["css"] = array(
			base_url("vendor/fancybox/jquery.fancybox.min.css"),
			base_url("lib/css/galeria.css")
		);
 
		$data["js"] = array(
			base_url("vendor/fancybox/jquery.fancybox.min.js")
		); 

		$data["siento"]			 = $this->album_data_direct_name("lib/images/siento/",scandir("lib/images/siento/"));
		$data["radio"]			 = $this->album_data_direct_name("lib/images/radio/",scandir("lib/images/radio/"));
		$data["television"]	 	 = $this->album_data_direct_name("lib/images/television/",scandir("lib/images/television/"));
		$data["varias"]	 		 = $this->album_data_direct_name("lib/images/varias/",scandir("lib/images/varias/"));
		$data["algunas_foticos"] = $this->album_data_direct_name("lib/images/algunas_foticos/",scandir("lib/images/algunas_foticos/"),FALSE);
		$data["videos_varios"] 	= $this->album_data_direct_name("lib/videos/varios/",scandir("lib/videos/varios/"));

		$this->load->view('galeria_view',$data);
	}

	private function album_data_direct_name($directorio,$fichero,$caption = true){
		$albun = array();
		foreach ($fichero as $key => $value) {
			if ('.' !== $value && '..' !== $value){
				$file_data = pathinfo($directorio.$value);

				$result = array(
							"src" => base_url($directorio.$value),
							"opts" => array(
									"caption" => ($caption) ? $file_data["filename"] : "",
									"thumb"   =>  base_url($directorio.$value)
								)
							);
				array_push($albun,$result);
			}
		}

		return $albun;
	}

	public function enviar(){

		 $this->load->library('email');
		  
		 /*
		  * Configuramos los parámetros para enviar el email,
		  * las siguientes configuraciones es recomendable
		  * hacerlas en el fichero email.php dentro del directorio config,
		  * en este caso para hacer un ejemplo rápido lo hacemos
		  * en el propio controlador
		  */
		  
		 //Indicamos el protocolo a utilizar
		  $config['protocol'] = 'smtp';
		   
		 //El servidor de correo que utilizaremos
		  $config["smtp_host"] = 'smtp.gmail.com';
		   
		 //Nuestro usuario
		  $config["smtp_user"] = 'alejosb13@gmail.com';
		   
		 //Nuestra contraseña
		  $config["smtp_pass"] = 'alejad16';   
		   
		 //El puerto que utilizará el servidor smtp
		  $config["smtp_port"] = '587';
		  
		 //El juego de caracteres a utilizar
		  $config['charset'] = 'utf-8';
   
		 //Permitimos que se puedan cortar palabras
		  $config['wordwrap'] = TRUE;
		   
		 //El email debe ser valido 
		 $config['validate'] = true;
		 
		  
		//Establecemos esta configuración
		  $this->email->initialize($config);
   
		//Ponemos la dirección de correo que enviará el email y un nombre
		  $this->email->from('alejosb13@gmail.com', ' ALEJANDRO SANCHEZ');
		   
		/*
		 * Ponemos el o los destinatarios para los que va el email
		 * en este caso al ser un formulario de contacto te lo enviarás a ti
		 * mismo
		 */
		  $this->email->to('alejandro.sanchez@xyclon.com', 'Víctor Robles');
		   
		//Definimos el asunto del mensaje
		  $this->email->subject($this->input->post("asunto"));
		   
		//Definimos el mensaje a enviar
		  /* $this->email->message( 
				  "Email: ".$this->input->post("email").
				  " Mensaje: ".$this->input->post("mensaje")
				  ); */

				  $this->email->message("Alejnalnubauin");
		   
		  //Enviamos el email y si se produce bien o mal que avise con una flasdata
		  if($this->email->send()){
			  /* $this->session->set_flashdata('envio', 'Email enviado correctamente'); */
			  echo 1;
		  }else{
			  echo 2;
			  /* $this->session->set_flashdata('envio', 'No se a enviado el email'); */
		  }
		  echo $this->email->print_debugger(array('headers'));
			/* redirect(base_url("contacto")); */
	 }   
  
}
