@extends('page', [
    'title' => 'Fixed Price For A Web Application Is Guaranteed | CodeInTheBox',
    'description' => 'Website price starts at $1750. Our smart algorithm automatically estimates the actual cost of a web application.',
    'header' => 'normal'
    ])

@section('body')
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