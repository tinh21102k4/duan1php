
<style>
    .ctn{
        border: 0.1px solid gray;
        margin-top: 50px;
        margin-bottom: 200px;
        width: 1000px;
        margin-left: 200px;
        padding: 20px 100px 0 90px;
        border-radius: 4px;
        background-color: lightgray;
        height: 500px;
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
</style>
<div class="hder">
    <a href="index.php">Trang Chủ</a>/ Trang Cá Nhân / Cập Nhập Tài Khoản
</div>
<div class="ctn">
<div class="name">Cập Nhập Tài Khoản</div><br> 
    <form action="index.php?act=updateaccount" method="post" enctype="multipart/form-data">
       <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
        <input type="text" name='user' placeholder='Nhập Tên Người Dùng....'class='ip' value="<?php echo $user['user'] ?>"> <br><br>
        <input type="email" name='email' placeholder="Nhập Email..." class='ip'  value="<?php echo $user['email'] ?>"> <br><br>
        <input type="password" name='password' placeholder='Nhập Mật Khẩu....' class='ip'  value="<?php echo $user['password'] ?>"> <br><br>
        <input type="text" name='add' placeholder='Nhập Địa Chỉ....' class='ip'  value="<?php echo $user['address'] ?>"> <br><br>
        <input type="text" name='sdt' placeholder='Nhập Số Điện Thoại....' class='ip'  value="<?php echo $user['sdt'] ?>"> <br><br>
        <div class="button-wrap">
            <input type="hidden" name="file_img"  value="<?php echo $user['img'] ?>" >
             <label class="button" for="upload">Ảnh Chính</label>
             <input id="upload" type="file" name='file_img'>
           </div> <br> <br>
        <input type="submit" value="Cập Nhập" class='bt' name='update'> <input type="reset" value="Nhập Lại" class='bt'> <br><br>
      
      
    </form>

</div>
<body>
<!-- <script>
    alert("<?php if(isset($notify)){
        echo $notify;
    } ?>")
</script> -->
    
</body>