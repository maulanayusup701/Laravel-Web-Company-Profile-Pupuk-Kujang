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
                    <h3>Dasboards</h3>
                </div>
                <div class="page-content">
                    <section class="row">
                        <div class="col-12 col-lg-9">
                            <div class="row">
                                <div class="col-6 col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body px-4 py-4-5">
                                            <div class="row">
                                                <div
                                                    class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                                    <div class="stats-icon purple mb-2">
                                                        <i class="iconly-boldShow"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                    <h6 class="text-muted font-semibold">
                                                        All Messages
                                                    </h6>
                                                    <h6 class="font-extrabold mb-0">{{ $count_msg }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body px-4 py-4-5">
                                            <div class="row">
                                                <div
                                                    class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                                    <div class="stats-icon blue mb-2">
                                                        <i class="iconly-boldProfile"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                    <h6 class="text-muted font-semibold">Read</h6>
                                                    <h6 class="font-extrabold mb-0">{{ $count_msg_read }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body px-4 py-4-5">
                                            <div class="row">
                                                <div
                                                    class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                                    <div class="stats-icon green mb-2">
                                                        <i class="iconly-boldAdd-User"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                    <h6 class="text-muted font-semibold">Progress</h6>
                                                    <h6 class="font-extrabold mb-0">{{ $count_msg_progress }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body px-4 py-4-5">
                                            <div class="row">
                                                <div
                                                    class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                                    <div class="stats-icon red mb-2">
                                                        <i class="iconly-boldBookmark"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                    <h6 class="text-muted font-semibold">Fixed</h6>
                                                    <h6 class="font-extrabold mb-0">{{ $count_msg_fix }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    @forelse ($messages as $message)
                                        <div class="card">
                                            <div class="row my-2">
                                                <div class="col">
                                                    <a href="/dashboard/messages/{{ $message->id }}/show">
                                                        <div class="card-body">
                                                            <h4 class="card-title">{{ $message->fullname }}</h4>
                                                            <p class="card-title text-white">from: {{ $message->email }}</p>
                                                            <p class="card-title text-white">subject: {{ $message->subject }}</p>
                                                            <p class="card-text mt-4 text-white">{!! $message->short_message . " "!!}</p>
                                                            <p class="badge bg-primary mt-2">{{ $message->created_at->diffForHumans() }}</p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @empty  
                                        <div class="col-lg-12 col-md-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <p class="card-text text-center fw-bold">
                                                        No Messages
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3">
                            <div class="card">
                                <div class="card-body py-4 px-4">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-xl">
                                            <img src="{{ asset('assets/back-end/assets/compiled/jpg/1.jpg') }}"
                                                alt="Face 1" />
                                        </div>
                                        <div class="ms-3 name">
                                            <h5 class="font-bold">{{ auth()->user()->fullname }}</h5>
                                            <h6 class="text-muted mb-0">{{ '@' . auth()->user()->username }}</h6>
                                        </div>
                                    </div>
                                    <div class="px-4 mt-2">
                                        <form action="/dashboard/logout" method="post">
                                            @csrf
                                            <button type="submit"
                                                class="btn btn-block btn-xl btn-primary font-bold mt-3">Logout
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4>Recent Messages</h4>
                                </div>
                                <div class="card-content pb-4">
                                    @forelse ($messages as $message)
                                        <div class="recent-message d-flex px-4 py-3">
                                            <div class="avatar avatar-lg">
                                                <img
                                                    src="{{ asset('assets/back-end/assets//compiled/jpg/4.jpg') }}" />
                                            </div>
                                            <div class="name ms-4">
                                                <h5 class="mb-1">{{ $message->fullname }}</h5>
                                                <h6 class="text-muted mb-0">{{ $message->email }}</h6>
                                            </div>
                                        </div>
                                    @empty
                                        <div class="recent-message d-flex px-4 py-3">
                                            <div class="name ms-4">
                                                <p class="text-center mb-0 font-bold ms-">
                                                    No Users Sends Message
                                                </p>
                                            </div>
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
