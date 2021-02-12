<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QUOTA_T_NAME_PREFIX extends Model
{
	use HasFactory;

	public $timestamps = false;
	
	protected $teble = 'QUOTA_T_NAME_PREFIX' ; 
	protected $fillable = ['NAME_PREFIX_CODE','NAME_PREFIX_TH','NAME_PREFIX_EN','LAST_UPD_DATE','UPD_USER_ID'];
}

