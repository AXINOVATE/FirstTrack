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
	
	public function register(){
		
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$password = $this->encrypt_password($this->input->post('password'));
		$phone = $this->input->post('phone');
		
		$xml = "<ROOT>
				<HEADER>
					<NAME>".$name."</NAME>
					<EMAIL>".$email."</EMAIL>
					<PASSWORD>".$password."</PASSWORD>
					<PHONE>".$phone."</PHONE>
				</HEADER>
			</ROOT>";
			
		$qry = $this->db->query('CALL usp_insUpdSignUp("'.$xml.'",@vresult)');
			
	}

}
?>