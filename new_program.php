<!DOCTYPE html>
<html lang="en">
<?php 
include "db_connect.php";
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
      <h1>Register New Program</h1>
    </div>
  </div>

  <div class="container-fluid">
    <div class="container-fluid content col-md-10" style="padding-left: 210px;">
        <br/>
      
      
        <div class="row">
        
        <form class="form-horizontal" role="form" action='create_program.php' method="POST">  
        <div class="col-md-12">
          <div class="panel panel-default panel-primary">
            <div class="panel-heading">
              <h4>Program Information</h4>
            </div>
            <div class="panel-body" style="padding-left:30px;">
              <div class="col-lg-12 forms">
                <h1>Program Application</h1>
                 
                 <?php 

                  if(isset($_REQUEST['error']) && $_REQUEST['error'] == "addduplicate")
                  {
                    echo "<span style='color:red;'>This Data is already exist.</span>";
                  }

                ?>

                            <div class="alert alert-info alert-dismissable">
                                Supply the information needed below.
                            </div> 
                      </div>
                          <div class="form-group">
                            <label>Program Offered</label>
                            <input style="width: 845px;" class="form-control" name="program" required="required">
                          </div>
                          <div class="form-group">
                            <label>Program Category</label>
                            <select style="width: 845px;" class="form-control" name="category" required="required">
                                
                              <option value="Post Graduate">Post Graduate</option>
                              <option value="Skills Practicum Certificate">Skills Practicum Certificate</option>
                              <option value="vocational">Vocational</option>
                              <option value="graduate studies">Graduate Studies</option>

                            </select>
                          </div>
                          <div class="form-group">
                            <label>School Name</label>
                            <select style="width: 845px;" class="form-control" name="school" required="required">
                                
                                <?php 
                                  $result0 = mysqli_query($con, "SELECT * FROM `school_details` ORDER BY `school_name` ASC");

                                   while($extract0 = mysqli_fetch_array($result0))
                                   {
                                      $school_name = $extract0['school_name'];
                                      $school_id = $extract0['school_id'];
                                      echo "<option value='".$school_id."' class='category'>".ucwords($school_name)."</option>"; 
                                  }
                                ?>

                            </select>
                          </div>
                          <div class="form-group">
                            <label>Tuition</label>
                            <input style="width: 845px;" class="form-control" name="tuition" required="required">
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
