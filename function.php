<?php
function do_login($username, $password){
  //cek konndisi bila username dan password Salah
  if($username != "admin" || $password != "admin"){
    header("location:index.php?error=wrong");
  //cek kondisi bila username dan password benar
  }
  if($username == "admin" && $_POST["password"] == "admin"){
    $_SESSION["user"] = $username;
    $_SESSION["pass"]= $password;

    header ("location:beranda.php");
  }
}
function check_login(){
  //cek kondisi login session
  if(!isset($_SESSION["user"])){
    header("location:index.php");
  }
}
?>
