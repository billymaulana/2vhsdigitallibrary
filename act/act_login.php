<?php 
require '../config/database.php';
session_start();


echo $username=$_POST['username'];
echo $password=$_POST['password'];

if ($_GET['type']=='user') {
			
		$pdo = Con::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM tb_user where username = ? AND password = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($username,$password));
		$data = $q->fetch(PDO::FETCH_ASSOC);
		Con::disconnect();

		if ($data==NULL) {
			header('location: ../index.php?notif=WrongPassword');

		}else
		{
			$user=$_SESSION['user']=$data['username'];
			echo $data['id_user'];
			echo $user;
			header('location: ../index.php?id='.$data['id_user'].'');
			}

}elseif ($_GET['type']=='admin') {

		$pdo = Con::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM tb_admin where username = ? AND password = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($username,$password));
		$data = $q->fetch(PDO::FETCH_ASSOC);
		Con::disconnect();

		if ($data==NULL) {
			header('location: ../adminlogin.php?notif=WrongPassword');

		}else
		{
			$user=$_SESSION['user']=$data['username'];
			echo $data['id_admin'];
			echo $user;
			header('location: ../admin.php?id='.$data['id_admin'].'');
			}
}


?>