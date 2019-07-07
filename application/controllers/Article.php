<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_article_model');
	} 
	
	public function index()
	{
		$params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('tbl_article/index?');
        $config['total_rows'] = $this->Tbl_article_model->get_all_tbl_article_count();
        $this->pagination->initialize($config);

        $data['tbl_article'] = $this->Tbl_article_model->get_all_tbl_article($params);
		$this->load->view('header');
		$this->load->view('article',$data);
		$this->load->view('footer');
	}

	public function article_jenis($jenis)
	{
		$params['limit'] = RECORDS_PER_PAGE; 
		
		$params['jenis'] = $jenis; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('tbl_article/index?');
        $config['total_rows'] = $this->Tbl_article_model->get_all_tbl_article_count();
        $this->pagination->initialize($config);

        $data['tbl_article'] = $this->Tbl_article_model->get_all_tbl_article($params);
		$this->load->view('header');
		$this->load->view('article',$data);
		$this->load->view('footer');
	}

	public function detail($id)
	{
        $data['tbl_article'] = $this->Tbl_article_model->get_tbl_article($id);
		$this->load->view('header');
		$this->load->view('detail_article', $data);
		$this->load->view('footer');
	}
}
