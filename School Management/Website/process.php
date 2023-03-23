<?php

	include 'database.php';
	
if ($_POST['save_unit']) {
	$student_id = $_POST['user_id'];
	$unit = $_POST['unit'];
	
	foreach ($unit as $key => $value) {
		if (!empty($value)) {
				$qry = $connection->query("SELECT * FROM registered_units WHERE Studentid='$student_id' AND unit_code='$value'")->num_rows;
		
		if ($qry > 0) {
				?>
		<script>alert('Unit already registered')</script>
<?php
		} else {
				$save[] = $connection->query("INSERT INTO registered_units VALUES('$student_id', '$value', '0', '0', '0')");
		if ($save) {
				?>
		<script>alert('Unit registered successfully')</script>
		<script>location.href='course.php'</script>
<?php
		}
	}
		}
	
}
}