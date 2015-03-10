<section class="main">
	<div class="panel panel-default text-center" style="height: 400px;"
		;
		style="padding-bottom: 35px">
		<div class="panel-heading">
			<H1>
				<label for="search">Search MassBase</label>
			</H1>
		</div>
		<div class="container panel-body">
			<!-- 			<form class="form-inline hidden" role="form" action="results.php" -->
			<!-- 				id="exampleForm"> -->
			<!-- 				<div class="form-group"> -->
			<!-- 					<label class="sr-only" for="searchterminput">Search Term</label> <input -->
			<!-- 						class="form-control" type="text" name="searchterm" id="searchterm" -->
			<!-- 						autofocus="autofocus" placeholder="Search Term" size="70px"> <label -->
			<!-- 						class="sr-only" for="searchby">Search By</label> <select -->
			<!-- 						class="form-control" name="searchby" id="searchby" -->
			<!-- 						style="width: 100px"> -->
			<!-- 						<option value="taxonomy">Taxonomy</option> -->
			<!-- 						<option value="binid">BIN ID</option> -->
			<!-- 						<option value="project">Project</option> -->
			<!-- 						<option value="processid">Process ID</option> -->
			<!-- 					</select> <label for="sortby" class="sr-only">Sort By</label> <select -->
			<!-- 						name="sortby" id="sortby" class="form-control" -->
			<!-- 						style="width: 180px"> -->
			<!-- 						<option id="bindasc" value="binasc">BIN: Ascending</option> -->
			<!-- 						<option id="bindesc" value="bindesc">BIN: Descending</option> -->
			<!-- 						<option id="weightdesc" value="weightdesc">Weight: High->Low</option> -->
			<!-- 						<option id="weightasc" value="weightasc">Weight: Low->High</option> -->
			<!-- 						<option id="speciesasc" value="speciesasc">Species: A->Z</option> -->
			<!-- 						<option id="speciesdesc" value="speciesdesc">Species: Z->A</option> -->
			<!-- 						<option id="projectdesc" value="projectdesc">Project: A->Z</option> -->
			<!-- 						<option id="projectasc" value="projectasc">Project: Z->A</option> -->
			<!-- 	</select> <span class="help-block" style="font-size: 11pt"><small><em>For -->
			<!-- 								multiple search items, separate with comma and no spaces. (ex. -->
			<!-- 								NSWHJ951-10,NSWHJ045-10) </em></small></span> -->
			<!-- 					<div> -->
			<!-- size section -->
			<!-- 						<section class="form-inline"> -->
			<!-- 							<select name="greaterchoice" id="greaterchoice" -->
			<!-- 								class="form-control" style="width: 180px"> -->
			<!-- 								<option id="gte" value="gte">Greater Than Equal To</option> -->
			<!-- 								<option id="gt" value="gt">Greater Than</option> -->
			<!-- 								<option id="eq" value="eq">Equal To</option> -->
			<!-- 							</select> <input type="text" id="greaterthan" name="greaterthan" -->
			<!-- 								class="form-control" style="width: 80px"> <label>mg </label> <select -->
			<!-- 								name="lessthanchoice" id="lessthanchoice" class="form-control" -->
			<!-- 								style="width: 180px"> -->
			<!-- 								<option id="lte" value="lte">Less Than Equal To</option> -->
			<!-- 								<option id="lt" value="lt">Less Than</option> -->
			<!-- 							</select> <input type="text" id="lessthan" name="lessthan" -->
			<!-- 								class="form-control" style="width: 80px"> <label>mg</label> -->

			<!-- 						</section> -->
			<!-- range form group -->
			<input style="display: none" name="page" value="1">
			<!-- 					</div> -->
			<!-- size section -->
			<!-- 					<div> -->
			<!-- 						<br> -->
			<!-- 						<button type="button" class="btn btn-danger" -->
			<!-- 							onClick=" -->
			<!--                   this.form.elements['searchterm'].value='';  -->
			<!--                   this.form.elements['searchby'].value='taxonomy';  -->
			<!--                   this.form.elements['sortby'].value='binasc';  -->
			<!--                   this.form.elements['greaterchoice'].value='gte';  -->
			<!--                   this.form.elements['lessthanchoice'].value='lte'; -->
			<!--                   this.form.elements['lessthan'].value=''; -->
			<!--                   this.form.elements['greaterthan'].value=''; -->
			<!--                   ">Reset</button> -->
			<!-- 						<button type="submit" class="btn btn-success">Submit</button> -->
			<!-- 					</div> -->
			<!-- 				</div> -->
			<!-- form-group -->
			<!-- 			</form> -->




			<div>
				<div class="row" style="padding-top: 80px;">
					<form class="form-inline" action="results.php" role="form">
						<div class="form-group">
							<input class="form-control form-control" id="searchterm"
								name="searchterm" placeholder="SearchMassbase">
						</div>

						<button type="submit" class="btn btn-default"
							
							<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
						</button>
					</form>
				</div>

				<!-- DELETE -->
				<form class="form-inline" role="form" action="results.php"
					role="form"
					
					<div class="form-group">
						<label class="sr-only" for="searchterminput">Search Term</label> <input
							class="form-control" type="text" name="searchterm"
							id="searchterm" autofocus="autofocus" placeholder="Search Term"
							size="70px"> <label class="sr-only" for="searchby">Search By</label>
						<select class="form-control" name="searchby" id="searchby"
							style="width: 100px">
							<option value="taxonomy">Taxonomy</option>
							<option value="binid">BIN ID</option>
							<option value="project">Project</option>
							<option value="processid">Process ID</option>
						</select> <label for="sortby" class="sr-only">Sort By</label> <select
							name="sortby" id="sortby" class="form-control"
							style="width: 180px">
							<option id="bindasc" value="binasc">BIN: Ascending</option>
							<option id="bindesc" value="bindesc">BIN: Descending</option>
							<option id="weightdesc" value="weightdesc">Weight: High->Low</option>
							<option id="weightasc" value="weightasc">Weight: Low->High</option>
							<option id="speciesasc" value="speciesasc">Species: A->Z</option>
							<option id="speciesdesc" value="speciesdesc">Species: Z->A</option>
							<option id="projectdesc" value="projectdesc">Project: A->Z</option>
							<option id="projectasc" value="projectasc">Project: Z->A</option>
						</select> <span class="help-block" style="font-size: 11pt"><small><em>For
									multiple search items, separate with comma and no spaces. (ex.
									NSWHJ951-10,NSWHJ045-10) </em></small></span>

						<div>
							<!-- size section -->
							<section class="form-inline">
								<select name="greaterchoice" id="greaterchoice"
									class="form-control" style="width: 180px">
									<option id="gte" value="gte">Greater Than Equal To</option>
									<option id="gt" value="gt">Greater Than</option>
									<option id="eq" value="eq">Equal To</option>
								</select> <input type="text" id="greaterthan" name="greaterthan"
									class="form-control" style="width: 80px"> <label>mg </label> <select
									name="lessthanchoice" id="lessthanchoice" class="form-control"
									style="width: 180px">
									<option id="lte" value="lte">Less Than Equal To</option>
									<option id="lt" value="lt">Less Than</option>
								</select> <input type="text" id="lessthan" name="lessthan"
									class="form-control" style="width: 80px"> <label>mg</label>

							</section>
							<!-- range form group -->
							<input style="display: none" name="page" value="1">
						</div>
						<!-- size section -->

						<div>
							<br>
							<button type="button" class="btn btn-danger"
								onClick="
					                  this.form.elements['searchterm'].value=''; 
					                  this.form.elements['searchby'].value='taxonomy'; 
					                  this.form.elements['sortby'].value='binasc'; 
					                  this.form.elements['greaterchoice'].value='gte'; 
					                  this.form.elements['lessthanchoice'].value='lte';
					                  this.form.elements['lessthan'].value='';
					                  this.form.elements['greaterthan'].value='';
					                  ">Reset</button>
							<button type="submit" class="btn btn-success">Submit</button>
						</div>
					</div>
					<!-- form-group -->
				</form>
				
				
				<!-- DELETE -->
				</br>

				<div class="row">
					<button type="button" class="btn btn-primary btn-sm hidden"
						data-toggle="modal" data-target="#myModal">Advanced Search</button>
				</div>

				<div class="row">
					<button type="button" class="btn btn-primary btn-sm"
						data-toggle="modal" data-target="#myModal2"
						onclick="return check()">Advanced Search</button>
				</div>

				<!-- modal 2 -->
				<div class="modal fade" id="myModal2" role="dialog"
					aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal"
									aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								<h4 class="modal-title">Advanced Search</h4>
							</div>
							<div class="modal-body">
								<form class="form-horizontal" role="form" id="advanceSearchForm"
									action="results.php">
									<div class="form-group">
										<label for="searchby" class="col-sm-2 control-label">Search by</label>
										<div class="col-sm-10">
											<select class="form-control" name="searchby" id="searchby">
												<option value="taxonomy">Taxonomy</option>
												<option value="binid">BIN ID</option>
												<option value="project">Project</option>
												<option value="processid">Process ID</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label for="searchboxModal" class="col-sm-2 control-label">Search
											for</label>
										<div class="col-sm-10">
											<input type="search" class="form-control" id="searchBoxModal">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Weight Range</label>
										<div class="col-sm-2">
											<input type="text" class="form-control">
										</div>
										<label class="col-sm-1 control-label">to</label>
										<div class="col-sm-2">
											<input type="text" class="form-control">
										</div>
										<label class="col-sm-1 control-label">mg</label>
										<div class="col-sm-offset-1 col-sm-3">
											<label> <input type="checkbox"> Inclusive
											</label> <label data-toggle="tooltip"
												title='Include the end points of the weight interval'> <span
												class="glyphicon glyphicon-question-sign" aria-hidden="true">
											</span>
											</label>

										</div>
									</div>
									<form>
							
							</div>
							<div class="modal-footer">
								<button type="button"
									class="btn btn-primary btn-md col-sm-offset-4 col-sm-4">Search</button>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- modal2 end -->
				<script type="text/javascript">
					function check()
					{ 
						$('#searchBoxModal').val($('#searchterm').val());
						
					}

			</script>
			</div>
		</div>

</section>
<!-- main -->