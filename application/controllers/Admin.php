<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {
    public function dashboard(){
        $this->load->view('dashboard');
    }

    public function addCollege(){
        $this->load->view('addCollege');
    }

    public function addStudent(){
        $this->load->view('addStudent');
    }

    public function createCollege(){
        $this->form_validation->set_rules('collegename', 'collegename', 'required');
		$this->form_validation->set_rules('branch', 'branch', 'required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		if($this->form_validation->run()){
			$data = $this->input->post();
			$this->load->model('queries');
			if ($this->queries->makeCollege($data)) {
				$this->session->set_flashdata('message', 'College Created Successfully');
			}
			else{
				$this->session->set_flashdata('message', 'Failed to create College');
			}
            return redirect("admin/addCollege");
		}
		else{
			$this->addCollege();
		}
    }

    public function addCoadmin(){
        $this->load->model('queries');
		$roles = $this->queries->getRoles();
		$this->load->view('addCoadmin', ['roles'=>$roles]);
    }

    public function createCoadmin(){
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
			$this->addCoadmin();
//			echo validation_errors();
		}
    }

    public function __construct(){
        parent::__construct();
        if( !$this->session->userdata("user_id") )
            return redirect("welcome/login");
    }
}
?>