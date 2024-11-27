<x-admin-layout>
    <div class="bg-white p-4 shadow rounded">
        <h1 class="text-2xl font-bold mb-4">Pesan Pengunjung</h1>

        @if (session('success'))
            <div class="p-4 mb-4 text-green-800 bg-green-100 rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        <table class="table-auto w-full text-left border">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border px-4 py-2">#</th>
                    <th class="border px-4 py-2">Nama</th>
                    <th class="border px-4 py-2">Email</th>
                    <th class="border px-4 py-2">Pesan</th>
                    <th class="border px-4 py-2">Tindakan</th>
                </tr>
            </thead>
            <tbody>
                @forelse($messages as $message)
                    <tr>
                        <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                        <td class="border px-4 py-2">{{ $message->name }}</td>
                        <td class="border px-4 py-2">{{ $message->email }}</td>
                        <td class="border px-4 py-2">{{ $message->message }}</td>
                        <td class="border px-4 py-2">
                            <form action="{{ route('visitor-messages.destroy', $message) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-700">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center p-4">Belum ada pesan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="mt-4">
            {{ $messages->links() }}
        </div>
    </div>
</x-admin-layout>
