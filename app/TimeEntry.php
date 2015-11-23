<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class TimeEntry extends Model
{
	protected $table = 'TimeEntries';

	protected $fillable = [
		'userLogin'
	];
    protected function checkIfLoggedIn($id) {
        $results = DB::select('select * from timeentries where user_id = ? and logged_in = 1', [$id]);
        if ($results[4] == 1) {
            return 1;
        } else { return 0; }
    }
    protected function checkIfExists($id) {
        $results = $DB::select('select * from users where id = ?', [$id]);
        if($results[0] == $id) {
            return 1;
        }
        else { return 0; }
    }
    protected function login($id) {
        DB::insert('insert into timeentries (user_id, ClockIn, ClockOut, logged_in) values (?, ?, ?, ?)', [$id, now(), NULL, 1]);
    }
}
