<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from preview.hasthemes.com/xoss-preview/xoss/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Dec 2023 18:37:19 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Dự án 1</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
	
	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	
	<!-- css  -->
	<!-- Style CSS
	============================================ -->
	<link rel="stylesheet" href="style.css">
	<!-- Modernizer JS
	============================================ -->
	<script src="js/vendor/modernizr-2.8.3.min.js"></script>
	
	<!-- Color Css Files Start -->
    <link rel="alternate stylesheet" type="text/css" href="switcher/color-one.css" title="color-one" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="switcher/color-two.css" title="color-two" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="switcher/color-three.css" title="color-three" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="switcher/color-four.css" title="color-four" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="switcher/color-five.css" title="color-five" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="switcher/color-six.css" title="color-six" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="switcher/color-seven.css" title="color-seven" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="switcher/color-eight.css" title="color-eight" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="switcher/color-nine.css" title="color-nine" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="switcher/color-ten.css" title="color-ten" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="switcher/color-ten.css" title="color-ten" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="switcher/pattren1.css" title="pattren1" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="switcher/pattren2.css" title="pattren2" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="switcher/pattren3.css" title="pattren3" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="switcher/pattren4.css" title="pattren4" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="switcher/pattren5.css" title="pattren5" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="switcher/background1.css" title="background1" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="switcher/background2.css" title="background2" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="switcher/background3.css" title="background3" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="switcher/background4.css" title="background4" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="switcher/background5.css" title="background5" media="screen" />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--owl carousel min css-->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!--slick min css-->
    <link rel="stylesheet" href="assets/css/slick.css">
    <!--magnific popup min css-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!--font awesome css-->
    <link rel="stylesheet" href="assets/css/font.awesome.css">
    <!--ionicons min css-->
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <!--material design min css-->
    <link rel="stylesheet" href="assets/css/material.design.min.css">
    <!--animate css-->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!--jquery ui min css-->
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <!--slinky menu css-->
    <link rel="stylesheet" href="assets/css/slinky.menu.css">
    <!--plugins css-->
    <link rel="stylesheet" href="assets/css/plugins.css">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!--modernizr min js here-->
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
   <link rel="stylesheet" href="../css/binhluan.css">
	<!-- Color Css Files End -->
</head>
<body>
<!-- Pre Loader
============================================ -->
<style>
    .img1{
        
        border: 3px solid greenyellow;
    }
    .account{
        position: fixed;
        z-index: 50px;
        right: 5px;
        top: 30px;
    }
    .account>a{
        border-radius: 50%;
       
    }
    
</style>
<body>
   <!--mini cart end-->
  <?php if(isset($_SESSION['user'])){
    
  ?>
    <!--header area start-->
    <div class="account">
        <span style="">Hi : <?php echo $_SESSION['user']['user'] ?></span> 
      <a href="index.php?act=profile&id=<?php echo $_SESSION['user']['id']?>" style="width: 40px; height='60px'"> <img src="./<?php echo $_SESSION['user']['img'] ?>" alt="" style="border:3px solid greenyellow; width:50px; height:50px; border-radius:50%;" onclick="menuaccount()"></a>
    </div>
    <div class="menuaccount" id='menuaccount'>
        
    </div>
    <?php }?>
    <script>
       function menuaccount(){
        var menu = document.querySelector('#menuaccount');
        if(menu.style.display =='block'){
            menu.style.display ='none'
        }else{
            menu.style.display ='block'
        }
       }
    </script>
<div class="as-mainwrapper">
<!-- Header
============================================ -->
<div class="header">
	<!-- Header Top -->
	<div class="header-top" style="background-color: white;">
		<div class="container">
				
					<!-- Header Account Login -->
					<div class="header_right_info">
                                   <ul>
                                       <li class="header_account"><a href="javascript:void(0)"><img src="assets/img/icon/icon-account.png" alt=""></a>
                                            <div class="dropdown_account" style ="border-radius:15px; "> 
                                                <div class="dropdown_account-list">
                                                    <ul>
                                                        <?php if(empty($_SESSION['user'])){ ?>
                                                            <li><a href="index.php?act=login">Login Account</a></li>
                                                           
                                                      <?php  } ?>
                                                      <?php if(isset($_SESSION['user'])){?>
                                                         <li><a href="index.php?act=doipass">Đổi Mật Khẩu</a></li>
                                                        <?php  if($_SESSION['user']['role'] == 1){?>
                                                            <li><a href="http://localhost/dan1/admin/index.php">Quản Trị Admin</a></li>
                                                            <?php } ?>
                                                         <?php }?>
                                                      
                                                        <li><a href="index.php?act=mycart&id=<?php if(isset($_SESSION['user'])){
                                                            echo $_SESSION['user']['id'];
                                                        } ?>">Đơn Hàng Của Tôi</a></li>
                                                        
                                                        <li><a href="#">Thanh Toán</a></li>
                                                        <?php if(isset($_SESSION['user'])) 
                                                        {
                                                           echo '<li><a href="index.php?act=logout">Log Out</a></li>';
                                                        }
                                                        
                                                        ?>
                                                        

                                                    </ul>
                                                </div>
                                       
                                            </div>
                                       </li>
                                       <li class="mini_cart_wrapper"><a  href="index.php?act=viewgiohang&id=<?php if(isset($_SESSION['user'])){ echo $_SESSION['user']['id'];}else{ $notify = 'Bạn phải đăng nhập để vào giỏ hàng';} ?>"><img src="assets/img/icon/icon-cart.png" alt=""> <span class="item_count" style="color:white;background-color: red;width: 15px;"><?php if(isset($_SESSION['user'])){
                                        $allrowgh= allrowghcc($_SESSION['user']['id']); 
                                        $numbergh = $allrowgh[0]['COUNT(giohang.id)'];
                                        echo $numbergh;
                                       }else{
                                        echo 0;
                                       }
                                       
                                       ?></span></a>
                                          
                                            
                                       </li>
                                   </ul>
                </div>
			</div>
		</div>
	</div>
	<!-- Header Bottom -->
	<div class="header-bottom">
		<div class="container">
			<div class="row">
				<div class="header-bottom-wrap">
					<!-- Logo -->
					<div class="header-logo col-lg-3 col-md-2">
						<div class="logo"><a href="index.php?act=home"><img src="img/logo-3.png" alt="logo" /></a></div>
					</div>
					<!-- Main Menu -->
					<div class="main-menu-wrap col-lg-6 col-md-7 hidden-sm hidden-xs">
						<div class="main-menu text-center">
							<nav>
								<ul>
									<li><a href="index.php?act=home">home</a>	
									</li>
									<?php $list = select_danhmuc();
									 foreach($list as $ldm) { ?>
									<li><a href="index.php?act=search&iddm=<?php echo $ldm['id']?>"><?php echo $ldm['name']?></a>
									</li>
									<?php } ?>
								</ul>
							</nav>
						</div>
					</div>
					<!-- Mobile Menu -->
					<div class="mobile-menu text-center hidden-lg hidden-md">
						<nav>
						<ul>
									<li><a href="index.php?act=home">home</a>	
									</li>
									<?php $list = select_danhmuc();
									 foreach($list as $ldm) { ?>
									<li><a href=""><?php echo $ldm['name']?></a>
									</li>
									<?php } ?>
								</ul>
						</nav>
					</div>
					<!-- Header Search -->
					<div class="header-search col-lg-3 col-md-3">
					<form action="index.php?act=search" method="post">
                        <input placeholder="Tìm Kiếm Sản Phẩm ..." type="text" name='kyws'>
                        <button type="submit" name='search'><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>