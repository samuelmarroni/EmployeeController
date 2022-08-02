<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $timestamps = false;

    public static function list($form = [])
    {
        $employee = Employee::where('id', '<>', null);

        if (@$form['position']) {
            $employee->where('position', $form['position']);
        }

        if (@$form['salary']) {
            $employee->where('salary', $form['salary']);
        }

        if (@$form['department']) {
            $employee->where('department_id', $form['department']);
        }

        return $employee->paginate(10);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public static function create($form)
    {
        $employee = new Employee();
        $employee->name = $form['name'];
        $employee->birthday = $form['birthday'];
        $employee->document = $form['document'];
        $employee->position = $form['position'];
        $employee->salary = $form['salary'];
        $employee->department_id = $form['department'];
        $employee->save();
    }
}
