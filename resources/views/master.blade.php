<!DOCTYPE html>
<html>
    <head>
        <meta charst="utf-8">
        <title>ArcadiaHub</title>
        <base href="{{URL::asset('/')}}" target="">
        <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{url('css/arcadiaStyle.css')}}">
        <script src="{{url('js/jquery-3.4.0.min.js')}}"></script>
    </head>
    <body id="page-top">
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="index.html">ArcadiaHub</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> Menu <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="sign.html">Sign in</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="register.html">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="investor.html">Become an Investor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="Membership.html">Membership</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header -->
        <header class="masthead">
            <div class="container d-flex h-100 align-items-center">
                <div class="mx-auto text-center">
                    <h1 class="mx-auto my-0 text-">ArcadiaHub</h1> <br/><br/><br/><br/>
                    <h2 class="text-black-50 mx-auto mt-2 mb-5">Seek, Reach, Connect</h2>
                    <a href="homepage.html"><button type="submit" class="registerbtn">About</button></a>
                    <br/><br/><br/><br/><br/><br/><br/>
                </div>
            </div>
        </header>
        <!-- Footer  -->
        <footer class="bg-black small text-center text-white-50">
            <div class="container">
                Copyright &copy; Your Website 2019
            </div>
        </footer>
        <script src="{{url('js/popper.min.js')}}"></script>
        <script src="{{url('js/bootstrap.min.js')}}"></script>
    </body>
</html>