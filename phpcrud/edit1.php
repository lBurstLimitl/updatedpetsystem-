<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
$zz = $_POST['id'];
$i = $_POST['firstname'];
$a = $_POST['lastname'];
$b = $_POST['email'];
$c = $_POST['username'];
$d = sha1($_POST['password']);

include('connection.php');

$query = 'UPDATE users SET firstname="' . $i . '",
    lastname="' . $a . '", email="' . $b . '",
    username="' . $c . '", password="' . $d . '" WHERE
    id="' . $zz . '"';
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
?>
<script type="text/javascript">
    alert("Update Successful.");
    window.location = "index.php";
</script>
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "index.php";
		</script>
 </body>
</html>