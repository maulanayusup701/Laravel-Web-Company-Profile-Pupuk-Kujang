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
                            <div class="col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">{{ $message->fullname }}</h4>
                                        <span>from: {{ $message->email }}</span><br>
                                        <span>subject: {{ $message->subject }}</span>
                                    </div>
                                    <div class="card-body">
                                        {!! $message->message !!}
                                        <div class="d-flex justify-content-between align-items-center mt-4">
                                            <p class="badge bg-primary">{{ ' ' . $message->created_at->diffForHumans() }}</p>
                                            <div class="d-flex gap-2 justify-content-end align-items-center">
                                                    {{-- 
                                                    1: Unread
                                                    2: Read
                                                    3: Process
                                                    4: Fixed
                                                    --}}
                                                    @if ($message->status_message_id == 2)
                                                        <form action="/dashboard/messages/{{ $message->id }}/process" method="post">
                                                            @csrf
                                                            <button class="btn btn-primary">Process</button>
                                                        </form>
                                                        <form action="/dashboard/messages/{{ $message->id }}/process" method="post">
                                                            @csrf
                                                            <button class="btn btn-success text-white disabled">Fixed</button>
                                                        </form>
                                                    @elseif ($message->status_message_id == 3)
                                                        <form action="/dashboard/messages/{{ $message->id }}/process" method="post">
                                                            @csrf
                                                            <button class="btn btn-primary disabled">Process</button>
                                                        </form>
                                                        <form action="/dashboard/messages/{{ $message->id }}/fix" method="post">
                                                            @csrf
                                                            <button class="btn btn-success text-white">Fixed</button>
                                                        </form>
                                                    @endif
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
