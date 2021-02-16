<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QUOTA_T_USER extends Model
{
	use HasFactory;

	public $timestamps = false;
	
	protected $table = 'QUOTA_T_USER' ;
	protected $fillable = ['USER_ID','USERNAME','PASSWORD','NAME','CREATION_DATE','LAST_UPD_DATE','UPD_USER_ID'];
}