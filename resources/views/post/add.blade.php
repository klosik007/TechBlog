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
                    <form id="add_post_form" action="{{ route('post.store') }}" method="post">
                        @csrf
                        <x-text-input id="post_title_edit" field="title" name="title" type="text" placeholder="Title" class="w-full" autocomplete="off" :value="@old('title')"></x-text-input>
                        <x-textarea id="post_content_edit" form="add_post_form" field="text" name="text" rows="10" placeholder="Start typing here..." class="w-full" :text="@old('text')"></x-textarea>
                        <x-primary-button>Add</x-primary-button>
                    </form>
                </div>
            </div>
            <x-post-preview post_title="" post_content=""></x-post-preview>
        </div>
    </div>
</x-app-layout>
