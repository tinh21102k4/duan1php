<?php
function insert_danhmuc($name){
    $sql ="INSERT INTO danhmuc(name) VALUE ('$name')";
    pdo_execute($sql);
}
function select_danhmuc(){
    $sql ='SELECT * FROM danhmuc';
    $danhmuc = pdo_query($sql);
    return $danhmuc;
}
function delete_danhmuc_byid($id){
    $sql ='DELETE FROM danhmuc WHERE id='.$id;
    pdo_execute($sql);

}
function select_one_dm_by_id($id){
    $sql ='SELECT *FROM danhmuc WHERE id='.$id;
    $one_dm = pdo_query_one($sql);
    return $one_dm;
}
function update_dm_by_id($id,$name){
    $sql ="UPDATE danhmuc SET name = '".$name."' WHERE id=".$id;
    pdo_execute($sql);
}
function tong_danhmuc(){
    $sql ='SELECT count(danhmuc.id) FROM danhmuc';
    $danhmuc_tong = pdo_query($sql);
    return $danhmuc_tong;
}
function thongke_dm_sp(){
    $sql="SELECT dm.name AS namedm ,
    count(sp.id) AS soluong FROM danhmuc dm INNER JOIN sanpham sp ON dm.id = sp.iddm GROUP BY dm.id ORDER BY dm.id DESC";
      $result = pdo_query($sql);
      return $result;
 }
 function thongke_doanhthu(){
     $sql="SELECT sp.name AS name ,
     sp.luotmua AS luotmua ,
     ss.price AS price FROM sanpham sp INNER JOIN sanpham_shared ss ON ss.idsp = sp.id WHERE ss.idsize = 3 GROUP BY ss.idsp ORDER BY sp.luotmua ASC LIMIT 6";
     $result = pdo_query($sql);
     return $result;
 }
?>