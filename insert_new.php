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
    $new_cases=$_POST['new_cases'];
    $new_deaths=$_POST['new_deaths'];
    $new_recoverd =$_POST['new_recoverd'];
    $active_cases = $_POST['active_cases'];
    $serious = $_POST['serious'];


    $statement = $db->prepare("INSERT INTO new_count(country,new_cases,new_deaths,new_recoverd,active_cases,serious) VALUES (?,?,?,?,?,?)");
    $statement->execute(array($country,$new_cases,$new_deaths,$new_recoverd,$active_cases,$serious));

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
                    <input type="text" name="new_cases" placeholder="new_cases">
                    <br>
                    <input type="text" name="new_deaths" placeholder="new_deaths">
                    <br>
                     
                    <input type="text" name="new_recoverd" placeholder="new_recoverd">
                    <br>
                     
                    <input type="text" name="active_cases" placeholder="active_cases">
                    <br>
                    <input type="text" name="serious" placeholder="serious">
                    <br>
                    <input type="submit" value="Submit" name="form_submit">

                </form>
            </div>
            <a href="user.php"> user account </a><br>
        </div>
    </section>

</body>


</html>