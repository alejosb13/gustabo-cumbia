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
		$data["css"] = array(
			base_url("lib/css/about.css")
		);
 
	//	$data["js"] = array(
			/* base_url("vendor/nicescroll/jquery.nicescroll.iframehelper.min.js"), */
/* 			base_url("vendor/nicescroll/jquery.nicescroll.min.js"),
			base_url("lib/js/about.js") */
	//	);

		$this->load->view('about_view',$data);
	}

	public function about_me()
	{
		$data = array();
		$data["css"] = array(
			base_url("lib/css/about.css")
		);
 
		$data["js"] = array(
			base_url("lib/js/about.js")
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
		$data["css"] = array(
			base_url("lib/css/musica.css")
		);


		$this->load->view('musica_view',$data);
	}

	public function galeria()
	{
		$data = array();
		$data["css"] = array(
			base_url("vendor/fancybox/jquery.fancybox.min.css")
		);
 
		$data["js"] = array(
			base_url("vendor/fancybox/jquery.fancybox.min.js")
		); 

/* 		{
			src  : '<?php echo base_url("lib/images/profile/GUSTAVO_QUINTERO.jpg"); ?>',
			opts : {
				caption : 'First caption',
				thumb   : '<?php echo base_url("lib/images/profile/GUSTAVO_QUINTERO.jpg"); ?>'
			}
		},
		{
			src  : '<?php echo base_url("lib/images/profile/GUSTAVO_QUINTERO.jpg"); ?>',
			opts : {
				caption : 'Second caption',
				thumb   : '<?php echo base_url("lib/images/profile/2.jpg"); ?>'
			}
		} */

		$data["albun"] = array(
			array(
				"src" => base_url("lib/images/profile/GUSTAVO_QUINTERO.jpg"),
				"opts" => array(
					"caption" => 'First caption',
					"thumb"   =>  base_url("lib/images/profile/GUSTAVO_QUINTERO.jpg")
				)
			),
			array(
				"src" => base_url("lib/images/profile/1.jpg"),
				"opts" => array(
					"caption" => 'First caption',
					"thumb"   =>  base_url("lib/images/profile/GUSTAVO_QUINTERO.jpg")
				)
			),
		); 
		

		$this->load->view('galeria_view',$data);
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
