@props(['post'=>$post])
<hr>
<div class="mb-2">
    <a href="{{route('users.posts',$post->user)}}" class="font-bold">{{$post->user->name}}</a> <span class="text-gray-600 text-sm">{{$post->created_at->diffForHumans()}}</span>
    <p class="mb-2">
        {{ $post->body }}
    </p>
    @can('delete', $post)
        <form action="{{route('posts.destroy',$post)}}" method="post" >
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-500">DELETE</button>
        </form>
    @endcan
</div>
    <div class="flex items-center">
        @if (!$post->likedBy(auth()->user()))
            <form action="{{route('posts.likes',$post->id)}}" method="post" class="mr-1">
                @csrf
                <button type="submit" class="text-blue-500">Like</button>
            </form>
        @else
            <form action="{{route('posts.likes',$post)}}" method="post" class="mr-1">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-500">Unlike</button>
            </form>
        @endif
    <span>{{ $post->likes->count() }} {{$post->likes->count()==1?'like':'likes'}}</span>
</div>
<hr>