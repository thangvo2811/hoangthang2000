<?php 
$host ="localhost";
$dbName="store"; 
$userName="root";
$password="";

function execute($sql){
    //luu du lieu vao table
    //mo connect to db
    $con = mysqli_connect("localhost", "root", "", "store");
    //inset, update, delete
    mysqli_query($con, $sql);
    //close connect
    mysqli_close($con);
}

function executeSingleResult($sql){
    //CONNECT DB
    $connect = new mysqli("localhost", "root", "", "store");
    mysqli_set_charset($connect, "utf8");

    //create query
    
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result, 1);

    //close db
    mysqli_close($connect);

    return $row;
}


function executeResult($sql){
    //CONNECT DB
    $con = new mysqli("localhost", "root", "", "store");
    mysqli_set_charset($con, "utf8");

    //create query
    $data = [];
    $result = mysqli_query($con, $sql);
    if($result != null){
    while($row = mysqli_fetch_array($result, 1)){
        $data[] = $row;
    }
}
else{

}

    //close db
    mysqli_close($con);
    return $data;
}
