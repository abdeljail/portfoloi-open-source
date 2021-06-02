<?php
require_once "include/checkDir.php";
if(!isset($_POST[data_0]) || !isset($_POST[data_1])){
    header("Location:http://localhost/tododev/php/logOut.php");
    exit;
}
if(empty($_POST[data_0]) || empty($_POST[data_1])){
    header("Location:http://localhost/tododev/php/logOut.php");
    exit;
}
require_once "include/connect.php";
function login($arr){
    global $conn;
    $stmt   =   $conn->prepare("SELECT * FROM admin WHERE  $arr[0] = '$arr[1]' ;");
    $stmt->execute();
    $c      =   $stmt->rowCount();
    if($c == 0) return "not found";
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if(password_verify($arr[2] . "todolist" , $row["password"])){
        session_start();
        $_SESSION["name"]   = $row["name"];
        $_SESSION["email"]  = $row["email"] ;
        $_SESSION["id"]     = $row["id"];
        return "found";
    }
    return "not found";
}
try{
    $emailPhone = "email";
    $data_0 = filter_var($_POST["data_0"], FILTER_SANITIZE_STRING);
    $data_1 = filter_var($_POST["data_1"], FILTER_SANITIZE_STRING);
    if(is_numeric($data_0)) { $emailPhone = "phone"; }
    if($emailPhone === "email"){
        if (!filter_var($data_0, FILTER_VALIDATE_EMAIL) || strlen($data_1) <= 10) {
            header("Location:http://localhost/tododev/");
            exit;
        }
    }else{
        if(strlen($data_0) != 9 || strlen($data_1) <= 10){
            header("Location:http://localhost/tododev/");
            exit;
        } 
    }
    echo json_encode(array("message"=>array(login(array($emailPhone,$data_0,$data_1)))));
}catch(PDOExcepyion $e){
    echo json_encode(array("message"=>$e->getMessage()));
}
