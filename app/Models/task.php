<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    use HasFactory;

    protected $fillable = [
        'log',
        'employee_name',
        'type_of_report',
        'branch',
        'issue',
        'status'

    ];
}
