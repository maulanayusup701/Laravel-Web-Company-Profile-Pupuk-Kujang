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
                            {{ $messages->links() }}
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection