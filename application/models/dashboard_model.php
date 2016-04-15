<?php 
class Dashboard_model extends CI_Model{
		
	/**
	 * @return void
	 **/
	public function __construct(){
		parent::__construct();
		$this->load->model("home_model");
	}

	public function getCorporateDetailsRequest($vType,$CID=''){		
		$query = $this->db->query("CALL usp_getCorporateDealsRequest('".$vType."','".$CID."')");
		mysqli_next_result($this->db->conn_id);
		return $query->result_array();
	}
	public function getVehicleLoanRequest($vType,$VID=''){		
		$query = $this->db->query("CALL usp_getVehicleLoanRequest('".$vType."','".$VID."')");
		mysqli_next_result($this->db->conn_id);
		return $query->result_array();
	}
	public function getAdvanceBookingRequest($vType,$AbID=''){		
		$query = $this->db->query("CALL usp_getAdvanceBookingRequest('".$vType."','".$AbID."')");
		mysqli_next_result($this->db->conn_id);
		return $query->result_array();
	}
	public function getRoadAssistanceRequest($vType,$RaID=''){		
		$query = $this->db->query("CALL usp_getRoadAssistanceRequest('".$vType."','".$RaID."')");
		mysqli_next_result($this->db->conn_id);
		return $query->result_array();
	}
	public function getApplyForInsuranceRequest($vType,$AfIID=''){		
		$query = $this->db->query("CALL usp_getApplyForInsuranceRequest('".$vType."','".$AfIID."')");
		mysqli_next_result($this->db->conn_id);
		return $query->result_array();
	}
	public function getRoadTestRequest($vType,$GRTID=''){		
		$query = $this->db->query("CALL usp_getRoadTestRequest('".$vType."','".$GRTID."')");
		mysqli_next_result($this->db->conn_id);
		return $query->result_array();
	}
	public function getDropAQueryRequest($vType,$dID=''){		
		$query = $this->db->query("CALL usp_getDropAQuery('".$vType."','".$dID."')");
		mysqli_next_result($this->db->conn_id);
		return $query->result_array();
	}
	public function updateRequestReport(){		
		$vresult['status'] = "Failed";
		$xml ="<ROOT>
					<HEADER>";
		$vType = $this->input->post('vType');
		$requestNo = $this->input->post('requestNo');
		$respond = $this->input->post('respond');
		$status = $this->input->post('status');
		$UID = $this->input->post('UID');
		$userID = $this->session->userdata('userID');
		$page=$this->input->post("page");
		$xml .= "<ACTIONTYPE>".$vType."</ACTIONTYPE>
						<REQUESTNO>".$requestNo."</REQUESTNO>
						<RESPOND>".$respond."</RESPOND>
						<UID>".$UID."</UID>
						<USERID>".$userID."</USERID>
						<STATUS>".$status."</STATUS>
					</HEADER>
				</ROOT>";
		if($page=="VehicleLoan"){
			$myQuery="CALL usp_insUpdVehicleLoan('".$xml."',@vresult)";
		}elseif($page=="Corporate"){
			$myQuery="CALL usp_insUpdCorporateDeals('".$xml."',@vresult)";
		}elseif($page=="AdvanceBooking"){
			$myQuery="CALL usp_insUpdAdvanceBookingDetail('".$vType."','".$xml."',@vresult)";
		}elseif($page=="RASSISTANCE"){
			$myQuery="CALL usp_insUpdRoadAsistance('".$xml."',@vresult)";
		}elseif($page=="APInsurance"){
			$myQuery="CALL usp_insUpdApplyInsurance('".$xml."',@vresult)";
		}elseif($page=="RoadTest"){
			$myQuery="CALL usp_insUpdRequestTestDrive('".$vType."','".$xml."',@vresult)";
		}elseif($page=="DropAQuery"){
			$myQuery="CALL usp_insUpdDropAQuery('".$xml."',@vresult)";
		}elseif($page=="booking"){
			$myQuery="CALL usp_UpdateBookingRequest('".$xml."',@vresult)";
		}elseif($page=="creditPoints"){
			$myQuery="CALL usp_insUpdCreditPoints('".$xml."',@vresult)";
		}
		$rndS=$this->home_model->randStrGen();
		$query = $this->db->query($myQuery);
		$query1=$this->db->query("SELECT @vresult as ".$rndS)->result_array();
		//$this->send_email('elanthirayan.m@axinovate.com',$email,'','Request Ticket Rised','Your Vehicle Loan Ticket Raised <br> Ticket Number 123');
		mysqli_next_result($this->db->conn_id);	
		if ($query1[0][$rndS] == "Success"){
			$vresult['status'] = "Success";
			return $vresult;
		}else{
			return $vresult;
		}
	}
	public function getBookingRequest($vType,$bID=''){		
		$query = $this->db->query("CALL usp_getBookingList('".$vType."','".$bID."')");
		mysqli_next_result($this->db->conn_id);
		return $query->result_array();
	}
	public function getTrackOrderDetail($vType,$uID=''){		
		$query = $this->db->query("CALL usp_getTrackOrder('".$vType."','".$uID."')");
		mysqli_next_result($this->db->conn_id);
		return $query->result_array();
	}
	public function getCreditPointRequest($vType,$cRID=''){		
		$query = $this->db->query("CALL usp_getCreditPoints('".$vType."','".$cRID."')");
		mysqli_next_result($this->db->conn_id);
		return $query->result_array();
	}
	

}

?>