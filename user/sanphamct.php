
<style>
    .coment {
        display: block;
        margin-top: 200px;
        position: relative;

    }
  .text-danger{
    color: red;
  }
    .viewcmt {
        width: 1130px;
        height: 500px;
        border: none;
        border-top:1px solid gray ;
        overflow-x: hidden;
         
        overflow-y: auto;
        margin-left: -592px;

    }

    .bt {
        width: 90px;
        height: 50px;
        background-color: black;
        color: white;
        border: none;
        border-radius: 5px;
    }

    .ip {
        width: 1000px;
        height: 50px;




    }

    .vcmt {
        border-bottom:1px solid gray;
        border-left: 1px solid gray;
        height: auto;
        margin-top: 20px;
        margin-left: 10px;
        margin-right: 40px;
       
        position: relative;
    }

    .imgname {
        font-weight: bold;
        font-style: italic;
    }

    .ndmtt {
        margin-left: 10px;
        font-weight: bolder;
    }

    .time {
        position: absolute;
        font-size: 7px;
        right: 2px;
        bottom: 2px;
    }

    .thaotac {
        margin-left: 8px;
        margin-bottom: 7px;
    }

    ::-webkit-scrollbar {
        width: 10px;
    }

    ::-webkit-scrollbar-thumb {
        background-color: black;
        width: 10px;
    }

    ::-webkit-scrollbar-track {
        background-color: gray;
    }

    .splq {
          border-radius:5px ;
        width: 1170px;
        bottom: 40px;
        border: 1px solid purple;
        height: auto;
        padding-bottom: 20px;
        margin-top:10px ;
        margin-left: -600px;
    }

    .qq {
        position: relative;
    }

    .splqq {
        padding: 3px 0 0 3px;
        border: 1px solid black;
        height: 30px;
        width: 200px;
        background-color: black;
        color: white;
        border-bottom-right-radius: 100px;
    }

    .viewsp {
        border: 1px solid purple;
        width: 140px;
        height: 210px;
        margin-top: 6px;
        margin-left: 2px;

    }

    .viewsp>a>img {
        width: 140px;
        height: 120px;
    }

    .viewsplq {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
    }

    .viewsp>span {
        margin-left: 5px;
    }

    .cart_all {
        list-style: none;
        font-size: 10px;
        width: 100px;
        height: 20px;
        background-color: aqua;
    }

    .radios {
        margin-left: 20px;
    }

    .time1 {
        position: absolute;
        font-size: 7px;
        right: 2px;
        bottom: 30px;
    }

    .hover_a {
        margin-left: 10px;
    }

    .ten {
        margin-left: -480px;
        margin-top: 20px;
    }

    .label {
		background-color: white;
        border: 2px solid black;
        width: 70px;
        padding: 10px 20px 10px 23px;
        position: absolute;
        margin-left: -20px;
        cursor: pointer;
		color: black;
		font-size: 23px;
		border-radius: 10px 0 20px 5px;

    }

    .label1 {
        background-color: white;
        border: 2px solid black;
        width: 70px;
        padding: 10px 10px 10px 23px;
        position: absolute;
        margin-left: -20px;
        cursor: pointer;
		color: black;
		font-size: 23px;
		border-radius: 10px 0 20px 5px;
    }

    .label2 {
        background-color: white;
        border: 2px solid black;
        width: 70px;
        padding: 10px 18px 10px 28px;
        position: absolute;
        margin-left: -20px;
        cursor: pointer;
		color: black;
		font-size: 23px;
		border-radius: 10px 0 20px 5px;
    }

    .label3 {
        background-color: white;
        border: 2px solid black;
        width: 70px;
        padding: 10px 10px 10px 20px;
        position: absolute;
        margin-left: -20px;
        cursor: pointer;
		color: black;
		font-size: 23px;
		border-radius: 10px 0 20px 5px;
    }

    .size {
        position: relative;
    }

    input[type='radio'] {
        margin-left: 70px;
    }

    input[type='radio']:checked+label {
        background-color: red;
        color: white;
        border: 5px solid #09C6AB;
    }
    .lbcolor{
        position: absolute;
        margin-left: -25px;
        width: 40px;
        height: 40px;
        border: 0.1px solid black;
    }
    .color{
        margin-top: 20px;
        margin-left: 50px;
        /* display: none; */
    }
    .none{
        font-size: 20px;
        margin-left: -150px;
    }
