@extends('layouts.app')

@section('content')
<div class="container d-flex align-items-center justify-content-center min-vh-100">
    <div class="row justify-content-center w-100">
        <div class="col-md-6">
            <div class="card shadow-lg border-0">
                <div class="card-body p-5">
                    <div class="header__cart">
                        <ul class="text-center">
                            <a href="#"><img src="{{ asset('css/BI_Logo.png') }}" alt="" width="135px" /></a>
                            <a hraf="#"><img src="{{ asset('css/alhazen.png') }}" alt="" width="95px" /></a>
                            <a href="#"><img src="{{ asset('css/isef.png') }}" alt="" width="85px" /></a>
                            <a href="#"><img src="{{ asset('css/fesyar.png') }}" alt="" width="65px" /></a>
                            <a href="#"><img src="{{ asset('css/ekonomi_syariah.png') }}" alt="" width="100px" /></a>
                        </ul>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="email" class="col-form-label">{{ __('Email') }}</label>
                            <div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email"
                                    placeholder="Masukkan Email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="password" class="col-form-label">{{ __('Password') }}</label>
                            <div>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password" placeholder="Masukkan Password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-0 text-center">
                            <button type="submit" class="btn btn-success w-100 mt-3">
                                {{ __('Masuk') }}
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