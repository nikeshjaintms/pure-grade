<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Caustic Soda Lye | PURE GRADE EXIM LLP</title>

    <meta name="description" content="Caustic Soda Lye NaOH - PURE GRADE EXIM LLP">
    <meta name="author" content="PURE GRADE EXIM LLP">

    <link rel="icon" href="assets/img/added/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/slick-slider.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/mobile-menu.css">
    <link rel="stylesheet" href="assets/css/utility.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <script src="assets/js/jquery-3-7-1.min.js"></script>
</head>

<body class="body">
<?php
include 'header.php';


$product = [
    "title" => "Hydrogen Peroxide (GACL)",
    "name" => "Hydrogen Peroxide (H₂O₂)",
    "brand" => "GACL ",
    "hsn" => "28470000",
    "pack" => "50 kgs",
    "desc" => "Hydrogen peroxide is a chemical compound with the formula H\r\n2O\r\n2. In its pure form, it is a very pale blue liquid, slightly more viscous than water. It is used as an oxidizer, bleaching agent, and antiseptic. Concentrated hydrogen peroxide, or \”high-test peroxide\”, is a reactive oxygen species and has been used as a propellant in rocketry. Its chemistry is dominated by the nature of its unstable peroxide bond.",
    "app" => "Bleaching , Production of organic compounds , Disinfectant , Removal of blood stains.",
    "image" => "assets/img/added/product/Hydrogen-Peroxide.png"
];
?>

<div class="common-hero" style="background-image: url(assets/img/added/product/Hydrogen-Peroxide.png);">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="common-hero-heading">
                    <h1 class="text-60 sm:text-30 md:text-30 leading-56 font-semibold white">Product Details</h1>
                    <div class="page-change">
                        <ul>
                            <li class="inline-block"><a href="index.php" class="inline-block text-16 leading-16 white font-semibold">Home</a></li>
                            <li class="inline-block arrow text-16 leading-16 white font-normal"><i class="fa-solid fa-angle-right"></i></li>
                            <li class="inline-block text-16 leading-16 white font-normal"><?php echo $product['title']; ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container sp" style="margin-top:80px; margin-bottom: 80px;">
    <div class="row align-items-center">

        <div class="col-md-6">
            <div class="product-img-box" style="border: 1px solid #eee; padding: 20px; border-radius: 15px;">
                <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['title']; ?>" style="width:100%; border-radius:10px;">
            </div>
        </div>

        <div class="col-md-6 sm:mt-30">
            <div class="details-content" style="padding-left: 20px;">
                <h2 class="text-44 font-semibold" style="color:#2773b7;"><?php echo $product['title']; ?></h2>
                <h4 class="text-22 mt-10"><?php echo $product['name']; ?></h4>
                <hr class="mt-20 mb-20">

                <p class="text-18 mb-10"><b>Brand :</b> <?php echo $product['brand']; ?></p>
                <p class="text-18 mb-10"><b>HSN Code :</b> <?php echo $product['hsn']; ?></p>
                <p class="text-18 mb-10"><b>Packaging :</b> <?php echo $product['pack']; ?></p>

                <div class="mt-20">
                    <h5 class="text-20 font-semibold">Description :</h5>
                    <p class="text-16 pera1 leading-26 mt-10"><?php echo $product['desc']; ?></p>
                </div>

                <div class="mt-20">
                    <h5 class="text-20 font-semibold">Application :</h5>
                    <p class="text-16 pera1 leading-26 mt-10"><?php echo $product['app']; ?></p>
                </div>

                <br>
                <a href="javascript:history.back()" class="theme-btn1">⬅ Back to Products</a>
            </div>
        </div>

    </div>
</div>

<?php include 'footer.php'; ?>

<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/fontawesome.js"></script>
<script src="assets/js/mobile-menu.js"></script>
<script src="assets/js/jquery.magnific-popup.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/slick-slider.js"></script>
<script src="assets/js/jquery.nice-select.js"></script>
<script src="assets/js/aos.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>