<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Pegawai;
use App\Jabatan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(request()->ajax()){
            if(!empty($request->from_date))
            {
                if($request->from_date === $request->to_date){
                    $list_pegawai = Pegawai::whereDate('created_at','=', $request->from_date)->get();
                }
                else{
                    $list_pegawai = Pegawai::whereBetween('created_at', 
                    array($request->from_date, $request->to_date))->get();
                }                
            }
            else
            {
                $list_pegawai = Pegawai::all();
            }
            return datatables()->of($list_pegawai)
                        ->addColumn('action', function($data){
                            $button = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Edit" class="edit btn btn-info btn-sm edit-post"><i class="far fa-edit"></i> Edit</a>';
                            $button .= '&nbsp;&nbsp;';
                            $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="far fa-trash-alt"></i> Delete</button>';     
                            return $button;
                        })
                        ->rawColumns(['action'])
                        ->addIndexColumn()
                        ->make(true);            
        }
        return view('pages.admin.pegawai.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jab = Jabatan::all();
        return view('pages.admin.pegawai.create', [
            'jab' => $jab,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->id;
        
        $post   =   Pegawai::updateOrCreate(['id' => $id],
                    [
                        'nama' => $request->nama,
                        'nip' => $request->nip,
                        'alamat' => $request->alamat,
                        'tgllhr' => $request->tgllhr,
                        'created_at' => $request->created_at,
                    ]); 

        return response()->json($post);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $where = array('id' => $id);
        $post  = Pegawai::where($where)->first();
     
        return response()->json($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->id);

        $item = Pegawai::findOrFail($id);

        $item->update($data);

        return redirect()->route('pegawai.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Pegawai::where('id',$id)->delete();
     
        return response()->json($post);
    }

}
