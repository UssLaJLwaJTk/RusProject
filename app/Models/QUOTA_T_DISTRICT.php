<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QUOTA_T_DISTRICT extends Model
{
	use HasFactory;

	public $timestamps = false;
	
	protected $teble = 'QUOTA_T_DISTRICT' ; 
	protected $fillable = ['DISTRICT_CODE','PROVINCE_CODE','DISTRICT_NAME','LAST_UPD_DATE','UPD_USER_ID'];
}
