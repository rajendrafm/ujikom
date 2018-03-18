<!DOCTYPE html>
<html lang="en">
<head>
    <title>RPL - Smk Assalaam</title>
    <meta charset="UTF-8">
    <meta name="description" content="Labs - Design Studio">
    <meta name="keywords" content="lab, onepage, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="/" rel="shortcut icon"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="a/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="a/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="a/css/flaticon.css"/>
    <link rel="stylesheet" href="a/css/magnific-popup.css"/>
    <link rel="stylesheet" href="a/css/owl.carousel.css"/>
    <link rel="stylesheet" href="a/css/style.css"/>


    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader">
            
            <h2>Loading.....</h2>
        </div>
    </div>


    <!-- Header section -->
    <header class="header-section">
        <div class="logo">
            <img src="a/img/logo.png" alt=""><!-- Logo -->
        </div>
        <!-- Navigation -->
        <div class="responsive"><i class="fa fa-bars"></i></div>
        <nav>
            <ul class="menu-list">
                <li class="active"><a href="/">Home</a></li>
                <li><a href="/berita">Berita</a></li>
                <li><a href="/prestasi">Prestasi</a></li>
        
            </ul>
        </nav>
    </header>
    <!-- Header section end -->


    <!-- Intro Section -->
    <div class="hero-section">
        <div class="hero-content">
            <div class="hero-center">
                <img src="a/img/big-logo.png" alt="">
                <p>Rekayasa perangkat Lunak</p>
            </div>
        </div>
        <!-- slider -->
        <div id="hero-slider" class="owl-carousel">
            <div class="item  hero-item" data-bg="a/img/01.jpg"></div>
            <div class="item  hero-item" data-bg="a/img/02.jpg"></div>
        </div>
    </div>
    <!-- Intro Section -->


    <!-- About section -->
    <div class="about-section">
        <div class="overlay"></div>
        <!-- card section -->
        <div class="card-section">
            <div class="container">
                <div class="row">
                    <!-- single card -->
                    <div class="col-md-4 col-sm-6">
                        <div class="lab-card">
                            <div class="icon">
                                <i class="flaticon-023-flask"></i>
                            </div>
                            <h2>RPL</h2>
                            <p>Rekayasa perangkat Lunak</p>
                        </div>
                    </div>
                    <!-- single card -->
                    <div class="col-md-4 col-sm-6">
                        <div class="lab-card">
                            <div class="icon">
                                <i class="flaticon-011-compass"></i>
                            </div>
                            <h2>RPL</h2>
                            <p>Rekayasa perangkat Lunak</p>
                        </div>
                    </div>
                    <!-- single card -->
                    <div class="col-md-4 col-sm-12">
                        <div class="lab-card">
                            <div class="icon">
                                <i class="flaticon-037-idea"></i>
                            </div>
                            <h2>RPL</h2>
                            <p>Rekayasa perangkat Lunak</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- card section end-->


        <!-- About contant -->
        <div class="about-contant">
            <div class="container">
                <div class="section-title">
                    <h2>Get in <span>the Lab</span> and discover the world</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequat ante ac congue. Quisque porttitor porttitor tempus. Donec maximus ipsum non ornare vporttitor porttitorestibulum. Sed libero nibh, feugiat at enim id, bibendum sollicitudin arcu.</p>
                    </div>
                    <div class="col-md-6">
                        <p>Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. Nam convallis vel erat id dictum. Sed ut risus in orci convallis viverra a eget nisi. Aenean pellentesque elit vitae eros dignissim ultrices. Quisque porttitor porttitorlaoreet vel risus et luctus.</p>
                    </div>
                </div>
                <div class="text-center mt60">
                    <a href="" class="site-btn">Browse</a>
                </div>
                <!-- popup video -->
                <div class="intro-video">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <img src="a/img/video.jpg" alt="">
                            <a href="https://www.youtube.com/watch?v=nCsjw4XNr-Q" class="video-popup">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About section end -->


    <!-- Testimonial section -->
    <div class="testimonial-section pb100">
        <div class="test-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-4">
                    <div class="section-title left">
                        <h2>Alumni RPL-Smk Assalaam</h2>
                    </div>
                     <div class="owl-carousel" id="testimonial-slide">
                        
                        @foreach ($alumni as $data)
                        <!-- single testimonial -->
                        <div class="testimonial">
                            <span>‘​‌‘​‌</span>
                            <p>{!!$data->isi!!}</p>
                            <div class="client-info">
                                <div class="avatar">
                                    <img src="{{asset('img/'.$data->cover.'')}}" alt="">
                                </div>
                                <div class="client-name">
                                    <h2>{!!$data->title!!}</h2>
                                    
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial section end-->


   

    <!-- Team Section -->
    <div class="team-section spad">
        <div class="overlay"></div>
        <div class="container">
            <div class="section-title">
                <h2>Kurikulum</h2>
            </div>
            <div class="row">
                <!-- single member -->
                @foreach ($kurikulum as $data)

                <div class="col-sm-4">
                    <div class="member">
                        <img src="{{asset('img/'.$data->cover.'')}}" alt="">
                        <h2>{!!$data->nama!!}</h2>
                        <h3>{!!$data->jabatan!!}</h3>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Team Section end-->


  


    <!-- Contact section -->
    <div class="contact-section spad fix">
        <div class="container">
            <div class="row">
                <!-- contact info -->
                <div class="col-md-5 col-md-offset-1 contact-info col-push">
                    <div class="section-title left">
                        <h2>Contact us</h2>
                    </div>
                    <p>Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. </p>
                    <h3 class="mt60">Main Office</h3>
                    <p class="con-item">C/ Libertad, 34 <br> 05200 Arévalo </p>
                    <p class="con-item">0034 37483 2445 322</p>
                    <p class="con-item">hello@company.com</p>
                </div>
                <!-- contact form -->
                <div class="col-md-6 col-pull">
                    <form class="form-class" id="con_form">
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" name="name" placeholder="Your name">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="email" placeholder="Your email">
                            </div>
                            <div class="col-sm-12">
                                <input type="text" name="subject" placeholder="Subject">
                                <textarea name="message" placeholder="Message"></textarea>
                                <button class="site-btn">send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact section end-->


    <!-- Footer section -->
    <footer class="footer-section">
        <h2>2017 All rights reserved. Designed by <a href="https://colorlib.com" target="_blank">Colorlib</a></h2>
    </footer>
    <!-- Footer section end -->




    <!--====== Javascripts & Jquery ======-->
    <script src="a/js/jquery-2.1.4.min.js"></script>
    <script src="a/js/bootstrap.min.js"></script>
    <script src="a/js/magnific-popup.min.js"></script>
    <script src="a/js/owl.carousel.min.js"></script>
    <script src="a/js/circle-progress.min.js"></script>
    <script src="a/js/main.js"></script>
</body>
</html>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5aac580f4b401e45400dce00/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->