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
        <?php include_once "layout/header.php"; ?>
        <div class="bg-[#f5f5f5] pt-5 pb-5">
            <div class="max-w-5xl m-auto my-4">
                <div class="grid grid-cols-4 gap-1 col-span-1 flex">
                    <?php include_once "layout/slideBar_profile.php"; ?>
                    <!-- clum1 -->
                    <div class="col-span-2 bg-white">
                        <div class="pl-5 pt-2">
                            <h1 class="text-xl">Hồ sơ của tôi</h1>
                            <span class="text-sm">Quản lí thông tin hồ sơ để bảo mật tài khoản</span>
                        </div>
                        <div class="pt-10 pl-5">
                            <div class="flex">
                                <h2>Tên đăng nhập</h2>
                                <span class="pl-2"> anhhv</span>
                            </div>
                            <div class="flex mt-5">
                                <h2>Tên</h2>
                                <form class="border-2  " action="">
                                    <input class="" type="text" name="" id="">
                                </form>
                            </div>
                            <div class="flex mt-5">
                                <h2>Email</h2>
                                <span class="pl-2">anhhvph21586@fpt.edu.vn</span>
                                <button class="pl-2 text-[#3498db]">Thay đổi</button>
                            </div>
                            <div class="flex mt-5">
                                <h2>Số điện thoại</h2>
                                <span class="pl-2">0328.208.896</span>
                                <button class="pl-2 text-[#3498db]">Thay đổi</button>
                            </div>
                            <div class="flex mt-5">
                                <h2>Giới tính</h2>
                                <form class="pl-2" action="">
                                    <input type="radio" name="gt" value="" id="">Nam
                                    <input type="radio" name="gt" value="" id="">Nữ
                                    <input type="radio" name="gt" value="" id="">Khác
                                </form>
                            </div>
                            <div class="flex mt-5">
                                <h2>Ngày sinh</h2>
                                <form class="pl-2" action="">
                                    <input type="date" name="" id="">
                                </form>
                            </div>
                            <button class="bg-[#e74c3c] px-3 py-2 rounded text-white mt-5">Lưu</button>
                        </div>
                    </div>
                    <!-- clum2 -->
                    <div class="flex items-center justify-content bg-white">
                        <div class="p-5">
                            <div class="flex justify-center">
                                <img class="rounded-full w-[80px] h-[80px]" src="<?= BASE_URL ?>/public/images/2022-04-07 (4).png" alt="">
                            </div>
                            <div class="pt-2">
                                <div class="text-center">
                                    <button class="border-2 px-2 py-1 ">Chọn ảnh</button>
                                </div>
                                <span class="text-[#808e9b]">Dụng lượng file tối đa 1 MB
                                    Định dạng:.JPEG, .PNG</span>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- content -->
            </div>
        </div>
        <?php include_once "layout/footer.php"; ?>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</body>

</html>