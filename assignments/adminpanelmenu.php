<?php

	include('adminpanelheader.php');
?>


        <div class="section"  data-aos="fade-up">
          <div class="container">
            <div class="row section-heading justify-content-center mb-5">
			<div class="col-md-8 text-center">
                <h2 class="heading mb-3">Menu Items</h2>
				<p class="sub-heading mb-5"><a href="adminpanelmenuadd.php">Add New Items</a><br /><a href="adminpanelmenuedit.php">Update</a><br /><a href="adminpanelmenudelete.php">Delete</a></p>
				<?php
				
					if(isset($_GET['add'])){
						if($_GET['add'] == "success"){
							echo '<p style="color:green">Item Added Successfully!</p>';
						}
					}
					else if(isset($_GET['update'])){
						if($_GET['update'] == "success"){
							echo '<p style="color:green">Update Successfully!</p>';
						}
					}
					else if(isset($_GET['delete'])){
						if($_GET['delete'] == "success"){
							echo '<p style="color:green">Delete Successfully!</p>';
						}
					}
				?>
            </div>
				
            </div>
            <div class="row">
				<table style="width:100%">
				  <tr>
					<th>ID</th>
					<th>Name</th>
					<th>Image</th> 
					<th>Price</th>
					<th>Description</th>
					<th>Type</th>
				  </tr>
				  <?php
				  
					$dbc = mysqli_connect('localhost','root','');
					mysqli_select_db($dbc,'matchodatabase');
					
					$query = 'SELECT * FROM menu ORDER BY ItemType';
					
					if($result = mysqli_query($dbc,$query)){
						while($row = mysqli_fetch_array($result)){
							print "<tr>
									<td>{$row['ItemId']}</td>
									<td>{$row['ItemName']}</td>
									<td>{$row['ItemImage']}</td>
									<td>{$row['ItemPrice']}</td>
									<td>{$row['ItemDesc']}</td>
									<td>{$row['ItemType']}</td>
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