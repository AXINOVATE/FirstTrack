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
					<STATUS>Opened</STATUS>					
				</HEADER>
			</ROOT>";				
		$query = $this->db->query("call usp_insUpdAdvanceBookingDetail('INSERT','$xml',@vStatus)");
		$query=$this->db->query("SELECT @vStatus as status")->row();		
			if ($query = "Successfully" ){
				
				//var_dump($content)	;exit();	
				$data['dealerName'] = $adfullName;
				$data['message']='We would like to thank you for placing your request for Advance Booking.  One of our customer care member would coordinate in fulfilling the request.';
				$usermessage = $this->load->view('admin/email_notification',$data,true);			  
				//var_dump($content)	;exit();	
				$this->send_email('sales@nayagaadi.com',$abemailID,'','Advance Booking Request ',$usermessage);
				$adminmessage=''.'<br/><br/>';
				$adminmessage.='<h3>Advance Booking Request</h3>';
		        $adminmessage.='From : '.$abemailID.'<br/><br/>';
		        $adminmessage.='Phone : '.$abphone.'<br/><br/>';
		        $adminmessage.='Full Name : '.$adfullName.'<br/><br/>';
				
				$this->send_email($abemailID,'smishra1000@rediffmail.com','','Advance Booking Request',$adminmessage);
				
				return "Success";
			}else{
				return "Failed";
			}
	}
		public function send_email($from, $to, $cc, $subject, $message){
				$this->load->library('Email');
				$this->email->from($from);
				$this->email->to($to);
				$this->email->cc($cc);
				$this->email->subject($subject);
				$this->email->message($message);
				$this->email->send();
				//echo $this->email->print_debugger();
				return 1;
		}

	public function Request_for_TestDrive(){		
		 $RTD_Full_Name=$this->input->post("RTD_Full_Name");
		 $RTD_Phone=$this->input->post("RTD_Phone");
		 $RTD_Email_id=$this->input->post("RTD_Email_id");
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
				<RTDFULLNAME>".$RTD_Full_Name."</RTDFULLNAME>
				<RTDPHONE>".$RTD_Phone."</RTDPHONE>
				<RTDEMAILID>".$RTD_Email_id."</RTDEMAILID>
				<RTDPREFERREDDATE>".$RTD_Pre_date."</RTDPREFERREDDATE>
				<RTDPREFERREDTIME>".$RTD_Pre_Time."</RTDPREFERREDTIME>
				<RTDCITY>".$RTD_City."</RTDCITY>
				<RTDCATEGORY>".$RTD_Category."</RTDCATEGORY>
				<RTDMAKER>".$RTD_Maker."</RTDMAKER>
				<RTDMODEL>".$RTD_Model."</RTDMODEL>
				<RTDVARIANT>".$RTD_Variant."</RTDVARIANT>
				<RTDDEALERNAME>".$RTD_Dealer_Name."</RTDDEALERNAME>
				<RTDDEALERLOCATION>".$RTD_Dealer_Location."</RTDDEALERLOCATION>
				<RTDAGREE>".$RTD_agree."</RTDAGREE>
				<STATUS>Opened</STATUS>					
			</HEADER>
			</ROOT>";			
		$query = $this->db->query("call usp_insUpdRequestTestDrive('INSERT','$xml',@vStatus)");
		$query=$this->db->query("SELECT @vStatus as status")->row();
		//mysqli_next_result($this->db->conn_id);	
		//$query1= $query[0]['status'];
		//var_dump($query);exit();
			if ($query = "Successfully" ){
				$data['dealerName'] = $RTD_Full_Name;
				$data['message']='We would like to thank you for placing a request for Test Drive.  One of our customer support member would coordinate in fulfilling the request.';
				$usermessage = $this->load->view('admin/email_notification',$data,true);			  
				//var_dump($content)	;exit();	
				$this->send_email('sales@nayagaadi.com',$RTD_Email_id,'','Test Ride Request ',$usermessage);
				$adminmessage=''.'<br/><br/>';
				$adminmessage.='<h3>Test Ride Request</h3>';
		        $adminmessage.='From : '.$RTD_Email_id.'<br/><br/>';
		        $adminmessage.='Phone : '.$RTD_Phone.'<br/><br/>';
		        $adminmessage.='Full Name : '.$RTD_Full_Name.'<br/><br/>';
				$this->send_email($RTD_Email_id,'smishra1000@rediffmail.com','','Test Ride Request',$adminmessage);
				
				return "Success";
			}else{
				return "Failed";
			}
	}
	
}

?>