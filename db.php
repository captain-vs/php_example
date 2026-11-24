<?php
$servername='localhost';
$username='root';
$password='root';
$dbname='product_management';


$conn=new mysqli($servername,$username,$password,$dbname);

if(!$conn){
    echo "Not Connected...";
}

?>