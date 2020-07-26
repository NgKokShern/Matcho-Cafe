<?php

	include('adminpanelheader.php');
?>

		<div class="section bg-light" data-aos="fade-up">
          <div class="container">
            <div class="row section-heading justify-content-center mb-5">
              <div class="col-md-8 text-center">
                <h2 class="heading mb-3">Delete Reservations</h2>
                 
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-10 p-5 form-wrap">
                <form id="form" class="form" action="adminpaneldelete.inc.php" method="post">

				<div class="row mb-4">
				
					<div class="form-group col-md">
                      <label for="id" class="label">ID Number</label>
                      <div class="form-field-icon-wrap">
                        <input type="text" class="form-control" id="id" name="id">
                      </div>
                    </div>
                    
                
                  </div>
                  <div class="row justify-content-center">
                    <div class="col-md-4">
                      <input type="submit" class="btn btn-primary btn-outline-primary btn-block" value="Delete" name="deleteitems-submit">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div> <!-- .section -->

			
	
<?php
	
	include('adminpanelfooter.php');
	
?>