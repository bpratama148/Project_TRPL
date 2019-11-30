<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\gejala;
use App\admin;
use App\hasil;
use App\diagnosa;

class DiagnosaController extends Controller
{

	 public function diagnosa()
    {
         $admin = admin::all();
         $diagnosa = diagnosa::all();
       
        return view('admin.diagnosa',['admin'=>$admin],['diagnosa' => $diagnosa]);
        
    }

    public function creatediagnosa()
    {
         $admin = admin::all();
         $diagnosa = diagnosa::all();
       
        return view('admin.tambahdiagnosa',['admin'=>$admin],['diagnosa' => $diagnosa]);
        
    }

    public function storediagnosa(Request $request)
    {
        
        
       

        $diagnosa = new diagnosa;
        $diagnosa->nama = $request->nama;
        $diagnosa->value = $request->value;
       
        
        
        $diagnosa->save();     
        
           
        return redirect('/admin-diagnosa');
    }
public function editdiagnosa($id)

    {
         $admin = admin::all();
        $diagnosa = diagnosa::find($id);
        return view('admin.editdiagnosa',['admin'=>$admin],['diagnosa' => $diagnosa]);
    }

    public function updatediagnosa(Request $request, $id)
    {
        $diagnosa = diagnosa::find($id);
         $diagnosa->update($request->all());
         
        
              $diagnosa->save();
          
        return redirect('/admin-diagnosa');

    }
      public function deletediagnosa($id)
    {    

         $diagnosa = diagnosa::find($id);
         $diagnosa->delete($diagnosa);
         return redirect('/admin-diagnosa');

        //
    }


    public function creategejala()
    {
         $admin = admin::all();
         $gejala = gejala::all();
       
        return view('admin.tambahgejala',['admin'=>$admin],['gejala' => $gejala]);
        
    }

public function storegejala(Request $request)
    {
        
        
        

        $gejala = new gejala;
        $gejala->nama = $request->nama;
        $gejala->kode = $request->kode;
        $gejala->value = $request->value;
        $gejala->save();     
        
            
        return redirect('/admin-gejala');
    }
public function editgejala($id)

    {
         $admin = admin::all();
        $gejala = gejala::find($id);
        return view('admin.editgejala',['admin'=>$admin],['gejala' => $gejala]);
    }

public function updategejala(Request $request, $id)
    {
        $gejala = gejala::find($id);
         $gejala->update($request->all());
         
       
              $gejala->save();
          
        return redirect('/admin-gejala');

    }
 public function deletegejala($id)
    {    

         $gejala = gejala::find($id);
         $gejala->delete($gejala);
         return redirect('/admin-gejala');

        //
    }


     public function index()
    {
        return view('user.diagnosa');
    }
     public function start()
    {
    	 $g1 = gejala::where('kode', ['G01'])->get();
    	 $g2 = gejala::where('kode', ['G02'])->get();
    	 $g3 = gejala::where('kode', ['G03'])->get();
    	 $g4 = gejala::where('kode', ['G04'])->get();
       $g5 = gejala::where('kode', ['G05'])->get();
       $g5 = gejala::where('kode', ['G05'])->get();
       $g6 = gejala::where('kode', ['G06'])->get();
       $g7 = gejala::where('kode', ['G07'])->get();
       $g8 = gejala::where('kode', ['G08'])->get();
       $g9 = gejala::where('kode', ['G09'])->get();
       $g10 = gejala::where('kode',['G10'])->get();
       $g11 = gejala::where('kode',['G11'])->get();
       $g12 = gejala::where('kode',['G12'])->get();
       $g13 = gejala::where('kode',['G13'])->get();
       $g14 = gejala::where('kode',['G14'])->get();
       $g15 = gejala::where('kode',['G15'])->get();
       $g16 = gejala::where('kode',['G16'])->get();
       $g17 = gejala::where('kode',['G17'])->get();
       $g18 = gejala::where('kode',['G18'])->get();
       $g19 = gejala::where('kode',['G19'])->get();
       $g20 = gejala::where('kode',['G20'])->get();
       $g21 = gejala::where('kode',['G21'])->get();

        return view('user.kuis',compact('g1','g2','g3','g4','g5','g6','g7','g8','g9','g10','g11','g12','g13','g14','g15','g16','g17','g18','g19','g20','g21'));
    }
    
public function store(Request $request)
    {
       
        $total = $request->g1 + $request->g2 + $request->g3 + $request->g4 + $request->g5 + $request->g6 + $request->g7 + $request->g8 + $request->g9 + $request->g10 + $request->g11 + $request->g12 + $request->g13 + $request->g14 + $request->g15 + $request->g16 + $request->g17 + $request->g18 + $request->g19 + $request->g20 + $request->g21 ; 


        $hasil = new hasil;
        $hasil->g1 = $request->g1;
        $hasil->g2 = $request->g2;
        $hasil->g3 = $request->g3;
        $hasil->g4 = $request->g4;
        $hasil->g5 = $request->g5;
        $hasil->g6 = $request->g6;
        $hasil->g7 = $request->g7;
        $hasil->g8 = $request->g8;
        $hasil->g9 = $request->g9;
        $hasil->g10 = $request->g10;
        $hasil->g11 = $request->g11;
        $hasil->g12 = $request->g12;
        $hasil->g13 = $request->g13;
        $hasil->g14 = $request->g14;
        $hasil->g15 = $request->g15;
        $hasil->g16 = $request->g16;
        $hasil->g17 = $request->g17;
        $hasil->g18 = $request->g18;
        $hasil->g19 = $request->g19;
        $hasil->g20 = $request->g20;
        $hasil->g21 = $request->g21;


        $hasil->total = $total;
        
        
        $hasil->save();     
        
           
        return redirect('/user-hasildiagnosa');
    }
    
     public function hasil()
    {
    	 $hasil = hasil::with('latepost')->get();
    	 $diagnosaA = diagnosa::where('value', ['10.4'])->get();
    	 $diagnosaB = diagnosa::where('value', ['10.8'])->get();
    	 $diagnosaC = diagnosa::where('value', ['11.6'])->get();


        return view('user.hasil',compact('diagnosaA','diagnosaB','diagnosaC','hasil'));
    }

     public function deletehasil($id)
    {    

      hasil::where('hasil_id',$id)->delete();
        
         return redirect('/pengguna-diagnosa');

        
    }
}
