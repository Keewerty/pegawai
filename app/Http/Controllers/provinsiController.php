<?php

namespace App\Http\Controllers;

use App\Models\provinsi;
use Illuminate\Http\Request;

class provinsiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = provinsi::orderBy('kode', 'asc')->paginate(5);
        return view('provinsi.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('provinsi.create');
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
            'nama_provinsi'=>'required',
        ]);
        $data = [
            'kode'=>$request->kode,
            'nama_provinsi'=>$request->nama_provinsi,
        ];
        provinsi::create($data);
        return redirect()->to('provinsi');
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
        $data = provinsi::where('kode', $id)->first();
        return view('provinsi.edit')->with('data', $data);;
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
            'nama_provinsi'=>'required',
        ]);
        $data = [
            'kode'=>$request->kode,
            'nama_provinsi'=>$request->nama_provinsi,
        ];
        provinsi::where('kode', $id)->update($data);
        return redirect()->to('provinsi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        provinsi::where('kode', $id)->delete();
        return redirect()->to('provinsi');
    }
}
