<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>eVohost.pl - Twój bezpłatny hosting filmów.</title>
    <link href="{{URL::asset('assets/home/css/fine-uploader.css')}}" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <meta name="csrf-token" content="6wi7L58XFAYSKdKYn4oQA7bvxDReg58aYdjfIw2m" />
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="{{URL::asset('assets/home/js/jquery.fine-uploader.js')}}"></script>

    <link href="{{URL::asset('assets/home/css/app.css')}}" rel="stylesheet">
    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <link href="{{URL::asset('assets/home/css/notify.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="{{URL::asset('assets/home/js/notify.js')}}"></script>

</head>
<body>
<div class="container" style="margin-top: 20px">

    @yield('header')
    <div class="row">
        <div class="col-md-12"></div>
    </div>

@yield('body')

@yield('footer')
    <!-- Scripts -->
    <script src="{{URL::asset('assets/home/js/custom.js')}}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</div>
</body>
</html>


