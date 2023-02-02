<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CRUD extends Controller
{
    //
    public function Selection( Request $request){
        if(empty($request->pagination )){
            $pagination=5;
        }else{
            $pagination=$request->pagination;
        }
        $ordi = DB::table('ordinateur')->paginate(5);
        $nbrordi = DB::table('ordinateur')->count();
        return view("welcome",["ordi"=>$ordi]);
    }
    public function ajouter(Request $request){
        $request->validate([
            'ido' => 'required',
            'libele' => 'required',
            'marque' => 'required',
            'dateacha' => 'required',
            'prix' => 'required',
        ]);
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
    public function remplire($id){
        $ordinateur = DB::table('ordinateur')->where('ido',$id)->get();
            $data=[];
            $data['ido']=$ordinateur[0]->ido;
            $data['libele']=$ordinateur[0]->libele;
            $data['marque']=$ordinateur[0]->marque;
            $data['dateacha']=$ordinateur[0]->dateacha;
            $data['prix']=$ordinateur[0]->prix;
        return view('Update',$data);
    }
    public function delete($id){
        DB::table('ordinateur')->where('ido',$id)->delete();
        return redirect('/');
    }
    public function recherche(Request $request){
        $ordi = DB::table('ordinateur')->where('ido', 'like', '%' . $request->input('search') . '%')
                ->orWhere('libele', 'like', '%' . $request->input('search'). '%')
                ->orWhere('marque', 'like', '%' . $request->input('search') . '%')
                ->orWhere('prix', 'like', '%' . $request->input('search') . '%')->paginate();
        
        return view("welcome",["ordi"=>$ordi]);

    }
}
