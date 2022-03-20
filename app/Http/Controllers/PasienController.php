<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class PasienController extends Controller
{

    public function index()
    {
        $pasien = Pasien::all();
        return response()->json(["data" => $pasien]);
    }

    public function store(Request $request)
    {
        $jumlah = Pasien::count();
        $ulang = true;
        do{
            $jumlah = $jumlah + 1;
            $mr = str_pad($jumlah, 4, "0", STR_PAD_LEFT);
            $cek = Pasien::where('no_mr', $mr)->count();
            if($cek == 0){
                $ulang = false;
            }
        }while($ulang);
        
        Pasien::create([
            "no_mr" => $mr,
            "panggilan" => $request->panggilan,
            "nama" => $request->nama,
            "tanggal_lahir" => $request->tanggal_lahir,
            "gender" => $request->gender,
            "telepon" => $request->telepon,
            "alamat" => $request->alamat,
            "nik" => $request->nik,
            "created_by_user" => $request->created_by_user
        ]);
        return response()->json(["message" => "Berhasil menambah pasien"]);
    }

    public function update(Request $request, $id)
    {
        $pasien = Pasien::find($id);
        $pasien->panggilan = $request->panggilan;
        $pasien->nama = $request->nama;
        $pasien->telepon = $request->telepon;
        $pasien->alamat = $request->alamat;
        $pasien->nik = $request->nik;
        $pasien->tanggal_lahir = $request->tanggal_lahir;
        $pasien->gender = $request->gender;
        $pasien->updated_by_user = $request->updated_by_user;
        $pasien->save();
        return response()->json(["message" => $request->panggilan]);
    }

}
