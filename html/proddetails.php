<!DOCTYPE html>
<html lang="en">
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
                        </li>
                        <li class="nav-item">
                            <!-- Link--><a class="nav-link" href="/suburbanoutfitters/html/proddetails.php">Product detail</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="cart.php"> <i class="fas fa-dolly-flatbed mr-1 text-gray"></i>Cart<small class="text-gray">(2)</small></a></li>
                        <li class="nav-item"><a class="nav-link" href="/suburbanoutfitters/html/login.php"> <i class="fas fa-user-alt mr-1 text-gray"></i>Login</a></li>
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
                            <div class="owl-thumb-item flex-fill mb-2 mr-2 mr-sm-0"><img class="w-100" src="/suburbanoutfitters/img/redshirtdetail1.png" alt="..."></div>
                            <div class="owl-thumb-item flex-fill mb-2 mr-2 mr-sm-0"><img class="w-100" src="/suburbanoutfitters/img/redshirtdetail1.png" alt="..."></div>
                            <div class="owl-thumb-item flex-fill mb-2"><img class="w-100" src="/suburbanoutfitters/img/redshirtdetail1.png" alt="..."></div>
                        </div>
                    </div>
                    <div class="col-sm-10 order-1 order-sm-2">
                        <div class="owl-carousel product-slider" data-slider-id="1"><a class="d-block" href="/suburbanoutfitters/img/redshirtdetail1.png" data-lightbox="product" title="Product item 1"><img class="img-fluid" src="/suburbanoutfitters/img/redshirtdetail1.png" alt="..."></a><a class="d-block" href="/suburbanoutfitters/img/redshirtdetail1.png" data-lightbox="product" title="Product item 2"><img class="img-fluid" src="/suburbanoutfitters/img/redshirtdetail1.png" alt="..."></a><a class="d-block" href="/suburbanoutfitters/img/redshirtdetail1.png" data-lightbox="product" title="Product item 3"><img class="img-fluid" src="/suburbanoutfitters/img/redshirtdetail1.png" alt="..."></a><a class="d-block" href="/suburbanoutfitters/img/redshirtdetail1.png" data-lightbox="product" title="Product item 4"><img class="img-fluid" src="/suburbanoutfitters/img/redshirtdetail1.png" alt="..."></a></div>
                    </div>
                </div>
            </div>
            <!-- PRODUCT DETAILS-->
            <div class="col-lg-6">
                <h1>Red T-Shirt</h1>
                <p class="text-muted lead">$25</p>
                <p class="text-small mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut ullamcorper leo, eget euismod orci. Cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. Vestibulum ultricies aliquam convallis.</p>
                <div class="row align-items-stretch mb-4">
                    <div class="col-sm-5 pr-sm-0">
                        <div class="border d-flex align-items-center justify-content-between py-1 px-3 bg-white border-white"><span class="small text-uppercase text-gray mr-4 no-select">Quantity</span>
                            <div class="quantity">
                                <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                                <input class="form-control border-0 shadow-0 p-0" type="text" value="1">
                                <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 pl-sm-0"><a class="btn btn-dark btn-sm btn-block h-100 d-flex align-items-center justify-content-center px-0" href="cart.php">Add to cart</a></div>
                </div>
                <ul class="list-unstyled small d-inline-block">
                    <li class="px-3 py-2 mb-1 bg-white"><strong class="text-uppercase">SKU:</strong><span class="ml-2 text-muted">01234</span></li>
                    <li class="px-3 py-2 mb-1 bg-white text-muted"><strong class="text-uppercase text-dark">Category:</strong><a class="reset-anchor ml-2" href="#">Shirts</a></li>
                    <li class="px-3 py-2 mb-1 bg-white text-muted"><strong class="text-uppercase text-dark">Tags:</strong><a class="reset-anchor ml-2" href="#">Casual</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- JavaScript files-->
<script src="/suburbanoutfitters/thirdparty/jquery/jquery.min.js"></script>
<script src="/suburbanoutfitters/thirdparty/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/suburbanoutfitters/thirdparty/lightbox2/js/lightbox.min.js"></script>
<script src="/suburbanoutfitters/thirdparty/nouislider/nouislider.min.js"></script>
<script src="/suburbanoutfitters/thirdparty/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="/suburbanoutfitters/thirdparty/owl.carousel2/owl.carousel.min.js"></script>
<script src="/suburbanoutfitters/thirdparty/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
<script src="/suburbanoutfitters/js/front.js"></script>
</body>
</html>