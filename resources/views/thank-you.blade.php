@extends('layout')


@section('content')
    <section id="features" class="section code-thank-you-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="headline">
                        <h2><i class="fa fa-check code-thank-you-icon"></i> Thank You!</h2>
                        <h3>Your order has been received. We will contact you very soon!</h3>
                    </div>
                    <div class="text-center code-return">
                        <p>I want to <a href="{{ route('products.web-application') }}">go back</a> to buy another web application</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection