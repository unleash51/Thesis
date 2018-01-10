<?php 
	$id = $_POST['id'];

	if( !empty($id)){
		
		include('database.php');
		include('db_connect.php');
						
		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT status FROM visa_application WHERE applicantsid = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($id));
		$data = $q->fetch(PDO::FETCH_ASSOC);
		echo '<input type="hidden" class="form-control" value="'.$id.'" name="id">';
		echo '<div class="form-group">
				<label for="modalStatus">Status</label>
				<input type="text" class="form-control" required="required" id="modalStatus" name="status" placeholder="Enter Client Status" value="'.$data['status'].'">
			  </div>';
	
	}else{
		echo 'No selected item';
	}
	
?>
