<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QUOTA_T_PROVINCE extends Model
{
	use HasFactory;

	public $timestamps = false;
	
	protected $teble = 'QUOTA_T_PROVINCE' ; 
	protected $fillable = ['PROVINCE_CODE','PROVINCE_NAME','LAST_UPD_DATE','UPD_USER_ID'];
}
