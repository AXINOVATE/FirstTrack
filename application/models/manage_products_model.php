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
			$this->load->model('home_model');
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
		public function add_modify_manufactureDetails(){
			$vresult['status']="Failed";
			$manufactureID= $this->input->post('manufactureID');	
			$manufactureName= $this->input->post('manufactureName');
			$vType= $this->input->post('vType');			
			$rndS=$this->home_model->randStrGen();
			$query = $this->db->query("CALL usp_insUpdManufatureDetail('".$vType."','".$manufactureID."','".$manufactureName."',@vresult)");
			$query2=$this->db->query("SELECT @vresult as ".$rndS)->result_array();
			mysqli_next_result($this->db->conn_id);	
			if ($query2[0][$rndS] == "Success"){
				$vresult['status'] = "Success";
				return $vresult;
			}else{
				return $vresult;
			}
		}
		public function getManufatureDetails($vType,$vID=''){
			$query = $this->db->query("CALL usp_getManufacture('".$vType."','".$vID."')");
			mysqli_next_result($this->db->conn_id);
			return $query->result_array();
		}
		public function add_modify_categoryDetails(){
			$vresult['status']="Failed";
			$categoryID= $this->input->post('categoryID');	
			$categoryName= $this->input->post('categoryName');
			$imgPath= $this->input->post('imgPath');
			$vType= $this->input->post('vType');			
			$rndS=$this->home_model->randStrGen();
			$query = $this->db->query("CALL usp_insUpdCategoryDetail('".$vType."','".$categoryID."','".$categoryName."','".$imgPath."',@vresult)");
			$query2=$this->db->query("SELECT @vresult as ".$rndS)->result_array();
			mysqli_next_result($this->db->conn_id);	
			if ($query2[0][$rndS] == "Success"){
				$vresult['status'] = "Success";
				return $vresult;
			}else{
				return $vresult;
			}
		}
		public function getCategoryDetails($vType,$vID=''){
			$query = $this->db->query("CALL usp_getCategory('".$vType."','".$vID."')");
			mysqli_next_result($this->db->conn_id);
			return $query->result_array();
		}
		public function add_modify_bodyTypeDetails(){
			$vresult['status']="Failed";
			$body_typeID= $this->input->post('body_typeID');	
			$categoryID= $this->input->post('categoryID');	
			$body_type= $this->input->post('body_type');
			$body_type_img= $this->input->post('body_type_img');
			$vType= $this->input->post('vType');			
			$rndS=$this->home_model->randStrGen();
			$query = $this->db->query("CALL usp_insUpdBodyTypeDetail('".$vType."','".$body_typeID."','".$categoryID."','".$body_type."','".$body_type_img."',@vresult)");
			$query2=$this->db->query("SELECT @vresult as ".$rndS)->result_array();
			mysqli_next_result($this->db->conn_id);	
			if ($query2[0][$rndS] == "Success"){
				$vresult['status'] = "Success";
				return $vresult;
			}else{
				return $vresult;
			}
		}
		public function getBodyTypeDetails($vType,$vID=''){
			$query = $this->db->query("CALL usp_getBodyType('".$vType."','".$vID."')");
			mysqli_next_result($this->db->conn_id);
			return $query->result_array();
		}
	}