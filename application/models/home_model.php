<?php 
class Home_model extends CI_Model{
		
	/**
	 * @return void
	 **/
	public function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Kolkata');
		//$this->load->database();
	}
/**
 * To encrypt password
 * @param password varchar
 * @return varchar // Password encrypted
 **/
	public function encrypt_password($password){
		/*test case
		$password = "password";
		$encrypt = $this->admin_acl_model->encrypt_password($password);
		$decrypt = $this->admin_acl_model->decrypt_password($encrypt, $password);
		echo 'password : '.$password.'<br/>encrypt : '.$encrypt.'<br/>decrypt : '.$decrypt;
		*/
		$length = $this->config->item('salt_length');
		$salt = $this->salt();
		return  $salt . substr(sha1($salt . $password), 0, -$length);
	}
		
/**
 * To decrypt password
 * @param password varchar
 * @return varchar // Password encrypted
 **/
	public function decrypt_password($db_password, $password){
		$length = $this->config->item('salt_length');
		$salt = substr($db_password, 0, $length);
		$db_password =  $salt . substr(sha1($salt . $password), 0, -$length);
		return $db_password;
	}
/**
 * To create salt
 * return @varchar
 **/
	public function salt(){
		return substr(md5(uniqid(rand(), true)), 0, $this->config->item('salt_length'));
	}
	/**
 * To create Random String
 * return @varchar
 **/
	function randStrGen($len=5){
			$result = "";
			$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz";
			$charArray = str_split($chars);
			for($i = 0; $i < $len; $i++){
				$randItem = array_rand($charArray);
				$result .= "".$charArray[$randItem];
			}
			return 'r'.$result;
		}
		/**
 * Method upload_file for uploading files into server
 * @param object
 * @return string
 **/
	public function upload_file($file, $type='', $uploaddir=''){
		$d=date('Ymdhms');
		$path = '';
		if($type=='image'){
			$allowedExts = $this->config->item('ext_img');
			$temp = explode(".", $file["name"]);
			$extension = end($temp);
			$uid =1;
			if($uploaddir==''){$uploaddir = $this->config->item('upload_path_category');}
				if (!is_dir($uploaddir)) {mkdir($uploaddir,0777);}
			if (in_array($extension, $allowedExts)) {
				if ($file["error"] > 0){$path= 'Failed: error in file';} 
				else{
					$path=$uploaddir.$d.$file["name"];
					if(move_uploaded_file($file["tmp_name"],$path)){$path= $path;}
					else{$path= 'Failed: File cant move';}
				}
			} 
			else {$path= 'Failed: '.$extension.' Format Not supported';}
		}
		else if($type=='audio'){
			$allowedExts = $this->config->item('ext_audio');
			$temp = explode(".", $file["name"]);
			$extension = end($temp);
			$uid =1;
			if($uploaddir==''){$uploaddir = $this->config->item('upload_path_category');}
				if (!is_dir($uploaddir)) {mkdir($uploaddir,0777);}
			if (in_array($extension, $allowedExts)) {
				if ($file["error"] > 0){$path= 'Failed: error in file';} 
				else{
					$path=$uploaddir.$d.$file["name"];
					if(move_uploaded_file($file["tmp_name"],$path)){$path= $path;}
					else{$path= 'Failed: File cant move';}
				}
			} 
			else {$path= 'Failed: '.$extension.' Format Not supported';}
		}
		else if($type=='video'){
			$allowedExts = $this->config->item('ext_video');
			$temp = explode(".", $file["name"]);
			$extension = end($temp);
			$uid =1;
			if($uploaddir==''){$uploaddir = $this->config->item('upload_path_category');}
				if (!is_dir($uploaddir)) {mkdir($uploaddir,0777);}
			if (in_array($extension, $allowedExts)) {
				if ($file["error"] > 0){$path= 'Failed: error in file';} 
				else{
					$path=$uploaddir.$d.$file["name"];
					if(move_uploaded_file($file["tmp_name"],$path)){$path= $path;}
					else{$path= 'Failed: File cant move';}
				}
			} 
			else {$path= 'Failed: '.$extension.' Format Not supported';}
		}
		else if($type=='document'){
			$allowedExts = $this->config->item('ext_document');
			$temp = explode(".", $file["name"]);
			$extension = end($temp);
			$uid =1;
			if($uploaddir==''){$uploaddir = $this->config->item('upload_path_category');}
				if (!is_dir($uploaddir)) {mkdir($uploaddir,0777);}
			if (in_array($extension, $allowedExts)) {
				if ($file["error"] > 0){$path= 'Failed: error in file';} 
				else{
					$path=$uploaddir.$d.$file["name"];
					if(move_uploaded_file($file["tmp_name"],$path)){$path= $path;}
					else{$path= 'Failed: File cant move';}
				}
			} 
			else {$path= 'Failed: '.$extension.' Format Not supported';}
		}
		else if($type=='files'){
			$allowedExts = $this->config->item('ext_files');
			$temp = explode(".", $file["name"]);
			$extension = end($temp);
			$uid =1;
			if($uploaddir==''){$uploaddir = $this->config->item('upload_path_category');}
				if (!is_dir($uploaddir)) {mkdir($uploaddir,0777);}
			if (in_array($extension, $allowedExts)) {
				if ($file["error"] > 0){$path= 'Failed: error in file';} 
				else{
					$path=$uploaddir.$d.$file["name"];
					if(move_uploaded_file($file["tmp_name"],$path)){$path= $path;}
					else{$path= 'Failed: File cant move';}
				}
			} 
			else {$path= 'Failed: '.$extension.' Format Not supported';}
		}
		else if($type=='scorm'){
			$allowedExts = $this->config->item('ext_scorm');
			$temp = explode(".", $file["name"]);
			$extension = end($temp);
			$uid =1;
			if($uploaddir==''){$uploaddir = $this->config->item('upload_path_category');}
				if (!is_dir($uploaddir)) {mkdir($uploaddir,0777);}
			if (in_array($extension, $allowedExts)) {
				if ($file["error"] > 0){$path= 'Failed: error in file';} 
				else{
					$path=$uploaddir.$d.$file["name"];
					if(move_uploaded_file($file["tmp_name"],$path)){
						$this->load->library('unzip');
						$folderName=str_replace(".zip","",$path);
						mkdir($folderName,0777);
						$this->unzip->extract($path, $folderName);
						$path= $folderName;
					}
					else{$path= 'Failed: File cant move';}
				}
			} 
			else {$path= 'Failed: '.$extension.' Format Not supported';}
		}
		return $path;
	}
	
	
	public function getModelDetail($vType,$moID='',$maID=''){		
		$query = $this->db->query("CALL usp_getModelDetail('".$vType."','".$moID."','".$maID."')");
		mysqli_next_result($this->db->conn_id);
		return $query->result_array();
	}
	public function getVariantDetail($vType,$vID){
		$query = $this->db->query("CALL usp_getVariantDetail('".$vType."','".$vID."')");
		mysqli_next_result($this->db->conn_id);
		return $query->result_array();
	}
	public function add_vehicle_loan(){
		$vresult['status'] = "Failed";
		$xml ="<ROOT>
					<HEADER>";
		$vType = $this->input->post('vType');
		$fullname = $this->input->post('fullname');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$address = $this->input->post('address');
		$booking_amount = $this->input->post('booking_amount');
		$preferenceBank = $this->input->post('preferenceBank');
		$pan = $this->input->post('pan');
		$cityID = $this->input->post('cityID');
		$categoryID = $this->input->post('categoryID');
		$manufactureID = $this->input->post('manufactureID');
		$customer_type = $this->input->post('customer_type');
		$loan_amount = $this->input->post('loan_amount');
		$loan_duration = $this->input->post('loan_duration');
		$purchase_time = $this->input->post('purchase_time');
		$modelID = $this->input->post('modelID');
		$variantID = $this->input->post('variantID');
		$dealerName = $this->input->post('dealerName');
		$dealerLocation = $this->input->post('dealerLocation');
		$annualIncome = $this->input->post('annualIncome');
		$bankLocation = $this->input->post('bankLocation');
		$timeToCall = $this->input->post('timeToCall');
		$salaryAccountBank = $this->input->post('salaryAccountBank');
		$comment = $this->input->post('comment');
		$termsandconditions = $this->input->post('termsandconditions');
		$xml .= "<ACTIONTYPE>".$vType."</ACTIONTYPE>
						<FULLNAME>".$fullname."</FULLNAME>
						<PHONE>".$phone."</PHONE>
						<EMAIL>".$email."</EMAIL>
						<ADDRESS>".$address."</ADDRESS>
						<BOOKINGAMOUNT>".$booking_amount."</BOOKINGAMOUNT>
						<PREFERENCEBANK>".$preferenceBank."</PREFERENCEBANK>
						<PAN>".$pan."</PAN>
						<CITYID>".$cityID."</CITYID>
						<CATEGORYID>".$categoryID."</CATEGORYID>
						<MANUFACTUREID>".$manufactureID."</MANUFACTUREID>
						<CUSTOMERTYPE>".$customer_type."</CUSTOMERTYPE>
						<LOANAMOUNT>".$loan_amount."</LOANAMOUNT>
						<LOANDURATION>".$loan_duration."</LOANDURATION>
						<PURCHASETIME>".$purchase_time."</PURCHASETIME>
						<MODELID>".$modelID."</MODELID>
						<VARIANTID>".$variantID."</VARIANTID>
						<DEALERNAME>".$dealerName."</DEALERNAME>
						<DEALERLOCATION>".$dealerLocation."</DEALERLOCATION>
						<ANNUALINCOME>".$annualIncome."</ANNUALINCOME>
						<BANKLOCATION>".$bankLocation."</BANKLOCATION>
						<TIMETOCALL>".$timeToCall."</TIMETOCALL>
						<SALARYACCOUNTBANK>".$salaryAccountBank."</SALARYACCOUNTBANK>
						<COMMENT>".$comment."</COMMENT>
						<TERMSANDCONDITIONS>".$termsandconditions."</TERMSANDCONDITIONS>
					</HEADER>
				</ROOT>";
			$rndS=$this->randStrGen();
			$query = $this->db->query("CALL usp_insUpdVehicleLoan('".$xml."',@vresult)");
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
		/**
 * To send email
 * @param from varchar, to varchar, cc varchar, subject varchar, message varchar
 * @return none
 **/
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

	
	
	
	public function add_by_on_road_assistance(){
		$vresult['status'] = "Failed";
		$xml ="";	
		$vType = $this->input->post('vType');
		$fullname = $this->input->post('fullname');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$address = $this->input->post('address');
		$cityID = $this->input->post('cityID');
		$categoryID = $this->input->post('categoryID');
		$manufactureID = $this->input->post('manufactureID');
		$modelID = $this->input->post('modelID');
		$variantID = $this->input->post('variantID');
		$use = $this->input->post('use');
		$plan = $this->input->post('plan');
		$purchase = $this->input->post('purchase');
		$roadcompanies = $this->input->post('roadcompanies');
		$packag = $this->input->post('packag');
		$packegebenifit = $this->input->post('packegebenifit');
		$packagecost = $this->input->post('packagecost');
		$timeframe = $this->input->post('timeframe');
		$paymentdetails = $this->input->post('paymentdetails');
		$timecall = $this->input->post('timecall');
		$comment = $this->input->post('comment');
		$termsandconditions = $this->input->post('termsandconditions');
		$xml .= "<ROOT>
					<HEADER><ACTIONTYPE>".$vType."</ACTIONTYPE>
						<FULLNAME>".$fullname."</FULLNAME>
						<PHONE>".$phone."</PHONE>
						<EMAIL>".$email."</EMAIL>
						<CITYID>".$cityID."</CITYID>
						<CATEGORYID>".$categoryID."</CATEGORYID>
						<MANUFACTUREID>".$manufactureID."</MANUFACTUREID>
						<MODELID>".$modelID."</MODELID>
						<VARIANTID>".$variantID."</VARIANTID>
						<USE>".$use."</USE>
						<PLAN>".$plan."</PLAN>
						<PURCHASE>".$purchase."</PURCHASE>
						<ROADCOMPANIES>".$roadcompanies."</ROADCOMPANIES>
						<PACKAGE>".$packag."</PACKAGE>
						<PACKAGEBENIFIT>".$packegebenifit."</PACKAGEBENIFIT>
						<PACKAGECOST>".$packagecost."</PACKAGECOST>
						<TIMEFRAME>".$timeframe."</TIMEFRAME>
						<PAYMENTSDETAILS>".$paymentdetails."</PAYMENTSDETAILS>
						<TIMECALL>".$timecall."</TIMECALL>
						<COMMENT>".$comment."</COMMENT>
						<TERMSANDCONDITIONS>".$termsandconditions."</TERMSANDCONDITIONS>
					</HEADER>
				</ROOT>";			
				$rndS=$this->randStrGen();
			$query = $this->db->query("CALL usp_insUpdRoadAsistance('".$xml."',@vresult)");
			$query1=$this->db->query("SELECT @vresult as ".$rndS)->result_array();
			mysqli_next_result($this->db->conn_id);	
			if ($query1[0][$rndS] == "Success"){
				$vresult['status'] = "Success";
				return $vresult;
			}else{
				return $vresult;
			}
	}
	
	
	public function add_corporate_deals(){
		$vresult['status'] = "Failed";
		$xml ="<ROOT>
					<HEADER>";
		$vType = $this->input->post('vType');
		$fullname = $this->input->post('fullname');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$address = $this->input->post('address');
		$cityID = $this->input->post('cityID');
		$manufactureID = $this->input->post('manufactureID');
		$modelID = $this->input->post('modelID');
		$variantID = $this->input->post('variantID');
		$categoryID = $this->input->post('categoryID');
		$quality_of_vehicle = $this->input->post('quality_of_vehicle');
		$customer_type = $this->input->post('customer_type');
		$needLoad = $this->input->post('needLoad');
		$loan_amount = $this->input->post('loan_amount');
		$loan_duration = $this->input->post('loan_duration');
		$preferenceBank = $this->input->post('preferenceBank');
		$purchaseTimeFrame = $this->input->post('purchaseTimeFrame');
		$bestTimeToCall = $this->input->post('bestTimeToCall');
		$salaryAccountBank = $this->input->post('salaryAccountBank');
		$comment = $this->input->post('comment');
		$termsandconditions = $this->input->post('termsandconditions');
		$xml .= "<ACTIONTYPE>".$vType."</ACTIONTYPE>
						<FULLNAME>".$fullname."</FULLNAME>
						<PHONE>".$phone."</PHONE>
						<EMAIL>".$email."</EMAIL>
						<ADDRESS>".$address."</ADDRESS>
						<CITYID>".$cityID."</CITYID>
						<MANUFACTUREID>".$manufactureID."</MANUFACTUREID>
						<MODELID>".$modelID."</MODELID>
						<VARIANTID>".$variantID."</VARIANTID>
						<CATEGORYID>".$categoryID."</CATEGORYID>
						<QUALITYOFVEHICLE>".$quality_of_vehicle."</QUALITYOFVEHICLE>
						<CUSTOMERTYPE>".$customer_type."</CUSTOMERTYPE>
						<NEEDLOAN>".$needLoad."</NEEDLOAN>
						<LOANAMOUNT>".$loan_amount."</LOANAMOUNT>
						<LOANDURATION>".$loan_duration."</LOANDURATION>
						<PREFERENCEBANK>".$preferenceBank."</PREFERENCEBANK>
						<PURCHASETIME>".$purchaseTimeFrame."</PURCHASETIME>
						<TIMETOCALL>".$bestTimeToCall."</TIMETOCALL>
						<SALARYACCOUNTBANK>".$salaryAccountBank."</SALARYACCOUNTBANK>
						<COMMENT>".$comment."</COMMENT>
						<TERMSANDCONDITIONS>".$termsandconditions."</TERMSANDCONDITIONS>
					</HEADER>
				</ROOT>";
			$rndS=$this->randStrGen();
			$query = $this->db->query("CALL usp_insUpdCorporateDeals('".$xml."',@vresult)");
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
	
	public function add_insurance_details(){
		$vresult['status'] = "Failed";
		$xml ="<ROOT>
					<HEADER>";
					$vType = $this->input->post('vType');
					$fullname = $this->input->post('fullname');
        $phone=$this->input->post('phone');
		$email = $this->input->post('email');
		$modelID = $this->input->post('modelID');
		$variantID = $this->input->post('variantID');
		$cityID = $this->input->post('cityID');
		
		$date=$this->input->post('date');
		$time=$this->input->post('time');
		$manufactureID = $this->input->post('manufactureID');
		$use=$this->input->post('use');
		$customer_type = $this->input->post('customer_type');
		$needLoan = $this->input->post('needLoan');
		$loan_amount = $this->input->post('loan_amount');
		$loan_duration = $this->input->post('loan_duration');
		$preferenceBank = $this->input->post('preferenceBank');
		$purchaseTimeFrame = $this->input->post('purchaseTimeFrame');
		
		$salaryAccountBank = $this->input->post('salaryAccountBank');
		$comment = $this->input->post('comment');
		$termsandconditions = $this->input->post('termsandconditions');
		$xml .= "<ACTIONTYPE>".$vType."</ACTIONTYPE>
						<FULLNAME>".$fullname."</FULLNAME>
						<PHONE>".$phone."</PHONE>
						<EMAIL>".$email."</EMAIL>
						<MODELID>".$modelID."</MODELID>
						<VARIANTID>".$variantID."</VARIANTID>
						<CITYID>".$cityID."</CITYID>
						<DATE>".$date."</DATE>
						<TIME>".$time."</TIME>
						<MANUFACTUREID>".$manufactureID."</MANUFACTUREID>
						<USE>".$use."</USE>
						<CUSTOMERTYPE>".$customer_type."</CUSTOMERTYPE>
						<NEEDLOAN>".$needLoan."</NEEDLOAN>
						<LOANAMOUNT>".$loan_amount."</LOANAMOUNT>
						<LOANDURATION>".$loan_duration."</LOANDURATION>
						<PREFERENCEBANK>".$preferenceBank."</PREFERENCEBANK>
						<PURCHASETIME>".$purchaseTimeFrame."</PURCHASETIME>
						<SALARYACCOUNTBANK>".$salaryAccountBank."</SALARYACCOUNTBANK>
						<COMMENT>".$comment."</COMMENT>
						<TERMSANDCONDITIONS>".$termsandconditions."</TERMSANDCONDITIONS>
					</HEADER>
				</ROOT>";
			$rndS=$this->randStrGen();
			$query = $this->db->query("CALL usp_insUpdApplyInsurance('".$xml."',@vresult)");
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
	public function add_InstantQuotes(){
		$vresult['status'] = "Failed";
		$checkedBy = "";
		$xml ="<ROOT>
					<HEADER>";
		$countryID = $this->input->post('countryID');
		$stateID = $this->input->post('stateID');
		$cityID = $this->input->post('cityID');
		$categoryID = $this->input->post('categoryID');
		$manufactureID = $this->input->post('manufactureID');
		$modelID = $this->input->post('modelID');
		$variantID = $this->input->post('variantID');
		$dealerName = $this->input->post('dealerName');
		$termsandconditions = $this->input->post('termsandconditions');
		if($this->session->userdata('userID')!=''){
			$checkedBy = $this->session->userdata('userID');
		}
		$vType = $this->input->post('vType');
		$xml .= "<ACTIONTYPE>".$vType."</ACTIONTYPE>
						<COUNTRYID>".$countryID."</COUNTRYID>
						<STATEID>".$stateID."</STATEID>
						<CITYID>".$cityID."</CITYID>
						<CATEGORYID>".$categoryID."</CATEGORYID>
						<MANUFACTUREID>".$manufactureID."</MANUFACTUREID>
						<MODELID>".$modelID."</MODELID>
						<VARIANTID>".$variantID."</VARIANTID>
						<DEALERNAME>".$dealerName."</DEALERNAME>
						<TERMSANDCONDITIONS>".$termsandconditions."</TERMSANDCONDITIONS>
						<CHECKEDBY>".$checkedBy."</CHECKEDBY>
					</HEADER>
				</ROOT>";
			//$rndS=$this->randStrGen();
			$query = $this->db->query("CALL usp_insUpdInstantQuote('".$xml."',@vresult)");
			//$query1=$this->db->query("SELECT @vresult as ".$rndS)->result_array();
			//$this->send_email('elanthirayan.m@axinovate.com',$email,'','Request Ticket Rised','Your Vehicle Loan Ticket Raised <br> Ticket Number 123');
			mysqli_next_result($this->db->conn_id);	
			return $query->result_array();
			/*if ($query1[0][$rndS] == "Success"){
				$vresult['status'] = "Success";
				return $vresult;
			}else{
				return $vresult;
			}	*/
	}
	
	public function add_dropAQuery(){
		$vresult['status'] = "Failed";
		$xml ="<ROOT>
					<HEADER>";
		$vType = $this->input->post('vType');
		$fullname = $this->input->post('fullname');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$query = $this->input->post('query');
				$xml .= "<ACTIONTYPE>".$vType."</ACTIONTYPE>
						<FULLNAME>".$fullname."</FULLNAME>
						<PHONE>".$phone."</PHONE>
						<EMAIL>".$email."</EMAIL>
						<QUERY>".$query."</QUERY>
					</HEADER>
				</ROOT>";
		$rndS=$this->randStrGen();
		$query = $this->db->query("CALL usp_insUpdDropAQuery('".$xml."',@vresult)");
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
	
	public function getTrendData($vType,$trendTypeID='',$page='',$id=''){
		$categoryID='';
		$manufactureID='';
		$bodyTypeID='';
		$fuelType='';
		$power_streering='';
		$transmission='';
		$minprice='';
		$maxprice='';
		$minMileage='';
		$maxMileage='';
		$price='';
		$minDisp='';
		$maxDisp='';
		$minWaitPeriod='';
		$maxWaitPeriod='';
		$minPow='';
		$maxPow='';
		$seatCapacity='';
		$dealerID='';
		$orderBy='';
		$emissionStandard='';
		if(($this->session->userdata('cityID'))!=''){
			$cityName = $this->session->userdata('cityID');
		}
		else{
			$cityName = "Bangalore";
		}
		// $cityName = if(isset($this->session->userdata('cityID'))) ?   : "";
		if($page=='bodytype' || $page=='categorytype'){
			$trendsTypeID=$id;
		}
		else{
			$trendsTypeID=$trendTypeID;
		}
		$xml1 = "";
		$xml1 .= "<SEATS>";
		if(isset($_POST['trendsTypeID'])){
			$categoryID=$this->input->post('categoryID');
			$manufactureID=$this->input->post('manufactureID');
			$fuelType=$this->input->post('fuelType');
			$power_streering=$this->input->post('power_streering');
			$transmission=$this->input->post('transmission');
			$trendsTypeID=$this->input->post('trendsTypeID');
			$price=$this->input->post('price');
			$mileage=$this->input->post('mileage');
			$displacement=$this->input->post('displacement');
			$waitingPeriod=$this->input->post('waitingPeriod');
			$power=$this->input->post('power');
			$dealerID=$this->input->post('dealerID');
			$bodyTypeID=$this->input->post('bodyTypeID');
			$orderBy=$this->input->post('orderBy');
			$emissionStandard=$this->input->post('emissionStandard');
			$min=explode(',',$price);
			$mile=explode(',',$mileage);
			$disp=explode(',',$displacement);
			$waitPeriod=explode(',',$waitingPeriod);
			$pow=explode(',',$power);
			if(count($min)==2){
				$minprice=$min[0];
				$maxprice=$min[1];
			}
			if(count($mile)==2){
				$minMileage=$mile[0];
				$maxMileage=$mile[1];
			}
			if(count($disp)==2){
				$minDisp=$disp[0];
				$maxDisp=$disp[1];
			}
			if(count($waitPeriod)==2){
				$minWaitPeriod=$waitPeriod[0];
				$maxWaitPeriod=$waitPeriod[1];
			}
			if(count($pow)==2){
				$minPow=$pow[0];
				$maxPow=$pow[1];
			}
			$seatCapacity=$this->input->post('seatCapacity');
			
			//$xml1 .= "<SEATS>";
			if($seatCapacity!=''){
				$seatCap=explode(',',$seatCapacity);
				$seatStr = min($seatCap);
				$xml1 .= "<SEATCAPACITY>".$seatStr."</SEATCAPACITY>";
				/*if(end($seatCap)=='6'){
					$xml1 .= "<SEATCAPACITY>6</SEATCAPACITY>";
					array_pop($seatCap);
					$seatStr = min($seatCap);
					if($seatStr!=''){
						$seatStr = $seatStr;
					}
					else{
						$seatStr = 6;
					}
					$xml1 .= "<SEATCAPACITY>".$seatStr."</SEATCAPACITY>";
				}
				else{
					$xml1 .= "<SEATCAPACITY>6</SEATCAPACITY>";
					$seatStr = min($seatCap);
					if($seatStr!=''){
						$seatStr = $seatStr;
					}
					else{
						$seatStr = 6;
					}
					$xml1 .= "<SEATCAPACITY>".$seatStr."</SEATCAPACITY>";
				}	*/
			}
			else{
				$xml1 .= "<SEATCAPACITY>0</SEATCAPACITY>";
			}
			
			
			if($categoryID=='ALL'){ $categoryID='';}
			if($manufactureID=='ALL'){ $manufactureID='';}
			if($fuelType=='ALL'){ $fuelType='';}
			if($power_streering=='Yes,No'){ $power_streering='';}
			if($transmission=='Manual,Automatic'){ $transmission='';}
		}
		$xml1 .= "</SEATS>";
		$xml = "<ROOT><HEADER><CATEGORYID>".$categoryID."</CATEGORYID><MANUFACTUREID>".$manufactureID."</MANUFACTUREID><FUELTYPE>".$fuelType."</FUELTYPE><POWERSTEERING>".$power_streering."</POWERSTEERING><TRANSMISSION>".$transmission."</TRANSMISSION><PAGENAME>".$page."</PAGENAME><TRENDSTYPEID>".$trendsTypeID."</TRENDSTYPEID><MINPRICE>".$minprice."</MINPRICE><MAXPRICE>".$maxprice."</MAXPRICE><MAXMILEAGE>".$maxMileage."</MAXMILEAGE><MINMILEAGE>".$minMileage."</MINMILEAGE><MINDISP>".$minDisp."</MINDISP><MAXDISP>".$maxDisp."</MAXDISP><MINWAITPERIOD>".$minWaitPeriod."</MINWAITPERIOD><MAXWAITPERIOD>".$maxWaitPeriod."</MAXWAITPERIOD><MINPOW>".$minPow."</MINPOW><MAXPOW>".$maxPow."</MAXPOW>".$xml1."<DEALERID>".$dealerID."</DEALERID><CITYNAME>".$cityName."</CITYNAME><BODYTYPEID>".$bodyTypeID."</BODYTYPEID><ORDERBY>".$orderBy."</ORDERBY><EMISSIONSTANDARD>".$emissionStandard."</EMISSIONSTANDARD></HEADER></ROOT>";
		//echo htmlspecialchars($xml); exit();
		$query = $this->db->query("CALL usp_getTrendData('".$vType."','".$xml."')");
		mysqli_next_result($this->db->conn_id);
		return $query->result_array();
	}

	
	public function getCity(){
		$query=$this->db->query("select TLD.cityID,TC.cityName from tbl_locations_detail  TLD INNER JOIN tbl_cities  TC ON TLD.cityID =TC.cityID");
		mysqli_next_result($this->db->conn_id);
			return $query->result_array();
	}
	public function get_particular_vechile($mid=''){
		$varid=$this->input->post("brand_id");
		$query=$this->db->query("select distinct TPB.productID,TPB.productName from tbl_productBasic  TPB INNER JOIN  tbl_manufacture TM ON TPB.manufacturerID='".$varid."'");
		mysqli_next_result($this->db->conn_id);
		return $query->result_array();
	}
	public function get_location(){
	
		$query=$this->db->query("select locationID,location from tbl_locations_detail");
		mysqli_next_result($this->db->conn_id);
		return $query->result_array();
	}
	public function locate_a_dealer(){
	    $locid=$this->input->post("loc_id");
	    $brandID=$this->input->post("brandID");
		$query=$this->db->query("SELECT DISTINCT(TUD.userID),TUD.firstName,TUD.lastName,TUD.phone,TUD.addressLine1,TUD.addressLine2,
									TLD.location FROM tbl_userDetails TUD 
									INNER JOIN  tbl_locations_detail TLD ON TUD.locationID=TLD.locationID
									INNER JOIN tbl_productBasic PB ON TUD.manufacture = PB.manufacturerID
								WHERE TLD.locationID='".$locid."' AND PB.manufacturerID='".$brandID."'");
		mysqli_next_result($this->db->conn_id);
		return $query->result_array();
	}
	public function getBodyTypeEach($BodyType){
		$VType="ALL";		
		if($BodyType =='More'){
			$VType="MORE";
		}
		$query =$this->db->query("CALL usp_getBodyTypeEach('".$VType."','".$BodyType."')");
		mysqli_next_result($this->db->conn_id);
		return $query->result_array();		

	}
	public function get_particular_location_detail(){
		$VehicleCityID= $this->input->post('VehicleCityID');		
		$query =$this->db->query("select location,locationID from tbl_locations_detail where cityID='".$VehicleCityID."'");
		mysqli_next_result($this->db->conn_id);
		return $query->result_array();
	}

	public function getCompareInfo($vType, $catID, $makerID, $modelID){
		$retvalue = array();
		$query =$this->db->query("CALL usp_getCompareInfo('".$vType."','".$catID."','".$makerID."','".$modelID."')");
		mysqli_next_result($this->db->conn_id);
		if($vType=='detailedComparison'){
			$i=0;
			foreach($query->result() as $row){
				$retvalue[$i]['variantID']=$row->variantID;
				$retvalue[$i]['productID']=$row->productID;
				$retvalue[$i]['variantName']=$row->variantName;
				$retvalue[$i]['fueltype']=$row->fueltype;
				$retvalue[$i]['transmission']=$row->transmission;
				$retvalue[$i]['engineType']=$row->engineType;
				$retvalue[$i]['displacement']=round($row->displacement);
				$retvalue[$i]['noOfCylinders']=round($row->noOfCylinders);
				$retvalue[$i]['productLength']=round($row->productLength);
				$retvalue[$i]['productWidth']=round($row->productWidth);
				$retvalue[$i]['productHeight']=round($row->productHeight);
				$retvalue[$i]['powerBHP']=$row->powerBHP;
				$retvalue[$i]['powerRPM']=round($row->powerRPM);
				$retvalue[$i]['mileage']=$row->mileage;
				$retvalue[$i]['seatingCapacity']=round($row->seatingCapacity);
				$retvalue[$i]['torqueNm']=$row->torqueNm;
				$retvalue[$i]['torqueRPM']=round($row->torqueRPM);
				$retvalue[$i]['wheelBase']=$row->wheelBase;
				$retvalue[$i]['frontBrakeType']=$row->frontBrakeType;
				$retvalue[$i]['rearBrakeType']=$row->rearBrakeType;
				$retvalue[$i]['groundClearance']=round($row->groundClearance);
				$retvalue[$i]['minimumTurningRadius']=$row->minimumTurningRadius;
				$retvalue[$i]['fuelTankCapacity']=round($row->fuelTankCapacity);
				$retvalue[$i]['tyreType']=$row->tyreType;
				$retvalue[$i]['frontTyreSize']=$row->frontTyreSize;
				$retvalue[$i]['reartyreSize']=$row->reartyreSize;
				$retvalue[$i]['lightType']=$row->lightType;
				$retvalue[$i]['tachometer']=$row->tachometer;
				$retvalue[$i]['speedometer']=$row->speedometer;
				$retvalue[$i]['seatHeight']=$row->seatHeight;
				$retvalue[$i]['frontSuspension']=$row->frontSuspension;
				$retvalue[$i]['rearSuspension']=$row->rearSuspension;
				$retvalue[$i]['Battery']=$row->Battery;
				$retvalue[$i]['Headlamp']=$row->Headlamp;
				$retvalue[$i]['productName']=$row->productName;
				$retvalue[$i]['manufactureName']=$row->manufactureName;
				$retvalue[$i]['manufactureID']=$row->manufactureID;
				$retvalue[$i]['categoryID']=$row->categoryID;
				$retvalue[$i]['exShowroomPrice']=$this->convertNum(round($row->exShowroomPrice));
				$retvalue[$i++]['coverImage']=$row->coverImage;
			}
			return $retvalue;
		}
		else{
			return $query->result_array();	
		}
	}
	function convertNum($n) {
		// first strip any formatting;
		$n = (0+str_replace(",","",$n));
		
		// is this a number?
		if(!is_numeric($n)) return false;
		
		// now filter it;
		if($n>10000000) return round(($n/10000000),2).' Crores';
		else if($n>100000) return round(($n/100000),2).' Lakhs';
		else if($n>1000) return round(($n/1000),2).' Thousands';
		
		return number_format($n);
	}

	public function login($userName, $password){
		$retvalue = array();
		$xml = "<ROOT>
				<HEADER>
					<ACTIONTYPE>LOGIN</ACTIONTYPE>
					<USERID></USERID>
					<EMAIL>".$userName."</EMAIL>
					<ROLE>User</ROLE>
				</HEADER>
			</ROOT>";
			
		$qry = $this->db->query('CALL usp_getUsers("'.$xml.'")');
		mysqli_next_result($this->db->conn_id);
		$row = $qry->row();
		if($row){
			$password = $this->decrypt_password($row->password, $password);
			if($password == $row->password){
				$this->session->set_userdata('login',true);
				$this->session->set_userdata('userID',$row->userID);
				$this->session->set_userdata('name',$row->firstName.' '.$row->lastName);
				$this->session->set_userdata('email',$row->email);
				$this->session->set_userdata('roleID',$row->defaultRoleID);
				$this->session->set_userdata('roleName',$row->roleName);
				$totalCount=count($this->getCartDetails('ALL',$row->userID));
				$this->session->set_userdata('totalOnCart',$totalCount);
				$retvalue['message'] = 'Logged in successfully';
				$retvalue['status'] = true;
			}else{
				$retvalue['message'] = 'Invalid Username or Password';
				$retvalue['status'] = false;
			}
		}else{
			$retvalue['message'] = 'Username does not exist';
			$retvalue['status'] = false;
		}
		return $retvalue;
	}
	public function register($name,$email,$password,$phone="",$role="User",$login=false){
		$retvalue = array();
		$pwd = $this->encrypt_password($password);
		
		$xml = "<ROOT>
				<HEADER>
					<ACTIONTYPE>INSERT</ACTIONTYPE>
					<NAME>".$name."</NAME>
					<USERNAME>".$email."</USERNAME>
					<EMAIL>".$email."</EMAIL>
					<PASSWORD>".$pwd."</PASSWORD>
					<PHONE>".$phone."</PHONE>
					<ROLE>".$role."</ROLE>
				</HEADER>
			</ROOT>";
			
		$vID = mt_rand();$vMessage = mt_rand();$vStatus = mt_rand();
		//echo 'CALL usp_insUpdUsers("'.$xml.'",@'.$vMessage.',@'.$vStatus.')';exit();
		$this->db->query('CALL usp_insUpdUsers("'.$xml.'",@'.$vID.',@'.$vMessage.',@'.$vStatus.')');
		mysqli_next_result($this->db->conn_id);
		$qry = $this->db->query("SELECT @".$vID." as ID,@".$vMessage." as message,@".$vStatus." as status");
		$row = $qry->row();
		
		if($row){
			if($row->status){
				$this->session->set_flashdata('registerMessage', 'Registered Successfully');
				$this->session->set_flashdata('registerStatus', true);
				$retvalue['message'] = 'Registered Successfully';
				$retvalue['userID'] = $row->ID;
				$retvalue['status'] = true;
				//Logging 
				if($login)
					$this->login($email,$password);
			}else{
				$this->session->set_flashdata('registerMessage', 'Please try again later.');
				$this->session->set_flashdata('registerStatus', false);
				$retvalue['status'] = false;
				$retvalue['message'] = $row->message;
			}
		}
		else{
			$this->session->set_flashdata('registerMessage', 'Please try again later.');
			$this->session->set_flashdata('registerStatus', false);
			$retvalue['message'] = 'Please try again later.';
			$retvalue['status'] = false;
		}
		return $retvalue;
	}
	function getUsers($type,$userID="",$email="",$role=""){
		$retvalue = array();
		$xml = "<ROOT>
				<HEADER>
					<ACTIONTYPE>".$type."</ACTIONTYPE>
					<USERID>".$userID."</USERID>
					<EMAIL>".$email."</EMAIL>
					<ROLE>".$role."</ROLE>
				</HEADER>
			</ROOT>";
		//echo 'CALL usp_getUsers("'.$xml.'")';exit();
		$qry = $this->db->query('CALL usp_getUsers("'.$xml.'")');
		mysqli_next_result($this->db->conn_id);
		if($type == 'SP')
			return $qry->row();
		else
			return $qry->result();
	}
	function getUserBankDetails($type,$userID=""){
		$retvalue = array();
		$xml = "<ROOT>
				<HEADER>
					<ACTIONTYPE>".$type."</ACTIONTYPE>
					<USERID>".$userID."</USERID>
				</HEADER>
			</ROOT>";
		//echo 'CALL usp_getUsers("'.$xml.'")';exit();
		$qry = $this->db->query('CALL usp_getUserBankDetails("'.$xml.'")');
		mysqli_next_result($this->db->conn_id);
		if($type == 'SP')
			return $qry->row();
		else
			return $qry->result();
	}
	public function updateUserDetails($userID,$firstName,$lastName,$profilePic,$countryID,$stateID,$cityID,$address1,$address2,$locationID,$zipCode,$phone,$sEmail,$sPhone,$productCategory,$manufacture,$authDealer,$status){
		$retvalue = array();
		$xml = "<ROOT>
				<HEADER>
					<ACTIONTYPE>UPDATE</ACTIONTYPE>
					<USERID>".$userID."</USERID>
					<FIRSTNAME>".$firstName."</FIRSTNAME>
					<LASTNAME>".$lastName."</LASTNAME>
					<PROFILEPIC>".$profilePic."</PROFILEPIC>
					<COUNTRYID>".$countryID."</COUNTRYID>
					<STATEID>".$stateID."</STATEID>
					<CITYID>".$cityID."</CITYID>
					<ADDRESS1>".$address1."</ADDRESS1>
					<ADDRESS2>".$address2."</ADDRESS2>
					<LOCATIONID>".$locationID."</LOCATIONID>
					<ZIPCODE>".$zipCode."</ZIPCODE>
					<PHONE>".$phone."</PHONE>
					<SECONDARYMAIL>".$sEmail."</SECONDARYMAIL>
					<SECONDARYPHONE>".$sPhone."</SECONDARYPHONE>
					<PRODUCTCATEGORY>".$productCategory."</PRODUCTCATEGORY>
					<MANUFACTURE>".$manufacture."</MANUFACTURE>
					<AUTHDEALER>".$authDealer."</AUTHDEALER>
					<STATUS>".$status."</STATUS>
				</HEADER>
			</ROOT>";
			
		$vMessage = mt_rand();$vStatus = mt_rand();
		//echo 'CALL usp_insUpdUserDetails("'.$xml.'",@'.$vMessage.',@'.$vStatus.')';exit();
		$this->db->query('CALL usp_insUpdUserDetails("'.$xml.'",@'.$vMessage.',@'.$vStatus.')');
		mysqli_next_result($this->db->conn_id);
		$qry = $this->db->query("SELECT @".$vMessage." as message,@".$vStatus." as status");
		$row = $qry->row();
		
		if($row){
			if($row->status){
				$retvalue['message'] = 'Updated Successfully';
				$retvalue['userID'] = $userID;
				$retvalue['status'] = true;
			}else{
				$retvalue['status'] = false;
				$retvalue['message'] = $row->message;
			}
		}
		else{
			$retvalue['message'] = 'Please try again later.';
			$retvalue['status'] = false;
		}
		return $retvalue;
	}
	
	function dealer_registration(){
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$phone = $this->input->post('phone');
		$address1 = $this->input->post('address1');
		$address2 = $this->input->post('address2');
		$countryID = $this->input->post('countryID');
		$stateID = $this->input->post('stateID');
		$cityID = $this->input->post('cityID');
		$locationID = $this->input->post('locationID');
		$contactPerson = $this->input->post('contactPerson');
		$productCategory = $this->input->post('category');
		$manufacture = $this->input->post('maker');
		$authDealer = $this->input->post('authDealer');
		$login = $this->input->post('login');
		$role = 'Dealer';
		
		$retvalue = $this->register($name,$email,$password,$phone,$role,$login);
		if($retvalue['status']){
			$retvalue = $this->updateUserDetails($retvalue['userID'],$name,"","",$countryID,$stateID,$cityID,$address1,$address2,$locationID,"",$phone,"","",$productCategory,$manufacture,$authDealer,"P");
			$this->login($email,$password);
		}
		return $retvalue;
	}
	function bank_update(){
		$userID = $this->input->post('userID');
		$bankName = $this->input->post('bankName');
		$accountNumber = $this->input->post('accountNumber');
		$accountType = $this->input->post('accountType');
		$IFSC = $this->input->post('IFSC');
		$branch = $this->input->post('branch');
		$TIN = $this->input->post('TIN');
		$CIN = $this->input->post('CIN');
		$PAN = $this->input->post('PAN');
		$address = $this->input->post('address');
		
		$xml = "<ROOT>
				<HEADER>
					<ACTIONTYPE>INSERT_UPDATE</ACTIONTYPE>
					<USERID>".$userID."</USERID>
					<BANKNAME>".$bankName."</BANKNAME>
					<ACCOUNTNUMBER>".$accountNumber."</ACCOUNTNUMBER>
					<ACCOUNTTYPE>".$accountType."</ACCOUNTTYPE>
					<IFSC>".$IFSC."</IFSC>
					<BRANCH>".$branch."</BRANCH>
					<TIN>".$TIN."</TIN>
					<CIN>".$CIN."</CIN>
					<PAN>".$PAN."</PAN>
					<ADDRESS>".$address."</ADDRESS>
					<CREATEDBY>".$this->session->userdata('userID')."</CREATEDBY>
					<STATUS>P</STATUS>
				</HEADER>
			</ROOT>";
			
		$vMessage = mt_rand();$vStatus = mt_rand();
		//echo 'CALL usp_insUpdUserBankDetails("'.$xml.'",@'.$vMessage.',@'.$vStatus.')';exit();
		$this->db->query('CALL usp_insUpdUserBankDetails("'.$xml.'",@'.$vMessage.',@'.$vStatus.')');
		mysqli_next_result($this->db->conn_id);
		$qry = $this->db->query("SELECT @".$vMessage." as message,@".$vStatus." as status");
		$row = $qry->row();
		
		if($row){
			if($row->status){
				$retvalue['message'] = 'Updated Successfully';
				$retvalue['userID'] = $userID;
				$retvalue['status'] = true;
			}else{
				$retvalue['status'] = false;
				$retvalue['message'] = $row->message;
			}
		}
		else{
			$retvalue['message'] = 'Please try again later.';
			$retvalue['status'] = false;
		}
		return $retvalue;
	}
	function getProducts($type,$userID="",$productID="",$variantID="",$productType="",$manufactureID="",$slug=""){
		$xml = "<ROOT>
				<HEADER>
					<USERID>".$userID."</USERID>
					<PRODUCTID>".$productID."</PRODUCTID>
					<VARIANTID>".$variantID."</VARIANTID>
					<PRODUCTTYPE>".$productType."</PRODUCTTYPE>
					<MANUFACTUREID>".$manufactureID."</MANUFACTUREID>
					<SLUG>".$slug."</SLUG>
				</HEADER>
			</ROOT>";
		//echo "CALL usp_getProducts('".$type."','".$xml."')";
		$qry = $this->db->query('CALL usp_getProducts("'.$type.'","'.$xml.'")');
		mysqli_next_result($this->db->conn_id);
		//var_dump($qry->result()); exit();
		if($type == 'SP' || $type == 'SPV' || $type == 'SPB' || $type == 'Features' || $type == 'SOFFER' || $type == 'SLUG')
			return $qry->row();
		else
			return $qry->result();
	}
 	
	function adding_dealer_products(){
		$productID = $this->input->post('productID');
		$userID = $this->input->post('userID');
		$data = $this->input->post('data');
		$yelBoard = $this->input->post('yelBoard');
		$xml = "<ROOT>
				<HEADER>
					<ACTIONTYPE>INSERT_UPDATE</ACTIONTYPE>
					<PRODUCTID>".$productID."</PRODUCTID>
					<USERID>".$userID."</USERID>
					<CREATEDBY>".$this->session->userdata('userID')."</CREATEDBY>
					<YELBOARD>".$yelBoard."</YELBOARD>
				</HEADER>";
			foreach($data as $d){
				$xml.="<RECORD>
					<VARIANTID>".$d[0]."</VARIANTID>
					<NUMBERPLATE>".$d[1]."</NUMBERPLATE>
					<COLORID>".$d[2]."</COLORID>
					<QUANTITY>".$d[3]."</QUANTITY>
					<EXSHOWROOMPRICE>".$d[4]."</EXSHOWROOMPRICE>
					<INSURANCE>".$d[5]."</INSURANCE>
					<RTO>".$d[6]."</RTO>
					<ROADTAX>".$d[7]."</ROADTAX>
					<HANDLINGCHARGES>".$d[8]."</HANDLINGCHARGES>
					<ONROADPRICE>".$d[9]."</ONROADPRICE>
					<WAITINGDAYS>".$d[10]."</WAITINGDAYS>
					<STATUS>P</STATUS>
				</RECORD>";
			}
		$xml.="</ROOT>";
		$vMessage = mt_rand();$vStatus = mt_rand();
		//echo 'CALL usp_insUpdDealerProducts("'.$xml.'",@'.$vMessage.',@'.$vStatus.')';exit();
		$this->db->query('CALL usp_insUpdDealerProducts("'.$xml.'",@'.$vMessage.',@'.$vStatus.')');
		mysqli_next_result($this->db->conn_id);
		$qry = $this->db->query("SELECT @".$vMessage." as message,@".$vStatus." as status");
		$row = $qry->row();
		
		if($row){
			if($row->status){
				$retvalue['message'] = 'Updated Successfully';
				$retvalue['status'] = true;
			}else{
				$retvalue['status'] = false;
				$retvalue['message'] = $row->message;
			}
		}
		else{
			$retvalue['message'] = 'Please try again later.';
			$retvalue['status'] = false;
		}
		return $retvalue;
	}
	function getDealerProducts($type,$userID,$productID="",$variantID="",$colorID="",$board="",$cityName=""){
		$xml = "<ROOT>
				<HEADER>
					<ACTIONTYPE>".$type."</ACTIONTYPE>
					<USERID>".$userID."</USERID>
					<PRODUCTID>".$productID."</PRODUCTID>
					<VARIANTID>".$variantID."</VARIANTID>
					<COLORID>".$colorID."</COLORID>
					<BOARD>".$board."</BOARD>
					<CITYNAME>".$cityName."</CITYNAME>
				</HEADER>
			</ROOT>";
		$qry = $this->db->query('CALL usp_getDealerProducts("'.$xml.'")');
		mysqli_next_result($this->db->conn_id);
		if($type == 'SP')
			return $qry->row();
		else
			return $qry->result();
	}

	
	function booking(){
		$s_address1 = $this->input->post('s_address1');
		$s_address2 = $this->input->post('s_address2');
		$s_city = $this->input->post('s_city');
		$s_state = $this->input->post('s_state');
		$s_country = $this->input->post('s_country');
		$s_zip_code = $this->input->post('s_zip_code');
		$d_address1 = $this->input->post('d_address1');
		$d_address2 = $this->input->post('d_address2');
		$d_city = $this->input->post('d_city');
		$d_state = $this->input->post('d_state');
		$d_country = $this->input->post('d_country');
		$d_zip_code = $this->input->post('d_zip_code');
		$payment_method = $this->input->post('payment_method');
		$shipping_choices = $this->input->post('shipping_choices');
		$delivery_choices = $this->input->post('delivery_choices');
		$transactionDetails = $this->input->post('transactionDetails');
		$cart = $this->session->userdata('cart');
		
		$xml = "<ROOT>
				<HEADER>
					<ACTIONTYPE>INSERT</ACTIONTYPE>
					<USERID>".$this->session->userdata('userID')."</USERID>
					<PRODUCTID>".$cart['productID']."</PRODUCTID>
					<VARIANTID>".$cart['variantID']."</VARIANTID>
					<COLORID>".$cart['colorID']."</COLORID>
					<DEALERID>".$cart['dealerID']."</DEALERID>
					<QUANTITY>".$cart['qty']."</QUANTITY>
					<UNITPRICE>".$cart['unitPrice']."</UNITPRICE>
					<SHIPPINGCOST>".$cart['shippingPrice']."</SHIPPINGCOST>
					<TOTALPRICE>".$cart['totalPrice']."</TOTALPRICE>
					<SADDRESS1>".$s_address1."</SADDRESS1>
					<SADDRESS2>".$s_address2."</SADDRESS2>
					<SCITY>".$s_city."</SCITY>
					<SSTATE>".$s_state."</SSTATE>
					<SCOUNTRY>".$s_country."</SCOUNTRY>
					<SZIPCODE>".$s_zip_code."</SZIPCODE>
					<DADDRESS1>".$d_address1."</DADDRESS1>
					<DADDRESS2>".$d_address2."</DADDRESS2>
					<DCITY>".$d_city."</DCITY>
					<DSTATE>".$d_state."</DSTATE>
					<DCOUNTRY>".$d_country."</DCOUNTRY>
					<DZIPCODE>".$d_zip_code."</DZIPCODE>
					<PAYMENTMETHOD>".$payment_method."</PAYMENTMETHOD>
					<SHIPPINGCHOICES>".$shipping_choices."</SHIPPINGCHOICES>
					<DELIVERYCHOICES>".$delivery_choices."</DELIVERYCHOICES>
					<TRANSACTIONDETAILS>".$transactionDetails."</TRANSACTIONDETAILS>
					<STATUS>CONFORMED</STATUS>
				</HEADER>
			</ROOT>";
		
		$vID = mt_rand();$vMessage = mt_rand();$vStatus = mt_rand();$vrequestNO = mt_rand();
		//echo 'CALL usp_insUpdUsers("'.$xml.'",@'.$vMessage.',@'.$vStatus.')';exit();
		$this->db->query('CALL usp_insUpdBookings("'.$xml.'",@'.$vID.',@'.$vMessage.',@'.$vStatus.',@'.$vrequestNO.')');
		mysqli_next_result($this->db->conn_id);
		$qry = $this->db->query("SELECT @".$vID." as ID,@".$vMessage." as message,@".$vStatus." as status,@".$vrequestNO." as requestNo");
		$row = $qry->row();
		//Creating pdf
		//$this->create_pdf();
				
		if($row){
			if($row->status){
				$retvalue['message'] = 'Booked Successfully';
				$retvalue['bookingID'] = $row->ID;
				$this->session->set_userdata('bookingIDToUpdate',$row->ID);
				$retvalue['requestNo'] = $row->requestNo;
				$retvalue['status'] = true;
			}else{
				$retvalue['status'] = false;
				$retvalue['message'] = $row->message;
				$retvalue['requestNo'] = null;
			}
		}
		else{
			$retvalue['message'] = 'Please try again later.';
			$retvalue['status'] = false;
		}
		return $retvalue;
	}
	public function create_pdf(){
		$cart = $this->session->userdata('cart');
		if(count($cart)>0){
			$data['basic'] = $this->home_model->getProducts("SPB","",$cart['productID']);
			$data['data'] = $this->home_model->getProducts("SPV","",$cart['productID'],$cart['variantID'],$cart['colorID']);
			$data['prices'] = $this->home_model->getDealerProducts("SP",$cart['dealerID'],$cart['productID'],$cart['variantID'],$cart['colorID']);
			$xml1="<ROOT><HEADER><ACTIONTYPE>GETBOOKINGUSER</ACTIONTYPE><BOOKINGID>".$this->session->userdata('bookingIDToUpdate')."</BOOKINGID></HEADER></ROOT>";
			$query=$this->db->query('CALL usp_getUsers("'.$xml1.'")');
			mysqli_next_result($this->db->conn_id);
			$data['userData']=$query->result_array();
			$data['cart'] = $this->session->userdata('cart');
			$data['reqNo']=$this->session->userdata('reqNo');
		}
		$html=$this->load->view('home/invoice',$data,true);	
		 $userName = $this->session->userdata('name');
		$path = 'assets/invoice/';
		//checkign the path exists
		if (!is_dir($path)) {mkdir($path,0777);}
		
		$pdfFilePath = $path.$userName.date('dmyhms').".pdf";
		$xml="<ROOT><HEADER><ACTIONTYPE>UPDF</ACTIONTYPE><PDFLINK>".$pdfFilePath."</PDFLINK><UID>".$this->session->userdata('bookingIDToUpdate')."</UID></HEADER></ROOT>";
		$qu=$this->db->query('CALL usp_UpdateBookingRequest("'.$xml.'",@vresult)');
		mysqli_next_result($this->db->conn_id);
		$qry = $this->db->query("SELECT @vresult");
		$row = $qry->row();
		$this->load->library('m_pdf');
		$pdf = $this->m_pdf->load();
		$pdf->WriteHTML($html);
		$pdf->Output($pdfFilePath,'F'); 
		return $pdfFilePath;
	}

	function adding_dealer_products_offer(){
		$retvalue['status']='Failed';
		$productID = $this->input->post('productID');
		$userID = $this->input->post('userID');
		$data = $this->input->post('data');
		$yelBoard = $this->input->post('yelBoard');
		$xml = "<ROOT>
				<HEADER>
					<ACTIONTYPE>INSERT_UPDATE</ACTIONTYPE>
					<PRODUCTID>".$productID."</PRODUCTID>
					<USERID>".$userID."</USERID>
					<CREATEDBY>".$this->session->userdata('userID')."</CREATEDBY>
					<YELBOARD>".$yelBoard."</YELBOARD>
				</HEADER>";
			foreach($data as $d){
				$xml.="<RECORD>
					<VARIANTID>".$d[0]."</VARIANTID>
					<NUMBERPLATE>".$d[1]."</NUMBERPLATE>
					<COLORID>".$d[2]."</COLORID>
					<OFFER1>".$d[3]."</OFFER1>
					<OFFER2>".$d[4]."</OFFER2>
					<OFFER3></OFFER3>
					<OFFER4></OFFER4>
					<OFFER5></OFFER5>
					<OFFER6></OFFER6>
					<STATUS>P</STATUS>
				</RECORD>";
			}
		$xml.="</ROOT>";
		//echo htmlspecialchars($xml); exit();
		$vStatus = mt_rand();
		$this->db->query('CALL usp_insUpdDealerProductsOffer("'.$xml.'",@'.$vStatus.')');

		mysqli_next_result($this->db->conn_id);
		$qry = $this->db->query("SELECT @".$vStatus." as status")->result_array();
		
		if($qry[0]['status']=='Success'){
			$retvalue['status'] = 'Success';
		}
		return $retvalue;
	}
	function get_Proforma_Invoice_pdf(){
		$vStatus ="Faild";
		$proformaInvoiceID='';
		$gpi_fullname = $this->input->post('gpi_fullname');
		$gpi_phone = $this->input->post('gpi_phone');
		$gpi_emailID = $this->input->post('gpi_emailID');
		$gpi_Address = $this->input->post('gpi_address');
		$gpi_cityID = $this->input->post('gpi_city');
		$gpi_categoryID = $this->input->post('gpi_category');
		$gpi_makerID = $this->input->post('gpi_maker');
		$gpi_modelID = $this->input->post('gpi_model');
		$gpi_variantID = $this->input->post('gpi_variant');
		$gpi_dealer_nameID = $this->input->post('gpi_dealer_name');
		$gpi_CheckBox = $this->input->post('gpi_CheckBox');
		$xml = "<ROOT>
				<HEADER>
					<GPIFULLNAME>".$gpi_fullname."</GPIFULLNAME>
					<GPIPHONE>".$gpi_phone."</GPIPHONE>
					<GPIEMAILID>".$gpi_emailID."</GPIEMAILID>
					<GPIADDRESS>".$gpi_Address."</GPIADDRESS>
					<GPICITYID>".$gpi_cityID."</GPICITYID>
					<GPICATEGORYID>".$gpi_categoryID."</GPICATEGORYID>
					<GPIMAKERID>".$gpi_makerID."</GPIMAKERID>
					<GPIMODELID>".$gpi_modelID."</GPIMODELID>
					<GPIVARIANTID>".$gpi_variantID."</GPIVARIANTID>
					<GPIDEALERNAMEID>".$gpi_dealer_nameID."</GPIDEALERNAMEID>
					<GPIAGREE>".$gpi_CheckBox."</GPIAGREE>
				</HEADER>
			</ROOT>";
			$VType="INSERT";
		$this->db->query('CALL usp_insUpdProformaInvoice("'.$VType.'","'.$xml.'",@vStatus,@proformaInvoiceID)');
		$query=$this->db->query("SELECT @vStatus as status,@proformaInvoiceID as proformaInvoiceID")->result_array();
		return  $query;
		
	}
	function get_Proforma_Invoice($invoiceID){
		$vType="ALL";
		$query =$this->db->query('CALL usp_getProformaInvoice("'.$vType.'","'.$invoiceID.'")');
		mysqli_next_result($this->db->conn_id);		
		return $query->result_array();
	}
	function get_all_product_details(){
		$query =$this->db->query("select tpd.variantID,tpd.variantName,tpd.productID,tpd.fueltype,tpdm.slugName from tbl_productDetails tpd
		inner join tbl_productBasic tpb on tpb.productID = tpd.productID inner join tbl_productDM tpdm on tpdm.variantID= tpd.variantID");
		mysqli_next_result($this->db->conn_id);		
		return $query->result_array();
	}
	function category_list(){
		$query=$this->db->query("select categoryID,categoryName from tbl_category");
		mysqli_next_result($this->db->conn_id);		
		return $query->result_array();
	}
	function manufacture_list(){
		$query=$this->db->query("select tc.categoryID,tc.categoryName , tm.manufactureID,tm.manufactureName from tbl_category tc 
		left join tbl_manufacture tm on tm.categoryID = tc.categoryID");
		mysqli_next_result($this->db->conn_id);		
		return $query->result_array();
	}
	function product_basic_detail(){
		$query=$this->db->query("select tm.manufactureID,tpb.productID,tpb.productName FROM tbl_productBasic tpb
		inner join tbl_manufacture tm on tm.manufactureID = tpb.manufacturerID");
		mysqli_next_result($this->db->conn_id);		
		return $query->result_array();
	}
	function get_edit_dealer_products($vType,$variantID="",$colorID=""){
	$xml = "<ROOT>
				<HEADER>
					<VARIANTID>".$variantID."</VARIANTID>
					<COLORID>".$colorID."</COLORID>
				</HEADER>
			</ROOT>";
		//echo "CALL usp_getProducts('".$type."','".$xml."')";
		$qry = $this->db->query('CALL usp_getProducts("'.$vType.'","'.$xml.'")');
		mysqli_next_result($this->db->conn_id);
		return $qry->result_array();
	}
	function getTotalBrand(){
		$query =$this->db->query("SELECT COUNT(DISTINCT(M.manufactureID)) AS brands, 
								COUNT(DISTINCT(PB.productID)) AS models, COUNT(DISTINCT(PD.variantID)) AS variants, SUM(ROUND(quantity)) AS vehicles
								 FROM tbl_manufacture M 
								 INNER JOIN tbl_productBasic PB ON M.manufactureID=PB.manufacturerID
								 INNER JOIN tbl_productDetails PD ON PB.productID=PD.productID
								 INNER JOIN tbl_dealerProducts DP ON PD.variantID=DP.variantID;");
		mysqli_next_result($this->db->conn_id);
		return $query->result_array();
	}
	function resetPassword($vType){
		$retValue['status'] = "Failed";
		$newPassword='';
		$vResult = $this->randStrGen();
		$vID = $this->randStrGen();
		if($vType=='FORGET'){
			$emailID = $this->input->post('mail');
			$query =$this->db->query('CALL usp_resetPassword("'.$vType.'","'.$emailID.'","'.$newPassword.'",@result,@id)');
		}elseif($vType=='RESET'){
			$id = $this->input->post('id');
			$password = $this->input->post('password');
			$newPassword = $this->encrypt_password($password);
			$query =$this->db->query('CALL usp_resetPassword("'.$vType.'","'.$id.'","'.$newPassword.'",@result,@id)');
		}
		mysqli_next_result($this->db->conn_id);	
		$qry = $this->db->query("SELECT @result as ".$vResult.",@id as ".$vID);
		if($vType=='FORGET'){
			$val=$qry->result_array();
			if($val[0][$vResult]=='Success'){
				$retValue['status']='Success';
				$content='NayaGaadi Password Reset<br><a href="'.base_url().'home/resetMyPassword/RESET/'.$val[0][$vID].'">Click Here to Reset password</a>';
				$this->send_email('sales@nayagaadi.com',$emailID,'','NayaGaadi Password Reset',$content);
			}else{
				$retValue['status']='Email id not exist';
			}
		}elseif($vType=='RESET'){
			$val=$qry->result_array();
			if($val[0][$vResult]=='Success'){
				$retValue['status']='Success';
				$content='NayaGaadi Password Reseted Successfully';
				$this->send_email('sales@nayagaadi.com',$val[0][$vID],'','NayaGaadi Password Reset Successfully',$content);
			}
		}
		return $retValue;
	}
	public function get_typehead_names($key){
		$retvalue=array();$i=0;
		$query=$this->db->query("SELECT productID,productName,variantID,variantName,slugName FROM vw_productList WHERE (productName LIKE '%".$key."%' OR manufactureName LIKE '%".$key."%' OR variantName LIKE '%".$key."%') GROUP BY variantID ORDER BY productName DESC LIMIT 0,8");
		foreach($query->result() as $row){
			$retvalue[$i]['productID']= $row->productID;
			$retvalue[$i]['productName']= $row->productName;
			$retvalue[$i]['variantID']= $row->variantID;
			$retvalue[$i]['slugName']= $row->slugName;
			$retvalue[$i++]['variantName']= $row->productName.' '.$row->variantName;
		}
		return $retvalue;
	}
	public function ins_updCart($xml){
		$query=$this->db->query("call usp_insUpdCart('".$xml."',@result,@total)");
		mysqli_next_result($this->db->conn_id);		
		$query1=$this->db->query("select @result as status,@total as total");
		$query2=$query1->result_array();
		$this->session->set_userdata('totalOnCart',$query2[0]['total']);
		return $query1->result_array();
	}
	public function getCartDetails($vType,$id=''){
		$query=$this->db->query("call usp_getCartDetails('".$vType."','".$id."')");
		mysqli_next_result($this->db->conn_id);
		return $query->result_array();
	}
	public function insUpdCreditPoints(){
		$retValue['status']="Failed";
		$vType=$this->input->post('vType');
		$firstName=$this->input->post('firstName');
		$lastName=$this->input->post('lastName');
		$emailID=$this->input->post('emailID');
		$phone=$this->input->post('phone');
		$city=$this->input->post('city');
		$date=$this->input->post('date');
		$panNumber=$this->input->post('panNumber');
		$namePanNumber=$this->input->post('namePanNumber');
		$address=$this->input->post('address');
		$occupation=$this->input->post('occupation');
		$lookingFor=$this->input->post('lookingFor');
		$termsAndConditions=$this->input->post('termsAndConditions');
		$xml = "<ROOT><HEADER><ACTIONTYPE>".$vType."</ACTIONTYPE><FIRSTNAME>".$firstName."</FIRSTNAME><LASTNAME>".$lastName."</LASTNAME><EMAILID>".$emailID."</EMAILID><PHONE>".$phone."</PHONE><CITY>".$city."</CITY><DATE>".$date."</DATE><PANNUMBER>".$panNumber."</PANNUMBER><NAMEASPANNUMBER>".$namePanNumber."</NAMEASPANNUMBER><ADDRESS>".$address."</ADDRESS><OCCUPATION>".$occupation."</OCCUPATION><LOOKINGFOR>".$lookingFor."</LOOKINGFOR><TERMSANDCONDITIONS>".$termsAndConditions."</TERMSANDCONDITIONS><STATUS>Opened</STATUS></HEADER></ROOT>";
		$query=$this->db->query("call usp_insUpdCreditPoints('".$xml."',@result)");
		mysqli_next_result($this->db->conn_id);
		$query1=$this->db->query("select @result as status");
		$qRe=$query1->result_array();
		if($qRe[0]['status']=='Success'){
			$retValue['status']='Success';
		}
		return $retValue;
	}
	public function add_download_brochure($vType){
		$vresult['status'] = "Failed";
		$xml ="<ROOT>
					<HEADER>";
		$brochureFullName = $this->input->post('brochureFullName');
		$brochurephone = $this->input->post('brochurephone');
		$brochureemailID = $this->input->post('brochureemailID');
		$brochureCountry = $this->input->post('brochureCountry');
		$brochureState = $this->input->post('brochureState');
		$brochureCity = $this->input->post('brochureCity');
		$brochureCategory = $this->input->post('brochureCategory');
		$brochureMaker = $this->input->post('brochureMaker');
		$brochureModel = $this->input->post('brochureModel');
		$brochureVariant = $this->input->post('brochureVariant');
		$brochureFurtherAssistance = $this->input->post('brochureFurtherAssistance');
		$brochureTermsConditions = $this->input->post('brochureTermsConditions');			
		$xml .= "	<ACTIONTYPE>".$vType."</ACTIONTYPE>
					<BROCHUREFULLNAME>".$brochureFullName."</BROCHUREFULLNAME>
					<BROCHUREPHONE>".$brochurephone."</BROCHUREPHONE>
					<BROCHUREEMAILID>".$brochureemailID."</BROCHUREEMAILID>
					<BROCHURECOUNTRY>".$brochureCountry."</BROCHURECOUNTRY>
					<BROCHURESTATE>".$brochureState."</BROCHURESTATE>
					<BROCHURECITY>".$brochureCity."</BROCHURECITY>
					<BROCHURECATEGORY>".$brochureCategory."</BROCHURECATEGORY>
					<BROCHUREMAKER>".$brochureMaker."</BROCHUREMAKER>
					<BROCHUREMODEL>".$brochureModel."</BROCHUREMODEL>
					<BROCHUREVARIANT>".$brochureVariant."</BROCHUREVARIANT>
					<BROCHUREFURTHERASSISTANCE>".$brochureFurtherAssistance."</BROCHUREFURTHERASSISTANCE>
					<BROCHURETERMSCONDITIONS>".$brochureTermsConditions."</BROCHURETERMSCONDITIONS>
					<REQUESTEDTIME>".date('Y-m-d H:i:s')."</REQUESTEDTIME>
				</HEADER>
			</ROOT>";
			$query = $this->db->query("CALL usp_insUpdDownloadBrochure('".$xml."',@vresult)");
			mysqli_next_result($this->db->conn_id);	
			return $query->result_array();
	}

	public function get_buylaterdetail()
	{
		$query=$this->db->query("select TBL.buyLaterFullname,TBL.buyLaterPhone,TBL.buyLaterAddress,TBL.buyLateremailID,TBL.buyLaterModel,TBL.buyLaterTermsConditions,TBL.createdDateTime,TP.productName,PC.variantName,TM.manufactureName from tbl_buyLater TBL
				inner  JOIN tbl_manufacture TM on TM.manufactureID=TBL.buyLaterMaker
			  inner  JOIN tbl_productBasic TP on TP.manufacturerID=TBL.buyLaterMaker
			  inner  JOIN tbl_productDetails PC on PC.variantID=TBL.buyLaterVariant");
		mysqli_next_result($this->db->conn_id);
		return $query->result_array();
	}
	public function insUpdBuyLaterModel(){
		$vType="INSERT";
		$buyLaterFullname = $this->input->post('buy_later_fullname');
		$buyLaterPhone = $this->input->post('buylater_phone');
		$buyLaterAddress = $this->input->post('buy_address');
		$buyLateremailID = $this->input->post('buy_later_emailID');
		$buyLaterCity = $this->input->post('buylaterCity');
		$buyLaterMaker = $this->input->post('buylaterMaker');
		$buyLaterModel = $this->input->post('buylaterModel');
		$buyLaterVariant = $this->input->post('buylaterVariant');
		$buyLaterTermsConditions = $this->input->post('buylaterTermsConditions');
		$xml = "<ROOT><HEADER>
				<BUYLATERFULLNAME>".$buyLaterFullname."</BUYLATERFULLNAME>
				<BUYLATERPHONE>".$buyLaterPhone."</BUYLATERPHONE>
				<BUYLATERADDRESS>".$buyLaterAddress."</BUYLATERADDRESS>
				<BUYLATEREMAILID>".$buyLateremailID."</BUYLATEREMAILID>
				<BUYLATERCITYID>".$buyLaterCity."</BUYLATERCITYID>
				<BUYLATERMARKERID>".$buyLaterMaker."</BUYLATERMARKERID>
				<BUYLATERMODELID>".$buyLaterModel."</BUYLATERMODELID>
				<BUYLATERVARIANTID>".$buyLaterVariant."</BUYLATERVARIANTID>
				<BUYLATERTC>".$buyLaterTermsConditions."</BUYLATERTC>
				<BUYLATERSTATUS>"."UNFOLLOW"."</BUYLATERSTATUS>				
			</HEADER>
			</ROOT>";
			$query = $this->db->query("CALL usp_insUpdBuylater('".$vType."','".$xml."',@vresult)");
			
			mysqli_next_result($this->db->conn_id);	
			var_dump($query );exit();
			return $query->result_array();

	}
}

?>