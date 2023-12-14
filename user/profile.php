<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Cá Nhân</title>
</head>
<body>
    
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
        height: 500px;
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
  .name{
    margin-left: 320px;
    font-size: 40px;
    font-weight: bold;
    font-style: italic;
  }
  .img{
    border: 4px solid greenyellow;
    border-radius: 100%;
    margin-left: 310px;
    width: 200px;
    height: 200px;
  }
  .gmail{
    width: 340px;
    background-color: transparent;
    border-bottom
    : 1px solid purple;
    border-left: 1px solid purple;
    height: 30px;
    margin-left: 200px;
    margin-top: 20px;
padding-left: 20px;
  }
  .thaotacc{
    margin-left: 270px;
    margin-top: 30px;
  }
  .thaotacc>a>button{
    border: none;
    background-color: black;
    color: white;
    border-radius: 2px;
   transition: all 1s;
  }
  .thaotacc>a>button:hover{
    border: 2px dashed black;
    background-color: white;
    color: black;
  }
</style>

<div class="hder">
    <a href="index.php">Trang Chủ </a>/ Trang Cá Nhân
</div>
<div class="ctn">

<?php if(isset($user)): ?>
    <div class="name"><?php echo $user['user'] ?></div><br> 
      <div ><img src="./<?php echo $user['img'] ?>" alt="" width="150px" class="img"></div>
     <div class="gmail">
          <?php echo $user['email'] ?>
     </div>
     <div class="gmail">
      <?php echo $user['sdt'] ?>
     </div>
     <div class="gmail">
     <?php echo $user['address'] ?>
     </div>
     <div class="thaotacc">
        <a href="index.php?act=updateacc&id=<?php echo $user['id'] ?>"><button>Cập Nhập</button></a>
        <a href="index.php?act=logout"><button>Đăng Xuất</button></a>
     </div>
</div>
<?php endif ?>
</body>
</html>