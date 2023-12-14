<?php 
function tong_taikhoan(){
    $sql = 'SELECT COUNT(taikhoan.id) FROM taikhoan';
    $result_taikhoan = pdo_query($sql);
    return $result_taikhoan;
}
function select_taikhoan(){
    $sql ='SELECT * FROM taikhoan';
    $taikhoan = pdo_query($sql);
    return $taikhoan;
}
function insert_account($user,$email,$password,$target_file){
    $sql="INSERT INTO taikhoan(user,email,password,img) VALUE('$user','$email','$password','$target_file')";
    pdo_execute($sql);
}
function check_login($user,$password){
    $sql ="SELECT * FROM taikhoan WHERE taikhoan.user='".$user."' AND taikhoan.password='".$password."'";
    $result = pdo_query_one($sql);
    return $result;
}
function user_profile($id){
    $sql ='SELECT * FROM taikhoan WHERE id='.$id;
    $tk = pdo_query_one($sql);
    return $tk;
}
function update_account_id($id,$user,$email,$password,$add,$sdt,$target_file){
    $sql = "UPDATE taikhoan SET user='".$user."',email='".$email."',sdt='".$sdt."',password='".$password."',img='".$target_file."',address='".$add."' WHERE id=".$id;
    pdo_execute($sql);
}
function result_email($email){
    $sql="SELECT * FROM taikhoan WHERE email='".$email."'";
    $result = pdo_query_one($sql);
    return $result;
}
function deletet_tk($id){
    $sql="DELETE FROM taikhoan WHERE id=".$id;
    pdo_execute($sql);
}
function forgotPassword($user, $email, $password)
{

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

$mail = new PHPMailer\PHPMailer\PHPMailer(true);
try {
//Server settings
$mail->SMTPDebug =  PHPMailer\PHPMailer\SMTP::DEBUG_OFF;
$mail->isSMTP(); // Sử dụng SMTP để gửi mail
$mail->Host = 'smtp.gmail.com'; // Server SMTP của gmail
$mail->SMTPAuth = true; // Bật xác thực SMTP
$mail->Username = 'haduytinh21102004@gmail.com'; // Tài khoản email
$mail->Password = 'cyew esww kjgp mmbw'; // Mật khẩu ứng dụng ở bước 1 hoặc mật khẩu email
$mail->SMTPSecure = 'ssl'; // Mã hóa SSL
$mail->Port = 465; // Cổng kết nối SMTP là 465

//Recipients
$mail->setFrom('haduytinh21102004@gmail.com', 'Admin'); // Địa chỉ email và tên người gửi
$mail->addAddress($email, $user); // Địa chỉ mail và tên người nhận

//Content
$mail->isHTML(true); // Set email format to HTML
$mail->Subject = 'Preseden Khoi Phuc Password'; 
$mail->Body = "
<h1>Preseden</h1>
<h2>Khôi phục mật khẩu</h2>
<hr>
<p>Xin chào '".$user."'</p>
<p> Mật khẩu khôi phục tài khoản của bạn là : '".$password."'</p>
<p> Vui lòng không chia sẻ mật khẩu này cho bất kì ai ! </p>
<p style='font-weight:bold;'> Trân Trọng </p>

"
;
$mail->send();
// echo 'Message has been sent';
} catch (Exception $e) {
echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;}
header('location:'.$_SERVER['HTTP_REFERER']);
}
function password($passwordold,$id){
    $sql="SELECT taikhoan.password FROM taikhoan WHERE id=".$id;
    $result = pdo_query_one($sql);
    return $result;
}
function update_matkhau($password,$id ){
    $sql="UPDATE taikhoan SET password='".$password."' WHERE id=".$id;
    pdo_execute($sql);
}
?>