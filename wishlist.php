<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Pustok - Book Store HTML Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Use Minified Plugins Version For Fast Page Load -->
	<link rel="stylesheet" type="text/css" media="screen" href="css/plugins.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
	<link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
</head>

<body>
<? include("foot.php");?>
		<section class="breadcrumb-section">
			<h2 class="sr-only">Site Breadcrumb</h2>
			<div class="container">
				<div class="breadcrumb-contents">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html">Главная</a></li>
							<li class="breadcrumb-item active">Список желаемого</li>
						</ol>
					</nav>
				</div>
			</div>
		</section>
		<!-- Wishlist Page Start -->
		<div class="cart_area inner-page-sec-padding-bottom">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<form action="./">
							<!-- Cart Table -->
							<div class="cart-table table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th class="pro-thumbnail">Изображение</th>
											<th class="pro-title">Товар</th>
											<th class="pro-price">Цена</th>
											<th class="pro-quantity">Количество</th>
											<th class="pro-subtotal">Сумма</th>
											<th class="pro-remove">Убрать</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="pro-thumbnail"><a href="#"><img
														src="image/products/product-1.jpg" alt="Product"></a></td>
											<td class="pro-title"><a href="#">Rinosin Glasses</a></td>
											<td class="pro-price"><span>$395.00</span></td>
											<td class="pro-quantity">
												<div class="pro-qty">
													<div class="count-input-block">
														<input type="number" class="form-control text-center" value="1">
													</div>
												</div>
											</td>
											<td class="pro-subtotal"><span>$395.00</span></td>
											<td class="pro-remove"><a href="#"><i class="far fa-trash-alt"></i></a></td>
										</tr>
										<tr>
											<td class="pro-thumbnail"><a href="#"><img
														src="image/products/product-2.jpg" alt="Product"></a></td>
											<td class="pro-title"><a href="#">Silacon Glasses</a></td>
											<td class="pro-price"><span>$275.00</span></td>
											<td class="pro-quantity">
												<div class="pro-qty">
													<div class="count-input-block">
														<input type="number" class="form-control text-center" value="1">
													</div>
												</div>
											</td>
											<td class="pro-subtotal"><span>$550.00</span></td>
											<td class="pro-remove"><a href="#"><i class="far fa-trash-alt"></i></a></td>
										</tr>
										<tr>
											<td class="pro-thumbnail"><a href="#"><img
														src="image/products/product-3.jpg" alt="Product"></a></td>
											<td class="pro-title"><a href="#">Easin Glasses</a></td>
											<td class="pro-price"><span>$295.00</span></td>
											<td class="pro-quantity">
												<div class="pro-qty">
													<div class="count-input-block">
														<input type="number" class="form-control text-center" value="1">
													</div>
												</div>
											</td>
											<td class="pro-subtotal"><span>$295.00</span></td>
											<td class="pro-remove"><a href="#"><i class="far fa-trash-alt"></i></a></td>
										</tr>
										<tr>
											<td class="pro-thumbnail"><a href="#"><img
														src="image/products/product-4.jpg" alt="Product"></a></td>
											<td class="pro-title"><a href="#">Macrox Glasses</a></td>
											<td class="pro-price"><span>$220.00</span></td>
											<td class="pro-quantity">
												<div class="pro-qty">
													<div class="count-input-block">
														<input type="number" class="form-control text-center" value="1">
													</div>
												</div>
											</td>
											<td class="pro-subtotal"><span>$220.00</span></td>
											<td class="pro-remove"><a href="#"><i class="far fa-trash-alt"></i></a></td>
										</tr>
									</tbody>
								</table>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Cart Page End -->
</div>
	<!--=================================
  Brands Slider
===================================== -->
	<section class="section-margin">
		<h2 class="sr-only">Brand Slider</h2>
		<div class="container">
			<div class="brand-slider sb-slick-slider border-top border-bottom" data-slick-setting='{
                                            "autoplay": true,
                                            "autoplaySpeed": 8000,
                                            "slidesToShow": 6
                                            }' data-slick-responsive='[
                {"breakpoint":992, "settings": {"slidesToShow": 4} },
                {"breakpoint":768, "settings": {"slidesToShow": 3} },
                {"breakpoint":575, "settings": {"slidesToShow": 3} },
                {"breakpoint":480, "settings": {"slidesToShow": 2} },
                {"breakpoint":320, "settings": {"slidesToShow": 1} }
            ]'>
				<div class="single-slide">
					<img src="image/others/brand-1.jpg" alt="">
				</div>
				<div class="single-slide">
					<img src="image/others/brand-2.jpg" alt="">
				</div>
				<div class="single-slide">
					<img src="image/others/brand-3.jpg" alt="">
				</div>
				<div class="single-slide">
					<img src="image/others/brand-4.jpg" alt="">
				</div>
				<div class="single-slide">
					<img src="image/others/brand-5.jpg" alt="">
				</div>
				<div class="single-slide">
					<img src="image/others/brand-6.jpg" alt="">
				</div>
				<div class="single-slide">
					<img src="image/others/brand-1.jpg" alt="">
				</div>
				<div class="single-slide">
					<img src="image/others/brand-2.jpg" alt="">
				</div>
			</div>
		</div>
	</section>
	<!--=================================
    Footer Area
===================================== -->
	<? include("down.php");?>
	<!-- Use Minified Plugins Version For Fast Page Load -->
	<script src="js/plugins.js"></script>
	<script src="js/ajax-mail.js"></script>
	<script src="js/custom.js"></script>
</body>

</html>