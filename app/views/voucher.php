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
                <div class="grid grid-cols-5 gap-1 col-span-1 flex">
                    <?php include_once "layout/slideBar_profile.php"; ?>
                    <div class="col-span-4 bg-white">
                        <div class="mx-4 my-4">

                            <div class="pb-3">
                                <h1 class="text-[20px]">Kho voucher</h1>
                            </div>
                            <div class="flex justify-center items-center bg-[#f5f5f5] py-6">
                                <span>Mã voucher</span>
                                <input class="border border-[#c8d6e5] mx-2 px-20 py-2 rounded-sm" type="search" name="" id="">
                                <button class="bg-[#c8d6e5] hover:bg-[#ff3f34] py-2 px-4 font-bold text-white rounded-sm">Lưu</button>
                            </div>

                            <div class="pb-3 pt-2 border-b-[1px]">
                                <h1 class="text-[20px]">Tất cả</h1>
                            </div>

                            <div class="grid grid-cols-2 pt-2">
                                <div class="grid grid-cols-3">
                                    <div class="h-[100px] w-[100px] bg-[#27ae60] text-center pt-6">
                                        <span class=" text-white text-[15px]">MIỄN PHÍ VẬN CHUYỂN</span>
                                    </div>
                                    <div class="">
                                        <span>Siêu voucher 100%</span>
                                        <div><span class="text-[12px] text-[#ff3f34]">Thời hạn: 15 giờ</span></div>
                                    </div>
                                    <div class="pt-8 text-center">
                                        <button class="bg-[#ff3f34] py-1 px-2 text-white text-[12px] rounded-sm">Dùng ngay</button>
                                    </div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="h-[100px] w-[100px] bg-[#27ae60] text-center pt-6">
                                        <span class=" text-white text-[15px]">MIỄN PHÍ VẬN CHUYỂN</span>
                                    </div>
                                    <div class="">
                                        <span>Siêu voucher 100%</span>
                                        <div><span class="text-[12px] text-[#ff3f34]">Thời hạn: 15 giờ</span></div>
                                    </div>
                                    <div class="pt-8 text-center">
                                        <button class="bg-[#ff3f34] py-1 px-2 text-white text-[12px] rounded-sm">Dùng ngay</button>
                                    </div>
                                </div>
                            </div>
                            <!-- hàng voucher 1 -->

                            <div class="grid grid-cols-2 pt-2">
                                <div class="grid grid-cols-3">
                                    <div class="h-[100px] w-[100px] bg-[#27ae60] text-center pt-6">
                                        <span class=" text-white text-[15px]">MIỄN PHÍ VẬN CHUYỂN</span>
                                    </div>
                                    <div class="">
                                        <span>Siêu voucher 100%</span>
                                        <div><span class="text-[12px] text-[#ff3f34]">Thời hạn: 15 giờ</span></div>
                                    </div>
                                    <div class="pt-8 text-center">
                                        <button class="bg-[#ff3f34] py-1 px-2 text-white text-[12px] rounded-sm">Dùng ngay</button>
                                    </div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="h-[100px] w-[100px] bg-[#27ae60] text-center pt-6">
                                        <span class=" text-white text-[15px]">MIỄN PHÍ VẬN CHUYỂN</span>
                                    </div>
                                    <div class="">
                                        <span>Siêu voucher 100%</span>
                                        <div><span class="text-[12px] text-[#ff3f34]">Thời hạn: 15 giờ</span></div>
                                    </div>
                                    <div class="pt-8 text-center">
                                        <button class="bg-[#ff3f34] py-1 px-2 text-white text-[12px] rounded-sm">Dùng ngay</button>
                                    </div>
                                </div>
                            </div>
                            <!-- hàng voucher 2 -->

                            <div class="grid grid-cols-2 pt-2">
                                <div class="grid grid-cols-3">
                                    <div class="h-[100px] w-[100px] bg-[#27ae60] text-center pt-6">
                                        <span class=" text-white text-[15px]">MIỄN PHÍ VẬN CHUYỂN</span>
                                    </div>
                                    <div class="">
                                        <span>Siêu voucher 100%</span>
                                        <div><span class="text-[12px] text-[#ff3f34]">Thời hạn: 15 giờ</span></div>
                                    </div>
                                    <div class="pt-8 text-center">
                                        <button class="bg-[#ff3f34] py-1 px-2 text-white text-[12px] rounded-sm ">Dùng ngay</button>
                                    </div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="h-[100px] w-[100px] bg-[#27ae60] text-center pt-6">
                                        <span class=" text-white text-[15px]">MIỄN PHÍ VẬN CHUYỂN</span>
                                    </div>
                                    <div class="">
                                        <span>Siêu voucher 100%</span>
                                        <div><span class="text-[12px] text-[#ff3f34]">Thời hạn: 15 giờ</span></div>
                                    </div>
                                    <div class="pt-8 text-center">
                                        <button class="bg-[#ff3f34] py-1 px-2 text-white text-[12px] rounded-sm">Dùng ngay</button>
                                    </div>
                                </div>
                            </div>
                            <!-- hàng voucher 3 -->

                            <div class="grid grid-cols-2 pt-2">
                                <div class="grid grid-cols-3">
                                    <div class="h-[100px] w-[100px] bg-[#27ae60] text-center pt-6">
                                        <span class=" text-white text-[15px]">MIỄN PHÍ VẬN CHUYỂN</span>
                                    </div>
                                    <div class="">
                                        <span>Siêu voucher 100%</span>
                                        <div><span class="text-[12px] text-[#ff3f34]">Thời hạn: 15 giờ</span></div>
                                    </div>
                                    <div class="pt-8 text-center">
                                        <button class="bg-[#ff3f34] py-1 px-2 text-white text-[12px] rounded-sm">Dùng ngay</button>
                                    </div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="h-[100px] w-[100px] bg-[#27ae60] text-center pt-6">
                                        <span class=" text-white text-[15px]">MIỄN PHÍ VẬN CHUYỂN</span>
                                    </div>
                                    <div class="">
                                        <span>Siêu voucher 100%</span>
                                        <div><span class="text-[12px] text-[#ff3f34]">Thời hạn: 15 giờ</span></div>
                                    </div>
                                    <div class="pt-8 text-center">
                                        <button class="bg-[#ff3f34] py-1 px-2 text-white text-[12px] rounded-sm">Dùng ngay</button>
                                    </div>
                                </div>
                            </div>
                            <!-- hàng voucher 4 -->

                            <div class="grid grid-cols-2 pt-2">
                                <div class="grid grid-cols-3">
                                    <div class="h-[100px] w-[100px] bg-[#27ae60] text-center pt-6">
                                        <span class=" text-white text-[15px]">MIỄN PHÍ VẬN CHUYỂN</span>
                                    </div>
                                    <div class="">
                                        <span>Siêu voucher 100%</span>
                                        <div><span class="text-[12px] text-[#ff3f34]">Thời hạn: 15 giờ</span></div>
                                    </div>
                                    <div class="pt-8 text-center">
                                        <button class="bg-[#ff3f34] py-1 px-2 text-white text-[12px] rounded-sm">Dùng ngay</button>
                                    </div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="h-[100px] w-[100px] bg-[#27ae60] text-center pt-6">
                                        <span class=" text-white text-[15px]">MIỄN PHÍ VẬN CHUYỂN</span>
                                    </div>
                                    <div class="">
                                        <span>Siêu voucher 100%</span>
                                        <div><span class="text-[12px] text-[#ff3f34]">Thời hạn: 15 giờ</span></div>
                                    </div>
                                    <div class="pt-8 text-center">
                                        <button class="bg-[#ff3f34] py-1 px-2 text-white text-[12px] rounded-sm">Dùng ngay</button>
                                    </div>
                                </div>
                            </div>
                            <!-- hàng voucher 5 -->

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