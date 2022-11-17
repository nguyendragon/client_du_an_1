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
                            <div class="pt-4 flex justify-between px-6 border-b-[1px] pb-3">
                                <h1 class="text-xl">Địa chỉ của tôi</h1>
                                <div class="">
                                    <button class="bg-[#e74c3c] text-center text-white rounded px-2 flex"><i class=" fa fa-plus-square-o text-[20px] py-2 px-1" aria-hidden="true"></i>
                                        <p class="mt-1">Thêm địa chỉ mới</p>
                                    </button>
                                </div>
                            </div>
                            <div class="border-b-[1px] pb-3">
                                <div class="pl-6">
                                    <h1 class="py-4 text-[20px]">Địa chỉ</h1>
                                </div>
                                <div class="flex justify-between px-6">
                                    <div>
                                        <div class="py-3"><span>Hà Văn Anh</span>
                                            <span>0328208896</span>
                                        </div>

                                        <div class="font-light">
                                            <div>
                                                <span>Xóm Nguộn</span>
                                            </div>
                                            <div>Xã Tân Thanh, Huyện Lạng Giang, Bắc Giang</div>

                                        </div>
                                        <div class="w-[80px] text-center pt-1">
                                            <p class="border-2 text-[#e74c3c] rounded-sm">Mặc định</p>
                                        </div>
                                    </div>
                                    <div class="pt-2">
                                        <div><button class="text-[#3498db]">Cập nhật</button></div>
                                        <div class="pt-2"><button class="border font-light px-1 py-1 rounded-sm">Thiết lập mặc định</button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-b-[1px] pb-3">

                                <div class="flex justify-between px-6">
                                    <div>
                                        <div class="py-3"><span>Hà Văn Anh</span>
                                            <span>0328208896</span>
                                        </div>

                                        <div class="font-light">
                                            <div>
                                                <span>Xóm Nguộn</span>
                                            </div>
                                            <div>Xã Tân Thanh, Huyện Lạng Giang, Bắc Giang</div>

                                        </div>

                                    </div>
                                    <div class="pt-2">
                                        <div class="flex">
                                            <button class="text-[#3498db]">Cập nhật</button>
                                            <button class="text-[#3498db] pl-4">Xóa</button>
                                        </div>
                                        <div class="pt-2"><button class="border font-normal px-1 py-1 rounded-sm">Thiết lập mặc định</button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-b-[1px] pb-3">

                                <div class="flex justify-between px-6">
                                    <div>
                                        <div class="py-3"><span>Hà Văn Anh</span>
                                            <span>0328208896</span>
                                        </div>

                                        <div class="font-light">
                                            <div>
                                                <span>Xóm Nguộn</span>
                                            </div>
                                            <div>Xã Tân Thanh, Huyện Lạng Giang, Bắc Giang</div>

                                        </div>

                                    </div>
                                    <div class="pt-2">
                                        <div class="flex">
                                            <button class="text-[#3498db]">Cập nhật</button>
                                            <button class="text-[#3498db] pl-4">Xóa</button>
                                        </div>
                                        <div class="pt-2"><button class="border font-normal px-1 py-1 rounded-sm">Thiết lập mặc định</button></div>
                                    </div>
                                </div>
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