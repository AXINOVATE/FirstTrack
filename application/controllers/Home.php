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
	public function searchList($page,$id=""){
		if($page=='list' || $page=='latest' || $page=='upcoming' || $page=='popular' || $page=='bodytype' || $page=='category'){
			$pageData['currentPage'] = strtoupper($page);
			$data['header'] = $this->load->view('templates/header',$pageData,true);
			$data['footer'] = $this->load->view('templates/footer',$pageData,true);
			$data['pageName'] = ucfirst($page);
			$data['typeID'] = '';
			if($page=='bodytype' || $page=='category' || $page=='list'){
				$data['getTType'] = $this->manage_products_model->getTrendType('ALL');
				$data['getTID'] = '';
				$data['trendsTypeID']='';
				$data['typeID'] = $id;
			}
			else{
				$data['getTID'] = $this->manage_products_model->getTrendType('GTID',ucfirst($page));
				$data['trendsTypeID']=$data['getTID'][0]['trendsTypeID'];
			}
			
			$data['categoryDetails']= $this->manage_products_model->getCategoryDetails('ALL');
			$data['manufactureDetails']= $this->manage_products_model->getManufatureDetails('ALL');
			//$data['trendDetails']= $this->home_model->getTrendData('ALL',$data['trendsTypeID'],$page,$id);
			$data['categories']= $this->home_model->getTrendData('Category','');
			$data['dealerDetails']= $this->home_model->getUsers('DEALER');
			
			//var_dump($data['trendDetails']); exit();
			$this->load->view('home/searchList',$data);
		}
		else{
			echo 'Page not found';
		}
		
		
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
	public function details($slug="",$variantID="",$location="",$dealerID="",$colorID=""){
		
		$variantID = isset($_GET['variant']) ? $_GET['variant'] : '';
		$location = isset($_GET['location']) ? $_GET['location'] : '';
		$dealerID = isset($_GET['dealer']) ? $_GET['dealer'] : '';
		$colorID = isset($_GET['color']) ? $_GET['color'] : '';
		
		$pageData['currentPage'] = 'LIST';
		$data['header'] = $this->load->view('templates/header',$pageData,true);
		$data['footer'] = $this->load->view('templates/footer',$pageData,true);
		
		//$data['slug'] = $slug;
		
		$slugData = $this->home_model->getProducts("SLUG","","","","","",$slug);
		//var_dump($slugData);exit();
		$productID = "";
		if($slugData){
			$variantID = $slugData->variantID;
			$productID = $slugData->productID;
		}else{
			echo 'Invalid URL';
		}
		$cityName = 'Bangalore';
		if($this->session->userdata("cityID") && $location == '')
			$cityName = $this->session->userdata("cityID");
		else if($location != '')
			$cityName = $location;
		$data['cityName'] = $cityName;
		$data['basic'] = $this->home_model->getProducts("SPB","",$productID);
		if($data['basic']){
			$data['variants'] = $this->home_model->getProducts("LPV","",$productID);
			if($variantID =="" && isset($data['variants'][0]->variantID))
				$variantID = $data['variants'][0]->variantID;
			
			$data['data'] = $this->home_model->getProducts("SPV","",$productID,$variantID);
			
			$data['colors'] = $this->home_model->getProducts("LPC","",$productID,$variantID);
			if($colorID =="" && isset($data['colors'][0]->colorID))
				$colorID = $data['colors'][0]->colorID;
			
			$data['dealers'] = $this->home_model->getProducts("LPD","",$productID,$variantID);
			if($dealerID =="" && isset($data['dealers'][0]->userID))
				$dealerID = $data['dealers'][0]->userID;
			
			$data['prices'] = $this->home_model->getDealerProducts("SP",$dealerID,$productID,$variantID,$colorID);
			
			$data['features'] = $this->home_model->getProducts('Features',"",$productID,$variantID);
			$data['offers'] = $this->home_model->getProducts('SOFFER',$dealerID,$productID,$variantID);
			$data['photos'] = $this->home_model->getProducts('Photo',"",$productID,$variantID);
			$data['videos'] = $this->home_model->getProducts('Video',"",$productID,$variantID);
			$data['cities'] = $this->home_model->getProducts('getCities',"",$productID,$variantID);
			
			//$data['locations'] = $this->manage_products_model->location_detail("LIST_ON_CITY",$this->config->item("default_country_id"));
			$data['locations'] = $this->home_model->getCity();
			
			$data['variantID'] = $variantID;
			$data['location'] = $location;
			$data['dealerID'] = $dealerID;
			$data['colorID'] = $colorID;
			$data['productID'] = $productID;
			$data['slug'] = $slug;
			
			//echo $dealerID = $data['dealers'][0]->userID;
			
			//var_dump($data['offers']);exit();
			$this->load->view('home/details',$data);
		}
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
		$data['catID']= $this->home_model->getCompareInfo('category','','','');
		//var_dump($data['catID']); exit();
		$this->load->view('home/compare',$data);
	}
	public function detailed_comparison(){
		//var_dump($_POST); exit();
		$var1="";$var2="";$var="";
		$var1 = $this->input->post('selVariant1');
		$var2 = $this->input->post('selVariant2');
		$var3 = $this->input->post('selVariant3');
		if($var1!='' && $var2!=''){
			$pageData['currentPage'] = 'COMPARE';
			$data['header'] = $this->load->view('templates/header',$pageData,true);
			$data['footer'] = $this->load->view('templates/footer',$pageData,true);
			$data['specs'] = $this->home_model->getCompareInfo('detailedComparison',$var1,$var2,$var3);
			$product1 = ""; $product2 = ""; $product3 = "";
			$product1 = $data['specs'][0]['productID'];
			$product2 = $data['specs'][1]['productID'];
			if(count($data['specs'])>2){ 
				$product3 = $data['specs'][2]['productID']; 
			}
			$data['variants1'] = $this->home_model->getCompareInfo('variants','',$product1,'');
			$data['variants2'] = $this->home_model->getCompareInfo('variants','',$product2,'');
			$data['variants3'] = $this->home_model->getCompareInfo('variants','',$product3,'');
		//	var_dump($data['variants1']); 
		//	var_dump($data['variants2']); 
		//	var_dump($data['variants3']); 
		//	exit();
			$this->load->view('home/detailed_comparison',$data);
		}
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
		
		$cart = $this->session->userdata('cart');
		if(count($cart)>0){
			$data['basic'] = $this->home_model->getProducts("SPB","",$cart['productID']);
			$data['data'] = $this->home_model->getProducts("SPV","",$cart['productID'],$cart['variantID']);
			$data['prices'] = $this->home_model->getDealerProducts("SP",$cart['dealerID'],$cart['productID'],$cart['variantID'],$cart['colorID']);
			
			if(isset($data['prices']->onRoadPrice))
				$cart['unitPrice'] = floatval($data['prices']->onRoadPrice);
			
			$cart['shippingPrice'] = 0;
			$cart['totalPrice'] = floatval(($cart['qty']*$cart['unitPrice'])+$cart['shippingPrice']);
			$this->session->set_userdata('cart',$cart);
		}
		$data['cart'] = $this->session->userdata('cart');
		//var_dump($data['cart']);exit();
		//echo $this->session->userdata('cart_product_id');
		//var_dump($data['prices']);exit();
		$this->load->view('home/checkout',$data);
	}
	function creating_checkout(){
		$this->session->unset_userdata('cart');
		$cart = array();
		$cart['productID'] = $this->input->post('productID');
		$cart['variantID'] = $this->input->post('variantID');
		$cart['dealerID'] = $this->input->post('dealerID');
		$cart['colorID'] = $this->input->post('colorID');
		$cart['qty'] = 1;
		$cart['unitPrice'] = 0;
		$cart['shippingPrice'] = 0;
		$cart['totalPrice'] = 0;
		$this->session->set_userdata('cart',$cart);
		echo json_encode(true);
	}
	function update_cart(){
		$cart = $this->session->userdata('cart');
		$cart['qty'] = $this->input->post('qty');;
		$cart['totalPrice'] = ($cart['qty']*$cart['unitPrice'])+$cart['shippingPrice'];
		$this->session->set_userdata('cart',$cart);
		echo json_encode($this->session->userdata('cart'));
	}
	function booking(){
		echo json_encode($this->home_model->booking());
	}
	public function conformation(){
		$pageData['currentPage'] = '';
		$data['header'] = $this->load->view('templates/header',$pageData,true);
		$data['footer'] = $this->load->view('templates/footer',$pageData,true);
		$data['path'] = $this->home_model->create_pdf();
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
	public function get_manufacture_detail($Vtype='',$ID="")	{
		echo json_encode($this->manage_products_model->getManufatureDetails($Vtype,$ID));
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
	public function getTrendData($vType){
		echo json_encode($this->home_model->getTrendData($vType));

	}
	public function getCity(){
		echo json_encode($this->home_model->getCity());
	}
	public function get_particular_vechile($mid=''){
		
		echo json_encode($this->home_model->get_particular_vechile($mid=''));
	}
	public function get_location(){
		
		echo json_encode($this->home_model->get_location());
	}
	public function locate_a_dealer(){
		
		echo json_encode($this->home_model->locate_a_dealer());
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
	public function getparticularcityID(){		
		$this->session->set_userdata('cityID',$this->input->post('VcityName'));
		$cityID = $this->session->userdata('cityID');
		return $cityID;
	}
	public function getCompareInfo($vType,$catID="",$makerID="",$modelID=""){
		echo json_encode($this->home_model->getCompareInfo($vType, $catID, $makerID, $modelID));
	}
	
	function add_dealer(){
		$pageData['currentPage'] = 'DEALERS';
		$data['header'] = $this->load->view('templates/admin_header',$pageData,true);
		$data['footer'] = $this->load->view('templates/footer',$pageData,true);
		$data['countries'] = $this->manage_products_model->location_detail("COUNTRY");
		$data['categories'] = $this->manage_products_model->getCategoryDetails("ALL");
		$data['manufactures'] = $this->manage_products_model->getManufatureDetails("ALL");
		$this->load->view('admin/manage_dealers/add_dealer',$data);
	}
	function dealer($userID=""){
		$pageData['currentPage'] = 'DEALERS';
		$data['header'] = $this->load->view('templates/admin_header',$pageData,true);
		$data['footer'] = $this->load->view('templates/footer',$pageData,true);
		$data['details'] = $this->home_model->getUsers("SP",$userID);
		if(count($data['details']) > 0){
			$data['userID'] = $userID;
			$data['countries'] = $this->manage_products_model->location_detail("COUNTRY");
			$data['categories'] = $this->manage_products_model->getCategoryDetails("ALL");
			$data['manufactures'] = $this->manage_products_model->getManufatureDetails("ALL");
			$this->load->view('admin/manage_dealers/dealer',$data);
		}else{
			echo 'Page not found';
		}
	}
	function dealers(){
		$pageData['currentPage'] = 'DEALERS';
		$data['header'] = $this->load->view('templates/admin_header',$pageData,true);
		$data['footer'] = $this->load->view('templates/footer',$pageData,true);
		$data['details'] = $this->home_model->getUsers("RLIST","","",$this->config->item('dealer_role'));
		//var_dump($data['details']);exit();
		$this->load->view('admin/manage_dealers/dealers',$data);
	}
	function bank_details($userID=""){
		$pageData['currentPage'] = 'DEALERS';
		$data['header'] = $this->load->view('templates/admin_header',$pageData,true);
		$data['footer'] = $this->load->view('templates/footer',$pageData,true);
		$data['details'] = $this->home_model->getUsers("SP",$userID);
		if(count($data['details']) > 0){
			$data['userID'] = $userID;
			$data['bank'] = $this->home_model->getUserBankDetails("SP",$userID);
			$this->load->view('admin/manage_dealers/bank_details',$data);
		}else{
			echo 'Page not found';
		}
	}
	function bank_update(){
		echo json_encode($this->home_model->bank_update());
	}
	function dealer_products($userID=""){
		$pageData['currentPage'] = 'DEALER_PRODUCTS';
		$data['header'] = $this->load->view('templates/admin_header',$pageData,true);
		$data['footer'] = $this->load->view('templates/footer',$pageData,true);
		$data['details'] = $this->home_model->getUsers("SP",$userID);
		if(count($data['details']) > 0){
			$data['userID'] = $userID;
			$data['bank'] = $this->home_model->getUserBankDetails("SP",$userID);
			$data['data'] = $this->home_model->getDealerProducts("LIST",$userID);
			//var_dump($data['data']);exit();
			$this->load->view('admin/manage_dealers/dealer_products',$data);
		}else{
			echo 'Page not found';
		}
	}
	public function add_dealer_products($userID=""){
		$pageData['currentPage'] = 'MANAGE DEALERS';
		$data['header'] = $this->load->view('templates/admin_header',$pageData,true);
		$data['footer'] = $this->load->view('templates/footer',$pageData,true);
		$data['details'] = $this->home_model->getUsers("SP",$userID);
		if(count($data['details']) > 0){
			$data['userID'] = $userID;
			$data['categories'] = $this->manage_products_model->getCategoryDetails("ALL");
			$data['manufactures'] = $this->manage_products_model->getManufatureDetails("ALL");
			$this->load->view('admin/manage_dealers/add_dealer_products',$data);
		}else{
			echo 'Page not found';
		}
	}
	public function add_dealer_offer_products($userID=""){
		$pageData['currentPage'] = 'MANAGE DEALERS';
		$data['header'] = $this->load->view('templates/admin_header',$pageData,true);
		$data['footer'] = $this->load->view('templates/footer',$pageData,true);
		$data['details'] = $this->home_model->getUsers("SP",$userID);
		if(count($data['details']) > 0){
			$data['userID'] = $userID;
			$data['categories'] = $this->manage_products_model->getCategoryDetails("ALL");
			$data['manufactures'] = $this->manage_products_model->getManufatureDetails("ALL");
			$this->load->view('admin/manage_dealers/add_dealer_offer_products',$data);
		}else{
			echo 'Page not found';
		}
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
		echo json_encode($this->home_model->register($this->input->post('name'),$this->input->post('email'),$this->input->post('password'),$this->input->post('phone'),true));
	}
	public function dealers_signup(){
		$pageData['currentPage'] = '';
		$data['header'] = $this->load->view('templates/header',$pageData,true);
		$data['footer'] = $this->load->view('templates/footer',$pageData,true);
		$data['countries'] = $this->manage_products_model->location_detail("COUNTRY");
		$data['categories'] = $this->manage_products_model->getCategoryDetails("ALL");
		$data['manufactures'] = $this->manage_products_model->getManufatureDetails("ALL");
		if($this->session->userdata('login'))redirect(base_url());
		$this->load->view('admin/manage_dealers/md_sign_up_page_dealers',$data);
	}
	public function profile(){
		$pageData['currentPage'] = '';
		$data['header'] = $this->load->view('templates/header',$pageData,true);
		$data['footer'] = $this->load->view('templates/footer',$pageData,true);
		if(!$this->session->userdata('login'))redirect(base_url());
		$data['details'] = $this->home_model->getUsers("SP",$this->session->userdata("userID"));
		//var_dump($data['details']);exit();
		$data['countries'] = $this->manage_products_model->location_detail("COUNTRY");
		$data['categories'] = $this->manage_products_model->getCategoryDetails("ALL");
		$data['manufactures'] = $this->manage_products_model->getManufatureDetails("ALL");
		$this->load->view('home/profile',$data);
	}
	public function profile_update(){
		echo json_encode($this->home_model->updateUserDetails($this->input->post('userID'),$this->input->post('firstName'),$this->input->post('lastName'),$this->input->post('profilePic'),$this->input->post('countryID'),$this->input->post('stateID'),$this->input->post('cityID'),$this->input->post('address1'),$this->input->post('address2'),$this->input->post('locationID'),$this->input->post('zipCode'),$this->input->post('phone'),$this->input->post('sEmail'),$this->input->post('sPhone'),$this->input->post('productCategory'),$this->input->post('manufacture'),$this->input->post('authDealer'),$this->input->post('status')));
	}
	public function dealer_registration(){
		echo json_encode($this->home_model->dealer_registration());
	}
	public function adding_dealer_products(){
		echo json_encode($this->home_model->adding_dealer_products());
	}
	
	function getProducts($type=""){
		echo json_encode($this->home_model->getProducts($type,$this->input->post('userID'),$this->input->post('productID'),"",$this->input->post('category'),$this->input->post('manufacture')));
	}
	
	public function adding_dealer_products_offer(){
		echo json_encode($this->home_model->adding_dealer_products_offer());
	}
	public function get_dealer($vType,$userID=''){
		echo json_encode($this->home_model->getUsers($vType,$userID,"",$this->config->item('dealer_role')));
	}


}
