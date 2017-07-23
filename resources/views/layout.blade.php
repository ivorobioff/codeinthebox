@extends('page', [
    'title' => 'A Fixed Price For Any Website Is Guaranteed | CodeInTheBox',
    'description' => 'A website price starts at $1750. Our smart algorithm will estimate the cost of your web application automatically.'
    ])

@section('body')
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
@endsection