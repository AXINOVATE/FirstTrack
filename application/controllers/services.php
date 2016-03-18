<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Services extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('home_model');
		$this->load->model('services_model');
	}

		
	public function advanced_booking(){		
		 $this->services_model->advance_booking();
	}
	public function getMakerDetail($vType,$mID=''){						
		echo json_encode($this->home_model->getMakerDetail($vType,$mID=''));
	}
	public function getModelDetail($vType,$moID='',$maID=''){						
		echo json_encode($this->home_model->getModelDetail($vType,$moID='',$maID=''));
	}
	public function getVariantDetail($vType,$vID=''){						
		echo json_encode($this->home_model->getVariantDetail($vType,$vID=''));
	}
	
}
