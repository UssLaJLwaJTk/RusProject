<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QUOTA_T_ADDRESS extends Model
{
	use HasFactory;

	public $timestamps = false;
	
	protected $teble = 'QUOTA_T_ADDRESS' ; 
	protected $fillable = ['ADDRESS_CODE','APPLICANTS_CODE','HOUSE_NUMBER','PROVINCE_CODE'
    ,'DISTRICT_CODE','SUB_DISTRICT_CODE','LAST_UPD_DATE','UPD_USER_ID'];
}