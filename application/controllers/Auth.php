<?php
class Auth extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_user_model');
    } 

    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('pass','Pass','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'username' => $this->input->post('username'),
				'pass' => md5($this->input->post('pass'))
            );
            
            $tbl_user_id = $this->Tbl_user_model->add_tbl_user($params);
            redirect('welcome');
        }
      
    }

    function login(){
        $data = array(
                        'username' => $this->input->post("username"),
                        'pass' => md5($this->input->post("pass"))
                      );
        $hasil = $this->Tbl_user_model->auth($data);
        if ($hasil->num_rows() == 1) {
          foreach ($hasil->result() as $sess) { 
            $_SESSION['id_user'] = $sess->id_user;
            $_SESSION['username'] = $sess->username;
          }
          redirect("welcome");
          
        }else{
          $this->session->set_flashdata('error','Username or password incorrect');
          echo "eror";
        }
  }

  function logout(){
    $this->session->sess_destroy();
    redirect('welcome');
}
    
}