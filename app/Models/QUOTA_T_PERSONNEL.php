<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QUOTA_T_PERSONNEL extends Model
{
	use HasFactory;

	public $timestamps = false;
	
	protected $teble = 'QUOTA_T_PERSONNEL' ; 
	protected $fillable = ['PERSONNEL_CODE','PERSONNEL_NAME','PERSONNEL_LASTNAME','LAST_UPD_DATE','UPD_USER_ID'];
}

