<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

use App\TimeEntry;
use App\Employees;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Redirect;
use Carbon\Carbon;
use DB;
use Request;
use Validator;

class TimeEntriesController extends Controller
{
    public function index()
    {

    }
    public function clock()
    {
        $request = Request::all();
        $validator = Validator::make($request, [
            'userlogin' => 'required|min:3|max:11',
        ]);
        if ($validator->fails()) {
            return redirect('/')->withErrors($validator);
        }
        else if ($validator->passes()) {
        $id = $request['userlogin'];
            $exists = TimeEntry::checkIfExists($id);
            if($exists == 1) {
                $loggedIn = TimeEntry::checkIfLoggedIn($id);
                $date = date('Y-m-d H:i:s');
                $employee = Employees::getEmployee($id);
                if ($loggedIn == 1) {
                    DB::update('update timeentries set logged_in = 0, ClockOut = ? where user_id = ? and logged_in = 1', [$date, $id]);
                    \Session::flash('success', 'Útskráning tókst fyrir Starfsmann - ' . $employee->name);
                    return redirect('/');//->with('message', 'Útskráning tókst fyrir Starfsmann - ' . $id);
                } else {
                    DB::insert('insert into timeentries(employee_id, ClockIn, logged_in) values(?,?,?)', [$id, $date, 1]);
                    \Session::flash('success', 'Innskráning tókst fyrir Starfsmann - ' . $employee->name);
                    return redirect('/');//->with('message', 'Innskráning tókst fyrir Starfsmann - ' . $id);
                }
            }
                    \Session::flash('danger', 'Fann ekki starfsmann með númer: ' . $id);
            return redirect('/');//->with('message', 'Innskráning tókst fyrir Starfsmann - ' . $id);
        }
    }
}
