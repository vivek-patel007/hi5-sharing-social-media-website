
<?php
include("header.php");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<
		<link href="css1/style.css" rel="stylesheet" type="text/css" media="all"/>
		

		<script src="js1/jquery-1.11.0.min.js"></script>
		<script src="js1/jquery.magnific-popup.js" type="text/javascript"></script>
		<script src="js1/jquery.validate.min.js" type="text/javascript"></script>
		<script>
			$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
				});
				$('.popup-with-zoom-anim').on('click', function(e) {
					$('#signUpForm').find('input[name="Plan"]').val($(this).data("plan"));
					$('#signUpForm').find('input[name="Price"]').val($(this).data("price"));
				});
				$('#signUpForm').validate({
					errorPlacement: function(error, element) {
						if (element.attr('name') == 'Terms') {
							error.insertAfter(element.parent());
						} else {
							error.insertAfter(element);
						}
					}
				});
				if ($('#paypalForm').length > 0) {
					$('#paypalForm').trigger('submit');
				}
			});
		</script>
	</head>
	<body style="background:none;">
		<!--header start here-->
		<div class="priceing-table w3l">
			<div class="wrap">
				<h1>Select Package.....</h1>
				<div class="priceing-table-main">
					
							<?php   include('config.php');
		$sql = "select * from  tbl_package where isdeleted = 0";
		$result = mysql_query($sql);
		while($row = mysql_fetch_array($result))
		{
?>	
<form method="post">
							
						<div class="price-grid">
							<div class="price-block agile">
								<div class="price-gd-top pric-clr1">
                                <form method="post">
									<h4><?php echo $row['package_name'];?>
                                    </h4>
									<h3>Rs.<?php echo $row['price'];?></h3>
									</form>
								</div>
								<div class="price-gd-bottom">
									<div class="price-list">
                                    <form method="post">
										<ul>
											<li>start date:<?php echo $row['start_date'];?></li>
											<li>Duration: <?php echo $row['duration'];?></li>
											<li>Desc:<?php echo $row['description'];?></li>
											
										</ul>
                                        <input type="hidden" name="package_name" value="<?php echo $row['package_name']?>">
<input type="hidden" name='price'  value="<?php echo $row['price'];?>">
<input type="hidden" name='duration' value="<?php echo $row['duration'];?>">
<input type="submit" name="insert" value="Book Now" style="margin-top:15px; margin-left:15px; font-size:14px; width:45%;" >
<style>
 input[type="submit"] {
    outline: none;
    padding: 7px 20px;
    color: #FFF;
    cursor: pointer;
    background: #8ce78a;
    border: none;
    width: 20%;
    margin: 1em auto 0;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -o-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -ms-transition: 0.5s all;
    font-size: 1.2em;
}
input[type="submit"]:hover
 {
	 background:black;
 }
</style>
 
 
 </form>
                                        
									</div>
								</div>
								<div class="price-selet pric-sclr1">
                                       
									<!--<a class="popup-with-zoom-anim" data-plan="basic" data-price="5.00" href="#small-dialog">Sign Up</a>-->
								</div>
                                
							</div>
                           
						</div>
                        <?php
		}
		?>
        
        
        
        
        
        
        
         <?php
                    if(isset($_POST['insert']))
{
	 global $email_id;
 include("config.php");
						$email_id=@$_POST['email_id'];
                    	$package_name=@$_POST['package_name'];
						$price=@$_POST['price'];
						$duration=@$_POST['duration'];	
						$start_date=@$_POST['start_date'];	
						
						$sdate=date('Y-m-d');
						$expiry_date=date("Y-m-d",strtotime("+$duration days"));
						$status=@$_POST['status'];	
						$pay_status=@$_POST['pay_status'];			
						
			global $email_id;
			include("config.php");
		$sql1= "select * from tbl_user where email_id = '$user' and isdeleted = 0";
				$result1=mysql_query($sql1);
				$count1 = mysql_num_rows($result1);
				while($row = mysql_fetch_array($result1))
					{
						$email_id = $row['email_id'];
					}
	
						
						
		$sql="insert into tbl_subsribe(email_id,package_name,price,duration,start_date,expiry_date,status,pay_status) values('$email_id','$package_name','$price','$duration','$sdate',
		'$expiry_date','yes','no')";
		//echo $sql;
		$ret=mysql_query($sql);
		if($ret)
		{
	 echo "<script language='javascript'>alert('record inserted');</script>";
echo "<script language='javascript'>window.location.href='viewpackage.php';</script>";
		}
}
?>  
  
                            
                            
        
        
						<!--<div class="price-grid">
							<div class="price-block agile">
								<div class="price-gd-top pric-clr2">
									<h4>Standard</h4>
									<h3>$10</h3>
									<h5>per month</h5>
								</div>
								<div class="price-gd-bottom">
									<div class="price-list">
										<ul>
											<li>Full access</li>
											<li>Documentation</li>
											<li>Customers Support</li>
											<li>Free Updates</li>
											<li>Unlimited Domains</li>
										</ul>
									</div>
								</div>
								<div class="price-selet pric-sclr2">
									<a class="popup-with-zoom-anim" data-plan="standart" data-price="10.00" href="#small-dialog">Sign Up</a>
								</div>
							</div>
						</div>
						<div class="price-grid wthree">
							<div class="price-block agile">
								<div class="price-gd-top pric-clr3">
									<h4>Premium</h4>
									<h3>$20</h3>
									<h5>per month</h5>
								</div>
								<div class="price-gd-bottom">
									<div class="price-list">
										<ul>
											<li>Full access</li>
											<li>Documentation</li>
											<li>Customers Support</li>
											<li>Free Updates</li>
											<li>Unlimited Domains</li>
										</ul>
									</div>
								</div>
								<div class="price-selet pric-sclr3">
									<a class="popup-with-zoom-anim" data-plan="premium" data-price="20.00" href="#small-dialog">Sign Up</a>
								</div>
							</div>
						</div>-->
                        
						<div class="clear"> </div>
						
				</div>
			</div>
		</div>
        
		<!--header end here-->
		<!--pop-up-grid-->
		

		<!--pop-up-grid-->
		<br /><br /><br /><br />
		
	</body>
</html>

<?php
include("footer.php");
?>