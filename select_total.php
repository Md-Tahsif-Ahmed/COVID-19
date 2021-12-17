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
			$statement = $db->prepare("SELECT * FROM total_count ORDER BY country DESC");
			$statement->execute();
			$result = $statement->fetchAll(PDO::FETCH_ASSOC);
			?>
			<div class="row">
				<caption class="text-center"><strong>Total statistics of Covid 19 </strong></caption>
				<br><br>
				<table class="table">
					<thead>
						<th>country</th>
						<th>total_cases</th>
						<th>total_deaths</th>
						<th>total_recoverd</th>
						<th>total_test</th>
						<th>population</th>
						 
					</thead>
					<tbody>
						<?php
							foreach($result as $key => $row){
						?>
						<tr>
							
							<td><?php echo $row['country']; ?></td>
							<td><?php echo $row['total_cases']; ?></td>
							<td><?php echo $row['total_deaths']; ?></td>
							<td><?php echo $row['total_recoverd']; ?></td>
							<td><?php echo $row['total_test']; ?></td>
							<td><?php echo $row['population']; ?></td>
						
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</section>

</body>


</html> 