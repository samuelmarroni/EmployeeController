<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public static function index(Request $request)
    {
        $form = $request->all();
        $departments = Department::list($form);

        return view('department.index', [
            'departments' => $departments
        ]);
    }
}
