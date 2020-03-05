<?php

$conn = mysqli_connect("localhost","root","","test");

function getData(){
    $sql = "SELECT * FROM product";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        return $result;
    }
}
?>