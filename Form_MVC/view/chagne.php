<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <link rel="stylesheet" href="../css/chagne.css">
</head>
<body>
    <form action="index.php?action=chagne" method="POST">
        <h1>Forgot password</h1>
        <div class="inset">
            <p>
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
            </p>
        </div>
        <p class="p-container">
            <input type="submit" onclick="sendEmail()" name="submit" id="go" value="Send">
        </p>
    </form>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script type="text/javascript">
        function sendEmail(){
            var email = $("#email");
            var sublect = $("#subject");
        }
    </script>
</body>
</html>