<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rent_car extends CI_Controller {

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
        $this->load->model('Tbl_car_model');
	} 
	
	public function index()
	{
		$params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('tbl_car/index?');
        $config['total_rows'] = $this->Tbl_car_model->get_all_tbl_car_count();
        $this->pagination->initialize($config);

        $data['tbl_car'] = $this->Tbl_car_model->get_all_tbl_car($params);
		$this->load->view('header');
		$this->load->view('rent_car',$data);
		$this->load->view('footer');
	}
}
