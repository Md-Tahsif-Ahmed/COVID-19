
 <?php

 include "header.php";


$conn = new mysqli('localhost', 'root', '', 'covid') or die(mysqli_error());
if(isset($_POST["submit"])){
 $sql = "SELECT * FROM login WHERE name = '".$_POST["name"]. "' AND password = '" .$_POST["pass"]."'";
 $query = mysqli_query($conn, $sql);
 $res = mysqli_fetch_assoc($query);
 if($res)
 {
 if(!empty($_POST["remember"]))
 {
 setcookie ("name", $_POST["name"], time() + (10 * 365 * 24 * 60 * 60));
 setcookie ("password", $_POST["pass"], time() + (10 * 365 * 24 * 60 * 60));
 }
 else
 {
 if(isset($_COOKIE["name"]))
 {
 setcookie ("name", "");
 }
 if(isset($_COOKIE["password"]))
 {
 setcookie ("pass", "");
 }
 }
             session_start();
            $_SESSION['name'] = $res[0];
            $_SESSION['type'] = "user";
 header("Location:main.php");
 }
 else
 {
 $msg = "Invalid Username or Password";
 }
}
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<title>SoftAOX | Login</title>
</head>
<body>
    <section>
        <div class="container">
            <div class="login-form">
<form action="" method="post">
<label>Username</label>
<input type="text" name="name" value="<?php if(isset($_COOKIE["name"])) {echo $_COOKIE["name"];} ?>"/><br/><br/>
<label>Password</label>
<input type="password" name="pass" value="<?php if(isset($_COOKIE["password"])) {echo $_COOKIE["password"];}?>"/><br/><br/>
<input type="checkbox" name="remember" <?php if(isset($_COOKIE["name"])) { ?> checked <?php }?>/>
<label>Remember me</label><br/><br/>
<input type="submit" name="submit" value="Login">
                    <a href="change_pass.php">change your password? </a><br>
             
                    <a href="sing_up.php"> Don't have an account? </a> 

<p><?php if(isset($msg)) {echo $msg;} ?></p>

</form>
</div>
</div>
</section>
</body>
</html>
 
                   