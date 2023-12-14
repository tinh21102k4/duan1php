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
        }
        form{
          position: relative;
        }
        .up{
          margin-left: 300px;
        }
        .nutbutton
        {
          text-align: center;
           margin-top: 60px;
            margin-left: 500px;
            border-radius: 15px 0 20px 2px;
          width: 100px;
          height: 50px;
        }
        .nutbutton:hover
        {
          background: yellow;
        }
    </style>
    
    <div class='container'>
        <div class="text">UPDATE SAN PHAM</div>
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
          
            <select name="iddm" id="">
            <?php 
            $list_dm_ud = select_danhmuc();
            foreach($list_dm_ud as $dm):?>
              <option value="<?php echo $dm['id'] ?>" 
              <?php echo($fill_sl[0]['iddm'] == $dm['id'] ? 'selected' : '') ?>><?php echo $dm['name'] ?></option>
              <?php endforeach ?>
            </select> <br>
        
          <input type="text" name="name" class="ip" placeholder="Tên Sản Phẩm" value="<?php echo $fill_sl[0]['name'] ?>"> <br> <br>
          <input type="hidden" name="id" value="<?php echo $fill_sl[0]['idsp'] ?>">
          <input type="text" name="color" id="" class="color" style="margin-left: 200px;" placeholder="color"value="<?php echo $fill_sl[0]['color'] ?>" >
          <input type="text" name="color1" id="" class="color" placeholder="color I" value="<?php echo $fill_sl[0]['color1'] ?>">
          <input type="text" name="color2" id="" class="color" placeholder="color II" value="<?php echo $fill_sl[0]['color2'] ?>"> <br> <br>
          <input type="number" name="quantityS" id="" class="quantity" placeholder="Quantity S" style="margin-left: 200px;" value="<?php echo $fill_sl[0]['quantity'] ?>">
          <input type="number" name="quantityM" id="" class="quantity" placeholder="Quantity M"  value="<?php echo $fill_sl[1]['quantity'] ?>">
          <input type="number" name="quantityL" id="" class="quantity" placeholder="Quantity L" value="<?php echo $fill_sl[2]['quantity'] ?>">
          <input type="number" name="quantityXL" id="" class="quantity" placeholder="Quantity XL" value="<?php echo $fill_sl[3]['quantity'] ?>"> <br> <br>
          <input type="number" name="PriceS" id="" class="quantity" placeholder="Price S" style="margin-left: 200px;" value="<?php echo $fill_sl[0]['price'] ?>" >
          <input type="number" name="PriceM" id="" class="quantity" placeholder="Price M" value="<?php echo $fill_sl[1]['price'] ?>">
          <input type="number" name="PriceL" id="" class="quantity" placeholder="Price L" value="<?php echo $fill_sl[2]['price'] ?>">
          <input type="number" name="PriceXL" id="" class="quantity" placeholder="Price XL" value="<?php echo $fill_sl[3]['price'] ?>">
          <br> <br>
          <textarea name="mota" id="" cols="30" rows="10" class="mota" placeholder="Mô Tả Sản Phẩm"><?php echo $fill_sl[0]['mota'] ?></textarea>
          <input type="hidden" name="file_img" value="<?php echo $fill_sl[0]['img'] ?>">
          <input type="hidden" name="file_img1" value="<?php echo $fill_sl[0]['img1'] ?>">
          <input type="hidden" name="file_img2" value="<?php echo $fill_sl[0]['img2'] ?>">
          <input type="hidden" name="file_img3" value="<?php echo $fill_sl[0]['img3'] ?>">
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
          <input type="file" name="file_img3" id="file_img3" class="upload">
          </div>
          <input class="nutbutton" type="submit" value="Update" name="update" >
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