@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12">
            <div class="p-6 text-white">
                <h1 class="text-2xl font-bold mb-4">{{$user->name}}</h1>
                <p>Posted {{$user->posts->count()}} {{$user->posts->count()==1?'post':'posts'}} 
                and recieved {{$user->recievedLikes->count()}} {{$user->recievedLikes->count()==1?'like':'likes'}}</p>
                </p>
            </div>
            <div class="bg-white p-6 rounded-lg">
                @if($posts->count() > 0)
                @foreach($posts as $post)
                <x-post :post="$post"/>
                @endforeach
                {{$posts->links()}}
                @else
                    <p>{{$user->name}} doesn't have any posts</p>
                @endif
            </div>
        </div>
    </div>
@endsection
