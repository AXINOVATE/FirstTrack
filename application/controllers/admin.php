<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
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
	public function add_products(){
		$pageData['currentPage'] = 'MANAGE PRODUCT';
		$data['header'] = $this->load->view('templates/admin_header',$pageData,true);
		$data['footer'] = $this->load->view('templates/footer',$pageData,true);
		$this->load->view('admin/products/add_products',$data);
	}
}
