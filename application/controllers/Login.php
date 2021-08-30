<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Login extends CI_Controller {



		 public function __construct()

	 	{
	 		parent::__construct();

	 		$this->load->model('Login_Model');
	 		$this->load->library('form_validation');
	 	}



	 	function home(){

            $this->load->view('login');
	 	}

	 	function doLogin(){		

	 		$log_data['email']=empty($this->input->post('email')) ? '' :$this->input->post('email');
	 		$log_data['password']=empty($this->input->post('password')) ? '' : $this->input->post('password');

			  $result = $this->Login_Model->doLogin($log_data);


			 if ($result != false) {

                $session_data['admin_login_id'] = $result[0]['id'];
                $session_data['email'] = $result[0]['email'];
				$session_data['status'] = $result[0]['status'];
				
                $this->session->set_userdata($session_data);

                    echo "1000";
                }else{

                	echo "1001";
                }
		}	

		function Logout(){

			$this->session->sess_destroy();
			redirect(base_url());
			
        }
	}
	?>