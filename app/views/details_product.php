<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://use.fontawesome.com/390065aef6.js"></script>
    <link rel="stylesheet" href="<?=BASE_URL?>/public/css/style.css">
    <link rel="stylesheet" href="<?=BASE_URL?>/public/js/gt.js">
    <title>Document</title>
</head>

<body>
    <?php include_once "layout/header.php" ?>
    <div class="bg-[#f6f6f6] md:py-6">
        <div class="max-w-6xl m-auto grid md:grid-cols-3 gap-8">
            <!-- content-left -->
            <div class="content-left md:col-span-2">
                <div class="bg-white drop-shadow-md rounded-md mb-4">
                    <!-- banner -->
                    <div><img class="w-full" src="<?=BASE_URL?>/public/images/Capture.PNG" alt=""></div>
                    <div class="md:px-12 px-4 py-6">
                        <div>
                            <!-- <div class=""><img class="fixed" src="<?=BASE_URL?>/public/images/qrcode_loship.vn.png" alt=""></div> -->
                            <span class="bg-[#f7001e] p-1 rounded-xl text-white mr-3 mb-3 font-semibold"><i class="fa fa-star-o" aria-hidden="true"></i> Đối tác Loship</span>
                            <span class="bg-[#0897ee] p-1 rounded-xl text-white mb-3 "><i class="fa fa-star-half" aria-hidden="true"></i> Cửa hàng chu đáo</span>
                            <i class="fa fa-heart-o hover:text-red-500 float-right md:block hidden" aria-hidden="true"></i>
                        </div>
                        <h1 class="py-2 text-2xl font-bold">TocoToco Bubble Tea - Âu Cơ Q11</h1>
                        <button class="border p-1 rounded-xl ">Trà sữa</button>
                        <div class="grid md:grid-cols-2">
                            <div>
                                <div class="pt-2"><i class="fa fa-map-marker "> 7.2km </i><span class="text-lime-500	"> Đang mở cửa</span></div>
                                <div class="py-2"><i class="fa fa-thumbs-o-up"></i> 98.6% <span class="text-[#9c9c9c]">(725 đánh giá)</span> <a href="" class="text-sky-400 md:float-none float-right">Xem tất cả</a></div>
                                <p class=" md:block hidden">233 Âu Cơ, phường 5 Quận 11 Hồ Chí Minh</p>
                            </div>

                            <div class=" md:block hidden">
                                <p class="py-2"><i class="fa fa-link" aria-hidden="true"></i> 
                                https://loship.vn/trasuatencent 
                                <button class="bg-[#f6f6f6] text-xs float-right">copy link</button></p>
                                <p><i class="fa fa-star-o"></i> Quán hỗ trợ: MUỖNG/NĨA/DAO NHỰA</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- responsive -->
                <div class="md:hidden block mb-3">
                    <div class="mb-3 bg-white p-3">
                        <i class="fa fa-certificate"></i> <span>Ưu đãi...</span>
                    </div>

                    <div class=" bg-white p-3">
                        <i class="fa fa-user-plus" aria-hidden="true"></i> <span>Tạo nhóm cùng đặt với bạn bè</span>
                    </div>
                </div>
                <!-- menu danh mục-->
                <div class="grid md:grid-cols-4 rounded-md">
                    <div class="md:block hidden drop-shadow-md">
                        <ul class="bg-white p-4 mr-4">
                            <li class="border-b py-1 hover:text-red-500 text-sm"><a href="">SPECIAL DRINK</a></li>
                            <li class="border-b py-1 hover:text-red-500 text-sm"><a href="">FRESH FRUIT TEA</a></li>
                            <li class="border-b py-1 hover:text-red-500 text-sm"><a href="">MACHIATO CREAM CHEESE</a></li>
                            <li class="border-b py-1 hover:text-red-500 text-sm"><a href="">TRÀ SỮA</a></li>
                            <li class="py-1 hover:text-red-500 text-sm"><a href="">TRÀ SỮA TAIWAN</a></li>
                        </ul>
                    </div>

                    <div class="md:col-span-3">

                        <div class="p-3 bg-white rounded-md">
                            <h1 class="font-bold">SPECIAL DRINK</h1>
                            <!-- product -->
                            <div class="flex justify-between my-8">
                                <div class="flex">
                                    <img class="w-36 rounded-md" src="<?=BASE_URL?>/public/images/trasua.png" alt="">
                                    <div class="px-2">
                                        <p class="font-semibold">Trà Sữa Trân Châu - 1 ly</p>
                                        <span class="font-semibold">20.000 đ</span>
                                    </div>
                                </div>

                                <div>
                                    <button><i class="text-red-500 fa fa-plus-square fa-2x md:block hidden"></i></button>
                                </div>
                            </div>
                            <!-- product -->
                            <div class="flex justify-between my-6">
                                <div class="flex">
                                    <img class="w-36 rounded-md" src="<?=BASE_URL?>/public/images/trasua.png" alt="">
                                    <div class="px-2">
                                        <p class="font-semibold">Trà Sữa Trân Châu - 1 ly</p>
                                        <span class="font-semibold">20.000 đ</span>
                                    </div>
                                </div>

                                <div>
                                    <button><i class="text-red-500 bi fa fa-plus-square fa-2x md:block hidden"></i></button>
                                </div>
                            </div>
                            <!-- product -->
                            <div class="flex justify-between my-6">
                                <div class="flex">
                                    <img class="w-36 rounded-md" src="<?=BASE_URL?>/public/images/trasua.png" alt="">
                                    <div class="px-2">
                                        <p class="font-semibold">Trà Sữa Trân Châu - 1 ly</p>
                                        <span class="font-semibold">20.000 đ</span>
                                    </div>
                                </div>

                                <div>
                                    <button><i class="text-red-500 fa fa-plus-square fa-2x md:block hidden"></i></button>
                                </div>
                            </div>
                            <!-- product -->
                            <div class="flex justify-between my-6">
                                <div class="flex">
                                    <img class="w-36 rounded-md" src="<?=BASE_URL?>/public/images/trasua.png" alt="">
                                    <div class="px-2">
                                        <p class="font-semibold">Trà Sữa Trân Châu - 1 ly</p>
                                        <span class="font-semibold">20.000 đ</span>
                                    </div>
                                </div>

                                <div>
                                    <button><i class="text-red-500 fa fa-plus-square fa-2x md:block hidden"></i></button>
                                </div>
                            </div>
                            <!-- product -->
                            <div class="flex justify-between my-6">
                                <div class="flex">
                                    <img class="w-36 rounded-md" src="<?=BASE_URL?>/public/images/trasua.png" alt="">
                                    <div class="px-2">
                                        <p class="font-semibold">Trà Sữa Trân Châu - 1 ly</p>
                                        <span class="font-semibold">20.000 đ</span>
                                    </div>
                                </div>

                                <div>
                                    <button><i class="text-red-500 fa fa-plus-square fa-2x md:block hidden"></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="p-3 bg-white mt-3 rounded-md">
                            <h1 class="font-bold">FRESH FRUIT TEA</h1>
                            <!-- product -->
                            <div class="flex justify-between my-8">
                                <div class="flex">
                                    <img class="w-36 rounded-md" src="<?=BASE_URL?>/public/images/trasua.png" alt="">
                                    <div class="px-2">
                                        <p class="font-semibold">Trà Sữa Trân Châu - 1 ly</p>
                                        <span class="font-semibold">20.000 đ</span>
                                    </div>
                                </div>

                                <div>
                                    <button><i class="text-red-500 fa fa-plus-square fa-2x md:block hidden"></i></button>
                                </div>
                            </div>
                            <!-- product -->
                            <div class="flex justify-between my-6">
                                <div class="flex">
                                    <img class="w-36 rounded-md" src="<?=BASE_URL?>/public/images/trasua.png" alt="">
                                    <div class="px-2">
                                        <p class="font-semibold">Trà Sữa Trân Châu - 1 ly</p>
                                        <span class="font-semibold">20.000 đ</span>
                                    </div>
                                </div>

                                <div>
                                    <button><i class="text-red-500 bi fa fa-plus-square fa-2x md:block hidden"></i></button>
                                </div>
                            </div>
                            <!-- product -->
                            <div class="flex justify-between my-6">
                                <div class="flex">
                                    <img class="w-36 rounded-md" src="<?=BASE_URL?>/public/images/trasua.png" alt="">
                                    <div class="px-2">
                                        <p class="font-semibold">Trà Sữa Trân Châu - 1 ly</p>
                                        <span class="font-semibold">20.000 đ</span>
                                    </div>
                                </div>

                                <div>
                                    <button><i class="text-red-500 fa fa-plus-square fa-2x md:block hidden"></i></button>
                                </div>
                            </div>
                            <!-- product -->
                            <div class="flex justify-between my-6">
                                <div class="flex">
                                    <img class="w-36 rounded-md" src="<?=BASE_URL?>/public/images/trasua.png" alt="">
                                    <div class="px-2">
                                        <p class="font-semibold">Trà Sữa Trân Châu - 1 ly</p>
                                        <span class="font-semibold">20.000 đ</span>
                                    </div>
                                </div>

                                <div>
                                    <button><i class="text-red-500 fa fa-plus-square fa-2x md:block hidden"></i></button>
                                </div>
                            </div>
                            <!-- product -->
                            <div class="flex justify-between my-6">
                                <div class="flex">
                                    <img class="w-36 rounded-md" src="<?=BASE_URL?>/public/images/trasua.png" alt="">
                                    <div class="px-2">
                                        <p class="font-semibold">Trà Sữa Trân Châu - 1 ly</p>
                                        <span class="font-semibold">20.000 đ</span>
                                    </div>
                                </div>

                                <div>
                                    <button><i class="text-red-500 fa fa-plus-square fa-2x md:block hidden"></i></button>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
            <!-- content-right -->
            <div class="content-right md:block hidden">
                <ul class="p-3 bg-white rounded-md mb-3 rounded-lg">
                    <li class="border-b py-2 font-bold">
                        <h1>ƯU ĐÃI</h1>
                    </li>
                    <li class="border-b py-2">
                        <p><i class="fa fa-map-marker"></i> Freeship đơn hàng dưới 2km</p>
                    </li>
                    <li class="py-2"><button><i class="fa fa-certificate"></i> Ưu đãi</button></li>
                </ul>

                <div class="">
                    <div class="px-3 py-6 bg-white drop-shadow-md mb-3 rounded-lg">
                        <div class="flex justify-between border-b pb-2 text-[#9c9c9c]">
                            <h1>ĐƠN HÀNG CỦA BẠN</h1> <button class="bg-[#0897ee] rounded-lg p-1 text-white font-semibold">Đặt nhóm</button>
                        </div>
                        <div class="text-center p-4">
                            <p>Hãy chọn món yêu thích của bạn trên menu để đặt giao hàng ngay!</p>
                        </div>
                        <div class="flex justify-between font-semibold">
                            <p>Tổng: <span class="text-[#9c9c9c]">(Tạm tính) <i class="fa fa-question-circle-o" aria-hidden="true"></i></span> </p> <span class="text-[#f7001e]">~ 0đ</span>
                        </div>
                    </div>

                    <div class="text-center">
                        <button class="bg-[#cbcbcb]	w-full text-white py-2 mb-2 rounded-lg">Tiếp tục</button>
                        <p class="text-[#9c9c9c]">lượt đặt hàng!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once "layout/footer.php" ?>
</body>

</html>