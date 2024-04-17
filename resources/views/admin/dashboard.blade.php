<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-secondary-button><a href="{{ route('post.add') }}">Add Post</a></x-secondary-button>
            @foreach ($posts as $post)
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-3">
                <div class="p-6 text-gray-900">
                    <div class="inline-flex">
                        <form method="get" action="{{ route('post.edit', $post) }}" class="mr-1">
                            <input type="hidden" name="post_id" value="" />
                            <x-primary-button>Edit</x-primary-button>
                        </form>
                        <form method="post" action="{{ route('post.delete', $post) }}">
                            @method('delete')
                            @csrf
                            <x-danger-button type="submit">Delete</x-primary-button>
                        </form>
                    </div>
                    <h1 class="font-bold text-xl"> {{ $post->title }} </h1>
                    <div class="mt-3">
                        <p> {!! $post->content !!} </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
