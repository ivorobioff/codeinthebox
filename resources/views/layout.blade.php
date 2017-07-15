<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>CodeInTheBox | A custom web application at a fixed price</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Libs CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/simple-line-icons.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">

    <!-- Template CSS -->
    <link href="/css/style.css" rel="stylesheet">

    <link href="/css/code.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700,800&amp;subsetting=all' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,800,700,300' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
    <script src="/js/html5shiv.js"></script>
    <script src="/js/respond.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->

</head>

<body>
<div class="code-header code-header-inverse">
    <a href="/" class="code-logo"><i class="icon-present blue"></i> CodeInTheBox</a>
</div>

@yield('content')

<!-- Footer Bottom -->
<footer class="footer footer-sub code-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <p>Copyright {{ date('Y') }} &copy; CodeInTheBox. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>


<!-- Start Js Files -->
<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.0.min.js"></script><!--jQuery is a Javascript library that greatly reduces the amount of code that you must write.-->
<script src="/js/bootstrap.min.js" type="text/javascript"></script><!--Packed with many functionalies such as carousel slider, responsivity, tabs, drop downs, buttons, and many other features-->
<!-- End Js Files  -->

</body>
</html>