  <?php
include "header.php";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "covid";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}





	if(isset($_POST['Submit']))
  {
		$country = $_POST['country'];
    $total_cases = $_POST['total_cases'];
    $total_deaths =$_POST['total_deaths'];
    $total_recoverd =$_POST['total_recoverd'];
    $total_test = $_POST['total_test'];
    $population = $_POST['population']; 

    
			
	}

$sql = " UPDATE `total_count` SET  total_cases = '$_POST[total_cases]', total_deaths ='$_POST[total_deaths]',total_recoverd ='$_POST[total_recoverd]', total_test = '$_POST[total_test]', population = '$_POST[population]' where country ='$_POST[country]' ";
    

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
     
}


mysqli_close($conn);
?> 





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
                    <input type="text" name="country" placeholder="country">
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