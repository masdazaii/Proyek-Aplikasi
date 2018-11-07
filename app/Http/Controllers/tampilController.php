<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\admin;

class tampilController extends Controller
{
    public function tampil(){
    	return view('tampil');
    }

    function tabeluser(){
        $data['admin'] = DB::table('admin')->get();

    	return view('tabeluser',$data);
    }

}
