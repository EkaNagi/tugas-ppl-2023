@extends('layouts.main')

@section('container')
<!-- Features section-->
<section class="py-5 border-bottom" style="margin-top: -30px" id="features">
    <h3 class="text-center">List Pelatih</h3>
    <hr>
    <div class="container px-5 my-5">
        <div class="row">
            @foreach ($pelatihs as $pelatih)
            <div class="col-lg-6 mb-5 pelatih">
                <div class="card-wrapper rounded-3" style="display: flex; align-items: center;">
                    <div class="mt-3" style="margin-right: 15px;">
                        <div class="feature mb-2">
                            <img src="{{ asset('storage/' . $pelatih->photo) }}" alt="" style="width: 100%; height: 100%; border-radius: 100rem; display: block;">
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
</section>


@endsection