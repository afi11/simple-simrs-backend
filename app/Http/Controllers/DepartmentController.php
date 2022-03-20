<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\KodeDepartment;

class DepartmentController extends Controller
{

    public function index()
    {
        $department = Department::join('kode_department', 'kode_department.id', '=', 'department.kode')
            ->where('department.is_active', 1)
            ->get();
        return response()->json(["data" => $department]);
    }

    public function store(Request $request)
    {
        Department::create($request->all());
        return response()->json(["message" => "Berhasil menambah department"]);
    }

}
