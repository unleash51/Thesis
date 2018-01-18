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

<script type="text/javascript">

	$(document).ready(function()
		{
	$('[data-toggle="tooltip"]').tooltip();
	$('.btn').tooltip();
		});
	
function myFunction() 
{
var input, filter, table, tr, td, i;
input = document.getElementById("myInput");
filter = input.value.toUpperCase();
table = document.getElementById("myTable");
tr = table.getElementsByTagName("tr");
  
for (i = 0; i < tr.length; i++) 
  {
td = tr[i].getElementsByTagName("td")[0];
  if (td) 
  	{
    if (td.innerHTML.toUpperCase().indexOf(filter) > -1) 
    	{
        	tr[i].style.display = "";
    	}else 
    		{
        		tr[i].style.display = "none";
      		}
    }       
  }
}

</script>

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
				<strong>School List&nbsp;&nbsp;&nbsp; 
					
					<?php
						 if(isset($_REQUEST['error']) && $_REQUEST['error'] == "updatesuccess")
                  		 {
                    		
                    		echo "<span style='color:yellow;'>Update Successfully.</span>";

                  		 }else if(isset($_REQUEST['error']) && $_REQUEST['error'] == "deletesuccess")
                  			{
						
							echo "<span style='color:red;'>Delete Successfully.</span>";
							
							}else if(isset($_REQUEST['error']) && $_REQUEST['error'] == "addsuccess")
                  				{
						
								echo "<span style='color:green;'>Successfully Added.</span>";
							
								}
					?>
					
				</strong>
				
		</div>

		<br>
			<input style="margin-left: 10px; width: 250px;" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in" style="width: 3in">
		

		<div class="panel-body" style="margin:0 5%;">
			<div class="table-responsive">
				<table class="table table-hover" id="myTable">
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
							$sql = 'SELECT * FROM school_details ORDER BY school_id';
							foreach ($conn->query($sql) as $row) {
							echo '<tr>';
                    			echo '<td>'.$row['school_name'] . '</td>';
                    			echo '<td>'.$row['school_address'] . '</td>';
                    			echo '<td>'.$row['school_country']. '</td>';
                    			echo '<td>'.$row['school_contact']. '</td>';
								echo '<td class="text-center">
										<button id="update" type="button" class="btn btn-warning btn-md updateB" rel="tooltip" title="Update Item" data-toggle="modal" data-target="#updateModal" value="'.$row['school_id'].'"><span class="glyphicon glyphicon-pencil"></span></button> 
										<button style="margin-top:5px;" class="btn btn-danger btn-md deleteB" value="'.$row['school_id'].'" data-toggle="modal" data-target="#myModal2" rel="tooltip" title="Delete" name="delete"><span class="glyphicon glyphicon-trash"></span></button>
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