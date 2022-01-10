<x-app-layout>

    <x-setting :heading="'Edit Product: ' . $post->title">

        <div class="w-full ">

            <form method="POST" action="/admin/posts/{{ $post->id }}" enctype="multipart/form-data"
                class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf
                @method('PATCH')

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                        Title
                    </label>

                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="title" name="title" type="text" placeholder="Product Title"
                        value="{{ old('title') }} {{ $post->title }}" required>

                    @error('title')
                        <p class="text-red-500 text-xs italic mb-1">{{ $message }}</p>
                    @enderror

                    <input type="hidden" name="slug" id="slug">

                    @error('slug')
                        <p class="text-red-500 text-xs italic mb-1">{{ $message }}</p>
                    @enderror

                </div>

                <div class="mb-4">

                    <label class="block text-gray-700 text-sm font-bold mb-2" for="thumbnail">
                        Thumbnail
                    </label>

                    <div class="appearance-none flex">

                        <input
                            class="shadow border rounded w-full 
                        py-2 px-3 text-gray-700 leading-tight 
                        focus:outline-none focus:shadow-outline"
                            id="thumbnail" name="thumbnail" type="file" placeholder="Product Picture"
                            value="{{ old('thumbnail') }} {{ $post->thumbnail }}">

                        <img class="w-28 flex-1" src="{{ asset('storage/' . $post->thumbnail) }}" alt="" />
                    </div>

                    @error('thumbnail')
                        <p class="text-red-500 text-xs italic mb-1">{{ $message }}</p>
                    @enderror

                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="excerpt">
                        Excerpt
                    </label>

                    <textarea
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        name="excerpt" id=" excerpt" cols="10" rows="3" required>
                         {{ old('excerpt') }} {{ $post->excerpt }}
                        </textarea>

                    @error('excerpt')
                        <p class="text-red-500 text-xs italic mb-1">{{ $message }}</p>
                    @enderror

                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="body">
                        Body
                    </label>

                    <textarea
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        name="body" id="body" cols="10" rows="3" required>
                         {{ old('body') }} {{ $post->body }}
                        </textarea>

                    @error('body')
                        <p class="text-red-500 text-xs italic mb-1">{{ $message }}</p>
                    @enderror

                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="body">
                        Category
                    </label>

                    <?php
                    
                    $categories = App\Models\Category::all();
                    
                    ?>
                    <select class="w-32" name="category_id" id="category_id">

                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>
                                {{ ucwords($category->name) }}
                            </option>
                        @endforeach

                    </select>

                    @error('category_id')
                        <p class="text-red-500 text-xs italic mb-1">{{ $message }}</p>
                    @enderror

                </div>

                <div class="flex items-center justify-between">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        Update
                    </button>
                </div>
            </form>
            <p class="text-center text-gray-500 text-xs">
                &copy;2022 Mostafa Said. All rights reserved.
            </p>
        </div>
    </x-setting>

    @include('flash::message')
</x-app-layout>
