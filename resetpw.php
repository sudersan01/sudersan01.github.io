<!DOCTYPE HTML>

<HEAD>

<script>
	//window.onload = function(){resetpw.email1.disabled=true;};
	function checkpass()
	{
	var pass1 = document.getElementById('pw1');
    var pass2 = document.getElementById('pw2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#abf2b0";
    var badColor = "#f4adad";
    //Compare the values in the password field 
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        pass2.style.backgroundColor = goodColor;
        message.style.color = "green";
        message.innerHTML = "Passwords Match!"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = "red";
        message.innerHTML = "Passwords Do Not Match!"
    }
	}
</script>
	<title>Alumni signup form</title>
	<style>
		.body
		{
			background-image:url("bg.png");
			background-color :#f7f2d7;
			background-repeat:no-repeat;
		}
		.form1
		{
			align:center ;
			background:#D8E1F5    ;
			//background:white;
			margin : 10px auto ;
			max-width : 450px;
			padding : 20px
		}
		
		.form1 h1,
		.form1 h2
		{
			background : #0C2459;
			//background:#a93226;
			padding:20px;
			font-size : 200%;
			font-weight:300;
			text-align:center;
			color:#fff;
			margin:-16px -16px -16px -16px
		}

		.form1 h22
		{
			background : #0C2459  ;
			//background:#a93226;
			padding:20px;
			font-size : 150%;
			font-weight:200;
			text-align:center;
			color:white;
			margin:-16px -16px -16px -16px
		}
		
		.form1 input[type="text"],
		.form1 input[type="email"],
		.form1 input[type="password"],
		.form1 select,
		.form1 textarea
		{
			box-sizing :border-box;
			width:100%;
			background:#fff;
			//background:#f7f2d7;
			margin-bottom:4%;
			padding:2%;
		}


		.form1 input[type="checkbox"],
		.form1 input[type="radio"],
		.form1 select
		{
			width:25%;
			background:white;
			margin-bottom:3%;
			padding:4%;
			margin-left:10px ;
			color:white
		}

		.form1 input[type="submit"],
		.form1 select
		{
			box-sizing :border-box;
			width:100%;
			//background:#a93226;
			background:#0C2459;
			margin-bottom:4%;
			padding:4%;
			color:white;
			font-size:150%
		}
		
	</style>
</HEAD>

<BODY class="body"  >
<?php 

$user1=$_GET["user"];
$user=base64_decode($user1);
//clean_string($user);
$user = preg_replace('/[^a-zA-Z0-9_.@]/', '', $user);
?>
<br><br><br><br><br><br><br><br>
<div class="form1" >
	<header></header>
	<form  name="resetpw" action="modifypw.php"  method = "post" >
		<h1>Password reset</h1><br><br>
		
		<br>
		<br>
		<b><label>USERNAME :</label></b><br><br>
			<input readonly type="email" name="email1" value=<?php echo "$user" ?> ></input>
			<!--set the value and placeholder of above field to the email id... it cannot be editted by the user... i've disabled it...-->
		<br>
		<br>
		<b><label>PASSWORD :</label></b>
		<br><br>
			<input type="password" name="pw1" id="pw1" value="" placeholder ="Enter password" onkeyup="checkpass()"></input>
		<br><br>
			<input type="password" name="pw2" id="pw2" value="" placeholder ="Confirm password" onkeyup="checkpass()"></input>
			<span id="confirmMessage" class="confirmMessage"></span>
		<br><br><br>
		<input type="submit" name="reset" value="RESET" ></input>
	</form>
</div>
<br><br><br>
<footer><center><img src="hel.png"></center> </footer>
</BODY>

</HTML>