<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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
		 
	public function __construct(){
		parent::__construct();
		$this->load->model('home_model');
		$this->load->model('manage_products_model');
		//$this->load->database();	
	}

		
	public function index(){		
		$pageData['currentPage'] = 'HOME';
		$data['header'] = $this->load->view('templates/header',$pageData,true);
		$data['footer'] = $this->load->view('templates/footer',$pageData,true);
		$data['Car'] = $this->home_model->getBodyTypeEach('Car');
		$data['Bike'] = $this->home_model->getBodyTypeEach('Bike');
		$data['More'] = $this->home_model->getBodyTypeEach('More');
		$data['getShowcaseProducts'] = $this->manage_products_model->getProducts('SHOWCASE_ACTIVE','');
		$this->load->view('home/index',$data);
	}
	public function login(){		
		$pageData['currentPage'] = 'LOGIN';
		if($this->session->userdata('login'))redirect(base_url());
		$data['header'] = $this->load->view('templates/header',$pageData,true);
		$data['footer'] = $this->load->view('templates/footer',$pageData,true);
		$this->load->view('home/login',$data);
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
	public function login_check(){
		echo json_encode($this->home_model->login($this->input->post('username'),$this->input->post('password')));
	}

	public function register(){
		echo json_encode($this->home_model->register());
	}
	public function latest(){
		$pageData['currentPage'] = 'LATEST';
		$data['header'] = $this->load->view('templates/header',$pageData,true);
		$data['footer'] = $this->load->view('templates/footer',$pageData,true);
		$data['categoryDetails']= $this->manage_products_model->getCategoryDetails('ALL');
		$data['manufactureDetails']= $this->manage_products_model->getManufatureDetails('ALL');
		$data['trendDetails']= $this->home_model->getTrendData('ALL');
		$this->load->view('home/latest_list',$data);
	}
	public function popular(){
		$pageData['currentPage'] = 'POPULAR';
		$data['header'] = $this->load->view('templates/header',$pageData,true);
		$data['footer'] = $this->load->view('templates/footer',$pageData,true);
		$this->load->view('home/popular_list',$data);
	}
	public function upcoming(){
		$pageData['currentPage'] = 'UPCOMING';
		$data['header'] = $this->load->view('templates/header',$pageData,true);
		$data['footer'] = $this->load->view('templates/footer',$pageData,true);
		$this->load->view('home/upcoming_list',$data);
	}
	public function details(){
		$pageData['currentPage'] = 'LIST';
		$data['header'] = $this->load->view('templates/header',$pageData,true);
		$data['footer'] = $this->load->view('templates/footer',$pageData,true);
		$this->load->view('home/details',$data);
	}
	public function search(){
		$pageData['currentPage'] = 'SEARCH';
		$data['header'] = $this->load->view('templates/header',$pageData,true);
		$data['footer'] = $this->load->view('templates/footer',$pageData,true);
		$this->load->view('home/search',$data);
	}
	public function news(){
		$pageData['currentPage'] = 'NEWS';
		$data['header'] = $this->load->view('templates/header',$pageData,true);
		$data['footer'] = $this->load->view('templates/footer',$pageData,true);
		$this->load->view('home/news',$data);
	}
	public function review(){
		$pageData['currentPage'] = 'REVIEW';
		$data['header'] = $this->load->view('templates/header',$pageData,true);
		$data['footer'] = $this->load->view('templates/footer',$pageData,true);
		$this->load->view('home/review',$data);
	}
	public function compare(){
		$pageData['currentPage'] = 'COMPARE';
		$data['header'] = $this->load->view('templates/header',$pageData,true);
		$data['footer'] = $this->load->view('templates/footer',$pageData,true);
		$this->load->view('home/compare',$data);
	}
	public function detailed_comparison(){
		$pageData['currentPage'] = 'COMPARE';
		$data['header'] = $this->load->view('templates/header',$pageData,true);
		$data['footer'] = $this->load->view('templates/footer',$pageData,true);
		$this->load->view('home/detailed_comparison',$data);
	}
	
	public function get_particular_states()
	{
		$country_id= $this->input->post('country_id');		
		echo json_encode($this->manage_products_model->get_particular_states($country_id));
	}
	public function get_particular_city()	{
		$state_id= $this->input->post('states_id');		
		echo json_encode($this->manage_products_model->get_particular_city($state_id));
	}
	public function product_news($id=""){
		$pageData['currentPage'] = 'NEWS';
		$data['header'] = $this->load->view('templates/header',$pageData,true);
		$data['footer'] = $this->load->view('templates/footer',$pageData,true);
		$data['getShowcaseProducts'] = $this->manage_products_model->getProducts('SHOWCASE_DETAIL',$id);
		//var_dump($data['getShowcaseProducts']); exit();
		$this->load->view('home/product_news',$data);
	}
	public function view_dealers_products(){
		$pageData['currentPage'] = 'MANAGE DEALERS';
		$data['header'] = $this->load->view('templates/admin_header',$pageData,true);
		$data['footer'] = $this->load->view('templates/footer',$pageData,true);
		$this->load->view('admin/products/manage_product/view_dealers_products',$data);
	}
	public function add_dealer_products(){
		$pageData['currentPage'] = 'MANAGE DEALERS';
		$data['header'] = $this->load->view('templates/admin_header',$pageData,true);
		$data['footer'] = $this->load->view('templates/footer',$pageData,true);
		$this->load->view('admin/products/manage_product/add_dealer_products',$data);
	}
	public function add_products(){
		$pageData['currentPage'] = 'NEWS';
		$data['header'] = $this->load->view('templates/header',$pageData,true);
		$this->load->view('admin/products/manage_product/add_products',$data);
	}
	public function md_add_dealers(){
		$pageData['currentPage'] = 'NEWS';
		$data['header'] = $this->load->view('templates/admin_header',$pageData,true);
		$data['footer'] = $this->load->view('templates/footer',$pageData,true);
		$this->load->view('admin/manage_dealers/md_add_dealers',$data);
	}
	public function md_view_dealers_and_products(){
		$pageData['currentPage'] = 'NEWS';
		$data['header'] = $this->load->view('templates/admin_header',$pageData,true);
		$data['footer'] = $this->load->view('templates/footer',$pageData,true);
		$this->load->view('admin/manage_dealers/md_view_dealers_and_products',$data);
	}
	public function md_add_dealer_products(){
		$pageData['currentPage'] = 'NEWS';
		$data['header'] = $this->load->view('templates/admin_header',$pageData,true);
		$data['footer'] = $this->load->view('templates/footer',$pageData,true);
		$this->load->view('admin/manage_dealers/md_add_dealer_products',$data);
	}
	public function md_sign_up_page_dealers(){
		$pageData['currentPage'] = '';
		$data['header'] = $this->load->view('templates/admin_header',$pageData,true);
		$data['footer'] = $this->load->view('templates/footer',$pageData,true);
		$this->load->view('admin/manage_dealers/md_sign_up_page_dealers',$data);
	}
	
	public function add_dealers_locations(){
		$pageData['currentPage'] = 'NEWS';
		$data['header'] = $this->load->view('templates/header',$pageData,true);
		$data['footer'] = $this->load->view('templates/footer',$pageData,true);
		$this->load->view('admin/products/dealers_locations/add_dealers_locations',$data);
	}
	public function locate_dealer(){
		$pageData['currentPage'] = 'TOOLS';
		$data['header'] = $this->load->view('templates/header',$pageData,true);
		$data['footer'] = $this->load->view('templates/footer',$pageData,true);
		$this->load->view('home/locate_dealer',$data);
	}
	public function service_cost_analyzer(){
		$pageData['currentPage'] = 'TOOLS';
		$data['header'] = $this->load->view('templates/header',$pageData,true);
		$data['footer'] = $this->load->view('templates/footer',$pageData,true);
		$this->load->view('admin/service_cost_analyzer',$data);
	}
	public function emi_calculator(){
		$pageData['currentPage'] = 'TOOLS';
		$data['header'] = $this->load->view('templates/header',$pageData,true);
		$data['footer'] = $this->load->view('templates/footer',$pageData,true);
		$this->load->view('home/emi_calculator',$data);
	}
	public function checkout(){
		$pageData['currentPage'] = '';
		$data['header'] = $this->load->view('templates/header',$pageData,true);
		$data['footer'] = $this->load->view('templates/footer',$pageData,true);
		$this->load->view('home/checkout',$data);
	}
	public function conformation(){
		$pageData['currentPage'] = '';
		$data['header'] = $this->load->view('templates/header',$pageData,true);
		$data['footer'] = $this->load->view('templates/footer',$pageData,true);
		$this->load->view('home/conformation',$data);
	}
	public function get_Proforma_Invoice_pdf(){
		$data['gpi_fullname'] = $this->input->post('gpi_fullname');
		$data['gpi_phone'] = $this->input->post('gpi_phone');
		$data['gpi_emailID'] = $this->input->post('gpi_emailID');
		$data['gpi_Address'] = $this->input->post('gpi_Address');
		$data['company_name'] ="PRERANA MOTORS(P) LTD.,";
		$html=$this->load->view('admin/get_Proforma_Invoice_pdf',$data,true);
		//echo htmlspecialchars($html);exit();
		$pdfFilePath = "Proforma_Invoice.pdf";
		//load mPDF library
		$this->load->library('m_pdf');
		//actually, you can pass mPDF parameter on this load() function
		$pdf = $this->m_pdf->load();
		//generate the PDF!
		$pdf->WriteHTML($html);
		//offer it to user via browser download! (The PDF won't be saved on your server HDD)
		$pdf->Output();
	}
	public function get_Proforma_Invoice_pdf_download(){
		$data['company_name'] ="PRERANA MOTORS(P) LTD.,";
		$html=$this->load->view('admin/get_Proforma_Invoice_pdf',$data,true);	
		$pdfFilePath = "Proforma_Invoice.pdf";
		//load mPDF library
		$this->load->library('m_pdf');
		//actually, you can pass mPDF parameter on this load() function
		$pdf = $this->m_pdf->load();
		//generate the PDF!
		$pdf->WriteHTML($html);
		//offer it to user via browser download! (The PDF won't be saved on your server HDD)		
		$pdf->Output($pdf,'D');
	}
	function edit_dealer_info(){
		$pageData['currentPage'] = '';
		$data['header'] = $this->load->view('templates/admin_header',$pageData,true);
		$data['footer'] = $this->load->view('templates/footer',$pageData,true);
		$this->load->view('admin/manage_dealers/edit_dealer_info',$data);
	}
	function manage_dealers(){
		$pageData['currentPage'] = '';
		$data['header'] = $this->load->view('templates/admin_header',$pageData,true);
		$data['footer'] = $this->load->view('templates/footer',$pageData,true);
		$this->load->view('admin/manage_dealers/manage_dealers1',$data);
	}
	public function deals(){
		$pageData['currentPage'] = '';
		$data['header'] = $this->load->view('templates/header',$pageData,true);
		$data['footer'] = $this->load->view('templates/footer',$pageData,true);
		$this->load->view('home/deals',$data);
	}
	public function customer_care(){
		$pageData['currentPage'] = '';
		$data['header'] = $this->load->view('templates/header',$pageData,true);
		$data['footer'] = $this->load->view('templates/footer',$pageData,true);
		$this->load->view('home/customer_care',$data);
	}
	public function manage_product(){
		$pageData['currentPage'] = 'NEWS';
		$data['header'] = $this->load->view('templates/header',$pageData,true);
		$data['footer'] = $this->load->view('templates/footer',$pageData,true);
		$this->load->view('admin/dealers/manage_product',$data);
	}
	public function edit_add_dealer_product(){
		$pageData['currentPage'] = 'NEWS';
		$data['header'] = $this->load->view('templates/header',$pageData,true);
		$data['footer'] = $this->load->view('templates/footer',$pageData,true);
		$this->load->view('admin/dealers/edit_add_dealer_product',$data);
	}
	public function location_detail($Vtype='',$vid='')	{
		echo json_encode($this->manage_products_model->location_detail($Vtype,$vid));
	}
	public function get_category_detail($Vtype='')	{
		echo json_encode($this->manage_products_model->getCategoryDetails($Vtype));
	}
	public function get_manufacture_detail($Vtype='')	{
		echo json_encode($this->manage_products_model->getManufatureDetails($Vtype));
	}
	public function add_vehicle_loan(){
		echo json_encode($this->home_model->add_vehicle_loan());
	}

	public function add_by_on_road_assistance()	{
		echo json_encode($this->home_model->add_by_on_road_assistance());
	}
	public function add_corporate_deals(){
		echo json_encode($this->home_model->add_corporate_deals());

	}
	public function add_insurance_details(){
		
		echo json_encode($this->home_model->add_insurance_details());

	}
	public function add_InstantQuotes(){
		echo json_encode($this->home_model->add_InstantQuotes());
	}
	public function getTrendData($vType,$xml=''){
		echo json_encode($this->home_model->getTrendData($vType,$xml));

	}
	public function getBodyTypeEach($BodyType){
		if($BodyType =='cars')
		{
			$BodyType ='Car';
		}elseif($BodyType == 'bikes'){
			$BodyType ='Bike';
		}
		elseif($BodyType =='More'){
			$BodyType ='More';
		}
		echo json_encode($this->home_model->getBodyTypeEach($BodyType));
	}
}
