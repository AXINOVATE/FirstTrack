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
			$retvalue['status'] = 'Failed';
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
			
			//echo "CALL usp_insUploadProducts('".htmlspecialchars($xml)."',@vResult, @vproductID, @vMessage)";
			//exit();
			$query = $this->db->query("CALL usp_insUploadProducts('".$xml."',@vResult, @vproductID, @vMessage)");
			$re1 = $this->home_model->randStrGen();
			$re2 = $this->home_model->randStrGen();
			$re3 = $this->home_model->randStrGen();
			$getResult=$this->db->query("SELECT @vResult as ".$re1.", @vproductID as ".$re3.", @vMessage as ".$re2)->result_array();;
			mysqli_next_result($this->db->conn_id);
			
			//var_dump($getResult); exit();
			if($getResult[0][$re2] == 'Success'){
				$retvalue['status'] = 'Success';
			}
			return $retvalue;
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
		public function getProducts($vType,$varID,$id=""){
			$xml = "<ROOT>
					<HEADER>
					<USERID>".$this->session->userdata('userID')."</USERID>";
			if($vType=='ALL'){
				$xml .= "";
			}
			if($vType=='Basic' || $vType=='Colors' || $vType=='Prices' || $vType=='Specifications' || $vType=='Features' || $vType=='Photo' || $vType=='Video'|| $vType=='getCities'){
				$xml .= "<VARIANTID>".$varID."</VARIANTID>";
			}
			if($vType=='ColorOne' || $vType=='PriceOne' || $vType=='PhotoOne' || $vType=='VideoOne'){
				$xml .= "<VARIANTID>".$varID."</VARIANTID>";
				$xml .= "<ID>".$id."</ID>";
			}
			$xml .= "</HEADER>
					</ROOT>";
			$query = $this->db->query("CALL usp_getProducts('".$vType."','".$xml."')");
			mysqli_next_result($this->db->conn_id);
			return $query->result_array();
		}
		public function insUpdProducts($type,$id){
			//var_dump($_POST); exit();
			$vresult['status']="Failed";
			$now = date('Y-m-d H:i:s');
			$xml = "<ROOT>";
			$xml .="<HEADER>";
			$xml .="<USERID>".$this->session->userdata('userID')."</USERID>";
			$xml .="<MODIFIEDON>".$now."</MODIFIEDON>";
			$xml .="<VARIANTID>".$id."</VARIANTID>";
			if($type=='Basic'){
				$xml .= "<MANUFACTURERID>".$this->input->post('manufacturerName')."</MANUFACTURERID>";
				$xml .= "<PRODUCTTYPEID>".$this->input->post('productType')."</PRODUCTTYPEID>";
				$xml .= "<VARIANTNAME>".$this->input->post('variantName')."</VARIANTNAME>";
				$xml .= "<COVERIMAGE>".$this->input->post('cover_image')."</COVERIMAGE>";
				$xml .= "<PRODUCTNAME>".$this->input->post('productName')."</PRODUCTNAME>";
				$xml .= "<BODYTYPEID>".$this->input->post('bodyType')."</BODYTYPEID>";
				$xml .= "<TRANSMISSION>".$this->input->post('transmission')."</TRANSMISSION>";
				$xml .= "<OVERVIEW>".$this->input->post('overview')."</OVERVIEW>";
			}
			if($type=='Colors' || $type=='ColorsOne'){
				$xml .= "<COLORNAME>".$this->input->post('colorName')."</COLORNAME>";
				$xml .= "<COLORIMAGE>".$this->input->post('cover_image1')."</COLORIMAGE>";
				$xml .= "<COLORCODE>".$this->input->post('colorCode')."</COLORCODE>";
			}
			if($type=='Prices' || $type=='PricesOne'){
				$xml .= "<PCOLORNAME>".$this->input->post('pcolorName')."</PCOLORNAME>";
				$xml .= "<EXSHOWROOMPRICE>".$this->input->post('exShowroomPrice')."</EXSHOWROOMPRICE>";
				$xml .= "<INSURANCE>".$this->input->post('insurance')."</INSURANCE>";
				$xml .= "<HANDLINGCHARGES>".$this->input->post('handlingCharges')."</HANDLINGCHARGES>";
				$xml .= "<ROADTAX>".$this->input->post('roadTax')."</ROADTAX>";
				$xml .= "<RTO>".$this->input->post('RTO')."</RTO>";
				$xml .= "<PCITY>".$this->input->post('pcity')."</PCITY>";
			}
			if($type=='Specification'){
				$xml .= "<ENGINETYPE>".$this->input->post('engineType')."</engineType>";
				$xml .= "<DISPLACEMENT>".$this->input->post('displacement')."</DISPLACEMENT>";
				$xml .= "<NOOFCYLINDERS>".$this->input->post('noOfCylinders')."</NOOFCYLINDERS>";
				$xml .= "<POWERBHP>".$this->input->post('powerBHP')."</POWERBHP>";
				$xml .= "<POWERRPM>".$this->input->post('powerRPM')."</POWERRPM>";
				$xml .= "<TORQUENM>".$this->input->post('torqueNm')."</TORQUENM>";
				$xml .= "<TORQUERPM>".$this->input->post('torqueRPM')."</TORQUERPM>";
				$xml .= "<PRODUCTLENGTH>".$this->input->post('productLength')."</PRODUCTLENGTH>";
				$xml .= "<PRODUCTWIDTH>".$this->input->post('productWidth')."</PRODUCTWIDTH>";
				$xml .= "<PRODUCTHEIGHT>".$this->input->post('productHeight')."</PRODUCTHEIGHT>";
				$xml .= "<GROUNDCLEARANCE>".$this->input->post('groundClearance')."</GROUNDCLEARANCE>";
				$xml .= "<WHEELBASE>".$this->input->post('wheelBase')."</WHEELBASE>";
				$xml .= "<SEATINGCAPACITY>".$this->input->post('seatingCapacity')."</SEATINGCAPACITY>";
				$xml .= "<MINIMUMTURNINGRADIUS>".$this->input->post('minimumTurningRadius')."</MINIMUMTURNINGRADIUS>";
				$xml .= "<TYRETYPE>".$this->input->post('tyreType')."</TYRETYPE>";
				$xml .= "<FRONTBRAKETYPE>".$this->input->post('frontBrakeType')."</FRONTBRAKETYPE>";
				$xml .= "<REARBRAKETYPE>".$this->input->post('rearBrakeType')."</REARBRAKETYPE>";
				$xml .= "<FRONTTYRESIZE>".$this->input->post('frontTyreSize')."</FRONTTYRESIZE>";
				$xml .= "<REARTYRESIZE>".$this->input->post('reartyreSize')."</REARTYRESIZE>";
				$xml .= "<FUELTYPE>".$this->input->post('fueltype')."</FUELTYPE>";
				$xml .= "<MILEAGE>".$this->input->post('mileage')."</MILEAGE>";
				$xml .= "<NOOFGEARS>".$this->input->post('noOfGears')."</NOOFGEARS>";
				$xml .= "<FUELTANKCAPACITY>".$this->input->post('fuelTankCapacity')."</FUELTANKCAPACITY>";
				$xml .= "<FRONTSUSPENSION>".$this->input->post('frontSuspension')."</FRONTSUSPENSION>";
				$xml .= "<REARSUSPENSION>".$this->input->post('rearSuspension')."</REARSUSPENSION>";
				$xml .= "<BATTERY>".$this->input->post('battery')."</BATTERY>";
				$xml .= "<HEADLAMP>".$this->input->post('headlamp')."</HEADLAMP>";
				$xml .= "<SEATHEIGHT>".$this->input->post('seatHeight')."</SEATHEIGHT>";
				$xml .= "<SPEEDOMETER>".$this->input->post('speedometer')."</SPEEDOMETER>";
				$xml .= "<TACHOMETER>".$this->input->post('tachometer')."</TACHOMETER>";
				$xml .= "<LIGHTTYPE>".$this->input->post('lightType')."</LIGHTTYPE>";
			}
			if($type=='Feature'){
				$xml .= "<AIRBAGS>".$this->input->post('airbags')."</AIRBAGS>";
				$xml .= "<PASSENGERAIRBAGS>".$this->input->post('passengerAirbags')."</PASSENGERAIRBAGS>";
				$xml .= "<SIDEAIRBAGS>".$this->input->post('sideAirbags')."</SIDEAIRBAGS>";
				$xml .= "<ABS>".$this->input->post('ABS')."</ABS>";
				$xml .= "<CENTRALLOCKING>".$this->input->post('centralLocking')."</CENTRALLOCKING>";
				$xml .= "<CHILDSAFETYLOCK>".$this->input->post('childSafetyLock')."</CHILDSAFETYLOCK>";
				$xml .= "<REARPARKINGCENSOR>".$this->input->post('arearParkingCensorirbags')."</REARPARKINGCENSOR>";
				$xml .= "<REARPARKINGCAMERA>".$this->input->post('rearParkingCamera')."</REARPARKINGCAMERA>";
				$xml .= "<POWERSTEERING>".$this->input->post('powerSteering')."</POWERSTEERING>";
				$xml .= "<ADJUSTABLEPOWERSTEERING>".$this->input->post('adjustablePowerSteering')."</ADJUSTABLEPOWERSTEERING>";
				$xml .= "<FOGLAMPS>".$this->input->post('fogLamps')."</FOGLAMPS>";
				$xml .= "<LOWFUELINDICATOR>".$this->input->post('lowFuelIndicator')."</LOWFUELINDICATOR>";
				$xml .= "<AC>".$this->input->post('AC')."</AC>";
				$xml .= "<HEATER>".$this->input->post('heater')."</HEATER>";
				$xml .= "<HEADLAMPBEAMADJUSTOR>".$this->input->post('headlampBeamAdjustor')."</HEADLAMPBEAMADJUSTOR>";
				$xml .= "<CRUISECONTROL>".$this->input->post('cruiseControl')."</CRUISECONTROL>";
				$xml .= "<STEERINGMOUNTEDAUDIO>".$this->input->post('steeringMountedAudio')."</STEERINGMOUNTEDAUDIO>";
				$xml .= "<FRONTARMREST>".$this->input->post('frontArmRest')."</FRONTARMREST>";
				$xml .= "<REARARMREST>".$this->input->post('rearArmRest')."</REARARMREST>";
				$xml .= "<MUSICSYSTEM>".$this->input->post('musicSystem')."</MUSICSYSTEM>";
				$xml .= "<SPEAKERS>".$this->input->post('speakers')."</SPEAKERS>";
				$xml .= "<TRIPMETER>".$this->input->post('tripMeter')."</TRIPMETER>";
				$xml .= "<PILLIONSEAT>".$this->input->post('pillionSeat')."</PILLIONSEAT>";
			}
			if($type=='Photo' || $type=='Video'){
				$xml .= "<FILETYPE>".$this->input->post('fileType')."</FILETYPE>";
				$xml .= "<FILEPATH>".$this->input->post('filePath')."</FILEPATH>";
				$xml .= "<FILETITLE>".$this->input->post('fileTitle')."</FILETITLE>";
			}
			$xml .="</HEADER>";
			$xml .="</ROOT>";
			
			$rndS1=$this->home_model->randStrGen();
			$rndS2=$this->home_model->randStrGen();
			$query = $this->db->query("CALL usp_insUpdProducts('".$type."','".$xml."',@vresult, @vMessage)");
			$query2=$this->db->query("SELECT @vresult as ".$rndS1.", @vMessage as ".$rndS2)->result_array();
			mysqli_next_result($this->db->conn_id);	
			if ($query2[0][$rndS1] == "Success"){
				$vresult['status'] = 'Success';
				return $vresult;
			}
			else if($query2[0][$rndS1] == "Does not exist"){
				$vresult['status'] = 'Does not exist';
				return $vresult;
			}else{
				return $vresult;
			}
		}
		public function delProducts(){
			//var_dump($_POST); exit();
			$vresult['status']="Failed";
			$now = date('Y-m-d H:i:s');
			$type = $this->input->post('vType');
			$xml = "<ROOT>";
			$xml .="<HEADER>";
			$xml .="<USERID>".$this->session->userdata('userID')."</USERID>";
			$xml .="<MODIFIEDON>".$now."</MODIFIEDON>";
			$xml .="<VARIANTID>".$this->input->post('variantID')."</VARIANTID>";
			$xml .="<ID>".$this->input->post('id')."</ID>";
			$xml .="</HEADER>";
			$xml .="</ROOT>";
			
			$rndS1=$this->home_model->randStrGen();
			$rndS2=$this->home_model->randStrGen();
			$query = $this->db->query("CALL usp_removeProductItems('".$type."','".$xml."',@vresult, @vMessage)");
			$query2=$this->db->query("SELECT @vresult as ".$rndS1.", @vMessage as ".$rndS2)->result_array();
			mysqli_next_result($this->db->conn_id);	
			if ($query2[0][$rndS1] == "Success"){
				$vresult['status'] = 'Success';
				return $vresult;
			}else{
				return $vresult;
			}
		}
	}