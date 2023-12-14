<!-- Home Slider
============================================ -->
<div class="slider-wrap">
	<div id="mainSlider" class="nivoSlider slider-image">
		<a href="#"><img src="img/slider/3.jpg" alt="main slider" title="#htmlcaption1"/></a>
		<a href="#"><img src="img/slider/4.jpg" alt="main slider" title="#htmlcaption2"/></a>
	</div>
	<div id="htmlcaption1" class="nivo-html-caption">			
		<div class="slide-text-right slide-text-right-2 text-black slide-text padding-0">
			<div class="middle-text text-center">
				<h2 class="cap-sub-title wow fadeInDown" data-wow-duration=".9s" data-wow-delay="0.8s">XOSS SHOP</h2>
				<h1 class="cap-title wow fadeInLeft" data-wow-duration=".9s" data-wow-delay="1.5s">Women’s NEW FASHION</h1>
				<p class="cap-dec wow fadeInRight" data-wow-duration="0.9s" data-wow-delay="2.2s">See our full collection.s summer 2016 Lookbook</p>
				<a href="#" class="cap-readmore button color white-hover wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="3s">Shop Now</a>
			</div>										
		</div>
	</div>
	<div id="htmlcaption2" class="nivo-html-caption">				
		<div class="slide-text-left slide-text-left-2 text-black slide-text padding-0">
			<div class="middle-text text-center">
				<h2 class="cap-sub-title wow fadeInDown" data-wow-duration=".9s" data-wow-delay="0.8s">XOSS SHOP</h2>
				<h1 class="cap-title wow fadeInRight" data-wow-duration=".9s" data-wow-delay="1.5s">Women’s NEW FASHION</h1>
				<p class="cap-dec wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay="2.2s">See our full collection.s summer 2016 Lookbook</p>
				<a href="#" class="cap-readmore button color white-hover wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="3s">Shop Now</a>
			</div>	
		</div>						
	</div>
</div>
<div class="main-content-wrapper">
<!-- Shipping Service Area
============================================ -->
<div class="shipping-service-area-2 margin-bottom-90">
	<div class="container-fluid">
		<div class="row">
			<!-- Single Service -->
			<div class="sin-service col-lg-3 col-sm-6 col-xs-12">
				<!-- Service Icon -->
				<div class="icon text-center"><i class="zmdi zmdi-car"></i></div>
				<!-- Service Content -->
				<div class="content fix">
					<h3>free shipping</h3>
					<p>Lorem ipsum dummy text goes here</p>
				</div>
			</div>
			<!-- Single Service -->
			<div class="sin-service col-lg-3 col-sm-6 col-xs-12">
				<!-- Service Icon -->
				<div class="icon text-center"><i class="zmdi zmdi-balance-wallet"></i></div>
				<!-- Service Content -->
				<div class="content fix">
					<h3>money back guarantee</h3>
					<p>Lorem ipsum dummy text goes here</p>
				</div>
			</div>
			<!-- Single Service -->
			<div class="sin-service col-lg-3 col-sm-6 col-xs-12">
				<!-- Service Icon -->
				<div class="icon text-center"><i class="zmdi zmdi-shield-security"></i></div>
				<!-- Service Content -->
				<div class="content fix">
					<h3>safe shopping</h3>
					<p>Lorem ipsum dummy text goes here</p>
				</div>
			</div>
			<!-- Single Service -->
			<div class="sin-service col-lg-3 col-sm-6 col-xs-12">
				<!-- Service Icon -->
				<div class="icon text-center"><i class="zmdi zmdi-headset-mic"></i></div>
				<!-- Service Content -->
				<div class="content fix">
					<h3>online support</h3>
					<p>Lorem ipsum dummy text goes here</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Special Offer Area
