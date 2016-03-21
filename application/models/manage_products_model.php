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
			date_default_timezone_set('Asia/Kolkata');
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
		public function upload_products_list(){
			$retvalue=array();
			$retvalue['status'] = 'failed';
			$manufacturerName = $this->input->post('manufacturerName');
			$categoryType = $this->input->post('categoryType');
			$excel_path	= $this->input->post('file_path');;
			//end of xss filter
			require(APPPATH.'third_party/excel-reader/php-excel-reader/excel_reader2.php');
			require(APPPATH.'third_party/excel-reader/SpreadsheetReader.php');
			$Filepath=$excel_path;
			$now = date('Y-m-d H:i:s');
			try
			{
				$Spreadsheet = new SpreadsheetReader($Filepath);
				$BaseMem = memory_get_usage();
				$Sheets = $Spreadsheet -> Sheets();
			
				$xml = "<ROOT>";
				$xml .= "<HEADER>";
				$xml .= "<USERID>".$this->session->userdata('userID')."</USERID>";
				$xml .= "<CREATEDON>".$now."</CREATEDON>";
				$xml .= "<MANUFACTURERNAME>".$manufacturerName."</MANUFACTURERNAME>";
				$xml .= "<CATEGORYTYPE>".$categoryType."</CATEGORYTYPE>";
				$xml .=	"</HEADER>";
				foreach ($Sheets as $Index => $Name)
				{
					$Spreadsheet -> ChangeSheet($Index);
					$tagName = array();
					if($Name!='Meta_Values'){
						foreach ($Spreadsheet as $Key => $Row)
						{
							if($Key==0){
								for($i=0;$i<count($Row);$i++){
									$tagName[$i] = $Row[$i];
									$tagName[$i] = str_replace('(','',$tagName[$i]);
									$tagName[$i] = str_replace(')','',$tagName[$i]);
								}
							}
							else{
								$xml .= "<".strtoupper(str_replace(' ','',$Name)).">";
								if($Row){
									for($i=0;$i<count($Row);$i++){
										$xml .= "<".strtoupper(str_replace(' ','',$tagName[$i])).">".$Row[$i]."</".strtoupper(str_replace(' ','',$tagName[$i])).">";
									}
								}
								$xml .= "</".strtoupper(str_replace(' ','',$Name)).">";
							}
						}
					}
				}
				$xml .= "</ROOT>";
				//echo htmlspecialchars($xml); exit();
			}
			catch (Exception $E)
			{
				echo $E -> getMessage();
			}
			$this->db->query("CALL usp_insUploadProducts('".$xml."',@vResult, @vproductID, @vMessage)");
			$re1 = $this->home_model->randStrGen();
			$re2 = $this->home_model->randStrGen();
			$re3 = $this->home_model->randStrGen();
			$getResult=$this->db->query("SELECT @vResult as ".$re1.", @vproductID as ".$re3.", @vMessage as ".$re2);
			mysqli_next_result($this->db->conn_id);
			$result = $getResult->result_array();
			var_dump($result); exit();
			if($result[0][$re2] == 'Success'){
				$retvalue['status'] = true;
				$retvalue['evalID'] = $result[0][$re3];
			}
		}
		public function getTrendType($vType,$id=''){
			$query = $this->db->query("CALL usp_getTrendType('".$vType."','".$id."')");
			mysqli_next_result($this->db->conn_id);
			return $query->result_array();
		}
		public function getProductList($vType,$mID=''){
			$query='';
			if($vType=='ALL'){
				$query = $this->db->query("select productID,productName,manufacturerID from tbl_productBasic where status='P'");
			}elseif($vType=='BM'){
				$query = $this->db->query("select productID,productName,manufacturerID from tbl_productBasic where status='P' and manufacturerID='".$mID."'");
			}
			mysqli_next_result($this->db->conn_id);
			return $query->result_array();
		}
		public function getVariantList($vType,$prID=''){
			$query='';
			if($vType=='ALL'){
				$query = $this->db->query("SELECT variantID,productID,variantName FROM tbl_productDetails WHERE status='P'");
			}elseif($vType='BP'){
				$query = $this->db->query("SELECT variantID,productID,variantName FROM tbl_productDetails WHERE status='P' and productID='".$prID."'");
			}
			mysqli_next_result($this->db->conn_id);
			return $query->result_array();
		}
		public function insUpdProductCategoryDetails(){
			$vresult['status']="Failed";
			$vType= $this->input->post('vType');	
			$manufacturerName= $this->input->post('manufacturerName');	
			$select_product= $this->input->post('select_product');
			$select_variant= $this->input->post('select_variant');
			$trendTypeID= $this->input->post('trendTypeID');			
			$productCategoryID= $this->input->post('productCategoryID');
			$userID=$this->session->userdata('userID');
			$rndS=$this->home_model->randStrGen();
			$query = $this->db->query("CALL usp_insUpdTrendDetails('".$vType."','".$productCategoryID."','".$manufacturerName."','".$select_product."','".$select_variant."','".$trendTypeID."','".$userID."',@vresult)");
			$query2=$this->db->query("SELECT @vresult as ".$rndS)->result_array();
			mysqli_next_result($this->db->conn_id);	
			if ($query2[0][$rndS] == "Success"){
				$vresult['status'] = "Success";
				return $vresult;
			}else{
				return $vresult;
			}
		}
		public function getProductsCategoryDetails($vType,$vID=''){
			$query = $this->db->query("CALL usp_getProductCategoryDetails('".$vType."','".$vID."')");
			mysqli_next_result($this->db->conn_id);
			return $query->result_array();
		}
	}