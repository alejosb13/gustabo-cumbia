<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['interna'] = 'welcome/interna';

$route['nosotros'] = 'welcome/nosotros';

$route['sobre-mi'] = 'welcome/about_me';
$route['about-me'] = 'welcome/sobre_mi';

$route['contacto'] = 'welcome/contacto';
/* $route['noticias'] = 'welcome/contacto';
$route['social-media'] = 'welcome/contacto';
*/

$route['noticias/listado'] = 'welcome/list_noticias';

$route['noticias/interna'] = 'welcome/interna_noticias';

$route['enviar'] = 'welcome/enviar';
$route['discografia'] = 'welcome/discografia';
$route['musica'] = 'welcome/musica';
$route['galeria'] = 'welcome/galeria';
