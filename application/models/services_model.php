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
					<ACTIONTYPE>INSERT</ACTIONTYPE>
					<ADVFULLNAME>".$adfullName."</ADVFULLNAME>
					<ADVPHONE>".$abphone."</ADVPHONE>
					<ADVEMAILID>".$abemailID."</ADVEMAILID>
					<ADVCITY>".$abCity."</ADVCITY>
					<ADVMAKER>".$abMaker."</ADVMAKER>
					<ADVMODEL>".$abModel."</ADVMODEL>
					<ADVVARIANT>".$abVariant."</ADVVARIANT>
					<ADVTC>".$abTermsConditions."</ADVTC>				
				</HEADER>
			</ROOT>";		 
	}

}

?>