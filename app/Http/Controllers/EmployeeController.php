<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public static function index()
    {
        $employees = Employee::all()->toArray();

        return view('employee.index', [
            'employees' => $employees
        ]);
    }

    public static function create(Request $request): void
    {
        $form = $request->all();

        $employee = new Employee();
        $employee->name = $form['name'];
        $employee->birthday = $form['birthday'];
        $employee->document = $form['document'];
        $employee->position = $form['position'];
        $employee->salary = $form['salary'];
        $employee->department_id = $form['department'];
    }
}
