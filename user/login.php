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
        height: 400px;
    }
    .name{
        font-size: 25px;
        margin-left: -50px;
    }
   .hder{
    width: 100%;
    height: 70px;
    background-color: lightgray;
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
</style>
<div class="hder">
    <a href="index.php">Trang Chủ</a>/Đăng Nhập
</div>
<div class="ctn">
<div class="name">Đăng Nhập</div><br> 
    <form action="index.php?act=login" method="post">
       
        <input type="text" name='user' placeholder='Nhập Tên Người Dùng....'class='ip'> <br><br>
       
        <input type="password" name='password' placeholder='Nhập Mật Khẩu....' class='ip'> <br><br>
        <input type="submit" value="Đăng Nhập" class='bt' name='login'> <input type="reset" value="Nhập Lại" class='bt'> <br><br>
        <a href="index.php?act=fogot_password">Bạn Quên Mật Khẩu ?</a> <br>
        Bạn chưa có tài khoản ? <a href="index.php?act=dangki" style="text-decoration: underline; color: blueviolet;">Đăng Kí </a>
    </form>
 <?php 
 if(isset($_SESSION['success'])):

 
    ?>
    <div class="err">
                    <?php   echo $_SESSION['success']; ?>
                    
                </div>
                <?php unset($_SESSION['success']) ?>
                <?php endif ?>
</div>