</style>
<div class="quick-view-container fix">
					<button class="model-close" data-dismiss="modal"><i class="zmdi zmdi-close"></i></button>
						<!-- Product Details Image -->
						<div class="product-details-image col-md-6 col-xs-12">
							<ul class="quick-pro-thumb" role="tablist">
								<li class="active"><a href="#big-image-1" data-toggle="tab"><img src="./upload/<?php echo $sanphamct[0]['img']?>" alt="" /></a></li>
								<li><a href="#big-image-2" data-toggle="tab"><img src="./upload/<?php echo $sanphamct[0]['img1']?>" alt="" /></a></li>
								<li><a href="#big-image-3" data-toggle="tab"><img src="./upload/<?php echo $sanphamct[0]['img2']?>" alt="" /></a></li>
								<li><a href="#big-image-4" data-toggle="tab"><img src="./upload/<?php echo $sanphamct[0]['img3']?>" alt="" /></a></li>
							</ul>
							<div class="quick-pro-big tab-content fix">
								<div class="tab-pane active" id="big-image-1"><img src="./upload/<?php echo $sanphamct[0]['img']?>" alt="" /></div>								
								<div class="tab-pane" id="big-image-2"><img src="./upload/<?php echo $sanphamct[0]['img1']?>" alt="" /></div>								
								<div class="tab-pane" id="big-image-3"><img src="./upload/<?php echo $sanphamct[0]['img2']?>" alt="" /></div>								
								<div class="tab-pane" id="big-image-4"><img src="./upload/<?php echo $sanphamct[0]['img3']?>" alt="" /></div>								
							</div>
						</div>
						<!-- Product Details Content -->
						<div class="product-details-content col-md-6 col-xs-12">
							<a class="pro-details-title" href="#"><?php echo $sanphamct[0]['name']?></a>
							<div class="pro-details-price-ratting fix">
								<!-- Product Price -->
								<div class="pro-details-price float-left">
									<span class="new" id="price_product" ><?php echo 'Giá ' .  number_format($sanphamct[0]['price'],0,',','.') . ' <u>VNĐ</u>' ?></span>
								</div>
								<!-- Product Ratting -->
								<div class="pro-details-ratting float-right">
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
							<div class="pro-details-overview">
								<h5>Mo Ta:</h5>
								<p><?php echo $sanphamct[0]['mota']?></p>
							</div>
							
							<div class="size">
                                    <h4>Chọn Size</h4>
                                    <input type="radio" name="exp[]" id="<?php echo $sanphamct[0]['id_size'] ?>" value="S" checked>
                                    <label for="3" class="label"><?php echo $sanphamct[0]['size'] ?></label>

                                    <input type="radio" name="exp[]" id="<?php echo $sanphamct[1]['id_size'] ?>" value="M">
                                    <label for="4" class="label1"><?php echo $sanphamct[1]['size'] ?></label>

                                    <input type="radio" name="exp[]" id="<?php echo $sanphamct[2]['id_size'] ?>" value="L">
                                    <label for="5" class="label2"><?php echo $sanphamct[2]['size'] ?></label>

                                    <input type="radio" name="exp[]" id="<?php echo $sanphamct[3]['id_size'] ?>" value="XL">
                                    <label for="6" class="label3"><?php echo $sanphamct[3]['size'] ?></label>

                                </div> <br>
                                <div class="color" id="colorAN" >
                                <h4>Chọn Color</h4>
                                    <input type="radio" name="asc[]" id="<?php echo $sanphamct[0]['color'] ?>" class="radios" size_product value="<?php echo $sanphamct[0]['color'] ?>" checked>
                                    <label for="<?php echo $sanphamct[0]['color'] ?>" style="background-color:<?php echo $sanphamct[0]['color'] ?> ; color:white; border-radius: 50%;" class="lbcolor"  ></label>
                                    <?php if($sanphamct[0]['color1'] != ""){?>
                                    <input type="radio" name="asc[]" id="<?php echo $sanphamct[0]['color1'] ?>" class="radios1">
                                    <label for="<?php echo $sanphamct[0]['color1'] ?>" style="background-color:<?php echo $sanphamct[0]['color1']?> ; border-radius: 50%;" class="lbcolor"></label>
                                    <?php }?>
                                   <?php if($sanphamct[0]['color2'] != ""){?>
                                    <input type="radio" name="asc[]" id="<?php echo $sanphamct[0]['color2'] ?>"class="radios2" >
                                    <label for="<?php echo $sanphamct[0]['color2'] ?>" style="background-color:<?php echo $sanphamct[0]['color2'] ?> ; border-radius: 50%;" class="lbcolor"></label>
                                    <?php }?>
                                </div>
                                <br>
                                <span id="soluong" style="font-weight: bold;color:red;"></span>
                                <br> <br> <br>
								<!-- end bien the va bat dau js -->
                                <div class="variants_selects">
									<!-- bat dau js -->
									<div class="modal_add_to_cart">
                                    <form action="index.php?act=giohang" method="post">
                                            <input type="hidden" name="id" value="<?php echo $sanphamct[0]['id'] ?>">
                                            <input type="hidden" name="color" id="color">
                                            <input type="hidden" name="size" id="size">

                                            <input type="hidden" name="name" value="<?php echo $sanphamct[0]['name'] ?>">
                                            <input type="hidden"  name='price' id="price">
                                            <input type="hidden" value="<?php echo $sanphamct[0]['img'] ?>" name='img'>
                                            <button class="giam" id="minplus" type="button" style="width: 50px;" >-</button>
                                            <span class="quantity_number" id="number_quantity">1</span>
                                            <button class="tang" id="maxplus" type="button" style="width: 50px;">+</button>
                                            <input type="hidden" name="quantityProduct" id="quantityProduct">
                                            <button type="submit" name='addcart'>Thêm Vào Giỏ Hàng</button>
                                 
                                    </div> 
                                 </form>
                                    <?php
                            // if (isset($_SESSION['error']['size'])) {
                            //     echo '<p class="text-danger">' . $_SESSION['error']['size'] . '</p>';
                            //     unset($_SESSION['error']['size']);
                            // } 
                            ?>
                                    <script>
                                        
                                        document.addEventListener("DOMContentLoaded", function() {
                                            var minplus = document.querySelector('#minplus');
                                            var maxplus = document.querySelector('#maxplus');
                                            var element_number_product = document.querySelector('#number_quantity');
                                            var quantityProduct = document.querySelector('#quantityProduct');
                                            
                                            var quantityS = "<?php echo $sanphamct[0]['quantity'] ?>"
                                            var quantityM = "<?php echo $sanphamct[1]['quantity'] ?>"
                                            var quantityL = "<?php echo $sanphamct[2]['quantity'] ?>"
                                            var quantityXL = "<?php echo $sanphamct[3]['quantity'] ?>"

                                            var priceS = "<?php echo $sanphamct[0]['price'] ?>"
                                            var priceM = "<?php echo $sanphamct[1]['price'] ?>"
                                            var priceL = "<?php echo $sanphamct[2]['price'] ?>"
                                            var priceXL = "<?php echo $sanphamct[3]['price'] ?>"

                                            var quantity = 1;
                                            var maxQquantity = 0;
                                            var pricegh =document.querySelector('#price');

                                            var number_product = document.querySelector('#soluong');

                                            var size_product =document.querySelector('#size');

                                            var price = document.querySelector('#price_product');
                                            var radioS = document.getElementById('3');
                                            var radioM = document.getElementById('4');
                                            var radioL = document.getElementById('5');
                                            var radioXL = document.getElementById('6');

                                            var color = "<?php echo $sanphamct[0]['color'] ?>";
                                            var color1 = "<?php echo $sanphamct[0]['color1'] ?>";
                                            var color2 = "<?php echo $sanphamct[0]['color2'] ?>";
                                            if(radioS.checked){
                                                size_product.value =radioS.value;
                                            }
                                            if(radioS.checked){
                                                pricegh.value = "<?php echo $sanphamct[0]['price'] ?>"
                                            }

                                          var colorAN = document.querySelector('#colorAN');
                                            
                                            var radioColor =document.querySelector('.radios');
                                            var radioColor1 =document.querySelector('.radios1');
                                            var radioColor2 =document.querySelector('.radios2');

                                            var colorgh =document.querySelector('#color');


                                            if(radioColor.checked){
                                                 colorgh.value =radioColor.value;
                                            }
                                          
                                        
                                            radioS.addEventListener('click', function() {
                                                price.textContent = 'Giá ' + priceS + ' VNĐ';
                                                pricegh.value=priceS;
                                                size_product.value = 'S';
                                             
                                                if (Number(quantityS) == 0) {
                                                    number_product.textContent = ' Hết hàng trong kho !';
                                                    
                                                } else {
                                                    number_product.textContent = 'Còn ' + quantityS + ' Sản Phẩm Trong Kho';
                                                }
                                                maxQquantity = quantityS;
                                                if(element_number_product.textContent>quantityS){
                                                    element_number_product.textContent=quantityS;
                                                    element_number_product.textContent =quantityS;
                                                    quantityProduct.value = quantityS;
                                                }
                                                
                                                 if(colorAN.style.display=='none'){
                                                    colorAN.style.display='block';
                                                 }
                                            });

                                            radioL.addEventListener('click', function() {
                                                price.textContent = 'Giá ' + priceL + ' VNĐ';
                                                pricegh.value=priceL;
                                                size_product.value = 'L';
                                                if(Number(quantityL)==0){
                                                    number_product.textContent = 'Kho hết hàng !';
                                                }else{
                                                    number_product.textContent = 'Còn ' + quantityL + ' Sản Phẩm Trong Kho';
                                                }
                                                maxQquantity = quantityL;
                                                if(element_number_product.textContent>quantityL){
                                                    element_number_product.textContent=quantityL;
                                                    element_number_product.textContent =quantityL;
                                                    quantityProduct.value = quantityL;
                                                }
                                            });

                                            radioM.addEventListener('click', function() {
                                                price.textContent = 'Giá ' + priceM + ' VNĐ';
                                                pricegh.value=priceM;
                                                size_product.value = 'M';
                                                if(Number(quantityM)==0){
                                                    number_product.textContent='Kho hết hàng !';
                                                }else{
                                                    number_product.textContent = 'Còn ' + quantityM + ' Sản Phẩm Trong Kho';
                                                }
                                                maxQquantity = quantityM;
                                                if(element_number_product.textContent>quantityM){
                                                    element_number_product.textContent=quantityM;
                                                    element_number_product.textContent =quantityM;
                                                    quantityProduct.value = quantityM;
                                                }

                                            });

                                            radioXL.addEventListener('click', function() {
                                                price.textContent = 'Giá ' + priceXL + ' VNĐ';
                                                pricegh.value=priceXL;
                                                size_product.value = 'XL';
                                                if (Number(quantityXL) == 0) {
                                                    number_product.textContent = 'Kho hết hàng !'
                                                } else {
                                                    number_product.textContent = 'Còn ' + quantityXL + ' Sản Phẩm Trong Kho';
                                                }
                                                maxQquantity = quantityXL;
                                                if(element_number_product.textContent > quantityXL){
                                                    element_number_product.textContent = quantityXL;
                                                    element_number_product.textContent =quantityXL;
                                                    quantityProduct.value = quantityXL;
                                                }
                                            });
                                            radioColor.addEventListener('click',function(){
                                                colorgh.value=color;
                                                console.log(colorgh);
                                            });
                                            <?php if($sanphamct[0]['color1'] != ""){?>
                                            radioColor1.addEventListener('click',function(){
                                                colorgh.value=color1;
                                                console.log(colorgh);
                                            });
                                            <?php } ?>
                                            <?php if($sanphamct[0]['color2'] != ""){?>
                                            radioColor2.addEventListener('click',function(){
                                                colorgh.value=color2;
                                                console.log(colorgh);
                                            });
                                              <?php } ?>
                                            // function radioColor(){
                                            //     alert(radioColor);
                                            // }
                                            //    radioColor.onclick = function(){
                                            //     alert(radioColor);
                                            //    };
                                            //    radioColor.addEventListener('click',function(){
                                            //     colorgh.value=radioColor1;
                                            //    });
                                            //    radioColor.addEventListener('click',function(){
                                            //     colorgh.value=radioColor2;
                                            //    })
                                            function update_quantity() {
                                                element_number_product.textContent = quantity;
                                                quantityProduct.value = quantity;
                                                minplus.disabled=(quantity===1);
                                            }
                                            minplus.onclick = function() {
                                                if (quantity > 1) {
                                                    quantity--;
                                                    update_quantity();
                                                }
                                            }
                                            maxplus.onclick = function() {
                                                if (quantity < maxQquantity) {
                                                    quantity++;
                                                    update_quantity();
                                                }
                                            }
                                            update_quantity();
                                        });
                                    </script>


                                </div>

								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                                <script>
                                    $(document).ready(function() {


                                        $("#cmt").load("./user/binhluanform.php", {
                                            idsp: <?php echo $_GET['id']  ?>
                                        });

                                    });
                                </script>
                                
                                <div class="hr"></div>
                                <div class="coment" id='cmt'>

                                </div>

                                <div class="none">Sản Phẩm Liên Quan</div>
                    <div class="splq">
                    <div class="row shop_wrapper" style="width: 1300px; margin-left:5px; margin-top:20px">
                        <?php foreach( $sanphamlienquan as $spyeuthich):?>
                      
                        <div class="col-lg-4 col-md-4 col-12 " style="width:292px">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="index.php?act=sanphamct&id=<?php echo $spyeuthich['id'] ?>"><img src="./upload/<?php echo $spyeuthich['img'] ?>" alt=""></a>
                                        
                                        <div class="action_links">
                                            <ul>
                                               <?php if(isset($_SESSION['user'])){ ?>
                                                <li class="add_to_cart"><a href="index.php?act=viewgiohang&id=<?php echo $_SESSION['user']['id'] ?>" title="Add to cart"><i class="zmdi zmdi-shopping-cart"></i></a></li>
                                                <?php } ?>
                                                <li class="compare"><a href="#" title="Add to Compare"><i class="zmdi zmdi-refresh"></i></a></li>

                                                <li class="quick_button"><a href="index.php?act=sanphamct" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content grid_content">
                                        <div class="product_content-header">
                                            <h4 class="product_name"><a href="index.php?act=sanphamct&id=<?php echo $spyeuthich['id'] ?>"><?php echo $spyeuthich['name'] ?></a></h4>
                                            <div class="wishlist-btn">
                                                <a href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            </div>
                                        </div>
                                        <div class="product_price_rating">
                                            <div class="price_box"> 
                                                <span class="current_price"><?php echo number_format($spyeuthich['price'],0,',','.') ?><u>VNĐ</u></span>
                                            </div>
                                            <div class="product_rating">
                                               <ul>
                                                   <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               </ul>
                                           </div>
                                       </div>
                                    </div>
                                   
                                </figure>
                            </article>
                        </div>
                       <?php endforeach ?>
                      
                       
                    </div>
                    </div>	
			</div>
            
			
		</div>

                    