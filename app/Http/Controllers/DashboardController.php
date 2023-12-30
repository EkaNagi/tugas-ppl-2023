<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelatih;

class DashboardController extends Controller
{
    public function index()
    {
        return view('/dashboard',[
            'pelatihs' => Pelatih::all()
        ]);
    }

    public function indexHome()
    {
        $pelatihs = Pelatih::latest();

        if(request('search')){
            $pelatihs->where('nama', 'like', '%' . request('search') . '%');
        }

        return view('home', [
            'pelatihs' => $pelatihs->get()
        ]);
    }

}
