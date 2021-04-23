<?php  
	// $members = array();
				$file = 'uploads/user.txt';
				if (file_exists($file)) {
					$r = fopen($file, "r");
					while (!feof($r)) {
						$row = fgets($r);
						if (!empty($row)) {
							$members[] = explode("|", $row);
						}
					}
				}
				echo '<pre>';
				print_r($members);
				die();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<table border = "1">
		<tr>
			<td>stt</td>
			<td>name</td>
			<td>email</td>
			<td>username</td>
			<td>pass</td>
			<td>date</td>
			<td>avatar</td>
		</tr>
		<?php  
			if (isset($members)) {
				foreach ($members as $key => $item) {
		?>
			<tr>
				<td><?php echo ($key );?></td>
				<td><?php echo $item[0];?></td>
				<td><?php echo $item[1];?></td>
				<td><?php echo $item[2];?></td>
				<td><?php echo $item[3];?></td>
				<td><?php echo $item[4];?></td>
				<td><?php echo $item[5];?></td>
			</tr>
			<?php
			}
		}
			?>
	</table>
	
</body>
</html>