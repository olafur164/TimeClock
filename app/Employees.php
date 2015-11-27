<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class Employees extends Model
{
	protected $table = "employees";
    protected $fillable = ['id', 'id2', 'name'];
    protected function getEmployee($id) {
        $employee = DB::table('employees')->where('id', $id)->first();
        return $employee;
    }
}
