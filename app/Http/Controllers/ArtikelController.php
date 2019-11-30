<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\artikel;
use App\admin;
use App\pengguna;
use Auth;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function artikelmore($id)
    {
        $artikel = artikel::find($id);
        return view('admin.artikelmore',['artikel' => $artikel]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $admin = admin::all();
         $artikel = artikel::all();
       
        return view('admin.tambahartikel',['admin'=>$admin],['artikel' => $artikel]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
         $artikel = "NO";
        if($request->hasFile('gambar'))
        {
            $destination = "images";
            $gambar = $request->file('gambar');
            $gambar->move($destination, $gambar->getClientOriginalName());
            $request->gambar = $request->file('gambar')->getClientOriginalName();
            $artikel = 'Ya';

        }
        
        if($artikel=='Ya'){

        $artikel = new artikel;
        $artikel->judul = $request->judul;
        $artikel->gambar = $request->gambar;
        $artikel->deskripsi = $request->deskripsi;
        $artikel->konten = $request->konten;
        $artikel->save();     
        
        }
        
      
         
            
       

        return redirect('/admin');
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
         $admin = admin::all();
        $artikel = artikel::find($id);
        return view('admin.editartikel',['admin'=>$admin],['artikel' => $artikel]);
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
        $artikel = artikel::find($id);
         $artikel->update($request->all());
         
        if ($request ->hasFile('gambar')) {
            
              $request->file('gambar')->move('images/',$request->file('gambar')->getClientOriginalName());
              $artikel->gambar = $request->file('gambar')->getClientOriginalName();
              $artikel->save();
          }
        return redirect('/admin');

    }
     public function delete($id)
    {    

         $artikel = artikel::find($id);
         $artikel->delete($artikel);
         return redirect('/admin');

        //
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
