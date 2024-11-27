<x-app-layout>
    <div class="container mx-auto px-4 py-6">
        <h1 class="text-2xl font-bold mb-4">News</h1>
        <a href="{{ route('news.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Create
            News</a>
        @if (session('success'))
            <div class="bg-green-100 text-green-700 p-4 mb-4 rounded">
                {{ session('success') }}
            </div>
        @endif
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($news as $item)
                <div class="mb-6 border-b pb-4">
                    <h2 class="text-xl font-semibold">{{ $item->title }}</h2>
                    <p class="text-gray-600">{{ $item->excerpt ?? Str::limit($item->content, 100) }}</p>
                    <a href="{{ route('news.show', $item) }}" class="text-blue-500">Read more</a>
                </div>
            @endforeach
        </div>
        <div class="mt-4">
            {{ $news->links() }}
        </div>
    </div>
</x-app-layout>
