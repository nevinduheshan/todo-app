<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('New Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form class="w-full" method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
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
                        {{-- image --}}
                        <div class="flex justify-center mt-8">
                            <div class="max-w-2xl rounded-lg shadow-xl bg-gray-50">
                                <div class="m-4">
                                    <label class="inline-block mb-2 text-gray-500">File Upload</label>
                                    <div class="flex items-center justify-center w-full">
                                        <label
                                            class="flex flex-col w-full h-32 border-4 border-blue-200 border-dashed hover:bg-gray-100 hover:border-gray-300">
                                            <div class="flex flex-col items-center justify-center pt-7">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-400 group-hover:text-gray-600"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                                </svg>
                                                <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                                                    Attach a file</p>
                                            </div>
                                            <input type="file" class="opacity-0" name="thumbnail" />
                                        </label>
                                    </div>
                                </div>
                                <div class="flex justify-center p-2">
                                    <button class="w-full px-4 py-2 text-white bg-blue-500 rounded shadow-xl">Create</button>
                                </div>
                            </div>
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
