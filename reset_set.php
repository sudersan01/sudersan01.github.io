
<?php
session_start();
$email=$_SESSION["user"];
  
 # Init the MySQL Connection
  if( !( $db = mysql_connect( 'localhost' , 'root' , '' ) ) )
    die( 'Failed to connect to MySQL Database Server - #'.mysql_errno().': '.mysql_error());
  if( !mysql_select_db( 'Alumini' ) )
    die( 'Connected to Server, but Failed to Connect to Database - #'.mysql_errno().': '.mysql_error());

if(isset($_SESSION["user"])){
    $selectSQL = "SELECT * FROM data where Email ='".$email."'";
	
	if( !( $selectRes = mysql_query( $selectSQL ) ) ){
    echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
  }else{
  	$rowcount=mysql_num_rows($selectRes);
  	if( mysql_num_rows( $selectRes )==0 ){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }else{
        while( $row = mysql_fetch_assoc( $selectRes ) ){

          $sno=$row['S.No.'];
          $fulln=$row['Full Name'];
          $em=$row['Email'];
          $mobl=$row['Mobile number'];
          $qual= $row['Qualification'];
          $dep=$row['Department'];
          $yoj=$row['Year of Joining'];
          $empl= $row['Employer'];
          $cur=$row['Current location (city / town name)'];
          $des=$row['Designation'];
          $wrk=$row['Work Information (Corporate/Govt/Entrepreneur/Retired/others)'];
          $dom=$row['Domain or Field of work (Software/R&D etc)'];
          $willing=$row['Willingness'];

        }
        echo "$fulln";
  }
}
}
?>
