<?php
include("includes/db.php");
include("functions/functions.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ECOMM WEBSITE</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/heroic-features.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
					<li>
                        <a href="#">All Products </a>
                    </li>
					<li>
                        <a href="#">Sign up</a>
                    </li>
										
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h1>618 DIGI STORE</h1>
            <p>Welcome to world of online digital products where one explore not only wide varieties of products but also different brands.We beleieve customer satisfaction is our main motto.Hope we can provide you what you wants.</p>
            <p><form method="get" action="results.php" enctype="multipart/form-data">
					<input type="text" name="user_query" placeholder="search a product">
					<input type="submit" name="search" value="search">
					
            </p>
        </header>


        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>YOU HAVE SEARCHED FOR:</h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">
			<?php
			if(isset($_GET['search']))
			{
			$user_keyword=$_GET['user_query'];
			$get_products="select * from products where product_title='$user_keyword'";
			$run_products=mysqli_query($conn,$get_products);
			while($row=mysqli_fetch_array($run_products))
			{
					
				$pro_id=$row['product_id'];
				$pro_title=$row['product_title'];
				$pro_cat=$row['cat_id'];
				$pro_brand=$row['brand_id'];
				$pro_desc=$row['product_desc'];
				$pro_price=$row['product_price'];
				$pro_img=$row['product_img1'];
				
			
			
           echo" <div class='col-md-3 col-sm-6 hero-feature'>
                <div class='thumbnail'>
                    <img src='admin_area/product_images/$pro_img' alt=''>
                    <div class='caption'>
                        <h3>$pro_title</h3>
						<p><b>Rs $pro_price</b></p>
                        <p>$pro_desc</p>
                        <p>
                            <a href='index3.php' class='btn btn-primary'>Buy Now!</a> <a href='#' class='btn btn-default'>More Info</a>
                        </p>
                    </div>
                </div>
            </div>";
			}
			

			}			
			?>
                   <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
