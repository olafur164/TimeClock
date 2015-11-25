<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class TimeEntry extends Model
{
	protected $table = 'TimeEntries';

	protected $fillable = [
		'userlogin'
	];
	
    protected function checkIfLoggedIn($id) {
        $results = DB::table('timeentries')->where('user_id', $id)->where('logged_in', '1')->value('logged_in');
        if ($results == 1) {
            return 1;
        }
        else { return 0; }
    }
    protected function checkIfExists($id) {
        $results = DB::select('select * from users where id = ?', [$id]);
        if($results) {
            return 1;
        }
        else { return 0; }
    }
}
