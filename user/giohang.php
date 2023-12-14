<?php if(isset($_SESSION['user'])){
    $allrowgh= allrowghcc($_SESSION['user']['id']);
    $number = $allrowgh[0]['COUNT(giohang.id)'];
    // var_dump($number);die();
    ?>
     <?php if($number==0){ ?>
       <div class="err" style="margin-left: 600px; margin-top:50px; margin-bottom:200px;">
            <img src="./images/cart-empty.png" alt="" width="300px">
            <h2 style="margin-left: -200px;">Không có sản phẩm nào trong giỏ hàng !</h2>
       </div>

        <?php }else{ ?>
            <div class="shopping_cart_area mt-60">
        <div class="container">  
            <form action="index.php?act=checkout&id=<?php echo $_SESSION['user']['id'] ?>" method="post"> 
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc">
                            <div class="cart_page table-responsive">
                                <table>
                            <thead>
                        
                                <tr>
                                    <th class="product_remove">Delete</th>
                                    <th class="product_thumb">Image</th>
                                    <th class="product_name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product_quantity">Size</th>
                                    <th class="product_total">Color</th>
                                    <th class="product_total">Quantity</th>
                                    <th class="product_total">Total</th>
                           
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($resultgh as $result_gh): ?>
                                <tr>
                                 
                                  <td class="product_remove"><a href="index.php?act=xoagh&id=<?php echo $result_gh['id'] ?>&iduser=<?php echo $_SESSION['user']['id'] ?>  "><i class="fa fa-trash-o"></i></a></td>
                                    <td class="product_thumb"><a href="#"><img src="./upload/<?php echo $result_gh['img'] ?>" alt=""></a></td>
                                    <td class="product_name"><a href="#"><?php echo $result_gh['namesp'] ?></a></td>
                                    <td class="product-price"><?php echo number_format($result_gh['price'],0,',','.') ?><u>VNĐ</u></td>
                                    <td class="product_quantity"><label><?php echo $result_gh['size'] ?></label> </td>
                                    <td class="product_total"><?php echo $result_gh['color'] ?></td>
                                    <td class="product_total"><?php echo $result_gh['soluong'] ?></td>
                                    <td class="product_total"><?php echo number_format($result_gh['tongprice'],0,',','.') ?> <u>VNĐ</u></td>
                                 


                                </tr>

                              <?php endforeach ?>
                            </tbody>
                        </table>   
                            </div>  
                            <div class="cart_submit">
                                <h4 style="position:absolute; font-size: 21px; color:blue;">Tổng Tiền :<?php
                                $tong = 0;
                                foreach($tongtiengh  as $tongtien ){
                                    $tong+=$tongtien['tongprice'];
                                }
                                echo number_format($tong,0,',','.');
                                ?><u>VNĐ</u></h4>
                                <button type="submit">Thanh Toán</button>
                            </div>      
                        </div>
                     </div>
                 </div>
                 <!--coupon code area start-->
                <!-- <div class="coupon_area">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code left">
                                <h3>Coupon</h3>
                                <div class="coupon_inner">   
                                    <p>Enter your coupon code if you have one.</p>                                
                                    <input placeholder="Coupon code" type="text">
                                    <button type="submit">Apply coupon</button>
                                </div>    
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code right">
                                <h3>Cart Totals</h3>
                                <div class="coupon_inner">
                                   <div class="cart_subtotal">
                                       <p>Subtotal</p>
                                       <p class="cart_amount">£215.00</p>
                                   </div>
                                   <div class="cart_subtotal ">
                                       <p>Shipping</p>
                                       <p class="cart_amount"><span>Flat Rate:</span> £255.00</p>
                                   </div>
                                   <a href="#">Calculate shipping</a>

                                   <div class="cart_subtotal">
                                       <p>Total</p>
                                       <p class="cart_amount">£215.00</p>
                                   </div>
                                   <div class="checkout_btn">
                                       <a href="#">Proceed to Checkout</a>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!--coupon code area end-->
            </form> 
        </div>     
    </div>
    <?php } ?>
    <?php }else{
        
?>
<div>Vui lòng [<a href="index.php?act=login">Đăng Nhập</a>] Để Vào Giỏ Hàng </div>
<?php } ?>
<h3 style='margin-left: 500px;'>Sản Phẩm Có Thể bạn Thích</h3>
<div class="row shop_wrapper" style="width: 1300px;margin-left: 176px;">
                        <?php foreach($resultspgh as $spyeuthich):?>
                      
                        <div class="col-lg-4 col-md-4 col-12 " style="width:292px">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="index.php?act=sanphamct&id=<?php echo $spyeuthich['id'] ?>"><img src="./upload/<?php echo $spyeuthich['img'] ?>" alt=""></a>
                                        <a class="secondary_img" href="index.php?act=sanphamct&id=<?php echo $spyeuthich['id'] ?>"><img src="./upload/<?php echo $spyeuthich['img1'] ?>" alt=""></a>
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