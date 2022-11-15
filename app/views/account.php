<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự Án 1</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="trangchu">
        <?php include_once "layout/header.php" ?>
        <div class="bg-white mx-auto max-w-[600px] mt-[80px] p-3">
            <div class="popup-header flex justify-center py-2">
                <img class="w-[112px]" src="<?= BASE_URL ?>/public/images/img03.png" alt="logo-loship">
            </div>
            <div class="content">
                <div class="text-center font-bold text-[20px] mb-[8px]">Chào mừng bạn đến với Loship</div>
                <p class="text-center">Nhập số điện thoại của bạn để tiếp tục</p>
                <?php
                    if(!empty($_GET['msg'])){
                        $msg = unserialize(urldecode($_GET['msg']));
                        foreach ($msg as $key => $value){
                        echo '<p class="text-center text-red-500 font-bold">'.$value.'</p>';
                        }
                    } 
                ?> 
                <form action="<?=BASE_URL?>/user/login_customer" method="post">
                    <div class="my-[25px] mx-[25px]">
                        <div class="mb-4">
                            <input type="text" required="" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" 
                            name="username" placeholder="Nhập địa chỉ email" />
                        </div>
                        <div class="mb-4">
                            <input type="text" required="" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" 
                            name="password" placeholder="Nhập mật khẩu" />
                        </div>
                        <button class="bg-[#f7001e] text-white px-[5px] py-[10px] w-full rounded-[10px]">Tiếp tục</button>
                    </div>
                </form>
                <!-- <div class="login-facebook">
                    <div class="separator"></div>
                    <div class="bg-white text-dark-gray px-8">Hoặc</div>
                    <span class="btn bg-transparent text-blue btn-facebook my-16 btn-link">
                        <i class="fa-brands fa-facebook"></i>
                        <span>Đăng nhập với Facebook</span>
                    </span>
                    <a class="btn bg-transparent btn-sm text-bold btn-link" href="https://loship.vn/quy-che" target="_blank">Điều khoản &amp; Điều kiện sử dụng</a>
                </div> -->
            </div>
        </div>
        <?php include_once "layout/footer.php" ?>
    </div>
</body>

</html>