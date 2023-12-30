<?php

namespace App\Http\Controllers;

use App\Charts\PencapaianChart;
use App\Models\PencapaianPelatih;
use Illuminate\Http\Request;
use App\Models\Pelatih;
use RealRashid\SweetAlert\Facades\Alert;

class PencapaianPelatihController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, PencapaianChart $pencapaianChart)
    {
        return view('/dashboard',[
            'pencapaianPelatih' => PencapaianPelatih::all(),
            'pencapaianChart' => $pencapaianChart->build()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pencapaian.create',[
            'pelatihs' => Pelatih::all(),
            'pencapaianPelatih' => PencapaianPelatih::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'individu' => 'nullable',
            'trofi' => 'nullable',
            'pelatih_id' => 'required',
        ]);

        // $pelatih = $request->input('pelatih_id');
        // $existingPencapaian = PencapaianPelatih::where('pelatih_id', $pelatih)->first();

        // if ($existingPencapaian) {
        //     Alert::error('Error', 'Pelatih sudah memiliki pencapaian.')->persistent(true, true);
        //     return redirect()->back();
        // }

        PencapaianPelatih::create($validatedData);

        Alert::success('Berhasil', 'Data telah di tambahkan');

        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(PencapaianPelatih $pencapaianPelatih, PencapaianChart $pencapaianChart)
    {
        return view('pelatih.show',[
            'pencapaianPelatih' => $pencapaianPelatih,
            'pencapaianChart' => $pencapaianChart->build()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PencapaianPelatih $pencapaianPelatih)
    {
        return view('pelatih.edit',[
            'pencapaianPelatih' => $pencapaianPelatih,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PencapaianPelatih $pencapaianPelatih)
    {
        $validatedData = $request->validate([
            'individu' => 'nullable',
            'trofi' => 'nullable',
            'pelatih_id' => 'required',
        ]);

        PencapaianPelatih::where('id', $pencapaianPelatih->id)->update($validatedData);

        Alert::success('Berhasil', 'Data telah di ubah');

        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PencapaianPelatih $pencapaianPelatih)
    {
        //
    }
}
