<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Services extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('home_model');
		$this->load->model('services_model');
		$this->load->model('manage_products_model');
	}
	public function advanced_booking(){		
		 $this->services_model->advance_booking();
	}
	public function get_city(){
		echo json_encode($this->manage_products_model->location_detail('CITIES'));
	}
	public function getModelDetail($vType,$moID='',$maID=''){						
		echo json_encode($this->home_model->getModelDetail($vType,$moID='',$maID=''));
	}
	public function getVariantDetail($vType,$vID=''){						
		echo json_encode($this->home_model->getVariantDetail($vType,$vID=''));
	}
	
}
