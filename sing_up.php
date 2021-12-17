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

<!DOCTYPE html>
<html>
   
   <head>
      <style>
         .error {color: #FF0000;}
      </style>
   </head>
   
   <body>
      <?php
         // define variables and set to empty values
         $nameErr = $emailErr = $passErr = $countryErr = $genderErr = "";
         $name = $email = $pass = $country = $gender = "";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
               $nameErr = "Name is required";
            }else {
               $name = test_input($_POST["name"]);
            }
            
            if (empty($_POST["email"])) {
               $emailErr = "Email is required";
            }else {
               $email = test_input($_POST["email"]);
               
               // check if e-mail address is well-formed
               if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "Invalid email format"; 
               }
            }
            
            if (empty($_POST["pass"])) {
               $pass = "";
            }
            else {
               $pass = test_input($_POST["pass"]);
            }
            
            if (empty($_POST["country"])) {
               $country = "";
            }else {
               $country = test_input($_POST["country"]);
            }
            
            if (empty($_POST["gender"])) {
               $genderErr = "Gender is required";
            }else {
               $gender = test_input($_POST["gender"]);
            }
         }
         
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
      ?>
     
      <h2>Register Form</h2>
     
      <p><span class = "error">* required field.</span></p>
     
      <form method = "post" action = "">
         <table>
            <tr>
               <td>Name:</td>
               <td><input type = "text" name = "name">
                  <span class = "error">* <?php echo $nameErr;?></span>
               </td>
            </tr>
           
            <tr>
               <td>E-mail: </td>
               <td><input type = "text" name = "email">
                  <span class = "error">* <?php echo $emailErr;?></span>
               </td>
            </tr>
             <tr>
               <td>password:</td>
               <td> <input type = "text" name = "password">
                  <span class = "error">*<?php echo $passErr;?></span>
               </td>
            </tr>
           
            <tr>
               <td>country:</td>
               <td> <input type = "text" name = "country">
                  <span class = "error">*<?php echo $countryErr;?></span>
               </td>
            </tr>
            
             
            
            <tr>
               <td>Gender:</td>
               <td>
                  <input type = "radio" name = "gender" value = "female">Female
                  <input type = "radio" name = "gender" value = "male">Male
                  <span class = "error">* <?php echo $genderErr;?></span>
               </td>
            </tr>
                
            <td>
               <input type = "submit" name = "submit" value = "Register"> 
            </td>
                
         </table>
            
      </form>
      
    <?php

    if(isset($_POST['submit'])){
        $name=$_POST['name'];

        $email=$_POST['email'];

        $pass=$_POST['password'];
        $country=$_POST['country'];
        $gender=$_POST['gender'];


        $statement = $db->prepare("INSERT INTO login (name,email,Password,country,gender) VALUES (?,?,?,?,?)");
        $statement->execute(array($name, $email, $pass, $country, $gender));

    }

    ?>
   </body>
</html>