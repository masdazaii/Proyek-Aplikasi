<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    protected $table = 'user';
    //primary key = "id"
    protected $primaryKey = 'user_id';
    
    //disable created_at and updated_at
    public $timestamps = false;
    //fillable column
    protected $fillable = [
    	'user_id',
		'Nama', 
		'Password',
		'Alamat',
		'Email',
		'jenisKelaamin',	
		'NoHp' 
    ];
}
