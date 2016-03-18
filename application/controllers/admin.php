<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('home_model');
		$this->load->model('manage_products_model');
	}
	public function admin_dashboard()
	{		
		$pageData['currentPage'] = 'DASHBOARD';
		$data['header'] = $this->load->view('templates/admin_header',$pageData,true);
		$this->load->view('admin/admin_dashboard',$data);
	}
	public function request_list()
	{		
		$pageData['currentPage'] = 'DASHBOARD';
		$data['header'] = $this->load->view('templates/admin_header',$pageData,true);
		$this->load->view('admin/request_list',$data);
	}
	public function request_report()
	{		
		$pageData['currentPage'] = 'DASHBOARD';
		$data['header'] = $this->load->view('templates/admin_header',$pageData,true);
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
}
