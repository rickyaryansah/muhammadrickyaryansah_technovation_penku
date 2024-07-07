@extends('layouts.app')

@section('content')
<div class="container d-flex align-items-center justify-content-center min-vh-100">
    <div class="row justify-content-center w-100">
        <div class="col-md-6">
            <div class="card shadow-lg border-0">
                <div class="card-body p-5">
                    <div class="header__cart text-center">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#"><img src="{{ asset('css/BI_Logo.png') }}"
                                        alt="BI Logo" width="135px" /></a></li>
                            <li class="list-inline-item"><a href="#"><img src="{{ asset('css/alhazen.png') }}"
                                        alt="Alhazen" width="95px" /></a></li>
                            <li class="list-inline-item"><a href="#"><img src="{{ asset('css/isef.png') }}" alt="ISEF"
                                        width="85px" /></a></li>
                            <li class="list-inline-item"><a href="#"><img src="{{ asset('css/fesyar.png') }}"
                                        alt="Fesyar" width="65px" /></a></li>
                            <li class="list-inline-item"><a href="#"><img src="{{ asset('css/ekonomi_syariah.png') }}"
                                        alt="Ekonomi Syariah" width="100px" /></a></li>
                        </ul>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="username" class="col-form-label">{{ __('Username') }}</label>
                            <input id="username" type="text"
                                class="form-control @error('username') is-invalid @enderror" name="username"
                                value="{{ old('username') }}" required autocomplete="username"
                                placeholder="Masukkan Username" autofocus>
                            @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="email" class="col-form-label">{{ __('Email') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email"
                                placeholder="Masukkan Email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="password" class="col-form-label">{{ __('Password') }}</label>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password" placeholder="Masukkan Password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="password-confirm" class="col-form-label">{{ __('Konfirmasi Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" required autocomplete="new-password"
                                placeholder="Masukkan Konfirmasi Password">
                        </div>

                        <div class="form-group mb-0 text-center">
                            <button type="submit" class="btn btn-success w-100 mt-3">
                                {{ __('Daftar') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
.card {
    background: rgba(255, 255, 255, 0.85);
    border-radius: 1rem;
}

.form-control:focus {
    box-shadow: none;
    border-color: #4cae4c;
}

.btn-primary {
    background-color: #4cae4c;
    border-color: #4cae4c;
}

.btn-primary:hover {
    background-color: #45a645;
    border-color: #45a645;
}

.invalid-feedback {
    display: block;
}
</style>
@endpush