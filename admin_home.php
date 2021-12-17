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


<body>
	<section>
		<div class="container mt-5">
			<div class="col-md-8 offset-md-6">
				<a href="insert_new.php" class="btn btn-success">Insert_new </a>
				<a href="update_new.php" class="btn btn-success">Update_new </a>
				<a href="delete_new.php" class="btn btn-danger">Delete_new </a>
				<a href="insert_total.php" class="btn btn-success">insert_total</a>
				<a href="update_total.php" class="btn btn-success">Upadate total </a>
				<a href="delete_total.php" class="btn btn-danger">Delete total</a>
			</div>
 
		</div>
	</section>

</body>


</html> 