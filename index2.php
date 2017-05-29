<?php
include("includes/db.php");
?>
<html>
<head>
<title>
Ecom
</title>
<link rel="stylesheet" href="styles/stye.css" media="all" type="text/css" />
</head>
<body>
		<div class="main_wrapper">
		
			<div class="head_wrapper">
			
			<img src="images/logo.png" style="height:65px; width:93px;margin-top:0px;margin-left:0px">
			<img src="images/giphy.GIF" style="height:65px; width:1400px;margin-top:-65px;margin-left:94px">
			
			</div>
			
			
		<div class="nav_bar" style="
    
    height: 50px;
    width: 1542px;
    background-color:orange;
	color:white;">  
		<div id="menu">
			<ul id="menu">
				<li><a href="#">HOME</a></li>
				<li><a href="#">ALL PRODUCTS</a></li>
				<li>	<a href="#">MY ACCOUNT</a></li>
				<li>	<a href="#">SIGNUP</a></li>
				<li>	<a href="#">SHOPPING CART</a></li>
				<li>	<a href="#">CONTACT US</a></li>
			
					<div id="form">
					<form method="get" action="results.php" enctype="multipart/form-data">
					<input type="text" name="user_query" placeholder="search a product">
					<input type="submit" name="search" value="search">
					</div>
			
			
	
		
	</ul>
	</div>
	</div>
		
		</div id="right_content">
		<div id="oh" style="background-color:black; color:white;margin-top:16px;margin-left:0px;height:45px;width:1566px;">
		<b style="float:right; color:yellow;margin-right:302px;">     SHOPPING CART!</b>
		<b>  <b>
		<b style="float:right; padding:15px;">Welcome GUEST</b>
		<b style="margin-left:150px;">ITEMS</b>
		<b style="padding:30px";>PRICE</b>
		
		
		
		</div>
		
		</div>
			</div>
			<div class="content_area"> 
				<div id="product_box" style="width:780px;padding:10px;margin-left:30px;margin-top:10px;margin-bottom:10px;text-align:center;>
				<?php/*
				$get_products="select * from products order by rand() LIMIT 0,6";
				$run_products=mysqli_query($conn,$get_products);
				while($row_products=mysqli_fetch_array($run_products))
				{
					$pro_id=$row_products['product_id'];
						$pro_title=$row_products['product_title'];
							$pro_cat=$row_products['cat_id'];
								$pro_brand=$row_products['brand_id'];
								$pro_desc=$row_products['product_price'];
								$pro_image=$row_products['product_img1'];
								echo "
								<div id='single_product'>
								<h3>$pro_title</h3>
								<img src='admin_area/product_images'>
								</div>";
				}
				
				*/
				?>
		
		
		</div>
			</div> 
			<div class="leftside_bar">
					<div id="sidebar_title">CATEGORIES</div>
					<ul id="cats">
						<?php
						$stmt="SELECT * FROM categories";
						$stmt1=mysqli_query($conn,$stmt);
						while($row=mysqli_fetch_array($stmt1))
						{
							$cat_id=$row["cat_id"];
							$cat_title=$row["cat_title"];
							echo"<li><a href='index.php?cat=$cat_id'>$cat_title</a></li>";
						}
						?>
						
					</ul>
			
			
			<div id="sidebar_title">BRANDS</div>
					<ul id="cats">
						<?php
						$stmt="SELECT * FROM brands";
						$stmt1=mysqli_query($conn,$stmt);
						while($row=mysqli_fetch_array($stmt1))
						
						{
							$brand_id=$row["brand_id"];
							$brand_title=$row["brand_title"];
							echo"<li><a href='index.php?brand=$brand_id'>$brand_title</a></li>";
						}
						?>
						
					</ul>
			
			</div>
			</div>
			</div>
			
			<div class="footer">          
			<h1 style="color:black;padding-top:30px; text-align:center "><b>&COPY -2017-By www.mayurbansal.com</b></h1>
			</div>
		


</body>
</html>
