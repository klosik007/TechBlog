<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-3">
                <div class="p-6 text-gray-900">
                    <form id="edit_post_form" action="{{ route('post.update', $post) }}" method="post">
                        @method('put')
                        @csrf
                        <x-text-input field="title" name="title" type="text" placeholder="Title" class="w-full" autocomplete="off" :value="@old('title', $post->title)"></x-text-input>
                        <x-textarea form="edit_post_form" field="text" name="text" rows="10" placeholder="Start typing here..." class="w-full" :text="@old('text', $post->content)"></x-textarea>
                        <x-primary-button>Save</x-primary-button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
