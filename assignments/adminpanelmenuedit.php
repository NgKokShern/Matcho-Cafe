<?php

	include('adminpanelheader.php');
?>

		<div class="section bg-light" data-aos="fade-up">
          <div class="container">
            <div class="row section-heading justify-content-center mb-5">
              <div class="col-md-8 text-center">
                <h2 class="heading mb-3">Update Item</h2>
                 
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-10 p-5 form-wrap">
                <form id="form" class="form" action="adminpanelmenuedit.inc.php" method="post">

				<div class="row mb-4">
				
					<div class="form-group col-md-4">
                      <label for="id" class="label">ID Number</label>
                      <div class="form-field-icon-wrap">
                        <input type="text" class="form-control" id="id" name="id">
                      </div>
                    </div>
				  
                    <div class="form-group col-md-4">
                      <label for="name" class="label">Name</label>
                      <div class="form-field-icon-wrap">
                        <input type="text" class="form-control" id="name" name="name">
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="image" class="label">Image</label> 
                      <div class="form-field-icon-wrap">
                        
                        <input type="file" class="form-control" id="image" name="image">
		
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="price" class="label">Price</label>
                      <div class="form-field-icon-wrap">
                     
                        <input type="text" class="form-control" id="price" name="price">

                      </div>
                    </div>

                    <div class="form-group col-md-4">
                      <label for="type" class="label">Type</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-android-arrow-dropdown"></span>
                        <select name="type" id="type" class="form-control" >
                          <option value="Mains">Mains</option>
                          <option value="Desserts">Desserts</option>
                          <option value="Drinks">Drinks</option>
                        </select>
                      </div>
                    </div>
                    
                  
					<div class="form-group col-md-12">
                      <label for="description" class="label">Description</label>
                     <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                   </div>
                  </div>
                  <div class="row justify-content-center">
                    <div class="col-md-4">
                      <input type="submit" class="btn btn-primary btn-outline-primary btn-block" value="Update" name="editnewitems-submit">
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


