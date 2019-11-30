<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\admin;
use App\dokter;
class DataDokterController extends Controller
{
    public function create()
    {
         $admin = admin::all();
         $dokter = dokter::all();
       
        return view('admin.tambahdokter',['admin'=>$admin],['dokter' => $dokter]);
        
    }

/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
public function store(Request $request)
    {
        
        
         $dokter = "NO";
        if($request->hasFile('foto'))
        {
            $destination = "foto";
            $foto = $request->file('foto');
            $foto->move($destination, $foto->getClientOriginalName());
            $request->foto = $request->file('foto')->getClientOriginalName();
            $dokter = 'Ya';

        }
        
        if($dokter=='Ya'){

        $dokter = new dokter;
        $dokter->name = $request->name;
        $dokter->profesi = $request->profesi;
        $dokter->bidang = $request->bidang;
        $dokter->kontak = $request->kontak;
        $dokter->alamat = $request->alamat;
        $dokter->foto = $request->foto;
        $dokter->email = $request->email;
        $dokter->password = $request->password;
        $dokter->save();     
        
        }      
        return redirect('/admin-dokter');
    }
    public function edit($id)

    {
         $admin = admin::all();
        $dokter = dokter::find($id);
        return view('admin.editdokter',['admin'=>$admin],['dokter' => $dokter]);
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
        $dokter = dokter::find($id);
         $dokter->update($request->all());
         
        if ($request ->hasFile('foto')) {
            
              $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
              $dokter->foto = $request->file('foto')->getClientOriginalName();
              $dokter->save();
          }
        return redirect('/admin-dokter');

    }
     public function delete($id)
    {    

         $dokter = dokter::find($id);
         $dokter->delete($dokter);
         return redirect('/admin-dokter');

        //
    }
}
