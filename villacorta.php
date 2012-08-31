<?php
	//header('Content-Type: text/plain');
	
	try {
		$conn = new PDO('mysql:host=localhost;dbname=wends','root','s');
		
		$stmt = $conn->query("select * from students");
		
		$results = $stmt->fetchall(PDO::FETCH_ASSOC);
		echo $results[0]['lastname'];
	} catch (PDOException $e){
		echo $e->getMessage();
	}
?>
