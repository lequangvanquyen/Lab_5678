<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TinController extends Controller
{
    public function index(){
        return view('chitiet');
    }

    public function tintrongloai($id){

        $tintrongloai = DB::table('tin')
        ->select('id','tieude','tomtat','idLT')
        ->where('idLT',$id)
        ->orderBy('ngaydang','desc')
        ->get();

        return view('tintrongloai', ['tintrongloai'=>$tintrongloai, 'idLT'=>$id]);
    }

    public function chitiet($id){

        $chitiet = DB::table('tin')
        ->where('id',$id)
        ->get();

        return view('chitiet', ['chitiet'=>$chitiet]);
    }

    public function dangky(){
        return view('dangky');
    }
    public function dangnhap(){
        return view('dangnhap');
    }

}
