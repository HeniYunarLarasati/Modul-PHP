<?php
session_start();
if(isset($_SESSION["user"])){
  header("location:beranda.php");
}
include ("function.php");
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>LOGIN</title>
   </head>
   <body>
     <?php
     IF(isset($_GET["error"])){
       if($_GET["error"] == "wrong"){
       echo '<h3>Username dan Password salah!</h3>';
     }
     }
     if(isset($_GET["notif"])){
       if($_GET["notif"] == "logout"){
         echo '<h3>Berhasil Logout</h3>';
       }
     }
     if(isset($_POST['submit'])){
       echo do_login($_POST['Username'], $_POST['password']);
     } ?>
     <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
       Username: <input type="text" name="username"><br>
       Password: <input type="password" name="password"><br>
       <input type="submit" name="submit" value="SIGN IN">
     </form>
   </body>
 </html>
