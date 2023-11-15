@extends('back-end.layouts.main')
@section('content')
    <div id="error">
        <div class="error-page container">
            <div class="col-md-8 col-12 offset-md-2">
                <div class="text-center">
                    <img class="img-error" src="{{ asset('assets/back-end/assets/compiled/svg/error-404.svg') }}"
                        alt="Not Found">
                    <h1 class="error-title">Not Found</h1>
                    <p class='fs-5 text-gray-600'>The page you are looking not found.</p>
                    <a href="/dashboard" class="btn btn-lg btn-outline-primary mt-3">Return To Dashboard</a>
                </div>
            </div>
        </div>
    </div>
@endsection
