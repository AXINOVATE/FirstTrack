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
		$pageData['currentPage'] = 'HOME';
		$data['header'] = $this->load->view('templates/header',$pageData,true);
		$this->load->view('admin/admin_dashboard',$data);
	}
	public function request_list()
	{		
		$pageData['currentPage'] = 'HOME';
		$data['header'] = $this->load->view('templates/header',$pageData,true);
		$this->load->view('admin/request_list',$data);
	}
	public function request_report()
	{		
		$pageData['currentPage'] = 'HOME';
		$data['header'] = $this->load->view('templates/header',$pageData,true);
		$this->load->view('admin/request_report',$data);
	}
}