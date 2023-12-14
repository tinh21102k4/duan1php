<style>
        .container{
            margin-top: 100px;
            margin-left: 300px;
            width: 1200px;
            height: 1600px;
            border: 1px solid gray;
            border-radius: 10px;
            overflow: hidden;
        }
        .text{
          font-size: 30px;
          color: white;
          margin: 20px 0 0 20px;
        }
        select{
          width: 200px;
          background-color: transparent;
          color: white;
          margin-left: 400px;
        }
        option{
          background-color: black;
        }
        .ip{
          width: 700px;
          height: 30px;
          border-radius: 5px;
          background-color: transparent;
          border: 1px solid white;
          color: white;
          margin-top: 20px;
          margin-left: 200px;
        }
        ::placeholder{
          color: white;
          font-size: 15px;
         
        }
        .color{
          width: 230px;
          border: 1px solid white;
          background-color: transparent;
          border-radius: 5px;
          height: 30px;
          color: white;
        }
        .quantity{
          width: 171px;
          height: 30px;
          border: 1px solid white;
          background-color: transparent;
          border-radius: 5px;
          color: white;
        }
        .mota{
          width: 700px;
          height: 100px;
          margin-left: 200px;
          border-radius: 5px;
          background-color: transparent;
          color: white;
        }
        .upload{
          border-radius: 10px;
        }
        label{
          position: absolute;
          width: 200px;
          background-color: black;
          color: white;
          height: 40px;
          padding: 10px 0 0 40px;
          border-radius: 5px;
          cursor: pointer;
        }
        form{
          position: relative;
        }
        .up{
          margin-left: 300px;
        }
        .bt{
          width: 240px;
          height: 35px;
        background-color: transparent;
        border: 2px solid white;
        color: white;
        transition: .6s all;
        }
        .bt:hover{
          background-color: white;
          color: black;
        }
    </style>
    
    <div class='container'>
        <div class="text">THEM SAN PHAM</div>
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data" >
          
            <select name="iddm" id="">
            <?php foreach($list_dm as $dm):?>
              <option value="<?php echo $dm['id'] ?>"><?php echo $dm['name'] ?></option>
              <?php endforeach ?>
            </select> <br>
        
          <input type="text" name="name" class="ip" placeholder="<?php if(isset($_SESSION['err']['name'])){
            echo $_SESSION['err']['name'];
          }else{
            echo 'Ten San Pham';
          } ?>" > <br> <br>
          <input type="text" name="color" id="" class="color" style="margin-left: 200px;" placeholder="<?php if(isset($_SESSION['err']['color'])){
            echo $_SESSION['err']['color'];
          }else{
            echo 'Color';
          } ?>">
          <input type="text" name="color1" id="" class="color" placeholder="color I">
          <input type="text" name="color2" id="" class="color" placeholder="color II"> <br> <br>
          <input type="number" name="quantityS" id="" class="quantity" placeholder="<?php if(isset($_SESSION['err']['quantity'])){
            echo $_SESSION['err']['quantity'];
          }else{
            echo 'Quantity S';
          } ?>" style="margin-left: 200px;" >
          <input type="number" name="quantityM" id="" class="quantity" placeholder="Quantity M">
          <input type="number" name="quantityL" id="" class="quantity" placeholder="Quantity L">
          <input type="number" name="quantityXL" id="" class="quantity" placeholder="Quantity XL"> <br> <br>
          <input type="number" name="PriceS" id="" class="quantity" placeholder="<?php if(isset($_SESSION['err']['price'])){
            echo $_SESSION['err']['price'];
          }else{
            echo 'Price S';
          } ?>" style="margin-left: 200px;" >
          <input type="number" name="PriceM" id="" class="quantity" placeholder="Price M">
          <input type="number" name="PriceL" id="" class="quantity" placeholder="Price L">
          <input type="number" name="PriceXL" id="" class="quantity" placeholder="Price XL">
          <br> <br>
          <textarea name="mota" id="" cols="30" rows="10" class="mota" placeholder="<?php if(isset($_SESSION['err']['mota'])){
            echo $_SESSION['err']['mota'];
          }else{
            echo 'Mo Ta San Pham';
          } ?>"></textarea>
          <br>
          <br>
          <div class="up">
          <label for="file_img">Ảnh Sản Phẩm</label>
          <input type="file" name="file_img" id="file_img" class="upload" >
          <label for="file_img1">Ảnh Sản Phẩm I</label>
          <input type="file" name="file_img1" id="file_img1" class="upload"> <br> <br>
          <label for="file_img2">Ảnh Sản Phẩm II</label>
          <input type="file" name="file_img2" id="file_img2" class="upload">
          <label for="file_img3">Ảnh Sản Phẩm III</label>
          <input type="file" name="file_img3" id="file_img3" class="upload"> <br> <br>  <br>  <br>
          <input type="submit" value="THÊM" name="submit" class="bt" style="margin-left: -105px;" >
          <input type="reset" value="NHẬP LẠI" class="bt">
          <a href="index.php?act=listsp"><input type="submit" value="DANH SÁCH" class="bt"></a>
          </div>
        </form>
  <?php if(isset($notify)): ?>
    <script>
    alert('<?php if(isset($notify)){
        echo $notify;
        echo 'By _ADMIN_';
    } ?>')
   </script>
   <?php endif ?>
    </div>