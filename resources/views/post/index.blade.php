<x-app-layout>
    <div class="container mx-auto px-4 sm:px-8">
        <div class="flex justify-end mt-4">
            <a href="{{ route('post.create') }}" class="rounded inline-block cursor-pointer bg-cyan-500 p-4">Create
                post</a>
        </div>
        <table class="table-fixed w-full mt-5">
            <thead>
                <tr class="bg-gray-100">
                    <th class="px-4 py-2">Title</th>
                    <th class="px-4 py-2">Content</th>
                    <th class="px-4 py-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td class="border px-4 py-2">{{ $post->title }}</td>
                        <td class="border px-4 py-2">
                            {{ strlen($post->body) > 100 ? substr($post->body, 0, 97) . '...' : $post->body }}
                        </td>
                        <td class="border px-4 py-2 text-center">
                            <a href="{{ route('post.edit', $post->id) }}" class="bg-blue-500 px-4 py-1 rounded-md mr-2">
                                Edit
                            </a>
                            <form action="{{ route('posts.delete', $post->id) }}" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 px-4 py-1 rounded-md">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="flex justify-center mt-4">
            <div class="pagination">
                {{ $posts->links() }}
            </div>
        </div>

    </div>
</x-app-layout>
