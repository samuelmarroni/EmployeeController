<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public static function index()
    {
        $departments = Department::all()->toArray();

        return view('department.index', [
            'departments' => $departments
        ]);
    }

    public static function create(Request $request): void
    {
        $form = $request->all();

        $department = new Department();
        $department->name = "TI";
        $department->save();
    }

}
