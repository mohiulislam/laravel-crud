<x-app-layout>
    <div class="container mx-auto px-4 sm:px-8">
        <div class="flex justify-between mt-4">
            <form action="{{ route('posts.index') }}" method="GET" class="w-full">
                <input type="text" name="search" placeholder="Search posts..." value="{{ request('search') }}"
                    class="rounded p-2 w-full border" />
            </form>
            <a href="{{ route('post.create') }}" class="ml-4 rounded inline-block cursor-pointer bg-cyan-500 p-4">
                Create post
            </a>
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
                @forelse ($posts as $post)
                    <tr>
                        <td class="border px-4 py-2">{{ $post->title }}</td>
                        <td class="border px-4 py-2">
                            {{ strlen($post->body) > 100 ? substr($post->body, 0, 97) . '...' : $post->body }}
                            @if (strlen($post->body) > 100)
                                <a href="{{ route('post.show', $post->id) }}" class="text-blue-500 ml-2">See more</a>
                            @endif
                        </td>
                        <td class="border px-4 py-2 text-center">
                            <a href="{{ route('post.edit', $post->id) }}"
                                class="bg-blue-500 px-4 py-1 rounded-md mr-2">Edit</a>
                            <a href="{{ route('posts.delete', $post->id) }}"
                                class="bg-red-500 px-4 py-1 rounded-md">Delete</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="border px-4 py-2 text-center">No posts found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="flex justify-center mt-4">
            <div class="pagination">
                {{ $posts->appends(['search' => request('search')])->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
