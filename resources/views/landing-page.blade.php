<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>CodeInTheBox | A custom web application at a fixed price</title>
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
<div class="code-header">
    <span class="code-logo"><i class="icon-present blue"></i> CodeInTheBox</span>
</div>
<!-- Three Main Points -->
<section id="three-main" class="code-benefits section bg-blue-pattern white-text">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="headline code-headline">
                    <h2>Find out how much a web application costs!</h2>
                    <p>
                        No need to spend hours or even days discussing your requirements with a project manager. <br>
                        Our system will determine the cost of your web application instantly!
                    </p>
                </div>
                <div class="text-center code-cta">
                    <a href="{{ route('products.web-application') }}" class="btn btn-transparent code-btn-cta btn-big">FIND YOUR FIXED PRICE!</a>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                <div class="main-point"><!-- Main Point -->
                    <i class="line-font icon-tag"></i><!-- Main Point Icon -->
                    <h3><strong>Custom</strong> web application at a <strong>fixed price</strong></h3><!-- Main Point Title -->
                    <p>We have developed an algorithm allowing us to fairly and reliably calculate fixed prices for software projects.</p><!-- Main Point Text -->
                </div><!-- End Main Point -->
            </div>
            <div class="col-md-4">
                <div class="main-point">
                    <i class="line-font icon-bulb"></i>
                    <h3>The price is determined <strong>automatically</strong></h3>
                    <p>Based on your requirements and our smart algorithm you will get the best price for your custom application instantly. </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="main-point">
                    <i class="line-font icon-wallet"></i>
                    <h3><strong>No extra cost</strong> will be added</h3>
                    <p>The price that is calculated by our system is the final one and won't be changed.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Three Main Points -->


<!-- Footer Bottom -->
<footer class="footer footer-sub">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <p>Copyright {{ date('Y') }} &copy; CodeInTheBox. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Bottom -->

<!-- Start Js Files -->
<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.0.min.js"></script><!--jQuery is a Javascript library that greatly reduces the amount of code that you must write.-->
<script src="/js/bootstrap.min.js" type="text/javascript"></script><!--Packed with many functionalies such as carousel slider, responsivity, tabs, drop downs, buttons, and many other features-->
<!-- End Js Files  -->

</body>
</html>