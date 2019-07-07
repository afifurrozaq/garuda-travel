<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_order_model');
	} 
	
	public function index()
	{

		$this->load->view('header');
		$this->load->view('booking');
		$this->load->view('footer');
    }
    
    function add()
    {   
        $this->load->library('form_validation');
		$this->form_validation->set_rules('order_type','Order Type','required');
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('alamat','Alamat','required');
		$this->form_validation->set_rules('no_telp','No Telp','required');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('keterangan','Keterangan','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'order_type' => $this->input->post('order_type'),
				'nama' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'no_telp' => $this->input->post('no_telp'),
				'email' => $this->input->post('email'),
				'keterangan' => $this->input->post('keterangan'),
            );
            
            $tbl_order_id = $this->Tbl_order_model->add_tbl_order($params);
            redirect('booking');
        }
    }
}
