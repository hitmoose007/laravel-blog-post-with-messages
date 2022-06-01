@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-transparent p-6 rounded-lg">

            @if (session('status'))
                <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('login') }}" method="post">
                @csrf
                <section class="flex justify-center items-center bg-transparent">
                    <div class="max-w-md w-full bg-gray-900 rounded p-6 space-y-4">
                        <div class="mb-4">
                            <p class="text-gray-400">Sign In</p>
                            <h2 class="text-xl font-bold text-white">Join our community</h2>
                        </div>
                        <div>
                            <input
                                class="w-full p-4 text-sm bg-gray-50 focus:outline-none border border-gray-200 rounded text-gray-600"
                                type="email" name="email" id="email" placeholder="Your email">
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
                            <button type="submit"
                                class="w-full py-4 bg-blue-600 hover:bg-blue-700 rounded text-sm font-bold text-gray-50 transition duration-200">Sign
                                In</button>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex flex-row items-center">
                                <input type="checkbox"
                                    class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                <label for="comments" class="ml-2 text-sm font-normal text-gray-400">Remember me</label>
                            </div>
                            <div>
                                <a class="text-sm text-blue-600 hover:underline" href="#">Forgot password?</a>
                            </div>
                        </div>
                    </div>
                </section>
            </form>
        @endsection
