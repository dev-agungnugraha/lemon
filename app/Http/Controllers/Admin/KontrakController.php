<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kontrak;
use App\Models\Paket;
use Illuminate\Http\Request;

class KontrakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.kontrak.index',[
            'title' => 'Data Kontrak',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kontrak.create',[
            'title' => 'Tambah Data Kontrak',
            'pakets' => Paket::orderBy('name','ASC')->get(),
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
        $this->validate($request, [
            'paket_id' => 'required',
            'nokontrak' => 'required',
            'namarekanan' => 'required',
            'alamatrekanan' => 'required',
            'nilaikontrak'   => 'required',
            'tglkontrak'   => 'required',
            'tglspmk'   => 'required',
            'masapelaksanaan'   => 'required',
            'masapemeliharaan'   => 'required',
            'alasanaddendum'   => 'required',
        ]);

        Kontrak::create([
            'paket_id' => $request->paket_id,
            'nokontrak' => $request->nokontrak,
            'namarekanan' => $request->namarekanan,
            'alamatrekanan' => $request->alamatrekanan,
            'nilaikontrak' => $request->nilaikontrak,
            'tglkontrak' => $request->tglkontrak,
            'tglspmk' => $request->tglspmk,
            'masapelaksanaan' => $request->masapelaksanaan,
            'masapemeliharaan' => $request->masapemeliharaan,
            'alasanaddendum' => $request->alasanaddendum,
        ]);

        // $book->update($request->only('name'));
        return redirect()->route('admin.kontrak.index')
            ->with('success','Data berhasil disimpan');
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
    public function edit(Kontrak $kontrak)
    {
        return view('admin.kontrak.edit',[
            'title' => 'Edit Data Kontrak',
            'kontrak' => $kontrak,
            'pakets' => Paket::orderBy('name','ASC')->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kontrak $kontrak)
    {
        $this->validate($request, [
            'paket_id' => 'required',
            'nokontrak' => 'required',
            'namarekanan' => 'required',
            'alamatrekanan' => 'required',
            'nilaikontrak'   => 'required',
            'tglkontrak'   => 'required',
            'tglspmk'   => 'required',
            'masapelaksanaan'   => 'required',
            'masapemeliharaan'   => 'required',
            'alasanaddendum'   => 'required',
        ]);

        $kontrak->update([
            'paket_id' => $request->paket_id,
            'nokontrak' => $request->nokontrak,
            'namarekanan' => $request->namarekanan,
            'alamatrekanan' => $request->alamatrekanan,
            'nilaikontrak' => $request->nilaikontrak,
            'tglkontrak' => $request->tglkontrak,
            'tglspmk' => $request->tglspmk,
            'masapelaksanaan' => $request->masapelaksanaan,
            'masapemeliharaan' => $request->masapemeliharaan,
            'alasanaddendum' => $request->alasanaddendum,
        ]);

        // $book->update($request->only('name'));
        return redirect()->route('admin.kontrak.index')
            ->with('success','Data berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kontrak $kontrak)
    {
        $kontrak->delete();
        return redirect()->route('admin.kontrak.index')
            ->with('warning','Data berhasil dihapus');
    }
}
