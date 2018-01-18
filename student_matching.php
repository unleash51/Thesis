<?php 
include 'db_connect.php'; 
include('header_ipsmc.php');
?>

<!DOCTYPE html>
<html lang="en">
<body>
<script>
$(document).ready( function() {
	$('#formdiv').on('submit', '.data_form', function (e) {
			e.preventDefault();
			$.ajax({
				type: 'POST',
				url: 'student_matching_ajax.php',
				data: $(this).serialize(),
				success: function (data, status) {
					$("#ajaxresult").html(data);
				}
			});
	});
	
});
</script>
	<!-- PAGE TITLE -->
	<div class="container-fluid page_title_container">
		<div>
			<h1>Student Matching</h1>
		</div>
	</div>

  <div class="container-fluid">
    <div class="container-fluid content col-md-10" style="padding-left: 210px;">
      <br>
        <div class="panel panel-primary">
          <div class="panel-heading content">
            <strong>Match your credentials here</strong>
          </div>
          <div class="panel-body" style="padding-left: 30px;">
            <div class="col-lg-11 forms" id="formdiv">
              <form method="POST" role="form" action="student_matching.php" class="data_form">
                <div class="form-group">
                            <label> Preferred Country </label>
              </div>
              <div class="form-group">
                            <select class="form-control" id="countryid" name="country" required="required">
                            <?php 
                              $result0 = mysqli_query($con, "SELECT * FROM `country` ORDER BY `country` ASC");

                              while($extract0 = mysqli_fetch_array($result0)){
                                $country = $extract0['country'];
                                echo "<option value='".$country."' class='category'>".ucwords($country)."</option>"; 
                              }
                            ?>
                            </select>
              </div>
              <div class="form-group">
                 <label>Preferred Degree</label>
                <select id="course" name="course" class="form-control">
                  <option value="Post Graduate">Post Graduate</option>
                  <option value="Skills Practicum Certificate">Skills Practicum Certificate</option>
                  <option value="vocational">Vocational</option>
                  <option value="graduate studies">Graduate Studies</option>
                </select>
              </div>

              <div class="form-group">
                <label>Tuition</label>
                <input type="number" step="0.01" id="tuitionfrom" name="tuitionfrom" class="form-control" placeholder="Tuition From" style="width:calc(50% - 47px); display:inline;"> <label>To</label> <input type="number" step="0.01" id="tuitionto" name="tuitionto" class="form-control" placeholder="Tuition To" style="width:calc(50% - 47px); display:inline;">
              </div>

              <div class="form-actions text-center forms">
                <input type="submit" class="btn btn-warning btn-md updateB" name="add" value="Generate"/>
              </div>

              </form>
            </div>
          </div>
        </div>
    </div>
  </div>
      <div id="ajaxresult">

      </div>
<?php
include('footer.html');
?>
    </div>
</body>

</html>
