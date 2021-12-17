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
    $total_cases=$_POST['total_cases'];
    $total_deaths=$_POST['total_deaths'];
    $total_recoverd=$_POST['total_recoverd'];
    $total_test=$_POST['total_test'];
    $population=$_POST['population'];
   


    $statement = $db->prepare("INSERT INTO total_count (country,total_cases,total_deaths,total_recoverd,total_test,population) VALUES (?,?,?,?,?,?)");
    $statement->execute(array($country,$total_cases,$total_deaths,$total_recoverd,$total_test,$population));

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
                    <input type="text" name="total_cases" placeholder="total_cases">
                    <br>
                    <input type="text" name="total_deaths" placeholder="total_deaths">
                    <br>
                    <input type="text" name="total_recoverd" placeholder="total_recoverd">
                    <br>
                    <input type="text" name="total_test" placeholder="total_test">
                    <br>
                    <input type="text" name="population" placeholder="population">
                    <br>
                   
                    <input type="submit" value="Submit" name="form_submit">

                </form>
            </div>
            <a href="user.php"> user account </a><br>
        </div>
    </section>

</body>


</html>