<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!--start: css-modal-->
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	 <link href="newMenu.css" rel="stylesheet">

	 <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	

	 <?php include('menu.php'); ?>


		<style>

		#parallax {
		    /* The image used */
		    background-image: url("place2.jpg");

		    /* Set a specific height */
		    min-height: 500px; 

		    /* Create the parallax scrolling effect */
		    background-attachment: fixed;
		    background-position: center;
		    background-repeat: no-repeat;
		    background-size: cover;


			}

			

	</style>

</head>
<body>
	<!--start: Header -->
	<header>
		
		<!--start: Container -->
		<div class="container">
						
			<!--start: Row -->
			<div class="row-fluid">
					
				<!--start: Navigation -->
				<div class="navigation"> 
				
					

			      	<div class="navbar">  
					    <div class="navbar-inner">
					      <a class="navbar-brand" href="#">Naughty Nachos</a>
					    </div>
					    <ul class="nav navbar-nav">
					      
						  <li><a href="../homepage.php" class="home">Home</a></li>
						  <li ><a href="#">Menu</a></li>
						  <li><a href="../homepage.php/#container-aboutus" class="about">About</a></li>
						  <li><a href="../Reservation.php" class="services">Reservation</a></li>
						  <li><a href="#" class="contact">Contact</a></li>
					    </ul>
					 
					</div>
				
				
				</div>	
				<!--end: Navigation -->		
			</div>
			<!--end: Row -->
			
		</div>
		<!--end: Container-->			
			
	</header>
	<!--end: Header-->

	<!-- start: parallax -->
	<div id="parallax">
		<div class="center">
		<font color= "white">BOOK YOUR TABLE </font>
		<br>
		<font face="Crimson Text" font size="4">We accept reservation. Call us or complete the form below.</font>
		</div>
	</div>
	<!--end: parallax-->

	<div class ="whole-container" style="height: 400px; background-color: black; width: 100%;">
		<!-- start: accordion -->
	<div class =" accordion-container">
		<div class="col-md-8">
			<button class="accordion">Wings</button>
				<div class="panel">
		          <div class ="items"> <!-- start: items div-->	
		              <div class="col-lg-12">
		            <?php
		            		require_once 'dbconfig.php';
		            		$query = "SELECT * FROM menu WHERE category ='wings' ORDER BY product_id ASC";
		            		$stmt = $DBcon->prepare( $query );
		            		$stmt->execute();
		            		while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
								?>
		                   	<ul>
		                   		<li>
			                    <div class="w3-panel">
				                    <button class="w3-btn w3-block w3-black" data-toggle="modal" data-target="#view-modal" data-id="<?php echo $row['product_id']; ?>" id="getUser" class="btn btn-sm btn-info"><?php echo $row["product_name"]."&nbsp;".$row['price']; ?></button>
				                </div>
			                    </li>
		                   	</ul>
		                    <?php
		                }  
		                ?>
		                 </div> <!--end of col-ms-12-->

		                 <div id="view-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
			             	<div class="modal-dialog"> 
			                  <div class="modal-content"> 
			                  
			                       <div class="modal-header"> 
			                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
			                            <h4 class="modal-title">
			                            	<i class="glyphicon glyphicon-user"></i> User Profile
			                            </h4> 
			                       </div> 
			                       <div class="modal-body"> 
			                       
			                       	   <div id="modal-loader" style="display: none; text-align: center;">
			                       	   	<img src="ajax-loader.gif">
			                       	   </div>
			                       
			                       	   <div id="dynamic-content">
			                                        
			                           <div class="row"> 
			                           	<form method ="post" action="index.php">
			                                <div class="col-md-6"> 
			                                	
			                                	<p id = "prod_name" style ="color:black; font-size:25px"> </p>
												<p style ="color:black; font-size:15px; float:left">&#8369;</p>
												<p style ="color:black; font-size:15px; float:center" id ="prod_price"> </p>
	                                	        <p id = "prod_desc" style ="color:black; font-size:15px"> </p>

	                                	        <hr width="100%">
												<p style ="color:black; font-size:15px">Special Request ?<p>
												<textarea class="form-control" id="message" name="message" placeholder="MESSAGE" style="height:100px;" ></textarea>	
	                                	    </div>

	                                	     <div class="col-md-6">

	                                	     	 <?php
								            		require_once 'dbconfig.php';
								            		$query = "SELECT img FROM menu WHERE category ='wings' AND product_id = '1'";
								            		$stmt = $DBcon->prepare( $query );
								            		$stmt->execute();
								            		while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
														?>
								                   		<img src="<?php echo $row['img']; ?>" width="90%" height="30%">
								                   		<script type="text/javascript">
								                   		//	alert("<?php echo $row['img']; ?>");
								                   		</script>
								                    <?php
								                }  
								                ?>
																
																
																<label style="padding:5px"> Quantity : </label> <input type="number" name="quantity"  min="1" max="50" value ="1">
																<!--<input type="text" name ="quantity" class="form-control" value=" "/>-->
																<input type="hidden" name ="hidden_id" = id=id_Val value=""/>
																<input type="hidden" name ="hidden_name" id ="nameVal" value=""/>
																
																<input type="hidden" name ="hidden_price" id="priceVal" value=""/>
																
			                            	</div>

			                            	<div class="col-lg-12">
			                            		<input type="submit"  name="add_to_cart" style="margin-top:5px;"  class="w3-button w3-block w3-black" value="+ ADD TO MY ORDER"/>
			                            	</div>

			                            	</form>
			                               
			                          </div>
			                          
			                          </div> 
			                             
			                        </div> 
			                        <div class="modal-footer"> 
			                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
			                        </div> 
			                        
				                 </div> 
				              </div>
				       		</div><!-- /.modal -->    
			        </div> <!--end of items div-->
		        </div> <!-- end of panel -->

				<button class="accordion">Burgers</button>
				<div class="panel">
				 	 <div class ="items"> <!-- start: items div-->	
		              <div class="col-lg-12">
		            <?php
		            		require_once 'dbconfig.php';
		            		$query = "SELECT * FROM menu WHERE category ='nachos' ORDER BY product_id ASC";
		            		$stmt = $DBcon->prepare( $query );
		            		$stmt->execute();
		            		while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
								?>
		                   	<ul>
		                   		<li>
			                      <div class="w3-panel">
				                    <button class="w3-btn w3-block w3-black" data-toggle="modal" data-target="#view-modal" data-id="<?php echo $row['product_id']; ?>" id="getUser" class="btn btn-sm btn-info"><?php echo $row["product_name"]."&nbsp;".$row['price']; ?></button>
				                </div>
			                    </li>
		                   	</ul>
		                    <?php
		                }  
		                ?>
		                 </div> <!--end of col-ms-12-->

		                 <div id="view-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
			             	<div class="modal-dialog"> 
			                  <div class="modal-content"> 
			                  
			                       <div class="modal-header"> 
			                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
			                            <h4 class="modal-title">
			                            	<i class="glyphicon glyphicon-user"></i> User Profile
			                            </h4> 
			                       </div> 
			                       <div class="modal-body"> 
			                       
			                       	   <div id="modal-loader" style="display: none; text-align: center;">
			                       	   	<img src="ajax-loader.gif">
			                       	   </div>
			                       
			                       	   <div id="dynamic-content">
			                                        
			                           <div class="row"> 
			                               
			                          </div>
			                          
			                          </div> 
			                             
			                        </div> 
			                        <div class="modal-footer"> 
			                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
			                        </div> 
			                        
			                 </div> 
			              </div>
			       		</div><!-- /.modal -->    
		     	   </div> <!--end of items div-->
				</div>

				<button class="accordion">Nachos</button>
				<div class="panel">
				   <div class ="items"> <!-- start: items div-->	
		              <div class="col-lg-12">
		            <?php
		            		require_once 'dbconfig.php';
		            		$query = "SELECT * FROM menu WHERE category ='burgers' ORDER BY product_id ASC";
		            		$stmt = $DBcon->prepare( $query );
		            		$stmt->execute();
		            		while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
								?>
		                   	<ul>
		                   		<li>
			                    <div class="w3-panel">
				                    <button class="w3-btn w3-block w3-black" data-toggle="modal" data-target="#view-modal" data-id="<?php echo $row['product_id']; ?>" id="getUser" class="btn btn-sm btn-info"><?php echo $row["product_name"]."&nbsp;".$row['price']; ?></button>
				                </div>
			                    </li>
		                   	</ul>
		                    <?php
		                }  
		                ?>
		                 </div> <!--end of col-ms-12-->

		                 <div id="view-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
			             	<div class="modal-dialog"> 
			                  <div class="modal-content"> 
			                  
			                       <div class="modal-header"> 
			                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
			                            <h4 class="modal-title">
			                            	<i class="glyphicon glyphicon-user"></i> User Profile
			                            </h4> 
			                       </div> 
			                       <div class="modal-body"> 
			                       
			                       	   <div id="modal-loader" style="display: none; text-align: center;">
			                       	   	<img src="ajax-loader.gif">
			                       	   </div>
			                       
			                       	   <div id="dynamic-content">
			                                        
			                           <div class="row"> 
			                               
			                          </div>
			                          
			                          </div> 
			                             
			                        </div> 
			                        <div class="modal-footer"> 
			                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
			                        </div> 
			                        
			                 </div> 
			              </div>
			       		</div><!-- /.modal -->    
		        </div> <!--end of items div-->
				</div> <!-- end of panel-->

		</div> <!-- end: col-md-8--> 
		
	</div> <!-- end: accordion container -->
	<!-- end: accordion -->


	<div class = "Orders">
		<div class = "col-md-4">
			<h3>Order Details</h3>
				<div class ="table-reponsive">
					<table class= "table table-bordered">
						<tr>
							<th width="40%">Item Name </th>  
							<th width="10%">Quantity </th>
							<th width="20%">Price </th>
							<th width="15%">Total </th>
							<th width="5%">Action </th>
						</tr>

						<form method = "GET" action ="menu.php">
						<?php
							$storage = array();
							$quantity = array();
							$price = array();
							$totalP = array();
							$grand = array();

							if(!empty($_SESSION["shopping_cart"]))
							{
								$total = 0;
								foreach($_SESSION["shopping_cart"] as $keys => $values)
								{
						?>
						<tr>
						
							<td><?php echo $values["item_name"]; array_push($storage, $values["item_name"]); ?></td>
							<td><?php echo $values["item_quantity"]; array_push($quantity,$values["item_quantity"]); ?> asd</td>
							<td>P<?php echo $values["item_price"]; array_push($price,$values["item_price"]);?> </td>
							<td><?php echo number_format($values["item_quantity"] * $values["item_price"], 2); array_push($totalP,number_format($values["item_quantity"]* $values["item_price"],2)); ?> </td>
							<td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td> 
						
							
						</tr>

						<?php
								 $total = $total + ($values["item_quantity"] * $values["item_price"]);
								}
							}
							?>	
								<tr>
								<td colspan ="3" alight="right"></td>
								<td></td>
								<td><a href="index.php?action=remove"><span class="text-danger">Remove All</span></a></td>
								</tr>
								<tr>
								<td colspan ="3" align="right"> Total</td>
								<td align ="right"> P  <?php echo number_format($total, 2); array_push($grand,number_format($total,2));?> </td>
								<td></td>
								</tr>
						</form>
					</table>
					
				</div> <!-- end : table-responsive -->

					<button type="button" class="btn btn-outlined btn-primary" data-toggle="modal" data-target="#myModal">CHECKOUT</button>

					<!-- Modal -->
					<div id="myModal" class="modal fade" role="dialog">
					  <div class="modal-dialog"> <!-- start: modal-dialog -->
					    <div class="modal-content"> <!-- start: modal-content -->
					      <div class="modal-header"> <!-- start: modal-header -->
					        <button type="button" class="close" data-dismiss="modal">&times;</button>
					        <h4 class="modal-title"></h4>
					      </div> <!-- end: modal-header -->

					      	<div class="modal-body"> <!-- start: modal body -->
					        	<div class = "contact-info"> <!-- start: Contact info -->
									<div class = "bg">  <!-- start: bg -->
										<form name = "Contact-info" method = "POST" action = "index.php?action=remove" onsubmit="div_show()">
										<h4>Let's add your contact details</h4>

										<table>
											<tr>
												<td>
													<input type = "text" name = "firstname" value="" placeholder = "first name" required=""><br>
												</td>
											</tr>
											<tr>
												<td>
													<input type = "text" name = "lastname" value="" placeholder = "last name" required="">
												</td>
											</tr>
											<tr>
												<td>
													<input type = "email" name ="email" value ="" placeholder = "you@example.com" required="">
												</td>
											</tr>
											<tr>
												<td>
													<input type ="number" name = "phonenumber" value ="" placeholder ="phone" required="">
												</td>
											</tr>
										</table>
				
		
										<iframe name="myIframe" frameborder="0" border="0" cellspacing="0" style="border-style: none;width: 100%; height: 120px;"></iframe>
									</div> <!-- end: bg -->

							</div> <!-- end: Contact info -->
					    </div> <!-- end: modal body-->


						<div class="modal-footer"> <!-- start: modal footer -->
							<input type = "submit" name = "submit" class = "btn btn-outlined btn-primary right" id="sub">
								</form>
								<?php
				
  
						    // Create connection
						    $connect = mysqli_connect("localhost", "root", "", "nachos-admin"); 

						if(isset($_POST["submit"])){

						        $firstname = $_POST['firstname'];
						        $lastname = $_POST['lastname'];
						        $email = $_POST['email'];
						        $cp = $_POST['phonenumber'];

						        $query = mysqli_query($connect, "INSERT INTO customers (lastname,firstname,email,phone) values ('$lastname','$firstname','$email',$cp);");
						      
						      echo '<script>window.location="index.php"</script>';

						      }

							$a = "";
							$b = 0;
							$c = 0;
							$d = 0;
							$e = 0;
										for($n = 0; $n<count($storage);$n++){
										
									 
											$a = json_encode($storage[$n]);
											$b = json_encode($quantity[$n],JSON_NUMERIC_CHECK);
											$c = json_encode($price[$n],JSON_NUMERIC_CHECK);
											$d = json_encode($totalP[$n],JSON_NUMERIC_CHECK);
											$e = json_encode($total,JSON_NUMERIC_CHECK);

						$query = mysqli_query($connect, "INSERT INTO transaction (cust_id,line_id,order_name,quantity, request, subtotal,total,dte) value(1,$n+1,$a,$b,'None',$c,$e,'02/15/18')");
						
							}
					?>

					 		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				 		</div> <!-- end: modal footer -->
					</div> <!-- end: modal-content -->
			 	</div> <!-- end: modal - dialog -->
			</div> <!-- end: mymodal -->
					
		</div> <!-- end: col-md-4 -->
	</div> <!--end: Orders-->
				
		
	</div> <!-- end: whole-container -->


	

	<div class ="space" style="height: 400px; background-color: red; width: 100%;">
	</div>
	



			<script>
			var acc = document.getElementsByClassName("accordion");
			var i;

			for (i = 0; i < acc.length; i++) {
			  acc[i].addEventListener("click", function() {
			    this.classList.toggle("active");
			    var panel = this.nextElementSibling;
			    if (panel.style.maxHeight){
			      panel.style.maxHeight = null;
			    } else {
			      panel.style.maxHeight = panel.scrollHeight + "px";
			    } 
			  });
			}


			</script>


	
