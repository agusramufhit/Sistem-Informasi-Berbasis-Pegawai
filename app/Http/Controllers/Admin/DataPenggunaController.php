<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\DataPengguna;
use App\User;
use App\Jabatan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class DataPenggunaController extends Controller
{
    public function index()
    {
    
    $datas = DataPengguna::with(['user', 'jabatan','jeniskelamin'])->get();
        return view('pages.admin.data',[
            'datas' => $datas
        ]);
    }

    public function edit($id)
    {
        $datas = DataPengguna::findOrFail($id)->with(['user', 'jabatan','jeniskelamin'])->get();

        return view('pages.admin.data',[
            'datas' => $datas
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->id);
        
        DataPengguna::create($data)->with(['user'])->get();
        return redirect()->route('data.index')->with('toast_success', 'Data Berhasil Disimpan');
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
    
        $datas = DataPengguna::findOrFail($id)->with(['user', $request->id])->first();
        $datas->update($data);
        return redirect()->route('data.index');
    }
}
