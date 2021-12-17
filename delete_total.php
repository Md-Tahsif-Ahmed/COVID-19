<?php 

include "header.php";

$dbhost = 'localhost';
$dbname = 'covid';
$dbuser = 'root';
$dbpass = '';

try {
    $db = new PDO("mysql:host={$dbhost};dbname={$dbname}",$dbuser,$dbpass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch(PDOException $e) {
    echo "Connection error: ".$e->getMessage();
}
?>

<?php

if(isset($_POST['form_submit'])){
    $country=$_POST['country'];


    $statement = $db->prepare("DELETE FROM total_count WHERE country = ?");
    $statement->execute(array($country));

    header("location: admin_home.php");

}

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <title>Page Title</title>
</head>


<body>
    <section>
        <div class="container">
            <div class="login-form">
                <h1> login here </h1>
                <form action="" method="POST">
                    <input type="text" name="country" placeholder="country_name">
                    <br>
                    <input type="submit" value="Submit" name="form_submit">
             
                </form>
            </div>
			 <a href="user.php"> user account </a><br>
        </div>

</body>


</html>