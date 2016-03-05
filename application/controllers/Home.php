<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	public function index()
	{		
		$pageData['currentPage'] = 'HOME';
		$data['header'] = $this->load->view('templates/header',$pageData,true);
		$this->load->view('home/index',$data);
	}
	public function latest()
	{
		$pageData['currentPage'] = 'LATEST';
		$data['header'] = $this->load->view('templates/header',$pageData,true);
		$this->load->view('home/latest_list',$data);
	}
	public function popular()
	{
		$pageData['currentPage'] = 'POPULAR';
		$data['header'] = $this->load->view('templates/header',$pageData,true);
		$this->load->view('home/popular_list',$data);
	}
	public function upcoming()
	{
		$pageData['currentPage'] = 'UPCOMING';
		$data['header'] = $this->load->view('templates/header',$pageData,true);
		$this->load->view('home/upcoming_list',$data);
	}
	public function details()
	{
		$pageData['currentPage'] = 'LIST';
		$data['header'] = $this->load->view('templates/header',$pageData,true);
		$this->load->view('home/details',$data);
	}
	public function search()
	{
		$pageData['currentPage'] = 'SEARCH';
		$data['header'] = $this->load->view('templates/header',$pageData,true);
		$this->load->view('home/search',$data);
	}
	public function news()
	{
		$pageData['currentPage'] = 'NEWS';
		$data['header'] = $this->load->view('templates/header',$pageData,true);
		$this->load->view('home/news',$data);
	}
	public function compare()
	{
		$pageData['currentPage'] = 'COMPARE';
		$data['header'] = $this->load->view('templates/header',$pageData,true);
		$this->load->view('home/compare',$data);
	}
	public function detailed_comparison()
	{
		$pageData['currentPage'] = 'COMPARE';
		$data['header'] = $this->load->view('templates/header',$pageData,true);
		$this->load->view('home/detailed_comparison',$data);
	}
	public function edit_product()
	{
		$pageData['currentPage'] = 'HOME';
		$data['header'] = $this->load->view('templates/header',$pageData,true);
		$this->load->view('admin/products/edit_products',$data);
	}

	public function add_modify_location()
	{
		$pageData['currentPage'] = 'HOME';
		$data['header'] = $this->load->view('templates/header',$pageData,true);
		$this->load->view('admin/products/add_modify_location',$data);
	}
	public function add_modify_manufacture()
	{
		$pageData['currentPage'] = 'HOME';
		$data['header'] = $this->load->view('templates/header',$pageData,true);
		$this->load->view('admin/products/add_modify_manufacture',$data);
	}
	public function add_modify_product_type()
	{
		$pageData['currentPage'] = 'HOME';
		$data['header'] = $this->load->view('templates/header',$pageData,true);
		$this->load->view('admin/products/add_modify_product_type',$data);
	}
	public function add_modify_body_type()
	{
		$pageData['currentPage'] = 'HOME';
		$data['header'] = $this->load->view('templates/header',$pageData,true);
		$this->load->view('admin/products/add_modify_body_type',$data);
	}
	public function add_modify_product()
	{
		$pageData['currentPage'] = 'HOME';
		$data['header'] = $this->load->view('templates/header',$pageData,true);
		$this->load->view('admin/products/add_modify_product',$data);
	}
	public function news_detail()
	{
		$pageData['currentPage'] = 'NEWS';
		$data['header'] = $this->load->view('templates/header',$pageData,true);
		$this->load->view('home/news_detail',$data);

	}
	public function view_ealers_products()
	{
		$pageData['currentPage'] = 'NEWS';
		$data['header'] = $this->load->view('templates/header',$pageData,true);
		$this->load->view('admin/products/manage_product/view_ealers_products',$data);

	}
	public function add_dealer_products()
	{
		$pageData['currentPage'] = 'NEWS';
		$data['header'] = $this->load->view('templates/header',$pageData,true);
		$this->load->view('admin/products/manage_product/add_dealer_products',$data);
	}
	public function add_products()
	{
		$pageData['currentPage'] = 'NEWS';
		$data['header'] = $this->load->view('templates/header',$pageData,true);
		$this->load->view('admin/products/manage_product/add_products',$data);
	}
	public function add_dealers_locations()
	{
		$pageData['currentPage'] = 'NEWS';
		$data['header'] = $this->load->view('templates/header',$pageData,true);
		$this->load->view('admin/products/dealers_locations/add_dealers_locations',$data);
	}
}
