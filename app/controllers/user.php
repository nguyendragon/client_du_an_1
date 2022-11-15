<?php 

	class user extends DController{
		
		public function __construct(){
			$data = array();
			parent::__construct();

		}
		public function index(){
			$this->khachhang();
		}
		public function lichsudonhang(){
			

		}
		public function dangxuat(){
				Session::init();
				Session::unset('customer');
				$message['msg'] = "Đăng xuất tài khoản thành công";
				header('Location:'.BASE_URL."/khachhang/dangnhap?msg=".urlencode(serialize($message)));
		}

		public function login_customer(){
			$username = $_POST['username'];
			$password = $_POST['password'];

			$table_customer = 'users';
			$customermodel = $this->load->model('customermodel');

			$count = $customermodel->login($table_customer,$username,$password);

			if($count==0){
				$message['msg'] = "Tên tài khoản hoặc mật khẩu không chính xác !";
				header('Location:'.BASE_URL."/user/login?msg=".urlencode(serialize($message)));
			}else{
				$result = $customermodel->getLogin($table_customer,$username,$password);
				Session::init();
				Session::set('customer',true);
				Session::set('customer_name',$result[0]['customer_name']);
				Session::set('customer_id',$result[0]['customer_id']);
				$message['msg'] = "Đăng nhập thành công";
				header('Location:'.BASE_URL."/user/login?msg=".urlencode(serialize($message)));
			}
		}
        
		public function login(){
			Session::init(); 
			$this->load->view('account');
		}

		public function insert_dangky(){
			$name = $_POST['txtHoTen'];
			$email = $_POST['txtEmail'];
			$phone = $_POST['txtDienThoai'];
			$address = $_POST['txtDiaChi'];
			$password = $_POST['txtPassword'];
			
			
			$table_customer = "tbl_customers";

			$data = array(
				'customer_name' => $name,
				'customer_email' => $email,
				'customer_phone' => $phone,
				'customer_address' => $address,
				'customer_password' => md5($password)
			);

			$customermodel = $this->load->model('customermodel');
			$result = $customermodel->insertcustomer($table_customer,$data);

			if($result==1){
				
				$message['msg'] = "Đăng ký thành công";
				header('Location:'.BASE_URL."/khachhang/dangnhap?msg=".urlencode(serialize($message)));
			}else{
				$message['msg'] = "Đăng ký thất bại";
				header('Location:'.BASE_URL."/khachhang/dangnhap?msg=".urlencode(serialize($message)));
			}
		}
		

		

	}


?>