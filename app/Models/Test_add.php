<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class country extends Model
{
	use HasFactory;

	public $timestamps = false;
	
	protected $table = 'Test_add' ;
	protected $fillable = ['idTest_add','Test_addcol'];
}
