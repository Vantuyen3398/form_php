<?php  
    session_start();
?>
<?php  
	include 'classes/user.php';
	$us = new User();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Chagne</title>
	<link rel="stylesheet" href="css/login.css">
</head>
<body>
	<form action="" method="POST">
        <h1>Chagne Password</h1>
        <div class="inset">
        	<p>
                <label for="email"></label>
                <input type="text" name="txtEmail" id="email">
            </p>
            <p>
                <label for="email">UserName</label>
                <input type="text" name="txtUsername" id="email">
            </p>
            <p>
                <label for="password">PassWord</label>
                <input type="password" name="txtPassword" id="password">
            </p>
        </div>
        <p class="p-container">
            <input type="submit" name="submit" id="go" value="Chagne">
        </p>
    </form>
</body>
</html>