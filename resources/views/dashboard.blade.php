<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form class="w-full" method="post" action="{{ route('posts.store') }}">
                        {{-- if we use POST method we need to put csrf token --}}
                        @csrf
                        <div class="flex flex-wrap mb-6 -mx-3">
                            <div class="w-full px-4 mb-4 md:mb-0">
                                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-200 "
                                    for="grid-first-name">
                                    Post Title
                                </label>
                                <input
                                    class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border border-red-500 rounded appearance-none focus:outline-none focus:bg-white"
                                    id="grid-first-name" type="text" placeholder="Post Title" name="title">
                                <p class="text-xs italic text-red-500">Please fill out this field.</p>
                            </div>

                        </div>
                        <div class="w-full px-3 mb-3 ">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-200 "
                                for="grid-last-name">
                                Post Description
                            </label>
                            <textarea class="block w-full px-4 py-3 mb-3 text-black rounded" name="description" placeholder="Enter Post Description" id="" cols="30" rows="10"></textarea>
                        </div>
                        <button
                            class="px-4 py-2 mt-3 ml-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700">
                            Post
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
