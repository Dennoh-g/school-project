<?php include('header2.php'); session_start();?>
<?php
if ( strlen( $_SESSION[ 'lecturerid' ]  ) == 0 ) {
  header( 'Location:../index.php' );
}

if (isset($_SESSION['lecturerid'])) {
	$id2 = $_SESSION['lecturerid'];
	$qry = $connection->query("SELECT * FROM lecturer WHERE lecturerid='$id2'")->fetch_array();
	foreach ($qry as $k => $val) {
		$$k = $val;
	}
}
?>
<main>
  <section id="directory" >
   
	  <span><?php echo isset($_SESSION['lecturerid']) ? $_SESSION[ 'lecturerid' ] : ""; ?></span>
	  <span><?php echo isset($_SESSION['lecturerid']) ? "Name:"."".$Sur_name." ".$First_name." ".$Second_name : ""; ?></span>
	  <span><?php echo isset($_SESSION['lecturerid']) ? "Phone:".""."0".$Phone:""; ?></span>
	  <span><?php echo isset($_SESSION['lecturerid']) ? "Email:"."".$Email:""; ?></span>
	  <span><?php echo isset($_SESSION['lecturerid']) ? "Gender:"."".$Gender:""; ?></span>
  </section>
	

</main>
<?php include_once('footer.php')?>	