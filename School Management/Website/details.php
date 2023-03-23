<?php include('header3.php'); session_start();?>

<?php
if ( strlen( $_SESSION[ 'registraid' ]  ) == 0 ) {
  header( 'Location:../index.php' );
}

if (isset($_SESSION['registraid'])) {
	$id3 = $_SESSION['registraid'];
	$qry = $connection->query("SELECT * FROM registra WHERE registraid='$id3'")->fetch_array();
	foreach ($qry as $k => $val) {
		$$k = $val;
	}
}
?>
<main>
  <section id="directory" >
   
	  <span><?php echo isset($_SESSION['registraid']) ? $_SESSION[ 'registraid' ] : ""; ?></span>
	  <span><?php echo isset($_SESSION['registraid']) ? "Name:"."".$Sur_name." ".$First_name." ".$Second_name : ""; ?></span>
	  <span><?php echo isset($_SESSION['registraid']) ? "Phone:".""."0".$Phone:""; ?></span>
	  <span><?php echo isset($_SESSION['registraid']) ? "Email:"."".$Email:""; ?></span>
	  <span><?php echo isset($_SESSION['registraid']) ? "Gender:"."".$Gender:""; ?></span>
  </section>
	

</main>
<?php include_once('footer.php')?>