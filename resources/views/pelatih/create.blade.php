@extends('layouts.main')

@section('container')
<div class="card mb-3">
    <div class="card-body">
        <div class="col-lg-12 center">
            <form method="POST" action="/pelatih" enctype="multipart/form-data">
                @csrf
                <div class="col-span-6">
                    <label class="block text-sm font-medium text-gray-700">Foto</label>
                    <div class="flex justify-center px-6 pt-5 pb-6 mt-1 border-2 border-gray-300 border-dashed rounded-md">
                        <div class="space-y-1 text-center">
                            <img id="image-preview" class="hidden mx-auto mb-4 rounded-sm" alt="Image Preview" style="max-width: 100%; max-height: 200px;" />
                            <div class="flex justify-center text-sm text-gray-600">
                            <label for="file-upload" class="relative font-medium text-center text-indigo-600 bg-white rounded-md cursor-pointer focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:text-indigo-500">
                                <span id="file-name" class="text-center">Upload a file</span>
                                <input id="file-upload" name="photo" type="file" class="sr-only" onchange="previewImage(this)" />
                            </label>
                            <p class="pl-1">or drag and drop</p>
                            </div>
                            <p class="text-xs text-gray-500">PNG, JPG, GIF max to 2MB</p>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required autofocus value="{{ old('nama') }}" placeholder="Nama" aria-label="Nama">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col">
                        <input type="number" class="form-control @error('nomor_telepon') is-invalid @enderror" id="nomor_telepon" name="nomor_telepon" required autofocus value="{{ old('nomor_telepon') }}" placeholder="No Tlp" aria-label="No Tlp">
                        @error('nomor_telepon')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <input type="number" class="form-control @error('umur') is-invalid @enderror" id="umur" name="umur" required autofocus value="{{ old('umur') }}" placeholder="Umur" aria-label="Umur">
                        @error('umur')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col">
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" required autofocus value="{{ old('alamat') }}" placeholder="Alamat" aria-label="Alamat">
                        @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <input type="text" class="form-control @error('club') is-invalid @enderror" id="club" name="club" required autofocus value="{{ old('club') }}" placeholder="Club" aria-label="Club">
                        @error('club')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col">
                        <input type="text" class="form-control @error('riwayat_club') is-invalid @enderror" id="riwayat_club" name="riwayat_club" required autofocus value="{{ old('riwayat_club') }}" placeholder="Riwayat Club" aria-label="Riwayat Club">
                        @error('riwayat_club')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="d-flex">
                    <a href="/dashboard" class="btn">back</a>
                    <button type="submit" class="btn btn-success mb-5">Create</button>
                </div>                
            </form>
        </div>
    </div>
</div>

<script>
    function previewImage(input) {
        const preview = document.getElementById('image-preview');
        const fileNameSpan = document.getElementById('file-name');
        const file = input.files[0];
    
        if (file) {
            const reader = new FileReader();
    
            reader.onload = function (e) {
            preview.src = e.target.result;
            preview.classList.remove('hidden');
            };
    
            reader.readAsDataURL(file);
    
            // Update the span content with the file name
            fileNameSpan.textContent = file.name;
        }
    }
</script>

@endsection