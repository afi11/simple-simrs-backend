<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CaraBayar;
use App\Models\Pendaftaran;
use App\Models\PenanggungJawab;
use DB;

class PendaftaranController extends Controller
{

    public function store(Request $request)
    {
        $penanggungJawabId = genRandomString(32);
        DB::transaction(function() use ($request, $penanggungJawabId) {
            PenanggungJawab::create([
                "id" => $penanggungJawabId,
                "nama" => $request->nama,
                "alamat" => $request->alamat,
                "hubungan_pasien" => $request->hubungan_pasien,
                "telepon" => $request->telepon
            ]);

            Pendaftaran::create([
                "pasien_no_mr" => $request->no_mr,
                "penanggung_jawab_id" => $penanggungJawabId,
                "department_tujuan" => $request->department_tujuan,
                "cara_bayar_id" => $request->cara_bayar_id,
                "cara_datang" => $request->cara_datang,
                "created_by" => $request->created_by,
                "keluhan" => $request->keluhan
            ]);
        });
       
        return response()->json(["message" => "Berhasil menambah pendaftaran"]);
    }

}
