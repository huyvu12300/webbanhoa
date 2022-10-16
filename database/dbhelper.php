<?php
require_once('config.php');
// SQL: insert, update, delete
function execute($sql)
{
    $conn = mysqli_connect(HOST, DATABASE, USERNAME, PASSWORD);
    mysqli_set_charset($conn,'utf8');

    mysqli_query($conn, $sql);
    mysqli_close($conn);
}
//sql : select -> lay du lieu
function executeResult($sql){
    $data = [];
    //open connection
    $conn = mysqli_connect(HOST, DATABASE, USERNAME, PASSWORD);
    mysqli_set_charset($conn, 'utf8'); 

    //query
    $resultset = mysqli_query($conn, $sql);
    while(($row = mysqli_fetch_array($resultset, 1))!= null){
            $data = $row;
    }
    mysqli_close($conn);
    return $data;
}