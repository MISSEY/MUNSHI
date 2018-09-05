<?php
class Doctor extends MY_Controller{
public function index(){
	$this->load->library('encrypt');
	$this->load->view('public/encryption');
}
}