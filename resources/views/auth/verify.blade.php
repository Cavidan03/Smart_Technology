@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('E-poçt ünvanınızı doğrulayın') }}</div>

                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif

                        {{ __('Before proceeding, please check your email for a verification link.') }}
                        {{ __('If you did not receive the email') }},
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit"
                                class="btn btn-link p-0 m-0 align-baseline">{{ __('başqa tələb etmək üçün bura klikləyin') }}</button>.
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .form-group input,
        .form-group select {
            float: left;
            width: 100%;
            border-radius: 0;
            border: solid #ccc 1px;
            padding: 2px 12px;
            font-weight: 400;
            font-size: 13px;
            margin: 0px 0 0;
            box-shadow: none;
            color: #333;
            height: 44px;
        }

        .form-group {
            margin-bottom: 2em;
        }

        .p-3 {
            padding: 3rem;
        }
    </style>
@endsection
