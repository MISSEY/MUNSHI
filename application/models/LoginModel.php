<?php
class Loginmodel extends MY_Model{
	public function login_valid($username,$password){
		$q=$this->db->where(['hosp_id'=>$username,'hosp_pass'=>$password])
					->get('hospital');
		if($q->num_rows()){
			
			return $q->row()->hosp_id; 	
			
		}
		else{
			return FALSE;
		}
	}
}