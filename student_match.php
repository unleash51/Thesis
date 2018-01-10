<?php
	if ($_POST['request']) {
			  $request = $_POST['request'];
			  include 'db_connect.php';
              $conn = new PDO("mysql:host=".$servername.";dbname=".$dbname, $dbusername, $dbpassword);
              $query = 'SELECT school_name, school_address, school_contact FROM school_details WHERE school_country ='$request'';
              $result = mysqli_query($conn, $query);

              echo '<table class="table table-hover">';
              echo '<thead>'
              echo '<tr class="alert-info">';
              echo '<th>School Name</th>';
              echo '<th>Address</th>';
              echo '<th>Country</th>';
              echo '<th>Contact Number</th>';
              echo '</tr>';
              echo '</thead>';  
              echo '<tbody>';

              while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';   
                          echo '<td>'.$row['school_name'] . '</td>';
                          echo '<td>'.$row['school_address'] . '</td>';
                          echo '<td>'.$row['school_country'] . '</td>';
                          echo '<td>'.$row['school_contact']. '</td>';
              }
              echo '</table>';
              mysqli_close($conn);
	}
?>