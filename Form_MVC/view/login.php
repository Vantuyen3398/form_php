<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <form action="index.php?action=login" method="POST">
        <h1>Employer Log in</h1>
        <div class="inset">
            <p>
                <label for="email">UserName</label>
                <input type="text" name="username" id="email">
            </p>
            <p>
                <label for="password">PassWord</label>
                <input type="password" name="password" id="password">
            </p>
        </div>
        <p class="p-container">
            <a href="resetpasswork.php"><span>Forgot password ?</span></a>
            <input type="submit" name="submit" id="go" value="Log in">
        </p>
    </form>
</body>
</html>