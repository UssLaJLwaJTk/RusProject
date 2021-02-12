<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QUOTA_T_CLASS_LEVEL extends Model
{
	use HasFactory;

	public $timestamps = false;
	
	protected $teble = 'QUOTA_T_CLASS_LEVEL' ; 
	protected $fillable = ['CLASS_LEVEL_CODE','CLASS_LEVEL_NAME','CLASS_LEVEL_ADDREVIATED','LAST_UPD_DATE','UPD_USER_ID'];
}
