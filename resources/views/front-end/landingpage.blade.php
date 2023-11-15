@extends('front-end.layouts.main')
@section('content')
    <!-- Start Navbar Area -->
    @include('front-end.layouts.partials.navbar')
    <!-- End Navbar Area -->

    <!-- Start Hero Slider Area -->
    <section class="hero-slider-area">
        <div class="hero-slider-wrap owl-theme owl-carousel" data-slider-id="1">
            <div class="hero-slider-item bg-1">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="hero-slider-text one">
                                <h1>{{ $carousell[0]->text }}</h1>
                                <div class="slider-btn">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-slider-item bg-2">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="hero-slider-text two">
                                <h1>{{ $carousell[1]->text }}</h1>
                                <div class="slider-btn">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-slider-item bg-3">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="hero-slider-text three">
                                <h1>{{ $carousell[2]->text }}</h1>
                                <div class="slider-btn">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-area-two bio-data ptb-100" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="about-content">
                        <h2>About Pupuk Kujang</h2>
                        <h3>Who We Are</h3>
                        @foreach ($info as $i)
                            <p>{{ $i->about }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="container pt-100">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-content">
                        <h2>Visi & Misi</h2>
                        <h3>Visi & Misi</h3>
                        @foreach ($info as $i)
                            <p>{!! $i->visi_misi !!}</p>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 p-0">
                            <div class="about-grid-img">
                                <img src="{{ asset('assets/front-end/assets/img/about-grid/1.jpg') }}" alt="Image">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 p-0">
                            <div class="about-grid-img">
                                <img src="{{ asset('assets/front-end/assets/img/about-grid/2.jpg') }}" alt="Image">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 p-0">
                            <div class="about-grid-img r-sm mb-0">
                                <img src="{{ asset('assets/front-end/assets/img/about-grid/3.jpg') }}" alt="Image">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 p-0">
                            <div class="about-grid-img mb-0">
                                <img src="{{ asset('assets/front-end/assets/img/about-grid/4.jpg') }}" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Area -->
    {{-- contact Area --}}
    <section class="contact-area ptb-100" id="contact">
        <!-- Start Page Title Area -->
        <div class="page-title-area bg-2">
            <div class="container">
                <div class="page-title-content">
                    <h2>Contact Us</h2>
                    <ul>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->
        <!-- Start Map Area -->
        <div class="map-area">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31718.84638300729!2d107.39353531083988!3d-6.412568199999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69728cf55f1ddd%3A0xae715fd6bdd296a0!2sPT%20Pupuk%20Kujang!5e0!3m2!1sid!2sid!4v1688736170014!5m2!1sid!2sid"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- End Map Area -->
        <!-- Start Contact Area -->
        <div class="container ptb-100">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="contact-info">
                        @foreach ($contact as $contact)
                            <h3>Running Hour</h3>
                            <p>{!! $contact->running_hour !!}</p>
                            <ul>
                                <li>
                                    <i class="flaticon-phone-call"></i>
                                    Phone:
                                    <a href="tel:+{{ $contact->no_telp }}">+{{ $contact->no_telp }}</a>
                                </li>
                                <li>
                                    <i class="flaticon-email-1"></i>
                                    Email:
                                    <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
                                </li>
                                <li>
                                    <i class="flaticon-pin"></i>
                                    Address:
                                    <span>{{ $contact->address }}</span>
                                </li>
                            </ul>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="contact-wrap">
                        <h3>Online Support</h3>
                        <div class="alert alert-success alert-dismissible fade show d-none" role="alert" id="success">
                            <strong>Send Message Successfully!</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-danger alert-dismissible fade show d-none" role="alert" id="failed">
                            <strong>Send Message Failed!</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <form action="/onlineSupport" method="post" class="php-email-form" id="form-online-support">
                            @csrf
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="fullname" id="fullname"
                                            class="form-control @error('fullname') is-invalid @enderror" id="fullname"
                                            placeholder="Your Name" required>
                                        @error('fullname')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email"
                                            class="form-control @error('email') is-invalid @enderror" id="email"
                                            placeholder="Your Email" required>
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="subject" id="subject"
                                            class="form-control @error('subject') is-invalid @enderror" id="subject"
                                            placeholder="Your Subject" required>
                                        @error('subject')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input id="message" type="hidden" name="message"
                                            value="{{ old('message') }}" required>
                                        <trix-editor input="message" value="{{ old('message') }}"
                                            placeholder="Are you need help">
                                        </trix-editor>
                                        @error('message')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" id="submit" class="default-btn page-btn">
                                            Send Message
                                        </button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end contact Area --}}
    <script>
        $(document).ready(function() {
            $('#form-online-support').submit(function(e) {
                e.preventDefault();
                var fullname = $('#fullname').val();
                var email = $('#email').val();
                var subject = $('#subject').val();
                var message = $('#message').val();
                var short_message = $('#short-message').val();
                $.ajax({
                    url: '/online-support',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        fullname: fullname,
                        email: email,
                        subject: subject,
                        message: message,
                        short_message: short_message
                    },
                    success: function(response) {
                        $('#form-online-support')[0].reset(); // Reset the form
                        $('#success').removeClass('d-none');
                        $('#failed').addClass('d-none');
                    },
                    error: function(xhr) {
                        $('#failed').removeClass('d-none');
                        $('#success').addClass('d-none');
                    }
                });
            });
        });
    </script>
    @include('front-end.layouts.partials.script')
    {{-- Start Go Top Area --}}
    @include('front-end.layouts.partials.gotoarea')
    {{-- End Go Top Area --}}
@endsection
