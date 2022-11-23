<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once "layout/head.php" ?>
    <style>
        .cart {
            display: none !important;
        }
    </style>
</head>

<body>
    <div class="trangchu">
        <?php include_once "layout/header.php"; ?>
        <!-- <div class="h-full w-full mt-20">
            <div class="container mx-auto">
                <dh-component>
                    <div class="w-11/12 lg:w-2/6 mx-auto">
                        <div class="bg-gray-200 h-1 flex items-center justify-between">
                            <div class="w-1/3 bg-indigo-700 h-1 flex items-center">
                                <div class="bg-indigo-700 h-6 w-6 rounded-full shadow flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFFFFF" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <path d="M5 12l5 5l10 -10" />
                                    </svg>
                                </div>
                            </div>
                            <div class="w-1/3 flex justify-between bg-indigo-700 h-1 items-center relative">
                                <div class="absolute right-0 -mr-2">
                                    <div class="relative bg-white shadow-lg px-2 py-1 rounded mt-16 -mr-12">
                                        <svg class="absolute top-0 -mt-1 w-full right-0 left-0" width="16px" height="8px" viewBox="0 0 16 8" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="Progress-Bars" transform="translate(-322.000000, -198.000000)" fill="#FFFFFF">
                                                    <g id="Group-4" transform="translate(310.000000, 198.000000)">
                                                        <polygon id="Triangle" points="20 0 28 8 12 8"></polygon>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                        <p tabindex="0" class="focus:outline-none text-indigo-700 text-xs font-bold">Step 3: Analyzing</p>
                                    </div>
                                </div>
                                <div class="bg-indigo-700 h-6 w-6 rounded-full shadow flex items-center justify-center -ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFFFFF" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <path d="M5 12l5 5l10 -10" />
                                    </svg>
                                </div>
                                <div class="bg-white h-6 w-6 rounded-full shadow flex items-center justify-center -mr-3 relative">
                                    <div class="h-3 w-3 bg-indigo-700 rounded-full"></div>
                                </div>
                            </div>
                            <div class="w-1/3 flex justify-end">
                                <div class="bg-white h-6 w-6 rounded-full shadow"></div>
                            </div>
                        </div>
                    </div>
                </dh-component>
            </div>
        </div> -->
        <div class="max-w-[1280px] border-2 mx-auto  mt-20">
            <div class="flex">
                <div class="w-3/4 bg-white px-10 py-5">
                    <div class="flex justify-between border-b pb-4">
                        <h1 class="font-semibold text-2xl">Giỏ hàng</h1>
                    </div>
                    <div class="flex mt-10 mb-5">
                        <h3 class="font-semibold text-gray-600 text-xs uppercase w-2/5">Sản phẩm</h3>
                        <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Số lượng</h3>
                        <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Giá</h3>
                        <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Tổng</h3>
                    </div>
                    <div class="max-h-[402px] min-h-[402px] overflow-y-auto overflow-x-hidden">
                        <?php
                        $total = 0;
                        $data = isset($_SESSION['cart']) ? array_reverse($_SESSION['cart']) : [];
                        foreach ($data as $index => $item) {
                            $total += $item['price'] * $item['sl'] - $item['sale'] * $item['sl'];
                        ?>
                            <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
                                <div class="flex w-2/5">
                                    <div class="">
                                        <img class="h-24 w-[100px] h-[100px]" src="<?= BASE_IMG . $item['image'] ?>" alt="">
                                    </div>
                                    <div class="flex flex-col justify-between ml-4 flex-grow">
                                        <a href="<?= BASE_URL . "/product/details/" . $item['id'] ?>" class="font-bold text-sm"><?= $item['name_product'] ?></a>
                                        <span class="text-red-500 text-md">-<?= number_format($item['sale'] * $item['sl']) ?>đ</span>
                                        <a href="<?= BASE_URL . "/product/change_cart/" . $item['id'] . "?act=delete" ?>" class="font-semibold hover:text-red-500 text-gray-500 text-xs">Remove</a>
                                    </div>
                                </div>
                                <div class="flex justify-center w-1/5">
                                    <form action="<?= BASE_URL . "/product/change_cart/" . $item['id'] . "?act=update_sl" ?>" method="post">
                                        <input class="border-1 outline-none" type="number" name="update_sl" onchange="this.form.submit()" value="<?= $item['sl'] ?>" min="1" max="10">
                                    </form>
                                </div>
                                <span class="text-center w-1/5 font-semibold text-sm"><?= number_format($item['price'] * $item['sl']) ?>đ</span>
                                <span class="text-center w-1/5 font-semibold text-sm"><?= number_format($item['price'] * $item['sl'] - $item['sale'] * $item['sl']) ?>đ</span>
                            </div>
                        <?php } ?>
                        <?php if (!isset($_SESSION['cart'])) { ?>
                            <div class="flex justify-center items-center bg-gray-100 -mx-8 px-6 py-5">
                                <p class="text-center">Không tồn tại sản phẩm nào trong giỏ hàng</p>
                            </div>
                        <?php } ?>
                    </div>
                    <a href="<?= BASE_URL ?>" class="flex font-semibold text-indigo-600 text-sm mt-10">
                        <svg class="fill-current mr-2 text-indigo-600 w-4" viewBox="0 0 448 512">
                            <path d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z" />
                        </svg>
                        Tiếp tục mua sắm
                    </a>
                </div>

                <div id="summary" class="w-1/4 px-8 py-5">
                    <h1 class="font-semibold text-2xl border-b pb-4">Order Summary</h1>
                    <div>
                        <label class="font-medium inline-block mb-3 text-sm uppercase">Shipping</label>
                        <select class="block p-2 text-gray-600 w-full text-sm">
                            <option>Standard shipping - $10.00</option>
                        </select>
                    </div>
                    <div class="py-10">
                        <label for="promo" class="font-semibold inline-block mb-3 text-sm uppercase">Promo Code</label>
                        <input type="text" id="promo" placeholder="Enter your code" class="p-2 text-sm w-full">
                    </div>
                    <button class="bg-red-500 hover:bg-red-600 px-5 py-2 text-sm text-white uppercase">Apply</button>
                    <div class="py-10">
                        <label for="promo" class="font-semibold inline-block mb-3 text-sm uppercase">Phương thức thanh toán</label>
                        <div class="mr-2 inline-block">
                            <input type="radio" name="gt" value="1" id="male">
                            <label class="cursor-pointer" for="male">Thanh toán khi nhận hàng</label>
                        </div>
                        <div class="mr-2 inline-block">
                            <input type="radio" name="gt" value="2" id="female">
                            <label class="cursor-pointer" for="female">Ngân hàng</label>
                        </div>
                        <div class="mr-2 inline-block">
                            <input type="radio" name="gt" value="3" id="other">
                            <label class="cursor-pointer" for="other">Ví điện tử</label>
                        </div>
                    </div>
                    <div class="f
                    <div class=" border-t mt-8">
                        <div class="flex font-semibold justify-between py-6 text-sm">
                            <span class="uppercase">Tổng thành tiền:</span>
                            <span><?= number_format($total) ?>đ</span>
                        </div>
                        <button id="confirm_cart" class="bg-indigo-500 font-semibold hover:bg-indigo-600 py-3 text-sm text-white uppercase w-full">Thanh toán</button>
                        <button id="delete_all_cart" class="text-center bg-red-500 font-semibold hover:bg-red-600 mt-3 py-3 text-sm text-white uppercase w-full">Xóa toàn bộ</button>
                    </div>
                </div>

            </div>
        </div>
        <?php include_once "layout/footer.php"; ?>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $('#delete_all_cart').click(function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Bạn chắc chắn muốn xóa tất cả không ?',
                showDenyButton: true,
                confirmButtonText: 'Đồng ý',
                denyButtonText: `Hủy bỏ`,
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "<?= BASE_URL . "/product/change_cart/id?act=delete_all" ?>";
                }
            })
        });

        $('#confirm_cart').click(function (e) { 
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "<?= BASE_URL . "/order/addOrders" ?>",
                data: {

                },
                dataType: "json",
                success: function (response) {
                    
                }
            });
        });
    </script>
</body>

</html>