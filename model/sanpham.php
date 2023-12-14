<?php
function  insert_sanpham($name, $target_file, $target_file1, $target_file2, $target_file3, $color, $color1, $color2, $mota, $dateup, $iddm)
{
    $sql = "INSERT INTO sanpham(name,img,img1,img2,img3,color,color1,color2,mota,dateup,iddm) 
    VALUE('$name','$target_file','$target_file1','$target_file2','$target_file3','$color','$color1','$color2','$mota','$dateup','$iddm')";
    pdo_execute($sql);
}
function getIdproduct()
{
    $sql = "SELECT sanpham.id FROM sanpham ORDER BY id DESC";
    $result = pdo_query_one($sql);

    return $result;
}
function insert_product_share($getproductIDlate, $id_size, $quantity, $Price)
{
    $sql = "INSERT INTO sanpham_shared(idsp,idsize,price,quantity)
   VALUE('$getproductIDlate','$id_size','$Price','$quantity')";

    pdo_execute($sql);
}
function select_sanpham($iddm)
{
    $sql = "SELECT * FROM sanpham WHERE 1";
    if ($iddm > 0) {
        $sql .= " AND iddm='" . $iddm . "'";
    }
    $sql .= " ORDER BY id desc";
    $list_sanpham_iddm = pdo_query($sql);
    return $list_sanpham_iddm;
}
function tong_hang_hoa()
{
    $sql = "SELECT sanpham.soluong FROM sanpham";
    $tong_hh = pdo_query($sql);
    return $tong_hh;
}
function tong_doanhthu()
{
    $sql = 'SELECT sanpham.price FROM sanpham';
    $tong_doanhthu = pdo_query($sql);
    return $tong_doanhthu;
}
function fill_dulieu_update_sp($id)
{
    $sql = "SELECT 
    p.id AS idsp, 
    p.iddm AS iddm, 
    p.name AS name, 
    p.img AS img,
    p.img1 AS img1,
    p.img2 AS img2,
    p.img3 AS img3, 
    p.mota AS mota, 
    p.color AS color,
    p.color1 AS color1,
    p.color2 AS color2,
    pv.quantity AS quantity, 
    pv.price AS price, 
    size.id AS id_size, 
    size.size AS size 
FROM sanpham p
INNER JOIN sanpham_shared pv ON pv.idsp = p.id 
INNER JOIN size ON size.id = pv.idsize 
WHERE p.id = $id
ORDER BY size.id ASC";
 
    $fill_dulieu =  pdo_query($sql);
    // var_dump($fill_dulieu);die();
    return $fill_dulieu;
}
function update_sanpham( $id, $name, $target_file, $target_file1, $target_file2, $target_file3, $color, $color1, $color2, $mota, $dateup, $iddm){
    $sql="UPDATE `sanpham` SET `name`='$name',`img`='$target_file',`img1`='$target_file1',`img2`='$target_file2',`img3`='$target_file3',`color`='$color',`color1`='$color1',`color2`='$color2',`mota`='$mota',`dateup`='$dateup',`iddm`='$iddm' WHERE id=".$id;
    pdo_execute($sql);
}
function update_product_share($id,$id_size,$quantity,$Price){
    $sql="UPDATE `sanpham_shared` SET `price`='$Price',`quantity`='$quantity' WHERE idsp=$id AND idsize=".$id_size;
    pdo_execute($sql);

}
function  delete_sp_by_id($id)
{
    $sql = 'DELETE FROM sanpham WHERE id=' . $id;
    pdo_execute($sql);
}
function  quan_hot()
{
    $sql = "SELECT sp.id AS id ,
    sp.name AS name ,
    sp.img AS img,
    ss.price AS price FROM sanpham sp INNER JOIN sanpham_shared ss ON sp.id=ss.idsp WHERE ss.idsize = 3 AND sp.name LIKE '%áo%' ORDER BY sp.id DESC";
    $result = pdo_query_one($sql);
    return $result;
}


function quan_hot_1()
{
    $sql = "SELECT sp.id AS id ,
    sp.name AS name ,
    sp.img AS img,
    ss.price AS price FROM sanpham sp INNER JOIN sanpham_shared ss ON sp.id=ss.idsp WHERE ss.idsize = 3 AND sp.name LIKE '%quần%' ORDER BY sp.id DESC";
    $result = pdo_query_one($sql);
    return $result;
}
function sanphamold()
{
    $sql = "SELECT sp.id AS id ,
    sp.name AS name ,
    sp.img AS img,
    ss.price AS price FROM sanpham sp INNER JOIN sanpham_shared ss ON sp.id=ss.idsp WHERE ss.idsize = 3 AND sp.name LIKE '%áo%' ORDER BY sp.id ASC";
    $result = pdo_query_one($sql);
    return $result;
}
function sp_trending()
{
    $sql = "SELECT sp.name AS name ,
     sp.id AS id ,
      sp.img AS img ,
       sp.img1 AS img1 ,
        ss.price AS price FROM sanpham sp INNER JOIN sanpham_shared ss ON sp.id=ss.idsp WHERE ss.idsize = 3 ORDER BY sp.id DESC LIMIT 12";
    $result = pdo_query($sql);
    return $result;
}


