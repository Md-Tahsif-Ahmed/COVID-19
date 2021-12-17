<?php session_start();?>

<html>
<head>
    <title>Change Password</title>
</head>

<body>
 
<?php 

include_once('db_con1.php');

if(isset($_POST['Submit']))
{
$email = $_POST['email'];
$oldpwd = $_POST['oldpwd'];
$npwd = $_POST['npwd'];
$cpwd = $_POST['cpwd'];





$query =mysqli_query($conn,"SELECT name,Password FROM login WHERE email = '$email' AND Password = '$oldpwd' ");

 

$num = mysqli_fetch_array($query);
if($num>0)
{
$con =mysqli_query($conn,"UPDATE login SET Password=$npwd WHERE email = '$email' ");
$_SESSION['msg1']="Password change success";
}
else
{
    $_SESSION['msg2']="Password not match";
}

}
 
?>
<p><?php echo $_SESSION['msg1'];?><?php echo $_SESSION['msg1']="";?></p>
<fieldset>
        <legend>Change Password</legend>
        <form name= "chnpwd" action="" method="post" onSubmit="return Valid();">
            username<br>
            <input type="text" name="email" id="email"> <br>
            Current Password <br>
            <input type="Password" name="oldpwd" id="oldpwd"> <br>
            New Password <br>
            <input type="Password" name="npwd" id="npwd"> <br> 
            Retype New Password <br>
            <input type="Password" name="cpwd" id="cpwd"> <br> 
            <br>
            <input type="submit" name="Submit" value="ChangePassword">

            
     </form>
    </fieldset>
</body>
</html>