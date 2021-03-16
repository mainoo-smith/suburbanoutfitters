<html>
<head>
    <meta charset="UTF-8">
    <title>Suburban Outfitters</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="../thirdparty/bootstrap/css/bootstrap.min.css">
    <!-- Lightbox-->
    <link rel="stylesheet" href="../thirdparty/lightbox2/css/lightbox.min.css">
    <!-- Range slider-->
    <link rel="stylesheet" href="../thirdparty/nouislider/nouislider.min.css">
    <!-- Bootstrap select-->
    <link rel="stylesheet" href="../thirdparty/bootstrap-select/css/bootstrap-select.min.css">
    <!-- Owl Carousel-->
    <link rel="stylesheet" href="../thirdparty/owl.carousel2/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/thirdparty/owl.carousel2/assets/owl.theme.default.css">
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="../css/themestyles.css" id="theme-stylesheet">
    <!-- Favicon-->
    <link rel="shortcut icon" href="../img/SUlogo.png">
    <link rel="stylesheet" href="../css/loginstyles.css" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
<div class="page-holder">
    <!-- navbar-->
    <header class="header bg-white">
        <div class="container px-0 px-lg-3">
            <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0"><a class="navbar-brand" href="index.php"><span class="font-weight-bold text-uppercase text-dark">Suburban Outfitters</span></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <!-- Link--><a class="nav-link active" href="index.php">Home</a>
                        </li>

                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="adminacct.php"> <i class="fas fa-user-alt mr-1 text-gray"></i>Logged in  As Admin</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
</div>
<section class="py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-6">
                <!-- PRODUCT SLIDER-->
                <div class="row m-sm-0">
                    <div class="col-sm-2 p-sm-0 order-2 order-sm-1 mt-2 mt-sm-0">
                        <div class="owl-thumbs d-flex flex-row flex-sm-column" data-slider-id="1">
                            <div class="owl-thumb-item flex-fill mb-2 mr-2 mr-sm-0"><img class="w-100" src="/suburbanoutfitters/img/redshirtdetail1.png" alt="..."></div>
							  </div>
                    </div>
                    <div class="col-sm-10 order-1 order-sm-2">
                        <div class="owl-carousel product-slider" data-slider-id="1"><a class="d-block" href="/suburbanoutfitters/img/redshirtdetail1.png" data-lightbox="product" title="Product item 1"><img class="img-fluid" src="/suburbanoutfitters/img/redshirtdetail1.png" alt="..."></a><a class="d-block" href="/suburbanoutfitters/img/redshirtdetail1.png" data-lightbox="product" title="Product item 2"><img class="img-fluid" src="/suburbanoutfitters/img/redshirtdetail1.png" alt="..."></a><a class="d-block" href="/suburbanoutfitters/img/redshirtdetail1.png" data-lightbox="product" title="Product item 3"><img class="img-fluid" src="/suburbanoutfitters/img/redshirtdetail1.png" alt="..."></a><a class="d-block" href="/suburbanoutfitters/img/redshirtdetail1.png" data-lightbox="product" title="Product item 4"><img class="img-fluid" src="/suburbanoutfitters/img/redshirtdetail1.png" alt="..."></a></div>
                    </div>
                </div>
            </div>
<div  class="container">
    <form method="post" action="aproducts.php">

    <fieldset style="width:500px;">

        <h4>Product Details</h4>

        <strong class="text-uppercase"><p>Product</p>
        <input type="text" id="Product Name" placeholder=""/>
        <br><br>
		
		  <p>Sell Price</p>
        <input type="text" id="Price" placeholder="$"/>
        <br><br>

        <p>Description</p>
        <input type="text" id="Description" placeholder=""/>
        <br><br>
  
		 <tr>
            <label for="quantity">Quantity:</label><tr>
            <tr><input type="number" id="quantity" name="quantity" min="1" max="5">
        </tr>
		<br><br>
			 
		<p>SKU</p>
        <input type="text" id="SKU" placeholder=""/>
        <br><br>
		
		  <p>Category</p>
        <input type="text" id="Category" placeholder=""/>
        <br><br>

        <p>Tags</p>
        <input type="text" id="Tags" placeholder=""/>
        <br><br>
		</div>

    </fieldset>

</form>
<br><br>
<div>
    <hr>
    <h5>Inventory</h5>
    <form method="post" action="">
    <table style="width:100%">
        <tr>
            <label for="quantity">Quantity:</label><tr>
            <tr><input type="number" id="quantity" name="quantity" min="1" max="5">
        </tr>
        <tr>
            <label for="Size">Size:</label>
            <input type="Size" id="Size" name="Size">
        </tr>
        <tr>
            <label for="price">Price:</label>
            <input type="price" id="price" name="Price">
        </tr>
    <br><br>
        <tr>
            <label for="quantity">Quantity:</label><tr>
        <tr><input type="number" id="quantity" name="quantity" min="1" max="5">
        </tr>
        <tr>
            <label for="Size">Size:</label>
            <input type="Size" id="Size" name="Size">
        </tr>
        <tr>
            <label for="price">Price:</label>
            <input type="price" id="price" name="Price">
        </tr>
        <br><br>
        <input type="submit" value="Update Inventory">
        <br><br>
    </form>
    </table>
</div>
    <div class="col-lg-12 form-group" style="text-align: center">
        <button class="btn btn-dark" type="submit"><a href="aproducts.php">Cancel</a></button>
    </div>
</div>
</body>
</html>

