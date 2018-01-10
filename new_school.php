<!DOCTYPE html>
<html lang="en">
<?php 
include('header_ipsmc.php'); 
?>
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script type="text/javascript">
// When the document is ready
$(document).ready(function () {
	$('#inputDateIssueR').datepicker({
		format: "yyyy-mm-dd"
	});  
										
});
</script>
<body>

	<!-- PAGE TITLE -->
	<div class="container-fluid page_title_container">
		<div>
			<h1>Register New School</h1>
		</div>
	</div>

	<div class="container-fluid">
		<div class="container-fluid content col-md-10" style="padding-left: 210px;">
				<br/>
			
			
				<div class="row">
				
				<form class="form-horizontal" role="form" action='create_school.php' method="POST">	
				<div class="col-md-12">
					<div class="panel panel-default panel-primary">
						<div class="panel-heading">
							<h4>School Information</h4>
						</div>
						<div class="panel-body" style="padding-left:30px;">
							<div class="col-lg-12 forms">
								<h1>School Application</h1>
                    				<div class="alert alert-info alert-dismissable">
                      					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      					Supply the information needed below.
                    				</div> 
                			</div>
                      		<div class="form-group">
                        		<label>School Name</label>
                        		<input class="form-control" name="school" required="required">
                      		</div>
                      		<div class="form-group">
                        		<label>School Address</label>
                        		<input class="form-control" name="address" required="required">
                      		</div>
                      		<div class="form-group">
                        		<label>Country Located</label>
                        		<input class="form-control" name="country" required="required">
                      		</div>
                          <div class="form-group">
                            <label>Contact Number</label>
                            <input class="form-control" name="contact" required="required">
                          </div>
                          <div class="form-actions text-center forms">
                            <input type="submit" class="btn btn-warning btn-md updateB" name="add" value="Insert"/>
                          </div>
                      	</div>
                    </div>
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