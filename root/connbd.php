<?php
try{
    $conn = new PDO('mysql:host=instancia1.cn2e25835xxl.us-east-2.rds.amazonaws.com;dbname=controlescolarAL','root','admin123');

}catch (PDOException $ex) {
       echo $ex->getMessage();
       exit;
    }
?>