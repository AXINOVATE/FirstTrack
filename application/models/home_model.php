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
}

?>