<?php 

namespace App\Http\Traits;

use Carbon\Carbon;


trait TasksTrait {
    public $dueDateFormmating = true;

    public function getDueDateAttribute($value) {
        if ($this->dueDateFormmating) {
            return Carbon::parse($value)->toFormattedDateString();
        }
        else {
            return $this->attributes['due_date'] = $value;
        }
    }
}

?>