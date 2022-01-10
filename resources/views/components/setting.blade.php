@props(['heading'])

<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ $heading }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200 flex justify-center">
                <aside class="w-52 border-r-2">
                    <h4 class="font-semibold mb-5">Links</h4>
                    <ul>
                        <li>
                            <a href="/dashboard"
                                class="{{ request()->is('dashboard') ? 'text-blue-500' : '' }}">Dashboard</a>
                        </li>
                        <li>
                            <a href="/admin/posts"
                                class="{{ request()->is('admin/posts') ? 'text-blue-500' : '' }}">All
                                Products</a>
                        </li>
                        <li>
                            <a href="/admin/posts/create"
                                class="{{ request()->is('admin/posts/create') ? 'text-blue-500' : '' }}">New
                                Product</a>
                        </li>
                    </ul>
                </aside>

                <main class="flex-1 ml-6">

                    {{ $slot }}

                </main>
            </div>
        </div>
    </div>
</div>
