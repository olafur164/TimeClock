<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeEntry extends Model
{
	protected $table = 'TimeEntries';

	protected $fillable = [
		'user_id',
		'clockIn',
		'clockOut',
		'logged_in'
	];
}