function search_danhmuc_kyws($iddm = 0, $kyws = '')
{
    $sql = " SELECT sp.id AS id , 
    sp.img AS img ,
    sp.img1 AS img1 ,
    sp.name AS name ,
    ss.price AS price  
       FROM sanpham sp INNER JOIN sanpham_shared ss ON sp.id = ss.idsp 
       WHERE ss.idsize = 3 ";
    if (!$kyws == '') {
        $sql .= " AND sp.name LIKE '%" . $kyws . "%'";
    }
    if ($iddm > 0) {
        $sql .= " AND sp.iddm='" . $iddm . "'";
    }
    $sql .= "  ORDER BY sp.id DESC LIMIT 20 ";
    $search = pdo_query($sql);
    return $search;
}
function deletesanpham_shared($id)
{
    $sql = "DELETE FROM sanpham_shared WHERE idsp=" . $id;
    pdo_execute($sql);
}
function sanpham_chitiet($id)
{
    $sql = "SELECT sp.name AS name,
  sp.id AS id,
  sp.mota AS mota ,
  sp.iddm AS iddm ,
  sp.img AS img,
  sp.img1 AS img1,
  sp.img2 AS img2,
  sp.img3 AS img3,
  sp.color AS color,
  sp.color1 AS color1,
  sp.color2 AS color2,
  ss.quantity AS quantity,
  ss.price AS price ,
  size.id AS id_size,
  size.size AS size
  FROM sanpham sp INNER JOIN 
  sanpham_shared ss ON sp.id = ss.idsp INNER JOIN 
  size ON size.id = ss.idsize 
  WHERE sp.id = $id ORDER BY size.id ASC";
    $result = pdo_query($sql);
    return $result;
}
function sanpham_lienquan($id, $iddm)
{
    $sql = "SELECT sp.id AS id ,
    sp.name AS name ,
     sp.img AS img ,
     sp.img1 AS img1,
     ss.price AS price
     FROM sanpham sp INNER JOIN sanpham_shared ss ON sp.id = ss.idsp WHERE ss.idsize = 3 AND sp.iddm=" . $iddm . " AND sp.id <> '" . $id . "' LIMIT 8";
    $sp_cung_loai = pdo_query($sql);
    return $sp_cung_loai;
}
function list_sanpham($start, $limit)
{
    $sql = "SELECT
    sp.id AS id ,
     sp.name AS name,
    sp.img AS img,
    sp.mota AS mota,
    sp.color AS color,
    sp.dateup AS date,
    sp.iddm AS iddm,
    ss.price AS price
    FROM sanpham sp INNER JOIN sanpham_shared ss ON sp.id = ss.idsp WHERE ss.idsize = 3 ORDER BY sp.id DESC LIMIT $start, $limit";
    $result = pdo_query($sql);
    return $result;
}
function all_row_in_sp()
{
    $sql = "SELECT COUNT(sanpham.id) FROM sanpham";
    $results = pdo_query($sql);
    return $results;
}
function countpr()
{
    $sql = "SELECT COUNT(sanpham.id)  FROM sanpham ";
    $results = pdo_query($sql);
    return $results;
}
function resultsp_gh($limit, $rand)
{
    $sql = "SELECT sp.id AS id ,
     sp.name AS name ,
      sp.img AS img ,
       sp.img1 AS img1 ,
       ss.price AS price FROM sanpham sp INNER JOIN sanpham_shared ss ON sp.id = ss.idsp WHERE ss.idsize = 3 ORDER BY id DESC LIMIT $limit,$rand";
    $results = pdo_query($sql);
    return $results;
}

function sp_giatot()
{

    $sql = "SELECT sp.name AS name ,
     sp.id AS id ,
      sp.img AS img ,
       sp.img1 AS img1 ,
        ss.price AS price FROM sanpham sp INNER JOIN sanpham_shared ss ON sp.id=ss.idsp WHERE ss.idsize = 3 ORDER BY sp.id ASC LIMIT 12";
    $result = pdo_query($sql);
    return $result;
}
function thongke_sanpham()
{
    $sql = "SELECT * FROM sanpham ORDER BY luotmua DESC LIMIT 5";
    $result = pdo_query($sql);
    return $result;
}
function thongke_top5()
{
    $sql = "SELECT sp.name AS name ,sp.img AS img , sp.luotmua AS luotmua , ss.price AS price FROM sanpham sp INNER JOIN sanpham_shared ss ON sp.id = ss.idsp WHERE ss.idsize = 3 ORDER BY luotmua DESC LIMIT 5";
    $result = pdo_query($sql);
    return $result;
}
function select_delete($id){
    $sql="SELECT * FROM sanpham WHERE iddm=".$id;
    $result = pdo_query($sql);
    return $result;
}
function deletesp_iddm($id){
    $sql="DELETE FROM sanpham WHERE iddm=".$id;
    pdo_execute($sql);
}
?>
