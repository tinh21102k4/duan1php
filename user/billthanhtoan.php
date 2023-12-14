
<style>

.container1{
    width: 1200px;
    /* border: .3px solid black; */
    height: auto;
    margin-left: 150px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    margin-top: 50px;
    margin-bottom: 50px;
}
.hider{
    background-color: aquamarine;
    width: 100%;
    height: 70px;
   padding:  27px 0 27px 20px;
}
.col{
    width: 700px;
    border: none;
}
.col1{
    width: 600px;
    border: none;
    border-left: 1px solid black;
}
.hvt{
    box-shadow: 0 0 0 1px #d9d9d9;
    transition: all 0.2s ease-out;
    background-color: white;
    color: #333333;
    border-radius: 4px;
    display: block;
    box-sizing: border-box;
    width: 100%;
    padding: 0.94em 2.8em 0.94em 0.8em;
    word-break: normal;
    border: 1px solid gray;
    width: 650px;
}
.email{
   
    transition: all 0.2s ease-out;
    background-color: white;
    color: #333333;
    border-radius: 4px;
   
    box-sizing: border-box;
    width: 100%;
    padding: 0.94em 2.8em 0.94em 0.8em;
    word-break: normal;
    border: 1px solid gray;
    width: 420px;
}
.sdt{
    transition: all 0.2s ease-out;
    background-color: white;
    color: #333333;
    border-radius: 4px;
   
    box-sizing: border-box;
    width: 100%;
    padding: 0.94em 2.8em 0.94em 0.8em;
    word-break: normal;
    border: 1px solid gray;
    width: 224px;
}
.address{
    box-shadow: 0 0 0 1px #d9d9d9;
    transition: all 0.2s ease-out;
    background-color: white;
    color: #333333;
    border-radius: 4px;
    display: block;
    box-sizing: border-box;
    width: 100%;
    padding: 0.94em 2.8em 0.94em 0.8em;
    word-break: normal;
    border: 1px solid gray;
    width: 650px;
}
.pthuc{
    border: .4px solid gray;
    width: 650px;
    height: 140px;
    border-radius: 3px;
}
.pthuc1{
    border: none;
    border-bottom: 1px solid gray;
   height: 70px;
   background-color: lightgrey;
}
#nganhang{
margin-left: 10px;
margin-top: 25px;
}
#nhanhang{
    margin-left: 10px;
    margin-top: 25px;
}
td{
    width: 200px;
    
}
.voucher{
   margin-left: 20px;
}
.ipvoucher{
    width: 430px;
    height: 45px;
    border-radius: 5px;
}
.btvoucher{
    width: 100px;
    height: 45px;
    margin-left: 5px;
    border: none;
    background-color: #338dbc;
    color: white;
    border-radius: 5px;
}
.vanchuyen{
    margin-left: 20px;
    margin-bottom: 20px;
    margin-top: 20px;

}
.content{
    font-size: 20px;
}
.price{
    font-size: 21px;
    color: red;
    margin-right: 10px;
    margin-left: 240px;
    position: absolute;
    
}
.price1{
    font-size: 21px;
    color: red;
    margin-right: 10px;
    margin-left: 266px;
    position: absolute;
}
.price2{
    font-size: 21px;
    color: red;
    margin-right: 10px;
    margin-left: 340px;
    position: absolute;
}
.tongtien{
    margin-left: 20px;
    position: relative;
}
.dathang{
    width: 300px;
    height: 50px;
    background-color:#338dbc ;
    border-radius: 5px;
    color: white;
    border: none;
    margin-left: 300px;
    margin-top: 30px;

}
u{
    font-size: 18px;
}
</style>

