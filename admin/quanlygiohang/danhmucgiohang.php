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
       table{
        margin-left: 5px;
       }
      th{
        width: 300px;
        height: 40px;
      }
   
      button{
        border: none;
        width: 50px;
        border-radius: 4px;
        transition: all 1s;
      }
      button:hover{
        background-color: gray;
        color: white;
      }
      .active1{
        padding: 5px 10px 5px 10px;
        background-color: black;
        color: white;
      
      }
      .span1{
        margin-left: 450px;
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
       margin-right: 100px;
       
      }
      li{
        list-style: none;
      }
      .ctn{
        width: 100px;
        height: 30px;
        border-radius: 5px;
        border: 2px solid white;
        background-color: transparent;
        color: white;
      transition: 1s all;
      }
      .ctn:hover{

        background-color: lightgreen;
        color:black;
      }
      .cc:hover{

      background-color: lightgreen;
      color:black;
      }
      select{
        width: 200px;
        height: 30px;
        border-radius: 3px;
        background-color: transparent;
        color: white;

      }
      select>option{
        background-color: black;
        color: white;
      }
      .cc{
      width: 110px;
      background-color: transparent;
      border: 2px solid white;
      color: white;
      font-size: 12px;
      }
      .span{
        background-color: black;
      }
    </style>
    
    <div class='container'>
        <div class="text" style="color:white;"> QUAN TRI DON HANG</div>
         <div class="col">
  
         </div>
         <form action="index.php?act=listgh" method="post">
          <select name="trangthai" id="">
            <option value="0">Chờ Xác Nhận</option>
            <option value="1">Đang Xử lí</option>
            <option value="2">Đang Giao Hàng</option>
            <option value="3">Giao Hàng Thành Công</option>
            <option value="4">Đã Hủy</option>
          </select>
          <input type="submit" value="Lọc" name="loc">
         </form>
         <table>
          <thead>
            <th>Tên</th>
            <th>MÃ HĐ</th>
            <th>SĐT</th>
            <th>ĐCHI</th>
            <th>PTHUCTT</th>
            <th>NGAYMUA</th>
            <th>SOLUONG</th>
            <th>TONG</th>
            <th>TRANGTHAI</th>
            <th>TUYCHON</th>
            <th>THAOTAC</th>
           
          </thead>
          <tbody>
         
              
             <?php foreach( $selectgiohang as $result_hoadon): ?>
              <form action="index.php?act=listgh" method="post">
            <tr style="margin-top: 20px;">
              <td><?php echo $result_hoadon['hoten'] ?></td>
              <td><?php echo $result_hoadon['mahoadon'] ?></td>
              <td><?php echo $result_hoadon['sdt'] ?></td>
              <td><?php echo $result_hoadon['address'] ?></td>
              <td><?php echo $result_hoadon['PT_TT'] ?></td>
              <td><?php echo $result_hoadon['datebuy'] ?></td>
              <td><?php echo $result_hoadon['soluonghh'] ?></td>
              <td><?php echo $result_hoadon['tongprice'] ?></td>
              <td><?php $trangthaidh = $result_hoadon['trangthai']; 
               $setup_trangthai = setup_trangthai($trangthaidh);
               echo $setup_trangthai;
              ?></td>
              <td>
              <input type="hidden" name="id" value="<?php echo $result_hoadon['id'] ?>">
              <select name="trangthai" id=""> <br> 
              <option value="0">Chờ Xác Nhận</option>
              <option value="1">Đang Chuẩn Bị Hàng !</option>
              <option value="2">Đang Giao Hàng !</option>
              <option value="3">Giao Hàng Thành Công !</option>
              <option value="4">Đã Hủy</option>
            </select>
              </td> 
              
              <td>
              <input type="submit" value="Cập Nhập" name="capnhap" class="ctn">
              </td>
           
            </tr>
        </form>
        <tr  colspan="1">  <td  colspan="1">  <a href="index.php?act=chitiethoadon&id=<?php echo $result_hoadon['id'] ?>"> <button class="cc">Hóa Đơn Chi Tiết</button> </a></td></tr>
          <?php endforeach ?>
         
          
         </table>
         
     
          </tbody>

   
    </div>