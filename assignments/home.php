<?php
	include ('header.php');
?>

      <div class="main-wrap " id="section-home">
        <div class="cover_1 overlay bg-light">
          <div class="img_bg" style="background-image: url(images/matchocafe1.jpg);" data-stellar-background-ratio="0.5">
            <div class="container">
              <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-10" data-aos="fade-up">
                  <h2 class="heading mb-5">Welcome to Matcho cafe</h2>
                  <p><a href="#section-reservation" class="smoothscroll btn btn-outline-white px-5 py-3">Reservation</a></p>
                </div>
              </div>
            </div>
		  </div>
		</div>
       </div> <!-- .cover_1 -->

        <div class="section"  data-aos="fade-up">
          <div class="container">
            <div class="row section-heading justify-content-center mb-5">
              <div class="col-md-8 text-center">
                <h2 class="heading mb-3">Latest Items</h2>
                <p class="sub-heading mb-5">Top sellers . New items . Seasonal items</p>  
              </div>
            </div>
            <div class="row">

              <div class="ftco-46">
                <div class="ftco-46-row d-flex flex-column flex-lg-row">
                  <div class="ftco-46-image" style="background-image: url(images/burntcheesecake.jpg);"></div>
                  <div class="ftco-46-text ftco-46-arrow-left">
                    <h4 class="ftco-46-subheading">Top seller</h4>
                    <h3 class="ftco-46-heading">Signature Burnt Cheesecake</h3>
                    <p class="mb-5">Homemade cheesecake that is slightly burnt on the outside to give it a roasted taste!</p>
                    
                  </div>
                  <div class="ftco-46-image" style="background-image: url(images/shortcake.jpg);"></div> 
                </div>

                <div class="ftco-46-row d-flex flex-column flex-lg-row">
                  <div class="ftco-46-text ftco-46-arrow-right">
                    <h4 class="ftco-46-subheading">New items</h4>
                    <h3 class="ftco-46-heading">Hojicha Crepe Cake</h3>
                    <p class="mb-5">Homemade 20-layered cake that is made out of Hojicha (Roasted matcha) and Hojicha cream.</p>
                    
                  </div>
                  <div class="ftco-46-image" style="background-image: url(images/hojicha.jpg);"></div>
                  <div class="ftco-46-text ftco-46-arrow-up">
                    <h4 class="ftco-46-subheading">Seasonal items</h4>
                    <h3 class="ftco-46-heading">Strawberry Shortcake</h3>
                    <p class="mb-5">Homemade spongecake with cream and strawberries. Perfect for spongecake lovers!</p>
                    
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div> <!-- .section -->

        <div class="section pb-3 bg-white" id="section-about" data-aos="fade-up">
          <div class="container">
            <div class="row align-items-center justify-content-center">
              <div class="col-md-12 col-lg-8 section-heading">
                <h2 class="heading mb-5">About the cafe</h2>
                <p>We are a humble cafe that is situated in the heart of Georgetown that focuses on selling Matcha and Chocolate desserts and drinks. Hence the name, Mat-cho (Matcha and Chocolate).</p>
                <p>Matcho is happily serving it's customers since 2017 and is founded by Caryn Ng.</p>
              </div>
            </div>
          </div>
        </div> <!-- .section -->
        

        <div class="section bg-white pt-2 pb-2 text-center" data-aos="fade">
          <p><img src="images/collage.jpg" alt="Image" class="img-fluid"></p>
        </div> <!-- .section -->

  
        <div class="section bg-light" id="section-menu" data-aos="fade-up">
          <div class="container">
            <div class="row section-heading justify-content-center mb-5">
              <div class="col-md-8 text-center">
                <h2 class="heading mb-3">Menu</h2>
                <p class="sub-heading mb-5">Top sellers for each categories!</p>  
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-8">
                <ul class="nav site-tab-nav" id="pills-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="pills-breakfast-tab" data-toggle="pill" href="#pills-breakfast" role="tab" aria-controls="pills-breakfast" aria-selected="true">Mains</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="pills-lunch-tab" data-toggle="pill" href="#pills-lunch" role="tab" aria-controls="pills-lunch" aria-selected="false">Desserts</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="pills-dinner-tab" data-toggle="pill" href="#pills-dinner" role="tab" aria-controls="pills-dinner" aria-selected="false">Drinks</a>
                  </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-breakfast" role="tabpanel" aria-labelledby="pills-breakfast-tab">
				  <?php
				  
					$dbc = mysqli_connect('localhost','root','');
						mysqli_select_db($dbc,'matchodatabase');
						
						$query = 'SELECT * FROM menu';

						if($result = mysqli_query($dbc,$query)){
							while($row = mysqli_fetch_array($result)){
								if($row['ItemType'] === "Mains"){
									echo '<div class="d-block d-md-flex menu-food-item">
									  <div class="text order-1 mb-3">
										<img src="images/';
									echo $row['ItemImage'];
									echo '" alt="Image">
										<h3><a href="#">';
									echo $row['ItemName'];
									echo '</a></h3>
										<p>';
									echo $row['ItemDesc'];
									echo '</p>
									  </div>
									  <div class="price order-2">
										<strong>RM ';
									echo $row['ItemPrice']; 
									echo '</strong>
									  </div>
									</div> <!-- .menu-food-item -->';
									
								}
							}
						}
						mysqli_close($dbc);
				  
				  ?>
            
                  </div>
                  <div class="tab-pane fade" id="pills-lunch" role="tabpanel" aria-labelledby="pills-lunch-tab">
				   <?php
				  
					$dbc = mysqli_connect('localhost','root','');
						mysqli_select_db($dbc,'matchodatabase');
						
						$query = 'SELECT * FROM menu';

						if($result = mysqli_query($dbc,$query)){
							while($row = mysqli_fetch_array($result)){
								if($row['ItemType'] === "Desserts"){
									echo '<div class="d-block d-md-flex menu-food-item">
									  <div class="text order-1 mb-3">
										<img src="images/';
									echo $row['ItemImage'];
									echo '" alt="Image">
										<h3><a href="#">';
									echo $row['ItemName'];
									echo '</a></h3>
										<p>';
									echo $row['ItemDesc'];
									echo '</p>
									  </div>
									  <div class="price order-2">
										<strong>RM ';
									echo $row['ItemPrice']; 
									echo '</strong>
									  </div>
									</div> <!-- .menu-food-item -->';
									
								}
							}
						}
						mysqli_close($dbc);
				  
				  ?>
                    
                    

                  </div>
                  <div class="tab-pane fade" id="pills-dinner" role="tabpanel" aria-labelledby="pills-dinner-tab">
				   <?php
				  
					$dbc = mysqli_connect('localhost','root','');
						mysqli_select_db($dbc,'matchodatabase');
						
						$query = 'SELECT * FROM menu';

						if($result = mysqli_query($dbc,$query)){
							while($row = mysqli_fetch_array($result)){
								if($row['ItemType'] === "Drinks"){
									echo '<div class="d-block d-md-flex menu-food-item">
									  <div class="text order-1 mb-3">
										<img src="images/';
									echo $row['ItemImage'];
									echo '" alt="Image">
										<h3><a href="#">';
									echo $row['ItemName'];
									echo '</a></h3>
										<p>';
									echo $row['ItemDesc'];
									echo '</p>
									  </div>
									  <div class="price order-2">
										<strong>RM ';
									echo $row['ItemPrice']; 
									echo '</strong>
									  </div>
									</div> <!-- .menu-food-item -->';
									
								}
							}
						}
						mysqli_close($dbc);
				  
				  ?>
                    
                    

                  </div>
                </div>
              </div>
              
            </div>
          </div>


        

        <div class="section bg-light" data-aos="fade-up" id="section-reservation">
          <div class="container">
            <div class="row section-heading justify-content-center mb-5">
              <div class="col-md-8 text-center">
                <h2 class="heading mb-3">Reservation</h2>
                <p class="sub-heading mb-5">Make a reservation before you visit to cut the queue!</p>  
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-10 p-5 form-wrap">
                <form id="form" class="form" action="reservation.inc.php" method="post">
				<?php

					if(isset($_GET['error'])){
						if($_GET['error']== "emptyfields"){
							echo '<p style="color:red">Fill in all blanks!</p>';
						}
						else if($_GET['error']== "invalidemailphone"){
							echo '<p style="color:red">Invalid Name and Phone number!</p>';
						}
		
						else if($_GET['error']== "invalidemail"){
							echo '<p style="color:red">Invalid E-mail!</p>';
						}
						else if($_GET['error']== "invalidphone"){
							echo '<p style="color:red">Invalid phone number!</p>';
						}
						
					
					}
				?>
				
                  <div class="row mb-4">
				  
                    <div class="form-group col-md-4">
                      <label for="username" class="label">Name</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-android-person"></span>
                        <input type="text" class="form-control" id="username" name="ReservationName" value="<?php if(isset($_GET["ReservationName"])){echo($_GET["ReservationName"]);}?>">
						<i class="fa fa-check-circle"></i>
						<i class="fa fa-exclamation-circle"></i>
							<small>Error message</small>
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="email" class="label">Email</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-email"></span>
                        <input type="email" class="form-control" id="email" name="ReservationEmail" value="<?php if(isset($_GET["ReservationEmail"])){echo($_GET["ReservationEmail"]);}?>">
						<i class="fa fa-check-circle"></i>
						<i class="fa fa-exclamation-circle"></i>
							<small>Error message</small>
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="phone" class="label">Phone</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-android-call"></span>
                        <input type="text" class="form-control" id="phone" name="ReservationPhone" value="<?php if(isset($_GET["ReservationPhone"])){echo($_GET["ReservationPhone"]);}?>">
						<i class="fa fa-check-circle"></i>
						<i class="fa fa-exclamation-circle"></i>
							<small>Error message</small>
                      </div>
                    </div>

                    <div class="form-group col-md-4">
                      <label for="persons" class="label">Number of Persons</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-android-arrow-dropdown"></span>
                        <select name="persons" id="persons" class="form-control" value="<?php if(isset($_GET["persons"])){echo($_GET["persons"]);}?>">
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
                        <input type="text" class="form-control" id="date" name="ReservationDate" value="<?php if(isset($_GET["ReservationDate"])){echo($_GET["ReservationDate"]);}?>">
						<i class="fa fa-check-circle"></i>
						<i class="fa fa-exclamation-circle"></i>
						<small>Error message</small>
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="time" class="label">Time</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-android-arrow-dropdown"></span>
                        <select name="time" class="form-control" id="time" value="<?php if(isset($_GET["time"])){echo($_GET["time"]);}?>">
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
                     <textarea name="message" id="message" cols="30" rows="10" class="form-control" value="<?php if(isset($_GET["message"])){echo($_GET["message"]);}?>"></textarea>
                   </div>
                  </div>
                  <div class="row justify-content-center">
                    <div class="col-md-4">
                      <input type="submit" class="btn btn-primary btn-outline-primary btn-block" value="Reserve Now" name="reservation-submit">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div> <!-- .section -->

         <div class="section bg-white"  data-aos="fade-up">
          <div class="container">
            <div class="row section-heading justify-content-center mb-5">
              <div class="col-md-8 text-center">
                <h2 class="heading mb-3">Customer Reviews</h2>
              </div>
            </div>
            <div class="row justify-content-center text-center" data-aos="fade-up">
              <div class="col-md-8">
                <div class="owl-carousel home-slider-loop-false">

                
                  <div class="item">
                    <blockquote class="testimonial">
                      <p>&ldquo; This cafe is super cute! Very comfy and modern place. Just open the door and take stairs up to the cafe. Interiors are pinky color so you can take cute pics all it behind!! First you stop by the counter and take a menu and order at the counter! Then you can select your favorite seat as you want!! They have not only cute desserts and drinks but also they serve meals for lunch!! I wanted to have a cute pancake but at that time I was hungry so I ordered wraps. It was really delicious!! It was not so Instagrammy dish but it was okay!! I was really relaxed here!! It is awesome place!! Enjoy!!&rdquo;</p>
                      <div class="author">
                        <img src="images/pinkhead.png" alt="Image placeholder" class="mb-3">
                        <h4>Erine Taguchi</h4>
                        <p>Google Review</p>
                      </div>
                    </blockquote>
                  </div>
                  <div class="item">
                    <blockquote class="testimonial">
                      <p>&ldquo;Absolutely amazing burnt cheesecake. Coffee quite good. Stunning interior, draped with plants and pink hues! 😍 Perfect for the Instagram feed.&rdquo;</p>
                      <div class="author">
                        <img src="images/mayhead.png" alt="Image placeholder" class="mb-3">
                        <h4>May Wong</h4>
                        <p>Google Review</p>
                      </div>
                    </blockquote>
                  </div>
                  <div class="item">
                    <blockquote class="testimonial">
                      <p>&ldquo;Really nice coffee place with a nice atmosphere and style of design/furniture. Nice music and nice staff. Also good price value. Would come again&rdquo;</p>
                      <div class="author">
                        <img src="images/romanhead.png" alt="Image placeholder" class="mb-3">
                        <h4>Roman Ittermann</h4>
                        <p>Google Review</p>
                      </div>
                    </blockquote>
                  </div>
                  <div class="item">
                    <blockquote class="testimonial">
                      <p>&ldquo;Burnt cheesecake, one of the best I've had.&rdquo;</p>
                      <div class="author">
                        <img src="images/bluehead.png" alt="Image placeholder" class="mb-3">
                        <h4>Kevin Lim</h4>
                        <p>Google Review</p>
                      </div>
                    </blockquote>
                  </div>
                </div>
              </div>
            </div>
          </div>  
        </div> <!-- .section -->


		<div class="container-fluid">
			<div class="map-responsive">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d63553.16509512183!2d100.2743269!3d5.4058789!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304ac394fc5985b3%3A0xfa676e0fef109db0!2sMatcho%20Cafe!5e0!3m2!1sen!2smy!4v1594670243650!5m2!1sen!2smy" width="600" height="450"
					frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
		</div>


<?php
	include ('footer.php');
?>