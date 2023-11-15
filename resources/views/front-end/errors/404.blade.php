@extends('front-end.layouts.main')
@section('content')
    <div class="error-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="error-content-wrap">
                    <h1><span class="a">4</span> <span class="red">0</span> <span class="b">4</span> </h1>
                    <h3>Oops! Page Not Found</h3>
                    <p>The page you were looking for could not be found.</p>
                    <a href="/" class="default-btn two">
                        Return To Landing Page
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End 404 Error -->
    @include('front-end.layouts.partials.gotoarea')
@endsection
