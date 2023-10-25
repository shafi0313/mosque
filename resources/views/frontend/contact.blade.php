@extends('frontend.layout.app')
@section('title', 'Contact')
@section('content')
    <section id="contact-info">
        <div class="center">
            <h2>How to reach us?</h2>
            <p class="lead">You are most welcome to visit us personally or <a
                    href="{{ route('frontend.about.committeeMember') }}">contact us</a> through email or social media. You
                are welcome to visit us personally or through email.</p>
        </div>
        <style>
            .title {
                display: block;
                margin: 10px 0 25px 0;
                border-bottom: 1px dotted #e4e9f0;
            }

            .title h2 {
                color: #3498db;
                font-weight: 700;
                margin-bottom: -1px;
                padding-bottom: 5px;
                display: inline-block;
                border-bottom: 2px solid #72c02c;
            }
        </style>
        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ">
                        <div class="title">
                            <h2>Online Inquiry</h2>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('frontend.contact.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <label for="">Subject <span class="text-danger">*</span></label>
                                <input type="text" name="subject" class="form-control" placeholder="Subject">
                            </div>
                            <div class="form-group">
                                <label for="">Email <span class="text-danger">*</span></label>
                                <input type="text" name="email" class="form-control" placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <label for="">Message <span class="text-danger">*</span></label>
                                <textarea name="message" rows="10" class="form-control" placeholder="Detail Message With Your Contact Number"></textarea>
                            </div>
                            <button type="submit" class="icon">SEND</button>
                        </form>
                    </div>
                    <style>
                        .contact-list {
                            list-style: none;
                            padding: 0;
                        }

                        .contact-list li {
                            margin-bottom: 10px;
                            position: relative;
                        }

                        .contact-list li i {
                            margin-right: 10px;
                            color: #3498db;
                        }

                        .contact-list li:hover {
                            color: #e74c3c;
                            cursor: pointer;
                        }
                    </style>
                    <div class="col-md-4">
                        <div class="title">
                            <h2>Address</h2>
                        </div>
                        <ul class="contact-list">
                            <li><i class="fa-solid fa-location-dot"></i>@setting('address')</li>
                            <li><i class="fa-solid fa-envelope"></i>@setting('email')</li>
                            <li><i class="fa-solid fa-phone"></i>@setting('phone')</li>
                            <li><i class="fa-solid fa-earth-americas"></i>www.{{ request()->getHost() }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @push('scripts')
            {!! JsValidator::formRequest('App\Http\Requests\StoreContactRequest') !!}
        @endpush
    @endsection
