@extends('back-end.layouts.main')
@section('content')
<div class="min-h-screen bg-gray-100 dark:bg-gray-900">
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
                                <h4>{{ $title }}</h4>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <form class="form form-horizontal" action="/dashboard/information/{{ $info->id }}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                @method('put')
                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="about">About</label>
                                                        </div>
                                                        <div class="col-lg-8 form-group">
                                                            <div class="form-group">
                                                                <input id="about" type="hidden" name="about" value="{!! old('about', $info->about) !!}" required>
                                                                <trix-editor input="about" value="{!! old('about', $info->about) !!}" placeholder="Are you need help"></trix-editor>
                                                                @error('about')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="visi_misi">Visi & Misi</label>
                                                        </div>
                                                        <div class="col-lg-8 form-group">
                                                            <div class="form-group">
                                                                <input id="visi_misi" type="hidden" name="visi_misi" value="{!! old('visi_misi', $info->visi_misi) !!}" required>
                                                                <trix-editor input="visi_misi" value="{!! old('visi_misi', $info->visi_misi) !!}" placeholder="Are you need help"></trix-editor>
                                                                @error('visi_misi')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="email">Email</label>
                                                        </div>
                                                        <div class="col-lg-8 form-group">
                                                            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $info->email) }}">
                                                            <div class="invalid-feedback">
                                                                @error('email')
                                                                    {{ $message }}
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="running_hour">Running Hour</label>
                                                        </div>
                                                        <div class="col-lg-8 form-group">
                                                            <input type="text" id="running_hour" class="form-control @error('running_hour') is-invalid @enderror" name="running_hour" value="{{ old('running_hour', $info->running_hour) }}">
                                                            <div class="invalid-feedback">
                                                                @error('running_hour')
                                                                    {{ $message }}
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="no_telp">Phone Number</label>
                                                        </div>
                                                        <div class="col-lg-8 form-group">
                                                            <input type="text" id="no_telp" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp" value="{{ old('no_telp', $info->no_telp) }}">
                                                            <div class="invalid-feedback">
                                                                @error('no_telp')
                                                                    {{ $message }}
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="address">Address</label>
                                                        </div>
                                                        <div class="col-lg-8 form-group">
                                                            <input type="text" id="address" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address', $info->address) }}">
                                                            <div class="invalid-feedback">
                                                                @error('address')
                                                                    {{ $message }}
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 d-flex justify-content-end">
                                                            <button type="submit" id="submit" class="btn btn-primary me-1 mb-1">
                                                                Update
                                                                <i class="bi bi-cloud-upload"></i>
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
