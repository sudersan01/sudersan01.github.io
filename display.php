<!DOCTYPE html>
<html>
<head>

	<style>
      .body
    {
      background-image:url("bg.png");
      background-color :#f7f2d7;
      background-repeat:no-repeat;
    }
	.button{
background-color: purple;
border:none;
color: white;
padding: 10px 20px 15px 20px;
text-align:center;
text-decoration:none;
display:inline-block;
font-size:20px;
margin: 4x 4px;
cursor:pointer;
border-radius: 12px;
}


   </style>
	<title>Database</title>
	<link rel="stylesheet" type="text/css" href="db1.css">
  <!-- <link href="layout.css" rel="stylesheet" type="text/css" />
        <link href="menu.css" rel="stylesheet" type="text/css" /> -->
	<script type="text/javascript">
		function fun1()
		{
     if(document.getElementById('bn').checked) {
     	
  document.getElementById('hide1').style.display="block"; 
		}
	}
	</script>
</head>
<br><br><br><br><br><br><br><br><br><br><br>
<body bgcolor="#ffe6d0" class="body">


<?php
   include 'connect.php';
?>
<center>
<table border=2 cellpadding=15 cellspacing=5 id='customers'>

<tr>
	 <th>SNo</th>	
	 <th>Name</th>
	 <th>Email</th>
	 <th>Mobile</th>
	 <th>Degree</th>
	 <th>Branch</th>
	 <th>Location</th>
     <th>Designation</th>
     <th>Higher Education</th>
     <th>YOJ</th>
     <th>YOG</th>
</tr>

<div class="db1-container">

    <?php
	   if(isset($_POST['submit-search'])) 
	   {
		 $search = mysqli_real_escape_string($conn,$_POST['search']);
		 $sql = "SELECT * FROM db1 WHERE EMAIL like '%$search%' or NAME like '%$search%' or DEGREE like '%$search%' or BRANCH like '%$search%' or YOJ like '%$search%'";
         $result = mysqli_query($conn,$sql);
		 $queryResult = mysqli_num_rows($result);
		 
		 if($queryResult > 0)
		 {	
		 while($row = mysqli_fetch_assoc($result))
			 {
		
		      echo "<tr>";
		 echo  "<td>".$row['SNO']."</td>";
          echo "<td>".$row['NAME']."</td>";
		  echo "<td>".$row['EMAIL']."</td>";
          echo "<td>".$row['MOBILE']."</td>";
		  echo "<td>".$row['DEGREE']."</td>";
          echo "<td>".$row['BRANCH']."</td>";
          echo "<td>".$row['LOCATION']."</td>";
		  echo "<td>".$row['DESIGNATION']."</td>";
          echo "<td>".$row['Higher_Edu']."</td>";
		  echo "<td>".$row['YOJ']."</td>";
		  echo "<td>".$row['YOG']."</td>";
        }

		 }
		 else
		 {
            echo "There are no results!";        
		 }		 
	   }
	?>

</center>
</div>
</table>
<br><br><br><br>
<a href="database1.php" class="button">Back</a>


<br><br><br><br><br><br><br><br>

<footer><center><img src="hel.png"></center> </footer>
</body>
</html>


