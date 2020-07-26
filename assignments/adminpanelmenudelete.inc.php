<?php

	include('adminpanelheader.php');
?>

		<div class="section bg-light" data-aos="fade-up">
          <div class="container">
            <div class="row section-heading justify-content-center mb-5">
              <div class="col-md-8 text-center">
                <h3 class="heading mb-3">Are you sure you want to delete this record?</h3>
                 
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-10 p-5 form-wrap">
                <form id="form" class="form" action="" method="post">
				<div class="row mb-4">
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
					
					if(isset($_POST['deleteitems-submit'])){
						
						$id = $_POST['id'];
						

						$query = "SELECT * FROM menu WHERE ItemId=$id";
					
					if($result = mysqli_query($dbc,$query)){
						if($row = mysqli_fetch_array($result)){
							
							
							print "<tr>
									<td>{$row['ItemId']}</td>
									<td>{$row['ItemName']}</td>
									<td>{$row['ItemImage']}</td>
									<td>{$row['ItemPrice']}</td>
									<td>{$row['ItemDesc']}</td>
									<td>{$row['ItemType']}</td>
									</tr>
									";
									
							$_SESSION['id'] = $id;
									
						
							
						}
					}
					}
				
				?>
				</table>
				</div>
				
					
                  <div class="row justify-content-center">
                    <div class="col-md-4">
                      <input type="submit" class="btn btn-primary btn-outline-primary btn-block" value="Confirm" name="confirmdeleteitems-submit">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
		  
        </div> <!-- .section -->

<?php


if(isset($_POST['confirmdeleteitems-submit'])){
	
	require 'dbh.inc.php';
	
	$id = $_SESSION['id'];
	$sql = "DELETE FROM menu WHERE ItemId='$id'";
	$query_run = mysqli_query($conn,$sql);
	
	if($query_run){
		
		
		header("Location:../assignments/adminpanelmenu.php?delete=success");
	}
	else{
		
		header("Location:../assignments/adminpanelmenu.php?delete=failed");
	}
}

?>
		
<?php
	
	include('adminpanelfooter.php');
	
?>








