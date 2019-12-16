
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Website Title -->
    <title>Register - Fintask</title>
    
    <!-- Styles -->
     <link href="{{ asset('https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext') }}" rel="stylesheet"type='text/css'>
    
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet"type='text/css'>
    
    <link href="{{ asset('css/fontawesome-all.css') }}" rel="stylesheet"type='text/css'>
    <link href="{{ asset('css/swiper.css') }}" rel="stylesheet"type='text/css'>
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet"type='text/css'> 
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet"type='text/css'>
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="#"><img src="images/fintaskbig.svg" alt="alternative"></a>
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{ route('register') }}">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{ route('login') }}">Login</a>
                </li>
            </ul>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->

  <!-- Request -->
  <div id="request header" class="form-1 header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Jangan lupa daftar dulu kalo mau pake</h2>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body"><strong class="blue">Gampang</strong> penggunaan sistem yang mudah</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body"><strong class="blue">Kece</strong> design webnya kece badai</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body"><strong class="blue">Formalitas</strong> ini cuman biar dapet nilai doang</div>
                            </li>

                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">

                    <!-- Request Form -->
                    <div class="form-container">
                        <form  method="POST" action="{{ route('register') }}" class="">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control-input  @error('name') is-invalid @enderror" value="{{ old('name') }}" id="name" name="name" required autocomplete="name" autofocus>
                                <label class="label-control" for="rname">Name</label>
                                <div class="help-block with-errors">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control-input  @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" name="email" required autocomplete="email" autofocus>
                                <label class="label-control" for="rname">Email</label>
                                <div class="help-block with-errors">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control-input  @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="new-password">
                                <label class="label-control" for="remail">Password</label>
                                <div class="help-block with-errors">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control-input  @error('password') is-invalid @enderror" id="password-confirm" name="password_confirmation" required autocomplete="new-password">
                                <label class="label-control" for="password">Confirm Password</label>
                                <div class="help-block with-errors">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" class="form-control-submit-button btn btn-primary">REGISTER </button>
                            </div>
                            @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                            @endif
                        </form>
                    </div> <!-- end of form-container -->
                    <!-- end of request form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-1 -->
    <!-- end of request -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-1 -->
    <!-- end of request -->
    	
    <!-- Scripts -->
    <!-- <link href="{{ asset('css/style.css') }}" rel="stylesheet"> -->
    <script src="{{ asset('js/jquery.min.js') }}"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="{{ asset('js/popper.min.js') }}"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script> <!-- Bootstrap framework -->
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="{{ asset('js/swiper.min.js') }}"></script> <!-- Swiper for image and text sliders -->
    <script src="{{ asset('js/jquery.magnific-popup.js') }}"></script> <!-- Magnific Popup for lightboxes -->
    <script src="{{ asset('js/validator.min.js') }}"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="{{ asset('js/scripts.js') }}"></script> <!-- Custom scripts -->

</body>
</html>

