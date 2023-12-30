@extends('layouts.main')

@section('container')
    <h2>PROFILE</h2>
    <div class="d-flex justify-content-end">
        <a href="/" class="btn btn-success">Back</a>
    </div>
    <section class="profile mb-5">
        <div class="row">
            <div class="col-lg-5">
                <div class="features" style="margin-left: 30px; margin-top: 30px;">
                    <img src="{{ asset('storage/' . $pelatihs->photo) }}" alt="" style="width: 100%; height: 100%; border-radius: 100rem; display: block;">
                </div>
            </div>
            <div class="col-lg-7">
                {!! $pencapaianChart->container() !!}
            </div>
            <hr>
            <div class="col-lg-6 p-5">
                <ul class="list-group">
                    <li class="list-group-item">Nama Pelatih {!! $pelatihs->nama !!}</li>
                    <li class="list-group-item">Nomor Pelatih {!! $pelatihs->nomor_telepon !!}</li>
                    <li class="list-group-item">Umur {!! $pelatihs->umur !!}</li>
                    <li class="list-group-item">Alamat {!! $pelatihs->alamat !!}</li>
                  </ul>
            </div>
            <div class="col-lg-6 p-5">
                <ul class="list-group">
                    <li class="list-group-item">Club {!! $pelatihs->club !!}</li>
                    <li class="list-group-item">Riwayat Club {!! $pelatihs->riwayat_club !!}</li>
                  </ul>
            </div>
        </div>
        
    </section>

    <script src="{{ $pencapaianChart->cdn() }}"></script>

    {{ $pencapaianChart->script() }}
@endsection