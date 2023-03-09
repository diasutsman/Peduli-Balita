@extends('auth.main')

@section('content')
    <h1 class="text-center text-white fs-3"><b>Selamat Datang</b></h1>
    <p class="text-center p-2 text-white">Silahkan masukan akun anda untuk menikmati aplikasi Peduli Balita
        ini.</p>
    <!-- <ul class="nav nav-pills mb-3 d-flex justify-content-center" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link text-uppercase active" id="pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                        aria-selected="true">Login</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link text-uppercase" id="pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-profile" type="button" role="tab"
                                        aria-controls="pills-profile" aria-selected="false">Register</button>
                                </li>
                            </ul> -->
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
            tabindex="0">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="">
                    <!-- <div class="col-md-12">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput"
                                                        placeholder="name@example.com">
                                                    <label for="floatingInput">Yourname</label>
                                                </div>
                                            </div> -->
                    <div class="col-md-12">
                        <p class="text-white">Email/Username</p>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                placeholder="name@example.com" name="email" value="{{ old('email') }}" required>
                            <label for="email">Email/Username</label>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
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
                    <div class="row">
                        <div class="col-md-6">
                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="background:#2F5D62" name="remember">
                            <label for="vehicle1" class="text-white">Ingat Saya</label><br>
                        </div>
                        <div class="col-md-6">
                            <a class="text-white text-end d-block" href="{{ route('password.request') }}">Lupa Kata Sandi?</a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="from-group mb-4">
                            <button type="submit" class="login btn w-100 text-white">Login</button>
                        </div>
                    </div>
                    <div class="text">
                        <p class="text-center">Tidak punya akun?<a href="{{ route('register') }}" class="text">Daftar
                        </p>
                    </div>
                    <!-- <div class="o-auth d-flex justify-content-center align-items-center">
                                                <p class="text-primary text-uppercase">or login with</p>
                                            </div> -->
                    <!-- <div class="sosial-media d-flex justify-content-center">
                                                <a href="#" class="btn btn-primary m-2"><i class="fa fa-facebook"></i> Facebook</a>
                                                <a href="#" class="btn btn-danger m-2"><i class="fa fa-google"></i> Google</a>
                                                <a href="#" class="btn btn-dark m-2"><i class="fa fa-github"></i> Github</a>
                                            </div> -->
                </div>
            </form>
        </div>
    </div>
@endsection
