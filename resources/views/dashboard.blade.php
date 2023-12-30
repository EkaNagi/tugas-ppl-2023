@extends('layouts.main')

@section('container')
<!-- Features section-->
<section class="py-5 border-bottom" style="margin-top: -30px" id="features">
    <h3 class="text-center">List Pelatih</h3>
    <hr>
    <div style="display: flex; justify-content: space-between;">
        <button class="btn btn-success">
            <a href="/pelatih/create" style="text-decoration: none; color: white;">Tambah Data Pelatih</a>
        </button>
    
        <button class="btn btn-success">
            <a href="/pencapaian/create" style="text-decoration: none; color: white;">Tambah Pencapaian Pelatih</a>
        </button>
    </div>
    <div class="container px-5 my-5">
        <div class="row gx-5">
            @foreach ($pelatihs as $pelatih)
            <div class="col-lg-6 mb-5 pelatih mb-lg-4">
                <div class="card-wrapper rounded-3" style="display: flex; align-items: center;">
                    <div class="mt-3" style="margin-right: 15px;">
                        <div class="feature">
                            <img src="{{ asset('storage/' . $pelatih->photo) }}" alt="" style="width: 100%; height: 100%; border-radius: 1rem; display: block;">
                        </div>
                    </div>
                    <div>
                        <a href="/pelatih/{{ $pelatih->id }}" style="text-decoration: none"><h2 class="h5 fw-bolder text-black">{{ $pelatih->nama }}</h2></a>
                    </div>
                </div>
            </div>
            
            @endforeach
        </div>
    </div>
    {{-- <table class="table">
        <button class="btn btn-dark">
            <a href="/pelatih/create" style="text-decoration: none; color:white;">Tambah Data Pelatih</a>
        </button>
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Club</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($pelatihs as $pelatih)
            <tr>
                <th>
                    <div class="feature">
                        <img src="{{ asset('storage/' . $pelatih->photo) }}" alt="" style="width: 100%; height: 100%; border-radius: 1rem; display: block;">
                    </div>
                </th>
                <td>{{ $pelatih->nama }}</td>
                <td>{{ $pelatih->alamat }}</td>
                <td>{{ $pelatih->club }}</td>
                <td>
                    <a href="/pelatih/{{ $pelatih->id }}/edit" class="btn btn-success btn-circle btn-sm">
                        <i class="bi bi-gear-fill"></i>
                    </a>
                    <a href="/pelatih/{{ $pelatih->id }}/edit" class="btn btn-primary btn-circle btn-sm">
                        <i class="bi bi-eye-fill"></i>
                    </a>
                    <form action="/pelatih/{{ $pelatih->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button onclick="return confirm('Are you sure?')" class="btn btn-danger btn-circle btn-sm">
                            <i class="bi bi-trash-fill"></i>
                        </button>
                        </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table> --}}
</section>


@endsection