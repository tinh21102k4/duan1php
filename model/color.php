<?php
function insert_color($name){
    $sql="INSERT INTO color(color) VALUE('$name')";
    pdo_execute($sql);
}



?>