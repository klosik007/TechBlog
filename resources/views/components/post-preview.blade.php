@props(['post_title', 'post_content'])

<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-3">
    <div class="p-6 text-gray-900">
        <h1 class="font-semibold text-3xl text-gray-800 leading-tight mb-6">
            {{ __('Preview') }}
        </h1>
        <h2 id="post_title" class="font-semibold text-xl text-gray-800 leading-tight mb-4">
            {{ $post_title }}
        </h2>
        <span id="post_content">
            {!! $post_content !!}
        </span>
    </div>
</div>

<script>
    const titleArea = document.getElementById('post_title_edit');
    const textArea = document.getElementById('post_content_edit');

    titleArea.addEventListener("change", updatePostValue);
    textArea.addEventListener("change", updatePostValue);

    function updatePostValue() {
        const titleValue = document.getElementById('post_title_edit').value;
        const textValue = document.getElementById('post_content_edit').value;
        document.getElementById('post_content').innerHTML = textValue;
        document.getElementById('post_title').innerHTML = titleValue;
    }
</script>
