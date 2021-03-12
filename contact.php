<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ==== Document Title ==== -->
    <title>SociFly - Multipurpose Social Network HTML5 Template</title>
    
    <!-- ==== Document Meta ==== -->
    <meta name="author" content="ThemeLooks">
    <meta name="description" content="Multipurpose Social Network HTML5 Template">
    <meta name="keywords" content="social media, social network, forum, shop, bootstrap, html5, css3, template, responsive, retina ready">

    
</head>
<body>

<?php
include("partial/_indexHeader.php");

?>
        <!-- Header Section End -->

        <!-- Page Header Start -->
        <div class="page--header pt--60 pb--60 text-center" data-bg-img="img/page-header-img/bg.jpg" data-overlay="0.85">
            <div class="container">
                <div class="title">
                    <h2 class="h1 text-white">Contact</h2>
                </div>

                <ul class="breadcrumb text-gray ff--primary">
                    <li><a href="home-1.html" class="btn-link">Home</a></li>
                    <li class="active"><span class="text-primary">Contact</span></li>
                </ul>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Contact Section Start -->
        <div class="contact--section pt--80 pb--20">
            <div class="container">
                <!-- Map Start -->
                <!-- <div class="map mb--80">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29226.892762795018!2d72.52489204932738!3d23.698777912101843!2m3!1f0!2f0!3f0!3m2!
                1i1024!2i768!4f13.1!3m3!1m2!1s0x395c4fe0be5bfbab%3A0xfc8dd1ffd166b43b!2sVisnagar%2C%20Gujarat%20384315!5e0!3m2!1sen!2sin!4
                v1615187417034!5m2!1sen!2sin"  allowfullscreen="" loading="lazy"></iframe> -->
                <div class="map mb--80" data-trigger="map" data-map-options='{"latitude": "23.699900", "longitude": "72.538803", "zoom": "16", "api_key": "AIzaSyBK9f7sXWmqQ1E-ufRXV3VpXOn_ifKsDuc"}'></div>
                <!-- Map End -->

                <div class="row">
                    <div class="col-md-3 pb--60">
                        <!-- Contact Info Items Start -->
                        <div class="contact-info--items" data-scroll-reveal="group">
                            <!-- Contact Info Item Start -->
                            <div class="contact-info--Item">
                                <div class="title">
                                    <h3 class="h4"><i class="mr--10 fa fa-map-o"></i>Address :</h3>
                                </div>

                                <div class="content fs--14 text-darker mt--4">
                                    <p>3334 Radford Street Louisville, Victoria Melbourne, Australia</p>
                                </div>
                            </div>
                            <!-- Contact Info Item End -->

                            <!-- Contact Info Item Start -->
                            <div class="contact-info--Item">
                                <div class="title">
                                    <h3 class="h4"><i class="mr--10 fa fa-envelope-o"></i>E-mail :</h3>
                                </div>

                                <div class="content fs--14 text-darker mt--4">
                                    <p><a href="/cdn-cgi/l/email-protection#ec85828a83ac8883818d8582c28f8381" class="btn-link"><span class="__cf_email__" data-cfemail="d7beb9b1b897b3b8bab6beb9f9b4b8ba">[email&#160;protected]</span></a>, <a href="/cdn-cgi/l/email-protection#ec9f999c9c839e98ac8883818d8582c28f8381" class="btn-link"><span class="__cf_email__" data-cfemail="2f5c5a5f5f405d5b6f4b40424e4641014c4042">[email&#160;protected]</span></a></p>
                                </div>
                            </div>
                            <!-- Contact Info Item End -->

                            <!-- Contact Info Item Start -->
                            <div class="contact-info--Item">
                                <div class="title">
                                    <h3 class="h4"><i class="mr--10 fa fa-phone"></i>Telephone :</h3>
                                </div>

                                <div class="content fs--14 text-darker mt--4">
                                    <p><a href="tel:(+00)123123456" class="btn-link">(+00) 123123456</a>, <a href="tel:(+00)123123456" class="btn-link">(+00) 123123456</a></p>
                                </div>
                            </div>
                            <!-- Contact Info Item End -->
                        </div>
                        <!-- Contact Info Items End -->
                    </div>

                    <div class="col-md-9 pb--60">
                        <!-- Contact Form Start -->
                        <div class="contact--form" data-form="ajax">
                            <div class="contact--title">
                                <h3 class="h4">Drop Us A Line</h3>
                            </div>

                            <div class="contact--subtitle pt--15">
                                <h4 class="h6 fw--400 text-darkest">Don’t worry ! your e-mail address will not published.</h4>
                            </div>

                            <div class="contact--notes ff--primary mt--2">
                                <p>(Required field are marked *)</p>
                            </div>

                            <form action="forms/contact-form.php" method="post">
                                <div class="row gutter--20">
                                    <div class="col-xs-6 col-xxs-12">
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Name *" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-xs-6 col-xxs-12">
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="E-mail *" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <input type="text" name="subject" placeholder="Subject *" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <textarea name="message" placeholder="Message *" class="form-control" required></textarea>
                                        </div>
                                    </div>

                                    <div class="col-xs-12">
                                        <button type="submit" class="btn btn-primary mt--10">Send Message</button>
                                    </div>
                                </div>

                                <div class="status"></div>
                            </form>
                        </div>
                        <!-- Contact Form End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Section End -->

        <!-- Footer Section Start -->
        <?php
include("partial/_indexFooter.php");

?>


</body>
</html>