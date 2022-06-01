@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-transparent p-6 rounded-lg">
            <form action="{{ route('register') }}" method="post">
                @csrf
            <section class="flex justify-center items-center bg-transparent">
                <div class="max-w-md w-full bg-gray-900 rounded p-6 space-y-4">
                    <div class="mb-4">
                        <p class="text-gray-400">Sign Up</p>
                        <h2 class="text-xl font-bold text-white">Join our community</h2>
                    </div>
                    <div>
                        <input
                            class="w-full p-4 text-sm bg-gray-50 focus:outline-none border border-gray-200 rounded text-gray-600"
                            type="text" name="name" id="name" placeholder="Your name">
                        @error('name')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <input
                            class="w-full p-4 text-sm bg-gray-50 focus:outline-none border border-gray-200 rounded text-gray-600"
                            type="text" name="username" id="username" placeholder="Username">
                        @error('username')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <input
                            class="w-full p-4 text-sm bg-gray-50 focus:outline-none border border-gray-200 rounded text-gray-600"
                            type="text" name="email" id="email" placeholder="Your email">
                        @error('email')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <input
                            class="w-full p-4 text-sm bg-gray-50 focus:outline-none border border-gray-200 rounded text-gray-600"
                            type="password" name="password" id="password" placeholder="Choose a password">
                        @error('password')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <input
                            class="w-full p-4 text-sm bg-gray-50 focus:outline-none border border-gray-200 rounded text-gray-600"
                            type="password" name="password_confirmation" id="password_confirmation">
                        @error('password_confirmation')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <button type="submit"
                            class="w-full py-4 bg-blue-600 hover:bg-blue-700 rounded text-sm font-bold text-gray-50 transition duration-200">Sign
                            Up</button>
                    </div>
                </div>
            </section>
        </form>
        </div>
    </div>
@endsection
