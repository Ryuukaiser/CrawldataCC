<?php

namespace App\Http\Controllers;
use App\truyen;
use App\chapter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TruyenController extends Controller
{
    public function index()

    {
        $truyens = DB::table('truyen')->paginate(12);  
        return view('/page/home' , compact('truyens'));
    }

   
    
}
