@extends('layouts.auth')

@section('content')
<section>
            <h3 class="font-bold text-2xl">Create account to Startup</h3>
            <p class="text-gray-600 pt-2">Sign in to your account.</p>
        </section>

        <section class="mt-1">
            <form class="flex flex-col" method="POST" action="{{ route('register') }}">
                
                @csrf

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="mb-2 pt-3 rounded bg-white">
                    <label class="block text-gray-700 text-sm bg-white mb-2" for="name">Full Name</label>
                    <input type="text" 
                        id="name"
                        placeholder="Full Name"
                        name="name"
                        required
                        autocomplete="name"
                        autofocus
                        class="rounded w-full text-gray-600 
                                focus:outline-none border border-gray-300 
                                focus:border-blue-600 transition 
                                duration-500 px-3 pb-2 pt-2 text-sm
                                @error('name') is-invalid @enderror">
                    @error('name')
                        <span class="text-red-700 text-sm" role="alert">
                            <span>{{ $message }}</span>
                        </span>
                    @enderror
                </div>

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

                <div class="mb-2 pt-3 rounded bg-white">
                    <label class="block text-gray-700 text-sm bg-white mb-2" for="phone_number">Phone Number</label>
                    <input type="text" 
                        id="phone_number"
                        placeholder="phone number"
                        name="phone_number"
                        required
                        autocomplete="phone_number"
                        autofocus
                        class="rounded w-full text-gray-600 
                                focus:outline-none border border-gray-300 
                                focus:border-blue-600 transition 
                                duration-500 px-3 pb-2 pt-2 text-sm
                                @error('phone_number') is-invalid @enderror">
                    @error('phone_number')
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

                <div class="mb-6 pt-3 rounded">
                    <label class="block text-gray-700 text-sm mb-2" for="password_confirmation">Confirm Password</label>
                    <input type="password" 
                        id="password_confirmation"
                        placeholder="Confirm Password"
                        name="password_confirmation"
                        required
                        class="rounded w-full border border-gray-300 
                                text-gray-600 focus:outline-none 
                                focus:border-blue-600 
                                transition duration-500 px-3 pb-2 pt-2 text-sm">
                    @error('password_confirmation')
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
