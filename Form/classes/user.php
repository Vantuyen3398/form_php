<?php  
	/**
	 * 
	 */
	class User
	{
		function insertUser(){
			$name = trim($_POST['txtName']);
			$email = trim($_POST['txtEmail']);
			$username = trim($_POST['txtUsername']);
			$pass = trim(md5($_POST['txtPassword']));
			$date = trim($_POST['txtDate']);
			$avatar = trim($_POST['txtAvatar']);
			
			if (empty($name) || empty($email) || empty($username) || empty($pass) || empty($pass) || empty($date) || empty($avatar)) {
				$alert = "<span class='success'>Fields must be not empty</span>";
				return $alert;
			}else{
				$file = 'uploads/user.txt';
				if (file_exists($file)) {
					$a = fopen($file, "a");
					fwrite($a, $name."|".$email."|".$username."|".$pass."|".$date."|".$avatar."\r\n");
					fclose($a);
				}
				// $alert = "<span class='success'>User Created SuccessFully</span>";
				// return $alert;
				header('Location:http://localhost:8080/Form/login.php');
			}
		}
		function loginUser(){
			$username = trim($_POST['txtUsername']);
			$pass = trim(md5($_POST['txtPassword']));

			if (empty($username) || empty($pass)) {
				$alert = "<span class='success'>Fields must be not empty</span>";
				return $alert;
			}else{
				$file = 'uploads/user.txt';
				if (file_exists($file)) {
					$r = fopen($file, "r");
					while (!feof($r)) {
						$row = fgets($r);
						if (!empty($row)) {
							$members = explode("|", $row);
							// echo $members[2];
							// echo $members[3];
							if ($members[2] == $username && $members[3] == $pass) {
								// $alert = "<span class='success'>SuccessFully</span>";
								// return $alert;
							}
						}	
					}
					fclose($r);	
				}
			}
		}

		function Changepass(){
			$email = trim($_POST['txtEmail']);
			if (empty($email)) {
				$alert = "<span class='success'>Fields must be not empty</span>";
				return $alert;
			}else{
				$file = 'uploads/user.txt';
				if (file_exists($file)) {
					$r = fopen($file, "r");
					while (!feof($r)){
						$row = fgets($r);
						if (!empty($row)) {
							$arr = explode("|", $row);
							echo $arr[1];
							if ($arr[1] == $email) {
								header('Location:http://localhost:8080/Form/chagnepass.php');

							}
						}
					}
				}
			}
		}

	}
	
?>