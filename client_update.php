<?php
	include('successful_login.php');
	require 'database.php';
	require 'db_connect.php';
	$id = null;
	if ( !empty($_GET['id'])) {
		$id = $_REQUEST['id'];
	}

	if ( null==$id) {
		header("Location: client_view.php");
	} else {
		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT applicantsid, firstname, middlename, lastname, status FROM visa_application where applicantsid = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($id));
		$data = $q->fetch(PDO::FETCH_ASSOC);

		Database::disconnect();
	}
?>

<!DOCTYPE html>
<body>
	<?php
		include('header_ipsmc.php');
	?>

	<div class="container-fluid page_title_container">
		<div>
			<h1>Update Visa Status</h1>
		</div>
	</div>

	<div class="container-fluid">
		<div class="container-fluid content col-md-10" style="padding-left: 210px;">
			<br>
				<div class="panel panel-primary">
					<div class="panel-heading content">
						<strong>Update client's status here</strong>
					</div>
					<div class="panel-body" style="padding-left: 30px;">
						<div class="col-lg-11 forms">
							<form class="form-horizontal" role="form" 		action='updateClient.php?id=<?php echo $id?>' method="POST">
								<div class="col-lg-7 forms">
									<?php
										$pdo = Database::connect();
										$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
										$sql = "SELECT applicantsid, firstname, middlename, lastname, status FROM visa_application where applicantsid = ?";
										$q = $pdo->prepare($sql);
										$q->execute(array($data['applicantsid']));
										$dataOrg = $q->fetch(PDO::FETCH_ASSOC);

										Database::disconnect();
									?>

									<div class="form-group">
										<label>First Name<span style="font-size: smaller;color: red"> (cannot be edited)</span></label>
										<div class="input-group">
											<input type="text" class="form-control" required="required" id="fname" name="fname" placeholder="First Name" value="<?php echo $dataOrg['firstname'];?>" readonly>
										</div>
									</div>

									<div class="form-group">
										<label>Middle Name<span style="font-size: smaller;color: red"> (cannot be edited)</span></label>
										<div class="input-group">
											<input type="text" class="form-control" required="required" id="mname" name="mname" placeholder="Middle Name" value="<?php echo $dataOrg['middlename'];?>" readonly>
										</div>
									</div>

									<div class="form-group">
										<label>Last Name<span style="font-size: smaller;color: red"> (cannot be edited)</span></label>
										<div class="input-group">
											<input type="text" class="form-control" required="required" id="lname" name="lname" placeholder="Last Name" value="<?php echo $dataOrg['lastname'];?>" readonly>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label">Visa Status</label>
										<select class="form-control" required="required" id="status" name="status" value="<?php echo $data['status'];?>">
											<option></option>
											<option <?php if($data['status'] == 'Pending')echo 'selected="selected"'; ?> value="Pending">Pending</option>
											<option <?php if($data['status'] == 'Received/Incomplete')echo 'selected="selected"'; ?> value="Received/Incomplete">Received/Incomplete</option>
											<option <?php if($data['status'] == 'Received')echo 'selected="selected"'; ?> value="Received">Received</option>
											<option <?php if($data['status'] == 'Approved')echo 'selected="selected"'; ?> value="Approved">Approved</option>
											<option <?php if($data['status'] == 'Denied')echo 'selected="selected"'; ?> value="Denied">Denied</option>
										</select>
									</div>

									<div class="form-actions text-center forms">
										<input type="submit" class="btn btn-warning btn-md updateB" name="add" value="Update"/>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
		</div>
	</div>
</body>
</html>