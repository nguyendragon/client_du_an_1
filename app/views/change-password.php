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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
</head>

<body>
    <div class="trangchu">
        <?php include_once "layout/header.php"; ?>
        <div class="bg-[#f5f5f5] pt-5 pb-5">
            <div class="max-w-5xl m-auto my-4">
                <div class="grid grid-cols-4 gap-1 col-span-1 flex">
                    <?php include_once "layout/slideBar_profile.php"; ?>
                    <div class="col-span-3 bg-white">
                        <div>
                            <div class="pt-4 px-6 border-b-[1px] pb-3">
                                <h1 class="text-xl">Đổi mật khẩu</h1>
                                <span class="text-sm">Để bảo mật tài khoản, vui lòng không chia sẻ mật khẩu cho người khác</span>
                            </div>
                        </div>

                        <div class="pb-3 pt-20 px-20">
                            <div class="flex justify-left">
                                <div class="flex">
                                    <div class="min-w-[170px]">
                                        <p class="text-left">Mật khẩu hiện tại</p>
                                    </div>
                                    <div class=""><input class="border" type="text" name="" id=""></div>
                                    <div class="ml-2">
                                        <button class="text-[#3498db]">quên mật khẩu?</button>
                                    </div>
                                </div>
                            </div>

                            <div class="flex justify-left py-3">
                                <div class="flex">
                                    <div class="min-w-[170px]">
                                        <p class="text-left">Mật khẩu mới</p>
                                    </div>
                                    <div><input class="border" type="text" name="" id=""></div>
                                </div>
                            </div>

                            <div class="flex justify-left">
                                <div class="flex">
                                    <div class="min-w-[170px]">
                                        <p class="text-left">Xác nhận mật khẩu mới</p>
                                    </div>
                                    <div><input class="border" type="text" name="" id=""></div>
                                </div>
                            </div>
                            <div class="flex justify-left pt-4">
                                <button class="bg-[#e74c3c] text-white py-1 px-2 rounded-sm ">Xác nhận</button>
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