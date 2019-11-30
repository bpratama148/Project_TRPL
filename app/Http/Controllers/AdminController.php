<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\gejala;
use App\artikel;
use App\admin;
use App\dokter;
use App\forum;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = artikel::all();
        $admin = admin::all();
       
        return view('admin.index',['admin'=>$admin],['artikel' => $artikel]);
        //
    }
     public function dokter()
    {
        $dokter = dokter::all();
        $admin = admin::all();
       
        return view('admin.dokter',['admin'=>$admin],['dokter' => $dokter]);
        //
    }
    public function web()
    {
        
        return view('admin.web');
        //
    }
    public function gejala()
    {
         $gejala = gejala::all();
         $admin = admin::all();
        return view('admin.gejala',compact('gejala','admin'));
       
    }
     public function artikel()
    {
        $artikel = artikel::all();
        
        return view('admin.artikel',['artikel' => $artikel]);
        
    }

    public function forum()
    {
        $forum = forum::all();
       return view('admin.forum',['forum' => $forum]);
    }
    public function adminforum()
    {
       $forum = forum::all();
        $admin = admin::all();
       
        return view('admin.admforum',['admin'=>$admin],['forum' => $forum]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
