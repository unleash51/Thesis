<?php 
	$id = $_POST['id'];
	if( !empty($id)){
		include 'db_connect.php';
						
		//Getting the REGISTRATION ID from ITEM Table
		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM addingschool WHERE ID = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($id));
		$data = $q->fetch(PDO::FETCH_ASSOC);
		echo '<input type="hidden" class="form-control" value="'.$id.'" name="id">';
		echo '<div class="form-group">
				<label for="modalSchool">School</label>
				<input type="text" class="form-control" required="required" id="modalSchool" name="school" placeholder="Enter School Name" value="'.$data['School'].'">
			  </div>';
		echo '<div class="form-group">
				<label for="modalAddress">Address</label>
				<input type="text" class="form-control" required="required" id="modalAddress" name="address" placeholder="Enter School Address" value="'.$data['Address'].'">
			  </div>';
		echo '<div class="form-group">
				<label for="modalCountry">Country</label>
				<input type="text" class="form-control" required="required" id="modalCountry" name="country" placeholder="Enter Country" value="'.$data['Country'].'">
			  </div>';
		echo '<div class="form-group">
				<label for="modalContact">Contact Number</label>
				<input type="text" class="form-control" required="required" id="modalContact" name="contact" placeholder="Enter Contact Number" value="'.$data['Contact'].'">
			  </div>';
	
	}else{
		echo 'No selected item';
	}
	
?>
