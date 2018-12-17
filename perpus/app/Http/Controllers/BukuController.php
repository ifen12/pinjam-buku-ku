<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Buku;

class BukuController extends Controller
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
        $buku = Buku::paginate('1');
        return view('buku.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku.create');
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
            'isbn'  => 'required',
            'judul' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
        ]);

        $buku = new Buku;

        $buku ->isbn       = $request->isbn;
        $buku ->judul      = $request->judul;
        $buku ->pengarang  = $request->pengarang;
        $buku ->penerbit   = $request->penerbit;
        $buku ->save();

        return redirect('buku');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($isbn)
    {
        $buku = Buku::find($isbn);
        return view('buku.single')->with('buku', $buku);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($isbn)
    {
        $buku = Buku::find($isbn);
        return view('buku.edit')->with('buku', $buku);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $isbn)
    {
        $this->validate($request, [
            'isbn'  => 'required',
            'judul' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
        ]);

        $buku = Buku::find($isbn);

        $buku ->isbn       = $request->isbn;
        $buku ->judul      = $request->judul;
        $buku ->pengarang  = $request->pengarang;
        $buku ->penerbit   = $request->penerbit;
        $buku ->save();

        return redirect('buku');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($isbn)
    {
        $buku = Buku::find($isbn);
        $buku->delete();
        return redirect('buku');
    }
}
