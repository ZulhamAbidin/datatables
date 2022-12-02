<?php

namespace App\Http\Controllers;

use App\Models\data;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class DataController extends Controller
{
    public function index()
    {
        return view('dashboard/data/index');
    }

    /**
     * @throws \Exception
     */
    public function datatable()
    {
        $user = data::get(['id','nama_lengkap', 'alamat_domisili', 'jenis_kelamin', 'pendidikan_terakhir', 'jurusan', 'hari']);
        return DataTables::of($user)->make(true);
    }
}


