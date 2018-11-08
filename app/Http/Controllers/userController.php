<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pengguna;
use Illuminate\Database\Eloquent\softDeletes;

class userController extends Controller
{
    public function create(Request $request)
    {
    	// dd($request->first_name);
    	// query insert dengan eloquent
    	$c = new user();
		$c->user_id = $request->user_id;
		$c->Nama = $request->Nama;
		$c->Password = $request->Password;
		$c->Alamat = $request->Alamat;
		$c->Email =$request->Email;
		$c->jenisKelamin = $request->jenisKelamin;
		$c->NoHp = $request->NoHp;
		$c->save();
    	return redirect('tabeluser');
    }
    public function update(Request $request, $user_id){
    	//cek isi customer id
    	// dd($customer_id);
    	$c = user::where('user_id',$user_id)->first();
		$c->user_id = $request->user_id;
		$c->Nama = $request->Nama;
		$c->Password = $request->Password;
		$c->Alamat = $request->Alamat;
		$c->Email =$request->Email;
		$c->jenisKelamin = $request->jenisKelamin;
		$c->NoHp = $request->NoHp;
		$c->save();
		return redirect('tabeluser');
    }
    public function delete(Request $request,$user_id){
    	$c = user::find($user_id);
    	$c->delete_at = true;
    	$c-> save();
    	return redirect('tabeluser');
    }

}
