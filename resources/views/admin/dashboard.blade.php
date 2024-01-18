<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @foreach ($posts as $post)
                    <div class="p-6 text-gray-900">
                        <div class="inline-flex">
                            <form method="post" action="" class="mr-1">
                                <input type="hidden" name="post_id" value="" />
                                <x-primary-button>Edit</x-primary-button>
                            </form>
                            <form method="post" action="">
                                <input type="hidden" name="post_id" value="" />
                                <x-primary-button>Delete</x-primary-button>
                            </form>
                        </div>
                        <h1 class="font-bold text-xl"> {{ $post->title }} </h1>
                        <div class="mt-3">
                            <p> {{ $post->content }} </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
