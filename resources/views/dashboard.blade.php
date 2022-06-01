@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-gray-100 p-6 rounded-lg">
            <div class="h-screen bg-white-300">
                <div class="container flex justify-start bg-gray py-20">

                    <div class="p-3 bg-white rounded-xl max-w-lg hover:shadow">


                        <div class="flex justify-between w-full">

                            <a href ="{{url('my-profile')}}" class="p-3">
                            <img src="{{$user->pic==""?"https://thumbs.dreamstime.com/b/default-avatar-profile-image-vector-social-media-user-icon-potrait-182347582.jpg":$user->pic}}" alt="avatar" class="rounded-full w-20 h-20 mr-4">
                            <p class="text-red-500">edit</p>
                            </a>

                            <div class="ml-2">

                                <div class="p-3">

                                    <h3 class="text-2xl">{{$user->name}}</h3>
                                    <span>{{$user->username}}</span>
                                </div>

                                <div class="flex justify-between items-center p-3 bg-gray-200 rounded-lg">

                                    <div class="mr-3">
                                        <span class="text-gray-400 block">posts</span>
                                        <span class="font-bold text-black text-xl">{{$user->posts->count()}}</span>
                                        
                                    </div>
                                    <div class="mr-3">
                                        <span class="text-gray-400 block">Total Likes</span>
                                        <span class="font-bold text-black text-xl">{{$user->recievedLikes->count()}}</span>
                                        
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    
                </div>
                <hr style="color:black;">
                <div class="container flex flex-col justify-center bg-white p-20 rounded-lg shadow-sm shadow-black">
                @if($posts->count() > 0)
                @foreach($posts as $post)
                <x-post :post="$post"/>
             @endforeach
             @else
                <p>You don't have any posts</p>
                @endif
            </div>
            </div>
        </div>
    </div>
@endsection
