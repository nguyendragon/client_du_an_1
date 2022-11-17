<?php
spl_autoload_register(function ($class) {
	include_once 'system/libs/' . $class . '.php';
});
include_once 'app/config/config.php';
$main = new Main();
?>

<style>
	.cart {
		width: 56px;
		height: 56px;
		right: 48px;
		bottom: 32px;
		position: fixed;
		transition: all .2s;
		z-index: 3000!important;
		background: #fff!important;
		box-shadow: 0 0 10px #0003;
	}
</style>

<div class="cart flex justify-center items-center cursor-pointer fixed bg-gray-500 rounded-md">
	<i class="text-[26px] fa-light fa-cart-shopping"></i>
</div>
