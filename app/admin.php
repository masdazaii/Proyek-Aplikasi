<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $table = 'admin';
    //primary key = "id"
    protected $primaryKey = 'admin_id';
    
    //disable created_at and updated_at
    public $timestamps = false;
    //fillable column
    protected $fillable = [
    	'admin_id',
		'Nama', 
		'password',
		'Alamat',
		'jenisKelaamin',	
		'NoHp' 
    ];
}
