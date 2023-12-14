<style>
    .ctn{
        border: 0.1px solid gray;
        margin-top: 50px;
        margin-bottom: 200px;
       width: 1000px;
        margin-left: 200px;
        padding: 20px 100px 0 90px;
        border-radius: 4px;
        background-color: white;
        height: auto;
        padding-bottom: 100px;
    }
    .name{
        font-size: 25px;
        margin-left: -50px;
    }
   .hder{
    width: 100%;
    height: 70px;
    background-color: aquamarine;
  padding: 25px 0 19px 100px;
   }
   .ip{
    border: none;
    border-bottom: 2px solid purple;
    background-color: transparent;
    width: 800px;
    height: 30px;
   }
   .bt{
    width: 150px;
    height: 35px;
    border: none;
    background-color: black;
    color: white;
    border-radius: 4px;
    transition: 1s all;

   }
   ::-webkit-scrollbar{
    width: 10px;
   }
  ::-webkit-scrollbar-thumb{
    background-color: black;
    width: 10px;
    border-radius: 10px;
  }
  ::-webkit-scrollbar-track{
    width: 10px;
  }
  ::-webkit-scrollbar-button{
    background-color: black;
    width: 10px;
    border-radius:0 0 5px 5px ;
  }
  .bt:hover{
    background-color: white;
    color: black;
    border: 1px solid purple;
  }
  .err{
        background-color: lightcoral;
        border: none;
        width: 305px;
        height: 35px;
        margin-top: 20px;
        border: 1px dashed black;
        padding: 5px 0 5px 10px;
       

    }
    .success{
        background-color: lightgreen;
        border: none;
        width: 305px;
        height: 35px;
        margin-top: 20px;
        border: 1px dashed black;
        padding: 5px 0 5px 10px;
    }
</style>
<div class="hder">
    <a href="index.php">Trang Chủ</a> / Đổi Mật Khẩu
</div>
<div class="ctn">
<div class="name">Đổi Mật Khẩu</div><br> 
    <form action="index.php?act=doipass" method="post" >
       
        <input type="text" name='oldpass' placeholder='Nhập Mật Khẩu Cũ ...'class='ip'> <br><br>
        <input type="password" name='password' placeholder="Nhập Mật Khẩu Mới..." class='ip'> <br><br>
        <input type="password" name='repassword' placeholder='Nhập Lại Mật Khẩu Mới....' class='ip'> <br><br>
       <input type="hidden" name="id" value="<?php echo $_SESSION['user']['id'] ?>" >
        <input type="submit" value="Đổi Mật Khẩu" class='bt' name='submit'>  <br><br>
      
      
    </form>
    <?php if(isset($_SESSION['err'])):
      foreach($_SESSION['err'] as $value):
       ?>
      <div class="err"><?php echo $value ?></div>
      <?php endforeach ?>
      <?php endif ?>
      <?php if(isset($_COOKIE['cc'])):?>
        <div class="success">
          <?php echo $_COOKIE['cc'].'<a href="index.php?act=login">Đăng Nhập </a>' ?>
        </div>
        
        <?php endif ?>
</div>