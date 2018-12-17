<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pinjam;
use App\Siswa;
use App\Buku;

class PinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $pinjam = Pinjam::paginate('5');
        return view('pinjam.index', compact('pinjam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswa = Siswa::all();
        $buku = Buku::all();
        return view('pinjam.create',compact(['siswa',$siswa],['buku',$buku]));
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
            'tanggal_pinjam' => 'required',
            'tanggal_balik'  => 'required',
            'nis'            => 'required',
            'isbn'           => 'required',
            'keterangan'     => 'required',
        ]);

        $pinjam = new Pinjam;
        $pinjam ->tanggal_pinjam  = $request->tanggal_pinjam;
        $pinjam ->tanggal_balik   = $request->tanggal_balik;
        $pinjam ->nis             = $request->nis;
        $pinjam ->isbn            = $request->isbn;
        $pinjam ->keterangan      = $request->keterangan;
        $pinjam ->save();

        return redirect('pinjam');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_pinjam)
    {
        $pinjam = Pinjam::find($id_pinjam);
        return view('pinjam.single')->with('pinjam', $pinjam);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_pinjam)
    {
        $pinjam = Pinjam::find($id_pinjam);
        return view('pinjam.edit')->with('pinjam', $pinjam);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_pinjam)
    {
        $this->validate($request, [
            'id_pinjam'      => 'required',
            'tanggal_pinjam' => 'required',
            'tanggal_balik'  => 'required',
            'nis'            => 'required',
            'isbn'           => 'required',
            'keterangan'     => 'required',
        ]);

        $pinjam = Pinjam::find($id_pinjam);

        $pinjam ->tanggal_pinjam  = $request->tanggal_pinjam;
        $pinjam ->tanggal_balik   = $request->tanggal_balik;
        $pinjam ->nis             = $request->nis;
        $pinjam ->isbn            = $request->isbn;
        $pinjam ->keterangan      = $request->keterangan;
        $pinjam ->save();

        return redirect('pinjam');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_pinjam)
    {
        $pinjam = Pinjam::find($id_pinjam);
        $pinjam->delete();
        return redirect('pinjam');
    }
}
