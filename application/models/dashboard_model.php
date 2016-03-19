<?php 
class Dashboard_model extends CI_Model{
		
	/**
	 * @return void
	 **/
	public function __construct(){
		parent::__construct();
		//$this->load->database();
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

}

?>