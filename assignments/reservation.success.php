<?php

	include('header.php');
	
?>

		<div class="section bg-light" data-aos="fade-up">
          <div class="container">
            <div class="row section-heading justify-content-center">


			<div class="row mb-4">
			<div class="form-group">
				<?php
				
					$dbc = mysqli_connect('localhost','root','');
						mysqli_select_db($dbc,'matchodatabase');
						
						$query = 'SELECT * FROM reservation ORDER BY idUsers desc LIMIT 1';

						if($result = mysqli_query($dbc,$query)){
							if($row = mysqli_fetch_array($result)){
								{
									echo '<h3 class="sub-heading mb-5">Reservation Successful!</h3>';
									echo '<br><p>Name: ';
									echo $row['CName'];
									echo '</p><br />';
									echo '<p>Email: ';
									echo $row['CEmail'];
									echo '</p><br />';
									echo '<p>Phone Number: ';
									echo $row['Phone'];
									echo '</p><br />';
									echo '<p>Number of person: ';
									echo $row['NumPerson'];
									echo '</p><br />';
									echo '<p>Date: ';
									echo $row['RDate'];
									echo '</p><br />';
									echo '<p>Time: ';
									echo $row['RTime'];
									echo '.00PM</p><br />';
									echo '<p>Message: ';
									echo $row['CMessage'];
									echo '</p><br />';
									
									
								}
							}
						}
						mysqli_close($dbc);
		
				?>
			  </div>
			</div>
            </div>
           
          </div>
        </div> <!-- .section -->

			
	
<?php
	
	include('footer.php');
	
?>

