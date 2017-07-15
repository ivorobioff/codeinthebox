@extends('page', ['title' => 'CodeInTheBox | A custom web application at a fixed price!'])

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