@extends('auth.main')

@section('content')
    <h1 class="text-center text-white fs-3"><b>Registrasi Akun</b></h1>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="">
                    <div class="col-md-12">
                        <p class="text-white">Username</p>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                placeholder="name@example.com" name="name" required autocomplete="name" autofocus
                                value="{{ old('name') }}">
                            <label for="name">Username</label>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <p class="text-white">Email</p>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                placeholder="name@example.com" name="email" required value="{{ old('email') }}">
                            <label for="email">Email</label>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="text-white">Kata Sandi</p>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    id="password" placeholder="name@example.com" required name="password">
                                <label for="password">Kata Sandi</label>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <p class="text-white">Konfirmasi</p>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation"
                                    placeholder="name@example.com" required name="password_confirmation">
                                <label for="password_confirmation">Konfirmasi</label>
                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="from-group mb-4">
                            <button type="submit" class="login btn w-100 text-white">Daftar</button>
                        </div>
                    </div>
                    <div class="text">
                        <p class="text-center">Sudah punya akun?<a href="{{ route('login') }}" class="text">Masuk
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
