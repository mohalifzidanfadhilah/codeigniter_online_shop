<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller{

    public function fantasy()
    {
        $data['fantasy'] = $this->model_kategori->data_fantasy()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('fantasy',$data);
        $this->load->view('templates/footer');
    }
    public function horror()
    {
        $data['horror'] = $this->model_kategori->data_horror()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('horror',$data);
        $this->load->view('templates/footer');
    }
    public function romance()
    {
        $data['romance'] = $this->model_kategori->data_romance()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('romance',$data);
        $this->load->view('templates/footer');
    }
    public function action()
    {
        $data['action'] = $this->model_kategori->data_action()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('action',$data);
        $this->load->view('templates/footer');
    }
    public function mystery()
    {
        $data['mystery'] = $this->model_kategori->data_mystery()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('mystery',$data);
        $this->load->view('templates/footer');
    }

}