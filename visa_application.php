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
			<h1>Registration</h1>
		</div>
	</div>

	<div class="container-fluid">
		<div class="container-fluid content col-md-10" style="padding-left: 210px;">
				<br/>
			
			
				<div class="row">
				<?php 
				if(isset($_POST['category'])){
				$category = $_POST['category'];
				?>
				<form class="form-horizontal" role="form" action='application.php' method="POST" enctype="multipart/form-data">	
				<div class="col-md-12">
					<div class="panel panel-default panel-primary">
						<div class="panel-heading">
							<h4>Profile Information</h4>
						</div>
						<div class="panel-body" style="padding-left:30px;">
							<div class="col-lg-12 forms">
								<h1>Visa Application</h1>
                    				<div class="alert alert-info alert-dismissable">
                      					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      					Supply the information needed below.
                    				</div> 
                			</div>
                      		<div class="form-group">
                        		<label>Category : 
                          			<input type="hidden" name="category" value="<?php echo $category;?>" class="category"> <?php echo $category;?>
                        		</label>
                      		</div>
                      		<div class="form-group">
                        		<label>Title</label>
                      		</div>
                     		 <div class="form-group">
                        		<label class="radio-inline">
                          			<input type="radio" name="title" value="Mr."> Mr.
                        		</label>
                        		<label class="radio-inline">
                          			<input type="radio" name="title"  value="Ms."> Ms.
                        		</label>
                        		<label class="radio-inline">
                          			<input type="radio" name="title" value="Mrs."> Mrs.
                        		</label>
                      		</div>
                      		<div class="form-group">
                        		<label>First Name</label>
                        		<input style="width: 845px;" class="form-control" name="firstname" required="required">
                      		</div>
                      		<div class="form-group">
                        		<label>Middle Name</label>
                        		<input style="width: 845px;" class="form-control" name="middlename" required="required">
                      		</div>
                      		<div class="form-group">
                        		<label>Last Name</label>
                        		<input style="width: 845px;" class="form-control" name="lastname" required="required">
                      		</div>
                      		<div class="form-group">
                        		<label>Gender</label>
                      		</div>
                      		<div class="form-group">
                        		<label class="radio-inline">
                          			<input type="radio" name="gender" value="Male"> Male
                        		</label>
                        		<label class="radio-inline">
                          			<input type="radio" name="gender"  value="Female"> Female
                        		</label>
                      		</div>
                      		<div class="form-group">
                        		<label>Date of Birth</label>
                        		<input style="width: 845px;" class="form-control" id = "inputDateIssueR" name="date" required="required">
                      		</div>
							
                      		<div class="form-group">
                        		<label>Nationality</label>
                        		<input style="width: 845px;" class="form-control" name="nationality" required="required">
                      		</div>
                      		<div class="form-group">
                        		<label>Complete Address</label>
                        		<input style="width: 845px;" class="form-control" name="address" required="required">
                      		</div>
                      		<div class="form-group">
                        		<label>Country of Birth</label>
                        		<input style="width: 845px;" class="form-control" name="country" required="required">
                      		</div>
                      		<div class="form-group">
                        		<label>Home Phone Number</label>
                        		<input style="width: 845px;" class="form-control" name="home" required="required">
                      		</div>
                      		<div class="form-group">
                        		<label>Mobile Phone Number</label>
                        		<input style="width: 845px;" class="form-control" name="mobile" required="required">
                      		</div>
                      		<div class="form-group">
                        		<label>E-Mail Address</label>
                        		<input style="width: 845px;" class="form-control" name="email" required="required">
                      		</div>
                      		<div class="form-group">
                        		<label>NSO</label>
                        		<input type="file" name="nso" required="required">
                      		</div>
                          <div class="form-group">
                            <label>IELTS Result</label>
                            <input type="file" name="ielts" required="required">
                          </div>
                          <div class="form-group">
                            <label>NBI Clearance</label>
                            <input type="file" name="nbi" required="required">
                          </div>
                      		<div class="form-group">
                        		<label>Picture</label>
                        		<input type="file" name="picture" required="required">
                      		</div>
                      		<div class="form-group">
                        		<label> Visa Status </label>
                      		</div>
                      		<div class="form-group">
                          		<select style="width: 845px;" class="form-control" name="status" required="required">
                          			<option value="Pending">Pending</option>
                          			<option value="Incomplete">Received(Incomplete)</option>
                          			<option value="Received">Received</option>
                          			<option value="Approved">Approved</option>
                          			<option value="Denied">Denied</option>
                        		</select>
                      		</div>
                         
                          <div class="form-actions text-center forms">
                            <input type="submit" class="btn btn-warning btn-md updateB" name="add" value="Insert"/>
                          </div>
                      	</div>
                    </div>
                </div>
				</form>
				<?php 
				}
				else if(isset($_POST['agreement'])){
				?>
				<div class="col-md-12">
					<div class="panel panel-default panel-primary">
						<div class="panel-heading">
							<h4>Profile Information</h4>
						</div>
						<form method="POST" action="visa_application.php" >
						<div class="panel-body" style="padding-left:30px;">
							<div class="col-lg-12 forms">
								<div class="form-group">
									<label>Category</label>
								</div>
								<div class="form-group">
									<label class="radio-inline">
										<input type="radio" name="category" value="Student" class="category"> Student
									</label>
									<label class="radio-inline">
										<input type="radio" name="category"  value="Tourist" class="category"> Tourist
									</label>
								</div>
								<div class="form-group">
									<input type="submit" name="submit" class="btn btn-info" value="Next">
								</div>
                			</div>
                      	</div>
						</form>
                    </div>
                </div>
				<?php 
				}
				else{
				?>
				<div class="col-md-12">
					<div class="panel panel-default panel-primary">
						<div class="panel-heading">
							<h4>Personnal Requirements</h4>
						</div>
						<form method="POST" action="visa_application.php" >
						<div class="panel-body" style="padding-left:30px;">
							<div class="forms">
								<label>Before proceeding the application make sure to get the following requirements...</label>
								</div>
								<ul>
									<li>Birth Certificate (NSO Certified)</li>
									<li>IELTS Result</li>
									<li>NBI Clearance</li>
								</ul>
								<div class="form-group" style="margin-bottom:5px;">
									<label>Upon Clicking the "Agree" Button you agree that all items above are now available...</label>
								</div>
								<div class="form-group">
									<input type="submit" name="agreement" class="btn btn-info" value="Agree">
								</div>
                			</div>
                      	</div>
						</form>
                    </div>
                </div>
				<?php
				}
				?>
            </div>
        </div>
        </div>
      
<?php
include('footer.html');
?>
    </div>
</body>

</html>
