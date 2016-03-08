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
    class Add_modify_location_model extends CI_Model{
        /**
           * @return void
        **/
       function __construct() {
		parent::__construct();   
			
		}
		
		public function location_detail($Vtype=''){			
			$query = $this->db->query("CALL usp_get_Locations('".$Vtype."','')");
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
			$vresult="Faild";
			$country_id= $this->input->post('country_id');	
			$states_id= $this->input->post('states_id');	
			$city_id= $this->input->post('city_id');
			$location_detail= $this->input->post('location_detail');				
			$query = $this->db->query("CALL usp_insUpdLocationsDetail('".$country_id."','".$states_id."','".$city_id."','".$location_detail."',@vresult)");
			$query2=$this->db->query("SELECT @vresult as status")->row();
			//mysqli_next_result($this->db->conn_id);	
			//return $query->status;		
			if ($query1 = "Successfully"){
				return "Successfully";
			}else{
				return "Faild";
			}
		}
		
		
	}