<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    <meta name="keywords" content="{{ $keywords ?? '' }}">
    <meta name="description" content="{{ $description ?? ''}}">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Libs CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/simple-line-icons.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">

    <!-- Template CSS -->
    <link href="/css/style.css" rel="stylesheet">

    <link href="/css/code.css?v=1" rel="stylesheet">

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700,800&amp;subsetting=all' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,800,700,300' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
    <script src="/js/html5shiv.js"></script>
    <script src="/js/respond.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />
</head>

<body>
@if (env('GOOGLE_ANALYTICS'))
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-102639828-1', 'auto');
        ga('send', 'pageview');

    </script>
@endif
<div class="code-header {{ $header === 'home' ? '' : 'code-header-inverse' }}">
    <div class="row">
        <div class="col-sm-6">
            @if ($header === 'home')
                <span class="code-logo"><i class="icon-present blue"></i> CodeInTheBox</span>
            @else
                <a href="/" class="code-logo"><i class="icon-present blue"></i> CodeInTheBox</a>
            @endif
        </div>
        <div class="col-sm-6 code-share text-right">
            Tell about us:
            <a target="_blank" title="Facebook" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//www.codeinthebox.com" class="fa fa-facebook"></a>
            <a target="_blank" title="Twitter" href="https://twitter.com/home?status=http%3A//www.codeinthebox.com" class="fa fa-twitter"></a>
            <a target="_blank" title="LinkedIn" href="https://www.linkedin.com/shareArticle?mini=true&url=http%3A//www.codeinthebox.com&title=How%20Much%20A%20Web%20Application%20Costs%20To%20Build&summary=Simple%20web%20application%20costs%20as%20much%20as%20$1750.%20With%20our%20advanced%20algorithm,%20we%20can%20instantly%20calculate%20a%20fixed%20price%20for%20your%20web%20application.&source=" class="fa fa-linkedin"></a>
            <a target="_blank"  title="Google+"href="https://plus.google.com/share?url=http%3A//www.codeinthebox.com" class="fa fa-google"></a>
        </div>
    </div>
</div>
@yield('body')

<!-- Start Js Files -->
<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.0.min.js"></script><!--jQuery is a Javascript library that greatly reduces the amount of code that you must write.-->
<script src="/js/bootstrap.min.js" type="text/javascript"></script><!--Packed with many functionalies such as carousel slider, responsivity, tabs, drop downs, buttons, and many other features-->
<!-- End Js Files  -->

</body>
</html>