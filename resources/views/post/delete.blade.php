<x-app-layout>
    <div class="fixed z-10 inset-0 overflow-y-auto">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full p-6"
                role="dialog" aria-modal="true" aria-labelledby="modal-headline">

                <form action="{{ route('post.destroy', $post->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div>
                        <h2 class="text-xl font-semibold text-gray-900">{{ $post->title }}</h2>
                    </div>
                    <div class="mt-4">
                        <p class="text-gray-700">{{ $post->body }}</p>
                    </div>
                    <div class="flex items-center justify-end gap-4 mt-6">
                        <button class="px-4 py-2 bg-red-400 rounded-md hover:bg-red-500" type="submit">Delete</button>
                        <button class="px-4 py-2 bg-gray-300 rounded-md hover:bg-gray-400" type="button"
                            onclick="window.history.back()">Cancel</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
