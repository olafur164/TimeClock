<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

use App\TimeEntry;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Redirect;
use Carbon\Carbon;
use DB;
use Request;

class TimeEntries extends Controller
{
    public function index()
    {

    }
    public function clock()
    {
        $input = Request::all();
        $id = $input['userlogin'];
        $exists = timeentries::checkIfExists($id);
        if($exists == 1) {
            $loggedIn = timeentries::checkIfLoggedIn($id);
            $date = date('Y-m-d H:i:s');
            if ($loggedIn == 1) {
                DB::update('update timeentries set logged_in = 0, ClockOut = ? where user_id = ? and logged_in = 1', [$date, $id]);
                \Session::flash('success', 'Útskráning tókst fyrir Starfsmann ' . $id);
                return redirect('/');
            } else {
                DB::insert('insert into timeentries(user_id, ClockIn, logged_in) values(?,?,?)', [$id, $date, 1]);
                \Session::flash('success', 'Innskráning tókst fyrir Starfsmann' . $id);
                return redirect('/');
            }
        }
        else { 
            \Session::flash('danger', 'Þessi kóði er ekki skráður fyrir neinn starfsmann. ' . $id);
            return redirect('/');
        }
    }
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
    protected function login($id) {
    }
}
