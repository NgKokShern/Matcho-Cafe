<?php

	include('adminpanelheader.php');
?>


        <div class="section"  data-aos="fade-up">
          <div class="container">
            <div class="row section-heading justify-content-center mb-5">
			<div class="col-md-8 text-center">
                <h2 class="heading mb-3">Reservation</h2>
				<p class="sub-heading mb-5"><a href="home.php#section-reservation">Add Reservations</a><br /><a href="adminpaneledit.php">Update</a><br /><a href="adminpaneldelete.php">Delete</a></p>
            </div>
			
            <div class="row">
				<table style="width:100%">
				  <tr >
					<th>ID</th>
					<th>Name</th>
					<th>Email</th> 
					<th>Phone Number</th>
					<th>No.Person</th>
					<th>Date</th>
					<th>Time</th>
					<th>Message</th>
				  </tr>
				  <?php
				  
					$dbc = mysqli_connect('localhost','root','');
					mysqli_select_db($dbc,'matchodatabase');
					
					$query = 'SELECT * FROM reservation ORDER BY RDate desc';
					
					if($result = mysqli_query($dbc,$query)){
						while($row = mysqli_fetch_array($result)){
							print "<tr>
									<td>{$row['idUsers']}</td>
									<td>{$row['CName']}</td>
									<td>{$row['CEmail']}</td>
									<td>{$row['Phone']}</td>
									<td>{$row['NumPerson']}</td>
									<td>{$row['RDate']}</td>
									<td>{$row['RTime']}</td>
									<td>{$row['CMessage']}</td>
					
									</tr>";
					
						}
					}
					mysqli_close($dbc);
				  
				  ?>
	
				</table>
				
			
			

            </div>
          </div>
        </div> <!-- .section -->
		
	
<?php
	
	include('adminpanelfooter.php');
	
?>