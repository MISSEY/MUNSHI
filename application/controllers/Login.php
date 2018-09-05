<?php
class Login extends MY_Controller{
	public function index(){
		if($this->session->userdata('user_id')){
			return redirect('hospital/hos_dash');}
	}
	
	public function hosp_login(){
		//$this->load->library('form_validation');
		$username=$this->input->post('hosp_id');
		$password=$this->input->post('hosp_pass'); 
		$this->load->model('loginmodel');
		$login_id = $this->loginmodel->login_valid($username,$password);
		if($login_id){
		
			$this->session->set_userdata('user_id',$login_id);
			return redirect('Hospital/hos_dash');
			
		}
		else{
			$this->session->set_flashdata('login_failed','invalid username or password');
			return redirect('users');
		}
	}
	
	public function logout(){
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('hospname');
		return redirect('Users');
	}
	
}