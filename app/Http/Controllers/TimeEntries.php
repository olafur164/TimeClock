<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TimeEntries extends Controller
{
    public function index()
    {

    }
    public function clockIn($id)
    {
        $exists = checkIfExists($id);
        if($exists == 1) {
            $loggedIn = checkIfLoggedIn($id);
            if ($loggedIn == 1)
        }
        else 
    }
    protected function checkIfLoggedIn($id) {
        $results = DB::select('select * from timeentries where user_id = ? and logged_in = 1', [$id])
        if ($results[4] == 1) {
            return 1;
        } else { return 0; }
    }
    public function clockOut($id)
    {
        
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
