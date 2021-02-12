<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QUOTA_T_APPLICANTS extends Model
{
	use HasFactory;

	public $timestamps = false;
	
	protected $teble = 'QUOTA_T_APPLICANTS' ; 
	protected $fillable = ['APPLICANTS_CODE','ID_CARD_NUMBER','SCHOOL_CODE','COURSE_CODE'
    ,'NAME_PREFIX_CODE','FIRST_NAME_TH','LAST_NAME_TH','FIRST_NAME_EN','LAST_NAME_EN'
    ,'GENDER','CLASS_LEVEL_CODE','CREDIT','PERSONNEL_CODE','TELEPHONE','ID_LINE','EMAIL'
    ,'CREATION_DATE'];
}
