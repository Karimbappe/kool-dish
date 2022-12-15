@extends("layouts.app")
@section("title", $post->title)
@section("content")

<div class="max-w-sm rounded overflow-hidden shadow-lg place-items-center">
    <img src="{{ asset('storage/'.$post->picture) }}" alt="Image de couverture">
    <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2"><a href="{{ route('posts.show', $post) }}"
                title="Lire l'article">{{ $post->title }}</a></div>
        <h1 class="text-gray-700 text-base">
            {{ $post->content }}
        </h1>
    </div>
    <div class="px-6 pt-2 pb-2">
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
            <form method="POST" action="{{ route('posts.destroy', $post) }}">
                <!-- CSRF token -->
                @csrf
                <!-- <input type="hidden" name="_method" value="DELETE"> -->
                @method("DELETE")
                <input type="submit" value="x ">
            </form>
        </span>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"> <a
                href="{{ route('posts.edit', $post) }}" title="Modifier l'article">Modifie</a>
        </span>
        <span
            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mt-0.5 mr-2 mb-2">
            <a href="{{ route('posts.index') }}" title="Retourner aux articles">Go back to feed</a></span>
    </div>
</div>


@endsection