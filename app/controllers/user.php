<?php 

	class user extends DController{
		
		public function __construct(){
			$data = array();
			parent::__construct();
		} 

		public function index(){
			$this->khachhang();
		}

		public function login(){
			$this->load->view('login');
		}

		public function register(){
			$this->load->view('register');
		}

		public function profile(){
			$this->load->view('profile');
		}

		public function address(){
			$this->load->view('address');
		}

		public function bank(){
			$this->load->view('bank');
		}

		public function changePassword(){
			$this->load->view('change-password');
		}

		public function bill(){
			$this->load->view('bill');
		}

		public function notifications(){
			$this->load->view('notifications');
		}

		public function voucher(){
			$this->load->view('voucher');
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
			$password = md5($_POST['password']);

			$table_customer = 'users';
			$customermodel = $this->load->model('customermodel');

			$count = $customermodel->login($table_customer,$username,$password);

			if($count==0){
				$message['msg'] = "Tên tài khoản hoặc mật khẩu không chính xác !";
				header('Location:'.BASE_URL."/user/login?msg=".urlencode(serialize($message)));
			}else{
				$result = $customermodel->getLogin($table_customer,$username,$password);
				Session::init();
				Session::set('token',$result[0]['email']);
				$message['msg'] = "Đăng nhập thành công";
				header('Location:'.BASE_URL."/");
			}
		}

		public function register_customer(){
			$email = $_POST['email'];
			$password = $_POST['password'];
			
			
			$table_customer = "users";

			$data = array(
				'email' => $email,
				'password' => md5($password),
				'create_at' => date("d M Y, H:i a"),
				'time' => time(),
			);

			$customermodel = $this->load->model('customermodel');
			$result = $customermodel->insertcustomer($table_customer,$data);

			if($result==1){	
				$message['msg'] = "Đăng ký thành công";
				header('Location:'.BASE_URL."/user/register?status=1");
			}else{
				$message['msg'] = "Đăng ký thất bại";
				header('Location:'.BASE_URL."/user/register?status=2");
			}
		}
		

		

	}


?>