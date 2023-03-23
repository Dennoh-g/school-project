<?php include('header3.php'); session_start();?>
<main>
<section id="entryform">
	
	<form id="studform" action="register.php" method="POST">
		<fieldset><legend>Students Details</legend>
		
		<label for="studentid">Student ID</label>
			<input type="text" name="studentid" placeholder="Student ID" required>
			<label for="firstname">First Name</label>
			<input type="text" name="firstname" placeholder="First Name" required>
			<label for="secondname">Second Name</label>
			<input type="text" name="secondname" placeholder="Second Name" required>
			<label for="surname">Sur Name</label>
			<input type="text" name="surname" placeholder="Sur Name" required>
			<label for="telephone">Telephone</label>
			<input type="tel" name="telephone" placeholder="Telephone" required>
			
			<label for="email">Email</label>
			<input type="email" name="email" placeholder="Email" required>
			<label for="gender">Gender:</label>
			<select name="gender">
				<option>Male</option>
				<option>Female</option>
			</select>
			<label for="course">Course:</label>
			<select name="course">
				<?php
					$qry = $connection->query("SELECT * FROM courses");
					while ($row = $qry->fetch_array()) {
						?>
							<option value="<?php echo $row['Course_ID'] ?>"><?php echo $row['Course_ID'] ?></option>
						<?php
					}
				?>
			</select>
			<button type="submit" name="student" value="submit">submit</button>
		
		</fieldset>

	</form>
	
	
	<form id="lecform" action="register.php" method="POST">
		<fieldset><legend>Lecturer Details</legend>
		
		<label for="lecturerid">Lecturer ID</label>
			<input type="text" name="lecturerid" placeholder="Lecturer ID" required>
			<label for="firstname">First Name</label>
			<input type="text" name="firstname" placeholder="First Name" required>
			<label for="secondname">Second Name</label>
			<input type="text" name="secondname" placeholder="Second Name" required>
			<label for="surname">Sur Name</label>
			<input type="text" name="surname" placeholder="Sur Name" required>
			<label for="password">Password</label>
			<input type="password" name="password" placeholder="Password" required>
			<label for="telephone">Telephone</label>
			<input type="tel" name="telephone" placeholder="Telephone" required>
			<label for="email">Email</label>
			<input type="email" name="email" placeholder="Email" required>
			<label for="gender">Gender:</label>
			<select name="gender">
				<option>Male</option>
				<option>Female</option>
			</select>
			<label for="course">Course:</label>
			<select name="course">
				<?php
					$qry = $connection->query("SELECT * FROM courses");
					while ($row = $qry->fetch_array()) {
						?>
							<option value="<?php echo $row['Course_ID'] ?>"><?php echo $row['Course_ID'] ?></option>
						<?php
					}
				?>
			</select>
			<button type="submit" name="lecturer" value="submit">submit</button>
		
		</fieldset>

	</form>
	
	
	
	</section>





</main>
<?php include_once('footer.php')?>