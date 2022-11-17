<?php 

	class restaurant extends DController{
		
		public function __construct(){
			$data = array();
			parent::__construct();

		}
		public function index(){
			$this->danhmuc();
		}

		public function tatca(){
			$table = 'tbl_category_product';
			$table_product = 'tbl_product';
			$categorymodel = $this->load->model('categorymodel');
			$data['category'] = $categorymodel->category_home($table);
			$table_post = 'tbl_category_post';
			$data['category_post'] = $categorymodel->categorypost_home($table_post);

			$data['list_product'] = $categorymodel->list_product_home($table_product);

			$this->load->view('header',$data);
			$this->load->view('list_product',$data); 
			$this->load->view('footer');
		}

		public function sanphamhot(){
			$table = 'tbl_category_product';
			$table_product = 'tbl_product';
			$categorymodel = $this->load->model('categorymodel');
			$data['category'] = $categorymodel->category_home($table);
			$table_post = 'tbl_category_post';
			$data['category_post'] = $categorymodel->categorypost_home($table_post);

			$data['product_hot'] = $categorymodel->product_hot($table_product);

			$this->load->view('header',$data);
			$this->load->view('product_hot',$data);
			$this->load->view('footer');
		}

		public function danhmuc($id){
			$table = 'tbl_category_product';
			$table_product = 'tbl_product';
			$categorymodel = $this->load->model('categorymodel');
			$data['category'] = $categorymodel->category_home($table);
			$table_post = 'tbl_category_post';
			$data['category_post'] = $categorymodel->categorypost_home($table_post);
			$data['category_by_id'] = $categorymodel->categorybyid_home($table,$table_product,$id);

			$this->load->view('header',$data);
			$this->load->view('categoryproduct',$data);
			$this->load->view('footer');
		}

		public function details($link){
			$table1 = 'restaurants';
			$table2 = 'product';
			$table3 = 'category';
			$categorymodel = $this->load->model('restaurantmodel');
			$data['restaurant'] = $categorymodel->restaurantByLink($table1, $link);

			$id_res = $data['restaurant']['id_restaurant'];
			$id_cate = $data['restaurant']['id_cate'];

			$data['product'] = $categorymodel->productById($table2, $id_res);
			$data['category'] = $categorymodel->categoryById($table3, $id_cate)[0];

			$this->load->view('details_restaurant', $data);
		}


	}


?>