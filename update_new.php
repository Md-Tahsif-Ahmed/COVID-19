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
    $new_cases = $_POST['new_cases'];
    $new_deaths =$_POST['new_deaths'];
    $new_recoverd =$_POST['new_recoverd'];
    $active_cases = $_POST['active_cases'];
    $serious = $_POST['serious'];
    
			
	
}
$sql = " UPDATE `new_count` SET  new_cases = '$_POST[new_cases]', new_deaths ='$_POST[new_deaths]', new_recoverd ='$_POST[new_recoverd]',active_cases ='$_POST[active_cases]', serious = '$_POST[serious]' where country ='$_POST[country]' ";
    
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