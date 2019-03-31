<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Traits\TimestampsTrait;

class Task extends Model
{
    use TimestampsTrait;
    
    // define the table
    protected $table = 'tasks';
}
