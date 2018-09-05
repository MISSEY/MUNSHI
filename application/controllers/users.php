<?php
class Users extends MY_Controller{

	public function index(){
		if($this->session->userdata('user_id')){
			return redirect('hospital/hos_dash');}
	
		$this->load->view('public/index');
	
	}
	public function uid_search(){
		$uid=$this->input->post('name');
		$this->load->model('usersmodel');
		if($this->usersmodel->uidsearch($uid)){
		
		
			echo 'YES YOU ARE REGISTERED';
		}
		else{
			
				echo 'NO YOU ARE NOT REGISTERED';
			
			
		}
		
		
	}
	
	public function hosp_reg(){
		
		$post=$this->input->post();
		unset($post['con_password']);
		$this->load->model('Usersmodel');
		if($this->Usersmodel->Hosp_reg($post)){
			return redirect(users);
		}else{
			echo "not";
		}
	}
	
}