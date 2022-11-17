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
                        <div class="text-right pt-2 pr-4 border-b-[1px] pb-2">
                            <button class="text-[#3498db]">Đánh dấu tất cả là đã đọc</button>
                        </div>

                        <div class="flex justify-between items-center border-b-[1px] py-5 hover:bg-[#f5f5f5] px-6">
                            <div class="flex items-center">
                                <img class="rounded-full h-[60px] w-[60px]" src="<?=BASE_URL?>/public/images/2022-04-07 (4).png" alt="">
                                <div class="">
                                    <div class=" pl-2 font-light">
                                        <span class="font-bold">user</span>
                                        <span>đã theo dõi bạn</span>
                                        <div class="pt-1">16:49 11/11/2022</div>
                                    </div>

                                </div>
                            </div>

                            <div>
                                <button class="border py-1 px-2 hover:text-[#ff3f34] hover:border-[#ff3f34] font-light rounded-sm">Theo dõi lại</button>
                            </div>
                        </div>
                        <!-- box follow -->
                        <div class="flex justify-between items-center border-b-[1px] py-5 hover:bg-[#f5f5f5] px-6">
                            <div class="flex items-center">
                                <img class="rounded-full h-[60px] w-[60px]" src="<?=BASE_URL?>/public/images/long1.jpg" alt="">
                                <div class="">
                                    <div class=" pl-2 font-light">
                                        <span class="font-bold">user</span>
                                        <span>đã bình luận về bài viết của bạn</span>
                                        <div class="pt-1">16:40 10/11/2022</div>
                                    </div>

                                </div>
                            </div>

                            <div>
                                <button class="border py-1 px-2 hover:text-[#ff3f34] hover:border-[#ff3f34] font-light  rounded-sm">Xem chi tiết</button>
                            </div>
                        </div>
                        <!-- box bình luận 1-->

                        <div class="flex justify-between items-center border-b-[1px] py-5 hover:bg-[#f5f5f5] px-6">
                            <div class="flex items-center">
                                <img class="rounded-full h-[60px] w-[60px]" src="<?=BASE_URL?>/public/images/tai.jpg" alt="">
                                <div class="">
                                    <div class=" pl-2 font-light">
                                        <span class="font-bold">user</span>
                                        <span>đã bình luận về bài viết của bạn</span>
                                        <div class="pt-1">13:29 09/11/2022</div>
                                    </div>

                                </div>
                            </div>

                            <div>
                                <button class="border py-1 px-2 hover:text-[#ff3f34] hover:border-[#ff3f34] font-light  rounded-sm">Xem chi tiết</button>
                            </div>
                        </div>
                        <!-- box bình luận 2 -->

                        <div class="flex justify-between items-center border-b-[1px] py-5 hover:bg-[#f5f5f5] px-6">
                            <div class="flex items-center">
                                <img class="rounded-full h-[60px] w-[60px]" src="<?=BASE_URL?>/public/images/food.jpeg" alt="">
                                <div class="">
                                    <div class=" pl-2 font-light">

                                        <span>Đơn hàng <span class="font-bold">hbg-1102</span> của bạn đã được giao</span>
                                        <div class="pt-1">13:20 09/11/2022</div>
                                    </div>

                                </div>
                            </div>

                            <div>
                                <button class="border py-1 px-2 hover:text-[#ff3f34] hover:border-[#ff3f34] font-light  rounded-sm">Xem chi tiết</button>
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