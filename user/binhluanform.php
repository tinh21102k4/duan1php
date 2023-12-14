
<?php
session_start();
ob_start();
include('../model/pdo.php');
include('../model/binhluan.php');
include('../model/sanpham.php');
$idpro = $_REQUEST['idsp'];
$resultcmt= loadall_binhluan($idpro);
if(isset($_SESSION['idreply'])){
  $idss = $_SESSION['idreply'];
$result_reply = result_replycmt($idpro,$idss);
}
?>
<style>
  .formcmt{
    margin-left: -570px;
    margin-bottom: 20px;
  }
  .ipcmt{
    width: 200px;
    height: 20px;
    border: none;
    border-bottom: 1px solid purple;
    margin-left: 20px;
    border-left: 1px solid red;
  }
  .ipcmtt{
    width: 200px;
    height: 20px;
    border: none;
    border-bottom: 1px solid purple;
    margin-left: 60px;
    border-left: 1px solid red;
  }
  .repli{
    width: 80px;
    height: 20px;
    color: white;
    background-color: black;
    border: none;
    padding: 5px 5px 25px 5px;
  }
  .replibl{
    margin-left: 20px;
  }
  .i{
    position: absolute;
    left: -650px;
    top: -4px;
    border: 4px solid greenyellow;
    border-radius: 10px 0 20px 5px;
  }
 
</style>
                        <div class="coment" id='cmt'>
                        <?php if(isset($_SESSION['user'])){ ?>
                          <div class="i">
                            <img src="./<?php echo $_SESSION['user']['img'] ?>" alt="" style="width: 60px; height:60px; border-radius: 10px 0 20px 5px;">
                          </div>
                                <div class="formcmt">
                                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                <input type="hidden"  value='<?php echo $idpro ?>' name='idproduct'>
                                    <input type="text" name="comment" class="ip" placeholder="Bình Luận ..."> 
                                    <input type="submit" value="Send" name='binhluan'  class="bt">
                                </form>
                            </div>
                            <?php }else{ ?>
                                <h4 style='color:red; margin-left:180px;text-decoration: underline;'>Bạn Phải Đăng Nhập Để Comment !</h4>
                                <?php } ?>
                            <div class="viewcmt">
                                <h4 style='margin-left:500px;margin-top: 5px;'>Ý Kiến Khách Hàng</h2>
                                <?php foreach($resultcmt as $cmt): ?>
                            <div class="vcmt">
                             <span class="imgname"> <img src="./<?php echo $cmt['img']  ?>" alt="" class="imgcmt" width="24px" style='border: 2px solid greenyellow;border-radius: 50%;'> <?php echo $cmt['nameuser'] ?></span>
                             <div class="ndmtt">
                               - <?php echo $cmt['noidung'] ?> <br>
                              
                                 <?php if(isset($result_reply)): ?>
                                  
                                  <?php foreach($result_reply as $reply): ?>
                                  <div class="replibl">
                                  <span class="imgname"> <img src="./<?php echo $reply['img']  ?>" alt="" class="imgcmt" width="24px" style='border: 2px solid greenyellow;border-radius: 50%;'> <?php echo $reply['username'] ?></span> <br>
                                     - <?php echo $reply['noidung'] ?>   <span class='time1'><?php echo $reply['ngaybinhluan'] ?></span><br>
                                     <a href="index.php?act=deletecmtreply&id=<?php echo $reply['id'] ?>" style='color:red; font-size: 12px; margin-left: 10px;' class='xoacmt'> Xóa</a>
                                  </div>
                                  <?php endforeach ?>
                                  <?php endif ?>
                             </div>
                             <span class='time'><?php echo $cmt['ngaybinhluan'] ?></span>
                             <?php if(isset($_SESSION['user'])){
                                if($_SESSION['user']['user'] ==  $cmt['nameuser']){
                              ?>
                                <div class="thaotac">
                               <a href="index.php?act=deletecmt&id=<?php echo $cmt['id'] ?>" style='color:red;' class='xoacmt'> Xóa</a>
                          
                             </div>
                             <?php }else{?>
                              <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                              <input type="hidden" name="idbl" value='<?php echo $cmt['id'] ?>'>
                              <input type="hidden"  value='<?php echo $idpro ?>' name='idproduct'>
                               <input type="text" placeholder="Reply CMT With <?php if($cmt['nameuser'] == $_SESSION['user']['user']){
                                echo 'Tôi';
                               }else{
                                echo $cmt['nameuser'];
                               } ?>" class="ipcmt" name="noidung" > <input type='submit' name='reply' value='Reply' class='repli'>
                               </form>
                               <?php } ?>
                             <?php }?>
                            </div>
                            <?php endforeach ?>
                            </div>
                         
                        </div> 


<?php
if(isset($_POST['binhluan'])){
    $noidung = $_POST['comment'];
    $date = date('Y-m-d');
    $nameuser = $_SESSION['user']['user'];
    $iduser = $_SESSION['user']['id'];
    $idsp = $_POST['idproduct'];
    $imgcmt = $_SESSION['user']['img'];
    insert_binhluan($noidung,$date, $nameuser,$imgcmt,$iduser,$idsp);
    header("location:".$_SERVER['HTTP_REFERER']);
}
if(isset($_POST['reply'])){
  $id = $_POST['idbl'];
  $noidung = $_POST['noidung'];
  $date = date('Y-m-d');
  $nameuser = $_SESSION['user']['user'];
  // $iduser = $_SESSION['user']['id'];
  $idsp = $_POST['idproduct'];
  $imgcmt = $_SESSION['user']['img'];
  insert_binhluan_reply($noidung,$date, $nameuser,$imgcmt,$idsp,$id);
  $_SESSION['idreply'] = $id;
  header("location:".$_SERVER['HTTP_REFERER']);

}
ob_end_flush();
?>