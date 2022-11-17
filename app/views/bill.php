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

                        <div class=" flex justify-around text-right pt-2 pr-4 border-b-[1px] pb-2 ">
                            <button class=" hover:text-[#ff3f34]">Tất cả</button>
                            <button class=" hover:text-[#ff3f34]">Chờ xác nhận</button>
                            <button class=" hover:text-[#ff3f34]">Chờ lấy hàng</button>
                            <button class=" hover:text-[#ff3f34]">Đang giao</button>
                            <button class=" hover:text-[#ff3f34]">Đã giao</button>
                            <button class=" hover:text-[#ff3f34]">Đã hủy</button>
                        </div>

                        <div class="py-2 bg-[#f5f5f5]"></div>

                        <div class="mx-4">
                            <div>
                                <div class="pt-4 flex items-center border-b-[1px] pb-3">
                                    <img class="h-[18px] w-[18px]" src="<?=BASE_URL?>/public/images/shop.png" alt="">
                                    <span class="font-bold px-2">quieushop</span>
                                    <button class="bg-[#ff3f34] text-white py-1 px-2 rounded-sm">Xem shop</button>
                                </div>
                                <!-- thông tin shop -->
                                <div class="flex justify-between items-center border-b-[1px] py-5 hover:bg-[#f5f5f5] px-6">
                                    <div class="flex">
                                        <img class="h-[80px] w-[80px]" src="<?=BASE_URL?>/public/images/2022-04-07 (4).png" alt="">
                                        <div class="">
                                            <div class=" pl-2 ">
                                                <a class="text-[17px]" href="">Máy đầm sàn nhà, sàn bê tông MOVIC99( New 100%)</a>
                                                <div class="pt-1 font-light">Phân loại: máy loại to</div>
                                                <span>x1</span>
                                            </div>

                                        </div>
                                    </div>

                                    <div>
                                        <button class=" text-[#ff3f34] text-[18px]">212.000vnđ</button>
                                    </div>
                                </div>
                                <!-- thông tin sản phẩm -->
                                <div class="pb-4">
                                    <div class="pl-4 py-4">
                                        <span>Tổng tiền:</span>
                                        <span class="text-[#ff3f34] text-[20px]">212.00vnđ</span>
                                    </div>

                                    <div class="flex justify-between mx-4 pt-5 ">
                                        <div>
                                            <span class="text-[12px] text-[#20bf6b]">Đã giao thành công</span>
                                        </div>
                                        <div class="">
                                            <button class="border bg-[#ff3f34] text-white px-3 py-2 rounded-sm">Mua lại sản phẩm</button>
                                            <button class="border px-3 py-2 rounded-sm">Liên hệ người bán</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- tổng sản phẩm -->

                            </div>

                        </div>

                        <div class="py-2 bg-[#f5f5f5]"></div>

                        <div class="mx-4">
                            <div>
                                <div class="pt-4 flex items-center border-b-[1px] pb-3">
                                    <img class="h-[18px] w-[18px]" src="<?=BASE_URL?>/public/images/shop.png" alt="">
                                    <span class="font-bold px-2">quieushop</span>
                                    <button class="bg-[#ff3f34] text-white py-1 px-2 rounded-sm">Xem shop</button>
                                </div>
                                <!-- thông tin shop -->
                                <div class="flex justify-between items-center border-b-[1px] py-5 hover:bg-[#f5f5f5] px-6">
                                    <div class="flex">
                                        <img class="h-[80px] w-[80px]" src="<?=BASE_URL?>/public/images/2022-04-07 (4).png" alt="">
                                        <div class="">
                                            <div class=" pl-2 ">
                                                <a class="text-[17px]" href="">Máy đầm sàn nhà, sàn bê tông MOVIC99( New 100%)</a>
                                                <div class="pt-1 font-light">Phân loại: máy loại to</div>
                                                <span>x1</span>
                                            </div>

                                        </div>
                                    </div>

                                    <div>
                                        <button class=" text-[#ff3f34] text-[18px]">212.000vnđ</button>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center border-b-[1px] py-5 hover:bg-[#f5f5f5] px-6">
                                    <div class="flex">
                                        <img class="h-[80px] w-[80px]" src="<?=BASE_URL?>/public/images/2022-04-07 (4).png" alt="">
                                        <div class="">
                                            <div class=" pl-2 ">
                                                <a class="text-[17px]" href="">Máy đầm sàn nhà, sàn bê tông MOVIC99( New 100%)</a>
                                                <div class="pt-1 font-light">Phân loại: máy loại to</div>
                                                <span>x1</span>
                                            </div>

                                        </div>
                                    </div>

                                    <div>
                                        <button class=" text-[#ff3f34] text-[18px]">212.000vnđ</button>
                                    </div>
                                </div>
                                <!-- thông tin sản phẩm -->
                                <div class="pb-4">
                                    <div class="pl-4 py-4">
                                        <span>Tổng tiền:</span>
                                        <span class="text-[#ff3f34] text-[20px]">424.00vnđ</span>
                                    </div>

                                    <div class="flex justify-between mx-4 pt-5 ">
                                        <div>
                                            <span class="text-[12px] text-[#20bf6b]">Đã giao thành công</span>
                                        </div>
                                        <div class="">
                                            <button class="border bg-[#ff3f34] text-white px-3 py-2 rounded-sm">Mua lại sản phẩm</button>
                                            <button class="border px-3 py-2 rounded-sm">Liên hệ người bán</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- tổng sản phẩm -->

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