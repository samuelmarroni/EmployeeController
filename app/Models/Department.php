<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public $timestamps = false;

    public static function list($form = [])
    {
        $department = Department::where('id', '<>', null);

        if (@$form['name']) {
            $department->where('name', $form['name']);
        }

        return $department->paginate(10);
    }

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}
