<?php 
class Home_model extends CI_Model{
		
	/**
	 * @return void
	 **/
	public function __construct(){
		parent::__construct();
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
	
	public function login($userName,$password){
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
		$row = $qry->row();
		if($row){
			$password = $this->decrypt_password($row->password, $password);
			
			if($password == $row->password){
				$this->session->set_userdata('login',true);
				$this->session->set_userdata('userID',$row->userID);
				$this->session->set_userdata('name',$row->firstName.' '.$row->lastName);
				$this->session->set_userdata('email',$row->email);
				$this->session->set_userdata('roleID',$row->defaultRoleID);
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
	public function register(){
		$retvalue = array();
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$password = $this->encrypt_password($this->input->post('password'));
		$phone = $this->input->post('phone');
		
		$xml = "<ROOT>
				<HEADER>
					<ACTIONTYPE>INSERT</ACTIONTYPE>
					<NAME>".$name."</NAME>
					<USERNAME>".$email."</USERNAME>
					<EMAIL>".$email."</EMAIL>
					<PASSWORD>".$password."</PASSWORD>
					<PHONE>".$phone."</PHONE>
					<ROLE>User</ROLE>
				</HEADER>
			</ROOT>";
			
		$vMessage = mt_rand();$vStatus = mt_rand();
		//echo 'CALL usp_insUpdUsers("'.$xml.'",@'.$vMessage.',@'.$vStatus.')';exit();
		$this->db->query('CALL usp_insUpdUsers("'.$xml.'",@'.$vMessage.',@'.$vStatus.')');
		$qry = $this->db->query("SELECT @".$vMessage." as message,@".$vStatus." as status");
		$row = $qry->row();
		
		if($row){
			if($row->status){
				$this->session->set_flashdata('registerMessage', 'Registered Successfully');
				$this->session->set_flashdata('registerStatus', true);
				$retvalue['message'] = 'Registered Successfully';
				$retvalue['status'] = true;
				//Logging 
				$this->login($email,$this->input->post('password'));
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
	public function getModelDetail($vType,$moID='',$maID=''){		
		$query = $this->db->query("CALL usp_getModelDetail('".$vType."','".$moID."','".$maID."')");
		mysqli_next_result($this->db->conn_id);
		return $query->result_array();
	}
	public function getVariantDetail($vType,$vID=''){
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
					</HEADER>
				</ROOT>";
			$rndS=$this->randStrGen();
			$query = $this->db->query("CALL usp_insUpdInstantQuote('".$xml."',@vresult)");
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
	public function getTrendData($vType,$xml=''){
		$categoryID='';
		if(isset($_POST)){
			$categoryID=$this->input->post('categoryID');
			$manufactureID=$this->input->post('manufactureID');
			$fuelType=$this->input->post('fuelType');
			$power_streering=$this->input->post('power_streering');
			$transmission=$this->input->post('transmission');
			if($categoryID=='ALL'){ $categoryID='';}
			if($manufactureID=='ALL'){ $manufactureID='';}
			if($fuelType=='ALL'){ $fuelType='';}
			if($power_streering=='Yes,No'){ $power_streering='';}
			if($transmission=='Manual,Automatic'){ $transmission='';}
		}
		$xml = "<ROOT><HEADER><CATEGORYID>".$categoryID."</CATEGORYID><MANUFACTUREID>".$manufactureID."</MANUFACTUREID><FUELTYPE>".$fuelType."</FUELTYPE><POWERSTEERING>".$power_streering."</POWERSTEERING><TRANSMISSION>".$transmission."</TRANSMISSION></HEADER></ROOT>";
		$query = $this->db->query("CALL usp_getTrendData('".$vType."','".$xml."')");
		mysqli_next_result($this->db->conn_id);
		return $query->result_array();
	}
	
	public function getCity(){
		$query=$this->db->query("select TLD.cityID,TC.cityName from tbl_locations_detail  TLD INNER JOIN tbl_cities  TC ON TLD.cityID =TC.cityID");
		mysqli_next_result($this->db->conn_id);
			return $query->result_array();
		
	}
}

?>