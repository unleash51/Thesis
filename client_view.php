<!DOCTYPE html>
<html lang="en">
<body>
<?php 
include 'connect.php';
include('header_ipsmc.php'); 
?>
<style>
#myInput {
  background-image: url('./img/1.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

</style>
<script>
$(document).ready(function(){
$('[data-toggle="tooltip"]').tooltip();
$('.btn').tooltip();

	$(".updateB").click(function(){
		var id = $( this ).val();
        console.log(id);
		$.ajax({
			type:"post",
			url:"client_updateModal.php",
			data:"id="+id,
			success:function(data){
				$("#updateDisplayContent").html(data);
			}
		});
	});
});

function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[4];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

<div class="container-fluid page_title_container">
	<div>
		<h1>List</h1>
	</div>
</div>


<div class="container-fluid content">
	<br>
	<div class="panel panel-primary">
		<div class="panel-heading content">
				<strong>Visa Applicants List&nbsp;&nbsp;&nbsp;</strong>
		</div>
		<br>

		<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in" style="width: 3in">

		<div class="panel-body" style="margin:0 5%;">
			<div class="table-responsive">
				<table class="table table-hover" id="myTable">
					<thead>
						<tr class="alert-info">
                                <th>Client ID</th>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Last Name</th>
                                <th>Visa Status</th>
							<th class="text-center">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
							include 'db_connect.php';
                            $conn = new PDO("mysql:host=".$servername.";dbname=".$dbname, $dbusername, $dbpassword);
							$sql = 'SELECT applicantsid, firstname, middlename, lastname, status FROM visa_application ORDER BY applicantsid';
							foreach ($conn->query($sql) as $row) {
								echo '<tr>';
								echo '<td>'.$row['applicantsid'].'</td>';
                    			echo '<td>'.$row['firstname'] . '</td>';
                    			echo '<td>'.$row['middlename'] . '</td>';
                    			echo '<td>'.$row['lastname']. '</td>';
                    			echo '<td>'.$row['status']. '</td>';
								echo '<td class="text-center">
										<a class="btn btn-warning btn-md" href="client_update.php?id='.$row['applicantsid'].'" data-toggle="tooltip" title="Update"><span class="glyphicon glyphicon-edit"></span></a>
									  </td>';
								echo '</tr>';
							}
							?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	
</div>

<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document" style="margin-top:5%;">
		<div class="modal-content">
			<div class="modal-header btn-warning">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Update Applicant's Status</h4>
			</div>
			
			<form class="form-horizontal" role="form" action='client_update.php' method="POST">
			
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

<?php

include('footer.html');
?>
</div>
</body>
</html>