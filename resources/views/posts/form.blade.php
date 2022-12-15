<!-- Lien pour créer un nouvel article : "posts.create" -->
<form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data"
    class=" items-center justify-center">
    <!-- Le token CSRF -->
    @csrf
    <p>
        <label for="title">Title</label><br />

        <!-- S'il y a un $post->title, on complète la valeur de l'input -->
        <input class="rounded" type="text" name="title" id="title" placeholder="Title">

        <!-- Le message d'erreur pour "title" -->
        @error("title")
    <div>{{ $message }}</div>
    @enderror
    </p>

    <!-- S'il y a une image $post->picture, on l'affiche -->

    <p>
        <label for="picture">Picture</label><br />
        <input type="file" name="picture" id="picture">

        <!-- Le message d'erreur pour "picture" -->
        @error("picture")
    <div>{{ $message }}</div>
    @enderror
    </p>
    <p>
        <label for="content">Description</label><br />

        <!-- S'il y a un $post->content, on complète la valeur du textarea -->
        <textarea name="content" id="content" lang="fr" rows="10" cols="50" placeholder="Description"></textarea>

        <!-- Le message d'erreur pour "content" -->
        @error("content")
    <div>{{ $message }}</div>
    @enderror
    </p>

    <input type="submit" name="Sent" value="Sent post"
        class="bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-4 border-b-4 border-green-700 hover:border-green-500 rounded">

</form>