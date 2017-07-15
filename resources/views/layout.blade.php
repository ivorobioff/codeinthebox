@extends('page', [
    'title' => 'CodeInTheBox | A custom web application at a fixed price!',
    'description' => 'We have developed an algorithm allowing us to fairly and reliably calculate a fixed price for your web application.'
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