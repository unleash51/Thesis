<?php 
include 'connect.php';
include('header_ipsmc.php'); 
?>
<body>
	<div class="container-fluid page_title_container">
		<div>
			<h1>Reports Generation</h1>
		</div>
	</div>

	<div class="container-fluid">
		<div class="container-fluid content col-md-10" style="padding-left: 210px;">
			<br>
				<div class="panel panel-primary">
					<div class="panel-heading content">
						<strong>Generate your reports here</strong>
					</div>
					<div class="panel-body" style="padding-left: 30px;">
						<div class="col-lg-11 forms">
								<div class="form-group">
									<label class="control-label" for="reportType">Type of Report</label>
									<ul class = "nav nav-tabs">
										<li class="nav-item">
										<a href="#summary" class="nav-link active" role="tab" data-toggle="tab" >Summary</a>
										</li>        
										<li class="nav-item">
										<a href="#detailed" class="nav-link active" role="tab" data-toggle="tab">Detailed</a>
										</li>
										<li class="nav-item">
										<a href="#exception" class="nav-link active" role="tab" data-toggle="tab">Exception</a>
										</li>
									</ul>

									<div class="tab-content">
										<div role="tabpanel" class="tab-pane fade" id="summary">
											<form name="report" method="GET" action="reportgenerator.php" target="_blank">
											<select id="summary_category" name="categ" class="form-control" style="width: 3in" onchange="updateCheckBox(this)" >
												<option value="">-- Select Category --</option>
												<option value="student_summary">Individual Student Report</option>
												<option value="tourist_summary">Individual Tourist Report</option>
                                            </select>
											<div class="form-group">
												<input type="submit" name="submit_summary" class="btn btn-info" value="Generate">
											</div>
											</form>
                                        </div>
										<div role="tabpanel" class="tab-pane fade" id="detailed">
										<form name="report" method="GET" action="reportgenerator.php" target="_blank">
											<select id="detailed_category" name="categ" class="form-control" style="width: 3in" onchange="updateCheckBox(this)" >
												<option value="">-- Select Category --</option>
												<option value="student_detailed">Individual Student Report</option>
												<option value="tourist_detailed">Individual Tourist Report</option>
                                            </select>
											<div class="form-group">
												<input type="submit" name="submit_detailed" class="btn btn-info" value="Generate">
											</div>
										</form>	
                                        </div>
										<div role="tabpanel" class="tab-pane fade" id="exception">
											
                                        </div>
									</div>
								</div>

								

							
						</div>
					</div>
				</div>
		</div>
	</div>
</body>