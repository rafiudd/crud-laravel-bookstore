<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Buku;

use DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['buku'] = Buku::all();
        return view('index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    // insert data ke table buku
    DB::table('bukus')->insert([
        'judul' => $request->judul,
        'penerbit' => $request->penerbit,
        'tahun_terbit' => $request->tahun_terbit,
        'pengarang' => $request->pengarang
    ]);
    // alihkan halaman ke halaman home
    return redirect('/books');    }

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
        $buku = DB::table('bukus')->where('id',$id)->get();
        // passing data buku yang didapat ke view edit.blade.php
        return view('edit',['buku' => $buku]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // update data 
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('bukus')->where('id',$request->id)->update([
            'judul' => $request->judul,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'pengarang' => $request->pengarang
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
