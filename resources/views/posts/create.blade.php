<x-layout>

    <x-settings heading="Publish New Post">
        <form action="/admin/posts" method="POST" enctype="multipart/form-data">
            @csrf

            <x-form.input name="title" />

            <x-form.input name="slug" />

            <x-form.input name="thumbnail" type="file" />

            <x-form.textarea name="excerpt" />

            <x-form.textarea name="body" />

            <div class="mb-6">

            <x-form.label name="category" />

                <select name="category_id" id="category_id">
                    @php
                        $categories = \App\Models\Category::all();
                    @endphp

                    @foreach ($categories as $category)
                        <option
                            value="{{$category->id}}"
                            {{old('category_id') == $category->id ? 'selected' : ''}}
                            >{{$category->name}}</option>
                    @endforeach
                </select>

            <x-form.error name="category" />

            </div>

            <x-submit-button>Publish</x-submit-button>

        </form>
    </x-settings>


</x-layout>
