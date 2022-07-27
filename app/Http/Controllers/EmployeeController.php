<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public static function index(Request $request)
    {
        $form = $request->all();
        $employees = Employee::list($form);

        return view('employee.index', [
            'employees' => $employees,
            'departments' => Department::all()
        ]);
    }

    public static function create()
    {
        return view('employee.create');
    }

    public static function createForm(Request $request)
    {
        $form = $request->all();

        Employee::create($form);

        return redirect("/");
    }
}
