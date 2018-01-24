<?php		
require '../config/database.php';

echo $username=$_POST['username'];
echo $password=$_POST['password'];
echo $email=$_POST['email'];
echo $sec_que1=$_POST['sec_que1'];
echo $sec_que2=$_POST['sec_que2'];
echo $address=$_POST['address'];
echo $class=$_POST['class'];
echo $gender=$_POST['gender'];
echo $first_name=$_POST['firstName'];
echo $last_name=$_POST['lastName'];

	$pdo = con::connect();
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "INSERT INTO `db_perpustakaan`.`tb_user` 
		(`id_user`, `username`, `password`, `email`, `sec_que1`, `sec_que2`, `address`, `class`, `gender`, `first_name`, `last_name`) VALUES 
		(NULL, 
		?,?,?,?,?,?,?,?,?,?);";
	$q = $pdo->prepare($sql);
	$q->execute(array($username,$password,$email,$sec_que1,$sec_que2,$address,$class,$gender,$first_name,$last_name));
	con::disconnect();
	header("Location: ../formulir.php?notif=RegSuccess");

?>