<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold text-gray-800">Katalog Budaya Nusantara</h2>
                    <a href="{{ route('budaya.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        + Tambah Budaya
                    </a>
                </div>

                <table class="min-w-full border-collapse border border-gray-300">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="border p-3 text-left">Nama Budaya</th>
                            <th class="border p-3 text-left">Asal Daerah</th>
                            <th class="border p-3 text-left">Kategori</th>
                            <th class="border p-3 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($budayas as $b)
                        <tr class="hover:bg-gray-50">
                            <td class="border p-3">{{ $b->nama_budaya }}</td>
                            <td class="border p-3">{{ $b->asal_daerah }}</td>
                            <td class="border p-3">{{ $b->kategori }}</td>
                            <td class="border p-3 text-center">
                                <div class="flex justify-center space-x-2">
                                    <a href="{{ route('budaya.edit', $b->id) }}" class="text-yellow-600 hover:text-yellow-900 font-bold">Edit</a>
                                    <form action="{{ route('budaya.destroy', $b->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900 font-bold">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>