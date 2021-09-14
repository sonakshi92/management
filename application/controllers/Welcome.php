<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function index()
	{
		$this->load->model('queries');
		$chkAdminExist = $this->queries->chkAdminExist();
	//	echo $chkAdminExist; exit;
		$this->load->view('home', ['chkAdminExist'=>$chkAdminExist]);
	}

	public function adminRegister(){
		$this->load->model('queries');
		$roles = $this->queries->getRoles();
	//	print_r($roles);
		$this->load->view('register', ['roles'=>$roles]);
	}

	public function adminSignup(){
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('role_id', 'Role', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('confpwd', 'Confirm Password', 'required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		if($this->form_validation->run()){
			$data = $this->input->post();
			//echo 'Validation pass';
			$data['password'] = sha1($this->input->post('password'));
			$data['confpwd'] = sha1($this->input->post('confpwd'));
			//print_r($data);
			$this->load->model('queries');
			if($this->queries->registerAdmin($data)){
				$this->session->set_flashdata('message', 'Admin Registered successfully');
				return redirect("welcome/adminRegister");
			} else{
				$this->session->set_flashdata('message', 'Admin Registered Failed');
				return redirect("welcome/adminRegister");
			}
		} else{
			$this->adminRegister();
//			echo validation_errors();
		}
	}

	public function login(){
		if( $this->session->userdata("user_id") )
			return redirect("admin/dashboard");
		$this->load->view('login');
	}

	public function signin(){
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		if($this->form_validation->run()){
			$email = $this->input->post('email');
			$password = sha1($this->input->post('password'));
			$this->load->model('queries');
			$userExist = $this->queries->adminExist($email, $password);
			print_r($userExist);
			if ($userExist) {
				$sessionData = [
					'user_id' => $userExist->user_id,
					'username' => $userExist->username,
					'email' => $userExist->email,
					'role_id' => $userExist->role_id,
				];
				$this->session->set_userdata($sessionData);
				return redirect("admin/dashboard");
			}
			else{
				$this->session->set_flashdata('message', 'Email or Password is incorrect');
				return redirect("welcome/login");
			}
		}
		else{
			$this->login();
		}
	}

	public function logout(){
		$this->session->unset_userdata("user_id");
		return redirect("welcome/login");

	}


}
