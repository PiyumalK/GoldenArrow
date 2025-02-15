<?php
class LoginController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('LoginModel');
		$this->load->helper('url');
		$this->load->library('session');
		//  $this->load->view('userLogin');
	}

	public function login()
	{
		$this->load->view('userLogin');
		if ($this->input->post('login')) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$val = $this->load->LoginModel->checkLogin($username, $password);

			if ($val == null) {
				
				$this->session->set_flashdata('login_fail', 'Invalid Username/Pasword');
				return redirect('/');
			} else {
				$currentUser = array(
					'userId' => $val['userId'],
					'userName' => $val['userName'],
					// 'password'=>$val['password'],
					'userRole' => $val['userRole'],
					'name' => $val['name'],
					'hometown' => $val['name'],
					'age' => $val['age']
				);

				$this->session->set_userdata($currentUser);

				if ($val['userRole'] == "player")
					return redirect('firstViewController/test');
				if ($val['userRole'] == "accountant")
					return redirect('accountant/dashboard');
				if ($val['userRole'] == "trainer")
					return redirect('trainerController');
				if ($val['userRole'] == "admin")
					return redirect('adminController');
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/','refresh');
		
	}
}