============================================ -->
<!-- <div class="hot-deal-area margin-bottom-90"> -->
	<!-- <div class="container"> -->
		<!-- <div class="row"> -->
			<!-- Section Title -->
			<!-- <div class="section-title col-xs-12 text-center"><h1>Giá Ưu đãi nhất</h1></div> -->
			<!-- <div class="col-xs-12"> -->
				<!-- Hot Deals Slider -->
				
				<!-- <div class="hot-deal-slider"> -->
					<!-- Single Deal -->
					<!-- <div class="sin-deal fix"> -->
						<!-- Deal Image Counter -->
						<!-- <div class="image-counter float-left"> -->
							<!-- <a href="#"><img src="img/product/1.jpg" alt="" /></a> -->
							<!-- <div class="pro-countdown deal-countdown" data-countdown="2023/12/18"></div> -->
						<!-- </div> -->
						<!-- Deal Details -->
						<!-- <div class="deal-details fix"> -->
							<!-- Deal Product Title -->
							<!-- <h4 class="deal-pro-title"><a href="#">HALF sleev women T-shirt</a></h4> -->
							<!-- Product Ratting -->
							<!-- <div class="sin-pro-ratting float-left"> -->
								<!-- <div class="rattings float-left"> -->
									<!-- <i class="zmdi zmdi-star"></i> -->
									<!-- <i class="zmdi zmdi-star"></i> -->
									<!-- <i class="zmdi zmdi-star"></i> -->
									<!-- <i class="zmdi zmdi-star"></i> -->
									<!-- <i class="zmdi zmdi-star-half"></i> -->
								<!-- </div> -->
								<!-- <span>(23)</span> -->
							<!-- </div> -->
							<!-- Product Price -->
							<!-- <div class="sin-pro-price"> -->
								<!-- <span class="new">$ 85.00</span> -->
								<!-- <span class="old">115.00</span> -->
							<!-- </div> -->
							<!-- <p>Instead of the gratitude we want to send us to the client especially loved us. decreased to 50% for the limit</p> -->
							<!-- <a href="#" class="button color">Shop Now</a> -->
						<!-- </div> -->
					<!-- </div> -->
				<!-- </div> -->
				
			<!-- </div> -->
		<!-- </div> -->
	<!-- </div> -->
<!-- </div> -->
<!-- Feature Product Area
============================================ -->
<div class="feature-product-area-2 margin-bottom-90">
	<div class="container-fluid">
		<div class="row">
			<!-- Section Title -->
			<div class="section-title col-xs-12 text-center"><h1>featured products</h1></div>
			<div class="col-xs-12">
				<!-- Product Slider -->
				<div class="product-slider-2 feature-slider">
					<!-- Single Product -->
					<?php 
					$dssp = sp_trending();;
					foreach($dssp as $ds) { 
						?>
					<div class="sin-pro">
						<!-- Product Image -->
						<div class="sin-pro-img-action fix">
							<a href="index.php?act=sanphamct&id=<?php echo $ds['id']?>" class="sin-pro-img"><img src="./upload/<?php echo $ds['img']?>" alt=""></a>
							<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
							<!-- Product Action -->
							<div class="sin-pro-action">
								<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
								<button class="pro-act-btn btn-text">add to bag</button>
								<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
							</div>
						</div>
						<!-- Product Details -->
						<div class="sin-pro-details fix">
							<a class="sin-pro-title" href="#"><?php echo $ds['name']?></a>
							<!-- Product Price -->
							<div class="sin-pro-price float-left">
								<span class="new"><?php echo number_format($ds['price'],0,',','.')?>VND</span>
							</div>
							<!-- Product Ratting -->
							<div class="sin-pro-ratting float-right">
								<div class="rattings float-left">
									<i class="zmdi zmdi-star"></i>
									<i class="zmdi zmdi-star"></i>
									<i class="zmdi zmdi-star"></i>
									<i class="zmdi zmdi-star"></i>
									<i class="zmdi zmdi-star-half"></i>
								</div>
								<span>(23)</span>
							</div>
						</div>
					</div>
					<?php  } ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Promo Banner Area
============================================ -->
<div class="promo-banner-area margin-bottom-90">
	<div class="container-fluid">
		<div class="row">
			<!-- Single Promo  -->
			<div class="sin-promo col-lg-3 col-sm-6 col-xs-12 fix">
				<div class="promo-wrap">
					<img src="img/banner/promo-1.jpg" alt="" />
					<div class="promo-bref text-right">
						<h1>Latest<br />backpack</h1>
						<a href="#" class="button color white-hover animated fadeOutDown">view more</a>
					</div>
				</div>
			</div>
			<!-- Single Promo  -->
			<div class="sin-promo col-lg-3 col-sm-6 col-xs-12 float-right fix">
				<div class="promo-wrap">
					<img src="img/banner/promo-3.jpg" alt="" />
					<div class="promo-bref text-left">
						<h1>Latest<br />sunglass</h1>
						<a href="#" class="button color white-hover animated fadeOutDown">view more</a>
					</div>
				</div>
			</div>
			<!-- Single Promo  -->
			<div class="sin-promo col-lg-6 col-xs-12 fix">
				<a href="#" class="promo-wrap">
					<img src="img/banner/promo-2.jpg" alt="" />
					<div class="promo-bref promo-bref-2 promo-bref-right text-center">
						<h1>Sale upto 40%<br />New style zeiran</h1>
						<div class="promo-countdown fix" data-countdown="2023/12/23"></div>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>
