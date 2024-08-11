<x-app-layout>
    <div class="fixed z-10 inset-0 overflow-y-auto">
        <div class="flex items-center justify-center min-h-screen px-4 sm:px-6 lg:px-8">
            <div class="fixed inset-0 bg-gray-600 bg-opacity-75 transition-opacity"></div>

            <div class="bg-white rounded-lg shadow-xl transform transition-all sm:max-w-lg w-full p-8" role="dialog"
                aria-modal="true" aria-labelledby="modal-headline">
                <h2 class="text-2xl font-bold text-red-600 text-center">Confirm Deletion</h2>
                <p class="text-center text-gray-700 mt-4">Are you sure you want to delete this post? This action cannot
                    be undone.</p>

                <div class="mt-6">
                    <h3 class="text-lg font-semibold text-gray-900">{{ $post->title }}</h3>
                    <p class="text-gray-700 mt-2">
                        {{ Str::limit($post->body, 100, '...') }}
                    </p>
                </div>

                <form action="{{ route('post.destroy', $post->id) }}" method="POST" class="mt-8">
                    @csrf
                    @method('DELETE')
                    <div class="flex items-center justify-center gap-6">
                        <button
                            class="px-6 py-3 bg-red-600 text-white rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition duration-200 ease-in-out"
                            type="submit">Delete</button>
                        <button
                            class="px-6 py-3 bg-gray-300 text-gray-800 rounded-md hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 transition duration-200 ease-in-out"
                            type="button" onclick="window.history.back()">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
