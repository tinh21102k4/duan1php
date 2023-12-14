<style>
    .ctn{
        width: 100%;
        margin-top: 20px;
    }
    .heder{
        width: 100%;
        height: 70px;
        padding: 30px 0 30px 70px;
        background-color: lightgray;
        margin-bottom: 100px;
    }
    .boxfogot{
        width: 75%;
        height: 600px;
        /* background-color: ; */
        border: 1px solid black;
        border-radius: 4px;
        margin-top: 20px;
        margin-left: 190px;
    }
    .name{
        background-color: black;
        width: 200px;
        height: 40px;
        border-top-left-radius: 5px;
        border-bottom-right-radius: 100px;
        color: white;
        padding: 10px 0 10px 10px;
    }
    .box{
        margin-top: 20px;
        margin-left: 300px;
        width: 400px;
        height: 200px;
        border: 2px solid greenyellow;
        padding: 20px 0 0 30px;
    }
    .ip{
        width: 250px;
        height: 35px;
        border-radius: 5px 0 0 5px;
        background-color: transparent;
    }
    .bt{
        width: 50px;
        height: 35px;
        background-color: black;
        border: none;
        color: white;
        border-radius: 0 5px 5px 0;
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
<div class="ctn">
    <div class="heder"><a href="index.php">Trang Chủ</a> / Đăng Nhập / Quên Mật Khẩu</div>
    <div class="boxfogot">
        <div class="name">Quên Mật Khẩu </div>
        <div class="box">
            <h4>Vui lòng nhập Email của bạn !</h4>
            <h5>Chúng tôi sẽ khôi phục tài khoản của bạn </h5>
            <form action="" method="post">
                <input type="text" name="email" id="" placeholder="Nhập Email Khôi Phục..." class='ip'>
                <input type="submit" value="Gửi" name="submit" class="bt">
            </form>
              <?php if(isset($_SESSION['errr'])):?>
                <div class="err">
                    <?php   echo $_SESSION['errr']; ?>
                    
                </div>
                <?php unset($_SESSION['errr']); ?>
                <?php endif ?>
                <?php if(isset($_SESSION['success'])):?>
                    <div class="success">
                    <?php   echo $_SESSION['success']; ?>
                   
                </div>
                <?php unset($_SESSION['success']);?>
                 <?php endif ?>
        </div>
        
    </div>
</div>