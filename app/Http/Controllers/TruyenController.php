<?php

namespace App\Http\Controllers;
use App\truyen;
use App\chapter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TruyenController extends Controller
{
<<<<<<< HEAD
<<<<<<< HEAD
   

    public function showChapter($id,$idchap)

    {
       
        $chap = chapter::where('id', '=', $idchap)->select('*')->first();
        $truyen = truyen::where('id', '=', $chap->idtruyen)->select('*')->first();
        $otherchaps = chapter::where('idtruyen', '=', $chap->idtruyen )->select('*')->get();
        $nextchap = chapter::where('idtruyen', '=', $chap->idtruyen )->where('id','>',$idchap)->select('*')->first();
        $prevchap = chapter::where('idtruyen', '=', $chap->idtruyen )->where('id','<',$idchap)->orderByDesc('id')->select('*')->first();
        return view('/page/chapter' , compact('chap','truyen','otherchaps','nextchap','prevchap'));
    }
=======
    public function index()

    {
        $truyens = DB::table('truyen')->paginate(12);  
        return view('/page/home' , compact('truyens'));
    }

   
    
>>>>>>> remotes/origin/Chuen
=======
    

    public function show($id)

    {
        $truyen = truyen::where('id', '=', $id)->select('*')->first();
        $chaps = chapter::where('idtruyen', '=', $id)->select('*')->paginate(10); 
        return view('/page/truyen' , compact('truyen','chaps'));
    }

    
>>>>>>> remotes/origin/Huy
}
