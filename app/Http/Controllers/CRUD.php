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
        $ordi = DB::table('ordinateurs')->paginate(5);
        $nbrordi = DB::table('ordinateurs')->count();
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
        DB::table('ordinateurs')->insert(array(
            'ido'=>$request->input('ido'),
            'libele'=>$request->input('libele'),
            'marque'=>$request->input('marque'),
            'dateacha'=>$request->input('dateacha'),
            'prix'=>$request->input('prix'),
        ));
        return redirect('/');
    }
    public function update(Request $request){
        DB::table('ordinateurs')->where('ido',$request->input('ido'))->update(array(
            'libele'=>$request->input('libele'),
            'marque'=>$request->input('marque'),
            'dateacha'=>$request->input('dateacha'),
            'prix'=>$request->input('prix'),
        ));
        return redirect('/');
    }
    public function remplire($id){
        $ordinateurs = DB::table('ordinateurs')->where('ido',$id)->get();
            $data=[];
            $data['ido']=$ordinateurs[0]->ido;
            $data['libele']=$ordinateurs[0]->libele;
            $data['marque']=$ordinateurs[0]->marque;
            $data['dateacha']=$ordinateurs[0]->dateacha;
            $data['prix']=$ordinateurs[0]->prix;
        return view('Update',$data);
    }
    public function delete($id){
        DB::table('ordinateurs')->where('ido',$id)->delete();
        return redirect('/');
    }
    public function recherche(Request $request){
        $ordi = DB::table('ordinateurs')->where('ido', 'like', '%' . $request->input('search') . '%')
                ->orWhere('libele', 'like', '%' . $request->input('search'). '%')
                ->orWhere('marque', 'like', '%' . $request->input('search') . '%')
                ->orWhere('prix', 'like', '%' . $request->input('search') . '%')->paginate();
        
        return view("welcome",["ordi"=>$ordi]);

    }
}
