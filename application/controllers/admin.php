<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('home_model');
		$this->load->model('manage_products_model');
		$this->load->model('dashboard_model');
	}
	public function admin_dashboard()
	{		
		$pageData['currentPage'] = 'DASHBOARD';
		$data['header'] = $this->load->view('templates/admin_header',$pageData,true);
		$data['corporateDealsCount'] = $this->dashboard_model->getCorporateDetailsRequest('COUNTS','');
		$data['vehicleLoanCount'] = $this->dashboard_model->getVehicleLoanRequest('COUNTS','');
		$data['advanceBookingCount'] = $this->dashboard_model->getAdvanceBookingRequest('COUNTS','');
		$data['roadAssistanceCount'] = $this->dashboard_model->getRoadAssistanceRequest('COUNTS','');
		$this->load->view('admin/admin_dashboard',$data);
	}
	public function request_list($page)
	{		
		$pageData['currentPage'] = 'DASHBOARD';
		$data['header'] = $this->load->view('templates/admin_header',$pageData,true);
		$data['page']=$page;
		if($page=='Corporate'){
			$data['Name'] = "Corporate Deals ";
			$data['counts'] = $this->dashboard_model->getCorporateDetailsRequest('COUNTS','');
			$data['details'] = $this->dashboard_model->getCorporateDetailsRequest('ALL','');
		}elseif($page=='VehicleLoan'){
			$data['Name'] = "Vehicle Loan ";
			$data['counts'] = $this->dashboard_model->getVehicleLoanRequest('COUNTS','');
			$data['details'] = $this->dashboard_model->getVehicleLoanRequest('ALL','');
		}elseif($page=='AdvanceBooking'){
			$data['Name'] = "Advance Booking ";
			$data['counts'] = $this->dashboard_model->getAdvanceBookingRequest('COUNTS','');
			$data['details'] = $this->dashboard_model->getAdvanceBookingRequest('ALL','');
		}elseif($page=='RASSISTANCE'){
			$data['Name'] = "Road Assistance ";
			$data['counts'] = $this->dashboard_model->getRoadAssistanceRequest('COUNTS','');
			$data['details'] = $this->dashboard_model->getRoadAssistanceRequest('ALL','');
		}
		$this->load->view('admin/request_list',$data);
	}
	public function request_report($page,$id)
	{		
		$data['page']=$page;
		$pageData['currentPage'] = 'DASHBOARD';
		$data['header'] = $this->load->view('templates/admin_header',$pageData,true);
		if($page=='Corporate'){
			$data['Name'] = "Corporate Deals ";
			$data['counts'] = $this->dashboard_model->getCorporateDetailsRequest('COUNTS','');
			$data['details'] = $this->dashboard_model->getCorporateDetailsRequest('ONE',$id);
		}elseif($page=='VehicleLoan'){
			$data['Name'] = "Vehicle Loan ";
			$data['counts'] = $this->dashboard_model->getVehicleLoanRequest('COUNTS','');
			$data['details'] = $this->dashboard_model->getVehicleLoanRequest('ONE',$id);
		}elseif($page=='AdvanceBooking'){
			$data['Name'] = "Advance Booking ";
			$data['counts'] = $this->dashboard_model->getAdvanceBookingRequest('COUNTS','');
			$data['details'] = $this->dashboard_model->getAdvanceBookingRequest('ONE',$id);
		}elseif($page=='RASSISTANCE'){
			$data['Name'] = "Road Assistance ";
			$data['counts'] = $this->dashboard_model->getRoadAssistanceRequest('COUNTS','');
			$data['details'] = $this->dashboard_model->getRoadAssistanceRequest('ONE',$id);
		}
		$this->load->view('admin/request_report',$data);
	}
	public function add_location($locationID=''){
		$pageData['currentPage'] = 'MANAGE PRODUCT';
		$data['header'] = $this->load->view('templates/admin_header',$pageData,true);
		$data['footer'] = $this->load->view('templates/footer',$pageData,true);
		$data['COUNTRY']= $this->manage_products_model->location_detail('COUNTRY');
		$data['STATES']= $this->manage_products_model->location_detail('STATES');
		$data['CITIES']= $this->manage_products_model->location_detail('CITIES');	
		$data['locationDetail']= $this->manage_products_model->location_detail('A_PUB_LOC');	
		$data['edit_locations']= $this->manage_products_model->location_detail('LOC_D',$locationID);
		$this->load->view('admin/products/add_location',$data);
	}
	public function save_location_detail()	{						
		echo json_encode($this->manage_products_model->save_location_detail());
	}
	public function add_manufacture($manufactureID=''){
		$pageData['currentPage'] = 'MANAGE PRODUCT';
		$data['header'] = $this->load->view('templates/admin_header',$pageData,true);
		$data['footer'] = $this->load->view('templates/footer',$pageData,true);
		$data['editmanufactureDetails']= $this->manage_products_model->getManufatureDetails('ONE',$manufactureID);
		$data['manufactureDetails']= $this->manage_products_model->getManufatureDetails('ALL');
		$this->load->view('admin/products/add_manufacture',$data);
	}
	public function add_modify_manufactureDetails()	{						
		echo json_encode($this->manage_products_model->add_modify_manufactureDetails());
	}
	public function add_modify_categoryDetails()	{						
		echo json_encode($this->manage_products_model->add_modify_categoryDetails());
	}
	public function add_modify_bodyTypeDetails()	{						
		echo json_encode($this->manage_products_model->add_modify_bodyTypeDetails());
	}
	public function upload_files($type){ 
		$file = $_FILES['files'];
		$retvalue['path'] = $this->home_model->upload_file($file, $type);
		echo json_encode($retvalue);
	}
	public function add_category($categoryID=''){
		$pageData['currentPage'] = 'MANAGE PRODUCT';
		$data['header'] = $this->load->view('templates/admin_header',$pageData,true);
		$data['footer'] = $this->load->view('templates/footer',$pageData,true);
		$data['editcategoryDetails']= $this->manage_products_model->getCategoryDetails('ONE',$categoryID);
		$data['categoryDetails']= $this->manage_products_model->getCategoryDetails('ALL');
		$this->load->view('admin/products/add_category',$data);
	}
	public function add_body_type($bodyTypeID=''){
		$pageData['currentPage'] = 'MANAGE PRODUCT';
		$data['header'] = $this->load->view('templates/admin_header',$pageData,true);
		$data['footer'] = $this->load->view('templates/footer',$pageData,true);
		$data['categoryDetails']= $this->manage_products_model->getCategoryDetails('ALL');
		$data['editbodyTypeDetails']= $this->manage_products_model->getBodyTypeDetails('ONE',$bodyTypeID);
		$data['bodyTypeDetails']= $this->manage_products_model->getBodyTypeDetails('ALL');
		$this->load->view('admin/products/add_body_type',$data);
	}
	public function add_products(){
		$pageData['currentPage'] = 'MANAGE PRODUCT';
		$data['header'] = $this->load->view('templates/admin_header',$pageData,true);
		$data['footer'] = $this->load->view('templates/footer',$pageData,true);
		$data['getMakers'] = $this->manage_products_model->getManufatureDetails('ALL');
		$data['getCategory'] = $this->manage_products_model->getCategoryDetails('ALL');
		$this->load->view('admin/products/add_products',$data);
	}
	public function upload_products_list()	{						
		echo json_encode($this->manage_products_model->upload_products_list());
	}
	public function getCorporateDetailsRequest($vType,$CID=''){
		echo json_encode($this->dashboard_model->getCorporateDetailsRequest($vType,$CID));
	}
	public function getVehicleLoanRequest($vType,$VID=''){
		echo json_encode($this->dashboard_model->getVehicleLoanRequest($vType,$VID));
	}
	public function getAdvanceBookingRequest($vType,$AbID=''){
		echo json_encode($this->dashboard_model->getAdvanceBookingRequest($vType,$AbID));
	}
	public function getRoadAssistanceRequest($vType,$RaID=''){
		echo json_encode($this->dashboard_model->getRoadAssistanceRequest($vType,$RaID));
	}
}
