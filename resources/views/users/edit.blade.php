@extends('layouts.app')

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-x-auto shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-400">
                    <form class="w-full max-w-sm" method="POST" action="my-profile/update">
                        @csrf
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3">
                                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"
                                    for="inline-full-name">
                                    Name
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input
                                    class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                                    id="inline-full-name" name="name" type="text" value="{{ auth()->user()->name }}">
                                @error('name')
                                    <p>{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="md:flex md:items-center mb-6">
                          <div class="md:w-1/3">
                              <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"
                                  for="inline-full-name">
                                  UserName
                              </label>
                          </div>
                          <div class="md:w-2/3">
                              <input
                                  class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                                  id="inline-full-name" name="username" type="text" value="{{ auth()->user()->username }}">
                              @error('username')
                                  <p>{{ $message }}</p>
                              @enderror
                          </div>
                      </div>
                      <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"
                                for="inline-full-name">
                                Pic Url
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input
                                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                                id="inline-full-name" name="pic" type="text" value="{{ auth()->user()->pic }}">
                            @error('pic')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3"></div>
                        </div>
                        <div class="md:flex md:items-center">
                            <div class="md:w-1/3"></div>
                            <div class="md:w-2/3">
                                <button
                                    class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                                    type="button">
                                    <input type="submit">
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
