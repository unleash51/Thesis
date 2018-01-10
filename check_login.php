<?php
include('database.php');
$tbl_name="users"; 

session_start();
{
    $user=mysql_real_escape_string($_POST['username']);
    $pass=mysql_real_escape_string($_POST['password']);

    $pdo = Database::connect();
    $q = $pdo->prepare("SELECT * FROM users WHERE username = ? AND password = ? AND disable='0'");
    $q->execute(array($user, $pass));
    $row = $q->fetch(PDO::FETCH_ASSOC);
    print_r($row);
	
	$user_id = $row['userid'];
	$fullname = $row['fullname'];
	echo "$user_id";
    if($row != null)
    {
    $_SESSION['login_username']=$user;
	$_SESSION['fullname']=$fullname;
	$_SESSION['user_id'] = $user_id;
        header("Location:home.php"); 
    }
    else
    {
		 
		$q2 = $pdo->prepare("SELECT * FROM users WHERE username = ? AND password = ? AND disable='1'");
		$q2->execute(array($user, $pass));
		$q2 = $q2->fetch(PDO::FETCH_ASSOC);
		if($q2 != null)
		{
			header('Location:index.php?error=disabled');  
		}
		else{
			header('Location:index.php?error=wrongpass'); 
		}
    }

}
?>