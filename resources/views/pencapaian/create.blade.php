@extends('layouts.main')

@section('container')
<div class="card mb-3">
    <div class="card-body">
        <div class="col-lg-12 center">
            <form method="POST" action="/pencapaian" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="pelatih" class="form-label">Nama Pelatih</label>
                    <select class="form-select" name="pelatih_id">
                        @foreach ($pelatihs as $pelatih)
                            @if (old('pelatih_id') === $pelatih->id)
                                <option value="{{ $pelatih->id }}" selected>{{ $pelatih->nama }}</option>
                            @else
                                <option value="{{ $pelatih->id }}">{{ $pelatih->nama }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                {{-- <div class="row mb-3">
                    <div class="col">
                        <input type="number" class="form-control @error('kemenangan') is-invalid @enderror" id="kemenangan" name="kemenangan" required autofocus value="{{ old('kemenangan') }}" placeholder="Total Kemenangan" aria-label="Total Kemenangan">
                        @error('kemenangan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col">
                        <input type="number" class="form-control @error('kekalahan') is-invalid @enderror" id="kekalahan" name="kekalahan" required autofocus value="{{ old('kekalahan') }}" placeholder="Total Kekalahan" aria-label="Total Kekalahan">
                        @error('kekalahan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div> --}}
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" class="form-control @error('individu') is-invalid @enderror" id="individu" name="individu" autofocus value="{{ old('individu') }}" placeholder="Nama Penghargaan Individu" aria-label="Nama Penghargaan Individu">
                        @error('individu')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col">
                        <input type="text" class="form-control @error('trofi') is-invalid @enderror" id="trofi" name="trofi" autofocus value="{{ old('trofi') }}" placeholder="Nama Trofi Tim" aria-label="Nama Trofi Tim">
                        @error('trofi')
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

@endsection