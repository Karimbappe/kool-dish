@extends("layouts.app")
@section("title", "Tous les articles")
@section("content")

<div class="div flex">
    <div style="width: 550px "
        class="flex min-h-screen bg-gradient-to-b from-green-600 to-green-900 rounded-md p-5 text-lg py-12 ">
        <div class="px-6 pt-8 relative">
            <!-- Le tableau pour lister les articles/posts -->
            @include('posts.form')
        </div>
    </div>
    <div class="py-4 item-right grid grid-cols-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 relative">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('posts.cards')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection