<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once "layout/head.php" ?>
</head>

<body>
    <?php include_once "layout/header.php" ?>
    <div class="bg-[#f6f6f6] px-2 py-4">
        <div class="max-w-6xl m-auto bg-white px-4 py-2 rounded-lg drop-shadow">
            <div class="flex py-4">
                <a href="<?=BASE_URL?>">Trang chủ</a>
                <span class="px-2">/</span>
                <a href="<?=BASE_URL?>">Sản phẩm</a>
                <span class="px-2">/</span>
                <a href="<?=BASE_URL?>">Chi tiết</a>
            </div>

            <div class="grid grid-cols-4">
                <div class="flex justify-center items-center col-span-2">
                    <img src="<?= BASE_IMG . $details_product['image'] ?>" alt="" class="w-[162px] h-[162px]" id="main-img">
                    <script>
                        $(() => {
                            $('p img').click(function() {
                                let imgPath = $(this).attr('src');
                                $('#main-img').attr('src', imgPath);
                            })
                        })
                    </script>
                </div>

                <div>
                    <div>
                        <!-- Tên sản phẩm -->
                        <h1 class="text-3xl font-bold"><?= $details_product['name_product'] ?></h1>
                        <!-- Giá sản phẩm -->
                        <div class="my-4">
                            <span class="font-semibold line-through	text-2xl mr-2 hidden">55.000 đ</span>
                            <span class="font-semibold text-2xl"><?= number_format($details_product['price']) ?> đ</span>
                        </div>
                        <!-- Số lượng -->
                        <div>
                            <h3 class="font-semibold">Số lượng:</h3>
                            <button class="minus-btn px-4 py-2 border rounded-lg" onclick="handleMinus()">-</button>
                            <input type="text" name="amount" id="amount" class="w-10 py-2 text-center bg-white" value="1" disabled>
                            <button class="plus-btn px-4 py-2 border rounded-lg" onclick="handlePlus()">+</button>
                        </div>
                        <button class="bg-[#f7001e] p-4 rounded-lg text-white font-bold my-4"><i class="fa fa-shopping-cart" aria-hidden="true"></i> THÊM VÀO GIỎ HÀNG</button>
                        <div class="py-2"><i class="fa fa-thumbs-o-up"></i> 98.6% <span class="text-[#9c9c9c]">(725 đánh giá)</span> <a href="" class="text-sky-400 md:float-none float-right">Xem tất cả</a></div>
                    </div>
                </div>

                <div>
                    <div class="p-3 bg-white rounded-md mb-3 rounded-lg border">
                        <div class="border-b py-2 font-bold">
                            <h1>ƯU ĐÃI</h1>
                        </div>
                        <div class="border-b py-2">
                            <p><i class="fa fa-map-marker"></i> Freeship đơn hàng dưới 2km</p>
                        </div>
                        <div class="py-2 item"><button class="items-center flex"><i class="fa fa-certificate"></i>
                                <p> Ưu đãi</p><i class="fa fa-chevron-right float-right" aria-hidden="true"></i>
                            </button></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-6xl m-auto bg-white px-4 py-2 mt-4 rounded-lg drop-shadow">
            <div class="flex p-2">
                <h1 class="font-semibold">Sản phẩm tương tự</h1>
            </div>

            <div class="py-4">
                <div class="flex">
                    <a href="" class="p-2"><img src="<?= BASE_URL ?>/public/images/trasua.png" alt="" class="w-52" id="main-img"></a>
                    <a href="" class="p-2"><img src="<?= BASE_URL ?>/public/images/trasua.png" alt="" class="w-52" id="main-img"></a>
                    <a href="" class="p-2"><img src="<?= BASE_URL ?>/public/images/trasua.png" alt="" class="w-52" id="main-img"></a>
                    <a href="" class="p-2"><img src="<?= BASE_URL ?>/public/images/trasua.png" alt="" class="w-52" id="main-img"></a>
                    <a href="" class="p-2"><img src="<?= BASE_URL ?>/public/images/trasua.png" alt="" class="w-52" id="main-img"></a>
                </div>
            </div>
        </div>
    </div>
    <?php include_once "layout/footer.php" ?>
    <script>
        let amountElement = document.getElementById('amount');
        let amount = amountElement.value;
        let render = (amount) => {
            amountElement.value = amount;
        }
        let handlePlus = () => {
            amount++;
            render(amount);
        }
        let handleMinus = () => {
            if (amount > 1) {
                amount--;
            }
            render(amount);
        }
    </script>
</body>

</html>