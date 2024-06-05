<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
          Data Berita
        </h2>
      </x-slot>
      <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
          <div class="mb-10">
            <a href="{{ route('admin.news.create') }}" class="px-2 py-1 font-bold text-white bg-green-500 rounded">
              + Buat Berita
            </a>
          </div>

          <table class="w-full">
            <thead class="bg-gray-50">
              <tr>
                <th style="max-width: 1%" class="px-6 py-3">ID</th>
                <th class="px-6 py-3">Nama</th>
                <th class="px-6 py-3">Category</th>
                <th class="px-6 py-3">Date</th>
                <th class="px-6 py-3">Duration</th>
                <th style="max-width: 1%" class="px-6 py-3">Aksi</th>
              </tr>
            </thead>
            <tbody>
             
              <tr class="border-b">
                <td class="px-6 py-4"></td>
                <td class="px-6 py-4"></td>
                <td class="px-6 py-4"></td></td>
                <td class="px-6 py-4"></td>
                <td class="px-6 py-4"></td>
                <td class="px-6 py-4 space-y-1 text-center">
                
                  
                  <a href=""
                    class="block px-2 py-1 text-white bg-blue-500 rounded">
                    Edit
                  </a>
                  <form action="" method="POST" class="block">
                    {{-- onsubmit="return confirm('Hapus event {{ $event->name }}?')"> --}}
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="w-full px-2 py-1 text-white bg-red-500 rounded">
                      Hapus
                    </button>
                  </form>
                </td>
              </tr>
            
            </tbody>
          </table>
</x-app-layout>