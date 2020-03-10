<?php


require './includes/connection.inc.php';
//$conn = mysqli_connect("localhost","root","","test2");

function getData(){
    $sql = "SELECT * FROM product";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        return $result;
    }
}
?>