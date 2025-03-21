<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProfilController extends Controller
{
    public function index()
    {
        $role = Auth::user()->role;
        $laborats = User::where('role', 'laborat')->get();

        return match ($role) {
            'dokter' => view('dokter.profil', compact('laborats')),
            'laborat' => view('laborat.profil'),
            'pasien'      => view('pasien.profil')
        };
    }

    public function edit()
    {
        $role = Auth::user()->role;
        $laborats = User::where('role', 'laborat')->get();

        return match ($role) {
            'dokter' => view('dokter.editprofil', compact('laborats')),
            'laborat' => view('laborat.editprofil'),
            'pasien'      => view('pasien.editprofil')
        };
    }

    public function dokter($id)
    {
        $role = Auth::user()->role;
        $dokter = User::where('role', 'dokter')->findOrFail($id);

        return view('pasien.profildokter', compact('dokter'));
    }

    public function update(Request $request, User $pasien)
    {
        $validator = Validator::make($request->all(), [
            'tempat_lahir' => 'string|max:255',
            'tanggal_lahir' => 'date',
            'nomor_telepon' => 'string|max:255',
            'nama_ibu_kandung' => 'string|max:255',
            'nomor_ktp' => 'string|max:255',
            'alamat' => 'string',
            'desa' => 'string|max:255',
            'kecamatan' => 'string|max:255',
            'kota_kabupaten' => 'string|max:255',
            'agama' => 'string|max:255',
            'status_perkawinan' => 'string|max:255',
            'pendidikan_terakhir' => 'string|max:255',
            'pekerjaan' => 'string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $pasien->where('id', Auth::id())->update($request->except(['_token']));

        return redirect()->route('profil')->with('success', 'Profil berhasil diperbarui!');
    }
}
