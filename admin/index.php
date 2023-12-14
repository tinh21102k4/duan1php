<?php
session_start();
if(isset($_SESSION['user']))
{
if( $_SESSION['user']['role'] === 0 && isset($_SESSION['user'])){
    header('location:http://localhost/dan1/index.php');
}
}
include('../model/pdo.php');
include('../model/danhmuc.php');
include('../model/sanpham.php');
include('../model/taikhoan.php');
include('../model/hoadon.php');
include('../model/binhluan.php');
include('../model/size.php');
include('./header.php');
if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch($act){
        case 'adddm':
            if(isset($_POST['themmoi'])){
                $name = $_POST['name'];
                if(empty($name)){
                    $_SESSION['err']['name']='Bạn chưa nhập tên danh mục !';
                }else{
                    $resultdm = select_danhmuc();
                    foreach($resultdm as $check){
                        if($check['name'] == $name){
                            $_SESSION['err']['name']='Tên danh mục đã tồn tại !';
                        }
                    }
                }
              if(empty($_SESSION['err'])){
                insert_danhmuc($name);
                $notify = 'Bạn Thêm Thành Công Danh Mục :'.$name;
              }
            }
            include('./danhmuc/add.php');
            break;
        case 'listdm':
            $list_dm = select_danhmuc();
            include('./danhmuc/list.php');
            break;
            case 'deletedm':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $select= select_delete($id);
                    foreach($select as $deltete){
                        deletesanpham_shared($deltete['id']);
                        
                    }
                    
                    deletesp_iddm($id);
                
                    delete_danhmuc_byid($id);
                }
                $list_dm = select_danhmuc();
                include('./danhmuc/list.php');
                break;
        case 'suadm':
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $one_dm =select_one_dm_by_id($id);
            }
            include('./danhmuc/update.php');
            break;
        case 'updatedm':
            if(isset($_POST['update'])){
                $id = $_POST['id'];
                $name = $_POST['name'];
                update_dm_by_id($id,$name);
                $notify ='Bạn Update Thành Công Danh Mục :'.$name;
            }
            $list_dm = select_danhmuc();
            include('./danhmuc/list.php');
            break;
            case 'addsp':
                unset($_SESSION['err']);
                $list_dm = select_danhmuc();
                if (isset($_POST['submit'])) {
                    $name = $_POST['name'];
    
                    $color = $_POST['color'];
                    $color1 = $_POST['color1'];
                    $color2 = $_POST['color2'];
    
                    $quantityS = $_POST['quantityS'];
                    $quantityM = $_POST['quantityM'];
                    $quantityL = $_POST['quantityL'];
                    $quantityXL = $_POST['quantityXL'];
    
                    $PriceS = $_POST['PriceS'];
                    $PriceM = $_POST['PriceM'];
                    $PriceL = $_POST['PriceL'];
                    $PriceXL = $_POST['PriceXL'];
    
                    $mota = $_POST['mota'];
    
                    $iddm = $_POST['iddm'];
    
                    $dateup = date('Y-m-d');
    
    
    
                    $target_dir = '../upload/';
                    $rand = rand(1, 100);
                    $file_img = $_FILES['file_img']['name'];
                    $target_file = $target_dir . '_' . $rand . '_' . $file_img;
                    move_uploaded_file($_FILES['file_img']['tmp_name'], $target_file);
    
                    $file_img1 = $_FILES['file_img1']['name'];
                    $target_file1 = $target_dir . '_' . $rand . '_' . $file_img1;
                    move_uploaded_file($_FILES['file_img1']['tmp_name'], $target_file1);
    
                    $file_img2 = $_FILES['file_img2']['name'];
                    $target_file2 = $target_dir . '_' . $rand . '_' . $file_img2;
                    move_uploaded_file($_FILES['file_img2']['tmp_name'], $target_file2);
    
    
                    $file_img3 = $_FILES['file_img3']['name'];
                    $target_file3 = $target_dir . '_' . $rand . '_' . $file_img3;
                    move_uploaded_file($_FILES['file_img3']['tmp_name'], $target_file3);
                    $dateup = date('Y-m-d');
                    $iddm = $_POST['iddm'];
                    if (empty($name)) {
                        $_SESSION['err']['name'] = 'Bạn chưa nhập tên sản phẩm';
                    }
                    
                    if (empty($color)) {
                        $_SESSION['err']['color'] = 'Bạn chưa nhập color sản phẩm';
                    }
                    if (empty($quantityS)) {
                        $_SESSION['err']['quantity'] = 'Bạn chưa nhập so luong sản phẩm';
                    }
                    if (empty($PriceS)) {
                        $_SESSION['err']['price'] = 'Bạn chưa nhập price sản phẩm';
                    }
                    
                    if (empty($mota)) {
                        $_SESSION['err']['mota'] = 'Bạn chưa nhập mô tả sản phẩm';
                    }
                    if (empty($_SESSION['err'])) {
                        insert_sanpham($name, $target_file, $target_file1, $target_file2, $target_file3, $color, $color1, $color2, $mota, $dateup, $iddm);
    
                        $getproductIDlate = getIdproduct();
                        $id_sizeS = 3;
                        $id_sizeM = 4;
                        $id_sizeL = 5;
                        $id_sizeXL = 6;
                        if ($getproductIDlate) {
                            $getproductIDlate = $getproductIDlate['id'];
                            insert_product_share($getproductIDlate, $id_sizeS, $quantityS, $PriceS);
                            insert_product_share($getproductIDlate, $id_sizeM, $quantityM, $PriceM);
                            insert_product_share($getproductIDlate, $id_sizeL, $quantityL, $PriceL);
                            insert_product_share($getproductIDlate, $id_sizeXL, $quantityXL, $PriceXL);
                    }
                    $notify = "Thêm Thành Công Sản Phẩm : " . $name;
                }
            }
            include('./sanpham/addsp.php');
            break;
            case 'listsize':
                $result_size = ressult_size();
                include('./size/list.php');
                break;
            case 'listsp':
                $limit = 4;
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                } else {
                    $page = 1;
                }
                $start = ($page - 1) * $limit;
                $result = list_sanpham($start, $limit);
    
                include('./sanpham/listsp.php');
                break;
            case 'suasp':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $fill_sl = fill_dulieu_update_sp($id);
                    //    var_dump($fill_sl);die();
                }
    
                include('./sanpham/updatesp.php');
                break;
                case 'updatesp':
                    $list_dm = select_danhmuc();
                    if (isset($_POST['update'])) {
                        $name = $_POST['name'];
        
                        $color = $_POST['color'];
                        $color1 = $_POST['color1'];
                        $color2 = $_POST['color2'];
        
                        $quantityS = $_POST['quantityS'];
                        $quantityM = $_POST['quantityM'];
                        $quantityL = $_POST['quantityL'];
                        $quantityXL = $_POST['quantityXL'];
        
                        $PriceS = $_POST['PriceS'];
                        $PriceM = $_POST['PriceM'];
                        $PriceL = $_POST['PriceL'];
                        $PriceXL = $_POST['PriceXL'];
        
                        $mota = $_POST['mota'];
        
                        $iddm = $_POST['iddm'];
        
                        $dateup = date('Y-m-d');
        
                        $id = $_POST['id'];
                        $target_dir = '../upload/';
                        $rand = rand(1, 100);
                        $target_file = $_POST['file_img'];
                        $target_file1 = $_POST['file_img1'];
                        $target_file2 = $_POST['file_img2'];
                        $target_file3 = $_POST['file_img3'];
                        // $sizeimg = $_FILES['file_img']['size'];
        
                        // $sizeimg1 = $_FILES['file_img1']['size'];
                        // $sizeimg2 = $_FILES['file_img2']['size'];
                        // $sizeimg3 = $_FILES['file_img3']['size'];
                       if($_FILES['file_img']['size'] > 0){
                        $file_img = $_FILES['file_img']['name'];
                        $target_file = $target_dir . '_' . $rand . '_' . $file_img;
                        move_uploaded_file($_FILES['file_img']['tmp_name'], $target_file);
                        }
        
                        if($_FILES['file_img1']['size'] > 0){
                        $file_img1 = $_FILES['file_img1']['name'];
                        $target_file1 = $target_dir . '_' . $rand . '_' . $file_img1;
                        move_uploaded_file($_FILES['file_img1']['tmp_name'], $target_file1);
                        }
        
                        if($_FILES['file_img2']['size'] > 0){
                        $file_img2 = $_FILES['file_img2']['name'];
                        $target_file2 = $target_dir . '_' . $rand . '_' . $file_img2;
                        move_uploaded_file($_FILES['file_img2']['tmp_name'], $target_file2);
        
                        }
                        if($_FILES['file_img3']['size'] > 0){
                        $file_img3 = $_FILES['file_img3']['name'];
                        $target_file3 = $target_dir . '_' . $rand . '_' . $file_img3;
                        move_uploaded_file($_FILES['file_img3']['tmp_name'], $target_file3);
                        }
        
                        $dateup = date('Y-m-d');
                        $iddm = $_POST['iddm'];
                        if (empty($name)) {
                            $_SESSION['err']['name'] = 'Bạn chưa nhập tên sản phẩm';
                        }
        
        
                        if (empty($mota)) {
                            $_SESSION['err']['mota'] = 'Bạn chưa nhập mô tả sản phẩm';
                        }
        
                        if (empty($_SESSION['err'])) {
        // update_sanpham($file_img, $file_img1, $file_img2, $file_img3, $id, $name, $target_file, $target_file1, $target_file2, $target_file3, $color, $color1, $color2, $mota, $dateup, $iddm);
                             update_sanpham( $id, $name, $target_file, $target_file1, $target_file2, $target_file3, $color, $color1, $color2, $mota, $dateup, $iddm);
                             // var_dump( update_sanpham($id,$name,$target_file,$target_file1,$target_file2,$target_file3,$color,$color1,$color2,$mota,$dateup,$iddm));die();
        
                            $id_sizeS = 3;
                            $id_sizeM = 4;
                            $id_sizeL = 5;
                            $id_sizeXL = 6;
        
        
                            update_product_share($id, $id_sizeS, $quantityS, $PriceS);
                            update_product_share($id, $id_sizeM, $quantityM, $PriceM);
                            update_product_share($id, $id_sizeL, $quantityL, $PriceL);
                            update_product_share($id, $id_sizeXL, $quantityXL, $PriceXL);
        
                            $notify = "Thêm Thành Công Sản Phẩm : " . $name;
                        }
                    }
        
                    $limit = 4;
                    if (isset($_GET['page'])) {
                        $page = $_GET['page'];
                    } else {
                        $page = 1;
                    }
                    $start = ($page - 1) * $limit;
                    $result = list_sanpham($start, $limit);
                    include('./sanpham/listsp.php');
                    break;
            case 'deletesp':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    deletesanpham_shared($id);
                    delete_sp_by_id($id);
    
                    // $list_sanpham = select_sanpham($iddm);
                    $limit = 4;
                    if (isset($_GET['page'])) {
                        $page = $_GET['page'];
                    } else {
                        $page = 1;
                    }
                    $start = ($page - 1) * $limit;
                    $result = list_sanpham($start, $limit);
                    include('./sanpham/listsp.php');
                    break;
                }
                include('./sanpham/listsp.php');
                break;
    case 'listbl':
    //   $listbl_admin = list_binhluan_admin();
        include('./binhluan/listbl.php');
        break;
        case 'deletebl':
            if(isset($_GET['id'])){
                $id = $_GET['id'];
               delete_binhluan_vc($id);
            
            }
            $limit = 10;
            if(isset($_GET['page'])){
              $page = $_GET['page'];
            }else{
              $page = 1;
            }
            $start = ($page - 1) * $limit;
               $listbinhluan = list_binhluan_admin($start,$limit);
            include('./binhluan/listbl.php');
            break;
    case 'listtk':
        $resulttk = select_taikhoan();
        include('./taikhoan/listtk.php');
        break;
        case 'chitiethoadon':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $result_chitiet_hoadon = chitiethoadon($id);
            }
            include('./quanlygiohang/chitiet.php');
            break;
    // case 'suahoadon':
   
        
    //     if(isset($_POST['submit'])){
    //         $id = $_POST['id'];
    //         $trangthai =$_POST['trangthai'];
    //         update_trangthai($id,$trangthai);
    //         $thongbao ='update thành công !';
    //     }
       
    //     include('./quanlygiohang/update.php');
    //     break;
    case 'thongke':
        $result_thongke_top5 = thongke_top5();
        $thongke_dt = thongke_doanhthu_vip();
        $result_thongke = thongke_dm_sp();
        include('./thongke/listthongke.php');
        break;
    case 'deletetk':
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            delete_my_cart($id);
            delete_binhluan_vc($id);
            deletet_tk($id);
            
        }
        $resulttk = select_taikhoan();
        include('./taikhoan/listtk.php');
        break;
        case 'listgh':
            if(isset($_POST['loc'])){
             $trangthai = $_POST['trangthai'];
             $selectgiohang = select_all_donhang($trangthai);
             // var_dump($selectgiohang);die();
            }else{
             $selectgiohang = select_dh();
            }
             
 
             if (isset($_POST['capnhap'])) {
                 $id = $_POST['id'];
                 $trangthai = $_POST['trangthai'];
                 update_trangthai($id, $trangthai);
             }
             if(isset($_POST['loc'])){
                 $trangthai = $_POST['trangthai'];
                 $selectgiohang = select_all_donhang($trangthai);
                 // var_dump($selectgiohang);die();
                }else{
                 $selectgiohang = select_dh();
                }
             include('./quanlygiohang/danhmucgiohang.php');
             break;
        default:
            include('home.php');


    }

}else{
    include('./home.php');
}

include('./footer.php');

?>