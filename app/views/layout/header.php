<?php
Session::init();
?>

<header class="border-b-2">
    <div class="conten flex m-2">
        <div class="dropdown">
            <button class="dropbtn flex"><img src="<?= BASE_URL ?>/public/images/img01.png" alt="" class="w-7">
                <p class="px-2">Vietnamese</p>
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <div class="flex px-2 py-2 m-2">
                    <img src="img/img02.png" alt="" class="w-7">
                    <a href="#">English</a>
                </div>
                <div class="flex px-2 py-2 m-2">
                    <img src="img/img01.png" alt="" class="w-7">
                    <a href="#">Vietnamese</a>
                </div>
            </div>
        </div>

        <div class="flex conten2">
            <p class="pl-4 pr-1">Tải ứng dụng Loship :</p>
            <div class="conten3"><input class="hover:text-red-600 hover:border-red-600 rounded border-solid border-2 border-gray-400 px-2 py-0" type="button" value="iOS"></div>
            <div class=""><input class="hover:text-red-600  hover:border-red-600 rounded border-solid border-2 border-gray-400 px-2 py-0" type="button" value="Android"></div>
        </div>
        <div class=" conten2">
            <p class="">- Hoặc -</p>
        </div>
        <div class=" conten2">
            <p class=""> +84</p>
        </div>
        <div class=" conten3"><input class="rounded border-solid border-2 border-gray-400 px-2 py-0" type="text" placeholder="Nhập số điện thoại"></div>
        <div class=" conten3"><input class="rounded border-solid border-2 border-gray-400 px-2 py-0 hover:text-white hover:bg-red-600" type="submit" value="Gửi link"></div>

        <div class="dropdown">
            <button class="dropbtn">Trở thành đối tác Loship
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="#">Hợp tác quán ăn</a>
                <a href="#">Hợp tác shipper</a>
            </div>
        </div>
        <div class=" conten2">
            <a href="#">Đi chợ với Lomart</a>
        </div>
        <div class=" conten2">
            <a href="#">Loship Hỏi đáp</a>
        </div>

    </div>

    <div class="container flex">
        <div class="m-2">
            <a href="<?= BASE_URL ?>"><img src="<?= BASE_URL ?>/public/images/img03.png" alt="" width="120px"></a>
        </div>
        <div class="dropdown">
            <button class="dropbtn1 flex">
                <p class="px-2">Hà nội</p>
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <div class=" px-2 ">
                    <a href="#">Hồ Chí Minh</a>
                </div>
                <div class=" px-2">
                    <a href="#">Hà nội</a>
                </div>
                <div class=" px-2">
                    <a href="#">Cần Thơ</a>
                </div>
                <div class=" px-2">
                    <a href="#">Đà Nẵng</a>
                </div>
                <div class=" px-2">
                    <a href="#">Quy Nhơn</a>
                </div>
                <div class=" px-2">
                    <a href="#">Quảng Ninh</a>
                </div>
                <div class=" px-2">
                    <a href="#">Thừa Thiên Huế</a>
                </div>
                <div class=" px-2">
                    <a href="#">Hải Phòng</a>
                </div>
            </div>
        </div>

        <div class=" conten2 hover:text-red-600">/
            <a href="#">Thử quán mới</a>
        </div>
        <div class=" conten2 hover:text-red-600">
            <a href="#">Đang khuyến mại</a>
        </div>
        <div class=" conten2 hover:text-red-600">
            <a href="#">Thương hiệu quen thuộc</a>
        </div>
        <div class=" conten2 hover:text-red-600">
            <a href="#">Cửa hàng gần bạn</a>
        </div>
        <div class=" conten2 hover:text-red-600">
            <a href="#">Vừa đặt gần đây</a>
        </div>
        <div class=" conten2 hover:text-red-600">
            <a href="#">Cửa hàng chu đáo</a>
        </div>

        <?php if (!isset($_SESSION['token'])) : ?>
            <div class=" m-2 px-10">
                <a class="hover:text-white hover:bg-black text-black font-bold bg-gray-200  px-4 rounded-xl py-2" href="<?= BASE_URL ?>/user/login">Đăng nhập</a>
            </div>
        <?php endif ?>
        <?php if (isset($_SESSION['token'])) : ?>
            <div class=" m-2 px-10">
                <a class="hover:text-white hover:bg-black text-black font-bold bg-gray-200  px-4 rounded-xl py-2" href="<?= BASE_URL ?>/user/profile">Tài khoản</a>
            </div>
        <?php endif ?>

    </div>
</header>