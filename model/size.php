<?php

function ressult_size(){
    $sql="SELECT * FROM size ORDER BY id DESC";
    $ressult = pdo_query($sql);
    return $ressult;
}
?>