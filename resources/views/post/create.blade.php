<x-app-layout>
    <div class="fixed z-10 inset-0 overflow-y-auto">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0 ">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full p-6"
                role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                <form action="{{ route('post.store') }}" method="POST">
                    @csrf
                    <div>
                        <label for="title">Title</label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1 block"
                            id="title" name="title" type="text" required autofocus autocomplete="" />
                    </div>
                    <div>
                        <label for="body">Body</label>
                        <textarea
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-1 block"
                            id="body" name="body" required></textarea>
                    </div>
                    <div class="flex items-center justify-end gap-4">
                        <button class="px-4 py-2 bg-blue-400 rounded-md hover:bg-blue-500" type="submit">Save</button>
                    </div>
                </form>

            </div>
        </div>
</x-app-layout>
