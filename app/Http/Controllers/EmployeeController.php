<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public static function index(Request $request)
    {
        $form = $request->all();
        $employees = Employee::list($form);

        return view('employee.index', [
            'employees' => $employees
        ]);
    }

    public static function create(Request $request)
    {
        $form = $request->all();

        Employee::create($form);

        return redirect("/");
    }
}
