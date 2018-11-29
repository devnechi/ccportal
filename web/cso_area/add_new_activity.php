<?php
include("../../includes/layouts/cso_header_layout.php");
 ?>
<div class="container">
	<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header" data-background-color="orange">
											<h4 class="title">Create a new activity</h4>
											<p class="category">As of Last Month October, 2018</p>
									</div>
									<div class="card-content table-responsive">

                  <div class="col-md-8">

                      <div class="row">

                            <div class="row">
                              <div class="form-group col-md-6">
                                  <label for="colFormLabel" class=" control-label">Activity Title</label>
                                  <input type="text" class="form-control" id="colFormLabel" placeholder="activity title">
                                </div>
                            <div class="form-group col-md-6">
                               <label for="exampleFormControlSelect1" class="control-label">Activity Type</label>
                               <select class="form-control" id="exampleFormControlSelect1">
                                 <option>Select</option>
                                 <option>Service</option>
                                 <option>Training</option>
                                  <option>Seminar</option>
                                  <option>Other</option>
                               </select>
                             </div>
                           </div>
                            <div class="form-group ">
                              <label for="exampleFormControlTextarea1" class="control-label">Activity Short Description</label>
                              <textarea class="form-control"  id="product_purpose_statement" name="product_purpose_statement" value="<?= isset($_POST['product_purpose_statement']) ? $_POST['product_purpose_statement'] : ''; ?>" ></textarea>
                            </div>


                          
                          <div class="form-group">
                    <label for="country">Country</label>
                     <select class="form-control" id="country" name="country" value="<?= isset($_POST['country']) ? $_POST['country'] : ''; ?>">
                       <option>SELECT</option>
                       <option>Tanzania</option>
                       <option>Uganda</option>
                       <option>Kenya</option>
                       <option>Rwanda</option>
                     </select>
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput2">Region</label>
                    <select class="form-control" id="region" name="region" value="<?= isset($_POST['region']) ? $_POST['region'] : ''; ?>" placeholder="">
                    <option>SELECT</option>
                       <option>Dar es Salaam</option>
                       <option>Mwanza</option>
                       <option>Arusha</option>
                       <option>Dodoma</option>
                     </select>
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput2">District</label>
                    <select class="form-control" id="district" name="district" value="<?= isset($_POST['district']) ? $_POST['district'] : ''; ?>" placeholder="">
                    <option>SELECT</option>
                       <option>Kinondoni</option>
                       <option>Ilala</option>
                       <option>Temeke</option>
                       <option>Ubungo</option>
                     </select>
                  </div>

                              <div class="row">

                                <div class=" col-md-6 ">
                                    <label for="colFormLabel" class="control-label">Activity Duration</label>
                                      <input type="text" class="form-control" id="colFormLabel" placeholder="in days, years or months">
                                  </div>

                                    <div class=" col-md-6">
                                       <label for="exampleFormControlSelect1" class="control-label">select type</label>
                                       <select class="form-control" id="exampleFormControlSelect1">
                                         <option>Select</option>
                                         <option>days</option>
                                         <option>Months</option>
                                          <option>Years</option>
                                       </select>
                                     </div>
                                </div>
                                <div class="row">


                                    <div class="form-group col-md-6">
                                        <label for="colFormLabel" class="control-label">Facilitators</label>
                                          <input type="text" class="form-control" id="colFormLabel" placeholder="activity facilitators">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="colFormLabel" class="control-label">in Collaboration with</label>
                                          <input type="text" class="form-control" id="colFormLabel" placeholder="activity facilitators">
                                    </div>
                                  </div>
                                    <div class="row">
                                      <div class="form-group col-md-6">
                                          <label for="colFormLabel" class="cotrol-label">Expected Number of Participants</label>
                                            <input type="text" class="form-control" id="colFormLabel" placeholder="Expected Output">
                                          </div>


                                          </div>



                                    <div class="row">

                                        <div class=" col-sm-6 ">
                                            <label for="colFormLabel" class=" control-label">Start Date</label>
                                            <div class="input-group datetimepicker">
                                              <input type="text" class="form-control " id="colFormLabel" placeholder="start date">
                                              <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                                            </div>


                                        </div>


                                          <div class=" col-sm-6">
                                              <label for="colFormLabel" class="control-label">End Date</label>
                                              <div class="input-group datetimepicker">
                                                <input type="text" class="form-control"  id="colFormLabel" placeholder="end date">
                                                     <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span></div>
                                            </div>


                                      </div>


                                      
                              <div class="row">
                              
                              <div class=" col-md-6 ">
                                  <label for="colFormLabel" class="control-label">Activity Duration</label>
                                  
                                    <input type="text" class="form-control" id="colFormLabel" placeholder="in days, years or months">
                                 
                                </div>

               
                              
                               
                                  <div class=" col-md-6">
                                     <label for="exampleFormControlSelect1" class="control-label">select type</label>
                                     <select class="form-control" id="exampleFormControlSelect1">
                                       <option>Select</option>
                                       <option>days</option>
                                       <option>Months</option>
                                        <option>Years</option>
                                     </select>
                                   </div>

                                
                              </div>
                                  
                                  



                                    <div class="form-group">
                                       <label for="exampleFormControlSelect1" class="control-label">Activity Status</label>
                                       <select class="form-control" id="exampleFormControlSelect1">
                                         <option>Select</option>
                                         <option>ON-stanby</option>
                                         <option>To Be verified by User</option>

                                       </select>
                                     </div>





                                <div class="form-group ">

                                 <button type="button" class="btn btn-primary  btn-block">Create new Activity</button>
                              </div>
                           </div>




										</div>
									</div>
                </div>
                </div>
              </div>
            </div>
                  <?php
                  include("../../includes/layouts/cso_layout_footer.php");
                   ?>
<script>
$(document).ready(function (){
	$('.datetimepicker').datetimepicker();

});
</script>
