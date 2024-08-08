<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tin;

class Lab5Controller extends Controller
{
    public function index(){
        $data = Tin::all();
        return view('danhsach', ['data'=>$data]);
    }

    public function them(){
        return view('themtin');
    }

    public function them_(){
        $t = new Tin;
        $t->tieude = $_POST['tieude'];
        $t->tomtat = $_POST['tomtat'];
        $t->noidung = $_POST['noidung'];
        $t->idLT = $_POST['idLT'];
        $t->save();
        return redirect('/huuchien/ds');
    }

    public function xoa($id){
        $t = Tin::find($id);
        $t->delete();
        return redirect('/huuchien/ds');
    }
    
    public function capnhat($id){
        $t = Tin::find($id);
        return view('capnhat', ['tin'=> $t]);
    }

    public function capnhat_($id){
        $t = Tin::find($id);
        $t->tieude = $_POST['tieude'];
        $t->tomtat = $_POST['tomtat'];
        $t->noidung = $_POST['noidung'];
        $t->idLT = $_POST['idLT'];
        $t->save();
        return redirect('/huuchien/ds');
    }

}
