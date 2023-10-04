<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelurahan;

class kelurahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = kelurahan::orderBy('kode', 'asc')->paginate(5);
        return view('kelurahan.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelurahan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode'=> 'required',
            'nama_kelurahan'=>'required',
            'id_kecamatan'=>'required|numeric',
        ]);
        $data = [
            'kode'=>$request->kode,
            'nama_kelurahan'=>$request->nama_kelurahan,
            'id_kecamatan'=>$request->id_kecamatan,
        ];
        kelurahan::create($data);
        return redirect()->to('kelurahan');
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
        $data = kelurahan::where('kode', $id)->first();
        return view('kelurahan.edit')->with('data', $data);;
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
        $request->validate([
            'kode'=> 'required',
            'nama_kelurahan'=>'required',
            'id_kecamatan'=>'required|numeric',
        ]);
        $data = [
            'kode'=>$request->kode,
            'nama_kelurahan'=>$request->nama_kelurahan,
            'id_kecamatan'=>$request->id_kecamatan,
        ];
        kelurahan::where('kode', $id)->update($data);
        return redirect()->to('kelurahan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        kelurahan::where('kode', $id)->delete();
        return redirect()->to('kelurahan');
    }
}
