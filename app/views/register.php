<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự Án 1</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/style.css?time=<?= time() ?>">
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
                <form id="register" action="<?= BASE_URL ?>/user/register_customer" method="post">
                    <div class="my-[25px] mx-[25px]">
                        <div class="mb-4">
                            <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="email" placeholder="Nhập địa chỉ email" />
                        </div>
                        <div class="mb-4">
                            <input type="password" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="password" placeholder="Nhập mật khẩu" />
                        </div>
                        <div class="mb-4">
                            <input type="password" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="password_r" placeholder="Nhập lại mật khẩu" />
                        </div>
                        <button id="submit_r" class="bg-[#f7001e] text-white px-[5px] py-[10px] w-full rounded-[10px] mb-4">Đăng ký</button>
                        <a href="<?= BASE_URL ?>/user/login" class="block text-center bg-[#999] text-white px-[5px] py-[10px] w-full rounded-[10px]">Đăng nhập</a>
                    </div>
                </form>
            </div>
        </div>
        <?php include_once "layout/footer.php" ?>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function checkMail(mail) {
            let reg = /\S+@\S+\.\S+/
            return reg.test(mail)
        }

        $("#submit_r").click(function(e) {
            e.preventDefault();
            let email = $('input[name="email"]').val().trim();
            let password = $('input[name="password"]').val().trim();
            let password_r = $('input[name="password_r"]').val().trim();
            if (email == "" || password == "" || password_r == "") {
                return Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Vui lòng nhập đầy đủ thông tin!',
                })
            }
            if (!checkMail(email)) {
                return Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Email không đúng định dạng!',
                })
            }

            if (password != password_r) {
                return Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Mật khẩu xác nhận không chính xác!',
                })
            }
            $('#register').submit();
        });
        <?php if (isset($_GET['status']) && $_GET['status'] == 1) : ?>
            Swal.fire(
                'Good job!',
                'Đăng ký tài khoản thành công!',
                'success'
            );
            setTimeout(() => {
                window.location.href = '<?=BASE_URL."/user/login"?>';
            }, 1500);
        <?php endif ?>
    </script>
</body>

</html>