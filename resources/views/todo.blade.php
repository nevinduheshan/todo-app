<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Todo') }}
        </h2>
    </x-slot>


    <!-- component -->
    <form action="{{ route('todo.store') }}" method="POST">
        @csrf
        <div
            class="bg-black before:animate-pulse before:bg-gradient-to-b before:from-gray-900 overflow-hidden before:via-[#00FF00] before:to-gray-900 before:absolute ">
            <div id="myDIV">
                <div class="w-[100vw] h-[100vh] px-3 sm:px-5 flex items-center justify-center absolute">
                    <div
                        class="z-50 w-full px-6 py-4 text-white bg-gray-500 rounded-lg sm:w-1/2 lg:2/3 bg-opacity-20 bg-clip-padding backdrop-filter backdrop-blur-sm">
                        <div class="w-full flex justify-center text-[#00FF00] text-xl mb:2 md:mb-5">
                            New Task
                        </div>
                        <div class="mb-6">
                            <input type="text" id="" name="title"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 md:p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Task Title">

                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>
                        <div class="mb-6">
                            <textarea name="description"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 md:p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Description"></textarea>
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>
                        <button type="submit"
                            class="mt-4 md:mt-10 w-full flex justify-center text-sm md:text-xl bg-[#00FF00]/[.6] py-2 rounded-md">Add
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>


    <div class="mt-2">
            <div id="myDIV">
                @forelse ($todos as $todo)
                    <div
                    @class([
                        'py-4 flex items-center border-b border-gray-300  px-3 w-[60%] ',
                    $todo->iscompleted ? 'bg-gray' : ''
                    ])
                    >
                        <div class="flex-1 pr-8">
                            <h3 class="text-lg font-semibold text-white" >{{ $todo->title }}</h3>
                            <p class="text-black">{{ $todo->description }}</p>
                        </div>
                        <div class="flex space-x-3">
                            <form action="{{ route('todo.update', $todo) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="px-2 py-2 text-white bg-green-500 rounded-xl">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                </button>
                            </form>

                            <form action="{{ route('todo.destroy', $todo) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="px-2 py-2 text-white bg-red-500 rounded-xl">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                @empty
                    <div>
                        <p class="text-center text-white">No record yet</p>
                    </div>
                @endforelse
            </div>
    </div>
    <script>
        const para = document.createElement("div");
        para.className = 'flex flex-wrap gap-0.5 h-screen items-center justify-center  relative';
        let el =
            '<div class = "  transition-colors duration-[1.5s] hover:duration-[0s] border-[#00FF00] h-[calc(5vw-2px)] w-[calc(5vw-2px)] md:h-[calc(4vw-2px)] md:w-[calc(4vw-2px)] lg:h-[calc(3vw-4px)] lg:w-[calc(3vw-4px)] bg-gray-900 hover:bg-[#00FF00]"></div>'
        for (var k = 1; k <= 1000; k++) {
            el +=
                '<div class = " transition-colors duration-[1.5s] hover:duration-[0s] border-[#00FF00] h-[calc(5vw-2px)] w-[calc(5vw-2px)] md:h-[calc(4vw-2px)] md:w-[calc(4vw-2px)] lg:h-[calc(3vw-4px)] lg:w-[calc(3vw-4px)] bg-gray-900 hover:bg-[#00FF00]"></div>';
        };

        para.innerHTML = el;
        document.getElementById("myDIV").appendChild(para);
    </script>
</x-app-layout>
