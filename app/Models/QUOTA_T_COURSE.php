<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QUOTA_T_COURSE extends Model
{
	use HasFactory;

	public $timestamps = false;
	
	protected $teble = 'QUOTA_T_COURSE' ; 
	protected $fillable = ['COURSE_CODE','COURE_NAME','LAST_UPD_DATE','UPD_USER_ID'];
}
