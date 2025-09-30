<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Noticia_model extends CI_Model
{

    public $titulo;
    public $imagen_list;
    public $contenido;
    public $fecha_publicacion;
    public $fecha_creacion;
    public $status;

    public function getAllNews()
    {
        $query = $this->db
            ->where('status', 1)
            ->order_by('fecha_publicacion', 'DESC')
            ->get('noticias');

        return $query->result();
    }


    public function getNewById($id)
    {
        $this->db->from('noticias');
        $this->db->where('status', 1);
        $this->db->where('id', $id);
        $query = $this->db->get();

        return ($query->num_rows() > 0) ? $query->row() : null;
    }
}
