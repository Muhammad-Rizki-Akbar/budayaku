<x-app-layout>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-8 shadow-sm sm:rounded-lg">
                <h2 class="text-2xl font-bold mb-6">Tambah Budaya Baru</h2>
                <form action="{{ route('budaya.store') }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 gap-6">
                        <div>
                            <label class="block font-medium text-gray-700">Nama Budaya</label>
                            <input type="text" name="nama_budaya" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
                        </div>
                        <div>
                            <label class="block font-medium text-gray-700">Asal Daerah</label>
                            <input type="text" name="asal_daerah" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
                        </div>
                        <div>
                            <label class="block font-medium text-gray-700">Kategori</label>
                            <select name="kategori" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                <option value="Seni Tari">Seni Tari</option>
                                <option value="Musik">Musik</option>
                                <option value="Kuliner">Kuliner</option>
                                <option value="Tradisi">Tradisi</option>
                            </select>
                        </div>
                        <div>
                            <label class="block font-medium text-gray-700">Deskripsi</label>
                            <textarea name="deskripsi" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"></textarea>
                        </div>
                        <div class="flex items-center justify-end space-x-4">
                            <a href="{{ route('budaya.index') }}" class="text-gray-600">Batal</a>
                            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-md font-bold hover:bg-blue-700">Simpan Data</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>