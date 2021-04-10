<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ==== Document Title ==== -->
    <title>SociFly - Multipurpose Social Network HTML5 Template</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="canonical" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- ==== Document Meta ==== -->
    <meta name="author" content="ThemeLooks">
    <meta name="description" content="Multipurpose Social Network HTML5 Template">
    <meta name="keywords" content="social media, social network, forum, shop, bootstrap, html5, css3, template, responsive, retina ready">
<style>
section {
  height:100vh;
}
.pricing-table .card {
  -webkit-transition: all 0.2s;
  -o-transition: all 0.2s;
  transition: all 0.2s;
  -webkit-border-radius: 15px;
  border-radius: 15px; }
  .pricing-table .card .card-title {
    font-size: 1rem;
    letter-spacing: .2rem;
    font-weight: 500; }
  .pricing-table .card .card-price {
    font-size: 2.7rem; }
    .pricing-table .card .card-price .term {
      font-size: .875rem; }
  .pricing-table .card .fa-ul li:not(:last-child) {
    margin-bottom: 1rem; }

@media (min-width: 992px) {
  .pricing-table .card:hover {
    margin-top: -.25rem;
    margin-bottom: .25rem;
    -webkit-box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.3);
    box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.3); } }
</style>
    
</head>
<body>

<?php
include("partial/_indexHeader.php");
include("partial/_db.php");


	$sql = "SELECT * FROM `tbl_packages` WHERE is_active='0'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    ?>
        <!-- Page Header Start -->
      <!-- Section: Pricing table -->
<section id="one" class="pricing-table d-flex align-items-center blue-gradient">
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Pricing</h1>
      <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built with default Bootstrap components and utilities with little customization.</p>
    </div>
<div class="container mt-5">


  <div class="row">
    <!-- Free Tier -->
    <?php
// 	$sql = "SELECT * FROM `tbl_user`";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
  // output data of each row
  
  while($row = $result->fetch_assoc()) {
 $id=$row["package_id"];
 $price=$row["package_price"];
 $title=$row["package_title"];
 $size=$row["package_size"];
 $start=$row["package_start"];
 $end=$row["package_end"];
 $duration=$row["duration"];
 $desc=$row["package_description"];
 $timestamp=$row["timestamp"];
 
?>
    <div class="col-lg-4">
      <div class="card mb-5 mb-lg-0">
        <div class="card-body">
          <h5 class="card-title grey-text text-uppercase text-center"><?php echo $title; ?></h5>
          <h6 class="card-price text-center">$<?php echo $price; ?><span class="term"><?php echo $duration; ?>/Days</span></h6>
          <hr class="my-4">
          <ul class="fa-ul">
            <li><span class="fa-li"><i class="fa fa-arrow-right"></i></span>Single User</li>
            <li><span class="fa-li"><i class="fa fa-arrow-right"></i></span><?php echo $size; ?> Storage</li>
            <li><span class="fa-li"><i class="fa fa-arrow-right"></i></span><?php echo $desc; ?></li>
            <li><span class="fa-li"><i class="fa fa-arrow-right"></i></span>Community Access</li>
            <li class="grey-text"><span class="fa-li"><i class="fa fa-times"></i></span>Unlimited Private Projects</li>
            <li class="grey-text"><span class="fa-li"><i class="fa fa-times"></i></span>Dedicated Phone Support</li>
            <li class="grey-text"><span class="fa-li"><i class="fa fa-times"></i></span>Free Subdomain</li>
            <li class="grey-text"><span class="fa-li"><i class="fa fa-times"></i></span>Monthly Status Reports</li>
          </ul>
          <a href="#" class="btn btn-block btn-primary z-depth-0 btn-rounded my-2">Buy</a>
        </div>
      </div>
    </div>
    <?php          
      }
} else {
  echo "0 results";
}
$conn->close();
?>
  </div>

</div>

</section>
<!-- Section: Pricing table -->

<!-- Section: Pricing table -->

<!-- Section: Pricing table -->

<!-- Scrollspy -->
<div class="dotted-scrollspy">
<ul class="nav smooth-scroll clearfix d-none d-sm-flex flex-column">
  <li class="nav-item"><a class="nav-link" href="#one"><span></span></a></li>
  <li class="nav-item"><a class="nav-link" href="#two"><span></span></a></li>
  <li class="nav-item"><a class="nav-link" href="#three"><span></span></a></li>
  <li class="nav-item"><a class="nav-link" href="#four"><span></span></a></li>
</ul>
</div>

        <!-- Features Section Start -->
    <script>
    $('body').scrollspy({
  target: '.dotted-scrollspy'
});
    </script>
        <!-- Why Choose Us Section End -->

        <!-- History Section Start -->
        <script src="https://use.fontawesome.com/a61ba315b6.js"></script>
        <!-- History Section End -->

        <!-- Footer Section Start -->
        <?php
include("partial/_indexFooter.php");

?>

</body>
</html>