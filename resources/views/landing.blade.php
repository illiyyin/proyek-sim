<!DOCTYPE html>
<html lang="en" class="sizes customelements history pointerevents postmessage webgl websockets cssanimations csscolumns csscolumns-width csscolumns-span csscolumns-fill csscolumns-gap csscolumns-rule csscolumns-rulecolor csscolumns-rulestyle csscolumns-rulewidth csscolumns-breakbefore csscolumns-breakafter csscolumns-breakinside flexbox picture srcset webworkers">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Take a note!</title>
    <link rel="stylesheet" href="{{ asset('landingstyle/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landingstyle/css/LineIcons.css') }}">
    <link rel="stylesheet" href="{{ asset('landingstyle/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('landingstyle/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('landingstyle/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('landingstyle/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('landingstyle/css/style.css') }}">
</head>
<body>
    <section class="header-area">
        
        <div id="home" class="slider-area">
            <div class="bd-example">
                <div id="carouselOne" class="carousel slide" data-ride="carousel">
    
                    <div class="carousel-inner">
                        <div class="carousel-item bg_cover" style="background-image: url(public/landingstyle/images/back1.jpg)">
                            <div class="carousel-caption">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-6 col-lg-7 col-sm-10">
                                            <h2 class="carousel-title">Refreshing Design &amp; Easy to Customize</h2>
                                            <ul class="carousel-btn rounded-buttons">
                                                <li><a class="main-btn rounded-three" href="#">GET STARTED</a></li>
                                            </ul>
                                        </div>
                                    </div> <!-- row -->
                                </div> <!-- container -->
                            </div> <!-- carousel caption -->
                        </div> <!-- carousel-item -->

                        <div class="carousel-item bg_cover" style="background-image: url(public/landingstyle/images/back1.jpg)">
                            <div class="carousel-caption">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-6 col-lg-7 col-sm-10">
                                            <h2 class="carousel-title">Based on Latest Bootstrap &amp; HTML5</h2>
                                            <ul class="carousel-btn rounded-buttons">
                                                <li><a class="main-btn rounded-three" href="#">GET STARTED</a></li>
                                            </ul>
                                        </div>
                                    </div> <!-- row -->
                                </div> <!-- container -->
                            </div> <!-- carousel caption -->
                        </div> <!-- carousel-item -->

                        <div class="carousel-item bg_cover active" style="background-image: url(public/landingstyle/images/back1.jpg)">
                            <div class="carousel-caption">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-6 col-lg-7 col-sm-10">
                                            <h2 class="carousel-title">Hello {{ Auth::user()->name }}</h2></p>
                                            <ul class="carousel-btn rounded-buttons">
                                                <li><a class="main-btn rounded-three" href="{{ route('login') }}">GET STARTED</a></li>
                                            </ul>
                                        </div>
                                    </div> <!-- row -->
                                </div> <!-- container -->
                            </div> <!-- carousel caption -->
                        </div> <!-- carousel-item -->
                    </div> <!-- carousel-inner -->

                </div> <!-- carousel -->
            </div> <!-- bd-example -->
        </div>

    </section>
</body>
</html>