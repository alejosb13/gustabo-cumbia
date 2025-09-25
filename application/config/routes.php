<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'Welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/* test  */
$route['interna'] = 'welcome/interna';
$route['contacto'] = 'welcome/contacto';
$route['list_noticias'] = 'welcome/list_noticias';
$route['noticias/listado'] = 'welcome/list_noticias';
$route['noticias/interna'] = 'welcome/interna_noticias';
$route['noticias/interna/(:num)'] = 'welcome/interna_noticias/$1';

/* ESP */
$route['sobre-mi']         = 'Welcome/sobre_mi';
//$route['nosotros'] 		= 'Welcome/nosotros';
//$route['enviar'] 		= 'Welcome/enviar';
$route['discografia']     = 'Welcome/discografia';
$route['musica']         = 'Welcome/musica';
$route['galeria']         = 'Welcome/galeria';

$route['gale']         = 'Welcome/gale';

/* ENG */
$route['eng']                 = 'Ingles_Controller/index';
$route['eng/about-me']         = 'Ingles_Controller/about_me';
$route['eng/discography']     = 'Ingles_Controller/discografia';
$route['eng/music']         = 'Ingles_Controller/musica';
$route['eng/gallery']         = 'Ingles_Controller/galeria';
