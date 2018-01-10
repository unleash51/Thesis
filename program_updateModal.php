<?php 
	$id = $_POST['id'];

	if( !empty($id)){
		
		include('database.php');
		include('db_connect.php');
						
		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM addingprograms WHERE ID = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($id));
		$data = $q->fetch(PDO::FETCH_ASSOC);
		echo '<input type="hidden" class="form-control" value="'.$id.'" name="id">';
		echo '<div class="form-group">
				<label for="modalSchool">School</label>
				<input type="text" class="form-control" required="required" id="modalSchool" name="school" placeholder="Enter School Name" value="'.$data['School'].'">
			  </div>';
		echo '<div class="form-group">
				<label for="modalCountry">Country</label>
				<input type="text" class="form-control" required="required" id="modalCountry" name="country" placeholder="Enter Country Name" value="'.$data['Country'].'">
			  </div>';
		echo '<div class="form-group">
				<label for="modalProgram">Program</label>
				<input type="text" class="form-control" required="required" id="modalProgram" name="program" placeholder="Enter Program of Choice" value="'.$data['Program'].'">
			  </div>';
		echo '<div class="form-group">
				<label for="modalTuition">Tuition</label>
				<input type="text" class="form-control" required="required" id="modalTuition" name="tuition" placeholder="Enter Tuition" value="'.number_format((integer)($data['Tuition']), 2, '.', '').'">
			  </div>';
	
	}else{
		echo 'No selected item';
	}
	
?>
