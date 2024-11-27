<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Manajemen Produk
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-lg font-semibold mb-4">Daftar Produk</h3>
                    <div class="flex justify-end mb-4">
                        <a href="{{ route('products.create') }}" class="bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">
                            Tambah Produk Baru
                        </a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white border border-gray-300">
                            <thead class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <tr>
                                    <th class="py-3 px-6 text-left">Nama Produk</th>
                                    <th class="py-3 px-6 text-left">Kategori</th>
                                    <th class="py-3 px-6 text-center">Tanggal Dibuat</th>
                                    <th class="py-3 px-6 text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 text-sm font-light">
                                @foreach($products as $product)
                                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                                        <td class="py-3 px-6 text-left">
                                            {{ $product->name }}
                                        </td>
                                        <td class="py-3 px-6 text-left">
                                            {{ $product->category->name ?? '-' }}
                                        </td>
                                        <td class="py-3 px-6 text-center">
                                            {{ $product->created_at->format('d M Y') }}
                                        </td>
                                        <td class="py-3 px-6 text-center">
                                            <div class="flex item-center justify-center space-x-4">
                                                <a href="{{ route('products.edit', $product->id) }}" class="text-blue-600 hover:underline">
                                                    Edit
                                                </a>
                                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-600 hover:underline">
                                                        Hapus
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="mt-4">
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
