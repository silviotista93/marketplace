<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket Plus">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracketplus">
    <meta property="og:title" content="Bracket Plus">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>{{ config('app.name') }}</title>

    <!-- vendor css -->
    <link href="/backend/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="/backend/lib/ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="/backend/css/bracket.css">
</head>

<body>

<div class="row no-gutters flex-row-reverse ht-100v">
    <div class="col-md-6 bg-gray-200 d-flex align-items-center justify-content-center">
        <div class="login-wrapper wd-250 wd-xl-350 mg-y-30">
            <h4 class="tx-inverse tx-center">{{ config('app.name') }}</h4>
            <p class="tx-center mg-b-60">¡Bienvenido de vuelta mi amigo! Por favor, credenciales para iniciar.</p>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group {{ $errors->has('email') ? ' is-invalid' : '' }}">
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter email" required autofocus>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div><!-- form-group -->
                <div class="form-group {{ $errors->has('password') ? ' is-invalid' : '' }}">
                    <input type="password" name="password" class="form-control" placeholder="Enter password">
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                    <a href="" class="tx-info tx-12 d-block mg-t-10">olvidó su contraseña?</a>
                </div><!-- form-group -->
                <button type="submit" class="btn btn-info btn-block">Sign In</button>
            </form>
            {{--<div class="mg-t-60 tx-center">Not yet a member? <a href="" class="tx-info">Iniciar</a></div>--}}
        </div><!-- login-wrapper -->
    </div><!-- col -->
    <div class="col-md-6 bg-br-primary d-flex align-items-center justify-content-center">
        <div class="wd-250 wd-xl-450 mg-y-30">
            <div class="signin-logo tx-28 tx-bold tx-white"><span class="tx-normal">[</span> bracket <span
                    class="tx-info">plus</span> <span class="tx-normal">]</span></div>
            <div class="tx-white mg-b-60">The Admin Template For Perfectionist</div>

            <h5 class="tx-white">Why bracket?</h5>
            <p class="tx-white-6">When it comes to websites or apps, one of the first impression you consider is the
                design. It needs to be high quality enough otherwise you will lose potential users due to bad
                design.</p>
            <p class="tx-white-6 mg-b-60">When your website or app is attractive to use, your users will not simply be
                using it, they’ll look forward to using it. This means that you should fashion the look and feel of your
                interface for your users.</p>
            <a href=""
               class="btn btn-outline-light bd bd-white bd-2 tx-white pd-x-25 tx-uppercase tx-12 tx-spacing-2 tx-medium">Purchase
                Template</a>
        </div><!-- wd-500 -->
    </div>
</div><!-- row -->

<script src="/backend/lib/jquery/jquery.min.js"></script>
<script src="/backend/lib/jquery-ui/ui/widgets/datepicker.js"></script>
<script src="/backend/lib/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
