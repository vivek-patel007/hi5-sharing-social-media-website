<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>socimo | Dashboard</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16"> 
    
    <link rel="stylesheet" href="{{asset('admin/css/main.min.css')}}">
    <link rel="stylesheet" href="admin/css/style.css">
    <link rel="stylesheet" href="admin/css/col or.css">
    <link rel="stylesheet" href="admin/css/responsive.css">
	<link href="plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">

</head>
<body>
	@include('admin.partial.header')
	@include('admin.partial.sidebar')
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="panel-content">
					<h4 class="main-title">Users Management</h4>
					<div class="row merged20 mb-4">
						<div class="col-lg-4 col-md-4 col-sm-4">
							<div class="d-widget soft-red">
								<div class="d-widget-title">
									<h5>Realtime Users</h5>
								</div>
								<div class="d-widget-content">
									<span class="realtime-ico pulse"></span>
									<h6>Updating live</h6>
									<h5>223</h5>
									<i class="icofont-users-alt-3"></i>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4">
							<div class="d-widget soft-blue">
								<div class="d-widget-title">
									<h5>Realtime Watch</h5>
								</div>
								<div class="d-widget-content">
									<span class="realtime-ico pulse"></span>
									<h6>Updating live</h6>
									<h5>5016</h5>
									<i class="icofont-optic"></i>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4">
							<div class="d-widget soft-green">
								<div class="d-widget-title">
									<h5>Realtime Posts</h5>
								</div>
								<div class="d-widget-content">
									<span class="realtime-ico pulse"></span>
									<h6>Updating live</h6>
									<h5>5.3K</h5>
									<i class="icofont-computer"></i>
								</div>
							</div>
						</div>
					</div>

					<div class="row merged20 mb-4">
						<div class="col-lg-12">
							<div class="d-widget">
								<div class="d-widget-title">
									<h5>Manage Users</h5>
								</div>
								<div class="d-widget-content">
									<table class="table manage-user table-default table-responsive-md">
										<thead>
											<tr>
												<th>User Name</th>
												<th>View profile</th>
												<th>Chat History</th>
												<th>Blocked</th>
												<th>Hide</th>
												<th>Delete</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<figure><img src="images/resources/user.png" alt=""></figure>
													<h5>Maria K.</h5>
												</td>
												<td><a class="mini-btn" href="#" title="">view</a></td>
												<td><a class="mini-btn" href="#" title="">view</a></td>
												<td>
													<div class="switch-btn">
														<input type="checkbox" hidden="hidden" id="switch1">
														<label class="switch" for="switch1"></label>
													</div>
												</td>
												<td>
													<div class="switch-btn">
														<input type="checkbox" hidden="hidden" id="switch2">
														<label class="switch" for="switch2"></label>
													</div>
												</td>
												<td>
													<div class="actions-btn">
														<span class="iconbox button soft-primary"><i class="icofont-pen-alt-1"></i></span>
														<span class="iconbox button soft-danger"><i class="icofont-trash"></i></span>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<figure><img src="images/resources/user2.jpg" alt=""></figure>
													<h5>Sarika sing.</h5>
												</td>
												<td><a class="mini-btn" href="#" title="">view</a></td>
												<td><a class="mini-btn" href="#" title="">view</a></td>
												<td>
													<div class="switch-btn">
														<input type="checkbox" hidden="hidden" id="switch3">
														<label class="switch" for="switch3"></label>
													</div>
												</td>
												<td>
													<div class="switch-btn">
														<input type="checkbox" hidden="hidden" id="switch4">
														<label class="switch" for="switch4"></label>
													</div>
												</td>
												<td>
													<div class="actions-btn">
														<span class="iconbox button soft-primary"><i class="icofont-pen-alt-1"></i></span>
														<span class="iconbox button soft-danger"><i class="icofont-trash"></i></span>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<figure><img src="images/resources/user3.jpg" alt=""></figure>
													<h5>King Khan</h5>
												</td>
												<td><a class="mini-btn" href="#" title="">view</a></td>
												<td><a class="mini-btn" href="#" title="">view</a></td>
												<td>
													<div class="switch-btn">
														<input type="checkbox" hidden="hidden" id="switch5">
														<label class="switch" for="switch5"></label>
													</div>
												</td>
												<td>
													<div class="switch-btn">
														<input type="checkbox" hidden="hidden" id="switch6">
														<label class="switch" for="switch6"></label>
													</div>
												</td>
												<td>
													<div class="actions-btn">
														<span class="iconbox button soft-primary"><i class="icofont-pen-alt-1"></i></span>
														<span class="iconbox button soft-danger"><i class="icofont-trash"></i></span>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<figure><img src="images/resources/user4.jpg" alt=""></figure>
													<h5>jacob</h5>
												</td>
												<td><a class="mini-btn" href="#" title="">view</a></td>
												<td><a class="mini-btn" href="#" title="">view</a></td>
												<td>
													<div class="switch-btn">
														<input type="checkbox" hidden="hidden" id="switch7">
														<label class="switch" for="switch7"></label>
													</div>
												</td>
												<td>
													<div class="switch-btn">
														<input type="checkbox" hidden="hidden" id="switch8">
														<label class="switch" for="switch8"></label>
													</div>
												</td>
												<td>
													<div class="actions-btn">
														<span class="iconbox button soft-primary"><i class="icofont-pen-alt-1"></i></span>
														<span class="iconbox button soft-danger"><i class="icofont-trash"></i></span>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<figure><img src="images/resources/user5.jpg" alt=""></figure>
													<h5>Andrew</h5>
												</td>
												<td><a class="mini-btn" href="#" title="">view</a></td>
												<td><a class="mini-btn" href="#" title="">view</a></td>
												<td>
													<div class="switch-btn">
														<input type="checkbox" hidden="hidden" id="switch9">
														<label class="switch" for="switch9"></label>
													</div>
												</td>
												<td>
													<div class="switch-btn">
														<input type="checkbox" hidden="hidden" id="switch10">
														<label class="switch" for="switch10"></label>
													</div>
												</td>
												<td>
													<div class="actions-btn">
														<span class="iconbox button soft-primary"><i class="icofont-pen-alt-1"></i></span>
														<span class="iconbox button soft-danger"><i class="icofont-trash"></i></span>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="row merged20 mb-4">
						<div class="col-lg-12">
							<div class="d-widget">
								<div class="d-widget-title">
									<h5>Latest Transcations</h5>
								</div>
								<table class="table-default table table-striped table-responsive-md">
									<thead>
										<tr>
											<th>Order#</th>
											<th>Product Name</th>
											<th>Date</th>
											<th>Total</th>
											<th>Status</th>
											<th>Pay Method</th>
											<th>Invoice</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>001</td>
											<td class="productss"><a href="#" title=""><img src="images/resources/course-1.jpg" alt=""> Html Basics Book</a></td>
											<td>17-Oct-20</td>
											<td>$50</td>
											<td>Delivered</td>
											<td>Paypal</td>
											<td><a href="#" title="">view invoice</a></td>
										</tr>
										<tr>
											<td>002</td>
											<td class="productss"><a href="#" title=""><img src="images/resources/course-2.jpg" alt=""> VU.Js script Book</a></td>
											<td>15-Oct-20</td>
											<td>$30</td>
											<td>On Way</td>
											<td>Payoneer</td>
											<td><a href="#" title="">view inoice</a></td>
										</tr>
										<tr>
											<td>003</td>
											<td class="productss"><a href="#" title=""><img src="images/resources/course-3.jpg" alt=""> Online Css3 Course</a></td>
											<td>07-Oct-20</td>
											<td>$20</td>
											<td>Pending</td>
											<td>Visa</td>
											<td><a href="#" title="">view invoice</a></td>
										</tr>
										<tr>
											<td>004</td>
											<td class="productss"><a href="#" title=""><img src="images/resources/course-4.jpg" alt=""> Online Course Basic HTML</a></td>
											<td>02-Oct-20</td>
											<td>$10</td>
											<td>Delivered</td>
											<td>Paypal</td>
											<td><a href="#" title="">view invoice</a></td>
										</tr>
										<tr>
											<td>005</td>
											<td class="productss"><a href="#" title=""><img src="images/resources/course-5.jpg" alt=""> PHP Advance Course</a></td>
											<td>27-Sep-20</td>
											<td>$30</td>
											<td>Delivered</td>
											<td>COD</td>
											<td><a href="#" title="">view invoice</a></td>
										</tr>
										<tr>
											<td>006</td>
											<td class="productss"><a href="#" title=""><img src="images/resources/course-6.jpg" alt=""> Advance Wp Book</a></td>
											<td>25-Sep-20</td>
											<td>$25</td>
											<td>Return</td>
											<td>Bitcoin</td>
											<td><a href="#" title="">view invoice</a></td>
										</tr>
										<tr>
											<td>007</td>
											<td class="productss"><a href="#" title=""><img src="images/resources/course-2.png" alt=""> Online Marketing</a></td>
											<td>24-Sep-20</td>
											<td>$22</td>
											<td>Delivered</td>
											<td>Master Card</td>
											<td><a href="#" title="">view invoice</a></td>
										</tr>
										<tr>
											<td>008</td>
											<td class="productss"><a href="#" title=""><img src="images/resources/course-1.jpg" alt=""> Advance PHP Book</a></td>
											<td>20-Sep-20</td>
											<td>$29</td>
											<td>Pending</td>
											<td>Visa</td>
											<td><a href="#" title="">view invoice</a></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- main content -->
	
	<div class="popup-wraper">
		<div class="popup">
			<span class="popup-closed"><i class="icofont-close"></i></span>
			<div class="popup-meta">
				<div class="popup-head">
					<h5><i class="icofont-envelope"></i> Send Message</h5>
				</div>
				<div class="send-message">
					<form method="post" class="c-form">
						<input type="text" placeholder="Enter Name..">
						<input type="text" placeholder="Subject">
						<textarea placeholder="Write Message"></textarea>
						<div class="uploadimage">
							<i class="icofont-file-jpg"></i>
							<label class="fileContainer">
								<input type="file">Attach file
							</label>
						</div>
						<button type="submit" class="main-btn">Send</button>
					</form>
				</div>
			</div>
		</div>
	</div><!-- send message popup -->
	
	<div class="side-slide">
		<span class="popup-closed"><i class="icofont-close"></i></span>
		<div class="slide-meta">
			<ul class="nav nav-tabs slide-btns">
				 <li class="nav-item"><a class="active" href="#messages" data-toggle="tab">Messages</a></li>
				 <li class="nav-item"><a class="" href="#notifications" data-toggle="tab">Notifications</a></li>
			</ul>
			<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane active fade show" id="messages" >
					<h4><i class="icofont-envelope"></i> messages</h4>
					<a href="#" class="send-mesg" title="New Message" data-toggle="tooltip"><i class="icofont-edit"></i></a>
					<ul class="new-messages">
						<li>
							<figure><img src="images/resources/user1.jpg" alt=""></figure>
							<div class="mesg-info">
								<span>Ibrahim Ahmed</span>
								<a href="#" title="">Helo dear i wanna talk to you</a>
							</div>
						</li>
						<li>
							<figure><img src="images/resources/user2.jpg" alt=""></figure>
							<div class="mesg-info">
								<span>Fatima J.</span>
								<a href="#" title="">Helo dear i wanna talk to you</a>
							</div>
						</li>
						<li>
							<figure><img src="images/resources/user3.jpg" alt=""></figure>
							<div class="mesg-info">
								<span>Fawad Ahmed</span>
								<a href="#" title="">Helo dear i wanna talk to you</a>
							</div>
						</li>
						<li>
							<figure><img src="images/resources/user4.jpg" alt=""></figure>
							<div class="mesg-info">
								<span>Saim Turan</span>
								<a href="#" title="">Helo dear i wanna talk to you</a>
							</div>
						</li>
						<li>
							<figure><img src="images/resources/user5.jpg" alt=""></figure>
							<div class="mesg-info">
								<span>Alis wells</span>
								<a href="#" title="">Helo dear i wanna talk to you</a>
							</div>
						</li>
					</ul>
					<a href="#" title="" class="main-btn" data-ripple="">view all</a>
				</div>
				<div class="tab-pane fade" id="notifications" >
					<h4><i class="icofont-bell-alt"></i> notifications</h4>
					<ul class="notificationz">
						<li>
							<figure><img src="images/resources/user5.jpg" alt=""></figure>
							<div class="mesg-info">
								<span>Alis wells</span>
								<a href="#" title="">recommend your post</a>
							</div>
						</li>
						<li>
							<figure><img src="images/resources/user4.jpg" alt=""></figure>
							<div class="mesg-info">
								<span>Alis wells</span>
								<a href="#" title="">share your post <strong>a good time today!</strong></a>
							</div>
						</li>
						<li>
							<figure><img src="images/resources/user2.jpg" alt=""></figure>
							<div class="mesg-info">
								<span>Alis wells</span>
								<a href="#" title="">recommend your post</a>
							</div>
						</li>
						<li>
							<figure><img src="images/resources/user1.jpg" alt=""></figure>
							<div class="mesg-info">
								<span>Alis wells</span>
								<a href="#" title="">share your post <strong>a good time today!</strong></a>
							</div>
						</li>
						<li>
							<figure><img src="images/resources/user3.jpg" alt=""></figure>
							<div class="mesg-info">
								<span>Alis wells</span>
								<a href="#" title="">recommend your post</a>
							</div>
						</li>
					</ul>
					<a href="#" title="" class="main-btn" data-ripple="">view all</a>
				</div>
			</div>
		</div>
	</div><!-- side slide message & popup -->
</div>
	
	<script src="admin/js/main.min.js"></script>
	<script src="admin/js/vivus.min.js"></script>
	<script src="admin/js/script.js"></script>
	
	<script src="admin/plugins/apex/apexcharts.min.js"></script>
	<script src="admin/js/graphs-scripts.js"></script>

	

</body>	
</html>

