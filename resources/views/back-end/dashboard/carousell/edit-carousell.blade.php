@extends('back-end.layouts.main')
@section('content')
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        <script src="{{ asset('assets/back-end/assets/assets/static/js/initTheme.js') }}"></script>
        <div id="app">
            <div id="main">
                <header class="mb-3">
                    <a href="#" class="burger-btn d-block d-xl-none">
                        <i class="bi bi-justify fs-3"></i>
                    </a>
                </header>
                @include('back-end.layouts.partials.sidebar')
                <div class="page-heading">
                    <h3>{{ $title }}</h3>
                </div>
                <div class="page-content">
                    <section class="row">
                        <div class="col-lg-10">
                            <div class="card">
                                <div class="card-header">
                                    <h4>{{ $title }} {{ $carousell->id }}</h3>
                                </div>
                                <div class=" col-12">
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-body">
                                                <form class="form form-horizontal"
                                                    action="/dashboard/carousell/{{ $carousell->id }}" method="post"
                                                    enctype="multipart/form-data">
                                                    <div class="form-body">
                                                        @method('put')
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="email-horizontal">text</label>
                                                            </div>
                                                            <div class="col-lg-8 form-group">
                                                                <textarea class="form-control @error('text') is-invalid @enderror" name="text" id="text" rows="3"
                                                                    style="height: 103px;">{{ old('text', $carousell->text) }}</textarea>
                                                                <div class="invalid-feedback">
                                                                    @error('text')
                                                                        {{ $message }}
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <input type="hidden" name="oldImage" id="oldImage"
                                                                value="{{ $carousell->image }}">
                                                            <div class="col-md-4">
                                                                <label for="email-horizontal">Image</label>
                                                            </div>
                                                            <div class="col-md-8 form-group">
                                                                <td class="col-1">
                                                                    <img src="{{ asset('storage/' . $carousell->image) }}"
                                                                        class="img-preview img-fluid mb-3"
                                                                        id="frame" name="frame"
                                                                        style="max-height: 120px; overflow:hidden" />
                                                                </td>
                                                                <input
                                                                    class="form-control @error('image') is-invalid @enderror"
                                                                    type="file" id="image" name="image"
                                                                    value="{{ old('image', $carousell->name) }}"
                                                                    onchange="preview()">
                                                            </div>
                                                            <div class="col-sm-12 d-flex justify-content-end">
                                                                <button type="submit" id="submit"
                                                                    class="btn btn-primary me-1 mb-1">
                                                                    Update
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection