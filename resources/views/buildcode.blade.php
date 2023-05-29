<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BuildCode</title>
    <link rel="shortcut icon" href="{{ asset('assets/BuildCode.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/basicfont.css') }}">
    
</head>
<body>
    <header class="navbar navbar-expand-lg shadow-sm p-3 mb-5">
        <div class="container">
            <a class="navbar-brand pt-0" href="#"><img src="{{ asset('assets/Icon.png') }}" alt="Logo" width="80" height="100"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">SERVICES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">PORTOFOLIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CONTACT US</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <section id="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg">
                    <h1 class="banner-title mt-5">We Create Content That Ranks</h1>
                    <a class="banner-button" href="#">SEE OUR WORK</a>
                </div>
                <div class="col d-none d-xl-block">
                    <img class="img-fluid" src="{{ asset('assets/BannerPict.png') }}" alt="Banner Picture" width="740px" height="566px">
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container mt-5 text-center">
            <h1 class="about-tittle mb-0">About Us</h1>
            <img src="{{ asset('assets/Line.png') }}" alt="Underline" height="3px" width="100px">
            <p class="about-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </section>
    <section id="services">
        <div class="container mt-5 text-center">
            <h1 class="services-tittle mb-0">Our Valuable Services</h1>
            <img src="{{ asset('assets/Line.png') }}" alt="Underline" height="3px" width="100px">
        </div>
        <div class="container">
            <div class="slider">
                <div class="owl-carousel">
                    <div class="slider-card">
                        <div class="d-flex justify-content-center align-items-center mb-4">
                            <img src="{{ asset('assets/Carousel1.png') }}" class="card-img-top" alt="Carousel 1" >
                        </div>
                        <h5 class="mb-0 text-center"><b>App Development</b></h5>
                        <p class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.</p>
                    </div>
                    <div class="slider-card">
                        <div class="d-flex justify-content-center align-items-center mb-4">
                            <img src="{{ asset('assets/Carousel2.png') }}" class="card-img-top" alt="Carousel 2">
                        </div>
                        <h5 class="mb-0 text-center"><b>Web Development</b></h5>
                        <p class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.</p>
                    </div>
                    <div class="slider-card">
                        <div class="d-flex justify-content-center align-items-center mb-4">
                            <img src="{{ asset('assets/Carousel3.png') }}" class="card-img-top" alt="Carousel 3">
                        </div>
                        <h5 class="mb-0 text-center"><b>UI UX Design</b></h5>
                        <p class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.</p>
                    </div>
                    <div class="slider-card">
                        <div class="d-flex justify-content-center align-items-center mb-4">
                        <img src="{{ asset('assets/Carousel4.png') }}" class="card-img-top" alt="Carousel 4">
                        </div>
                        <h5 class="mb-0 text-center"><b>Enterprise Architecture</b></h5>
                        <p class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.</p>
                    </div>
                    <div class="slider-card">
                        <div class="d-flex justify-content-center align-items-center mb-4">
                            <img src="{{ asset('assets/Carousel5.png') }}" class="card-img-top" alt="Carousel 5">
                        </div>
                        <h5 class="mb-0 text-center"><b>Management Services</b></h5>
                        <p class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="ourwork" style="background-color:#020E35 ;">
        <div class="container"  >
            <h1 style="text-align:center; color: #ffff; font-size: 40px;">Our Work</h1>
            <img src="{{ asset('assets/Line.png') }}" alt="Underline" height="3px" width="100px" class="rounded mx-auto d-block" >
        <br>
            <div class="row">
            <div class="col-md-7">
                <img src="{{ asset('assets/brand1.png') }}" class="img-fluid" alt="..." style="position: relative;"> 
            </div>
            <div class="col">
              <h1 style="color: #ffff; font-size: 30px; ">App development</h1>
              <p style="color: #ffff; font-size: 15px;letter-spacing: 3px ; ">iOS | ANDROID | WEB DEVELOPMENT</p>
              <p style="color: #ffff; font-size: 16px; ; ">App development is the act or process by which a mobile app is developed for mobile devices, such as personal digital assistants, enterprise digital assistants or mobile phones. </p>
            </div>
            </div>
            
           <br>
             <div class="row">
                 <div class="col">
                  <h1 style="color: #ffff; font-size: 30px; text-align: right;">Web development</h1>
                  <p style="color: #ffff; font-size: 15px;letter-spacing: 3px ;text-align: right; ">iOS | ANDROID | WEB DEVELOPMENT</p>
                  <p style="color: #ffff; font-size: 16px; text-align: right; ">Web development is the building and maintenance of websites; it's the work that happens behind the scenes to make a website look great.</p>    
                    </div>
                    <div class="col-md-7">
                        <img src="{{ asset('assets/brand2.png') }}" class="img-fluid" alt="..." style="position: relative;">
                    </div>
                    </div>      
              <br>      
                    <div class="row">
                        <div class="col-md-7">
                            <img src="{{ asset('assets/brand3.png') }}" class="img-fluid" alt="..." style="position: relative;" >
                        </div>
                        <div class="col">
                          <h1 style="color: #ffff; font-size: 30px; ">UI-UX Design</h1>
                          <p style="color: #ffff; font-size: 15px;letter-spacing: 3px ; ">iOS | ANDROID | WEB DEVELOPMENT</p>
                          <p style="color: #ffff; font-size: 16px; ; ">User interface (UI) design refers to the aesthetic elements by which people interact with a product, such as buttons, icons, menu bars, typography, colors, and more</p>
                        </div>
                        </div>           
            <br>

            <div class="row">
                <div class="col">
                 <h1 style="color: #ffff; font-size: 30px; text-align: right;">Enterprise Architecture</h1>
                 <p style="color: #ffff; font-size: 15px;letter-spacing: 3px ;text-align: right; ">iOS | ANDROID | WEB DEVELOPMENT</p>
                 <p style="color: #ffff; font-size: 16px; text-align: right; ">Enterprise Architecture (EA) is a conceptual blueprint that defines the structure and operation of organizations. The intent of enterprise architecture is to determine how an organization can effectively achieve its current and future objectives. Enterprise architecture involves the practice of analyzing, planning, designing and eventual implementing of analysis on an enterprise.</p>    
                   </div>
                   <div class="col-md-7">
                       <img src="{{ asset('assets/brand4.png') }}" class="img-fluid" alt="..." style="position: relative;">
                   </div>
                   </div>      
          </div>
      
        <br>
          <div class="d-flex justify-content-center ">
          <a class="banner-button mt-2 text-center" href="#" id="butSeeWork">SEE OUR WORK</a>
        </div>
    <br>
    </section>
    <br>

    <section id="contact">
        <br>
        <div class="container">     
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7">
                <h2 style="color: #020E35 ; font-size: 30px ;">Questions, Comments, Concerns?</h2>
                <h1 style="color: #020E35 ; font-size: 90px ;">We’d love to <span style="color: #E73587;">hear</span> from you!</h1>
            </div>
            <div class="col">
                <div>     
                    <label class="form-label">Your Email Address</label>
                    <input id="inEmail" type="text" class="form-control" placeholder="something@website.com">
                </div>
                <br>
                <div>     
                    <label class="form-label"> <strong>Subject</strong> </label>
                    <input id="inSubject" type="text" class="form-control" placeholder="Question about your article">
                </div>
                <br>    
              <div class="mb-3">
                <label  class="form-label">Message</label>
                 <textarea id="inMess" class="form-control" rows="5"></textarea>
             </div>
            <div></div>
             <div class="d-flex justify-content-center ">
                <a id="butMess" class="banner-button mt-2 text-center container-fluid" href="#" >Send a Message</a>
              </div>
                  
                
        </div>
    </div>
    </div>
    <br>
    <br>
    </section>

    <section id="footer">
        <div class="container-fluid" style="background-color:#020E35; ">
            <p style="font-size: 12px ; color: #ffff; text-align: center;">2022 © All rights reserved by BuildCode</p>
        </div>
    </section>

    </section>
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/carousel.js') }}"></script>
</body>
</html>