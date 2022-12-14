@extends("layouts.app")
@section("title", "Tous les articles")
@section("content")

<div class="w-64 h-screen bg-gradient-to-b from-green-600 to-green-900 rounded-md p-5 ">
    <div class="px-6 pt-8 ">
        <div class="">
            <div>
                <p>
                    <!-- Lien pour créer un nouvel article : "posts.create" -->
                    <a href="{{ route('posts.create') }}" title="New post" class="text-white text-lg flex"> New Post
                    </a>
                </p>
            </div>
            <!-- Le tableau pour lister les articles/posts -->
            <table border="1">

                <tbody>
                    <!-- On parcourt la collection de Post -->
                    @foreach ($posts as $post)
                    <tr>
                        <td>
                            <!-- Lien pour afficher un Post : "posts.show" -->
                            <a href="{{ route('posts.show', $post) }}" title="Lire l'article">{{ $post->title }}</a>
                        </td>
                        <td>
                            <!-- Lien pour modifier un Post : "posts.edit" -->
                            <a href="{{ route('posts.edit', $post) }}" title="Modifier l'article">Modifie</a>
                        </td>
                        <td>
                            <!-- Formulaire pour supprimer un Post : "posts.destroy" -->
                            <form method="POST" action="{{ route('posts.destroy', $post) }}">
                                <!-- CSRF token -->
                                @csrf
                                <!-- <input type="hidden" name="_method" value="DELETE"> -->
                                @method("DELETE")
                                <input type="submit" value="x ">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection