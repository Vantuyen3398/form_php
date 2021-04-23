
<?php  
    include 'classes/user.php';
    $us = new User();
?>
<?php  
    if (isset($_POST['submit'])) {
        $chagne = $us->Changepass($_POST);
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/reset.css">
</head>
<body>
    <form action="" method="POST">
        <h1>Forgot password</h1>
        <?php  
            if(isset($chagne)){
                echo $chagne;
            }
        ?>
        <div class="inset">
            <p>
                <label for="email">Email</label>
                <input type="text" name="txtEmail" id="email">
            </p>
        </div>
        <p class="p-container">
            <input type="submit" name="submit" id="go" value="Send">
        </p>
    </form>
</body>
</html>