<html>

<html>
	<head>
		<title> Admin Registration Page </title>
		<style>
		*{
			margin:0px;
			padding:0px;
		}
		body{
			/*background-color:black;*/
		}
		.login{
			margin: 20px auto;
			background-color:#f2f2f2;
			width:50%;
			border:2px solid;
			border-radius:20px;
			border-color:rgb(240,210,220);
			border-width:5px;
		}
		.title{
			color:rgb(180,189,100);
			margin: 7px auto;
			width: 50%;
			font-size:20px;
		}
		.box{
			width: 80%;
			padding: 12px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			resize: vertical;
			margin-left:20px;
			margin-top:5px;
		}
		.row-10{
			padding-top:10px;
			margin-left:20px;
			font-size:20px;
		}
		.box2{
			width: 80%;
			padding: 12px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			resize: vertical;
			margin-left:20px;
			margin-top:5px;
		}
		.box3{
			width: 60%;
			height:20%;
			padding: 12px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			resize: vertical;
			margin-left:20px;
			margin-top:5px;
		}
		.button{
			margin-left:20px;
			padding-bottom: 10px;
		}
		.btn1{
			height:30px;
			width:100px;
			border-radius:10px;
			border-color:rgb(240,210,220);
			font-size:20px;	
			padding-bottom: 20px;
		}
		.button2{
			margin-left:150px;
		}
		</style>
	</head>
    
	<body>
		<div class="login">
			<div class="title">
				<h2> Registration Page </h2>
			</div>
			<form method="POST">
				
				<div class="row">
					<div class="row-10">
						<label for="uname">Name</label>
					</div>
					<div class="row-14">
						<input type="text" class="box" name="name" placeholder="Name" autocomplete="off" autofocus="on" required><br><br>
					</div>
				</div>
				
				<div class="row">
					<div class="row-10">
						<label for="username">Username</label>
					</div>
					<div class="row-14">
						<input type="box" class="box2" name="uname" placeholder="Username for your account" autocomplete="off" required><br><br>
					</div>
				</div>

				<div class="row">
					<div class="row-10">
						<label for="psw">Password</label>
					</div>
					<div class="row-14">
						<input type="Password" class="box2" name="psw" placeholder="Password for your account" autocomplete="off" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"><br><br>
					</div>
				</div>

				<div class="row">
					<div class="row-10">
						<label for="email">Email_Id</label>
					</div>
					<div class="row-14">
						<input type="email" class="box2" name="email" placeholder="Email_Id" autocomplete="off" required><br><br>
					</div>
				</div>

				<div class="row">
					<div class="row-10">
						<label for="pno">Mobile No</label>
					</div>
					<div class="row-14">
						<input type="number" class="box2" name="pno1" placeholder="Enter 1st Phone Number" autocomplete="off" required pattern="\d{10}"  title="Enter 10 Digit Phone Number"><br><br>
					</div>
				</div>

				<div class="row">
					<div class="row-10">
						<label for="pno2">Mobile No</label>
					</div>
					<div class="row-14">
						<input type="number" class="box2" name="pno2" placeholder="Enter 2nd Phone Number *Optional*" autocomplete="off" pattern="\d{10}"  title="Enter 10 Digit Phone Number"><br><br>
					</div>
				</div>

				<div class="row">
					<div class="row-10">
						<label>City</label>
					</div>
					<div class="row-14">
						<input type="box" class="box2" name="city" placeholder="Enter City" autocomplete="off" required><br><br>
					</div>
				</div>

				<div class="row">
					<div class="row-10">
						<label for="psw">Full Address</label>
					</div>
					<div class="row-14">
						<textarea rows="20" cols="30" class="box3" name="tarea" placeholder="Address"></textarea>
					</div>
				</div>

				<div class="row">
					<div class="row-10">
						<label for="pincode">Pincode</label>
					</div>
					<div class="row-14">
						<input type="number" class="box2" name="pin_code" placeholder="Enter Pincode Of Your City" autocomplete="off" required><br><br>
					</div>
				</div>

				<div class="button">
					<input type="submit" class="btn1" name="btn1" value="Submit">
				</div>
			</form>
		</div>
	</body>
</html>
<?php
	if(isset($_POST['name']) && isset($_POST['uname']) && isset($_POST['psw']) && isset($_POST['email']))
	{
		$server="localhost";
		$user_name="root";
		$password="";
		$db="restaurant_management";

		$name=$_POST['name'];
		$uname=$_POST['uname'];
		$psw=$_POST['psw'];
		$email=$_POST['email'];
		$pno1=$_POST['pno1'];
		$pno2=$_POST['pno2'];
		$city=$_POST['city'];
		$tarea=$_POST['tarea'];
		$pincode=$_POST['pin_code'];

		$conn=mysqli_connect($server,$user_name,$password,$db);
		if(! $conn)
		{
			echo "Error!!".mysqli_error($conn);
		}

		$sql="insert into admin_details values(0,'$name','$email',$pno1,$pno2,'$city','$tarea',$pincode,'$uname','$psw')";
		$r=mysqli_query($conn,$sql);
		if($r === true)
		{
			header("location:HomePage.php");
		}
		else
		{
			echo "Error!!".mysqli_error($conn);
		}
	}
?>			