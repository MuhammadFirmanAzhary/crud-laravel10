<x-app-layout>
    <x-slot name="header">
      <h2 class="text-xl font-semibold leading-tight text-gray-800">
       Berita Buat {{-- Event &raquo; {{ isset($event) ? 'Edit' : 'Buat' }} --}}
      </h2>
    </x-slot>
  
    <div class="py-12">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        {{-- @if ($errors->any())
          <div class="mb-5" role="alert">
            <div class="px-4 py-2 font-bold text-white bg-red-500 rounded-t">
              Ada kesalahan!
            </div>
            <div class="px-4 py-3 text-red-700 bg-red-100 border border-t-0 border-red-400 rounded-b">
              <p>
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
              </p>
            </div>
          </div>
        @endif --}}
        <div class="overflow-hidden shadow sm:rounded-md">
          <div class="px-4 py-5 bg-white sm:p-6">
            <form method="POST"
                  {{-- action="{{ isset($event) ? route('admin.events.update', $event->id) : route('admin.events.store') }}" --}}
                  enctype="multipart/form-data">
              @csrf
              {{-- @method(isset($event) ? 'PUT' : 'POST') --}}
              {{-- Input Text --}}
              <div class="mb-6">
                <label for="name" class="block mb-2 text-sm">Nama Berita</label>
                <input type="text" name="name" class="bg-gray-50 border border-gray-300 rounded-lg w-full p-2.5"
                       >
              </div>
              <div class="mb-6">
                <label for="name" class="block mb-2 text-sm">Isi</label>
                <input type="text" name="name" class="bg-gray-50 border border-gray-300 rounded-lg w-full p-2.5"
                       >
              </div>
              
              {{-- File --}}
              <div class="mb-6">
                <label for="files" class="block mb-2 text-sm">Gambar</label>
                <input type="file" name="files[]" multiple
                       class="bg-gray-50 border border-gray-300 rounded-lg w-full p-2.5">
              
              </div>
              {{-- Submit Button --}}
              <button type="submit" class="text-white bg-blue-700  rounded w-full sm:w-auto px-5 py-2.5 text-center">
                Simpan
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </x-app-layout>