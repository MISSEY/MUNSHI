<?php
class Page extends MY_Controller{
	
	public function index(){
		
		$s=base_url('page/index');
		echo $s;
		
	}
	
	public function aboutus(){
		$this->load->view('public/about-us');
	}
	public function contact_us(){
		$this->load->view('public/contactus');
	}
	public function contactd(){
		$post=$this->input->post();
		$this->load->model('usersmodel');
		$this->usersmodel->contact_us($post);
		return redirect('page/contact_us');
		
	}
	public function docsear(){
		$this->load->view('public/doctor_search');
	}
	public function hossear(){
		$this->load->view('public/hospi_search');
	}
}