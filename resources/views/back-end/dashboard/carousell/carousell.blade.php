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
                        <div class="col-12 col-lg-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4>{{ $title }}</h3>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-lg">
                                            <thead>
                                                <tr>
                                                    <th>Names</th>
                                                    <th>Texts</th>
                                                    <th>Images</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($carousells as $carousell)
                                                    <tr>
                                                        <td class="col-2">
                                                            <label class="form-label">Carousell-{{ $carousell->id }}
                                                            </label>
                                                        </td>
                                                        <td class="col-5">
                                                            <label class="form-label">{{ $carousell->text }}
                                                            </label>
                                                        </td>
                                                        <td class="col-2">
                                                            <img src="{{ asset('storage/' . $carousell->image) }}"
                                                                class="img-preview img-fluid mb-3" id="frame"
                                                                name="name"
                                                                style="max-height: 120px; overflow:hidden" />
                                                        </td>
                                                        <td class="col-1">
                                                            <button class="btn btn-warning">
                                                                <a href="/dashboard/carousell/{{ $carousell->id }}/edit">
                                                                    <i class="bi bi-pencil-square"></i>
                                                                </a>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
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