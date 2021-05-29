<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    protected $fillable = ['name', 'lastName', 'age', 'groupId'];

    public static $validationRules = array(
        'firstName' => 'required|string',
        'lastName' => 'required|string',
        'age' => 'required|integer',
        'groupId' => 'group_id|integer',
    );

}
