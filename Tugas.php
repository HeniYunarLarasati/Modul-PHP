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
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Javascript</title>

  </head>
  <body>

    <div class="container">
    <div class="card col-sm-6">
      <div class="card-header bg-secondary text-white text-center">
        <h4>Login Form</h4>
      </div>
      <div class="card-body" id="login-body">
        Username
        <div class="col-sm-12">
          <input type="text" id="username" class="form-control">
        </div>
        Password
        <div class="col-sm-12">
          <input type="password" id="password" class="form-control">
        </div>
      </div>
      <div class="card-footer">
        <button type="button" class="btn btn-primary btn-block" onclick="Login();">
        Login
        </button>
      </div>
      </div>
      </div>
  </body>
</html>
