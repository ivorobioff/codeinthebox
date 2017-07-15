@extends('page', ['title' => 'CodeInTheBox | Find out how much a web application costs!'])

@section('body')
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
@endsection
