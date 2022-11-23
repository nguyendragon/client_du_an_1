<?php 

	class order extends DController{
		
		public function __construct(){
			$data = array();
			parent::__construct();
		} 

		public function index(){
			// $this->login();
		}

		/****  Json_decode  ***/
		public function res_json($status, $message){
			$data = array(
				'status' => "$status",
				'message' => "$message",
			);
			return json_encode($data);
		}

		public function checkLogin()
		{
			if (!isset($_SESSION['token'])) {
				return header('Location:'.BASE_URL."/user/login");
			}
		}

		public function addOrders(){
			$this->checkLogin();
			$user_model = $this->load->model('usermodel');
			$order_model = $this->load->model('ordermodel');
			$token = $_SESSION['token'];

			$create_at = date("d M Y, H:i a");
			$time = time();
			
			$userInfo = $user_model->getUserBySession($token);
            
            foreach ($_SESSION['cart'] as $index => $item) {
                $total = ($item['price'] * $item['sl']) - ($item['sale'] * $item['sl']);
                $order_model->addOrders($item['sl'], $item['sale'], $item['price'], $total, $item['id'], $userInfo['id_user'], $create_at, $time);
            }
		}

		public function listOrders($status){
			$this->checkLogin();
			$user_model = $this->load->model('usermodel');
			$order_model = $this->load->model('ordermodel');
			$token = $_SESSION['token'];
			
			$userInfo = $user_model->getUserBySession($token);
			$listOrders = $order_model->listOrders($status, $userInfo['id_user']);
			echo json_encode($listOrders);
		}
	}


?>