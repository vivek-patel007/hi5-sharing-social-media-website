<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
      
      $activepage=basename($_SERVER['PHP_SELF']);
      $index="";
      $about="";
      $package="";
      $pkg="";
      $contact="";
      
      switch($activepage){
        case 'index.php':
          $index="active";
        break;
        case 'packages.php':
          $pkg="active";
          break;
        //   case 'package.php':
        //     $package="active";
        //   break;
        // case 'contact.php':
        //   $contact="active";
        // break;
        default;
      }
echo '
<nav class="sidebar">
		<ul class="menu-slide">
			<li class="'.$index.'">
				<a class="" href="index.php" title="">
					<i><svg id="icon-home" class="feather feather-home" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg></i> Dashboard
				</a>
			</li>
			<li class="'.$pkg.'">
				<a class="" href="packages.php" title="">
					<i class=""><svg id="ab7" class="feather feather-zap" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg></i>Packages
				</a>
			</li>
			<li class="">
				<a class="" href="profile.html" title="">
					<i><svg id="ab1" class="feather feather-users" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle r="4" cy="7" cx="9"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></i>
					Profile
				</a>
			</li>
			<li class="">
				<a class="" href="reviews.html" title="">
					<i class="">
<svg id="ab3" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></i>Reviews
				</a>
			</li>
			<li class="">
				<a class="" href="events.html" title=""><i class="">
<svg id="ab4" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></i>Events
				</a>
			</li>
			<li class="">
				<a class="" href="products.html" title="">
					<i class="">
<svg id="ab5" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></i>Products
				</a>
			</li>
			<li class="">
				<a class="" href="blog.html" title="">
					
					<i class="">						
<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg>
</i>Blogs
				</a>
			</li>
			<li class="">
				<a class="" href="messages-inbox.html" title="">
					<i class="">
<svg id="ab2" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg></i>Messages
				</a>
			</li>
			
			<li class="">
				<a class="" href="team.html" title="">
					<i class="">

<svg id="team" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-smile"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg></i>Team
				</a>
			</li>
			<li class="">
				<a class="" href="login-register.html" title="">
					<i class="">
<svg id="ab9" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg></i>Login/Register
				</a>
			</li>
			<li class="menu-item-has-children">
				<a class="" href="#" title="">
					<i><svg id="ab8" class="feather feather-file" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"/><polyline points="13 2 13 9 20 9"/></svg></i>Pages
				</a>
				<ul class="submenu">
					<li><a href="404.html" title="">Error 404</a></li>
					<li><a href="forgot-password.html" title="">Forgot Password</a></li>
					<li><a href="loaders.html" title="">Loaders/spiners</a></li>
					<li><a href="invoice-edit.html" title="">Invoice</a></li>
					<li><a href="maps.html" title="">Google Maps</a></li>
					<li><a href="http://wpkixx.com/html/socimo/development-elements.html" title="">Elements</a></li>
					<li><a href="http://wpkixx.com/html/socimo/development-component.html" title="">Components</a></li>
				</ul>
			</li>
		</ul>
	</nav>';
	?>
</body>
</html>