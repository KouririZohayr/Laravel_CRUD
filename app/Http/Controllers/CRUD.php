<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CRUD extends Controller
{
    //
    public function Selection(){
        $ordi = DB::table('ordinateur')->get();
        return view("welcome",["ordi"=>$ordi]);
    }
    public function ajouter(Request $request){
        DB::table('ordinateur')->insert(array(
        'ido'=>$request->input('ido'),
        'libele'=>$request->input('libele'),
        'marque'=>$request->input('marque'),
        'dateacha'=>$request->input('dateacha'),
        'prix'=>$request->input('prix'),
        ));
        return redirect('/');
    }
    public function update(Request $request){
        DB::table('ordinateur')->where('ido',$request->input('ido'))->update(array(
        'libele'=>$request->input('libele'),
        'marque'=>$request->input('marque'),
        'dateacha'=>$request->input('dateacha'),
        'prix'=>$request->input('prix'),
        ));
        return redirect('/');
    }
}
