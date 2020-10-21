@extends('layouts.auth')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}

    
        <section>
            <h3 class="font-bold text-2xl">Welcome to Startup</h3>
            <p class="text-gray-600 pt-2">Sign in to your account.</p>
        </section>

        <section class="mt-1">
            <form class="flex flex-col" method="POST" action="{{ route('login') }}">
                
                @csrf

                <div class="mb-2 pt-3 rounded bg-white">
                    <label class="block text-gray-700 text-sm bg-white mb-2" for="email">Email</label>
                    <input type="email" 
                        id="email"
                        placeholder="Email"
                        name="email"
                        required
                        autocomplete="email"
                        autofocus
                        class="rounded w-full text-gray-600 
                                focus:outline-none border border-gray-300 
                                focus:border-blue-600 transition 
                                duration-500 px-3 pb-2 pt-2 text-sm
                                @error('email') is-invalid @enderror">
                    @error('email')
                        <span class="text-red-700 text-sm" role="alert">
                            <span>{{ $message }}</span>
                        </span>
                    @enderror
                </div>
                <div class="mb-6 pt-3 rounded">
                    <label class="block text-gray-700 text-sm mb-2" for="password">Password</label>
                    <input type="password" 
                        id="password"
                        placeholder="Password"
                        name="password"
                        required
                        class="rounded w-full border border-gray-300 
                                text-gray-600 focus:outline-none 
                                focus:border-blue-600 
                                transition duration-500 px-3 pb-2 pt-2 text-sm">
                    @error('password')
                        <span class="text-red-700 text-sm" role="alert">
                            <span>{{ $message }}</span>
                        </span>
                    @enderror

                </div>
                <div class="flex justify-end">
                    <a href="#" class="text-sm text-blue-600 hover:text-blue-700 hover:underline mb-6">Forgot your password?</a>
                </div>
                <button class="bg-blue-600 hover:bg-blue-700 
                    text-white font-bold py-2 rounded shadow-lg 
                    hover:shadow-xl transition duration-200" type="submit">
                    Sign In
                </button>
            </form>
        </section>
@endsection
