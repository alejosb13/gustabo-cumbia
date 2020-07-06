<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/* test  */
$route['interna'] = 'welcome/interna';
$route['contacto'] = 'welcome/contacto';
$route['noticias/listado'] = 'welcome/list_noticias';
$route['noticias/interna'] = 'welcome/interna_noticias';

/* ESP */
$route['sobre-mi'] 		= 'welcome/sobre_mi';
$route['nosotros'] 		= 'welcome/nosotros';
$route['enviar'] 		= 'welcome/enviar';
$route['discografia'] 	= 'welcome/discografia';
$route['musica'] 		= 'welcome/musica';
$route['galeria'] 		= 'welcome/galeria';

/* ENG */
$route['about-me'] = 'welcome_eng/about_me';
