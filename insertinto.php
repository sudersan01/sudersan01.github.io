<html>

<head>

	<style>
.body
		{
			background-image:url("bg.png");
			background-color :#f7f2d7;
			background-repeat:no-repeat;
		}

.heading
	{
		background:#0C2459;
		//background:#a93226;
		height:85;
		width:95%;
		margin:auto;
	}	
.heading h1
{
	color:white;
	text-align:center;
	padding:25;
	word-spacing:20;
}
.container {
    width: 92%;
    height: 1100px;
    background: white;
    margin: auto;
    padding: 20px;
}
.one {
    width: 75%;
     //margin-right: 5%;
	height: 1100px;
   padding: 10px;
    float: left;
}
.one p,li
{
	font-size :16.5;
	line-height :1.75;
	text-decoration: none;
	word-spacing:7.5;
}
.two {
    //margin-left: 15%;
    height: 1100px;
	//float: left;
	padding: 50px;
    }
.two li
{text-decoration:none;}
</style>
</head>

<body class="body" background="bg.png">
<br><br><br><br><br><br><br>
<div class="heading">
	<h1>INSERT INTO DATABASE<h1>

		
</div>

<section class="container">
<?php

	

	if(isset($_POST['submit']))
	{
		
			$SNO = 1;
			$REGNO=$_POST["regno"];
			$NAME=$_POST["name"];
			$EMAIL=$_POST["email"];
			$PASSWORD=$_POST["pw1"];
			$MOBILE=$_POST["mobile"];
			$DEGREE=$_POST["degree"];
			$BRANCH=$_POST["branch"];
			$SPECZ=$_POST["specialization"];
			$YOJ=$_POST["batch"];
			$YOG=$_POST["graduation"];
			$EMPLOYER=$_POST["emp"];
			$LOCATION=$_POST["place"];
			$DESIGNATION=$_POST["designation"];	
			$WORK_INFO=$_POST["workinfo"];
			$DOMAIN=$_POST["domain"];
			$WILLINGNESS=$_POST["willingness"];
			$Higher_Edu=$_POST["hiedu"];
			$Instituition=$_POST["instituition"];
			$Course2=" ";
			$Branch2=" ";
			$Specialization2=" ";
			$YOJ2=" ";
			$YOG2=" ";
			$College2=" ";

			//echo "Variables Set";

			//ECHO "$SNO"; ECHO "$REGNO"; ECHO "$NAME" ; ECHO "$EMAIL"; ECHO "$PASSWORD"; ECHO "$MOBILE"; ECHO "$DEGREE"; ECHO "$BRANCH"; ECHO "$SPECZ"; ECHO "$YOJ"; ECHO "$YOG"; ECHO "$EMPLOYER" ; ECHO "$LOCATION"; ECHO "$DESIGNATION"; ECHO "$WORK_INFO"; ECHO "$DOMAIN"; ECHO "$WILLINGNESS"; ECHO "$Higher_Edu"; ECHO "$Instituition"; ECHO "$Course2"; ECHO "$Branch2"; ECHO "$Specialization2"; ECHO "$YOJ2"; ECHO "$YOG2"; ECHO "$College2";

			
			//echo "Variables printed";

			

				$username="root";
				$password="";
				$database="alumni";
				$server="localhost";
 

 			//echo "Connections Set";
	

			$conn = mysqli_connect($server, $username, $password, $database);

			if($conn)
			{
				//echo "Connection success";
				
				$sql="INSERT INTO db1 values('$SNO','$REGNO','$NAME','$EMAIL','$PASSWORD','$MOBILE','$DEGREE','$BRANCH','$SPECZ','$YOJ','$YOG','$EMPLOYER',
											 '$LOCATION','$DESIGNATION','$WORK_INFO','$DOMAIN','$WILLINGNESS','$Higher_Edu','$Instituition','$Course2','$Branch2','$Specialization2','$YOJ2','$YOG2','$College2')"; 

				if (mysqli_query($conn, $sql)) 
				{
					 //echo "mysqli_error($conn)";
     				// echo "New record created successfully";
     				 //echo '<br><br><br><br>'; 
     				 echo '<center>';
     				 echo ' <img src="insertimage.jpg" height=400 px width=400 px/> '; 
     				 echo '</center>';
				} 
				else
				{
					echo '<center>';
     				 echo ' <img src="errorimage.jpg" height=400 px width=400 px/> '; 
     				 echo '</center>';
					//echo mysqli_error($conn);
					//echo "Insert Error";
				}
			}

			else
			{
				echo "Connection error";
			}

	}
	else
	{
			echo "The Form is Not Submitted";
	}					

$conn->close();
	
?>


</section>
<footer><center><img src="hel.png"></center> </footer>
</body>

</html>