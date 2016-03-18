<?php 
class Services_model  extends CI_Model{
		
	/**
	 * @return void
	 **/
	public function __construct(){
		parent::__construct();
		//$this->load->database();
	}
	
	public function advance_booking(){
		
		 $adfullName=$this->input->post("abFullName");
		 $abphone=$this->input->post("abphone");
		 $abemailID=$this->input->post("abemailID");
		 $abCity=$this->input->post("abCity");
		 $abMaker=$this->input->post("abMaker");
		 $abModel=$this->input->post("abModel");
		 $abVariant=$this->input->post("abVariant");
		 $abTermsConditions=$this->input->post("abTermsConditions");
		$xml = "<ROOT>
				<HEADER>					
					<ADVFULLNAME>".$adfullName."</ADVFULLNAME>
					<ADVPHONE>".$abphone."</ADVPHONE>
					<ADVEMAILID>".$abemailID."</ADVEMAILID>
					<ADVCITY>".$abCity."</ADVCITY>
					<ADVMAKER>".$abMaker."</ADVMAKER>
					<ADVMODEL>".$abModel."</ADVMODEL>
					<ADVVARIANT>".$abVariant."</ADVVARIANT>
					<ADVTC>".$abTermsConditions."</ADVTC>
					<STATUS>OPEN</STATUS>					
				</HEADER>
			</ROOT>";		
		$user_address = $this->db->query("call usp_insUpdAdvanceBookingDetail('INSERT','$xml',@vStatus)");
		$query=$this->db->query("SELECT @vStatus as status")->row();
			//mysqli_next_result($this->db->conn_id);	
			//return $query->status;		
			if ($query == "Inserted Successfully" ){
				return "Success";
			}else{
				return "Faild";
			}
	}

}

?>