<?php
class Hospital extends MY_Controller{
	

	public function hos_dash(){
		
		$s=$_SESSION['user_id'];
		
		$this->load->model('usersmodel');
		$hospname=$this->usersmodel->session_name($s);
		
		$this->load->view('Admin/hos_dash',['hospname'=>$hospname]);
		
	}
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('user_id')){
			return redirect('users');
		}
	}
	public function puid_search(){
		$uid=$this->input->post('uid');
		$this->load->model('usersmodel');
		if($this->usersmodel->uidsearch($uid)){
			echo 'yes';
		}
		else{
			echo 'no';
		}
		
		}
		public function Patient_reg(){
			
			$post=$this->input->post();
			$this->load->model('Usersmodel');
			if($this->Usersmodel->Patient_reg($post)){
				echo "inserted";
			}else{
				echo "not";
			
			}
			
		}
		public function Patient_hist(){
			$this->load->library('encrypt');
			$uid=$this->input->post('uid');
			$hosp_id=$this->input->post('hosp_id');
			$hosp_id=$this->encrypt->encode($hosp_id);
			
			
			$this->load->model('usersmodel');
			$querry=$this->usersmodel->patient_hist($uid,$hosp_id);
			//$result=$querry->result();
			
			//print_r($result);
			$this->load->view('admin/patient_history',['querry'=>$querry]);
			
		}
		public function Patient_Update(){
			$this->load->library('encrypt');
			$uid=$this->input->post('uid');
			$sr_no=$this->input->post('sr_no');
			$dt_of_cre=$this->input->post('dt_of_cre');
			$hosp_id=$this->input->post('hosp_id');
			$doc_id=$this->input->post('doc_id');
			$disease_id=$this->input->post('disease_id');
			$descp=$this->input->post('descp');
			$rep_link=$this->input->post('rep_link');
			
			$this->load->model('Usersmodel');
			
			
		if($this->Usersmodel->patient_update($uid,$sr_no,$dt_of_cre,$hosp_id,$doc_id,$disease_id,$descp,$rep_link)){
			echo 'yes';
		}else{
			//echo 'no';
		}
		}
		public function Foreign_nat_reg(){
				$post=$this->input->post();
			
				$this->load->model('Usersmodel');
				if($this->Usersmodel->foreign_nat_reg($post)){
					echo "inserted";
				}else{
					echo "not";
				}
			
				
		}
}
