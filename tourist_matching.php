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
        url: 'tourist_matching_ajax.php',
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
			<h1>Tourist Matching</h1>
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
            <div id="formdiv" class="col-lg-11 forms">
              <form method="POST" class="data_form" role="form" action="">
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
              <!--<div class="form-group">
                <label>Purpose/Category</label>
                <select id="category" name="category" class="form-control">
                  <option value="Shopping">Shopping</option>
                  <option value="Adventure">Adventure</option>
                  <option value="Find Work">Find Work</option>
                </select>
              </div>-->

              <div class="form-group">
                <label>Plane Fare (Back and Forth)</label>
                <input type="number" step="1000" id="fare" name="fare" class="form-control" placeholder="Plane Fare">
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
