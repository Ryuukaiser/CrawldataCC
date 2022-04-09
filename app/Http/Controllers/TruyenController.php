<?php

namespace App\Http\Controllers;
use App\truyen;
use App\chapter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TruyenController extends Controller
{
    

    public function show($id)

    {
        $truyen = truyen::where('id', '=', $id)->select('*')->first();
        $chaps = chapter::where('idtruyen', '=', $id)->select('*')->paginate(10); 
        return view('/page/truyen' , compact('truyen','chaps'));
    }

    
}
