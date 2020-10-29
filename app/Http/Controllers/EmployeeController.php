<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function addEmployee(Request $request){
        $employee = new Employee();
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->date_of_birth = $request->date_of_birth;
        $employee->salary = $request->salary;
        $employee->gender = $request->gender;
        $employee->status = $request->status;

        $employee->save();

        return redirect('view/employee');

    }

    public function viewEmployee(){
        $employees = Employee::all();

        return view('view_employee',['employees'=>$employees]);
    }
}
