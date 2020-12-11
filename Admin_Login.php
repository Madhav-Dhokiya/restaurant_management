<?php
    session_start();
?>
<?php

    $server="localhost";
    $user_name="root";
    $password="";
    $db="restaurant_management";

    $conn=mysqli_connect($server,$user_name,$password,$db);

    if(! $conn)
    {
        echo "Error!!".mysqli_error($conn);
    }
    if(isset($_POST['uname']) && isset($_POST['psw']))
    {
        $username=$_POST['uname'];
        $psw=$_POST['psw'];
        $sql="select admin_name,admin_password from admin_login where admin_name='$username' and admin_password='$psw'";
        $r=mysqli_query($conn,$sql);

        if(mysqli_num_rows($r) > 0)
        {
            while($row=mysqli_fetch_assoc($r))
            {
                $name=$row['admin_name'];
                $pword=$row['admin_password'];

                if($username == $name and $psw == $pword)
                {
                    $_SESSION['admin']=$_POST['uname'];
                    header("location:admin.php");
                }
            }
        }
        else
        {
            echo "<script>alert('Invalid Username Or Password')</script>";
        }
    }
    else
    {

    }
?>
<html>
	<head>
		<title> Admin Login </title>
        <style>
            *{
	           margin:0px;
	           padding:0px;
            }
            body{
                background-color:black;
            }
            .login{
                background-color:#f2f2f2;
                width:30%;
                margin: 130px auto;
                border:2px solid;
                border-radius:20px;
                border-color:rgb(240,210,220);
                border-width:5px;
            }
            .title{
                color:rgb(180,189,100);
                margin-left:60px;
                font-size:20px;
            }
            .box{
                width: 79%;
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
                width: 79%;
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
            }
            .btn1{
                height:30px;
                width:79%;
                border-radius:10px;
                border-color:rgb(240,210,220);
                font-size:20px;	
            }
            .button2{
                margin-left:20px;
            }
            .btn2{
                height:30px;
                width:79%;
                border-radius:10px;
                border-color:gray;
                border-color:rgb(240,210,220);
                font-size:20px;
            }
            @media only screen and (max-width: 1000px)
            {
            .title{
                font-size: 16px;
            }
            .btn2{
                font-size: 13px;
            }
        }
        @media only screen and (max-width: 700px)
        {
            .title{
                font-size: 12px;
            }
            .btn2{
                font-size: 11px;
            }
        }
        @media only screen and (max-width: 400px)
        {
            .title{
                font-size: 8px;
                
            }       
            .btn2{
                font-size: 9px;
            }   
        }
        .error{
            font-size: 25px;    
            margin-left: 20px;
            margin-top: 40px;
            color: red;
        }
        .btn{
            height: 10%;
            width: 19%;
            font-size: 20px;
            background-color: transparent;
            border: 2px solid;
            border-color: #ccc;
            margin-left: 60px;
            border-radius: 8px;
        }
        .btn:hover{
            color: red;
            border-color: red;
            transition: color 0.5s;
            transition: border-color 0.9s;
        }
        ::placeholder{
            color: blue;
            opacity: 1;
        }
        </style>
	</head>
	<body>
		<div class="login">
			<div class="title">
				<h2> Admin Login </h2>
			</div><br><hr><br>
				<form  method="POST">
				<div class="row">
					<div class="row-10">
						<label for="uname">Username</label>
					</div>
					<div class="row-14">
						<input type="text" class="box" name="uname" placeholder="Username" autocomplete="off" autofocus="on" required><br><br>
					</div>
				</div>
				
				<div class="row">
					<div class="row-10">
						<label for="psw">Password</label>
					</div>
					<div class="row-14">
						<input type="password" class="box2" name="psw" placeholder="Password" autocomplete="off" required><br><br>
					</div>
				</div>
				<div class="button">
					<input type="submit" class="btn1" name="btn1" value="Login">
				</div><br>
            </form>
		</div>
	</body>
</html>