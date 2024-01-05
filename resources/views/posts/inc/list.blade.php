@foreach ($posts as $post)
<div class="mt-4">
    <a href="#" class="text-lg font-semibold">{{$post->user->name}}</a>
    <p class="mt-1 text-xs">
    <em>
        {{ $post->created_at->format('d,m,Y')}}
    </em>
    {{ $post->body }}
    </p>
    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button class="text-indigo-600 text-xs">{{ __('Delete')}}</button>
    </form>
</div>
@endforeach
<div class="mt-4">
    {{ $posts->links() }}
</div>