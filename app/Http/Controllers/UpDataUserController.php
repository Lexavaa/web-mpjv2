<?php

namespace App\Http\Controllers;

use App\Models\{Profile, Regional, User};
use Illuminate\Http\Request;

class UpDataUserController extends Controller
{
    public function index()
    {
        return view('landing.joinus', [
            'regional'  => Regional::latest()->get()
        ]);
    }

    public function upload(Request $request)
    {

        $data = $request->validate([
            'nama_pesantren' => 'required|unique:profiles',
            'nama_pengasuh' => 'required',
            'alamat_lengkap' => 'required',
            'regionals_id' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'khodims_id' => 'nullable',
            'jumlah_kru' => 'required|numeric',
            'nama_pendaftar' => 'required',
            'jabatan_pendaftar' => 'required',
            'nomor_wa' => 'required|numeric|min:12|unique:profiles',
        ]);

        $data = $request->all();
        $dataUser = new User;
        $dataUser->email = $data['email'];
        $dataUser->khodims_id = 1;
        $dataUser->password = bcrypt($data['password']);
        $dataUser->save();

        $dataProfile = new Profile;
        $dataProfile->nama_pesantren = $data['nama_pesantren'];
        $dataProfile->nama_pengasuh = $data['nama_pengasuh'];
        $dataProfile->alamat_lengkap = $data['alamat_lengkap'];
        $dataProfile->regionals_id = $data['regionals_id'];
        $dataProfile->users_id = $dataUser->id;
        $dataProfile->status_bayar = 0;
        $dataProfile->jumlah_kru = $data['jumlah_kru'];
        $dataProfile->nama_pendaftar = $data['nama_pendaftar'];
        $dataProfile->jabatan_pendaftar = $data['jabatan_pendaftar'];
        $dataProfile->nomor_wa = $data['nomor_wa'];
        $dataProfile->save();

        // IF SUCCESS //
        return redirect()->back()->with('success', 'Data Anda Sedang Kami Proses!');
    }
}
