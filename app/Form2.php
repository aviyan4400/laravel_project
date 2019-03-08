<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form2 extends Model
{
      protected $fillable=[
			'name',
			'email',
			'phone',
			'nationality',
			'address',
			'personal',
			'skill',
			'technical',
			'wyear',
			'detail',
			'eyear1',
			'edetail1',
			'eyear2',
			'edetail2',
			'interest',
    ];
}
