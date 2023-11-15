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
                                    <h4>{{ $title }} </h3>
                                </div>
                                <div class=" col-12">
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-body">
                                                <form class="form form-horizontal">
                                                    <div class="form-body">
                                                        <div class="row">
                                                            @foreach ($info as $info)
                                                                <div class="col-md-4">
                                                                    <label for="email-horizontal">About</label>
                                                                </div>
                                                                <div class="col-lg-8 form-group ">
                                                                    <span>:</span> {!! $info->about !!}
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="email-horizontal">Visi & Misi</label>
                                                                </div>
                                                                <div class="col-lg-8 form-group">
                                                                    <span>:</span> {!! $info->visi_misi !!}
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="email-horizontal">Email</label>
                                                                </div>
                                                                <div class="col-lg-8 form-group">
                                                                    <P>: {!! $info->email !!}</P>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="email-horizontal">Running Hour</label>
                                                                </div>
                                                                <div class="col-lg-8 form-group">
                                                                    <P>: {!! $info->running_hour !!}</P>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="email-horizontal">Phone Number</label>
                                                                </div>
                                                                <div class="col-lg-8 form-group">
                                                                    <P>: {!! $info->no_telp !!}</P>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="email-horizontal">Alamat</label>
                                                                </div>
                                                                <div class="col-lg-8 form-group">
                                                                    <P>: {!! $info->address !!}</P>
                                                                </div>
                                                                <div class="col-sm-12 d-flex justify-content-end">
                                                                    <a href="/dashboard/information/{{ $info->id }}/edit"
                                                                        class="btn btn-primary">Edit
                                                                        <i class="bi bi-pencil-square"></i>
                                                                    </a>
                                                                </div>
                                                            @endforeach
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