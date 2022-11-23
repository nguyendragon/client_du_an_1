<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once "layout/head.php" ?>
</head>

<body>
    <div class="trangchu">
        <?php include_once "layout/header.php" ?>
        <div class="banner__container">
            <img src="<?=BASE_URL?>/public/images/img04.jpg" alt="">
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

        <?php include_once "layout/banner.php" ?>

        
        <div class="sp">
            <div>
                <h1 class="font-bold text-xl m-2">CHỌN THEO THỂ LOẠI</h1>
                <div style="display:grid; grid-template-columns: repeat(10,1fr); gap:10px ">
                    <?php
                    foreach($category as $key => $cate) :  ?>
                        <div>
                            <img class="rounded-2xl" src="public/images/<?=$cate['images']?>" alt="">
                            <p class="ten"><?=$cate['name_category']?></p>
                        </div>
                    <?php endforeach ?>
                </div>
                <div class="font-bold text-center py-8">
                    <a href="">XEM TẤT CẢ<i class='bx bxs-chevron-right'></i></a>
                </div>
            </div>

            <div class="">
                <h1 class="font-bold text-xl m-2 uppecase">KHÁM PHÁ MÓN MỚI</h1>
                <div style="display:grid; grid-template-columns: repeat(6,1fr); gap:10px ">
                    <?php
                        foreach($product as $key => $item) :
                    ?>
                        <div class="rounded-2xl bg-white px-2 py-4 ">
                            <a href="product/details/<?=$item['id_product']?>">
                                <div class="flex justify-center">
                                    <img class="w-[165px] h-[165px] rounded" src="<?=BASE_IMG.$item['image']?>" alt="">
                                </div>
                                <h2 class="font-bold text py-1 hover:text-red-600"><?=$item['name_product']?></h2>
                                <p class="font-bold py-1 hover:text-red-600"><?=str_replace(",",  ".", number_format($item['price']))?>đ</p>
                                <p><i class="hover:text-red-600 text-red-600 fa-sharp fa-solid fa-location-dot"></i> 3.3km
                                </p>
                                <div class="text-center py-4 px-2">
                                    <a
                                    href="product/add_cart/<?=$item['id_product']?>"
                                    class=" hover:text-white hover:bg-black border-gray-400 px-8 py-2 rounded-xl text-black bg-gray-200 font-bold  " href="">Chọn mua</a>
                                </div>
                            </a>
                        </div>
                    <?php endforeach ?>
                </div>
                <div class="font-bold text-center  py-8">
                    <a href="">XEM TẤT CẢ<i class='bx bxs-chevron-right'></i></a>
                </div>
            </div>

            <div class="">
                <h1 class="font-bold text-xl m-2 uppecase">Thử quán mới</h1>
                <div style="display:grid; grid-template-columns: repeat(6,1fr); gap:10px ">
                    <?php 
                    foreach($restaurants as $key => $item) :
                    ?>
                        <div class="rounded-2xl bg-white px-2 py-4 ">
                            <a href="restaurant/details/<?=$item['link']?>">
                                <div class="flex justify-center">
                                    <img class="w-[165px] h-[165px] rounded" src="<?=$item['images']?>" alt="">
                                </div>
                                <h2 class="font-bold text py-1 hover:text-red-600"><?=$item['name']?></h2>
                                <p class=" hover:text-red-600"><i class=" text-red-600 fa-sharp fa-solid fa-location-dot"></i> 0.3km</p>
                                <div class="flex py-2  hover:text-red-600">
                                    <img class="w-6" src="public/images/sale3.png" alt="">
                                    <div class="px-2">Giảm 10.000đ</div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach ?>
                </div>
                <div class="font-bold text-center  py-8">
                    <a href="">XEM TẤT CẢ<i class='bx bxs-chevron-right'></i></a>
                </div>
            </div>
        </div>
        <?php include_once "layout/footer.php" ?>
    </div>


    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://kit.fontawesome.com/459431e08d.js" crossorigin="anonymous"></script>
    <script src="public/js/gt.js"></script>
</body>

</html>