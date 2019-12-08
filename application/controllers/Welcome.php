<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Tbl_article_model');
	}

	public function index()
	{
		$params['limit'] = RECORDS_PER_PAGE; 
		$params['jenis'] ="serba_serbi";
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('tbl_article/index?');
        $config['total_rows'] = $this->Tbl_article_model->get_all_tbl_article_count();
        $this->pagination->initialize($config);

        $data['tbl_article'] = $this->Tbl_article_model->get_all_tbl_article($params);
		$this->load->view('home', $data);
	}



	
}
