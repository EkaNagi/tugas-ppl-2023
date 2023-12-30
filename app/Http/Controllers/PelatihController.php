<?php

namespace App\Http\Controllers;

use App\Models\Pelatih;
use App\Models\PencapaianPelatih;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use App\Charts\PencapaianChart;

class PelatihController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(PencapaianChart $pencapaianChart)
    {
        return view('/dashboard',[
            'pelatihs' => Pelatih::all(),
            'pencapaianChart' => $pencapaianChart->build()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pelatih.create',[
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
            'nama' => 'required',
            'nomor_telepon' => 'nullable',
            'umur' => 'nullable',
            'alamat' => 'nullable',
            'club' => 'nullable',
            'riwayat_club' => 'nullable',
            'photo' => 'nullable|image|file|max:2048',
        ]);

        if ($request->file('photo')) {
            $validatedData['photo'] = $request->file('photo')->store('images', 'public');
        }

        Pelatih::create($validatedData);

        Alert::success('Berhasil', 'Datatelah di tambahkan');

        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelatih $pelatih, PencapaianChart $pencapaianChart)
    {
        return view('pelatih.show',[
            'pelatihs' => $pelatih,
            'pencapaianChart' => $pencapaianChart->build()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelatih $pelatih)
    {
        return view('pelatih.edit',[
            'pelatihs' => $pelatih,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pelatih $pelatih)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'nomor_telepon' => 'nullable',
            'umur' => 'nullable',
            'alamat' => 'nullable',
            'club' => 'nullable',
            'riwayat_club' => 'nullable',
            'photo' => 'nullable|image|file|max:2044',
        ]);

        if ($request->file('photo')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['photo'] = $request->file('photo')->store('images', 'public');
        }

        Pelatih::where('id', $pelatih->id)->update($validatedData);

        Alert::success('Berhasil', 'Data telah di ubah');

        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelatih $pelatih)
    {
        if ($pelatih->photo) {
            Storage::delete($pelatih->photo);
        }

        Pelatih::destroy($pelatih->id);

        Alert::success('Berhasil', 'Data telah di hapus');

        return redirect('/dashboard');
    }
}
