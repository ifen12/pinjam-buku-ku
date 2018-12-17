<?php

namespace App\Http\Controllers;

use App\Siswa;

use Illuminate\Http\Request;

class SiswaController extends Controller
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
        $siswa = Siswa::paginate('5');
        return view('siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function search(Request $request)
    {
        $query = $request->get('q');
        $hasil = Siswa::where('nama', 'LIKE', '%' . $query . '%')->paginate(5);

        return view('siswa.result',compact('hasil','query'));
    }

    public function create()
    {
        return view('siswa.create');
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
            'nis'  => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'alamat' => 'required',
        ]);

        $siswa = new Siswa;

        $siswa ->nis    = $request->nis;
        $siswa ->nama   = $request->nama;
        $siswa ->kelas  = $request->kelas;
        $siswa ->alamat = $request->alamat;
        $siswa ->save();

        return redirect('siswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nis)
    {
        $siswa = Siswa::find($nis);  

        return view('siswa.single')->with('siswa', $siswa);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($nis)
    {
        $siswa = Siswa::find($nis);  

        return view('siswa.edit')->with('siswa', $siswa);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nis)
    {
        $this->validate($request, [
            'nis'  => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'alamat' => 'required',
        ]);

        $siswa = Siswa::find($nis);

        $siswa ->nis    = $request->nis;
        $siswa ->nama   = $request->nama;
        $siswa ->kelas  = $request->kelas;
        $siswa ->alamat = $request->alamat;
        $siswa ->save();

        return redirect('siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nis)
    {
       $siswa = Siswa::find($nis);
       
       $siswa->delete();
       
       return redirect('siswa'); 
    }
}
