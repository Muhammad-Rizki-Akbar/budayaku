<x-app-layout>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-8 shadow-sm sm:rounded-lg">
                <h2 class="text-2xl font-bold mb-6 text-yellow-600">Edit Data Budaya</h2>
                <form action="{{ route('budaya.update', $budaya->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="grid grid-cols-1 gap-6">
                        <div>
                            <label class="block font-medium text-gray-700">Nama Budaya</label>
                            <input type="text" name="nama_budaya" value="{{ $budaya->nama_budaya }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500" required>
                        </div>
                        <div>
                            <label class="block font-medium text-gray-700">Asal Daerah</label>
                            <input type="text" name="asal_daerah" value="{{ $budaya->asal_daerah }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500" required>
                        </div>
                        <div>
                            <label class="block font-medium text-gray-700">Kategori</label>
                            <select name="kategori" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                <option value="Seni Tari" {{ $budaya->kategori == 'Seni Tari' ? 'selected' : '' }}>Seni Tari</option>
                                <option value="Musik" {{ $budaya->kategori == 'Musik' ? 'selected' : '' }}>Musik</option>
                                <option value="Kuliner" {{ $budaya->kategori == 'Kuliner' ? 'selected' : '' }}>Kuliner</option>
                                <option value="Tradisi" {{ $budaya->kategori == 'Tradisi' ? 'selected' : '' }}>Tradisi</option>
                            </select>
                        </div>
                        <div>
                            <label class="block font-medium text-gray-700">Deskripsi</label>
                            <textarea name="deskripsi" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500">{{ $budaya->deskripsi }}</textarea>
                        </div>
                        <div class="flex items-center justify-end space-x-4">
                            <a href="{{ route('budaya.index') }}" class="text-gray-600">Batal</a>
                            <button type="submit" class="bg-yellow-600 text-white px-6 py-2 rounded-md font-bold hover:bg-yellow-700">Update Data</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>