<div class="hider">
      <a href="index.php">Trang Chủ</a> / Giỏ Hàng / Đơn Hàng
    </div>
   <form action="?act=checkout" method="post">
   <div class="container1">
      <div class="col">
        <h5>Thông Tin Giao Hàng</h5>
        <input type="text" name="name"class="hvt" placeholder="Họ Và Tên" value='<?php echo $_SESSION['user']['user'] ?>'> <br> 
        <input type="text" name="email" id="" class="email"  placeholder="Email" value='<?php echo $_SESSION['user']['email'] ?>'>
         <input type="text" name="sdt" id="" class="sdt" placeholder="Số Điện Thoại" value='0<?php echo $_SESSION['user']['sdt'] ?>'><br> <br>
        <input type="text" name="address" id="address" class="address" placeholder="Địa Chỉ" value='<?php echo $_SESSION['user']['address'] ?>'> <br> 
        <textarea name="ghichu" placeholder="Ghi Chú" id="" cols="30" rows="10" style="width: 650px; height:90px;"></textarea>
        <div class="pthuc">
            <div class="pthuc1">
                <input type="radio" name="radios" id="nhanhang" value="0" checked>Thanh Toán Khi Nhận Hàng<input type="radio" name="radios" id="nganhang" value="1">Thanh Toán Qua MOMO <input type="radio" name="radios" id="vnpay" value="2" > Thanh Toán Qua VNPAY
            </div>
            <div style="padding: 20px 0 20px 40px;" >
              <p id="text">Thanh Toán Khi Nhận Hàng !</p>
            </div>
        </div>
      </div>

      <div class="col1">
        <div class="rowgh">
            <table>
               <?php if(isset($_SESSION['cart'])):?>
                <?php foreach($_SESSION['cart'] as $billgh): ?>
                <tr align="center">
                    <td><img src="./upload/<?php echo $billgh['img'] ?>" alt="" width="70px" height="40px"></td>
                    <td><?php echo $billgh['namesp'] ?></td>
                    <td><?php echo $billgh['soluong'] ?></td>
                    <td><?php echo $billgh['tongprice'] ?>$</td>
                    <td class="product_remove"><a href="index.php?act=xoagh&id=<?php echo $billgh['id'] ?>&iduser=<?php echo $_SESSION['user']['id'] ?>  "><i class="fa fa-trash-o"></i></a></td>
                </tr>
                <?php endforeach ?>
                <?php endif ?>
            </table>
        </div>
        <hr>
        <div class="voucher">
            <form action="index.php?act=checkout&id=<?php echo $_SESSION['user']['id'] ?>" >
                <input type="text" placeholder="Mã Giảm Giá" name="voucherS" class="ipvoucher"><input type="hidden" name="idtk" value="<?php echo $_SESSION['user']['id'] ?>"> <?php if(!isset($_SESSION['cart'])){?>
                    <span class="" style="padding: 18px 25px 18px 25px;color:white;cursor: pointer; background-color:lightblue; border-radius:5px;">Sử Dụng</span>
                    <?php } else{ ?>
                        <button type="submit" name="voucher" class="btvoucher">Sử Dụng</button>
                        <?php }?>
            </form>
          
        </div>
        <hr>
        <div class="vanchuyen" style="font-size: 19px;">
            Phí Vận Chuyển
        </div>
        <hr>
        <div class="tongtien">
            <ul>
                <li><span class="content">Tiền Tổng Đơn </span><span class="price"><?php if(isset($_SESSION['cart'])){
                    echo number_format( $tientamtinh,0,',','.');
                }else{
                    echo 0;
                } ?><u>VNĐ</u></span></li>
                <li><span class="content">Số Tiền Giảm<span class="price1"><?php if(isset($chietkhau)){
                    echo  '-'.number_format($chietkhau,0,',','.');
                }else{
                    echo 0;
                } ?><u>VNĐ</u></span></li>
                <input type="hidden" name="tongpricegh" value="<?php echo $tongtiengh ?>">
                <li><span class="content">Tổng<span class="price2"> <?php if(isset($_SESSION['cart'])){
                    echo number_format($tongtiengh,0,',','.');
                }else{
                    echo 0;
                } ?><u>VNĐ</u></span></li>
            </ul>
        </div>
        <hr>
       <?php if(empty($_SESSION['cart'])){ ?>
                  <div class="dathang" style="padding: 15px 0 0 70px; background-color:lightblue;cursor: pointer; ">Hoàn Tất Đặt Hàng</div>

        <?php }else{ ?>
            <input type="submit" value="Hoàn Tất Đặt Hàng" name="payUrl" class="dathang align">
   <?php } ?>
      </div>
    </div>
   </form>
<script>
    var radioNH =document.querySelector('#nhanhang');
    var radioMOMO =document.querySelector('#nganhang');
    var values =document.querySelector('#text');
    var radioVNPAY =document.querySelector('#vnpay');
    radioNH.addEventListener('click',function(){
        if(radioNH.checked){
            values.textContent ='Thanh Toán Khi Nhận Hàng';
        }
    });
    radioMOMO.addEventListener('click',function(){
        values.textContent ='Thanh Toán MOMO';
    });
    radioVNPAY.addEventListener('click',function(){
        values.textContent ='Thanh Toán Qua VN PAY';
    })
</script>