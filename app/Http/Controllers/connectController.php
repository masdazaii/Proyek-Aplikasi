<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;
use Illuminate\Database\Eloquent\softDeletes;

class connectController extends Controller
{
    public function create(Request $request)
    {
    	// dd($request->first_name);
    	// query insert dengan eloquent
    	$c = new admin();
		$c->admin_id = $request->admin_id;
		$c->Nama = $request->Nama;
		$c->password = $request->password;
		$c->Alamat = $request->Alamat;
		$c->jenisKelamin = $request->jenisKelamin;
		$c->NoHp = $request->NoHp;
		$c->save();
    	return redirect('tabeluser')->with('popup',1);
    }
    public function update(Request $request, $admin_id){
    	//cek isi customer id
    	// dd($customer_id);
    	$c = admin::where('admin_id',$admin_id)->first();
		$c->admin_id = $request->admin_id;
		$c->Nama = $request->Nama;
		$c->password = $request->password;
		$c->Alamat = $request->Alamat;
		$c->jenisKelamin = $request->jenisKelamin;
		$c->NoHp = $request->NoHp;
		$c->save();
		return redirect('tabeluser')->with('popup',2);
    }
    public function delete(Request $request,$admin_id){
    	$c = Customer::find($admin_id);
    	$c->delete();
    	$c->save();
    	return redirect('tabeluser')->with('popup',3);
    }
}
