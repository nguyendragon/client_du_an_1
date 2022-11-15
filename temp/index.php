<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự Án 1</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="trangchu">
        <?php include_once "./layout/header.php" ?>
        <div class="banner__container">
            <img src="img/img04.jpg" alt="">
            <div class="form_chu text-center text-6xl px-2 py-2 ">
                <h1 class=" font-bold">ĐẶT MÓN NÀO</h1>
                <h1 class=" font-bold py-4 text-red-600">CŨNG FREESHIP</h1>
            </div>
            <div class="form__map">
                <div class="form__input px-5 py-5">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" name="" id="" placeholder="Tìm quán ăn, trà sữa yêu thích đế đặt Loship giao ngay">

                </div>
                <div class="map__item px-3 py-3">
                    <span class="text-gray-500 px-2 py-2">Giao tới địa chỉ</span>
                    <div class=" map__items-address">
                        <i class=" text-red-600  px-2 py-2 fa-sharp fa-solid fa-location-dot"></i>
                        <p class="px-2 py-2">Hà nội</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="image-slider ">
            <div class="image-item">
                <div class="image">
                    <img src="https://tea-3.lozi.vn/v1/images/resized/banner-mobile-3185-1664366358?w=393&type=o" alt="">
                </div>
            </div>
            <div class="image-item">
                <div class="image">
                    <img src="https://tea-3.lozi.vn/v1/images/resized/banner-mobile-3187-1664264858?w=393&type=o" alt="">
                </div>
            </div>
            <div class="image-item">
                <div class="image">
                    <img src="https://tea-3.lozi.vn/v1/images/resized/banner-mobile-3677-1667465173?w=393&type=o" alt="">
                </div>
            </div>
            <div class="image-item">
                <div class="image">
                    <img src="https://tea-3.lozi.vn/v1/images/resized/banner-mobile-2739-1655806664?w=393&type=o" alt="">
                </div>
            </div>
            <div class="image-item">
                <div class="image">
                    <img src="https://tea-3.lozi.vn/v1/images/resized/banner-mobile-2740-1655885066?w=393&type=o" alt="">
                </div>
            </div>
            <div class="image-item">
                <div class="image">
                    <img src="https://tea-3.lozi.vn/v1/images/resized/banner-mobile-3240-1664364927?w=393&type=o" alt="">
                </div>
            </div>
            <div class="image-item">
                <div class="image">
                    <img src="https://tea-3.lozi.vn/v1/images/resized/banner-mobile-3670-1667286026?w=393&type=o" alt="">
                </div>
            </div>
        </div>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

        <div class="sp">
            <div>
                <h1 class="font-bold text-xl m-2">CHỌN THEO THỂ LOẠI</h1>
                <div style="display:grid; grid-template-columns: repeat(10,1fr); gap:10px ">
                    <div><img class=" rounded-2xl" src="img/1.jfif" alt="">
                        <p class="ten">Cafe</p>
                    </div>
                    <div><img class=" rounded-2xl" src="img/trasua.jfif" alt="">
                        <p class="ten">Trà sữa</p>
                    </div>
                    <div><img class=" rounded-2xl" src="img/antrua.jfif" alt="">
                        <p class="ten">Ăn Trưa</p>
                    </div>
                    <div><img class=" rounded-2xl" src="img/antoi.jfif" alt="">
                        <p class="ten">Ăn tối</p>
                    </div>
                    <div><img class=" rounded-2xl" src="img/an vat.jfif" alt="">
                        <p class="ten">Ăn vặt</p>
                    </div>
                    <div><img class=" rounded-2xl" src="img/bunbo.jfif" alt="">
                        <p class="ten">Bún bò</p>
                    </div>
                    <div><img class=" rounded-2xl" src="img/tratraicay.jfif" alt="">
                        <p class="ten">Trà trái cây</p>
                    </div>
                    <div><img class=" rounded-2xl" src="img/banhmyviet.jfif" alt="">
                        <p class="ten">Bánh mỳ việt</p>
                    </div>
                    <div><img class=" rounded-2xl" src="img/banhtrang.jfif" alt="">
                        <p class="ten">Bánh tráng</p>
                    </div>
                    <div><img class=" rounded-2xl" src="img/banhbao.jfif" alt="">
                        <p class="ten">Bánh bao</p>
                    </div>
                </div>
                <div class="font-bold text-center py-8">
                    <a href="">XEM TẤT CẢ<i class='bx bxs-chevron-right'></i></a>
                </div>
            </div>

            <div class="">
                <h1 class="font-bold text-xl m-2">KHÁM PHÁ MÓN MỚI</h1>
                <div style="display:grid; grid-template-columns: repeat(6,1fr); gap:10px ">
                    <div class="rounded-2xl bg-white px-2 py-4 "><a href="">
                            <img src="img/bunbo.jfif" alt="">
                            <h2 class="font-bold text py-1 hover:text-red-600">Bún bò Hà</h2>
                            <p class="font-bold py-1 hover:text-red-600">40.000đ</p>
                            <p><i class="hover:text-red-600 text-red-600 fa-sharp fa-solid fa-location-dot"></i> 3.3km
                            </p>
                            <div class="text-center py-4 px-2">
                                <a class=" hover:text-white hover:bg-black border-gray-400 px-8 py-2 rounded-xl text-black bg-gray-200 font-bold  " href="">Chọn mua</a>
                            </div>
                        </a>
                    </div>
                    <div class="rounded-2xl bg-white px-2 py-4 "><a href="">
                            <img src="img/bunbo.jfif" alt="">
                            <h2 class="font-bold text py-1 hover:text-red-600">Bún bò Hà</h2>
                            <p class="font-bold py-1 hover:text-red-600">40.000đ</p>
                            <p><i class="hover:text-red-600 text-red-600 fa-sharp fa-solid fa-location-dot"></i> 3.3km
                            </p>
                            <div class="text-center py-4 px-2">
                                <a class=" hover:text-white hover:bg-black border-gray-400 px-8 py-2 rounded-xl text-black bg-gray-200 font-bold  " href="">Chọn mua</a>
                            </div>
                        </a>
                    </div>
                    <div class="rounded-2xl bg-white px-2 py-4 "><a href="">
                            <img src="img/bunbo.jfif" alt="">
                            <h2 class="font-bold text py-1 hover:text-red-600">Bún bò Hà</h2>
                            <p class="font-bold py-1 hover:text-red-600">40.000đ</p>
                            <p><i class="hover:text-red-600 text-red-600 fa-sharp fa-solid fa-location-dot"></i> 3.3km
                            </p>
                            <div class="text-center py-4 px-2">
                                <a class=" hover:text-white hover:bg-black border-gray-400 px-8 py-2 rounded-xl text-black bg-gray-200 font-bold  " href="">Chọn mua</a>
                            </div>
                        </a>
                    </div>
                    <div class="rounded-2xl bg-white px-2 py-4 "><a href="">
                            <img src="img/bunbo.jfif" alt="">
                            <h2 class="font-bold text py-1 hover:text-red-600">Bún bò Hà</h2>
                            <p class="font-bold py-1 hover:text-red-600">40.000đ</p>
                            <p><i class="hover:text-red-600 text-red-600 fa-sharp fa-solid fa-location-dot"></i> 3.3km
                            </p>
                            <div class="text-center py-4 px-2">
                                <a class=" hover:text-white hover:bg-black border-gray-400 px-8 py-2 rounded-xl text-black bg-gray-200 font-bold  " href="">Chọn mua</a>
                            </div>
                        </a>
                    </div>
                    <div class="rounded-2xl bg-white px-2 py-4 "><a href="">
                            <img src="img/bunbo.jfif" alt="">
                            <h2 class="font-bold text py-1 hover:text-red-600">Bún bò Hà</h2>
                            <p class="font-bold py-1 hover:text-red-600">40.000đ</p>
                            <p><i class="hover:text-red-600 text-red-600 fa-sharp fa-solid fa-location-dot"></i> 3.3km
                            </p>
                            <div class="text-center py-4 px-2">
                                <a class=" hover:text-white hover:bg-black border-gray-400 px-8 py-2 rounded-xl text-black bg-gray-200 font-bold  " href="">Chọn mua</a>
                            </div>
                        </a>
                    </div>
                    <div class="rounded-2xl bg-white px-2 py-4 "><a href="">
                            <img src="img/bunbo.jfif" alt="">
                            <h2 class="font-bold text py-1 hover:text-red-600">Bún bò Hà</h2>
                            <p class="font-bold py-1 hover:text-red-600">40.000đ</p>
                            <p><i class="hover:text-red-600 text-red-600 fa-sharp fa-solid fa-location-dot"></i> 3.3km
                            </p>
                            <div class="text-center py-4 px-2">
                                <a class=" hover:text-white hover:bg-black border-gray-400 px-8 py-2 rounded-xl text-black bg-gray-200 font-bold  " href="">Chọn mua</a>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="font-bold text-center  py-8">
                    <a href="">XEM TẤT CẢ<i class='bx bxs-chevron-right'></i></a>
                </div>
            </div>

            <div class="">
                <h1 class="font-bold text-xl m-2">THƯƠNG HIỆU QUEN THUỘC</h1>
                <div style="display:grid; grid-template-columns: repeat(6,1fr); gap:10px ">
                    <div class="rounded-2xl bg-white px-2 py-4 ">
                        <a href="chitietsanpham.php">
                            <img src="https://tea-3.lozi.vn/v1/images/resized/tra-sua-tung-tea-quan-hai-chau-da-nang-1603096072744940286-eatery-avatar-1667292634" alt="">
                            <h2 class="font-bold text py-1 hover:text-red-600">Trà sữa Tùng Tea</h2>

                            <p class=" hover:text-red-600"><i class=" text-red-600 fa-sharp fa-solid fa-location-dot"></i> 0.3km</p>
                            <div class="flex py-2  hover:text-red-600"><img class="w-6" src="img/sale3.png" alt="">
                                <div class="px-2">Giảm 10.000đ</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="font-bold text-center  py-8">
                    <a href="">XEM TẤT CẢ<i class='bx bxs-chevron-right'></i></a>
                </div>
            </div>
        </div>
        <?php include_once "./layout/footer.php" ?>
    </div>


    <script src="assets/js/gt.js"></script>
    <script src="https://kit.fontawesome.com/459431e08d.js" crossorigin="anonymous"></script>
</body>

</html>