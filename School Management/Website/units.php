<?php include('header2.php'); session_start();?>

<main>

<section>
	
	<fieldset>
	<legend>Courses and Units</legend>
		<form action="" method="POST">
			<label>Unit Code</label>
			<input type="text" name='unit'>
			<input type="submit" value="Generate" name="generate">
		</form>
	
	</fieldset>
	<fieldset>
	<legend>Grading</legend>
	<table>
		<thead><th>Student ID</th><th>CAT</th><th>EXAM</th></thead>
		<tbody>
			<?php
				if (isset($_POST['generate'])) {
					$unit_code = $_POST['unit'];
					$qry = $connection->query("SELECT * FROM registered_units WHERE unit_code='$unit_code'");
					while ($row = $qry->fetch_array()) {
						?>
							<tr>
			
							<td><input type="text" name="student" value="<?php echo $row['Studentid'] ?>" readonly></td>
							<td><input type="number" name="cat" max="30" value="<?php echo $row['CAT'] ?>" maxlength="2"></td>
							<td><input type="number" name="exam" value="<?php echo $row['EXAM'] ?>" max="70"></td>

							</tr>
						<?php
					}
				}
			?>
			
			<tfoot ><td><input type="submit" name="submit" value="submit"></td></tfoot>
		</tbody>
		
		
		</table>
	
	
	
	</fieldset>
	
	</section>


</main>
  <?php
  include_once('footer.php')?>
