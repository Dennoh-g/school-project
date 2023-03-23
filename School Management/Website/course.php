<?php include('header.php'); session_start();?>
<?php
$student_id = $_SESSION[ 'Studentid' ];
if ( strlen( $_SESSION[ 'Studentid' ] ) == 0 ) {
  header( 'Location:../index.php' );
}
?>
<main>
  <section id="contain" >
    <?php
    if ( isset( $_SESSION[ 'Studentid' ] ) ) {
      echo $_SESSION[ 'Studentid' ];
    } else {
      echo "Not Set";
    }
    ?>
    <section id="units">
      <table>
        <thead>
          <tr>
            <th>Unit Code</th>
            <th>Unit Name</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $course_id = $connection->query( "SELECT * FROM students WHERE Studentid='$student_id'" )->fetch_array()[ 'Course_ID' ];
          $qry = $connection->query( "SELECT * FROM units WHERE Course_ID='$course_id'" );
          while ( $row = $qry->fetch_array() ) {
            ?>
          <tr>
            <td><?php echo $row['unit_code'] ?></td>
            <td><?php echo $row['unit_name'] ?></td>
          </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </section>
    <aside id="regunits">
      <form action="process.php" method="POST">
        <fieldset>
          <legend>Please Register Your Units</legend>
          <input type="hidden" name="user_id" value="<?php echo $_SESSION['Studentid']; ?>">
          <input type="text" name="unit[]" placeholder="unit code">
          <input type="text" name="unit[]" placeholder="unit code">
          <input type="text" name="unit[]" placeholder="unit code">
          <input type="text" name="unit[]" placeholder="unit code">
          <button type="submit" name="save_unit" value="Register">Register</button>
        </fieldset>
      </form>
    </aside >
	  <div id="units">
	  
	  
	  
    <table>
		<caption>Registed Units</caption>
      <thead>
        <tr>
          <th>Unit Code</th>
          <th>Unit Name</th>
        </tr>
		  <?php
		  $qry = $connection->query("SELECT registered_units.*, units.unit_name FROM registered_units INNER JOIN units ON units.unit_code=registered_units.unit_code WHERE registered_units.Studentid='$student_id'");
		  while($row = $qry->fetch_array()) {
			  ?>
		  	<tr>
				<td><?php echo $row['unit_code'] ?></td>
				<td><?php echo $row['unit_name'] ?></td>
		  </tr>
		  <?php
		  }
		  ?>
      </thead>
    </table>
		  </div>
  </section>
</main>
<?php include_once('footer.php')?>
