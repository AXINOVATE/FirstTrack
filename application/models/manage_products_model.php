<?php

/**
* Name:  Location detail
*
* Author: Axinovate Technologies LLP.
*		  info@axinovate.com
*
* Created:  07 march 2016
*
*
*/
    class Manage_products_model extends CI_Model{
        /**
           * @return void
        **/
       function __construct() {
		parent::__construct();   
			
		}
		
		public function location_detail($Vtype='',$vid=''){			
			$query = $this->db->query("CALL usp_get_Locations('".$Vtype."','".$vid."')");
			mysqli_next_result($this->db->conn_id);
			return $query->result_array();
		}
		public function get_particular_states($country_id=''){
			$Vtype='PSTATE';
			$query = $this->db->query("CALL usp_get_Locations('".$Vtype."','".$country_id."')");
			mysqli_next_result($this->db->conn_id);
			return $query->result_array();
		}
		public function get_particular_city($state_id=''){
			$Vtype='PCITY';
			$query = $this->db->query("CALL usp_get_Locations('".$Vtype."','".$state_id."')");
			mysqli_next_result($this->db->conn_id);
			return $query->result_array();
		}
		public function save_location_detail(){
			$vresult['status']="Failed";
			$locationID= $this->input->post('locationID');	
			$vType= $this->input->post('vType');
			$country_id= $this->input->post('country_id');	
			$states_id= $this->input->post('states_id');	
			$city_id= $this->input->post('city_id');
			$location= $this->input->post('location');				
			$pincode= $this->input->post('pincode');				
			$query = $this->db->query("CALL usp_insUpdLocationsDetail('".$vType."','".$locationID."','".$country_id."','".$states_id."','".$city_id."','".$location."','".$pincode."',@vresult)");
			$query2=$this->db->query("SELECT @vresult as status")->result_array();
			mysqli_next_result($this->db->conn_id);	
			if ($query2[0]['status'] == "Success"){
				$vresult['status'] = "Success";
				return $vresult;
			}else{
				return $vresult;
			}
		}
		
		
	}