<?php include('header.php'); session_start();?>
<?php
if ( strlen( $_SESSION[ 'Studentid' ] ) == 0 ) {
  header( 'Location:../index.php' );
}
?>
<main>
  <section id="contain" >
    <?php
    if ( isset( $_SESSION[ 'Studentid' ] ) ) {
      echo  $_SESSION[ 'Studentid' ];
    } else {
      echo "Not Set";
    }
    ?>
  </section>
</main>
<?php include_once('footer.php')?>	