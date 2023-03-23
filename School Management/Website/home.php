<?php include('header.php'); session_start();?>
<?php
if ( strlen( $_SESSION[ 'Studentid' ]  ) == 0 ) {
  header( 'Location:../index.php' );
}

if (isset($_SESSION['Studentid'])) {
	$id = $_SESSION['Studentid'];
	$qry = $connection->query("SELECT * FROM students WHERE Studentid='$id'")->fetch_array();
	foreach ($qry as $k => $val) {
		$$k = $val;
	}
}
?>
<main>
  <section id="directory" >
   
	  <span><?php echo isset($_SESSION['Studentid']) ? $_SESSION[ 'Studentid' ] : ""; ?></span>
	  <span><?php echo isset($_SESSION['Studentid']) ? "Name:"."".$Sur_Name." ".$First_Name." ".$Second_Name : ""; ?></span>
	  <span><?php echo isset($_SESSION['Studentid']) ? "Phone:".""."0".$Phone:""; ?></span>
	  <span><?php echo isset($_SESSION['Studentid']) ? "Email:"."".$Email:""; ?></span>
	  <span><?php echo isset($_SESSION['Studentid']) ? "Gender:"."".$Gender:""; ?></span>
  </section>
	

</main>
<?php include_once('footer.php')?>	