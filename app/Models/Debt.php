<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Debt extends Model
{
    protected $fillable = ['name', 'lastName', 'debt'];

    public static $validationRules = array(
        'firstName' => 'string|required',
        'lastName' => 'string|required',
        'debt' => 'integer|required',
    );



}
