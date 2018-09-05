<?php
class Usersmodel extends MY_Model{
	public function uidsearch($uid){
		$q=$this->db->where(['uid'=>$uid])
		->get('patient_info');
		if($q->num_rows()){
				
			return TRUE;
				
		}
		else{
			return FALSE;
		}
		
		
	}
	public function Hosp_reg($array){
		
				return($this->db->insert('hospital',$array));
	}
	public function Patient_reg($array){
		return $this->db->insert('Patient_info',$array);
	}
	public function Patient_hist($uid,$hosp_id){
		
		//$array = array('uid' => $uid, 'hosp_id' => $hosp_id);
		$q=$this->db->query("select * from patient_hist where uid=$uid");
			
		
		
			//$hosp_id=$this->encrypt->decode($hosp_id);
			//$rep_link=$this->encrypt->decode($r['rep_link']);
			//$doc_id=$this->encrypt->decode($q->doc_id);
			//$descp=$this->encrypt->decode($q->descp);
			//print($rep_link);
			//echo $doc_id;
			//echo $descp; 
			//exit();
		return $q->result();
		
	}
	public function patient_update($uid,$sr_no,$dt_of_cre,$hosp_id,$doc_id,$disease_id,$descp,$rep_link){
		$rep_link=$this->encrypt->encode($rep_link);
		$hosp_id=$this->encrypt->encode($hosp_id);
		$doc_id=$this->encrypt->encode($doc_id);
		$descp=$this->encrypt->encode($descp);
		//echo $sr_no;
		//$sr_no=$this->encrypt->decode($sr_no);
		//echo $sr_no;
		$this->db->set('uid', $uid);
		$this->db->set('sr_no', $sr_no);
		$this->db->set('dt_of_cre', $dt_of_cre);
		$this->db->set('hosp_id', $hosp_id);
		$this->db->set('doc_id', $doc_id);
		$this->db->set('disease_id', $disease_id);
		$this->db->set('descp', $descp);
		$this->db->set('rep_link', $rep_link);
		$this->db->insert('patient_hist');
		
		//return $this->db->insert('patient_hist',$array);
	}
	public function contact_us($post){
		$this->db->insert('contactus',$post);
	}
	public function session_name($user_id){
	
		$hosp_name = $this->db
						->select('hosp_name')
						->	where('hosp_id',$user_id)
						->get('hospital');
		
					return 	($hosp_name->result());
		
		//return $hosp_name;
	}
	public function foreign_nat_reg($post){
		 $this->db->insert('f_n_pattient_reg',$post);
		 echo "inserted";
	}
	
}