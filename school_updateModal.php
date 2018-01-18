<?php 
	$id = $_POST['id'];
	if( !empty($id)){
		include 'db_connect.php';
						
		//Getting the REGISTRATION ID from ITEM Table
		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM school_details WHERE school_id = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($id));
		$data = $q->fetch(PDO::FETCH_ASSOC);
		echo '<input type="hidden" class="form-control" value="'.$id.'" name="id">';
		echo '<div class="form-group">
				<label for="modalSchool">School</label>
				<input type="text" class="form-control" required="required" id="modalSchool" name="school" placeholder="Enter School Name" value="'.$data['school_name'].'">
			  </div>';

		echo '<div class="form-group">
				<label for="modalAddress">Address</label>
				<input type="text" class="form-control" required="required" id="modalAddress" name="address" placeholder="Enter School Address" value="'.$data['school_address'].'">
			  </div>';

		echo '<div class="form-group">
				<label for="modalCountry">Country</label>
				<input style="width: 560px;" class="form-control" id="modalCountry" name="country" required="required" placeholder="Enter Country" value="'.$data['school_country'].'">
			  </div>';
			  
		echo '<div class="form-group">
				<label for="modalContact">Contact Number</label>
				<input type="text" class="form-control" required="required" id="modalContact" name="contact" placeholder="Enter Contact Number" value="'.$data['school_contact'].'">
			  </div>';
	
	}else{
		echo 'No selected item';
	}
	
?>
