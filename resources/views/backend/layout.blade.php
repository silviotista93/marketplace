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

    <!-- token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>{{ config('app.name') }}</title>

    <!-- vendor css -->
    <link href="/backend/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="/backend/lib/ionicons/css/ionicons.min.css" rel="stylesheet">

    <link href="/backend/lib/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="/backend/lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="/backend/css/bracket.css">
    <link href="/backend/lib/select2/css/select2.min.css" rel="stylesheet">
    <style>
    .form-control-danger{
        border-color:#d9534f; 
    }
    </style>
</head>

<body>

<!-- ########## START: LEFT PANEL ########## -->
<div class="br-logo"><a href=""><span>[</span>bracket <i>plus</i><span>]</span></a></div>

<!--=====================================
    MENÚ DRAWER
======================================-->
@include('backend.partials.menu-drawer')


<!--=====================================
    HEADER
======================================-->
@include('backend.partials.header')

<!--=====================================
    SIDEBAR
======================================-->

@include('backend.partials.sider_bar')

<div class="br-mainpanel">
    @yield('header_page')

    @yield('content')

    <footer class="br-footer">
        <div class="footer-left">
            <div class="mg-b-2">Copyright &copy; 2017. Bracket Plus. All Rights Reserved.</div>
            <div>Attentively and carefully made by ThemePixels.</div>
        </div>
        <div class="footer-right d-flex align-items-center">
            <span class="tx-uppercase mg-r-10">Share:</span>
            <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/bracketplus/intro"><i class="fab fa-facebook tx-20"></i></a>
            <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Bracket%20Plus,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/bracketplus/intro"><i class="fab fa-twitter tx-20"></i></a>
        </div>
    </footer>

</div>


<script src="/backend/lib/jquery/jquery.min.js"></script>
<script src="/backend/lib/jquery-ui/ui/widgets/datepicker.js"></script>
<script src="/backend/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/backend/lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="/backend/lib/moment/min/moment.min.js"></script>
<script src="/backend/lib/peity/jquery.peity.min.js"></script>

<script src="/backend/lib/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/backend/lib/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
<script src="/backend/lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="/backend/lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
<script src="/backend/lib/select2/js/select2.full.min.js"></script>

<script src="/backend/js/bracket.js"></script>
<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': "{{ csrf_token() }}"
    }
});
</script>
@stack('js')
</body>
</html>
