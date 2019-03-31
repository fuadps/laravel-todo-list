<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Traits\TimestampsTrait;
use App\Http\Traits\TasksTrait;

class Task extends Model
{
    use TimestampsTrait;
    use TasksTrait;

    public function getDates() {
        return ['created_at','updated_at','due_date'];
    }
    
    // define the table
    protected $table = 'tasks';
}
