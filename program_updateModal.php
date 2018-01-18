<?php 
	$id = $_POST['id'];

	if( !empty($id)){
		
		include('database.php');
		include('db_connect.php');
						
		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM courses inner join school_details on courses.school_id=school_details.school_id  WHERE ID = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($id));
		$data = $q->fetch(PDO::FETCH_ASSOC);

		echo '<input type="hidden" class="form-control" value="'.$id.'" name="id">';
		
		echo '<div class="form-group">
				<label for="modalProgram">Program</label>
				<input type="text" class="form-control" required="required" id="modalProgram" name="Course" placeholder="Enter Program of Choice" value="'.$data['course'].'">
			  </div>';

		echo '<div class="form-group">
				<label for="modalCountry">Country</label>
				<select style="width: 560px;" class="form-control" id="modalCountry" name="Category" required="required" placeholder="Enter Country" value="'.$data['category'].'">
                                <<option value="Post Graduate">Post Graduate</option>
                              <option value="Skills Practicum Certificate">Skills Practicum Certificate</option>
                              <option value="vocational">Vocational</option>
                              <option value="graduate studies">Graduate Studies</option>
                 </select>
			  </div>';

		echo '<div class="form-group">
				<label for="modalSchool">School</label>
				<input type="text" class="form-control" required="required" id="modalSchool" name="School" placeholder="Enter School Name" value="'.$data['school_name'].'" disabled>
			  </div>';
		
		echo '<div class="form-group">
				<label for="modalTuition">Tuition</label>
				<input type="text" class="form-control" required="required" id="modalTuition" name="Tuition" placeholder="Enter Tuition" value="'.number_format((integer)($data['tuition']), 2, '.', '').'">
			  </div>';
	
	}else{
		echo 'No selected item';
	}
	
?>
