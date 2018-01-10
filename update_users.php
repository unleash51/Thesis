<?php
if(isset($_POST['update'])) {
    
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "ipsmcis_db";
    
    $connect = mysqli_connect($hostname, $dbusername, $password, $dbname);

    $id = $_POST['userid'];
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];;
    $usertype = $_POST['usertype'];
    
    $query1 = mysql_query("SELECT * from users", $connect);
    while ($row = mysql_fetch_array($query1)) {
    echo "<b><a href='update_users.php?update={$row['fullname']}'>{$row['username']}'>{$row['email']}'>{$row['password']}'>{$row['usertype']}</a></b>";
    echo "<br />";
    }
    
    $query = "UPDATE users SET fullname='".$fullname."',username='".$username."',email='".$email."', password='".$password."', usertype='.$usertype WHERE id = $userid";
    
    $result = mysqli_query($connect, $query);
    
    if($result) {
        echo 'Data updated';
    } else {
        echo 'Data not updated';
    }
    
}

?>

