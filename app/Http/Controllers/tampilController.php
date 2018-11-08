<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\admin;
use App\pengguna;

class tampilController extends Controller
{
    public function tampil(){
    	return view('tampil');
    }

    function tabeladmin(){
    	$data['admin'] = admin::orderBy('Nama','desc')->get();
    	$data['admin'] = admin::where('delete_at',NULL)->get();

    	return view('tabeladmin',$data);
    }

    function tabeluser(){
    	$data['pengguna'] = admin::orderBy('Nama','desc')->get();
    	$data['pengguna'] = admin::where('delete_at',NULL)->get();

    	return view('tabeluser',$data);
    }

}
