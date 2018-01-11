<?php 
include('header_ipsmc.php'); 
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
				<strong>School List&nbsp;&nbsp;&nbsp;</strong>
				
		</div>

		<div class="panel-body" style="margin:0 5%;">
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr class="alert-info">
                                <th>School</th>
                                <th>Address</th>
                                <th>Country</th>
                                <th>Contact Number</th>
							<th class="text-center">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
							include 'db_connect.php';
                            $conn = new PDO("mysql:host=".$servername.";dbname=".$dbname, $dbusername, $dbpassword);
							$sql = 'SELECT * FROM addingSchool ORDER BY ID';
							foreach ($conn->query($sql) as $row) {
							echo '<tr>';
                    			echo '<td>'.$row['School'] . '</td>';
                    			echo '<td>'.$row['Address'] . '</td>';
                    			echo '<td>'.$row['Country']. '</td>';
                    			echo '<td>'.$row['Contact']. '</td>';
								echo '<td class="text-center">
										<button id="update" type="button" class="btn btn-warning btn-md updateB" rel="tooltip" title="Update Item" data-toggle="modal" data-target="#updateModal" value="'.$row['ID'].'"><span class="glyphicon glyphicon-pencil"></span></button>
										<button class="btn btn-danger btn-md deleteB" value="'.$row['ID'].'" data-toggle="modal" data-target="#myModal2" rel="tooltip" title="Delete" name="delete"><span class="glyphicon glyphicon-trash"></span></button>
									  </td>';
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
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document" style="margin-top:5%;">
		<div class="modal-content">
			<div class="modal-header btn-warning">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Update School Details</h4>
			</div>
			
			<form class="form-horizontal" role="form" action='school_update.php' method="POST">
			
			<div class="modal-body content" style="margin:0 20px;" id="updateDisplayContent">

			</div>
			
			<div class="modal-footer">
				<button type="submit" class="btn btn-warning">Save</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
			
			</form>
		</div>
	</div>
</div>

<script id="source" language="javascript" type="text/javascript">
$(document).ready(function(){
	
	$(".updateB").click(function(){
		var id = $( this ).val();
        console.log(id);
		$.ajax({
			type:"post",
			url:"school_updateModal.php",
			data:"id="+id,
			success:function(data){
				$("#updateDisplayContent").html(data);
			}
		});
	});
});
</script>

<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document" >
    <div class="modal-content" style="margin-top:10%;">
      <div class="modal-header btn-danger">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Delete Registration</h4>
      </div>
      
      <form class="form-horizontal" action="delete_school.php" method="post">
      
      <div class="modal-body content">
        <input type="hidden" name="id" id="deleteTextField"/>
        <div class="alert alert-danger" role="alert">Are you sure you want to remove this program from the system?</div>
      </div>
      
      <div class="modal-footer">
      	<button type="submit" class="btn btn-danger">Delete</button>
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
});
</script>
<?php
include('footer.html');
?>
</div>
</body>
</html>