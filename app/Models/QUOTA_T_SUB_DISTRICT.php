<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QUOTA_T_SUB_DISTRICT extends Model
{
	use HasFactory;

	public $timestamps = false;
	
	protected $table = 'QUOTA_T_SUB_DISTRICT' ; 
	protected $fillable = ['SUB_DISTRICT_CODE','DISTRICT_CODE','SUB_DISTRICT_NAME','POSTAL_CODE','LAST_UPD_DATE','UPD_USER_ID'];
}
