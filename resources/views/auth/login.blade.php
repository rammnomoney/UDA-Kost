@extends('layouts.app')

@section('content')
    <section class="section bg-light min-vh-100 d-flex align-items-center justify-content-center">
        <div class="container d-flex align-items-center justify-content-center">
            <div class="row w-100 mx-0">
                <div class="col-lg-5 mx-auto">

                    <div class="card card-rounded border-0 shadow">
                        <div class="card-body p-5">
                            <div class="d-flex justify-content-center mb-4">
                                <img src="aset/img/Udakost/transparent-udakost/Uda Kost Logo.png" alt="Udakost Logo"
                                    width="100%" class="w-36">
                            </div>

                            {{-- <p class="text-center text-gray-600 mb-4">
                Don't have an account? 
                <a href="/register" class="text-muted font-semibold hover:underline">Sign up</a>
              </p> --}}

                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <label for="email"
                                    class="form-label text-gray-700 font-medium">{{ __('Email') }}</label>
                                <div class="mb-4">
                                    <input type="email"
                                        class="form-control form-control-user shadow-sm  @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" placeholder="{{ __('Email') }}"
                                        required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <label for="password"
                                    class="form-label text-gray-700 font-medium">{{ __('Kata sandi') }}</label>
                                <div class="mb-4 relative">
                                    <input type="password"
                                        class="form-control form-control-user shadow-sm @error('password') is-invalid @enderror"
                                        name="password" placeholder="{{ __('Kata sandi') }}" required
                                        autocomplete="current-password">
                                    <div class="text-end mt-2">
                                        <a href="" class="text-muted text-blue-600 hover:underline">Lupa Kata sandi?</a>
                                    </div>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="d-grid gap-2 py-2">
                                    <button type="submit"
                                        class="btn btn-primary w-full py-2 rounded-md font-semibold hover:bg-blue-200 focus:outline-none transition">
                                        {{ __('Masuk') }}
                                    </button>
                                </div>

                                <!-- Divider with Or -->
                                {{-- <div class="d-flex items-center my-2">
                  <hr class="flex-grow-1 border-gray-250">
                  <span class="px-3 text-gray-500 text-sm">Or sign in with</span>
                  <hr class="flex-grow-1 border-gray-250">
                </div> --}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
