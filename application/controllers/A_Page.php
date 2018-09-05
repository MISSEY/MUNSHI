<?php
class A_page extends MY_Controller{
	function Patient_reg(){
		//$this->load->helper('html');
		$this->load->view('Admin/Patient_reg');
	}
	function Patient_hist(){
		
		$this->load->view('Admin/Patient_hist');
	}
	function patient_Update(){
		$this->load->view('Admin/patient_treat');
	}
	function patient_refer(){
		$this->load->view('Admin/refer');
	}
	function gen_bill(){
		$this->load->view('Admin/bill');
	}
	function patient_foreign(){
		$this->load->view('Admin/foreign');
	}
	
}