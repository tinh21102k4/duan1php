<style>
.ctn{
    width: 1200px;
    border: 1px solid black;
    height: auto;
    margin-left: 150px;
    margin-top: 10px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    margin-bottom: 20px;
}
.thongtin{
    border: 1px  solid black;
    width: 400px;
padding-bottom: 50px;

}
.donhang{
    border: 1px  solid black;
    width: 800px;
}
.heart{
    background-color: aquamarine;
    padding: 30px 0 30px 50px;
}
input{
    margin-left: 10px;
    border: none;
    border-left: 1px solid gray;
    border-bottom: 1px solid gray;
    margin-bottom: 30px;
    width: 350px;
}
.name{
    background-color: black;
    color: white;
    padding: 10px 0 10px 300px;

}
.huydon{
    background-color: red;
    color: white;
    border: none;
}
.hethan{
    background-color: lightgray;
    border: none;
}
</style>
<div class="container1">
    <div class="heart">
        <a href="index.php" style='color:blue'>Trang Chủ</a> / Đơn Hàng Của Tôi
    </div>
  <?php if(isset($_SESSION['user'])){?>
    <div class="ctn">
        <div class="thongtin">
            <img src="./<?php echo $_SESSION['user']['img'] ?>" style="width: 150px; height:150px; border-radius: 50%; margin-left:100px; margin-top:30px; border:3px solid greenyellow;" alt="">
            <h3 style="margin-left: 25px; margin-top:20px; font-weight: bold;">Thông Tin Khách Hàng</h3> <br>
            <input type="text" value="<?php echo $_SESSION['user']['user'] ?>"> <br>
            <input type="text" value="<?php echo $_SESSION['user']['email'] ?>"> <br>
            <input type="text" value="<?php echo $_SESSION['user']['sdt'] ?>"> <br>
            <input type="text" value="<?php echo $_SESSION['user']['address'] ?>"> <br>
           <p style="margin-left: 10px; font-weight: bold;"> Cấp Độ Khách Hàng</p>
            <input type="range" > <br>
        </div>
        <div class="donhang">
            <div class="name">Đơn Hàng Của Bạn</div>
            <div class="table_desc">
                            <div class="cart_page table-responsive">
            <table>
                            <thead>
                        
                                <tr>
                                    <th class="product_remove">MA HĐ</th>
                                    <th class="product_thumb">DATE</th>
                                    <th class="product_name">QUANTITY</th>
                                    <th class="product-price">PRICE</th>
                                    <th class="product_quantity">TRANG THAI</th>
                                    <th class="product_total">THAO TAC</th>
                           
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($resultsmycart as $mycart):?>
                                <tr>
<td class="product_thumb"><?php echo $mycart['mahoadon'] ?></td>
<td class="product_name"><?php echo $mycart['datebuy'] ?></td>
                                    <td class="product-price"><?php echo $mycart['soluonghh'] ?></td>
                                    <td class="product_quantity"><?php echo number_format($mycart['tongprice'],0,',','.') ?>VNĐ</td>
                                    <td class="product_total"><?php $trangthai = trangthai_dh($mycart['trangthai']); echo $trangthai ?></td>
                                    <td class="product_total"><?php if($mycart['trangthai'] == 0){ ?>
                                        <a href="index.php?act=update_trangthai_user&id=<?php echo $mycart['id'] ?>"><button class="huydon" onclick="return confirm('Bạn có muốn hủy đơn không ?')">Hủy Đơn</button></a>
                                    <?php }else if($mycart['trangthai'] ==1 || $mycart['trangthai'] ==2 || $mycart['trangthai'] ==3){ ?>
                                        <button class="hethan">Hủy Đơn</button>
                                        <?php }else if($mycart['trangthai'] == 4){?>
                                            <button class="hethan">Đã Hủy</button>
                                            <?php } ?>

                                    </td>
                                  
                                 


                                </tr>

                            <?php endforeach ?>
                            </tbody>
                        </table>   
        </div>
        </div>
        </div>
    </div>
    <?php }else{?>
       <div class="loi">
       <div>Vui Lòng Đăng Nhập Để Vào Đơn Hàng Của Tôi </div>
        <div style='margin-left:50px'>[...<a href="index.php?act=login" class='loic'>Đăng Nhập</a>...]</div>
       </div>
        <?php }?>
</div>
