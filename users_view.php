<?php 
include 'connect.php';
include('header_ipsmc.php'); 
print_r($_POST);

if(isset($_POST['disablethis'])){
	$disableuser = $_POST['disablethis'];
	$resultsql = "UPDATE `users` SET `disable` = '1' WHERE `users`.`userid` = '".$disableuser."'";
	$result1 = mysqli_query($con,$resultsql);
}
else if(isset($_POST['enablethis'])){
	$enableuser = $_POST['enablethis'];
	$resultsql = "UPDATE `users` SET `disable` = '0' WHERE `users`.`userid` = '".$enableuser."'";
	$result1 = mysqli_query($con,$resultsql);
	
}
?>

<!DOCTYPE html>
<html lang="en">
<body>
<!-- MAIN PAGE -->
<div class="container-fluid page_title_container">
	<div>
		<h1>List</h1>
	</div>
</div>

<div class="container-fluid content">
	<br>
	<div class="panel panel-primary">
		<div class="panel-heading content">
				<strong>Users List&nbsp;&nbsp;&nbsp;</strong>
				
		</div>
		<div class="panel-body" style="margin:0 5%;">
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr class="alert-info">
                            <th>Name</th>
                            <th>Username</th>
                            <th>E-mail</th>
                            <th>Password</th>
                            <th>User Type</th>
							<th class="text-center">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
							include 'db_connect.php';
                            $conn = new PDO("mysql:host=".$servername.";dbname=".$dbname, $dbusername, $dbpassword);
							$sql = 'SELECT * FROM users ORDER BY userid';
							foreach ($conn->query($sql) as $row) {
							echo '<tr>';
								echo '<td>'. $row['fullname'] . '</td>';
								echo '<td>'. $row['username'] . '</td>';
                                echo '<td>'. $row['email'] . '</td>';
								echo '<td>'.$row['password']. '</td>';
                                echo '<td>'.$row['usertype']. '</td>';
								echo '<td class="text-center">
								<button class="btn btn-danger btn-md deleteB" value="'.$row['userid'].'" data-toggle="modal" data-target="#myModal2" rel="tooltip" title="Delete" name="delete"><span class="glyphicon glyphicon-trash"></span></button>';
								$disabled = $row['disable'];
								if($disabled == "0"){
									echo '&nbsp; <button class="btn btn-danger btn-md disablebtn" value="'.$row['userid'].'" data-toggle="modal" data-target="#myModal3" rel="tooltip" title="Disable" name="disable"><span class="glyphicon glyphicon-ban-circle"></span></button>';
								}
								else{
									echo '&nbsp; <button class="btn btn-success btn-md enablebtn" value="'.$row['userid'].'" data-toggle="modal" data-target="#myModal4" rel="tooltip" title="Enable" name="enable"><span class="glyphicon glyphicon-ok-circle"></span></button>';
								}		
								echo '</td>';
								echo '</tr>';
							}
							?>
							</td></tr>							
							<script>
								$(document).ready(function(){
									$('[data-toggle="tooltip"]').tooltip();
									$('.btn').tooltip();
								});
							</script>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	
</div>

<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document" >
    <div class="modal-content" style="margin-top:10%;">
      <div class="modal-header btn-danger">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Delete Registration</h4>
      </div>
      
      <form class="form-horizontal" action="delete_users.php" method="post">
      
      <div class="modal-body content">
        <input type="hidden" name="id" id="deleteTextField"/>
        <div class="alert alert-danger" role="alert">Are you sure you want to remove this user from the system?</div>
      </div>
      
      <div class="modal-footer">
      	<button type="submit" class="btn btn-danger">Delete</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document" >
    <div class="modal-content" style="margin-top:10%;">
      <div class="modal-header btn-danger">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Disable User Access</h4>
      </div>
      
      <form class="form-horizontal" action="users_view.php" method="post">
      
      <div class="modal-body content">
        <input type="hidden" name="disablethis" id="disablethis"/>
        <div class="alert alert-danger" role="alert">Are you sure you want to disable the access of this user from the system?</div>
      </div>
      
      <div class="modal-footer">
      	<button type="submit" class="btn btn-danger">Disable</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document" >
    <div class="modal-content" style="margin-top:10%;">
      <div class="modal-header btn-danger">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Enable User Access</h4>
      </div>
      
      <form class="form-horizontal" action="users_view.php" method="post">
      
      <div class="modal-body content">
        <input type="hidden" name="enablethis" id="enablethis"/>
        <div class="alert alert-danger" role="alert">Are you sure you want to enable the access of this user from the system?</div>
      </div>
      
      <div class="modal-footer">
      	<button type="submit" class="btn btn-danger">Enable</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        
      </div>
      </form>
    </div>
  </div>
</div>
<script>
$(document).ready(function(){
	$('.deleteB').click(function(){
		var value = $( this ).val();
		console.log(value);
		$('#deleteTextField').val(value);
	}); 
	
	$('.enablebtn').click(function(){
		var value = $( this ).val();
		console.log(value);
		$('#enablethis').val(value);
	});
	
	$('.disablebtn').click(function(){
		var value = $( this ).val();
		console.log(value);
		$('#disablethis').val(value);
	});
});
</script>
<?php
include('footer.html');
?>
</div>
</body>
</html>