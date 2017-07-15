@extends('layout')


@section('content')
    <section id="features" class="section arrow-bottom code-arrow-bottom with-less-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="headline">
                        <h2>Congratulations!</h2>
                        <h3>You can <span class="blue"><b>buy</b></span> your web application just for <span class="blue"><strong>{{ money_format('$%i', $price) }}</strong></span>!</h3>
                    </div>
                    <div class="text-center code-return">
                        <p>I want to <a href="{{ route('products.web-application') }}">go back</a> to select something else</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="subscribe" class="section bg-blue-pattern">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center white-text">
                    <div class="headline code-hl-less-padding">
                        <h2>Risk-Free!</h2>
                        <p class="subline code-hl-less-padding">You will NOT pay a cent at this stage!
                            <br>We only need your e-mail to contact you and discuss further steps
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <form action="{{ route('products.web-application.order') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ $_token }}">
                    <div class="col-sm-offset-3 col-sm-6 code-cta-price">
                        <input name="email" type="email" placeholder="Your E-mail" required /><button type="submit" class="btn btn-transparent code-btn-cta btn-big">ORDER NOW!</button>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection