<?php 
	
	class Items extends CI_Controller

	{
		public function __construct() {
			parent::__construct();

			$this->load->database();
    		$this->load->helper('url');
    		$this->load->model('Item_Model');

		}
		public function report_(){
			$result['item_data'] = $this->Item_Model->view_data();
			$result['no_of_types']=count($result['item_data']);
			$result['no_of_items']= $this->Item_Model->count_items();
			$result['f_value']= $this->Item_Model->financial_value();
    		$this->load->view('report.php', $result);
		}

		public function index()
		{
			$this->load->view('home');
		}

		public function view_about()
		{
			$this->load->view('view_about');

		}

		public function add()
		{
			$this->load->view('add_item');

			if($this->input->post('add')){
     		  $name = $this->input->post('name');
    		  $quantity = $this->input->post('quantity');
   			  $price = $this->input->post('price');
      
      		$this->Item_Model->save_data($name, $quantity, $price);
      		redirect("Items/view");
   		 }
		}

		public function delete_item()
		{
			$item_id = $this->input->get('item_id');
   			$this->Item_Model->delete_item($item_id);
    		redirect("Items/view");
		}
		//--------ccccccccccccc--------------
		public function view(){
			$result['item_data'] = $this->Item_Model->view_data();
			$this->load->view('view_items', $result);
		}
		//-----------------------------
		public function view_item(){
			$item_id = $this->input->get('item_id');
		    $result['item_data'] = $this->Item_Model->get_detail($item_id);
			$this->load->view('item_data.php', $result);
    
		    if($this->input->post('update')){
	        $name = $this->input->post('name');
    		$quantity = $this->input->post('quantity');
   			$price = $this->input->post('price');
      		$this->Item_Model->update_item($item_id, $name, $quantity, $price);
      		redirect("Items/view");
    		}
		}

	}

 ?>