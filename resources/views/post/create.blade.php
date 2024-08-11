<x-app-layout>
    <div class=" bg-gray-100 flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-xl w-full bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-center text-3xl font-extrabold text-gray-900">Create a New Post</h2>
            <form action="{{ route('post.store') }}" method="POST" class="mt-8 space-y-6">
                @csrf
                <div>
                    <label for="title" class="block text-gray-700 font-semibold">Title</label>
                    <input
                        class="shadow appearance-none border border-gray-300 rounded-lg w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 mt-2"
                        id="title" name="title" type="text" required autofocus autocomplete="off" />
                </div>
                <div class="mt-6">
                    <label for="body" class="block text-gray-700 font-semibold">Body</label>
                    <textarea
                        class="shadow appearance-none border border-gray-300 rounded-lg w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 mt-2"
                        id="body" name="body" rows="5" required></textarea>
                </div>
                <div class="flex items-center justify-end gap-4 mt-8">
                    <a href="{{ url()->previous() }}"
                        class="px-6 py-3 bg-gray-200 rounded-lg hover:bg-gray-300 text-gray-800 font-semibold transition duration-200 ease-in-out">Cancel</a>
                    <button
                        class="px-6 py-3 bg-blue-500 rounded-lg hover:bg-blue-600 text-white font-semibold transition duration-200 ease-in-out"
                        type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
