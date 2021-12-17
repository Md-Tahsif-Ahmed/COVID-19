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

			<br><br><br>
			<?php
			$statement = $db->prepare("SELECT * FROM new_count ORDER BY country DESC");
			$statement->execute();
			$result = $statement->fetchAll(PDO::FETCH_ASSOC);
			?>
			<div class="row">
				<caption class="text-center"><strong>New statistics of Covid 19 </strong></caption>
				<br><br>
				<table class="table">
					<thead>
						<th>country</th>
						<th>new_cases</th>
						<th>new_deaths</th>
						<th>new_recoverd</th>
						<th>active_cases</th>
						<th>serious</th>
						 
					</thead>
					<tbody>
						<?php
							foreach($result as $key => $row){
						?>
						<tr>
							
							<td><?php echo $row['country']; ?></td>
							<td><?php echo $row['new_cases']; ?></td>
							<td><?php echo $row['new_deaths']; ?></td>
							<td><?php echo $row['new_recoverd']; ?></td>
							<td><?php echo $row['active_cases']; ?></td>
							<td><?php echo $row['serious']; ?></td>
							 
						
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</section>

</body>


</html> 