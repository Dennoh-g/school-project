<?php
	
	include 'database.php';

	if (isset($_POST['student'])) {
		$studentid = htmlentities($_POST['studentid']);
		$fname = htmlentities($_POST['firstname']);
		$sname = htmlentities($_POST['secondname']);
		$surname = htmlentities($_POST['surname']);
		$tel = htmlentities($_POST['telephone']);
		$email = htmlentities($_POST['email']);
		$gender = htmlentities($_POST['gender']);
		$course = htmlentities($_POST['course']);
		
		$data = "Studentid='$studentid'";
		$data .= ", First_Name='$fname'";
		$data .= ", Second_Name='$sname'";
		$data .= ", Sur_Name='$surname'";
		$data .= ", Phone='$tel'";
		$data .= ", Email='$email'";
		$data .= ", gender='$gender'";
		$data .= ", Course_ID='$course'";
		
		$qry = $connection->query("SELECT * FROM students WHERE Studentid='$studentid' OR Phone='$tel' OR Email='$email'")->num_rows;
		if ($qry > 0) {
			?>
				<script>alert("Student already registered")</script>
			<?php
		} else {
			$save = $connection->query("INSERT INTO students SET ".$data);
			if ($save) {
				?>
					<script>alert("Student registered successfully")</script>
					<script>location.href='registrations.php'</script>
				<?php
			}
		}
	}
	
	if (isset($_POST['lecturer'])) {
		$lecturerid = htmlentities($_POST['lecturerid']);
		$fname = htmlentities($_POST['firstname']);
		$sname = htmlentities($_POST['secondname']);
		$surname = htmlentities($_POST['surname']);
		$tel = htmlentities($_POST['telephone']);
		$password = htmlentities($_POST['password']);
		$email = htmlentities($_POST['email']);
		$gender = htmlentities($_POST['gender']);
		$course = htmlentities($_POST['course']);
		
		$data = "lecturerid='$lecturerid'";
		$data .= ", First_Name='$fname'";
		$data .= ", Second_Name='$sname'";
		$data .= ", Sur_Name='$surname'";
		$data .= ", Phone='$tel'";
		$data .= ", Password='$password'";
		$data .= ", Email='$email'";
		$data .= ", gender='$gender'";
		$data .= ", Course_ID='$course'";
		
		$qry = $connection->query("SELECT * FROM lecturer WHERE lecturerid='$lecturerid' OR Phone='$tel' OR Email='$email'")->num_rows;
		if ($qry > 0) {
			?>
				<script>alert("Lecturer already registered")</script>
			<?php
		} else {
			$save = $connection->query("INSERT INTO lecturer SET ".$data);
			if ($save) {
				?>
					<script>alert("Lecturer registered successfully")</script>
					<script>location.href='registrations.php'</script>
				<?php
			}
		}
	}