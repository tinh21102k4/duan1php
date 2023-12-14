<style>
        .container{
            margin-top: 100px;
            margin-left: 300px;
            width: 1200px;
            height: 500px auto;
            
            border: 1px solid gray;
            border-radius: 10px;
            overflow: hidden;
            padding-bottom: 20px;
        }
        .text{
            font-size: 25px;
            margin-top: 20px;
            margin-left: 20px;
        }
    
      .col{
        border: 1px solid white;
      }
      .row{
        width: 700px;
       height: auto;
       padding-top: 50px;
       padding-bottom: 100px;
       border: 1px solid white;
       margin-left: 1px;
       margin-right: 1px;
       margin-top: 20px;
       color: white;
       position: relative;
       
      }
      li{
        list-style: none;
      }
      .cc{
        width: 200px;
        height: 40px;
        background-color: red;
        color: white;
        border-radius: 5px;
        border: none;
      }
    </style>
    
    <div class='container'>
        <div class="text">CHI TIẾT ĐƠN HÀNG</div>
         <div class="col"></div>
         <?php foreach($result_chitiet_hoadon as $hoadon): ?>
         <div class="row">
            <ul>
                <li>Tên Sản Phẩm <?php echo $hoadon['name'] ?></li> <br>
                <li><img src="./<?php echo $hoadon['img'] ?>" alt="" width="100px" style="border-radius: 5px;"></li><br>
                <li>Size : <?php echo $hoadon['size'] ?></li><br>
                <li>Color : <?php echo $hoadon['color'] ?></li><br>
                <li>Price : <?php echo $hoadon['price'] ?></li><br>
                <li>Số Lượng : <?php echo $hoadon['soluong'] ?></li><br>
                <li><a href="index.php?act=huydon&id=<?php echo $hoadon['id'] ?>"><button class="cc">Hủy</button></a></li>
            </ul>
         </div>
        <?php endforeach ?>
       
    </div>