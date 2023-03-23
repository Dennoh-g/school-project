<?php
include "Website/security.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Thika University</title>
<?php echo ("<link href='Website/main.css' rel='stylesheet' type='text/css' />")?>
</head>

<body>
<?php


if ( isset( $_POST[ "submit" ] ) ) {

  $studentid = $_POST[ 'studentid' ];
  $password = $_POST[ 'password' ];

  if ( !empty( $studentid ) && !empty( $password ) ) {
    $query = "SELECT * FROM Students WHERE Studentid='$studentid' AND phone ='$password'";

    $query_run = mysqli_query( $connection, $query );

    $row = mysqli_num_rows( $query_run );


    if ( $row > 0 ) {
      $_SESSION[ 'Studentid' ] = $studentid;
      header( 'Location:Website/home.php' );
    } else {


      $_SESSION[ 'status' ] = "Your details are not valid";
      header( 'Location:index.php' );
    }
  } else {
    ?>
<script>alert("Fill the Student Id and Password");</script>
<?php
}


}
if ( isset( $_SESSION[ 'Studentid' ] ) ) {
  header( "Location:Website/home.php" );
}

?>
	
	
	
	
	<?php


if ( isset( $_POST[ "enter" ] ) ) {

  $lecturerid = $_POST[ 'lecturerid' ];
  $password = $_POST[ 'password' ];

  if ( !empty( $lecturerid ) && !empty( $password ) ) {
    $query = "SELECT * FROM lecturer WHERE lecturerid='$lecturerid' AND Password ='$password'";

    $query_run = mysqli_query( $connection, $query );

    $row = mysqli_num_rows( $query_run );


    if ( $row > 0 ) {
      $_SESSION[ 'lecturerid' ] = $lecturerid;
      header( 'Location:Website/lecture.php' );
    } else {


      $_SESSION[ 'status' ] = "Your details are not valid";
      header( 'Location:index.php' );
    }
  } else {
    ?>
<script>alert("Fill the lecturer Id and Password");</script>
<?php
}


}
if ( isset( $_SESSION['lecturerid'] ) ) {
  header( "Location:Website/lecture.php" );
}

?>
	
	
	
	
	
	
	
	<?php


if ( isset( $_POST[ "change" ] ) ) {

  $registraid = $_POST[ 'registraid' ];
  $password = $_POST[ 'password' ];

  if ( !empty( $registraid ) && !empty( $password ) ) {
    $query = "SELECT * FROM registra WHERE registraid='$registraid' AND Password ='$password'";

    $query_run = mysqli_query( $connection, $query );

    $row = mysqli_num_rows( $query_run );


    if ( $row > 0 ) {
      $_SESSION[ 'registraid' ] = $registraid;
      header( 'Location:Website/details.php' );
    } else {


      $_SESSION[ 'status' ] = "Your details are not valid";
      header( 'Location:index.php' );
    }
  } else {
    ?>
<script>alert("Fill the registra Id and Password");</script>
<?php
}


}
if ( isset( $_SESSION['registraid'] ) ) {
  header( "Location:Website/details.php" );
}

?>
<header id="top"> <img id="logo"src="Website/images/logo.svg"  alt=""/>
  <h1 id="school">Thika University</h1>
	
</header>
<main id="contain" >
  <section id="element"> 
	<button><a href="#logon1">Students</a></button>
	<button><a href="#logon2">Lecturer</a></button>
	<button><a href="#logon3">Registra</a></button>
	
	</section>
  <aside id="logon">
	  
    <div id="logon1">
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <fieldset >
          <legend>Student's Details</legend>
          <p>
            <label for="studentid">Student ID</label>
            <input type="text" name="studentid" id="studentid" placeholder="Studentid" >
          </p>
          <p>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="password" >
          </p>
          <p>
            <input type="submit" name="submit" value="Login">
          </p>
        </fieldset>
      </form>
    </div>
    <div id="logon2">
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <fieldset >
          <legend>Lecturer's Details</legend>
          <p>
            <label for="studentid">Lecturer ID</label>
            <input type="text" name="lecturerid" id="lecturerid" placeholder="Lecturerid" >
          </p>
          <p>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="password" >
          </p>
          <p>
            <input type="submit" name="enter" value="Login">
          </p>
        </fieldset>
      </form>
    </div>
    <section id="logon3">
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <fieldset >
          <legend>Registra's Details</legend>
          <p>
            <label for="Registraid">Registra ID</label>
            <input type="text" name="registraid" id="registraid" placeholder="Registraid" >
          </p>
          <p>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="password" >
          </p>
          <p>
            <input type="submit" name="change" value="Login">
          </p>
        </fieldset>
      </form>
    </section>
  </aside>
</main>
</body>
</html>
<?php include_once('Website/footer.php')?>
