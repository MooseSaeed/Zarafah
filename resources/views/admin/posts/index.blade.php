<x-app-layout>

    <x-setting heading="Manage Posts">

        <div class="w-full ">
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">

                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">

                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach ($posts as $post)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm text-gray-900 hover:text-blue-500">
                                                        <a
                                                            href="/posts/{{ $post->slug }}">{{ ucwords($post->title) }}</a>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <span
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                        Published
                                                    </span>
                                                </td>

                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    <a href="/admin/posts/{{ $post->id }}/edit"
                                                        class="text-blue-500 hover:text-blue-600">Edit</a>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    <form method="POST" action="/admin/posts/{{ $post->id }}">
                                                        @csrf
                                                        @method('DELETE')

                                                        <Button
                                                            class="text-red-500 hover:text-red-600 font-bold">DELETE</Button>

                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </x-setting>

    @include('flash::message')
</x-app-layout>
