<?php  
	session_start();
	include 'controller/controller.php';
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/register.css">
</head>
<body>
	<div class="container">
		<div class="top-bar">
			<row>
				<ul class="menu">
					<li><a href="index.php">Home</a></li>
					<li><a href="index.php?action=register">Register</a></li>
					<li><a href="index.php?action=login">Login</a></li>
					<li><a href="index.php?action=chagne">Chagne PassWord</a></li>
				</ul>
			</row>
			<row>
				<ul class="infor">
					<?php if(isset($_SESSION['login']['username'])){?>
					<li><?php echo $_SESSION['login']['username'];?><a href="index.php?action=logout"> Logout</a></li>
				<?php } ?>
				</ul>
			</row>
		</div>
	</div>
	<?php 
		$controller = new Controller();
		$controller->handleRequest();
	 ?>
</body>
</html>