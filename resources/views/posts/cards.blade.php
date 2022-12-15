@foreach ($posts as $post)
<div class="rounded overflow-hidden shadow-lg grid grid-cols">
    <div class="px-6 py-4">
        <img src="{{ asset('storage/'.$post->picture) }}" alt="Image de couverture">
        <div class="font-bold text-xl mb-2"><a href="{{ route('posts.show', $post) }}"
                title="Lire l'article">{{ $post->title }}</a></div>
        <p class="text-gray-700 text-base">
            {{ $post->content }}
        </p>
    </div>
    <div class="px-6 pt-4 pb-2">
        <span class="inline-block   px-3 py-1  mr-2 mb-2">
            <form method="POST" action="{{ route('posts.destroy', $post) }}">
                <!-- CSRF token -->
                @csrf
                <!-- <input type="hidden" name="_method" value="DELETE"> -->
                @method("DELETE")
                <input
                    class="bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-4 border-b-4 border-green-700 hover:border-green-500 rounded"
                    type="submit" value="x ">
            </form>
        </span>
        <span
            class="bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-4 border-b-4 border-green-700 hover:border-green-500 rounded">
            <a href="{{ route('posts.edit', $post) }}" title="Modifier l'article">Modify</a>
        </span>
    </div>
</div>
@endforeach