<script>
$(document).ready(function(){
	
	$(document).on('click', '#getUser', function(e){
		
		e.preventDefault();
		
		var uid = $(this).data('id'); // get id of clicked row
		
		$('#dynamic-content').hide(); // hide dive for loader
		$('#modal-loader').show();  // load ajax loader
		
		$.ajax({
			url: 'getuser.php',
			type: 'POST',
			data: 'id='+uid,
			dataType: 'json'
		})
		.done(function(data){
			console.log(data);
			$('#dynamic-content').hide(); // hide dynamic div
			$('#dynamic-content').show(); // show dynamic div
			$('#prod_name').html(data.product_name);
			$('#prod_price').html(data.price);
			$('#prod_img').html(data.img);
			$('#prod_category').val(data.category);
			$('#prod_desc').html(data.description);
			$('#modal-loader').hide();    // hide ajax loader
		})

		.done(function(data){
			console.log(data);
			$('#dynamic-content').hide(); // hide dynamic div
			$('#dynamic-content').show(); // show dynamic div
			$('#id_Val').val(uid);
			$('#nameVal').val(data.product_name);
			$('#priceVal').val(data.price);
			$('#modal-loader').hide();    // hide ajax loader
		})
		.fail(function(){
			$('.modal-body').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
		});
		

	});
	
});



</script>




</body>
</html>