<!-- Latest Product Area
============================================ -->
<div class="latest-product-area tab-product-area margin-bottom-25">
	<div class="container">
		<div class="row">
			<!-- Section Title -->
			<div class="section-title col-xs-12 text-center"><h1>latest products</h1></div>
			<div class="col-xs-12">
				<!-- Product Tab List -->
				<div class="pro-tab-list text-center fix">
					<ul>
						<li class="active"><a href="#ao" data-toggle="tab">Top sản phẩm</a></li>
						<?
						$danhmuc = select_danhmuc();
						foreach($danhmuc as $ldm) { ?>
						<li><a href="#<?php echo $ldm['name']?>" data-toggle="tab"><?php echo $ldm['name']?></a></li>
						<? } ?>
					</ul>
				</div>
				<!-- Product Tab Content -->
				<div class="pro-tab-content tab-content row">
					<!-- Product Tab -->
					<div class="pro-tab tab-pane active" id="ao">
						<!-- Single Product -->
						<?php 
								$ao = sp_giatot();
								foreach($ao as $a) { 
						?>
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="index.php?act=sanphamct&id=<?php echo $a['id']?>" class="sin-pro-img"><img src="./upload/<?php echo $a['img']?>" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#"><?php echo $a['name']?></a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new"><?php echo $a['price']?> VND</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(100)</span>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
					</div>
					<!-- Product Tab -->
					<div class="pro-tab tab-pane" id="<?php echo $ldm['name']?>">
						<!-- Single Product -->
						<?php 
								$vay = sp_giatot();
								foreach($vay as $v) { 
						?>
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="./upload/<?php echo $v['img']?>" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#"><?php echo $v['name']?></a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new"><?php echo $v['price']?>VND</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(172)</span>
									</div>
								</div>
							</div>
						</div>
						<?php } ?>
					</div>
					<!-- Product Tab -->
					<div class="pro-tab tab-pane" id="accessories">
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="img/product/3.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s handbag</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 99.99</span>
										<span class="old">145.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="img/product/4.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s winter dress</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
										</div>
										<span>(0)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="img/product/1.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Full sleev women shirt</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 85.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="img/product/2.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Loafers Men's shoes</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(5)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="img/product/3.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s handbag</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 99.99</span>
										<span class="old">145.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="img/product/4.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s winter dress</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
										</div>
										<span>(0)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="img/product/1.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Full sleev women shirt</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 85.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="img/product/2.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Loafers Men's shoes</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(5)</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Product Tab -->
					<div class="pro-tab tab-pane" id="trendy">
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="img/product/4.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s winter dress</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
										</div>
										<span>(0)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="img/product/1.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Full sleev women shirt</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 85.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="img/product/2.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Loafers Men's shoes</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(5)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="img/product/3.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s handbag</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 99.99</span>
										<span class="old">145.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="img/product/4.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s winter dress</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
											<i class="zmdi zmdi-star-outline"></i>
										</div>
										<span>(0)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="img/product/1.jpg" alt="" /></a>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Full sleev women shirt</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 85.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="img/product/2.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Loafers Men's shoes</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 45.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(5)</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="sin-pro">
								<!-- Product Image -->
								<div class="sin-pro-img-action fix">
									<a href="#" class="sin-pro-img"><img src="img/product/3.jpg" alt="" /></a>
									<span class="pro-label label-new">new</span>
									<a href="#pro-quick-view" class="pro-quick-view" data-toggle="modal"><i class="zmdi zmdi-plus-circle-o"></i></a>
									<!-- Product Action -->
									<div class="sin-pro-action">
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-refresh"></i></button>
										<button class="pro-act-btn btn-text">add to bag</button>
										<button class="pro-act-btn btn-icon"><i class="zmdi zmdi-favorite-outline"></i></button>
									</div>
								</div>
								<!-- Product Details -->
								<div class="sin-pro-details fix">
									<a class="sin-pro-title" href="#">Women’s handbag</a>
									<!-- Product Price -->
									<div class="sin-pro-price float-left">
										<span class="new">$ 99.99</span>
										<span class="old">145.00</span>
									</div>
									<!-- Product Ratting -->
									<div class="sin-pro-ratting float-right">
										<div class="rattings float-left">
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star"></i>
											<i class="zmdi zmdi-star-half"></i>
										</div>
										<span>(23)</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Blog Area
============================================ -->
<div class="blog-area bg-off-white padding-90">
	<div class="container">
		<div class="row">
			<!-- Section Title -->
			<div class="section-title col-xs-12 text-center"><h1>LATEST from blog</h1></div>
			<div class="col-xs-12">
				<!-- Product Slider -->
				<div class="blog-slider">
					<!-- Single blog -->
					<div class="sin-blog">
						<!-- Blog Image -->
						<div class="blog-image">
							<a href="#"><img src="img/blog/1.jpg" alt="" /></a>
							<!-- Blog Date -->
							<div class="blog-date text-center"><h4>07</h4><p>May</p></div>
						</div>
						<!-- Blog Details -->
						<div class="blog-details">
							<!-- Blog Meta -->
							<div class="blog-meta fix">
								<p class="author float-left"><a href="#"><i class="zmdi zmdi-account"></i> By Admin</a></p>
								<p class="comment-like float-right">
									<a href="#"><i class="zmdi zmdi-comment-outline"></i> (15)</a>
									<a href="#"><i class="zmdi zmdi-favorite-outline"></i> (225)</a>
								</p>
							</div>
							<!-- Blog Title -->
							<h4 class="blog-title"><a href="#">How to Improve Your Sales Volume</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisic ing elit, sed do eiusmodte porincididunvt...</p>
							<a class="read-more" href="#">Continue Reading</a>
						</div>
					</div>
					<!-- Single blog -->
					<div class="sin-blog">
						<!-- Blog Image -->
						<div class="blog-image">
							<a href="#"><img src="img/blog/2.jpg" alt="" /></a>
							<!-- Blog Date -->
							<div class="blog-date text-center"><h4>05</h4><p>May</p></div>
						</div>
						<!-- Blog Details -->
						<div class="blog-details">
							<!-- Blog Meta -->
							<div class="blog-meta fix">
								<p class="author float-left"><a href="#"><i class="zmdi zmdi-account"></i> By Admin</a></p>
								<p class="comment-like float-right">
									<a href="#"><i class="zmdi zmdi-comment-outline"></i> (15)</a>
									<a href="#"><i class="zmdi zmdi-favorite-outline"></i> (225)</a>
								</p>
							</div>
							<!-- Blog Title -->
							<h4 class="blog-title"><a href="#">Top 10 Marketing for Improving Sales</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisic ing elit, sed do eiusmodte porincididunvt...</p>
							<a class="read-more" href="#">Continue Reading</a>
						</div>
					</div>
					<!-- Single blog -->
					<div class="sin-blog">
						<!-- Blog Image -->
						<div class="blog-image">
							<a href="#"><img src="img/blog/3.jpg" alt="" /></a>
							<!-- Blog Date -->
							<div class="blog-date text-center"><h4>21</h4><p>March</p></div>
						</div>
						<!-- Blog Details -->
						<div class="blog-details">
							<!-- Blog Meta -->
							<div class="blog-meta fix">
								<p class="author float-left"><a href="#"><i class="zmdi zmdi-account"></i> By Admin</a></p>
								<p class="comment-like float-right">
									<a href="#"><i class="zmdi zmdi-comment-outline"></i> (15)</a>
									<a href="#"><i class="zmdi zmdi-favorite-outline"></i> (225)</a>
								</p>
							</div>
							<!-- Blog Title -->
							<h4 class="blog-title"><a href="#">Best Social Media Marketing..</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisic ing elit, sed do eiusmodte porincididunvt...</p>
							<a class="read-more" href="#">Continue Reading</a>
						</div>
					</div>
					<!-- Single blog -->
					<div class="sin-blog">
						<!-- Blog Image -->
						<div class="blog-image">
							<a href="#"><img src="img/blog/2.jpg" alt="" /></a>
							<!-- Blog Date -->
							<div class="blog-date text-center"><h4>05</h4><p>May</p></div>
						</div>
						<!-- Blog Details -->
						<div class="blog-details">
							<!-- Blog Meta -->
							<div class="blog-meta fix">
								<p class="author float-left"><a href="#"><i class="zmdi zmdi-account"></i> By Admin</a></p>
								<p class="comment-like float-right">
									<a href="#"><i class="zmdi zmdi-comment-outline"></i> (15)</a>
									<a href="#"><i class="zmdi zmdi-favorite-outline"></i> (225)</a>
								</p>
							</div>
							<!-- Blog Title -->
							<h4 class="blog-title"><a href="#">Top 10 Marketing for Improving Sales</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisic ing elit, sed do eiusmodte porincididunvt...</p>
							<a class="read-more" href="#">Continue Reading</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Brand Area
============================================ -->
<div class="brand-area">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="brand-slider">
					<div class="sin-brand"><img src="img/brands/1.png" alt="" /></div>
					<div class="sin-brand"><img src="img/brands/2.png" alt="" /></div>
					<div class="sin-brand"><img src="img/brands/3.png" alt="" /></div>
					<div class="sin-brand"><img src="img/brands/4.png" alt="" /></div>
					<div class="sin-brand"><img src="img/brands/5.png" alt="" /></div>
					<div class="sin-brand"><img src="img/brands/6.png" alt="" /></div>
					<div class="sin-brand"><img src="img/brands/7.png" alt="" /></div>
					<div class="sin-brand"><img src="img/brands/8.png" alt="" /></div>
					<div class="sin-brand"><img src="img/brands/9.png" alt="" /></div>
					<div class="sin-brand"><img src="img/brands/10.png" alt="" /></div>
				</div>
			</div>
		</div>
	</div>
</div>