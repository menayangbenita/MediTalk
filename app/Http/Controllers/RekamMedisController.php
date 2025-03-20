<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\RekamMedis;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RekamMedisController extends Controller
{
    public function index()
    {
        $role = Auth::user()->role;
        $laborats = User::where('role', 'laborat')->get();
        $rekammedis = RekamMedis::all(); 
        $rekammedispasien = RekamMedis::where('pasien_id', Auth::user()->id)->get(); 
        $pasiens = User::where('role', 'pasien')->get();
        $dokters = User::where('role', 'dokter')->get();
    
        return match ($role) {
            'dokter' => view('dokter.rekammedis', compact('laborats', 'rekammedis')),
            'laborat' => view('laborat.rekammedis', compact('rekammedis', 'pasiens', 'dokters')),
            'pasien' => view('pasien.rekammedis', compact('rekammedispasien'))
        };
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'pasien_id' => 'required',
            'dokter_id' => 'required',
            'anamnesis' => 'required',
            'tanda_vital' => 'required',
            'diagnosis' => 'required',
            'medikasi' => 'required',
        ]);

        RekamMedis::create([
            'tanggal' => $request->tanggal,
            'pasien_id' => $request->pasien_id,
            'dokter_id' => $request->dokter_id,
            'anamnesis' => $request->anamnesis,
            'tanda_vital' => $request->tanda_vital,
            'diagnosis' => $request->diagnosis,
            'medikasi' => $request->medikasi,
        ]);

        return redirect()->route('rekammedis')->with('success', 'Rekam Medis berhasil ditambahkan.');
    }

    public function destroy($rekam)
    {
        $record = RekamMedis::find($rekam);
        if (!$record) {
            return redirect()->route('rekammedis')->with('error', 'Rekam medis tidak ditemukan!');
        }

        $record->delete();

        return redirect()->route('rekammedis')->with('success', 'Rekam medis berhasil dihapus!');
    }
}
