<?php  
	include 'model/model.php';
	include 'libs/function.php';
	class Controller{
		public function handleRequest(){
			$model = new Model();
			$functionCommon = new FunctionCommon();
			$action = isset($_GET['action'])?$_GET['action']:'home';
			switch ($action) {
				case 'home':
					break;
				case 'register':
					if (isset($_POST['submit'])){
						$name = trim($_POST['name']);
						$email = trim($_POST['email']);
						$username = trim($_POST['username']);
						$password = trim(md5($_POST['password']));
						$created = date('Y-m-d', strtotime($_POST['date']));
						
						$avatar = 'default.png';
						$pathUpload = 'uploads/users/';
						if ($_FILES['avatar']['error'] == 0) {
							move_uploaded_file($_FILES['avatar']['tmp_name'], $pathUpload.$_FILES['avatar']['name']);
							$avatar = $_FILES['avatar']['name'];
						}

						$model = new Model();
						$errorExistUser = '';
						$checkExistUser = $model->checkExistUser($email, $username);
						if ($checkExistUser) {
							$errorExistUser = 'Exist email or username';
						}else
							{
								if ($model->addUser($name, $email, $username, $password, $created,$avatar) === True) {
									$functionCommon->redirectPage('index.php?action=register');
								}
							}
					}
					include 'view/register.php';
					break;
				case 'login':
						if (isset($_POST['submit'])) {
							$username = trim($_POST['username']);
							$password = trim(md5($_POST['password']));
							$model = new Model();
							$checklogin = $model->login($username, $password);
							if ($checklogin) {
								$login['username'] = $username;
								$_SESSION['login'] = $login;
								header("Location:index.php");
							}
							
						}
						include 'view/login.php';
						break;
				case 'chagne':
					if(isset($_POST['submit']))	{
						$email = trim($_POST['email']);
						$model = new Model;
						$checkemail = $model->chagnePass($email);
						if($checkemail){
							$chagnePass['email'] = $email;
							$_SESSION['chagnePass'] = $chagnePass;
							header("Location:index.php");
						}
					}
					include 'view/chagne.php';
					break;
				case 'logout':
						unset($_SESSION['login']);
						header("Location: index.php");
				case 'reset':
					include 'send_mail/resetpass.php';
				default:
					# code...
					break;
			}
		}
	}
?>