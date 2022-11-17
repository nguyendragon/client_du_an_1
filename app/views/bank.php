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
                                <h1 class="text-md">Thẻ tín dụng/ Ghi nợ</h1>
                                <div class="">
                                    <button class="flex items-center bg-[#e74c3c] text-center text-white rounded p-2 flex">
                                        <i class=" fa fa-plus-square-o text-[22px] mr-2" aria-hidden="true"></i>
                                        <p class="text-sm">Thêm thẻ mới</p>
                                    </button>
                                </div>
                            </div>

                            <div class="min-h-[200px] flex justify-center items-center">
                                <h2 class="text-sm">Bạn chưa liên kết ngân hàng.</h2>
                            </div>
                        </div>
                        <!-- thẻ ghi nợ -->
                        <div>
                            <div class="pt-4 flex justify-between px-6 border-b-[1px] pb-3">
                                <h1 class="text-md">Tài khoản ngân hàng của tôi</h1>
                                <div class="">
                                    <button class="flex items-center bg-[#e74c3c] text-center text-white rounded p-2 flex">
                                        <i class=" fa fa-plus-square-o text-[22px] mr-2" aria-hidden="true"></i>
                                        <p class="text-sm">Thêm tài khoản ngân hàng</p>
                                    </button>
                                </div>
                            </div>

                            <div class="min-h-[200px] flex justify-center items-center">
                                <h2 class="text-sm">Bạn chưa có tài khoản ngân hàng.</h2>
                            </div>
                        </div>
                        <!-- thẻ ngân hàng -->
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