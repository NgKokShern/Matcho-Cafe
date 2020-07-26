<?php

	include('adminpanelheader.php');
?>

		<div class="section bg-light" data-aos="fade-up" id="section-reservation">
          <div class="container">
            <div class="row section-heading justify-content-center mb-5">
              <div class="col-md-8 text-center">
                <h2 class="heading mb-3">Edit Reservation</h2>  
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-10 p-5 form-wrap">
                <form id="form" class="form" action="adminpaneledit.inc.php" method="post">
                  <div class="row mb-4">
					<div class="form-group col-md-4">
                      <label for="id" class="label">ID</label>
                      <div class="form-field-icon-wrap">
                        <input type="text" class="form-control" id="id" name="id">
					</div>
                      </div>
				  
                    <div class="form-group col-md-4">
                      <label for="name" class="label">Name</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-android-person"></span>
                        <input type="text" class="form-control" id="name" name="ReservationName">
					
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="email" class="label">Email</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-email"></span>
                        <input type="email" class="form-control" id="email" name="ReservationEmail">
						
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="phone" class="label">Phone</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-android-call"></span>
                        <input type="text" class="form-control" id="phone" name="ReservationPhone">
						
                      </div>
                    </div>

                    <div class="form-group col-md-4">
                      <label for="persons" class="label">Number of Persons</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-android-arrow-dropdown"></span>
                        <select name="persons" id="persons" class="form-control">
                          <option value="1">1 person</option>
                          <option value="2">2 persons</option>
                          <option value="3">3 persons</option>
                          <option value="4">4 persons</option>
                          <option value="5+">5+ persons</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="date" class="label">Date</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-calendar"></span>
                        <input type="text" class="form-control" id="date" name="ReservationDate">
						
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="time" class="label">Time</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-android-arrow-dropdown"></span>
                        <select name="time" class="form-control" id="time">
							<option value="12.00PM">12.00pm</option>
							<option value="1.00PM">1.00pm</option>
							<option value="2.00PM">2.00pm</option>
							<option value="3.00PM">3.00pm</option>
							<option value="4.00PM">4.00pm</option>
							<option value="5.00PM">5.00pm</option>
							<option value="6.00PM">6.00pm</option>
							<option value="7.00PM">7.00pm</option>
							<option value="8.00PM">8.00pm</option>
							<option value="9.00PM">9.00pm</option>
						</select>
                      </div>
                    </div>
					<div class="form-group col-md-12">
                      <label for="message" class="label">Message</label>
                     <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                   </div>
                  </div>
                  <div class="row justify-content-center">
                    <div class="col-md-4">
                      <input type="submit" class="btn btn-primary btn-outline-primary btn-block" value="Update" name="reservationedit-submit">
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


