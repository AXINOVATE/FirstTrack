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
		$retVal['status']="Failed";
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
					<STATUS>Opened</STATUS>					
				</HEADER>
			</ROOT>";		
		$user_address = $this->db->query("call usp_insUpdAdvanceBookingDetail('INSERT','$xml',@vStatus)");
		$query=$this->db->query("SELECT @vStatus as status")->result_array();
		mysqli_next_result($this->db->conn_id);	
		$query1= $query[0]['status'];
			if ($query1 == "Inserted Successfully" ){
				$retVal['status']="Success";
				return $retVal;
			}else{
				return $retVal;
			}
	}

}
public function Request_for_TestDrive(){		
		 $rtd_Full_Name=$this->input->post("RTD_Full_Name");
		 $rtd_phone=$this->input->post("RTD_Phone");
		 $rtd_Email_id=$this->input->post("RTD_Email_id");
		 $RTD_Pre_date=$this->input->post("RTD_Pre_date");
		 $RTD_Pre_Time=$this->input->post("RTD_Pre_Time");
		 $RTD_City=$this->input->post("RTD_City");
		 $RTD_Category=$this->input->post("RTD_Category");
		 $RTD_Maker=$this->input->post("RTD_Maker");
		 $RTD_Model=$this->input->post("RTD_Model");
		 $RTD_Variant=$this->input->post("RTD_Variant");
		 $RTD_Dealer_Name=$this->input->post("RTD_Dealer_Name");
		 $RTD_Dealer_Location=$this->input->post("RTD_Dealer_Location");
		 $RTD_agree=$this->input->post("RTD_agree");
		$xml = "<ROOT>
				<HEADER>					
					<RTDFULLNAME>".$rtd_Full_Name."</RTDFULLNAME>
					<RTDPHONE>".$rtd_phone."</RTDPHONE>
					<RTDEMAILID>".$rtd_Email_id."</RTDEMAILID>
					<RTDPREFERREDDATE>".$RTD_Pre_date."</RTDPREFERREDDATE>
					<RTDPREFERREDTIME>".$RTD_Pre_Time."</RTDPREFERREDTIME>
					<RTDCITY>".$RTD_City."</RTDCITY>
					<RTDCATEGORY>".$RTD_Category."</RTDCATEGORY>
					<RTDMAKER>".$RTD_Maker."</RTDMAKER>
					<RTDMODEL>".$RTD_Model."</RTDMODEL>
					<RTDVARIANT>".$RTD_Variant."</RTDVARIANT>
					<RTDDEALERNAME>".$RTD_Dealer_Name."</RTDEALERNAME>
					<RTDDEALERLOCATION>".$RTD_Dealer_Location."</RTDDEALERLOCATION>
					<RTDAGREE>".$RTD_agree."</RTDAGREE>
					<STATUS>Opened</STATUS>					
				</HEADER>
			</ROOT>";		
		$user_address = $this->db->query("call usp_insUpdAdvanceBookingDetail('INSERT','$xml',@vStatus)");
		$query=$this->db->query("SELECT @vStatus as status")->result_array();
		mysqli_next_result($this->db->conn_id);	
		$query1= $query[0]['status'];
			if ($query1 == "Inserted Successfully" ){
				$retVal['status']="Success";
				return $retVal;
			}else{
				return $retVal;
			}
	}

}

?>