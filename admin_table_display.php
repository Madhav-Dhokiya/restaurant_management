<html>
	<head>
		<title>TABLE</title>
		<style>
		*{
			margin: 0px;
			padding: 0px;
		}
		.top
		{
			width: 80%;
			margin: 20px auto;
			animation-name: mymove;
			animation-duration: 3s;
			animation-iteration-count: 1000;
			/*background-color: rgb(245,245,245);*/
		}
		.title1{
			text-align: center;
			font-size: 29px;
			padding-top: 10px;
			color: blue;
			/*text-decoration: underline;*/
		}
		.table
		{
			display: flex;
			flex-wrap: wrap;
			/*background-color: dodgerblue;*/
		}
		.table > div
		{
			background-color: #f1f1f1;
			width: 200px;
			margin: 10px;
			text-align: center;
			line-height: 75px;
			font-size: 30px;
			margin-top: 10px;
			margin-left: 76px;
			margin-bottom: 10px;
			border-radius: 10px;
			border: 5px;
			border-color: red;
			background-color: rgb(245,245,245);
		}
		.btn1{
			width: 50%;
			margin-top: 20px;
			font-size: 20px;
			border: 2px solid #ccc;
			margin-bottom: 20px;
		}
		.btn1:hover{
			border-color: green;
		}	
		.nav{
			padding-left: 20px;
			font-size: 20px;
			border: 2px rgb(135,206,235);
			width: 100%;
			margin: 20px auto;
			background-color: rgb(135,206,235);
			height: 6%;
			padding-top: 19px;
			padding-bottom: 12px;
		}
		.menu1{
			text-decoration: none;
			padding-left: 30px; 
			color: rgb(0,0,139);
		}
		.title{
			text-align: center;
			font-size: 40px;
			margin-top: 10px;
			color: rgb(65,105,225);
			text-decoration: underline;
		}	
		</style>
	</head>
	<body>
		<div class="title">
            Admin Panel        
   	 	</div>
		<div class="nav">
			<a href="view.php" class="menu1">View Menu</a>
			<a href="admin_logout.php" class="menu1">Logout</a>
			<a href="admin_table_display.php" class="menu1">Table Bookings</a>
		</div>
		<div class="top">
			<div class="table">
				<?php
					$server="localhost";
					$user="root";
					$password="";
					$db="restaurant_management";

					$conn=mysqli_connect($server,$user,$password,$db);
					if(! $conn)
					{
						echo "<script>alert('Error Occured')</script>";
					}

					$sql1="select table_No,capacity,status from  table_details where table_No=1";
					$r1=mysqli_query($conn,$sql1);
					if(mysqli_num_rows($r1) > 0)
					{
						while($row1=mysqli_fetch_assoc($r1))
						{
							if($row1['status'] == 'No')
							{
								echo '<div>Table:'.$row1['table_No'].'<br><hr>Capacity:'.$row1['capacity'].
								'<hr>Available</div>';
							}
							else
							{
								echo '<div>Table:'.$row1['table_No'].'<br><hr>Capacity:'.$row1['capacity'].
								'<hr>Booked</div>';	
							}	
						}
					}
					else
					{
						echo "Error".mysqli_error($conn);
					}
					?>
					
				<?php

					$sql2="select table_No,capacity,status from  table_details where table_No=2";
					$r2=mysqli_query($conn,$sql2);
					if(mysqli_num_rows($r1) > 0)
					{
						while($row2=mysqli_fetch_assoc($r2))
						{
							if($row2['status'] == 'No')
							{
								echo '<div>Table:'.$row2['table_No'].'<br><hr>Capacity:'.$row2['capacity'].
								'<hr>Available</div>';
							}
							else
							{
								echo '<div>Table:'.$row2['table_No'].'<br><hr>Capacity:'.$row2['capacity'].
								'<hr>Booked</div>';	
							}	
						}
					}
					else
					{
						echo "Error".mysqli_error($conn);
					}
				?>

				<?php

					$sql3="select table_No,capacity,status from  table_details where table_No=3";
					$r3=mysqli_query($conn,$sql3);
					if(mysqli_num_rows($r1) > 0)
					{
						while($row3=mysqli_fetch_assoc($r3))
						{
							if($row3['status'] == 'No')
							{
								echo '<div>Table:'.$row3['table_No'].'<br><hr>Capacity:'.$row3['capacity'].
								'<hr>Available</div>';
							}
							else
							{
								echo '<div>Table:'.$row3['table_No'].'<br><hr>Capacity:'.$row3['capacity'].
								'<hr>Booked</div>';	
							}		
						}
					}
					else
					{
						echo "Error".mysqli_error($conn);
					}
				?>

				<?php

					$sql2="select table_No,capacity,status from  table_details where table_No=4";
					$r2=mysqli_query($conn,$sql2);
					if(mysqli_num_rows($r1) > 0)
					{
						while($row2=mysqli_fetch_assoc($r2))
						{
							if($row2['status'] == 'No')
							{
								echo '<div>Table:'.$row2['table_No'].'<br><hr>Capacity:'.$row2['capacity'].
								'<hr>Available</div>';
							}
							else
							{
								echo '<div>Table:'.$row2['table_No'].'<br><hr>Capacity:'.$row2['capacity'].
								'<hr>Booked</div>';	
							}			
						}
					}
					else
					{
						echo "Error".mysqli_error($conn);
					}
				?>

				<?php

					$sql2="select table_No,capacity,status from  table_details where table_No=5";
					$r2=mysqli_query($conn,$sql2);
					if(mysqli_num_rows($r1) > 0)
					{
						while($row2=mysqli_fetch_assoc($r2))
						{
							if($row2['status'] == 'No')
							{
								echo '<div>Table:'.$row2['table_No'].'<br><hr>Capacity:'.$row2['capacity'].
								'<hr>Available</div>';
							}
							else
							{
								echo '<div>Table:'.$row2['table_No'].'<br><hr>Capacity:'.$row2['capacity'].
								'<hr>Booked</div>';	
							}	
						}
					}
					else
					{
						echo "Error".mysqli_error($conn);
					}
				?>

				<?php

					$sql2="select table_No,capacity,status from  table_details where table_No=6";
					$r2=mysqli_query($conn,$sql2);
					if(mysqli_num_rows($r1) > 0)
					{
						while($row2=mysqli_fetch_assoc($r2))
						{
							if($row2['status'] == 'No')
							{
								echo '<div>Table:'.$row2['table_No'].'<br><hr>Capacity:'.$row2['capacity'].
								'<hr>Available</div>';
							}
							else
							{
								echo '<div>Table:'.$row2['table_No'].'<br><hr>Capacity:'.$row2['capacity'].
								'<hr>Booked</div>';	
							}	
						}
					}
					else
					{
						echo "Error".mysqli_error($conn);
					}
				?>

				<?php

					$sql2="select table_No,capacity,status from  table_details where table_No=7";
					$r2=mysqli_query($conn,$sql2);
					if(mysqli_num_rows($r1) > 0)
					{
						while($row2=mysqli_fetch_assoc($r2))
						{
							if($row2['status'] == 'No')
							{
								echo '<div>Table:'.$row2['table_No'].'<br><hr>Capacity:'.$row2['capacity'].
								'<hr>Available</div>';
							}
							else
							{
								echo '<div>Table:'.$row2['table_No'].'<br><hr>Capacity:'.$row2['capacity'].
								'<hr>Booked</div>';	
							}	
						}
					}
					else
					{
						echo "Error".mysqli_error($conn);
					}
				?>

				<?php

					$sql2="select table_No,capacity,status from  table_details where table_No=8";
					$r2=mysqli_query($conn,$sql2);
					if(mysqli_num_rows($r1) > 0)
					{
						while($row2=mysqli_fetch_assoc($r2))
						{
							if($row2['status'] == 'No')
							{
								echo '<div>Table:'.$row2['table_No'].'<br><hr>Capacity:'.$row2['capacity'].
								'<hr>Available</div>';
							}
							else
							{
								echo '<div>Table:'.$row2['table_No'].'<br><hr>Capacity:'.$row2['capacity'].
								'<hr>Booked</div>';	
							}		
						}
					}
					else
					{
						echo "Error".mysqli_error($conn);
					}
				?>

				<?php

					$sql2="select table_No,capacity,status from  table_details where table_No=9";
					$r2=mysqli_query($conn,$sql2);
					if(mysqli_num_rows($r1) > 0)
					{
						while($row2=mysqli_fetch_assoc($r2))
						{
							if($row2['status'] == 'No')
							{
								echo '<div>Table:'.$row2['table_No'].'<br><hr>Capacity:'.$row2['capacity'].
								'<hr>Available</div>';
							}
							else
							{
								echo '<div>Table:'.$row2['table_No'].'<br><hr>Capacity:'.$row2['capacity'].
								'<hr>Booked</div>';	
							}			
						}
					}
					else
					{
						echo "Error".mysqli_error($conn);
					}
				?>

				<?php

					$sql2="select table_No,capacity,status from  table_details where table_No=10";
					$r2=mysqli_query($conn,$sql2);
					if(mysqli_num_rows($r1) > 0)
					{
						while($row2=mysqli_fetch_assoc($r2))
						{
							if($row2['status'] == 'No')
							{
								echo '<div>Table:'.$row2['table_No'].'<br><hr>Capacity:'.$row2['capacity'].
								'<hr>Available</div>';
							}
							else
							{
								echo '<div>Table:'.$row2['table_No'].'<br><hr>Capacity:'.$row2['capacity'].
								'<hr>Booked</div>';	
							}	
						}
					}
					else
					{
						echo "Error".mysqli_error($conn);
					}
				?>

				<?php

					$sql2="select table_No,capacity,status from  table_details where table_No=11";
					$r2=mysqli_query($conn,$sql2);
					if(mysqli_num_rows($r1) > 0)
					{
						while($row2=mysqli_fetch_assoc($r2))
						{
							if($row2['status'] == 'No')
							{
								echo '<div>Table:'.$row2['table_No'].'<br><hr>Capacity:'.$row2['capacity'].
								'<hr>Available</div>';
							}
							else
							{
								echo '<div>Table:'.$row2['table_No'].'<br><hr>Capacity:'.$row2['capacity'].
								'<hr>Booked</div>';	
							}		
						}
					}
					else
					{
						echo "Error".mysqli_error($conn);
					}
				?>

				<?php

					$sql2="select table_No,capacity,status from  table_details where table_No=12";
					$r2=mysqli_query($conn,$sql2);
					if(mysqli_num_rows($r1) > 0)
					{
						while($row2=mysqli_fetch_assoc($r2))
						{
							if($row2['status'] == 'No')
							{
								echo '<div>Table:'.$row2['table_No'].'<br><hr>Capacity:'.$row2['capacity'].
								'<hr>Available</div>';
							}
							else
							{
								echo '<div>Table:'.$row2['table_No'].'<br><hr>Capacity:'.$row2['capacity'].
								'<hr>Booked</div>';	
							}	
						}
					}
					else
					{
						echo "Error".mysqli_error($conn);
					}
				?>

				<?php

					$sql2="select table_No,capacity,status from  table_details where table_No=13";
					$r2=mysqli_query($conn,$sql2);
					if(mysqli_num_rows($r1) > 0)
					{
						while($row2=mysqli_fetch_assoc($r2))
						{
							if($row2['status'] == 'No')
							{
								echo '<div>Table:'.$row2['table_No'].'<br><hr>Capacity:'.$row2['capacity'].
								'<hr>Available</div>';
							}
							else
							{
								echo '<div>Table:'.$row2['table_No'].'<br><hr>Capacity:'.$row2['capacity'].
								'<hr>Booked</div>';	
							}		
						}
					}
					else
					{
						echo "Error".mysqli_error($conn);
					}
				?>

				<?php

					$sql2="select table_No,capacity,status from  table_details where table_No=14";
					$r2=mysqli_query($conn,$sql2);
					if(mysqli_num_rows($r1) > 0)
					{
						while($row2=mysqli_fetch_assoc($r2))
						{
							if($row2['status'] == 'No')
							{
								echo '<div>Table:'.$row2['table_No'].'<br><hr>Capacity:'.$row2['capacity'].
								'<hr>Available</div>';
							}
							else
							{
								echo '<div>Table:'.$row2['table_No'].'<br><hr>Capacity:'.$row2['capacity'].
								'<hr>Booked</div>';	
							}			
						}
					}
					else
					{
						echo "Error".mysqli_error($conn);
					}
				?>	
				</div>
		</div>	
	</body>
</html>
	