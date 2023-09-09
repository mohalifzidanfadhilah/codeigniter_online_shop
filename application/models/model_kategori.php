<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_kategori extends CI_Model{

    public function data_fantasy ()
    {
        return $this->db->get_where('tb_barang', array('kategori' => 'fantasy'));
    }
    public function data_horror ()
    {
        return $this->db->get_where('tb_barang', array('kategori' => 'horror'));
    }
    public function data_romance ()
    {
        return $this->db->get_where('tb_barang', array('kategori' => 'romance'));
    }
    public function data_action ()
    {
        return $this->db->get_where('tb_barang', array('kategori' => 'action'));
    }
    public function data_mystery ()
    {
        return $this->db->get_where('tb_barang', array('kategori' => 'mystery'));
    }

}