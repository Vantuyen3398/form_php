<?php  
    use PHPMailer\PHPMailer\PHPMailer;

    if (isset($_POST['email'])) {
        $email = trim($_POST['email']);
        $subject = $_POST['subject'];
        $body = $_POST['body'];
        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $mail = new PHPMailer();

        $mail -> isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "vantuyen3398@gmail.com";
        $mail->Password = 'Vantuyen130398';
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";

        //email setting

        $mail->isHTML(true);
        $mail->setFrom($email);
        $mail->addAddress("Vantuyen3398@gmail.com");
        $mail->Subject = ("$email($subject)");
        $mail->Body = $body;

        if ($mail->send()) {
            $response = "Email is sent!";
        }
        else
        {
            $status = "failed";
            $response = "Somthing is wrong:<br>" . $mail->ErrorInfo;
        }

        exit(json_encode(array("status" => $status, "response" => $response)));
    }
?>